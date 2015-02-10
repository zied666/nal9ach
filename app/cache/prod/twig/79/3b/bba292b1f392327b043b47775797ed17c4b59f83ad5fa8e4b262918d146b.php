<?php

/* :admin:header.html.twig */
class __TwigTemplate_793bbba292b1f392327b043b47775797ed17c4b59f83ad5fa8e4b262918d146b extends Twig_Template
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
        echo "<header>
    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">
                <a class=\"brand\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_general_homepage");
        echo "\"><i class=\"icon-home icon-white\"></i>  Administration</a>
                <ul class=\"nav user_menu pull-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 11
        echo "                                ";
        // line 12
        echo "                                <li><a target=\"_blank\" href=\"";
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Mon site</a></li>
                                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a></li>
                            </ul>
                        </li>
                </ul>
                <a data-target=\".nav-collapse\" data-toggle=\"collapse\" class=\"btn_menu\">
                        <span class=\"icon-align-justify icon-white\"></span>
                </a>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return ":admin:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  40 => 12,  38 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }
}
