<?php

/* partials/base.html.twig */
class __TwigTemplate_9c71e2dbfc8cde13c24c4c67f1db4edef0b7aef5befde9c0c2ab43703676184f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'statcounter' => array($this, 'block_statcounter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\" class = \"uk-height-1-1\">
   
    <head>
        ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "    </head>

    <body class=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo " \">  
        
        ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('navigation', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('footer', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('bottom', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('statcounter', $context, $blocks);
        // line 52
        echo "

    </body>

</html>

";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        ";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base.html.twig", 18)->display($context);
        // line 19
        echo "        ";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "        ";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 25)->display($context);
        // line 26
        echo "        ";
    }

    // line 28
    public function block_bottom($context, array $blocks = array())
    {
        // line 29
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        ";
    }

    // line 32
    public function block_statcounter($context, array $blocks = array())
    {
        // line 33
        echo "
            <!-- Start of StatCounter Code for Default Guide 
            <script type=\"text/javascript\">
            var sc_project=11342259; 
            var sc_invisible=1; 
            var sc_security=\"cc57ce3b\"; 
            var scJsHost = ((\"https:\" == document.location.protocol) ?
            \"https://secure.\" : \"http://www.\");
            document.write(\"<sc\"+\"ript type='text/javascript' src='\" +
            scJsHost+
            \"statcounter.com/counter/counter.js'></\"+\"script>\");
            </script>
            <noscript><div class=\"statcounter\"><a title=\"real time web
            analytics\" href=\"http://statcounter.com/\"
            target=\"_blank\"><img class=\"statcounter\"
            src=\"//c.statcounter.com/11342259/0/cc57ce3b/1/\" alt=\"real
            time web analytics\"></a></div></noscript>
            <!-- End of StatCounter Code for Default Guide -->-->
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 33,  139 => 32,  132 => 29,  129 => 28,  125 => 26,  122 => 25,  119 => 24,  115 => 22,  112 => 21,  108 => 19,  105 => 18,  102 => 17,  98 => 15,  95 => 14,  92 => 13,  88 => 8,  85 => 7,  82 => 6,  72 => 52,  70 => 32,  67 => 31,  65 => 28,  62 => 27,  60 => 24,  57 => 23,  55 => 21,  52 => 20,  50 => 17,  47 => 16,  45 => 13,  40 => 11,  36 => 9,  34 => 6,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"en\" class = \"uk-height-1-1\">
   
    <head>
        {% block head %}
            {% include 'partials/head.html.twig' %}
        {% endblock %}
    </head>

    <body class=\"{{ page.header.body_classes }} \">  
        
        {% block header %}
            {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block navigation %}
            {% include 'partials/nav.html.twig' %}
        {% endblock %}

        {% block content %}
        {% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block bottom %}
            {{ assets.js('bottom') }}
        {% endblock %}

        {% block statcounter %}

            <!-- Start of StatCounter Code for Default Guide 
            <script type=\"text/javascript\">
            var sc_project=11342259; 
            var sc_invisible=1; 
            var sc_security=\"cc57ce3b\"; 
            var scJsHost = ((\"https:\" == document.location.protocol) ?
            \"https://secure.\" : \"http://www.\");
            document.write(\"<sc\"+\"ript type='text/javascript' src='\" +
            scJsHost+
            \"statcounter.com/counter/counter.js'></\"+\"script>\");
            </script>
            <noscript><div class=\"statcounter\"><a title=\"real time web
            analytics\" href=\"http://statcounter.com/\"
            target=\"_blank\"><img class=\"statcounter\"
            src=\"//c.statcounter.com/11342259/0/cc57ce3b/1/\" alt=\"real
            time web analytics\"></a></div></noscript>
            <!-- End of StatCounter Code for Default Guide -->-->
        {% endblock %}


    </body>

</html>

", "partials/base.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\base.html.twig");
    }
}
