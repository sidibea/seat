<?php

/* NBMainBundle::history.html.twig */
class __TwigTemplate_f01e769bbe354c3c15c3131c5faba746242641f3b2fcf10d1ede7712ce9bfb20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NBMainBundle::admin_layout.html.twig", "NBMainBundle::history.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagestyle' => array($this, 'block_pagestyle'),
            'breadcumbs' => array($this, 'block_breadcumbs'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "SeatSeller ";
    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/jquery-ui.custom.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/daterangepicker.min.css"), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_breadcumbs($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"breadcrumbs ace-save-state\" id=\"breadcrumbs\">
        <ul class=\"breadcrumb\">
            <li>
                <i class=\"ace-icon fa fa-home home-icon\"></i>
                <a href=\"#\">Acceuil</a>
            </li>
            <li class=\"active\">Historique de depot</li>
        </ul><!-- /.breadcrumb -->

    </div>

";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"space space-8\"></div>
    <form method=\"get\">
        <div class=\"row\">
            <div class=\"col-sm-5\">
                <label>Du => Au  </label>
                <div class=\"input-daterange input-group\">

                    <input type=\"text\" required=\"\" readonly class=\"input-sm form-control\" name=\"start\" />
                <span class=\"input-group-addon\">
                    <i class=\"fa fa-exchange\"></i>
                </span>

                    <input type=\"text\" required=\"\" readonly class=\"input-sm form-control\" name=\"end\" />
                    <span class=\"input-group-btn\">
                    <button type=\"submit\" class=\"btn btn-purple btn-sm\">
                        <span class=\"ace-icon fa fa-search icon-on-right \"></span>
                        OK
                    </button>
                </span>
                </div>

            </div>
        </div>
    </form>
    <div class=\"row\">
        <div class=\"col-xs-6\">
            <div class=\"widget-box transparent\">
                <div class=\"widget-header widget-header-flat\">
                    <h4 class=\"widget-title lighter\">
                        <i class=\"ace-icon fa fa-star orange\"></i>
                        Historique de depot
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
                                    <i class=\"ace-icon fa fa-caret-right blue\"></i>AC/No
                                </th>

                                <th>
                                    <i class=\"ace-icon fa fa-caret-right blue\"></i>Date de depot
                                </th>

                                <th class=\"hidden-480\">
                                    <i class=\"ace-icon fa fa-caret-right blue\"></i>Type de paiement
                                </th>
                                <th class=\"hidden-480\">
                                    <i class=\"ace-icon fa fa-caret-right blue\"></i>Montant
                                </th>
                            </tr>
                            </thead>
                            ";
        // line 86
        $context["total"] = 0;
        // line 87
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) ? $context["history"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 88
            echo "                                ";
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + $this->getAttribute($context["val"], "montant", array()));
            // line 89
            echo "                                <tr>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "dateRecharge", array()), "d-m-Y à h:i:s"), "html", null, true);
            echo "</td>
                                    <td>Compte</td>
                                    <td><strong class=\"pull-right\">";
            // line 93
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["val"], "montant", array()), 0, ".", " "), "html", null, true);
            echo " FCFA</strong> </td>
                                </tr>


                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            <tr>
                                <td colspan=\"3\">
                                    <span class=\"pull-right\">
                                        <strong>TOTAL</strong>
                                    </span>
                                </td>
                                <td >
                                    <span class=\"pull-right\">
                                        <strong>";
        // line 106
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null), 0, ".", " "), "html", null, true);
        echo " FCFA</strong>
                                    </span>
                                </td>
                            </tr>

                            <tbody>

                            </tbody>
                        </table>
                    </div><!-- /.widget-main -->
                </div><!-- /.widget-body -->
            </div><!-- /.widget-box -->
        </div>
    </div>

