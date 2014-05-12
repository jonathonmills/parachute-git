<?php

/* submission/add.twig */
class __TwigTemplate_082a2b9153e52d1facc38a17b1d7ee8f extends Twig_Template
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
        echo "<h1 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Add submission", 1 => "aviators"), "method"), "html", null, true);
        echo "</h1>

<form method=\"post\" action=\"\" enctype=\"multipart/form-data\" class=\"submission-form\">
    <div class=\"row\">

        ";
        // line 6
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content");
        echo "

        <div class=\"span4\">
            <div class=\"submission-box clearfix\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metabox"), "_setup", array(), "method"), "html", null, true);
        echo "
            </div>
        </div><!-- /.submission-box -->
    </div>


    ";
        // line 16
        if ((!twig_test_empty((isset($context["tos"]) ? $context["tos"] : null)))) {
            // line 17
            echo "        ";
            $context["value"] = $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Continue", 1 => "aviators"), "method");
            // line 18
            echo "        <a href=\"#legal-agreement\" role=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\">Save</a>

        <div id=\"legal-agreement\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"myModalLabel\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tos_page"]) ? $context["tos_page"] : null), "post_title"), "html", null, true);
            echo "</h3>
            </div>
            <div class=\"modal-body\">
                ";
            // line 26
            echo (isset($context["tos_content"]) ? $context["tos_content"] : null);
            echo "
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\"> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Close", 1 => "aviators"), "method"), "html", null, true);
            echo "  </button>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\">
            </div>
        </div>
    ";
        } else {
            // line 34
            echo "        <div class=\"form-actions\">
            ";
            // line 35
            $context["value"] = $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Save", 1 => "aviators"), "method");
            // line 36
            echo "            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 39
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "submission/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 39,  84 => 36,  82 => 35,  79 => 34,  72 => 30,  68 => 29,  62 => 26,  56 => 23,  49 => 18,  46 => 17,  44 => 16,  35 => 10,  28 => 6,  19 => 1,);
    }
}
