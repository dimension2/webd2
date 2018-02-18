<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/checklater/04.subscribe/thankyou */
class __TwigTemplate_50fa0ed2f9e0ff19ef22f141d8bd40a96b4cea7a7f5575120fca556e22dcbaa5 extends Twig_Template
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
        echo "<p>Your email was sent. Thank you ! </p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/checklater/04.subscribe/thankyou";
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
        return new Twig_Source("<p>Your email was sent. Thank you ! </p>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/checklater/04.subscribe/thankyou", "");
    }
}