";
    }

    // line 124
    public function block_pagescript($context, array $blocks = array())
    {
        // line 125
        echo "    <!--[if lte IE 8]>
    <script src=\"assets/js/excanvas.min.js\"></script>
    <![endif]-->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 136
    public function block_scripts($context, array $blocks = array())
    {
        // line 137
        echo "    <!-- inline scripts related to this page -->
    <script type=\"text/javascript\">
        jQuery(function(\$) {

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



            //or change it into a date range picker
            \$('.input-daterange').datepicker({autoclose:true});


            //to translate the daterange picker, please copy the \"examples/daterange-fr.js\" contents here before initialization
            \$('input[name=date-range-picker]').daterangepicker({
                'applyClass' : 'btn-sm btn-success',
                'cancelClass' : 'btn-sm btn-default',
                locale: {
                    applyLabel: 'Apply',
                    cancelLabel: 'Cancel',
                }
            })
                    .prev().on(ace.click_event, function(){
                        \$(this).next().focus();
                    });






            \$(document).one('ajaxloadstart.page', function(e) {
                autosize.destroy('textarea[class*=autosize]')

                \$('.limiterBox,.autosizejs').remove();
                \$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "NBMainBundle::history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 137,  238 => 136,  232 => 133,  228 => 132,  224 => 131,  220 => 130,  216 => 129,  212 => 128,  207 => 125,  204 => 124,  184 => 106,  174 => 98,  163 => 93,  158 => 91,  154 => 90,  151 => 89,  148 => 88,  143 => 87,  141 => 86,  78 => 25,  75 => 24,  60 => 11,  57 => 10,  51 => 7,  47 => 6,  42 => 5,  39 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends "NBMainBundle::admin_layout.html.twig" %}*/
/* */
/* {% block title %}SeatSeller {% endblock %}*/
/* {% block pagestyle %}*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.min.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block breadcumbs %}*/
/*     <div class="breadcrumbs ace-save-state" id="breadcrumbs">*/
/*         <ul class="breadcrumb">*/
/*             <li>*/
/*                 <i class="ace-icon fa fa-home home-icon"></i>*/
/*                 <a href="#">Acceuil</a>*/
/*             </li>*/
/*             <li class="active">Historique de depot</li>*/
/*         </ul><!-- /.breadcrumb -->*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="space space-8"></div>*/
/*     <form method="get">*/
/*         <div class="row">*/
/*             <div class="col-sm-5">*/
/*                 <label>Du => Au  </label>*/
/*                 <div class="input-daterange input-group">*/
/* */
/*                     <input type="text" required="" readonly class="input-sm form-control" name="start" />*/
/*                 <span class="input-group-addon">*/
/*                     <i class="fa fa-exchange"></i>*/
/*                 </span>*/
/* */
/*                     <input type="text" required="" readonly class="input-sm form-control" name="end" />*/
/*                     <span class="input-group-btn">*/
/*                     <button type="submit" class="btn btn-purple btn-sm">*/
/*                         <span class="ace-icon fa fa-search icon-on-right "></span>*/
/*                         OK*/
/*                     </button>*/
/*                 </span>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </form>*/
/*     <div class="row">*/
/*         <div class="col-xs-6">*/
/*             <div class="widget-box transparent">*/
/*                 <div class="widget-header widget-header-flat">*/
/*                     <h4 class="widget-title lighter">*/
/*                         <i class="ace-icon fa fa-star orange"></i>*/
/*                         Historique de depot*/
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
/*                                     <i class="ace-icon fa fa-caret-right blue"></i>AC/No*/
/*                                 </th>*/
/* */
/*                                 <th>*/
/*                                     <i class="ace-icon fa fa-caret-right blue"></i>Date de depot*/
/*                                 </th>*/
/* */
/*                                 <th class="hidden-480">*/
/*                                     <i class="ace-icon fa fa-caret-right blue"></i>Type de paiement*/
/*                                 </th>*/
/*                                 <th class="hidden-480">*/
/*                                     <i class="ace-icon fa fa-caret-right blue"></i>Montant*/
/*                                 </th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             {% set total = 0 %}*/
/*                             {% for key, val in history %}*/
/*                                 {% set total = total + val.montant %}*/
/*                                 <tr>*/
/*                                     <td>{{ val.id }}</td>*/
/*                                     <td>{{ val.dateRecharge | date('d-m-Y à h:i:s') }}</td>*/
/*                                     <td>Compte</td>*/
/*                                     <td><strong class="pull-right">{{ val.montant | number_format(0, '.', ' ') }} FCFA</strong> </td>*/
/*                                 </tr>*/
/* */
/* */
/*                             {% endfor %}*/
/*                             <tr>*/
/*                                 <td colspan="3">*/
/*                                     <span class="pull-right">*/
/*                                         <strong>TOTAL</strong>*/
/*                                     </span>*/
/*                                 </td>*/
/*                                 <td >*/
/*                                     <span class="pull-right">*/
/*                                         <strong>{{ total | number_format(0, '.', ' ') }} FCFA</strong>*/
/*                                     </span>*/
/*                                 </td>*/
/*                             </tr>*/
/* */
/*                             <tbody>*/
/* */
/*                             </tbody>*/
/*                         </table>*/
/*                     </div><!-- /.widget-main -->*/
/*                 </div><!-- /.widget-body -->*/
/*             </div><!-- /.widget-box -->*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block pagescript %}*/
/*     <!--[if lte IE 8]>*/
/*     <script src="assets/js/excanvas.min.js"></script>*/
/*     <![endif]-->*/
/*     <script src="{{ asset('assets/js/jquery-ui.custom.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/moment.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/autosize.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/parsley.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/*     <!-- inline scripts related to this page -->*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
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
/*             //or change it into a date range picker*/
/*             $('.input-daterange').datepicker({autoclose:true});*/
/* */
/* */
/*             //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization*/
/*             $('input[name=date-range-picker]').daterangepicker({*/
/*                 'applyClass' : 'btn-sm btn-success',*/
/*                 'cancelClass' : 'btn-sm btn-default',*/
/*                 locale: {*/
/*                     applyLabel: 'Apply',*/
/*                     cancelLabel: 'Cancel',*/
/*                 }*/
/*             })*/
/*                     .prev().on(ace.click_event, function(){*/
/*                         $(this).next().focus();*/
/*                     });*/
/* */
/* */
/* */
/* */
/* */
/* */
/*             $(document).one('ajaxloadstart.page', function(e) {*/
/*                 autosize.destroy('textarea[class*=autosize]')*/
/* */
/*                 $('.limiterBox,.autosizejs').remove();*/
/*                 $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
