<?php

/* properties/form-content.twig */
class __TwigTemplate_da9d539f680f75a47c66702d706c08a8 extends Twig_Template
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
        echo "<div class=\"span4\">
    <div class=\"submission-box\">
        <input type=\"hidden\" name=\"post_type\">

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"address\">
                ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Featured image", 1 => "aviators"), "method"), "html", null, true);
        echo "
            </label>

            <div class=\"controls\">
                ";
        // line 11
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "has_post_thumbnail", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")), "method")) {
            // line 12
            echo "                    ";
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "admin-thumb"), "method");
            echo "
                    <a href=\"?action=delete-thumbnail&id=";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Remove", 1 => "aviators"), "method"), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 15
            echo "                    <div class=\"featured-image\">
                        <input type=\"file\" name=\"featured_image\">
                    </div>
                ";
        }
        // line 19
        echo "            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"address\">
                ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Gallery", 1 => "aviators"), "method"), "html", null, true);
        echo "
            </label>

            <div class=\"controls\">
                <script>
                    jQuery('document').ready(function () {

                        jQuery('#add-more-featured-image').click(function () {
                            var wrapper = jQuery('#add-more-wrapper-order');
                            var count = jQuery('li', wrapper).size();
                            var context = jQuery('#add-more-wrapper-order').append('<li><input type=\"file\" name=\"_property_meta_slides_' + count + '\"><input class=\"order-value\" type=\"hidden\" name=\"_property_meta_slides_weight_' + count + '\" value=\"' + count + '\"><div class=\"actions\"><div class=\"drag\"></div><div class=\"remove\"></div></div></li>');
                            jQuery('.remove', context).click(function () {
                                jQuery(this).parent().parent().remove();
                            });
                        });

                        jQuery('.remove').click(function () {
                            jQuery(this).parent().parent().remove();
                        });

                        jQuery('#add-more-wrapper-order').sortable({
                            update: function (event, ui) {
                                var position = 0;
                                jQuery('#add-more-wrapper-order > li').each(function (index) {
                                    jQuery('.order-value', this).attr('value', position);
                                    position += 1;
                                })
                            }
                        });
                    });

                </script>

                <div id=\"add-more-wrapper\">
                    <ul id=\"add-more-wrapper-order\">
                        ";
        // line 59
        $context["count"] = 0;
        // line 60
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 61
            echo "                            <li class=\"img-container\"><img width=\"80\" height=\"80\" src=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "imgurl"), "html", null, true);
            echo "><input
                                        type=\"hidden\" name=\"_property_meta_slides_id_";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\"
                                        value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "imgurl"), "html", null, true);
            echo "\"> <input class=\"order-value\" type=\"hidden\"
                                                                           name=\"_property_meta_slides_weight_";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\"
                                                                           value=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\">

                                <div class=\"actions\">
                                    <div class=\"drag\"></div>
                                    <div class=\"remove\"></div>
                                </div>
                            </li>
                            ";
            // line 72
            $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
            // line 73
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 74
        echo "                    </ul>

                    <div class=\"button-wrapper\">
                        <button class=\"btn btn-primary\" id=\"add-more-featured-image\"
                                type=\"button\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Add more", 1 => "aviators"), "method"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"address\">
                ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Address", 1 => "aviators"), "method"), "html", null, true);
        echo "
            </label>

            <div class=\"controls\">
                <input type=\"text\" name=\"post_title\" size=\"30\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_title"), "html", null, true);
        echo "\" id=\"address\"
                       autocomplete=\"off\"
                       required=\"required\">
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\" for=\"description\">
                ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Description", 1 => "aviators"), "method"), "html", null, true);
        echo "
            </label>

            <div class=\"controls\">
                <textarea id=\"description\" class=\"wp-editor-area\" rows=\"10\" name=\"content\"
                          required=\"required\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_content"), "html", null, true);
        echo "</textarea>
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\">
                ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Type", 1 => "aviators"), "method"), "html", null, true);
        echo "
            </label>

            <div class=\"controls\">
                ";
        // line 113
        echo (isset($context["property_types"]) ? $context["property_types"] : null);
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\">
                ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Contract Type", 1 => "aviators"), "method"), "html", null, true);
        echo "
            </label>

            <div class=\"controls\">
                ";
        // line 123
        echo (isset($context["property_contracts"]) ? $context["property_contracts"] : null);
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            <label class=\"control-label\">
                ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Location", 1 => "aviators"), "method"), "html", null, true);
        echo "
            </label>

            <div class=\"controls\">
                ";
        // line 133
        echo (isset($context["property_locations"]) ? $context["property_locations"] : null);
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"span4\">
    <div class=\"control-group submission-box clearfix\">
        <label class=\"control-label\">
            ";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Amenities", 1 => "aviators"), "method"), "html", null, true);
        echo "
        </label>

        <div class=\"controls\">
            <ul class=\"unstyled\">
                ";
        // line 147
        echo (isset($context["amenities"]) ? $context["amenities"] : null);
        echo "
            </ul>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "properties/form-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 147,  244 => 142,  232 => 133,  225 => 129,  216 => 123,  209 => 119,  200 => 113,  193 => 109,  184 => 103,  176 => 98,  165 => 90,  158 => 86,  147 => 78,  141 => 74,  135 => 73,  133 => 72,  123 => 65,  119 => 64,  115 => 63,  111 => 62,  106 => 61,  101 => 60,  99 => 59,  61 => 24,  54 => 19,  48 => 15,  41 => 13,  36 => 12,  34 => 11,  27 => 7,  19 => 1,);
    }
}
