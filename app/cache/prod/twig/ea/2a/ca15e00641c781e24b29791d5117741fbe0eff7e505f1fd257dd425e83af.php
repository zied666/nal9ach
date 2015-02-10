<?php

/* adminLocBundle:Region:index.html.twig */
class __TwigTemplate_ea2aca15e00641c781e24b29791d5117741fbe0eff7e505f1fd257dd425e83af extends Twig_Template
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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>
                     <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"sepV_a\" title=\"Modifier\"><i class=\"icon-pencil\"></i></a>
                     <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"sepV_a\" title=\"consulter\"><i class=\"icon-eye-open\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("region_new");
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
        echo $this->env->getExtension('routing')->getPath("region");
        echo "\">Région</a>
                    </li>
                 ";
    }

    public function getTemplateName()
    {
        return "adminLocBundle:Region:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 11,  108 => 8,  105 => 7,  102 => 6,  92 => 42,  85 => 37,  75 => 33,  71 => 32,  66 => 30,  60 => 29,  57 => 28,  53 => 27,  38 => 14,  36 => 6,  32 => 4,  29 => 3,);
    }
}
