<?php

/* single.twig */
class __TwigTemplate_b18750e1984994d4a3e4115c187f3eb6 extends Twig_Template
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
            echo "        ";
            $this->env->loadTemplate("helpers/content-loop.twig")->display($context);
            // line 6
            echo "
        ";
            // line 7
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "comments_open", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method")), "method")) {
                // line 8
                echo "            ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "comments_template", array(), "method"), "html", null, true);
                echo "
        ";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
