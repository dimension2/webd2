<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photo */
class __TwigTemplate_e54c843519c3b480eae04b8988e9f259d51fc00291460c2e62bf590a1fea629d extends Twig_Template
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
        echo "<h1>Under construction</h1>
<h4>Developer out in search of coffee</h4>
<p>Please check back later for updates.
<a href=\"";
        // line 4
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\" class=\"btn\">Back to site</a></p>
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"%7B%7B%20base_url%20%7D%7D\">Back to site</a></button>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photo";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Under construction</h1>
<h4>Developer out in search of coffee</h4>
<p>Please check back later for updates.
<a href=\"{{ base_url }}\" class=\"btn\">Back to site</a></p>
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"%7B%7B%20base_url%20%7D%7D\">Back to site</a></button>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photo", "");
    }
}
