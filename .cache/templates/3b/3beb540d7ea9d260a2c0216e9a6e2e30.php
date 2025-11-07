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

/* partials/paginator.html.twig */
class __TwigTemplate_682469d06d2c80841cc0cc0fe9227643 extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "paginator", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            $context["links"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "paginator", [], "any", false, false, false, 2), "links", [], "any", false, false, false, 2);
            yield "
          <div class=\"page-nav\">";
            // line 4
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "prev", [], "any", true, true, false, 4)) {
                yield "
            <a class=\"page-nav prev\" href=\"";
                // line 5
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 5, $this->source); })()), "prev", [], "any", false, false, false, 5));
                yield "\">";
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous", [], "messages");
                yield "</a>";
            } else {
                // line 6
                yield "
            <span class=\"page-nav prev\">";
                // line 7
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous", [], "messages");
                yield "</span>";
            }
            // line 9
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "next", [], "any", true, true, false, 9)) {
                yield "
            <a class=\"page-nav next\" href=\"";
                // line 10
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 10, $this->source); })()), "next", [], "any", false, false, false, 10));
                yield "\">";
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next", [], "messages");
                yield "</a>";
            } else {
                // line 11
                yield "
            <span class=\"page-nav next\">";
                // line 12
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next", [], "messages");
                yield "</span>";
            }
            // line 13
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
        return "partials/paginator.html.twig";
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
        return array (  82 => 13,  78 => 12,  75 => 11,  69 => 10,  65 => 9,  61 => 7,  58 => 6,  52 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/paginator.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/partials/paginator.html.twig");
    }
}
