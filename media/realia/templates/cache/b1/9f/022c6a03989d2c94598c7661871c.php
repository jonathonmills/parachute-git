<?php

/* layout-login-register.twig */
class __TwigTemplate_b19f022c6a03989d2c94598c7661871c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-fullwidth.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
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
        echo "    <div class=\"login-register\">
        <div class=\"row\">
            <div class=\"span4\">
                <ul class=\"tabs nav nav-tabs\">
                    <li ";
        // line 8
        if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
        if (($_active_ == "login")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#login\" data-toggle=\"tab\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Login", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                    <li ";
        // line 9
        if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
        if (($_active_ == "register")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"#register\" data-toggle=\"tab\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Register", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                </ul><!-- /.nav -->

                <div class=\"tab-content\">
                    <div class=\"tab-pane ";
        // line 13
        if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
        if (($_active_ == "login")) {
            echo "active";
        }
        echo "\" id=\"login\">
                        <form method=\"post\" action=\"";
        // line 14
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "/wp-login.php\">
                            <input type=\"hidden\" name=\"redirect_to\" value=\"";
        // line 15
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "\">
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputLoginLogin\">
                                    ";
        // line 18
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Login", 1 => "aviators"), "method"), "html", null, true);
        echo "
                                    <span class=\"form-required\">*</span>
                                </label>

                                <div class=\"controls\">
                                    <input type=\"text\" id=\"inputLoginLogin\" name=\"log\" required=\"required\">
                                </div>
                                <!-- /.controls -->
                            </div>
                            <!-- /.control-group -->

                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputLoginPassword\">
                                    ";
        // line 31
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Password", 1 => "aviators"), "method"), "html", null, true);
        echo "
                                    <span class=\"form-required\">*</span>
                                </label>

                                <div class=\"controls\">
                                    <input type=\"password\" id=\"inputLoginPassword\" name=\"pwd\" required=\"required\">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class=\"form-actions\">
                                <input type=\"submit\" value=\"";
        // line 41
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Login", 1 => "aviators"), "method"), "html", null, true);
        echo "\" class=\"btn btn-primary arrow-right\">
                            </div><!-- /.form-actions -->
                        </form>
                    </div><!-- /.tab-pane -->

                    <div class=\"tab-pane ";
        // line 46
        if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
        if (($_active_ == "register")) {
            echo "active";
        }
        echo "\" id=\"register\">
                        <form method=\"post\" action=\"";
        // line 47
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "/wp-login.php?action=register\">
                            <input type=\"hidden\" name=\"redirect_to\" value=\"";
        // line 48
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "\">

                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputRegisterEmail\">
                                    ";
        // line 52
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Username", 1 => "aviators"), "method"), "html", null, true);
        echo "
                                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                                </label>

                                <div class=\"controls\">
                                    <input type=\"text\" id=\"inputRegisterEmail\" required=\"required\" name=\"user_login\">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputRegisterPassword\">
                                    ";
        // line 63
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "E-mail", 1 => "aviators"), "method"), "html", null, true);
        echo "
                                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                                </label>

                                <div class=\"controls\">
                                    <input type=\"email\" id=\"inputRegisterPassword\" required=\"required\" name=\"user_email\">
                                </div><!-- /.controls -->
                            </div><!-- /.control-group -->

                            <div class=\"form-actions\">
                                <input type=\"submit\" value=\"";
        // line 73
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Register", 1 => "aviators"), "method"), "html", null, true);
        echo "\" class=\"btn btn-primary arrow-right\">
                            </div><!-- /.form-actions -->
                        </form>
                    </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
            </div><!-- /.span4-->

            <div class=\"span8\">
                ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "            </div>
        </div><!-- /.row -->
    </div><!-- /.login-register -->
";
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-login-register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 81,  183 => 82,  181 => 81,  169 => 73,  155 => 63,  140 => 52,  132 => 48,  127 => 47,  120 => 46,  111 => 41,  97 => 31,  80 => 18,  73 => 15,  68 => 14,  61 => 13,  48 => 9,  38 => 8,  32 => 4,  29 => 3,  31 => 4,  28 => 3,);
    }
}
