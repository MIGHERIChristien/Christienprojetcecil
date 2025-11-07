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

/* partials/alternates.html.twig */
class __TwigTemplate_5b7cccd6352570ab75a17c8488257074 extends Template
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
        if ((($tmp =  !array_key_exists("alternates", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["alternates"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "alternates", [], "any", false, false, false, 1);
        }
        // line 2
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "alternates", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "alternates", [], "any", false, false, false, 2))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            if ((($tmp =  !array_key_exists("title", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["title"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3);
            }
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alternates"]) || array_key_exists("alternates", $context) ? $context["alternates"] : (function () { throw new RuntimeError('Variable "alternates" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                // line 5
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "rel", [], "any", false, false, false, 5) == "canonical") && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "canonical", [], "any", false, true, false, 5), "url", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "canonical", [], "any", false, false, false, 5), "url", [], "any", false, false, false, 5))) : ("")))) {
                    yield "
    <link rel=\"canonical\" type=\"text/html\" title=\"";
                    // line 6
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "canonical", [], "any", false, true, false, 6), "title", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "canonical", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), Twig\Extension\CoreExtension::trim((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })())))) : (Twig\Extension\CoreExtension::trim((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()))));
                    yield "\" href=\"";
                    yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "canonical", [], "any", false, false, false, 6), "url", [], "any", false, false, false, 6));
                    yield "\">";
                } else {
                    // line 7
                    yield "
    <link rel=\"";
                    // line 8
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "rel", [], "any", false, false, false, 8);
                    yield "\" type=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "type", [], "any", false, false, false, 8);
                    yield "\" title=\"";
                    yield Twig\Extension\CoreExtension::trim((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()));
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "format", [], "any", false, false, false, 8) != "html")) {
                        yield " (";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "title", [], "any", false, false, false, 8);
                        yield ")";
                    }
                    yield "\" href=\"";
                    yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), ["canonical" => true, "format" => CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "format", [], "any", false, false, false, 8)]);
                    yield "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alternate'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/alternates.html.twig";
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
        return array (  69 => 8,  66 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/alternates.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/partials/alternates.html.twig");
    }
}
