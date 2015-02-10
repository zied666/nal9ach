<?php

/* adminPageBundle::partenaire.html.twig */
class __TwigTemplate_7f6da5df01cdb9c1a52f01a9ad8d90d50e6a4cd8c7c18aa9be92c94c0484ecd1 extends Twig_Template
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
        echo "Partenaire";
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
 ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "        
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <table id=\"example\" class=\"table table-striped table-bordered dTableR\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"10%\">logo</th>
\t\t\t<th width=\"10%\">libellé</th>
\t\t\t<th width=\"10%\">lien</th>
\t\t\t<th width=\"8%\">Action</th>
\t\t</tr>
\t</thead>
\t<tbody>
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) ? $context["partenaires"] : $this->getContext($context, "partenaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 33
            echo "\t\t<tr>
                    <td><img style=\"width: 100px\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($context["partenaire"], "getUploadDir", array()) . "/") . $this->getAttribute($context["partenaire"], "logo", array()))), "html", null, true);
            echo "\" > </td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["partenaire"], "libelle", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["partenaire"], "lien", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppr_partenaire", array("id" => $this->getAttribute($context["partenaire"], "id", array()))), "html", null, true);
            echo "\" title=\"Supprimer\" onclick=\"javascript:return(confirm('Etes-vous certain de vouloir supprimer cette lgne ?'))\"><i class=\"icon-trash\"></i></a>
                    </td>
\t\t</tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
                    <a href=\"#\">Partenaire</a>
                </li>
            ";
    }

    public function getTemplateName()
    {
        return "adminPageBundle::partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 10,  109 => 9,  106 => 8,  97 => 42,  87 => 38,  82 => 36,  78 => 35,  74 => 34,  71 => 33,  67 => 32,  51 => 19,  46 => 16,  44 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
