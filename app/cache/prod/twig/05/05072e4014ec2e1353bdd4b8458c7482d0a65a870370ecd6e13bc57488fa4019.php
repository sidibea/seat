<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_b62c7e95d4f896bfbf9129bad6416907cff6f9e8ad10b1a3919d69de8c9bea90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NBMainBundle::admin_layout.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagestyle' => array($this, 'block_pagestyle'),
            'breadcumbs' => array($this, 'block_breadcumbs'),
            'content' => array($this, 'block_content'),
            'pagescript' => array($this, 'block_pagescript'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NBMainBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "SeatSeller ";
    }

    // line 4
    public function block_pagestyle($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/jquery-ui.custom.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/daterangepicker.min.css"), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_breadcumbs($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"breadcrumbs ace-save-state\" id=\"breadcrumbs\">
        <ul class=\"breadcrumb\">
            <li>
                <i class=\"ace-icon fa fa-home home-icon\"></i>
                <a href=\"#\">Acceuil</a>
            </li>
            <li class=\"active\">Historique de depot</li>
        </ul><!-- /.breadcrumb -->

    </div>

";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <!-- PAGE CONTENT BEGINS -->

        <div class=\"error-container\">
            <div class=\"well\">
                <h1 class=\"grey lighter smaller\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue bigger-125\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-sitemap\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t404
\t\t\t\t\t\t\t\t\t\t\t</span>
                    Page Introuvable
                </h1>

                <hr />
                <h3 class=\"lighter smaller\">Nous avons chercher partout mais nous n'avons trouvé aucun résultat !</h3>

                <div>


                    <div class=\"space\"></div>
                    <h4 class=\"smaller\">Essayer les astuces suivantes:</h4>

                    <ul class=\"list-unstyled spaced inline bigger-110 margin-15\">
                        <li>
                            <i class=\"ace-icon fa fa-hand-o-right blue\"></i>
                            Re-vérifier la typographie de l'url
                        </li>

                        <li>
                            <i class=\"ace-icon fa fa-hand-o-right blue\"></i>
                            Lire le  faq
                        </li>

                        <li>
                            <i class=\"ace-icon fa fa-hand-o-right blue\"></i>
                           Nous contacter
                        </li>
                    </ul>
                </div>

                <hr />
                <div class=\"space\"></div>

                <div class=\"center\">
                    <a href=\"javascript:history.back()\" class=\"btn btn-grey\">
                        <i class=\"ace-icon fa fa-arrow-left\"></i>
                        Revenir en arrière
                    </a>

                    <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("nb_main_homepage");
        echo "\" class=\"btn btn-primary\">
                        <i class=\"ace-icon fa fa-tachometer\"></i>
                        Accueil
                    </a>
                </div>
            </div>
        </div>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->


";
    }

    // line 91
    public function block_pagescript($context, array $blocks = array())
    {
        // line 92
        echo "    <!--[if lte IE 8]>
    <script src=\"assets/js/excanvas.min.js\"></script>
    <![endif]-->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 103
    public function block_scripts($context, array $blocks = array())
    {
        // line 104
        echo "    <!-- inline scripts related to this page -->
    <script type=\"text/javascript\">
        jQuery(function(\$) {



        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 104,  182 => 103,  176 => 100,  172 => 99,  168 => 98,  164 => 97,  160 => 96,  156 => 95,  151 => 92,  148 => 91,  130 => 75,  78 => 25,  75 => 24,  60 => 11,  57 => 10,  51 => 7,  47 => 6,  42 => 5,  39 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends "NBMainBundle::admin_layout.html.twig" %}*/
/* */
/* {% block title %}SeatSeller {% endblock %}*/
/* {% block pagestyle %}*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.min.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block breadcumbs %}*/
/*     <div class="breadcrumbs ace-save-state" id="breadcrumbs">*/
/*         <ul class="breadcrumb">*/
/*             <li>*/
/*                 <i class="ace-icon fa fa-home home-icon"></i>*/
/*                 <a href="#">Acceuil</a>*/
/*             </li>*/
/*             <li class="active">Historique de depot</li>*/
/*         </ul><!-- /.breadcrumb -->*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*     <div class="col-xs-12">*/
/*         <!-- PAGE CONTENT BEGINS -->*/
/* */
/*         <div class="error-container">*/
/*             <div class="well">*/
/*                 <h1 class="grey lighter smaller">*/
/* 											<span class="blue bigger-125">*/
/* 												<i class="ace-icon fa fa-sitemap"></i>*/
/* 												404*/
/* 											</span>*/
/*                     Page Introuvable*/
/*                 </h1>*/
/* */
/*                 <hr />*/
/*                 <h3 class="lighter smaller">Nous avons chercher partout mais nous n'avons trouvé aucun résultat !</h3>*/
/* */
/*                 <div>*/
/* */
/* */
/*                     <div class="space"></div>*/
/*                     <h4 class="smaller">Essayer les astuces suivantes:</h4>*/
/* */
/*                     <ul class="list-unstyled spaced inline bigger-110 margin-15">*/
/*                         <li>*/
/*                             <i class="ace-icon fa fa-hand-o-right blue"></i>*/
/*                             Re-vérifier la typographie de l'url*/
/*                         </li>*/
/* */
/*                         <li>*/
/*                             <i class="ace-icon fa fa-hand-o-right blue"></i>*/
/*                             Lire le  faq*/
/*                         </li>*/
/* */
/*                         <li>*/
/*                             <i class="ace-icon fa fa-hand-o-right blue"></i>*/
/*                            Nous contacter*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <hr />*/
/*                 <div class="space"></div>*/
/* */
/*                 <div class="center">*/
/*                     <a href="javascript:history.back()" class="btn btn-grey">*/
/*                         <i class="ace-icon fa fa-arrow-left"></i>*/
/*                         Revenir en arrière*/
/*                     </a>*/
/* */
/*                     <a href="{{ path('nb_main_homepage') }}" class="btn btn-primary">*/
/*                         <i class="ace-icon fa fa-tachometer"></i>*/
/*                         Accueil*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- PAGE CONTENT ENDS -->*/
/*     </div><!-- /.col -->*/
/* </div><!-- /.row -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block pagescript %}*/
/*     <!--[if lte IE 8]>*/
/*     <script src="assets/js/excanvas.min.js"></script>*/
/*     <![endif]-->*/
/*     <script src="{{ asset('assets/js/jquery-ui.custom.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/moment.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/autosize.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/parsley.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/*     <!-- inline scripts related to this page -->*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/* */
/* */
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
