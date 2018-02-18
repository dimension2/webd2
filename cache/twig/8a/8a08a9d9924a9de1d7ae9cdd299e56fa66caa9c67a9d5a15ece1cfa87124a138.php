<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home */
class __TwigTemplate_a9d1adc6c4332131c17bb897762a40b89448e322658819fd940a30527972c05e extends Twig_Template
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
<p><img title=\"About\" alt=\"About\" src=\"/d2/user/pages/01.home/about.jpg\" /></p>
<div class=\"uk-flex uk-flex-center uk-flex-between uk-flex-wrap\">
   <div class=\"uk-width-1-3 uk-card uk-card-default uk-card-body\"><a href=\"/blog\">Blog</a></div>
   <div class=\"uk-width-1-3 uk-card uk-card-default  uk-card-body\"><a href=\"/photography\">photography</a></div>
   <div class=\"uk-width-1-3 uk-card uk-card-default uk-card-body\"><a href=\"/datastories\">Data Stories   </a></div>
</div>";
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
        return new Twig_Source("<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere <a href=\"/d2/en/blog\">Blog</a>, velit <a href=\"/d2/en/photography\">Photography</a> leo aliquet <a href=\"/d2/en/datastories\">Data Stories</a>.</p>
<p><img title=\"About\" alt=\"About\" src=\"/d2/user/pages/01.home/about.jpg\" /></p>
<div class=\"uk-flex uk-flex-center uk-flex-between uk-flex-wrap\">
   <div class=\"uk-width-1-3 uk-card uk-card-default uk-card-body\"><a href=\"/blog\">Blog</a></div>
   <div class=\"uk-width-1-3 uk-card uk-card-default  uk-card-body\"><a href=\"/photography\">photography</a></div>
   <div class=\"uk-width-1-3 uk-card uk-card-default uk-card-body\"><a href=\"/datastories\">Data Stories   </a></div>
</div>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/01.home", "");
    }
}
