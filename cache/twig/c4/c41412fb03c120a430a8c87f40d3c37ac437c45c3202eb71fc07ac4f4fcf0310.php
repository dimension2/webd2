<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/content */
class __TwigTemplate_025ce625fc0e8a0e1607ea5d66d3f903b11a381a06a85c196ea6dd17631874d8 extends Twig_Template
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
        echo "<ul>
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
        return new Twig_Source("<ul>
<li>[] Content</li>
<li>[x] More content</li>
</ul>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/content", "");
    }
}
