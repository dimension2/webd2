<?php

/* item.html.twig */
class __TwigTemplate_187a1efebac74a4d3fc53268d7332210e8c803558f9cf390af6656c389a19492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["dateformat"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) : ("F d, Y"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class = \"\">

\t\t<header class=\"postheader\">
\t\t\t";
        // line 9
        $this->loadTemplate("partials/post.html.twig", "item.html.twig", 9)->display($context);
        // line 10
        echo "\t\t</header>

        ";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

        <footer class=\"postfooter\">

\t        ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 17
            echo "\t \t   <span class=\"tags\">
\t        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 19
                echo "\t        \t<a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"\">";
                echo $context["tag"];
                echo "</a>

\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t    \t</span>
\t    \t";
        }
        // line 24
        echo "\t    \t";
        echo call_user_func_array($this->env->getFunction('thumbs')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array())));
        echo "
    \t</footer>

    </div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  76 => 22,  61 => 19,  57 => 18,  54 => 17,  52 => 16,  45 => 12,  41 => 10,  39 => 9,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% set dateformat = admin.page.dateformat ?: config.system.pages.dateformat.short ?: \"F d, Y\" %}

{% block content %}
\t<div class = \"\">

\t\t<header class=\"postheader\">
\t\t\t{% include 'partials/post.html.twig' %}
\t\t</header>

        {{ page.content }}

        <footer class=\"postfooter\">

\t        {% if page.taxonomy.tag %}
\t \t   <span class=\"tags\">
\t        {% for tag in page.taxonomy.tag %}
\t        \t<a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"\">{{ tag }}</a>

\t\t    {% endfor %}
\t    \t</span>
\t    \t{% endif %}
\t    \t{{ thumbs(page.slug) }}
    \t</footer>

    </div>
{% endblock %}", "item.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\item.html.twig");
    }
}
