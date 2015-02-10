<?php

/* :front:notification.html.twig */
class __TwigTemplate_04e5aca59d793c9d72239be9fcb16f5ee5633cd327313fc8ca1a6b01fb7e9d4f extends Twig_Template
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
        echo "<section id=\"alertBoxes\">   
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 3
            echo "        <div class=\"alert ";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo " in fade\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>
                ";
            // line 6
            if (($context["k"] == "alert-error")) {
                echo "Alert - ";
            }
            // line 7
            echo "                ";
            if (($context["k"] == "alert-success")) {
                echo "Succes -  ";
            }
            // line 8
            echo "            </strong>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], 0, array()), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</section>";
    }

    public function getTemplateName()
    {
        return ":front:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  45 => 9,  42 => 8,  37 => 7,  33 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
