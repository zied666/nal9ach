<?php

/* frontAnnonceBundle::commentaires.html.twig */
class __TwigTemplate_3f27516574a5a4d3d0728ab9d6ca4ebb9f634e7a1e7cc72f186c38717eac0f4e extends Twig_Template
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
        echo "Non-Lus(";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires"))), "html", null, true);
        echo ")";
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
                            <a href=\"javascript:void(0)\">Commentaires non-lus</a>
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
                        <h1 class=\"inline\"><span class=\"light\">Commentaires  </span>Non-lus</h1>
                    </div>
                </div>
                <section class=\"span12 single single-page\">
                    <section class=\"contact-form-container\">
                        <table class=\"table table-striped table-bordered\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Tel</th>
                                    <th>Email</th>
                                    <th>Texte</th>
                                    <th>Date</th>
                                    <th>Annonce</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
            // line 45
            echo "                                    <tr>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "tel", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "texte", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comm"], "getDateCreation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_service_homepage", array("titre" => $this->getAttribute($this->getAttribute($context["comm"], "annonce", array()), "GetUrl", array()), "id" => $this->getAttribute($this->getAttribute($context["comm"], "annonce", array()), "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comm"], "annonce", array()), "titre", array()), "html", null, true);
            echo "</a></td>
                                        <td>
                                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("luscomment", array("id" => $this->getAttribute($context["comm"], "id", array()))), "html", null, true);
            echo "\" title=\"Marquer comme lus\"><i class=\"icon-eye-open\"></i></a>
                                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletecomment", array("id" => $this->getAttribute($context["comm"], "id", array()))), "html", null, true);
            echo "\" onclick=\"javascript:return(confirm('Etes-vous certain de vouloir supprimer ce commentaire ?'))\" title=\"Supprimer ce commentaire\"><i class=\" icon-trash\"></i></a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        </table>
                    </section>
                </section>
            </div>
        </div>
    </div>    
    
    <style>
        td,th{
            text-align: center !important;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "frontAnnonceBundle::commentaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 58,  123 => 54,  119 => 53,  112 => 51,  108 => 50,  104 => 49,  100 => 48,  96 => 47,  92 => 46,  89 => 45,  85 => 44,  48 => 10,  40 => 4,  37 => 3,  29 => 2,);
    }
}
