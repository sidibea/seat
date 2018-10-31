<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b94aacc498e4b7126ac5e5b7f6a0d60d486807e008497f8b32ab069b126aa84a extends Twig_Template
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
        $__internal_716f9d4b976ca01a1588067570813570e5ef72652df07ed2b05d53d9c80d2e04 = $this->env->getExtension("native_profiler");
        $__internal_716f9d4b976ca01a1588067570813570e5ef72652df07ed2b05d53d9c80d2e04->enter($__internal_716f9d4b976ca01a1588067570813570e5ef72652df07ed2b05d53d9c80d2e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716f9d4b976ca01a1588067570813570e5ef72652df07ed2b05d53d9c80d2e04->leave($__internal_716f9d4b976ca01a1588067570813570e5ef72652df07ed2b05d53d9c80d2e04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_44be555309bf3cc20301c7aace83ef5782022769ef04fd72f84e23cf41de2497 = $this->env->getExtension("native_profiler");
        $__internal_44be555309bf3cc20301c7aace83ef5782022769ef04fd72f84e23cf41de2497->enter($__internal_44be555309bf3cc20301c7aace83ef5782022769ef04fd72f84e23cf41de2497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44be555309bf3cc20301c7aace83ef5782022769ef04fd72f84e23cf41de2497->leave($__internal_44be555309bf3cc20301c7aace83ef5782022769ef04fd72f84e23cf41de2497_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a3a6945519c34e21d71529b4824f40c6a201619fe3fdf8e8c5b8d0a6aca4ae55 = $this->env->getExtension("native_profiler");
        $__internal_a3a6945519c34e21d71529b4824f40c6a201619fe3fdf8e8c5b8d0a6aca4ae55->enter($__internal_a3a6945519c34e21d71529b4824f40c6a201619fe3fdf8e8c5b8d0a6aca4ae55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3a6945519c34e21d71529b4824f40c6a201619fe3fdf8e8c5b8d0a6aca4ae55->leave($__internal_a3a6945519c34e21d71529b4824f40c6a201619fe3fdf8e8c5b8d0a6aca4ae55_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40412f9af2cd8edba749a7109fd906a72684669c5de8c8b51917f43bc84ee61a = $this->env->getExtension("native_profiler");
        $__internal_40412f9af2cd8edba749a7109fd906a72684669c5de8c8b51917f43bc84ee61a->enter($__internal_40412f9af2cd8edba749a7109fd906a72684669c5de8c8b51917f43bc84ee61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_40412f9af2cd8edba749a7109fd906a72684669c5de8c8b51917f43bc84ee61a->leave($__internal_40412f9af2cd8edba749a7109fd906a72684669c5de8c8b51917f43bc84ee61a_prof);

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
