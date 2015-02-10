<?php

/* frontAccueilBundle:Default:accueil.html.twig */
class __TwigTemplate_394c5ff4608c893c965098e8ce4050ae1ceea1720105b349275dea0acfb4e31d extends Twig_Template
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
        echo "Accueil";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\" >
        <div class=\"row\">
            <div class=\"span12\">
                <h5 style=\"text-align: center\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), "text2", array()), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"span4 MMidle\" style=\"text-align: center;\">
                ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 11
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_annonce", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">  <h5 style=\"text-align: left;\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/accueil" . $this->getAttribute($context["loop"], "index", array())) . ".png")), "html", null, true);
            echo "\" style=\"margin-right: 30px;width: 45px;height: 45px;\" > ";
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo " </h5></a><hr style=\"margin: 0;\">
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
            </div>
            <div class=\"span4\">";
        // line 14
        $this->env->loadTemplate(":front:map.html.twig")->display($context);
        echo "</div>
            <div class=\"span4 MMidle\" style=\"\">
                <div class=\"sidebar-item opening-time\" id=\"opening_time-4\" style=\"margin-right: auto;margin-left: auto;margin-bottom: 0px;\">
                    <div class=\"time-table\">
                        <dl class=\"week-day\" style=\"padding: 7px;\">
                            <dd style=\"text-align: center;\">
                                <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_annonce", array("region" => $this->getAttribute((isset($context["GrandTunis"]) ? $context["GrandTunis"] : $this->getContext($context, "GrandTunis")), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["GrandTunis"]) ? $context["GrandTunis"] : $this->getContext($context, "GrandTunis")), "id", array()), "html", null, true);
        echo "\" class=\"lien";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["GrandTunis"]) ? $context["GrandTunis"] : $this->getContext($context, "GrandTunis")), "id", array()), "html", null, true);
        echo " region\" >";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["GrandTunis"]) ? $context["GrandTunis"] : $this->getContext($context, "GrandTunis")), "libelle", array()), "html", null, true);
        echo "</a> <br>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div class=\"span2\">
                <div class=\"sidebar-item opening-time\" id=\"opening_time-4\" style=\"margin-right: auto;margin-left: auto;\">
                    <div class=\"time-table\">
                        ";
        // line 30
        $context["i"] = 0;
        // line 31
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            if (($this->getAttribute($context["region"], "id", array()) != 36)) {
                // line 32
                echo "                            <dl class=\"week-day ";
                if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2) == 0)) {
                    echo "light-bg";
                }
                echo "\" style=\"padding: 7px;\">
                                <dd style=\"text-align: center;\">
                                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_annonce", array("region" => $this->getAttribute($context["region"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
                echo "\" class=\"lien";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
                echo " region\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "libelle", array()), "html", null, true);
                echo "</a> <br>
                                </dd>
                            </dl>
                            ";
                // line 37
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                echo "    
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </div>
                </div>
            </div>
            <div class=\"span2\">
                <div class=\"sidebar-item opening-time\" id=\"opening_time-4\">
                    <div class=\"time-table\">
                        ";
        // line 45
        $context["i"] = 0;
        // line 46
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions2"]) ? $context["regions2"] : $this->getContext($context, "regions2")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 47
            echo "                            <dl class=\"week-day ";
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2) == 0)) {
                echo "light-bg";
            }
            echo "\" style=\"padding: 7px;\">
                                <dd style=\"text-align: center;\">
                                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_annonce", array("region" => $this->getAttribute($context["region"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "\" class=\"lien";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo " region\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "libelle", array()), "html", null, true);
            echo "</a> <br>
                                </dd>
                            </dl>
                            ";
            // line 52
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            echo "    
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
    <style>
        .MMidle{
            padding-top: 40px
        }
    </style>
    ";
        // line 64
        $this->env->loadTemplate(":front:lastnews.html.twig")->display($context);
        // line 65
        echo "    ";
        $this->env->loadTemplate(":front:partenaire.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "frontAccueilBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 65,  211 => 64,  199 => 54,  191 => 52,  179 => 49,  171 => 47,  166 => 46,  164 => 45,  156 => 39,  147 => 37,  135 => 34,  127 => 32,  121 => 31,  119 => 30,  100 => 20,  91 => 14,  87 => 12,  66 => 11,  49 => 10,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
