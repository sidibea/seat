<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6f73a4d2091290a063eed5c28eda0f36038e766f33e9e9a7f7a123425f0e1843 extends Twig_Template
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
        <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div>
                <ul style=\"border:1px solid #ccc;list-style:none;box-shadow: 0px 0px 12px #ccc;padding:25px\">

                    <li style=\"color:#666;\"><span style=\"letter-spacing:5px\">------------</span>Connectez vous<span style=\"letter-spacing:5px\">------------</span></li>
                    <div class=\"GGMMM3DBHFD\"><div class=\"textbox_group\">
                            <input type=\"text\" id=\"username\" class=\"textbox_text\" name=\"username\" required=\"required\" />
                            <span class=\"textbox_bar\"></span>
                            <div class=\"textbox_lbl\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>
                        </div>
                    </div>

                    <li>
                        <div aria-hidden=\"true\" style=\"display: none;\" class=\"GGMMM3DBMED\"></div>
                        <div style=\"clear:both\"></div>
                    </li>
                    <li>
                        <input type=\"hidden\" name=\"_target_path\" value=\"nb_main_dasboard\" />
                        <input type=\"submit\" class=\"GGMMM3DBAFD\" id=\"signin_button\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    <div class=\"small_loader\" style=\"text-align:center;display:none\"><img src=\"assets/images/loader-small.gif\"></div>

                    <div class=\"login_res\" style=\"text-align:center;\">
                        ";
        // line 44
        if (array_key_exists("invalid_username", $context)) {
            // line 45
            echo "                            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : null)), "FOSUserBundle"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 47
        echo "                    </div>
                </ul>
            </div>
        </form>
    </div>
</div>
<script>

    base_url = \"http://localhost:8000/\";


</script>

<script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.form.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/custom.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/parsley.min.js")), "html", null, true);
        echo "\"></script>

</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 62,  115 => 61,  111 => 60,  96 => 47,  90 => 45,  88 => 44,  81 => 40,  68 => 30,  57 => 22,  45 => 13,  41 => 12,  37 => 11,  30 => 7,  26 => 6,  19 => 1,);
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
/*         <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*         <div>*/
/*                 <ul style="border:1px solid #ccc;list-style:none;box-shadow: 0px 0px 12px #ccc;padding:25px">*/
/* */
/*                     <li style="color:#666;"><span style="letter-spacing:5px">------------</span>Connectez vous<span style="letter-spacing:5px">------------</span></li>*/
/*                     <div class="GGMMM3DBHFD"><div class="textbox_group">*/
/*                             <input type="text" id="username" class="textbox_text" name="username" required="required" />*/
/*                             <span class="textbox_bar"></span>*/
/*                             <div class="textbox_lbl">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <li>*/
/*                         <div aria-hidden="true" style="display: none;" class="GGMMM3DBMED"></div>*/
/*                         <div style="clear:both"></div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <input type="hidden" name="_target_path" value="nb_main_dasboard" />*/
/*                         <input type="submit" class="GGMMM3DBAFD" id="signin_button" value="{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                     <div class="small_loader" style="text-align:center;display:none"><img src="assets/images/loader-small.gif"></div>*/
/* */
/*                     <div class="login_res" style="text-align:center;">*/
/*                         {% if invalid_username is defined %}*/
/*                             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </ul>*/
/*             </div>*/
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
/* */
