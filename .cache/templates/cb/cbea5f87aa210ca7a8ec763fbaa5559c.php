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

/* partials/metatags.html.twig */
class __TwigTemplate_a7bd9aca6b714c7d08d48d5e6ad4f0ad extends Template
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
            'content' => [$this, 'block_content'],
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'metatags_favicon' => [$this, 'block_metatags_favicon'],
            'metatags_alternates' => [$this, 'block_metatags_alternates'],
            'metatags_og' => [$this, 'block_metatags_og'],
            'metatags_twitter' => [$this, 'block_metatags_twitter'],
            'metatags_structured_data' => [$this, 'block_metatags_structured_data'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        [$context["title"], $context["author"], $context["image"], $context["video"], $context["audio"]] =         [((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()))) : ("")), ((array_key_exists("author", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 2, $this->source); })()))) : ("")), ((array_key_exists("image", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 2, $this->source); })()))) : ("")), ((array_key_exists("video", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 2, $this->source); })()))) : ("")), ((array_key_exists("audio", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 2, $this->source); })()))) : (""))];
        // line 3
        $context["title_html"] = ((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()))) : (""));
        // line 5
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()))) {
            // line 6
            $context["title_divider"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "divider", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "metatags", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "divider", [], "any", false, false, false, 6), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "divider", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "metatags", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "divider", [], "any", false, false, false, 6), " &middot; ")) : (" &middot; ")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "divider", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 6, $this->source); })()), "metatags", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "divider", [], "any", false, false, false, 6), " &middot; ")) : (" &middot; "))));
            // line 7
            $context["title_only"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 7), "title", [], "any", false, true, false, 7), "only", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "metatags", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "only", [], "any", false, false, false, 7), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 7), "title", [], "any", false, true, false, 7), "only", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "metatags", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "only", [], "any", false, false, false, 7), false)) : (false)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 7), "title", [], "any", false, true, false, 7), "only", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "metatags", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "only", [], "any", false, false, false, 7), false)) : (false))));
            // line 8
            $context["title_pagination_shownumber"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 8), "title", [], "any", false, true, false, 8), "pagination", [], "any", false, true, false, 8), "shownumber", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 8), "title", [], "any", false, true, false, 8), "pagination", [], "any", false, true, false, 8), "shownumber", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8)) : (true)))) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 8), "title", [], "any", false, true, false, 8), "pagination", [], "any", false, true, false, 8), "shownumber", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "metatags", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8), "shownumber", [], "any", false, false, false, 8)) : (true))));
            // line 9
            $context["title_pagination_label"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 9), "title", [], "any", false, true, false, 9), "pagination", [], "any", false, true, false, 9), "label", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "pagination", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 9), "title", [], "any", false, true, false, 9), "pagination", [], "any", false, true, false, 9), "label", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "pagination", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9), "Page %s")) : ("Page %s")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 9), "title", [], "any", false, true, false, 9), "pagination", [], "any", false, true, false, 9), "label", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "metatags", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "pagination", [], "any", false, false, false, 9), "label", [], "any", false, false, false, 9), "Page %s")) : ("Page %s"))));
            // line 10
            $context["title"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10)));
            // line 11
            $context["title_html"] = (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 11, $this->source); })())) . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11)));
            // line 12
            if ((($tmp = (isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                $context["title_html"] = (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })());
            }
            // line 16
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16) == "homepage")) {
                // line 17
                $context["title"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17));
                // line 18
                $context["title_html"] = (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 18, $this->source); })()) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 18, $this->source); })())) . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 18, $this->source); })()), "baseline", [], "any", false, false, false, 18))) : (""))));
                // line 19
                if (((isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 19, $this->source); })()) || Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 19, $this->source); })()), "baseline", [], "any", false, false, false, 19))) : (""))))) {
                    // line 20
                    $context["title_html"] = (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 20, $this->source); })());
                }
            }
            // line 24
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 24), "current", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 24, $this->source); })()), "paginator", [], "any", false, false, false, 24), "current", [], "any", false, false, false, 24), 0)) : (0)) > 1)) {
                // line 25
                if ((($tmp = (isset($context["title_pagination_shownumber"]) || array_key_exists("title_pagination_shownumber", $context) ? $context["title_pagination_shownumber"] : (function () { throw new RuntimeError('Variable "title_pagination_shownumber" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    $context["title"] = ((($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26)) . " (") . Twig\Extension\CoreExtension::sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 26, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()), "paginator", [], "any", false, false, false, 26), "current", [], "any", false, false, false, 26))) . ")");
                    // line 27
                    $context["title_html"] = (((($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 27, $this->source); })())) . Twig\Extension\CoreExtension::sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 27, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 27, $this->source); })()), "paginator", [], "any", false, false, false, 27), "current", [], "any", false, false, false, 27))) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 27, $this->source); })())) . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27)));
                    // line 28
                    if ((($tmp = (isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 29
                        $context["title_html"] = (($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 29, $this->source); })())) . Twig\Extension\CoreExtension::sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 29, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()), "paginator", [], "any", false, false, false, 29), "current", [], "any", false, false, false, 29)));
                    }
                }
            }
        }
        // line 35
        $context["description"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35))));
        // line 37
        $context["keywords"] = $this->extensions['Cecil\Renderer\Extension\Core']->unique(Twig\Extension\CoreExtension::merge($this->extensions['Cecil\Renderer\Extension\Core']->iterable(((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tags", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 37, $this->source); })()), "tags", [], "any", false, false, false, 37), [])) : ([]))), $this->extensions['Cecil\Renderer\Extension\Core']->iterable(((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "keywords", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 37, $this->source); })()), "keywords", [], "any", false, false, false, 37), [])) : ([])))));
        // line 39
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 39, $this->source); })()))) {
            // line 40
            $context["author"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "author", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 40, $this->source); })()), "author", [], "any", false, false, false, 40), ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 40, $this->source); })()), "author", [], "any", false, false, false, 40))) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 40, $this->source); })()), "author", [], "any", false, false, false, 40))) : ("")))));
        }
        // line 42
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 42, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            if ((($tmp =  !is_iterable((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 43, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                $context["author"] = ["name" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 44, $this->source); })())];
            }
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "firstname", [], "any", true, true, false, 46) && CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "lastname", [], "any", true, true, false, 46))) {
                // line 47
                $context["author"] = Twig\Extension\CoreExtension::merge((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 47, $this->source); })()), ["name" => (($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 47, $this->source); })()), "firstname", [], "any", false, false, false, 47)) . " ") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 47, $this->source); })()), "lastname", [], "any", false, false, false, 47)))]);
            }
        }
        // line 51
        $context["robots"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 51), "robots", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 51, $this->source); })()), "metatags", [], "any", false, false, false, 51), "robots", [], "any", false, false, false, 51), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 51), "robots", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 51, $this->source); })()), "metatags", [], "any", false, false, false, 51), "robots", [], "any", false, false, false, 51), "index,follow")) : ("index,follow")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 51), "robots", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 51, $this->source); })()), "metatags", [], "any", false, false, false, 51), "robots", [], "any", false, false, false, 51), "index,follow")) : ("index,follow"))));
        // line 52
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 52), "current", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 52, $this->source); })()), "paginator", [], "any", false, false, false, 52), "current", [], "any", false, false, false, 52), 0)) : (0)) > 1)) {
            // line 53
            $context["robots"] = "noindex,follow";
        }
        // line 56
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 56), "favicon", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()), "metatags", [], "any", false, false, false, 56), "favicon", [], "any", false, false, false, 56)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()), "metatags", [], "any", false, false, false, 56), "favicon", [], "any", false, false, false, 56)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 56), "favicon", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 56, $this->source); })()), "metatags", [], "any", false, false, false, 56), "favicon", [], "any", false, false, false, 56)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 56, $this->source); })()), "metatags", [], "any", false, false, false, 56), "favicon", [], "any", false, false, false, 56)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            $context["favicon_defaults"] = ["icon" => [32, 57, 76, 96, 128, 192, 228], "shortcut icon" => [196], "apple-touch-icon" => [120, 152, 180]];
        }
        // line 64
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 64, $this->source); })())) && (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 64), "image", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 64, $this->source); })()), "metatags", [], "any", false, false, false, 64), "image", [], "any", false, false, false, 64)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 64, $this->source); })()), "metatags", [], "any", false, false, false, 64), "image", [], "any", false, false, false, 64)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 64), "image", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 64, $this->source); })()), "metatags", [], "any", false, false, false, 64), "image", [], "any", false, false, false, 64)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 64, $this->source); })()), "metatags", [], "any", false, false, false, 64), "image", [], "any", false, false, false, 64)) : (true)))))) {
            // line 65
            $context["image"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65), ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65))) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65))) : (""))));
        }
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "videos", [], "any", true, true, false, 68) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 68, $this->source); })()), "videos", [], "any", false, false, false, 68), 0, [], "array", false, false, false, 68))) {
            // line 69
            yield "  ";
            // line 70
            $context["video"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 70, $this->source); })()), "videos", [], "any", false, false, false, 70), 0, [], "array", false, false, false, 70);
        }
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "audios", [], "any", true, true, false, 73) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 73, $this->source); })()), "audio", [], "any", false, false, false, 73), 0, [], "array", false, false, false, 73))) {
            // line 74
            yield "  ";
            // line 75
            $context["audio"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 75, $this->source); })()), "audio", [], "any", false, false, false, 75), 0, [], "array", false, false, false, 75);
        }
        // line 78
        $context["opengraph"] = ["locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 79
(isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 79, $this->source); })()), "language", [], "any", false, false, false, 79), "locale", [], "any", false, false, false, 79), "site_name" => CoreExtension::getAttribute($this->env, $this->source,         // line 80
(isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 80, $this->source); })()), "title", [], "any", false, false, false, 80), "type" => "website", "title" =>         // line 82
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 82, $this->source); })()), "description" =>         $this->unwrap()->renderBlock("description", $context, $blocks), "url" => $this->extensions['Cecil\Renderer\Extension\Core']->url($context,         // line 84
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 84, $this->source); })()), ["canonical" => true])];
        // line 87
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 87, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            $context["video_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset((isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 88, $this->source); })()));
            // line 89
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 89, $this->source); })()), ["type" => "video"]);
            // line 90
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 90, $this->source); })()), ["video" => (isset($context["video_asset"]) || array_key_exists("video_asset", $context) ? $context["video_asset"] : (function () { throw new RuntimeError('Variable "video_asset" does not exist.', 90, $this->source); })())]);
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(        // line 92
(isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 92, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            $context["audio_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset((isset($context["audio"]) || array_key_exists("audio", $context) ? $context["audio"] : (function () { throw new RuntimeError('Variable "audio" does not exist.', 93, $this->source); })()));
            // line 94
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 94, $this->source); })()), ["type" => "audio"]);
            // line 95
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 95, $this->source); })()), ["audio" => (isset($context["audio_asset"]) || array_key_exists("audio_asset", $context) ? $context["audio_asset"] : (function () { throw new RuntimeError('Variable "audio_asset" does not exist.', 95, $this->source); })())]);
        }
        // line 98
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 98, $this->source); })()), "section", [], "any", false, false, false, 98) == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 98), "articles", [], "any", true, true, false, 98)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 98, $this->source); })()), "metatags", [], "any", false, false, false, 98), "articles", [], "any", false, false, false, 98), "blog")) : ("blog")))) {
            // line 99
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 99, $this->source); })()), ["type" => "article"]);
        }
        // line 102
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 102, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            if ((($tmp =  !$this->extensions['Cecil\Renderer\Extension\Core']->isAsset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 103, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 104
                $context["image_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 104, $this->source); })()));
            } else {
                // line 106
                $context["image_asset"] = (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 106, $this->source); })());
            }
            // line 108
            if (( !$this->extensions['Cecil\Renderer\Extension\Core']->isImageSquare((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 108, $this->source); })())) &&  !$this->extensions['Cecil\Renderer\Extension\Core']->isImageLarge((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 108, $this->source); })())))) {
                // line 109
                $_v0 = (((((("The Open Graph image \"" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 109, $this->source); })()), "file", [], "any", false, false, false, 109)) . "\" (") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 109, $this->source); })()), "width", [], "any", false, false, false, 109)) . "x") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 109, $this->source); })()), "height", [], "any", false, false, false, 109)) . " px) should be square or larger");
                trigger_deprecation('', '',                 $_v0." in \"partials/metatags.html.twig\" at line 109.");
            }
            // line 112
            if ($this->extensions['Cecil\Renderer\Extension\Core']->isImageLarge((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 112, $this->source); })()))) {
                // line 113
                $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 113, $this->source); })()), ["image" => $this->extensions['Cecil\Renderer\Extension\Core']->cover((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 113, $this->source); })()), 1200, 630)]);
            } else {
                // line 115
                $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 115, $this->source); })()), ["image" => $this->extensions['Cecil\Renderer\Extension\Core']->resize((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 115, $this->source); })()), 512)]);
            }
        }
        // line 119
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", true, true, false, 119) || CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "opengraph", [], "any", true, true, false, 119))) {
            // line 120
            $context["opengraph"] = Twig\Extension\CoreExtension::merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 120, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", true, true, false, 120) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 120, $this->source); })()), "opengraph", [], "any", false, false, false, 120)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 120, $this->source); })()), "opengraph", [], "any", false, false, false, 120)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "opengraph", [], "any", true, true, false, 120) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 120, $this->source); })()), "opengraph", [], "any", false, false, false, 120)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 120, $this->source); })()), "opengraph", [], "any", false, false, false, 120)) : ([])))));
        }
        // line 123
        $context["facebook"] = ["id" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 123), "facebook", [], "any", false, true, false, 123), "id", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 123, $this->source); })()), "social", [], "any", false, false, false, 123), "facebook", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 123), "facebook", [], "any", false, true, false, 123), "id", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 123, $this->source); })()), "social", [], "any", false, false, false, 123), "facebook", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123))) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 123), "facebook", [], "any", false, true, false, 123), "id", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 123, $this->source); })()), "social", [], "any", false, false, false, 123), "facebook", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123))) : (""))))];
        // line 125
        $context["twitter"] = ["site" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 126
($context["site"] ?? null), "social", [], "any", false, true, false, 126), "twitter", [], "any", false, true, false, 126), "site", [], "any", true, true, false, 126)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 126, $this->source); })()), "social", [], "any", false, false, false, 126), "twitter", [], "any", false, false, false, 126), "site", [], "any", false, false, false, 126))) : ("")), "creator" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["page"] ?? null), "social", [], "any", false, true, false, 127), "twitter", [], "any", true, true, false, 127) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 127, $this->source); })()), "social", [], "any", false, false, false, 127), "twitter", [], "any", false, false, false, 127)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 127, $this->source); })()), "social", [], "any", false, false, false, 127), "twitter", [], "any", false, false, false, 127)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 127), "twitter", [], "any", false, true, false, 127), "creator", [], "any", true, true, false, 127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 127, $this->source); })()), "social", [], "any", false, false, false, 127), "twitter", [], "any", false, false, false, 127), "creator", [], "any", false, false, false, 127))) : (""))))];
        // line 130
        $context["mastodon"] = ["creator" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 131
($context["page"] ?? null), "social", [], "any", false, true, false, 131), "mastodon", [], "any", true, true, false, 131) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 131, $this->source); })()), "social", [], "any", false, false, false, 131), "mastodon", [], "any", false, false, false, 131)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 131, $this->source); })()), "social", [], "any", false, false, false, 131), "mastodon", [], "any", false, false, false, 131)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 131), "mastodon", [], "any", false, true, false, 131), "creator", [], "any", true, true, false, 131)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 131, $this->source); })()), "social", [], "any", false, false, false, 131), "mastodon", [], "any", false, false, false, 131), "creator", [], "any", false, false, false, 131))) : (""))))];
        // line 133
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "
    <title>";
        // line 135
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"description\" content=\"";
        // line 136
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        yield "\">";
        // line 137
        if (((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 137, $this->source); })()) && is_iterable((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 137, $this->source); })())))) {
            yield "
    <meta name=\"keywords\" content=\"";
            // line 138
            yield Twig\Extension\CoreExtension::join((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 138, $this->source); })()), ", ");
            yield "\">";
        }
        // line 140
        if ((($tmp = (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 140, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta name=\"author\" content=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 141, $this->source); })()), "name", [], "any", false, false, false, 141));
            yield "\">";
        }
        // line 143
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new RuntimeError('Variable "robots" does not exist.', 143, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta name=\"robots\" content=\"";
            // line 144
            yield (isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new RuntimeError('Variable "robots" does not exist.', 144, $this->source); })());
            yield "\">";
        }
        // line 147
        yield from $this->unwrap()->yieldBlock('metatags_favicon', $context, $blocks);
        // line 173
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 173), "navigation", [], "any", true, true, false, 173) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 173, $this->source); })()), "metatags", [], "any", false, false, false, 173), "navigation", [], "any", false, false, false, 173)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 173, $this->source); })()), "metatags", [], "any", false, false, false, 173), "navigation", [], "any", false, false, false, 173)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 173), "navigation", [], "any", true, true, false, 173) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 173, $this->source); })()), "metatags", [], "any", false, false, false, 173), "navigation", [], "any", false, false, false, 173)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 173, $this->source); })()), "metatags", [], "any", false, false, false, 173), "navigation", [], "any", false, false, false, 173)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "prev", [], "any", false, true, false, 175), "path", [], "any", true, true, false, 175)) {
                yield "
    <link rel=\"prev\" href=\"";
                // line 176
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 176, $this->source); })()), "prev", [], "any", false, false, false, 176), ["canonical" => true]);
                yield "\">";
            }
            // line 178
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "next", [], "any", false, true, false, 178), "path", [], "any", true, true, false, 178)) {
                yield "
    <link rel=\"next\" href=\"";
                // line 179
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 179, $this->source); })()), "next", [], "any", false, false, false, 179), ["canonical" => true]);
                yield "\">";
            }
            // line 182
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 182), "pages", [], "any", true, true, false, 182)) {
                yield "
    <link rel=\"first\" href=\"";
                // line 183
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 183, $this->source); })()), "paginator", [], "any", false, false, false, 183), "links", [], "any", false, false, false, 183), "first", [], "any", false, false, false, 183), ["canonical" => true]);
                yield "\">";
                // line 184
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 184), "links", [], "any", false, true, false, 184), "prev", [], "any", true, true, false, 184)) {
                    yield "
    <link rel=\"prev\" href=\"";
                    // line 185
                    yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 185, $this->source); })()), "paginator", [], "any", false, false, false, 185), "links", [], "any", false, false, false, 185), "prev", [], "any", false, false, false, 185), ["canonical" => true]);
                    yield "\">";
                }
                // line 187
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 187), "links", [], "any", false, true, false, 187), "next", [], "any", true, true, false, 187)) {
                    yield "
    <link rel=\"next\" href=\"";
                    // line 188
                    yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 188, $this->source); })()), "paginator", [], "any", false, false, false, 188), "links", [], "any", false, false, false, 188), "next", [], "any", false, false, false, 188), ["canonical" => true]);
                    yield "\">";
                }
                // line 189
                yield "
    <link rel=\"last\" href=\"";
                // line 190
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 190, $this->source); })()), "paginator", [], "any", false, false, false, 190), "links", [], "any", false, false, false, 190), "last", [], "any", false, false, false, 190), ["canonical" => true]);
                yield "\">";
            }
        }
        // line 194
        yield from $this->unwrap()->yieldBlock('metatags_alternates', $context, $blocks);
        // line 197
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/feeds-from-section.html.twig", ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 197, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 197, $this->source); })())], false);
        // line 199
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/alternates-languages.html.twig", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 199, $this->source); })())], false);
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", true, true, false, 207)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 207, $this->source); })()), "social", [], "any", false, false, false, 207), ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", true, true, false, 207)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 207, $this->source); })()), "social", [], "any", false, false, false, 207), [])) : ([])))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", true, true, false, 207)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 207, $this->source); })()), "social", [], "any", false, false, false, 207), [])) : ([])))), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "url", [], "array", true, true, false, 207); }));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            yield "
    <link rel=\"me\" href=\"";
            // line 208
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 208);
            yield "\">";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield from $this->unwrap()->yieldBlock('metatags_og', $context, $blocks);
        // line 255
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 255, $this->source); })()), "id", [], "any", false, false, false, 255)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta property=\"fb:profile_id\" content=\"";
            // line 256
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 256, $this->source); })()), "id", [], "any", false, false, false, 256);
            yield "\">";
        }
        // line 259
        yield from $this->unwrap()->yieldBlock('metatags_twitter', $context, $blocks);
        // line 298
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["mastodon"]) || array_key_exists("mastodon", $context) ? $context["mastodon"] : (function () { throw new RuntimeError('Variable "mastodon" does not exist.', 298, $this->source); })()), "creator", [], "any", false, false, false, 298) && (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 298), "mastodon", [], "any", true, true, false, 298) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 298, $this->source); })()), "metatags", [], "any", false, false, false, 298), "mastodon", [], "any", false, false, false, 298)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 298, $this->source); })()), "metatags", [], "any", false, false, false, 298), "mastodon", [], "any", false, false, false, 298)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 298), "mastodon", [], "any", true, true, false, 298) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 298, $this->source); })()), "metatags", [], "any", false, false, false, 298), "mastodon", [], "any", false, false, false, 298)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 298, $this->source); })()), "metatags", [], "any", false, false, false, 298), "mastodon", [], "any", false, false, false, 298)) : (true)))))) {
            yield "
    <meta name=\"fediverse:creator\" content=\"@";
            // line 299
            yield Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mastodon"]) || array_key_exists("mastodon", $context) ? $context["mastodon"] : (function () { throw new RuntimeError('Variable "mastodon" does not exist.', 299, $this->source); })()), "creator", [], "any", false, false, false, 299), "@", "left");
            yield "\">";
        }
        // line 302
        yield from $this->unwrap()->yieldBlock('metatags_structured_data', $context, $blocks);
        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (isset($context["title_html"]) || array_key_exists("title_html", $context) ? $context["title_html"] : (function () { throw new RuntimeError('Variable "title_html" does not exist.', 135, $this->source); })());
        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 136, $this->source); })());
        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 148
        yield $this->env->getRuntime('Twig\Extra\Cache\CacheRuntime')->getCache()->get((("metatags_favicon" . "__") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 148, $this->source); })()), "version", [], "any", false, false, false, 148)), function (\Symfony\Contracts\Cache\ItemInterface $item) use ($context, $macros, $blocks) {
            return \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 149
                if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 149), "favicon", [], "any", true, true, false, 149) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 149, $this->source); })()), "metatags", [], "any", false, false, false, 149), "favicon", [], "any", false, false, false, 149)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 149, $this->source); })()), "metatags", [], "any", false, false, false, 149), "favicon", [], "any", false, false, false, 149)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 149), "favicon", [], "any", true, true, false, 149) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 149, $this->source); })()), "metatags", [], "any", false, false, false, 149), "favicon", [], "any", false, false, false, 149)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 149, $this->source); })()), "metatags", [], "any", false, false, false, 149), "favicon", [], "any", false, false, false, 149)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 151
                    $context["favicon_ico"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset("favicon.ico", ["ignore_missing" => true]);
                    // line 152
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_ico"]) || array_key_exists("favicon_ico", $context) ? $context["favicon_ico"] : (function () { throw new RuntimeError('Variable "favicon_ico" does not exist.', 152, $this->source); })()), "missing", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "
    <link rel=\"icon\" href=\"";
                        // line 153
                        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["favicon_ico"]) || array_key_exists("favicon_ico", $context) ? $context["favicon_ico"] : (function () { throw new RuntimeError('Variable "favicon_ico" does not exist.', 153, $this->source); })()), ["canonical" => true]);
                        yield "\" type=\"image/x-icon\">
    <link rel=\"shortcut icon\" href=\"";
                        // line 154
                        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["favicon_ico"]) || array_key_exists("favicon_ico", $context) ? $context["favicon_ico"] : (function () { throw new RuntimeError('Variable "favicon_ico" does not exist.', 154, $this->source); })()), ["canonical" => true]);
                        yield "\" type=\"image/x-icon\">";
                    }
                    // line 157
                    $context["favicon_svg"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset("favicon.svg", ["ignore_missing" => true]);
                    // line 158
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_svg"]) || array_key_exists("favicon_svg", $context) ? $context["favicon_svg"] : (function () { throw new RuntimeError('Variable "favicon_svg" does not exist.', 158, $this->source); })()), "missing", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "
    <link rel=\"icon\" sizes=\"any\" href=\"";
                        // line 159
                        yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["favicon_svg"]) || array_key_exists("favicon_svg", $context) ? $context["favicon_svg"] : (function () { throw new RuntimeError('Variable "favicon_svg" does not exist.', 159, $this->source); })()), ["canonical" => true]);
                        yield "\" type=\"image/svg+xml\">";
                    }
                    // line 162
                    $context["favicon_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 162), "favicon", [], "any", false, true, false, 162), "image", [], "any", true, true, false, 162)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 162, $this->source); })()), "metatags", [], "any", false, false, false, 162), "favicon", [], "any", false, false, false, 162), "image", [], "any", false, false, false, 162), "favicon.png")) : ("favicon.png")), ["ignore_missing" => true]);
                    // line 163
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 163, $this->source); })()), "missing", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 164
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 164), "favicon", [], "any", false, true, false, 164), "sizes", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 164, $this->source); })()), "metatags", [], "any", false, false, false, 164), "favicon", [], "any", false, false, false, 164), "sizes", [], "any", false, false, false, 164), (isset($context["favicon_defaults"]) || array_key_exists("favicon_defaults", $context) ? $context["favicon_defaults"] : (function () { throw new RuntimeError('Variable "favicon_defaults" does not exist.', 164, $this->source); })()))) : ((isset($context["favicon_defaults"]) || array_key_exists("favicon_defaults", $context) ? $context["favicon_defaults"] : (function () { throw new RuntimeError('Variable "favicon_defaults" does not exist.', 164, $this->source); })()))));
                        foreach ($context['_seq'] as $context["favicon_variant"] => $context["favicon_sizes"]) {
                            // line 165
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::reverse($this->env->getCharset(), Twig\Extension\CoreExtension::sort($this->env, $context["favicon_sizes"])), function ($__size__) use ($context, $macros) { $context["size"] = $__size__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 165, $this->source); })()), "width", [], "any", false, false, false, 165) >= $context["size"]); }));
                            foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                                yield "
    <link rel=\"";
                                // line 166
                                yield $context["favicon_variant"];
                                yield "\" sizes=\"";
                                yield $context["size"];
                                yield "x";
                                yield $context["size"];
                                yield "\" href=\"";
                                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, $this->extensions['Cecil\Renderer\Extension\Core']->resize((isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 166, $this->source); })()), $context["size"]), ["canonical" => true]);
                                yield "\" type=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 166, $this->source); })()), "subtype", [], "any", false, false, false, 166);
                                yield "\">";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['size'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['favicon_variant'], $context['favicon_sizes'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
                yield from [];
            })());;
        })
