<?php

/* blog.html.twig */
class __TwigTemplate_6c2fb507fab785f30cda8452053350b89c53574913ca9da0ba680b140f59505d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 5
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 6
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 7
        echo "
";
        // line 8
        $context["dateformat"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) : ("F d, Y"))));
        // line 9
        echo "
<div class=\"container uk-container\">
\t<div>
\t
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 14
            echo "\t\t<article class=\"post-preview\">
\t\t\t<a class = \"\" href= \"";
            // line 15
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
\t\t\t";
            // line 16
            $this->loadTemplate("partials/post.html.twig", "blog.html.twig", 16)->display($context);
            // line 17
            echo "\t\t\t</a>
\t\t</article>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 22
            echo "        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 22)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 23
            echo "    ";
        }
        // line 24
        echo "\t</div>
</div>    
";
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "\t<div class=\"relfooter\">
\t\t";
        // line 30
        $this->loadTemplate("partials/footer.html.twig", "blog.html.twig", 30)->display($context);
        // line 31
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  114 => 30,  111 => 29,  108 => 28,  102 => 24,  99 => 23,  96 => 22,  94 => 21,  91 => 20,  75 => 17,  73 => 16,  69 => 15,  66 => 14,  49 => 13,  43 => 9,  41 => 8,  38 => 7,  36 => 6,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
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

{% block content %}
{% set collection = page.collection() %}
{% set base_url = page.url %}
{% set feed_url = base_url %}

{% set dateformat = admin.page.dateformat ?: config.system.pages.dateformat.short ?: \"F d, Y\" %}

<div class=\"container uk-container\">
\t<div>
\t
\t{% for page in collection %}
\t\t<article class=\"post-preview\">
\t\t\t<a class = \"\" href= \"{{ page.url }}\">
\t\t\t{% include 'partials/post.html.twig' %}
\t\t\t</a>
\t\t</article>
\t{% endfor %}

    {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with { 'pagination':collection.params.pagination} %}
    {% endif %}
\t</div>
</div>    
{% endblock %}

{% block footer %}
\t<div class=\"relfooter\">
\t\t{% include 'partials/footer.html.twig' %}
\t</div>
{% endblock %}






", "blog.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\blog.html.twig");
    }
}
