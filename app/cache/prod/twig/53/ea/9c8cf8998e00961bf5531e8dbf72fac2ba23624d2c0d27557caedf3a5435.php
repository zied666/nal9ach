<?php

/* :front:menufooter.html.twig */
class __TwigTemplate_53ea9c8cf8998e00961bf5531e8dbf72fac2ba23624d2c0d27557caedf3a5435 extends Twig_Template
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
        echo "<div class=\"foot-dark\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("frontAccueilBundle:Front:menufooter"));
        echo "    
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return ":front:menufooter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
