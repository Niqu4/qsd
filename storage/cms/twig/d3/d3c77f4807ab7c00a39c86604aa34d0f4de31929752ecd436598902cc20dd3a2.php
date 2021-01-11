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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/pages/jur.htm */
class __TwigTemplate_0efea2d5ec3e639bb32b988ed2fe2be446d253928d5ab289969f0f0219edd134 extends \Twig\Template
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
        $filters = array("theme" => 1, "page" => 17);
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jur2.jpg");
        echo "\" alt=\"\"></span>
<h2>Юридические лица</h2>
    <p>
        Курьерская служба «QSD» предлагает широкий спектр услуг по доставке документов и грузов по территории РК, РФ, в т.ч. и заборы с РФ.
        Философия развития нашей компании выражена следующей фразой – <br>
        «Самый важный Клиент - это каждый Клиент!»
        
        <h3> Для удобства наших клиентов, мы предоставляем следующие услуги: </h3>
        <ul>
            <li> Услуги личного кабинета;
            <li> Е-mail и смс уведомление о доставке;
            <li> Предоставление бесплатного расходного материала (конверты накладные);
            <li> Бесплатный единый номер по Казахстану 58 48 66, 8 (707) 258 48 66.
        <ul>
    </p>
<ul class=\"actions\">
    <li><a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\" class=\"button\">View Elements Page</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/jur.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"image main\"><img src=\"{{'assets/images/jur2.jpg'|theme}}\" alt=\"\"></span>
<h2>Юридические лица</h2>
    <p>
        Курьерская служба «QSD» предлагает широкий спектр услуг по доставке документов и грузов по территории РК, РФ, в т.ч. и заборы с РФ.
        Философия развития нашей компании выражена следующей фразой – <br>
        «Самый важный Клиент - это каждый Клиент!»
        
        <h3> Для удобства наших клиентов, мы предоставляем следующие услуги: </h3>
        <ul>
            <li> Услуги личного кабинета;
            <li> Е-mail и смс уведомление о доставке;
            <li> Предоставление бесплатного расходного материала (конверты накладные);
            <li> Бесплатный единый номер по Казахстану 58 48 66, 8 (707) 258 48 66.
        <ul>
    </p>
<ul class=\"actions\">
    <li><a href=\"{{ 'elements'|page }}\" class=\"button\">View Elements Page</a></li>
</ul>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/jur.htm", "");
    }
}
