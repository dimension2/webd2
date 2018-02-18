<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/02.blog */
class __TwigTemplate_b44a5a662f8741ac35506d2fd4a70b8753b0c3d2a7681e69d32d5ec88ef703e4 extends Twig_Template
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
        echo "<h1>Our Blog</h1>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/02.blog";
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
        return new Twig_Source("<h1>Our Blog</h1>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/02.blog", "");
    }
}
