<?php

/* single-property.twig */
class __TwigTemplate_c5a2330c403cd3dfade9e79dfc430d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"page-header\">";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "post_title"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        $this->env->loadTemplate("properties/slider.twig")->display($context);
        echo "        

    <div class=\"property-detail\">
        ";
        // line 9
        $this->env->loadTemplate("properties/overview.twig")->display($context);
        // line 10
        echo "
        ";
        // line 11
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_wp_, "do_shortcode", array(0 => $this->getAttribute($_wp_, "apply_filters", array(0 => "the_content", 1 => $this->getAttribute($_post_, "post_content")), "method")), "method");
        echo "

        ";
        // line 13
        $this->env->loadTemplate("properties/amenities.twig")->display($context);
        // line 14
        echo "
        ";
        // line 15
        $this->env->loadTemplate("properties/property-map.twig")->display($context);
        // line 16
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "single-property.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  61 => 15,  58 => 14,  56 => 13,  49 => 11,  46 => 10,  44 => 9,  38 => 6,  31 => 4,  28 => 3,);
    }
}
