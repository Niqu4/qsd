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

/* C:\xampp\htdocs\qsd/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm */
class __TwigTemplate_d7d9d6f41e4ff5e026359e9b8e058b3e19394e5e13b98ec341fbbb6bda71cf20 extends \Twig\Template
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
        $tags = array("if" => 2, "flash" => 8);
        $filters = array("raw" => 6, "escape" => 10, "nl2br" => 11);
        $functions = array("html_entity_decode" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'flash'],
                ['raw', 'escape', 'nl2br'],
                ['html_entity_decode']
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
        echo "
";
        // line 2
        if ((($context["formSentAlias"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, true, 2))) {
            // line 3
            echo "
\t";
            // line 4
            if (($context["formSuccess"] ?? null)) {
                // line 5
                echo "
\t\t";
                // line 6
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getGaSuccessEventHtmlCode", [0 => true], "method", false, false, true, 6), 6, $this->source);
                echo "

\t\t";
                $_type = isset($context["type"]) ? $context["type"] : null;                $_message = isset($context["message"]) ? $context["message"] : null;                // line 8
                $context["type"] = "success"                ;                foreach (Flash::success                () as $message) {
                    $context["message"] = $message;                    // line 9
                    echo "
\t\t\t<div class=\"alert alert-";
                    // line 10
                    (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                    echo "\">
\t\t\t\t";
                    // line 11
                    echo nl2br(call_user_func_array($this->env->getFunction('html_entity_decode')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 11, $this->source)]));
                    echo "
\t\t\t</div>

\t\t";
                }
                $context["type"] = $_type;                $context["message"] = $_message;                // line 15
                echo "
\t";
            } elseif (            // line 16
($context["formError"] ?? null)) {
                // line 17
                echo "
\t\t";
                $_type = isset($context["type"]) ? $context["type"] : null;                $_message = isset($context["message"]) ? $context["message"] : null;                // line 18
                $context["type"] = "error"                ;                foreach (Flash::error                () as $message) {
                    $context["message"] = $message;                    // line 19
                    echo "
\t\t\t<div class=\"alert alert-";
                    // line 20
                    (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                    echo "\">
\t\t\t\t";
                    // line 21
                    echo nl2br(call_user_func_array($this->env->getFunction('html_entity_decode')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 21, $this->source)]));
                    echo "
\t\t\t</div>

\t\t";
                }
                $context["type"] = $_type;                $context["message"] = $_message;                // line 25
                echo "
\t";
            }
            // line 27
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 27,  120 => 25,  113 => 21,  109 => 20,  106 => 19,  104 => 18,  101 => 17,  99 => 16,  96 => 15,  89 => 11,  85 => 10,  82 => 9,  80 => 8,  75 => 6,  72 => 5,  70 => 4,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if formSentAlias == __SELF__.alias %}

\t{% if formSuccess %}

\t\t{{ __SELF__.getGaSuccessEventHtmlCode(true)|raw }}

\t\t{% flash success %}

\t\t\t<div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
\t\t\t\t{{ html_entity_decode(message)|nl2br }}
\t\t\t</div>

\t\t{% endflash %}

\t{% elseif formError %}

\t\t{% flash error %}

\t\t\t<div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
\t\t\t\t{{ html_entity_decode(message)|nl2br }}
\t\t\t</div>

\t\t{% endflash %}

\t{% endif %}

{% endif %}", "C:\\xampp\\htdocs\\qsd/plugins/janvince/smallcontactform/components/smallcontactform/scf-message.htm", "");
    }
}
