<?php

/* archive-agent.twig */
class __TwigTemplate_0a7b6ddafed2fa7eb3557ad5a4d683ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-fullwidth.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-fullwidth.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"page-header\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Agents", 1 => "aviators"), "method"), "html", null, true);
        echo "</h1>

    <div class=\"our-agents-large\">
        ";
        // line 7
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "have_posts", array(), "method")) {
            // line 8
            echo "            ";
            if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_posts_);
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 9
                echo "                ";
                if (isset($context["wp_query"])) { $_wp_query_ = $context["wp_query"]; } else { $_wp_query_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_query_, "the_post", array(), "method"), "html", null, true);
                echo "
                ";
                // line 10
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_part", array(0 => "content-agent", 1 => $this->getAttribute($_wp_, "get_post_format", array(), "method")), "method"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 12
            echo "        ";
        } else {
            // line 13
            echo "            ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_part", array(0 => "content", 1 => "none"), "method"), "html", null, true);
            echo "
        ";
        }
        // line 15
        echo "    </div><!-- /.our-agents-large -->

    ";
        // line 17
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_paging_nav", array(), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "archive-agent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  73 => 15,  66 => 13,  63 => 12,  54 => 10,  48 => 9,  42 => 8,  39 => 7,  31 => 4,  28 => 3,);
    }
}
