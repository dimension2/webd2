<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/error */
class __TwigTemplate_c196a108f928ead4c2f4a3f98aee168396d8cea6f80193acdedc2bbe1749819f extends Twig_Template
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
        echo "<p><img alt=\"404\" src=\"/d2/user/pages/error/404.png\" /></p>
<p>Sorry< src=\"";
        // line 2
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\" />u were looking for doesn't exist. Can we take you back <a href=\"";
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
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p><img alt=\"404\" src=\"/d2/user/pages/error/404.png\" /></p>
<p>Sorry< src=\"{{ base_url }}\" />u were looking for doesn't exist. Can we take you back <a href=\"{{ base_url }}\">home</a>?</p>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/error", "");
    }
}
