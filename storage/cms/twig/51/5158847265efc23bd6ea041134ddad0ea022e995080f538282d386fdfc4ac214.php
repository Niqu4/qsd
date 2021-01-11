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

/* C:\xampp\htdocs\install-master/themes/zwiebl-zwiebl_stellar/partials/html_base/meta_head.htm */
class __TwigTemplate_e9119300c080e012505bdfec68d784c70cce5369fa30891e6f8ace128787f1b9 extends \Twig\Template
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
        $tags = array("if" => 11, "styles" => 24);
        $filters = array("escape" => 4, "default" => 4, "theme" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'styles'],
                ['escape', 'default', 'theme'],
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
        echo "<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 4), "meta_description", [], "any", true, true, true, 4)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 4), "meta_description", [], "any", false, false, true, 4), 4, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "description", [], "any", false, false, true, 4), 4, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "description", [], "any", false, false, true, 4))), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "keywords", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "website_author", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "website_name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 7), "meta_title", [], "any", true, true, true, 7)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7))), "html", null, true);
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "website_url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon.png");
        echo "\" />

    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "load_google_fonts", [], "any", false, false, true, 11)) {
            // line 12
            echo "    <link href=\"https://fonts.googleapis.com/css?family=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "google_font_family", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 14
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 14), "load_fontawesome", [], "any", false, false, true, 14)) {
            // line 15
            echo "    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    ";
        }
        // line 17
        echo "
    <!--[if lte IE 8]><script src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/ie/html5shiv.js");
        echo "\"></script><![endif]-->
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/ie9.css"]);
        echo "\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/ie8.css"]);
        echo "\" /><![endif]-->


    <link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/main.css", 1 => "assets/sass/zw_custom.scss"]);
        echo "\" rel=\"stylesheet\">
    ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/html_base/meta_head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 24,  126 => 23,  120 => 20,  116 => 19,  112 => 18,  109 => 17,  105 => 15,  102 => 14,  96 => 12,  94 => 11,  89 => 9,  85 => 8,  79 => 7,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
    <meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
    <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
    <title>{{ this.theme.website_name }} - {{ this.page.meta_title|default(this.page.title) }}</title>
    <link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/icon.png'|theme }}\" />

    {% if this.theme.load_google_fonts %}
    <link href=\"https://fonts.googleapis.com/css?family={{ this.theme.google_font_family }}\" rel=\"stylesheet\">
    {% endif %}
    {% if this.theme.load_fontawesome %}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    {% endif %}

    <!--[if lte IE 8]><script src=\"{{ 'assets/js/ie/html5shiv.js'|theme }}\"></script><![endif]-->
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"{{ ['assets/css/ie9.css']|theme }}\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"{{ ['assets/css/ie8.css']|theme }}\" /><![endif]-->


    <link href=\"{{ ['assets/css/main.css', 'assets/sass/zw_custom.scss']|theme }}\" rel=\"stylesheet\">
    {% styles %}", "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/html_base/meta_head.htm", "");
    }
}
