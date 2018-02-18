<?php

/* error.html.twig */
class __TwigTemplate_8dc4c59b995d2caa1cee4e2fe5a101a547527bda50e8008d32c1076e96db99b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
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
        echo "<div id = \"error\" class = \"container uk-container cards-wrapper\">
\t<div class = \"uk-container cards\">
\t\t<div class = \"card-inner error-inner\">
\t\t";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>
\t</div>
</div>

";
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "\t<div class=\"sitefooter\">
\t\t";
        // line 16
        $this->loadTemplate("partials/footer.html.twig", "error.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  53 => 16,  50 => 15,  47 => 14,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
<div id = \"error\" class = \"container uk-container cards-wrapper\">
\t<div class = \"uk-container cards\">
\t\t<div class = \"card-inner error-inner\">
\t\t{{ page.content }}
\t\t</div>
\t</div>
</div>

{% endblock %}

{% block footer %}
\t<div class=\"sitefooter\">
\t\t{% include 'partials/footer.html.twig' %}
\t</div>
{% endblock %}", "error.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\error.html.twig");
    }
}
