<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_2c90f478ff1c3124f8fd5f74e8c7ce7b0c1d0fc66c1595e53a1f933af0d02faa extends Twig_Template
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
        echo "<h1>dimension2 is</h1>
<p><del>an exercise in self-obsession</del><br />
a collection of <a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a>.</p>
<p>Read more <a href=\"http://dimension2.in/en/about\">about the site</a>.</p>
<!--<button class=\"uk-button uk-button-primary uk-width-1-3\"><a href=\"http://dimension2.in/en/about\">About</a></button>-->";
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
        return new Twig_Source("<h1>dimension2 is</h1>
<p><del>an exercise in self-obsession</del><br />
a collection of <a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a>.</p>
<p>Read more <a href=\"http://dimension2.in/en/about\">about the site</a>.</p>
<!--<button class=\"uk-button uk-button-primary uk-width-1-3\"><a href=\"http://dimension2.in/en/about\">About</a></button>-->", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
