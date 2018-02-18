<?php

/* partials/footer.html.twig */
class __TwigTemplate_1447884068ef14e34d065e62d5716e92eb1a45a8b5d30fb961de43a6fed031ad extends Twig_Template
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
        echo "<footer class=\"uk-align-right uk-padding\">
\t<p>&copy; 2017 dimension2 | <a href=\"mailto:dimension2@live.com\">Webmaster</a>
\t</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
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
        return new Twig_Source("<footer class=\"uk-align-right uk-padding\">
\t<p>&copy; 2017 dimension2 | <a href=\"mailto:dimension2@live.com\">Webmaster</a>
\t</p>
</footer>", "partials/footer.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\footer.html.twig");
    }
}
