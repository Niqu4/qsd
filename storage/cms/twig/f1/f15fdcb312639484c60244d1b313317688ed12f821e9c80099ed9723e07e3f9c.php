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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/pages/oformit-zakaz.htm */
class __TwigTemplate_851c1443ea4a79631b011e41cf88454e4ea391d40cbb0512b2358aeeebc534d4 extends \Twig\Template
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
        echo "<h2>Заявку на вызов курьера Вы можете оформить одним из удобных для Вас способов: </h2>
 
<p>
    <li> Вызов курьера по телефону:  58-48-66, 258-48-66, 8 (707) 258-48-66
    <li> Вызов курьера с сайта 
    <li> Вызов курьера по электронной почте
    <li> Вызов курьера через личный кабинет
</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/oformit-zakaz.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Заявку на вызов курьера Вы можете оформить одним из удобных для Вас способов: </h2>
 
<p>
    <li> Вызов курьера по телефону:  58-48-66, 258-48-66, 8 (707) 258-48-66
    <li> Вызов курьера с сайта 
    <li> Вызов курьера по электронной почте
    <li> Вызов курьера через личный кабинет
</p>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/oformit-zakaz.htm", "");
    }
}
