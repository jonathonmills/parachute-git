<?php

/* archive.twig */
class __TwigTemplate_dfb9fc9a7a9750f0a8ca56b3599a05d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "have_posts", array(), "method")) {
            // line 5
            echo "        <header class=\"archive-header\">
            <h1 class=\"page-header archive-title\">
                ";
            // line 7
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "is_day", array(), "method")) {
                // line 8
                echo "                    ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "printf", array(0 => $this->getAttribute($_wp_, "__", array(0 => "Daily Archives: %s", 1 => "aviators"), "method"), 1 => $this->getAttribute($_wp_, "get_the_date", array(), "method")), "method"), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute($_wp_, "is_month", array(), "method")) {
                // line 10
                echo "                    ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "printf", array(0 => $this->getAttribute($_wp_, "__", array(0 => "Monthly Archives: %s", 1 => "aviators"), "method"), 1 => $this->getAttribute($_wp_, "get_the_date", array(0 => $this->getAttribute($_wp_, "__", array(0 => "F Y", 1 => "monthly archives date format", 2 => "aviators"), "method")), "method")), "method"), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute($_wp_, "is_year", array(), "method")) {
                // line 12
                echo "                    ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "printf", array(0 => $this->getAttribute($_wp_, "__", array(0 => "Yearly Archives: %s", 1 => "twentythirteen"), "method"), 1 => $this->getAttribute($_wp_, "get_the_date", array(0 => $this->getAttribute($_wp_, "__", array(0 => "Y", 1 => "yearly archives date format", 2 => "aviators"), "method")), "method")), "method"), "html", null, true);
                echo "
                ";
            } else {
                // line 14
                echo "                    ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Archives", 1 => "aviators"), "method"), "html", null, true);
                echo "
                ";
            }
            // line 16
            echo "            </h1><!-- /.page-header -->
        </header><!-- .archive-header -->
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $this->env->loadTemplate("helpers/content-loop.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "archive.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  75 => 19,  70 => 16,  63 => 14,  56 => 12,  49 => 10,  42 => 8,  39 => 7,  35 => 5,  31 => 4,  28 => 3,);
    }
}
