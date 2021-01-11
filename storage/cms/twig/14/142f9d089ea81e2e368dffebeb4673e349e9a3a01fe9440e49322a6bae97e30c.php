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

/* C:\xampp\htdocs\qsd/themes/zwiebl-zwiebl_stellar/partials/all_pages/footer.htm */
class __TwigTemplate_6ccf0eb1efb79cd1db07117fc283b5d3c547510fb598d1f3f5a8811256615301 extends \Twig\Template
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
        <h2>Наша цель</h2>
        <p>Цель компании 'QSD.kz' – стать лидирующей курьерской Компанией в Республике Казахстан, обеспечивая высокий уровень сервиса, соответствующий мировым стандартам, и предоставляя превосходное качество полного комплекса оказываемых услуг. Постоянное совершенствование производственных процессов, качества обслуживания и внедрение новейших технологий для того, чтобы быть удобнее и выгоднее для клиента.</p>
    </section>
    <section>
        <h2>Свяжитесь с нами</h2>
        <dl class=\"alt\">
            <dt>Адрес</dt>
            <dd>ул. Рыскулова 84 &bull; Шымкент &bull; Казахстан</dd>
            <dt>Моб.:</dt>
            <dd>+7 (707) 258 48 66</dd>
            <dt>Email</dt>
            <dd><a href=\"#\">qsd@qsd.kz</a></dd>
        </dl>
        <ul class=\"icons\">
            <li><a href=\"https://api.whatsapp.com/send?phone=+77072584867&text=Здравствуйте, я заинтересован в услугах вашей компании\" 
                class=\"icon fa-whatsapp alt\"><span class=\"label\">WhatsApp</span></a></li>
            <li><a href=\"https://t.me/QSD584866\" class=\"icon fa-paper-plane alt\"><span class=\"label\">Telegram</span></a></li>
            <li><a href=\"https://www.instagram.com/qsd.kz/\" class=\"icon fa-instagram alt\"><span class=\"label\">Instagram</span></a></li>
            <li><a href=\"https://www.facebook.com/pg/%D0%9A%D1%83%D1%80%D1%8C%D0%B5%D1%80%D1%81%D0%BA%D0%B0%D1%8F-%D0%A1%D0%BB%D1%83%D0%B6%D0%B1%D0%B0-Qazaq-Sapa-819579614886972\" class=\"icon fa-facebook alt\"><span class=\"label\">Facebook</span></a></li>
            <li><a href=\"https://go.2gis.com/likqub\" class=\"icon fa-map-signs alt\"><span class=\"label\">Google Maps</span></a></li>
        </ul>
    </section>
    <p class=\"copyright\">&copy; QSD. Design: <a href=\"https://about.me/nurali\">NU</a>.</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/all_pages/footer.htm";
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
        <h2>Наша цель</h2>
        <p>Цель компании 'QSD.kz' – стать лидирующей курьерской Компанией в Республике Казахстан, обеспечивая высокий уровень сервиса, соответствующий мировым стандартам, и предоставляя превосходное качество полного комплекса оказываемых услуг. Постоянное совершенствование производственных процессов, качества обслуживания и внедрение новейших технологий для того, чтобы быть удобнее и выгоднее для клиента.</p>
    </section>
    <section>
        <h2>Свяжитесь с нами</h2>
        <dl class=\"alt\">
            <dt>Адрес</dt>
            <dd>ул. Рыскулова 84 &bull; Шымкент &bull; Казахстан</dd>
            <dt>Моб.:</dt>
            <dd>+7 (707) 258 48 66</dd>
            <dt>Email</dt>
            <dd><a href=\"#\">qsd@qsd.kz</a></dd>
        </dl>
        <ul class=\"icons\">
            <li><a href=\"https://api.whatsapp.com/send?phone=+77072584867&text=Здравствуйте, я заинтересован в услугах вашей компании\" 
                class=\"icon fa-whatsapp alt\"><span class=\"label\">WhatsApp</span></a></li>
            <li><a href=\"https://t.me/QSD584866\" class=\"icon fa-paper-plane alt\"><span class=\"label\">Telegram</span></a></li>
            <li><a href=\"https://www.instagram.com/qsd.kz/\" class=\"icon fa-instagram alt\"><span class=\"label\">Instagram</span></a></li>
            <li><a href=\"https://www.facebook.com/pg/%D0%9A%D1%83%D1%80%D1%8C%D0%B5%D1%80%D1%81%D0%BA%D0%B0%D1%8F-%D0%A1%D0%BB%D1%83%D0%B6%D0%B1%D0%B0-Qazaq-Sapa-819579614886972\" class=\"icon fa-facebook alt\"><span class=\"label\">Facebook</span></a></li>
            <li><a href=\"https://go.2gis.com/likqub\" class=\"icon fa-map-signs alt\"><span class=\"label\">Google Maps</span></a></li>
        </ul>
    </section>
    <p class=\"copyright\">&copy; QSD. Design: <a href=\"https://about.me/nurali\">NU</a>.</p>
</footer>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/partials/all_pages/footer.htm", "");
    }
}
