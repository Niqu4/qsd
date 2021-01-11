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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/pages/internet-shop.htm */
class __TwigTemplate_c29858608906f99fbf8e531c1e14c5935d882a85ae7719bcde48c3af96978749 extends \Twig\Template
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
        $filters = array("theme" => 1, "page" => 19);
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
        echo "<span class=\"image main\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/internet_shop2.jpg");
        echo "\" alt=\"\"></span>
<h2>Интернет магазины</h2>
    <p>
        Компания «QSD» предлагает комплекс логистических услуг для интернет-магазинов и других компаний дистанционной торговли. Мы обладаем ресурсами для быстрой и качественной доставки по всей территории Казахстана. <br><br>

        Специально для обработки подобных заказов у нас работает call-центр.<br><br>
    
        Мы сделаем все за Вас: примем товар, доставим до Вашего клиента, примем наложенный платеж и перечислим оплату за товар на Ваш счет.<br><br>
    
        Для удобства наших клиентов, мы предоставляем следующие услуги:
        <ul>
            <li> Услуги личного кабинета;
            <li> Е-mail и смс уведомление о доставке;
            <li> Предоставление бесплатного расходного материала (конверты накладные);
            <li> Бесплатный единый номер по Казахстану 58 48 66, 8 (707) 258 48 66. 
        </ul>
    </p>
<ul class=\"actions\">
    <li><a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\" class=\"button\">View Elements Page</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/internet-shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"image main\"><img src=\"{{'assets/images/internet_shop2.jpg'|theme}}\" alt=\"\"></span>
<h2>Интернет магазины</h2>
    <p>
        Компания «QSD» предлагает комплекс логистических услуг для интернет-магазинов и других компаний дистанционной торговли. Мы обладаем ресурсами для быстрой и качественной доставки по всей территории Казахстана. <br><br>

        Специально для обработки подобных заказов у нас работает call-центр.<br><br>
    
        Мы сделаем все за Вас: примем товар, доставим до Вашего клиента, примем наложенный платеж и перечислим оплату за товар на Ваш счет.<br><br>
    
        Для удобства наших клиентов, мы предоставляем следующие услуги:
        <ul>
            <li> Услуги личного кабинета;
            <li> Е-mail и смс уведомление о доставке;
            <li> Предоставление бесплатного расходного материала (конверты накладные);
            <li> Бесплатный единый номер по Казахстану 58 48 66, 8 (707) 258 48 66. 
        </ul>
    </p>
<ul class=\"actions\">
    <li><a href=\"{{ 'elements'|page }}\" class=\"button\">View Elements Page</a></li>
</ul>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/internet-shop.htm", "");
    }
}
