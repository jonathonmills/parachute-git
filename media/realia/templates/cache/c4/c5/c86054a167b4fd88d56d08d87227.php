<?php

/* properties/slider.twig */
class __TwigTemplate_c4c5c86054a167b4fd88d56d08d87227 extends Twig_Template
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
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_slides", 2 => true), "method")) {
            // line 2
            echo "    <div class=\"carousel property\">
        <div class=\"preview\">
            <a href=\"";
            // line 4
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_slides", 2 => true), "method"), 0), "imgurl"), "html", null, true);
            echo "\" class=\"fancybox\">
                <img src=\"";
            // line 5
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_slides", 2 => true), "method"), 0), "imgurl"), "html", null, true);
            echo "\" alt=\"\">
            </a>
        </div><!-- /.preview -->

        <div class=\"content\">
            <ul>
                ";
            // line 11
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_slides", 2 => true), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 12
                echo "                    ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ($this->getAttribute($_loop_, "first")) {
                    // line 13
                    echo "                        <li class=\"active\">
                    ";
                } else {
                    // line 15
                    echo "                        <li>
                    ";
                }
                // line 17
                echo "                        <img src=\"";
                if (isset($context["slide"])) { $_slide_ = $context["slide"]; } else { $_slide_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_slide_, "imgurl"), "html", null, true);
                echo "\" alt=\"\">
                    </li>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 20
            echo "            </ul>

            <a id=\"carousel-prev\" href=\"#\">";
            // line 22
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Previous", 1 => "aviators"), "method"), "html", null, true);
            echo "</a>
            <a id=\"carousel-next\" href=\"#\">";
            // line 23
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Next", 1 => "aviators"), "method"), "html", null, true);
            echo "</a>
        </div><!-- /.content -->
    </div><!-- /.carousel -->
";
        }
    }

    public function getTemplateName()
    {
        return "properties/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  98 => 22,  94 => 20,  67 => 13,  23 => 2,  39 => 6,  33 => 5,  25 => 3,  22 => 2,  19 => 1,  140 => 17,  135 => 41,  131 => 39,  125 => 37,  120 => 36,  116 => 34,  109 => 32,  106 => 31,  102 => 29,  95 => 26,  92 => 25,  89 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 17,  71 => 15,  69 => 17,  60 => 16,  57 => 15,  50 => 13,  47 => 12,  42 => 10,  37 => 7,  30 => 5,  27 => 4,  20 => 1,  63 => 12,  61 => 15,  58 => 14,  56 => 13,  49 => 9,  46 => 10,  44 => 11,  38 => 6,  31 => 4,  28 => 4,);
    }
}
