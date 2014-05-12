<?php

/* properties/widget.twig */
class __TwigTemplate_5dd220c62a906fd3d38ee630ccd6652d extends Twig_Template
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
        echo (isset($context["before_widget"]) ? $context["before_widget"] : null);
        echo "

";
        // line 3
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 4
            echo "    ";
            echo (isset($context["before_title"]) ? $context["before_title"] : null);
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo (isset($context["after_title"]) ? $context["after_title"] : null);
            echo "
";
        }
        // line 6
        echo "
<div class=\"content\">
    ";
        // line 8
        if ((isset($context["properties"]) ? $context["properties"] : null)) {
            // line 9
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 10
                echo "            <div class=\"property\">
                <div class=\"image\">
                    <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
                echo "\"></a>
                    ";
                // line 13
                if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method")) {
                    // line 14
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aq_resize", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_attachment_url", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_thumbnail_id", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), 1 => "full"), "method"), 1 => 240), "method"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 16
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
                    echo "/assets/img/property-tmp-small.png\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
                    echo "\">
                    ";
                }
                // line 18
                echo "                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
                echo "\">
                                ";
                // line 24
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_title"), 0)) {
                    // line 25
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_title"), 0), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 27
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
                    echo "
                                ";
                }
                // line 29
                echo "                            </a></h3>
                    </div>
                    <!-- /.title -->

                    <div class=\"location\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "location"), 0), "name"), "html", null, true);
                echo "</div>
                    <!-- /.location -->

                    <div class=\"price\">
                        ";
                // line 37
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom"), "text"), 0)) {
                    // line 38
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom"), "text"), 0), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 40
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price"), 0)), "method"), "html", null, true);
                    echo " ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0)) {
                        // line 41
                        echo "                                <span class=\"suffix\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0), "html", null, true);
                        echo "</span>";
                    }
                    // line 42
                    echo "                        ";
                }
                // line 43
                echo "                    </div>
                    <!-- /.price -->
                </div>
                <!-- /.wrapper -->
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 49
            echo "    ";
        } else {
            // line 50
            echo "        <p>
            ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "No featured properties found.", 1 => "aviators"), "method"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 54
        echo "</div><!-- /.content -->

";
        // line 56
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
    }

    public function getTemplateName()
    {
        return "properties/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  153 => 54,  147 => 51,  144 => 50,  141 => 49,  130 => 43,  127 => 42,  122 => 41,  117 => 40,  111 => 38,  109 => 37,  102 => 33,  96 => 29,  90 => 27,  84 => 25,  82 => 24,  78 => 23,  71 => 18,  63 => 16,  55 => 14,  53 => 13,  49 => 12,  45 => 10,  40 => 9,  38 => 8,  34 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
