<?php

/* NBMainBundle::admin_layout.html.twig */
class __TwigTemplate_e2b2c7122cdcd0558e7a698e97b9a0ffdeb32705bd533e036876c80af156bfb9 extends Twig_Template
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
        $__internal_5a53ebab563f1074dcc56de95b040d30651696b0978ce11679d9e681925e5e00 = $this->env->getExtension("native_profiler");
        $__internal_5a53ebab563f1074dcc56de95b040d30651696b0978ce11679d9e681925e5e00->enter($__internal_5a53ebab563f1074dcc56de95b040d30651696b0978ce11679d9e681925e5e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::admin_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a53ebab563f1074dcc56de95b040d30651696b0978ce11679d9e681925e5e00->leave($__internal_5a53ebab563f1074dcc56de95b040d30651696b0978ce11679d9e681925e5e00_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83a1d99d6bedd591540e779b31187fe36cf09bf20969da1d60c3dd5a960bdb96 = $this->env->getExtension("native_profiler");
        $__internal_83a1d99d6bedd591540e779b31187fe36cf09bf20969da1d60c3dd5a960bdb96->enter($__internal_83a1d99d6bedd591540e779b31187fe36cf09bf20969da1d60c3dd5a960bdb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_83a1d99d6bedd591540e779b31187fe36cf09bf20969da1d60c3dd5a960bdb96->leave($__internal_83a1d99d6bedd591540e779b31187fe36cf09bf20969da1d60c3dd5a960bdb96_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_baefc8cca3721fdd27a68498a41732a5a7c45816c2f510a537bd893cff17c8db = $this->env->getExtension("native_profiler");
        $__internal_baefc8cca3721fdd27a68498a41732a5a7c45816c2f510a537bd893cff17c8db->enter($__internal_baefc8cca3721fdd27a68498a41732a5a7c45816c2f510a537bd893cff17c8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
";
        
        $__internal_baefc8cca3721fdd27a68498a41732a5a7c45816c2f510a537bd893cff17c8db->leave($__internal_baefc8cca3721fdd27a68498a41732a5a7c45816c2f510a537bd893cff17c8db_prof);

    }

    // line 13
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_071f69bb6484e914799a100c9aaaf620a02fd07b720dafe158e2b82bf05e2342 = $this->env->getExtension("native_profiler");
        $__internal_071f69bb6484e914799a100c9aaaf620a02fd07b720dafe158e2b82bf05e2342->enter($__internal_071f69bb6484e914799a100c9aaaf620a02fd07b720dafe158e2b82bf05e2342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        
        $__internal_071f69bb6484e914799a100c9aaaf620a02fd07b720dafe158e2b82bf05e2342->leave($__internal_071f69bb6484e914799a100c9aaaf620a02fd07b720dafe158e2b82bf05e2342_prof);

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
