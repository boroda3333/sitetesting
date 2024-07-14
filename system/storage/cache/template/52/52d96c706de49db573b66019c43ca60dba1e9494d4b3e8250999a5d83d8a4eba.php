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

/* ft_frame/template/product/manufacturer_info.twig */
class __TwigTemplate_da24171c950d71efce91cc475a84aced92ae956ff4b10772332676bb4dd7ba9a extends \Twig\Template
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
        // line 6
        if ((($context["column_left"] ?? null) || ($context["menu_open"] ?? null))) {
            // line 7
            echo "\t\t<div class=\"col-12 col-sm col-lg-3 order-lg-1 col-aside\">
\t\t\t";
            // line 8
            if (($context["menu_open"] ?? null)) {
                // line 9
                echo "\t\t\t<div class=\"menu-holder d-none d-lg-block mb-3 mt-n3\"></div>
      <script>var menu_holder_height = function() { document.querySelector('.menu-holder').style.height = document.querySelector('.category-menu-list').offsetHeight + 'px' }; menu_holder_height();</script>
\t\t\t";
            }
            // line 12
            echo "\t\t\t";
            echo ($context["column_left"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 15
        echo "
\t\t";
        // line 16
        if (($context["column_right"] ?? null)) {
            // line 17
            echo "\t\t<div class=\"col-12 col-sm col-lg-3 order-lg-3 col-aside\">
\t\t\t";
            // line 18
            echo ($context["column_right"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 21
        echo "

     <div id=\"content\" class=\"col-12 col-lg order-lg-2\">
\t\t\t";
        // line 24
        echo ($context["content_top"] ?? null);
        echo "
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb p-0 mb-3 bg-transparent\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
          ";
        // line 27
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
            // line 28
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28) == 1)) {
                // line 29
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 30);
                echo "\"  itemprop=\"item\">
              <meta itemprop=\"name\" content=\"";
                // line 31
                echo ($context["g_text_home"] ?? null);
                echo "\" />
            \t<svg class=\"ft-icon-18 d-block\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t\t<path d=\"M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z\"/>
            \t</svg>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 36);
                echo "\" />
          </li>
          ";
            } elseif ((twig_length_filter($this->env,             // line 38
($context["breadcrumbs"] ?? null)) != twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38))) {
                // line 39
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 40);
                echo "\" itemprop=\"item\">
              <span itemprop=\"name\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 41);
                echo "</span>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43);
                echo "\" />
          </li>
          ";
            } else {
                // line 46
                echo "          <li class=\"breadcrumb-item p-0 active\">
            <span>";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 47);
                echo "</span>
          </li>
          ";
            }
            // line 50
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
        // line 51
        echo "        </ol>
      </nav>
\t\t\t<h1 class=\"h2 mb-4\">";
        // line 53
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"mb-4\">
        ";
        // line 55
        if (((($context["description"] ?? null) &&  !($context["description_position"] ?? null)) || ($context["splited_description_top"] ?? null))) {
            // line 56
            echo "\t\t\t\t<div class=\"row\">
          ";
            // line 57
            if (($context["splited_description_top"] ?? null)) {
                // line 58
                echo "          <div class=\"col\">";
                echo ($context["splited_description_top"] ?? null);
                echo "</div>
\t\t\t\t\t";
            } elseif (            // line 59
($context["description"] ?? null)) {
                // line 60
                echo "\t\t\t\t\t<div class=\"col\">";
                echo ($context["description"] ?? null);
                echo "</div>
\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t<hr>
\t\t\t</div>

      ";
        // line 67
        if (($context["products"] ?? null)) {
            // line 68
            echo "      <div class=\"mb-3\">
\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t<div class=\"col-auto col-sm-auto order-sm-3\">
            <div class=\"btn-group ml-sm-2\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"ft-list-view\" class=\"btn btn-light px-2 border ";
            // line 72
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
            // line 77
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
            // line 82
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
            // line 93
            echo ($context["text_limit"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 5H1v16c0 1.1.9 2 2 2h16v-2H3V5zm18-4H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 16H7V3h14v14z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control custom-select\" onchange=\"location = this.value;\" aria-label=\"";
            // line 99
            echo ($context["text_limit"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 101) == ($context["limit"] ?? null))) {
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 102);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 102);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 104);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 104);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-sm-auto order-sm-1 mt-2 mt-sm-0\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm mb-0\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text px-2 bg-light\" title=\"";
            // line 115
            echo ($context["text_sort"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control custom-select\" onchange=\"location = this.value;\" aria-label=\"";
            // line 121
            echo ($context["text_sort"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 123
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 123) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 124);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 124);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 126
                    echo "                  ";
                    if ( !(($context["catalog_mode"] ?? null) && twig_in_filter("p.price", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 126)))) {
                        // line 127
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 127);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 127);
                        echo "</option>
                  ";
                    }
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 130
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
      </div>
