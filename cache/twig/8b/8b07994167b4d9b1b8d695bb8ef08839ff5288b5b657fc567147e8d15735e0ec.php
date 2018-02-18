<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photography */
class __TwigTemplate_a2885343977c91ad5bf791f2fbd1a0596f2c950778884a01f7cfa716f5cbbf36 extends Twig_Template
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
<p>Please check back later for updates.</p>
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"";
        // line 4
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\">Back to site</a></button>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photography";
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
<p>Please check back later for updates.</p>
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"{{ base_url }}\">Back to site</a></button>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photography", "");
    }
}
