<?php

/* properties/property-box-small.twig */
class __TwigTemplate_a108b57050876ceefbd80353524825ef extends Twig_Template
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
        echo "<div class=\"property\">
    <div class=\"image\">
        <div class=\"content\">
            <a href=\"";
        // line 4
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
        echo "\"></a>
            ";
        // line 5
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_property_, "ID")), "method")) {
            // line 6
            echo "                ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo $this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_property_, "ID")), "method");
            echo "
            ";
        } else {
            // line 8
            echo "                <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/property-tmp-small.png\" alt=\"";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
            echo "\">
            ";
        }
        // line 10
        echo "        </div><!-- /.content -->

        ";
        // line 12
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "common", 2 => "disable_contract_type_label"), "method") != "off")) {
            // line 13
            echo "            ";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_contract_type"), 0)) {
                // line 14
                echo "                <div class=\"rent-sale\">
                    ";
                // line 15
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_contract_type"), 0) == "sale")) {
                    // line 16
                    echo "                        ";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Sale", 1 => "aviators"), "method"), "html", null, true);
                    echo "
                    ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_contract_type"), 0) == "rent")) {
                    // line 18
                    echo "                        ";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Rent", 1 => "aviators"), "method"), "html", null, true);
                    echo "
                    ";
                }
                // line 20
                echo "                </div><!-- /.rent-sale -->
            ";
            }
            // line 22
            echo "        ";
        }
        // line 23
        echo "
        <div class=\"price\">";
        // line 24
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_price"), 0)), "method"), "html", null, true);
        echo "</div><!-- /.price -->

        ";
        // line 26
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_reduced"), 0)) {
            // line 27
            echo "            <div class=\"reduced\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Reduced", 1 => "aviators"), "method"), "html", null, true);
            echo "</div><!-- /.reduced -->
        ";
        }
        // line 29
        echo "    </div><!-- /.image -->

    <div class=\"title\">
        <h2><a href=\"";
        // line 32
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
        echo "\">
            ";
        // line 33
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_title"), 0)) {
            // line 34
            echo "                ";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_title"), 0), "html", null, true);
            echo "
            ";
        } else {
            // line 36
            echo "                ";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
            echo "
            ";
        }
        // line 38
        echo "        </a></h2>
    </div><!-- /.title -->

    <div class=\"location\">";
        // line 41
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "location"), 0), "name"), "html", null, true);
        echo "</div><!-- /.location -->

    ";
        // line 43
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_area"), 0)) {
            // line 44
            echo "        <div class=\"area\">
            <span class=\"key\">";
            // line 45
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Area", 1 => "aviators"), "method"), "html", null, true);
            echo ":</span><!-- /.key -->
            <span class=\"value\">";
            // line 46
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_area"), 0), "html", null, true);
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
            echo "</span><!-- /.value -->
        </div><!-- /.area -->
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bathrooms"), 0)) {
            // line 51
            echo "        <div class=\"bathrooms\" title=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Bathrooms", 1 => "aviators"), "method"), "html", null, true);
            echo "\"><div class=\"content\">";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bathrooms"), 0), "html", null, true);
            echo "</div></div><!-- /.bathrooms -->
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bedrooms"), 0)) {
            // line 55
            echo "        <div class=\"bedrooms\" title=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Bedrooms", 1 => "aviators"), "method"), "html", null, true);
            echo "\"><div class=\"content\">";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bedrooms"), 0), "html", null, true);
            echo "</div></div><!-- /.bedrooms -->
    ";
        }
        // line 57
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "properties/property-box-small.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 57,  191 => 55,  188 => 54,  185 => 53,  175 => 51,  172 => 50,  169 => 49,  160 => 46,  155 => 45,  152 => 44,  149 => 43,  143 => 41,  138 => 38,  131 => 36,  124 => 34,  121 => 33,  115 => 32,  110 => 29,  103 => 27,  100 => 26,  93 => 24,  90 => 23,  87 => 22,  76 => 18,  69 => 16,  66 => 15,  63 => 14,  59 => 13,  56 => 12,  34 => 6,  30 => 5,  24 => 4,  19 => 1,  147 => 33,  140 => 31,  134 => 27,  120 => 26,  116 => 24,  114 => 23,  111 => 22,  108 => 21,  105 => 20,  101 => 19,  83 => 20,  73 => 16,  67 => 15,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  42 => 8,  35 => 5,  31 => 4,  28 => 3,);
    }
}
