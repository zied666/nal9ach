<?php

/* frontServiceBundle::filtre.html.twig */
class __TwigTemplate_9bdb32a25d0a9587f9510a442b6710692a3a0eee3996c417d9dd0d139470ef38 extends Twig_Template
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
        echo "<aside class=\"span3 left-sidebar\">
    <div class=\"sidebar-item sidebar-filters\" id=\"sidebarFilters\">
        <div class=\"underlined\">
            <h3>Filtre</h3>
        </div>
        <div class=\"accordion-group\">
            <div class=\"accordion-heading\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#filterS\">Mot clé <b class=\"caret\"></b></a>
            </div>
            <div id=\"filterS\" class=\"accordion-body collapse ";
        // line 10
        if (((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")) != "_")) {
            echo "in";
        }
        echo " \">
                <div>
                    <form class=\"\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Filtre", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "ville" => (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "service" => (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "orderby" => (isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")), "desc" => (isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")))), "html", null, true);
        echo "\" method=\"POST\" />
                    <input type=\"text\" value=\"";
        // line 13
        if (((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")) != "_")) {
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
        }
        echo "\"  name=\"FiltreSearch\" />
                    <button style=\"margin-top: -8px;\" type=\"submit\"><span class=\"icon-search\"></span></button>
                    </form>
                </div>
            </div>
        </div> <!-- /categories -->
        <form style=\"margin: 0px;\" method=\"post\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Filtre", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "ville" => (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "service" => (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "orderby" => (isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")), "desc" => (isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")))), "html", null, true);
        echo "\">
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 21
            echo "                <div class=\"accordion-group\">
                    <div class=\"accordion-heading\">
                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#filterCat";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "libelle", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                    </div>
                    <div id=\"filterCat";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\" class=\"accordion-body collapse ";
            if (((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")) == $this->getAttribute($context["cat"], "id", array()))) {
                echo "in ";
            }
            echo "\">
                        <div class=\"accordion-inner\">
                            ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cat"], "services", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ser"]) {
                // line 28
                echo "                                <label class=\"LFilte\"><input onchange=\"submit()\" type=\"radio\" name=\"RadioService\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ser"], "id", array()), "html", null, true);
                echo "\" class=\"LRadio\" ";
                if (((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")) == $this->getAttribute($context["ser"], "id", array()))) {
                    echo "checked";
                }
                echo " > ";
                echo twig_escape_filter($this->env, $context["ser"], "html", null, true);
                echo "</label>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        </div>
                    </div>
                </div>    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            <div class=\"accordion-group\">
                <div class=\"accordion-heading\">
                    <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#filterReg\">Régions <b class=\"caret\"></b></a>
                </div>
                <div id=\"filterReg\" class=\"accordion-body collapse ";
        // line 38
        if (((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")) != 0)) {
            echo "in";
        }
        echo "\">
                    <div class=\"accordion-inner\">
                        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["reg"]) {
            // line 41
            echo "                            <label class=\"LFilte\"><input onchange=\"submit()\" type=\"radio\" name=\"RadioRegion\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reg"], "id", array()), "html", null, true);
            echo "\" class=\"LRadio\" ";
            if (((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")) == $this->getAttribute($context["reg"], "id", array()))) {
                echo "checked";
            }
            echo " > ";
            echo twig_escape_filter($this->env, $context["reg"], "html", null, true);
            echo "</label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </div>
                </div>
            </div>  
        </form>
        ";
        // line 47
        if ((((((((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")) != 0) || ((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")) != 0)) || ((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")) != 0)) || ((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")) != "_")) || ((isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")) != "dateCreation")) || ((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")) != "desc"))) {
            // line 48
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("liste_annonce");
            echo "\" class=\"remove-filter\" id=\"removeFilters\"><span class=\"icon-ban-circle\"></span>Supprimer tous les filtres</a>
        ";
        }
        // line 50
        echo "    </div>
</aside>
<style>
    #SS
    {
        position: absolute;
        display: block;
        border: medium none;
        background: none repeat scroll 0% 0% transparent;
        width: 30px;
        line-height: 30px;
        height: 30px;
        overflow: hidden;
        padding: 0px;
        margin: 0px;
        color: #777;
    }
    .LFilte
    {
        vertical-align: sub;
    }
    .LRadio
    {
        vertical-align: inherit;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "frontServiceBundle::filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 50,  148 => 48,  146 => 47,  140 => 43,  125 => 41,  121 => 40,  114 => 38,  108 => 34,  99 => 30,  84 => 28,  80 => 27,  71 => 25,  64 => 23,  60 => 21,  56 => 20,  52 => 19,  41 => 13,  37 => 12,  30 => 10,  19 => 1,);
    }
}
