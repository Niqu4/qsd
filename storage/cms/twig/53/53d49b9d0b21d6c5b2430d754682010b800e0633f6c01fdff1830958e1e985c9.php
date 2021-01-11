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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/pages/404.htm */
class __TwigTemplate_f39d934866a1c4ddb9b019301309391df74d694f411a8109588f38a66c54e5bb extends \Twig\Template
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
        $filters = array("theme" => 2, "page" => 5);
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
        echo "<header class=\"major\">
    <span class=\"image fit\"><img src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/404.jpg");
        echo "\" alt=\"Доставка\" /></span>
    <h2>Извините, данная страница не найдена :(</h2>
    <p> Вы можете вернуться на главную страницу: </p>
    <a class=\"button\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">На главную</a>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 5,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"major\">
    <span class=\"image fit\"><img src=\"{{'assets/images/404.jpg'|theme}}\" alt=\"Доставка\" /></span>
    <h2>Извините, данная страница не найдена :(</h2>
    <p> Вы можете вернуться на главную страницу: </p>
    <a class=\"button\" href=\"{{'home'|page}}\">На главную</a>
</header>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/404.htm", "");
    }
}
