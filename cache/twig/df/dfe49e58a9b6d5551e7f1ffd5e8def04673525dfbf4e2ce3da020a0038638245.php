<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photography */
class __TwigTemplate_a8a43b8481b17a7ce144e1184747e2683534f1b664be0b9406c45c0c9921053e extends Twig_Template
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
        echo "\">Home</a></button>";
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
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"{{ base_url }}\">Home</a></button>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photography", "");
    }
}
