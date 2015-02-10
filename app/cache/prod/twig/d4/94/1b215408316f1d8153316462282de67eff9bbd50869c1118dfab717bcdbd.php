<?php

/* frontAccueilBundle:Front:social.html.twig */
class __TwigTemplate_d4941b215408316f1d8153316462282de67eff9bbd50869c1118dfab717bcdbd extends Twig_Template
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
        if (($this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "facebook", array()) != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "facebook", array()), "html", null, true);
            echo "\"><span class=\"IICON icon-facebook\"></span></a>";
        }
        // line 2
        if (($this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "twitter", array()) != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "twitter", array()), "html", null, true);
            echo "\"><span class=\"IICON icon-twitter\"></span></a>";
        }
        // line 3
        if (($this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "googleplus", array()) != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "googleplus", array()), "html", null, true);
            echo "\"><span class=\"IICON icon-google-plus \"></span></a>";
        }
        // line 4
        if (($this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "linkedin", array()) != "")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "linkedin", array()), "html", null, true);
            echo "\"><span class=\"IICON icon-linkedin\"></span></a>";
        }
        // line 5
        echo "<style>
    .icon-facebook{
        color: #47639E;
    }
    .icon-linkedin{
        color: #0077B5;
    }
    .icon-google-plus  {
        color: #D73D32;
    }
    .icon-twitter{
        color: #55ACEE;
    }
    .IICON
    {
        font-size: 20px;
        padding: 8px;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "frontAccueilBundle:Front:social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 4,  31 => 3,  25 => 2,  19 => 1,);
    }
}
