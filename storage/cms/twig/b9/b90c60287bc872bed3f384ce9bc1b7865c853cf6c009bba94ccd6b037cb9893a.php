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

/* C:\xampp\htdocs\qsd/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm */
class __TwigTemplate_9f7bc37d16d16b462b3f6f3aae7949cb291d2f222830bfd1cb2dc32ac713c733 extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 9);
        $filters = array("raw" => 11, "escape" => 23);
        $functions = array("settingsGet" => 1, "form_open" => 7, "form_close" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['raw', 'escape'],
                ['settingsGet', 'form_open', 'form_close']
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
        if ((((($context["formSentAlias"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, true, 1)) && twig_test_empty(($context["formError"] ?? null))) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["form_hide_after_success", 0]))) {
            // line 2
            echo "
\t";
            // line 4
            echo "
";
        } else {
            // line 6
            echo "
\t";
            // line 7
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFormAttributes", [], "any", false, false, true, 7), 7, $this->source)]);
            echo "

\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fields", [], "any", false, false, true, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 10
                echo "
\t\t\t";
                // line 11
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFieldHtmlCode", [0 => $context["field"]], "method", false, false, true, 11), 11, $this->source);
                echo "

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
\t\t";
            // line 15
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getAntispamFieldHtmlCode", [0 => []], "method", false, false, true, 15), 15, $this->source);
            echo "

\t\t";
            // line 17
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getDescriptionFieldHtmlCode", [0 => []], "method", false, false, true, 17), 17, $this->source);
            echo "
\t\t
\t\t";
            // line 19
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getRedirectFieldHtmlCode", [0 => []], "method", false, false, true, 19), 19, $this->source);
            echo "

\t\t";
            // line 21
            if (((((null === call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_version"])) || (call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_version"]) == "v2checkbox")) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["add_google_recaptcha"])) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_site_key"]))) {
                // line 22
                echo "
\t\t\t<div class=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getReCaptchaWrapperClass", [], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\">

\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
                // line 25
                echo call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_site_key"]);
                echo "\"></div>

\t\t\t</div>

\t\t";
            }
            // line 30
            echo "
\t\t";
            // line 31
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSubmitButtonHtmlCode", [0 => []], "method", false, false, true, 31), 31, $this->source);
            echo "

\t";
            // line 33
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

\t";
            // line 35
            if ((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["add_google_recaptcha"]) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_scripts_allow"]))) {
                // line 36
                echo "\t
\t\t<script src='https://www.google.com/recaptcha/api.js";
                // line 37
                (((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_locale_allow"]) && ($context["currentLocale"] ?? null))) ? (print (twig_escape_filter($this->env, ("?hl=" . ($context["currentLocale"] ?? null)), "html", null, true))) : (print ("")));
                echo "' async defer></script>

\t\t";
                // line 39
                if ((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_version"]) == "v2invisible")) {
                    // line 40
                    echo "
\t\t\t<script>
\t\t\t\t
\t\t\t\tfunction onSubmit_";
                    // line 43
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "(token) {

\t\t\t\t\treturn new Promise(function(resolve, reject) { 

\t\t\t\t\t\t//Your code logic goes here

\t\t\t\t\t\tdocument.getElementById(\"";
                    // line 49
                    echo twig_escape_filter($this->env, ("scf-form-id-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, true, 49), 49, $this->source)), "html", null, true);
                    echo "\").submit();
\t\t\t\t\t\tresolve();

\t\t\t\t\t}); //end promise
\t\t\t\t}

\t\t\t</script>

\t\t";
                }
                // line 58
                echo "
\t";
            }
            // line 60
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 60,  182 => 58,  170 => 49,  161 => 43,  156 => 40,  154 => 39,  149 => 37,  146 => 36,  144 => 35,  139 => 33,  134 => 31,  131 => 30,  123 => 25,  118 => 23,  115 => 22,  113 => 21,  108 => 19,  103 => 17,  98 => 15,  95 => 14,  86 => 11,  83 => 10,  79 => 9,  74 => 7,  71 => 6,  67 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if formSentAlias == __SELF__.alias and formError is empty and settingsGet('form_hide_after_success', 0) %}

\t{# no errors and set to hide after send #}

{% else %}

\t{{ form_open(__SELF__.getFormAttributes) }}

\t\t{% for field in __SELF__.fields %}

\t\t\t{{ __SELF__.getFieldHtmlCode(field)|raw }}

\t\t{% endfor %}

\t\t{{ __SELF__.getAntispamFieldHtmlCode({})|raw }}

\t\t{{ __SELF__.getDescriptionFieldHtmlCode({})|raw }}
\t\t
\t\t{{ __SELF__.getRedirectFieldHtmlCode({})|raw }}

\t\t{% if (settingsGet('google_recaptcha_version') is null or settingsGet('google_recaptcha_version') == 'v2checkbox') and settingsGet('add_google_recaptcha') and settingsGet('google_recaptcha_site_key') %}

\t\t\t<div class=\"{{__SELF__.getReCaptchaWrapperClass()}}\">

\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ settingsGet('google_recaptcha_site_key') }}\"></div>

\t\t\t</div>

\t\t{% endif %}

\t\t{{ __SELF__.getSubmitButtonHtmlCode({})|raw }}

\t{{ form_close() }}

\t{% if settingsGet('add_google_recaptcha') and settingsGet('google_recaptcha_scripts_allow') %}
\t
\t\t<script src='https://www.google.com/recaptcha/api.js{{ settingsGet(\"google_recaptcha_locale_allow\") and currentLocale ? (\"?hl=\"~currentLocale) }}' async defer></script>

\t\t{% if settingsGet('google_recaptcha_version') == 'v2invisible' %}

\t\t\t<script>
\t\t\t\t
\t\t\t\tfunction onSubmit_{{ __SELF__.alias }}(token) {

\t\t\t\t\treturn new Promise(function(resolve, reject) { 

\t\t\t\t\t\t//Your code logic goes here

\t\t\t\t\t\tdocument.getElementById(\"{{'scf-form-id-'~__SELF__.alias}}\").submit();
\t\t\t\t\t\tresolve();

\t\t\t\t\t}); //end promise
\t\t\t\t}

\t\t\t</script>

\t\t{% endif %}

\t{% endif %}

{% endif %}
", "C:\\xampp\\htdocs\\qsd/plugins/janvince/smallcontactform/components/smallcontactform/scf-form.htm", "");
    }
}
