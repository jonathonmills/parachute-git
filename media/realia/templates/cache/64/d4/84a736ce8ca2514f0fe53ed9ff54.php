<?php

/* layout-table.twig */
class __TwigTemplate_64d484a736ce8ca2514f0fe53ed9ff54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_header", array(), "method"), "html", null, true);
        echo "

<div id=\"content\" class=\"clearfix\">
    ";
        // line 4
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "top"), "method")) {
            // line 5
            echo "        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "top"), "method"), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "
    <div class=\"container\">
\t
\t<div class=\"price-table\">
\t
\t\t<div class=\"row\">
\t\t
\t\t\t<div class=\"span12\">
\t\t\t\t<p>Advertise your own property</p><p>See pricing below, we have a package that suits everyone.</p>
\t\t\t</div>
\t\t
\t\t</div>
\t\t
\t\t";
        // line 20
        $this->env->loadTemplate("helpers/messages.twig")->display($context);
        // line 21
        echo "\t
       <div class=\"row\">

\t\t<div class=\"span4\"><p>Bronze</p></div>
\t\t<div class=\"span4\"><p>Silver</p></div>
\t\t<div class=\"span4\"><p>Gold</p></div>
\t\t
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t
\t\t<div class=\"span4\"><p>£50+VAT</p></div>
\t\t<div class=\"span4\"><p>£150+VAT</p></div>
\t\t<div class=\"span4\"><p>£295+VAT</p></div>
\t\t
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t
\t\t<div class=\"span4 white\"><p>1 advert</p></div>
\t\t<div class=\"span4 white\"><p>8 adverts</p></div>
\t\t<div class=\"span4 white\"><p>11 adverts**</p></div>
\t\t
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t
\t\t<div class=\"span4 white\"><p>Listed on: Empire Property</p></div>
\t\t<div class=\"span4 white\"><p>Listed on: Empire Property</p></div>
\t\t<div class=\"span4 white\"><p>Listed on: Empire Property</p></div>
\t\t
\t\t</div>
\t\t
\t\t<div class=\"row\">\t\t\t\t
\t\t<div class=\"span4\" style=\"background-color: transparent;\"></div>
\t\t<div class=\"span4 white\"><div class=\"smaller\">Also listed on: Rightmove, S1 Homes, Zoopla, Letting Web, Find a Property, Prime Location, City Lets</div></div>
\t\t<div class=\"span4 white\"><div class=\"smaller\">Also listed on: Rightmove, S1 Homes, Zoopla, Letting Web, Find a Property, Prime Location, City Lets</div></div>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t
\t\t<div class=\"span4\" style=\"background-color: transparent;\"></div>
\t\t<div class=\"span4\" style=\"background-color: transparent;\"></div>
\t\t<div class=\"span4 white\" style=\"background-color: #fff;\"><div class=\"smaller\">** + High Street Window Advert<br> Board<br> Social Media<br> Accompanied Viewings</div></div>

       </div><!-- /.row -->
\t
\t<div class=\"interested\">
\t<h2>Interested?</h2>
\t
\t<p>Leave all your details below of the property you wish to advertise and once accepted, one of our members of staff will call you with regards to payment.</p>
\t
\t<p>You can pay over the phone by debit or credit card or within our letting shop in Wishaw but all property details must be entered online. Payments can be made through PayPal too. Customers will be charged VAT at 20%. </p>
\t</div>
\t
\t</div>
\t

\t<div class=\"price-table-respo\">
\t
\t\t<div class=\"row\">
\t\t
\t\t\t<div class=\"span12\">
\t\t\t\t<p>Advertise your own property - See pricing below, we have a package that suits everyone.</p>
\t\t\t</div>
\t\t
\t\t</div>
\t\t
\t\t";
        // line 89
        $this->env->loadTemplate("helpers/messages.twig")->display($context);
        // line 90
        echo "\t
       <div class=\"row\">

\t\t<div class=\"light-blue clearfix\">
\t\t\t<div class=\"span4\"><p><strong>Bronze</strong></p></div>
\t\t\t<div class=\"span4\" style=\"background-color: rgba(255,255,255,0.5);\"><p>£50+VAT</p></div>
\t\t\t<div class=\"span4\" style=\"background-color: rgba(255,255,255,0.5);\"><p>1 advert</p></div>
\t\t\t<div class=\"span4\" style=\"background-color: rgba(255,255,255,0.5);\"><p>Listed on: Empire Property</p></div>
\t\t</div>
\t\t
\t\t<div class=\"mid-blue clearfix\">
\t\t<div class=\"span4\"><p><strong>Silver</strong></p></div>
\t\t<div class=\"span4\" style=\"background-color: rgba(255,255,255,0.5);\"><p>£150+VAT</p></div>\t
\t\t<div class=\"span4\" style=\"background-color: rgba(255,255,255,0.5);\"><p>8 adverts</p></div>\t
\t\t<div class=\"span4\" style=\"background-color: rgba(255,255,255,0.5);\"><div class=\"smaller\">Listed on: Empire Property, Rightmove, S1 Homes, Zoopla, Letting Web, Find a Property, Prime Location, City Lets</div></div>
\t\t</div>
\t\t
\t\t
\t\t<div class=\"dark-blue clearfix\">
\t\t<div class=\"span4\"><p><strong>Gold</strong></p></div>
\t\t<div class=\"span4\" style=\"background-color: rgba(255,255,255,0.5);\"><p>£250+VAT</p></div>
\t\t<div class=\"span4\" style=\"background-color: rgba(255,255,255,0.5);\"><p>8 adverts**</p></div>
\t\t<div class=\"span4\" style=\"background-color: rgba(255,255,255,0.5);\"><div class=\"smaller\">Listed on: Empire Property, Rightmove, S1 Homes, Zoopla, Letting Web, Find a Property, Prime Location, City Lets</div></div>
\t\t<div class=\"span4\" style=\"background-color: #000;\"><div class=\"smaller\">** + High Street Window Advert<br> Board<br> Social Media<br> Accompanied Viewings</div></div>
\t\t</div>
\t
\t<small>\t<div class=\"interested\">
\t<h2>Interested?</h2>
\t
\t<p>Leave all your details below of the property you wish to advertise and once accepted, one of our members of staff will call you with regards to payment.</p>
\t
\t<p>You can pay over the phone by debit or credit card or within our letting shop in Wishaw but all property details must be entered online. Payments can be made through PayPal too. All ads will be kept online until one year or until the property has been let out, whichever is first. Customers will be charged VAT at 20%. </p>
\t</div>
\t
\t</div></small>\t



\t\t\t
\t</div>
\t
\t<div id=\"main\" class=\"span12\">
                ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "    </div><!-- /#main -->
\t
\t";
        // line 135
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "content-bottom"), "method"), "html", null, true);
        echo "


    </div><!-- /.container -->

        ";
        // line 140
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "bottom"), "method"), "html", null, true);
        echo "

</div><!-- /#content -->

";
        // line 144
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_footer", array(), "method"), "html", null, true);
    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 132,  193 => 144,  185 => 140,  176 => 135,  172 => 133,  170 => 132,  126 => 90,  124 => 89,  54 => 21,  52 => 20,  37 => 7,  30 => 5,  27 => 4,  20 => 1,  31 => 4,  28 => 3,);
    }
}
