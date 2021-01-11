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

/* C:\xampp\htdocs\install-master/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm */
class __TwigTemplate_14283652c20aad2d39a5d6db0addbd09a7c3ade4c2e0b25c191ac213e19ce63f extends \Twig\Template
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
        $tags = array("if" => 5);
        $filters = array("page" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page'],
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
        echo "<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home Onepager</a></li>
        <!-- <li><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "id", [], "any", false, false, true, 5) == "blog")) {
            echo "active";
        }
        echo "\">Blog</a></li> -->
        <li><a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "id", [], "any", false, false, true, 6) == "generic")) {
            echo "active";
        }
        echo "\">Generic</a></li>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "id", [], "any", false, false, true, 7) == "elements")) {
            echo "active";
        }
        echo "\">Elements</a></li>
<!--         <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("404");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "id", [], "any", false, false, true, 8) == "404")) {
            echo "active";
        }
        echo "\">Not Found</a></li> -->
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 8,  87 => 7,  79 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"{{ 'home'|page }}\">Home Onepager</a></li>
        <!-- <li><a href=\"{{ 'blog'|page }}\" class=\"{% if this.page.id == 'blog' %}active{% endif %}\">Blog</a></li> -->
        <li><a href=\"{{ 'generic'|page }}\" class=\"{% if this.page.id == 'generic' %}active{% endif %}\">Generic</a></li>
        <li><a href=\"{{ 'elements'|page }}\" class=\"{% if this.page.id == 'elements' %}active{% endif %}\">Elements</a></li>
<!--         <li><a href=\"{{ '404'|page }}\" class=\"{% if this.page.id == '404' %}active{% endif %}\">Not Found</a></li> -->
    </ul>
</nav>", "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm", "");
    }
}
