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

/* C:\xampp\htdocs\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm */
class __TwigTemplate_e20d62ca2c833fd8407c2d6a0c9310deaeb9a66babef40edbdca0e292e998849 extends \Twig\Template
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
        $filters = array("page" => 10, "theme" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>First Section</h2>
            </header>
            <p>Залетает первый,
            залетает третий, залетает</p>
            <ul class=\"actions\">
                <li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">Подробнее</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/package.jpg");
        echo "\" alt=\"Доставка\" /></span>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>First Section</h2>
            </header>
            <p>Залетает первый,
            залетает третий, залетает</p>
            <ul class=\"actions\">
                <li><a href=\"{{'generic'|page}}\" class=\"button\">Подробнее</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"{{'assets/images/package.jpg'|theme}}\" alt=\"Доставка\" /></span>
    </div>
</section>", "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm", "");
    }
}
