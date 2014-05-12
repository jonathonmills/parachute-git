<?php

/* properties/amenities.twig */
class __TwigTemplate_91533e6214d4c1d128a50b875d10f40b extends Twig_Template
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
        if (isset($context["amenities"])) { $_amenities_ = $context["amenities"]; } else { $_amenities_ = null; }
        if ($_amenities_) {
            // line 2
            echo "    <div class=\"row\">
        <div class=\"span9\">
            <h2>";
            // line 4
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "General amenities", 1 => "aviators"), "method"), "html", null, true);
            echo "</h2>

            <div class=\"row\">
                ";
            // line 7
            if (isset($context["amenities"])) { $_amenities_ = $context["amenities"]; } else { $_amenities_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_amenities_);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 8
                echo "
                        ";
                // line 9
                if (isset($context["column"])) { $_column_ = $context["column"]; } else { $_column_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_column_);
                foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                    // line 10
                    echo "                            <li class=\"span2 ";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["amenity"])) { $_amenity_ = $context["amenity"]; } else { $_amenity_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    if ($this->getAttribute($_wp_, "has_term", array(0 => $this->getAttribute($_amenity_, "term_id"), 1 => "amenities", 2 => $this->getAttribute($_post_, "ID")), "method")) {
                        echo "checked";
                    } else {
                        echo "plain";
                    }
                    echo "\">";
                    if (isset($context["amenity"])) { $_amenity_ = $context["amenity"]; } else { $_amenity_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_amenity_, "name"), "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 12
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 13
            echo "            </div><!-- /.row -->
        </div><!-- /.span12 -->
    </div><!-- /.row -->
";
        }
    }

    public function getTemplateName()
    {
        return "properties/amenities.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  26 => 4,  194 => 62,  184 => 59,  179 => 58,  176 => 57,  172 => 56,  169 => 55,  161 => 52,  156 => 51,  153 => 50,  149 => 49,  146 => 48,  138 => 45,  133 => 44,  130 => 43,  126 => 42,  118 => 39,  113 => 38,  104 => 34,  99 => 33,  90 => 28,  83 => 26,  76 => 24,  72 => 23,  66 => 21,  59 => 19,  41 => 9,  34 => 10,  24 => 4,  103 => 23,  98 => 22,  94 => 20,  67 => 13,  23 => 2,  39 => 6,  33 => 7,  25 => 3,  22 => 2,  19 => 1,  140 => 17,  135 => 41,  131 => 39,  125 => 37,  120 => 36,  116 => 34,  109 => 32,  106 => 31,  102 => 29,  95 => 31,  92 => 25,  89 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 17,  71 => 13,  69 => 17,  60 => 16,  57 => 15,  50 => 13,  47 => 14,  42 => 10,  37 => 7,  30 => 5,  27 => 4,  20 => 1,  63 => 20,  61 => 15,  58 => 14,  56 => 18,  49 => 9,  46 => 10,  44 => 11,  38 => 8,  31 => 4,  28 => 4,);
    }
}
