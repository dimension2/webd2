<?php

/* partials/search.html.twig */
class __TwigTemplate_9728c5bb41b94a4da2bbe22faa99758c470a18ea59b207b393e6af9f3314ab05 extends Twig_Template
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
        echo "<div>
\t";
        // line 2
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/search.html.twig", 2)->display($context);
        // line 3
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "partials/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
\t{% include 'partials/simplesearch_searchbox.html.twig' %}
</div>

", "partials/search.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\search.html.twig");
    }
}
