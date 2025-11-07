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
class __TwigTemplate_92a8b4e42acb5eaa839fdfcacbb781f8 extends Template
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
            'head' => [$this, 'block_head'],
            'head_metatags' => [$this, 'block_head_metatags'],
            'head_css' => [$this, 'block_head_css'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        yield "\">
  <head>";
        // line 4
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 157
        yield "
  </head>
  <body>
    <header>";
        // line 161
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 170
        yield "
    </header>
    <main>";
        // line 173
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 177
        if ((($tmp = $this->extensions['Cecil\Renderer\Extension\Core']->getEnv("CECIL_DEBUG")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Cecil\Renderer\Extension\Core']->varDump($this->env, $context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 177, $this->source); })()));
        }
        yield "
    </main>
    <footer>";
        // line 180
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 185
        yield "
    </footer>
  </body>
</html>";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
        // line 7
        yield from $this->unwrap()->yieldBlock('head_metatags', $context, $blocks);
        // line 9
        yield "
    <meta name=\"theme-color\" media=\"(prefers-color-scheme: light)\" content=\"white\">
    <meta name=\"theme-color\" media=\"(prefers-color-scheme: dark)\" content=\"black\">";
        // line 12
        yield from $this->unwrap()->yieldBlock('head_css', $context, $blocks);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_metatags(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/metatags.html.twig", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "site" => (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })())], false);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
    <style>";
        // line 13
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/new.css.twig");
            yield "
      /* new.css enhancements */
      :root body > header {
        --nc-lk-1: #006be9;
      }
      @media (prefers-color-scheme: dark) {
        :root body > header {
          --nc-lk-1: var(--nc-d-lk-1);
        }
      }
      body {
        overflow-y: scroll;
      }
      body > header .title {
        line-height: 1;
        color: var(--nc-tx-1);
        padding-top: 0;
        padding-bottom: 0;
        margin-bottom: 8px;
        border-bottom: 0;
        font-size: 2.25rem;
        font-weight: bold;
      }
      body > header .title > a {
        color: var(--nc-tx-1);
        text-decoration: none;
      }
      body > header .title > a:hover {
        color: var(--nc-tx-1);
      }
      nav ol:not(main), nav ul:not(main) {
        padding: 0;
        margin: 0;
      }
      nav li:not(main) {
        display: inline-block;
        margin: 0 .5rem .5rem 0;
      }
      nav a:not(main) {
        text-decoration: none;
      }
      nav a:hover:not(main) {
        text-decoration: underline;
      }
      main header {
        background: unset;
        border-bottom: unset;
        padding: unset;
        margin: unset;
        padding-left: unset;
        padding-right: unset;
      }
      main header h1,
      main header h2,
      main header h3 {
        padding-bottom: unset;
        border-bottom: unset;
      }
      main header > *:first-child {
        margin-top: unset;
        padding-top: unset;
      }
      main header > *:last-child {
        margin-bottom: unset;
      }
      main img {
        height: auto;
      }
      main h2 a {
        text-decoration: none;
      }
      article header {
        margin-bottom: 1rem;
      }
      body > footer {
        border-top: 1px solid var(--nc-bg-3);
        padding-top: 1rem;
        margin-top: 2rem;
      }
      pre {
        padding: 0;
      }
      pre code.hljs {
        margin: 0 !important;
        padding: 0 !important;
        line-height: 1.25;
        background-color: transparent;
      }
      /* Cecil features */
      .page-nav {
        display: flex;
      }
      .page-nav a {
        text-decoration: none;
      }
      .page-nav .prev:before {
        content: \"\\002039\";
        margin-right: .5rem;
      }
      .page-nav .next {
        margin-left: auto;
      }
      .page-nav .next:after {
        content: \"\\00203A\";
        margin-left: .5rem;
      }
      .term:before {
        content: \"#\";
      }
      /* Notes */
      main .note {
        position: relative;
        padding: 1rem;
        margin-bottom: 1rem;
        border-radius: 0.25rem;
        border: 1px solid var(--nc-bg-3);
        border-left-width: 4px;
      }
      main .note > p {
        margin: 0;
      }
      main .note-info {
        border: 1px solid blue;
        border-left-width: 4px;
      }
      main .note-tip {
        border: 1px solid green;
        border-left-width: 4px;
      }
      main .note-important {
        border: 1px solid purple;
        border-left-width: 4px;
      }
      main .note-warning {
        border: 1px solid orange;
        border-left-width: 4px;
      }
      main .note-caution {
        border: 1px solid red;
        border-left-width: 4px;
      }
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        yield $this->extensions['Cecil\Renderer\Extension\Core']->minifyCss($_v0);
        // line 155
        yield "</style>";
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 162, $this->source); })()), "type", [], "any", false, false, false, 162) == "homepage")) {
            yield "
      <h1>";
            // line 163
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 163, $this->source); })()), "title", [], "any", false, false, false, 163);
            yield "</h1>";
        } else {
            // line 164
            yield "
      <div class=\"title\">
        <a href=\"";
            // line 166
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 166, $this->source); })()), "home", [], "any", false, false, false, 166));
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 166, $this->source); })()), "title", [], "any", false, false, false, 166);
            yield "</a>
      </div>";
        }
        // line 169
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/navigation.html.twig", ["menu" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 169, $this->source); })()), "menus", [], "any", false, false, false, 169), "main", [], "any", false, false, false, 169)], false);
        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
      ";
        // line 174
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 174, $this->source); })()), "content", [], "any", false, false, false, 174);
        yield from [];
    }

    // line 180
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 181
        $context["powered_by"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 182
            yield "<a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 182, $this->source); })()), "url", [], "any", false, false, false, 182);
            yield "\">Cecil</a> &amp; <a href=\"https://newcss.net\">new.css</a>";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        yield "
      <small>";
        // line 184
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by %powered_by%", ["%powered_by%" => (isset($context["powered_by"]) || array_key_exists("powered_by", $context) ? $context["powered_by"] : (function () { throw new RuntimeError('Variable "powered_by" does not exist.', 184, $this->source); })())], "messages");
        yield "</small>";
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
        return array (  347 => 184,  344 => 183,  338 => 182,  336 => 181,  329 => 180,  324 => 174,  315 => 173,  310 => 169,  303 => 166,  299 => 164,  295 => 163,  291 => 162,  284 => 161,  279 => 155,  277 => 13,  131 => 14,  129 => 13,  120 => 12,  115 => 8,  108 => 7,  103 => 12,  99 => 9,  97 => 7,  87 => 4,  79 => 185,  77 => 180,  70 => 177,  68 => 173,  64 => 170,  62 => 161,  57 => 157,  55 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\page.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/_default/page.html.twig");
    }
}
