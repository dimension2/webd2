<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_a00500ef13a1784f76704dbea2edd6a21e1f531c8584099300ade6779b488e85 extends Twig_Template
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
is a collection of [articles](";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "/");
        echo "/category), [photographs](";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "/photography) and [data stories](";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "/blog/category:data)<br />
by [this guy](";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "/about).</p>
<!--Read more [about the site](http://dimension2.in/en/about).-->
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"http://dimension2.in/en/blog\">Start reading</a></button>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  23 => 3,  19 => 1,);
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
is a collection of [articles]({{ page.url|rtrim('/') }}/category), [photographs]({{ page.url }}/photography) and [data stories]({{ page.url }}/blog/category:data)<br />
by [this guy]({{ page.url }}/about).</p>
<!--Read more [about the site](http://dimension2.in/en/about).-->
<button class=\"uk-button uk-button-primary uk-width-1-3 cta-main\"><a href=\"http://dimension2.in/en/blog\">Start reading</a></button>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
