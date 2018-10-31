<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c0cd926928c6e7ef4e4cbbbda1f13bb7bf4c3c59e16fc47ae01580a4b1be39fe extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
            <div>
                <ul style=\"border:1px solid #ccc;list-style:none;box-shadow: 0px 0px 12px #ccc;padding:25px\">

                    <li style=\"color:#666;\"><span style=\"letter-spacing:5px\">------------</span>Connectez vous<span style=\"letter-spacing:5px\">------------</span></li>
                    <div class=\"GGMMM3DBHFD\"><div class=\"textbox_group\">
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "new", array()), "first", array()), 'widget', array("attr" => array("class" => "textbox_text", "placeholder" => "")));
        echo "
                            <span class=\"textbox_bar\"></span>
                            <div class=\"textbox_lbl\">Nouveau Mot de passe</div>
                        </div>
                    </div>
                    <div class=\"GGMMM3DBFFD\">
                        <div class=\"textbox_group\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "new", array()), "second", array()), 'widget', array("attr" => array("class" => "textbox_text input-large full-width", "placeholder" => "")));
        echo "
                            <span class=\"textbox_bar\"></span>
                            <div class=\"textbox_lbl\">Repetez le nouveau mot de passe</div>
                        </div>
                    </div>
                    <li>
                        <div aria-hidden=\"true\" style=\"display: none;\" class=\"GGMMM3DBMED\"></div>
                        <div style=\"clear:both\"></div>
                    </li>
                    <li>
                        <input type=\"hidden\" name=\"_target_path\" value=\"nb_main_dasboard\" />
                        <button type=\"submit\" class=\"GGMMM3DBAFD\" id=\"signin_button\" >";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button> </li>
                    <div class=\"small_loader\" style=\"text-align:center;display:none\"><img src=\"assets/images/loader-small.gif\"></div>
                    <div class=\"login_res\" style=\"text-align:center;\"></div>
                </ul>
            </div>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </form>
    </div>
</div>
<script>

    base_url = \"http://localhost:8000/\";


</script>

<script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.form.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/custom.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/parsley.min.js")), "html", null, true);
        echo "\"></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 64,  118 => 63,  114 => 62,  100 => 51,  92 => 46,  78 => 35,  68 => 28,  57 => 22,  45 => 13,  41 => 12,  37 => 11,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*     <title>Seat Seller</title>*/
/*     <link media="all" type="text/css" href="{{ asset('assets/jquery-ui.css') }}" rel="stylesheet">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('assets/style.css') }}" >*/
/*     <style>*/
/*         @import url(//fonts.googleapis.com/css?family=Open+Sans);*/
/*     </style>*/
/*     <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery-noamd.min.js')) }}"></script>*/
/*     <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery.js')) }}"></script>*/
/*     <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery-ui.js')) }}"></script>*/
/* */
/* </head>*/
/* <body>*/
/* */
/* */
/* <div class="GGMMM3DBGGC">*/
/*     <div class="GGMMM3DBDFD">*/
/*         <img src="http://cdn.seatseller.travel/images/ss_logo.jpg" stylename="GGMMM3DBEFD">*/
/*         <form id="login" action="{{ path('fos_user_resetting_reset', {'token': token}) }}" {{ form_enctype(form) }} method="POST" class="fos_user_resetting_reset">*/
/*             <div>*/
/*                 <ul style="border:1px solid #ccc;list-style:none;box-shadow: 0px 0px 12px #ccc;padding:25px">*/
/* */
/*                     <li style="color:#666;"><span style="letter-spacing:5px">------------</span>Connectez vous<span style="letter-spacing:5px">------------</span></li>*/
/*                     <div class="GGMMM3DBHFD"><div class="textbox_group">*/
/*                             {{ form_widget(form.new.first, {'attr': {'class': 'textbox_text', 'placeholder' : '' }}) }}*/
/*                             <span class="textbox_bar"></span>*/
/*                             <div class="textbox_lbl">Nouveau Mot de passe</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="GGMMM3DBFFD">*/
/*                         <div class="textbox_group">*/
/*                             {{ form_widget(form.new.second, {'attr': {'class': 'textbox_text input-large full-width', 'placeholder' : '' }}) }}*/
/*                             <span class="textbox_bar"></span>*/
/*                             <div class="textbox_lbl">Repetez le nouveau mot de passe</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <li>*/
/*                         <div aria-hidden="true" style="display: none;" class="GGMMM3DBMED"></div>*/
/*                         <div style="clear:both"></div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <input type="hidden" name="_target_path" value="nb_main_dasboard" />*/
/*                         <button type="submit" class="GGMMM3DBAFD" id="signin_button" >{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</button> </li>*/
/*                     <div class="small_loader" style="text-align:center;display:none"><img src="assets/images/loader-small.gif"></div>*/
/*                     <div class="login_res" style="text-align:center;"></div>*/
/*                 </ul>*/
/*             </div>*/
/*             {{ form_rest(form) }}*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/* */
/*     base_url = "http://localhost:8000/";*/
/* */
/* */
/* </script>*/
/* */
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery.form.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/custom.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/parsley.min.js')) }}"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
