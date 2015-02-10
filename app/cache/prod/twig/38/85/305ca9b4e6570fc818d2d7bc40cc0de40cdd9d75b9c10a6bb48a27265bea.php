<?php

/* adminPageBundle:front:donnees.html.twig */
class __TwigTemplate_3885305ca9b4e6570fc818d2d7bc40cc0de40cdd9d75b9c10a6bb48a27265bea extends Twig_Template
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
        echo "<li>
    <span class=\"act\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "html", null, true);
        echo "</span>
    <strong>Utilisateurs</strong>
</li>
<li>
    <span class=\"act\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["newslettre"]) ? $context["newslettre"] : $this->getContext($context, "newslettre")), "html", null, true);
        echo "</span>
    <strong>NewsLettre</strong>
</li>
<li>
    <span class=\"act\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["annoncesE"]) ? $context["annoncesE"] : $this->getContext($context, "annoncesE")), "html", null, true);
        echo "</span>
    <strong>Annonces annulées</strong>
</li>
<li>
    <span class=\"act\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")), "html", null, true);
        echo "</span>
    <strong>Annonces</strong>
</li>
<li>
    <span class=\"act\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")), "html", null, true);
        echo "</span>
    <strong>Commentaires</strong>
</li>";
    }

    public function getTemplateName()
    {
        return "adminPageBundle:front:donnees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  43 => 14,  36 => 10,  29 => 6,  22 => 2,  19 => 1,);
    }
}
