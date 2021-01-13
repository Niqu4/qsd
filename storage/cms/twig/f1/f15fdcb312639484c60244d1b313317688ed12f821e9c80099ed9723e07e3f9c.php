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
    <li> Вызов курьера по телефону:  58-48-66, 258-48-66, 8 (707) 258-48-66 </li>
    <li> Вызов курьера с сайта </li>
    <li> Вызов курьера через личный кабинет </li>
</p>

<section>
    <h2>Форма вызова курьера</h2>
    <h4>Заполните форму для вызова курьера. Заявки на текущий день принимаются до 15.00. После указанного времени заявку можно сделать только на следующий день.
    <br> Пожалуйста, заполните все <u>обязательные поля</u>. </h4>
    <form method=\"post\" action=\"#\" onsubmit=\"openModal()\" id=\"myForm\">
        <div class=\"row uniform\">
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"name\" value=\"\" placeholder=\"ФИО\" required/>
            </div>
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"contract_number\" value=\"\" placeholder=\"Номер договора (если клиент работает по договору)\" />
            </div>
            
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"email\" name=\"email\" value=\"\" placeholder=\"Email\" required/>
            </div>
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"phone_number\" value=\"\" placeholder=\"Контактный телефон\" pattern=\"[0-9]\" required />
            </div>
            
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"from\" value=\"\" placeholder=\"Город отправления\" required />
            </div>
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"to\" value=\"\" placeholder=\"Адрес отправления\" required />
            </div>
            <div class=\"12u\$\">
                <div class=\"select-wrapper\">
                    <select name=\"type\" required>
                        <option value=\"\">- Вид услуги -</option>
                        <option value=\"express\">Экспресс</option>
                        <option value=\"super_express\">Супер экспресс</option>
                        <option value=\"econom\">Эконом</option>
                        <option value=\"international_express\">Международный экспресс</option>
                    </select>
                </div>
            </div>
            
            <div class=\"12u\$\">
                <div class=\"select-wrapper\">
                    <select name=\"payment\" required>
                        <option value=\"\">- Оплата -</option>
                        <option value=\"1\">Наличными отправитель</option>
                        <option value=\"2\">Наличными получатель</option>
                        <option value=\"3\">Безналичный расчет</option>
                    </select>
                </div>
            </div>
           
           
            <div class=\"12u\$\">
                <textarea name=\"specials\" placeholder=\"Примечания\" rows=\"3\"></textarea>
            </div>
            <div class=\"12u\$\">
                <ul class=\"actions\">
                    <li><input type=\"submit\" value=\"Вызвать курьера\" class=\"special\" /></li>
                    <li><input type=\"reset\" value=\"Очистить\" /></li>
                </ul>
            </div>
        </div>
    </form>
</section>";
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
    <li> Вызов курьера по телефону:  58-48-66, 258-48-66, 8 (707) 258-48-66 </li>
    <li> Вызов курьера с сайта </li>
    <li> Вызов курьера через личный кабинет </li>
</p>

<section>
    <h2>Форма вызова курьера</h2>
    <h4>Заполните форму для вызова курьера. Заявки на текущий день принимаются до 15.00. После указанного времени заявку можно сделать только на следующий день.
    <br> Пожалуйста, заполните все <u>обязательные поля</u>. </h4>
    <form method=\"post\" action=\"#\" onsubmit=\"openModal()\" id=\"myForm\">
        <div class=\"row uniform\">
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"name\" value=\"\" placeholder=\"ФИО\" required/>
            </div>
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"contract_number\" value=\"\" placeholder=\"Номер договора (если клиент работает по договору)\" />
            </div>
            
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"email\" name=\"email\" value=\"\" placeholder=\"Email\" required/>
            </div>
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"phone_number\" value=\"\" placeholder=\"Контактный телефон\" pattern=\"[0-9]\" required />
            </div>
            
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"from\" value=\"\" placeholder=\"Город отправления\" required />
            </div>
            <div class=\"6u 12u\$(xsmall)\">
                <input type=\"text\" name=\"to\" value=\"\" placeholder=\"Адрес отправления\" required />
            </div>
            <div class=\"12u\$\">
                <div class=\"select-wrapper\">
                    <select name=\"type\" required>
                        <option value=\"\">- Вид услуги -</option>
                        <option value=\"express\">Экспресс</option>
                        <option value=\"super_express\">Супер экспресс</option>
                        <option value=\"econom\">Эконом</option>
                        <option value=\"international_express\">Международный экспресс</option>
                    </select>
                </div>
            </div>
            
            <div class=\"12u\$\">
                <div class=\"select-wrapper\">
                    <select name=\"payment\" required>
                        <option value=\"\">- Оплата -</option>
                        <option value=\"1\">Наличными отправитель</option>
                        <option value=\"2\">Наличными получатель</option>
                        <option value=\"3\">Безналичный расчет</option>
                    </select>
                </div>
            </div>
           
           
            <div class=\"12u\$\">
                <textarea name=\"specials\" placeholder=\"Примечания\" rows=\"3\"></textarea>
            </div>
            <div class=\"12u\$\">
                <ul class=\"actions\">
                    <li><input type=\"submit\" value=\"Вызвать курьера\" class=\"special\" /></li>
                    <li><input type=\"reset\" value=\"Очистить\" /></li>
                </ul>
            </div>
        </div>
    </form>
</section>", "C:\\xampp\\htdocs\\qsd/themes/zwiebl-zwiebl_stellar/pages/oformit-zakaz.htm", "");
    }
}
