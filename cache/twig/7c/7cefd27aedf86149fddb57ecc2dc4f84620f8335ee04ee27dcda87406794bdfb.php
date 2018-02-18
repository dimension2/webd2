<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_d6bfa448d7c9967f7397496a82be1ee3bf4edaf3885bc7a3ac4eb30a72d9570b extends Twig_Template
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
        echo "<p><a href=\"http://dimension2.in\"><img alt=\"dimension2\" src=\"/d2/user/pages/01.home/logo.png\" /></a>{\"logo\"}<br />
<del>is an exercise in self-obsession</del><br />
is a collection of <a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a><br />
by <a href=\"http://dimension2.in/en/about\">this guy</a>.</p>
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"http://dimension2.in/en/blog\">Start reading</a></button>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home";
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
        return new Twig_Source("<p><a href=\"http://dimension2.in\"><img alt=\"dimension2\" src=\"/d2/user/pages/01.home/logo.png\" /></a>{\"logo\"}<br />
<del>is an exercise in self-obsession</del><br />
is a collection of <a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a><br />
by <a href=\"http://dimension2.in/en/about\">this guy</a>.</p>
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"http://dimension2.in/en/blog\">Start reading</a></button>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
