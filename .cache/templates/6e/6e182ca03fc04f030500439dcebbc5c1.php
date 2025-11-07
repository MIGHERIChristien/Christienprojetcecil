<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/selector-language.html.twig */
class __TwigTemplate_f4df6e8b2b8fce4951148072199c4af0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "translations", [], "any", false, false, false, 2)) >= 1)) {
            yield "
          <form class=\"formselect\">
            <label";
            // line 4
            if (((((array_key_exists("label", $context) &&  !(null === $context["label"]))) ? ($context["label"]) : (false)) != true)) {
                yield " class=\"sr-only\"";
            }
            yield " for=\"lang-select";
            if ((($tmp = (((array_key_exists("id", $context) &&  !(null === $context["id"]))) ? ($context["id"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "-";
                yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })());
            }
            yield "\">";
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language:", [], "messages");
            yield "</label>
            <select id=\"lang-select";
            // line 5
            if ((($tmp = (((array_key_exists("id", $context) &&  !(null === $context["id"]))) ? ($context["id"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "-";
                yield (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })());
            }
            yield "\" onchange=\"switchLanguage(value)\" class=\"selector selector-lang text-ellipsis focus:outline-none\">
              <option value=\"";
            // line 6
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()));
            yield "\">";
            yield Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Twig\Extra\Intl\IntlExtension']->getLanguageName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "language", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "language", [], "any", false, false, false, 6), "locale", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "language", [], "any", false, false, false, 6)], "method", false, false, false, 6)));
            yield "</option>";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "translations", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 8
                if (CoreExtension::getAttribute($this->env, $this->source, $context["p"], "language", [], "any", true, true, false, 8)) {
                    yield "
              <option value=\"";
                    // line 9
                    yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["p"]);
                    yield "\">";
                    yield Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Twig\Extra\Intl\IntlExtension']->getLanguageName(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "language", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "language", [], "any", false, false, false, 9), "locale", [CoreExtension::getAttribute($this->env, $this->source, $context["p"], "language", [], "any", false, false, false, 9)], "method", false, false, false, 9)));
                    yield "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "
            </select>
          </form>
          <script>";
            // line 15
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "
            function switchLanguage(language) {
              setLanguageCookie(language);
              var selectors = document.getElementsByClassName('selector-lang');
              [].forEach.call(selectors, function (selector) {
                for (var i = 0; i < selector.options.length; i++) {
                  if ( selector.options[i].value == language ) {
                    selector.options[i].selected = true;
                  };
                }
              });
              window.location.href = document.getElementById('lang-select').value;
            }
            function setLanguageCookie(language) {
              language = trimSlashes(language);
              if (language.length === 0) {
                language = '";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "language", [], "any", false, false, false, 31);
                yield "';
              }
              document.cookie = 'nf_lang=' + language + '; path=/';
            }
            function trimSlashes(str){
              str = str.startsWith('/') ? str.substr(1) : str;
              str = str.endsWith('/') ? str.substr(0, str.length - 1) : str;
              return str;
            }";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            yield $this->extensions['Cecil\Renderer\Extension\Core']->minifyJs($_v0);
            // line 40
            yield "
          </script>";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/selector-language.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  129 => 40,  127 => 15,  114 => 31,  95 => 15,  90 => 11,  80 => 9,  76 => 8,  72 => 7,  67 => 6,  60 => 5,  47 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/selector-language.html.twig", "C:\\projetcecil\\themes\\docs\\layouts\\partials\\selector-language.html.twig");
    }
}
