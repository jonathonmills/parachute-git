<?php

/* helpers/footer.twig */
class __TwigTemplate_e99cd5300f4b31b170dd80c217ae1084 extends Twig_Template
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
        echo "            </div><!-- /#wrapper-inner -->

            ";
        // line 3
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "bottom"), "method"), "html", null, true);
        echo "

            <div id=\"footer-wrapper\">
                ";
        // line 6
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (((($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-1"), "method") || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-2"), "method")) || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-3"), "method")) || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-4"), "method"))) {
            // line 7
            echo "                    <div id=\"footer-top\">
                        <div id=\"footer-top-inner\" class=\"container\">
                            <div class=\"row\">
                                <div class=\"span3\">
                                    ";
            // line 11
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-1"), "method"))) {
                // line 12
                echo "                                        ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "footer-1"), "method"), "html", null, true);
                echo "
                                    ";
            }
            // line 14
            echo "                                </div>

                                <div class=\"span3\">
                                    ";
            // line 17
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-2"), "method"))) {
                // line 18
                echo "                                        ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "footer-2"), "method"), "html", null, true);
                echo "
                                    ";
            }
            // line 20
            echo "                                </div>

                                <div class=\"span3\">
                                    ";
            // line 23
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-3"), "method"))) {
                // line 24
                echo "                                        ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "footer-3"), "method"), "html", null, true);
                echo "
                                    ";
            }
            // line 26
            echo "                                </div>

                                <div class=\"span3\">
                                    ";
            // line 29
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-4"), "method"))) {
                // line 30
                echo "                                        ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "footer-4"), "method"), "html", null, true);
                echo "
                                    ";
            }
            // line 32
            echo "                                </div>
                            </div><!-- /.row -->
                        </div><!-- /#footer-top-inner -->
                    </div><!-- /#footer-top -->
                ";
        }
        // line 37
        echo "
                <div id=\"footer\" class=\"footer container\">
                    <div id=\"footer-inner\">
                        <div class=\"row\">
                            <div class=\"span6 copyright\">
                                ";
        // line 42
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "footer-bottom-left"), "method"), "html", null, true);
        echo "
                            </div><!-- /.copyright -->

                            <div class=\"span6 share\">
                                <div class=\"content\">
                                    <ul class=\"menu nav\">
                                        ";
        // line 48
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "facebook", 2 => "is_hidden"), "method"))) {
            // line 49
            echo "                                            <li class=\"first leaf\">
                                                <a href=\"";
            // line 50
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "facebook", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"facebook\">Facebook</a>
                                            </li>
                                        ";
        }
        // line 53
        echo "
                                        ";
        // line 54
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "flickr", 2 => "is_hidden"), "method"))) {
            // line 55
            echo "                                            <li class=\"leaf\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "flickr", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"flickr\">Flickr</a></li>
                                        ";
        }
        // line 57
        echo "
                                        ";
        // line 58
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "google_plus", 2 => "is_hidden"), "method"))) {
            // line 59
            echo "                                            <li class=\"leaf\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "google_plus", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"google\">Google+</a></li>
                                        ";
        }
        // line 61
        echo "
                                        ";
        // line 62
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "linkedin", 2 => "is_hidden"), "method"))) {
            // line 63
            echo "                                            <li class=\"leaf\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "linkedin", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"linkedin\">LinkedIn</a></li>
                                        ";
        }
        // line 65
        echo "
                                        ";
        // line 66
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "twitter", 2 => "is_hidden"), "method"))) {
            // line 67
            echo "                                            <li class=\"leaf\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "twitter", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"twitter\">Twitter</a></li>
                                        ";
        }
        // line 69
        echo "
                                        ";
        // line 70
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "vimeo", 2 => "is_hidden"), "method"))) {
            // line 71
            echo "                                            <li class=\"last leaf\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "vimeo", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"vimeo\">Vimeo</a></li>
                                        ";
        }
        // line 73
        echo "                                    </ul>
                                </div><!-- /.content -->
                            </div><!-- /.span6 -->
                        </div><!-- /.row -->
                    </div><!-- /#footer-inner -->
                </div><!-- /#footer -->
            </div><!-- /#footer-wrapper -->
        </div><!-- /#wrapper-outer -->
    </div><!-- /#wrapper -->

    ";
        // line 83
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "general_palette_is_hidden"), "method") == "")) {
            // line 84
            echo "        ";
            $this->env->loadTemplate("helpers/palette.twig")->display($context);
            // line 85
            echo "    ";
        }
        // line 86
        echo "
    ";
        // line 87
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "google_analytics", 1 => "tracking", 2 => "code"), "method")) {
            // line 88
            echo "        <script type=\"text/javascript\">
            var _gaq=[[\"_setAccount\", \"";
            // line 89
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "google_analytics", 1 => "tracking", 2 => "code"), "method"), "html", null, true);
            echo "\"],[\"_trackPageview\"]];
            (function(d,t){ var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
                g.src=\"//www.google-analytics.com/ga.js\";
                s.parentNode.insertBefore(g,s) }(document,\"script\"));
        </script>
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        echo twig_escape_filter($this->env, aviators_templates_helpers_wp_footer(), "html", null, true);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "helpers/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 96,  236 => 95,  226 => 89,  223 => 88,  220 => 87,  217 => 86,  214 => 85,  211 => 84,  208 => 83,  196 => 73,  189 => 71,  186 => 70,  183 => 69,  176 => 67,  173 => 66,  170 => 65,  163 => 63,  160 => 62,  157 => 61,  150 => 59,  147 => 58,  144 => 57,  137 => 55,  134 => 54,  131 => 53,  124 => 50,  121 => 49,  118 => 48,  108 => 42,  101 => 37,  94 => 32,  87 => 30,  84 => 29,  79 => 26,  72 => 24,  69 => 23,  64 => 20,  57 => 18,  54 => 17,  49 => 14,  42 => 12,  39 => 11,  33 => 7,  30 => 6,  23 => 3,  19 => 1,);
    }
}
