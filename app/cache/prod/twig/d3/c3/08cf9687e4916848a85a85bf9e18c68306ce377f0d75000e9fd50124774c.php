<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_d3c308cf9687e4916848a85a85bf9e18c68306ce377f0d75000e9fd50124774c extends Twig_Template
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
        // line 3
        echo "</h1>
";
        // line 15
        echo "<style>
    .darker-row{
        display: none;
    }
</style>
<div class=\"darker-stripe\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <ul class=\"breadcrumb\">
                    <li>
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Accueil</a>
                    </li>
                    <li><span class=\"icon-chevron-right\"></span></li>
                    <li>
                        <a href=\"javascript:void(0)\">Erreur</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"push-up blocks-spacer\">
        <div class=\"row\">

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class=\"span12\">

                <p class=\"container-404\">
                <h1 style=\"text-align: center;font-size: 60px\"><strong>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</h1>
                </p>

                <hr />
                <p class=\"center-align size-16\">
                    On dirait que quelque chose se est mal passé! La page que vous cherchez ne est pas ici. 
                </p>
                <p class=\"center-align size-16 push-down-50\">
                    Go <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Accueil</a>
                </p>
                <p class=\"center-align size-16 push-down-50\">
                    ";
        // line 59
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 60
            echo "                    <h1 style=\"color: red;font-size: 25px\">";
            echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true)));
            echo "</h1>
                    ";
            // line 61
            $context["previous_count"] = twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "allPrevious", array()));
            // line 62
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
            foreach ($context['_seq'] as $context["position"] => $context["e"]) {
                // line 63
                echo "                        ";
                $this->env->loadTemplate("TwigBundle:Exception:traces.html.twig")->display(array("exception" => $context["e"], "position" => $context["position"], "count" => (isset($context["previous_count"]) ? $context["previous_count"] : $this->getContext($context, "previous_count"))));
                // line 64
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                ";
        }
        // line 66
        echo "                </p>
            </section> <!-- /main content -->
        </div>
    </div>
</div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 66,  102 => 65,  96 => 64,  93 => 63,  88 => 62,  86 => 61,  81 => 60,  79 => 59,  73 => 56,  60 => 48,  35 => 26,  22 => 15,  19 => 3,);
    }
}
