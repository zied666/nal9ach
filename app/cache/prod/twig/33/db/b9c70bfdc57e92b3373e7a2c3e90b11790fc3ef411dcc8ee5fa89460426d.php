<?php

/* frontServiceBundle::liste.html.twig */
class __TwigTemplate_33dbb9c70bfdc57e92b3373e7a2c3e90b11790fc3ef411dcc8ee5fa89460426d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":front:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'jquery' => array($this, 'block_jquery'),
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
        echo "Liste des annonces ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"darker-stripe\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <ul class=\"breadcrumb\">
                        <li>
                            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Accueil</a>
                        </li>
                        <li><span class=\"icon-chevron-right\"></span></li>
                        <li>
                            <a href=\"javascript:void(0)\">Liste des annonces</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"push-up\">
            <div class=\"row\">
                ";
        // line 26
        $this->env->loadTemplate("frontServiceBundle::filtre.html.twig")->display($context);
        // line 27
        echo "                <section class=\"span9 blocks-spacer\">
                    <div class=\"underlined push-down-20\">
                        <div class=\"row\">
                            <div class=\"span5\">
                                ";
        // line 31
        if (((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")) != "_")) {
            // line 32
            echo "                                    <h3>
                                        <span class=\"light\">Recherche : </span> &quot;";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
            echo "&quot;
                                    </h3>
                                ";
        }
        // line 36
        echo "                            </div>
                            <div class=\"span4\">
                                <div class=\"form-inline sorting-by\"> 
                                    <form method=\"POST\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Filtre", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "ville" => (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "service" => (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "orderby" => (isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")), "desc" => (isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")))), "html", null, true);
        echo "\" style=\"margin: 0px\" >
                                        <label for=\"isotopeSorting\" class=\"black-clr\">Sort:</label>
                                        <select onchange=\"submit();\" id=\"isotopeSorting\" name=\"FiltreOrderBy\" class=\"span3\">
                                            <option value='prix-desc'            ";
        // line 42
        if ((((isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")) == "prix") && ((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")) == "desc"))) {
            echo "selected";
        }
        echo " />Par Prix  &uarr;
                                            <option value='prix-asc'           ";
        // line 43
        if ((((isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")) == "prix") && ((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")) == "asc"))) {
            echo "selected";
        }
        echo " />Par Prix  &darr;
                                            <option value='titre-desc'         ";
        // line 44
        if ((((isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")) == "titre") && ((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")) == "desc"))) {
            echo "selected";
        }
        echo "/>Par Titre  &uarr;
                                            <option value='titre-asc'        ";
        // line 45
        if ((((isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")) == "titre") && ((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")) == "asc"))) {
            echo "selected";
        }
        echo "/>Par Titre  &darr;
                                            <option value='dateCreation-desc'    ";
        // line 46
        if ((((isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")) == "dateCreation") && ((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")) == "desc"))) {
            echo "selected";
        }
        echo " />Par date  &uarr;
                                            <option value='dateCreation-asc'   ";
        // line 47
        if ((((isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")) == "dateCreation") && ((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")) == "asc"))) {
            echo "selected";
        }
        echo " />Par date  &darr;
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <span class=\"span9\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo " résultats trouvés</span>
                        </div>
                    </div> <!-- /title -->
                    <div class=\" popup-products underlined push-down-20\">
                        <div id=\"isotopeContainer\" class=\"isotope-container\" style=\"min-height: 300px\">

                            <table class=\"table\">
                                <thead>
                                    <tr>
\t\t\t\t\t\t\t\t\t\t<th></th>
                                        <th>Région</th>
                                        <th>Ville</th>
                                        <th>Titre</th>
                                        <th>Prix</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 71
            echo "                                        <tr  class=\"product clickableRow\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_service_homepage", array("titre" => $this->getAttribute($context["annonce"], "GetUrl", array()), "id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 72
            if (($this->getAttribute($context["annonce"], "getFirstPhoto", array()) != "img/nopic.jpg")) {
                echo "<li class=\"icon-camera\"></li>";
            }
            echo "</td>
                                            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "region", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ville", array()), "html", null, true);
            echo "</td>
                                            <td><strong>";
            // line 75
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["annonce"], "titre", array())), 0, 30), "html", null, true);
            echo "</strong></td>
                                            <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["annonce"], "prix", array()), 0, 20), "html", null, true);
            echo "</td>
                                            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"pagination pagination-centered\">
                        <ul>
                            ";
        // line 87
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            // line 88
            echo "                                <li><a href=\"javascript:void(0)\" class=\"btn disabled\"><span class=\"icon-chevron-left\"></span></a></li>
                            ";
        } else {
            // line 90
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Filtre", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "ville" => (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "service" => (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "orderby" => (isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")), "desc" => (isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")))), "html", null, true);
            echo "\" class=\"btn  btn-primary \"><span class=\"icon-chevron-left\"></span></a></li>
                            ";
        }
        // line 92
        echo "
                            ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbrpage"]) ? $context["nbrpage"] : $this->getContext($context, "nbrpage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 94
            echo "                                <li ";
            if (($context["i"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Filtre", array("page" => $context["i"], "ville" => (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "service" => (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "orderby" => (isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")), "desc" => (isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "

                            ";
        // line 98
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["nbrpage"]) ? $context["nbrpage"] : $this->getContext($context, "nbrpage")))) {
            // line 99
            echo "                                <li><a href=\"javascript:void(0)\" class=\"btn disabled\"><span class=\"icon-chevron-right\"></span></a></li>
                            ";
        } else {
            // line 101
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Filtre", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "ville" => (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "service" => (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "orderby" => (isset($context["orderby"]) ? $context["orderby"] : $this->getContext($context, "orderby")), "desc" => (isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")))), "html", null, true);
            echo "\" class=\"btn btn-primary   btn-primary\"><span class=\"icon-chevron-right\"></span></a></li>
                            ";
        }
        // line 103
        echo "
                        </ul>
                    </div>
                </section> <!-- /main content -->
            </div>
        </div>
    </div> <!-- /container -->
    <style>
        .prix{
            float: right ;
        }
        .caret2{
            transform: rotate(-90deg);
            vertical-align: middle;
        }
        @media screen and (max-width: 767px){
            .product-img {
                display: none;
            }
        }
        .clickableRow
        {
            cursor: pointer;
        }
        .isotope-container table tr td , .isotope-container table tr th
        {
            text-align: center;
        }
    </style>

";
    }

    // line 134
    public function block_jquery($context, array $blocks = array())
    {
        // line 135
        echo "    <script>
        \$(document).ready(function () {
            \$(\".clickableRow\").click(function () {
                window.document.location = \$(this).attr(\"href\");
            });
            \$(\".clickableRow\").mouseover(function () {
                \$(this).css(\"background-color\", \"#F5F5DC\")
            }).mouseout(function () {
                \$(this).css(\"background-color\", \"inherit\")
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "frontServiceBundle::liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 135,  290 => 134,  256 => 103,  250 => 101,  246 => 99,  244 => 98,  240 => 96,  225 => 94,  221 => 93,  218 => 92,  212 => 90,  208 => 88,  206 => 87,  197 => 80,  188 => 77,  184 => 76,  180 => 75,  176 => 74,  172 => 73,  166 => 72,  161 => 71,  157 => 70,  136 => 52,  126 => 47,  120 => 46,  114 => 45,  108 => 44,  102 => 43,  96 => 42,  90 => 39,  85 => 36,  79 => 33,  76 => 32,  74 => 31,  68 => 27,  66 => 26,  48 => 11,  39 => 4,  36 => 3,  30 => 2,);
    }
}
