<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_906675909e729bca2ff8043bc368b8f042818260f0f9ce72a5cbd2497fe064dd extends Twig_Template
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
    <title>Inscription - Seatseller</title>
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

        select {
            font-family: inherit;
            background-color: transparent;
            font-size: 14px;
            color:#000;
            border: none;
            border-bottom: 1px solid #000;
        }
    </style>

</head>

<body class=\"blue\">


<div id=\"login-page\" class=\"row\">
    <div class=\"col s12 z-depth-6 card-panel\">
        ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            <h4 class=\"error\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "</h4>
            <div class=\"row\">
                <div class=\"input-field col s12 center\">
                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/logo2.png")), "html", null, true);
        echo "\" alt=\"\" class=\"responsive-img valign profile-image-login\">
                    <p class=\"center login-form-text\">Faisons du voyage la meilleure expérience pour les voyageurs</p>
                </div>
            </div>

            <div class=\"row margin\">
                <div class=\"input-field col s6\">
                    <i class=\"mdi-social-person-outline prefix\"></i>
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre nom", "required" => "required")));
        echo "
                    <label for=\"fos_user_registration_form_nom\" class=\"center-align\">Nom </label>
                </div>
                <div class=\"input-field col s6\">
                    <i class=\"mdi-social-person-outline prefix\"></i>
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre nom", "required" => "required")));
        echo "
                    <label for=\"fos_user_registration_form_prenom\" class=\"center-align\"> Prénom</label>
                </div>
            </div>
        <div class=\"row margin\">
            <div class=\"input-field col s12\">
                <i class=\"mdi-social-person-outline prefix\"></i>
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre nom  d'utilisateur ", "required" => "required")));
        echo "
                <label for=\"fos_user_registration_form_nom\" class=\"center-align\">Nom d'utilisateur</label>
            </div>
        </div>



            <div class=\"row margin\">
                <div class=\"input-field col s6\">
                    <i class=\"mdi-communication-email prefix\"></i>
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre nom", "required" => "required")));
        echo "
                    <label for=\"fos_user_registration_form_email\" class=\"center-align\">Email</label>
                </div>
                <div class=\"input-field col s6\">
                    <i class=\"mdi-communication-email prefix\"></i>
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mob", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre numéro de téléphone", "required" => "required")));
        echo "
                    <label for=\"fos_user_registration_form_mob\" class=\"center-align\">Téléphone</label>
                </div>
            </div>
        <div class=\"row margin\">
            <div class=\"input-field col s12\">
                <i class=\"mdi-social-person-outline prefix\"></i>
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre ville ", "required" => "required")));
        echo "
                <label for=\"fos_user_registration_form_ville\" class=\"center-align\">Ville</label>
            </div>
        </div>
        <div class=\"row margin\">
            <div class=\"input-field col s6\">
                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartier", array()), 'widget', array("attr" => array("class" => "browser-default input-large full-width", "placeholder" => "Entrez votre nom", "required" => "required")));
        echo "
            </div>
            <div class=\"input-field col s6\">
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commune", array()), 'widget', array("attr" => array("class" => "browser-default input-large full-width", "placeholder" => "", "required" => "required")));
        echo "
            </div>
        </div><br>
            <div class=\"row margin\">
                <div class=\"input-field col s12\">
                    <i class=\"mdi-action-lock-outline prefix\"></i>
                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez le mot de passe", "required" => "required")));
        echo "
                    <label for=\"fos_user_registration_form_password\">Mot de passe</label>
                </div>
            </div>
            <div class=\"row margin\">
                <div class=\"input-field col s12\">
                    <i class=\"mdi-action-lock-outline prefix\"></i>
                    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Re-tapez le mot de passe", "required" => "required")));
        echo "
                    <label for=\"password-again\">Re-tapez le mot de passe</label>
                </div>
            </div>
            <div class=\"row margin\">
                <div class=\"input-field col s12\">
                    <i class=\"mdi-social-person-outline prefix\"></i>
                    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomAgence", array()), 'widget', array("attr" => array("class" => " validate input-text input-large full-width", "placeholder" => "Entrez le nom de votre entreprise", "required" => "required")));
        echo "
                    <label for=\"organization_name\" class=\"center-align\">Nom de votre entreprise</label>
                </div>
            </div>
            <div class=\"row margin\">
                <div class=\"input-field col s6\">
                    <i class=\"mdi-social-person-outline prefix\"></i>
                    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numeroNina", array()), 'widget', array("attr" => array("class" => " validate input-text input-large full-width", "placeholder" => "Entrez le numéro NINA", "required" => "required")));
        echo "
                    <label for=\"organization_name\" class=\"center-align\">N° NINA</label>
                </div>
                <div class=\"input-field col s6\">
                    <i class=\"mdi-social-person-outline prefix\"></i>
                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nif", array()), 'widget', array("attr" => array("class" => " validate input-text input-large full-width", "placeholder" => "Entrez le numéro NIF", "required" => "required")));
        echo "
                    <label for=\"organization_name\" class=\"center-align\">NIF</label>
                </div>
            </div>


            <div class=\"row\">
                <div class=\"input-field col s12\">
                    <button type=\"submit\" class=\"btn waves-effect waves-light col s12\">Inscrivez-vous</button>
                </div>
                <div class=\"input-field col s12\">
                    <p class=\"margin center medium-small sign-up\">Vous avez dejà un compte ? <a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Connectez-vous</a></p>
                </div>
            </div>
        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        ";
        // line 148
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
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

