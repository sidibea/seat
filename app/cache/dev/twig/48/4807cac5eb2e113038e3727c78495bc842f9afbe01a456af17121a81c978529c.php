<?php

/* NBMainBundle::index.html.twig */
class __TwigTemplate_29963f85926b5f65447c938a86389d8fa211747329dcab1fb0c44727dd435c51 extends Twig_Template
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
        $__internal_6aadc8fad111215db55d96d3caa44df2cd0edff009927d0e223182d2dbecb255 = $this->env->getExtension("native_profiler");
        $__internal_6aadc8fad111215db55d96d3caa44df2cd0edff009927d0e223182d2dbecb255->enter($__internal_6aadc8fad111215db55d96d3caa44df2cd0edff009927d0e223182d2dbecb255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aadc8fad111215db55d96d3caa44df2cd0edff009927d0e223182d2dbecb255->leave($__internal_6aadc8fad111215db55d96d3caa44df2cd0edff009927d0e223182d2dbecb255_prof);

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
