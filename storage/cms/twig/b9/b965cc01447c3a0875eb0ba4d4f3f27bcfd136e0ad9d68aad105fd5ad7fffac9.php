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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/pages/shymkent.htm */
class __TwigTemplate_d18350f2a2fd2cf43eb1595c444f3c9f4a370e16581a70a24ac482186dde145a extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<script src=\"https://maps.api.2gis.ru/2.0/loader.js?pkg=full\"></script>
            <script type=\"text/javascript\">
                var map;
    
                DG.then(function () {
                    map = DG.map('map', {
                        center: [42.351582, 69.584953],
                        zoom: 17
                    });
    
                    DG.marker([42.351892, 69.584622]).addTo(map).bindPopup('KZQSD, офис в г. Шымкент');
                });
    </script>
    <h2> Мы на карте: </h2>
    <h4><a  class=\"hvr-sweep-to-top\" href=\"https://go.2gis.com/likqub\" target=\"_blank\"> ул. Рыскулова 84</h4> </a>
    <div id=\"map\" style=\"width:100%; height:400px; margin-bottom: 10%\"></div>

<h2> Тарифы для доставки в черте города (1-2 дня) </h2>
<table id=inner-city>
<thead><tr><th>Вес (кг) </th><th>Стоимость доставки</th></tr></thead><tbody>
 <tr><td>≤ 1,0</td><td>800
 <tr><td>≤ 3,0</td><td>900
 <tr><td>≤ 5,0</td><td>1 000
 <tr><td>≤ 10,0</td><td>1 500
</tbody></table>




<h2> Тарифы для доставки (1 кг.) в другие города для г. Шымкент </h2>
<table>
<thead><tr><th>Город-получатель</th><th>\"Дверь-Дверь\", тнг</th><th>\"Склад-Дверь\", тнг</th><th>\"Склад-Склад\", тнг</th></tr></thead><tbody>
 <tr><td>Аксай</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Аксу</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Актау</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Актобе</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Алматы</td><td>2000</td><td>1700</td><td>1400</td></tr>
 <tr><td>Атырау</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Бадамша</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Байконур</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Балхаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Бейнеу</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Жанаозен</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Жезказган</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Кандыагаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Караганда</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Кентау</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Кокшетау</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Костанай</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Кульсары</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Кызылорда</td><td>2000</td><td>1700</td><td>1400</td></tr>
 <tr><td>Нур - Султан</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Оскемен</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Павлодар</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Петропавловск</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Рудный</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Сарыагаш</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Семей</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Степногорск</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Талдыкорган</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Тараз</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Темиртау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Туркестан</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Уральск</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Хромтау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
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
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/shymkent.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://maps.api.2gis.ru/2.0/loader.js?pkg=full\"></script>
            <script type=\"text/javascript\">
                var map;
    
                DG.then(function () {
                    map = DG.map('map', {
                        center: [42.351582, 69.584953],
                        zoom: 17
                    });
    
                    DG.marker([42.351892, 69.584622]).addTo(map).bindPopup('KZQSD, офис в г. Шымкент');
                });
    </script>
    <h2> Мы на карте: </h2>
    <h4><a  class=\"hvr-sweep-to-top\" href=\"https://go.2gis.com/likqub\" target=\"_blank\"> ул. Рыскулова 84</h4> </a>
    <div id=\"map\" style=\"width:100%; height:400px; margin-bottom: 10%\"></div>

<h2> Тарифы для доставки в черте города (1-2 дня) </h2>
<table id=inner-city>
<thead><tr><th>Вес (кг) </th><th>Стоимость доставки</th></tr></thead><tbody>
 <tr><td>≤ 1,0</td><td>800
 <tr><td>≤ 3,0</td><td>900
 <tr><td>≤ 5,0</td><td>1 000
 <tr><td>≤ 10,0</td><td>1 500
</tbody></table>




<h2> Тарифы для доставки (1 кг.) в другие города для г. Шымкент </h2>
<table>
<thead><tr><th>Город-получатель</th><th>\"Дверь-Дверь\", тнг</th><th>\"Склад-Дверь\", тнг</th><th>\"Склад-Склад\", тнг</th></tr></thead><tbody>
 <tr><td>Аксай</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Аксу</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Актау</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Актобе</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Алматы</td><td>2000</td><td>1700</td><td>1400</td></tr>
 <tr><td>Атырау</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Бадамша</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Байконур</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Балхаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Бейнеу</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Жанаозен</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Жезказган</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Кандыагаш</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Караганда</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Кентау</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Кокшетау</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Костанай</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Кульсары</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Кызылорда</td><td>2000</td><td>1700</td><td>1400</td></tr>
 <tr><td>Нур - Султан</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Оскемен</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Павлодар</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Петропавловск</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Рудный</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Сарыагаш</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Семей</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Степногорск</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Талдыкорган</td><td>2200</td><td>1900</td><td>&nbsp;</td></tr>
 <tr><td>Тараз</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Темиртау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td>Туркестан</td><td>2000</td><td>1700</td><td>&nbsp;</td></tr>
 <tr><td>Уральск</td><td>2200</td><td>1900</td><td>1600</td></tr>
 <tr><td>Хромтау</td><td>2800</td><td>&nbsp;</td><td>&nbsp;</td></tr>
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
</iframe>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/shymkent.htm", "");
    }
}
