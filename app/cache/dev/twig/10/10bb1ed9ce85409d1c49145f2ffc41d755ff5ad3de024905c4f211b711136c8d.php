<?php

/* NBMainBundle::index.html.twig */
class __TwigTemplate_5044ec7eb9842906911f2954126f4d63280f13ed6535af02ad80f0ea044a4176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::front.html.twig", "NBMainBundle::index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8da3885c586f4eb056b4a1a3c770bd73a0befa32add885b6fbb7a8484c2dfe6 = $this->env->getExtension("native_profiler");
        $__internal_f8da3885c586f4eb056b4a1a3c770bd73a0befa32add885b6fbb7a8484c2dfe6->enter($__internal_f8da3885c586f4eb056b4a1a3c770bd73a0befa32add885b6fbb7a8484c2dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8da3885c586f4eb056b4a1a3c770bd73a0befa32add885b6fbb7a8484c2dfe6->leave($__internal_f8da3885c586f4eb056b4a1a3c770bd73a0befa32add885b6fbb7a8484c2dfe6_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "::front.html.twig" %}*/
/* */
