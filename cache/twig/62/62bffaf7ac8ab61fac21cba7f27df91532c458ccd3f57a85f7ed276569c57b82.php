<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/error */
class __TwigTemplate_981ceffce810085a71d6641f2754584328cf27afd7bcbbb922ffbf2c9993fe36 extends Twig_Template
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
        echo "<p><img alt=\"404\" src=\"/d2/user/pages/error/image.jpg\" /></p>
<p>Sorry< src=\"";
        // line 2
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\" />u were looking for doesn't exist.<br />
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
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p><img alt=\"404\" src=\"/d2/user/pages/error/image.jpg\" /></p>
<p>Sorry< src=\"{{ base_url }}\" />u were looking for doesn't exist.<br />
Can we take you back <a href=\"{{ base_url }}\">home</a>?</p>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/error", "");
    }
}
