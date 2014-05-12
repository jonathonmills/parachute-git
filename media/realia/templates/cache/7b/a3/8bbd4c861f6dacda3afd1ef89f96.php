<?php

/* layout-homepage.twig */
class __TwigTemplate_7ba38bbd4c861f6dacda3afd1ef89f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_header", array(), "method"), "html", null, true);
        echo "

<div id=\"content\" class=\"clearfix\">
    ";
        // line 4
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "top"), "method")) {
            // line 5
            echo "        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "top"), "method"), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 10
        $this->env->loadTemplate("helpers/messages.twig")->display($context);
        // line 11
        echo "
            ";
        // line 12
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "content-top"), "method")) {
            // line 13
            echo "                ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "content-top"), "method"), "html", null, true);
            echo "
            ";
        }
        // line 15
        echo "
            <div id=\"main\" class=\"";
        // line 16
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "sidebar-primary"), "method") && ($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "hide_sidebar"), "method") != "on"))) {
            echo "span9";
        } else {
            echo "span12";
        }
        echo "\">
                ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "            </div><!-- /#main -->

            ";
        // line 20
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "hide_sidebar"), "method") != "on")) {
            // line 21
            echo "                ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "sidebar-primary"), "method") || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "property-detail"), "method"))) {
                // line 22
                echo "                    <div class=\"sidebar span3\">
                        ";
                // line 23
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ($this->getAttribute($_wp_, "is_singular", array(0 => "property"), "method")) {
                    // line 24
                    echo "                            ";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "property-detail"), "method"))) {
                    }
                    // line 25
                    echo "                        ";
                }
                // line 26
                echo "
                        ";
                // line 27
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "sidebar-primary"), "method"), "html", null, true);
                echo "
                    </div><!-- /#sidebar -->
                ";
            }
            // line 30
            echo "            ";
        }
        // line 31
        echo "        </div><!-- /.row -->

        ";
        // line 33
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "content-bottom"), "method")) {
            // line 34
            echo "            ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "content-bottom"), "method"), "html", null, true);
            echo "
        ";
        }
        // line 36
        echo "    </div><!-- /.container -->

    ";
        // line 38
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "bottom"), "method")) {
            // line 39
            echo "        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "bottom"), "method"), "html", null, true);
            echo "
    ";
        }
        // line 41
        echo "</div><!-- /#content -->

";
        // line 43
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_footer", array(), "method"), "html", null, true);
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-homepage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 17,  141 => 43,  137 => 41,  130 => 39,  127 => 38,  123 => 36,  116 => 34,  113 => 33,  109 => 31,  106 => 30,  99 => 27,  96 => 26,  93 => 25,  88 => 24,  85 => 23,  82 => 22,  78 => 21,  75 => 20,  71 => 18,  69 => 17,  60 => 16,  57 => 15,  50 => 13,  47 => 12,  44 => 11,  42 => 10,  37 => 7,  30 => 5,  27 => 4,  20 => 1,  31 => 4,  28 => 3,);
    }
}
