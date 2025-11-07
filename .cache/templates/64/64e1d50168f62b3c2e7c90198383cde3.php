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

/* _default\page.html.twig */
class __TwigTemplate_c0be266960159d027bd707be3b9b91a2 extends Template
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
            'styles' => [$this, 'block_styles'],
            'sidebar' => [$this, 'block_sidebar'],
            'article' => [$this, 'block_article'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "language", [], "any", false, false, false, 2);
        yield "\" class=\"scroll-pt-[70px] scroll-smooth lg:overflow-y-scroll\">
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/metatags.html.twig");
        // line 6
        $context["styles"] = [(("https://cdnjs.cloudflare.com/ajax/libs/highlight.js/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "highlightjs", [], "any", false, false, false, 6), "version", [], "any", false, false, false, 6)) . "/styles/github-dark.min.css")];
        // line 7
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "docsearch", [], "any", false, true, false, 7), "enabled", [], "any", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "docsearch", [], "any", false, false, false, 7), "enabled", [], "any", false, false, false, 7)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "docsearch", [], "any", false, false, false, 7), "enabled", [], "any", false, false, false, 7)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta name=\"docsearch:language\" content=\"";
            // line 8
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "language", [], "any", false, false, false, 8);
            yield "\">
    <link rel=\"preconnect\" href=\"https://";
            // line 9
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "docsearch", [], "any", false, true, false, 9), "appId", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "docsearch", [], "any", false, false, false, 9), "appId", [], "any", false, false, false, 9))) : (""));
            yield "-dsn.algolia.net\" crossorigin>";
            // line 10
            $context["styles"] = Twig\Extension\CoreExtension::merge((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 10, $this->source); })()), [(("https://cdn.jsdelivr.net/npm/@docsearch/css@" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 10, $this->source); })()), "docsearch", [], "any", false, false, false, 10), "version", [], "any", false, false, false, 10)) . "/dist/style.min.css")]);
        }
        // line 12
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        // line 13
        $context["styles"] = Twig\Extension\CoreExtension::merge((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 13, $this->source); })()), ["styles.css"]);
        // line 14
        if (($this->extensions['Cecil\Renderer\Extension\Core']->getEnv("CECIL_ENV") == "production")) {
            yield "
    <style>";
            // line 15
            yield $this->extensions['Cecil\Renderer\Extension\Core']->inline($this->extensions['Cecil\Renderer\Extension\Core']->asset((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 15, $this->source); })())));
            yield "</style>";
        } else {
            // line 16
            yield "
    ";
            // line 17
            yield $this->extensions['Cecil\Renderer\Extension\Core']->html($context, $this->extensions['Cecil\Renderer\Extension\Core']->asset((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 17, $this->source); })())));
        }
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/pwa.html.twig", ["site" => (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 19, $this->source); })())], false, true);
        yield "
  </head>
  <body class=\"font-sans antialiased bg-primary-50 dark:bg-primary-950 text-[#050505] dark:text-secondary-100\">";
        // line 23
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 25
        yield "
    <header class=\"fixed top-0 inset-x-0 z-30 flex items-center h-14 px-4 py-3 bg-primary-700 dark:bg-primary-900 shadow-md\">
      <nav class=\"";
        // line 27
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 27, $this->source); })()), "section", [], "any", false, false, false, 27) == "docs") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27) == "page"))) {
            yield "w-full ";
        } else {
            yield "w-[90rem] max-w-screen-xl";
        }
        yield " mx-auto flex items-center\">";
        // line 28
        yield "
        <button class=\"navbar-item flex lg:hidden items-center mr-3\" onclick=\"toggleMenu()\">
          <svg id=\"sidebar-open\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-7 h-7\">
            <title>";
        // line 31
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Open menu", [], "messages");
        yield "</title><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\"/>
          </svg>
        </button>";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/logo.html.twig");
        yield "
        <div class=\"grow\"></div>";
        // line 37
        yield "
        <div class=\"hidden lg:flex ml-4 mr-4 items-center\">
          <ol class=\"flex space-x-4\">";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu.html.twig");
        yield "
          </ol>
        </div>";
        // line 44
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "github", [], "any", false, true, false, 44), "url", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 44, $this->source); })()), "github", [], "any", false, false, false, 44), "url", [], "any", false, false, false, 44))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
        <a href=\"";
            // line 45
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 45, $this->source); })()), "github", [], "any", false, false, false, 45), "url", [], "any", false, false, false, 45);
            yield "\" title=\"";
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%title% on GitHub", ["%title%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45)], "messages");
            yield "\" class=\"navbar-item flex no-underline hover:no-underline ml-4 py-2 items-center\" rel=\"noopener noreferrer\">
          <svg class=\"fill-current text-inherit hover:text-inherit w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 20 20\">
            <title>";
            // line 47
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%title% on GitHub", ["%title%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 47, $this->source); })()), "title", [], "any", false, false, false, 47)], "messages");
            yield "</title>
            <path d=\"M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0\"></path>
          </svg>
        </a>";
        }
        // line 57
        yield "
        <div class=\"navbar-item ml-4 py-2 pt-3.5\">";
        // line 59
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/selector-theme-icon.html.twig");
        yield "
        </div>";
        // line 62
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "docsearch", [], "any", false, true, false, 62), "enabled", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 62, $this->source); })()), "docsearch", [], "any", false, false, false, 62), "enabled", [], "any", false, false, false, 62)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 62, $this->source); })()), "docsearch", [], "any", false, false, false, 62), "enabled", [], "any", false, false, false, 62)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
        <div id=\"search-container\" class=\"md:inline-block ml-4 py-2\"></div>";
        }
        // line 66
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 66, $this->source); })()), "translations", [], "any", false, false, false, 66)) >= 1)) {
            yield "
        <div class=\"navbar-item ml-4 hidden sm:flex\">";
            // line 68
            yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/selector-language.html.twig");
            yield "
        </div>";
        }
        // line 70
        yield "
      </nav>
    </header>
    <main id=\"main\" class=\"h-full mt-14\">";
        // line 74
        yield from $this->unwrap()->yieldBlock('article', $context, $blocks);
        // line 82
        yield "
      <div id=\"button-top\" class=\"fixed bottom-0 mb-4 right-0 mr-4 z-10 opacity-0 duration-150 ease-in-out\">
        <a href=\"#main\" class=\"rounded-full border-0 flex items-center justify-center w-10 h-10 bg-primary-700 dark:bg-primary-900 text-primary-100 hover:text-primary-50 shadow-md\" aria-label=\"";
        // line 84
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to top", [], "messages");
        yield "\" title=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to top", [], "messages");
        yield "\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18\" />
          </svg>
        </a>
      </div>
    </main>
    <footer id=\"footer\" class=\"mx-4 p-4 text-sm text-center flex flex-col justify-center gap-2\">
      <div>";
        // line 92
        yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 92, $this->source); })()), "footer", [], "any", false, false, false, 92), ["%author%" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 92), "name", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 92, $this->source); })()), "author", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92), "Arnaud Ligny")) : ("Arnaud Ligny"))]);
        yield "</div>";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "menus", [], "any", false, true, false, 93), "footer", [], "any", true, true, false, 93)) {
            yield "
      <ul class=\"flex flex-row gap-2 mx-auto\">";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 95, $this->source); })()), "menus", [], "any", false, false, false, 95), "footer", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                yield "
        <li>
          <a href=\"";
                // line 97
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["entry"]);
                yield "\" class=\"font-semibold\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 97);
                yield "</a>
        </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "
      </ul>";
        }
        // line 102
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        yield "
      <a href=\"";
        // line 103
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 103, $this->source); })()), "url", [], "any", false, false, false, 103);
        yield "\" title=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by %powered_by%", ["%powered_by%" => "Cecil"], "messages");
        yield "\"><img src=\"";
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $this->extensions['Cecil\Renderer\Extension\Core']->asset("logo-cecil.svg"));
        yield "\" class=\"w-8 h-8 mx-auto\" alt=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by %powered_by%", ["%powered_by%" => "Cecil"], "messages");
        yield "\" /></a>
    </footer>";
        // line 105
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 116
        yield "
  </body>
