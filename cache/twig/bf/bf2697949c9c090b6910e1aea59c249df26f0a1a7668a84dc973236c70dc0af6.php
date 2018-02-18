<?php

/* partials/post.html.twig */
class __TwigTemplate_6ce9a47953fe29e6097768ba96420b9a0fa3388f4e346d11936dfd4c395ccb50 extends Twig_Template
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
        echo "<a href= \"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\">
\t<h2 class=\"post-title\">";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
</a>
\t
<div class=\"\">
\t";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array())) {
            // line 7
            echo "\t<img width=\"100%\" src=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "/";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array());
            echo "\">
\t";
        }
        // line 9
        echo "</div>

";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array())) {
            // line 12
            echo "\t<h3 class=\"post-subtitle\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array());
            echo "</h3>
";
        }
        // line 14
        echo "
<div class=\"post-meta\">
   \t";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 17
            echo " \t   \t<span class=\"categories\">
        \t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 19
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
            // line 21
            echo "    \t</span>
    ";
        }
        // line 23
        echo "    <span class = \"postdate\">
        <time class=\"post-meta\">";
        // line 24
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), (isset($context["dateformat"]) ? $context["dateformat"] : null));
        echo "</time>
\t</span>
\t

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
        return array (  87 => 24,  84 => 23,  80 => 21,  66 => 19,  62 => 18,  59 => 17,  57 => 16,  53 => 14,  47 => 12,  45 => 11,  41 => 9,  33 => 7,  31 => 6,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href= \"{{ page.url }}\">
\t<h2 class=\"post-title\">{{ page.title }}</h2>
</a>
\t
<div class=\"\">
\t{% if page.header.header_image %}
\t<img width=\"100%\" src=\"{{ page.url }}/{{ page.header.header_image }}\">
\t{% endif %}
</div>

{% if page.header.subheading %}
\t<h3 class=\"post-subtitle\">{{ page.header.subheading }}</h3>
{% endif %}

<div class=\"post-meta\">
   \t{% if page.taxonomy.tag %}
 \t   \t<span class=\"categories\">
        \t{% for category in page.taxonomy.category %}
        \t\t<a href=\"{{ base_url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\" class=\"p-category\">{{ category }}</a>
\t    \t{% endfor %}
    \t</span>
    {% endif %}
    <span class = \"postdate\">
        <time class=\"post-meta\">{{ page.date|date(dateformat) }}</time>
\t</span>
\t

\t</span>
</div>

", "partials/post.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\post.html.twig");
    }
}
