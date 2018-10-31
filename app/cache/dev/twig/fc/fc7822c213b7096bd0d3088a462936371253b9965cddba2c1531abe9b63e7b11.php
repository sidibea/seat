<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e769ec5d48fd70fdab76e8ec992ce7b351380a6a53457e49159f998d39f7b141 extends Twig_Template
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
        $__internal_5ca116bc475c164fa2d81ce7eec7886d7a6901827db6fbafd8a029f04ed35fa2 = $this->env->getExtension("native_profiler");
        $__internal_5ca116bc475c164fa2d81ce7eec7886d7a6901827db6fbafd8a029f04ed35fa2->enter($__internal_5ca116bc475c164fa2d81ce7eec7886d7a6901827db6fbafd8a029f04ed35fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ca116bc475c164fa2d81ce7eec7886d7a6901827db6fbafd8a029f04ed35fa2->leave($__internal_5ca116bc475c164fa2d81ce7eec7886d7a6901827db6fbafd8a029f04ed35fa2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fdd133226c4ecc07b6ac282b69df4be6678bced65c80715328a71e2332b1e06 = $this->env->getExtension("native_profiler");
        $__internal_5fdd133226c4ecc07b6ac282b69df4be6678bced65c80715328a71e2332b1e06->enter($__internal_5fdd133226c4ecc07b6ac282b69df4be6678bced65c80715328a71e2332b1e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5fdd133226c4ecc07b6ac282b69df4be6678bced65c80715328a71e2332b1e06->leave($__internal_5fdd133226c4ecc07b6ac282b69df4be6678bced65c80715328a71e2332b1e06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8020098a5c40073bbfaec6c5c133ef35c84e35abc75344f9aa5ce509e26c056 = $this->env->getExtension("native_profiler");
        $__internal_b8020098a5c40073bbfaec6c5c133ef35c84e35abc75344f9aa5ce509e26c056->enter($__internal_b8020098a5c40073bbfaec6c5c133ef35c84e35abc75344f9aa5ce509e26c056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b8020098a5c40073bbfaec6c5c133ef35c84e35abc75344f9aa5ce509e26c056->leave($__internal_b8020098a5c40073bbfaec6c5c133ef35c84e35abc75344f9aa5ce509e26c056_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c0345ffc8073d705d42e2cf0a5f3c7e653bf8cb263b39209dba557833612a46 = $this->env->getExtension("native_profiler");
        $__internal_3c0345ffc8073d705d42e2cf0a5f3c7e653bf8cb263b39209dba557833612a46->enter($__internal_3c0345ffc8073d705d42e2cf0a5f3c7e653bf8cb263b39209dba557833612a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3c0345ffc8073d705d42e2cf0a5f3c7e653bf8cb263b39209dba557833612a46->leave($__internal_3c0345ffc8073d705d42e2cf0a5f3c7e653bf8cb263b39209dba557833612a46_prof);

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
