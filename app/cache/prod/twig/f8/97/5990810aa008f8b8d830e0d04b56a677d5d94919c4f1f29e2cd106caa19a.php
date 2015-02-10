<?php

/* frontAccueilBundle:Default:contact.html.twig */
class __TwigTemplate_f8975990810aa008f8b8d830e0d04b56a677d5d94919c4f1f29e2cd106caa19a extends Twig_Template
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
        echo "Contactez-nous";
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
                            <a href=\"javascript:void(0)\">Contactez-nous</a>
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
                        <h1 class=\"inline\"><span class=\"light\">Contactez</span> nous</h1>
                    </div>
                </div>
                <section class=\"span8 single single-page\">
                    <section class=\"contact-form-container\">

                        <h3 class=\"push-down-25\"><span class=\"light\">Envoyer</span> un message</h3>

                        <form id=\"commentform\" method=\"post\" action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" class=\"form form-inline form-contact\" />
                        <p class=\"push-down-20\">
                            <input type=\"text\" aria-required=\"true\" tabindex=\"1\" size=\"30\" value=\"\" id=\"author\" name=\"nom\" required=\"\" />
                            <label for=\"author\">Nom & prénom<span class=\"red-clr bold\">*</span></label>
                        </p>
                        <p class=\"push-down-20\">
                            <input type=\"email\" aria-required=\"true\" tabindex=\"2\" size=\"30\" value=\"\" id=\"email\" name=\"email\" required=\"\" />
                            <label for=\"email\">Mail<span class=\"red-clr bold\">*</span></label>
                        </p>
                        <p class=\"push-down-20\">
                            <input type=\"text\" tabindex=\"3\" size=\"30\" value=\"\" id=\"url\" name=\"tel\" />
                            <label for=\"url\">Tel</label>
                        </p>

                        <p class=\"push-down-20\">
                            <textarea class=\"input-block-level\" tabindex=\"4\" rows=\"7\" cols=\"70\" id=\"comment\" name=\"texte\" placeholder=\"Votre message ici ...\" required=\"\"></textarea>
                        </p>
                        <p>
                            <button class=\"btn btn-primary bold\" type=\"submit\" tabindex=\"5\" id=\"submit\">Envoyer</button>
                        </p>
                        </form>
                    </section>
                </section> <!-- /main content -->

                <aside class=\"span4\">

                    <!--  ==========  -->
                    <!--  = Opening Times Widget =  -->
                    <!--  ==========  -->
                    <div class=\"sidebar-item opening-time\" id=\"opening_time-4\">
                        <div class=\"underlined\">
                            <h3><span class=\"light\">Infos </span> Société</h3>
                        </div>
                        <div class=\"time-table\">                        \t\t    
                            <p>
                                <strong class=\"opensans dark-clr\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse", array()), "html", null, true);
        echo "</strong>
                            </p>

                            <p>
                                <strong class=\"opensans dark-clr\">Tel:</strong> ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel1", array()), "html", null, true);
        echo "
                                <br />
                                <strong class=\"opensans dark-clr\">Gsm:</strong> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "tel2", array()), "html", null, true);
        echo "
                                <br />
                                <strong class=\"opensans dark-clr\">Fax:</strong> ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "fax", array()), "html", null, true);
        echo "
                                <br />
                                <strong class=\"opensans dark-clr\">Email:</strong> <a href=\"mailto:";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</a>
                            </p>
                        </div>
                    </div>
                    <div class=\"sidebar-item widget_twitter\">
                        <div class=\"underlined\">
                            <h3><span class=\"light\">Gmaps</span></h3>
                        </div>
                        <div class=\"add-googlemap\" data-height=\"205\" data-addr=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "longitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "latitude", array()), "html", null, true);
        echo "\" data-title=\"NetMarketing\" data-zoom=\"16\" data-type=\"roadmap\"></div>
                    </div>
                </aside> <!-- /sidebar -->
            </div>
        </div>
    </div> <!-- /container -->


";
    }

    public function getTemplateName()
    {
        return "frontAccueilBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 88,  134 => 80,  129 => 78,  124 => 76,  119 => 74,  112 => 70,  74 => 35,  46 => 10,  38 => 4,  35 => 3,  29 => 2,);
    }
}
