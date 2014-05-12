<?php

/* settings/tabs.twig */
class __TwigTemplate_4f7a123ba3bde55383fab3bd2b9ad29c extends Twig_Template
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
        if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
        if ($_tabs_) {
            if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
            if ((twig_length_filter($this->env, $_tabs_) > 1)) {
                // line 2
                echo "\t<h2 class=\"nav-tab-wrapper\">
\t    ";
                // line 3
                if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_tabs_);
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 4
                    echo "\t        <a href=\"?page=";
                    if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_tab_, "settings"), "subpage_slug"), "html", null, true);
                    echo "&tab=";
                    if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_tab_, "settings"), "slug"), "html", null, true);
                    echo "\" class=\"nav-tab ";
                    if (isset($context["active_tab"])) { $_active_tab_ = $context["active_tab"]; } else { $_active_tab_ = null; }
                    if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                    if (($_active_tab_ == $this->getAttribute($this->getAttribute($_tab_, "settings"), "slug"))) {
                        echo "nav-tab-active";
                    }
                    echo "\">
\t            ";
                    // line 5
                    if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_tab_, "settings"), "title"), "html", null, true);
                    echo "
\t        </a>
\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 8
                echo "\t</h2>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "settings/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  47 => 5,  32 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }
}
