<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\install-master/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm */
class __TwigTemplate_67066625a49eb22b5bc3164ffe3f68615384e24f99ccfb70afa844ae136c9740 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("partial" => 3, "page" => 10, "if" => 12);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page', 'if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
<head>
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/meta_head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</head>
<body>
    <div id=\"wrapper\">
        ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        <div id=\"main\">
            ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 11
        echo "
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "show_section_one", [], "any", false, false, true, 12)) {
            // line 13
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_one"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 16), "show_section_two", [], "any", false, false, true, 16)) {
            // line 17
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_two"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "            ";
        }
        // line 19
        echo "
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 20), "show_section_three", [], "any", false, false, true, 20)) {
            // line 21
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_three"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "            ";
        }
        // line 23
        echo "
            ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 24), "show_section_four", [], "any", false, false, true, 24)) {
            // line 25
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_four"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "            ";
        }
        // line 27
        echo "        </div>
        ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    </div>
    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 31,  151 => 30,  148 => 29,  144 => 28,  141 => 27,  138 => 26,  133 => 25,  131 => 24,  128 => 23,  125 => 22,  120 => 21,  118 => 20,  115 => 19,  112 => 18,  107 => 17,  105 => 16,  102 => 15,  99 => 14,  94 => 13,  92 => 12,  89 => 11,  87 => 10,  84 => 9,  79 => 8,  75 => 7,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    {% partial \"html_base/meta_head\" %}
</head>
<body>
    <div id=\"wrapper\">
        {% partial \"all_pages/header\" %}
        {% partial \"home_page/navigation\" %}
        <div id=\"main\">
            {% page %}

            {% if this.theme.show_section_one %}
                {% partial \"home_page/section_one\" %}
            {% endif %}

            {% if this.theme.show_section_two %}
                {% partial \"home_page/section_two\" %}
            {% endif %}

            {% if this.theme.show_section_three %}
                {% partial \"home_page/section_three\" %}
            {% endif %}

            {% if this.theme.show_section_four %}
                {% partial \"home_page/section_four\" %}
            {% endif %}
        </div>
        {% partial \"all_pages/footer\" %}
    </div>
    {% partial \"html_base/scripts\" %}
</body>
</html>", "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm", "");
    }
}
