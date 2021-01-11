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

/* C:\xampp\htdocs\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm */
class __TwigTemplate_f769e6b86caedbc6ebdf33a1ce55dba913a7aeb4fa08f7f17dbebd2def0eb42c extends \Twig\Template
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
        $filters = array("page" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
        echo "<!-- <section id=\"four\" class=\"main\">
    <header class=\"major\">
        <h2>Fourth Section</h2>
        <p>You can choose stellar (home one-pager) and generic (all other pages) as Layout.</p>
    </header>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("generic");
        echo "\" class=\"button\">View Generic Page</a></li>
            <li><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\" class=\"button\">View Elements Page</a></li>
            <li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\" class=\"button special\">View Blog Page</a></li>
        </ul>
    </footer>
</section> -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <section id=\"four\" class=\"main\">
    <header class=\"major\">
        <h2>Fourth Section</h2>
        <p>You can choose stellar (home one-pager) and generic (all other pages) as Layout.</p>
    </header>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">View Generic Page</a></li>
            <li><a href=\"{{'elements'|page}}\" class=\"button\">View Elements Page</a></li>
            <li><a href=\"{{'blog'|page}}\" class=\"button special\">View Blog Page</a></li>
        </ul>
    </footer>
</section> -->", "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/home_page/section_four.htm", "");
    }
}
