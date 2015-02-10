<?php

/* :front:partenaire.html.twig */
class __TwigTemplate_2e9baf4b1b90789099ead9fce3055e8d5756fbfd8149d14f35b17012685d52bf extends Twig_Template
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
        echo "<div class=\"container blocks-spacer-last\">

    <!--  ==========  -->
    <!--  = Title =  -->
    <!--  ==========  -->
    <div class=\"row\">
        <div class=\"span12\">
            <div class=\"main-titles lined\">
                <h2 class=\"title\"><span class=\"light\">Nos </span> Partenaires</h2>
                <div class=\"arrows\">
                    <a href=\"#\" class=\"icon-chevron-left\" id=\"brandsLeft\"></a>
                    <a href=\"#\" class=\"icon-chevron-right\" id=\"brandsRight\"></a>
                </div>
            </div>
        </div>
    </div> <!-- /title -->

    <!--  ==========  -->
    <!--  = Logos =  -->
    <!--  ==========  -->
    <div class=\"row\">
        <div class=\"span12\">
            <div class=\"brands carouFredSel\" data-nav=\"brands\" data-autoplay=\"true\">
                ";
        // line 24
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("adminPageBundle:Front:partenaire"));
        echo "
            </div>
        </div>
    </div> <!-- /logos -->
</div> <!-- /brands carousel -->";
    }

    public function getTemplateName()
    {
        return ":front:partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 24,  19 => 1,);
    }
}
