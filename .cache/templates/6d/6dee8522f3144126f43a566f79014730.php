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

/* _default\sitemap.xsl.twig */
class __TwigTemplate_a8c4bf8164ccd6b28368d26fa46db3d7 extends Template
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
        yield "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xsl:stylesheet xmlns:xsl=\"http://www.w3.org/1999/XSL/Transform\" xmlns:sitemap=\"http://www.sitemaps.org/schemas/sitemap/0.9\" version=\"3.0\">
  <xsl:output method=\"html\" version=\"1.0\" encoding=\"utf-8\" indent=\"yes\" />
  <xsl:template match=\"/\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 5
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "language", [], "any", false, false, false, 5);
        yield "\">
      <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />
        <title>Sitemap - ";
        // line 9
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9);
        yield "</title>
        <style type=\"text/css\">
          html {
            margin: 0;
            padding: 0;
          }
          body {
            margin: 1rem auto;
            padding: 1rem;
            max-width: 64rem;
            background-color: #EFF0F4;
            color: #586069;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
          }
          h1 {
            line-height: normal;
          }
          input {
            min-width: 100%;
            margin-left: .2rem;
            padding-left: .2rem;
            padding-right: .2rem;
          }
          ol {
            margin-left: -1.5rem;
          }
          li {
            margin: 0;
          }
          a {
            color: #0366d6;
            text-decoration: none;
          }
          @media (min-width: 768px) {
            input {
              min-width: 20rem;
            }
          }
        </style>
      </head>
      <body>";
        // line 52
        $context["url"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 53
            yield "<a href=\"";
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 53, $this->source); })()), "home", [], "any", false, false, false, 53), ["canonical" => true]);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 53, $this->source); })()), "title", [], "any", false, false, false, 53);
            yield "</a>";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "
        <h1>";
        // line 55
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of URLs for %url%:", ["%url%" => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 55, $this->source); })())], "messages");
        yield "</h1>
        <form>
          <label for=\"feed-url\">";
        // line 57
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sitemap URL:", [], "messages");
        yield "</label>
          <input id=\"feed-url\" onClick=\"this.select();\">
            <xsl:attribute name=\"type\">url</xsl:attribute>
            <xsl:attribute name=\"url\">URL</xsl:attribute>
            <xsl:attribute name=\"spellcheck\">false</xsl:attribute>
            <xsl:attribute name=\"value\">";
        // line 62
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, "sitemap.xml", ["canonical" => true]);
        yield "</xsl:attribute>
          </input>
        </form>
        <ol>
          <xsl:for-each select=\"sitemap:urlset/sitemap:url\">
            <li><a><xsl:attribute name=\"href\"><xsl:value-of select=\"sitemap:loc\" /></xsl:attribute><xsl:value-of select=\"sitemap:loc\" /></a> (<xsl:value-of select=\"sitemap:lastmod\" />)</li>
          </xsl:for-each>
        </ol>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\sitemap.xsl.twig";
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
        return array (  126 => 62,  118 => 57,  113 => 55,  110 => 54,  102 => 53,  100 => 52,  55 => 9,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\sitemap.xsl.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/_default/sitemap.xsl.twig");
    }
}
