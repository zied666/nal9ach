<?php

/* :front:lastnews.html.twig */
class __TwigTemplate_ad9589b76d317d8ad1b8d10db15f187e9c73b9468dd9762e9a27ac432d891fd5 extends Twig_Template
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("adminPageBundle:Front:news"));
    }

    public function getTemplateName()
    {
        return ":front:lastnews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
