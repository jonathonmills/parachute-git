<?php

/* properties/property-map.twig */
class __TwigTemplate_2c8d8a5bd1e3762d2bccb285e5b1e2f1 extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_latitude"), "method"), 0) && $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_longitude"), "method"), 0))) {
            // line 2
            echo "    <h2>";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Map", 1 => "aviators"), "method"), "html", null, true);
            echo "</h2>

    <div id=\"property-map\"></div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            function LoadMapProperty() {
                var locations = new Array(
                    [";
            // line 10
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_latitude"), "method"), 0), "html", null, true);
            echo ", ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_longitude"), "method"), 0), "html", null, true);
            echo "]
                );
                var types = new Array(
                    '";
            // line 13
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "wp_get_object_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "property_types"), "method"), 0), "slug"), "html", null, true);
            echo "'
                );
                var markers = new Array();
                var plainMarkers = new Array();

                var mapOptions = {
                    center: new google.maps.LatLng(";
            // line 19
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_latitude"), "method"), 0), "html", null, true);
            echo ", ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_longitude"), "method"), 0), "html", null, true);
            echo "),
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false
                };

                var map = new google.maps.Map(document.getElementById('property-map'), mapOptions);

                \$.each(locations, function(index, location) {
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(location[0], location[1]),
                        map: map,
                        icon: '";
            // line 31
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/marker-transparent.png'
                    });

                    var myOptions = {
                        draggable: true,
                        content: '<div class=\"marker ' + types[index] + '\"><div class=\"marker-inner\"></div></div>',
                        disableAutoPan: true,
                        pixelOffset: new google.maps.Size(-21, -58),
                        position: new google.maps.LatLng(location[0], location[1]),
                        closeBoxURL: \"\",
                        isHidden: false,
                        // pane: \"mapPane\",
                        enableEventPropagation: true
                    };
                    marker.marker = new InfoBox(myOptions);
                    marker.marker.isHidden = false;
                    marker.marker.open(map, marker);
                    markers.push(marker);
                });

                google.maps.event.addListener(map, 'zoom_changed', function() {
                    \$.each(markers, function(index, marker) {
                        marker.infobox.close();
                    });
                });
            }

            google.maps.event.addDomListener(window, 'load', LoadMapProperty);

            var dragFlag = false;
            var start = 0, end = 0;

            function thisTouchStart(e) {
                dragFlag = true;
                start = e.touches[0].pageY;
            }

            function thisTouchEnd() {
                dragFlag = false;
            }

            function thisTouchMove(e) {
                if ( !dragFlag ) return;
                end = e.touches[0].pageY;
                window.scrollBy( 0,( start - end ) );
            }

            document.getElementById(\"property-map\").addEventListener(\"touchstart\", thisTouchStart, true);
            document.getElementById(\"property-map\").addEventListener(\"touchend\", thisTouchEnd, true);
            document.getElementById(\"property-map\").addEventListener(\"touchmove\", thisTouchMove, true);
        });

    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "properties/property-map.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  48 => 13,  36 => 10,  65 => 12,  26 => 4,  194 => 62,  184 => 59,  179 => 58,  176 => 57,  172 => 56,  169 => 55,  161 => 52,  156 => 51,  153 => 50,  149 => 49,  146 => 48,  138 => 45,  133 => 44,  130 => 43,  126 => 42,  118 => 39,  113 => 38,  104 => 34,  99 => 33,  90 => 28,  83 => 26,  76 => 24,  72 => 23,  66 => 21,  59 => 19,  41 => 9,  34 => 10,  24 => 4,  103 => 23,  98 => 22,  94 => 20,  67 => 13,  23 => 2,  39 => 6,  33 => 7,  25 => 3,  22 => 2,  19 => 1,  140 => 17,  135 => 41,  131 => 39,  125 => 37,  120 => 36,  116 => 34,  109 => 32,  106 => 31,  102 => 29,  95 => 31,  92 => 25,  89 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 17,  71 => 13,  69 => 17,  60 => 16,  57 => 15,  50 => 13,  47 => 14,  42 => 10,  37 => 7,  30 => 5,  27 => 4,  20 => 1,  63 => 20,  61 => 15,  58 => 14,  56 => 18,  49 => 9,  46 => 10,  44 => 11,  38 => 8,  31 => 4,  28 => 4,);
    }
}
