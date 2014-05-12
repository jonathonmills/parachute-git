<?php

/* helpers/header.twig */
class __TwigTemplate_ac4746079ae0b83f491882d344435d40 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE 7]>
<html class=\"ie ie7\" ";
        // line 3
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "language_attributes", array(), "method"), "html", null, true);
        echo ">
<![endif]-->
<!--[if IE 8]>
<html class=\"ie ie8\" ";
        // line 6
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "language_attributes", array(), "method"), "html", null, true);
        echo ">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html ";
        // line 9
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "language_attributes", array(), "method"), "html", null, true);
        echo ">
<!--<![endif]-->

<head>
    <meta charset=\"";
        // line 13
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "bloginfo", array(0 => "charset"), "method"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Zap, http://www.zapdesigns.co.uk/\">

    <link rel=\"shortcut icon\" href=\"";
        // line 17
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_stylesheet_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/img/favicon.png\" type=\"image/png\">
    <link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
    <link rel=\"pingback\" href=\"";
        // line 19
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "bloginfo", array(0 => "pingback_url"), "method"), "html", null, true);
        echo "\">

    <!--[if lt IE 9]>
        <script src=\"";
        // line 22
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/js/html5.js\" type=\"text/javascript\"></script>
    <![endif]-->

    ";
        // line 25
        echo twig_escape_filter($this->env, aviators_templates_helpers_wp_head(), "html", null, true);
        echo "

    ";
        // line 27
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_singular", array(), "method")) {
            // line 28
            echo "        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "wp_enqueue_script", array(0 => "comment-reply"), "method"), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "general_variant"), "method")) {
            // line 32
            echo "        <link rel=\"stylesheet\" href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/css/";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "general_variant"), "method"), "html", null, true);
            echo "\" type=\"text/css\">
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "general_palette_is_hidden"), "method") == "")) {
            // line 36
            echo "        <link rel=\"stylesheet\" href=\"#\" type=\"text/css\" id=\"color-variant\">
    ";
        }
        // line 38
        echo "
    <title>";
        // line 39
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo $this->getAttribute($_wp_, "wp_title", array(0 => "|", 1 => false, 2 => "right"), "method");
        echo "</title>
</head>

<body class=\"";
        // line 42
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "get_body_class"));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo " ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_variant"), "method"), "html", null, true);
        echo " color-";
        if (isset($context["color_class"])) { $_color_class_ = $context["color_class"]; } else { $_color_class_ = null; }
        echo twig_escape_filter($this->env, $_color_class_, "html", null, true);
        echo " ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "general_pattern"), "method"), "html", null, true);
        echo " ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "general_layout"), "method"), "html", null, true);
        echo " ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_position_is_fixed"), "method")) {
            echo "header-fixed";
        }
        echo "\">

