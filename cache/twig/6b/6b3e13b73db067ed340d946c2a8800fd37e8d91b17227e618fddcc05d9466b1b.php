<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_37ab49d3744c88e16c4631f1fc5da53a3a61064c59f6d8df3ed08041267c2394 extends Twig_Template
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
        echo "<p>dimension2 is<br />
<del>an exercise in self-obsession</del><br />
a collection of <a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a>.</p>
<button class=\"uk-button uk-button-primary uk-button-small\"><a href=\"http://dimension2.in/en/about\">Learn more</a></button>
<!--![About](about.jpg \"About\")
<div class=\"uk-flex uk-flex-wrap uk-flex-center uk-flex-between  uk-flex-row\">
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"";
        // line 7
        echo ((isset($context["base_url"]) ? $context["base_url"] : null) . "/blog");
        echo "\">Blog</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"";
        // line 8
        echo ((isset($context["base_url"]) ? $context["base_url"] : null) . "/photography");
        echo "\">photography</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"";
        // line 9
        echo ((isset($context["base_url"]) ? $context["base_url"] : null) . "/datastories");
        echo "\">Data Stories</a>
</div>
-->";
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
        return array (  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>dimension2 is<br />
<del>an exercise in self-obsession</del><br />
a collection of <a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a>.</p>
<button class=\"uk-button uk-button-primary uk-button-small\"><a href=\"http://dimension2.in/en/about\">Learn more</a></button>
<!--![About](about.jpg \"About\")
<div class=\"uk-flex uk-flex-wrap uk-flex-center uk-flex-between  uk-flex-row\">
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/blog\" }}\">Blog</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/photography\" }}\">photography</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/datastories\" }}\">Data Stories</a>
</div>
-->", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
