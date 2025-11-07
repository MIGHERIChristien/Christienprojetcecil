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

/* _default\list.atom.twig */
class __TwigTemplate_1da5a9f6b1880c8d0430483b7071902b extends Template
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

        $this->blocks = [
            'feed' => [$this, 'block_feed'],
            'entry' => [$this, 'block_entry'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return "extended/feed.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["author_name"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 1), "name", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "author", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "title", [], "any", false, false, false, 1))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "title", [], "any", false, false, false, 1)));
        // line 2
        $context["author_uri"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 2), "url", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "author", [], "any", false, false, false, 2), "url", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "baseurl", [], "any", false, false, false, 2))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "baseurl", [], "any", false, false, false, 2)));
        // line 4
        $this->parent = $this->load("extended/feed.twig", 4);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_feed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "page", ["xsl/atom"], "method", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
<?xml-stylesheet type=\"text/xsl\" href=\"";
            // line 9
            yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, "xsl/atom", ["canonical" => true]);
            yield "\" media=\"all\"?>";
        }
        // line 10
        yield "
<feed xmlns=\"http://www.w3.org/2005/Atom\" xml:lang=\"";
        // line 11
        yield (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 11, $this->source); })());
        yield "\">
  <id>";
        // line 12
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 12, $this->source); })()), ["canonical" => true]);
        yield "</id>
  <title>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()));
        yield "</title>
  <subtitle><![CDATA[";
        // line 14
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14);
        yield "]]></subtitle>
  <link href=\"";
        // line 15
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 15, $this->source); })()), ["canonical" => true, "format" => "atom"]);
        yield "\" rel=\"self\" type=\"application/atom+xml\" />
  <link href=\"";
        // line 16
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()), ["canonical" => true, "format" => "html"]);
        yield "\" rel=\"alternate\" type=\"text/html\" />
  <updated>";
        // line 17
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 17, $this->source); })()), "c");
        yield "</updated>
  <author>
    <name>";
        // line 19
        yield (isset($context["author_name"]) || array_key_exists("author_name", $context) ? $context["author_name"] : (function () { throw new RuntimeError('Variable "author_name" does not exist.', 19, $this->source); })());
        yield "</name>
    <uri>";
        // line 20
        yield (isset($context["author_uri"]) || array_key_exists("author_uri", $context) ? $context["author_uri"] : (function () { throw new RuntimeError('Variable "author_uri" does not exist.', 20, $this->source); })());
        yield "</uri>
  </author>";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByDate((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 22, $this->source); })())));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            yield "
  <entry xml:lang=\"";
            // line 23
            yield (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 23, $this->source); })());
            yield "\">";
            // line 24
            yield from $this->unwrap()->yieldBlock('entry', $context, $blocks);
            // line 39
            yield "
  </entry>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
</feed>
";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entry(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "
    <id>";
        // line 25
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 25, $this->source); })()), ["canonical" => true]);
        yield "</id>
    <title>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26));
        yield "</title>";
        // line 27
        if (CoreExtension::inFilter("txt", ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "output", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 27, $this->source); })()), "output", [], "any", false, false, false, 27), "html")) : ("html")))) {
            yield "
    <content type=\"text\">
      <![CDATA[";
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29);
            yield "]]>
    </content>";
        } else {
            // line 31
            yield "
    <content type=\"html\">
      <![CDATA[";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 33, $this->source); })()), "content", [], "any", false, false, false, 33);
            yield "]]>
    </content>";
        }
        // line 35
        yield "
    <link href=\"";
        // line 36
        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 36, $this->source); })()), ["canonical" => true]);
        yield "\" rel=\"alternate\" type=\"text/html\" />
    <published>";
        // line 37
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 37, $this->source); })()), "date", [], "any", false, false, false, 37), "c");
        yield "</published>
    <updated>";
        // line 38
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 38, $this->source); })()), "updated", [], "any", false, false, false, 38), "c");
        yield "</updated>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default\\list.atom.twig";
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
        return array (  206 => 38,  202 => 37,  198 => 36,  195 => 35,  190 => 33,  186 => 31,  181 => 29,  176 => 27,  173 => 26,  169 => 25,  160 => 24,  153 => 41,  138 => 39,  136 => 24,  133 => 23,  114 => 22,  110 => 20,  106 => 19,  101 => 17,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  74 => 10,  70 => 9,  66 => 8,  64 => 7,  57 => 6,  52 => 4,  50 => 2,  48 => 1,  41 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_default\\list.atom.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/_default/list.atom.twig");
    }
}
