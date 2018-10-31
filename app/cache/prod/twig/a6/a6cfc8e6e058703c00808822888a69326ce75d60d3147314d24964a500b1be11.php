<?php

/* includes/sidebar.html.twig */
class __TwigTemplate_3b553d9e04d977f8936258f8ef33678b3f99ca20ea6860116994172e230162c5 extends Twig_Template
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
        echo "<div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
    <button class=\"btn btn-success\">
        <i class=\"ace-icon fa fa-signal\"></i>
    </button>

    <button class=\"btn btn-info\">
        <i class=\"ace-icon fa fa-pencil\"></i>
    </button>

    <button class=\"btn btn-warning\">
        <i class=\"ace-icon fa fa-users\"></i>
    </button>

    <button class=\"btn btn-danger\">
        <i class=\"ace-icon fa fa-cogs\"></i>
    </button>
</div>

<div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
    <span class=\"btn btn-success\"></span>

    <span class=\"btn btn-info\"></span>

    <span class=\"btn btn-warning\"></span>

    <span class=\"btn btn-danger\"></span>
</div>
</div><!-- /.sidebar-shortcuts -->

<ul class=\"nav nav-list\">
<li class=\"\">
    <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("nb_main_dasboard");
        echo "\">
        <i class=\"menu-icon fa fa-bus\"></i>
        <span class=\"menu-text\"> Billet de Bus </span>
    </a>

    <b class=\"arrow\"></b>
</li>


    <li class=\"\">
        <a href=\"#\" class=\"dropdown-toggle\">
            <i class=\"menu-icon fa fa-tag\"></i>
            <span class=\"menu-text\"> Statistiques </span>

            <b class=\"arrow fa fa-angle-down\"></b>
        </a>

        <b class=\"arrow\"></b>

        <ul class=\"submenu\">
            <li class=\"\">
                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("nb_main_reservation");
        echo "\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                   Mes réservations
                </a>

                <b class=\"arrow\"></b>
            </li>

            <li class=\"\">
                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("nb_main_history");
        echo "\">
                    <i class=\"menu-icon fa fa-caret-right\"></i>
                    Historique de depot
                </a>

                <b class=\"arrow\"></b>
            </li>
        </ul>
    </li>


</ul><!-- /.nav-list -->

<div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
    <i id=\"sidebar-toggle-icon\" class=\"ace-icon fa fa-angle-double-left ace-save-state\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
</div>";
    }

    public function getTemplateName()
    {
        return "includes/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 62,  76 => 53,  52 => 32,  19 => 1,);
    }
}
/* <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">*/
/*     <button class="btn btn-success">*/
/*         <i class="ace-icon fa fa-signal"></i>*/
/*     </button>*/
/* */
/*     <button class="btn btn-info">*/
/*         <i class="ace-icon fa fa-pencil"></i>*/
/*     </button>*/
/* */
/*     <button class="btn btn-warning">*/
/*         <i class="ace-icon fa fa-users"></i>*/
/*     </button>*/
/* */
/*     <button class="btn btn-danger">*/
/*         <i class="ace-icon fa fa-cogs"></i>*/
/*     </button>*/
/* </div>*/
/* */
/* <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">*/
/*     <span class="btn btn-success"></span>*/
/* */
/*     <span class="btn btn-info"></span>*/
/* */
/*     <span class="btn btn-warning"></span>*/
/* */
/*     <span class="btn btn-danger"></span>*/
/* </div>*/
/* </div><!-- /.sidebar-shortcuts -->*/
/* */
/* <ul class="nav nav-list">*/
/* <li class="">*/
/*     <a href="{{ path('nb_main_dasboard') }}">*/
/*         <i class="menu-icon fa fa-bus"></i>*/
/*         <span class="menu-text"> Billet de Bus </span>*/
/*     </a>*/
/* */
/*     <b class="arrow"></b>*/
/* </li>*/
/* */
/* */
/*     <li class="">*/
/*         <a href="#" class="dropdown-toggle">*/
/*             <i class="menu-icon fa fa-tag"></i>*/
/*             <span class="menu-text"> Statistiques </span>*/
/* */
/*             <b class="arrow fa fa-angle-down"></b>*/
/*         </a>*/
/* */
/*         <b class="arrow"></b>*/
/* */
/*         <ul class="submenu">*/
/*             <li class="">*/
/*                 <a href="{{ path('nb_main_reservation') }}">*/
/*                     <i class="menu-icon fa fa-caret-right"></i>*/
/*                    Mes réservations*/
/*                 </a>*/
/* */
/*                 <b class="arrow"></b>*/
/*             </li>*/
/* */
/*             <li class="">*/
/*                 <a href="{{ path('nb_main_history') }}">*/
/*                     <i class="menu-icon fa fa-caret-right"></i>*/
/*                     Historique de depot*/
/*                 </a>*/
/* */
/*                 <b class="arrow"></b>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* */
/* */
/* </ul><!-- /.nav-list -->*/
/* */
/* <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">*/
/*     <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>*/
/* </div>*/
