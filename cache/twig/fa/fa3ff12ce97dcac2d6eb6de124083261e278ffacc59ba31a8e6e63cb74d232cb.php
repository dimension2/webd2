<?php

/* partials/head.html.twig */
class __TwigTemplate_3455b58b11daceb583976ac555d991f6460117978e1b243e6e33f5de04c2c406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 4
        $this->loadTemplate("partials/metadata.html.twig", "partials/head.html.twig", 4)->display($context);
        // line 5
        echo "
";
        // line 6
        if (($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "favicon", array()) != "")) {
            // line 7
            echo "<link rel=\"icon\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "favicon", array())), true);
            echo "\" />
";
        }
        // line 9
        echo "
<title>";
        // line 10
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        // line 14
        echo "\t";
        // line 15
        echo "\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/uikit.min.css", 1 => 100), "method");
        // line 16
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 98), "method");
        // line 17
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Lato:300,400,700|Cardo", 1 => 97), "method");
        // line 18
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 96), "method");
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery-3.1.1.min.js", 1 => 100), "method");
        // line 24
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/uikit.min.js", 1 => 99), "method");
        // line 25
        echo "    ";
        // line 26
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  97 => 25,  94 => 24,  91 => 23,  88 => 22,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  70 => 13,  67 => 12,  60 => 28,  58 => 22,  53 => 20,  51 => 12,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
{% include 'partials/metadata.html.twig' %}

{% if theme_config.favicon != '' %}
<link rel=\"icon\" href=\"{{ url('theme://img/' ~ theme_config.favicon, true) }}\" />
{% endif %}

<title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

{% block stylesheets %}
    {# do assets.addCss('http://yui.yahooapis.com/pure/0.6.0/pure-min.css', 100) #}
\t{# do assets.addCss('theme://css/foundation.min.css', 99) #}
\t{% do assets.addCss('theme://css/uikit.min.css', 100) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 98) %}
    {% do assets.addCss('https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Lato:300,400,700|Cardo', 97) %}
    {% do assets.addCss('theme://css/custom.css', 96) %}
{% endblock %}
{{ assets.css() }}

{% block javascripts %}
    {% do assets.addJs('theme://js/jquery-3.1.1.min.js', 100) %}
    {% do assets.addJs('theme://js/uikit.min.js', 99) %}
    {# do assets.addJs('theme://js/ui.js', 98) #}
    {# do assets.addJs('theme://js/menu.js', 97) #}
{% endblock %}
{{ assets.js() }}

", "partials/head.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\head.html.twig");
    }
}
