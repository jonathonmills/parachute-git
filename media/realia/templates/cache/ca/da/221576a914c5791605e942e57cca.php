<?php

/* archive-property.twig */
class __TwigTemplate_cada221576a914c5791605e942e57cca extends Twig_Template
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
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ((!$_title_)) {
            // line 5
            echo "        <h1 class=\"page-header\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Properties", 1 => "aviators"), "method"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 7
            echo "        <h1 class=\"page-header\">";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            echo "</h1>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "properties", 2 => "display_sort_bar"), "method")) {
            // line 11
            echo "        ";
            $this->env->loadTemplate("properties/sort.twig")->display($context);
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "have_posts", array(), "method")) {
            // line 15
            echo "        ";
            if (isset($context["wp_query"])) { $_wp_query_ = $context["wp_query"]; } else { $_wp_query_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_query_, "the_post", array(), "method"), "html", null, true);
            echo "
        <div class=\"properties-";
            // line 16
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "properties", 2 => "type"), "method") == "row")) {
                echo "rows";
            } else {
                echo "grid";
            }
            echo "\">
            <div class=\"row\">
                ";
            // line 18
            if (isset($context["properties"])) { $_properties_ = $context["properties"]; } else { $_properties_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_properties_);
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
                // line 19
                echo "                    ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "properties", 2 => "type"), "method") == "row")) {
                    // line 20
                    echo "                        ";
                    $this->env->loadTemplate("properties/property-row.twig")->display($context);
                    // line 21
                    echo "                    ";
                } else {
                    // line 22
                    echo "                        <div class=\"span3\">
                            ";
                    // line 23
                    $this->env->loadTemplate("properties/property-box-small.twig")->display($context);
                    // line 24
                    echo "                        </div><!-- /.span3 -->
                    ";
                }
                // line 26
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
            // line 27
            echo "            </div><!-- /.row -->
        </div><!-- /.properties-grid -->


        ";
            // line 31
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["wp_query"])) { $_wp_query_ = $context["wp_query"]; } else { $_wp_query_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_paging_nav", array(0 => "", 1 => 2, 2 => $_wp_query_), "method"), "html", null, true);
            echo "
    ";
        } else {
            // line 33
            echo "        <p>";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "No posts found.", 1 => "aviators"), "method"), "html", null, true);
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
        return array (  147 => 33,  140 => 31,  134 => 27,  120 => 26,  116 => 24,  114 => 23,  111 => 22,  108 => 21,  105 => 20,  101 => 19,  83 => 18,  73 => 16,  67 => 15,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  42 => 7,  35 => 5,  31 => 4,  28 => 3,);
    }
}
