<?php

/* NBUsersBundle:Security:login.html.twig */
class __TwigTemplate_0f6fae33aa01730d5652bbfb040df672cc4843e6e7d2f1ee67fdb12225b26cb1 extends Twig_Template
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
        $__internal_736bc93c55992c08a40518656702b955c87d64e2ad2652da967200a370554ea6 = $this->env->getExtension("native_profiler");
        $__internal_736bc93c55992c08a40518656702b955c87d64e2ad2652da967200a370554ea6->enter($__internal_736bc93c55992c08a40518656702b955c87d64e2ad2652da967200a370554ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBUsersBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <title>Seat Seller</title>
        <link media=\"all\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\" >
        <style>
            @import url(//fonts.googleapis.com/css?family=Open+Sans);
        </style>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-noamd.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui.js")), "html", null, true);
        echo "\"></script>
        
    </head>
    <body>


    <div class=\"GGMMM3DBGGC\">
        <div class=\"GGMMM3DBDFD\">
            <img src=\"http://cdn.seatseller.travel/images/ss_logo.jpg\" stylename=\"GGMMM3DBEFD\">
            <form id=\"login\" action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\" data-parsley-validate=\"\">
                <div>
                    <ul style=\"border:1px solid #ccc;list-style:none;box-shadow: 0px 0px 12px #ccc;padding:25px\">

                        <li style=\"color:#666;\"><span style=\"letter-spacing:5px\">------------</span>Connectez vous<span style=\"letter-spacing:5px\">------------</span></li>
                        <div class=\"GGMMM3DBHFD\"><div class=\"textbox_group\">
                                <input required=\"\" name=\"_username\" class=\"textbox_text\" id=\"emailbox\"  type=\"text\">
                                <span class=\"textbox_bar\"></span>
                                <div class=\"textbox_lbl\">Nom d'utilisateur</div>
                            </div>
                        </div>
                        <div class=\"GGMMM3DBFFD\">
                            <div class=\"textbox_group\">
                                <input required=\"\" name=\"_password\" class=\"textbox_text\" id=\"password\"  type=\"password\">
                                <span class=\"textbox_bar\"></span>
                                <div class=\"textbox_lbl\">Mot de passe</div>
                            </div>
                        </div>
                        <li style=\"margin-top:-20px; margin-bottom:15px;\"> <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"GGMMM3DBOED\">Mot de passe oublié</a> <div style=\"clear:both\"></div> </li>
                        <li>
                            <div aria-hidden=\"true\" style=\"display: none;\" class=\"GGMMM3DBMED\"></div>
                            <div style=\"clear:both\"></div>
                        </li>
                        <li>
                            <input type=\"hidden\" name=\"_target_path\" value=\"nb_main_dasboard\" />
                            <button type=\"submit\" class=\"GGMMM3DBAFD\" id=\"signin_button\" onclick=\"\">Se connecter</button> </li>
                        <li style=\"margin-bottom:0px;text-align:left; margin-top:25px;\"> <span>Vous n'avez pas de compte ?</span> <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"GPG0KNOCAGD\">Inscrivez-vous</a> </li>
                        <div class=\"small_loader\" style=\"text-align:center;display:none\"><img src=\"assets/images/loader-small.gif\"></div>
                        <div class=\"login_res\" style=\"text-align:center;\"></div>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    <script>

        base_url = \"http://localhost:8000/\";


    </script>

<script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.form.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/custom.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/parsley.min.js")), "html", null, true);
        echo "\"></script>
    
    </body>
</html>
";
        
        $__internal_736bc93c55992c08a40518656702b955c87d64e2ad2652da967200a370554ea6->leave($__internal_736bc93c55992c08a40518656702b955c87d64e2ad2652da967200a370554ea6_prof);

    }

    public function getTemplateName()
    {
        return "NBUsersBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 65,  114 => 64,  110 => 63,  92 => 48,  81 => 40,  60 => 22,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*         <title>Seat Seller</title>*/
/*         <link media="all" type="text/css" href="{{ asset('assets/jquery-ui.css') }}" rel="stylesheet">*/
/*         <link type="text/css" rel="stylesheet" href="{{asset('assets/style.css') }}" >*/
/*         <style>*/
/*             @import url(//fonts.googleapis.com/css?family=Open+Sans);*/
/*         </style>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery-noamd.min.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery-ui.js')) }}"></script>*/
/*         */
/*     </head>*/
/*     <body>*/
/* */
/* */
/*     <div class="GGMMM3DBGGC">*/
/*         <div class="GGMMM3DBDFD">*/
/*             <img src="http://cdn.seatseller.travel/images/ss_logo.jpg" stylename="GGMMM3DBEFD">*/
/*             <form id="login" action="{{ path("fos_user_security_check") }}" method="POST" data-parsley-validate="">*/
/*                 <div>*/
/*                     <ul style="border:1px solid #ccc;list-style:none;box-shadow: 0px 0px 12px #ccc;padding:25px">*/
/* */
/*                         <li style="color:#666;"><span style="letter-spacing:5px">------------</span>Connectez vous<span style="letter-spacing:5px">------------</span></li>*/
/*                         <div class="GGMMM3DBHFD"><div class="textbox_group">*/
/*                                 <input required="" name="_username" class="textbox_text" id="emailbox"  type="text">*/
/*                                 <span class="textbox_bar"></span>*/
/*                                 <div class="textbox_lbl">Nom d'utilisateur</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="GGMMM3DBFFD">*/
/*                             <div class="textbox_group">*/
/*                                 <input required="" name="_password" class="textbox_text" id="password"  type="password">*/
/*                                 <span class="textbox_bar"></span>*/
/*                                 <div class="textbox_lbl">Mot de passe</div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <li style="margin-top:-20px; margin-bottom:15px;"> <a href="{{ path('fos_user_resetting_request') }}" class="GGMMM3DBOED">Mot de passe oublié</a> <div style="clear:both"></div> </li>*/
/*                         <li>*/
/*                             <div aria-hidden="true" style="display: none;" class="GGMMM3DBMED"></div>*/
/*                             <div style="clear:both"></div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <input type="hidden" name="_target_path" value="nb_main_dasboard" />*/
/*                             <button type="submit" class="GGMMM3DBAFD" id="signin_button" onclick="">Se connecter</button> </li>*/
/*                         <li style="margin-bottom:0px;text-align:left; margin-top:25px;"> <span>Vous n'avez pas de compte ?</span> <a href="{{ path('fos_user_registration_register') }}" class="GPG0KNOCAGD">Inscrivez-vous</a> </li>*/
/*                         <div class="small_loader" style="text-align:center;display:none"><img src="assets/images/loader-small.gif"></div>*/
/*                         <div class="login_res" style="text-align:center;"></div>*/
/*                     </ul>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/* */
/*         base_url = "http://localhost:8000/";*/
/* */
/* */
/*     </script>*/
/* */
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery.form.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/custom.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/parsley.min.js')) }}"></script>*/
/*     */
/*     </body>*/
/* </html>*/
/* */
