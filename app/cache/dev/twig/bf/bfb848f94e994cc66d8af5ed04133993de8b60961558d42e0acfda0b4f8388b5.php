<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a1cbe632d055bfdce4d88288da0ec99cf0d8c4a8ad485b150cc9a95f9fdf44a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3833bc48b98aa95154ef6e2b3de49b8301df8d92fd11561d64ac7c2c2373b87 = $this->env->getExtension("native_profiler");
        $__internal_d3833bc48b98aa95154ef6e2b3de49b8301df8d92fd11561d64ac7c2c2373b87->enter($__internal_d3833bc48b98aa95154ef6e2b3de49b8301df8d92fd11561d64ac7c2c2373b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3833bc48b98aa95154ef6e2b3de49b8301df8d92fd11561d64ac7c2c2373b87->leave($__internal_d3833bc48b98aa95154ef6e2b3de49b8301df8d92fd11561d64ac7c2c2373b87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2fb2278959dc106612a426b8269d87fd6f9ed18e2dde4c12b2b65336da1440f9 = $this->env->getExtension("native_profiler");
        $__internal_2fb2278959dc106612a426b8269d87fd6f9ed18e2dde4c12b2b65336da1440f9->enter($__internal_2fb2278959dc106612a426b8269d87fd6f9ed18e2dde4c12b2b65336da1440f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2fb2278959dc106612a426b8269d87fd6f9ed18e2dde4c12b2b65336da1440f9->leave($__internal_2fb2278959dc106612a426b8269d87fd6f9ed18e2dde4c12b2b65336da1440f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bdc07d9d0eb219f2c4475cee76275e44018b5a0133e2fb40cc19205241979ba = $this->env->getExtension("native_profiler");
        $__internal_3bdc07d9d0eb219f2c4475cee76275e44018b5a0133e2fb40cc19205241979ba->enter($__internal_3bdc07d9d0eb219f2c4475cee76275e44018b5a0133e2fb40cc19205241979ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3bdc07d9d0eb219f2c4475cee76275e44018b5a0133e2fb40cc19205241979ba->leave($__internal_3bdc07d9d0eb219f2c4475cee76275e44018b5a0133e2fb40cc19205241979ba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a2444421f86732f4747cc576a8b19c754f281a63c25aac65cca0adfdd952b0e = $this->env->getExtension("native_profiler");
        $__internal_4a2444421f86732f4747cc576a8b19c754f281a63c25aac65cca0adfdd952b0e->enter($__internal_4a2444421f86732f4747cc576a8b19c754f281a63c25aac65cca0adfdd952b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a2444421f86732f4747cc576a8b19c754f281a63c25aac65cca0adfdd952b0e->leave($__internal_4a2444421f86732f4747cc576a8b19c754f281a63c25aac65cca0adfdd952b0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
