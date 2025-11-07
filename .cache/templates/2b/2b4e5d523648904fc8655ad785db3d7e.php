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

/* partials/selector-theme-icon.html.twig */
class __TwigTemplate_2db0ee089df22ad52ff18999018a55f1 extends Template
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
        yield "<button id=\"theme-toggle\" type=\"button\" title=\"";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change theme color", [], "messages");
        yield "\">
  <svg id=\"theme-toggle-dark-icon\" class=\"hidden w-6 h-6\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z\"></path></svg>
  <svg id=\"theme-toggle-light-icon\" class=\"hidden w-6 h-6\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"></path></svg>
</button>
<script>
  var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
  var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
  var themeToggleBtn = document.getElementById('theme-toggle');
  function updateTheme() {
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
      document.documentElement.dataset.theme = 'dark';
      themeToggleDarkIcon.classList.add('hidden');
      themeToggleLightIcon.classList.remove('hidden');
    } else {
      document.documentElement.classList.remove('dark')
      delete document.documentElement.dataset.theme;
      themeToggleLightIcon.classList.add('hidden');
      themeToggleDarkIcon.classList.remove('hidden');
    }
  }
  updateTheme();
  window
    .matchMedia('(prefers-color-scheme: dark)')
    .addEventListener('change', ({matches:isDark}) => {
      updateTheme();
    })
  themeToggleBtn.addEventListener('click', function() {
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');
    if (localStorage.getItem('theme')) {
      if (localStorage.getItem('theme') === 'light') {
        localStorage.setItem('theme', 'dark');
        updateTheme();
      } else {
        localStorage.setItem('theme', 'light');
        updateTheme();
      }
    } else {
      if (document.documentElement.classList.contains('dark')) {
        localStorage.setItem('theme', 'light');
        updateTheme();
      } else {
        localStorage.setItem('theme', 'dark');
        updateTheme();
      }
    }
  });
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/selector-theme-icon.html.twig";
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/selector-theme-icon.html.twig", "C:\\projetcecil\\themes\\docs\\layouts\\partials\\selector-theme-icon.html.twig");
    }
}
