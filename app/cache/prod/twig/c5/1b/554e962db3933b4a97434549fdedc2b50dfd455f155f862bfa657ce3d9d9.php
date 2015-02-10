<?php

/* adminPageBundle:front:partenaire.html.twig */
class __TwigTemplate_c51b554e962db3933b4a97434549fdedc2b50dfd455f155f862bfa657ce3d9d9 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) ? $context["partenaires"] : $this->getContext($context, "partenaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 2
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($context["partenaire"], "getUploadDir", array()) . "/") . $this->getAttribute($context["partenaire"], "logo", array()))), "html", null, true);
            echo "\" alt=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["partenaire"], "libelle", array()), "html", null, true);
            echo "\" width=\"150px\" height=\"104px\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "adminPageBundle:front:partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
