<?php

/* NBMainBundle::search.html.twig */
class __TwigTemplate_b40675dfc5d1b65bf06fc9671459b62ad861efaf8b9066bfe5081ba271b35c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NBMainBundle::admin_layout.html.twig", "NBMainBundle::search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_9cefbcbc7c7e977d750189fd0c4fc3330c3b5c6d77c6ad04d47b135547261302 = $this->env->getExtension("native_profiler");
        $__internal_9cefbcbc7c7e977d750189fd0c4fc3330c3b5c6d77c6ad04d47b135547261302->enter($__internal_9cefbcbc7c7e977d750189fd0c4fc3330c3b5c6d77c6ad04d47b135547261302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cefbcbc7c7e977d750189fd0c4fc3330c3b5c6d77c6ad04d47b135547261302->leave($__internal_9cefbcbc7c7e977d750189fd0c4fc3330c3b5c6d77c6ad04d47b135547261302_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8004b19172094d3d3a60a82e8b712440aab931bb2053afa861892d4de174ca8e = $this->env->getExtension("native_profiler");
        $__internal_8004b19172094d3d3a60a82e8b712440aab931bb2053afa861892d4de174ca8e->enter($__internal_8004b19172094d3d3a60a82e8b712440aab931bb2053afa861892d4de174ca8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SeatSeller ";
        
        $__internal_8004b19172094d3d3a60a82e8b712440aab931bb2053afa861892d4de174ca8e->leave($__internal_8004b19172094d3d3a60a82e8b712440aab931bb2053afa861892d4de174ca8e_prof);

    }

    // line 5
    public function block_breadcumbs($context, array $blocks = array())
    {
        $__internal_789c3492ae7bec4c6b57eb96377f5eabaefbcd36c4352d8a2aab1ca11b9cc55b = $this->env->getExtension("native_profiler");
        $__internal_789c3492ae7bec4c6b57eb96377f5eabaefbcd36c4352d8a2aab1ca11b9cc55b->enter($__internal_789c3492ae7bec4c6b57eb96377f5eabaefbcd36c4352d8a2aab1ca11b9cc55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumbs"));

        // line 6
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
        
        $__internal_789c3492ae7bec4c6b57eb96377f5eabaefbcd36c4352d8a2aab1ca11b9cc55b->leave($__internal_789c3492ae7bec4c6b57eb96377f5eabaefbcd36c4352d8a2aab1ca11b9cc55b_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_733dd44f3cdd68d2c2519a649584207fddca543f8800c1b724684b06ce88c442 = $this->env->getExtension("native_profiler");
        $__internal_733dd44f3cdd68d2c2519a649584207fddca543f8800c1b724684b06ce88c442->enter($__internal_733dd44f3cdd68d2c2519a649584207fddca543f8800c1b724684b06ce88c442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h3 class=\"header smaller lighter blue\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "nom", array()), "html", null, true);
        echo " <i class=\"fa fa-exchange\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")), "nom", array()), "html", null, true);
        echo " </h3>

            <div class=\"clearfix\">
                <div class=\"pull-right tableTools-container\"></div>
            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>
                <table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                    <tr>

                        <th>
                            <i class=\"ace-icon fa fa-bus bigger-110\"></i>
                            Compagnie
                        </th>

                        <th>
                            <i class=\"ace-icon fa fa-clock-o bigger-110 \"></i>
                            Départ
                        </th>
                        <th>
                            <i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
                            Arrivée
                        </th>

                        <th>Commission</th>
                        <th>Tarif</th>
                        <th></th>


                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 61
            echo "                    <tr>
                        <td>
                            <a href=\"#\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["val"], "compagnie", array()), "nom", array()), "html", null, true);
            echo "</a>
                        </td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "heureDepart", array()), "H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "HeureArrivee", array()), "H:i"), "html", null, true);
            echo "</td>

                        <td>4%</td>

                        <td> <span class=\"pull-right\"><strong>XOF ";
            // line 70
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["val"], "prix", array()), 0, ".", " "), "html", null, true);
            echo "</strong></span>
                        </td>
                        <td>
                            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nb_main_custInfo", array("travel" => $this->getAttribute($context["val"], "id", array()), "dateJ" => (isset($context["dateJ"]) ? $context["dateJ"] : $this->getContext($context, "dateJ")))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                                <i class=\"ace-icon fa fa-flask align-top bigger-125\"></i>
                                Reserver
                            </a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                 </tbody>
            </table>
        </div>
    </div>
  </div>



