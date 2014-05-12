<?php

/* helpers/sidebar-bottom.twig */
class __TwigTemplate_1977f51a142de39400d6d7b30526e20a extends Twig_Template
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "bottom-1"), "method") || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "bottom-2"), "method")) || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "bottom-3"), "method"))) {
            // line 2
            echo "    <div class=\"bottom-wrapper\">
        <div class=\"bottom container\">
            <div class=\"bottom-inner row\">
                <div class=\"span4\">
                    ";
            // line 6
            if ((!aviators_templates_helpers_dynamic_sidebar("bottom-1"))) {
                // line 7
                echo "                    ";
            }
            // line 8
            echo "                </div>

                <div class=\"span4\">
                    ";
            // line 11
            if ((!aviators_templates_helpers_dynamic_sidebar("bottom-2"))) {
                // line 12
                echo "                    ";
            }
            // line 13
            echo "                </div>

                <div class=\"span4\">
                    ";
            // line 16
            if ((!aviators_templates_helpers_dynamic_sidebar("bottom-3"))) {
                // line 17
                echo "                    ";
            }
            // line 18
            echo "                </div>
            </div><!-- /.bottom-inner -->
        </div><!-- /.bottom -->
    </div><!-- /.bottom-wrapper -->
";
        }
    }

    public function getTemplateName()
    {
        return "helpers/sidebar-bottom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 17,  48 => 16,  43 => 13,  40 => 12,  38 => 11,  33 => 8,  30 => 7,  28 => 6,  22 => 2,  19 => 1,);
    }
}
