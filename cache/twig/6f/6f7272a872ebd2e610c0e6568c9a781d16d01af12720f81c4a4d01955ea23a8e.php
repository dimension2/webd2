<?php

/* item.html.twig */
class __TwigTemplate_a81dbf9f3401ca40f164a85816695e7297372ed5158ffd0eee3d5370b50ef21f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
    public function block_header($context, array $blocks = array())
    {
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array())) {
            // line 7
            echo "    ";
            $context["style"] = ((" style=\"background-image: url('" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), array(), "array"), "cache", array()), "url", array(), "method")) . "')\"");
        } elseif ($this->getAttribute(        // line 8
(isset($context["theme_config"]) ? $context["theme_config"] : null), "default_header_image", array())) {
            // line 9
            echo "    ";
            $context["style"] = ((" style=\"background-image: url('" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_header_image", array())))) . "')\"");
        } else {
            // line 11
            echo "    ";
            $context["style"] = "";
        }
        // line 13
        echo "
<header class=\"intro-header\"";
        // line 14
        echo (isset($context["style"]) ? $context["style"] : null);
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"post-heading\">
                    <h1>";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
                    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array())) {
            // line 21
            echo "                    <h2 class=\"subheading\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array());
            echo "</h2>
                    ";
        }
        // line 23
        echo "                    <span class=\"meta\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_CLEAN_BLOG.POST_BY");
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
        echo " ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_CLEAN_BLOG.POST_ON");
        echo " ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), (isset($context["dateformat"]) ? $context["dateformat"] : null));
        echo "</span>
                </div>
            </div>
        </div>
    </div>
</header>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "<article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                ";
        // line 36
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                ";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "jscomments", array()), "enabled", array())) {
            // line 38
            echo "                    ";
            echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), array());
            echo "
                ";
        }
        // line 40
        echo "            </div>
        </div>
    </div>
</article>
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
        return array (  112 => 40,  106 => 38,  104 => 37,  100 => 36,  94 => 32,  91 => 31,  73 => 23,  67 => 21,  65 => 20,  61 => 19,  53 => 14,  50 => 13,  46 => 11,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
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

{% block header %}
{% if page.header.header_image %}
    {% set style = ' style=\"background-image: url(\\'' ~ page.media.images[page.header.header_image].cache.url()  ~ '\\')\"' %}
{% elseif theme_config.default_header_image %}
    {% set style = ' style=\"background-image: url(\\'' ~ url('theme://img/' ~ theme_config.default_header_image)  ~ '\\')\"' %}
{% else %}
    {% set style = '' %}
{% endif %}

<header class=\"intro-header\"{{ style }}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"post-heading\">
                    <h1>{{ page.title }}</h1>
                    {% if page.header.subheading %}
                    <h2 class=\"subheading\">{{ page.header.subheading }}</h2>
                    {% endif %}
                    <span class=\"meta\">{{ 'THEME_CLEAN_BLOG.POST_BY'|t }} {{ page.header.author }} {{ 'THEME_CLEAN_BLOG.POST_ON'|t }} {{ page.date|date(dateformat) }}</span>
                </div>
            </div>
        </div>
    </div>
</header>
{% endblock %}

{% block content %}
<article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                {{ page.content }}
                {% if config.plugins.jscomments.enabled %}
                    {{ jscomments() }}
                {% endif %}
            </div>
        </div>
    </div>
</article>
{% endblock %}
", "item.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\clean-blog\\templates\\item.html.twig");
    }
}
