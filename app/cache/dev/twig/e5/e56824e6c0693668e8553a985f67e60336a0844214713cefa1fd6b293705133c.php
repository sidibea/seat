<?php

/* NBMainBundle::custInfo.html.twig */
class __TwigTemplate_a85874cfebebff8c672cfd34ad65c438ac4935635d6e608c54e8bdd087804554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NBMainBundle::admin_layout.html.twig", "NBMainBundle::custInfo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcumbs' => array($this, 'block_breadcumbs'),
            'content' => array($this, 'block_content'),
            'pagescript' => array($this, 'block_pagescript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NBMainBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9f853406b70b374be816ccc1ace450ce239cc9c29afccdf92c13fb8a2782dd1 = $this->env->getExtension("native_profiler");
        $__internal_d9f853406b70b374be816ccc1ace450ce239cc9c29afccdf92c13fb8a2782dd1->enter($__internal_d9f853406b70b374be816ccc1ace450ce239cc9c29afccdf92c13fb8a2782dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::custInfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9f853406b70b374be816ccc1ace450ce239cc9c29afccdf92c13fb8a2782dd1->leave($__internal_d9f853406b70b374be816ccc1ace450ce239cc9c29afccdf92c13fb8a2782dd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3656948b57e4d85d8c303761f385386523b131ee6ca498a09afb7ff7edbca12a = $this->env->getExtension("native_profiler");
        $__internal_3656948b57e4d85d8c303761f385386523b131ee6ca498a09afb7ff7edbca12a->enter($__internal_3656948b57e4d85d8c303761f385386523b131ee6ca498a09afb7ff7edbca12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SeatSeller ";
        
        $__internal_3656948b57e4d85d8c303761f385386523b131ee6ca498a09afb7ff7edbca12a->leave($__internal_3656948b57e4d85d8c303761f385386523b131ee6ca498a09afb7ff7edbca12a_prof);

    }

    // line 5
    public function block_breadcumbs($context, array $blocks = array())
    {
        $__internal_bef1576c1684486ab7e2d226d0030d9c0d64bb9a92923cf3a30bbf5946167b93 = $this->env->getExtension("native_profiler");
        $__internal_bef1576c1684486ab7e2d226d0030d9c0d64bb9a92923cf3a30bbf5946167b93->enter($__internal_bef1576c1684486ab7e2d226d0030d9c0d64bb9a92923cf3a30bbf5946167b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumbs"));

        // line 6
        echo "    <div class=\"breadcrumbs ace-save-state\" id=\"breadcrumbs\">
        <ul class=\"breadcrumb\">
            <li>
                <i class=\"ace-icon fa fa-home home-icon\"></i>
                <a href=\"#\">Acceuil</a>
            </li>
            <li class=\"active\">Billet de bus</li>
        </ul><!-- /.breadcrumb -->

    </div>

";
        
        $__internal_bef1576c1684486ab7e2d226d0030d9c0d64bb9a92923cf3a30bbf5946167b93->leave($__internal_bef1576c1684486ab7e2d226d0030d9c0d64bb9a92923cf3a30bbf5946167b93_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_646463528fce4d156aab12ab6d31f0703b8ec0a772cb71ee552fa5eb35fe68d8 = $this->env->getExtension("native_profiler");
        $__internal_646463528fce4d156aab12ab6d31f0703b8ec0a772cb71ee552fa5eb35fe68d8->enter($__internal_646463528fce4d156aab12ab6d31f0703b8ec0a772cb71ee552fa5eb35fe68d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "<div class=\"row\">
    <h3 class=\"header smaller lighter blue\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")), "axes", array()), "source", array()), "nom", array()), "html", null, true);
        echo " <i class=\"fa fa-exchange\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")), "axes", array()), "destination", array()), "nom", array()), "html", null, true);
        echo " </h3>
</div>