<div id=\"wrapper-outer\">
    <div id=\"wrapper\">
        <div id=\"wrapper-inner\">
            <div class=\"header-top-wrapper\">
                <div class=\"header-top\">
                    ";
        // line 49
        $this->env->loadTemplate("helpers/topbar.twig")->display($context);
        // line 50
        echo "
                    <!-- HEADER -->
                    <div id=\"header-wrapper\">
                        <div id=\"header\">
                            <div id=\"header-inner\">
                                <div class=\"container\">
                                    <div class=\"navbar\">
                                        <div class=\"navbar-inner\">
                                            <div class=\"row\">
                                                <div class=\"logo-wrapper span4\">
                                                    <a href=\"#nav\" id=\"btn-nav\">";
        // line 60
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Toggle navigation", 1 => "aviators"), "method"), "html", null, true);
        echo "</a>

                                                    ";
        // line 63
        echo "                                                    <div class=\"logo\">
                                                        <a href=\"";
        // line 64
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "\" title=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home"), "method"), "html", null, true);
        echo "\">
                                                            ";
        // line 65
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_logo"), "method")) {
            // line 66
            echo "                                                                <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_logo"), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                                                            ";
        } else {
            // line 68
            echo "                                                                <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/logo.png\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 70
        echo "                                                        </a>
                                                    </div><!-- /.logo -->

                                                    ";
        // line 74
        echo "                                                    ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_title_is_hidden"), "method") == "")) {
            // line 75
            echo "                                                        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "get_bloginfo", array(0 => "name"), "method")) {
                // line 76
                echo "                                                            <div class=\"site-name\">
                                                                <a href=\"";
                // line 77
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home"), "method"), "html", null, true);
                echo "\" class=\"brand\">
                                                                    ";
                // line 78
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "name"), "method"), "html", null, true);
                echo "
                                                                </a>
                                                            </div><!-- /.site-name -->
                                                        ";
            }
            // line 82
            echo "                                                    ";
        }
        // line 83
        echo "
                                                    ";
        // line 85
        echo "                                                    ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_description_is_hidden"), "method") == "")) {
            // line 86
            echo "                                                        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "get_bloginfo", array(0 => "description"), "method")) {
                // line 87
                echo "                                                            <div class=\"site-slogan\">
                                                                <span>";
                // line 88
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo $this->env->getExtension('html_decode_twig_extension')->htmldecode($this->getAttribute($_wp_, "get_bloginfo", array(0 => "description"), "method"));
                echo "</span>
                                                            </div><!-- /.site-slogan -->
                                                        ";
            }
            // line 91
            echo "                                                    ";
        }
        // line 92
        echo "                                                </div><!-- /.logo-wrapper -->

                                                ";
        // line 94
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_email_is_hidden"), "method") == "") || ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_phone_is_hidden"), "method") == ""))) {
            // line 95
            echo "                                                    <div class=\"info\">
                                                        ";
            // line 97
            echo "                                                        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_email_is_hidden"), "method") == "")) {
                // line 98
                echo "                                                            <div class=\"site-email\">
                                                                <a href=\"mailto:";
                // line 99
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_option", array(0 => "header_email", 1 => "info@byaviators.com"), "method"), "html", null, true);
                echo "\">
                                                                    ";
                // line 100
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_option", array(0 => "header_email", 1 => "info@byaviators.com"), "method"), "html", null, true);
                echo "
                                                                </a>
                                                            </div><!-- /.site-email -->
                                                        ";
            }
            // line 104
            echo "
                                                        ";
            // line 106
            echo "                                                        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_phone_is_hidden"), "method") == "")) {
                // line 107
                echo "                                                            <div class=\"site-phone\">
                                                                <span>";
                // line 108
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_option", array(0 => "header_phone", 1 => "333-444-555"), "method"), "html", null, true);
                echo "</span>
                                                            </div><!-- /.site-phone -->
                                                        ";
            }
            // line 111
            echo "                                                    </div><!-- /.info -->
                                                ";
        }
        // line 113
        echo "
                                                ";
        // line 115
        echo "                                                ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_call_to_action_is_hidden"), "method") == "")) {
            // line 116
            echo "                                                    <div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-large list-your-property arrow-right\"
                                                        href=\"";
            // line 118
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_call_to_action_url", 1 => "/wp-admin/edit.php?post_type=property"), "method"), "html", null, true);
            echo "\">
                                                        List Your Property
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                ";
        }
        // line 124
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t <ul class=\"menu nav top-social\">
                                        ";
        // line 126
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "facebook", 2 => "is_hidden"), "method"))) {
            // line 127
            echo "                                            <li class=\"first leaf\">
                                                <a href=\"";
            // line 128
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "facebook", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 129
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/share/facebook@2x.png\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
                                            </li>
                                        ";
        }
        // line 133
        echo "
                                        ";
        // line 134
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "flickr", 2 => "is_hidden"), "method"))) {
            // line 135
            echo "                                            <li class=\"leaf\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "flickr", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"flickr\">Flickr</a></li>
                                        ";
        }
        // line 137
        echo "
                                        ";
        // line 138
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "google_plus", 2 => "is_hidden"), "method"))) {
            // line 139
            echo "                                            <li class=\"leaf\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 140
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "google_plus", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"google\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 141
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/share/google@2x.png\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
                                        ";
        }
        // line 145
        echo "
                                        ";
        // line 146
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "linkedin", 2 => "is_hidden"), "method"))) {
            // line 147
            echo "                                            <li class=\"leaf\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 148
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "linkedin", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"linkedin\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 149
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/share/linkedin@2x.png\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</a></li>
                                        ";
        }
        // line 152
        echo "
                                        ";
        // line 153
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "twitter", 2 => "is_hidden"), "method"))) {
            // line 154
            echo "                                            <li class=\"leaf\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 155
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "twitter", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 156
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/share/twitter@2x.png\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
                                        ";
        }
        // line 160
        echo "
                                        ";
        // line 161
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "vimeo", 2 => "is_hidden"), "method"))) {
            // line 162
            echo "                                            <li class=\"last leaf\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "vimeo", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"vimeo\">Vimeo</a></li>
                                        ";
        }
        // line 164
        echo "                                    </ul>
