<?php

/* adminPageBundle:front:logo.html.twig */
class __TwigTemplate_34d7bc5ed4750c0f3e1e3e77be74df767b4927afd71eda0ae57cff12bdffe0ec extends Twig_Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "getUploadDir", array()) . "/") . $this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "logo", array()))), "html", null, true);
        echo "\" style=\"width: 160px\" /> 
<span class=\"tagline\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "text1", array()), "html", null, true);
        echo "</span> ";
    }

    public function getTemplateName()
    {
        return "adminPageBundle:front:logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
