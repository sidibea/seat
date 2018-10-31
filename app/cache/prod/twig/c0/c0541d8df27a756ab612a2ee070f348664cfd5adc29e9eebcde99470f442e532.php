<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_00dd60b73db890f1a9b2bcd6fbefce07566e07bd3f0920564a8c33f1a9d67c05 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Vérification email</title>
    <!-- CORE CSS-->

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css\">

    <style type=\"text/css\">
        html,
        body {
            height: 100%;
        }
        html {
            display: table;
            margin: auto;
        }
        body {
            display: table-cell;
            vertical-align: middle;
        }
        .margin {
            margin: 0 !important;
        }
    </style>

</head>

<body class=\"blue\">


<div id=\"login-page\" class=\"row\">
    <div class=\"col s12 z-depth-6 card-panel\">

        <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
        ";
        // line 39
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()))) {
            // line 40
            echo "            ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 41
            echo "            ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : null))) {
                echo "<p><a href=\"";
                echo $this->env->getExtension('routing')->getPath("nb_main_dasboard");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 42
            echo "        ";
        }
        // line 43
        echo "    </div>
</div>




<!-- ================================================
  Scripts
  ================================================ -->

<!-- jQuery Library -->
<script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<!--materialize js-->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js\"></script>





<footer class=\"page-footer\">
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2017 Next Group
        </div>
    </div>
</footer>
</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 43,  76 => 42,  67 => 41,  64 => 40,  62 => 39,  58 => 38,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>Vérification email</title>*/
/*     <!-- CORE CSS-->*/
/* */
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">*/
/* */
/*     <style type="text/css">*/
/*         html,*/
/*         body {*/
/*             height: 100%;*/
/*         }*/
/*         html {*/
/*             display: table;*/
/*             margin: auto;*/
/*         }*/
/*         body {*/
/*             display: table-cell;*/
/*             vertical-align: middle;*/
/*         }*/
/*         .margin {*/
/*             margin: 0 !important;*/
/*         }*/
/*     </style>*/
/* */
/* </head>*/
/* */
/* <body class="blue">*/
/* */
/* */
/* <div id="login-page" class="row">*/
/*     <div class="col s12 z-depth-6 card-panel">*/
/* */
/*         <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>*/
/*         {% if app.session is not empty %}*/
/*             {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}*/
/*             {% if targetUrl is not empty %}<p><a href="{{ path('nb_main_dasboard') }}">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* <!-- ================================================*/
/*   Scripts*/
/*   ================================================ -->*/
/* */
/* <!-- jQuery Library -->*/
/* <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>*/
/* <!--materialize js-->*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>*/
/* */
/* */
/* */
/* */
/* */
/* <footer class="page-footer">*/
/*     <div class="footer-copyright">*/
/*         <div class="container">*/
/*             © 2017 Next Group*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* </body>*/
/* */
/* </html>*/
/* */
/* */
