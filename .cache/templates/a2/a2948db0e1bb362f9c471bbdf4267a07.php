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

/* blog\list.html.twig */
class __TwigTemplate_43d7b6563da2ef1f65b6374fcba8eb29 extends Template
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
        return "_default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("_default/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
          <article>
            <header>
              <h1>";
        // line 6
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6);
        yield "</h1>
            </header>";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "content", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
            <section>";
            // line 10
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10);
            yield "
            </section>";
        }
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            yield "
            <article>
              <header>
                <h2><a href=\"";
            // line 16
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["p"]);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 16));
            yield "</a></h2>
                <time>";
            // line 17
            yield $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "date", [], "any", false, false, false, 17), "long");
            yield "</time>
              </header>
              ";
            // line 19
            yield $this->extensions['Cecil\Renderer\Extension\Core']->excerptHtml(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "content", [], "any", false, false, false, 19));
            yield "
              <footer class=\"page-nav\">
                <a class=\"page-nav next\" href=\"";
            // line 21
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["p"]);
            yield "#more\">Read more</a>
              </footer>
            </article>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
            <footer>";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/paginator.html.twig", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })())], false);
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
        return "blog\\list.html.twig";
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
        return array (  111 => 26,  108 => 24,  99 => 21,  94 => 19,  89 => 17,  83 => 16,  75 => 13,  70 => 10,  66 => 8,  62 => 6,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "blog\\list.html.twig", "C:\\projetcecil\\layouts\\blog\\list.html.twig");
    }
}
