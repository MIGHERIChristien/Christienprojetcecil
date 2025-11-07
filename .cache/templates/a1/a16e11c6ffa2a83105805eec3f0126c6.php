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

/* partials/alternates-languages.html.twig */
class __TwigTemplate_2eb2e10ddbf897ca78503fa5dd7ff183 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "translations", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "translations", [], "any", false, false, false, 1), [])) : ([]))) >= 1)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "translations", [], "any", false, false, false, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                yield "
    <link rel=\"alternate\" hreflang=\"";
                // line 3
                yield CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "language", [], "any", false, false, false, 3);
                yield "\" href=\"";
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["alternate"], ["canonical" => true]);
                yield "\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alternate'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 5
            yield "
    <link rel=\"alternate\" hreflang=\"x-default\" href=\"";
            // line 6
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "path", [], "any", false, false, false, 6), ["language" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "language", [], "any", false, false, false, 6), "canonical" => true]);
            yield "\">";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/alternates-languages.html.twig";
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
        return array (  62 => 6,  59 => 5,  50 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/alternates-languages.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/partials/alternates-languages.html.twig");
    }
}
