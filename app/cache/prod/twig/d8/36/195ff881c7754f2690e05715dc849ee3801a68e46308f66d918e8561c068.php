<?php

/* frontAccueilBundle:Front:photoheader.html.twig */
class __TwigTemplate_d836195ff881c7754f2690e05715dc849ee3801a68e46308f66d918e8561c068 extends Twig_Template
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
        echo "<img id=\"PhHeader\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")), "getUploadDir", array()) . "/") . $this->getAttribute((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")), "photo1", array()))), "html", null, true);
        echo "\" > 
<style> 
#PhHeader {
    position: relative;
    -webkit-animation: myfirst 1s linear 1s infinite alternate; /* Chrome, Safari, Opera */
    animation: myfirst 1s linear 1s infinite alternate ;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes myfirst {
    0%   {left:0px; top:0px;}
    1%   {left:10px; top:0px;}
    2%   {left:-10px; top:0px;}
    3%   {left:15px; top:0px;}
    4%   {left:-10px; top:0px;}
    5%   {left:15px; top:0px;}
    6%   {left:0px; top:0px;}
    7%  {left:5px; top:0px;}
    8%  {left:-10px; top:0px;}
    9%  {left:10px; top:0px;}
    10%  {left:0px; top:0px;}
    100% {left:0px; top:0px;}
}

/* Standard syntax */
@keyframes myfirst {
    0%   {left:0px; top:0px;}
    1%   {left:10px; top:0px;}
    2%   {left:-10px; top:0px;}
    3%   {left:15px; top:0px;}
    4%   {left:-10px; top:0px;}
    5%   {left:15px; top:0px;}
    6%   {left:0px; top:0px;}
    7%  {left:5px; top:0px;}
    8%  {left:-10px; top:0px;}
    9%  {left:10px; top:0px;}
    10%  {left:0px; top:0px;}
    100% {left:0px; top:0px;}
}
</style>";
    }

    public function getTemplateName()
    {
        return "frontAccueilBundle:Front:photoheader.html.twig";
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
