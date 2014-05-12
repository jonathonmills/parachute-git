<?php

/* properties/filter.twig */
class __TwigTemplate_9d335ab2e5e9c29a0d10a117b78bcfbd extends Twig_Template
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
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 2
            echo "    ";
            if (isset($context["before_title"])) { $_before_title_ = $context["before_title"]; } else { $_before_title_ = null; }
            echo $_before_title_;
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            if (isset($context["after_title"])) { $_after_title_ = $context["after_title"]; } else { $_after_title_ = null; }
            echo $_after_title_;
            echo "
";
        }
        // line 4
        echo "
<div class=\"property-filter widget\">
    <div class=\"content\">
        <form method=\"get\" action=\"";
        // line 7
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_get_home_url", array(), "method"), "html", null, true);
        echo "/";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "properties", 1 => "aviators"), "method"), "html", null, true);
        echo "/\">
            <div class=\"location control-group\">
                <label class=\"control-label\" for=\"inputLocation-";
        // line 9
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                    ";
        // line 10
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Location", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>
                <div class=\"controls\">
                    <select name=\"filter_location\" id=\"inputLocation-";
        // line 13
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                        <option value=\"\">-</option>
                        ";
        // line 15
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "get_terms", array(0 => "locations"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 16
            echo "                            <option value=\"";
            if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_location_, "term_id"), "html", null, true);
            echo "\" ";
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
            if (($this->getAttribute($_q_, "filter_location") == $this->getAttribute($_location_, "term_id"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_location_, "name"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "                    </select>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"type control-group\">
                <label class=\"control-label\" for=\"inputType-";
        // line 23
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                    ";
        // line 24
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Type", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>
                <div class=\"controls\">
                    <select name=\"filter_type\" id=\"inputType-";
        // line 27
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                        <option value=\"\">-</option>
                        ";
        // line 29
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "get_terms", array(0 => "property_types"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 30
            echo "                            <option value=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_type_, "term_id"), "html", null, true);
            echo "\" ";
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($this->getAttribute($_q_, "filter_type") == $this->getAttribute($_type_, "term_id"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_type_, "name"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "                    </select>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"beds control-group\">
                <label class=\"control-label\" for=\"inputBeds-";
        // line 37
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                    ";
        // line 38
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Beds", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>
                <div class=\"controls\">
                    <select name=\"filter_bedrooms\" id=\"inputBeds-";
        // line 41
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                        <option value=\"\">-</option>
                        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "                            <option value=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" ";
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($this->getAttribute($_q_, "filter_bedrooms") == $_i_)) {
                echo "selected=\"selected=\"";
            }
            echo ">";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "                    </select>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"baths control-group\">
                <label class=\"control-label\" for=\"inputBaths-";
        // line 51
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                    ";
        // line 52
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Baths", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>
                <div class=\"controls\">
                    <select name=\"filter_bathrooms\" id=\"inputBaths-";
        // line 55
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                        <option value=\"\">-</option>
                        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            echo "                            <option value=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" ";
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($this->getAttribute($_q_, "filter_bathrooms") == $_i_)) {
                echo "selected=\"selected=\"";
            }
            echo ">";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "                    </select>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->


            <div class=\"rent control-group\">
                <div class=\"controls\">
                    <label class=\"checkbox\" for=\"inputRent-";
        // line 67
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                        <input type=\"checkbox\" name=\"filter_contract_type[]\" value=\"rent\" id=\"inputRent-";
        // line 68
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"";
        if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_q_, "filter_contract_type"));
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            if (($_contract_ == "rent")) {
                echo "checked=\"checked\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "> ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Rent", 1 => "aviators"), "method"), "html", null, true);
        echo "
                    </label>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"sale control-group\">
                <div class=\"controls\">
                    <label class=\"checkbox\" for=\"inputSale-";
        // line 75
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                        <input type=\"checkbox\" name=\"filter_contract_type[]\" value=\"sale\" id=\"inputSale-";
        // line 76
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"";
        if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_q_, "filter_contract_type"));
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            if (($_contract_ == "sale")) {
                echo "checked=\"checked\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "> ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Sale", 1 => "aviators"), "method"), "html", null, true);
        echo "
                    </label>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"price-from control-group\">
                <label class=\"control-label\" for=\"inputPriceFrom-";
        // line 82
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                    ";
        // line 83
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "From", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>
                <div class=\"controls\">
                    <select name=\"filter_price_from\" id=\"inputPriceFrom-";
        // line 86
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                        <option value=\"\">-</option>
                        ";
        // line 88
        if (isset($context["price_from"])) { $_price_from_ = $context["price_from"]; } else { $_price_from_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_price_from_);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 89
            echo "                            <option value=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" ";
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($this->getAttribute($_q_, "filter_price_from") == $_i_)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_price_format", array(0 => $_i_), "method"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 91
        echo "                    </select>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"price-to control-group\">
                <label class=\"control-label\" for=\"inputPriceTo-";
        // line 96
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                    ";
        // line 97
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "To", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>
                <div class=\"controls\">
                    <select name=\"filter_price_to\" id=\"inputPriceTo-";
        // line 100
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
                        <option value=\"\">-</option>
                        ";
        // line 102
        if (isset($context["price_to"])) { $_price_to_ = $context["price_to"]; } else { $_price_to_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_price_to_);
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 103
            echo "                            <option value=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" ";
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (($this->getAttribute($_q_, "filter_price_to") == $_i_)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_price_format", array(0 => $_i_), "method"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 105
        echo "                    </select>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"form-actions\">
                <button class=\"btn btn-primary btn-large\">";
        // line 110
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Filter now!", 1 => "aviators"), "method"), "html", null, true);
        echo "</button>
            </div><!-- /.form-actions -->
        </form>
    </div><!-- /.content -->
</div><!-- /.property-filter -->
";
    }

    public function getTemplateName()
    {
        return "properties/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 110,  399 => 105,  379 => 103,  374 => 102,  368 => 100,  361 => 97,  356 => 96,  349 => 91,  329 => 89,  324 => 88,  318 => 86,  311 => 83,  306 => 82,  280 => 76,  275 => 75,  248 => 68,  243 => 67,  234 => 60,  215 => 58,  211 => 57,  205 => 55,  198 => 52,  193 => 51,  186 => 46,  167 => 44,  163 => 43,  157 => 41,  150 => 38,  145 => 37,  138 => 32,  119 => 30,  114 => 29,  108 => 27,  101 => 24,  96 => 23,  89 => 18,  70 => 16,  65 => 15,  59 => 13,  52 => 10,  47 => 9,  38 => 7,  33 => 4,  22 => 2,  19 => 1,);
    }
}
