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

/* C:\xampp\htdocs\install-master/themes/zwiebl-zwiebl_stellar/partials/all_pages/footer.htm */
class __TwigTemplate_5c4ed1320fb2a91e6f1dfe1dad82b6c0017878d9877c597300aca3c9e8de4e50 extends \Twig\Template
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
        echo "<!-- Footer -->
<footer id=\"footer\">
    <section>
        <h2>Aliquam sed mauris</h2>
        <p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
        <!-- <ul class=\"actions\">
            <li><a href=\"generic.html\" class=\"button\">Learn More</a></li>
        </ul> -->
    </section>
    <section>
        <h2>Свяжитесь с нами</h2>
        <dl class=\"alt\">
            <dt>Address</dt>
            <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
            <dt>Phone</dt>
            <dd>(000) 000-0000 x 0000</dd>
            <dt>Email</dt>
            <dd><a href=\"#\">information@untitled.tld</a></dd>
        </dl>
        <ul class=\"icons\">
            <li><a href=\"#\" class=\"icon fa-twitter alt\"><span class=\"label\">Twitter</span></a></li>
            <li><a href=\"#\" class=\"icon fa-facebook alt\"><span class=\"label\">Facebook</span></a></li>
            <li><a href=\"#\" class=\"icon fa-instagram alt\"><span class=\"label\">Instagram</span></a></li>
            <li><a href=\"#\" class=\"icon fa-github alt\"><span class=\"label\">GitHub</span></a></li>
            <li><a href=\"#\" class=\"icon fa-dribbble alt\"><span class=\"label\">Dribbble</span></a></li>
        </ul>
    </section>
    <p class=\"copyright\">&copy; QSD. Design: <a href=\"https://about.me/nurali\">NU</a>.</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/all_pages/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer id=\"footer\">
    <section>
        <h2>Aliquam sed mauris</h2>
        <p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
        <!-- <ul class=\"actions\">
            <li><a href=\"generic.html\" class=\"button\">Learn More</a></li>
        </ul> -->
    </section>
    <section>
        <h2>Свяжитесь с нами</h2>
        <dl class=\"alt\">
            <dt>Address</dt>
            <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
            <dt>Phone</dt>
            <dd>(000) 000-0000 x 0000</dd>
            <dt>Email</dt>
            <dd><a href=\"#\">information@untitled.tld</a></dd>
        </dl>
        <ul class=\"icons\">
            <li><a href=\"#\" class=\"icon fa-twitter alt\"><span class=\"label\">Twitter</span></a></li>
            <li><a href=\"#\" class=\"icon fa-facebook alt\"><span class=\"label\">Facebook</span></a></li>
            <li><a href=\"#\" class=\"icon fa-instagram alt\"><span class=\"label\">Instagram</span></a></li>
            <li><a href=\"#\" class=\"icon fa-github alt\"><span class=\"label\">GitHub</span></a></li>
            <li><a href=\"#\" class=\"icon fa-dribbble alt\"><span class=\"label\">Dribbble</span></a></li>
        </ul>
    </section>
    <p class=\"copyright\">&copy; QSD. Design: <a href=\"https://about.me/nurali\">NU</a>.</p>
</footer>", "C:\\xampp\\htdocs\\install-master/themes/zwiebl-zwiebl_stellar/partials/all_pages/footer.htm", "");
    }
}
