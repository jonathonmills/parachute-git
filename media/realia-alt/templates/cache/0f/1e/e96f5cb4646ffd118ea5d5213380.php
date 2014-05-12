<?php

/* page-properties-rows.twig */
class __TwigTemplate_0f1ee96f5cb4646ffd118ea5d5213380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-homepage.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-homepage.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((!twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_title")))) {
            // line 5
            echo "        <h1 class=\"page-header\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_title");
            echo "</h1>
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ((!twig_test_empty((isset($context["content"]) ? $context["content"] : null)))) {
            // line 9
            echo "        <div class=\"page-content properties-rows-content\">
            ";
            // line 10
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
        </div>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method")) {
            // line 15
            echo "        ";
            if (twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_title"))) {
                // line 16
                echo "            <h1 class=\"page-header\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method"), "html", null, true);
                echo "</h1>
        ";
            } else {
                // line 18
                echo "            <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method"), "html", null, true);
                echo "</h2>
        ";
            }
            // line 20
            echo "    ";
        }
        // line 21
        echo "
\t<div class=\"properties-rows margin\">
\t\t<div class=\"row\">
\t\t\t";
        // line 24
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
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 25
            echo "\t\t    \t";
            $this->env->loadTemplate("properties/property-row.twig")->display($context);
            // line 26
            echo "\t\t    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "\t\t</div><!-- /.row -->
\t</div><!-- /.properties-grid -->
";
    }

    public function getTemplateName()
    {
        return "page-properties-rows.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  102 => 26,  99 => 25,  82 => 24,  77 => 21,  74 => 20,  68 => 18,  62 => 16,  59 => 15,  57 => 14,  54 => 13,  48 => 10,  45 => 9,  43 => 8,  40 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
