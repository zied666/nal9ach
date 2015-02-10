<?php

/* adminPageBundle::marketing.html.twig */
class __TwigTemplate_13e777586a779e3941f5e70dc29ccaf84e33f1c1e58e1df6e818ddb0a4156187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":admin:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sitmap' => array($this, 'block_sitmap'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Page marketing";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <nav>
        <div id=\"jCrumbs\" class=\"breadCrumb module\">

            <ul>";
        // line 8
        $this->displayBlock('sitmap', $context, $blocks);
        // line 16
        echo "        </ul>
    </div>
</nav>  
            <img style=\"width: 150px\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")), "getUploadDir", array()) . "/") . $this->getAttribute((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")), "banniere", array()))), "html", null, true);
        echo "\" > 
            <img style=\"width: 150px\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")), "getUploadDir", array()) . "/") . $this->getAttribute((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")), "photo1", array()))), "html", null, true);
        echo "\" > 
            <img style=\"width: 150px\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")), "getUploadDir", array()) . "/") . $this->getAttribute((isset($context["marketing"]) ? $context["marketing"] : $this->getContext($context, "marketing")), "photo2", array()))), "html", null, true);
        echo "\" > 
            <hr><hr><hr><hr>
 ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "        
            
";
    }

    // line 8
    public function block_sitmap($context, array $blocks = array())
    {
        // line 9
        echo "                <li>    
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_general_homepage");
        echo "\"><i class=\"icon-home\"></i></a>
                </li>
                <li>    
                    <a href=\"#\">marketing</a>
                </li>
            ";
    }

    public function getTemplateName()
    {
        return "adminPageBundle::marketing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  74 => 9,  71 => 8,  64 => 23,  59 => 21,  55 => 20,  51 => 19,  46 => 16,  44 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
