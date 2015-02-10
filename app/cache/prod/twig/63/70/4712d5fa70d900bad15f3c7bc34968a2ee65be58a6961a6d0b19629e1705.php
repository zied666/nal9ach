<?php

/* :front:footer.html.twig */
class __TwigTemplate_63704712d5fa70d900bad15f3c7bc34968a2ee65be58a6961a6d0b19629e1705 extends Twig_Template
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
        echo "<footer>
    <div class=\"foot-light\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("frontAccueilBundle:Front:footer"));
        echo "
        </div>
    </div> <!-- /upper footer -->
    ";
        // line 8
        $this->env->loadTemplate(":front:menufooter.html.twig")->display($context);
        // line 9
        echo "    <div class=\"foot-last\">
        <a href=\"#\" id=\"toTheTop\">
            <span class=\"icon-chevron-up\"></span>
        </a>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span6\">
                    &copy; Copyright ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"javascript:void(0)\">Nal9ach</a> All Rights Reserved.
                </div>
                <div class=\"span6\">
                    <div class=\"pull-right\"> </div>
                </div>
            </div>
        </div>
    </div> <!-- /bottom footer -->
</footer> <!-- /footer -->";
    }

    public function getTemplateName()
    {
        return ":front:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  33 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
