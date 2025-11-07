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

/* _default\feed.xsl.twig */
class __TwigTemplate_2a819b81665e6a2a7fb9578450989206 extends Template
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
<xsl:stylesheet xmlns:xsl=\"http://www.w3.org/1999/XSL/Transform\" xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"3.0\">
  <xsl:output method=\"html\" version=\"1.0\" encoding=\"utf-8\" indent=\"yes\" />
  <xsl:template match=\"/\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 5
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "language", [], "any", false, false, false, 5);
        yield "\">
      <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "path", [], "any", false, false, false, 9) == "xsl/atom")) {
            yield "
        <title><xsl:value-of select=\"atom:feed/atom:title\" /> (feed)</title>";
        } else {
            // line 11
            yield "
        <title><xsl:value-of select=\"rss/channel/title\" /> (RSS)</title>";
        }
        // line 13
        yield "
        <style type=\"text/css\">
          html {
            margin: 0;
            padding: 0;
          }
          body {
            margin: 1rem auto;
            padding: 1rem;
            max-width: 40rem;
            background-color: #EFF0F4;
            color: #586069;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
          }
          input {
            min-width: 100%;
            margin-left: .2rem;
            padding-left: .2rem;
            padding-right: .2rem;
          }
          ol {
            list-style-type: none;
            margin-left: -2.5rem;
          }
          li {
            margin: 1rem 0;
          }
          h2, h3 {
            margin: 0;
            color: #24292E;
            font-weight: inherit;
          }
          a {
            color: #0366d6;
            text-decoration: none;
          }
          small {
            color: #586069;
          }
          #RSSicon {
            margin-right: .5rem;
          }
          header {
            margin-bottom: 1rem;
            border-bottom: 1px solid #c7c7c7;
          }
          @-moz-document url-prefix() {
            form {
              margin-bottom: 1rem;
            }
          }
          footer {
            border-top: 1px solid #c7c7c7;
          }
          @media (min-width: 768px) {
            input {
              min-width: 20rem;
            }
          }
        </style>
      </head>
      <body>
        <header>
          <h1>
            <!-- https://commons.wikimedia.org/wiki/File:Feed-icon.svg -->
            <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" style=\"vertical-align: text-bottom; width: 1.2em; height: 1.2em;\" class=\"pr-1\" id=\"RSSicon\" viewBox=\"0 0 256 256\">
              <defs>
                <linearGradient x1=\"0.085\" y1=\"0.085\" x2=\"0.915\" y2=\"0.915\" id=\"RSSg\">
                  <stop offset=\"0.0\" stop-color=\"#E3702D\"/><stop offset=\"0.1071\" stop-color=\"#EA7D31\"/>
                  <stop offset=\"0.3503\" stop-color=\"#F69537\"/><stop offset=\"0.5\" stop-color=\"#FB9E3A\"/>
                  <stop offset=\"0.7016\" stop-color=\"#EA7C31\"/><stop offset=\"0.8866\" stop-color=\"#DE642B\"/>
                  <stop offset=\"1.0\" stop-color=\"#D95B29\"/>
                </linearGradient>
              </defs>
              <rect width=\"256\" height=\"256\" rx=\"55\" ry=\"55\" x=\"0\"  y=\"0\"  fill=\"#CC5D15\"/>
              <rect width=\"246\" height=\"246\" rx=\"50\" ry=\"50\" x=\"5\"  y=\"5\"  fill=\"#F49C52\"/>
              <rect width=\"236\" height=\"236\" rx=\"47\" ry=\"47\" x=\"10\" y=\"10\" fill=\"url(#RSSg)\"/>
              <circle cx=\"68\" cy=\"189\" r=\"24\" fill=\"#FFF\"/>
              <path d=\"M160 213h-34a82 82 0 0 0 -82 -82v-34a116 116 0 0 1 116 116z\" fill=\"#FFF\"/>
              <path d=\"M184 213A140 140 0 0 0 44 73 V 38a175 175 0 0 1 175 175z\" fill=\"#FFF\"/>
            </svg>";
        // line 96
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 96, $this->source); })()), "path", [], "any", false, false, false, 96) == "xsl/atom")) {
            yield "
            <a><xsl:attribute name=\"href\"><xsl:value-of select=\"atom:feed/atom:link[@rel='alternate']/@href\" /></xsl:attribute><xsl:value-of select=\"atom:feed/atom:title\" /></a>";
        } else {
            // line 98
            yield "
            <a><xsl:attribute name=\"href\"><xsl:value-of select=\"rss/channel/link[@rel='alternate']/@href\" /></xsl:attribute><xsl:value-of select=\"rss/channel/title\" /></a>";
        }
        // line 100
        yield "
          </h1>
          <p>";
        // line 102
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To subscribe to this web feed, copy its URL to your feed reader.", [], "messages");
        yield "</p>
          <form>
            <label for=\"feed-url\">";
        // line 104
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed URL:", [], "messages");
        yield "</label>
            <input id=\"feed-url\" onClick=\"this.select();\">
              <xsl:attribute name=\"type\">url</xsl:attribute>
              <xsl:attribute name=\"url\">URL</xsl:attribute>
              <xsl:attribute name=\"spellcheck\">false</xsl:attribute>";
        // line 109
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 109, $this->source); })()), "path", [], "any", false, false, false, 109) == "xsl/atom")) {
            yield "
              <xsl:attribute name=\"value\"><xsl:value-of select=\"atom:feed/atom:link[@rel='self']/@href\" /></xsl:attribute>";
        } else {
            // line 111
            yield "
              <xsl:attribute name=\"value\"><xsl:value-of select=\"rss/channel/link[@rel='self']/@href\" /></xsl:attribute>";
        }
        // line 113
        yield "
            </input>
          </form>
        </header>
        <article>
          <h2>";
        // line 118
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed’s entries", [], "messages");
        yield "</h2>
          <ol>";
        // line 120
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 120, $this->source); })()), "path", [], "any", false, false, false, 120) == "xsl/atom")) {
            yield "
            <xsl:for-each select=\"atom:feed/atom:entry\">
            <li>
              <h3><a><xsl:attribute name=\"href\"><xsl:value-of select=\"atom:link/@href\" /></xsl:attribute><xsl:value-of select=\"atom:title\" /></a></h3>
              <small><xsl:value-of select=\"substring(atom:published, 1, 10)\" /></small>
            </li>
            </xsl:for-each>";
        } else {
            // line 127
            yield "
            <xsl:for-each select=\"rss/channel/item\">
            <li>
              <h3><a><xsl:attribute name=\"href\"><xsl:value-of select=\"link/@href\" /></xsl:attribute><xsl:value-of select=\"title\" /></a></h3>
              <small><xsl:value-of select=\"substring(pubDate, 1, 10)\" /></small>
            </li>
            </xsl:for-each>";
        }
        // line 134
        yield "
          </ol>
        </article>
        <footer>";
        // line 138
        $context["generated_by"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 139
            yield "<a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 139, $this->source); })()), "url", [], "any", false, false, false, 139);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 139, $this->source); })()), "poweredby", [], "any", false, false, false, 139);
            yield "</a>";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        yield "
          <p>";
        // line 141
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed generated by %generated_by%", ["%generated_by%" => (isset($context["generated_by"]) || array_key_exists("generated_by", $context) ? $context["generated_by"] : (function () { throw new RuntimeError('Variable "generated_by" does not exist.', 141, $this->source); })())], "messages");
        yield "</p>
        </footer>
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
        return "_default\\feed.xsl.twig";
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
        return array (  229 => 141,  226 => 140,  218 => 139,  216 => 138,  211 => 134,  202 => 127,  192 => 120,  188 => 118,  181 => 113,  177 => 111,  172 => 109,  165 => 104,  160 => 102,  156 => 100,  152 => 98,  147 => 96,  63 => 13,  59 => 11,  54 => 9,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\feed.xsl.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/_default/feed.xsl.twig");
    }
}