<div class=\"row\">
    <div class=\"alert alert-danger\" style=\"display: none\"></div>
    <div class=\"alert alert-block alert-success\" style=\"display: none\"></div>
    <div class=\"loader\" style=\"text-align: center; display: none;\"></div>
    <form id=\"booking\">
        <div class=\"col-md-7\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div>
                        <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <i class=\"fa fa-calendar bigger-110\"></i>
                </span>
                            <input class=\"form-control date-picker\"  required=\"\"  name=\"nom\" type=\"text\" placeholder=\"Nom du passager\" />
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-3\">
                    <input name=\"age\" class=\"rb_age\" placeholder=\"Age\" data-parsley-type=\"digits\"  type=\"text\">
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"input-group\">

                        <input class=\"tb_dender\" value=\"H\" name=\"gender\" required=\"\" type=\"radio\">&nbsp;  &nbsp;<label class=\"tb_gender\">M</label>&nbsp;  &nbsp;
                        <input name=\"gender\" value=\"F\" type=\"radio\">&nbsp;  &nbsp;<label class=\"tb_gender\">F</label>
                    </div>
                </div>
            </div>

            <div class=\"row\"> <br>
                <div class=\"col-sm-3\">
                    <div>
                        <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <i class=\"fa fa-phone bigger-110\"></i>
                </span>
                            <input class=\"form-control \"  required=\"\"  name=\"mobile\" type=\"text\" placeholder=\"Numero passager\" />
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div>
                        <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"fa fa-envelope-o  bigger-110\"></i>
                        </span>
                            <input class=\"form-control \"    name=\"email\" type=\"email\" placeholder=\"Adresse email du passager\" />
                            <input type=\"hidden\" name=\"dateJ\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["dateJ"]) ? $context["dateJ"] : $this->getContext($context, "dateJ")), "html", null, true);
        echo "\" >
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div>
                        <div class=\"form-group\">
                            <select class=\"form-control\" name=\"bordingPoint\">
                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")), "pointEmbarquement", array()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 81
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\"> <br>
                <div class=\"col-md-8\">
                    <button type=\"button\" onclick=\"SeatSellerBooking()\"  class=\"btn btn-primary center\">Reserver</button>
                </div>
            </div>
        </div>


    </form>

    <div class=\"col-md-5\">
        <div class=\"widget-box \">
            <div class=\"widget-header\">
                <h4 class=\"smaller\">Recapitulatif</h4>
            </div>

            <div class=\"widget-body\">
                <div class=\"widget-main\">
                    ";
        // line 106
        $context["commission"] = ($this->getAttribute((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")), "prix", array()) - ($this->getAttribute((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")), "prix", array()) - (($this->getAttribute((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")), "prix", array()) * 4) / 100)));
        // line 107
        echo "                    <table class=\"table  table-bordered table-hover\">
                        <tr>
                            <td><strong>Prix du billet</strong> </td> <td> <strong>XOF ";
        // line 109
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")), "prix", array()), 0, ".", " "), "html", null, true);
        echo "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Compagnie de transport</strong> </td> <td> <strong>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")), "compagnie", array()), "nom", array()), "html", null, true);
        echo "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Adresse</strong> </td> <td> <strong>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["travel"]) ? $context["travel"] : $this->getContext($context, "travel")), "compagnie", array()), "adresse", array()), "html", null, true);
        echo "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Commission de l'agent</strong> </td> <td> <strong>XOF ";
        // line 118
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["commission"]) ? $context["commission"] : $this->getContext($context, "commission")), 0, ".", " "), "html", null, true);
        echo "</strong></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.col -->


</div>

