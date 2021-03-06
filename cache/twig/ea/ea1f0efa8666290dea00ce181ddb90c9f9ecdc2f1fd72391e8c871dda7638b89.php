<?php

/* item.html.twig */
class __TwigTemplate_dc95378bb2e72ae1ef6d40628e69774399940deb756dd8a2b693af43db550f1e extends Twig_Template
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
        $context["dateformat"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "dateformat", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) : ("F d, Y"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<article class = \"postcontent container uk-container\">

\t\t<header class=\"postheader\">
\t\t\t";
        // line 9
        $this->loadTemplate("partials/post.html.twig", "item.html.twig", 9)->display($context);
        // line 10
        echo "\t\t</header>

\t\t";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t<hr>

\t\t<footer class=\"postfooter\">

\t        ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 18
            echo "\t \t   <span class=\"tags\" style=\"display: inline\">
\t        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 20
                echo "\t\t\t\t<span class=\"p-hashtag\">#<a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url"]) ? $context["base_url"] : null), "/");
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
            // line 22
            echo "\t    \t</span>
\t    \t";
        }
        // line 24
        echo "\t    \t<div class=\"emailcomment\">
\t    \t\t<a href = \"mailto:dimension2@live.com?subject=[dimension2.in] Re:";
        // line 25
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "&body=";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Comment via email</a>
\t    \t</div>
\t    \t<div class=\"ratings\">
\t    \t\t<span class=\"thumbs>\">";
        // line 28
        echo call_user_func_array($this->env->getFunction('thumbs')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array())));
        echo "</span>
\t    \t</div>
\t    \t<div class=\"share\">
\t    \t\t<span class=\"\">Share on: </span>
\t    \t\t<span class=\"sTwitter sicon\"><a href=\"https://twitter.com/intent/tweet?text=";
        // line 32
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "&url=";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Twitter</a></span>
\t    \t\t<span class=\"sFacebook sicon\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 33
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Facebook</a></span>
\t    \t\t<span class=\"sgplus sicon\"><a href=\"https://plus.google.com/share?url=";
        // line 34
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Google+</a></span>
\t    \t\t<span class=\"semail sicon\"><a href=\"mailto:dimension2@live.com?subject=[dimension2.in] ";
        // line 35
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "&body=";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">Email</a></span>
\t    \t</div>


    \t</footer>

    </article>
";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "\t<div class=\"relfooter\">
\t\t";
        // line 46
        $this->loadTemplate("partials/footer.html.twig", "item.html.twig", 46)->display($context);
        // line 47
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
        return array (  135 => 47,  133 => 46,  130 => 45,  127 => 44,  113 => 35,  109 => 34,  105 => 33,  99 => 32,  92 => 28,  84 => 25,  81 => 24,  77 => 22,  63 => 20,  59 => 19,  56 => 18,  54 => 17,  46 => 12,  42 => 10,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
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
\t\t\t\t<span class=\"p-hashtag\">#<a href=\"{{base_url|rtrim('/')}}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-tag\">{{ tag }}</a></span>
\t\t    {% endfor %}
\t    \t</span>
\t    \t{% endif %}
\t    \t<div class=\"emailcomment\">
\t    \t\t<a href = \"mailto:dimension2@live.com?subject=[dimension2.in] Re:{{page.title }}&body={{ page.url(true) }}\">Comment via email</a>
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
