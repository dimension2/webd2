<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photo */
class __TwigTemplate_697c215d6d877289a96e7876b304acbde3731c77babeab97f9942c0e6cdb84e6 extends Twig_Template
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
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"%7B%7Bbase_url%7D%7D\">Back to site</a></button>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photo";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"%7B%7Bbase_url%7D%7D\">Back to site</a></button>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/03.photo", "");
    }
}
