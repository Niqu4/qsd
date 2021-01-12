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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm */
class __TwigTemplate_b546a7a2318ba359da91f159f0fbb58e10320349ac2e42f8029b1df6fe7a9e2d extends \Twig\Template
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
        echo "\">На главную</a></li>
        <li><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("calc");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "id", [], "any", false, false, true, 5) == "calc")) {
            echo "active";
        }
        echo "\">Тарифный калькулятор</a></li>
        <li><a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tracking");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "id", [], "any", false, false, true, 6) == "tracking")) {
            echo "active";
        }
        echo "\">Трекинг</a></li>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("lichnyj-kabinet");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "id", [], "any", false, false, true, 7) == "lichnyj-kabinet")) {
            echo "active";
        }
        echo "\">Личный кабинет</a></li>
        <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("oformit-zakaz");
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "id", [], "any", false, false, true, 8) == "oformit-zakaz")) {
            echo "active";
        }
        echo "\">Оформить заказ</a></li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm";
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
        <li><a href=\"{{ 'home'|page }}\">На главную</a></li>
        <li><a href=\"{{ 'calc'|page }}\" class=\"{% if this.page.id == 'calc' %}active{% endif %}\">Тарифный калькулятор</a></li>
        <li><a href=\"{{ 'tracking'|page }}\" class=\"{% if this.page.id == 'tracking' %}active{% endif %}\">Трекинг</a></li>
        <li><a href=\"{{ 'lichnyj-kabinet'|page }}\" class=\"{% if this.page.id == 'lichnyj-kabinet' %}active{% endif %}\">Личный кабинет</a></li>
        <li><a href=\"{{ 'oformit-zakaz'|page }}\" class=\"{% if this.page.id == 'oformit-zakaz' %}active{% endif %}\">Оформить заказ</a></li>
    </ul>
</nav>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm", "");
    }
}
