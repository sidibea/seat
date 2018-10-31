<?php

/* NBMainBundle::custInfo.html.twig */
class __TwigTemplate_155a2fc7fc81905e9caef7feec8fd1aaa334e08c8ce87b7398b5288e55cf2936 extends Twig_Template
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
            <li class=\"active\">Billet de bus</li>
        </ul><!-- /.breadcrumb -->

    </div>

";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"row\">
    <h3 class=\"header smaller lighter blue\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["travel"]) ? $context["travel"] : null), "axes", array()), "source", array()), "nom", array()), "html", null, true);
        echo " <i class=\"fa fa-exchange\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["travel"]) ? $context["travel"] : null), "axes", array()), "destination", array()), "nom", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["dateJ"]) ? $context["dateJ"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["travel"]) ? $context["travel"] : null), "pointEmbarquement", array()));
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
        $context["commission"] = ($this->getAttribute((isset($context["travel"]) ? $context["travel"] : null), "prix", array()) - ($this->getAttribute((isset($context["travel"]) ? $context["travel"] : null), "prix", array()) - (($this->getAttribute((isset($context["travel"]) ? $context["travel"] : null), "prix", array()) * 4) / 100)));
        // line 107
        echo "                    <table class=\"table  table-bordered table-hover\">
                        <tr>
                            <td><strong>Prix du billet</strong> </td> <td> <strong>XOF ";
        // line 109
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["travel"]) ? $context["travel"] : null), "prix", array()), 0, ".", " "), "html", null, true);
        echo "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Compagnie de transport</strong> </td> <td> <strong>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["travel"]) ? $context["travel"] : null), "compagnie", array()), "nom", array()), "html", null, true);
        echo "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Adresse</strong> </td> <td> <strong>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["travel"]) ? $context["travel"] : null), "compagnie", array()), "adresse", array()), "html", null, true);
        echo "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Commission de l'agent</strong> </td> <td> <strong>XOF ";
        // line 118
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["commission"]) ? $context["commission"] : null), 0, ".", " "), "html", null, true);
        echo "</strong></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.col -->


</div>

";
    }

    // line 132
    public function block_pagescript($context, array $blocks = array())
    {
        // line 133
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/parsley.min.js"), "html", null, true);
        echo "\"></script>

";
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
        return array (  212 => 133,  209 => 132,  192 => 118,  186 => 115,  180 => 112,  174 => 109,  170 => 107,  168 => 106,  143 => 83,  132 => 81,  128 => 80,  117 => 72,  61 => 21,  58 => 20,  55 => 19,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
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
