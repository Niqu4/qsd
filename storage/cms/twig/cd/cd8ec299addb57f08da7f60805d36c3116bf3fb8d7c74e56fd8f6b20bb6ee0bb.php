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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm */
class __TwigTemplate_026f0177c0f535b9b95c4034a615207e8b4a4ec11a0d1f720de510e323ea24c4 extends \Twig\Template
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
        $tags = array("if" => 2, "framework" => 3);
        $filters = array("escape" => 1, "theme" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'framework'],
                ['escape', 'theme'],
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
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 1), "jQuery_version", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "/jquery.min.js\"></script>
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 2), "load_octobercms_framework", [], "any", false, false, true, 2)) {
            // line 3
            $_minify = System\Classes\CombineAssets::instance()->useMinify;
            if ($_minify) {
                echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
            }
            else {
                echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
                echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            }
            echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
            unset($_minify);
        }
        // line 5
        echo "
<script src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.min.js", 1 => "assets/js/jquery.scrollex.min.js", 2 => "assets/js/jquery.scrolly.min.js", 3 => "assets/js/skel.min.js", 4 => "assets/js/util.js", 5 => "assets/js/main.js", 6 => "assets/js/slider.js", 7 => "assets/js/splide.min.js"]);
        // line 7
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 7,  84 => 6,  81 => 5,  69 => 3,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/{{ this.theme.jQuery_version }}/jquery.min.js\"></script>
{% if this.theme.load_octobercms_framework %}
{% framework extras %}
{% endif %}

<script src=\"{{ ['assets/js/jquery.min.js','assets/js/jquery.scrollex.min.js', 'assets/js/jquery.scrolly.min.js', 'assets/js/skel.min.js', 'assets/js/util.js', 'assets/js/main.js' , 
                'assets/js/slider.js', 'assets/js/splide.min.js']|theme }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js\"></script>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm", "");
    }
}