\t\t
                                            </div><!-- /.row -->
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
                                        </div><!-- /.navbar-inner -->
                                    </div><!-- /.navbar -->
                                </div><!-- /.container -->
                            </div><!-- /#header-inner -->
                        </div><!-- /#header -->
                    </div><!-- /#header-wrapper -->
                </div><!-- /.top -->
            </div><!-- /.top-wrapper -->

            <!-- NAVIGATION -->
            <div id=\"navigation\">
                <div class=\"container\">
                    <div class=\"navigation-wrapper\">
                        <div class=\"navigation clearfix-normal\">
                            ";
        // line 184
        if (isset($context["main_menu"])) { $_main_menu_ = $context["main_menu"]; } else { $_main_menu_ = null; }
        echo $_main_menu_;
        echo "

                            ";
        // line 186
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "navigation-right"), "method")) {
        }
        // line 187
        echo "                            ";
        // line 188
        echo "                                ";
        // line 189
        echo "                            ";
        // line 190
        echo "                        </div><!-- /.navigation -->
                    </div><!-- /.navigation-wrapper -->
                </div><!-- /.container -->
            </div><!-- /.navigation -->";
    }

    public function getTemplateName()
    {
        return "helpers/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 190,  508 => 189,  506 => 188,  504 => 187,  500 => 186,  494 => 184,  472 => 164,  465 => 162,  462 => 161,  459 => 160,  448 => 156,  443 => 155,  440 => 154,  437 => 153,  434 => 152,  424 => 149,  419 => 148,  416 => 147,  413 => 146,  410 => 145,  399 => 141,  394 => 140,  391 => 139,  388 => 138,  385 => 137,  378 => 135,  375 => 134,  372 => 133,  361 => 129,  356 => 128,  353 => 127,  350 => 126,  346 => 124,  336 => 118,  332 => 116,  328 => 115,  325 => 113,  321 => 111,  314 => 108,  311 => 107,  307 => 106,  304 => 104,  296 => 100,  291 => 99,  288 => 98,  284 => 97,  281 => 95,  278 => 94,  274 => 92,  271 => 91,  264 => 88,  261 => 87,  257 => 86,  253 => 85,  250 => 83,  247 => 82,  239 => 78,  231 => 77,  228 => 76,  224 => 75,  220 => 74,  215 => 70,  205 => 68,  195 => 66,  192 => 65,  184 => 64,  181 => 63,  175 => 60,  163 => 50,  161 => 49,  124 => 42,  117 => 39,  114 => 38,  110 => 36,  107 => 35,  104 => 34,  94 => 32,  91 => 31,  88 => 30,  81 => 28,  78 => 27,  73 => 25,  66 => 22,  59 => 19,  53 => 17,  45 => 13,  37 => 9,  30 => 6,  23 => 3,  19 => 1,);
    }
}
