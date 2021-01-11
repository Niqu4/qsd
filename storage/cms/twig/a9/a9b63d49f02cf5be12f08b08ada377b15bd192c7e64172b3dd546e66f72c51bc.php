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

/* C:\xampp\htdocs\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm */
class __TwigTemplate_a4dc5669922d61e50fa2a9c1da127e147258d7b4d22ba0dae22461b82dbcc1c6 extends \Twig\Template
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
        echo "<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">Что тут будет?</a></li>
        <li><a href=\"#two\">Услуги</a></li>
        <li><a href=\"#three\">Этапы приёма заказа</a></li>
      <!--   <li><a href=\"#four\">Four</a></li> -->
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">Что тут будет?</a></li>
        <li><a href=\"#two\">Услуги</a></li>
        <li><a href=\"#three\">Этапы приёма заказа</a></li>
      <!--   <li><a href=\"#four\">Four</a></li> -->
    </ul>
</nav>", "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm", "");
    }
}
