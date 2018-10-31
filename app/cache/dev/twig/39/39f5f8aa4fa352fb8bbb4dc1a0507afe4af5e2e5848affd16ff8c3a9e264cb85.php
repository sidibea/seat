<?php

/* NBMainBundle::admin_layout.html.twig */
class __TwigTemplate_7ff73dcf1d595f388ff1677266517d6066ce5f630fba0e710965cce3d37a3caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::admin.html.twig", "NBMainBundle::admin_layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adc389d77a88387ad53197069d0498283b76374ae35a15ecb59b1be729bb74a5 = $this->env->getExtension("native_profiler");
        $__internal_adc389d77a88387ad53197069d0498283b76374ae35a15ecb59b1be729bb74a5->enter($__internal_adc389d77a88387ad53197069d0498283b76374ae35a15ecb59b1be729bb74a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::admin_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc389d77a88387ad53197069d0498283b76374ae35a15ecb59b1be729bb74a5->leave($__internal_adc389d77a88387ad53197069d0498283b76374ae35a15ecb59b1be729bb74a5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_15e5ad29dddf88db186b1ba40155cec463198747e82f143a4d766370fa5e6384 = $this->env->getExtension("native_profiler");
        $__internal_15e5ad29dddf88db186b1ba40155cec463198747e82f143a4d766370fa5e6384->enter($__internal_15e5ad29dddf88db186b1ba40155cec463198747e82f143a4d766370fa5e6384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_15e5ad29dddf88db186b1ba40155cec463198747e82f143a4d766370fa5e6384->leave($__internal_15e5ad29dddf88db186b1ba40155cec463198747e82f143a4d766370fa5e6384_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_54557bcc37e1610ec39fa16d9ff6d77851a5abada62823c62282c4c1c8ed1437 = $this->env->getExtension("native_profiler");
        $__internal_54557bcc37e1610ec39fa16d9ff6d77851a5abada62823c62282c4c1c8ed1437->enter($__internal_54557bcc37e1610ec39fa16d9ff6d77851a5abada62823c62282c4c1c8ed1437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
";
        
        $__internal_54557bcc37e1610ec39fa16d9ff6d77851a5abada62823c62282c4c1c8ed1437->leave($__internal_54557bcc37e1610ec39fa16d9ff6d77851a5abada62823c62282c4c1c8ed1437_prof);

    }

    // line 13
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_0979e8914902efb2945ef65e4d9184f03c0523af040e29bcd3a75148e523ecf9 = $this->env->getExtension("native_profiler");
        $__internal_0979e8914902efb2945ef65e4d9184f03c0523af040e29bcd3a75148e523ecf9->enter($__internal_0979e8914902efb2945ef65e4d9184f03c0523af040e29bcd3a75148e523ecf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        
        $__internal_0979e8914902efb2945ef65e4d9184f03c0523af040e29bcd3a75148e523ecf9->leave($__internal_0979e8914902efb2945ef65e4d9184f03c0523af040e29bcd3a75148e523ecf9_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::admin.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block scripts %} {% endblock %}*/
