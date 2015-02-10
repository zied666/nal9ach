<?php

/* :front:login.html.twig */
class __TwigTemplate_c5e344b9a3862cd5a17ebe69770e8c3eeda231d7cf81f7aa864f5af7ee6ea682 extends Twig_Template
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
        echo "<!--  = Login =  -->
<div id=\"loginModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h3 id=\"loginModalLabel\">Authentification</h3>
    </div>
    <div class=\"modal-body\">
        <form method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"\" />
        <div class=\"control-group\">
            <label class=\"control-label hidden shown-ie8\" for=\"inputEmail\">Nom d'utilisateur</label>
            <div class=\"controls\">
                <input  type=\"text\" class=\"input-block-level\" placeholder=\"Login\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" />
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label hidden shown-ie8\" for=\"inputPassword\">Mot de passe</label>
            <div class=\"controls\">
                <input class=\"input-block-level\" type=\"password\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>
        </div>
        <div class=\"control-group\">
            <div class=\"controls\">
                <label class=\"checkbox\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                    Garder ma session active
                </label>
            </div>
        </div>
        <button type=\"submit\" class=\"btn btn-primary input-block-level bold higher\">
          S'authentifié
        </button>
        </form>
        ";
        // line 34
        if (false) {
            // line 35
            echo "        <p class=\"center-align push-down-0\">
            <a href=\"#\" data-dismiss=\"modal\">Forgot your password?</a>
        </p>
        ";
        }
        // line 39
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return ":front:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 39,  59 => 35,  57 => 34,  28 => 8,  19 => 1,);
    }
}
