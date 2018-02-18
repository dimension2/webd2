<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_2372cf7186f53169ad4178dabadf95a86d8f43fb2b848dbb955b6807bb8ffb86 extends Twig_Template
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
        echo "<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere <a href=\"/d2/en/blog\">Blog</a>, velit <a href=\"/d2/en/photography\">Photography</a> leo aliquet <a href=\"/d2/en/datastories\">Data Stories</a>.</p>
<!--![About](about.jpg \"About\")
<div class=\"uk-flex uk-flex-wrap uk-flex-center uk-flex-between  uk-flex-row\">
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"";
        // line 4
        echo ((isset($context["base_url"]) ? $context["base_url"] : null) . "/blog");
        echo "\">Blog</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"";
        // line 5
        echo ((isset($context["base_url"]) ? $context["base_url"] : null) . "/photography");
        echo "\">photography</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"";
        // line 6
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
        return array (  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere <a href=\"/d2/en/blog\">Blog</a>, velit <a href=\"/d2/en/photography\">Photography</a> leo aliquet <a href=\"/d2/en/datastories\">Data Stories</a>.</p>
<!--![About](about.jpg \"About\")
<div class=\"uk-flex uk-flex-wrap uk-flex-center uk-flex-between  uk-flex-row\">
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/blog\" }}\">Blog</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/photography\" }}\">photography</a>
   <a class=\"uk-width-1-3@s uk-card uk-card-secondary uk-card-body uk-margin-top\" href=\"{{ base_url ~ \"/datastories\" }}\">Data Stories</a>
</div>
-->", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