";
        
        $__internal_733dd44f3cdd68d2c2519a649584207fddca543f8800c1b724684b06ce88c442->leave($__internal_733dd44f3cdd68d2c2519a649584207fddca543f8800c1b724684b06ce88c442_prof);

    }

    // line 90
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_625306f94e329e69cb4875d3706853be4226c390ed0a6a7406b17d1452157c55 = $this->env->getExtension("native_profiler");
        $__internal_625306f94e329e69cb4875d3706853be4226c390ed0a6a7406b17d1452157c55->enter($__internal_625306f94e329e69cb4875d3706853be4226c390ed0a6a7406b17d1452157c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 91
        echo "    <!--[if lte IE 8]>
    <script src=\"assets/js/excanvas.min.js\"></script>
    <![endif]-->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/dataTables.select.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_625306f94e329e69cb4875d3706853be4226c390ed0a6a7406b17d1452157c55->leave($__internal_625306f94e329e69cb4875d3706853be4226c390ed0a6a7406b17d1452157c55_prof);

    }

    // line 105
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_57c1464b856f3cf4741bef49b1765312ab5ef29a8c2d62ce85a69942226ecc5d = $this->env->getExtension("native_profiler");
        $__internal_57c1464b856f3cf4741bef49b1765312ab5ef29a8c2d62ce85a69942226ecc5d->enter($__internal_57c1464b856f3cf4741bef49b1765312ab5ef29a8c2d62ce85a69942226ecc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 106
        echo "    <!-- inline scripts related to this page -->
    <script type=\"text/javascript\">
        jQuery(function(\$) {
            //initiate dataTables plugin
            var myTable =
                    \$('#dynamic-table')
                        //.wrap(\"<div class='dataTables_borderWrap' />\")   //if you are applying horizontal scrolling (sScrollX)
                            .DataTable( {
                                bAutoWidth: false,
                                \"aoColumns\": [
                                    { \"bSortable\": false },
                                    null, null,null, null, null, null, null,
                                    { \"bSortable\": false }
                                ],
                                \"aaSorting\": [],


                                //\"bProcessing\": true,
                                //\"bServerSide\": true,
                                //\"sAjaxSource\": \"http://127.0.0.1/table.php\"\t,

                                //,
                                //\"sScrollY\": \"200px\",
                                //\"bPaginate\": false,

                                //\"sScrollX\": \"100%\",
                                //\"sScrollXInner\": \"120%\",
                                //\"bScrollCollapse\": true,
                                //Note: if you are applying horizontal scrolling (sScrollX) on a \".table-bordered\"
                                //you may want to wrap the table inside a \"div.dataTables_borderWrap\" element

                                \"iDisplayLength\": 50
                            } );



            \$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

            new \$.fn.dataTable.Buttons( myTable, {
                buttons: [
                    {
                        \"extend\": \"colvis\",
                        \"text\": \"<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>\",
                        \"className\": \"btn btn-white btn-primary btn-bold\",
                        columns: ':not(:first):not(:last)'
                    },
                    {
                        \"extend\": \"copy\",
                        \"text\": \"<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>\",
                        \"className\": \"btn btn-white btn-primary btn-bold\"
                    },
                    {
                        \"extend\": \"csv\",
                        \"text\": \"<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>\",
                        \"className\": \"btn btn-white btn-primary btn-bold\"
                    },
                    {
                        \"extend\": \"excel\",
                        \"text\": \"<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>\",
                        \"className\": \"btn btn-white btn-primary btn-bold\"
                    },
                    {
                        \"extend\": \"pdf\",
                        \"text\": \"<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>\",
                        \"className\": \"btn btn-white btn-primary btn-bold\"
                    },
                    {
                        \"extend\": \"print\",
                        \"text\": \"<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>\",
                        \"className\": \"btn btn-white btn-primary btn-bold\",
                        autoPrint: false,
                        message: 'This print was produced using the Print button for DataTables'
                    }
                ]
            } );
            myTable.buttons().container().appendTo( \$('.tableTools-container') );

            //style the message box
            var defaultCopyAction = myTable.button(1).action();
            myTable.button(1).action(function (e, dt, button, config) {
                defaultCopyAction(e, dt, button, config);
                \$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
            });


            var defaultColvisAction = myTable.button(0).action();
            myTable.button(0).action(function (e, dt, button, config) {

                defaultColvisAction(e, dt, button, config);


                if(\$('.dt-button-collection > .dropdown-menu').length == 0) {
                    \$('.dt-button-collection')
                            .wrapInner('<ul class=\"dropdown-menu dropdown-light dropdown-caret dropdown-caret\" />')
                            .find('a').attr('href', '#').wrap(\"<li />\")
                }
                \$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
            });

            ////

            setTimeout(function() {
                \$(\$('.tableTools-container')).find('a.dt-button').each(function() {
                    var div = \$(this).find(' > div').first();
                    if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                    else \$(this).tooltip({container: 'body', title: \$(this).text()});
                });
            }, 500);





            myTable.on( 'select', function ( e, dt, type, index ) {
                if ( type === 'row' ) {
                    \$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
                }
            } );
            myTable.on( 'deselect', function ( e, dt, type, index ) {
                if ( type === 'row' ) {
                    \$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
                }
            } );




            /////////////////////////////////
            //table checkboxes
            \$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

            //select/deselect all rows according to table header checkbox
            \$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
                var th_checked = this.checked;//checkbox inside \"TH\" table header

                \$('#dynamic-table').find('tbody > tr').each(function(){
                    var row = this;
                    if(th_checked) myTable.row(row).select();
                    else  myTable.row(row).deselect();
                });
            });

            //select/deselect a row when the checkbox is checked/unchecked
            \$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
                var row = \$(this).closest('tr').get(0);
                if(this.checked) myTable.row(row).deselect();
                else myTable.row(row).select();
            });



            \$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                e.stopImmediatePropagation();
                e.stopPropagation();
                e.preventDefault();
            });



            //And for the first simple table, which doesn't have TableTools or dataTables
            //select/deselect all rows according to table header checkbox
            var active_class = 'active';
            \$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                var th_checked = this.checked;//checkbox inside \"TH\" table header

                \$(this).closest('table').find('tbody > tr').each(function(){
                    var row = this;
                    if(th_checked) \$(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                    else \$(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                });
            });

            //select/deselect a row when the checkbox is checked/unchecked
            \$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
                var \$row = \$(this).closest('tr');
                if(\$row.is('.detail-row ')) return;
                if(this.checked) \$row.addClass(active_class);
                else \$row.removeClass(active_class);
            });



            /********************************/
            //add tooltip for small view action buttons in dropdown menu
            \$('[data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});

            //tooltip placement on right or left
            function tooltip_placement(context, source) {
                var \$source = \$(source);
                var \$parent = \$source.closest('table')
                var off1 = \$parent.offset();
                var w1 = \$parent.width();

                var off2 = \$source.offset();
                //var w2 = \$source.width();

                if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                return 'left';
            }




            /***************/
            \$('.show-details-btn').on('click', function(e) {
                e.preventDefault();
                \$(this).closest('tr').next().toggleClass('open');
                \$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
            });
            /***************/





            /**
             //add horizontal scrollbars to a simple table
             \$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style=\"width: 1000px;\" />').parent().ace_scroll(
             {
               horizontal: true,
               styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
               size: 2000,
               mouseWheelLock: true
             }
             ).css('padding-top', '12px');
             */


        })
    </script>
