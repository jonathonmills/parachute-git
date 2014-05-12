<?php

/* layout.twig */
class __TwigTemplate_f20aa60bdc189869e1d6c67dae342e1a extends Twig_Template
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
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "sidebar-primary"), "method")) {
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
        if (($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "sidebar-primary"), "method") || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "property-detail"), "method"))) {
            // line 21
            echo "                <div class=\"sidebar span3\">
                    ";
            // line 22
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "is_singular", array(0 => "property"), "method")) {
                // line 23
                echo "                        ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "property-detail"), "method"))) {
                }
                // line 24
                echo "                    ";
            }
            // line 25
            echo "
                    ";
            // line 26
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "sidebar-primary"), "method"), "html", null, true);
            echo "
                </div><!-- /#sidebar -->
            ";
        }
        // line 29
        echo "        </div><!-- /.row -->

        ";
        // line 31
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "content-bottom"), "method")) {
            // line 32
            echo "            ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "content-bottom"), "method"), "html", null, true);
            echo "
        ";
        }
        // line 34
        echo "    </div><!-- /.container -->

    ";
        // line 36
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "bottom"), "method")) {
            echo "    
        ";
            // line 37
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "bottom"), "method"), "html", null, true);
            echo "
    ";
        }
        // line 39
        echo "</div><!-- /#content -->

";
        // line 41
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_footer", array(), "method"), "html", null, true);
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 17,  135 => 41,  131 => 39,  125 => 37,  120 => 36,  116 => 34,  109 => 32,  106 => 31,  102 => 29,  95 => 26,  92 => 25,  89 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  71 => 18,  69 => 17,  60 => 16,  57 => 15,  50 => 13,  47 => 12,  42 => 10,  37 => 7,  30 => 5,  27 => 4,  20 => 1,  63 => 16,  61 => 15,  58 => 14,  56 => 13,  49 => 11,  46 => 10,  44 => 11,  38 => 6,  31 => 4,  28 => 3,);
    }
}
