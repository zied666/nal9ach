<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_35dffc308d32c607c30bf9b65a8deff4505130f35565c0c259058c8f27aaf7ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":front:base.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return ":front:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
