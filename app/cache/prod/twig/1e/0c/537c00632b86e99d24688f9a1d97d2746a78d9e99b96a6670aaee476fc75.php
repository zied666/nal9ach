<?php

/* adminUserBundle:Default:other.html.twig */
class __TwigTemplate_1e0c537c00632b86e99d24688f9a1d97d2746a78d9e99b96a6670aaee476fc75 extends Twig_Template
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
        echo "Les users";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <nav>
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
            <thead>
                <tr>
                    <th>Nom & prénom</th>
                    <th>user name</th>
                    <th>email</th>
                    <th>role</th>
                    <th>Etat</th>
                    <th>Last login</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 35
            echo "                    <tr>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo " </td>
                        ";
            // line 37
            if (($this->getAttribute($context["user"], "getFacebookId", array()) != "")) {
                // line 38
                echo "                            <td  colspan=\"2\" style=\"text-align:center;background-color:#46629E;color:white;vertical-align: middle;\" >Facebook</td>
                        ";
            } elseif (($this->getAttribute($context["user"], "getGoogleId", array()) != "")) {
                // line 40
                echo "                            <td colspan=\"2\" style=\"text-align:center;background-color:#D73D32;color:white;vertical-align: middle;\" >Google +</td>
                        ";
            } else {
                // line 42
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
                        ";
            }
            // line 45
            echo "                        <td>
                            ";
            // line 46
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
            // line 47
            echo "                        </td>
                        <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etatUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" onclick=\"javascript:return(confirm('Etes-vous certain de vouloir modifier etat ?'))\" >";
            if ($this->getAttribute($context["user"], "isEnabled", array())) {
                echo "Activé";
            } else {
                echo " Désactivé ";
            }
            echo "</a> </td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "d/m/Y  H:i:s"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 51
            if ((($this->getAttribute($context["user"], "getFacebookId", array()) == "") && ($this->getAttribute($context["user"], "getGoogleId", array()) == ""))) {
                // line 52
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"sepV_a\" title=\"Modifier\"><i class=\"icon-pencil\"></i></a>
                                <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Supprimer\" onclick=\"javascript:return(confirm('Etes-vous certain de vouloir supprimer ce message ?'))\"><i class=\"icon-trash\"></i></a>
                            ";
            }
            // line 55
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </tbody>

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
                    <a href=\"#\">Les utilisateurs</a>
                </li>
            ";
    }

    public function getTemplateName()
    {
        return "adminUserBundle:Default:other.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 10,  163 => 9,  160 => 8,  151 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  126 => 49,  116 => 48,  113 => 47,  102 => 46,  99 => 45,  94 => 43,  89 => 42,  85 => 40,  81 => 38,  79 => 37,  73 => 36,  70 => 35,  66 => 34,  46 => 16,  44 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
