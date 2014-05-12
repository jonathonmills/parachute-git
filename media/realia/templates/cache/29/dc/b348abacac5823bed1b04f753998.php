<?php

/* single-agent.twig */
class __TwigTemplate_29dcb348abacac5823bed1b04f753998 extends Twig_Template
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
        echo "    <h1 class=\"page-header\">";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "post_title"), "html", null, true);
        echo "</h1>

\t<div class=\"agent\">
\t    <div class=\"row\">
\t        <div class=\"image span2\">
\t            <a href=\"";
        // line 9
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method")), "method"), "html", null, true);
        echo "\">
\t                ";
        // line 10
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method")), "method")) {
            // line 11
            echo "\t                    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo $this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method")), "method");
            echo "
\t                ";
        } else {
            // line 13
            echo "\t                    <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/agent-tmp.png\" alt=\"";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
            echo "\">
\t                ";
        }
        // line 15
        echo "\t            </a>
\t        </div><!-- /.image -->

\t        <div class=\"body span4\">
\t            ";
        // line 19
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_wp_, "do_shortcode", array(0 => $this->getAttribute($_wp_, "apply_filters", array(0 => "the_content", 1 => $this->getAttribute($_post_, "post_content")), "method")), "method");
        echo "
\t        </div><!-- /.body -->

\t        <div class=\"info span3\">
\t            <div class=\"box\">
\t                <div class=\"phone\">
\t                    ";
        // line 25
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method"), 1 => "_agent_mobile", 2 => true), "method"), "html", null, true);
        echo "
\t                </div><!-- /.phone -->
\t                <div class=\"office\">
\t                    ";
        // line 28
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method"), 1 => "_agent_phone", 2 => true), "method"), "html", null, true);
        echo "
\t                </div><!-- /.office -->

\t                <div class=\"email\">
\t                    <a href=\"mailto:";
        // line 32
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method"), 1 => "_agent_email", 2 => true), "method"), "html", null, true);
        echo "\">
\t                        ";
        // line 33
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_wp_, "get_the_ID", array(), "method"), 1 => "_agent_email", 2 => true), "method"), "html", null, true);
        echo "
\t                    </a>
\t                </div><!-- /.email -->
\t            </div><!-- /.box -->
\t        </div><!-- /.info -->
\t    </div><!-- /.row -->
\t</div><!-- /.agent -->

    ";
        // line 41
        if (isset($context["properties"])) { $_properties_ = $context["properties"]; } else { $_properties_ = null; }
        if ($_properties_) {
            // line 42
            echo "        <hr>

        <h2 class=\"page-header\">";
            // line 44
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Assigned Properties", 1 => "aviators"), "method"), "html", null, true);
            echo "</h2>

        <div class=\"properties-rows\">
            <div class=\"row\">
                ";
            // line 48
            if (isset($context["properties"])) { $_properties_ = $context["properties"]; } else { $_properties_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_properties_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 49
                echo "                    ";
                $this->env->loadTemplate("properties/property-row.twig")->display($context);
                // line 50
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 51
            echo "            </div><!-- /.row -->
        </div><!-- /.properties -->
    ";
        }
    }

    public function getTemplateName()
    {
        return "single-agent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 51,  151 => 50,  148 => 49,  130 => 48,  122 => 44,  118 => 42,  115 => 41,  103 => 33,  98 => 32,  90 => 28,  83 => 25,  72 => 19,  66 => 15,  56 => 13,  49 => 11,  46 => 10,  41 => 9,  31 => 4,  28 => 3,);
    }
}
