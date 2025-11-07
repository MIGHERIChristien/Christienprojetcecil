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

/* _default\vocabulary.html.twig */
class __TwigTemplate_39fac8034df7ec7d84b0eaa797e0d4c2 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->load(["page.html.twig", "_default/page.html.twig"], 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield from $this->yieldParentBlock("content", $context, $blocks);
        yield "
      <ul>";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "terms", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            yield "
        <li>
          <a href=\"";
            // line 8
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, $context["term"], "id", [], "any", false, false, false, 8), ["language" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "language", [], "any", false, false, false, 8)]);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["term"], "name", [], "any", false, false, false, 8);
            yield "</a> (";
            yield Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["term"]);
            yield ")
        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['term'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "
      </ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\vocabulary.html.twig";
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
        return array (  80 => 10,  68 => 8,  61 => 6,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\vocabulary.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/_default/vocabulary.html.twig");
    }
}
