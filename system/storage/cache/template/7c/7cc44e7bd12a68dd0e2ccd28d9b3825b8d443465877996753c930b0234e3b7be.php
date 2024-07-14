<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ft_frame/template/information/information.twig */
class __TwigTemplate_e8511889e0c50578541053f210ead7ebad29c776b76b89496194e3ae797ed097 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-information\" class=\"container\">
\t<div class=\"row\">
\t\t";
        // line 4
        if (($context["column_left"] ?? null)) {
            // line 5
            echo "\t\t<div class=\"col-12 col-sm col-lg-3 order-lg-1 col-aside\">
\t\t\t";
            // line 6
            echo ($context["column_left"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 9
        echo "\t\t";
        if (($context["column_right"] ?? null)) {
            // line 10
            echo "\t\t<div class=\"col-12 col-sm col-lg-3 order-lg-3 col-aside\">
\t\t\t";
            // line 11
            echo ($context["column_right"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 14
        echo "\t\t<div id=\"content\" class=\"col-12 col-lg order-lg-2 mb-3\" itemscope itemtype=\"http://schema.org/Thing\">
\t\t\t<nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb p-0 mb-3 bg-transparent\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
          ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18) == 1)) {
                // line 19
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
                echo "\"  itemprop=\"item\">
              <meta itemprop=\"name\" content=\"";
                // line 21
                echo ($context["g_text_home"] ?? null);
                echo "\" />
            \t<svg class=\"ft-icon-18 d-block\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t\t<path d=\"M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z\"/>
            \t</svg>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26);
                echo "\" />
          </li>
          ";
            } elseif ((twig_length_filter($this->env,             // line 28
($context["breadcrumbs"] ?? null)) != twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28))) {
                // line 29
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 30);
                echo "\" itemprop=\"item\">
              <span itemprop=\"name\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 31);
                echo "</span>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33);
                echo "\" />
          </li>
          ";
            } else {
                // line 36
                echo "          <li class=\"breadcrumb-item p-0 active\">
            <span>";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 37);
                echo "</span>
          </li>
          ";
            }
            // line 40
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </ol>
      </nav>
\t\t\t";
        // line 43
        echo ($context["content_top"] ?? null);
        echo "

\t\t\t";
        // line 66
        echo "
\t\t\t<h1 class=\"h2 mb-4\" itemprop=\"name\">";
        // line 67
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<div itemprop=\"description\">";
        // line 68
        echo ($context["description"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
\t";
        // line 71
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 73
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 73,  176 => 71,  170 => 68,  166 => 67,  163 => 66,  158 => 43,  154 => 41,  140 => 40,  134 => 37,  131 => 36,  125 => 33,  120 => 31,  116 => 30,  113 => 29,  111 => 28,  106 => 26,  98 => 21,  94 => 20,  91 => 19,  88 => 18,  71 => 17,  66 => 14,  60 => 11,  57 => 10,  54 => 9,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/information/information.twig", "");
    }
}
