<?php

/* frontServiceBundle::show.html.twig */
class __TwigTemplate_e46bab5ade25866b8acec57f1be7c19061d8862e7b30e87c3bc73dcdf04e5100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":front:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "\" />
    <meta name=\"twitter:card\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "\" />
    <meta name=\"twitter:title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:site_name\" content=\"nal9ach.com\" />
    <meta name=\"twitter:url\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:url\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "texte", array()), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:description\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "texte", array()), "html", null, true);
        echo "\"/>
    <meta property=\"fb:app_id\" content=\"770925942943303\"/>
    <meta property=\"og:type\" content=\"website\"/> 
    <meta property=\"article:author\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "user", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "user", array()), "nom", array())), "html", null, true);
        echo "\" />
    <meta property=\"og:image\" content=\"http://nal9ach.com/";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getFirstPhoto", array())), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:image\" content=\"http://nal9ach.com/";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getFirstPhoto", array())), "html", null, true);
        echo "\"/>
    <meta name=\"author\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "user", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "user", array()), "nom", array())), "html", null, true);
        echo "\" />
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"darker-stripe\">
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
                            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_annonce", array("region" => $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "region", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "region", array()), "html", null, true);
        echo "</a>
                        </li>
                        <li><span class=\"icon-chevron-right\"></span></li>
                        <li>
                            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liste_annonce", array("ville" => $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "ville", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "ville", array()), "html", null, true);
        echo "</a>
                        </li>
                        <li><span class=\"icon-chevron-right\"></span></li>
                        <li>
                            <a href=\"javascript:void(0)\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"push-up top-equal blocks-spacer\">
            <div class=\"row blocks-spacer\" ";
        // line 48
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "IsAnnule", array())) {
            echo "style=\"opacity: 0.3;\" ";
        }
        echo ">
                <div class=\"span5\">
                    <div class=\"product-preview\">
                        <div class=\"picture\">
                            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getFirstPhoto", array())), "html", null, true);
        echo "\"id=\"mainPreviewImg\" />
                        </div>
                        <div class=\"thumbs clearfix\">
                            ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getPhotos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 56
            echo "                                <div class=\"thumb active\">
                                    <a href=\"#mainPreviewImg\"><img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["photo"]), "html", null, true);
            echo "\" style=\"width: 80px;height: 80px;\" /></a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </div>
                    </div>
                </div>
                <div class=\"span7\" ";
        // line 63
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "IsAnnule", array())) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/expired.jpg"), "html", null, true);
            echo "');background-repeat: no-repeat;\" ";
        }
        echo ">
                    ";
        // line 64
        if (false) {
            // line 65
            echo "                        <div class=\"product-title\">
                            <span style=\"float: right;\">
                                <a href=\"#\" class=\"action\">Modifier <i class=\"icon-pencil\"></i></a>
                                <a href=\"#\" class=\"action\">Supprimer <i class=\"icon-trash\"></i></a>
                                <a href=\"#\" class=\"action\">Annuler <i class=\"icon-ban-circle\"></i></a>
                            </span>
                        </div>
                    ";
        }
        // line 73
        echo "                    <div class=\"product-description\">
                        <div class=\"row\">
                            <div class=\"span6\">
                                <h1 class=\"name\" style=\"text-align: center;\"><span class=\"light\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "</span></h1>
                            </div>
                            <div class=\"span6\">
                                <hr />
                                <h4>Déscription :</h4>
                                <p>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "texte", array()), "html", null, true);
        echo "</p>
                                <hr />
                            </div>
                            <div class=\"span3\">
                                ";
        // line 85
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix", array()) != "")) {
            // line 86
            echo "                                    <h5>Prix :<span class=\"light\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
            echo "</span></h5>
                                    <hr />
                                ";
        }
        // line 89
        echo "
                                ";
        // line 90
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "tel1", array()) != "")) {
            // line 91
            echo "                                    <h5>Tel :<span class=\"light\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "tel1", array()), "html", null, true);
            if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "tel2", array()) != "")) {
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "tel2", array()), "html", null, true);
            }
            echo "</span></h5>
                                    <hr />
                                ";
        }
        // line 94
        echo "
                                ";
        // line 95
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "email", array()) != "")) {
            // line 96
            echo "                                    <h5>Email : <span class=\"light\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "email", array()), "html", null, true);
            echo "</span></h5> 
                                    <hr />
                                ";
        }
        // line 98
        echo " 
                            </div>
                            <div class=\"span3\">
                                <h5>Région : <span class=\"light\">";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "region", array()), "html", null, true);
        echo "</span></h5> 
                                <hr />
                                <h5>Ville : <span class=\"light\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "ville", array()), "html", null, true);
        echo "</span></h5> 
                                <hr />
                                ";
        // line 105
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "adresse", array()) != "")) {
            // line 106
            echo "                                    <h5>Adresse :<span class=\"light\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "adresse", array()), "html", null, true);
            echo " </span></h5>
                                    <hr />
                                ";
        }
        // line 109
        echo "                            </div>
                            <div class=\"span6\">
                                ";
        // line 111
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "IsEnregistre", array())) {
            // line 112
            echo "                                    <div class=\"share-item\">
                                        <div class=\"addthis_sharing_toolbox\"></div>
                                        ";
            // line 114
            if (false) {
                // line 115
                echo "                                            <div class=\"pull-right social-networks\">
                                                <div class=\"addthis_toolbox addthis_default_style \">

                                                    <div class=\"fb-share-button\" data-href=\"";
                // line 118
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method")) . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array())), "html", null, true);
                echo "\" data-layout=\"button\"></div>
                                                    ";
                // line 119
                if (false) {
                    // line 120
                    echo "                                                        <a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
                                                        <a class=\"addthis_button_tweet\"></a>
                                                        <a class=\"addthis_button_pinterest_pinit\"></a>
                                                        <a class=\"addthis_counter addthis_pill_style\"></a>
                                                    ";
                }
                // line 125
                echo "                                                </div>
                                                <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-517459541beb3977\"></script>
                                            </div>
                                            Partager cet article avec vos amis:
                                        ";
            }
            // line 130
            echo "                                    </div>
                                    ";
            // line 131
            if (false) {
                // line 132
                echo "                                        <div id=\"fb-root\"></div>
                                        <script>(function (d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id))
                                                    return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=770925942943303&version=v2.0\";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));</script>    
                                        <div class=\"fb-comments\" data-width=\"570px\" data-href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
                echo "\" data-numposts=\"3\" data-colorscheme=\"light\"></div>
                                    ";
            }
            // line 144
            echo "                                ";
        }
        // line 145
        echo "                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"row\">
                <section class=\"span8 single single-post\">
                    <section id=\"comments\" class=\"comments-container\">
                        <h3 class=\"push-down-25\"><span class=\"light\">";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "commentaires", array()), "count", array()), "html", null, true);
        echo "</span> Commentaires</h3>

                        ";
        // line 157
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "commentaires", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 158
            echo "
                            <div class=\"single-comment clearfix\">
                                <div class=\"avatar-container\">
                                    <img src=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/anonym.jpg"), "html", null, true);
            echo "\" alt=\"avatar\" class=\"avatar\" width=\"184\" height=\"184\" />
                                </div>
                                <div class=\"comment-content\">
                                    <div class=\"comment-inner\">
                                        <cite class=\"author-name\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "nom", array()), "html", null, true);
            echo "</cite>
                                        <div class=\"metadata\">";
            // line 166
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "getDateCreation", array()), "d F, Y à G:i"), "html", null, true);
            echo "</div>
                                        <div class=\"metadata\">Tel :";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "tel", array()), "html", null, true);
            echo "</div>
                                        <div class=\"comment-text\">
                                            <p>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "texte", array()), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "


                        <hr />
                        ";
        // line 180
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "IsEnregistre", array())) {
            echo "       
                            <h3 class=\"push-down-25\"><span class=\"light\">Laisser </span> un commentaire</h3>

                            ";
            // line 183
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo " 
                        ";
        }
        // line 185
        echo "
                    </section>

                </section> <!-- /main content -->

            </div>
        </div>
    </div>

    <style>
        .action{
            padding-right: 20px;
        }
    </style>           
    <div id=\"fb-root\"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=192163827636286&version=v2.0\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
";
    }

    public function getTemplateName()
    {
        return "frontServiceBundle::show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 185,  408 => 183,  402 => 180,  396 => 176,  383 => 169,  378 => 167,  374 => 166,  370 => 165,  363 => 161,  358 => 158,  354 => 157,  349 => 155,  337 => 145,  334 => 144,  329 => 142,  317 => 132,  315 => 131,  312 => 130,  305 => 125,  298 => 120,  296 => 119,  292 => 118,  287 => 115,  285 => 114,  281 => 112,  279 => 111,  275 => 109,  268 => 106,  266 => 105,  261 => 103,  256 => 101,  251 => 98,  244 => 96,  242 => 95,  239 => 94,  228 => 91,  226 => 90,  223 => 89,  216 => 86,  214 => 85,  207 => 81,  199 => 76,  194 => 73,  184 => 65,  182 => 64,  174 => 63,  169 => 60,  160 => 57,  157 => 56,  153 => 55,  147 => 52,  138 => 48,  125 => 38,  116 => 34,  107 => 30,  100 => 26,  92 => 20,  89 => 19,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  48 => 6,  44 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
