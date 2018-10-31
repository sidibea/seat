<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/11/16
 * Time: 3:31 AM
 */

namespace NB\MainBundle\Controller;


use NB\MainBundle\Entity\Income;
use NB\MainBundle\Entity\Outcome;
use NB\MainBundle\Entity\Reservation;
use NB\MainBundle\Entity\Ticket;
use NB\MainBundle\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Unirest;

class MainController extends Controller{

    public function indexAction(){

        //  $cities = Unirest\Request::get('http://localhost/nextapi/web/app_dev.php/cities/name')->body;
     //   dump(array($cities)); exit;
        return $this->render('NBMainBundle::index.html.twig');
    }

    public function dashboardAction(Request $request){
        $user = $this->getUser()->getId();

        $villes =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Ville') ->findAll();

        $form = $this->get('form.factory')->create(new SearchType());



        $nombreBilletVendu = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Reservation') ->NombrebilletVenduCeMois($user);
        $cumulCommission = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Reservation') ->CumulComissionCeMois($user);
        $solde =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Income') ->getStatus($user);
        $reservationRecente =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Reservation') ->reservationRecente($user);


        return $this->render('NBMainBundle::dashboard.html.twig', array(
            'villes' => $villes,
            'nombreBilletVendu' => $nombreBilletVendu,
            'cumulCommission' => $cumulCommission,
            'solde' => $solde,
            'reservationRecente' => $reservationRecente,
            'form' => $form->createView()

        ));
    }

    public function searchAction(Request $request){
        $from = $request->get('from');
        $to = $request->get('to');

        $dateJ = date("Y-m-d", strtotime($request->get('doj')));

       // dump($dateJ); exit;

        $travel = $this->get('doctrine.orm.entity_manager')
            ->getRepository('NBMainBundle:Voyages')
            ->getTravelByRoute($from, $to, date("d-m-Y", strtotime($dateJ)));
        // dump($travel); exit;

        return $this->render('NBMainBundle::search.html.twig', array(
            'travel' => $travel,
            'dateJ' => $dateJ,
            'from' =>  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Ville') ->find($from),
            'to' =>  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Ville') ->find($to)
        ));

    }



