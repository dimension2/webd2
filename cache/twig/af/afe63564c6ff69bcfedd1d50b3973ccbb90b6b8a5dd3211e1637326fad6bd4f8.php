<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/error */
class __TwigTemplate_c5203b76d907c31dedba8129cccecf96a9d27bb0e874f9c330624ca6265c363a extends Twig_Template
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
        echo "<p><img alt=\"404\" class=\"errorimg\" src=\"/d2/user/pages/error/404.png\" /></p>
<p>The page you are looking for doesn't exist.<br />
Can we take you back <a href=\"";
        // line 3
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\">home</a>?</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/error";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p><img alt=\"404\" class=\"errorimg\" src=\"/d2/user/pages/error/404.png\" /></p>
<p>The page you are looking for doesn't exist.<br />
Can we take you back <a href=\"{{ base_url }}\">home</a>?</p>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/error", "");
    }
}
