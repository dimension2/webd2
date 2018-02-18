<?php

/* partials/post.html.twig */
class __TwigTemplate_c55f24ec0338221d4f9757b33f01e371b657794939f915d71828fa06c595fa88 extends Twig_Template
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
        echo "<a class=\"post-title\" href= \"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\">
\t<h2 class=\"post-title\">";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
</a>
\t
";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array())) {
            // line 6
            echo "\t<h6 class=\"post-subtitle\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array());
            echo "</h6>
";
        }
        // line 8
        echo "
<div class=\"\">
\t";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array())) {
            // line 11
            echo "\t<a href= \"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">
\t<img class=\"headerimg\" width=\"100%\" src=\"";
            // line 12
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array());
            echo "\">
\t</a>
\t";
        }
        // line 15
        echo "</div>


<div class=\"post-meta\">
   \t";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "category", array())) {
            // line 20
            echo " \t   \t<span class=\"categories\">
        \t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 22
                echo "        \t\t<a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url"]) ? $context["base_url"] : null), "/");
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
            // line 24
            echo "    \t</span>
    ";
        }
        // line 26
        echo "    <span class = \"postdate\">
        <time class=\"post-time\">";
        // line 27
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
        return array (  93 => 27,  90 => 26,  86 => 24,  72 => 22,  68 => 21,  65 => 20,  63 => 19,  57 => 15,  49 => 12,  44 => 11,  42 => 10,  38 => 8,  32 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"post-title\" href= \"{{ page.url }}\">
\t<h2 class=\"post-title\">{{ page.title }}</h2>
</a>
\t
{% if page.header.subheading %}
\t<h6 class=\"post-subtitle\">{{ page.header.subheading }}</h6>
{% endif %}

<div class=\"\">
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
        \t\t<a href=\"{{ base_url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\" class=\"p-category\">{{ category }}</a>
\t    \t{% endfor %}
    \t</span>
    {% endif %}
    <span class = \"postdate\">
        <time class=\"post-time\">{{ page.date|date(dateformat) }}</time>
\t</span>
</div>
", "partials/post.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\post.html.twig");
    }
}
