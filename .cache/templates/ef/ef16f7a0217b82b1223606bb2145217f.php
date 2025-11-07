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

/* partials/sidebar.html.twig */
class __TwigTemplate_71841198f3c9fba0f808665d55237b3a extends Template
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
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "
    <div id=\"sidebar\" class=\"flex flex-col fixed z-50 lg:z-0 top-0 lg:top-auto w-80 lg:max-w-72 h-screen overflow-auto bg-primary-100 dark:bg-primary-900 shadow-md lg:shadow-none -translate-x-full ";
        // line 2
        if ((($tmp = (isset($context["showlarge"]) || array_key_exists("showlarge", $context) ? $context["showlarge"] : (function () { throw new RuntimeError('Variable "showlarge" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "lg:translate-x-0";
        }
        yield " transition-all duration-200 ease-out\">
      <div class=\"lg:hidden flex items-center h-14 pl-4 py-3\">";
        // line 4
        yield "
        <button class=\"navbar-item flex lg:hidden items-center mr-3\" onclick=\"toggleMenu()\">
          <svg id=\"sidebar-close\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-7 h-7\">
            <title>";
        // line 7
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close menu", [], "messages");
        yield "</title><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\"/>
          </svg>
        </button>";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/logo.html.twig");
        yield "
      </div>
      <nav class=\"px-4 divide-y divide-secondary-400 lg:divide-y-0\">";
        // line 15
        yield from $this->unwrap()->yieldBlock('navigation', $context, $blocks);
        // line 16
        yield "
        <div class=\"flex lg:hidden pt-2 mt-2\">
          <ol class=\"w-full\">";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/menu.html.twig");
        yield "
          </ol>
        </div>";
        // line 22
        yield "
        <div class=\"lg:hidden pt-2 mt-2 flex flex-col space-y-1\">";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/selector-language.html.twig", ["id" => "sidebar", "label" => true]);
        yield "
        </div>
      </nav>
      <div class=\"grow lg:grow-0\"></div>
      <footer class=\"my-4 text-sm text-center text-secondary-800 dark:text-secondary-300 font-thin\">
        ";
        // line 30
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by %powered_by%", ["%powered_by%" => (("<a href=\"" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 30, $this->source); })()), "url", [], "any", false, false, false, 30)) . "\">Cecil</a>")], "messages");
        yield "
      </footer>
    </div>
    <div id=\"sidebar-cloudywrapper\" class=\"hidden lg:hidden fixed top-0 z-40 w-full h-full bg-black opacity-50\" onclick=\"toggleMenu()\"></div>
    <script>";
        // line 35
        $_v0 = new Markup("
      function toggleMenu() {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
        document.getElementById('sidebar-cloudywrapper').classList.toggle('hidden');
      }", $this->env->getCharset());
        yield $this->extensions['Cecil\Renderer\Extension\Core']->minifyJs($_v0);
        // line 40
        yield "
    </script>";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebar.html.twig";
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
        return array (  109 => 15,  103 => 40,  96 => 35,  89 => 30,  81 => 25,  78 => 22,  73 => 19,  69 => 16,  67 => 15,  62 => 11,  57 => 7,  52 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/sidebar.html.twig", "C:\\projetcecil\\themes\\docs\\layouts\\partials\\sidebar.html.twig");
    }
}
