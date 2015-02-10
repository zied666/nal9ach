<?php

/* :front:menu.html.twig */
class __TwigTemplate_06e85cb4e4ca56a8dfbdef4804b05d6312676bbaa610636462d007bf9ee505fd extends Twig_Template
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
        echo "<div class=\"navbar navbar-static-top\" id=\"stickyNavbar\" style=\"margin-bottom: 15px;\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav\" id=\"mainNavigation\">
                            <li ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "accueil")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Accueil</a></li>
                                ";
        // line 14
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("frontAccueilBundle:Front:menu"));
        echo "
                            <li ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "contact")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">contact</a></li>
                        </ul>
 
                        <form class=\"navbar-form pull-right\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("Filtre");
        echo "\" method=\"POST\" />
                        <button type=\"submit\"><span class=\"icon-search\"></span></button>
                        <input type=\"text\" class=\"span1\" name=\"FiltreSearch\" id=\"navSearchInput\" class='required' placeholder=\"mot clé\" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                        <style>
                            #mainNavigation li
                            {
                                font-size: 11px;
                            }
                        </style>            ";
    }

    public function getTemplateName()
    {
        return ":front:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  45 => 15,  41 => 14,  33 => 13,  19 => 1,);
    }
}
