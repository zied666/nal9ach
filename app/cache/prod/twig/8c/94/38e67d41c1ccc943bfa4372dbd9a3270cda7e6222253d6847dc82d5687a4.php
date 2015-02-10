<?php

/* adminRefBundle:Service:show.html.twig */
class __TwigTemplate_8c9438e67d41c1ccc943bfa4372dbd9a3270cda7e6222253d6847dc82d5687a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":admin:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sitmap' => array($this, 'block_sitmap'),
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
        // line 17
        echo "            </ul>
        </div>
    </nav>

    <table id=\"example\" class=\"table table-striped table-bordered dTableR\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ordre</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ordre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Visible</th>
                <td>";
        // line 41
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "visible", array())) {
            echo "Visible";
        } else {
            echo " Non-Visible ";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("service");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    // line 6
    public function block_sitmap($context, array $blocks = array())
    {
        // line 7
        echo "                    <li>    
                        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_general_homepage");
        echo "\"><i class=\"icon-home\"></i></a>
                    </li>
                    <li>    
                        <a  href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("service");
        echo "\">Service</a>
                    </li>
                    <li>    
                        <a href=\"#\">Détails</a>
                    </li>
                 ";
    }

    public function getTemplateName()
    {
        return "adminRefBundle:Service:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 11,  118 => 8,  115 => 7,  112 => 6,  105 => 57,  98 => 53,  90 => 48,  76 => 41,  69 => 37,  62 => 33,  55 => 29,  48 => 25,  38 => 17,  36 => 6,  32 => 4,  29 => 3,);
    }
}
