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

/* ft_frame/template/product/search.twig */
class __TwigTemplate_726581ef1cc91f15ffcb0c742619e766bca817deea1cdbd554844ad6004d75f8 extends \Twig\Template
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
<div id=\"product-search\" class=\"container\">
  <div class=\"row\">
\t\t";
        // line 4
        if ((($context["column_left"] ?? null) || ($context["menu_open"] ?? null))) {
            // line 5
            echo "\t\t<div class=\"col-12 col-sm col-lg-3 order-lg-1 col-aside\">
\t\t\t";
            // line 6
            if (($context["menu_open"] ?? null)) {
                // line 7
                echo "\t\t\t<div class=\"menu-holder d-none d-lg-block mb-3 mt-n3\"></div>
      <script>var menu_holder_height = function() { document.querySelector('.menu-holder').style.height = document.querySelector('.category-menu-list').offsetHeight + 'px' }; menu_holder_height();</script>
\t\t\t";
            }
            // line 10
            echo "\t\t\t";
            echo ($context["column_left"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 13
        echo "\t\t";
        if (($context["column_right"] ?? null)) {
            // line 14
            echo "\t\t<div class=\"col-12 col-sm col-lg-3 order-lg-3 col-aside\">
\t\t\t";
            // line 15
            echo ($context["column_right"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 18
        echo "     <div id=\"content\" class=\"col-12 col-lg order-lg-2\">
\t\t\t";
        // line 19
        echo ($context["content_top"] ?? null);
        echo "
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb p-0 mb-3 bg-transparent\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
          ";
        // line 22
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
            // line 23
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23) == 1)) {
                // line 24
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 25);
                echo "\"  itemprop=\"item\">
              <meta itemprop=\"name\" content=\"";
                // line 26
                echo ($context["g_text_home"] ?? null);
                echo "\" />
            \t<svg class=\"ft-icon-18 d-block\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t\t<path d=\"M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z\"/>
            \t</svg>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 31);
                echo "\" />
          </li>
          ";
            } elseif ((twig_length_filter($this->env,             // line 33
($context["breadcrumbs"] ?? null)) != twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33))) {
                // line 34
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 35);
                echo "\" itemprop=\"item\">
              <span itemprop=\"name\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 36);
                echo "</span>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38);
                echo "\" />
          </li>
          ";
            } else {
                // line 41
                echo "          <li class=\"breadcrumb-item p-0 active\">
            <span>";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 42);
                echo "</span>
          </li>
          ";
            }
            // line 45
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
        // line 46
        echo "        </ol>
      </nav>
