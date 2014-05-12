<?php

/* submission/edit.twig */
class __TwigTemplate_636a545000b63e70bd23d8c147579999 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_title"), "html", null, true);
        echo "</h1>

<form method=\"post\" action=\"\" enctype=\"multipart/form-data\" class=\"submission-form row\">

    ";
        // line 5
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content");
        echo "
    <div class=\"span4\">
        <div class=\"submission-box clearfix\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "metabox"), "_setup", array(), "method"), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"form-actions\">
        ";
        // line 13
        $context["value"] = $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Save", 1 => "aviators"), "method");
        // line 14
        echo "        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "submission/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  41 => 13,  33 => 8,  27 => 5,  19 => 1,);
    }
}
