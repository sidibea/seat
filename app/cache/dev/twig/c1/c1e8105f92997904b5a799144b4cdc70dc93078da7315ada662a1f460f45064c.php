<?php

/* ::front.html.twig */
class __TwigTemplate_661035e7054c27414b510342562e649e6dc43379652e2443709357e16e58e5b3 extends Twig_Template
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
        $__internal_40887c71f87a5fce241d991bf50e1da1e6a795c2539985631a9a3064d3047789 = $this->env->getExtension("native_profiler");
        $__internal_40887c71f87a5fce241d991bf50e1da1e6a795c2539985631a9a3064d3047789->enter($__internal_40887c71f87a5fce241d991bf50e1da1e6a795c2539985631a9a3064d3047789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>SeatSeller - La plateforme pour les agents de voyages</title>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\">
        <link media=\"all\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/jquery-ui.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/style.css")), "html", null, true);
        echo "\">
    </head>
<body>

<div class=\"GGMMM3DBGGC\">
    <div class=\"GGMMM3DBPFD\">
        <div class=\"GGMMM3DBEGD\">
            <div class=\"GGMMM3DBGHD\"> 
                <a class=\"GGMMM3DBMGD\" href=\"#\">Seatseller</a>
                <ul class=\"GGMMM3DBAHD\">
                    ";
        // line 17
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 18
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("nb_main_dasboard");
            echo "\" class=\"gwt-Anchor\">Mon seatSeller</a></li>
                    ";
        } else {
            // line 20
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" class=\"GGMMM3DBLGD\">Se Connecter</a></li>
                        <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"GGMMM3DBLGD\">S'inscrire</a></li>
                    ";
        }
        // line 23
        echo "                </ul> 
                <div class=\"GGMMM3DBOFD\"></div> 
            </div> 
        </div>  
        <div class=\"GGMMM3DBJFD\">
            <div class=\"GGMMM3DBGHD\">
                <div class=\"GGMMM3DBKFD\"> 
                    <h3 class=\"GGMMM3DBMFD\">Soyez les Agents du Changement !</h3>
                    <p class=\"GGMMM3DBLFD\">Faisons du voyage la meilleure expérience pour les voyageus</p>
                    <ul class=\"GGMMM3DBCHD\"> 
                        <li class=\"GGMMM3DBFGD\" style=\"float:left;\"><a class=\"gwt-Anchor\">Voir comment SeatSeller Marche</a></li>
                        <li class=\"GGMMM3DBGGD\"><a class=\"gwt-Anchor\">Rejoignez SeatSeller maintenant</a></li>
                    </ul>
                </div> 
            </div> 
        </div> 
        <div class=\"GGMMM3DBGHD\">
            <div class=\"GGMMM3DBAGD\">
                <li class=\"GGMMM3DBKGD\">
                    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/ticket_new.png")), "html", null, true);
        echo "\">
                    <h4>Système de réservation de billets de bus en direct.</h4>
                    <p>Moyen de réservation Fiable &amp; Rapide pour une place assurée.</p>
                </li>
                <li> <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/root.png")), "html", null, true);
        echo "\"> 
                    <h4>300 Liaisons à travers le Mali et à l'étranger</h4>
                    <p>Un moyen incomparable pour générer des revenus.</p>
                </li>
                <li class=\"GGMMM3DBKGD\"> <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/hotel_new.png")), "html", null, true);
        echo "\"> 
                    <h4>Bus &amp; Transfert d'argent sur une même plateforme</h4>
                    <p>Ceci est encore un autre point fort de votre superbe compte SeatSeller.
                        Le SeatSeller vous accorde  plus de commissions et d'offres.
                        Gagnez jusqu'à 10% de commission sur vos reservations.</p>
                </li> 
                <li> <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/agents.png")), "html", null, true);
        echo "\">
                    <h4>Plus de 100 agents actifs</h4>
                    <p>Agents générant des revenus énormes tous les jours.</p>
                </li> <a class=\"GGMMM3DBHGD\">DEVENIR SEATSELLER</a>
            </div>  
        </div>  
        <div class=\"GGMMM3DBGHD\"> 
            <div class=\"GGMMM3DBBGD\"> 
                <li class=\"GGMMM3DBKGD\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/explore.png")), "html", null, true);
        echo "\"></li> 
                <li class=\"GGMMM3DBIGD\"> <h4>Explorer et réserver avec les meilleures compagnies de transport !</h4>
                    <p>Donnez plus de choix à vos clients en leur permettant de choisir parmi les meilleures compagnies de transport au Mali.</p>
                    <br> 
                    <a class=\"GGMMM3DBDHD\">COMMERCER A UTILISER SEATSELLER MAINTENANT</a>
                </li> 
            </div> 
        </div>  
        <div class=\"GGMMM3DBGHD\"> 
            <div class=\"GGMMM3DBNGD\"> 
                <li class=\"GGMMM3DBKGD\">
                    <h4>Plus de 3 Milliards de Franc CFA sont liés au transport routier </h4>
                    <p>
                        Ceci est encore un autre point fort de votre superbe compte SeatSeller.
                        Le transport malien est en plein expansion. Ne perdez pas cette occasion.
                    </p><br>
                    <a class=\"GGMMM3DBDHD\">COMMERCER A UTILISER SEATSELLER MAINTENANT</a>
                </li> 
                <li class=\"GGMMM3DBIGD\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/more_com.png")), "html", null, true);
        echo "\"></li>
            </div> 
        </div> 
        <div class=\"GGMMM3DBGHD\"> 
            <div class=\"GGMMM3DBPGD\">
                <h4>Pourquoi les gens aiment SeatSeller ?</h4>
                <p> Ce produit est génial. Je suis seatseller et je change le Mali avec nextBus
                </p> 
                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/r_reddy.jpg")), "html", null, true);
        echo "\"> 
                <h5>Sekou A Sidibe<br>Koulikoro</h5>
            </div> 
        </div> 
        <div class=\"GGMMM3DBGHD\"> 
            <div class=\"GGMMM3DBBHD\"> 
                <h4>Faites partie de la famille SeatSeller </h4>
                <div style=\"width:55%;margin:0 auto\"> 
                    <div>
                        <div style=\"width:300px;float:left;margin-top:25px;\"> 
                            <div class=\"textbox_group\"><input required=\"\" class=\"textbox_text\" type=\"text\">
                                <span class=\"textbox_bar\"></span>
                                <div class=\"textbox_lbl\">Entrer votre numéro de téléphone</div>
                            </div> 
                        </div>
                        <a class=\"GGMMM3DBDGD\">RAPPELLEZ MOI</a>
                    </div> <div aria-hidden=\"true\" style=\"display: none;\">
                        <div style=\"font-size:0.9em;color:green;\"> Merci pour votre intérêt, on vous rappelle très bientôt ! </div>
                    </div>
                    <div class=\"GGMMM3DBOFD\"></div> 
                </div> 
            </div> 
        </div>  
        <div class=\"GGMMM3DBCGD\"> 
            <ul class=\"GGMMM3DBGHD\"> 
                <li><a href=\"\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/footer_logo.png")), "html", null, true);
        echo "\"></a></li> 
                <li><a href=\"\"> A Propos de SeatSeller</a></li>
                <li><a href=\"\"> Termes et Conditions</a></li>
                <li><a class=\"gwt-Anchor\">Se connecter</a></li>
                <li class=\"GGMMM3DBJGD\"> <span style=\"color:#ccc;\"> © Next Group </span> </li>
            </ul> 
        </div>
    </div>
