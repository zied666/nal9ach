<?php

/* frontAccueilBundle:Front:sousmenu.html.twig */
class __TwigTemplate_a72f83140b6f2f44fd83aaf0174ae4275b7c10db32d5f76442874f31e28283d7 extends Twig_Template
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
        echo "&nbsp;
";
        // line 2
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()) != "")) {
            // line 3
            echo "                            <div class=\"lang-currency\">
                                <div class=\"dropdown js-selectable-dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"selected\" href=\"#\"><span class=\"js-change-text\">Mon espace</span> <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu js-possibilities\" role=\"menu\" aria-labelledby=\"dLabel\">
                                        <li ";
            // line 7
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "monprofile")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("monprofile");
            echo "\">Mon profile</a></li>
                                        <li ";
            // line 8
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_change_password")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Modifier mot de passe</a></li>
                                    </ul>
                                </div>
                            </div>
";
        }
        // line 12
        echo "\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "frontAccueilBundle:Front:sousmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  38 => 8,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}
