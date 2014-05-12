<?php

/* helpers/messages.twig */
class __TwigTemplate_7ddf1131737fc368c4a23fd6d394aa4e extends Twig_Template
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
        echo "
";
        // line 2
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "aviators_flash_has_messages", array(), "method")) {
            // line 3
            echo "    <div class=\"span12\">
        ";
            // line 4
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "aviators_flash_get_messages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "            <div class=\"alert ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "level"), "html", null, true);
                echo "\">
                ";
                // line 6
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "message");
                echo "
            </div><!-- /.alert -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 9
            echo "    </div><!-- /.span12 -->
";
        }
    }

    public function getTemplateName()
    {
        return "helpers/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  33 => 5,  25 => 3,  22 => 2,  19 => 1,  140 => 17,  135 => 41,  131 => 39,  125 => 37,  120 => 36,  116 => 34,  109 => 32,  106 => 31,  102 => 29,  95 => 26,  92 => 25,  89 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  71 => 18,  69 => 17,  60 => 16,  57 => 15,  50 => 13,  47 => 12,  42 => 10,  37 => 7,  30 => 5,  27 => 4,  20 => 1,  63 => 16,  61 => 15,  58 => 14,  56 => 13,  49 => 9,  46 => 10,  44 => 11,  38 => 6,  31 => 4,  28 => 4,);
    }
}
