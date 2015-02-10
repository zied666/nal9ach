<?php

/* :front:base.html.twig */
class __TwigTemplate_3e3b39ad2f74bcacb9bcf05abc9f4580ef984c882bcf51b5ebf99bee0eb710cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'jquery' => array($this, 'block_jquery'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " 
<!DOCTYPE html>
<!--[if lt IE 8]>      <html class=\"no-js lt-ie10 lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie10 lt-ie9\"> <![endif]-->
<!--[if IE 9]>         <html class=\"no-js lt-ie10\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 25
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <!--  Google Fonts  -->
        <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css' />
        <!-- Twitter Bootstrap -->
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/stylesheets/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/stylesheets/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Slider Revolution -->
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/rs-plugin/css/settings.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <!-- jQuery UI -->
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <!-- PrettyPhoto -->
        <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <!-- main styles -->
        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/stylesheets/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Modernizr -->
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/modernizr.custom.56918.js"), "html", null, true);
        echo "\"></script>    
        <!-- Fav and touch icons -->
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"images/apple-touch/144.png')}}\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"images/apple-touch/114.png')}}\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"images/apple-touch/72.png')}}\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"images/apple-touch/57.png')}}\" />
        <link rel=\"shortcut icon\" href=\"images/apple-touch/57.png')}}\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    </head>


    <body>



        <!--  ==========  -->
        <!--  = Header =  -->
        <!--  ==========  -->
        ";
        // line 61
        $this->env->loadTemplate(":front:header.html.twig")->display($context);
        // line 62
        echo "
        <!--  ==========  -->
        <!--  = Main Menu / navbar =  -->
        <!--  ==========  -->
        ";
        // line 66
        $this->env->loadTemplate(":front:menu.html.twig")->display($context);
        // line 67
        echo "
        ";
        // line 68
        $this->env->loadTemplate(":front:notification.html.twig")->display($context);
        // line 69
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "


        <!--  ==========  -->
        <!--  = Footer =  -->
        <!--  ==========  -->
        ";
        // line 76
        $this->env->loadTemplate(":front:footer.html.twig")->display($context);
        // line 77
        echo "

        <!--  ==========  -->
        <!--  = Modal Windows =  -->
        <!--  ==========  -->

        ";
        // line 83
        $this->env->loadTemplate(":front:login.html.twig")->display($context);
        // line 84
        echo "
        <!--  = Register =  -->
        <div id=\"registerModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"registerModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"registerModalLabel\"><span class=\"light\">Register</span> To Webmarket</h3>
            </div>
            <div class=\"modal-body\">
                <form method=\"post\" action=\"#\" />
                <div class=\"control-group\">
                    <label class=\"control-label hidden shown-ie8\" for=\"inputUsernameRegister\">Username</label>
                    <div class=\"controls\">
                        <input type=\"text\" class=\"input-block-level\" id=\"inputUsernameRegister\" placeholder=\"Username\" />
                    </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label hidden shown-ie8\" for=\"inputEmailRegister\">Email</label>
                    <div class=\"controls\">
                        <input type=\"email\" class=\"input-block-level\" id=\"inputEmailRegister\" placeholder=\"Email\" />
                    </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label hidden shown-ie8\" for=\"inputPasswordRegister\">Password</label>
                    <div class=\"controls\">
                        <input type=\"password\" class=\"input-block-level\" id=\"inputPasswordRegister\" placeholder=\"Password\" />
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-danger input-block-level bold higher\">
                    REGISTER
                </button>
                </form>
                <p class=\"center-align push-down-0\">
                    <a data-toggle=\"modal\" role=\"button\" href=\"#loginModal\" data-dismiss=\"modal\">Already Registered?</a>
                </p>

            </div>
        </div>





        <!--  ==========  -->
        <!--  = JavaScript =  -->
        <!--  ==========  -->

        <!--  = FB =  -->

        <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52ecfa390c360c57\" async=\"async\"></script>



        <!--  = jQuery - CDN with local fallback =  -->
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.maphilight.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tooltip.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function () {
                \$('.zedx_map').maphilight({
                    fade: false,
                    alwaysOn: false,
                    fillColor: \"2014FF\",
                    fillOpacity: 0.9,
                    strokeColor: \"ff0000\",
                    strokeOpacity: 0,
                    strokeWidth: 1
                });

                \$('.region').mouseover(function (e) {
                    \$(this).parent().parent().addClass('today')
                    var id = \$(this).attr('title');
                    \$('.' + id).mouseover();
                }).mouseout(function (e) {
                    \$('area').mouseout();
                    \$(this).parent().parent().removeClass('today');
                });


                \$('area').mouseover(function (e) {
                    var id = \$(this).attr('class');
                    \$(\".week-day\").parent().parent().removeClass('today')
                    \$(\".lien\" + id).parent().parent().addClass('today');
                }).mouseout(function (e) {
                    \$(\".region\").parent().parent().removeClass('today')
                });
                // \$(\".zedx_map\").css(\"margin-right\", \"auto\");
                // \$(\".zedx_map\").css(\"margin-left\", \"auto\");



            });
        </script>
    ";
        // line 177
        $this->displayBlock('jquery', $context, $blocks);
        // line 178
        echo "    <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
            document.write('<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>');
        }
    </script>

    <!--  = _ =  -->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/underscore/underscore-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  = Bootstrap =  -->
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  = Slider Revolution =  -->
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  = CarouFredSel =  -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/jquery.carouFredSel-6.2.1-packed.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  = jQuery UI =  -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/jquery-ui-1.10.3/touch-fix.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  = Isotope =  -->
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/isotope/jquery.isotope.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  = Tour =  -->
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  = PrettyPhoto =  -->
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/prettyphoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!--  = Google Maps API =  -->
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?key=AIzaSyDvMjN1g49P1MA2Onsj-GulDkmDuuH6aoU&amp;sensor=false\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/goMap/js/jquery.gomap-1.3.2.min.js"), "html", null, true);
        echo "\"></script>

    <!--  = Custom JS =  -->
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
</body>
</html> ";
    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        // line 9
        echo "            <meta property=\"og:title\" content=\"www.nal9ach.com\" />
            <meta name=”twitter:title” content=\"www.nal9ach.com\" />
            <meta property=\"og:site_name\" content=\"nal9ach.com\" />
            <meta property=\"og:url\" content=\"http://nal9ach.com/web\" />
            <meta property=\"og:description\" content=\"Notre site vous permet de passer toutes vos petites annonces gratuites et de trouver la bonne affaire.\"/>
            <meta name=\"description\" content=\"Notre site vous permet de passer toutes vos petites annonces gratuites et de trouver la bonne affaire.\"/>
            <meta name=”twitter:description” content=\"Notre site vous permet de passer toutes vos petites annonces gratuites et de trouver la bonne affaire.\"/>
            <meta property=\"fb:app_id\" content=\"770925942943303\"/>
            <meta property=\"og:type\" content=\"website\"/>
            <meta property=\"article:author\" content=\"nal9ach.com\" />
            <meta name=\"author\" content=\"nal9ach.com\" />
            <meta property=\"og:image\" content=\"http://nal9ach.com/web/uploads/085156-Capture.PNG\"/>
            <meta name=”twitter:image” content=\"http://nal9ach.com/web/uploads/085156-Capture.PNG\"/>
            
            <meta name=”twitter:card” content=”www.nal9ach.com”>
        ";
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "Nal9ach";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 177
    public function block_jquery($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":front:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 177,  353 => 69,  347 => 26,  328 => 9,  325 => 8,  318 => 215,  312 => 212,  305 => 208,  299 => 205,  293 => 202,  287 => 199,  283 => 198,  277 => 195,  271 => 192,  267 => 191,  261 => 188,  255 => 185,  247 => 180,  243 => 178,  241 => 177,  201 => 140,  197 => 139,  193 => 138,  137 => 84,  135 => 83,  127 => 77,  125 => 76,  117 => 70,  114 => 69,  112 => 68,  109 => 67,  107 => 66,  101 => 62,  99 => 61,  78 => 43,  73 => 41,  68 => 39,  63 => 37,  58 => 35,  53 => 33,  49 => 32,  41 => 27,  37 => 26,  34 => 25,  32 => 8,  23 => 1,);
    }
}
