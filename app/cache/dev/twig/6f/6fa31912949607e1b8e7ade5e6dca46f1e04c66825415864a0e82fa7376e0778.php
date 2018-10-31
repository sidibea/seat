<?php

/* ::admin.html.twig */
class __TwigTemplate_c757eb4b8c72a657733bc9fc63d2e473a2e19ac6ae4f32b6e4801eabe28018d4 extends Twig_Template
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
        $__internal_b7e2d4c3999dd542e75944ec459b034f5017048d787964609ed2d660c8b214bc = $this->env->getExtension("native_profiler");
        $__internal_b7e2d4c3999dd542e75944ec459b034f5017048d787964609ed2d660c8b214bc->enter($__internal_b7e2d4c3999dd542e75944ec459b034f5017048d787964609ed2d660c8b214bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

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
        
        $__internal_b7e2d4c3999dd542e75944ec459b034f5017048d787964609ed2d660c8b214bc->leave($__internal_b7e2d4c3999dd542e75944ec459b034f5017048d787964609ed2d660c8b214bc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff1686c6855e85929385f9fb7f67090fb4fea696688a25373b77d4a6432cb04c = $this->env->getExtension("native_profiler");
        $__internal_ff1686c6855e85929385f9fb7f67090fb4fea696688a25373b77d4a6432cb04c->enter($__internal_ff1686c6855e85929385f9fb7f67090fb4fea696688a25373b77d4a6432cb04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_ff1686c6855e85929385f9fb7f67090fb4fea696688a25373b77d4a6432cb04c->leave($__internal_ff1686c6855e85929385f9fb7f67090fb4fea696688a25373b77d4a6432cb04c_prof);

    }

    // line 15
    public function block_pagestyle($context, array $blocks = array())
    {
        $__internal_c2d7df9cd5d8277c1a49aef93e156588e2a2e496f6bb4768eead7cfe1aff41a4 = $this->env->getExtension("native_profiler");
        $__internal_c2d7df9cd5d8277c1a49aef93e156588e2a2e496f6bb4768eead7cfe1aff41a4->enter($__internal_c2d7df9cd5d8277c1a49aef93e156588e2a2e496f6bb4768eead7cfe1aff41a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagestyle"));

        echo " ";
        
        $__internal_c2d7df9cd5d8277c1a49aef93e156588e2a2e496f6bb4768eead7cfe1aff41a4->leave($__internal_c2d7df9cd5d8277c1a49aef93e156588e2a2e496f6bb4768eead7cfe1aff41a4_prof);

    }

    // line 72
    public function block_breadcumbs($context, array $blocks = array())
    {
        $__internal_fd24716eed7a4d59afca6648d52ad0b659d4297af9e79ff1a034370afd8e7f9c = $this->env->getExtension("native_profiler");
        $__internal_fd24716eed7a4d59afca6648d52ad0b659d4297af9e79ff1a034370afd8e7f9c->enter($__internal_fd24716eed7a4d59afca6648d52ad0b659d4297af9e79ff1a034370afd8e7f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumbs"));

        echo " ";
        
        $__internal_fd24716eed7a4d59afca6648d52ad0b659d4297af9e79ff1a034370afd8e7f9c->leave($__internal_fd24716eed7a4d59afca6648d52ad0b659d4297af9e79ff1a034370afd8e7f9c_prof);

    }

    // line 76
    public function block_settings($context, array $blocks = array())
    {
        $__internal_c57f8a3d5acb411ffe408f3aa13c56db9cec64f6109d993c5e528c3c36100284 = $this->env->getExtension("native_profiler");
        $__internal_c57f8a3d5acb411ffe408f3aa13c56db9cec64f6109d993c5e528c3c36100284->enter($__internal_c57f8a3d5acb411ffe408f3aa13c56db9cec64f6109d993c5e528c3c36100284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "settings"));

        // line 77
        echo "                    ";
        
        $__internal_c57f8a3d5acb411ffe408f3aa13c56db9cec64f6109d993c5e528c3c36100284->leave($__internal_c57f8a3d5acb411ffe408f3aa13c56db9cec64f6109d993c5e528c3c36100284_prof);

    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
        $__internal_66784aa9dd8432452334736a30c976cae9f395bbbd829fcbb4f1f482f20d42c5 = $this->env->getExtension("native_profiler");
        $__internal_66784aa9dd8432452334736a30c976cae9f395bbbd829fcbb4f1f482f20d42c5->enter($__internal_66784aa9dd8432452334736a30c976cae9f395bbbd829fcbb4f1f482f20d42c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_66784aa9dd8432452334736a30c976cae9f395bbbd829fcbb4f1f482f20d42c5->leave($__internal_66784aa9dd8432452334736a30c976cae9f395bbbd829fcbb4f1f482f20d42c5_prof);

    }

    // line 142
    public function block_pagescript($context, array $blocks = array())
    {
        $__internal_be4f1b17c88d5c285c85b298e2cb43ec784118899977c28e94703de1a9e35832 = $this->env->getExtension("native_profiler");
        $__internal_be4f1b17c88d5c285c85b298e2cb43ec784118899977c28e94703de1a9e35832->enter($__internal_be4f1b17c88d5c285c85b298e2cb43ec784118899977c28e94703de1a9e35832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagescript"));

        echo " ";
        
        $__internal_be4f1b17c88d5c285c85b298e2cb43ec784118899977c28e94703de1a9e35832->leave($__internal_be4f1b17c88d5c285c85b298e2cb43ec784118899977c28e94703de1a9e35832_prof);

    }

    // line 156
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_6f8cd82b1ce1d19177dbd8b943537712e8ea40b2e9f225c406a629dff3b9fa02 = $this->env->getExtension("native_profiler");
        $__internal_6f8cd82b1ce1d19177dbd8b943537712e8ea40b2e9f225c406a629dff3b9fa02->enter($__internal_6f8cd82b1ce1d19177dbd8b943537712e8ea40b2e9f225c406a629dff3b9fa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 157
        echo "
";
        
        $__internal_6f8cd82b1ce1d19177dbd8b943537712e8ea40b2e9f225c406a629dff3b9fa02->leave($__internal_6f8cd82b1ce1d19177dbd8b943537712e8ea40b2e9f225c406a629dff3b9fa02_prof);

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
        return array (  351 => 157,  345 => 156,  333 => 142,  321 => 83,  314 => 77,  308 => 76,  296 => 72,  284 => 15,  272 => 6,  262 => 159,  260 => 156,  248 => 147,  244 => 146,  240 => 145,  236 => 143,  234 => 142,  229 => 140,  221 => 135,  213 => 130,  165 => 84,  163 => 83,  156 => 78,  154 => 76,  149 => 73,  147 => 72,  140 => 67,  138 => 66,  123 => 53,  121 => 52,  111 => 45,  107 => 44,  99 => 39,  90 => 33,  84 => 30,  80 => 29,  75 => 27,  69 => 24,  63 => 21,  56 => 16,  54 => 15,  49 => 13,  45 => 12,  36 => 6,  29 => 1,);
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
