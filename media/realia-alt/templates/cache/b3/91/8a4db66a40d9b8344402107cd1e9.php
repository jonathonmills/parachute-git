<?php

/* properties/sort.twig */
class __TwigTemplate_b3918a4db66a40d9b8344402107cd1e9 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function (\$) {
        \$('select[name=filter_sort_by]').change(function () {
            \$('form.form-sort').submit();
        });

        \$('select[name=filter_order]').change(function () {
            \$('form.form-sort').submit();
        });
    });
</script>

<div class=\"properties-rows\">
    <div class=\"filter\">
        <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "properties", 1 => "aviators"), "method"), "html", null, true);
        echo "/\" method=\"get\" class=\"form-sort form-horizontal\">
            ";
        // line 16
        if ((isset($context["q"]) ? $context["q"] : null)) {
            // line 17
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["q"]) ? $context["q"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 18
                echo "                    ";
                if ((((isset($context["key"]) ? $context["key"] : null) != "filter_order") && ((isset($context["key"]) ? $context["key"] : null) != "filter_sort_by"))) {
                    // line 19
                    echo "                        ";
                    if (twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) {
                        // line 20
                        echo "                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                            // line 21
                            echo "                                <input type=\"hidden\" name=\"";
                            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                            echo "[]\" value=\"";
                            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                            echo "\">
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 23
                        echo "                        ";
                    } else {
                        // line 24
                        echo "                            <input type=\"hidden\" name=\"";
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "\">
                        ";
                    }
                    // line 26
                    echo "                    ";
                }
                // line 27
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 28
            echo "            ";
        }
        // line 29
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputSortBy\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Sort by", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>

                <div class=\"controls\">
                    <select name=\"filter_sort_by\" id=\"inputSortBy\">

                            <option value=\"title\" ";
        // line 38
        if (((isset($context["default_sort"]) ? $context["default_sort"] : null) == "title")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Name", 1 => "aviators"), "method"), "html", null, true);
        echo "</option>
                            <option value=\"date\" ";
        // line 39
        if (((isset($context["default_sort"]) ? $context["default_sort"] : null) == "date")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Date", 1 => "aviators"), "method"), "html", null, true);
        echo "</option>
                            <option value=\"price\" ";
        // line 40
        if (((isset($context["default_sort"]) ? $context["default_sort"] : null) == "price")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Price", 1 => "aviators"), "method"), "html", null, true);
        echo "</option>

                            ";
        // line 42
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_beds"), "method") != "on")) {
            // line 43
            echo "                                <option value=\"beds\" ";
            if (((isset($context["default_sort"]) ? $context["default_sort"] : null) == "beds")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Bedrooms", 1 => "aviators"), "method"), "html", null, true);
            echo "</option>
                            ";
        }
        // line 45
        echo "
                            ";
        // line 46
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_baths"), "method") != "on")) {
            // line 47
            echo "                                <option value=\"baths\" ";
            if (((isset($context["default_sort"]) ? $context["default_sort"] : null) == "baths")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Bathrooms", 1 => "aviators"), "method"), "html", null, true);
            echo "</option>
                            ";
        }
        // line 49
        echo "
                    </select>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputOrder\">
                    ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Order", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>

                <div class=\"controls\">
                    <select id=\"inputOrder\" name=\"filter_order\">
                        <option value=\"DESC\" ";
        // line 63
        if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_order") == "DESC")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "DESC", 1 => "aviators"), "method"), "html", null, true);
        echo "</option>
                        <option value=\"ASC\" ";
        // line 64
        if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_order") == "ASC")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "ASC", 1 => "aviators"), "method"), "html", null, true);
        echo "</option>
                    </select>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->
        </form>
    </div>
    <!-- /.filter -->
</div><!-- /.properties-rows -->";
    }

    public function getTemplateName()
    {
        return "properties/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 64,  178 => 63,  170 => 58,  159 => 49,  149 => 47,  147 => 46,  144 => 45,  134 => 43,  132 => 42,  123 => 40,  115 => 39,  107 => 38,  98 => 32,  93 => 29,  90 => 28,  84 => 27,  81 => 26,  73 => 24,  70 => 23,  59 => 21,  54 => 20,  51 => 19,  48 => 18,  43 => 17,  41 => 16,  35 => 15,  19 => 1,);
    }
}