</html>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 148,  218 => 147,  212 => 144,  198 => 133,  190 => 128,  180 => 121,  170 => 114,  160 => 107,  151 => 101,  145 => 98,  136 => 92,  126 => 85,  118 => 80,  105 => 70,  95 => 63,  87 => 58,  76 => 50,  70 => 47,  66 => 46,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>Inscription - Seatseller</title>*/
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
/* */
/*         select {*/
/*             font-family: inherit;*/
/*             background-color: transparent;*/
/*             font-size: 14px;*/
/*             color:#000;*/
/*             border: none;*/
/*             border-bottom: 1px solid #000;*/
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
/*         {{ form_start(form) }}*/
/*             <h4 class="error">{{ form_errors(form) }}</h4>*/
/*             <div class="row">*/
/*                 <div class="input-field col s12 center">*/
/*                     <img src="{{ absolute_url(asset('assets/images/logo2.png')) }}" alt="" class="responsive-img valign profile-image-login">*/
/*                     <p class="center login-form-text">Faisons du voyage la meilleure expérience pour les voyageurs</p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row margin">*/
/*                 <div class="input-field col s6">*/
/*                     <i class="mdi-social-person-outline prefix"></i>*/
/*                     {{ form_widget(form.nom, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre nom', 'required': 'required' }}) }}*/
/*                     <label for="fos_user_registration_form_nom" class="center-align">Nom </label>*/
/*                 </div>*/
/*                 <div class="input-field col s6">*/
/*                     <i class="mdi-social-person-outline prefix"></i>*/
/*                     {{ form_widget(form.prenom, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre nom', 'required': 'required' }}) }}*/
/*                     <label for="fos_user_registration_form_prenom" class="center-align"> Prénom</label>*/
/*                 </div>*/
/*             </div>*/
/*         <div class="row margin">*/
/*             <div class="input-field col s12">*/
/*                 <i class="mdi-social-person-outline prefix"></i>*/
/*                 {{ form_widget(form.username, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre nom  d\'utilisateur ', 'required': 'required' }}) }}*/
/*                 <label for="fos_user_registration_form_nom" class="center-align">Nom d'utilisateur</label>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*             <div class="row margin">*/
/*                 <div class="input-field col s6">*/
/*                     <i class="mdi-communication-email prefix"></i>*/
/*                     {{ form_widget(form.email, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre nom', 'required': 'required' }}) }}*/
/*                     <label for="fos_user_registration_form_email" class="center-align">Email</label>*/
/*                 </div>*/
/*                 <div class="input-field col s6">*/
/*                     <i class="mdi-communication-email prefix"></i>*/
/*                     {{ form_widget(form.mob, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre numéro de téléphone', 'required': 'required' }}) }}*/
/*                     <label for="fos_user_registration_form_mob" class="center-align">Téléphone</label>*/
/*                 </div>*/
/*             </div>*/
/*         <div class="row margin">*/
/*             <div class="input-field col s12">*/
/*                 <i class="mdi-social-person-outline prefix"></i>*/
/*                 {{ form_widget(form.ville, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre ville ', 'required': 'required' }}) }}*/
/*                 <label for="fos_user_registration_form_ville" class="center-align">Ville</label>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row margin">*/
/*             <div class="input-field col s6">*/
/*                 {{ form_widget(form.quartier, {'attr': {'class': 'browser-default input-large full-width', 'placeholder' : 'Entrez votre nom', 'required': 'required' }}) }}*/
/*             </div>*/
/*             <div class="input-field col s6">*/
/*                 {{ form_widget(form.commune, {'attr': {'class': 'browser-default input-large full-width', 'placeholder' : '', 'required': 'required' }}) }}*/
/*             </div>*/
/*         </div><br>*/
/*             <div class="row margin">*/
/*                 <div class="input-field col s12">*/
/*                     <i class="mdi-action-lock-outline prefix"></i>*/
/*                     {{ form_widget(form.plainPassword.first, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez le mot de passe', 'required': 'required' }}) }}*/
/*                     <label for="fos_user_registration_form_password">Mot de passe</label>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row margin">*/
/*                 <div class="input-field col s12">*/
/*                     <i class="mdi-action-lock-outline prefix"></i>*/
/*                     {{ form_widget(form.plainPassword.second, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Re-tapez le mot de passe', 'required': 'required' }}) }}*/
/*                     <label for="password-again">Re-tapez le mot de passe</label>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row margin">*/
/*                 <div class="input-field col s12">*/
/*                     <i class="mdi-social-person-outline prefix"></i>*/
/*                     {{ form_widget(form.nomAgence, {'attr': {'class': ' validate input-text input-large full-width', 'placeholder' : 'Entrez le nom de votre entreprise', 'required': 'required' }}) }}*/
/*                     <label for="organization_name" class="center-align">Nom de votre entreprise</label>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row margin">*/
/*                 <div class="input-field col s6">*/
/*                     <i class="mdi-social-person-outline prefix"></i>*/
/*                     {{ form_widget(form.numeroNina, {'attr': {'class': ' validate input-text input-large full-width', 'placeholder' : 'Entrez le numéro NINA', 'required': 'required' }}) }}*/
/*                     <label for="organization_name" class="center-align">N° NINA</label>*/
/*                 </div>*/
/*                 <div class="input-field col s6">*/
/*                     <i class="mdi-social-person-outline prefix"></i>*/
/*                     {{ form_widget(form.nif, {'attr': {'class': ' validate input-text input-large full-width', 'placeholder' : 'Entrez le numéro NIF', 'required': 'required' }}) }}*/
/*                     <label for="organization_name" class="center-align">NIF</label>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="row">*/
/*                 <div class="input-field col s12">*/
/*                     <button type="submit" class="btn waves-effect waves-light col s12">Inscrivez-vous</button>*/
/*                 </div>*/
/*                 <div class="input-field col s12">*/
/*                     <p class="margin center medium-small sign-up">Vous avez dejà un compte ? <a href="{{ path('login') }}">Connectez-vous</a></p>*/
/*                 </div>*/
/*             </div>*/
/*         {{ form_rest(form) }}*/
/*         {{ form_end(form) }}*/
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
/* */