;
        yield from [];
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_alternates(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 195
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/alternates.html.twig", ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 195, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 195, $this->source); })())], false);
        yield from [];
    }

    // line 211
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_og(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 212
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 212), "og", [], "any", true, true, false, 212) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 212, $this->source); })()), "metatags", [], "any", false, false, false, 212), "og", [], "any", false, false, false, 212)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 212, $this->source); })()), "metatags", [], "any", false, false, false, 212), "og", [], "any", false, false, false, 212)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 212), "og", [], "any", true, true, false, 212) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 212, $this->source); })()), "metatags", [], "any", false, false, false, 212), "og", [], "any", false, false, false, 212)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 212, $this->source); })()), "metatags", [], "any", false, false, false, 212), "og", [], "any", false, false, false, 212)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta property=\"og:locale\" content=\"";
            // line 213
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 213, $this->source); })()), "locale", [], "any", false, false, false, 213);
            yield "\">
    <meta property=\"og:site_name\" content=\"";
            // line 214
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 214, $this->source); })()), "site_name", [], "any", false, false, false, 214);
            yield "\">
    <meta property=\"og:title\" content=\"";
            // line 215
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 215, $this->source); })()), "title", [], "any", false, false, false, 215);
            yield "\">
    <meta property=\"og:description\" content=\"";
            // line 216
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 216, $this->source); })()), "description", [], "any", false, false, false, 216);
            yield "\">
    <meta property=\"og:url\" content=\"";
            // line 217
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 217, $this->source); })()), "url", [], "any", false, false, false, 217);
            yield "\">";
            // line 218
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", true, true, false, 218)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 218, $this->source); })()), "name", [], "any", false, false, false, 218))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
    <meta property=\"og:author\" content=\"";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 219, $this->source); })()), "name", [], "any", false, false, false, 219));
                yield "\">";
            }
            // line 220
            yield "
    <meta property=\"og:type\" content=\"";
            // line 221
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 221, $this->source); })()), "type", [], "any", false, false, false, 221);
            yield "\">";
            // line 222
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 222, $this->source); })()), "type", [], "any", false, false, false, 222) == "article")) {
                yield "
    <meta property=\"article:published_time\" content=\"";
                // line 223
                yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 223, $this->source); })()), "date", [], "any", false, false, false, 223), "c");
                yield "\">
    <meta property=\"article:modified_time\" content=\"";
                // line 224
                yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 224, $this->source); })()), "updated", [], "any", false, false, false, 224), "c");
                yield "\">";
                // line 225
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", true, true, false, 225)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 225, $this->source); })()), "name", [], "any", false, false, false, 225))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "
    <meta property=\"article:author\" content=\"";
                    // line 226
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 226, $this->source); })()), "name", [], "any", false, false, false, 226));
                    yield "\">";
                }
                // line 228
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tags", [], "any", true, true, false, 228)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 228, $this->source); })()), "tags", [], "any", false, false, false, 228), [])) : ([])));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    yield "
    <meta property=\"article:tag\" content=\"";
                    // line 229
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"]);
                    yield "\">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 232
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 232, $this->source); })()), "type", [], "any", false, false, false, 232) == "video")) {
                yield "
    <meta property=\"og:video\" content=\"";
                // line 233
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 233, $this->source); })()), "video", [], "any", false, false, false, 233), ["canonical" => true]);
                yield "\">
    <meta property=\"og:video:url\" content=\"";
                // line 234
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 234, $this->source); })()), "video", [], "any", false, false, false, 234), ["canonical" => true]);
                yield "\">
    <meta property=\"og:video:secure_url\" content=\"";
                // line 235
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 235, $this->source); })()), "video", [], "any", false, false, false, 235), ["canonical" => true]);
                yield "\">
    <meta property=\"og:video:type\" content=\"";
                // line 236
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 236, $this->source); })()), "video", [], "any", false, false, false, 236), "subtype", [], "any", false, false, false, 236);
                yield "\">
    <meta property=\"og:video:width\" content=\"";
                // line 237
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 237, $this->source); })()), "video", [], "any", false, false, false, 237), "video", [], "any", false, false, false, 237), "width", [], "any", false, false, false, 237);
                yield "\">
    <meta property=\"og:video:height\" content=\"";
                // line 238
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 238, $this->source); })()), "video", [], "any", false, false, false, 238), "video", [], "any", false, false, false, 238), "height", [], "any", false, false, false, 238);
                yield "\">";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 239
(isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 239, $this->source); })()), "type", [], "any", false, false, false, 239) == "audio")) {
                yield "
    <meta property=\"og:audio\" content=\"";
                // line 240
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 240, $this->source); })()), "audio", [], "any", false, false, false, 240), ["canonical" => true]);
                yield "\">
    <meta property=\"og:audio:url\" content=\"";
                // line 241
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 241, $this->source); })()), "audio", [], "any", false, false, false, 241), ["canonical" => true]);
                yield "\">
    <meta property=\"og:audio:secure_url\" content=\"";
                // line 242
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 242, $this->source); })()), "audio", [], "any", false, false, false, 242), ["canonical" => true]);
                yield "\">
    <meta property=\"og:audio:type\" content=\"";
                // line 243
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 243, $this->source); })()), "audio", [], "any", false, false, false, 243), "subtype", [], "any", false, false, false, 243);
                yield "\">";
            }
            // line 245
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "image", [], "any", true, true, false, 245)) {
                yield "
    <meta property=\"og:image\" content=\"";
                // line 246
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 246, $this->source); })()), "image", [], "any", false, false, false, 246), ["canonical" => true]);
                yield "\">
    <meta property=\"og:image:type\" content=\"";
                // line 247
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 247, $this->source); })()), "image", [], "any", false, false, false, 247), "subtype", [], "any", false, false, false, 247);
                yield "\">
    <meta property=\"og:image:width\" content=\"";
                // line 248
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 248, $this->source); })()), "image", [], "any", false, false, false, 248), "width", [], "any", false, false, false, 248);
                yield "\">
    <meta property=\"og:image:height\" content=\"";
                // line 249
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 249, $this->source); })()), "image", [], "any", false, false, false, 249), "height", [], "any", false, false, false, 249);
                yield "\">
    <meta property=\"og:image:alt\" content=\"";
                // line 250
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 250, $this->source); })()), "title", [], "any", false, false, false, 250);
                yield "\">";
            }
        }
        yield from [];
    }

    // line 259
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_twitter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 260
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 260), "twitter", [], "any", true, true, false, 260) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 260, $this->source); })()), "metatags", [], "any", false, false, false, 260), "twitter", [], "any", false, false, false, 260)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 260, $this->source); })()), "metatags", [], "any", false, false, false, 260), "twitter", [], "any", false, false, false, 260)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 260), "twitter", [], "any", true, true, false, 260) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 260, $this->source); })()), "metatags", [], "any", false, false, false, 260), "twitter", [], "any", false, false, false, 260)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 260, $this->source); })()), "metatags", [], "any", false, false, false, 260), "twitter", [], "any", false, false, false, 260)) : (true))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "
    <meta name=\"twitter:title\" content=\"";
            // line 261
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 261, $this->source); })()), "title", [], "any", false, false, false, 261);
            yield "\">
    <meta name=\"twitter:description\" content=\"";
            // line 262
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 262, $this->source); })()), "description", [], "any", false, false, false, 262);
            yield "\">";
            // line 263
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "video", [], "any", true, true, false, 263)) {
                yield "
    <meta name=\"twitter:card\" content=\"player\">";
                // line 265
                if (CoreExtension::inFilter("embed", CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 265, $this->source); })()), "output", [], "any", false, false, false, 265))) {
                    yield "
    <meta name=\"twitter:player\" content=\"";
                    // line 266
                    yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 266, $this->source); })()), ["canonical" => true, "format" => "embed"]);
                    yield "\">";
                } else {
                    // line 268
                    $_v1 = Twig\Extension\CoreExtension::sprintf("The \"embed\" output format is required by \"twitter:card:player\" for page \"%s\"", CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 268, $this->source); })()), "filepath", [], "any", false, false, false, 268));
                    trigger_deprecation('', '',                     $_v1." in \"partials/metatags.html.twig\" at line 268.");
                }
                // line 269
                yield "
    <meta name=\"twitter:player:width\" content=\"";
                // line 270
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 270, $this->source); })()), "video", [], "any", false, false, false, 270), "video", [], "any", false, false, false, 270), "width", [], "any", false, false, false, 270);
                yield "\">
    <meta name=\"twitter:player:height\" content=\"";
                // line 271
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 271, $this->source); })()), "video", [], "any", false, false, false, 271), "video", [], "any", false, false, false, 271), "height", [], "any", false, false, false, 271);
                yield "\">
    <meta name=\"twitter:player:stream\" content=\"";
                // line 272
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 272, $this->source); })()), "video", [], "any", false, false, false, 272), ["canonical" => true]);
                yield "\">
    <meta name=\"twitter:player:stream:content_type\" content=\"";
                // line 273
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 273, $this->source); })()), "video", [], "any", false, false, false, 273), "subtype", [], "any", false, false, false, 273);
                yield "\">";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 274
