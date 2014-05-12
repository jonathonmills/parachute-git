<?php

/* archive-property.twig */
class __TwigTemplate_0fe96d8d5e225f5bc570c89aa2917339 extends Twig_Template
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
        echo "    ";
        if ((!(isset($context["title"]) ? $context["title"] : null))) {
            // line 5
            echo "        <h1 class=\"page-header\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Properties", 1 => "aviators"), "method"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 7
            echo "        <h1 class=\"page-header\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 11
            echo "        <div class=\"term-content\">
            ";
            // line 12
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
        </div>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "properties", 2 => "display_sort_bar"), "method")) {
            // line 17
            echo "        ";
            $this->env->loadTemplate("properties/sort.twig")->display($context);
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "have_posts", array(), "method")) {
            // line 21
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp_query"]) ? $context["wp_query"] : null), "the_post", array(), "method"), "html", null, true);
            echo "
        <div class=\"properties-";
            // line 22
            if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "properties", 2 => "type"), "method") == "row")) {
                echo "rows";
            } else {
                echo "grid";
            }
            echo "\">
            <div class=\"row\">
                ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
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
                echo "                    ";
                if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "properties", 2 => "type"), "method") == "row")) {
                    // line 26
                    echo "                        ";
                    $this->env->loadTemplate("properties/property-row.twig")->display($context);
                    // line 27
                    echo "                    ";
                } else {
                    // line 28
                    echo "                        <div class=\"span3\">
                            ";
                    // line 29
                    $this->env->loadTemplate("properties/property-box-small.twig")->display($context);
                    // line 30
                    echo "                        </div><!-- /.span3 -->
                    ";
                }
                // line 32
                echo "                ";
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
            // line 33
            echo "            </div><!-- /.row -->
        </div><!-- /.properties-grid -->


        ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_paging_nav", array(0 => "", 1 => 2, 2 => (isset($context["wp_query"]) ? $context["wp_query"] : null)), "method"), "html", null, true);
            echo "
    ";
        } else {
            // line 39
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "No posts found.", 1 => "aviators"), "method"), "html", null, true);
            echo "</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "archive-property.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  145 => 37,  139 => 33,  125 => 32,  121 => 30,  119 => 29,  116 => 28,  113 => 27,  110 => 26,  107 => 25,  90 => 24,  81 => 22,  76 => 21,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  63 => 16,  60 => 15,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