";
        
        $__internal_57c1464b856f3cf4741bef49b1765312ab5ef29a8c2d62ce85a69942226ecc5d->leave($__internal_57c1464b856f3cf4741bef49b1765312ab5ef29a8c2d62ce85a69942226ecc5d_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 106,  233 => 105,  223 => 101,  219 => 100,  215 => 99,  211 => 98,  207 => 97,  203 => 96,  199 => 95,  195 => 94,  190 => 91,  184 => 90,  169 => 80,  156 => 73,  150 => 70,  143 => 66,  139 => 65,  134 => 63,  130 => 61,  126 => 60,  84 => 23,  80 => 21,  74 => 20,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "NBMainBundle::admin_layout.html.twig" %}*/
/* */
/* {% block title %}SeatSeller {% endblock %}*/
/* */
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
/* */
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <h3 class="header smaller lighter blue">{{ from.nom }} <i class="fa fa-exchange"></i> {{ to.nom }} </h3>*/
/* */
/*             <div class="clearfix">*/
/*                 <div class="pull-right tableTools-container"></div>*/
/*             </div>*/
/* */
/*             <!-- div.table-responsive -->*/
/* */
/*             <!-- div.dataTables_borderWrap -->*/
/*             <div>*/
/*                 <table id="dynamic-table" class="table table-striped table-bordered table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/* */
/*                         <th>*/
/*                             <i class="ace-icon fa fa-bus bigger-110"></i>*/
/*                             Compagnie*/
/*                         </th>*/
/* */
/*                         <th>*/
/*                             <i class="ace-icon fa fa-clock-o bigger-110 "></i>*/
/*                             Départ*/
/*                         </th>*/
/*                         <th>*/
/*                             <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>*/
/*                             Arrivée*/
/*                         </th>*/
/* */
/*                         <th>Commission</th>*/
/*                         <th>Tarif</th>*/
/*                         <th></th>*/
/* */
/* */
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for key, val in travel %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="#">{{ val.compagnie.nom }}</a>*/
/*                         </td>*/
/*                         <td>{{ val.heureDepart | date('H:i') }}</td>*/
/*                         <td>{{ val.HeureArrivee | date('H:i') }}</td>*/
/* */
/*                         <td>4%</td>*/
/* */
/*                         <td> <span class="pull-right"><strong>XOF {{ val.prix | number_format(0, '.', ' ')  }}</strong></span>*/
/*                         </td>*/
/*                         <td>*/
/*                             <a href="{{ path('nb_main_custInfo', {'travel': val.id, 'dateJ': dateJ }) }}" class="btn btn-primary">*/
/*                                 <i class="ace-icon fa fa-flask align-top bigger-125"></i>*/
/*                                 Reserver*/
/*                             </a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                  </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block pagescript %}*/
/*     <!--[if lte IE 8]>*/
/*     <script src="assets/js/excanvas.min.js"></script>*/
/*     <![endif]-->*/
/*     <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/buttons.flash.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/buttons.colVis.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/*     <!-- inline scripts related to this page -->*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/*             //initiate dataTables plugin*/
/*             var myTable =*/
/*                     $('#dynamic-table')*/
/*                         //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)*/
/*                             .DataTable( {*/
/*                                 bAutoWidth: false,*/
/*                                 "aoColumns": [*/
/*                                     { "bSortable": false },*/
/*                                     null, null,null, null, null, null, null,*/
/*                                     { "bSortable": false }*/
/*                                 ],*/
/*                                 "aaSorting": [],*/
/* */
/* */
/*                                 //"bProcessing": true,*/
/*                                 //"bServerSide": true,*/
/*                                 //"sAjaxSource": "http://127.0.0.1/table.php"	,*/
/* */
/*                                 //,*/
/*                                 //"sScrollY": "200px",*/
/*                                 //"bPaginate": false,*/
/* */
/*                                 //"sScrollX": "100%",*/
/*                                 //"sScrollXInner": "120%",*/
/*                                 //"bScrollCollapse": true,*/
/*                                 //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"*/
/*                                 //you may want to wrap the table inside a "div.dataTables_borderWrap" element*/
/* */
/*                                 "iDisplayLength": 50*/
/*                             } );*/
/* */
/* */
/* */
/*             $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';*/
/* */
/*             new $.fn.dataTable.Buttons( myTable, {*/
/*                 buttons: [*/
/*                     {*/
/*                         "extend": "colvis",*/
/*                         "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",*/
/*                         "className": "btn btn-white btn-primary btn-bold",*/
/*                         columns: ':not(:first):not(:last)'*/
/*                     },*/
/*                     {*/
/*                         "extend": "copy",*/
/*                         "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",*/
/*                         "className": "btn btn-white btn-primary btn-bold"*/
/*                     },*/
/*                     {*/
/*                         "extend": "csv",*/
/*                         "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",*/
/*                         "className": "btn btn-white btn-primary btn-bold"*/
/*                     },*/
/*                     {*/
/*                         "extend": "excel",*/
/*                         "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",*/
/*                         "className": "btn btn-white btn-primary btn-bold"*/
/*                     },*/
/*                     {*/
/*                         "extend": "pdf",*/
/*                         "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",*/
/*                         "className": "btn btn-white btn-primary btn-bold"*/
/*                     },*/
/*                     {*/
/*                         "extend": "print",*/
/*                         "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",*/
/*                         "className": "btn btn-white btn-primary btn-bold",*/
/*                         autoPrint: false,*/
/*                         message: 'This print was produced using the Print button for DataTables'*/
/*                     }*/
/*                 ]*/
/*             } );*/
/*             myTable.buttons().container().appendTo( $('.tableTools-container') );*/
/* */
/*             //style the message box*/
/*             var defaultCopyAction = myTable.button(1).action();*/
/*             myTable.button(1).action(function (e, dt, button, config) {*/
/*                 defaultCopyAction(e, dt, button, config);*/
/*                 $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');*/
/*             });*/
/* */
/* */
/*             var defaultColvisAction = myTable.button(0).action();*/
/*             myTable.button(0).action(function (e, dt, button, config) {*/
/* */
/*                 defaultColvisAction(e, dt, button, config);*/
/* */
/* */
/*                 if($('.dt-button-collection > .dropdown-menu').length == 0) {*/
/*                     $('.dt-button-collection')*/
/*                             .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')*/
/*                             .find('a').attr('href', '#').wrap("<li />")*/
/*                 }*/
/*                 $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')*/
/*             });*/
/* */
/*             ////*/
/* */
/*             setTimeout(function() {*/
/*                 $($('.tableTools-container')).find('a.dt-button').each(function() {*/
/*                     var div = $(this).find(' > div').first();*/
/*                     if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});*/
/*                     else $(this).tooltip({container: 'body', title: $(this).text()});*/
/*                 });*/
/*             }, 500);*/
/* */
/* */
/* */
/* */
/* */
/*             myTable.on( 'select', function ( e, dt, type, index ) {*/
/*                 if ( type === 'row' ) {*/
/*                     $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);*/
/*                 }*/
/*             } );*/
/*             myTable.on( 'deselect', function ( e, dt, type, index ) {*/
/*                 if ( type === 'row' ) {*/
/*                     $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);*/
/*                 }*/
/*             } );*/
/* */
/* */
/* */
/* */
/*             /////////////////////////////////*/
/*             //table checkboxes*/
/*             $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);*/
/* */
/*             //select/deselect all rows according to table header checkbox*/
/*             $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){*/
/*                 var th_checked = this.checked;//checkbox inside "TH" table header*/
/* */
/*                 $('#dynamic-table').find('tbody > tr').each(function(){*/
/*                     var row = this;*/
/*                     if(th_checked) myTable.row(row).select();*/
/*                     else  myTable.row(row).deselect();*/
/*                 });*/
/*             });*/
/* */
/*             //select/deselect a row when the checkbox is checked/unchecked*/
/*             $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){*/
/*                 var row = $(this).closest('tr').get(0);*/
/*                 if(this.checked) myTable.row(row).deselect();*/
/*                 else myTable.row(row).select();*/
/*             });*/
/* */
/* */
/* */
/*             $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {*/
/*                 e.stopImmediatePropagation();*/
/*                 e.stopPropagation();*/
/*                 e.preventDefault();*/
/*             });*/
/* */
/* */
/* */
/*             //And for the first simple table, which doesn't have TableTools or dataTables*/
/*             //select/deselect all rows according to table header checkbox*/
/*             var active_class = 'active';*/
/*             $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){*/
/*                 var th_checked = this.checked;//checkbox inside "TH" table header*/
/* */
/*                 $(this).closest('table').find('tbody > tr').each(function(){*/
/*                     var row = this;*/
/*                     if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);*/
/*                     else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);*/
/*                 });*/
/*             });*/
/* */
/*             //select/deselect a row when the checkbox is checked/unchecked*/
/*             $('#simple-table').on('click', 'td input[type=checkbox]' , function(){*/
/*                 var $row = $(this).closest('tr');*/
/*                 if($row.is('.detail-row ')) return;*/
/*                 if(this.checked) $row.addClass(active_class);*/
/*                 else $row.removeClass(active_class);*/
/*             });*/
/* */
/* */
/* */
/*             /********************************//* */
/*             //add tooltip for small view action buttons in dropdown menu*/
/*             $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});*/
/* */
/*             //tooltip placement on right or left*/
/*             function tooltip_placement(context, source) {*/
/*                 var $source = $(source);*/
/*                 var $parent = $source.closest('table')*/
/*                 var off1 = $parent.offset();*/
/*                 var w1 = $parent.width();*/
/* */
/*                 var off2 = $source.offset();*/
/*                 //var w2 = $source.width();*/
/* */
/*                 if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';*/
/*                 return 'left';*/
/*             }*/
/* */
/* */
/* */
/* */
/*             /***************//* */
/*             $('.show-details-btn').on('click', function(e) {*/
/*                 e.preventDefault();*/
/*                 $(this).closest('tr').next().toggleClass('open');*/
/*                 $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');*/
/*             });*/
/*             /***************//* */
/* */
/* */
/* */
/* */
/* */
/*             /***/
/*              //add horizontal scrollbars to a simple table*/
/*              $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(*/
/*              {*/
/*                horizontal: true,*/
/*                styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)*/
/*                size: 2000,*/
/*                mouseWheelLock: true*/
/*              }*/
/*              ).css('padding-top', '12px');*/
/*              *//* */
/* */
/* */
/*         })*/
/*     </script>*/
/* {% endblock %}*/
