<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_3d97c0ce2287da1c1502f23e8189da4eb8f0b5700a81407910f6aba0279da3af extends Twig_Template
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
        echo "<h1>dimension2</h1>
<p><del>is an exercise in self-obsession</del><br />
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
        return new Twig_Source("<h1>dimension2</h1>
<p><del>is an exercise in self-obsession</del><br />
is a collection of <a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a><br />
by <a href=\"http://dimension2.in/en/about\">this guy</a>.</p>
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"http://dimension2.in/en/blog\">Start reading</a></button>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
