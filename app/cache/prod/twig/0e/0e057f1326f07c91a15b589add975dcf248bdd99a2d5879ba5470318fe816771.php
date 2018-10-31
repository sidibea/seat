<?php

/* includes/navbar.html.twig */
class __TwigTemplate_eb7bd6e1e4f650cd135feaa0a6737903dda02026e14fd4d91baf29a181092e54 extends Twig_Template
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
        echo "<div class=\"navbar-container ace-save-state\" id=\"navbar-container\">
<button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
    <span class=\"sr-only\">Toggle sidebar</span>

    <span class=\"icon-bar\"></span>

    <span class=\"icon-bar\"></span>

    <span class=\"icon-bar\"></span>
</button>

<div class=\"navbar-header pull-left\">
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("nb_main_dasboard");
        echo "\" class=\"navbar-brand\">
        <small>
            <img src=\"http://cdn.seatseller.travel/images/ss_logo.jpg\" height=\"25px\" stylename=\"GGMMM3DBEFD\">
        </small>
    </a>

    
</div>

<div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
<ul class=\"nav ace-nav\">

<li class=\"light-blue dropdown-modal\">
    <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Bienvenue, ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
        echo "</small>
\t\t\t\t\t\t\t\t</span>

        <i class=\"ace-icon fa fa-caret-down\"></i>
    </a>

    <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
        <li>
            <a href=\"\">
                <i class=\"ace-icon fa fa-user\"></i>
                Changer le mot de passe
            </a>
        </li>

        <li class=\"divider\"></li>

        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                <i class=\"ace-icon fa fa-power-off\"></i>
                Se deconnecter
            </a>
        </li>
    </ul>
</li>
</ul>
</div>
</div><!-- /.navbar-container -->";
    }

    public function getTemplateName()
    {
        return "includes/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 45,  51 => 28,  33 => 13,  19 => 1,);
    }
}
/* <div class="navbar-container ace-save-state" id="navbar-container">*/
/* <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">*/
/*     <span class="sr-only">Toggle sidebar</span>*/
/* */
/*     <span class="icon-bar"></span>*/
/* */
/*     <span class="icon-bar"></span>*/
/* */
/*     <span class="icon-bar"></span>*/
/* </button>*/
/* */
/* <div class="navbar-header pull-left">*/
/*     <a href="{{ path('nb_main_dasboard') }}" class="navbar-brand">*/
/*         <small>*/
/*             <img src="http://cdn.seatseller.travel/images/ss_logo.jpg" height="25px" stylename="GGMMM3DBEFD">*/
/*         </small>*/
/*     </a>*/
/* */
/*     */
/* </div>*/
/* */
/* <div class="navbar-buttons navbar-header pull-right" role="navigation">*/
/* <ul class="nav ace-nav">*/
/* */
/* <li class="light-blue dropdown-modal">*/
/*     <a data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/* 								<span class="user-info">*/
/* 									<small>Bienvenue, {{ app.user.nom }}</small>*/
/* 								</span>*/
/* */
/*         <i class="ace-icon fa fa-caret-down"></i>*/
/*     </a>*/
/* */
/*     <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/*         <li>*/
/*             <a href="">*/
/*                 <i class="ace-icon fa fa-user"></i>*/
/*                 Changer le mot de passe*/
/*             </a>*/
/*         </li>*/
/* */
/*         <li class="divider"></li>*/
/* */
/*         <li>*/
/*             <a href="{{ path('logout') }}">*/
/*                 <i class="ace-icon fa fa-power-off"></i>*/
/*                 Se deconnecter*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </li>*/
/* </ul>*/
/* </div>*/
/* </div><!-- /.navbar-container -->*/
