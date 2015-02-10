<?php

/* :admin:menu.html.twig */
class __TwigTemplate_30e477bae63d9319706b3a8cf5a200beea818026037f52560e63a00a66fcaf5f extends Twig_Template
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
        echo "<a href=\"javascript:void(0)\" class=\"sidebar_switch on_switch ttip_r\" id=\"SideBar\" title=\"Hide Sidebar\">Sidebar switch</a>
<div class=\"sidebar\">
<div class=\"antiScroll\">
<div class=\"antiscroll-inner\">
    <div class=\"antiscroll-content\">
            <div class=\"sidebar_inner\">
                    <form action=\"index.php?uid=1&amp;page=search_page\" class=\"input-append\" method=\"post\" >
                            <input autocomplete=\"off\" name=\"query\" class=\"search_query input-medium\" size=\"16\" type=\"text\" placeholder=\"Search...\" /><button type=\"submit\" class=\"btn\"><i class=\"icon-search\"></i></button>
                    </form>
                    <div id=\"side_accordion\" class=\"accordion\">
                            <div class=\"accordion-group\">
                                    <div class=\"accordion-heading \">
                                            <a href=\"#collapse3\" data-parent=\"#side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
                                                    <i class=\"icon-user\"></i> Utilisateurs
                                            </a>
                                    </div>
                                    <div class=\"accordion-body ";
        // line 17
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/admin/user")) > 1)) {
            echo "in";
        }
        echo "  collapse \" id=\"collapse3\">
                                            <div class=\"accordion-inner\">
                                                    <ul class=\"nav nav-list\">
                                                        <li class=\"";
        // line 20
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/liste")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("listeUser");
        echo "\">Administrateurs</a></li>
                                                        <li class=\"";
        // line 21
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/utilisateur")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("otherUser");
        echo "\">Utilisateurs</a></li>
                                                        <li class=\"";
        // line 22
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/ajout")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("addUser");
        echo "\">Ajouter un administrateur</a></li>
                                                    </ul>
                                            </div>
                                    </div>
                            </div>
                            <div class=\"accordion-group\">
                                    <div class=\"accordion-heading \">
                                            <a href=\"#collapseOne\" data-parent=\"#side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
                                                    <i class=\"icon-list\"></i> Réferentiel
                                            </a>
                                    </div>
                                    <div class=\"accordion-body ";
        // line 33
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/admin/ref")) > 1)) {
            echo "in";
        }
        echo "  collapse \" id=\"collapseOne\">
                                            <div class=\"accordion-inner\">
                                                    <ul class=\"nav nav-list\">
                                                        <li class=\"";
        // line 36
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/categorie")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\">Categories</a></li>
                                                        <li class=\"";
        // line 37
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/service")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("service");
        echo "\">Services</a></li>
                                                    </ul>
                                            </div>
                                    </div>
                            </div>
                            <div class=\"accordion-group\">
                                    <div class=\"accordion-heading \">
                                            <a href=\"#collapsetwo\" data-parent=\"#side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
                                                    <i class=\"icon-map-marker\"></i> Localisation
                                            </a>
                                    </div>
                                    <div class=\"accordion-body ";
        // line 48
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/admin/loc")) > 1)) {
            echo "in";
        }
        echo "  collapse \" id=\"collapsetwo\">
                                            <div class=\"accordion-inner\">
                                                    <ul class=\"nav nav-list\">
                                                        <li class=\"";
        // line 51
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/region")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("region");
        echo "\">Région</a></li>
                                                        <li class=\"";
        // line 52
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/ville")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ville");
        echo "\">Ville</a></li>
                                                    </ul>
                                            </div>
                                    </div>
                            </div>
                            <div class=\"accordion-group\">
                                    <div class=\"accordion-heading \">
                                            <a href=\"#collapse4\" data-parent=\"#side_accordion\" data-toggle=\"collapse\" class=\"accordion-toggle\">
                                                    <i class=\"icon-list-alt\"></i> Pages
                                            </a>
                                    </div>
                                    <div class=\"accordion-body ";
        // line 63
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/admin/page")) > 1)) {
            echo "in";
        }
        echo "  collapse \" id=\"collapse4\">
                                            <div class=\"accordion-inner\">
                                                    <ul class=\"nav nav-list\">
                                                        <li class=\"";
        // line 66
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/accueil")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_accueil");
        echo "\">Accueil</a></li>
                                                        <li class=\"";
        // line 67
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/contact")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_contact");
        echo "\">Contact</a></li>
                                                        <li class=\"";
        // line 68
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/marketing")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("marketing");
        echo "\">Marketing</a></li>
                                                        <li class=\"";
        // line 69
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/slider")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("SLider");
        echo "\">Slider</a></li>
                                                        <li class=\"";
        // line 70
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/partenaire")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Partenaire");
        echo "\">Partenaire</a></li>
                                                        <li class=\"";
        // line 71
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/news")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\">News</a></li>
                                                        <li class=\"";
        // line 72
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getPathInfo", array()), "/footer")) > 1)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("footer");
        echo "\">Footer</a></li>
                                                    </ul>
                                            </div>
                                    </div>
                            </div>
                    </div>
                    <div class=\"push\"></div>
            </div>
             ";
        // line 80
        if (true) {
            // line 81
            echo "            <div class=\"sidebar_info\">
                    <ul class=\"unstyled\">
                        ";
            // line 83
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("adminPageBundle:Front:donnees"));
            echo "
                    </ul>
            </div> 
            ";
        }
        // line 87
        echo "    </div>
</div>
</div>

</div>

    
    <style>
        #SideBar{
            display: none
        }
        @media (max-width: 979px) {
            #SideBar{
            display: block
            }
            .btn_menu{
                display: none;
            }
        }
    </style>";
    }

    public function getTemplateName()
    {
        return ":admin:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 87,  224 => 83,  220 => 81,  218 => 80,  203 => 72,  195 => 71,  187 => 70,  179 => 69,  171 => 68,  163 => 67,  155 => 66,  147 => 63,  129 => 52,  121 => 51,  113 => 48,  95 => 37,  87 => 36,  79 => 33,  61 => 22,  53 => 21,  45 => 20,  37 => 17,  19 => 1,);
    }
}
