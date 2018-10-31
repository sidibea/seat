<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_01da44f59118c4ec4cb7180a56e7f5867f5d3877c02c11e7bd7288aed578fc05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01d06eb15b430f7ad9027cb544c5de23a31a6acf627f5c14606d822735c1bb93 = $this->env->getExtension("native_profiler");
        $__internal_01d06eb15b430f7ad9027cb544c5de23a31a6acf627f5c14606d822735c1bb93->enter($__internal_01d06eb15b430f7ad9027cb544c5de23a31a6acf627f5c14606d822735c1bb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d06eb15b430f7ad9027cb544c5de23a31a6acf627f5c14606d822735c1bb93->leave($__internal_01d06eb15b430f7ad9027cb544c5de23a31a6acf627f5c14606d822735c1bb93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b2eae062780e8c3640171b957b17029df8a5c474bc23474360757a6271621f5 = $this->env->getExtension("native_profiler");
        $__internal_2b2eae062780e8c3640171b957b17029df8a5c474bc23474360757a6271621f5->enter($__internal_2b2eae062780e8c3640171b957b17029df8a5c474bc23474360757a6271621f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b2eae062780e8c3640171b957b17029df8a5c474bc23474360757a6271621f5->leave($__internal_2b2eae062780e8c3640171b957b17029df8a5c474bc23474360757a6271621f5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9801c6c4e028c20a299125ba7aa819207caa1ac7642e1e8e192e21f4ace71c0a = $this->env->getExtension("native_profiler");
        $__internal_9801c6c4e028c20a299125ba7aa819207caa1ac7642e1e8e192e21f4ace71c0a->enter($__internal_9801c6c4e028c20a299125ba7aa819207caa1ac7642e1e8e192e21f4ace71c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9801c6c4e028c20a299125ba7aa819207caa1ac7642e1e8e192e21f4ace71c0a->leave($__internal_9801c6c4e028c20a299125ba7aa819207caa1ac7642e1e8e192e21f4ace71c0a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c070feca02648ad78e374d01ee9c016db06f90b6a9c4d5166cd1b0d9c8df10bb = $this->env->getExtension("native_profiler");
        $__internal_c070feca02648ad78e374d01ee9c016db06f90b6a9c4d5166cd1b0d9c8df10bb->enter($__internal_c070feca02648ad78e374d01ee9c016db06f90b6a9c4d5166cd1b0d9c8df10bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c070feca02648ad78e374d01ee9c016db06f90b6a9c4d5166cd1b0d9c8df10bb->leave($__internal_c070feca02648ad78e374d01ee9c016db06f90b6a9c4d5166cd1b0d9c8df10bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
