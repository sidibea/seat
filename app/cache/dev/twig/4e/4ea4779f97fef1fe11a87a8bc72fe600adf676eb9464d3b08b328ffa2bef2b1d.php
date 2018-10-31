<?php

/* NBMainBundle::custInfo.html.twig */
class __TwigTemplate_82676ff14721ffa55349c4d0403beb893511a14190f4da25d5e85a2a37dc8cfb extends Twig_Template
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
        $__internal_bd2a15c82d9923539e83c892d486162e8508ae807f8a512277421dbd5a863ff0 = $this->env->getExtension("native_profiler");
        $__internal_bd2a15c82d9923539e83c892d486162e8508ae807f8a512277421dbd5a863ff0->enter($__internal_bd2a15c82d9923539e83c892d486162e8508ae807f8a512277421dbd5a863ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::custInfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd2a15c82d9923539e83c892d486162e8508ae807f8a512277421dbd5a863ff0->leave($__internal_bd2a15c82d9923539e83c892d486162e8508ae807f8a512277421dbd5a863ff0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9a463273fdb9c7e1c196a4b38df11c5096fcb59c7952556e1ddaf93a3270094 = $this->env->getExtension("native_profiler");
        $__internal_b9a463273fdb9c7e1c196a4b38df11c5096fcb59c7952556e1ddaf93a3270094->enter($__internal_b9a463273fdb9c7e1c196a4b38df11c5096fcb59c7952556e1ddaf93a3270094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SeatSeller ";
        
        $__internal_b9a463273fdb9c7e1c196a4b38df11c5096fcb59c7952556e1ddaf93a3270094->leave($__internal_b9a463273fdb9c7e1c196a4b38df11c5096fcb59c7952556e1ddaf93a3270094_prof);

    }

    // line 5
    public function block_breadcumbs($context, array $blocks = array())
    {
        $__internal_3a1a6901b4b85562052b0636cbb9a5cab09aec8f8472f66379112f5de8060550 = $this->env->getExtension("native_profiler");
        $__internal_3a1a6901b4b85562052b0636cbb9a5cab09aec8f8472f66379112f5de8060550->enter($__internal_3a1a6901b4b85562052b0636cbb9a5cab09aec8f8472f66379112f5de8060550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumbs"));

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
        
        $__internal_3a1a6901b4b85562052b0636cbb9a5cab09aec8f8472f66379112f5de8060550->leave($__internal_3a1a6901b4b85562052b0636cbb9a5cab09aec8f8472f66379112f5de8060550_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_5817dc23848f9f73ee103a5a725e65994a783fd40087cb46ffe2ff3c1a04a9c5 = $this->env->getExtension("native_profiler");
        $__internal_5817dc23848f9f73ee103a5a725e65994a783fd40087cb46ffe2ff3c1a04a9c5->enter($__internal_5817dc23848f9f73ee103a5a725e65994a783fd40087cb46ffe2ff3c1a04a9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_5817dc23848f9f73ee103a5a725e65994a783fd40087cb46ffe2ff3c1a04a9c5->leave($__internal_5817dc23848f9f73ee103a5a725e65994a783fd40087cb46ffe2ff3c1a04a9c5_prof);

    }

    // line 132
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_acb0d61f5e1854cd57dadce08b6f58de75aa8680ddbe6e84ef1bd63c3c774adf = $this->env->getExtension("native_profiler");
        $__internal_acb0d61f5e1854cd57dadce08b6f58de75aa8680ddbe6e84ef1bd63c3c774adf->enter($__internal_acb0d61f5e1854cd57dadce08b6f58de75aa8680ddbe6e84ef1bd63c3c774adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        // line 133
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/parsley.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_acb0d61f5e1854cd57dadce08b6f58de75aa8680ddbe6e84ef1bd63c3c774adf->leave($__internal_acb0d61f5e1854cd57dadce08b6f58de75aa8680ddbe6e84ef1bd63c3c774adf_prof);

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
