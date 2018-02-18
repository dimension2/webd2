<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_d613239c626a35edb9f09be3978b91c2f58c2079a84308ae6585bd0a417f7e05 extends Twig_Template
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
        echo "<h3>dimension2 is</h3>
<h3><del>an exercise in self-obsession</del></h3>
<h3>a collection of <a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a>.</h3>
<p>Read more about <a href=\"http://dimension2.in/en/about\">the author</a>.</p>
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
        return new Twig_Source("<h3>dimension2 is</h3>
<h3><del>an exercise in self-obsession</del></h3>
<h3>a collection of <a href=\"http://dimension2.in/en/blog\">articles</a>, <a href=\"http://dimension2.in/photography\">photographs</a> and <a href=\"http://dimension2.in/en/blog/category:data\">data stories</a>.</h3>
<p>Read more about <a href=\"http://dimension2.in/en/about\">the author</a>.</p>
<!--![About](about.jpg \"About\")
<div class=\"uk-flex uk-flex-wrap uk-flex-center uk-flex-between  uk-flex-row\">
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/blog\" }}\">Blog</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/photography\" }}\">photography</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/datastories\" }}\">Data Stories</a>
</div>
-->", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
