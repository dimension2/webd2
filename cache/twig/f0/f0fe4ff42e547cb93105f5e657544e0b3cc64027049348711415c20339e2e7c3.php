<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/content */
class __TwigTemplate_8927d7a0640c549223aa94d91bd8303dedff14fa12881b64536e7f44b6431e2c extends Twig_Template
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
        echo "<h1>What's coming</h1>
<p>A running list of topics I intend to touch upon before I die.</p>
<ul>
<li>[] Content</li>
<li>[x] More content</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/content";
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
        return new Twig_Source("<h1>What's coming</h1>
<p>A running list of topics I intend to touch upon before I die.</p>
<ul>
<li>[] Content</li>
<li>[x] More content</li>
</ul>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/content", "");
    }
}
