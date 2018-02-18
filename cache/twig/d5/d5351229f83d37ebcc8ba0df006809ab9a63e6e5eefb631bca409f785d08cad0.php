<?php

/* partials/post.html.twig */
class __TwigTemplate_9b9051ee4a694e11563870d83900cb56fa588e63de94af9daf60d0cd60d12e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'post' => array($this, 'block_post'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["site_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('post', $context, $blocks);
    }

    public function block_post($context, array $blocks = array())
    {
        // line 5
        echo "<a class=\"post-title\" href= \"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\">
\t<h2 class=\"post-title\">";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
</a>
\t
";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array())) {
            // line 10
            echo "\t<h6 class=\"post-subtitle\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array());
            echo "</h6>
";
        }
        // line 12
        echo "
<div class=\"headerimage\">
\t";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array())) {
            // line 15
            echo "\t<a href= \"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">
\t<img class=\"headerimg\" width=\"100%\" src=\"";
            // line 16
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array());
            echo "\">
\t</a>
\t";
        }
        // line 19
        echo "</div>

<div class=\"post-meta\">
   \t";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "category", array())) {
            // line 23
            echo " \t   \t<span class=\"categories\">
        \t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "        \t\t<a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["site_url"]) ? $context["site_url"] : null), "/");
                echo "/category";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["category"];
                echo "\" class=\"p-category\">";
                echo $context["category"];
                echo "</a>
\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    \t</span>
    ";
        }
        // line 29
        echo "    <span class = \"postdate\">
        <time class=\"post-time\">";
        // line 30
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), (isset($context["dateformat"]) ? $context["dateformat"] : null));
        echo "</time>
\t</span>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  102 => 29,  98 => 27,  84 => 25,  80 => 24,  77 => 23,  75 => 22,  70 => 19,  62 => 16,  57 => 15,  55 => 14,  51 => 12,  45 => 10,  43 => 9,  37 => 6,  32 => 5,  26 => 4,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set site_url = page.parent.url %}


{% block post %}
<a class=\"post-title\" href= \"{{ page.url }}\">
\t<h2 class=\"post-title\">{{ page.title }}</h2>
</a>
\t
{% if page.header.subheading %}
\t<h6 class=\"post-subtitle\">{{ page.header.subheading }}</h6>
{% endif %}

<div class=\"headerimage\">
\t{% if page.header.header_image %}
\t<a href= \"{{ page.url }}\">
\t<img class=\"headerimg\" width=\"100%\" src=\"{{ page.url }}/{{ page.header.header_image }}\">
\t</a>
\t{% endif %}
</div>

<div class=\"post-meta\">
   \t{% if page.taxonomy.category %}
 \t   \t<span class=\"categories\">
        \t{% for category in page.taxonomy.category %}
        \t\t<a href=\"{{ site_url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\" class=\"p-category\">{{ category }}</a>
\t    \t{% endfor %}
    \t</span>
    {% endif %}
    <span class = \"postdate\">
        <time class=\"post-time\">{{ page.date|date(dateformat) }}</time>
\t</span>
</div>

{% endblock %}", "partials/post.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\post.html.twig");
    }
}
