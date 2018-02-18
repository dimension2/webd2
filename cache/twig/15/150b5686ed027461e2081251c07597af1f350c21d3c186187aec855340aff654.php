<?php

/* default.html.twig */
class __TwigTemplate_abe9bcd32d26c4945d7baa5b603c14bb616ab0b0d001acd8f80c69c41f3983e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navigation($context, array $blocks = array())
    {
        // line 4
        echo " \t<div class = \"home\">
            ";
        // line 5
        $this->loadTemplate("partials/nav.html.twig", "default.html.twig", 5)->display($context);
        // line 6
        echo "    <div>
 ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div id = \"homepage\" class = \"container uk-container cards-wrapper\">
\t<div class = \"uk-container cards\">
\t\t<div class = \"card-inner\">
\t\t";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>
\t</div>
</div>

";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "\t<div class=\"sitefooter\">
\t\t";
        // line 22
        $this->loadTemplate("partials/footer.html.twig", "default.html.twig", 22)->display($context);
        // line 23
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  67 => 22,  64 => 21,  61 => 20,  51 => 13,  46 => 10,  43 => 9,  38 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

 {% block navigation %}
 \t<div class = \"home\">
            {% include 'partials/nav.html.twig' %}
    <div>
 {% endblock %}

{% block content %}
<div id = \"homepage\" class = \"container uk-container cards-wrapper\">
\t<div class = \"uk-container cards\">
\t\t<div class = \"card-inner\">
\t\t{{ page.content }}
\t\t</div>
\t</div>
</div>

{% endblock %}

{% block footer %}
\t<div class=\"sitefooter\">
\t\t{% include 'partials/footer.html.twig' %}
\t</div>
{% endblock %}


", "default.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\default.html.twig");
    }
}
