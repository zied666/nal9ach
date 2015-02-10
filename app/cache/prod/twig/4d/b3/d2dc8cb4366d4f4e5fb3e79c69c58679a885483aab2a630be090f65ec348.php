<?php

/* :front:lastnews.html.twig */
class __TwigTemplate_4db3d2dc8cb4366d4f4e5fb3e79c69c58679a885483aab2a630be090f65ec348 extends Twig_Template
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