";
        
        $__internal_646463528fce4d156aab12ab6d31f0703b8ec0a772cb71ee552fa5eb35fe68d8->leave($__internal_646463528fce4d156aab12ab6d31f0703b8ec0a772cb71ee552fa5eb35fe68d8_prof);

    }

    // line 132
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_de49cbd051de493b56ef5b2aec94f07b0ddb5c071170ff3aa54b069cfe07124b = $this->env->getExtension("native_profiler");
        $__internal_de49cbd051de493b56ef5b2aec94f07b0ddb5c071170ff3aa54b069cfe07124b->enter($__internal_de49cbd051de493b56ef5b2aec94f07b0ddb5c071170ff3aa54b069cfe07124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 133
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/parsley.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_de49cbd051de493b56ef5b2aec94f07b0ddb5c071170ff3aa54b069cfe07124b->leave($__internal_de49cbd051de493b56ef5b2aec94f07b0ddb5c071170ff3aa54b069cfe07124b_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::custInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 133,  233 => 132,  213 => 118,  207 => 115,  201 => 112,  195 => 109,  191 => 107,  189 => 106,  164 => 83,  153 => 81,  149 => 80,  138 => 72,  82 => 21,  79 => 20,  73 => 19,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
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
/*             <li class="active">Billet de bus</li>*/
/*         </ul><!-- /.breadcrumb -->*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*     <h3 class="header smaller lighter blue">{{ travel.axes.source.nom }} <i class="fa fa-exchange"></i> {{ travel.axes.destination.nom  }} </h3>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="alert alert-danger" style="display: none"></div>*/
/*     <div class="alert alert-block alert-success" style="display: none"></div>*/
/*     <div class="loader" style="text-align: center; display: none;"></div>*/
/*     <form id="booking">*/
/*         <div class="col-md-7">*/
/*             <div class="row">*/
/*                 <div class="col-sm-3">*/
/*                     <div>*/
/*                         <div class="input-group">*/
/*                 <span class="input-group-addon">*/
/*                     <i class="fa fa-calendar bigger-110"></i>*/
/*                 </span>*/
/*                             <input class="form-control date-picker"  required=""  name="nom" type="text" placeholder="Nom du passager" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-3">*/
/*                     <input name="age" class="rb_age" placeholder="Age" data-parsley-type="digits"  type="text">*/
/*                 </div>*/
/*                 <div class="col-sm-2">*/
/*                     <div class="input-group">*/
/* */
/*                         <input class="tb_dender" value="H" name="gender" required="" type="radio">&nbsp;  &nbsp;<label class="tb_gender">M</label>&nbsp;  &nbsp;*/
/*                         <input name="gender" value="F" type="radio">&nbsp;  &nbsp;<label class="tb_gender">F</label>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row"> <br>*/
/*                 <div class="col-sm-3">*/
/*                     <div>*/
/*                         <div class="input-group">*/
/*                 <span class="input-group-addon">*/
/*                     <i class="fa fa-phone bigger-110"></i>*/
/*                 </span>*/
/*                             <input class="form-control "  required=""  name="mobile" type="text" placeholder="Numero passager" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-4">*/
/*                     <div>*/
/*                         <div class="input-group">*/
/*                         <span class="input-group-addon">*/
/*                             <i class="fa fa-envelope-o  bigger-110"></i>*/
/*                         </span>*/
/*                             <input class="form-control "    name="email" type="email" placeholder="Adresse email du passager" />*/
/*                             <input type="hidden" name="dateJ" value="{{ dateJ }}" >*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-4">*/
/*                     <div>*/
/*                         <div class="form-group">*/
/*                             <select class="form-control" name="bordingPoint">*/
/*                                 {% for key, val in travel.pointEmbarquement %}*/
/*                                 <option value="{{ val.id }}">{{ val.nom }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row"> <br>*/
/*                 <div class="col-md-8">*/
/*                     <button type="button" onclick="SeatSellerBooking()"  class="btn btn-primary center">Reserver</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </form>*/
/* */
/*     <div class="col-md-5">*/
/*         <div class="widget-box ">*/
/*             <div class="widget-header">*/
/*                 <h4 class="smaller">Recapitulatif</h4>*/
/*             </div>*/
/* */
/*             <div class="widget-body">*/
/*                 <div class="widget-main">*/
/*                     {% set commission = travel.prix - (travel.prix - ((travel.prix*4)/100)) %}*/
/*                     <table class="table  table-bordered table-hover">*/
/*                         <tr>*/
/*                             <td><strong>Prix du billet</strong> </td> <td> <strong>XOF {{ travel.prix| number_format(0, '.', ' ') }}</strong></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><strong>Compagnie de transport</strong> </td> <td> <strong>{{ travel.compagnie.nom }}</strong></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><strong>Adresse</strong> </td> <td> <strong>{{ travel.compagnie.adresse }}</strong></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><strong>Commission de l'agent</strong> </td> <td> <strong>XOF {{ commission| number_format(0, '.', ' ') }}</strong></td>*/
/*                         </tr>*/
/* */
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div><!-- /.col -->*/
/* */
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block pagescript %}*/
/*     <script src="{{ asset('assets/js/parsley.min.js') }}"></script>*/
/* */
/* {% endblock %}*/
