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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/partials/home_page/section_three.htm */
class __TwigTemplate_39b5d165f1757439c90e3fcd5928cef527c429defb407927caf0c26d5c9d930b extends \Twig\Template
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
        $tags = array();
        $filters = array("page" => 36);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<!-- Third Section -->
<section id=\"three\" class=\"main\">
    <header class=\"major\">
        <h2>Сроки доставки</h2>
        <p>Мы предлагаем 3 вида доставки:</p>
    </header>
    <ul class=\"statistics\">
        <li class=\"style1\">
            <strong>Экспресс</strong> 
            \t<ul>
            \t\t<li>Режим Дверь-Дверь </li>
            \t    <li>Областные центры РК — 2-4 рабочих дня </li>
            \t    <li>Районные центры РК — 4-6 рабочих дня </li>
            \t    <li>По городу — 1-2 рабочих дня </li>
                </ul>
        </li>
        <li class=\"style2\">
            <strong>Супер-Экспресс</strong> 
            \t<ul>
            \t\t<li>Режим Дверь-Дверь </li>
            \t    <li>Областные центры РК — 1 день </li>
            \t    <li>*Услуга доступна с ограничениями по городам</li>
            \t    <li>Подробности в call-center
        </li>
                </ul>
        </li>
        <li class=\"style3\">
            <strong>Эконом</strong> 
            \t<ul>
            \t\t<li>Областные центры РК — 4-8 рабочих дней</li>
                </ul>
        </li>
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">Заказать звонок?</a></li>
        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/home_page/section_three.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Third Section -->
<section id=\"three\" class=\"main\">
    <header class=\"major\">
        <h2>Сроки доставки</h2>
        <p>Мы предлагаем 3 вида доставки:</p>
    </header>
    <ul class=\"statistics\">
        <li class=\"style1\">
            <strong>Экспресс</strong> 
            \t<ul>
            \t\t<li>Режим Дверь-Дверь </li>
            \t    <li>Областные центры РК — 2-4 рабочих дня </li>
            \t    <li>Районные центры РК — 4-6 рабочих дня </li>
            \t    <li>По городу — 1-2 рабочих дня </li>
                </ul>
        </li>
        <li class=\"style2\">
            <strong>Супер-Экспресс</strong> 
            \t<ul>
            \t\t<li>Режим Дверь-Дверь </li>
            \t    <li>Областные центры РК — 1 день </li>
            \t    <li>*Услуга доступна с ограничениями по городам</li>
            \t    <li>Подробности в call-center
        </li>
                </ul>
        </li>
        <li class=\"style3\">
            <strong>Эконом</strong> 
            \t<ul>
            \t\t<li>Областные центры РК — 4-8 рабочих дней</li>
                </ul>
        </li>
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">Заказать звонок?</a></li>
        </ul>
    </footer>
</section>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/home_page/section_three.htm", "");
    }
}
