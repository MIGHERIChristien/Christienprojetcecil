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

/* partials/menu.html.twig */
class __TwigTemplate_a83bd44dc8fe535e067cdde1eddff5e6 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "menus", [], "any", false, false, false, 2), "main", [], "any", false, false, false, 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            yield "
          <li><a href=\"";
            // line 3
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "url", [], "any", false, false, false, 3));
            yield "\" data-weight=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "weight", [], "any", false, false, false, 3);
            yield "\" class=\"navbar-item flex";
            if (($this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["entry"]) == $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })())))) {
                yield " active";
            }
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 3);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/menu.html.twig";
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
        return array (  48 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/menu.html.twig", "C:\\projetcecil\\themes\\docs\\layouts\\partials\\menu.html.twig");
    }
}
