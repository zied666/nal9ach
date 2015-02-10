<?php

/* adminPageBundle::slider.html.twig */
class __TwigTemplate_7f07907798ccecf72eb56ae1e0c92cb6057485ff46a151da72c19785a6eecadc extends Twig_Template
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
        echo "Slider";
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
\t\t\t<th width=\"10%\">Photo</th>
\t\t\t<th width=\"10%\">Ordre</th>
\t\t\t<th width=\"10%\">Visible</th>
\t\t\t<th width=\"8%\">Action</th>
\t\t</tr>
\t</thead>
\t<tbody>
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : $this->getContext($context, "sliders")));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 33
            echo "\t\t<tr>
                    <td><img style=\"width: 100px\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($context["slider"], "getUploadDir", array()) . "/") . $this->getAttribute($context["slider"], "photo", array()))), "html", null, true);
            echo "\" > </td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "ordre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            if (($this->getAttribute($context["slider"], "visible", array()) == 1)) {
                echo "Visible";
            } else {
                echo "Invisible";
            }
            echo "</td>
                    <td>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppr_slider", array("id" => $this->getAttribute($context["slider"], "id", array()))), "html", null, true);
            echo "\" title=\"Supprimer\" onclick=\"javascript:return(confirm('Etes-vous certain de vouloir supprimer ce message ?'))\"><i class=\"icon-trash\"></i></a>
                    </td>
\t\t</tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
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
                    <a href=\"#\">Slider</a>
                </li>
            ";
    }

    public function getTemplateName()
    {
        return "adminPageBundle::slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 10,  113 => 9,  110 => 8,  101 => 42,  91 => 38,  82 => 36,  78 => 35,  74 => 34,  71 => 33,  67 => 32,  51 => 19,  46 => 16,  44 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
