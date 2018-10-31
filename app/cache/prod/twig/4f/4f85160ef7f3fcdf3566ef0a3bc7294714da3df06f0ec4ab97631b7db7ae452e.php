<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_91dbfedefcfd7289233bb71d164972e7cd88abf3ec089470fc12901fa3f6cf2d extends Twig_Template
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

        <h4>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</h4>

    </div>
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
            <a class=\"grey-text text-lighten-4 right\" href=\"http://w3lessons.info\"></a>
        </div>
    </div>
</footer>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 38,  19 => 1,);
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
/*         <h4>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</h4>*/
/* */
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
/*             <a class="grey-text text-lighten-4 right" href="http://w3lessons.info"></a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* </body>*/
/* */
/* </html>*/
