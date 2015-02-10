<?php

/* adminLocBundle:Ville:index.html.twig */
class __TwigTemplate_b0c6352d079dc16bff9c42fe08f9cc45e71b1ee0067e0143c429f1b9b17eada5 extends Twig_Template
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
                <th>Région</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "            <tr>
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ville_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "region", array()), "html", null, true);
            echo "</td>
                <td>
                     <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ville_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"sepV_a\" title=\"Modifier\"><i class=\"icon-pencil\"></i></a>
                     <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ville_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"sepV_a\" title=\"consulter\"><i class=\"icon-eye-open\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ville_new");
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
        echo $this->env->getExtension('routing')->getPath("ville");
        echo "\">Ville</a>
                    </li>
                 ";
    }

    public function getTemplateName()
    {
        return "adminLocBundle:Ville:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 11,  113 => 8,  110 => 7,  107 => 6,  97 => 44,  90 => 39,  80 => 35,  76 => 34,  71 => 32,  67 => 31,  61 => 30,  58 => 29,  54 => 28,  38 => 14,  36 => 6,  32 => 4,  29 => 3,);
    }
}
