<?php

/* :admin:base.html.twig */
class __TwigTemplate_9e301392eaf4616838e3edbd6d90f29f985c9257b7d45e8c563c5af6cb37b383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'alert' => array($this, 'block_alert'),
            'body' => array($this, 'block_body'),
            'sitmap' => array($this, 'block_sitmap'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
                ";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 45
        echo "\t\t";
        if ((1 == 2)) {
            // line 46
            echo "\t\t<script>
\t\t\t//* hide all elements & show preloader
\t\t\tdocument.documentElement.className += 'js';
\t\t</script>
                ";
        }
        // line 51
        echo "    </head>
    <body>
\t\t
\t\t<div class=\"style_switcher\">
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Colors:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr blue_theme style_active\" title=\"blue\">blue</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr dark_theme\" title=\"dark\">dark</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr green_theme\" title=\"green\">green</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr brown_theme\" title=\"brown\">brown</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr eastern_blue_theme\" title=\"eastern_blue\">eastern blue</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"style_item jQclr tamarillo_theme\" title=\"tamarillo\">tamarillo</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Backgrounds:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<span class=\"style_item jQptrn style_active ptrn_def\" title=\"\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_a style_item jQptrn\" title=\"ptrn_a\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_b style_item jQptrn\" title=\"ptrn_b\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_c style_item jQptrn\" title=\"ptrn_c\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_d style_item jQptrn\" title=\"ptrn_d\"></span>
\t\t\t\t\t<span class=\"ssw_ptrn_e style_item jQptrn\" title=\"ptrn_e\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Layout:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_layout\" id=\"ssw_layout_fluid\" value=\"\" checked /> Fluid</label>
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_layout\" id=\"ssw_layout_fixed\" value=\"gebo-fixed\" /> Fixed</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Sidebar position:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_sidebar\" id=\"ssw_sidebar_left\" value=\"\" checked /> Left</label>
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_sidebar\" id=\"ssw_sidebar_right\" value=\"sidebar_right\" /> Right</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sepH_c\">
\t\t\t\t<p>Show top menu on:</p>
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_menu\" id=\"ssw_menu_click\" value=\"\" checked /> Click</label>
\t\t\t\t\t<label class=\"radio inline\"><input type=\"radio\" name=\"ssw_menu\" id=\"ssw_menu_hover\" value=\"menu_hover\" /> Hover</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"gh_button-group\">
\t\t\t\t<a href=\"#\" id=\"showCss\" class=\"btn btn-primary btn-mini\">Show CSS</a>
\t\t\t\t<a href=\"#\" id=\"resetDefault\" class=\"btn btn-mini\">Reset</a>
\t\t\t</div>
\t\t\t<div class=\"hide\">
\t\t\t\t<ul id=\"ssw_styles\">
\t\t\t\t\t<li class=\"small ssw_mbColor sepH_a\" style=\"display:none\">body {<span class=\"ssw_mColor sepH_a\" style=\"display:none\"> color: #<span></span>;</span> <span class=\"ssw_bColor\" style=\"display:none\">background-color: #<span></span> </span>}</li>
\t\t\t\t\t<li class=\"small ssw_lColor sepH_a\" style=\"display:none\">a { color: #<span></span> }</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div id=\"maincontainer\" class=\"clearfix\">
\t\t\t<!-- header -->
            
";
        // line 114
        $this->env->loadTemplate(":admin:header.html.twig")->display($context);
        // line 115
        echo "                        <!-- main content -->
            <div id=\"contentwrapper\">
                <div class=\"main_content\" >

                    ";
        // line 119
        $this->displayBlock('alert', $context, $blocks);
        // line 122
        echo "                    ";
        $this->displayBlock('body', $context, $blocks);
        // line 130
        echo "                </div>
            </div>
            
\t\t\t<!-- sidebar -->
                ";
        // line 134
        $this->env->loadTemplate(":admin:menu.html.twig")->display($context);
        // line 135
        echo "            
            ";
        // line 136
        $this->displayBlock('script', $context, $blocks);
        // line 166
        echo "\t
\t\t</div>
\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "        <!-- Bootstrap framework -->
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
        <!-- gebo blue theme-->
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blue.css"), "html", null, true);
        echo "\" id=\"link_theme\" />
        <!-- breadcrumbs-->
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jBreadcrumbs/css/BreadCrumb.css"), "html", null, true);
        echo "\" />
        <!-- tooltips-->
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/qtip2/jquery.qtip.min.css"), "html", null, true);
        echo "\" />
        <!-- colorbox -->
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/colorbox/colorbox.css"), "html", null, true);
        echo "\" />    
        <!-- code prettify -->
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/google-code-prettify/prettify.css"), "html", null, true);
        echo "\" />    
        <!-- notifications -->
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/sticky/sticky.css"), "html", null, true);
        echo "\" />    
        <!-- splashy icons -->
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/splashy/splashy.css"), "html", null, true);
        echo "\" />
\t\t<!-- flags -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/flags.css"), "html", null, true);
        echo "\" />\t
\t\t<!-- calendar -->
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/fullcalendar/fullcalendar_gebo.css"), "html", null, true);
        echo "\" />
            
        <!-- main styles -->
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
\t\t\t
            <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=PT+Sans\" />
\t
        <!-- Favicon -->
            <link rel=\"shortcut icon\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t
        <!--[if lte IE 8]>
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ie.css"), "html", null, true);
        echo "\" />
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ie/html5.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ie/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/flot/excanvas.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        ";
    }

    // line 119
    public function block_alert($context, array $blocks = array())
    {
        // line 120
        echo "                        ";
        $this->env->loadTemplate(":admin:alert.html.twig")->display($context);
        // line 121
        echo "                    ";
    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        echo "  
                    <nav>
                        <div id=\"jCrumbs\" class=\"breadCrumb module\">
                            <ul>
                                ";
        // line 126
        $this->displayBlock('sitmap', $context, $blocks);
        // line 127
        echo "                            </ul>
                        </div>
                   ";
    }

    // line 126
    public function block_sitmap($context, array $blocks = array())
    {
    }

    // line 136
    public function block_script($context, array $blocks = array())
    {
        // line 137
        echo "                        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- smart resize event -->
\t\t\t<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.debouncedresize.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- hidden elements width/height -->
\t\t\t<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.actual.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- js cookie plugin -->
\t\t\t<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookie.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- main bootstrap js -->
\t\t\t<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                        <!-- tooltips -->
                        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/qtip2/jquery.qtip.min.js"), "html", null, true);
        echo "\"></script>
                        <!-- jBreadcrumbs -->
                        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js"), "html", null, true);
        echo "\"></script>
                        <!-- lightbox -->
                        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/colorbox/jquery.colorbox.min.js"), "html", null, true);
        echo "\"></script>
                        <!-- fix for ios orientation change -->
                        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ios-orientationchange-fix.js"), "html", null, true);
        echo "\"></script>
                        <!-- scrollbar -->
                        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/antiscroll/antiscroll.js"), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/antiscroll/jquery-mousewheel.js"), "html", null, true);
        echo "\"></script>
                        <!-- common functions -->
                        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gebo_common.js"), "html", null, true);
        echo "\"></script>

\t\t\t<script>
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t//* show all elements & remove preloader
\t\t\t\t\tsetTimeout('\$(\"html\").removeClass(\"js\")',1000);
\t\t\t\t});
\t\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return ":admin:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 158,  330 => 156,  326 => 155,  321 => 153,  316 => 151,  311 => 149,  306 => 147,  301 => 145,  296 => 143,  291 => 141,  286 => 139,  280 => 137,  277 => 136,  272 => 126,  266 => 127,  264 => 126,  256 => 122,  252 => 121,  249 => 120,  246 => 119,  239 => 42,  235 => 41,  231 => 40,  227 => 39,  221 => 36,  213 => 31,  207 => 28,  202 => 26,  197 => 24,  192 => 22,  187 => 20,  182 => 18,  177 => 16,  172 => 14,  167 => 12,  162 => 10,  158 => 9,  155 => 8,  152 => 7,  146 => 6,  139 => 166,  137 => 136,  134 => 135,  132 => 134,  126 => 130,  123 => 122,  121 => 119,  115 => 115,  113 => 114,  48 => 51,  41 => 46,  38 => 45,  36 => 7,  32 => 6,  25 => 1,);
    }
}
