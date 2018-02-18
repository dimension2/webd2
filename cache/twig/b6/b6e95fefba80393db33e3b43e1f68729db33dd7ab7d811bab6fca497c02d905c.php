<?php

/* item.html.twig */
class __TwigTemplate_5266b21e247180c2003d53779dfaea14d6afe6171472cc3c3720256519267f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        // line 3
        $context["site_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        // line 5
        $context["dateformat"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) : ("F d, Y"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<article class = \"postcontent container uk-container\">

\t\t<header class=\"postheader\">
\t\t\t";
        // line 11
        $this->loadTemplate("partials/post.html.twig", "item.html.twig", 11)->display($context);
        // line 12
        echo "\t\t</header>

\t\t";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t<hr>

\t\t<footer class=\"postfooter\">

\t        ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 20
            echo "\t \t   <span class=\"tags\" style=\"display: inline\">
\t        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 22
                echo "\t\t\t\t<span class=\"p-hashtag\">#<a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["site_url"]) ? $context["site_url"] : null), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"p-tag\">";
                echo $context["tag"];
                echo "</a></span>
\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t    \t</span>
\t    \t";
        }
        // line 26
        echo "\t    \t<div class=\"emailcomment\">
\t    \t\t<a href = \"mailto:dimension2@live.com?subject=[dimension2.in] Re: ";
        // line 27
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "&body=";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Comment via email</a>
\t    \t</div>
\t    \t<div class=\"ratings\">
\t    \t\t<span class=\"thumbs>\">";
        // line 30
        echo call_user_func_array($this->env->getFunction('thumbs')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array())));
        echo "</span>
\t    \t</div>
\t    \t<div class=\"share\">
\t    \t\t<span class=\"\">Share on: </span>
\t    \t\t<span class=\"sTwitter sicon\"><a href=\"https://twitter.com/intent/tweet?text=";
        // line 34
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "&url=";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Twitter</a></span>
\t    \t\t<span class=\"sFacebook sicon\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 35
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Facebook</a></span>
\t    \t\t<span class=\"sgplus sicon\"><a href=\"https://plus.google.com/share?url=";
        // line 36
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Google+</a></span>
\t    \t\t<span class=\"semail sicon\"><a href=\"mailto:dimension2@live.com?subject=[dimension2.in] ";
        // line 37
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "&body=";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Email</a></span>
\t    \t</div>


    \t</footer>

    </article>
";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "\t<div class=\"relfooter\">
\t\t";
        // line 48
        $this->loadTemplate("partials/footer.html.twig", "item.html.twig", 48)->display($context);
        // line 49
        echo "\t</div>
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
        return array (  137 => 49,  135 => 48,  132 => 47,  129 => 46,  115 => 37,  111 => 36,  107 => 35,  101 => 34,  94 => 30,  86 => 27,  83 => 26,  79 => 24,  65 => 22,  61 => 21,  58 => 20,  56 => 19,  48 => 14,  44 => 12,  42 => 11,  37 => 8,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
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

{% set site_url = page.parent.url %}

{% set dateformat = admin.page.dateformat ?: config.system.pages.dateformat.short ?: \"F d, Y\" %}

{% block content %}
\t<article class = \"postcontent container uk-container\">

\t\t<header class=\"postheader\">
\t\t\t{% include 'partials/post.html.twig' %}
\t\t</header>

\t\t{{ page.content }}
\t\t<hr>

\t\t<footer class=\"postfooter\">

\t        {% if page.taxonomy.tag %}
\t \t   <span class=\"tags\" style=\"display: inline\">
\t        {% for tag in page.taxonomy.tag %}
\t\t\t\t<span class=\"p-hashtag\">#<a href=\"{{site_url|rtrim('/')}}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-tag\">{{ tag }}</a></span>
\t\t    {% endfor %}
\t    \t</span>
\t    \t{% endif %}
\t    \t<div class=\"emailcomment\">
\t    \t\t<a href = \"mailto:dimension2@live.com?subject=[dimension2.in] Re: {{page.title }}&body={{ page.url(true) }}\">Comment via email</a>
\t    \t</div>
\t    \t<div class=\"ratings\">
\t    \t\t<span class=\"thumbs>\">{{ thumbs(page.slug) }}</span>
\t    \t</div>
\t    \t<div class=\"share\">
\t    \t\t<span class=\"\">Share on: </span>
\t    \t\t<span class=\"sTwitter sicon\"><a href=\"https://twitter.com/intent/tweet?text={{ page.title }}&url={{page.url(true)}}\">Twitter</a></span>
\t    \t\t<span class=\"sFacebook sicon\"><a href=\"https://www.facebook.com/sharer/sharer.php?u={{ page.url(true) }}\">Facebook</a></span>
\t    \t\t<span class=\"sgplus sicon\"><a href=\"https://plus.google.com/share?url={{ page.url(true) }}\">Google+</a></span>
\t    \t\t<span class=\"semail sicon\"><a href=\"mailto:dimension2@live.com?subject=[dimension2.in] {{page.title }}&body={{ page.url(true) }}\">Email</a></span>
\t    \t</div>


    \t</footer>

    </article>
{% endblock %}

{% block footer %}
\t<div class=\"relfooter\">
\t\t{% include 'partials/footer.html.twig' %}
\t</div>
{% endblock %}
", "item.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\item.html.twig");
    }
}
