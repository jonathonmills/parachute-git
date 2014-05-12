<?php

/* shortcodes/content_box.twig */
class __TwigTemplate_2d47440ec064240bcbc21c388daf9c92 extends Twig_Template
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
        echo "<div class=\"content-box\">
\t<div class=\"row\">
\t\t";
        // line 3
        if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
        if ($_icon_) {
            // line 4
            echo "\t\t\t<div class=\"icon span1\">
\t\t\t\t<img src=\"";
            // line 5
            if (isset($context["icon"])) { $_icon_ = $context["icon"]; } else { $_icon_ = null; }
            echo twig_escape_filter($this->env, $_icon_, "html", null, true);
            echo "\" alt=\"";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            echo "\">
\t\t\t</div>
\t\t";
        }
        // line 8
        echo "
\t\t<div class=\"content span";
        // line 9
        if (isset($context["columns_for_content"])) { $_columns_for_content_ = $context["columns_for_content"]; } else { $_columns_for_content_ = null; }
        echo twig_escape_filter($this->env, $_columns_for_content_, "html", null, true);
        echo "\">
\t\t\t";
        // line 10
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 11
            echo "\t\t\t\t<h3>";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            echo "</h3>
\t\t\t";
        }
        // line 13
        echo "
\t\t\t";
        // line 14
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $_content_, "html", null, true);
        echo "
\t\t</div><!-- /.content -->
\t</div><!-- /.row -->
</div><!-- /.content-box -->";
    }

    public function getTemplateName()
    {
        return "shortcodes/content_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  57 => 13,  50 => 11,  47 => 10,  42 => 9,  39 => 8,  29 => 5,  26 => 4,  23 => 3,  19 => 1,);
    }
}
