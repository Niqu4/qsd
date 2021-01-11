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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm */
class __TwigTemplate_6394ba46ec51039aa0a5b910da7ad1cb3a641b82b46d4a65c3ac23b4e8fa9824 extends \Twig\Template
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
        $filters = array("theme" => 9, "page" => 44);
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
        echo "<section id=\"one\" class=\"main\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>Наши преимущества</h2>
            </header>
            
            <ul class=\"features\">
                <li class = \"li-styles\">
                    <div class=\"12u\"><span class=\"image fit\"><img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/working.jpg");
        echo "\" alt=\"Принимаем заказы без выходных\" /></span></div>
                    <div> 
                        <h3>Практичность</h3> 
                        <p> Для вашего удобства мы принимаем заказы без выходных</p> 
                    </div>
                </li>
                
                <li class = \"li-styles\">
                    <div class=\"12u\"><span class=\"image fit\"><img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/door-to-door.jpg");
        echo "\" alt=\"От двери до двери\" /></span></div>
                    <div> 
                        <h3>Экономия времени</h3> 
                        <p> Работаем в формате \"от двери до двери\" </p> 
                    </div>
                </li>
                
                <li class = \"li-styles\">
                    <div class=\"12u\"><span class=\"image fit\"><img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/envelope.jpg");
        echo "\" alt=\"Услуги трекинга\" /></span></div>
                    <div> 
                        <h3>Трекинг</h3> 
                        <p> Отслеживайте вашу посылку, будучи в курсе о статусе доставки </p> 
                    </div>
                </li>
            </ul>
        </div> 
        
  
        \t<script  src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/splide.min.js");
        echo "\"></script>
\t\t\t
        \t\t\t<div class=\"splide\">
            \t\t    <h2> Выберите город отправления: </h2>
                    \t<div class=\"splide__track\">
                    \t\t<ul class=\"splide__list\">
                    \t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/shymkent.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shymkent");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Шымкент </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/astana.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("astana");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Нур-Султан </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/almaty.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("almaty");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Алматы </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/atyrau.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("atyrau");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Атырау </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/aktau.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("aktau");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Актау </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/aktobe.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("aktobe");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Актобе </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/uralsk.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("uralsk");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Уральск </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/ust-kamenogorsk.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ust-kamenogorsk");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Усть-Каменогорск </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/pavlodar.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pavlodar");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Павлодар </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/kostanay.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("kostanay");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Костанай </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/semey.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("semey");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Семей </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/karaganda.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("karaganda");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Караганда </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/kyzylorda.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("kyzylorda");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Кызылорда </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url(";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cities/taraz.jpg");
        echo ")\">
                    \t\t\t        <a href=\"";
        // line 148
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("taraz");
        echo "\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Тараз </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t

                    \t\t</ul>
                    \t</div>
                    </div>
                    
                    <script>
                        new Splide( '.splide', {
                            direction: 'ttb',
                            height   : '25rem',
                            } ).mount();
                    </script>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 148,  300 => 147,  290 => 140,  286 => 139,  276 => 132,  272 => 131,  262 => 124,  258 => 123,  248 => 116,  244 => 115,  234 => 108,  230 => 107,  220 => 100,  216 => 99,  206 => 92,  202 => 91,  192 => 84,  188 => 83,  178 => 76,  174 => 75,  164 => 68,  160 => 67,  150 => 60,  146 => 59,  136 => 52,  132 => 51,  122 => 44,  118 => 43,  107 => 35,  94 => 25,  83 => 17,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"one\" class=\"main\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>Наши преимущества</h2>
            </header>
            
            <ul class=\"features\">
                <li class = \"li-styles\">
                    <div class=\"12u\"><span class=\"image fit\"><img src=\"{{'assets/images/working.jpg'|theme}}\" alt=\"Принимаем заказы без выходных\" /></span></div>
                    <div> 
                        <h3>Практичность</h3> 
                        <p> Для вашего удобства мы принимаем заказы без выходных</p> 
                    </div>
                </li>
                
                <li class = \"li-styles\">
                    <div class=\"12u\"><span class=\"image fit\"><img src=\"{{'assets/images/door-to-door.jpg'|theme}}\" alt=\"От двери до двери\" /></span></div>
                    <div> 
                        <h3>Экономия времени</h3> 
                        <p> Работаем в формате \"от двери до двери\" </p> 
                    </div>
                </li>
                
                <li class = \"li-styles\">
                    <div class=\"12u\"><span class=\"image fit\"><img src=\"{{'assets/images/envelope.jpg'|theme}}\" alt=\"Услуги трекинга\" /></span></div>
                    <div> 
                        <h3>Трекинг</h3> 
                        <p> Отслеживайте вашу посылку, будучи в курсе о статусе доставки </p> 
                    </div>
                </li>
            </ul>
        </div> 
        
  
        \t<script  src=\"{{'assets/js/splide.min.js'|theme}}\"></script>
\t\t\t
        \t\t\t<div class=\"splide\">
            \t\t    <h2> Выберите город отправления: </h2>
                    \t<div class=\"splide__track\">
                    \t\t<ul class=\"splide__list\">
                    \t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/shymkent.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'shymkent'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Шымкент </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/astana.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'astana'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Нур-Султан </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/almaty.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'almaty'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Алматы </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/atyrau.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'atyrau'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Атырау </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/aktau.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'aktau'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Актау </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/aktobe.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'aktobe'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Актобе </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/uralsk.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'uralsk'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Уральск </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/ust-kamenogorsk.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'ust-kamenogorsk'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Усть-Каменогорск </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/pavlodar.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'pavlodar'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Павлодар </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/kostanay.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'kostanay'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Костанай </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/semey.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'semey'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Семей </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/karaganda.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'karaganda'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Караганда </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/kyzylorda.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'kyzylorda'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Кызылорда </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t
                    \t\t\t<li class=\"splide__slide\">
                    \t\t\t    <i class=\"c-mouse-vertical-carousel__bg-img js-carousel-bg-img\" style=\"background-image: url({{'assets/images/cities/taraz.jpg'|theme}})\">
                    \t\t\t        <a href=\"{{'taraz'|page}}\" target=\"_blank\"> 
                    \t\t\t            <h2 class = \"slider-info\" style=\"color: white;\"> Тараз </h2> 
                \t\t\t            </a>
                    \t\t\t    </i>
                    \t\t\t</li>
                    \t\t\t

                    \t\t</ul>
                    \t</div>
                    </div>
                    
                    <script>
                        new Splide( '.splide', {
                            direction: 'ttb',
                            height   : '25rem',
                            } ).mount();
                    </script>
</section>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm", "");
    }
}
