<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_db609cfa66c9d57ab878885dbd29b8a82bd39456659a4b3781ac3a59935fb175 extends Twig_Template
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
        echo "<div>
   <input class=\"uk-search-input search-input\" type=\"search\" placeholder=\"Enter text...\" autofocus value=\"";
        // line 2
        echo (isset($context["query"]) ? $context["query"] : null);
        echo "\" data-search-input=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array()) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array()) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array())))));
        echo "/query\" />
   
    <script>

        var i, el;
        var input = document.getElementsByClassName('search-input');
        var searchInput = input[0].dataset.searchInput;

        for(i=0; i<input.length; i++) {
            el = input[i];
            el.addEventListener(\"keypress\", function(event){
                if (event.keyCode == 13 && this.value.length >= ";
        // line 13
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "plugins.simplesearch.min_query_length", 1 => 3), "method");
        echo ") {
                    event.preventDefault();
                    window.location.href = searchInput + '";
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "' + this.value;
                }
            }, false);
        }

        ";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "display_button", array())) {
            // line 21
            echo "        var button = document.getElementsByClassName('search-submit');
        for(i=0; i<input.length; i++) {
            el = button[i];
            if(el){
            el.addEventListener(\"click\", function(event){
                event.preventDefault();
                window.location.href = searchInput + '";
            // line 27
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "' + input[0].value;
            });
            }
        }
        ";
        }
        // line 32
        echo "
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 32,  62 => 27,  54 => 21,  52 => 20,  44 => 15,  39 => 13,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
   <input class=\"uk-search-input search-input\" type=\"search\" placeholder=\"Enter text...\" autofocus value=\"{{ query }}\" data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route == '@self' ? '' : (config.plugins.simplesearch.route == '/' ? '' : config.plugins.simplesearch.route) }}/query\" />
   
    <script>

        var i, el;
        var input = document.getElementsByClassName('search-input');
        var searchInput = input[0].dataset.searchInput;

        for(i=0; i<input.length; i++) {
            el = input[i];
            el.addEventListener(\"keypress\", function(event){
                if (event.keyCode == 13 && this.value.length >= {{ config.get('plugins.simplesearch.min_query_length', 3) }}) {
                    event.preventDefault();
                    window.location.href = searchInput + '{{ config.system.param_sep }}' + this.value;
                }
            }, false);
        }

        {% if config.plugins.simplesearch.display_button %}
        var button = document.getElementsByClassName('search-submit');
        for(i=0; i<input.length; i++) {
            el = button[i];
            if(el){
            el.addEventListener(\"click\", function(event){
                event.preventDefault();
                window.location.href = searchInput + '{{ config.system.param_sep }}' + input[0].value;
            });
            }
        }
        {% endif %}

    </script>
</div>
", "partials/simplesearch_searchbox.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\d2\\user\\themes\\agastya\\templates\\partials\\simplesearch_searchbox.html.twig");
    }
}
