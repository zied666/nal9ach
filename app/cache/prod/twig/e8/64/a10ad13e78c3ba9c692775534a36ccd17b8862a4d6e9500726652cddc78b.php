<?php

/* :admin:alert.html.twig */
class __TwigTemplate_e864a10ad13e78c3ba9c692775534a36ccd17b8862a4d6e9500726652cddc78b extends Twig_Template
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
        echo "<div class=\"row-fluid\">
    <div class=\"span12\">
            ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 4
            echo "                <div class=\"alert ";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">
                    <a class=\"close\" data-dismiss=\"alert\">×</a>
                    <strong>
                        ";
            // line 7
            if (($context["k"] == "alert-error")) {
                echo "Alert - ";
            }
            // line 8
            echo "                        ";
            if (($context["k"] == "alert-success")) {
                echo "Succes -  ";
            }
            // line 9
            echo "                    </strong>
                        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], 0, array()), "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return ":admin:alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  46 => 10,  43 => 9,  38 => 8,  34 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
