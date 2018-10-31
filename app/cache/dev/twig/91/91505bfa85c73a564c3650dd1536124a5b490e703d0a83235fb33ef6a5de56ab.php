<?php

/* NBMainBundle:includes:boxes.html.twig */
class __TwigTemplate_24f0824dc6e439a51fecc3b0b7ea74a018af1ccb71199392f163b48871a6a87b extends Twig_Template
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
        $__internal_c695bbb24fa5a84cf68cffdb1ac71ae7c1c9368feb9cd68e1282914490b7ca35 = $this->env->getExtension("native_profiler");
        $__internal_c695bbb24fa5a84cf68cffdb1ac71ae7c1c9368feb9cd68e1282914490b7ca35->enter($__internal_c695bbb24fa5a84cf68cffdb1ac71ae7c1c9368feb9cd68e1282914490b7ca35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:includes:boxes.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"space-6\"></div>

    <div class=\"col-sm-12 infobox-container\">
        <div class=\"infobox infobox-green\">
            <div class=\"infobox-icon\">
                <i class=\"ace-icon fa fa-comments\"></i>
            </div>

            <div class=\"infobox-data\">
                <span class=\"infobox-data-number\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nombreBilletVendu"]) ? $context["nombreBilletVendu"] : $this->getContext($context, "nombreBilletVendu")), "total", array()), "html", null, true);
        echo "</span>
                <div class=\"infobox-content\">Billets vendus ce mois</div>
            </div>
        </div>

        <div class=\"infobox infobox-blue\">
            <div class=\"infobox-icon\">
                <i class=\"ace-icon fa fa-twitter\"></i>
            </div>

            <div class=\"infobox-data\">
                <span class=\"infobox-data-number\">0</span>
                <div class=\"infobox-content\">Billets annulés ce mois</div>
            </div>


        </div>

        <div class=\"infobox infobox-pink\">
            <div class=\"infobox-icon\">
                <i class=\"ace-icon fa fa-money\"></i>
            </div>

            <div class=\"infobox-data\">
                <span class=\"infobox-data-number\">";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cumulCommission"]) ? $context["cumulCommission"] : $this->getContext($context, "cumulCommission")), "somme", array()), 0, ".", " "), "html", null, true);
        echo " FCFA</span>
                <div class=\"infobox-content\">Cumul commission</div>
            </div>
        </div>

        <div class=\"infobox infobox-green\">
            <div class=\"infobox-icon\">
                <i class=\"ace-icon fa fa-money\"></i>
            </div>

            <div class=\"infobox-data\">
                <span class=\"infobox-data-number\">";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["solde"]) ? $context["solde"] : $this->getContext($context, "solde")), 0, ".", " "), "html", null, true);
        echo " FCFA</span>
                <div class=\"infobox-content\">Solde</div>
            </div>
        </div>

    </div>

    <div class=\"vspace-12-sm\"></div>


</div><!-- /.row -->

<div class=\"hr hr32 hr-dotted\"></div>
";
        
        $__internal_c695bbb24fa5a84cf68cffdb1ac71ae7c1c9368feb9cd68e1282914490b7ca35->leave($__internal_c695bbb24fa5a84cf68cffdb1ac71ae7c1c9368feb9cd68e1282914490b7ca35_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle:includes:boxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 46,  61 => 35,  34 => 11,  22 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="space-6"></div>*/
/* */
/*     <div class="col-sm-12 infobox-container">*/
/*         <div class="infobox infobox-green">*/
/*             <div class="infobox-icon">*/
/*                 <i class="ace-icon fa fa-comments"></i>*/
/*             </div>*/
/* */
/*             <div class="infobox-data">*/
/*                 <span class="infobox-data-number">{{ nombreBilletVendu.total }}</span>*/
/*                 <div class="infobox-content">Billets vendus ce mois</div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="infobox infobox-blue">*/
/*             <div class="infobox-icon">*/
/*                 <i class="ace-icon fa fa-twitter"></i>*/
/*             </div>*/
/* */
/*             <div class="infobox-data">*/
/*                 <span class="infobox-data-number">0</span>*/
/*                 <div class="infobox-content">Billets annulés ce mois</div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/*         <div class="infobox infobox-pink">*/
/*             <div class="infobox-icon">*/
/*                 <i class="ace-icon fa fa-money"></i>*/
/*             </div>*/
/* */
/*             <div class="infobox-data">*/
/*                 <span class="infobox-data-number">{{ cumulCommission.somme | number_format(0, '.', ' ') }} FCFA</span>*/
/*                 <div class="infobox-content">Cumul commission</div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="infobox infobox-green">*/
/*             <div class="infobox-icon">*/
/*                 <i class="ace-icon fa fa-money"></i>*/
/*             </div>*/
/* */
/*             <div class="infobox-data">*/
/*                 <span class="infobox-data-number">{{  solde | number_format(0, '.', ' ') }} FCFA</span>*/
/*                 <div class="infobox-content">Solde</div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="vspace-12-sm"></div>*/
/* */
/* */
/* </div><!-- /.row -->*/
/* */
/* <div class="hr hr32 hr-dotted"></div>*/
/* */
