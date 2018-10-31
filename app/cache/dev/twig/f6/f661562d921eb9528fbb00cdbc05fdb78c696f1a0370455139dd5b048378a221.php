<?php

/* NBMainBundle:includes:boxes.html.twig */
class __TwigTemplate_5c923a5724b2fbfbedd391e0d78d0983b1cfc9881c836abbc9400fd6188721be extends Twig_Template
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
        $__internal_f52e89684aa2c1c3b88640f5787a16a2c861c7aa7192d88d8e28f24a3001e45b = $this->env->getExtension("native_profiler");
        $__internal_f52e89684aa2c1c3b88640f5787a16a2c861c7aa7192d88d8e28f24a3001e45b->enter($__internal_f52e89684aa2c1c3b88640f5787a16a2c861c7aa7192d88d8e28f24a3001e45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:includes:boxes.html.twig"));

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
        
        $__internal_f52e89684aa2c1c3b88640f5787a16a2c861c7aa7192d88d8e28f24a3001e45b->leave($__internal_f52e89684aa2c1c3b88640f5787a16a2c861c7aa7192d88d8e28f24a3001e45b_prof);

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
