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

/* C:\xampp\htdocs\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm */
class __TwigTemplate_57e7f103b98f5a2b0a1b47a6e6870fa215aa3566e3e119dc7b28759df446d3ba extends \Twig\Template
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
        $filters = array("theme" => 7, "page" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
        echo "<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Услуги</h2>
    </header>
    <ul class=\"features\">
        <li style = \"display:flex; flex-direction:column; justify-content:space-between\">
            <div class=\"12u\"><span class=\"image fit\"><img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/phys.jpg");
        echo "\" alt=\"Доставка\" /></span></div>
            <h3>Физические лица</h3>
            <p> Мы предоставляем услуги по доставке документов и грузов по территории Казахстана и России</p>
            <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("phys");
        echo "\" class=\"button\">Подробнее</a>
        </li>
        <li style = \"display:flex; flex-direction:column; justify-content:space-between\">
            <div class=\"12u\"><span class=\"image fit\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jur.jpg");
        echo "\" alt=\"Доставка\" /></span></div>
            <h3>Юридические лица</h3>
            <p>Наша компания предлагает широкий спектр услуг по доставке документов и грузов юридическим лицам</p>
            <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("jur");
        echo "\" class=\"button\">Подробнее</a>
        </li>
        <li style = \"display:flex; flex-direction:column; justify-content:space-between\">
            <div class=\"12u\$\"><span class=\"image fit\"><img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/internet_shop.jpg");
        echo "\" alt=\"Доставка\" /></span></div>
            <h3>Интернет магазины</h3>
            <p>Мы предлагаем комплекс логистических услуг для интернет-магазинов и других компаний дистанционной торговли и электронной коммерции</p>
            <a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("internet-shop");
        echo "\" class=\"button\">Подробнее</a>
        </li>
    </ul>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  94 => 19,  88 => 16,  82 => 13,  76 => 10,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Услуги</h2>
    </header>
    <ul class=\"features\">
        <li style = \"display:flex; flex-direction:column; justify-content:space-between\">
            <div class=\"12u\"><span class=\"image fit\"><img src=\"{{'assets/images/phys.jpg'|theme}}\" alt=\"Доставка\" /></span></div>
            <h3>Физические лица</h3>
            <p> Мы предоставляем услуги по доставке документов и грузов по территории Казахстана и России</p>
            <a href=\"{{'phys'|page}}\" class=\"button\">Подробнее</a>
        </li>
        <li style = \"display:flex; flex-direction:column; justify-content:space-between\">
            <div class=\"12u\"><span class=\"image fit\"><img src=\"{{'assets/images/jur.jpg'|theme}}\" alt=\"Доставка\" /></span></div>
            <h3>Юридические лица</h3>
            <p>Наша компания предлагает широкий спектр услуг по доставке документов и грузов юридическим лицам</p>
            <a href=\"{{'jur'|page}}\" class=\"button\">Подробнее</a>
        </li>
        <li style = \"display:flex; flex-direction:column; justify-content:space-between\">
            <div class=\"12u\$\"><span class=\"image fit\"><img src=\"{{'assets/images/internet_shop.jpg'|theme}}\" alt=\"Доставка\" /></span></div>
            <h3>Интернет магазины</h3>
            <p>Мы предлагаем комплекс логистических услуг для интернет-магазинов и других компаний дистанционной торговли и электронной коммерции</p>
            <a href=\"{{'internet-shop'|page}}\" class=\"button\">Подробнее</a>
        </li>
    </ul>
</section>", "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm", "");
    }
}
