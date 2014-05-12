<?php

/* submission/index.twig */
class __TwigTemplate_2f1dcc326851feea1ab22bea76737f9c extends Twig_Template
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
        echo "<div class=\"clearfix\">
    <div class=\"pull-left\">
        <h1 class=\"page-header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_title", array(), "method"), "html", null, true);
        echo "</h1>
    </div>
    <!-- /.pull-left -->

    <div class=\"pull-right\">
        <a href=\"?action=add\" class=\"btn btn-primary arrow-right add-submission\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Add new submission", 1 => "aviators"), "method"), "html", null, true);
        echo "</a>
    </div>
    <!-- /.pull-right -->
</div><!-- /.clearfix -->

";
        // line 13
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "have_posts", array(), "method")) {
            // line 14
            echo "    <table class=\"table submissions-table\">
        <thead>
        <tr>
            <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Image", 1 => "aviators"), "method"), "html", null, true);
            echo "</th>
            <th>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Title", 1 => "aviators"), "method"), "html", null, true);
            echo "</th>
            <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Created", 1 => "aviators"), "method"), "html", null, true);
            echo "</th>
            <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Status", 1 => "aviators"), "method"), "html", null, true);
            echo "</th>
            <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Actions", 1 => "aviators"), "method"), "html", null, true);
            echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp_query"]) ? $context["wp_query"] : null), "the_post", array(), "method"), "html", null, true);
                echo "
            <tr>
                <td class=\"thumbnail\">
                    ";
                // line 29
                if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "has_post_thumbnail", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")), "method")) {
                    // line 30
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")), "method"), "html", null, true);
                    echo "\">
                            ";
                    // line 31
                    echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "admin-thumb"), "method");
                    echo "
                        </a>
                    ";
                } else {
                    // line 34
                    echo "                        -
                    ";
                }
                // line 36
                echo "                </td>

                <td class=\"title\">
                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_title"), "html", null, true);
                echo "</a>
                </td>

                <td class=\"post-date\">
                    ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "mysql2date", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_option", array(0 => "date_format"), "method"), 1 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_date")), "method"), "html", null, true);
                echo "
                </td>

                <td class=\"status\">
                    <strong class=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_status", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_statuses"), $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_status", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")), "method"), array(), "array"), "html", null, true);
                echo "</strong>
                </td>

                <td class=\"actions\">

                    ";
                // line 52
                $context["links"] = $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_properties_property_get_actions", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")), "method");
                // line 53
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 54
                    echo "                        ";
                    echo (isset($context["link"]) ? $context["link"] : null);
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 56
                echo "                </td>
            </tr>
            <tr class=\"sep\">
                <td colspan=\"5\"></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 62
            echo "        </tbody>
    </table>

    ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_paging_nav", array(), "method"), "html", null, true);
            echo "
";
        } else {
            // line 67
            echo "    <p>
        ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "No submisssions found.", 1 => "aviators"), "method"), "html", null, true);
            echo "
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "submission/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 68,  164 => 67,  159 => 65,  154 => 62,  143 => 56,  134 => 54,  129 => 53,  127 => 52,  117 => 47,  110 => 43,  101 => 39,  96 => 36,  92 => 34,  86 => 31,  81 => 30,  79 => 29,  70 => 26,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  41 => 14,  39 => 13,  31 => 8,  23 => 3,  19 => 1,);
    }
}
