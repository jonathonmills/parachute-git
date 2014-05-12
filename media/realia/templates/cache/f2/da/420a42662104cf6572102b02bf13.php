<?php

/* shortcodes/faq.twig */
class __TwigTemplate_f2da420a42662104cf6572102b02bf13 extends Twig_Template
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
        echo "<div class=\"accordion\" id=\"faq";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $_category_, "html", null, true);
        echo "\">
    <div class=\"accordion-group\">
        ";
        // line 3
        if (isset($context["questions"])) { $_questions_ = $context["questions"]; } else { $_questions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_questions_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 4
            echo "            <div class=\"accordion-heading\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#faq";
            // line 5
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $_category_, "html", null, true);
            echo "\" href=\"#collapse";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $_category_, "html", null, true);
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\">
                    <span class=\"sign\"></span> ";
            // line 6
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_question_, "post_title"), "html", null, true);
            echo "
                </a>
            </div><!-- /.accordion-heading -->

            <div id=\"collapse";
            // line 10
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $_category_, "html", null, true);
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" class=\"accordion-body collapse\">
                <div class=\"accordion-inner\">
                    ";
            // line 12
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo $this->getAttribute($_question_, "post_content");
            echo "
                </div><!-- /.accordion-inner -->
            </div><!-- /.accordion-body -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "    </div><!-- /.accordion-group -->
</div><!-- /.accordion -->";
    }

    public function getTemplateName()
    {
        return "shortcodes/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 16,  73 => 12,  65 => 10,  57 => 6,  47 => 5,  44 => 4,  26 => 3,  19 => 1,);
    }
}
