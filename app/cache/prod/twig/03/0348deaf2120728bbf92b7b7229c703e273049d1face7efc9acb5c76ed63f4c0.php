<?php

/* NBMainBundle::confirmed.html.twig */
class __TwigTemplate_050c1aa05d6f770f1bf20d4e0127fcbde34adb0e2f2ea2b487389a934155f8b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html><head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <style type=\"text/css\" media=\"print\">
        .noprint
        { display: none; }
    </style>
</head>
<body>
<div style=\"width:1000px; height:1300px; margin:0 auto; background:white; padding:20px 20px 20px 20px; font-family: Century Gothic,Verdana,Geneva,sans-serif; background-color:#f4f4f4;\">
    <div style=\"width:100%;float:left;\">
        <div style=\"width:50%; float:left;\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/logo2.png"), "html", null, true);
        echo "\" width=\"220\" height=\"90\" alt=\"logo nextbus\" />
        </div>


    </div>
    <p style=\"font-size:19px;color:black;text-align:center;\">E-Ticket/Reservation </p>

    <div style=\"width:930px; height:500px; margin:0 auto; background:white; padding:20px 20px 20px 20px; font-family: Century Gothic,Verdana,Geneva,sans-serif;\">
        <div style=\"width:100%;float:left;\">

            <div style=\"width:40%;float:left;\">

                <div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;\">Numero PNR :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "tickets", array()), "ticketNo", array()), "html", null, true);
        echo "</div>


                </div>

                <div style=\"width:100%;float:left; border-bottom: 2px solid #eeeeee;padding:10px;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464; font-size: 14px;  font-weight: 400;\">Compagnie de transport :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "voyages", array()), "compagnie", array()), "nom", array()), "html", null, true);
        echo "</div>


                </div>

                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                <div style=\"width:50%;float:left;  color: #666464;
        font-size: 14px;
        font-weight: 400;\">Trip Code :</div>
                <div style=\"width:50%;float:left;text-align:right; color: #161616;
        font-size: 14px;
        font-weight: 400;\">2000EKMSHE</div>


                </div-->
                <div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;\">Nombre de places :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "voyages", array()), "axes", array()), "capacite", array()), "html", null, true);
        echo "</div>


                </div>
                <div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;\">Heure de depart :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;\">";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "voyages", array()), "heureDepart", array()), "H:i"), "html", null, true);
        echo "</div>


                </div>
                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                <div style=\"width:50%;float:left;  color: #666464;
        font-size: 14px;
        font-weight: 400;\">Bank Txn. No. :</div>
                <div style=\"width:50%;float:left;text-align:right; color: #161616;
        font-size: 14px;
        font-weight: 400;\">BKVB3676375626</div>


                </div-->


                <div style=\"width:100%;float:left;padding:10px;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: black; font-size: 14px; font-weight: 600;\">NO/S PLACE :</div>
                    <div style=\"width:50%;float:left;text-align:right; color:  black; font-size: 14px; font-weight: 400;\">NON DEFINI</div>

                </div>



            </div>


            <div style=\"width:7%;float:left;\">&nbsp;</div>

            <div style=\"width:53%;float:left;\">
                <div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;\">Date de Voyage :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;\">";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "doj", array()), "d-m-Y"), "html", null, true);
        echo "</div>

                </div>
                <div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;\">Point d'embarquement :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "PointEmbarquement", array()), "nom", array()), "html", null, true);
        echo " </div>


                </div>
                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                <div style=\"width:50%;float:left;  color: #666464;
        font-size: 14px;
        font-weight: 400;\">Platform Number :</div>
                <div style=\"width:50%;float:left;text-align:right; color: #161616;
        font-size: 14px;
        font-weight: 400;\"></div>


                </div-->
                <div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;\">Ville de depart :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;\">";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "voyages", array()), "axes", array()), "source", array()), "nom", array()), "html", null, true);
        echo "</div>

                </div>
                <div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;\">Destination :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;\">";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "voyages", array()), "axes", array()), "destination", array()), "nom", array()), "html", null, true);
        echo "</div>

                </div>
                <div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;\">Tarif :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;\">";
        // line 132
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "voyages", array()), "prix", array()), 0, ".", " "), "html", null, true);
        echo " FCFA</div>

                </div>

                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                <div style=\"width:50%;float:left;  color: #666464;
        font-size: 14px;
        font-weight: 400;\">Service Start Place :</div>
                <div style=\"width:50%;float:left;text-align:right; color: #161616;
        font-size: 14px;
        font-weight: 400;\">ERNAKULAM</div>


                </div>
                <div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                <div style=\"width:50%;float:left;  color: #666464;
        font-size: 14px;
        font-weight: 400;\">Time of Departure :</div>
                <div style=\"width:50%;float:left;text-align:right; color: #161616;
        font-size: 14px;
        font-weight: 400;\">20:00 Hrs.</div>


                </div-->

                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                    <div style=\"width:50%;float:left;  color: #666464;
            font-size: 14px;
            font-weight: 400;\">Service End Point :</div>
                    <div style=\"width:50%;float:left;text-align:right; color: #161616;
            font-size: 14px;
            font-weight: 400;\">SHENCOTTAH</div>


                    </div-->
                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                <div style=\"width:50%;float:left;  color: #666464;
        font-size: 14px;
        font-weight: 400;\">Passenger End Point :</div>
                <div style=\"width:50%;float:left;text-align:right; color: #161616;
        font-size: 14px;
        font-weight: 400;\">DINDIGUL</div>


                </div-->
                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                <div style=\"width:50%;float:left;  color: #666464;
        font-size: 14px;
        font-weight: 400;\">Route No :</div>
                <div style=\"width:50%;float:left;text-align:right; color: #161616;
        font-size: 14px;
        font-weight: 400;\">730</div>


                </div-->

                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                <div style=\"width:50%;float:left;  color: #666464;
        font-size: 14px;
        font-weight: 400;\">Corporation :</div>
                <div style=\"width:50%;float:left;text-align:right; color: #161616;
        font-size: 14px;
        font-weight: 400;\">SETC</div>


                </div-->
                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

                <div style=\"width:50%;float:left;  color: #666464;
        font-size: 14px;
        font-weight: 400;\">OB Reference No.:</div>
                <div style=\"width:50%;float:left;text-align:right; color: #161616;
        font-size: 14px;
        font-weight: 400;\">OB4152076</div>


                </div-->

                <!--div style=\"width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;\">

            <div style=\"width:50%;float:left;  color: #666464;
    font-size: 14px;
    font-weight: 400;\">OB Reference No.:</div>
            <div style=\"width:50%;float:left;text-align:right; color: #161616;
    font-size: 14px;
    font-weight: 400;\">OB4152076</div>


            </div-->

            </div>



        </div>

        <div style=\"width:100%;margin-top:25px;float:left;\">


            <p style=\"font-size:19px;color:black;text-align:center;\"> INFORMATION PASSAGER</p>

            <div style=\"width:100%;float:left; color:white;  padding: 15px 0; font-size:12px;background-color:#525254;margin-top:7px;font-weight:500;\">


                <div style=\"font-size:14px;width:26%;float:left;padding-left:5px;\">
                    Nom

                </div>

                <div style=\"font-size:14px;width:20%;float:left;\">
                    Age
                </div>


                <div style=\"font-size:14px;width:27%;float:left;\">
                    Sexe
                </div>



                <div style=\"font-size:14px;width:26%;float:left;\">
                     No Place
                </div>



            </div>

            <div style=\"width:100%; float:left; color:black;  padding: 15px 0; font-size:12px;background-color:white;margin-top:7px;font-weight:500;\">


                <div style=\"font-size:14px;width:26%;float:left;padding-left:5px;\">
                    ";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "tickets", array()), "nom", array()), "html", null, true);
        echo "

                </div>

                <div style=\"font-size:14px;width:20%;float:left;\">
                    ";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "tickets", array()), "age", array()), "html", null, true);
        echo " ans
                </div>


                <div style=\"font-size:14px;width:27%;float:left;\">
                    ";
        // line 280
        if (($this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "tickets", array()), "gender", array()) == "H")) {
            echo "HOMME ";
        } else {
            echo " FEMME ";
        }
        // line 281
        echo "                </div>



                <div style=\"font-size:14px;width:26%;float:left;\">
                    NON DEFINI
                </div>



            </div>


        </div>


        <div style=\"float:left; width:96.3%;    border-bottom-right-radius: 8px; border-bottom-left-radius: 8px; padding:20px 12px 20px 12px;  \">
            <div style=\"width:100%; float:left; font-size:16px; padding:0 0 10px 0;color: #404043;font-weight:500;\"> IMPORTANT</div>
            <div style=\"width:100%; float:left; color:#666262; font-size:13px; line-height:25px;\">

               Le(s) siège(s) réservés sous ce billet n'est/ne sont pas transférable(s).<br>
                Ce billet électronique est valable uniquement pour le service de bus spécifié dans le présent document.<br>
                Ce billet électronique doit être sur le passager pendant le voyage avec une carte d'identité du<br>
                passager dont le nom figure ci-dessus.<br>
                Veuillez conserver le billet en toute sécurité jusqu'à la fin du voyage.<br>
                Please show the ticket at the time of checking.<br>
                La compagnie de transport se réserve le droit de modifier ou d'annuler la classe de service.<br>
                Le temps est au format d'heure  24 heures (24HH: MM).<br>
                Les demi-billet admissible pour les enfants de 3 à 12 ans. Les enfants de plus de 130 cm de hauteur seront facturés<br>
                plein tarif à moins que le certificat de preuve d'âge original ne soit produit au moment du voyage<br>
            </div>

            <div style=\"width:100%; float:left; color:#666262; font-size:13px; line-height:22px;text-align:center;\">


             <br>   <a href=\"";
        // line 316
        echo $this->env->getExtension('routing')->getPath("nb_main_dasboard");
        echo "\" style=\"background-color:#E24648;font-size:15px;width:200px; text-decoration: none; padding:10px;border:none;color:white;margin-top:50px;\" class=\"noprint\">Retourner à l'acceuil</a>

            </div>
        </div>



    </div>









