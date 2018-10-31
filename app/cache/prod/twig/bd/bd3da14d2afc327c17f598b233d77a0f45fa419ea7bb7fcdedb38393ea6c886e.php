<?php

/* ::admin.html.twig */
class __TwigTemplate_36ad89112d1f1186cbbf0b8c0e395667a7a528b64549cc619ea6b6a1d7eb3cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagestyle' => array($this, 'block_pagestyle'),
            'breadcumbs' => array($this, 'block_breadcumbs'),
            'settings' => array($this, 'block_settings'),
            'content' => array($this, 'block_content'),
            'pagescript' => array($this, 'block_pagescript'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "  | SeatSeller</title>

    <meta name=\"description\" content=\"\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

    <!-- bootstrap & fontawesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    ";
        // line 15
        $this->displayBlock('pagestyle', $context, $blocks);
        // line 16
        echo "



    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/fonts.googleapis.com.css"), "html", null, true);
        echo "\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace-part2.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

</head>

<body class=\"no-skin\">
<div id=\"navbar\" class=\"navbar navbar-defaultace-save-state\">
    ";
        // line 52
        $this->loadTemplate("includes/navbar.html.twig", "::admin.html.twig", 52)->display($context);
        // line 53
        echo "</div>

<div class=\"main-container ace-save-state\" id=\"main-container\">
    <script type=\"text/javascript\">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id=\"sidebar\" class=\"sidebar responsive ace-save-state\">
        <script type=\"text/javascript\">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
            ";
        // line 66
        $this->loadTemplate("includes/sidebar.html.twig", "::admin.html.twig", 66)->display($context);
        // line 67
        echo "
        </div>

        <div class=\"main-content\">
            <div class=\"main-content-inner\">
                ";
        // line 72
        $this->displayBlock('breadcumbs', $context, $blocks);
        // line 73
        echo "

                <div class=\"page-content\">
                    ";
        // line 76
        $this->displayBlock('settings', $context, $blocks);
        // line 78
        echo "                    <div class=\"ace-settings-container\" id=\"ace-settings-container\">


                    </div><!-- /.ace-settings-container -->

                    ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "

                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class=\"footer\">
            <div class=\"footer-inner\">
                <div class=\"footer-content\">
\t\t\t\t\t\t<span class=\"bigger-120\">
\t\t\t\t\t\t\t<span class=\"blue bolder\"><a target=\"_blank\" href=\"http://nex-group.net\">Next Group</a> </span>
\t\t\t\t\t\t\tseatseller &copy; 2016
\t\t\t\t\t\t</span>

                    &nbsp; &nbsp;
\t\t\t\t\t\t<span class=\"action-buttons\">
\t\t\t\t\t\t\t<a href=\"#\">
                                <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                            </a>

\t\t\t\t\t\t\t<a href=\"#\">
                                <i class=\"ace-icon fa fa-facebook-square text-primary bigger-150\"></i>
                            </a>

\t\t\t\t\t\t\t<a href=\"#\">
                                <i class=\"ace-icon fa fa-rss-square orange bigger-150\"></i>
                            </a>
\t\t\t\t\t\t</span>
                </div>
            </div>
        </div>

        <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
            <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
        </a>
    </div>
</div><!-- /.main-container -->
<script>

    base_url = \"http://seatseller.next-bus.net/web/\";


</script>
<!-- basic scripts -->

<!--[if !IE]> -->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<script type=\"text/javascript\">
    if('ontouchstart' in document.documentElement) document.write(\"<script src='assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
</script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 142
        $this->displayBlock('pagescript', $context, $blocks);
        // line 143
        echo "
<!-- ace scripts -->
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>







<!-- inline scripts related to this page -->
";
        // line 156
        $this->displayBlock('scripts', $context, $blocks);
        // line 159
        echo "
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 15
    public function block_pagestyle($context, array $blocks = array())
    {
        echo " ";
    }

    // line 72
    public function block_breadcumbs($context, array $blocks = array())
    {
        echo " ";
    }

    // line 76
    public function block_settings($context, array $blocks = array())
    {
        // line 77
        echo "                    ";
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 142
    public function block_pagescript($context, array $blocks = array())
    {
        echo " ";
    }

    // line 156
    public function block_scripts($context, array $blocks = array())
    {
        // line 157
        echo "
";
    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 157,  303 => 156,  297 => 142,  291 => 83,  287 => 77,  284 => 76,  278 => 72,  272 => 15,  266 => 6,  259 => 159,  257 => 156,  245 => 147,  241 => 146,  237 => 145,  233 => 143,  231 => 142,  226 => 140,  218 => 135,  210 => 130,  162 => 84,  160 => 83,  153 => 78,  151 => 76,  146 => 73,  144 => 72,  137 => 67,  135 => 66,  120 => 53,  118 => 52,  108 => 45,  104 => 44,  96 => 39,  87 => 33,  81 => 30,  77 => 29,  72 => 27,  66 => 24,  60 => 21,  53 => 16,  51 => 15,  46 => 13,  42 => 12,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*     <meta charset="utf-8" />*/
/*     <title>{% block title %} {% endblock %}  | SeatSeller</title>*/
/* */
/*     <meta name="description" content="" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/* */
/*     <!-- bootstrap & fontawesome -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />*/
/* */
/*     {% block pagestyle %} {% endblock %}*/
/* */
/* */
/* */
/* */
/*     <!-- text fonts -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />*/
/* */
/*     <!-- ace styles -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />*/
/* */
/*     <!--[if lte IE 9]>*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />*/
/*     <![endif]-->*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />*/
/* */
/*     <!--[if lte IE 9]>*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/ace-ie.min.css') }}" />*/
/*     <![endif]-->*/
/* */
/*     <!-- inline styles related to this page -->*/
/* */
/*     <!-- ace settings handler -->*/
/*     <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>*/
/* */
/*     <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->*/
/* */
/*     <!--[if lte IE 8]>*/
/*     <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/respond.min.js') }}"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body class="no-skin">*/
/* <div id="navbar" class="navbar navbar-defaultace-save-state">*/
/*     {% include "includes/navbar.html.twig"%}*/
/* </div>*/
/* */
/* <div class="main-container ace-save-state" id="main-container">*/
/*     <script type="text/javascript">*/
/*         try{ace.settings.loadState('main-container')}catch(e){}*/
/*     </script>*/
/* */
/*     <div id="sidebar" class="sidebar responsive ace-save-state">*/
/*         <script type="text/javascript">*/
/*             try{ace.settings.loadState('sidebar')}catch(e){}*/
/*         </script>*/
/* */
/*         <div class="sidebar-shortcuts" id="sidebar-shortcuts">*/
/*             {% include "includes/sidebar.html.twig"%}*/
/* */
/*         </div>*/
/* */
/*         <div class="main-content">*/
/*             <div class="main-content-inner">*/
/*                 {% block breadcumbs %} {% endblock %}*/
/* */
/* */
/*                 <div class="page-content">*/
/*                     {% block settings %}*/
/*                     {% endblock %}*/
/*                     <div class="ace-settings-container" id="ace-settings-container">*/
/* */
/* */
/*                     </div><!-- /.ace-settings-container -->*/
/* */
/*                     {% block content %} {% endblock %}*/
/* */
/* */
/*                 </div><!-- /.page-content -->*/
/*             </div>*/
/*         </div><!-- /.main-content -->*/
/* */
/*         <div class="footer">*/
/*             <div class="footer-inner">*/
/*                 <div class="footer-content">*/
/* 						<span class="bigger-120">*/
/* 							<span class="blue bolder"><a target="_blank" href="http://nex-group.net">Next Group</a> </span>*/
/* 							seatseller &copy; 2016*/
/* 						</span>*/
/* */
/*                     &nbsp; &nbsp;*/
/* 						<span class="action-buttons">*/
/* 							<a href="#">*/
/*                                 <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>*/
/*                             </a>*/
/* */
/* 							<a href="#">*/
/*                                 <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>*/
/*                             </a>*/
/* */
/* 							<a href="#">*/
/*                                 <i class="ace-icon fa fa-rss-square orange bigger-150"></i>*/
/*                             </a>*/
/* 						</span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">*/
/*             <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>*/
/*         </a>*/
/*     </div>*/
/* </div><!-- /.main-container -->*/
/* <script>*/
/* */
/*     base_url = "http://seatseller.next-bus.net/web/";*/
/* */
/* */
/* </script>*/
/* <!-- basic scripts -->*/
/* */
/* <!--[if !IE]> -->*/
/* <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>*/
/* */
/* <!-- <![endif]-->*/
/* */
/* <!--[if IE]>*/
/* <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>*/
/* <![endif]-->*/
/* <script type="text/javascript">*/
/*     if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");*/
/* </script>*/
/* <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/* */
/* {% block pagescript %} {% endblock %}*/
/* */
/* <!-- ace scripts -->*/
/* <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>*/
/* <script src="{{ asset('assets/js/custom.js') }}"></script>*/
/* <script src="{{ asset('assets/js/ace.min.js') }}"></script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* <!-- inline scripts related to this page -->*/
/* {% block scripts %}*/
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
