<?php

/* frontAnnonceBundle::liste.html.twig */
class __TwigTemplate_6d1bd3ff28ebaea146d0c7fa8117c564e8f6dfefb353b504745ff7dce47a54f5 extends Twig_Template
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
        echo "Mes annonces";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"darker-stripe\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <ul class=\"breadcrumb\">
                        <li>
                            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">Accueil</a>
                        </li>
                        <li><span class=\"icon-chevron-right\"></span></li>
                        <li>
                            <a href=\"javascript:void(0)\">Mes annonces</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"push-up top-equal blocks-spacer-last\">
            <div class=\"row\">
                <div class=\"span12\">
                    <div class=\"title-area\">
                        <h1 class=\"inline\"><span class=\"light\">Mes  </span>annonces</h1>
                    </div>
                </div>
                <section class=\"span12 single single-page\">
                    <section class=\"contact-form-container\">
                        <table class=\"table table-striped table-bordered\">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Prix</th>
                                    <th>Region</th>
                                    <th>Ville</th>
                                    <th>Etat</th>
                                    <th>Date Création</th>
                                    <th>Date Modification</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 46
            echo "                                    <tr>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "region", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ville", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ShowEtat", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateModification", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\" title=\"Modifier\"><i class=\"icon-pencil\"></i></a>
                                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_service_homepage", array("titre" => $this->getAttribute($context["annonce"], "GetUrl", array()), "id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\" title=\"Consulter\"><i class=\"icon-eye-open\"></i></a>
                                            ";
            // line 57
            if ($this->getAttribute($context["annonce"], "IsEnregistre", array())) {
                // line 58
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuler_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\" onclick=\"javascript:return(confirm('Etes-vous certain de vouloir annuler cette annonce ?'))\" title=\"Annuler\"><i class=\" icon-ban-circle\"></i></a>
                                            ";
            } else {
                // line 60
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reactiver_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\" onclick=\"javascript:return(confirm('Etes-vous certain de vouloir Réactiver cette annonce ?'))\" title=\"Réactiver \"><i class=\"  icon-refresh \"></i></a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                        </table>
                    </section>
                </section>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$(\".Region\").change(function () {
                \$(\".Ville\").empty();
                \$(\".Ville\").append('<option value=\"\">Loading...</option>');
                \$(\".Ville\").trigger(\"liszt:updated\");
                var id = \$(this).val();
                \$.ajax({
                    url: '";
        // line 80
        echo $this->env->getExtension('routing')->getPath("annonce_ville");
        echo "',
                    type: 'POST',
                    data: 'id=' + id,
                    dataType: 'json',
                    success: function (data) {
                        \$(\".Ville\").empty();
                        \$.each(data, function (index, value) {
                            \$(\".Ville\").append('<option value=\"' + index + '\">' + value + '</option>');
                            \$(\".Ville\").trigger(\"liszt:updated\");
                        });
                    }
                });

            })

        })
    </script>        
    
    <style>
        td,th{
            text-align: center !important;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "frontAnnonceBundle::liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 80,  158 => 71,  150 => 65,  142 => 62,  136 => 60,  130 => 58,  128 => 57,  124 => 56,  120 => 55,  115 => 53,  111 => 52,  107 => 51,  103 => 50,  99 => 49,  95 => 48,  91 => 47,  88 => 46,  84 => 45,  46 => 10,  38 => 4,  35 => 3,  29 => 2,);
    }
}
