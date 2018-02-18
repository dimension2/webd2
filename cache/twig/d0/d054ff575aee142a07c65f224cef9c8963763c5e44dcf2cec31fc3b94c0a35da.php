<?php

/* partials/base.html.twig */
class __TwigTemplate_3ac9b4f582b3f3e96f68427be52ed1bb7882e12e3029dc41aef5a2f744098e25 extends Twig_Template
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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
   
    <head>
        ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "    </head>

    <body class=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">  
        
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
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
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
        return array (  128 => 29,  125 => 28,  121 => 26,  118 => 25,  115 => 24,  111 => 22,  108 => 21,  104 => 19,  101 => 18,  98 => 17,  94 => 15,  91 => 14,  88 => 13,  84 => 8,  81 => 7,  78 => 6,  69 => 31,  67 => 28,  64 => 27,  62 => 24,  59 => 23,  57 => 21,  54 => 20,  52 => 17,  49 => 16,  47 => 13,  42 => 11,  38 => 9,  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
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
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
   
    <head>
        {% block head %}
            {% include 'partials/head.html.twig' %}
        {% endblock %}
    </head>

    <body class=\"{{ page.header.body_classes }}\">  
        
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

    </body>

</html>

", "partials/base.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\base.html.twig");
    }
}