</html>";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield from $this->load("_default\\page.html.twig", 24, 942695631)->unwrap()->yield(CoreExtension::merge($context, ["showlarge" => false]));
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_article(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
      <div class=\"w-full lg:max-w-screen-lg mx-auto px-4 xl:px-16 py-6\">
        <article id=\"content\" class=\"markdown markdown-slate markdown-a:text-primary-700 dark:markdown-a:text-primary-400 markdown-a:no-underline markdown-a:font-normal markdown-code:max-w-none dark:markdown-invert max-w-none\">";
        // line 77
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 79
        yield "
        </article>
      </div>";
        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
          ";
        // line 78
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 78, $this->source); })()), "content", [], "any", false, false, false, 78);
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 106
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "docsearch", [], "any", false, true, false, 106), "enabled", [], "any", true, true, false, 106) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 106, $this->source); })()), "docsearch", [], "any", false, false, false, 106), "enabled", [], "any", false, false, false, 106)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 106, $this->source); })()), "docsearch", [], "any", false, false, false, 106), "enabled", [], "any", false, false, false, 106)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    ";
            // line 107
            yield $this->extensions['Cecil\Renderer\Extension\Core']->html($context, $this->extensions['Cecil\Renderer\Extension\Core']->asset((("https://cdn.jsdelivr.net/npm/@docsearch/js@" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 107, $this->source); })()), "docsearch", [], "any", false, false, false, 107), "version", [], "any", false, false, false, 107)) . "/dist/umd/index.min.js"), ["filename" => "docsearch.min.js", "minify" => false]), ["id" => "docsearch", "defer" => "true"]);
            yield "
    <script>";
            // line 109
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "
      docsearch.addEventListener('load', function () {";
                // line 111
                yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/docsearch.js.twig");
                yield "
      });";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 109
            yield $this->extensions['Cecil\Renderer\Extension\Core']->minifyJs($_v0);
            // line 113
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
        return "_default\\page.html.twig";
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
        return array (  339 => 113,  337 => 109,  331 => 111,  327 => 109,  323 => 107,  319 => 106,  312 => 105,  302 => 102,  297 => 78,  288 => 77,  281 => 79,  279 => 77,  269 => 74,  264 => 24,  257 => 23,  247 => 12,  240 => 116,  238 => 105,  228 => 103,  224 => 102,  220 => 99,  210 => 97,  203 => 95,  199 => 93,  196 => 92,  183 => 84,  179 => 82,  177 => 74,  172 => 70,  167 => 68,  163 => 66,  158 => 62,  154 => 59,  151 => 57,  144 => 47,  137 => 45,  133 => 44,  128 => 40,  124 => 37,  120 => 35,  115 => 31,  110 => 28,  103 => 27,  99 => 25,  97 => 23,  92 => 19,  89 => 17,  86 => 16,  82 => 15,  78 => 14,  76 => 13,  74 => 12,  71 => 10,  68 => 9,  64 => 8,  60 => 7,  58 => 6,  56 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\page.html.twig", "C:\\projetcecil\\themes\\docs\\layouts\\_default\\page.html.twig");
    }
}


