<?php

/* frontAccueilBundle:Front:menu.html.twig */
class __TwigTemplate_5ef48389f5944399cd9a54f6868085c0ad855e340689e8f29eb77e2c2d16c216 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "    <li class=\"dropdown\">
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_annonce", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\" class=\"dropdown-toggle\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo " <b class=\"caret\"></b> </a>
        <ul class=\"dropdown-menu\">
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "services", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 6
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_annonce", array("categorie" => $this->getAttribute($this->getAttribute($context["service"], "categorie", array()), "id", array()), "service" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "libelle", array()), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </ul>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "frontAccueilBundle:Front:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  37 => 6,  33 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }
}
