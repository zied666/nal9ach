<?php

/* adminRefBundle:Service:index.html.twig */
class __TwigTemplate_c3d6214ea12293c786b7acfc3bc2d989d3759754f28344db275a7c84bae41f29 extends Twig_Template
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
        // line 14
        echo "            </ul>
        </div>
    </nav>

    <table id=\"example\" class=\"table table-striped table-bordered dTableR\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Ordre</th>
                <th>Visible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "            <tr>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "Categorie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ordre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["entity"], "visible", array())) {
                echo "Visible";
            } else {
                echo " Non-Visible ";
            }
            echo "</td>
                <td>
                     <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"sepV_a\" title=\"Modifier\"><i class=\"icon-pencil\"></i></a>
                     <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"sepV_a\" title=\"consulter\"><i class=\"icon-eye-open\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("service_new");
        echo "\">
                Creation
            </a>
        </li>
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
                 ";
    }

    public function getTemplateName()
    {
        return "adminRefBundle:Service:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 11,  132 => 8,  129 => 7,  126 => 6,  116 => 50,  109 => 45,  99 => 41,  95 => 40,  86 => 38,  82 => 37,  78 => 36,  74 => 35,  70 => 34,  64 => 33,  61 => 32,  57 => 31,  38 => 14,  36 => 6,  32 => 4,  29 => 3,);
    }
}
