<?php

/* default.html.twig */
class __TwigTemplate_e96002d8a91b49dcdba412dc95e48e56cf16c668442b32bf9de25a9e3006fddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id = \"homepage\" class = \"container uk-container cards-wrapper\">
\t<div class = \"uk-container cards\">
\t\t<div class = \"card-inner\">
\t\t";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>
\t</div>
</div>
";
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        // line 14
        echo "\t<div class=\"sitefooter\">
\t\t";
        // line 15
        $this->loadTemplate("partials/footer.html.twig", "default.html.twig", 15)->display($context);
        // line 16
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
        return array (  54 => 16,  52 => 15,  49 => 14,  46 => 13,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
