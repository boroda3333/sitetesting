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

/* ft_frame/template/product/manufacturer_list.twig */
class __TwigTemplate_81542516c79e06f77b1ab2d0fae5299527607928004da0bace56cda97b532d33 extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
  <div class=\"row\">
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
        echo "    <div id=\"content\" class=\"col-12 col-lg order-lg-2\">
\t\t\t";
        // line 15
        echo ($context["content_top"] ?? null);
        echo "
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb p-0 mb-3 bg-transparent\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
          ";
        // line 18
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
            // line 19
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19) == 1)) {
                // line 20
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 21);
                echo "\"  itemprop=\"item\">
              <meta itemprop=\"name\" content=\"";
                // line 22
                echo ($context["g_text_home"] ?? null);
                echo "\" />
            \t<svg class=\"ft-icon-18 d-block\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t\t<path d=\"M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z\"/>
            \t</svg>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27);
                echo "\" />
          </li>
          ";
            } elseif ((twig_length_filter($this->env,             // line 29
($context["breadcrumbs"] ?? null)) != twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29))) {
                // line 30
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 31);
                echo "\" itemprop=\"item\">
              <span itemprop=\"name\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 32);
                echo "</span>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34);
                echo "\" />
          </li>
          ";
            } else {
                // line 37
                echo "          <li class=\"breadcrumb-item p-0 active\">
            <span>";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 38);
                echo "</span>
          </li>
          ";
            }
            // line 41
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
        // line 42
        echo "        </ol>
      </nav>
\t\t\t<h1 class=\"h2 mb-4\">";
        // line 44
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 45
        if (($context["categories"] ?? null)) {
            // line 46
            echo "\t\t\t<div title=\"";
            echo ($context["text_index"] ?? null);
            echo "\">
\t\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 48
                echo "      <a href=\"index.php?route=product/manufacturer#";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                echo "\" class=\"btn btn-light\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                echo "</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t</div>
\t\t\t<hr>
      ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 53
                echo "      <h2 id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53);
                echo "\" class=\"mb-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53);
                echo "</h2>
      ";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 54)) {
                    // line 55
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 55), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                        // line 56
                        echo "      <div class=\"row\">
\t\t\t\t";
                        // line 57
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                            // line 58
                            echo "        <div class=\"col\"><a class=\"text-dark\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 58);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 58);
                            echo "</a></div>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "\t\t\t</div>
\t\t\t<hr>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "      ";
                }
                // line 64
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      ";
        } else {
            // line 66
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
            // line 68
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 71
        echo "    </div>
  </div>
\t";
        // line 73
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 75
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/product/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 75,  266 => 73,  262 => 71,  254 => 68,  248 => 66,  245 => 65,  239 => 64,  236 => 63,  228 => 60,  217 => 58,  213 => 57,  210 => 56,  205 => 55,  203 => 54,  196 => 53,  192 => 52,  188 => 50,  177 => 48,  173 => 47,  168 => 46,  166 => 45,  162 => 44,  158 => 42,  144 => 41,  138 => 38,  135 => 37,  129 => 34,  124 => 32,  120 => 31,  117 => 30,  115 => 29,  110 => 27,  102 => 22,  98 => 21,  95 => 20,  92 => 19,  75 => 18,  69 => 15,  66 => 14,  60 => 11,  57 => 10,  54 => 9,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/product/manufacturer_list.twig", "");
    }
}
