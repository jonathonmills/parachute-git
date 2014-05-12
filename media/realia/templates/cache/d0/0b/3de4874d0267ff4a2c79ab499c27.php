<?php

/* 404.twig */
class __TwigTemplate_d00b3de4874d0267ff4a2c79ab499c27 extends Twig_Template
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
        echo "\t<div class=\"container\">
    <div id=\"main\">
        <div class=\"not-found\">
            <strong>404</strong>
            <h1>";
        // line 8
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "The page cannot be found", 1 => "aviators"), "method"), "html", null, true);
        echo "</h1>
            <hr>
            
            ";
        // line 11
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_search_form", array(), "method"), "html", null, true);
        echo "            

            <p>
                Please use search box or <a href=\"javascript: window.history.go(-1)\">return back</a>
            </p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  37 => 8,  31 => 4,  28 => 3,);
    }
}
