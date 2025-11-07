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

/* partials/terms-list.html.twig */
class __TwigTemplate_c5d27ca842f8fd9118a87d5437979fed extends Template
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
        $context["vocabs"] = [];
        // line 3
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 3, $this->source); })()), "taxonomies", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            $context["vocabs"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 4, $this->source); })()), "taxonomies", [], "any", false, false, false, 4), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4) == ((array_key_exists("vocabulary", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["vocabulary"]) || array_key_exists("vocabulary", $context) ? $context["vocabulary"] : (function () { throw new RuntimeError('Variable "vocabulary" does not exist.', 4, $this->source); })()))) : (""))) || Twig\Extension\CoreExtension::testEmpty(((array_key_exists("vocabulary", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["vocabulary"]) || array_key_exists("vocabulary", $context) ? $context["vocabulary"] : (function () { throw new RuntimeError('Variable "vocabulary" does not exist.', 4, $this->source); })()))) : ("")))); });
        }
        // line 6
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vocabs"]) || array_key_exists("vocabs", $context) ? $context["vocabs"] : (function () { throw new RuntimeError('Variable "vocabs" does not exist.', 6, $this->source); })())) > 0)) {
            yield "
          <nav class=\"terms\">
            <ul>";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vocabs"]) || array_key_exists("vocabs", $context) ? $context["vocabs"] : (function () { throw new RuntimeError('Variable "vocabs" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["vocab"]) {
                // line 10
                $context["vocabulary"] = CoreExtension::getAttribute($this->env, $this->source, $context["vocab"], "id", [], "any", false, false, false, 10);
                // line 11
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), (isset($context["vocabulary"]) || array_key_exists("vocabulary", $context) ? $context["vocabulary"] : (function () { throw new RuntimeError('Variable "vocabulary" does not exist.', 11, $this->source); })()), [], "array", true, true, false, 11)) {
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 12, $this->source); })()), (isset($context["vocabulary"]) || array_key_exists("vocabulary", $context) ? $context["vocabulary"] : (function () { throw new RuntimeError('Variable "vocabulary" does not exist.', 12, $this->source); })()), [], "array", false, false, false, 12));
                    foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
                        yield "
              <li><a class=\"term\" href=\"";
                        // line 13
                        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (((isset($context["vocabulary"]) || array_key_exists("vocabulary", $context) ? $context["vocabulary"] : (function () { throw new RuntimeError('Variable "vocabulary" does not exist.', 13, $this->source); })()) . "/") . $context["term"]), ["language" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 13, $this->source); })()), "language", [], "any", false, false, false, 13)]);
                        yield "\">";
                        yield $context["term"];
                        yield "</a></li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['term'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['vocab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "
            </ul>
          </nav>";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/terms-list.html.twig";
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
        return array (  82 => 16,  68 => 13,  62 => 12,  60 => 11,  58 => 10,  54 => 9,  49 => 6,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/terms-list.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/partials/terms-list.html.twig");
    }
}
