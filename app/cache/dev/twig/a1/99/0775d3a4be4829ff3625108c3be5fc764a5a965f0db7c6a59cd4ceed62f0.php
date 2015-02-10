<?php

/* frontAnnonceBundle::ajout.html.twig */
class __TwigTemplate_a1990775d3a4be4829ff3625108c3be5fc764a5a965f0db7c6a59cd4ceed62f0 extends Twig_Template
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
        echo "Ajouter une annonce";
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
                            <a href=\"javascript:void(0)\">Ajouter une annonce</a>
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
                        <h1 class=\"inline\"><span class=\"light\">Ajouter </span>une annonce</h1>
                    </div>
                </div>
                <section class=\"span12 single single-page\">
                    <section class=\"contact-form-container\">
                        <form id=\"commentform\" method=\"post\" action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("ajoutannonce");
        echo "\" class=\"form form-inline form-contact\" enctype=\"multipart/form-data\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "    
                            <p class=\" span4\">
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
                                <label for=\"author\">Titre<span class=\"red-clr bold\">*</span></label>
                            </p>
                            <p class=\"span4\">
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget');
        echo "
                                <label for=\"author\">prix</label>
                            </p>
                            <p class=\"span4\">
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel1", array()), 'widget');
        echo "
                                <label for=\"author\">Téléphone 1<span class=\"red-clr bold\">*</span></label>
                            </p>
                            <p class=\"span4\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel2", array()), 'widget');
        echo "
                                <label for=\"author\">Téléphone 2</label>
                            </p>

                            <p class=\"span4\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
                                <label for=\"author\">Adresse<span class=\"red-clr bold\">*</span></label>
                            </p>
                            <p class=\"span4\">
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                <label for=\"author\">Email</label>
                            </p>

                            <p class=\"span4\">
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region", array()), 'widget', array("attr" => array("class" => "Region")));
        echo "
                                <label for=\"author\">Région<span class=\"red-clr bold\">*</span></label>
                            </p>
                            <p class=\"span4\">
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "Ville")));
        echo "
                                <label for=\"author\">Ville<span class=\"red-clr bold\">*</span></label>
                            </p>  
                            <p class=\"push-down-20\">
                                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "texte", array()), 'widget', array("attr" => array("class" => "input-block-level", "placeholder" => "votre déscription ici")));
        echo "
                            </p>
                            <div class=\"span6\">
                                <h3 class=\"push-down-20\">Catégries :</h3>
                                ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 73
            echo "                                    <table class=\"table table-theme table-striped\" style=\"margin-bottom: 0;margin-top: 30px;\">
                                        <thead>
                                            <tr><th colspan=\"2\" style=\"text-align: center\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "libelle", array()), "html", null, true);
            echo "</th></tr>
                                        </thead>
                                        <tbody>
                                            ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cat"], "services", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ser"]) {
                // line 79
                echo "                                                ";
                if ((!(0 == $this->getAttribute($context["loop"], "index", array()) % 2))) {
                    echo "<tr>";
                }
                // line 80
                echo "                                                <td><label> <input style=\"margin-right: 12px;vertical-align: sub;\" type=\"checkbox\" name=\"services[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ser"], "id", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ser"], "libelle", array()), "html", null, true);
                echo " </label></td>
                                                ";
                // line 81
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % 2)) {
                    echo "</tr>";
                }
                // line 82
                echo "                                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                        </tbody>
                                    </table>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                            </div>
                            <div class=\"span4\">
                                <h3 class=\"push-down-20\">Photo :</h3>
                                <p class=\"span4\">
                                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo1", array()), 'errors');
        echo "
                                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo1", array()), 'widget');
        echo "
                                </p>  
                                <p class=\"span4\">
                                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo2", array()), 'errors');
        echo "
                                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo2", array()), 'widget');
        echo "
                                </p>  
                                <p class=\"span4\">
                                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo3", array()), 'errors');
        echo "
                                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo3", array()), 'widget');
        echo "
                                </p>  
                                <p class=\"span4\">
                                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo4", array()), 'errors');
        echo "
                                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo4", array()), 'widget');
        echo "
                                </p>  
                            </div>
                            <p style=\"margin-top: 30px\" class=\"span12\">
                                <button class=\"btn btn-primary bold\" type=\"submit\" tabindex=\"5\" id=\"submit\">Ajouter</button>
                            </p>
                        </form>
                    </section>
                </section>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 116
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
        // line 125
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
";
    }

    public function getTemplateName()
    {
        return "frontAnnonceBundle::ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 125,  269 => 116,  254 => 104,  250 => 103,  244 => 100,  240 => 99,  234 => 96,  230 => 95,  224 => 92,  220 => 91,  214 => 87,  205 => 83,  191 => 82,  187 => 81,  180 => 80,  175 => 79,  158 => 78,  152 => 75,  148 => 73,  144 => 72,  137 => 68,  130 => 64,  123 => 60,  115 => 55,  108 => 51,  100 => 46,  93 => 42,  86 => 38,  79 => 34,  74 => 32,  70 => 31,  46 => 10,  38 => 4,  35 => 3,  29 => 2,);
    }
}