/* _default\page.html.twig */
class __TwigTemplate_c0be266960159d027bd707be3b9b91a2___942695631 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 24
        return "partials/sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("partials/sidebar.html.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\page.html.twig";
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
        return array (  398 => 24,  339 => 113,  337 => 109,  331 => 111,  327 => 109,  323 => 107,  319 => 106,  312 => 105,  302 => 102,  297 => 78,  288 => 77,  281 => 79,  279 => 77,  269 => 74,  264 => 24,  257 => 23,  247 => 12,  240 => 116,  238 => 105,  228 => 103,  224 => 102,  220 => 99,  210 => 97,  203 => 95,  199 => 93,  196 => 92,  183 => 84,  179 => 82,  177 => 74,  172 => 70,  167 => 68,  163 => 66,  158 => 62,  154 => 59,  151 => 57,  144 => 47,  137 => 45,  133 => 44,  128 => 40,  124 => 37,  120 => 35,  115 => 31,  110 => 28,  103 => 27,  99 => 25,  97 => 23,  92 => 19,  89 => 17,  86 => 16,  82 => 15,  78 => 14,  76 => 13,  74 => 12,  71 => 10,  68 => 9,  64 => 8,  60 => 7,  58 => 6,  56 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\page.html.twig", "C:\\projetcecil\\themes\\docs\\layouts\\_default\\page.html.twig");
    }
}
