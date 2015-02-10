<?php

/* adminGeneralBundle:Default:accueil.html.twig */
class __TwigTemplate_61c7f00413a97f0ce99246594fb3f604b53d46504a39c92eafdc3e89ba5c510d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":admin:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sitmap' => array($this, 'block_sitmap'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<nav>
        <div id=\"jCrumbs\" class=\"breadCrumb module\">
            <ul>";
        // line 6
        $this->displayBlock('sitmap', $context, $blocks);
        // line 11
        echo "        </ul>
    </div>
</nav>

<div class=\"row-fluid\">
    <div class=\"span12\">
        <ul class=\"dshb_icoNav tac\">
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("otherUser");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/multi-agents.png"), "html", null, true);
        echo ")\"><span class=\"label label-success\">";
        echo twig_escape_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "html", null, true);
        echo "</span> Utilisateurs</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("region");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/world.png"), "html", null, true);
        echo ")\"><span class=\"label label-success\">";
        echo twig_escape_filter($this->env, (isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")), "html", null, true);
        echo "</span> Localisation</a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("page_accueil");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/configuration.png"), "html", null, true);
        echo ")\">Page accueil</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("Partenaire");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/configuration.png"), "html", null, true);
        echo ")\">Partenaires</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("footer");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/configuration.png"), "html", null, true);
        echo ")\">Footer</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("Partenaire");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/configuration.png"), "html", null, true);
        echo ")\">Partenaires</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("page_contact");
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/configuration.png"), "html", null, true);
        echo ")\">Page contact</a></li>
              
            ";
        // line 26
        if (false) {
            // line 27
            echo "                <li><a href=\"javascript:void(0)\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/lab.png"), "html", null, true);
            echo ")\">Lab</a>
                <li><a href=\"javascript:void(0)\" style=\"background-image: url(";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/van.png"), "html", null, true);
            echo ")\"><span class=\"label label-success\">\$2851</span> Delivery</a></li>
                <li><a href=\"javascript:void(0)\" style=\"background-image: url(";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/pie-chart.png"), "html", null, true);
            echo ")\">Charts</a></li>
                <li><a href=\"javascript:void(0)\" style=\"background-image: url(";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/edit.png"), "html", null, true);
            echo ")\">Add New Article</a></li>
                <li><a href=\"javascript:void(0)\" style=\"background-image: url(";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/add-item.png"), "html", null, true);
            echo ")\"> Add New Page</a></li>
                <li><a href=\"javascript:void(0)\" style=\"background-image: url(";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gCons/chat-.png"), "html", null, true);
            echo ")\"><span class=\"label label-important\">26</span> Comments</a></li>
            ";
        }
        // line 34
        echo "        </ul>
    </div>
</div>

";
    }

    // line 6
    public function block_sitmap($context, array $blocks = array())
    {
        // line 7
        echo "                <li>    
                    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_general_homepage");
        echo "\"><i class=\"icon-home\"></i></a>
                </li>
            ";
    }

    // line 40
    public function block_script($context, array $blocks = array())
    {
        // line 41
        echo "        ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jquery-ui/jquery-ui-1.8.20.custom.min.js"), "html", null, true);
        echo "\"></script>
        <!-- touch events for jquery ui-->
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/forms/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
        <!-- multi-column layout -->
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.imagesloaded.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.wookmark.js"), "html", null, true);
        echo "\"></script>
        <!-- responsive table -->
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mediaTable.min.js"), "html", null, true);
        echo "\"></script>
        <!-- small charts -->
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
        <!-- charts -->
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
        <!-- calendar -->
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <!-- sortable/filterable list -->
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/list_js/list.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/list_js/plugins/paging/list.paging.min.js"), "html", null, true);
        echo "\"></script>
        <!-- dashboard functions -->
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gebo_dashboard.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "adminGeneralBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 62,  203 => 60,  199 => 59,  194 => 57,  189 => 55,  185 => 54,  181 => 53,  176 => 51,  171 => 49,  166 => 47,  162 => 46,  157 => 44,  152 => 42,  147 => 41,  144 => 40,  137 => 8,  134 => 7,  131 => 6,  123 => 34,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  97 => 27,  95 => 26,  88 => 24,  82 => 23,  76 => 22,  70 => 21,  64 => 20,  56 => 19,  48 => 18,  39 => 11,  37 => 6,  33 => 4,  30 => 3,);
    }
}
