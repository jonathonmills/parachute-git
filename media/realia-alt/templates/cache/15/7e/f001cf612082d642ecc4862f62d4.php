<?php

/* properties/enquire.twig */
class __TwigTemplate_157ef001cf612082d642ecc4862f62d4 extends Twig_Template
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
        echo (isset($context["before_widget"]) ? $context["before_widget"] : null);
        echo "

";
        // line 3
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 4
            echo "    ";
            echo (isset($context["before_title"]) ? $context["before_title"] : null);
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo (isset($context["after_title"]) ? $context["after_title"] : null);
            echo "
";
        }
        // line 6
        echo "
<div class=\"content\">
    <form method=\"post\" action=\"\">
        <input type=\"hidden\" name=\"form_id\" value=\"enquire-form\">

        ";
        // line 11
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_name"), "method"))) {
            // line 12
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputName\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Name", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"text\" id=\"inputName\" name=\"name\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 24
        echo "
        ";
        // line 25
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_phone"), "method"))) {
            // line 26
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputPhone\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Phone", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"text\" id=\"inputPhone\" name=\"phone\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 38
        echo "
        ";
        // line 39
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date"), "method"))) {
            // line 40
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Date", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"date\" id=\"inputDate\" name=\"date\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 52
        echo "
        ";
        // line 53
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date_from"), "method"))) {
            // line 54
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Date From", 1 => "aviators"), "method"), "html", null, true);
            echo "
                </label>

                <div class=\"controls\">
                    <input type=\"date\" id=\"inputDate\" name=\"date_from\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 65
        echo "
        ";
        // line 66
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date_to"), "method"))) {
            // line 67
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Date To", 1 => "aviators"), "method"), "html", null, true);
            echo "
                </label>

                <div class=\"controls\">
                    <input type=\"date\" id=\"inputDate\" name=\"date_to\" >
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 78
        echo "
        ";
        // line 79
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_email"), "method"))) {
            // line 80
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputEmail\">
                    ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Email", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"email\" id=\"inputEmail\" name=\"email\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 92
        echo "
        ";
        // line 93
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_message"), "method"))) {
            // line 94
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputMessage\">
                    ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Message", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <textarea id=\"inputMessage\" name=\"message\" required=\"required\"></textarea>
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 106
        echo "
        <div class=\"form-actions\">
            <input type=\"hidden\" name=\"post_id\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["post_id"]) ? $context["post_id"] : null), "html", null, true);
        echo "\">
            <button class=\"btn btn-primary arrow-right\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Send", 1 => "aviators"), "method"), "html", null, true);
        echo "</button>
        </div>
        <!-- /.form-actions -->
    </form>
</div><!-- /.content -->

";
        // line 115
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
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
        return array (  207 => 115,  198 => 109,  194 => 108,  190 => 106,  177 => 96,  173 => 94,  171 => 93,  168 => 92,  155 => 82,  151 => 80,  149 => 79,  146 => 78,  134 => 69,  130 => 67,  128 => 66,  125 => 65,  113 => 56,  109 => 54,  107 => 53,  104 => 52,  91 => 42,  87 => 40,  85 => 39,  82 => 38,  69 => 28,  65 => 26,  63 => 25,  60 => 24,  47 => 14,  43 => 12,  41 => 11,  34 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