\t\t\t<div class=\"products-container\">

        ";
            // line 139
            if ((($context["view_default"] ?? null) == "list")) {
                // line 140
                echo "\t\t\t\t<div class=\"list row form-row row-cols-1\">
        ";
            }
            // line 142
            echo "
        ";
            // line 143
            if ((($context["view_default"] ?? null) == "grid")) {
                // line 144
                echo "\t\t\t\t<div class=\"grid row form-row row-cols-2 row-cols-md-3 ";
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
            // line 146
            echo "
        ";
            // line 147
            if ((($context["view_default"] ?? null) == "big_grid")) {
                // line 148
                echo "\t\t\t\t<div class=\"big_grid row form-row row-cols-1 row-cols-sm-2 ";
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
            // line 150
            echo "
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 152
                echo "        <div class=\"col product-item d-flex mb-2\">
          <div class=\"bg-white w-100 d-flex flex-column border rounded shadow-sm mb-1\">
            <div class=\"product-image position-relative text-center px-2 px-sm-3 pt-2 pb-2\">
              <a href=\"";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 155);
                echo "\">
                <div class=\"d-inline-block position-relative\">
                  <svg class=\"d-block img-fluid\" width=\"";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_width", [], "any", false, false, false, 157);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_height", [], "any", false, false, false, 157);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                  ";
                // line 158
                if (($context["catalog_page_lazy"] ?? null)) {
                    // line 159
                    echo "                  <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 ft-lazy-spinner\">
                    <div class=\"spinner-border text-gray-300\"></div>
                  </div>
                  <img
                    src=\"image/catalog/frametheme/src_holder.png\"
                    data-src=\"";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 164);
                    echo "\"
                    ";
                    // line 165
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 165)) {
                        // line 166
                        echo "                    srcset=\"image/catalog/frametheme/src_holder.png\"
                    data-srcset=\"";
                        // line 167
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 167);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 167);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 167);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 167);
                        echo " 4x\"
                    ";
                    }
                    // line 169
                    echo "                    alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 169);
                    echo "\"
                    title=\"";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 170);
                    echo "\"
                    class=\"position-absolute t-0 l-0 img-fluid d-block w-auto ft-lazy-img\"
                  >
                  ";
                } else {
                    // line 174
                    echo "                  <img
                    src=\"";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 175);
                    echo "\"
                    ";
                    // line 176
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 176)) {
                        // line 177
                        echo "                    srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 177);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 177);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 177);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 177);
                        echo " 4x\"
                    ";
                    }
                    // line 179
                    echo "                    alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 179);
                    echo "\"
                    title=\"";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 180);
                    echo "\"
                    class=\"position-absolute t-0 l-0 img-fluid d-block w-auto ft-lazy-img\"
                  >
                  ";
                }
                // line 184
                echo "                </div>
              </a>
              ";
                // line 186
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 186)) {
                    // line 187
                    echo "              <ul class=\"list-unstyled position-absolute t-0 l-0 ml-3 mt-2 text-left\">
                ";
                    // line 188
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 188));
                    foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                        // line 189
                        echo "                <li><span class=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "class", [], "any", false, false, false, 189);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "text", [], "any", false, false, false, 189);
                        echo "</span></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 191
                    echo "              </ul>
              ";
                }
                // line 193
                echo "            </div>
            <div class=\"product-description px-2 px-sm-3 pt-2 pb-1\">
              <div class=\"product-name\">
                <a href=\"";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 196);
                echo "\" class=\"text-dark h6 font-weight-normal line-clamp-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 196);
                echo "</a>
              </div>
              ";
                // line 198
                if (twig_get_attribute($this->env, $this->source, $context["product"], "additional_fields", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "              <ul class=\"product-fields list-unstyled mb-2\">
                ";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "additional_fields", [], "any", false, false, false, 200));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 201
                        echo "                <li><small class=\"d-block text-muted\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 201);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "text", [], "any", false, false, false, 201);
                        echo "</small></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "              </ul>
              ";
                }
                // line 205
                echo "              <div class=\"product-text d-none font-weight-light text-secondary mb-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 205);
                echo "</div>
            </div>
            <div class=\"product-controls t-auto px-2 px-sm-3 pb-2 pb-sm-3\">

              ";
                // line 209
                if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                    // line 210
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 210)) {
                        // line 211
                        echo "              <div class=\"price\">
                ";
                        // line 212
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 212)) {
                            // line 213
                            echo "                <div class=\"h6 mb-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 213);
                            echo "</div>
                ";
                        } else {
                            // line 215
                            echo "                <div class=\"h6 mb-1\">
                  <s class=\"d-inline-block text-danger font-weight-light\">";
                            // line 216
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 216);
                            echo "</s>
                  <span class=\"d-inline-block\">";
                            // line 217
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 217);
                            echo "</span>
                </div>
                ";
                        }
                        // line 220
                        echo "                ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 220)) {
                            // line 221
                            echo "                <small class=\"font-weight-light text-muted d-block\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 221);
                            echo "</small>
                ";
                        }
                        // line 223
                        echo "              </div>
              ";
                    }
                    // line 225
                    echo "              ";
                }
                // line 226
                echo "
              ";
                // line 227
                if (($context["review_status"] ?? null)) {
                    // line 228
                    echo "              <div class=\"d-flex align-items-center ";
                    if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                        echo " mt-2 ";
                    }
                    echo "\">
                <div class=\"d-flex mr-2\">
                  ";
                    // line 230
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 231
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 231) < $context["i"])) {
                            // line 232
                            echo "                  <svg class=\"d-block ft-icon-18 text-gray-400 m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z\"/>
                  </svg>
                  ";
                        } else {
                            // line 236
                            echo "                  <svg class=\"d-block ft-icon-18 text-warning m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                  </svg>
                  ";
                        }
                        // line 240
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 241
                    echo "                </div>
                ";
                    // line 242
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "reviews_href", [], "any", false, false, false, 242)) {
                        // line 243
                        echo "                <a class=\"d-block text-dark text-nowrap text-truncate w-auto\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews_href", [], "any", false, false, false, 243);
                        echo "\">
                  <small>";
                        // line 244
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 244);
                        echo "</small>
                </a>
                ";
                    } else {
                        // line 247
                        echo "                <span class=\"d-block text-secondary text-nowrap text-truncate text-gray-500 w-auto\">
                  <small>";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 248);
                        echo "</small>
                </span>
                ";
                    }
                    // line 251
                    echo "              </div>
              ";
                }
                // line 253
                echo "              ";
                if ((($context["catalog_stok_status"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                    // line 254
                    echo "              <small class=\"d-block ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 254) <= 0)) {
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
                    // line 262
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 262);
                    echo "
                  </span>
                </span>
              </small>
              ";
                }
                // line 267
                echo "              <div class=\"btn-group ";
                if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                    echo "d-flex d-md-inline-flex";
                }
                echo " dropup mt-2\">

                ";
                // line 269
                if ( !($context["catalog_mode"] ?? null)) {
                    // line 270
                    echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 270);
                    echo "');\" ";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 270) <= 0) && ($context["disable_btn_status"] ?? null))) {
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
                    // line 278
                    if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                        echo "d-none d-md-block";
                    }
                    echo "\">";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 278) <= 0) && ($context["disable_btn_status"] ?? null))) {
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
                    // line 283
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 283);
                    echo "\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\">
                  <span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
                    <span class=\"col-auto\">
                      <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z\"/>
                      </svg>
                    </span>
                    <span class=\"col-auto\">
                      <span class=\"text-truncate mx-2 ";
                    // line 291
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
                // line 296
                echo "
                ";
                // line 297
                if ((($context["fastorder_status"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                    // line 298
                    echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\"  title=\"";
                    echo ($context["g_text_fastorder"] ?? null);
                    echo "\" onclick=\"ft_fastorder('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 298);
                    echo "')\" ";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 298) <= 0) && ($context["disable_btn_status"] ?? null))) {
                        echo "disabled";
                    }
                    echo ">
                  <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M 13 1 L 6 14 L 12 14 L 12 23 L 19 10 L 13 10 L 13 1 z\"></path>
                  </svg>
                </button>
                ";
                }
                // line 304
                echo "

                ";
                // line 306
                if (($context["qview_status"] ?? null)) {
                    // line 307
                    echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\" title=\"";
                    echo ($context["g_text_qview"] ?? null);
                    echo "\" onclick=\"ft_qview('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 307);
                    echo "')\">
                  <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M12,6.5c3.79,0,7.17,2.13,8.82,5.5c-1.65,3.37-5.02,5.5-8.82,5.5S4.83,15.37,3.18,12C4.83,8.63,8.21,6.5,12,6.5 M12,4.5 C7,4.5,2.73,7.61,1,12c1.73,4.39,6,7.5,11,7.5s9.27-3.11,11-7.5C21.27,7.61,17,4.5,12,4.5L12,4.5z\"/><path d=\"M12,9.5c1.38,0,2.5,1.12,2.5,2.5s-1.12,2.5-2.5,2.5S9.5,13.38,9.5,12S10.62,9.5,12,9.5 M12,7.5c-2.48,0-4.5,2.02-4.5,4.5 s2.02,4.5,4.5,4.5s4.5-2.02,4.5-4.5S14.48,7.5,12,7.5L12,7.5z\"/>
                  </svg>
                </button>
                ";
                }
                // line 313
                echo "
                ";
                // line 314
                if ((($context["wishlist_status"] ?? null) || ($context["compare_status"] ?? null))) {
                    // line 315
                    echo "                <div class=\"btn-group dropdown dropup position-static\">
                  <div class=\"dropdown-menu dropdown-menu-right w-100\" >
                    ";
                    // line 317
                    if (($context["wishlist_status"] ?? null)) {
                        // line 318
                        echo "                    <a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 318);
                        echo "');return false\">
                      <span class=\"row no-gutters align-items-center flex-nowrap\">
                        <span class=\"col-auto\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z\"/>
                          </svg>
                        </span>
                        <span class=\"col text-truncate\">";
                        // line 325
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span>
                      </span>
                    </a>
                    ";
                    }
                    // line 329
                    echo "                    ";
                    if (($context["compare_status"] ?? null)) {
                        // line 330
                        echo "                    <a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 330);
                        echo "');return false\">
                      <span class=\"row no-gutters align-items-center flex-nowrap\">
                        <span class=\"col-auto\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M 12 4 A 2 2 0 0 0 10.269531 5 L 5 5 L 2 5 L 2 7 L 4 7 L 0 15 C 0 17.761 2.239 20 5 20 C 7.761 20 10 17.761 10 15 L 6 7 L 10.271484 7 A 2 2 0 0 0 12 8 A 2 2 0 0 0 13.730469 7 L 18 7 L 14 15 C 14 17.761 16.239 20 19 20 C 21.761 20 24 17.761 24 15 L 20 7 L 22 7 L 22 5 L 13.728516 5 A 2 2 0 0 0 12 4 z M 5 9.0214844 L 7.9882812 15 L 2.0117188 15 L 5 9.0214844 z M 19 9.0214844 L 21.988281 15 L 16.011719 15 L 19 9.0214844 z\"/>
                          </svg>
                        </span>
                        <span class=\"col text-truncate\">";
                        // line 337
                        echo ($context["button_compare"] ?? null);
                        echo "</span>
                      </span>
                    </a>
                    ";
                    }
                    // line 341
                    echo "                  </div>
                  <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1 px-md-0\" data-toggle=\"dropdown\" data-flip=\"false\" aria-label=\"more\">
                    <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                      <path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
                    </svg>
                  </button>
                </div>
                ";
                }
                // line 349
                echo "              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"btn-showmore btn btn-lg btn-block border btn-light mb-3 d-none text-muted\" onclick=\"showmore()\">
        <span class=\"row no-gutters justify-content-center align-items-center\">
          <span class=\"col-auto loading-icon\">
    \t\t\t\t<span class=\"spinner-border ft-icon-24 my-0 mr-3 text-gray-600\"></span>
          </span>
          <span class=\"col-auto\">
            ";
            // line 362
            echo ($context["g_text_showmore"] ?? null);
            echo "
          </span>
        </span>