    public function custInfoAction($travel, $dateJ, Request $request){
        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $travel_obj =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Voyages') ->find($travel);
        $solde =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Income') ->getStatus($user->getId());
      $count =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Reservation') ->getTotalRows()->getId() + 1;
       // dump(new \datetime($dateJ)); exit;
        if($request->isXmlHttpRequest()){

            $reservation = new Reservation();
            $ticket = new Ticket();
            $outcome = new Outcome();
            $nom_passager = $request->get('nom');
            $sexe = $request->get('gender');
            $age = $request->get('age');
            $mobile = $request->get('mobile');
            $email = $request->get('email');
            $pointEmbarquement = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:PointEmbarquement') ->find($request->get('bordingPoint'));



            if($solde < $travel_obj->getPrix() ){

                return new JsonResponse([
                    'success' => false,
                    'message' => 'Votre solde est insuffisent pour la transaction demandée. Merci de recharger votre compte',
                    'solde' => $solde
                ]);
            }elseif(strtotime($dateJ) <=  date('Y-m-d') ){
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Votre date de voyage est incorrect',
                ]);

            }else{
                $deducted =  ($travel_obj->getPrix() - (($travel_obj->getPrix() * 4)/100));

                $reservation->setDoj($dateJ);
                $reservation->setVoyages($travel_obj);
                $reservation->setChannel('seatseller');
                $reservation->setPointEmbarquement($pointEmbarquement);
                $reservation->setChannelId($user->getId());
                $reservation->setSeats('1');
                $reservation->setConfirmed(true);
                $reservation->setDateAdd(new \datetime);
                $reservation->setDateUpd(new \datetime);

                $em->persist($reservation);

                $ticketNo =  $user->getId().
                    ( ( $travel_obj->getAxes()->isTypeBus() == 0)?'O':'C').
                    strtoupper(substr($travel_obj->getAxes()->getSource()->getNom(), 0, 1).substr($travel_obj->getAxes()->getDestination()->getNom(), 0, 2)).
                    $count;

                $ticket->setNom($nom_passager);
                $ticket->setAge($age);
                $ticket->setGender($sexe);
                $ticket->setTelephone($mobile);
                $ticket->setEmail($email);
                $ticket->setTicketNo($ticketNo);

                $reservation->setTickets($ticket);

                $em->persist($reservation);
                $em->flush();

                $outcome->setMontant($deducted);
                $outcome->setReservation($reservation);
                $outcome->setDatePaiement(new \datetime);
                $outcome->setSeatseller($user);
                $outcome->setCreatedAt(new \datetime);

                $em->persist($outcome);
                $em->flush();

                return new JsonResponse([
                    'success' => true,
                    'message' => 'Votre reservation a éffectué avec succès.',
                    'booking' => $reservation->getId()
                ]);

            }

        }


        return $this->render('NBMainBundle::custInfo.html.twig', array(
            'travel' => $travel_obj,
            'dateJ' => $dateJ
        ));

    }


    public function confirmedAction($id, Request $request)
    {

        $reservation = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Reservation')->find($id);
        // $ticket = $reservation->getTickets();

        return $this->render('NBMainBundle::confirmed.html.twig', array(
            'reservation' => $reservation,
            // 'ticket' => $ticket

        ));
    }

    public function printAction(Request $request){

        if($request->isXmlHttpRequest()){
            $id = $request->get('ticketno');
            $reservation =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Reservation') ->getTicket($id);

            if($reservation == null ){
                return new JsonResponse([
                    'success' => false,
                    'Numero du ticket est invalide.'
                ]);
            }else{
                return new JsonResponse([
                    'success' => true,
                    'reservation' => $reservation->getId(),
                    'message' => 'Impression'
                ]);
            }
        }
    }

    public function mybookingsAction(){
        $user = $this->getUser();

        $reservation = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Reservation') ->listeReservation($user->getId());

        return $this->render('NBMainBundle::mybookings.html.twig', [
            'reservation' => $reservation
        ]);
    }

    public function historyAction(Request $request){
        $user = $this->getUser();

        //  $cities = Unirest\Request::get('http://localhost/nextapi/web/app_dev.php/cities/name')->body;
        //   dump(array($cities)); exit;

        $history = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Income') ->getHistory($user->getId());

        if($request->getMethod() == 'GET'){
            $from = date("Y-m-d", strtotime($request->get('start')));
            $to = date("Y-m-d", strtotime($request->get('end')));

            $history = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Income') ->getHistory($user->getId(), $from, $to);

        }

        return $this->render('NBMainBundle::history.html.twig', array(
            'history' => $history
        ));

    }

    public function accountrechargeAction(Request $request){
        $solde =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Income') ->getStatus($this->getUser()->getId());

        $user = $this->getUser();

        if($request->isXmlHttpRequest()){
            $montant = $request->get('amount');
            $mobile = str_replace("-", "",  $request->get('mob'));

            $income = new Income();
            $em = $this->getDoctrine()->getManager();

            $OMRequest = [
                'endUserId' => 'tel:+'.$mobile,
                'transactionOperationStatus' => 'Charged',
                'chargingInformation' => [
                    'description' => 'Recharge de compte seatseller',
                    'amount' => (int) $montant,
                    'currency' => 'XOF',
                ],
                'chargingMetaData' => [
                    'serviceID' => 'SeatSeller recharge',
                    'productID' => 'SEATSELLER #'.$user->getId(),
                ],
                'referenceCode' => 'nextBus R#'.uniqid(),
                'clientCorrelator' => 'NextBus #'.uniqid()
            ];

            $headers = array('Accept' => 'application/json', 'Authorization' => 'Bearer fc8ef78b9a13da650c2bcfa1b865737', 'Content-Type' => 'application/json');
            $body = Unirest\Request\Body::json($OMRequest);
            $no_encode = urlencode('tel:+'.$mobile);



            $response = Unirest\Request::post("https://api.sdp.orange.com/payment/v1/".$no_encode."/transactions/amount", $headers, $body);

            //return $response;
            if($response->code == '201'){

                $income->setMontant($montant);
                $income->setUsers($user);
                $income->setDateRecharge(new \datetime);
                $income->setCreatedAt(new \datetime);

                $em->persist($income);
                $em->flush();

                return new JsonResponse([
                    'success' => true,
                    'message' => 'votre Compte a été bien été crédité.'
                ]);

            }elseif($response->code == '500'){
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Votre solde est insuffisant pour la transaction demande.',
                    'code' => $response->body
                ]);

            }elseif($response->code == '403'){
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Montant maximum autorisé est dépassé.',
                    'code' => $response->code

                ]);
            }else{
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Il y a eu une erreur lors de la transaction.',
                    'code' => $response->body
                ]);

            }
        }

        return $this->render('NBMainBundle::recharge.html.twig', array(
            'solde' => $solde
        ));
    }




}