</div>



</body>
";
        
        $__internal_40887c71f87a5fce241d991bf50e1da1e6a795c2539985631a9a3064d3047789->leave($__internal_40887c71f87a5fce241d991bf50e1da1e6a795c2539985631a9a3064d3047789_prof);

    }

    public function getTemplateName()
    {
        return "::front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 115,  151 => 90,  140 => 82,  119 => 64,  108 => 56,  99 => 50,  92 => 46,  85 => 42,  64 => 23,  59 => 21,  54 => 20,  48 => 18,  46 => 17,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>SeatSeller - La plateforme pour les agents de voyages</title>*/
/*         <meta http-equiv="content-type" content="text/html; charset=windows-1252">*/
/*         <link media="all" type="text/css" href="{{ absolute_url(asset('assets/jquery-ui.css')) }}" rel="stylesheet">*/
/*         <link type="text/css" rel="stylesheet" href="{{ absolute_url(asset('assets/style.css')) }}">*/
/*     </head>*/
/* <body>*/
/* */
/* <div class="GGMMM3DBGGC">*/
/*     <div class="GGMMM3DBPFD">*/
/*         <div class="GGMMM3DBEGD">*/
/*             <div class="GGMMM3DBGHD"> */
/*                 <a class="GGMMM3DBMGD" href="#">Seatseller</a>*/
/*                 <ul class="GGMMM3DBAHD">*/
/*                     {% if app.user %}*/
/*                         <li><a href="{{ path('nb_main_dasboard') }}" class="gwt-Anchor">Mon seatSeller</a></li>*/
/*                     {% else %}*/
/*                         <li><a href="{{ path('login') }}" class="GGMMM3DBLGD">Se Connecter</a></li>*/
/*                         <li><a href="{{ path('fos_user_registration_register') }}" class="GGMMM3DBLGD">S'inscrire</a></li>*/
/*                     {% endif %}*/
/*                 </ul> */
/*                 <div class="GGMMM3DBOFD"></div> */
/*             </div> */
/*         </div>  */
/*         <div class="GGMMM3DBJFD">*/
/*             <div class="GGMMM3DBGHD">*/
/*                 <div class="GGMMM3DBKFD"> */
/*                     <h3 class="GGMMM3DBMFD">Soyez les Agents du Changement !</h3>*/
/*                     <p class="GGMMM3DBLFD">Faisons du voyage la meilleure expérience pour les voyageus</p>*/
/*                     <ul class="GGMMM3DBCHD"> */
/*                         <li class="GGMMM3DBFGD" style="float:left;"><a class="gwt-Anchor">Voir comment SeatSeller Marche</a></li>*/
/*                         <li class="GGMMM3DBGGD"><a class="gwt-Anchor">Rejoignez SeatSeller maintenant</a></li>*/
/*                     </ul>*/
/*                 </div> */
/*             </div> */
/*         </div> */
/*         <div class="GGMMM3DBGHD">*/
/*             <div class="GGMMM3DBAGD">*/
/*                 <li class="GGMMM3DBKGD">*/
/*                     <img src="{{ absolute_url(asset('assets/images/ticket_new.png')) }}">*/
/*                     <h4>Système de réservation de billets de bus en direct.</h4>*/
/*                     <p>Moyen de réservation Fiable &amp; Rapide pour une place assurée.</p>*/
/*                 </li>*/
/*                 <li> <img src="{{ absolute_url(asset('assets/images/root.png')) }}"> */
/*                     <h4>300 Liaisons à travers le Mali et à l'étranger</h4>*/
/*                     <p>Un moyen incomparable pour générer des revenus.</p>*/
/*                 </li>*/
/*                 <li class="GGMMM3DBKGD"> <img src="{{ absolute_url(asset('assets/images/hotel_new.png')) }}"> */
/*                     <h4>Bus &amp; Transfert d'argent sur une même plateforme</h4>*/
/*                     <p>Ceci est encore un autre point fort de votre superbe compte SeatSeller.*/
/*                         Le SeatSeller vous accorde  plus de commissions et d'offres.*/
/*                         Gagnez jusqu'à 10% de commission sur vos reservations.</p>*/
/*                 </li> */
/*                 <li> <img src="{{ absolute_url(asset('assets/images/agents.png')) }}">*/
/*                     <h4>Plus de 100 agents actifs</h4>*/
/*                     <p>Agents générant des revenus énormes tous les jours.</p>*/
/*                 </li> <a class="GGMMM3DBHGD">DEVENIR SEATSELLER</a>*/
/*             </div>  */
/*         </div>  */
/*         <div class="GGMMM3DBGHD"> */
/*             <div class="GGMMM3DBBGD"> */
/*                 <li class="GGMMM3DBKGD"><img src="{{ absolute_url(asset('assets/images/explore.png')) }}"></li> */
/*                 <li class="GGMMM3DBIGD"> <h4>Explorer et réserver avec les meilleures compagnies de transport !</h4>*/
/*                     <p>Donnez plus de choix à vos clients en leur permettant de choisir parmi les meilleures compagnies de transport au Mali.</p>*/
/*                     <br> */
/*                     <a class="GGMMM3DBDHD">COMMERCER A UTILISER SEATSELLER MAINTENANT</a>*/
/*                 </li> */
/*             </div> */
/*         </div>  */
/*         <div class="GGMMM3DBGHD"> */
/*             <div class="GGMMM3DBNGD"> */
/*                 <li class="GGMMM3DBKGD">*/
/*                     <h4>Plus de 3 Milliards de Franc CFA sont liés au transport routier </h4>*/
/*                     <p>*/
/*                         Ceci est encore un autre point fort de votre superbe compte SeatSeller.*/
/*                         Le transport malien est en plein expansion. Ne perdez pas cette occasion.*/
/*                     </p><br>*/
/*                     <a class="GGMMM3DBDHD">COMMERCER A UTILISER SEATSELLER MAINTENANT</a>*/
/*                 </li> */
/*                 <li class="GGMMM3DBIGD"><img src="{{ absolute_url(asset('assets/images/more_com.png')) }}"></li>*/
/*             </div> */
/*         </div> */
/*         <div class="GGMMM3DBGHD"> */
/*             <div class="GGMMM3DBPGD">*/
/*                 <h4>Pourquoi les gens aiment SeatSeller ?</h4>*/
/*                 <p> Ce produit est génial. Je suis seatseller et je change le Mali avec nextBus*/
/*                 </p> */
/*                 <img src="{{ absolute_url(asset('assets/images/r_reddy.jpg')) }}"> */
/*                 <h5>Sekou A Sidibe<br>Koulikoro</h5>*/
/*             </div> */
/*         </div> */
/*         <div class="GGMMM3DBGHD"> */
/*             <div class="GGMMM3DBBHD"> */
/*                 <h4>Faites partie de la famille SeatSeller </h4>*/
/*                 <div style="width:55%;margin:0 auto"> */
/*                     <div>*/
/*                         <div style="width:300px;float:left;margin-top:25px;"> */
/*                             <div class="textbox_group"><input required="" class="textbox_text" type="text">*/
/*                                 <span class="textbox_bar"></span>*/
/*                                 <div class="textbox_lbl">Entrer votre numéro de téléphone</div>*/
/*                             </div> */
/*                         </div>*/
/*                         <a class="GGMMM3DBDGD">RAPPELLEZ MOI</a>*/
/*                     </div> <div aria-hidden="true" style="display: none;">*/
/*                         <div style="font-size:0.9em;color:green;"> Merci pour votre intérêt, on vous rappelle très bientôt ! </div>*/
/*                     </div>*/
/*                     <div class="GGMMM3DBOFD"></div> */
/*                 </div> */
/*             </div> */
/*         </div>  */
/*         <div class="GGMMM3DBCGD"> */
/*             <ul class="GGMMM3DBGHD"> */
/*                 <li><a href=""><img src="{{ absolute_url(asset('assets/images/footer_logo.png')) }}"></a></li> */
/*                 <li><a href=""> A Propos de SeatSeller</a></li>*/
/*                 <li><a href=""> Termes et Conditions</a></li>*/
/*                 <li><a class="gwt-Anchor">Se connecter</a></li>*/
/*                 <li class="GGMMM3DBJGD"> <span style="color:#ccc;"> © Next Group </span> </li>*/
/*             </ul> */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* </body>*/
/* */
