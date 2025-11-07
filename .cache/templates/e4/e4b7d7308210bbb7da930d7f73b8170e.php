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

/* _default\redirect.html.twig */
class __TwigTemplate_85c3e20faec9cf0ad8fc94d75e129ae6 extends Template
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
        yield "<!DOCTYPE html>
<html>
  <head lang=\"";
        // line 3
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 3, $this->source); })()), "language", [], "any", false, false, false, 3);
        yield "\">
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirecting…", [], "messages");
        yield "</title>
    <link rel=\"canonical\" href=\"";
        // line 6
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "redirect", [], "any", false, false, false, 6), ["canonical" => true]);
        yield "\">
    <meta name=\"robots\" content=\"noindex\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"refresh\" content=\"0;url=";
        // line 9
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "redirect", [], "any", false, false, false, 9), ["canonical" => true]);
        yield "\">
    <script>
      window.location.assign(\"";
        // line 11
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()), "redirect", [], "any", false, false, false, 11), ["canonical" => true]);
        yield "\");
    </script>
  </head>
  <body>
    <h1>";
        // line 15
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirecting…", [], "messages");
        yield "</h1>
    <a href=\"";
        // line 16
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()), "redirect", [], "any", false, false, false, 16));
        yield "\">";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click here if you are not redirected.", [], "messages");
        yield "</a>
  </body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\redirect.html.twig";
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
        return array (  77 => 16,  73 => 15,  66 => 11,  61 => 9,  55 => 6,  51 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\redirect.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/_default/redirect.html.twig");
    }
}