\t\t\t<h1 class=\"h2 mb-4\">";
        // line 48
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<div class=\"mb-4\">
  \t\t\t<label class=\"d-none\">";
        // line 50
        echo ($context["entry_search"] ?? null);
        echo "</label>
  \t\t\t<div class=\"row form-row mb-2\">
  \t\t\t\t<div class=\"col-12 col-md-7 mb-2\">
  \t\t\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 53
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
  \t\t\t\t</div>
  \t\t\t\t<div class=\"col mb-2\">
  \t\t\t\t<select name=\"category_id\" class=\"form-control\">
  \t\t\t\t\t<option value=\"0\">";
        // line 57
        echo ($context["text_category"] ?? null);
        echo "</option>
  \t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 59
            echo "  \t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 59) == ($context["category_id"] ?? null))) {
                // line 60
                echo "  \t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 60);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 60);
                echo "</option>
  \t\t\t\t\t";
            } else {
                // line 62
                echo "  \t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 62);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 62);
                echo "</option>
  \t\t\t\t\t";
            }
            // line 64
            echo "  \t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 65
                echo "  \t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 65) == ($context["category_id"] ?? null))) {
                    // line 66
                    echo "  \t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 66);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 66);
                    echo "</option>
  \t\t\t\t\t";
                } else {
                    // line 68
                    echo "  \t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 68);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 68);
                    echo "</option>
  \t\t\t\t\t";
                }
                // line 70
                echo "  \t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 71
                    echo "  \t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 71) == ($context["category_id"] ?? null))) {
                        // line 72
                        echo "  \t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 72);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 72);
                        echo "</option>
  \t\t\t\t\t";
                    } else {
                        // line 74
                        echo "  \t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 74);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 74);
                        echo "</option>
  \t\t\t\t\t";
                    }
                    // line 76
                    echo "  \t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "  \t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "  \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "  \t\t\t\t</select>
  \t\t\t\t</div>
  \t\t\t\t<div class=\"col-auto ml-auto\">
  \t\t\t\t\t<input type=\"button\" value=\"";
        // line 82
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-block btn-primary px-4\" />
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t\t<div class=\"custom-control custom-checkbox custom-control-inline\">
  \t\t\t\t";
        // line 86
        if (($context["sub_category"] ?? null)) {
            // line 87
            echo "  \t\t\t\t<input class=\"custom-control-input\" type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"sub_category\" checked=\"checked\" />
  \t\t\t\t";
        } else {
            // line 89
            echo "  \t\t\t\t<input class=\"custom-control-input\" type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"sub_category\" />
  \t\t\t\t";
        }
        // line 91
        echo "  \t\t\t\t<label class=\"custom-control-label\" for=\"sub_category\">
  \t\t\t\t\t";
        // line 92
        echo ($context["text_sub_category"] ?? null);
        echo "
  \t\t\t\t</label>
  \t\t\t</div>
  \t\t\t<div class=\"custom-control custom-checkbox custom-control-inline\">
  \t\t\t\t";
        // line 96
        if (($context["description"] ?? null)) {
            // line 97
            echo "  \t\t\t\t<input class=\"custom-control-input\" type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
  \t\t\t\t";
        } else {
            // line 99
            echo "  \t\t\t\t<input class=\"custom-control-input\" type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
  \t\t\t\t";
        }
        // line 101
        echo "  \t\t\t\t<label class=\"custom-control-label\" for=\"description\">
  \t\t\t\t\t";
        // line 102
        echo ($context["entry_description"] ?? null);
        echo "
  \t\t\t\t</label>
  \t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
      <h2 class=\"mb-4 d-none\">";
        // line 107
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 108
        if (($context["products"] ?? null)) {
            // line 109
            echo "      <div class=\"mb-3\">
\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t<div class=\"col-auto col-sm-auto order-sm-3\">
            <div class=\"btn-group ml-sm-2\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"ft-list-view\" class=\"btn btn-light px-2 border ";
            // line 113
            if ((($context["view_default"] ?? null) == "list")) {
                echo "active";
            }
            echo "\" title=\"";
            echo ($context["button_list"] ?? null);
            echo "\" onclick=\"products_view('list')\">
\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-600 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M4 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5zm0-6c-.83 0-1.5.67-1.5 1.5S3.17 7.5 4 7.5 5.5 6.83 5.5 6 4.83 4.5 4 4.5zm0 12c-.83 0-1.5.68-1.5 1.5s.68 1.5 1.5 1.5 1.5-.68 1.5-1.5-.67-1.5-1.5-1.5zM7 19h14v-2H7v2zm0-6h14v-2H7v2zm0-8v2h14V5H7z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"ft-grid-view\" class=\"btn btn-light px-2 border ";
            // line 118
            if ((($context["view_default"] ?? null) == "grid")) {
                echo "active";
            }
            echo "\" title=\"";
            echo ($context["button_grid"] ?? null);
            echo "\" onclick=\"products_view('grid')\">
\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-600 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
              <button type=\"button\" id=\"ft-big-grid-view\" class=\"btn btn-light px-2 border ";
            // line 123
            if ((($context["view_default"] ?? null) == "big_grid")) {
                echo "active";
            }
            echo "\" title=\"";
            echo ($context["button_grid"] ?? null);
            echo "\" onclick=\"products_view('big_grid')\">
\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-600 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M 2 3 L 2 11 L 7 11 L 7 3 L 2 3 z M 9 3 L 9 11 L 15 11 L 15 3 L 9 3 z M 17 3 L 17 11 L 22 11 L 22 3 L 17 3 z M 2 13 L 2 21 L 7 21 L 7 13 L 2 13 z M 9 13 L 9 21 L 15 21 L 15 13 L 9 13 z M 17 13 L 17 21 L 22 21 L 22 13 L 17 13 z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col col-sm-auto ml-sm-auto order-sm-2\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm mb-0\">
\t\t\t\t\t\t\t<div class=\"input-group ml-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text px-2 bg-light\" title=\"";
            // line 134
            echo ($context["text_limit"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 5H1v16c0 1.1.9 2 2 2h16v-2H3V5zm18-4H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 16H7V3h14v14z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control custom-select\" onchange=\"location = this.value;\" aria-label=\"";
            // line 140
            echo ($context["text_limit"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 142
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 142) == ($context["limit"] ?? null))) {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 143);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 143);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 145);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 145);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-sm-auto order-sm-1 mt-2 mt-sm-0\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm mb-0\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text px-2 bg-light\" title=\"";
            // line 156
            echo ($context["text_sort"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control custom-select\" onchange=\"location = this.value;\" aria-label=\"";
            // line 162
            echo ($context["text_sort"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 164
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 164) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 165);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 165);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 167
                    echo "                  ";
                    if ( !(($context["catalog_mode"] ?? null) && twig_in_filter("p.price", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 167)))) {
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 168);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 168);
                        echo "</option>
                  ";
                    }
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
      </div>
      <div class=\"products-container\">

        ";
            // line 180
            if ((($context["view_default"] ?? null) == "list")) {
                // line 181
                echo "        <div class=\"list row form-row row-cols-1\">
        ";
            }
            // line 183
            echo "
        ";
            // line 184
            if ((($context["view_default"] ?? null) == "grid")) {
                // line 185
                echo "        <div class=\"grid row form-row row-cols-2 row-cols-md-3 ";
                if ((($context["column_right"] ?? null) && (($context["column_left"] ?? null) || ($context["menu_open"] ?? null)))) {
                    echo "row-cols-lg-2 row-cols-xl-3 row-cols-xxl-4";
                } elseif ((($context["column_right"] ?? null) || (($context["column_left"] ?? null) || ($context["menu_open"] ?? null)))) {
                    echo "row-cols-xl-4 row-cols-xxl-5 ";
                } else {
                    echo "row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6";
                }
                echo "\">
        ";
            }
            // line 187
            echo "
        ";
            // line 188
            if ((($context["view_default"] ?? null) == "big_grid")) {
                // line 189
                echo "        <div class=\"big_grid row form-row row-cols-1 row-cols-sm-2 ";
                if ((($context["column_right"] ?? null) && (($context["column_left"] ?? null) || ($context["menu_open"] ?? null)))) {
                    echo "row-cols-lg-1 row-cols-xl-2 row-cols-xxl-3";
                } elseif ((($context["column_right"] ?? null) || (($context["column_left"] ?? null) || ($context["menu_open"] ?? null)))) {
                    echo "row-cols-xl-3 row-cols-xxl-4 ";
                } else {
                    echo "row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5";
                }
                echo "\">
        ";
            }
            // line 191
            echo "
        ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 193
                echo "        <div class=\"col product-item d-flex mb-2\">
          <div class=\"bg-white w-100 d-flex flex-column border rounded shadow-sm mb-1\">
            <div class=\"product-image position-relative text-center px-2 px-sm-3 pt-2 pb-2\">
              <a href=\"";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 196);
                echo "\">
                <div class=\"d-inline-block position-relative\">
                  <svg class=\"d-block img-fluid\" width=\"";
                // line 198
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_width", [], "any", false, false, false, 198);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_height", [], "any", false, false, false, 198);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                  ";
                // line 199
                if (($context["catalog_page_lazy"] ?? null)) {
                    // line 200
                    echo "                  <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 ft-lazy-spinner\">
                    <div class=\"spinner-border text-gray-300\"></div>
                  </div>
                  <img
                    src=\"image/catalog/frametheme/src_holder.png\"
                    data-src=\"";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 205);
                    echo "\"
                    ";
                    // line 206
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 206)) {
                        // line 207
                        echo "                    srcset=\"image/catalog/frametheme/src_holder.png\"
                    data-srcset=\"";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 208);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 208);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 208);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 208);
                        echo " 4x\"
                    ";
                    }
                    // line 210
                    echo "                    alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 210);
                    echo "\"
                    title=\"";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 211);
                    echo "\"
                    class=\"position-absolute t-0 l-0 img-fluid d-block w-auto ft-lazy-img\"
                  >
                  ";
                } else {
                    // line 215
                    echo "                  <img
                    src=\"";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 216);
                    echo "\"
                    ";
                    // line 217
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 217)) {
                        // line 218
                        echo "                    srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 218);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 218);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 218);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 218);
                        echo " 4x\"
                    ";
                    }
                    // line 220
                    echo "                    alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 220);
                    echo "\"
                    title=\"";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 221);
                    echo "\"
                    class=\"position-absolute t-0 l-0 img-fluid d-block w-auto ft-lazy-img\"
                  >
                  ";
                }
                // line 225
                echo "                </div>
              </a>
              ";
                // line 227
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 227)) {
                    // line 228
                    echo "              <ul class=\"list-unstyled position-absolute t-0 l-0 ml-3 mt-2 text-left\">
                ";
                    // line 229
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 229));
                    foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                        // line 230
                        echo "                <li><span class=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "class", [], "any", false, false, false, 230);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "text", [], "any", false, false, false, 230);
                        echo "</span></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 232
                    echo "              </ul>
              ";
                }
                // line 234
                echo "            </div>
            <div class=\"product-description px-2 px-sm-3 pt-2 pb-1\">
              <div class=\"product-name\">
                <a href=\"";
                // line 237
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 237);
                echo "\" class=\"text-dark h6 font-weight-normal line-clamp-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 237);
                echo "</a>
              </div>

              ";
                // line 240
                if (twig_get_attribute($this->env, $this->source, $context["product"], "additional_fields", [], "any", false, false, false, 240)) {
                    // line 241
                    echo "              <ul class=\"product-fields list-unstyled mb-2\">
                ";
                    // line 242
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "additional_fields", [], "any", false, false, false, 242));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 243
                        echo "                <li><small class=\"d-block text-muted\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 243);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "text", [], "any", false, false, false, 243);
                        echo "</small></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 245
                    echo "              </ul>
              ";
                }
                // line 247
                echo "
              <div class=\"product-text d-none font-weight-light text-secondary mb-3\">";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 248);
                echo "</div>
            </div>
            <div class=\"product-controls t-auto px-2 px-sm-3 pb-2 pb-sm-3\">

              ";
                // line 252
                if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                    // line 253
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 253)) {
                        // line 254
                        echo "              <div class=\"price\">
                ";
                        // line 255
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 255)) {
                            // line 256
                            echo "                <div class=\"h6 mb-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 256);
                            echo "</div>
                ";
                        } else {
                            // line 258
                            echo "                <div class=\"h6 mb-1\">
                  <s class=\"d-inline-block text-danger font-weight-light\">";
                            // line 259
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 259);
                            echo "</s>
                  <span class=\"d-inline-block\">";
                            // line 260
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 260);
                            echo "</span>
                </div>
                ";
                        }
                        // line 263
                        echo "                ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 263)) {
                            // line 264
                            echo "                <small class=\"font-weight-light text-muted d-block\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 264);
                            echo "</small>
                ";
                        }
                        // line 266
                        echo "              </div>
              ";
                    }
                    // line 268
                    echo "              ";
                }
                // line 269
                echo "
              ";
                // line 270
                if (($context["review_status"] ?? null)) {
                    // line 271
                    echo "              <div class=\"d-flex align-items-center ";
                    if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                        echo " mt-2 ";
                    }
                    echo "\">
                <div class=\"d-flex mr-2\">
                  ";
                    // line 273
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 274
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 274) < $context["i"])) {
                            // line 275
                            echo "                  <svg class=\"d-block ft-icon-18 text-gray-400 m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z\"/>
                  </svg>
                  ";
                        } else {
                            // line 279
                            echo "                  <svg class=\"d-block ft-icon-18 text-warning m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                  </svg>
                  ";
                        }
                        // line 283
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 284
                    echo "                </div>
                ";
                    // line 285
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "reviews_href", [], "any", false, false, false, 285)) {
                        // line 286
                        echo "                <a class=\"d-block text-dark text-nowrap text-truncate w-auto\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews_href", [], "any", false, false, false, 286);
                        echo "\">
                  <small>";
                        // line 287
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 287);
                        echo "</small>
                </a>
                ";
                    } else {
                        // line 290
                        echo "                <span class=\"d-block text-secondary text-nowrap text-truncate text-gray-500 w-auto\">
                  <small>";
                        // line 291
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 291);
                        echo "</small>
                </span>
                ";
                    }
                    // line 294
                    echo "              </div>
              ";
                }
                // line 296
                echo "              ";
                if ((($context["catalog_stok_status"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                    // line 297
                    echo "              <small class=\"d-block ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 297) <= 0)) {
                        echo "text-danger";
                    } else {
                        echo "text-success";
                    }
                    echo " my-2\">
                <span class=\"row no-gutters align-items-center\">
                  <span class=\"col-auto\">
                    <svg class=\"ft-icon d-block mr-1\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                      <circle cx=\"12\" cy=\"12\" r=\"8\"/>
                    </svg>
                  </span>
                  <span class=\"col\">
                    ";
                    // line 305
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 305);
                    echo "
                  </span>
                </span>
              </small>
              ";
                }
                // line 310
                echo "              <div class=\"btn-group ";
                if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                    echo "d-flex d-md-inline-flex";
                }
                echo " dropup mt-2\">

                ";
                // line 312
                if ( !($context["catalog_mode"] ?? null)) {
                    // line 313
                    echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 313);
                    echo "');\" ";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 313) <= 0) && ($context["disable_btn_status"] ?? null))) {
                        echo "disabled";
                    }
                    echo ">
                  <span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
                    <span class=\"col-auto\">
                      <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M17.21 9l-4.38-6.56c-.19-.28-.51-.42-.83-.42-.32 0-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1h-4.79zM9 9l3-4.4L15 9H9zm3 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z\"/>
                      </svg>
                    </span>
                    <span class=\"col-auto\">
                      <span class=\"text-truncate mx-2 ";
                    // line 321
                    if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                        echo "d-none d-md-block";
                    }
                    echo "\">";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 321) <= 0) && ($context["disable_btn_status"] ?? null))) {
                        echo ($context["disable_btn_text"] ?? null);
                    } else {
                        echo ($context["button_cart"] ?? null);
                    }
                    echo "</span>
                    </span>
                  </span>
                </button>
                ";
                } else {
                    // line 326
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 326);
                    echo "\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\">
                  <span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
                    <span class=\"col-auto\">
                      <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z\"/>
                      </svg>
                    </span>
                    <span class=\"col-auto\">
                      <span class=\"text-truncate mx-2 ";
                    // line 334
                    if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                        echo "d-none d-md-block";
                    }
                    echo "\">";
                    echo ($context["g_text_details"] ?? null);
                    echo "</span>
                    </span>
                  </span>
                </a>
                ";
                }
                // line 339
                echo "
                ";
                // line 340
                if ((($context["fastorder_status"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                    // line 341
                    echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\"  title=\"";
                    echo ($context["g_text_fastorder"] ?? null);
                    echo "\" onclick=\"ft_fastorder('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 341);
                    echo "')\" ";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 341) <= 0) && ($context["disable_btn_status"] ?? null))) {
                        echo "disabled";
                    }
                    echo ">
                  <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M 13 1 L 6 14 L 12 14 L 12 23 L 19 10 L 13 10 L 13 1 z\"></path>
                  </svg>
                </button>
                ";
                }
                // line 347
                echo "

                ";
                // line 349
                if (($context["qview_status"] ?? null)) {
                    // line 350
                    echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\" title=\"";
                    echo ($context["g_text_qview"] ?? null);
                    echo "\" onclick=\"ft_qview('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 350);
                    echo "')\">
                  <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M12,6.5c3.79,0,7.17,2.13,8.82,5.5c-1.65,3.37-5.02,5.5-8.82,5.5S4.83,15.37,3.18,12C4.83,8.63,8.21,6.5,12,6.5 M12,4.5 C7,4.5,2.73,7.61,1,12c1.73,4.39,6,7.5,11,7.5s9.27-3.11,11-7.5C21.27,7.61,17,4.5,12,4.5L12,4.5z\"/><path d=\"M12,9.5c1.38,0,2.5,1.12,2.5,2.5s-1.12,2.5-2.5,2.5S9.5,13.38,9.5,12S10.62,9.5,12,9.5 M12,7.5c-2.48,0-4.5,2.02-4.5,4.5 s2.02,4.5,4.5,4.5s4.5-2.02,4.5-4.5S14.48,7.5,12,7.5L12,7.5z\"/>
                  </svg>
                </button>
                ";
                }
                // line 356
                echo "
                ";
                // line 357
                if ((($context["wishlist_status"] ?? null) || ($context["compare_status"] ?? null))) {
                    // line 358
                    echo "                <div class=\"btn-group dropdown dropup position-static\">
                  <div class=\"dropdown-menu dropdown-menu-right w-100\" >
                    ";
                    // line 360
                    if (($context["wishlist_status"] ?? null)) {
                        // line 361
                        echo "                    <a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 361);
                        echo "');return false\">
                      <span class=\"row no-gutters align-items-center flex-nowrap\">
                        <span class=\"col-auto\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z\"/>
                          </svg>
                        </span>
                        <span class=\"col text-truncate\">";
                        // line 368
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span>
                      </span>
                    </a>
                    ";
                    }
                    // line 372
                    echo "                    ";
                    if (($context["compare_status"] ?? null)) {
                        // line 373
                        echo "                    <a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 373);
                        echo "');return false\">
                      <span class=\"row no-gutters align-items-center flex-nowrap\">
                        <span class=\"col-auto\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M 12 4 A 2 2 0 0 0 10.269531 5 L 5 5 L 2 5 L 2 7 L 4 7 L 0 15 C 0 17.761 2.239 20 5 20 C 7.761 20 10 17.761 10 15 L 6 7 L 10.271484 7 A 2 2 0 0 0 12 8 A 2 2 0 0 0 13.730469 7 L 18 7 L 14 15 C 14 17.761 16.239 20 19 20 C 21.761 20 24 17.761 24 15 L 20 7 L 22 7 L 22 5 L 13.728516 5 A 2 2 0 0 0 12 4 z M 5 9.0214844 L 7.9882812 15 L 2.0117188 15 L 5 9.0214844 z M 19 9.0214844 L 21.988281 15 L 16.011719 15 L 19 9.0214844 z\"/>
                          </svg>
                        </span>
                        <span class=\"col text-truncate\">";
                        // line 380
                        echo ($context["button_compare"] ?? null);
                        echo "</span>
                      </span>
                    </a>
                    ";
                    }
                    // line 384
                    echo "                  </div>
                  <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1 px-md-0\" data-toggle=\"dropdown\" data-flip=\"false\" aria-label=\"more\">
                    <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                      <path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
                    </svg>
                  </button>
                </div>
                ";
                }
                // line 392
                echo "              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 397
            echo "\t\t\t\t</div>
