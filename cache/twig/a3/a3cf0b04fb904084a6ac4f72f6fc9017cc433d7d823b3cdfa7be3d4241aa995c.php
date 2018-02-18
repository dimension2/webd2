<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_54c1e0a3510ba115f696932939c73c5940ce6b866745bb38dfd8daceeca8c9b6 extends Twig_Template
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
        echo "<h1>welcome</h1>
<p>dimension2 is a collection of [articles](";
        // line 2
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/blog), photographs and data stories.</p>
<p>Read more about the author. </p>
<!--![About](about.jpg \"About\")
<div class=\"uk-flex uk-flex-wrap uk-flex-center uk-flex-between  uk-flex-row\">
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"";
        // line 6
        echo ((isset($context["base_url"]) ? $context["base_url"] : null) . "/blog");
        echo "\">Blog</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"";
        // line 7
        echo ((isset($context["base_url"]) ? $context["base_url"] : null) . "/photography");
        echo "\">photography</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"";
        // line 8
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
        return array (  37 => 8,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>welcome</h1>
<p>dimension2 is a collection of [articles]({{ base_url}}/blog), photographs and data stories.</p>
<p>Read more about the author. </p>
<!--![About](about.jpg \"About\")
<div class=\"uk-flex uk-flex-wrap uk-flex-center uk-flex-between  uk-flex-row\">
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/blog\" }}\">Blog</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/photography\" }}\">photography</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/datastories\" }}\">Data Stories</a>
</div>
-->", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
