<?php

/* NBMainBundle::mybookings.html.twig */
class __TwigTemplate_ddab488c8c7ed97f5e838f56657b14ae3a9d8e4dd8b0b0ab9fe593df92017701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NBMainBundle::admin_layout.html.twig", "NBMainBundle::mybookings.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "SeatSeller ";
    }

    // line 5
    public function block_breadcumbs($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"breadcrumbs ace-save-state\" id=\"breadcrumbs\">
        <ul class=\"breadcrumb\">
            <li>
                <i class=\"ace-icon fa fa-home home-icon\"></i>
                <a href=\"#\">Acceuil</a>
            </li>
            <li class=\"active\">Mes reservations</li>
        </ul><!-- /.breadcrumb -->

    </div>

";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"row\">
    <h3 class=\"header smaller lighter blue\">Reservations recentes </h3>
</div>


    <div class=\"row\">
        <div class=\"col-xs-12\">

            <div class=\"clearfix\">
                <div class=\"pull-right tableTools-container\"></div>
            </div>
            <div class=\"table-header\">
                Reservations
            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>
                <table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\">
                    <thead>
                    <tr>
                        <th class=\"center\">
                           #
                        </th>
                        <th>
                            <i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
                            Clients
                        </th>
                        <th>Axes</th>
                        <th>Date R</th>
                        <th>Date V</th>
                        <th class=\"hidden-480\">Tarifs</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) ? $context["reservation"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 58
            echo "                       <tr>
                           <td width=\"60\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "ticketNo", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "client", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "axes", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "date_add", array()), "d-m-Y à h:i:s"), "html", null, true);
            echo "</td>
                           <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "d-m-Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "heure_depart", array()), "h:i"), "html", null, true);
            echo "</td>
                           <td><span class=\"pull-right\">";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["val"], "prix", array()), 0, ".", " "), "html", null, true);
            echo " FCFA</span> </td>
                           <td></td>
                       </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    // line 75
    public function block_pagescript($context, array $blocks = array())
    {
        // line 76
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/dataTables.select.min.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 87
    public function block_scripts($context, array $blocks = array())
    {
        // line 88
        echo "    <script type=\"text/javascript\">
        jQuery(function(\$) {
            //initiate dataTables plugin
            var myTable =
                    \$('#dynamic-table')
                        //.wrap(\"<div class='dataTables_borderWrap' />\")   //if you are applying horizontal scrolling (sScrollX)
                            .DataTable( {
                                bAutoWidth: false,
                                \"aoColumns\": [
                                    { \"bSortable\": false },
                                    null, null,null, null, null,
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

                                //\"iDisplayLength\": 50


                                select: {
                                    style: 'multi'
                                }
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
    }

    public function getTemplateName()
    {
        return "NBMainBundle::mybookings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 88,  185 => 87,  178 => 83,  174 => 82,  170 => 81,  166 => 80,  162 => 79,  158 => 78,  154 => 77,  149 => 76,  146 => 75,  137 => 68,  127 => 64,  121 => 63,  117 => 62,  113 => 61,  109 => 60,  105 => 59,  102 => 58,  98 => 57,  59 => 20,  56 => 19,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
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
/*             <li class="active">Mes reservations</li>*/
/*         </ul><!-- /.breadcrumb -->*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*     <h3 class="header smaller lighter blue">Reservations recentes </h3>*/
/* </div>*/
/* */
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/* */
/*             <div class="clearfix">*/
/*                 <div class="pull-right tableTools-container"></div>*/
/*             </div>*/
/*             <div class="table-header">*/
/*                 Reservations*/
/*             </div>*/
/* */
/*             <!-- div.table-responsive -->*/
/* */
/*             <!-- div.dataTables_borderWrap -->*/
/*             <div>*/
/*                 <table id="dynamic-table" class="table table-striped table-bordered table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th class="center">*/
/*                            #*/
/*                         </th>*/
/*                         <th>*/
/*                             <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>*/
/*                             Clients*/
/*                         </th>*/
/*                         <th>Axes</th>*/
/*                         <th>Date R</th>*/
/*                         <th>Date V</th>*/
/*                         <th class="hidden-480">Tarifs</th>*/
/*                     </tr>*/
/*                     </thead>*/
/* */
/*                     <tbody>*/
/*                     {% for key, val in reservation %}*/
/*                        <tr>*/
/*                            <td width="60">{{ val.ticketNo }}</td>*/
/*                            <td>{{ val.client }}</td>*/
/*                            <td>{{ val.axes }}</td>*/
/*                            <td>{{ val.date_add | date('d-m-Y à h:i:s')  }}</td>*/
/*                            <td>{{ val.doj | date('d-m-Y') }} à {{ val.heure_depart  | date('h:i')}}</td>*/
/*                            <td><span class="pull-right">{{ val.prix | number_format(0, '.', ' ')  }} FCFA</span> </td>*/
/*                            <td></td>*/
/*                        </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block pagescript %}*/
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
/*                                     null, null,null, null, null,*/
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
/*                                 //"iDisplayLength": 50*/
/* */
/* */
/*                                 select: {*/
/*                                     style: 'multi'*/
/*                                 }*/
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