\t\t\t</div>
      <button type=\"button\" class=\"btn-showmore btn btn-lg btn-block border btn-light mb-3 d-none text-muted\" onclick=\"showmore()\">
        <span class=\"row no-gutters justify-content-center align-items-center\">
          <span class=\"col-auto loading-icon\">
    \t\t\t\t<span class=\"spinner-border ft-icon-24 my-0 mr-3 text-gray-600\"></span>
          </span>
          <span class=\"col-auto\">
            ";
            // line 405
            echo ($context["g_text_showmore"] ?? null);
            echo "
          </span>
        </span>
\t\t\t</button>
\t\t\t<div class=\"row pr-container align-items-center mt-2\">
\t\t\t\t<div class=\"col-12 col-md-auto ml-md-auto order-md-2 text-center text-md-left results text-gray-600 font-weight-light mb-2\">
          ";
            // line 411
            echo ($context["results"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-auto order-md-1 text-center text-md-left mb-2\">
\t\t\t\t\t<nav>
\t\t\t\t\t\t";
            // line 415
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
      ";
        } else {
            // line 420
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 422
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 423
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script>

\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
</script>



<script>

  ";
        // line 478
        if (($context["products"] ?? null)) {
            // line 479
            echo "
  document.addEventListener(\"DOMContentLoaded\", function(event) {
    if (localStorage.getItem('display') == 'list') { products_view('list') }
    if (localStorage.getItem('display') == 'grid') { products_view('grid') }
    if (localStorage.getItem('display') == 'big_grid') { products_view('big_grid') }

    if (\$('.pagination .active').next('li').length > 0) { \$('.btn-showmore').removeClass('d-none') }
  });

  var products_view = function(view) {

    var items_row = document.querySelector('.products-container > .row'),
        buttn_grid = document.querySelector('#ft-grid-view'),
        buttn_list = document.querySelector('#ft-list-view'),
        buttn_big_grid = document.querySelector('#ft-big-grid-view'),
        col_left = document.querySelectorAll('#column-left, .menu-holder'),
        col_right = document.querySelectorAll('#column-right'),
        cols = 0;

    if (col_left.length > 0 ) { cols++ }
    if (col_right.length > 0 ) { cols++ }

    var clone = items_row.cloneNode(true);

    clone.classList.forEach(function(class_name, i) {
      if (class_name.indexOf('row-cols-') >= 0) {
        items_row.classList.remove(class_name);
      }
    });

    delete clone;

    if (view == 'list') {
      localStorage.setItem('display', 'list');
      items_row.classList.remove('grid');
      items_row.classList.remove('big_grid');
      items_row.classList.add('list');
      items_row.classList.add('row-cols-1');

      if (buttn_grid != null && buttn_list != null && buttn_big_grid != null) {
        buttn_list.classList.add('active');
        buttn_grid.classList.remove('active');
        buttn_big_grid.classList.remove('active');
      }
    }

    if (view == 'grid') {
      localStorage.setItem('display', 'grid');
      items_row.classList.remove('list');
      items_row.classList.remove('big_grid');
      items_row.classList.add('grid');
      items_row.classList.add('row-cols-2');
      items_row.classList.add('row-cols-md-3');

      switch (cols) {
        case 1:
          items_row.classList.add('row-cols-xl-4');
          items_row.classList.add('row-cols-xxl-5');
          break;

        case 2:
          items_row.classList.add('row-cols-lg-2');
          items_row.classList.add('row-cols-xl-3');
          items_row.classList.add('row-cols-xxl-4');
          break;

        default:
          items_row.classList.add('row-cols-lg-4');
          items_row.classList.add('row-cols-xl-5');
          items_row.classList.add('row-cols-xxl-6');
      }

      if (buttn_grid != null && buttn_list != null  && buttn_big_grid != null) {
        buttn_grid.classList.add('active');
        buttn_list.classList.remove('active');
        buttn_big_grid.classList.remove('active');
      }
    }

    if (view == 'big_grid') {
      localStorage.setItem('display', 'big_grid');
      items_row.classList.remove('list');
      items_row.classList.remove('grid');
      items_row.classList.add('big_grid');
      items_row.classList.add('row-cols-1');
      items_row.classList.add('row-cols-sm-2');

      switch (cols) {
        case 1:
          items_row.classList.add('row-cols-xl-3');
          items_row.classList.add('row-cols-xxl-4');
          break;

        case 2:
          items_row.classList.add('row-cols-lg-1');
          items_row.classList.add('row-cols-xl-2');
          items_row.classList.add('row-cols-xxl-3');
          break;

        default:
          items_row.classList.add('row-cols-lg-3');
          items_row.classList.add('row-cols-xl-4');
          items_row.classList.add('row-cols-xxl-5');
      }

      if (buttn_grid != null && buttn_list != null  && buttn_big_grid != null) {
        buttn_big_grid.classList.add('active')
        buttn_grid.classList.remove('active');
        buttn_list.classList.remove('active');
      }
    }
  }

  var showmore = function() {
  \t\tvar \$next = \$('.pagination .active').next('li').find('a');
  \t\t    pl_class = \$('.products-container').find('.product-item').first().attr('class');

          url = \$next.attr('href');
          url = url.replace(/(^\\w+:|^)/, '');

  \t\tif (\$next.length == 0) {
  \t\t\treturn;
  \t\t}

  \t\t\$.ajax({
  \t\t\turl: url,
  \t\t\tbeforeSend: function() {
  \t\t\t\t\$('.btn-showmore').addClass('loading');
  \t\t\t\t\$('.btn-showmore').attr('disabled','diasbled');
  \t\t\t},
  \t\t\tsuccess: function(data) {

  \t\t\t\t\$('.btn-showmore').removeClass('loading');
  \t\t\t\t\$('.btn-showmore').removeAttr('disabled');

  \t\t\t\thistory.replaceState(null, null, url);

  \t\t\t\t\$data = \$(data);

  \t\t\t\tvar \$container = \$('.products-container .product-item').parent();

  \t\t\t\t\$products = \$data.find('.products-container .product-item');

  \t\t\t\t\$products.each(function() {
  \t\t\t\t\t\$(this).removeAttr('class');
  \t\t\t\t\t\$(this).addClass(pl_class);
            if (typeof lazyImgObserve == 'function') lazyImgObserve(\$(this).get()[0]);
  \t\t\t\t});

  \t\t\t\t\$container.append(\$products);

  \t\t\t\t\$('.pagination').html(\$data.find('.pagination'));
  \t\t\t\t\$('.results span').html(\$data.find('.results span'));

  \t\t\t\tif (\$('.pagination .active').next('li').length == 0) { \$('.btn-showmore').addClass('d-none') }

          if (typeof change_color_button_cart == 'function') { change_color_button_cart() }

  \t\t\t\t\$data.filter('script').each(function () {
  \t\t\t\t\tif ((this.text || this.textContent || this.innerHTML).indexOf(\"document.write\") >= 0) {
  \t\t\t\t\t\treturn;
  \t\t\t\t\t}
  \t\t\t\t\t\$.globalEval(this.text || this.textContent || this.innerHTML || '');
  \t\t\t\t});

  \t\t\t},
  \t\t\terror: function(xhr, ajaxOptions, thrownError) {
  \t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
  \t\t\t}
  \t\t});

  \t\treturn false;
  \t}

    ";
        }
        // line 654
        echo "
</script>
";
        // line 656
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1314 => 656,  1310 => 654,  1133 => 479,  1131 => 478,  1073 => 423,  1068 => 422,  1062 => 420,  1054 => 415,  1047 => 411,  1038 => 405,  1028 => 397,  1018 => 392,  1008 => 384,  1001 => 380,  990 => 373,  987 => 372,  980 => 368,  969 => 361,  967 => 360,  963 => 358,  961 => 357,  958 => 356,  946 => 350,  944 => 349,  940 => 347,  924 => 341,  922 => 340,  919 => 339,  907 => 334,  895 => 326,  879 => 321,  863 => 313,  861 => 312,  853 => 310,  845 => 305,  829 => 297,  826 => 296,  822 => 294,  816 => 291,  813 => 290,  807 => 287,  802 => 286,  800 => 285,  797 => 284,  791 => 283,  785 => 279,  779 => 275,  776 => 274,  772 => 273,  764 => 271,  762 => 270,  759 => 269,  756 => 268,  752 => 266,  744 => 264,  741 => 263,  735 => 260,  731 => 259,  728 => 258,  722 => 256,  720 => 255,  717 => 254,  714 => 253,  712 => 252,  705 => 248,  702 => 247,  698 => 245,  687 => 243,  683 => 242,  680 => 241,  678 => 240,  670 => 237,  665 => 234,  661 => 232,  650 => 230,  646 => 229,  643 => 228,  641 => 227,  637 => 225,  630 => 221,  625 => 220,  613 => 218,  611 => 217,  607 => 216,  604 => 215,  597 => 211,  592 => 210,  581 => 208,  578 => 207,  576 => 206,  572 => 205,  565 => 200,  563 => 199,  557 => 198,  552 => 196,  547 => 193,  543 => 192,  540 => 191,  528 => 189,  526 => 188,  523 => 187,  511 => 185,  509 => 184,  506 => 183,  502 => 181,  500 => 180,  490 => 172,  484 => 171,  481 => 170,  473 => 168,  470 => 167,  462 => 165,  459 => 164,  455 => 163,  451 => 162,  442 => 156,  432 => 148,  426 => 147,  418 => 145,  410 => 143,  407 => 142,  403 => 141,  399 => 140,  390 => 134,  372 => 123,  360 => 118,  348 => 113,  342 => 109,  340 => 108,  336 => 107,  328 => 102,  325 => 101,  321 => 99,  317 => 97,  315 => 96,  308 => 92,  305 => 91,  301 => 89,  297 => 87,  295 => 86,  288 => 82,  283 => 79,  277 => 78,  271 => 77,  265 => 76,  257 => 74,  249 => 72,  246 => 71,  241 => 70,  233 => 68,  225 => 66,  222 => 65,  217 => 64,  209 => 62,  201 => 60,  198 => 59,  194 => 58,  190 => 57,  181 => 53,  175 => 50,  170 => 48,  166 => 46,  152 => 45,  146 => 42,  143 => 41,  137 => 38,  132 => 36,  128 => 35,  125 => 34,  123 => 33,  118 => 31,  110 => 26,  106 => 25,  103 => 24,  100 => 23,  83 => 22,  77 => 19,  74 => 18,  68 => 15,  65 => 14,  62 => 13,  55 => 10,  50 => 7,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/product/search.twig", "");
    }
}
