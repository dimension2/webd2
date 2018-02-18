<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/error */
class __TwigTemplate_e2be7a65862e9a67e82fbadb23e885e6598f9af5c941a5e3aa2473fed61f9407 extends Twig_Template
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
        echo "<p>Sorry< src=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\" />u were looking for doesn't exist.<br />
Can we take you back <a href=\"";
        // line 2
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\">home</a>?</p>
<p><img src=\"http://www.ucsusa.org/sites/default/files/legacy/assets/images/si/cartoon-contest-2013/MacLeod.jpg\" alt=\"404\" /></p>";
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
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Sorry< src=\"{{ base_url }}\" />u were looking for doesn't exist.<br />
Can we take you back <a href=\"{{ base_url }}\">home</a>?</p>
<p><img src=\"http://www.ucsusa.org/sites/default/files/legacy/assets/images/si/cartoon-contest-2013/MacLeod.jpg\" alt=\"404\" /></p>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/error", "");
    }
}
