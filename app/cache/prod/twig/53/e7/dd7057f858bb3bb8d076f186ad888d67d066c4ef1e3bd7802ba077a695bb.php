<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_53e7dd7057f858bb3bb8d076f186ad888d67d066c4ef1e3bd7802ba077a695bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":front:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":front:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Athentification";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"darker-stripe\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <ul class=\"breadcrumb\">
                        <li>
                            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Accueil</a>
                        </li>
                        <li><span class=\"icon-chevron-right\"></span></li>
                        <li>
                            <a href=\"javascript:void(0)\">Authentification</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"push-up top-equal blocks-spacer-last\">
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"title-area\">
                        <h1 class=\"inline\">Authentification</h1>
                    </div>
                </div>
                <section class=\"span6 single single-page\">
                    ";
        // line 30
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 31
            echo "                        <section id=\"alertBoxes\">
                            <div class=\"alert alert-danger in fade\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                            </div>
                        </section>
                    ";
        }
        // line 38
        echo "                    <section class=\"contact-form-container\">
                        ";
        // line 39
        echo "    
                        <form action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"commentform\"  />
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div>
                            <label for=\"author\">Nom d'utilisateur ou Email <span class=\"red-clr bold\">*</span> :</label>
                            <input type=\"text\"  placeholder=\"Nom d'utilisateur ou Email\" id=\"username\" name=\"_username\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                        </div>
                        <div>
                            <label for=\"author\">Mot de passe <span class=\"red-clr bold\">*</span> :</label>
                            <input type=\"password\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\" required=\"required\"  />
                            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oubilié ?</a>
                        </div>
                        <p>

                            <label for=\"remember_me\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"vertical-align: sub;\" /> Garder ma session active </label>
                        </p>
                        <p>
                            <button class=\"btn btn-primary bold\" type=\"submit\" tabindex=\"5\" id=\"submit\">S'authentifier</button>
                            ou
                            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><button class=\"btn btn-primary bold\" type=\"button\" tabindex=\"5\" id=\"submit\">S'inscrire</button></a>
                        </p>
                        </form>
                    </section>
                </section>
                <section class=\"span6 single single-page\">
                    <div >
                        <a class=\"btn btn-facebook\" href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("facebook_log");
        echo "\" >
                            <span class=\"icon-facebook \" style=\"color:white\"></span> | Se connecter via Facebook
                        </a>
                                <a class=\"btn btn-google-plus g-signin\" href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("google_log");
        echo "\">
                                <span class=\" icon-google-plus \" style=\"color:white\"></span> | Se connecter via Google
                            </a>
                    </div>
                </section>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 68,  129 => 65,  119 => 58,  107 => 49,  99 => 44,  93 => 41,  89 => 40,  86 => 39,  83 => 38,  76 => 34,  71 => 31,  69 => 30,  46 => 10,  38 => 4,  35 => 3,  29 => 2,);
    }
}
