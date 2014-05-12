<?php

/* comments.twig */
class __TwigTemplate_496178daf5d3d067af7e7155423aebd3 extends Twig_Template
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
        if ((!$this->getAttribute($_wp_, "post_password_required", array(), "method"))) {
            // line 2
            echo "    <div id=\"comments\" class=\"comments-area\">
        ";
            // line 3
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "have_comments", array(), "method")) {
                // line 4
                echo "            <h2 class=\"comments-title\">";
                if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                echo $_title_;
                echo "</h2>

            <ol class=\"comment-list\">
                ";
                // line 7
                echo twig_escape_filter($this->env, aviators_templates_helpers_wp_list_comments("array('style' => 'ol', 'format' => 'html5', 'short_ping' => 'true', 'avatar_size' => 74 )"), "html", null, true);
                echo "
            </ol>

            ";
                // line 10
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ((($this->getAttribute($_wp_, "get_comment_pages_count", array(), "method") > 1) && $this->getAttribute($_wp_, "get_option", array(0 => "page_comments"), "method"))) {
                    // line 11
                    echo "                <nav class=\"navigation comment-navigation\" role=\"navigation\">
                    <h1 class=\"screen-reader-text section-heading\">";
                    // line 12
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Comment navigation", 1 => "aviators"), "method"), "html", null, true);
                    echo "</h1>
                    <div class=\"nav-previous\">";
                    // line 13
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "previous_comments_link", array(0 => $this->getAttribute($_wp_, "__", array(0 => "&larr; Older Comments", 1 => "aviators"), "method")), "method"), "html", null, true);
                    echo "</div>
                    <div class=\"nav-next\">";
                    // line 14
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "next_comments_link", array(0 => $this->getAttribute($_wp_, "__", array(0 => "Newer Comments &rarr;", 1 => "aviators"), "method")), "method"), "html", null, true);
                    echo "</div>
                </nav><!-- .comment-navigation -->
            ";
                }
                // line 17
                echo "
            ";
                // line 18
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (((!$this->getAttribute($_wp_, "comments_open", array(), "method")) && $this->getAttribute($_wp_, "get_comments_number", array(), "method"))) {
                    // line 19
                    echo "                <p class=\"no-comments\">";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Comments are closed.", 1 => "aviators"), "method"), "html", null, true);
                    echo "</p>
            ";
                }
                // line 21
                echo "        ";
            }
            // line 22
            echo "
        ";
            // line 23
            echo twig_escape_filter($this->env, aviators_templates_helpers_comment_form("array('format' => 'html5')"), "html", null, true);
            echo "
    </div><!-- /#comments -->
";
        }
    }

    public function getTemplateName()
    {
        return "comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  81 => 22,  78 => 21,  71 => 19,  68 => 18,  65 => 17,  58 => 14,  53 => 13,  48 => 12,  45 => 11,  42 => 10,  36 => 7,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
