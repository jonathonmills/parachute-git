<?php

/* settings/fields/image.twig */
class __TwigTemplate_795fb8531ca83c8dd91a14d9d222adf3 extends Twig_Template
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
        echo "<input type=\"text\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "id"), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "id"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">

<a href=\"media-upload.php?tab=library&amp;TB_iframe=1&amp;width=640&amp;height=480\" class=\"mediabutton-img-n0 thickbox button {label:'Insert'}\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Select Media", 1 => "aviators"), "method"), "html", null, true);
        echo "
</a>

";
        // line 7
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "description")) {
            // line 8
            echo "    <p class=\"description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "description"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "settings/fields/image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  36 => 7,  30 => 4,  19 => 1,);
    }
}
