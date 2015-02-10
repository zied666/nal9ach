<?php

/* frontAccueilBundle:Front:footer.html.twig */
class __TwigTemplate_70fe3b1d6122e0f739a946b239b448b5afad26856b66a00636c835b96bc5cab6 extends Twig_Template
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
        echo "<div class=\"span4\">
    <h2 class=\"pacifico\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "titre", array()), "html", null, true);
        echo " &nbsp; <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/webmarket.png"), "html", null, true);
        echo "\"  class=\"align-baseline\" /></h2>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "texte", array()), "html", null, true);
        echo "</p>
</div>
<div class=\"span4\">
    <div class=\"main-titles lined\">
        <h3 class=\"title\">Facebook</h3>
    </div>
    <div class=\"bordered\">
        <div class=\"fill-iframe\">
            <div class=\"fb-like-box\" data-href=\"https://www.facebook.com/Netmarketingpageofficielle\" data-width=\"292\" data-height=\"200\" data-colorscheme=\"dark\" data-show-faces=\"true\" data-header=\"false\" data-stream=\"false\" data-show-border=\"false\"></div>
        </div>
    </div>
</div>
<div class=\"span4\">
    <div class=\"main-titles lined\">
        <h3 class=\"title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "titre2", array()), "html", null, true);
        echo "</h3>
    </div>
    <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "text2", array()), "html", null, true);
        echo "</p>
    <div id=\"mc_embed_signup\">
        <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("newslettre");
        echo "\" method=\"post\" class=\"validate form form-inline\" />
        <div class=\"mc-field-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "  
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "\t\t
            <input type=\"submit\" value=\"S'inscrire\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"btn btn-primary\" />
        </div>
        <div id=\"mce-responses\" class=\"clear\">
            <div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
            <div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
        </div>

        </form>
    </div>
</div>
</div>";
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
        return array (  64 => 24,  60 => 23,  55 => 21,  50 => 19,  45 => 17,  28 => 3,  22 => 2,  19 => 1,);
    }
}
