<?php

/* adminPageBundle::footer.html.twig */
class __TwigTemplate_e8ce933b68303646b0aefe1ca6ed12bca030a71bf89ff71cd1c4ced569dbce04 extends Twig_Template
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
        echo "Footer";
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
                    <a href=\"#\">Footer</a>
                </li>
            ";
    }

    public function getTemplateName()
    {
        return "adminPageBundle::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  60 => 9,  57 => 8,  51 => 19,  46 => 16,  44 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
