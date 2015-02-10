<?php

/* :front:header.html.twig */
class __TwigTemplate_ccd3456a57e534364cbbafb9b54097f38c05c6b75d0a68a52abf25b4679c8b34 extends Twig_Template
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
        echo "<header id=\"header\">
    <div class=\"darker-row\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\">
                    <div class=\"higher-line\">
                        ";
        // line 7
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 8
            echo "                            Bienvenue, 
                            <strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "</strong>, 
                            <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" role=\"button\">Déconnexion</a>
                        ";
        } else {
            // line 11
            echo " 
                            Bienvenue, 
                            <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" role=\"button\">Connexion</a> ou
                            <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" role=\"button\" data-toggle=\"modal\"> Inscription  </a>
                        ";
        }
        // line 16
        echo "                    </div>
                </div>
                <div class=\"span8\">
                    ";
        // line 19
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 20
            echo "                        <div class=\"topmost-line\">
                            <div class=\"higher-line\">
                                <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("ajoutannonce");
            echo "\" class=\"gray-link\"> <li class=\"icon-plus\" ></li> Ajouter une annonce</a>
                                &nbsp; | &nbsp;
                                <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("listecommentaires");
            echo "\" class=\"gray-link\">Commentaires non-lus (";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("frontAnnonceBundle:Front:countcommentaire"));
            echo ")</a>
                                &nbsp; | &nbsp;
                                <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("annonce_liste");
            echo "\" class=\"gray-link\">Mes annonces (";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("frontAnnonceBundle:Front:countannonce"));
            echo ")</a>
                                ";
            // line 27
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 28
                echo "                                    &nbsp; | &nbsp;
                                    <a href=\"";
                // line 29
                echo $this->env->getExtension('routing')->getPath("admin_general_homepage");
                echo "\" target=\"_blank\" class=\"gray-link\">Administration</a>
                                ";
            }
            // line 31
            echo "                            </div>
                            ";
            // line 32
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("frontAccueilBundle:Front:sousmenu"));
            echo "

                        </div>
                    ";
        } else {
            // line 36
            echo "                        <div class=\"SocialButton\">
                            <a class=\"btn btn-facebook\" href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("facebook_log");
            echo "\" >
                                <span class=\"icon-facebook \" style=\"color:white\"></span> | Se connecter via Facebook
                            </a>
                            <a class=\"btn btn-google-plus g-signin\" href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("google_log");
            echo "\">
                                <span class=\" icon-google-plus \" style=\"color:white\"></span> | Se connecter via Google
                            </a>
                        </div>
                    ";
        }
        // line 45
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span5\">
                <a class=\"brand\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">
                    ";
        // line 53
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("adminPageBundle:Front:logo"));
        echo "
                </a>
            </div>

            <div class=\"span5\">
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("ajoutannonce");
        echo "\" >
                    ";
        // line 59
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("frontAccueilBundle:Front:photoheader"));
        echo "
                    ";
        // line 61
        echo "                </a>
            </div>

            <div class=\"span2\">
                <div class=\"top-right\">
                    <div class=\"icons\">
                        ";
        // line 67
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("frontAccueilBundle:Front:social"));
        echo "
                    </div>
                </div>
            </div> <!-- /social icons -->
        </div>
    </div>
</header>
<style>
    .SocialButton
    {
        float: right;
    }
    .gray-link {
        color: #727272;
    }
    .darker-row {
        background-color: #F3F3F3;
        padding: 5px 0px;
        border-bottom: 1px solid #E0E0E0;
    }
    .higher-line {
        line-height: 27px;
        display: inline-block;
        vertical-align: middle;
    }
    .topmost-line .selected {
        border: 1px solid #E0E0E0;
        border-radius: 3px;
        display: block;
        padding: 3px 8px;
        color: #727272;
        text-decoration: none !important;
    }
    .lang-currency {
        display: inline-block;
        vertical-align: middle;
    }
    .topmost-line {
        text-align: right;
    }
    .topmost-line .dropdown {
        display: inline-block;
        vertical-align: middle;
        margin-left: 5px;
        background: none repeat scroll 0% 0% #FFF;
    }
    .topmost-line .selected {
        color: #727272;
    }
    .dropdown .caret {
        margin-top: 8px;
        margin-left: 2px;
    }
    .topmost-line .dropdown-menu {
        z-index: 1105;
        border-radius: 3px;
        margin-top: 1px;
        text-align: left;
    }
    a:hover, a:focus {
        color: #005580;
        text-decoration: underline;
    }
    a:focus {
        outline: thin dotted #333;
        outline-offset: -2px;
    }
    @media (max-width: 767px) {
        .SocialButton{float:none;}
        .row, .thumbnails { margin-left: 0; }
        [class*=\"span\"], .uneditable-input[class*=\"span\"], .row-fluid [class*=\"span\"] {
            float: none; 
            display: block;
            width: 100%;
            margin-left: 0px;
            box-sizing: border-box;
        }
        header .topmost-line {
            text-align: center;
        }
    }
    .btn-facebook {
        color: #FFF;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
        background-image: linear-gradient(to bottom, #3B5998, #133783);
    }
    .btn-facebook:hover {
        color: #FFF;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
        background-image: linear-gradient(to bottom, #3B5998, #133783);
        opacity: 0.7;
    }
    .btn-google-plus{
        color: #FFF;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
        background-image: linear-gradient(to bottom, #DD4B39, #C53727);
    }
    .btn-google-plus:hover {
        color: #FFF;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
        background-image: linear-gradient(to bottom, #DD4B39, #C53727);
        opacity: 0.7;
    }
</style>";
    }

    public function getTemplateName()
    {
        return ":front:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 67,  151 => 61,  147 => 59,  143 => 58,  135 => 53,  131 => 52,  122 => 45,  114 => 40,  108 => 37,  105 => 36,  98 => 32,  95 => 31,  90 => 29,  87 => 28,  85 => 27,  79 => 26,  72 => 24,  67 => 22,  63 => 20,  61 => 19,  56 => 16,  51 => 14,  47 => 13,  43 => 11,  38 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
