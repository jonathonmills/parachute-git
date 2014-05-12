<?php

/* helpers/topbar.twig */
class __TwigTemplate_a520115a3df17779efba4db95e4eda7f extends Twig_Template
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
        if ((($this->getAttribute($_wp_, "get_theme_mod", array(0 => "topbar_breadcrumb_is_hidden"), "method") == "") || ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "topbar_user_links_is_hidden"), "method") == ""))) {
            // line 2
            echo "    <div class=\"breadcrumb-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    ";
            // line 7
            echo "                    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "topbar_breadcrumb_is_hidden"), "method") == "")) {
                // line 8
                echo "                        <div class=\"breadcrumb pull-left\">
                            ";
                // line 9
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ($this->getAttribute($_wp_, "function_exists", array(0 => "bcn_display"), "method")) {
                    // line 10
                    echo "                                ";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "bcn_display"), "html", null, true);
                    echo "
                            ";
                }
                // line 12
                echo "                        </div><!-- /.breadcrumb -->
                    ";
            }
            // line 14
            echo "
                    ";
            // line 16
            echo "                    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "topbar_user_links_is_hidden"), "method") == "")) {
                // line 17
                echo "                        <div class=\"account pull-right\">
                            ";
                // line 18
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ($this->getAttribute($_wp_, "is_user_logged_in", array(), "method")) {
                    // line 19
                    echo "                                ";
                    if (isset($context["authenticated_menu"])) { $_authenticated_menu_ = $context["authenticated_menu"]; } else { $_authenticated_menu_ = null; }
                    echo $_authenticated_menu_;
                    echo "
                            ";
                } else {
                    // line 21
                    echo "                                ";
                    if (isset($context["anonymous_menu"])) { $_anonymous_menu_ = $context["anonymous_menu"]; } else { $_anonymous_menu_ = null; }
                    echo $_anonymous_menu_;
                    echo "
                            ";
                }
                // line 22
                echo "                        
                        </div>
                    ";
            }
            // line 25
            echo "                </div><!-- /.span12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb-wrapper -->
";
        }
    }

    public function getTemplateName()
    {
        return "helpers/topbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  69 => 21,  62 => 19,  56 => 17,  52 => 16,  49 => 14,  38 => 10,  35 => 9,  32 => 8,  28 => 7,  22 => 2,  510 => 190,  508 => 189,  506 => 188,  504 => 187,  500 => 186,  494 => 184,  472 => 164,  465 => 162,  462 => 161,  459 => 160,  448 => 156,  443 => 155,  440 => 154,  437 => 153,  434 => 152,  424 => 149,  419 => 148,  416 => 147,  413 => 146,  410 => 145,  399 => 141,  394 => 140,  391 => 139,  388 => 138,  385 => 137,  378 => 135,  375 => 134,  372 => 133,  361 => 129,  356 => 128,  353 => 127,  350 => 126,  346 => 124,  336 => 118,  332 => 116,  328 => 115,  325 => 113,  321 => 111,  314 => 108,  311 => 107,  307 => 106,  304 => 104,  296 => 100,  291 => 99,  288 => 98,  284 => 97,  281 => 95,  278 => 94,  274 => 92,  271 => 91,  264 => 88,  261 => 87,  257 => 86,  253 => 85,  250 => 83,  247 => 82,  239 => 78,  231 => 77,  228 => 76,  224 => 75,  220 => 74,  215 => 70,  205 => 68,  195 => 66,  192 => 65,  184 => 64,  181 => 63,  175 => 60,  163 => 50,  161 => 49,  124 => 42,  117 => 39,  114 => 38,  110 => 36,  107 => 35,  104 => 34,  94 => 32,  91 => 31,  88 => 30,  81 => 25,  78 => 27,  73 => 25,  66 => 22,  59 => 18,  53 => 17,  45 => 12,  37 => 9,  30 => 6,  23 => 3,  19 => 1,);
    }
}