\t\t\t</button>
\t\t\t<div class=\"row pr-container align-items-center mt-2\">
\t\t\t\t<div class=\"col-12 col-md-auto ml-md-auto order-md-2 text-center text-md-left results text-gray-600 font-weight-light mb-2\">
          ";
            // line 368
            echo ($context["results"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-auto order-md-1 text-center text-md-left mb-2\">
\t\t\t\t\t<nav>
\t\t\t\t\t\t";
            // line 372
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
      ";
        } else {
            // line 377
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <a href=\"";
            // line 379
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
      </div>
      ";
        }
        // line 382
        echo "
      ";
        // line 383
        if (((($context["description"] ?? null) && ($context["description_position"] ?? null)) || ($context["splited_description_bottom"] ?? null))) {
            // line 384
            echo "\t\t\t<hr>
\t\t\t<div class=\"row\">
        ";
            // line 386
            if (($context["splited_description_bottom"] ?? null)) {
                // line 387
                echo "        <div class=\"col\">";
                echo ($context["splited_description_bottom"] ?? null);
                echo "</div>
\t\t\t\t";
            } elseif (            // line 388
($context["description"] ?? null)) {
                // line 389
                echo "\t\t\t\t<div class=\"col\">";
                echo ($context["description"] ?? null);
                echo "</div>
\t\t\t\t";
            }
            // line 391
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 393
        echo "
      </div>
\t</div>
\t";
        // line 396
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
<script>

  ";
        // line 400
        if (($context["products"] ?? null)) {
            // line 401
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
        // line 576
        echo "
</script>
";
        // line 578
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1166 => 578,  1162 => 576,  985 => 401,  983 => 400,  976 => 396,  971 => 393,  967 => 391,  961 => 389,  959 => 388,  954 => 387,  952 => 386,  948 => 384,  946 => 383,  943 => 382,  935 => 379,  929 => 377,  921 => 372,  914 => 368,  905 => 362,  895 => 354,  885 => 349,  875 => 341,  868 => 337,  857 => 330,  854 => 329,  847 => 325,  836 => 318,  834 => 317,  830 => 315,  828 => 314,  825 => 313,  813 => 307,  811 => 306,  807 => 304,  791 => 298,  789 => 297,  786 => 296,  774 => 291,  762 => 283,  746 => 278,  730 => 270,  728 => 269,  720 => 267,  712 => 262,  696 => 254,  693 => 253,  689 => 251,  683 => 248,  680 => 247,  674 => 244,  669 => 243,  667 => 242,  664 => 241,  658 => 240,  652 => 236,  646 => 232,  643 => 231,  639 => 230,  631 => 228,  629 => 227,  626 => 226,  623 => 225,  619 => 223,  611 => 221,  608 => 220,  602 => 217,  598 => 216,  595 => 215,  589 => 213,  587 => 212,  584 => 211,  581 => 210,  579 => 209,  571 => 205,  567 => 203,  556 => 201,  552 => 200,  549 => 199,  547 => 198,  540 => 196,  535 => 193,  531 => 191,  520 => 189,  516 => 188,  513 => 187,  511 => 186,  507 => 184,  500 => 180,  495 => 179,  483 => 177,  481 => 176,  477 => 175,  474 => 174,  467 => 170,  462 => 169,  451 => 167,  448 => 166,  446 => 165,  442 => 164,  435 => 159,  433 => 158,  427 => 157,  422 => 155,  417 => 152,  413 => 151,  410 => 150,  398 => 148,  396 => 147,  393 => 146,  381 => 144,  379 => 143,  376 => 142,  372 => 140,  370 => 139,  360 => 131,  354 => 130,  351 => 129,  343 => 127,  340 => 126,  332 => 124,  329 => 123,  325 => 122,  321 => 121,  312 => 115,  302 => 107,  296 => 106,  288 => 104,  280 => 102,  277 => 101,  273 => 100,  269 => 99,  260 => 93,  242 => 82,  230 => 77,  218 => 72,  212 => 68,  210 => 67,  205 => 64,  201 => 62,  195 => 60,  193 => 59,  188 => 58,  186 => 57,  183 => 56,  181 => 55,  176 => 53,  172 => 51,  158 => 50,  152 => 47,  149 => 46,  143 => 43,  138 => 41,  134 => 40,  131 => 39,  129 => 38,  124 => 36,  116 => 31,  112 => 30,  109 => 29,  106 => 28,  89 => 27,  83 => 24,  78 => 21,  72 => 18,  69 => 17,  67 => 16,  64 => 15,  57 => 12,  52 => 9,  50 => 8,  47 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/product/manufacturer_info.twig", "");
    }
}
