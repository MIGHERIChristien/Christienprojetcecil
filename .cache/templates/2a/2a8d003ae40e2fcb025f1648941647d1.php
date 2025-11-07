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

/* partials/logo.html.twig */
class __TwigTemplate_9608a073233d20f5db4c5553be896eb5 extends Template
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
        yield "
      <div class=\"navbar-item flex items-center truncate\">
        <a href=\"";
        // line 3
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 3, $this->source); })()), "home", [], "any", false, false, false, 3));
        yield "\" title=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home page");
        yield "\" class=\"flex items-center text-inherit hover:text-inherit py-2 space-x-2\">";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "logo", [], "any", true, true, false, 4)) {
            // line 6
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "logo", [], "any", false, false, false, 6))) {
                // line 7
                [$context["asset_logo_light"], $context["asset_logo_light_2x"]] =                 [$this->extensions['Cecil\Renderer\Extension\Core']->resize($this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "logo", [], "any", false, false, false, 7), "light", [], "any", false, false, false, 7)), 28), $this->extensions['Cecil\Renderer\Extension\Core']->resize($this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "logo", [], "any", false, false, false, 7), "light", [], "any", false, false, false, 7)), 56)];
                // line 8
                [$context["asset_logo_dark"], $context["asset_logo_dark_2x"]] =                 [$this->extensions['Cecil\Renderer\Extension\Core']->resize($this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "logo", [], "any", false, false, false, 8), "dark", [], "any", false, false, false, 8)), 28), $this->extensions['Cecil\Renderer\Extension\Core']->resize($this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "logo", [], "any", false, false, false, 8), "dark", [], "any", false, false, false, 8)), 56)];
                yield "
          <img src=\"";
                // line 9
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["asset_logo_light"]) || array_key_exists("asset_logo_light", $context) ? $context["asset_logo_light"] : (function () { throw new RuntimeError('Variable "asset_logo_light" does not exist.', 9, $this->source); })()));
                yield "\" width=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["asset_logo_light"]) || array_key_exists("asset_logo_light", $context) ? $context["asset_logo_light"] : (function () { throw new RuntimeError('Variable "asset_logo_light" does not exist.', 9, $this->source); })()), "width", [], "any", false, false, false, 9);
                yield "\" height=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["asset_logo_light"]) || array_key_exists("asset_logo_light", $context) ? $context["asset_logo_light"] : (function () { throw new RuntimeError('Variable "asset_logo_light" does not exist.', 9, $this->source); })()), "height", [], "any", false, false, false, 9);
                yield "\" alt=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo");
                yield "\" class=\"w-7 h-7 inline dark:hidden\"
            srcset=\"";
                // line 10
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["asset_logo_light"]) || array_key_exists("asset_logo_light", $context) ? $context["asset_logo_light"] : (function () { throw new RuntimeError('Variable "asset_logo_light" does not exist.', 10, $this->source); })()));
                yield " 1x,
                    ";
                // line 11
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["asset_logo_light_2x"]) || array_key_exists("asset_logo_light_2x", $context) ? $context["asset_logo_light_2x"] : (function () { throw new RuntimeError('Variable "asset_logo_light_2x" does not exist.', 11, $this->source); })()));
                yield " 2x\" />
          <img src=\"";
                // line 12
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["asset_logo_dark"]) || array_key_exists("asset_logo_dark", $context) ? $context["asset_logo_dark"] : (function () { throw new RuntimeError('Variable "asset_logo_dark" does not exist.', 12, $this->source); })()));
                yield "\" width=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["asset_logo_dark"]) || array_key_exists("asset_logo_dark", $context) ? $context["asset_logo_dark"] : (function () { throw new RuntimeError('Variable "asset_logo_dark" does not exist.', 12, $this->source); })()), "width", [], "any", false, false, false, 12);
                yield "\" height=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["asset_logo_dark"]) || array_key_exists("asset_logo_dark", $context) ? $context["asset_logo_dark"] : (function () { throw new RuntimeError('Variable "asset_logo_dark" does not exist.', 12, $this->source); })()), "height", [], "any", false, false, false, 12);
                yield "\" alt=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo");
                yield "\" class=\"w-7 h-7 hidden dark:inline\"
            srcset=\"";
                // line 13
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["asset_logo_dark"]) || array_key_exists("asset_logo_dark", $context) ? $context["asset_logo_dark"] : (function () { throw new RuntimeError('Variable "asset_logo_dark" does not exist.', 13, $this->source); })()));
                yield " 1x,
                    ";
                // line 14
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["asset_logo_dark_2x"]) || array_key_exists("asset_logo_dark_2x", $context) ? $context["asset_logo_dark_2x"] : (function () { throw new RuntimeError('Variable "asset_logo_dark_2x" does not exist.', 14, $this->source); })()));
                yield " 2x\" />";
            } else {
                // line 17
                [$context["asset_logo"], $context["asset_logo_2x"]] =                 [$this->extensions['Cecil\Renderer\Extension\Core']->resize($this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 17, $this->source); })()), "logo", [], "any", false, false, false, 17)), 32), $this->extensions['Cecil\Renderer\Extension\Core']->resize($this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 17, $this->source); })()), "logo", [], "any", false, false, false, 17)), 64)];
                yield "
          <img src=\"";
                // line 18
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["asset_logo"]) || array_key_exists("asset_logo", $context) ? $context["asset_logo"] : (function () { throw new RuntimeError('Variable "asset_logo" does not exist.', 18, $this->source); })()));
                yield "\" width=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["asset_logo"]) || array_key_exists("asset_logo", $context) ? $context["asset_logo"] : (function () { throw new RuntimeError('Variable "asset_logo" does not exist.', 18, $this->source); })()), "width", [], "any", false, false, false, 18);
                yield "\" height=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["asset_logo"]) || array_key_exists("asset_logo", $context) ? $context["asset_logo"] : (function () { throw new RuntimeError('Variable "asset_logo" does not exist.', 18, $this->source); })()), "height", [], "any", false, false, false, 18);
                yield "\" alt=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo");
                yield "\" class=\"w-8 h-8 inline\"
            srcset=\"";
                // line 19
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["asset_logo"]) || array_key_exists("asset_logo", $context) ? $context["asset_logo"] : (function () { throw new RuntimeError('Variable "asset_logo" does not exist.', 19, $this->source); })()));
                yield " 1x,
                    ";
                // line 20
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["asset_logo_2x"]) || array_key_exists("asset_logo_2x", $context) ? $context["asset_logo_2x"] : (function () { throw new RuntimeError('Variable "asset_logo_2x" does not exist.', 20, $this->source); })()));
                yield " 2x\" />";
            }
        }
        // line 22
        yield "
          <div class=\"inline text-xl font-medium\">";
        // line 23
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23);
        yield "</div>
        </a>
      </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/logo.html.twig";
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
        return array (  123 => 23,  120 => 22,  115 => 20,  111 => 19,  101 => 18,  97 => 17,  93 => 14,  89 => 13,  79 => 12,  75 => 11,  71 => 10,  61 => 9,  57 => 8,  55 => 7,  53 => 6,  51 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/logo.html.twig", "C:\\projetcecil\\themes\\docs\\layouts\\partials\\logo.html.twig");
    }
}
