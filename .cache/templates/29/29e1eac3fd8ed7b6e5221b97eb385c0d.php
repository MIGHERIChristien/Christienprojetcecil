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

/* extended/feed.twig */
class __TwigTemplate_89af75c1157dac131674769cb9714a94 extends Template
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
            'feed' => [$this, 'block_feed'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["pages"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "pages", [], "any", false, false, false, 1), "showable", [], "any", false, false, false, 1);
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "pages", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            $context["pages"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "pages", [], "any", false, false, false, 3), "showable", [], "any", false, false, false, 3);
        }
        // line 6
        $context["first"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 6, $this->source); })()));
        // line 7
        $context["title"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7) . " - ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7));
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8) == "homepage")) {
            // line 9
            $context["title"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9);
        }
        // line 11
        $context["date"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["first"] ?? null), "date", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 11, $this->source); })()), "time", [], "any", false, false, false, 11))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 11, $this->source); })()), "time", [], "any", false, false, false, 11)));
        // line 12
        $context["lang"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "language", [], "any", false, false, false, 12);
        // line 14
        yield from $this->unwrap()->yieldBlock('feed', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_feed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extended/feed.twig";
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
        return array (  63 => 14,  61 => 12,  59 => 11,  56 => 9,  54 => 8,  52 => 7,  50 => 6,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extended/feed.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/extended/feed.twig");
    }
}
