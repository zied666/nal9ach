<?php

/* adminPageBundle::accueil.html.twig */
class __TwigTemplate_5d299f88186d233dec2c1c2abc2c9e462bd0b90730a311bc635851306447b2a7 extends Twig_Template
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
        echo "Page Accueil";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<nav>
        <div id=\"jCrumbs\" class=\"breadCrumb module\">

            <ul>";
        // line 8
        $this->displayBlock('sitmap', $context, $blocks);
        // line 16
        echo "        </ul>
    </div>
</nav>  
";
        // line 19
        if (((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")) != null)) {
            // line 20
            echo "    <img style=\"width: 150px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "getUploadDir", array()) . "/") . $this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "logo", array()))), "html", null, true);
            echo "\" > 
";
        }
        // line 22
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
                    <a href=\"#\">Page accueil</a>
                </li>
            ";
    }

    public function getTemplateName()
    {
        return "adminPageBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  69 => 9,  66 => 8,  59 => 22,  53 => 20,  51 => 19,  46 => 16,  44 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
