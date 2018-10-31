<?php

/* NBMainBundle:includes:boxes.html.twig */
class __TwigTemplate_d7a768e6f56fad09b4d3ea61980b312133b7426aebdc646d6ae4f9f437c9b8fc extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nombreBilletVendu"]) ? $context["nombreBilletVendu"] : null), "total", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cumulCommission"]) ? $context["cumulCommission"] : null), "somme", array()), 0, ".", " "), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["solde"]) ? $context["solde"] : null), 0, ".", " "), "html", null, true);
        echo " FCFA</span>
                <div class=\"infobox-content\">Solde</div>
            </div>
        </div>

    </div>

    <div class=\"vspace-12-sm\"></div>


</div><!-- /.row -->

<div class=\"hr hr32 hr-dotted\"></div>
";
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
        return array (  72 => 46,  58 => 35,  31 => 11,  19 => 1,);
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
