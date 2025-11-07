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
class __TwigTemplate_629950e152c3f5668a6beb53f2df8439 extends Template
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
            'article' => [$this, 'block_article'],
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
    public function block_article(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
      <div class=\"flex\">
        <div class=\"w-full lg:max-w-screen-lg mx-auto px-4 xl:px-16 py-6\">
          <section id=\"content\" class=\"markdown markdown-slate markdown-a:text-primary-700 dark:markdown-a:text-primary-400 markdown-a:no-underline markdown-a:font-normal markdown-code:max-w-none dark:markdown-invert max-w-none\">";
        // line 18
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 21
        yield "
          </section>
          <div class=\"py-6\">
            <nav class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            yield "
              <a href=\"";
            // line 26
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["p"]);
            yield "\" class=\"hover:no-underline text-inherit dark:text-inherit\">
                <section class=\"px-6 py-6 rounded-xl border border-secondary-200 shadow-md hover:border-primary-700 dark:hover:border-primary-400 h-full\">";
            // line 28
            [$context["group_id"], $context["group_name"]] =             [(((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "folder", [], "any", false, false, false, 28), "/"), 1, [], "array", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "folder", [], "any", false, false, false, 28), "/"), 1, [], "array", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "folder", [], "any", false, false, false, 28), "/"), 1, [], "array", false, false, false, 28)) : (null)), Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace((((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "folder", [], "any", false, false, false, 28), "/"), 1, [], "array", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "folder", [], "any", false, false, false, 28), "/"), 1, [], "array", false, false, false, 28)))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "folder", [], "any", false, false, false, 28), "/"), 1, [], "array", false, false, false, 28)) : (null)), ["-" => " "]))];
            // line 29
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["group_name"]) || array_key_exists("group_name", $context) ? $context["group_name"] : (function () { throw new RuntimeError('Variable "group_name" does not exist.', 29, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
                  <div class=\"text-sm mb-2\">";
                // line 30
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "page", [(isset($context["group_id"]) || array_key_exists("group_id", $context) ? $context["group_id"] : (function () { throw new RuntimeError('Variable "group_id" does not exist.', 30, $this->source); })())], "method", false, true, false, 30), "title", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 30, $this->source); })()), "page", [(isset($context["group_id"]) || array_key_exists("group_id", $context) ? $context["group_id"] : (function () { throw new RuntimeError('Variable "group_id" does not exist.', 30, $this->source); })())], "method", false, false, false, 30), "title", [], "any", false, false, false, 30)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 30, $this->source); })()), "page", [(isset($context["group_id"]) || array_key_exists("group_id", $context) ? $context["group_id"] : (function () { throw new RuntimeError('Variable "group_id" does not exist.', 30, $this->source); })())], "method", false, false, false, 30), "title", [], "any", false, false, false, 30)) : ((isset($context["group_name"]) || array_key_exists("group_name", $context) ? $context["group_name"] : (function () { throw new RuntimeError('Variable "group_name" does not exist.', 30, $this->source); })())));
                yield "</div>";
            }
            // line 31
            yield "
                  <h2 class=\"font-semibold text-lg mb-2\">";
            // line 32
            yield CoreExtension::getAttribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 32);
            yield "</h2>";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["p"], "description", [], "any", true, true, false, 33)) {
                yield "
                  <p class=\"text-secondary-600 dark:text-secondary-400 font-normal\">";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 34);
                yield "</p>";
            }
            // line 35
            yield "
                </section>
              </a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
            </nav>
          </div>
        </div>
      </div>";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
            <h1>";
        // line 19
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19);
        yield "</h1>";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20);
        }
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
        return array (  145 => 20,  142 => 19,  133 => 18,  124 => 38,  116 => 35,  112 => 34,  108 => 33,  105 => 32,  102 => 31,  98 => 30,  94 => 29,  92 => 28,  88 => 26,  82 => 25,  77 => 21,  75 => 18,  64 => 14,  60 => 12,  57 => 9,  55 => 8,  52 => 5,  50 => 4,  48 => 2,  41 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default/list.html.twig", "C:\\projetcecil\\themes\\docs\\layouts\\_default\\list.html.twig");
    }
}
