<?php

/* properties/property-row.twig */
class __TwigTemplate_42cf5f16398c16b1c29bb443343b35e5 extends Twig_Template
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
        echo "<div class=\"property span9\">
    <div class=\"row\">
        <div class=\"image span3\">
            <div class=\"content\">
                <a href=\"";
        // line 5
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
        echo "\"></a>
                ";
        // line 6
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_property_, "ID")), "method")) {
            // line 7
            echo "                    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo $this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_property_, "ID")), "method");
            echo "
                ";
        } else {
            // line 9
            echo "                    <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/property-tmp-small.png\" alt=\"";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
            echo "\">
                ";
        }
        // line 11
        echo "            </div><!-- /.content -->
        </div><!-- /.image -->

        <div class=\"body span6\">
            <div class=\"title-price row\">
                <div class=\"title span4\">
                    <h2><a href=\"";
        // line 17
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
        echo "\">";
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
        echo "</a></h2>
                </div><!-- /.title -->

                <div class=\"price\">";
        // line 20
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_price"), 0)), "method"), "html", null, true);
        echo "</div><!-- /.price -->
            </div><!-- /.title -->

            <div class=\"location\">";
        // line 23
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "location"), 0), "name"), "html", null, true);
        echo "</div><!-- /.location -->

            <div class=\"body\">                
                ";
        // line 26
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_core_get_post_teaser", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
        echo "
            </div><!-- /.body -->

            <div class=\"info clearfix\">
                ";
        // line 30
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_area"), 0)) {
            // line 31
            echo "                    <div class=\"area\">
                        <span class=\"key\">";
            // line 32
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Area", 1 => "aviators"), "method"), "html", null, true);
            echo ":</span><!-- /.key -->
                        <span class=\"value\">";
            // line 33
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_area"), 0), "html", null, true);
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
            echo "</span><!-- /.value -->
                    </div><!-- /.area -->
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bedrooms"), 0)) {
            // line 38
            echo "                    <div class=\"bedrooms\" title=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Bedrooms", 1 => "aviators"), "method"), "html", null, true);
            echo "\"><div class=\"content\">";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bedrooms"), 0), "html", null, true);
            echo "</div></div><!-- /.bedrooms -->
                ";
        }
        // line 40
        echo "
                ";
        // line 41
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bathrooms"), 0)) {
            // line 42
            echo "                    <div class=\"bathrooms\" title=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Bathrooms", 1 => "aviators"), "method"), "html", null, true);
            echo "\"><div class=\"content\">";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bathrooms"), 0), "html", null, true);
            echo "</div></div><!-- /.bathrooms -->
                ";
        }
        // line 44
        echo "            </div><!-- /.info -->
        </div><!-- /.body -->
    </div><!-- /.row -->
</div><!-- /.property -->
";
    }

    public function getTemplateName()
    {
        return "properties/property-row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  138 => 42,  135 => 41,  132 => 40,  122 => 38,  119 => 37,  116 => 36,  107 => 33,  102 => 32,  99 => 31,  96 => 30,  87 => 26,  80 => 23,  72 => 20,  61 => 17,  53 => 11,  43 => 9,  35 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }
}
