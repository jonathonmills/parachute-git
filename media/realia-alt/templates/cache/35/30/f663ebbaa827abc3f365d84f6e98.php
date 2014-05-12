<?php

/* properties/properties-grid.twig */
class __TwigTemplate_3530f663ebbaa827abc3f365d84f6e98 extends Twig_Template
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
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method")) {
            // line 2
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_title"))) {
                // line 3
                echo "        <h1 class=\"page-header\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method"), "html", null, true);
                echo "</h1>
    ";
            } else {
                // line 5
                echo "        <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method"), "html", null, true);
                echo "</h2>
    ";
            }
        }
        // line 8
        echo "
<div class=\"properties-grid\">
    <div class=\"row\">
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "        <div class=\"span3\">
            ";
            // line 13
            $this->env->loadTemplate("properties/property-box-small.twig")->display(array_merge($context, array("property" => (isset($context["post"]) ? $context["post"] : null))));
            // line 14
            echo "        </div>
        ";
            // line 15
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "cols"), "method")) == 0)) {
                // line 16
                echo "    </div>
    <div class=\"row\">
        ";
            }
            // line 19
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "    </div>
    <!-- /.row -->
</div><!-- /.properties-grid -->";
    }

    public function getTemplateName()
    {
        return "properties/properties-grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  74 => 19,  69 => 16,  67 => 15,  64 => 14,  62 => 13,  59 => 12,  42 => 11,  37 => 8,  30 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
