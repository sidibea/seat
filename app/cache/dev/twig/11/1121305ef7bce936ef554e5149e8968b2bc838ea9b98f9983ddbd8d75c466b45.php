<?php

/* NBMainBundle::dashboard.html.twig */
class __TwigTemplate_8d27c1265b254b42594fc3d9b58899ba155b3d551fe4898e7496090e35cdd374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NBMainBundle::admin_layout.html.twig", "NBMainBundle::dashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagestyle' => array($this, 'block_pagestyle'),
            'breadcumbs' => array($this, 'block_breadcumbs'),
            'settings' => array($this, 'block_settings'),
            'content' => array($this, 'block_content'),
            'pagescript' => array($this, 'block_pagescript'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NBMainBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_201653de187319b59c0371abc5f57219a641e9bbaf5a8117d611e51a8fa9a318 = $this->env->getExtension("native_profiler");
        $__internal_201653de187319b59c0371abc5f57219a641e9bbaf5a8117d611e51a8fa9a318->enter($__internal_201653de187319b59c0371abc5f57219a641e9bbaf5a8117d611e51a8fa9a318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201653de187319b59c0371abc5f57219a641e9bbaf5a8117d611e51a8fa9a318->leave($__internal_201653de187319b59c0371abc5f57219a641e9bbaf5a8117d611e51a8fa9a318_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af1e6040dfb9e24050275801c934231d03df43bce8dee7f603d019478447b07d = $this->env->getExtension("native_profiler");
        $__internal_af1e6040dfb9e24050275801c934231d03df43bce8dee7f603d019478447b07d->enter($__internal_af1e6040dfb9e24050275801c934231d03df43bce8dee7f603d019478447b07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil ";
        
        $__internal_af1e6040dfb9e24050275801c934231d03df43bce8dee7f603d019478447b07d->leave($__internal_af1e6040dfb9e24050275801c934231d03df43bce8dee7f603d019478447b07d_prof);

    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_a83ca8128d287017796b5758a3edacf59aa241f1960f238e211f4bea01c1ca55 = $this->env->getExtension("native_profiler");
        $__internal_a83ca8128d287017796b5758a3edacf59aa241f1960f238e211f4bea01c1ca55->enter($__internal_a83ca8128d287017796b5758a3edacf59aa241f1960f238e211f4bea01c1ca55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/jquery-ui.custom.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/chosen.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/daterangepicker.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a83ca8128d287017796b5758a3edacf59aa241f1960f238e211f4bea01c1ca55->leave($__internal_a83ca8128d287017796b5758a3edacf59aa241f1960f238e211f4bea01c1ca55_prof);

    }

    // line 13
    public function block_breadcumbs($context, array $blocks = array())
    {
        $__internal_fbfb2b2ca2c2f278844734dcf4d695e6a50680d89ae8f37f2e2009e37e97f49c = $this->env->getExtension("native_profiler");
        $__internal_fbfb2b2ca2c2f278844734dcf4d695e6a50680d89ae8f37f2e2009e37e97f49c->enter($__internal_fbfb2b2ca2c2f278844734dcf4d695e6a50680d89ae8f37f2e2009e37e97f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumbs"));

        // line 14
        echo "    <div class=\"breadcrumbs ace-save-state\" id=\"breadcrumbs\">
        <ul class=\"breadcrumb\">
            <li>
                <i class=\"ace-icon fa fa-home home-icon\"></i>
                <a href=\"#\">Acceuil</a>
            </li>
            <li class=\"active\">Tableau de bord</li>
        </ul><!-- /.breadcrumb -->

    </div>

";
        
        $__internal_fbfb2b2ca2c2f278844734dcf4d695e6a50680d89ae8f37f2e2009e37e97f49c->leave($__internal_fbfb2b2ca2c2f278844734dcf4d695e6a50680d89ae8f37f2e2009e37e97f49c_prof);

    }

    // line 26
    public function block_settings($context, array $blocks = array())
    {
        $__internal_42850cc1bff1d597ca503c844ceae2369f120abd799e02efadd75cc35b5d1760 = $this->env->getExtension("native_profiler");
        $__internal_42850cc1bff1d597ca503c844ceae2369f120abd799e02efadd75cc35b5d1760->enter($__internal_42850cc1bff1d597ca503c844ceae2369f120abd799e02efadd75cc35b5d1760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "settings"));

        // line 27
        echo "    ";
        $this->loadTemplate("NBMainBundle:includes:settings.html.twig", "NBMainBundle::dashboard.html.twig", 27)->display($context);
        
        $__internal_42850cc1bff1d597ca503c844ceae2369f120abd799e02efadd75cc35b5d1760->leave($__internal_42850cc1bff1d597ca503c844ceae2369f120abd799e02efadd75cc35b5d1760_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ba3d0311f00eafe4335e16c48936215829a229bacf6467cfdbaad798ceceb55 = $this->env->getExtension("native_profiler");
        $__internal_0ba3d0311f00eafe4335e16c48936215829a229bacf6467cfdbaad798ceceb55->enter($__internal_0ba3d0311f00eafe4335e16c48936215829a229bacf6467cfdbaad798ceceb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "
    ";
        // line 32
        $this->loadTemplate("NBMainBundle:includes:boxes.html.twig", "NBMainBundle::dashboard.html.twig", 32)->display($context);
        // line 33
        echo "
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"widget-box\">
                <div class=\"widget-header\">
                    <h4 class=\"smaller\">
                        Rechercher des bus
                    </h4>
                </div>

                <div class=\"widget-body\">
                    <div class=\"widget-main\">
                        <form method=\"get\" action=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("nb_main_search");
        echo "\" id=\"search\">
                            <div>
                                <label for=\"from\">De</label>

                                <br />
                                <select class=\"chosen-select form-control\" name=\"from\" id=\"from\" data-placeholder=\"Choisissez une ville...\">
                                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 52
            echo "                                        <option value=\"\">  </option>
                                        <option value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                </select>
                            </div> <br>
                            <div class=\"center\">
                                <i class=\"fa fa-exchange\"></i>
                            </div>
                            <div>
                                <label for=\"to\">A</label>

                                <br />
                                <select class=\"chosen-select form-control\" name=\"to\" id=\"to\" data-placeholder=\"Choisissez une ville..\">
                                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 66
            echo "                                        <option value=\"\">  </option>
                                        <option value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                </select>
                            </div>

                            <div>
                                <label for=\"doj\">Le</label>
                                <br>

                                <div class=\"input-group\">
                                    <input class=\"form-control date-picker\" readonly required=\"\" id=\"doj\" name=\"doj\" type=\"text\" data-date-format=\"dd-mm-yyyy\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar bigger-110\"></i>
\t\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div> <br>

                            <div class=\"center\">
                                <button class=\"btn btn-info\" id=\"searchBtn\" type=\"submit\">
                                    <i class=\"ace-icon fa fa-search bigger-110\"></i>
                                    Rechercher
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div><!-- /.col -->
        <div class=\"col-sm-6\">
            <div class=\"widget-box transparent\">
                <div class=\"widget-header widget-header-flat\">
                    <h4 class=\"widget-title lighter\">
                        <i class=\"ace-icon fa fa-star orange\"></i>
                        Reservations Recentes
                    </h4>

                    <div class=\"widget-toolbar\">
                        <a href=\"#\" data-action=\"collapse\">
                            <i class=\"ace-icon fa fa-chevron-up\"></i>
                        </a>
                    </div>
                </div>

                <div style=\"display: block;\" class=\"widget-body\">
                    <div class=\"widget-main no-padding\">
                        <table class=\"table table-bordered table-striped\">
                            <thead class=\"thin-border-bottom\">
                            <tr>
                                <th>
                                    <i class=\"ace-icon fa fa-caret-right blue\"></i>No Billet
                                </th>
                                <th>
                                    <i class=\"ace-icon fa fa-caret-right blue\"></i>Axes
                                </th>

                                <th>
                                    <i class=\"ace-icon fa fa-caret-right blue\"></i>Clients
                                </th>

                                <th class=\"hidden-480\">
                                    <i class=\"ace-icon fa fa-caret-right blue\"></i>Date de voyage
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservationRecente"]) ? $context["reservationRecente"] : $this->getContext($context, "reservationRecente")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 136
            echo "                            <tr>
                                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "ticketNo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "axes", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "client", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "

                            </tbody>
                        </table>
                    </div><!-- /.widget-main -->
                </div><!-- /.widget-body -->
            </div><!-- /.widget-box -->
        </div>
    </div><br>

    <div class=\"row\">

        <div class=\"col-sm-6\">
            <form id=\"print\" data-parsley-validate=\"\">
                <div>
                    <label for=\"ticketno\">Imprimer billet</label>
                    <br>

                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                        <i class=\"fa fa-print bigger-110\"></i>
                         </span>
                        <input class=\"form-control\" placeholder=\"Entrez le numero du billet\" required=\"\"   id=\"ticketno\" name=\"ticketno\" type=\"text\"  />
                        <span class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"PrintSeatseller()\"  class=\"btn btn-info btn-sm\">
                                OK
                            </button>
                        </span>
                    </div>
                </div> <br>
                <div class=\"small_loader\" style=\"text-align:center;display:none\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/loader-small.gif"), "html", null, true);
        echo "\"></div>
                <div class=\"print_res\" style=\"text-align:center;\"></div>

            </form>

        </div>

    </div>


";
        
        $__internal_0ba3d0311f00eafe4335e16c48936215829a229bacf6467cfdbaad798ceceb55->leave($__internal_0ba3d0311f00eafe4335e16c48936215829a229bacf6467cfdbaad798ceceb55_prof);

    }

    // line 187
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_41d70ab17ab003c20eeba807f94d91caa80231aa7bcea975b9936422604a29ed = $this->env->getExtension("native_profiler");
        $__internal_41d70ab17ab003c20eeba807f94d91caa80231aa7bcea975b9936422604a29ed->enter($__internal_41d70ab17ab003c20eeba807f94d91caa80231aa7bcea975b9936422604a29ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 188
        echo "    <!--[if lte IE 8]>
    <script src=\"assets/js/excanvas.min.js\"></script>
    <![endif]-->
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"assets/js/spinbox.min.js\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"assets/js/jquery.inputlimiter.min.js\"></script>
    <script src=\"assets/js/jquery.maskedinput.min.js\"></script>
    <script src=\"assets/js/bootstrap-tag.min.js\"></script>
";
        
        $__internal_41d70ab17ab003c20eeba807f94d91caa80231aa7bcea975b9936422604a29ed->leave($__internal_41d70ab17ab003c20eeba807f94d91caa80231aa7bcea975b9936422604a29ed_prof);

    }

    // line 204
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_dab2054878d43a6726b1333c15e3c0245f2e7063f94d1f9782dce04c6000437c = $this->env->getExtension("native_profiler");
        $__internal_dab2054878d43a6726b1333c15e3c0245f2e7063f94d1f9782dce04c6000437c->enter($__internal_dab2054878d43a6726b1333c15e3c0245f2e7063f94d1f9782dce04c6000437c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 205
        echo "    <!-- inline scripts related to this page -->
    <script type=\"text/javascript\">
        jQuery(function(\$) {



            if(!ace.vars['touch']) {
                \$('.chosen-select').chosen({allow_single_deselect:true});
                //resize the chosen on window resize

                \$(window)
                        .off('resize.chosen')
                        .on('resize.chosen', function() {
                            \$('.chosen-select').each(function() {
                                var \$this = \$(this);
                                \$this.next().css({'width': \$this.parent().width()});
                            })
                        }).trigger('resize.chosen');
                //resize chosen on sidebar collapse/expand
                \$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                    if(event_name != 'sidebar_collapsed') return;
                    \$('.chosen-select').each(function() {
                        var \$this = \$(this);
                        \$this.next().css({'width': \$this.parent().width()});
                    })
                });


            }








            //datepicker plugin
            //link
            \$('.date-picker').datepicker({
                autoclose: true,
                todayHighlight: true
            })
                //show datepicker when clicking on the icon
                    .next().on(ace.click_event, function(){
                        \$(this).prev().focus();
                    });










        });
    </script>
";
        
        $__internal_dab2054878d43a6726b1333c15e3c0245f2e7063f94d1f9782dce04c6000437c->leave($__internal_dab2054878d43a6726b1333c15e3c0245f2e7063f94d1f9782dce04c6000437c_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 205,  404 => 204,  392 => 198,  388 => 197,  384 => 196,  380 => 195,  375 => 193,  371 => 192,  367 => 191,  362 => 188,  356 => 187,  338 => 173,  306 => 143,  297 => 140,  293 => 139,  289 => 138,  285 => 137,  282 => 136,  278 => 135,  210 => 69,  200 => 67,  197 => 66,  193 => 65,  181 => 55,  171 => 53,  168 => 52,  164 => 51,  155 => 45,  141 => 33,  139 => 32,  136 => 31,  130 => 30,  122 => 27,  116 => 26,  98 => 14,  92 => 13,  83 => 11,  79 => 10,  75 => 9,  71 => 8,  67 => 7,  63 => 6,  58 => 5,  52 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends "NBMainBundle::admin_layout.html.twig" %}*/
/* */
/* {% block title %}Acceuil {% endblock %}*/
/* {% block pagestyle %}*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-timepicker.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-colorpicker.min.css') }}" />*/
/* {% endblock %}*/
/* {% block breadcumbs %}*/
/*     <div class="breadcrumbs ace-save-state" id="breadcrumbs">*/
/*         <ul class="breadcrumb">*/
/*             <li>*/
/*                 <i class="ace-icon fa fa-home home-icon"></i>*/
/*                 <a href="#">Acceuil</a>*/
/*             </li>*/
/*             <li class="active">Tableau de bord</li>*/
/*         </ul><!-- /.breadcrumb -->*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* {% block settings %}*/
/*     {% include "NBMainBundle:includes:settings.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% include "NBMainBundle:includes:boxes.html.twig" %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="widget-box">*/
/*                 <div class="widget-header">*/
/*                     <h4 class="smaller">*/
/*                         Rechercher des bus*/
/*                     </h4>*/
/*                 </div>*/
/* */
/*                 <div class="widget-body">*/
/*                     <div class="widget-main">*/
/*                         <form method="get" action="{{ path('nb_main_search') }}" id="search">*/
/*                             <div>*/
/*                                 <label for="from">De</label>*/
/* */
/*                                 <br />*/
/*                                 <select class="chosen-select form-control" name="from" id="from" data-placeholder="Choisissez une ville...">*/
/*                                     {% for key, val in villes %}*/
/*                                         <option value="">  </option>*/
/*                                         <option value="{{ val.id }}">{{ val.nom }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div> <br>*/
/*                             <div class="center">*/
/*                                 <i class="fa fa-exchange"></i>*/
/*                             </div>*/
/*                             <div>*/
/*                                 <label for="to">A</label>*/
/* */
/*                                 <br />*/
/*                                 <select class="chosen-select form-control" name="to" id="to" data-placeholder="Choisissez une ville..">*/
/*                                     {% for key, val in villes %}*/
/*                                         <option value="">  </option>*/
/*                                         <option value="{{ val.id }}">{{ val.nom }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/* */
/*                             <div>*/
/*                                 <label for="doj">Le</label>*/
/*                                 <br>*/
/* */
/*                                 <div class="input-group">*/
/*                                     <input class="form-control date-picker" readonly required="" id="doj" name="doj" type="text" data-date-format="dd-mm-yyyy" />*/
/* 									<span class="input-group-addon">*/
/* 											<i class="fa fa-calendar bigger-110"></i>*/
/* 									</span>*/
/*                                 </div>*/
/*                             </div> <br>*/
/* */
/*                             <div class="center">*/
/*                                 <button class="btn btn-info" id="searchBtn" type="submit">*/
/*                                     <i class="ace-icon fa fa-search bigger-110"></i>*/
/*                                     Rechercher*/
/*                                 </button>*/
/*                             </div>*/
/* */
/*                         </form>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!-- /.col -->*/
/*         <div class="col-sm-6">*/
/*             <div class="widget-box transparent">*/
/*                 <div class="widget-header widget-header-flat">*/
/*                     <h4 class="widget-title lighter">*/
/*                         <i class="ace-icon fa fa-star orange"></i>*/
/*                         Reservations Recentes*/
/*                     </h4>*/
/* */
/*                     <div class="widget-toolbar">*/
/*                         <a href="#" data-action="collapse">*/
/*                             <i class="ace-icon fa fa-chevron-up"></i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div style="display: block;" class="widget-body">*/
/*                     <div class="widget-main no-padding">*/
/*                         <table class="table table-bordered table-striped">*/
/*                             <thead class="thin-border-bottom">*/
/*                             <tr>*/
/*                                 <th>*/
/*                                     <i class="ace-icon fa fa-caret-right blue"></i>No Billet*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     <i class="ace-icon fa fa-caret-right blue"></i>Axes*/
/*                                 </th>*/
/* */
/*                                 <th>*/
/*                                     <i class="ace-icon fa fa-caret-right blue"></i>Clients*/
/*                                 </th>*/
/* */
/*                                 <th class="hidden-480">*/
/*                                     <i class="ace-icon fa fa-caret-right blue"></i>Date de voyage*/
/*                                 </th>*/
/*                             </tr>*/
/*                             </thead>*/
/* */
/*                             <tbody>*/
/*                             {% for key, val in reservationRecente %}*/
/*                             <tr>*/
/*                                 <td>{{ val.ticketNo }}</td>*/
/*                                 <td>{{ val.axes }}</td>*/
/*                                 <td>{{ val.client }}</td>*/
/*                                 <td>{{ val.doj | date('d-m-Y') }}</td>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/* */
/* */
/*                             </tbody>*/
/*                         </table>*/
/*                     </div><!-- /.widget-main -->*/
/*                 </div><!-- /.widget-body -->*/
/*             </div><!-- /.widget-box -->*/
/*         </div>*/
/*     </div><br>*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="col-sm-6">*/
/*             <form id="print" data-parsley-validate="">*/
/*                 <div>*/
/*                     <label for="ticketno">Imprimer billet</label>*/
/*                     <br>*/
/* */
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon">*/
/*                         <i class="fa fa-print bigger-110"></i>*/
/*                          </span>*/
/*                         <input class="form-control" placeholder="Entrez le numero du billet" required=""   id="ticketno" name="ticketno" type="text"  />*/
/*                         <span class="input-group-btn">*/
/*                             <button type="button" onclick="PrintSeatseller()"  class="btn btn-info btn-sm">*/
/*                                 OK*/
/*                             </button>*/
/*                         </span>*/
/*                     </div>*/
/*                 </div> <br>*/
/*                 <div class="small_loader" style="text-align:center;display:none"><img src="{{ asset('assets/images/loader-small.gif') }}"></div>*/
/*                 <div class="print_res" style="text-align:center;"></div>*/
/* */
/*             </form>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block pagescript %}*/
/*     <!--[if lte IE 8]>*/
/*     <script src="assets/js/excanvas.min.js"></script>*/
/*     <![endif]-->*/
/*     <script src="{{ asset('assets/js/jquery-ui.custom.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>*/
/*     <script src="assets/js/spinbox.min.js"></script>*/
/*     <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/moment.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/autosize.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/parsley.min.js') }}"></script>*/
/*     <script src="assets/js/jquery.inputlimiter.min.js"></script>*/
/*     <script src="assets/js/jquery.maskedinput.min.js"></script>*/
/*     <script src="assets/js/bootstrap-tag.min.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/*     <!-- inline scripts related to this page -->*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/* */
/* */
/* */
/*             if(!ace.vars['touch']) {*/
/*                 $('.chosen-select').chosen({allow_single_deselect:true});*/
/*                 //resize the chosen on window resize*/
/* */
/*                 $(window)*/
/*                         .off('resize.chosen')*/
/*                         .on('resize.chosen', function() {*/
/*                             $('.chosen-select').each(function() {*/
/*                                 var $this = $(this);*/
/*                                 $this.next().css({'width': $this.parent().width()});*/
/*                             })*/
/*                         }).trigger('resize.chosen');*/
/*                 //resize chosen on sidebar collapse/expand*/
/*                 $(document).on('settings.ace.chosen', function(e, event_name, event_val) {*/
/*                     if(event_name != 'sidebar_collapsed') return;*/
/*                     $('.chosen-select').each(function() {*/
/*                         var $this = $(this);*/
/*                         $this.next().css({'width': $this.parent().width()});*/
/*                     })*/
/*                 });*/
/* */
/* */
/*             }*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             //datepicker plugin*/
/*             //link*/
/*             $('.date-picker').datepicker({*/
/*                 autoclose: true,*/
/*                 todayHighlight: true*/
/*             })*/
/*                 //show datepicker when clicking on the icon*/
/*                     .next().on(ace.click_event, function(){*/
/*                         $(this).prev().focus();*/
/*                     });*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
