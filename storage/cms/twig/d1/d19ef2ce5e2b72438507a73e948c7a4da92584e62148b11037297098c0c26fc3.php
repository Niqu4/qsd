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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/pages/semey.htm */
class __TwigTemplate_c0a3444b5c5644c7070a17b8b7a1b28675e312d4b0d96a86da6d32dceda82a2c extends \Twig\Template
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
        $filters = array("escape" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<h2> Мы на карте: </h2>
    <h4><a  class=\"hvr-sweep-to-top\" href=\"https://goo.gl/maps/PFS437dYzxvXK9A5A\" target=\"_blank\"> пр. Шакарима 67/1 офис 5</h4> </a>
    
<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1271.1525113554603!2d80.25463698047503!3d50.41678835954722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42f26549e40570f9%3A0x27f183e2161d6400!2z0L_RgNC-0YHQvy4g0KjQsNC60LDRgNC40LzQsCA2Ny8xLCDQodC10LzQtdC5IDA3MDAwMA!5e0!3m2!1sru!2skz!4v1610103831507!5m2!1sru!2skz\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0; margin-bottom: 10%\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>

<h2> Тарифы для доставки в черте города (1-2 дня) </h2>
<table id=inner-city>
<thead><tr><th>Вес (кг) </th><th>Стоимость доставки</th></tr></thead><tbody>
 <tr><td>≤ 1,0</td><td>800
 <tr><td>≤ 3,0</td><td>900
 <tr><td>≤ 5,0</td><td>1 000
 <tr><td>≤ 10,0</td><td>1 500
</tbody></table>




<h2> Тарифы для доставки (1 кг.) в другие города для г. ";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo " </h2>
<table>
<thead><tr><th>Город-получатель</th><th>\"Дверь-Дверь\", тнг</th><th>\"Склад-Дверь\", тнг</th><th>\"Склад-Склад\", тнг</th></tr></thead><tbody>
 <tr><td>Аксай</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Аксу</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Актау</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Актобе</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Алматы</td><td>2000</td><td>1700</td><td>1400</td></tr>
 <tr><td>Атырау</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Бадамша</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Байконур</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Балхаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Бейнеу</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Жанаозен</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Жезказган</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Кандыагаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Караганда</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Кентау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Кокшетау</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Костанай</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Кульсары</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Кызылорда</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Нур - Султан</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Оскемен</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Павлодар</td><td>2000</td><td>1700</td><td>1400</td></tr>
 <tr><td>Петропавловск</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Рудный</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Сарыагаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Степногорск</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Талдыкорган</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Тараз</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Темиртау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Туркестан</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Уральск</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Хромтау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Шымкент</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Экибастуз</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Прочие населенные пункты</td><td>6500</td><td>&nbsp;</td><td></td></tr>
</tbody></table>

<p> 
*Тарифы рассчитаны с НДС; <br>
*Тарифы включают забор/доставку и стандартный упаковочный материал; <br>
*Тарифы рассчитаны для посылки с весом 1кг <br>
*Сроки доставки указаны в рабочих днях, без учета дня забора Отправления; <br>
*Доставка возможна на следующий день, при условии приема Отправления курьером до 15:00 ч.; <br>
*Адреса в черте города, не указанные в таблице городов, рассматриваются индивидуально; <br>
*Тарифы указаны с условием приема с адреса Отправителя и доставки до адреса Получателя; <br>
*Доставка осуществляется в будние дни с 09-00 ч. до 18-00 ч. по времени г.Нур – Султан; <br>
*Вес Отправления округляется в большую сторону до ближайшего значения, соответствующего тарифной сетке. <br>
</p>


<h2> Для более точного расчета стоимости доставки, воспользуйтесь тарифным калькулятором: </h2>
<iframe src=\"https://home.courierexe.ru/108/calculator\" title=\"Тарифный калькулятор\">
</iframe>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/semey.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2> Мы на карте: </h2>
    <h4><a  class=\"hvr-sweep-to-top\" href=\"https://goo.gl/maps/PFS437dYzxvXK9A5A\" target=\"_blank\"> пр. Шакарима 67/1 офис 5</h4> </a>
    
<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1271.1525113554603!2d80.25463698047503!3d50.41678835954722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42f26549e40570f9%3A0x27f183e2161d6400!2z0L_RgNC-0YHQvy4g0KjQsNC60LDRgNC40LzQsCA2Ny8xLCDQodC10LzQtdC5IDA3MDAwMA!5e0!3m2!1sru!2skz!4v1610103831507!5m2!1sru!2skz\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0; margin-bottom: 10%\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>

<h2> Тарифы для доставки в черте города (1-2 дня) </h2>
<table id=inner-city>
<thead><tr><th>Вес (кг) </th><th>Стоимость доставки</th></tr></thead><tbody>
 <tr><td>≤ 1,0</td><td>800
 <tr><td>≤ 3,0</td><td>900
 <tr><td>≤ 5,0</td><td>1 000
 <tr><td>≤ 10,0</td><td>1 500
</tbody></table>




<h2> Тарифы для доставки (1 кг.) в другие города для г. {{ this.page.title }} </h2>
<table>
<thead><tr><th>Город-получатель</th><th>\"Дверь-Дверь\", тнг</th><th>\"Склад-Дверь\", тнг</th><th>\"Склад-Склад\", тнг</th></tr></thead><tbody>
 <tr><td>Аксай</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Аксу</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Актау</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Актобе</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Алматы</td><td>2000</td><td>1700</td><td>1400</td></tr>
 <tr><td>Атырау</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Бадамша</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Байконур</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Балхаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Бейнеу</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Жанаозен</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Жезказган</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Кандыагаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Караганда</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Кентау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Кокшетау</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Костанай</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Кульсары</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Кызылорда</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Нур - Султан</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Оскемен</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Павлодар</td><td>2000</td><td>1700</td><td>1400</td></tr>
 <tr><td>Петропавловск</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Рудный</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Сарыагаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Степногорск</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Талдыкорган</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Тараз</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Темиртау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Туркестан</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Уральск</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Хромтау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Шымкент</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Экибастуз</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Прочие населенные пункты</td><td>6500</td><td>&nbsp;</td><td></td></tr>
</tbody></table>

<p> 
*Тарифы рассчитаны с НДС; <br>
*Тарифы включают забор/доставку и стандартный упаковочный материал; <br>
*Тарифы рассчитаны для посылки с весом 1кг <br>
*Сроки доставки указаны в рабочих днях, без учета дня забора Отправления; <br>
*Доставка возможна на следующий день, при условии приема Отправления курьером до 15:00 ч.; <br>
*Адреса в черте города, не указанные в таблице городов, рассматриваются индивидуально; <br>
*Тарифы указаны с условием приема с адреса Отправителя и доставки до адреса Получателя; <br>
*Доставка осуществляется в будние дни с 09-00 ч. до 18-00 ч. по времени г.Нур – Султан; <br>
*Вес Отправления округляется в большую сторону до ближайшего значения, соответствующего тарифной сетке. <br>
</p>


<h2> Для более точного расчета стоимости доставки, воспользуйтесь тарифным калькулятором: </h2>
<iframe src=\"https://home.courierexe.ru/108/calculator\" title=\"Тарифный калькулятор\">
</iframe>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/semey.htm", "");
    }
}
