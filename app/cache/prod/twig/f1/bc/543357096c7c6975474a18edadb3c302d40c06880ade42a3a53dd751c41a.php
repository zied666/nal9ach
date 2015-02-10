<?php

/* adminUserBundle:Default:liste.html.twig */
class __TwigTemplate_f1bc543357096c7c6975474a18edadb3c302d40c06880ade42a3a53dd751c41a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":admin:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Les administrateurs";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<nav>
    <div id=\"jCrumbs\" class=\"breadCrumb module\">
        
        <ul>";
        // line 8
        $this->displayBlock('sitmap', $context, $blocks);
        // line 16
        echo "        </ul>
    </div>
</nav>    
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <table id=\"example\" class=\"table table-striped table-bordered dTableR\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"10%\">Nom & prénom</th>
\t\t\t<th width=\"10%\">Date de naissance</th>
\t\t\t<th width=\"10%\">user name</th>
\t\t\t<th width=\"10%\">email</th>
\t\t\t<th width=\"10%\">role</th>
\t\t\t<th width=\"10%\">Etat</th>
\t\t\t<th width=\"10%\">Last login</th>
\t\t\t<th width=\"8%\">Action</th>
\t\t</tr>
\t</thead>
\t<tbody>
            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "\t\t<tr>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "dateNaissance", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                echo "- ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "<br> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    </td>
                    <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etatUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" onclick=\"javascript:return(confirm('Etes-vous certain de vouloir modifier etat ?'))\" >";
            if ($this->getAttribute($context["user"], "isEnabled", array())) {
                echo "Activé";
            } else {
                echo " Désactivé ";
            }
            echo "</a> </td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "d/m/Y  H:i:s"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"sepV_a\" title=\"Modifier\"><i class=\"icon-pencil\"></i></a>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" title=\"Supprimer\" onclick=\"javascript:return(confirm('Etes-vous certain de vouloir supprimer ce message ?'))\"><i class=\"icon-trash\"></i></a>
                    </td>
\t\t</tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t</tbody>

</table>
        </div>
    </div>
    ";
    }

    // line 8
    public function block_sitmap($context, array $blocks = array())
    {
        // line 9
        echo "                <li>    
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_general_homepage");
        echo "\"><i class=\"icon-home\"></i></a>
                </li>
                <li>    
                            <a href=\"#\">Les administrateurs</a>
                </li>
             ";
    }

    public function getTemplateName()
    {
        return "adminUserBundle:Default:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 10,  148 => 9,  145 => 8,  136 => 52,  126 => 48,  122 => 47,  117 => 45,  107 => 44,  104 => 43,  93 => 42,  88 => 40,  84 => 39,  80 => 38,  74 => 37,  71 => 36,  67 => 35,  46 => 16,  44 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
