<?php

/* @Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/content */
class __TwigTemplate_8d4979fc79fa79381c4d090abe214c610877f546ac05961053ce49d115f7c04d extends Twig_Template
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
        echo "<h1>What's coming</h1>
<hr />
<p>A running list of topics I intend to touch upon before I die.</p>
<h3>Data stories</h3>
<p>☐ Public transit systems: A quantitative comparison.<br />
☐ Stop signs vs. speedbreakers: Which one is more effective in developing countries?<br />
☐ Sanskrit and Mathematics: Hidden patterns in poetry
☐<br />
☐<br />
☑ More content</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/content";
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
        return new Twig_Source("<h1>What's coming</h1>
<hr />
<p>A running list of topics I intend to touch upon before I die.</p>
<h3>Data stories</h3>
<p>☐ Public transit systems: A quantitative comparison.<br />
☐ Stop signs vs. speedbreakers: Which one is more effective in developing countries?<br />
☐ Sanskrit and Mathematics: Hidden patterns in poetry
☐<br />
☐<br />
☑ More content</p>", "@Page:C:/Program Files (x86)/Ampps/www/d2/user/pages/content", "");
    }
}
