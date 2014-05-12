<?php

/* properties/overview.twig */
class __TwigTemplate_7d9feb613a34d6607e2752577712334a extends Twig_Template
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
        echo "<div class=\"pull-left overview\">
    <div class=\"row\">
        <div class=\"span3\">
            <h2>";
        // line 4
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Overview", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>

            <table>
                <tbody>
              

                ";
        // line 10
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_price"), "method"), 0)) {
            // line 11
            echo "                    <tr>
                        <th>";
            // line 12
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Price", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>
                            ";
            // line 14
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_price"), "method"), 0)), "method"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 18
        echo "
                ";
        // line 19
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_contract_type"), "method"), 0)) {
            // line 20
            echo "                <tr>
                    <th>";
            // line 21
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Contract type", 1 => "aviators"), "method"), "html", null, true);
            echo ": </th>
                    <td>
                        ";
            // line 23
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_contract_type"), "method"), 0) == "rent")) {
                // line 24
                echo "                        ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "For rent", 1 => "aviators"), "method"), "html", null, true);
                echo "
                        ";
            } elseif (($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_contract_type"), "method"), 0) == "sale")) {
                // line 26
                echo "                            ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "For sale", 1 => "aviators"), "method"), "html", null, true);
                echo "
                        ";
            }
            // line 28
            echo "                    </td>
                </tr>
                ";
        }
        // line 31
        echo "
                <tr>
                    <th>";
        // line 33
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Type", 1 => "aviators"), "method"), "html", null, true);
        echo ":</th>
                    <td>";
        // line 34
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "wp_get_post_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "property_types"), "method"), 0), "name"), "html", null, true);
        echo "</td>
                </tr>

                <tr>
                    <th>";
        // line 38
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Location", 1 => "aviators"), "method"), "html", null, true);
        echo ":</th>
                    <td>";
        // line 39
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "wp_get_post_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "locations"), "method"), 0), "name"), "html", null, true);
        echo "</td>
                </tr>

                ";
        // line 42
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_bathrooms"), "method"), 0)) {
            // line 43
            echo "                    <tr>
                        <th>";
            // line 44
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Bathrooms", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>";
            // line 45
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_bathrooms"), "method"), 0), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 48
        echo "
                ";
        // line 49
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_bedrooms"), "method"), 0)) {
            // line 50
            echo "                    <tr>
                        <th>";
            // line 51
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Bedrooms", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>";
            // line 52
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_bedrooms"), "method"), 0), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 55
        echo "
                ";
        // line 56
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_area"), "method"), 0)) {
            // line 57
            echo "                    <tr>
                        <th>";
            // line 58
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Area", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>";
            // line 59
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_area"), "method"), 0), "html", null, true);
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
            echo "</td>
                    </tr>
                ";
        }
        // line 62
        echo "                </tbody>
            </table>
        </div><!-- /.span2 -->
    </div><!-- /.row -->
</div><!-- /.overview -->";
    }

    public function getTemplateName()
    {
        return "properties/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 62,  184 => 59,  179 => 58,  176 => 57,  172 => 56,  169 => 55,  161 => 52,  156 => 51,  153 => 50,  149 => 49,  146 => 48,  138 => 45,  133 => 44,  130 => 43,  126 => 42,  118 => 39,  113 => 38,  104 => 34,  99 => 33,  90 => 28,  83 => 26,  76 => 24,  72 => 23,  66 => 21,  59 => 19,  41 => 12,  34 => 10,  24 => 4,  103 => 23,  98 => 22,  94 => 20,  67 => 13,  23 => 2,  39 => 6,  33 => 5,  25 => 3,  22 => 2,  19 => 1,  140 => 17,  135 => 41,  131 => 39,  125 => 37,  120 => 36,  116 => 34,  109 => 32,  106 => 31,  102 => 29,  95 => 31,  92 => 25,  89 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 17,  71 => 15,  69 => 17,  60 => 16,  57 => 15,  50 => 13,  47 => 14,  42 => 10,  37 => 7,  30 => 5,  27 => 4,  20 => 1,  63 => 20,  61 => 15,  58 => 14,  56 => 18,  49 => 9,  46 => 10,  44 => 11,  38 => 11,  31 => 4,  28 => 4,);
    }
}
