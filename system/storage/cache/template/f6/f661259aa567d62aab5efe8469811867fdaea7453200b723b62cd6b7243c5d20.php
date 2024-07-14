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

/* ft_frame/template/information/sitemap.twig */
class __TwigTemplate_0b4b9cb7787cbec900a9ef52c594eab11446cc983294c80b508d2e0fe928a8e3 extends \Twig\Template
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
<div id=\"information-sitemap\" class=\"container\">
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
        echo "    <div id=\"content\" class=\"col-12 col-lg order-lg-2 mb-3\">
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
      <h1 class=\"h2 mb-4\">";
        // line 44
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <hr>
      <div class=\"row\">
        <div class=\"col-12 col-sm-6\">
          <ul>
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 50
            echo "            <li><a class=\"text-dark\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 50);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 50);
            echo "</a>
              ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 51)) {
                // line 52
                echo "              <ul>
                ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 54
                    echo "                <li><a class=\"text-dark\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 54);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 54);
                    echo "</a>
                  ";
                    // line 55
                    if (twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 55)) {
                        // line 56
                        echo "                  <ul>
                    ";
                        // line 57
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 57));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 58
                            echo "                    <li><a class=\"text-dark\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 58);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 58);
                            echo "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "                  </ul>
                  ";
                    }
                    // line 62
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "              </ul>
              ";
            }
            // line 66
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "          </ul>
        </div>
        <div class=\"col-12 col-sm-6\">
          <ul>
            <li><a class=\"text-dark\" href=\"";
        // line 72
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
            ";
        // line 73
        if ( !($context["catalog_mode"] ?? null)) {
            // line 74
            echo "            <li><a class=\"text-dark\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
              <ul>
                <li><a class=\"text-dark\" href=\"";
            // line 76
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a></li>
                <li><a class=\"text-dark\" href=\"";
            // line 77
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a></li>
                <li><a class=\"text-dark\" href=\"";
            // line 78
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a></li>
                <li><a class=\"text-dark\" href=\"";
            // line 79
            echo ($context["history"] ?? null);
            echo "\">";
            echo ($context["text_history"] ?? null);
            echo "</a></li>
                <li><a class=\"text-dark\" href=\"";
            // line 80
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
              </ul>
            </li>
            <li><a class=\"text-dark\" href=\"";
            // line 83
            echo ($context["history"] ?? null);
            echo "\">";
            echo ($context["text_cart"] ?? null);
            echo "</a></li>
            <li><a class=\"text-dark\" href=\"";
            // line 84
            echo ($context["checkout"] ?? null);
            echo "\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a></li>
            ";
        }
        // line 86
        echo "            <li><a class=\"text-dark\" href=\"";
        echo ($context["search"] ?? null);
        echo "\">";
        echo ($context["text_search"] ?? null);
        echo "</a></li>
            <li>";
        // line 87
        echo ($context["text_information"] ?? null);
        echo "
              <ul>
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 90
            echo "                <li><a class=\"text-dark\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 90);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 90);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                <li><a class=\"text-dark\" href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
  </div>
\t";
        // line 101
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 103
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 103,  348 => 101,  333 => 92,  322 => 90,  318 => 89,  313 => 87,  306 => 86,  299 => 84,  293 => 83,  285 => 80,  279 => 79,  273 => 78,  267 => 77,  261 => 76,  253 => 74,  251 => 73,  245 => 72,  239 => 68,  232 => 66,  228 => 64,  221 => 62,  217 => 60,  206 => 58,  202 => 57,  199 => 56,  197 => 55,  190 => 54,  186 => 53,  183 => 52,  181 => 51,  174 => 50,  170 => 49,  162 => 44,  158 => 42,  144 => 41,  138 => 38,  135 => 37,  129 => 34,  124 => 32,  120 => 31,  117 => 30,  115 => 29,  110 => 27,  102 => 22,  98 => 21,  95 => 20,  92 => 19,  75 => 18,  69 => 15,  66 => 14,  60 => 11,  57 => 10,  54 => 9,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/information/sitemap.twig", "");
    }
}
