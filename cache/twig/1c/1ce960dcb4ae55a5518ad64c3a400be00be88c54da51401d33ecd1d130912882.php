<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_b9dbde7afbc1ad7823439487347ca5f67386960fef16e41572c23879e17727c3 extends Twig_Template
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
is a collection of<br />
<a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a><br />
by <a href=\"http://dimension2.in/en/about\">this guy</a>.</p>
<!--Read more [about the site](http://dimension2.in/en/about).-->
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
is a collection of<br />
<a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a><br />
by <a href=\"http://dimension2.in/en/about\">this guy</a>.</p>
<!--Read more [about the site](http://dimension2.in/en/about).-->
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"http://dimension2.in/en/blog\">Start reading</a></button>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