</div>
<script>
    window.print();
</script>
</body></html>";
    }

    public function getTemplateName()
    {
        return "NBMainBundle::confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 316,  342 => 281,  336 => 280,  328 => 275,  320 => 270,  179 => 132,  170 => 126,  161 => 120,  140 => 102,  131 => 96,  93 => 61,  83 => 54,  61 => 35,  50 => 27,  32 => 12,  19 => 1,);
    }
}
/* <html><head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*     <style type="text/css" media="print">*/
/*         .noprint*/
/*         { display: none; }*/
/*     </style>*/
/* </head>*/
/* <body>*/
/* <div style="width:1000px; height:1300px; margin:0 auto; background:white; padding:20px 20px 20px 20px; font-family: Century Gothic,Verdana,Geneva,sans-serif; background-color:#f4f4f4;">*/
/*     <div style="width:100%;float:left;">*/
/*         <div style="width:50%; float:left;">*/
/*             <img src="{{ asset('assets/images/logo2.png') }}" width="220" height="90" alt="logo nextbus" />*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/*     <p style="font-size:19px;color:black;text-align:center;">E-Ticket/Reservation </p>*/
/* */
/*     <div style="width:930px; height:500px; margin:0 auto; background:white; padding:20px 20px 20px 20px; font-family: Century Gothic,Verdana,Geneva,sans-serif;">*/
/*         <div style="width:100%;float:left;">*/
/* */
/*             <div style="width:40%;float:left;">*/
/* */
/*                 <div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;">Numero PNR :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;">{{ reservation.tickets.ticketNo }}</div>*/
/* */
/* */
/*                 </div>*/
/* */
/*                 <div style="width:100%;float:left; border-bottom: 2px solid #eeeeee;padding:10px;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464; font-size: 14px;  font-weight: 400;">Compagnie de transport :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;">{{ reservation.voyages.compagnie.nom }}</div>*/
/* */
/* */
/*                 </div>*/
/* */
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                 <div style="width:50%;float:left;  color: #666464;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">Trip Code :</div>*/
/*                 <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">2000EKMSHE</div>*/
/* */
/* */
/*                 </div-->*/
/*                 <div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;">Nombre de places :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;">{{ reservation.voyages.axes.capacite }}</div>*/
/* */
/* */
/*                 </div>*/
/*                 <div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;">Heure de depart :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;">{{ reservation.voyages.heureDepart | date('H:i') }}</div>*/
/* */
/* */
/*                 </div>*/
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                 <div style="width:50%;float:left;  color: #666464;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">Bank Txn. No. :</div>*/
/*                 <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">BKVB3676375626</div>*/
/* */
/* */
/*                 </div-->*/
/* */
/* */
/*                 <div style="width:100%;float:left;padding:10px;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: black; font-size: 14px; font-weight: 600;">NO/S PLACE :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color:  black; font-size: 14px; font-weight: 400;">NON DEFINI</div>*/
/* */
/*                 </div>*/
/* */
/* */
/* */
/*             </div>*/
/* */
/* */
/*             <div style="width:7%;float:left;">&nbsp;</div>*/
/* */
/*             <div style="width:53%;float:left;">*/
/*                 <div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;">Date de Voyage :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;">{{ reservation.doj | date('d-m-Y')  }}</div>*/
/* */
/*                 </div>*/
/*                 <div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;">Point d'embarquement :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;">{{ reservation.PointEmbarquement.nom }} </div>*/
/* */
/* */
/*                 </div>*/
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                 <div style="width:50%;float:left;  color: #666464;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">Platform Number :</div>*/
/*                 <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*         font-size: 14px;*/
/*         font-weight: 400;"></div>*/
/* */
/* */
/*                 </div-->*/
/*                 <div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;">Ville de depart :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;">{{ reservation.voyages.axes.source.nom }}</div>*/
/* */
/*                 </div>*/
/*                 <div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;">Destination :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;">{{ reservation.voyages.axes.destination.nom }}</div>*/
/* */
/*                 </div>*/
/*                 <div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464; font-size: 14px; font-weight: 400;">Tarif :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616; font-size: 14px; font-weight: 400;">{{ reservation.voyages.prix | number_format(0, '.', ' ') }} FCFA</div>*/
/* */
/*                 </div>*/
/* */
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                 <div style="width:50%;float:left;  color: #666464;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">Service Start Place :</div>*/
/*                 <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">ERNAKULAM</div>*/
/* */
/* */
/*                 </div>*/
/*                 <div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                 <div style="width:50%;float:left;  color: #666464;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">Time of Departure :</div>*/
/*                 <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">20:00 Hrs.</div>*/
/* */
/* */
/*                 </div-->*/
/* */
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                     <div style="width:50%;float:left;  color: #666464;*/
/*             font-size: 14px;*/
/*             font-weight: 400;">Service End Point :</div>*/
/*                     <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*             font-size: 14px;*/
/*             font-weight: 400;">SHENCOTTAH</div>*/
/* */
/* */
/*                     </div-->*/
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                 <div style="width:50%;float:left;  color: #666464;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">Passenger End Point :</div>*/
/*                 <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">DINDIGUL</div>*/
/* */
/* */
/*                 </div-->*/
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                 <div style="width:50%;float:left;  color: #666464;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">Route No :</div>*/
/*                 <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">730</div>*/
/* */
/* */
/*                 </div-->*/
/* */
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                 <div style="width:50%;float:left;  color: #666464;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">Corporation :</div>*/
/*                 <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">SETC</div>*/
/* */
/* */
/*                 </div-->*/
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*                 <div style="width:50%;float:left;  color: #666464;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">OB Reference No.:</div>*/
/*                 <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*         font-size: 14px;*/
/*         font-weight: 400;">OB4152076</div>*/
/* */
/* */
/*                 </div-->*/
/* */
/*                 <!--div style="width:100%;float:left;padding:10px;border-bottom: 2px solid #eeeeee;padding-left:0px;padding-right:0px;">*/
/* */
/*             <div style="width:50%;float:left;  color: #666464;*/
/*     font-size: 14px;*/
/*     font-weight: 400;">OB Reference No.:</div>*/
/*             <div style="width:50%;float:left;text-align:right; color: #161616;*/
/*     font-size: 14px;*/
/*     font-weight: 400;">OB4152076</div>*/
/* */
/* */
/*             </div-->*/
/* */
/*             </div>*/
/* */
/* */
/* */
/*         </div>*/
/* */
/*         <div style="width:100%;margin-top:25px;float:left;">*/
/* */
/* */
/*             <p style="font-size:19px;color:black;text-align:center;"> INFORMATION PASSAGER</p>*/
/* */
/*             <div style="width:100%;float:left; color:white;  padding: 15px 0; font-size:12px;background-color:#525254;margin-top:7px;font-weight:500;">*/
/* */
/* */
/*                 <div style="font-size:14px;width:26%;float:left;padding-left:5px;">*/
/*                     Nom*/
/* */
/*                 </div>*/
/* */
/*                 <div style="font-size:14px;width:20%;float:left;">*/
/*                     Age*/
/*                 </div>*/
/* */
/* */
/*                 <div style="font-size:14px;width:27%;float:left;">*/
/*                     Sexe*/
/*                 </div>*/
/* */
/* */
/* */
/*                 <div style="font-size:14px;width:26%;float:left;">*/
/*                      No Place*/
/*                 </div>*/
/* */
/* */
/* */
/*             </div>*/
/* */
/*             <div style="width:100%; float:left; color:black;  padding: 15px 0; font-size:12px;background-color:white;margin-top:7px;font-weight:500;">*/
/* */
/* */
/*                 <div style="font-size:14px;width:26%;float:left;padding-left:5px;">*/
/*                     {{ reservation.tickets.nom }}*/
/* */
/*                 </div>*/
/* */
/*                 <div style="font-size:14px;width:20%;float:left;">*/
/*                     {{ reservation.tickets.age }} ans*/
/*                 </div>*/
/* */
/* */
/*                 <div style="font-size:14px;width:27%;float:left;">*/
/*                     {% if reservation.tickets.gender == 'H'%}HOMME {% else %} FEMME {% endif %}*/
/*                 </div>*/
/* */
/* */
/* */
/*                 <div style="font-size:14px;width:26%;float:left;">*/
/*                     NON DEFINI*/
/*                 </div>*/
/* */
/* */
/* */
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/* */
/*         <div style="float:left; width:96.3%;    border-bottom-right-radius: 8px; border-bottom-left-radius: 8px; padding:20px 12px 20px 12px;  ">*/
/*             <div style="width:100%; float:left; font-size:16px; padding:0 0 10px 0;color: #404043;font-weight:500;"> IMPORTANT</div>*/
/*             <div style="width:100%; float:left; color:#666262; font-size:13px; line-height:25px;">*/
/* */
/*                Le(s) siège(s) réservés sous ce billet n'est/ne sont pas transférable(s).<br>*/
/*                 Ce billet électronique est valable uniquement pour le service de bus spécifié dans le présent document.<br>*/
/*                 Ce billet électronique doit être sur le passager pendant le voyage avec une carte d'identité du<br>*/
/*                 passager dont le nom figure ci-dessus.<br>*/
/*                 Veuillez conserver le billet en toute sécurité jusqu'à la fin du voyage.<br>*/
/*                 Please show the ticket at the time of checking.<br>*/
/*                 La compagnie de transport se réserve le droit de modifier ou d'annuler la classe de service.<br>*/
/*                 Le temps est au format d'heure  24 heures (24HH: MM).<br>*/
/*                 Les demi-billet admissible pour les enfants de 3 à 12 ans. Les enfants de plus de 130 cm de hauteur seront facturés<br>*/
/*                 plein tarif à moins que le certificat de preuve d'âge original ne soit produit au moment du voyage<br>*/
/*             </div>*/
/* */
/*             <div style="width:100%; float:left; color:#666262; font-size:13px; line-height:22px;text-align:center;">*/
/* */
/* */
/*              <br>   <a href="{{ path('nb_main_dasboard') }}" style="background-color:#E24648;font-size:15px;width:200px; text-decoration: none; padding:10px;border:none;color:white;margin-top:50px;" class="noprint">Retourner à l'acceuil</a>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* </div>*/
/* <script>*/
/*     window.print();*/
/* </script>*/
/* </body></html>*/
