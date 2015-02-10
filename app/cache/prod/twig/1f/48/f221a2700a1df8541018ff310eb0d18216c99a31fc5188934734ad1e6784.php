<?php

/* adminUserBundle:Default:edit.html.twig */
class __TwigTemplate_1f48f221a2700a1df8541018ff310eb0d18216c99a31fc5188934734ad1e6784 extends Twig_Template
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
        echo "Modification";
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
        // line 19
        echo "        </ul>
    </div>
</nav>  
            
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
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("listeUser");
        echo "\">Utilisateurs</a>
                </li>
                <li>    
                    <a href=\"#\">Modification</a>
                </li>
            ";
    }

    public function getTemplateName()
    {
        return "adminUserBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  65 => 10,  62 => 9,  59 => 8,  52 => 23,  46 => 19,  44 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
