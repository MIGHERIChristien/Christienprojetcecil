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

/* partials/feeds-from-section.html.twig */
class __TwigTemplate_7b0903e0cac89dae0caa4ec069b5b84a extends Template
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
        // line 1
        $context["feed_formats"] = ["atom", "rss", "jsonfeed"];
        // line 2
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "section", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "section", [], "any", false, false, false, 2))) : ("")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "type", [], "any", false, false, false, 2) == "page"))) {
            // line 3
            $context["section_page"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "page", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "section", [], "any", false, false, false, 3)], "method", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 3, $this->source); })()), "page", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "section", [], "any", false, false, false, 3)], "method", false, false, false, 3))) : (""));
            // line 4
            if (((isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 4, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["section_page"] ?? null), "alternates", [], "any", true, true, false, 4))) {
                // line 5
                yield $this->env->getRuntime('Twig\Extra\Cache\CacheRuntime')->getCache()->get(((((("feeds-from-section_" . Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), ["/" => "_"])) . "_") . $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 5, $this->source); })()), "updated", [], "any", false, false, false, 5), "U")) . "__") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 5, $this->source); })()), "version", [], "any", false, false, false, 5)), function (\Symfony\Contracts\Cache\ItemInterface $item) use ($context, $macros, $blocks) {
                    return \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 6
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/alternates.html.twig", ["title" => (($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6)) . " - ") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6))), "page" => (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 6, $this->source); })()), "alternates" => Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["section_page"]) || array_key_exists("section_page", $context) ? $context["section_page"] : (function () { throw new RuntimeError('Variable "section_page" does not exist.', 6, $this->source); })()), "alternates", [], "any", false, false, false, 6), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 6, $this->source); })()), "format", [], "any", false, false, false, 6), (isset($context["feed_formats"]) || array_key_exists("feed_formats", $context) ? $context["feed_formats"] : (function () { throw new RuntimeError('Variable "feed_formats" does not exist.', 6, $this->source); })())); })], false);
                        yield from [];
                    })());;
                })
;
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/feeds-from-section.html.twig";
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
        return array (  53 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/feeds-from-section.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/partials/feeds-from-section.html.twig");
    }
}
