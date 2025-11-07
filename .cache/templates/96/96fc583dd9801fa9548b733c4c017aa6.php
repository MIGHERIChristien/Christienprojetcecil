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

/* _default/list.html.twig */
class __TwigTemplate_548d64c8896b182f9c00d8e2d1d7a29c extends Template
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
        // line 12
        return $this->load(["page.html.twig", "_default/page.html.twig"], 12);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["pages"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "pages", [], "any", false, false, false, 2), "showable", [], "any", false, false, false, 2);
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pages", [], "any", true, true, false, 4)) {
            // line 5
            $context["pages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "pages", [], "any", false, false, false, 5);
        }
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 8), "pages", [], "any", true, true, false, 8)) {
            // line 9
            $context["pages"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "paginator", [], "any", false, false, false, 9), "pages", [], "any", false, false, false, 9);
        }
        // line 12
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
      <article>
        <header>
          ";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17) != "homepage")) {
            yield "<h1>";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17);
            yield "</h1>";
        }
        yield "
        </header>";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
        <section>";
            // line 21
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21);
            yield "
        </section>";
        }
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            yield "
        <article>
          <h2><a href=\"";
            // line 26
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["p"]);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 26));
            yield "</a></h2>
        </article>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
        <footer>";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/paginator.html.twig", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 30, $this->source); })())], false);
        yield "
        </footer>
      </article>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default/list.html.twig";
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
        return array (  111 => 30,  108 => 28,  98 => 26,  91 => 24,  86 => 21,  82 => 19,  74 => 17,  63 => 14,  59 => 12,  56 => 9,  54 => 8,  51 => 5,  49 => 4,  47 => 2,  40 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default/list.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/_default/list.html.twig");
    }
}
