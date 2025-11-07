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

/* _default\sitemap.xml.twig */
class __TwigTemplate_c5b00303e1f13d6da12e0578bcaeaab2 extends Template
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
        yield "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\"?>";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "page", ["xsl/sitemap"], "method", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
<?xml-stylesheet type=\"text/xsl\" href=\"";
            // line 3
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, "xsl/sitemap", ["canonical" => true]);
            yield "\" media=\"all\"?>";
        }
        // line 4
        yield "
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
  xmlns:xhtml=\"http://www.w3.org/1999/xhtml\"
  xmlns:video=\"http://www.google.com/schemas/sitemap-video/1.1\"
>";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByDate(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "pages", [], "any", false, false, false, 9), "showable", [], "any", false, false, false, 9), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "canonical", [], "any", false, true, false, 9), "url", [], "any", true, true, false, 9); })));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            yield "
  <url>
    <loc>";
            // line 11
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["page"], ["canonical" => true]);
            yield "</loc>
    <lastmod>";
            // line 12
            yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "date", [], "any", false, false, false, 12), "Y-m-d");
            yield "</lastmod>
    <changefreq>";
            // line 13
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 13), "changefreq", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, false, false, 13), "changefreq", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "pages", [], "any", false, false, false, 13), "default", [], "any", false, false, false, 13), "sitemap", [], "any", false, false, false, 13), "changefreq", [], "any", false, false, false, 13))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "pages", [], "any", false, false, false, 13), "default", [], "any", false, false, false, 13), "sitemap", [], "any", false, false, false, 13), "changefreq", [], "any", false, false, false, 13)));
            yield "</changefreq>
    <priority>";
            // line 14
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 14), "priority", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, false, false, 14), "priority", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "pages", [], "any", false, false, false, 14), "default", [], "any", false, false, false, 14), "sitemap", [], "any", false, false, false, 14), "priority", [], "any", false, false, false, 14))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "pages", [], "any", false, false, false, 14), "default", [], "any", false, false, false, 14), "sitemap", [], "any", false, false, false, 14), "priority", [], "any", false, false, false, 14)));
            yield "</priority>";
            // line 16
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "translations", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "translations", [], "any", false, false, false, 16), [])) : ([]))) >= 1) && CoreExtension::getAttribute($this->env, $this->source, $context["page"], "language", [], "any", true, true, false, 16))) {
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "translations", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                    yield "
    <xhtml:link rel=\"alternate\" hreflang=\"";
                    // line 18
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["alternate"], "language", [], "any", false, false, false, 18);
                    yield "\" href=\"";
                    yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["alternate"], ["canonical" => true]);
                    yield "\"/>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['alternate'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                yield "
    <xhtml:link rel=\"alternate\" hreflang=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["page"], "language", [], "any", false, false, false, 20);
                yield "\" href=\"";
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["page"], ["canonical" => true]);
                yield "\"/>";
            }
            // line 23
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "videos", [], "any", true, true, false, 23) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["page"], "videos", [], "any", false, false, false, 23)) > 0)) && CoreExtension::getAttribute($this->env, $this->source, $context["page"], "image", [], "any", true, true, false, 23))) {
                yield "
    <video:video>
      <video:title><![CDATA[";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 25);
                yield "]]></video:title>
      <video:description><![CDATA[";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["page"], "description", [], "any", false, false, false, 26);
                yield "]]></video:description>
      <video:thumbnail_loc>";
                // line 27
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "image", [], "any", false, false, false, 27)), ["canonical" => true]);
                yield "</video:thumbnail_loc>
      <video:content_loc>";
                // line 28
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "videos", [], "any", false, false, false, 28), 0, [], "array", false, false, false, 28)), ["canonical" => true]);
                yield "</video:content_loc>";
                // line 29
                if (CoreExtension::inFilter("embed", CoreExtension::getAttribute($this->env, $this->source, $context["page"], "output", [], "any", false, false, false, 29))) {
                    yield "
      <video:player_loc>";
                    // line 30
                    yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $context["page"], ["canonical" => true, "format" => "embed"]);
                    yield "</video:player_loc>";
                }
                // line 31
                yield "
      <video:duration>";
                // line 32
                yield Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Cecil\Renderer\Extension\Core']->asset(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["page"], "videos", [], "any", false, false, false, 32), 0, [], "array", false, false, false, 32)), "video", [], "any", false, false, false, 32), "duration", [], "any", false, false, false, 32));
                yield "</video:duration>
      <video:publication_date>";
                // line 33
                yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "date", [], "any", false, false, false, 33), "c");
                yield "</video:publication_date>
    </video:video>";
            }
            // line 35
            yield "
  </url>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "
</urlset>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\sitemap.xml.twig";
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
        return array (  153 => 37,  146 => 35,  141 => 33,  137 => 32,  134 => 31,  130 => 30,  126 => 29,  123 => 28,  119 => 27,  115 => 26,  111 => 25,  106 => 23,  100 => 20,  97 => 19,  88 => 18,  82 => 17,  80 => 16,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  58 => 9,  52 => 4,  48 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\sitemap.xml.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/_default/sitemap.xml.twig");
    }
}
