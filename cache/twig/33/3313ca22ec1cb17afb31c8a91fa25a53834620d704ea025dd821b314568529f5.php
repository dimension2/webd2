<?php

/* partials/pagination.html.twig */
class __TwigTemplate_8184249d44cd86f8db5f7fec427f5ad846694ae3c71aa409126a28737007525c extends Twig_Template
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
        $context["pagination"] = ((array_key_exists("pagination", $context)) ? (_twig_default_filter((isset($context["pagination"]) ? $context["pagination"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()), "params", array()), "pagination", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()), "params", array()), "pagination", array())));
        // line 2
        $context["base_url"] = ((array_key_exists("base_url", $context)) ? (_twig_default_filter((isset($context["base_url"]) ? $context["base_url"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 5
            echo "
<ul class=\"pager\">
    ";
            // line 7
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array())), array("//" => "/"));
                // line 9
                echo "        <li class=\"previous\"><a href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">&larr; ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_CLEAN_BLOG.NEWER_POSTS");
                echo "</a></li>
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 13
                echo "        ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array())), array("//" => "/"));
                // line 14
                echo "        <li class=\"next\"><a href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_CLEAN_BLOG.OLDER_POSTS");
                echo " &rarr;</a></li>
    ";
            }
            // line 16
            echo "</ul>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  53 => 14,  50 => 13,  48 => 12,  45 => 11,  37 => 9,  34 => 8,  32 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set pagination = pagination|default(page.collection.params.pagination) %}
{% set base_url = base_url|default(page.url) %}

{% if pagination|length > 1 %}

<ul class=\"pager\">
    {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <li class=\"previous\"><a href=\"{{ url }}\">&larr; {{ 'THEME_CLEAN_BLOG.NEWER_POSTS'|t }}</a></li>
    {% endif %}

    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <li class=\"next\"><a href=\"{{ url }}\">{{ 'THEME_CLEAN_BLOG.OLDER_POSTS'|t }} &rarr;</a></li>
    {% endif %}
</ul>

{% endif %}
", "partials/pagination.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\clean-blog\\templates\\partials\\pagination.html.twig");
    }
}
