<?php

/* frontAccueilBundle:Front:footer.html.twig */
class __TwigTemplate_ec768978bb86eee0a4ce9e8002a20d0084e54d5a09bbdc70ddd126cab80306f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"span3\">
    ";
        // line 2
        if (false) {
            // line 3
            echo "        <h2 class=\"pacifico\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "titre", array()), "html", null, true);
            echo " &nbsp; <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/webmarket.png"), "html", null, true);
            echo "\"  class=\"align-baseline\" /></h2>
        <p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "texte", array()), "html", null, true);
            echo "</p>
    ";
        }
        // line 6
        echo "    <div class=\"main-titles lined\">
        <h3 class=\"title\">Google +</h3>
    </div>
    <div>
        <div class=\"fill-iframe\">
            <script src=\"https://apis.google.com/js/platform.js\" async defer>
                {
                    lang: 'fr'
                }
            </script>
            <div class=\"g-page\" data-width=\"273\" data-href=\"https://plus.google.com/101650575489308897639\" data-theme=\"dark\" data-layout=\"landscape\" data-showcoverphoto=\"false\" data-rel=\"publisher\"></div>
        </div>
    </div>
</div>
<div class=\"span3\">
    <div class=\"main-titles lined\">
        <h3 class=\"title\">Twitter</h3>
    </div>
    <div>
        <div class=\"fill-iframe\">
            <a class=\"twitter-timeline\"  href=\"https://twitter.com/NetmarketingTN\" data-widget-id=\"553104841187540992\">Tweets de @NetmarketingTN</a>
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + \"://platform.twitter.com/widgets.js\";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, \"script\", \"twitter-wjs\");</script>

        </div>
    </div>
</div>
<div class=\"span3\">
    <div class=\"main-titles lined\">
        <h3 class=\"title\">Facebook</h3>
    </div>
    <div class=\"bordered\">
        <div class=\"fill-iframe\">
            <div class=\"fb-like-box\" data-href=\"https://www.facebook.com/Netmarketingpageofficielle\" data-width=\"292\" data-height=\"265\" data-colorscheme=\"dark\" data-show-faces=\"true\" data-header=\"false\" data-stream=\"false\" data-show-border=\"false\"></div>
        </div>
    </div>
</div>
<div class=\"span3\">
    <div class=\"main-titles lined\">
        <h3 class=\"title\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "titre2", array()), "html", null, true);
        echo "</h3>
    </div>
    <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "text2", array()), "html", null, true);
        echo "</p>
    <div id=\"mc_embed_signup\">
        <form action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("newslettre");
        echo "\" method=\"post\" class=\"validate form form-inline\" />
        <div class=\"mc-field-group\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "  
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "SmallWidth")));
        echo "\t
            <input type=\"submit\" value=\"Ok\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"btn btn-primary\" />
        </div>
        <div id=\"mce-responses\" class=\"clear\">
            <div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
            <div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
        </div>

        </form>
    </div>
</div>
</div>

<style>
    .SmallWidth
    {
        width: 200px;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "frontAccueilBundle:Front:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 59,  99 => 58,  94 => 56,  89 => 54,  84 => 52,  36 => 6,  31 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
