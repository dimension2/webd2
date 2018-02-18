<?php

/* partials/pagination.html.twig */
class __TwigTemplate_3eeb87aea37848cc826680880f3dc54080f0b9fa18ab5d18013f29d7fb246d5a extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 4
            echo "\t";
            if (((isset($context["base_url"]) ? $context["base_url"] : null) == "")) {
                // line 5
                echo "\t    ";
                $context["base_url"] = "/";
                // line 6
                echo "\t";
            }
            // line 7
            echo "
\t<div class = \"pagenav\">
\t\t";
            // line 9
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 10
                echo "\t\t\t";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array())), array("//" => "/"));
                // line 11
                echo "\t\t\t<a rel=\"prev\" href = \"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\"></a>
\t\t";
            }
            // line 12
            echo "\t
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 14
                echo "\t\t\t";
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 15
                    echo "\t\t\t\t<span class = \"current\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span>
\t\t\t";
                } elseif ($this->getAttribute(                // line 16
$context["paginate"], "isInDelta", array())) {
                    // line 17
                    echo "\t\t\t\t";
                    $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 18
                    echo "\t\t\t\t<a href = \"";
                    echo (isset($context["url"]) ? $context["url"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a>
\t\t\t";
                }
                // line 20
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t";
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 22
                echo "\t\t\t";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextURL", array())), array("//" => "/"));
                // line 23
                echo "\t\t\t<a rel=\"next\" href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\"></a>
\t\t";
            }
            // line 25
            echo "\t</div>
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
        return array (  94 => 25,  88 => 23,  85 => 22,  82 => 21,  76 => 20,  68 => 18,  65 => 17,  63 => 16,  58 => 15,  55 => 14,  51 => 13,  48 => 12,  42 => 11,  39 => 10,  37 => 9,  33 => 7,  30 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#Based on the PinPress theme#}

{% if pagination|length > 1 %}
\t{% if base_url == '' %}
\t    {% set base_url = '/' %}
\t{% endif %}

\t<div class = \"pagenav\">
\t\t{% if pagination.hasPrev %}
\t\t\t{% set url = (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
\t\t\t<a rel=\"prev\" href = \"{{url}}\"></a>
\t\t{% endif %}\t
\t\t{% for paginate in pagination %}
\t\t\t{% if paginate.isCurrent %}
\t\t\t\t<span class = \"current\">{{ paginate.number }}</span>
\t\t\t{% elseif paginate.isInDelta %}
\t\t\t\t{% set url = (base_url ~ pagination.params ~ paginate.url) | replace ({'//':'/'}) %}
\t\t\t\t<a href = \"{{ url }}\">{{ paginate.number }}</a>
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t{% if pagination.hasNext %}
\t\t\t{% set url = (base_url ~ pagination.params ~ pagination.nextURL)|replace({'//':'/'}) %}
\t\t\t<a rel=\"next\" href=\"{{ url }}\"></a>
\t\t{% endif %}
\t</div>
{% endif %}", "partials/pagination.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\pagination.html.twig");
    }
}
