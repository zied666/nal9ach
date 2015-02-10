<?php

/* :front:menufooter.html.twig */
class __TwigTemplate_7e39eac9a8bc13dc9bd9ffafa6497537cfee2c814ff12696175584ade01a4a44 extends Twig_Template
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
