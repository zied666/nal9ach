<?php

/* frontAccueilBundle:Front:menufooter.html.twig */
class __TwigTemplate_377371a0a57299b35372fb139be501a6213a6cc749616a87a3d374f513f4621b extends Twig_Template
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
        echo "<div class=\"span2\">
    <div class=\"main-titles lined\">
        <h5 class=\"MinTitle\"><span class=\"light\">Plan  </span> de site</h5>
    </div>
    <ul class=\"nav bold\">
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Connexion</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Inscription</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a></li>
    </ul>
</div>
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 13
            echo "    <div class=\"span2\">
        <div class=\"main-titles lined\">
            <h5 class=\"MinTitle\">";
            // line 15
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</h5>
        </div>
        <ul class=\"nav\">
            ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "services", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 19
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_annonce", array("categorie" => $this->getAttribute($this->getAttribute($context["service"], "categorie", array()), "id", array()), "service" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "libelle", array()), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "<style>
    .MinTitle
    {
        font-size: 14px;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "frontAccueilBundle:Front:menufooter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  73 => 21,  62 => 19,  58 => 18,  52 => 15,  48 => 13,  44 => 12,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
