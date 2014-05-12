<?php

/* content-agent.twig */
class __TwigTemplate_ff8fc0175c04bfc4e427647e5165bcf5 extends Twig_Template
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
        echo "<div class=\"agent\">
    <div class=\"row\">
        <div class=\"image span2\">
            <a href=\"";
        // line 4
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method")), "method"), "html", null, true);
        echo "\">
                ";
        // line 5
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method")), "method")) {
            // line 6
            echo "                    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo $this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method")), "method");
            echo "
                ";
        } else {
            // line 8
            echo "                    <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/agent-tmp.png\" alt=\"";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
            echo "\">
                ";
        }
        // line 10
        echo "            </a>
        </div><!-- /.image -->

        <div class=\"body span6\">
            <h3>
                <a href=\"";
        // line 15
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method")), "method"), "html", null, true);
        echo "\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_title", array(), "method"), "html", null, true);
        echo "</a>
            </h3>

            ";
        // line 18
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_content", array(), "method"), "html", null, true);
        echo "
        </div><!-- /.body -->

        <div class=\"info span4\">
            <div class=\"box\">
                <div class=\"phone\">
                    ";
        // line 24
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method"), 1 => "_agent_mobile", 2 => true), "method"), "html", null, true);
        echo "
                </div><!-- /.phone -->
                <div class=\"office\">
                    ";
        // line 27
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method"), 1 => "_agent_phone", 2 => true), "method"), "html", null, true);
        echo "
                </div><!-- /.office -->

                <div class=\"email\">
                    <a href=\"mailto:";
        // line 31
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method"), 1 => "_agent_email", 2 => true), "method"), "html", null, true);
        echo "\">
                        ";
        // line 32
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method"), 1 => "_agent_email", 2 => true), "method"), "html", null, true);
        echo "
                    </a>
                </div><!-- /.email -->
            </div><!-- /.box -->
        </div><!-- /.info -->
    </div><!-- /.row -->
</div><!-- /.agent -->";
    }

    public function getTemplateName()
    {
        return "content-agent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  91 => 31,  83 => 27,  76 => 24,  66 => 18,  56 => 15,  49 => 10,  39 => 8,  32 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
