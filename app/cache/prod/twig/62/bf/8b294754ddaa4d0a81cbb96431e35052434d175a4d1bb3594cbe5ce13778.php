<?php

/* adminPageBundle:front:news.html.twig */
class __TwigTemplate_62bf8b294754ddaa4d0a81cbb96431e35052434d175a4d1bb3594cbe5ce13778 extends Twig_Template
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
        echo "<div class=\"darker-stripe blocks-spacer more-space latest-news with-shadows\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <div class=\"main-titles center-align\">
                    <h2 class=\"title\">
                        <span class=\"clickable icon-chevron-left\" id=\"tweetsLeft\"></span> &nbsp;&nbsp;&nbsp;
                        <span class=\"light\">Dernières</span>  Nouvelles &nbsp;&nbsp;&nbsp;
                        <span class=\"clickable icon-chevron-right\" id=\"tweetsRight\"></span>
                    </h2>
                </div>
            </div>
        </div> <!-- /title -->
        <div class=\"row\">
            <div class=\"span12\">
                <div class=\"carouFredSel\" data-nav=\"tweets\" data-autoplay=\"false\">
                    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 18
            echo "                    <div class=\"slide\">
                        <div class=\"row\">
                            <div class=\"span12\">
                                <div class=\"news-item\">
                                    <div class=\"published\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "creation", array()), "d/m/Y"), "html", null, true);
            echo "</div>
                                    <h6><a href=\"#\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "titre", array()), "html", null, true);
            echo "</a></h6>
                                    <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "texte", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /slide -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </div>
            </div>
        </div> <!-- /news content -->
    </div>
</div> <!-- /latest news -->";
    }

    public function getTemplateName()
    {
        return "adminPageBundle:front:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  55 => 24,  51 => 23,  47 => 22,  41 => 18,  37 => 17,  19 => 1,);
    }
}
