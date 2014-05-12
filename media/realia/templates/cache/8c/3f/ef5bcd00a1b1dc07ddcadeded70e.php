<?php

/* content.twig */
class __TwigTemplate_8c3fef5bcd00a1b1dc07ddcadeded70e extends Twig_Template
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
        echo "<article id=\"post-";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_ID", array(), "method"), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, aviators_templates_helpers_post_class(), "html", null, true);
        echo ">
    ";
        // line 3
        echo "    <header class=\"entry-header\">

        ";
        // line 5
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "aviators_entry_meta", array(), "method") || $this->getAttribute($_wp_, "aviators_edit_post_link", array(), "method"))) {
            // line 6
            echo "            <div class=\"entry-meta\">
                ";
            // line 7
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_entry_meta", array(), "method"), "html", null, true);
            echo "
                ";
            // line 8
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_edit_post_link", array(), "method"), "html", null, true);
            echo "
            </div><!-- .entry-meta -->
        ";
        }
        // line 11
        echo "
        ";
        // line 12
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_single", array(), "method")) {
            // line 13
            echo "            <h1 class=\"page-header entry-title\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_title", array(), "method"), "html", null, true);
            echo "</h1>
        ";
        } elseif ($this->getAttribute($_wp_, "is_front_page", array(), "method")) {
            // line 15
            echo "\t\t<br/><br/>
\t\t";
        } else {
            // line 17
            echo "\t\t<h1 class=\"page-header entry-title\">
                <a href=\"";
            // line 18
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_permalink", array(), "method"), "html", null, true);
            echo "\" rel=\"bookmark\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_title", array(), "method"), "html", null, true);
            echo "</a>
            </h1>
        ";
        }
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "has_post_thumbnail", array(), "method") && (!$this->getAttribute($_wp_, "post_password_required", array(), "method")))) {
            // line 24
            echo "            <div class=\"entry-thumbnail\">
                ";
            // line 25
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_post_thumbnail", array(), "method"), "html", null, true);
            echo "
            </div><!-- /.entry-thumbnail -->
        ";
        }
        // line 28
        echo "    </header><!-- .entry-header -->

    ";
        // line 31
        echo "    ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_search", array(), "method")) {
            // line 32
            echo "        <div class=\"entry-summary\">
            ";
            // line 33
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_excerpt", array(), "method"), "html", null, true);
            echo "
        </div><!-- .entry-summary -->
    ";
        } else {
            // line 36
            echo "        <div class=\"entry-content\">
            ";
            // line 37
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_the_content", array(), "method"), "html", null, true);
            echo "
            ";
            // line 38
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_link_pages", array(), "method"), "html", null, true);
            echo "
        </div><!-- .entry-content -->
    ";
        }
        // line 41
        echo "</article><!-- /#post -->
";
    }

    public function getTemplateName()
    {
        return "content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 41,  122 => 38,  117 => 37,  114 => 36,  107 => 33,  104 => 32,  100 => 31,  96 => 28,  89 => 25,  86 => 24,  82 => 23,  79 => 21,  69 => 18,  66 => 17,  62 => 15,  55 => 13,  52 => 12,  49 => 11,  42 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 3,  19 => 1,);
    }
}