($context["opengraph"] ?? null), "audio", [], "any", true, true, false, 274)) {
                yield "
    <meta name=\"twitter:card\" content=\"player\">
    <meta name=\"twitter:player\" content=\"";
                // line 276
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 276, $this->source); })()), ["canonical" => true, "format" => "embed"]);
                yield "\">";
            }
            // line 278
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "image", [], "any", true, true, false, 278)) {
                yield "
    <meta name=\"twitter:image\" content=\"";
                // line 279
                yield $this->extensions['Cecil\Renderer\Extension\Core']->url($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 279, $this->source); })()), "image", [], "any", false, false, false, 279), ["canonical" => true]);
                yield "\">
    <meta name=\"twitter:image:alt\" content=\"";
                // line 280
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 280, $this->source); })()), "title", [], "any", false, false, false, 280);
                yield "\">";
                // line 281
                if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "video", [], "any", true, true, false, 281) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["opengraph"] ?? null), "audio", [], "any", true, true, false, 281))) {
                    // line 282
                    if ($this->extensions['Cecil\Renderer\Extension\Core']->isImageLarge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 282, $this->source); })()), "image", [], "any", false, false, false, 282))) {
                        yield "
    <meta name=\"twitter:card\" content=\"summary_large_image\">";
                    } else {
                        // line 284
                        yield "
    <meta name=\"twitter:card\" content=\"summary\">";
                    }
                }
            }
            // line 289
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 289, $this->source); })()), "site", [], "any", false, false, false, 289)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
    <meta name=\"twitter:site\" content=\"@";
                // line 290
                yield Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 290, $this->source); })()), "site", [], "any", false, false, false, 290), "@", "left");
                yield "\">";
            }
            // line 292
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 292, $this->source); })()), "creator", [], "any", false, false, false, 292)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "
    <meta name=\"twitter:creator\" content=\"@";
                // line 293
                yield Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 293, $this->source); })()), "creator", [], "any", false, false, false, 293), "@", "left");
                yield "\">";
            }
        }
        yield from [];
    }

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metatags_structured_data(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 303
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 303), "data", [], "any", true, true, false, 303) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 303, $this->source); })()), "metatags", [], "any", false, false, false, 303), "data", [], "any", false, false, false, 303)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 303, $this->source); })()), "metatags", [], "any", false, false, false, 303), "data", [], "any", false, false, false, 303)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "metatags", [], "any", false, true, false, 303), "data", [], "any", true, true, false, 303) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 303, $this->source); })()), "metatags", [], "any", false, false, false, 303), "data", [], "any", false, false, false, 303)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 303, $this->source); })()), "metatags", [], "any", false, false, false, 303), "data", [], "any", false, false, false, 303)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "metatags", [], "any", false, true, false, 303), "jsonld", [], "any", true, true, false, 303) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 303, $this->source); })()), "metatags", [], "any", false, false, false, 303), "jsonld", [], "any", false, false, false, 303)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 303, $this->source); })()), "metatags", [], "any", false, false, false, 303), "jsonld", [], "any", false, false, false, 303)) : (false))))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 304
            yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/jsonld.js.twig", ["author" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 304, $this->source); })())]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/metatags.html.twig";
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
        return array (  739 => 304,  737 => 303,  730 => 302,  722 => 293,  718 => 292,  714 => 290,  710 => 289,  704 => 284,  699 => 282,  697 => 281,  694 => 280,  690 => 279,  686 => 278,  682 => 276,  677 => 274,  674 => 273,  670 => 272,  666 => 271,  662 => 270,  659 => 269,  655 => 268,  651 => 266,  647 => 265,  643 => 263,  640 => 262,  636 => 261,  632 => 260,  625 => 259,  617 => 250,  613 => 249,  609 => 248,  605 => 247,  601 => 246,  597 => 245,  593 => 243,  589 => 242,  585 => 241,  581 => 240,  577 => 239,  574 => 238,  570 => 237,  566 => 236,  562 => 235,  558 => 234,  554 => 233,  550 => 232,  542 => 229,  536 => 228,  532 => 226,  528 => 225,  525 => 224,  521 => 223,  517 => 222,  514 => 221,  511 => 220,  507 => 219,  503 => 218,  500 => 217,  496 => 216,  492 => 215,  488 => 214,  484 => 213,  480 => 212,  473 => 211,  468 => 195,  461 => 194,  433 => 166,  427 => 165,  423 => 164,  421 => 163,  419 => 162,  415 => 159,  411 => 158,  409 => 157,  405 => 154,  401 => 153,  397 => 152,  395 => 151,  393 => 149,  390 => 148,  383 => 147,  372 => 136,  361 => 135,  356 => 302,  352 => 299,  348 => 298,  346 => 259,  342 => 256,  338 => 255,  336 => 211,  329 => 208,  323 => 207,  321 => 199,  319 => 197,  317 => 194,  312 => 190,  309 => 189,  305 => 188,  301 => 187,  297 => 185,  293 => 184,  290 => 183,  286 => 182,  282 => 179,  278 => 178,  274 => 176,  270 => 175,  268 => 173,  266 => 147,  262 => 144,  258 => 143,  254 => 141,  250 => 140,  246 => 138,  242 => 137,  239 => 136,  235 => 135,  232 => 134,  221 => 133,  219 => 131,  218 => 130,  216 => 127,  215 => 126,  214 => 125,  212 => 123,  209 => 120,  207 => 119,  203 => 115,  200 => 113,  198 => 112,  194 => 109,  192 => 108,  189 => 106,  186 => 104,  184 => 103,  182 => 102,  179 => 99,  177 => 98,  174 => 95,  172 => 94,  170 => 93,  168 => 92,  166 => 90,  164 => 89,  162 => 88,  160 => 87,  158 => 84,  157 => 82,  156 => 80,  155 => 79,  154 => 78,  151 => 75,  149 => 74,  147 => 73,  144 => 70,  142 => 69,  140 => 68,  137 => 65,  135 => 64,  132 => 57,  130 => 56,  127 => 53,  125 => 52,  123 => 51,  119 => 47,  117 => 46,  114 => 44,  112 => 43,  110 => 42,  107 => 40,  105 => 39,  103 => 37,  101 => 35,  95 => 29,  93 => 28,  91 => 27,  89 => 26,  87 => 25,  85 => 24,  81 => 20,  79 => 19,  77 => 18,  75 => 17,  73 => 16,  70 => 13,  68 => 12,  66 => 11,  64 => 10,  62 => 9,  60 => 8,  58 => 7,  56 => 6,  54 => 5,  52 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/metatags.html.twig", "phar://C:/projetcecil/cecil.phar/resources/layouts/partials/metatags.html.twig");
    }
}
