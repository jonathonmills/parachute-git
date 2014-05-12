<?php

/* properties/enquire.twig */
class __TwigTemplate_a1495f82bb433b971f3bcd47bf4a1ddf extends Twig_Template
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
        if (isset($context["before_widget"])) { $_before_widget_ = $context["before_widget"]; } else { $_before_widget_ = null; }
        echo $_before_widget_;
        echo "

";
        // line 3
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 4
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
        // line 6
        echo "
<div class=\"content\">
    <form method=\"post\" action=\"";
        // line 8
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/aviators/plugins/properties/enquire.php\">
        ";
        // line 9
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_name"), "method"))) {
            // line 10
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputName\">
                    ";
            // line 12
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Name", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"inputName\" name=\"name\" required=\"required\">
                </div><!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_phone"), "method"))) {
            // line 22
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputPhone\">
                    ";
            // line 24
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Phone", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"inputPhone\" name=\"phone\" required=\"required\">
                </div><!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date"), "method"))) {
            // line 34
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 36
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Date", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>
                <div class=\"controls\">
                    <input type=\"date\" id=\"inputDate\" name=\"date\" required=\"required\">
                </div><!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_email"), "method"))) {
            // line 46
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputEmail\">
                    ";
            // line 48
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Email", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>
                <div class=\"controls\">
                    <input type=\"email\" id=\"inputEmail\" name=\"email\" required=\"required\">
                </div><!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 56
        echo "
        ";
        // line 57
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_message"), "method"))) {
            // line 58
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputMessage\">
                    ";
            // line 60
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Message", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <textarea id=\"inputMessage\" name=\"message\" required=\"required\"></textarea>
                </div><!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 69
        echo "
        <div class=\"form-actions\">
            <input type=\"hidden\" name=\"post_id\" value=\"";
        // line 71
        if (isset($context["post_id"])) { $_post_id_ = $context["post_id"]; } else { $_post_id_ = null; }
        echo twig_escape_filter($this->env, $_post_id_, "html", null, true);
        echo "\">
            <button class=\"btn btn-primary arrow-right\">";
        // line 72
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Send", 1 => "aviators"), "method"), "html", null, true);
        echo "</button>
        </div><!-- /.form-actions -->
    </form>
</div><!-- /.content -->

";
        // line 77
        if (isset($context["after_widget"])) { $_after_widget_ = $context["after_widget"]; } else { $_after_widget_ = null; }
        echo $_after_widget_;
    }

    public function getTemplateName()
    {
        return "properties/enquire.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 77,  165 => 72,  160 => 71,  156 => 69,  143 => 60,  139 => 58,  136 => 57,  133 => 56,  121 => 48,  117 => 46,  114 => 45,  111 => 44,  99 => 36,  95 => 34,  92 => 33,  89 => 32,  77 => 24,  73 => 22,  70 => 21,  67 => 20,  55 => 12,  51 => 10,  48 => 9,  43 => 8,  39 => 6,  28 => 4,  25 => 3,  19 => 1,);
    }
}
