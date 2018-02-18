<?php

/* partials/nav.html.twig */
class __TwigTemplate_e5ddb7578d651845c3049c893452ee166f83a3f23456eaba2b28822dda272187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'search' => array($this, 'block_search'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"siteheader uk-navbar-transparent\" uk-navbar>
    <!--Logo-->
    <div class=\"nav-overlay uk-navbar-left\"tgm>
      <a class=\"uk-logo\" href=\"";
        // line 4
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
      <img src= \"";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.svg");
        echo "\">
      </a>
    </div>

    <!--Search Icon-->
    <div class=\"nav-overlay uk-navbar-right\">
       <a class=\"uk-navbar-toggle\" uk-search-icon uk-toggle=\"target: .nav-overlay; animation: uk-animation-fade\" href=\"#\"></a>
    </div>

    <div class=\"nav-overlay uk-navbar-right uk-flex-1\" hidden>
      <div class=\"uk-navbar-item uk-width-expand\">
        <form class=\"uk-search uk-search-navbar uk-width-1-1\">
          ";
        // line 17
        $this->displayBlock('search', $context, $blocks);
        // line 19
        echo "  
        </form>
      </div>
      <a class=\"uk-navbar-toggle\" uk-close uk-toggle=\"target: .nav-overlay; animation: uk-animation-fade\" href=\"#\"></a>
    </div>

    <!--Menu Button-->
    <nav class=\"uk-height-match\">
        <button type=\"button\" id =\"mainnav\" class=\"\">MENU &#x25BC;</button>
        <div uk-dropdown = \"offset: 10; pos:bottom-right; mode: click\">
          <ul>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 31
            echo "              <li class=\"pure-menu-item\">
                <a href=\"";
            // line 32
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"pure-menu-link\">";
            echo $this->getAttribute($context["p"], "menu", array());
            echo "</a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "          </ul>
        </div>
    </nav>

</header>
";
    }

    // line 17
    public function block_search($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        $this->loadTemplate("partials/search.html.twig", "partials/nav.html.twig", 18)->display($context);
        // line 19
        echo "          ";
    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  89 => 18,  86 => 17,  77 => 35,  66 => 32,  63 => 31,  59 => 30,  46 => 19,  44 => 17,  29 => 5,  25 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"siteheader uk-navbar-transparent\" uk-navbar>
    <!--Logo-->
    <div class=\"nav-overlay uk-navbar-left\"tgm>
      <a class=\"uk-logo\" href=\"{{ base_url == '' ? '/' : base_url }}\">
      <img src= \"{{ url('theme://images/logo.svg') }}\">
      </a>
    </div>

    <!--Search Icon-->
    <div class=\"nav-overlay uk-navbar-right\">
       <a class=\"uk-navbar-toggle\" uk-search-icon uk-toggle=\"target: .nav-overlay; animation: uk-animation-fade\" href=\"#\"></a>
    </div>

    <div class=\"nav-overlay uk-navbar-right uk-flex-1\" hidden>
      <div class=\"uk-navbar-item uk-width-expand\">
        <form class=\"uk-search uk-search-navbar uk-width-1-1\">
          {% block search %}
            {% include 'partials/search.html.twig' %}
          {% endblock %}  
        </form>
      </div>
      <a class=\"uk-navbar-toggle\" uk-close uk-toggle=\"target: .nav-overlay; animation: uk-animation-fade\" href=\"#\"></a>
    </div>

    <!--Menu Button-->
    <nav class=\"uk-height-match\">
        <button type=\"button\" id =\"mainnav\" class=\"\">MENU &#x25BC;</button>
        <div uk-dropdown = \"offset: 10; pos:bottom-right; mode: click\">
          <ul>
            {% for p in pages.children.visible %}
              <li class=\"pure-menu-item\">
                <a href=\"{{ p.url }}\" class=\"pure-menu-link\">{{ p.menu }}</a>
              </li>
            {% endfor %}
          </ul>
        </div>
    </nav>

</header>
", "partials/nav.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\nav.html.twig");
    }
}
