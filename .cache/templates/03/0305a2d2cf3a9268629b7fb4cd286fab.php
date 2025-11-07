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

/* partials/page-navigation.html.twig */
class __TwigTemplate_8bf43d6c050c94b3cb89b9f1b99e962f extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "prev", [], "any", true, true, false, 2) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "next", [], "any", true, true, false, 2))) {
            yield "
          <div class=\"page-nav\">";
            // line 4
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "prev", [], "any", true, true, false, 4)) {
                yield "
            <a class=\"page-nav prev\" href=\"";
                // line 5
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "prev", [], "any", false, false, false, 5));
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "prev", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5);
                yield "</a>";
            }
            // line 7
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "next", [], "any", true, true, false, 7)) {
                yield "
            <a class=\"page-nav next\" href=\"";
                // line 8
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "next", [], "any", false, false, false, 8));
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "next", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8);
                yield "</a>";
            }
            // line 9
            yield "
          </div>";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/page-navigation.html.twig";
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
        return array (  66 => 9,  60 => 8,  56 => 7,  50 => 5,  46 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/page-navigation.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/partials/page-navigation.html.twig");
    }
}
