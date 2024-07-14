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

/* ft_frame/template/product/category.twig */
class __TwigTemplate_584872cdb882e0422055c161eb6750349ce3333333420078b6682fe2573306bb extends \Twig\Template
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
<div id=\"product-category\" class=\"container\">
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
        echo "    <div id=\"content\" class=\"col-12 col-lg order-lg-2\">
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
\t\t\t\t";
        // line 50
        if (((($context["description"] ?? null) &&  !($context["description_position"] ?? null)) || ($context["splited_description_top"] ?? null))) {
            // line 51
            echo "\t\t\t\t<div class=\"row\">
          ";
            // line 52
            if (($context["splited_description_top"] ?? null)) {
                // line 53
                echo "          <div class=\"col\">";
                echo ($context["splited_description_top"] ?? null);
                echo "</div>
\t\t\t\t\t";
            } elseif (            // line 54
($context["description"] ?? null)) {
                // line 55
                echo "\t\t\t\t\t<div class=\"col\">";
                echo ($context["description"] ?? null);
                echo "</div>
\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t<hr>
\t\t\t\t";
        // line 60
        if (($context["categories"] ?? null)) {
            // line 61
            echo "\t\t\t\t<h5 class=\"mb-3\">";
            echo ($context["text_refine"] ?? null);
            echo "</h5>
\t\t\t\t<div class=\"row form-row row-cols-2 row-cols-sm-3 row-cols-md-4 ";
            // line 62
            if ((($context["column_right"] ?? null) && (($context["column_left"] ?? null) || ($context["menu_open"] ?? null)))) {
                echo "row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5";
            } elseif ((($context["column_right"] ?? null) || (($context["column_left"] ?? null) || ($context["menu_open"] ?? null)))) {
                echo "row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6";
            } else {
                echo "row-cols-lg-5 row-cols-xl-6 row-cols-xxl-7";
            }
            echo "\">
\t\t\t\t\t";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 64
                echo "\t\t\t\t\t<div class=\"col mb-2 d-flex\">
            <div class=\"bg-white border w-100 rounded overflow-hidden text-center mb-1\">
              <a href=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 66);
                echo "\" class=\"d-block text-dark\">
                ";
                // line 67
                if (($context["sub_cat_img_status"] ?? null)) {
                    // line 68
                    echo "                <div class=\"d-flex vertical-align-middle justify-content-center px-2 py-2\">
                  ";
                    // line 69
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "image1x", [], "any", false, false, false, 69)) {
                        // line 70
                        echo "
                    <div class=\"position-relative\">
                      <svg class=\"d-block mx-auto img-fluid\" width=\"";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "img_width", [], "any", false, false, false, 72);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "img_height", [], "any", false, false, false, 72);
                        echo "\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                      ";
                        // line 73
                        if (($context["catalog_page_lazy"] ?? null)) {
                            // line 74
                            echo "                      <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 ft-lazy-spinner\">
        \t\t\t          <div class=\"spinner-border text-gray-300\"></div>
        \t\t\t        </div>
                      <img
                        src=\"image/catalog/frametheme/src_holder.png\"
                        data-src=\"";
                            // line 79
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image1x", [], "any", false, false, false, 79);
                            echo "\"
                        ";
                            // line 80
                            if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 80)) {
                                // line 81
                                echo "                        srcset=\"image/catalog/frametheme/src_holder.png\"
                        data-srcset=\"";
                                // line 82
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image1x", [], "any", false, false, false, 82);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 82);
                                echo " 2x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image3x", [], "any", false, false, false, 82);
                                echo " 3x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image4x", [], "any", false, false, false, 82);
                                echo " 4x\"
                        ";
                            }
                            // line 84
                            echo "                        alt=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 84);
                            echo "\"
                        class=\"d-block position-absolute t-0 l-0 w-100 img-fluid ft-lazy-img\"
                      >
                      ";
                        } else {
                            // line 88
                            echo "                      <img
                        src=\"";
                            // line 89
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image1x", [], "any", false, false, false, 89);
                            echo "\"
                        ";
                            // line 90
                            if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 90)) {
                                // line 91
                                echo "                        srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image1x", [], "any", false, false, false, 91);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 91);
                                echo " 2x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image3x", [], "any", false, false, false, 91);
                                echo " 3x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["category"], "image4x", [], "any", false, false, false, 91);
                                echo " 4x\"
                        ";
                            }
                            // line 93
                            echo "                        alt=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 93);
                            echo "\"
                        class=\"d-block position-absolute t-0 l-0 w-100 img-fluid\"
                      >
                      ";
                        }
                        // line 97
                        echo "                    </div>

                  ";
                    } else {
                        // line 100
                        echo "                  <svg  class=\"d-block mx-auto img-fluid ft-icon text-gray-200\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "img_width", [], "any", false, false, false, 100);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "img_height", [], "any", false, false, false, 100);
                        echo "\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M 2.9902344 1.9902344 A 1.0001 1.0001 0 0 0 2.2929688 3.7070312 L 46.292969 47.707031 A 1.0001 1.0001 0 1 0 47.707031 46.292969 L 44.414062 43 L 48 43 L 48 7 L 8.4140625 7 L 3.7070312 2.2929688 A 1.0001 1.0001 0 0 0 2.9902344 1.9902344 z M 2 7 L 2 43 L 38.707031 43 L 36.853516 41.146484 L 27.060547 31.353516 L 24.707031 33.707031 C 24.316031 34.098031 23.683969 34.098031 23.292969 33.707031 C 22.901969 33.316031 22.901969 32.683969 23.292969 32.292969 L 25.646484 29.939453 L 15.589844 19.882812 L 4 30.699219 L 4 9 L 4.7070312 9 L 2.7070312 7 L 2 7 z M 10.414062 9 L 46 9 L 46 36.585938 L 34.707031 25.292969 C 34.316031 24.901969 33.683969 24.901969 33.292969 25.292969 L 30 28.585938 L 10.414062 9 z M 35 15 A 3 3 0 0 0 35 21 A 3 3 0 0 0 35 15 z\" transform=\"translate(25,25)\"/>
                  </svg>
                  ";
                    }
                    // line 104
                    echo "                </div>
                ";
                }
                // line 106
                echo "  \t\t\t\t\t\t\t<div class=\"bg-light ";
                if (($context["sub_cat_img_status"] ?? null)) {
                    echo " border-top ";
                }
                echo " py-2 px-2\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 106);
                echo "\">
  \t\t\t\t\t\t\t  <span class=\"line-clamp-1\">";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 107);
                echo "</span>
  \t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t</a>
            </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t";
        }
        // line 116
        echo "\t\t\t</div>
      ";
        // line 117
        if (($context["products"] ?? null)) {
            // line 118
            echo "      <div class=\"mb-3\">
\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t<div class=\"col-auto col-sm-auto order-sm-3\">
\t\t\t\t\t\t<div class=\"btn-group ml-sm-2\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"ft-list-view\" class=\"btn btn-light px-2 border ";
            // line 122
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
            // line 127
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
            // line 132
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
            // line 143
            echo ($context["text_limit"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 5H1v16c0 1.1.9 2 2 2h16v-2H3V5zm18-4H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 16H7V3h14v14z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control custom-select\" onchange=\"location = this.value;\" aria-label=\"";
            // line 149
            echo ($context["text_limit"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 151) == ($context["limit"] ?? null))) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 152);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 152);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 154);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 154);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-sm-auto order-sm-1 mt-2 mt-sm-0\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm mb-0\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text px-2 bg-light\" title=\"";
            // line 165
            echo ($context["text_sort"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control custom-select\" onchange=\"location = this.value;\" aria-label=\"";
            // line 171
            echo ($context["text_sort"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 173
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 173) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 174);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 174);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 176
                    echo "                  ";
                    if ( !(($context["catalog_mode"] ?? null) && twig_in_filter("p.price", twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 176)))) {
                        // line 177
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 177);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 177);
                        echo "</option>
                  ";
                    }
                    // line 179
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 180
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
      </div>
\t\t\t<div class=\"products-container\">

        ";
            // line 189
            if ((($context["view_default"] ?? null) == "list")) {
                // line 190
                echo "\t\t\t\t<div class=\"list row form-row row-cols-1\">
        ";
            }
            // line 192
            echo "
        ";
            // line 193
            if ((($context["view_default"] ?? null) == "grid")) {
                // line 194
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
            // line 196
            echo "
        ";
            // line 197
            if ((($context["view_default"] ?? null) == "big_grid")) {
                // line 198
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
            // line 200
            echo "
        ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 202
                echo "        <div class=\"col product-item d-flex mb-2\">
          <div class=\"bg-white w-100 d-flex flex-column border rounded shadow-sm mb-1\">
            <div class=\"product-image position-relative text-center px-2 px-sm-3 pt-2 pb-2\">
              <a href=\"";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 205);
                echo "\">
                <div class=\"d-inline-block position-relative\">
                  <svg class=\"d-block img-fluid\" width=\"";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_width", [], "any", false, false, false, 207);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_height", [], "any", false, false, false, 207);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                  ";
                // line 208
                if (($context["catalog_page_lazy"] ?? null)) {
                    // line 209
                    echo "                  <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 ft-lazy-spinner\">
                    <div class=\"spinner-border text-gray-300\"></div>
                  </div>
                  <img
                    src=\"image/catalog/frametheme/src_holder.png\"
                    data-src=\"";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 214);
                    echo "\"
                    ";
                    // line 215
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 215)) {
                        // line 216
                        echo "                    srcset=\"image/catalog/frametheme/src_holder.png\"
                    data-srcset=\"";
                        // line 217
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 217);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 217);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 217);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 217);
                        echo " 4x\"
                    ";
                    }
                    // line 219
                    echo "                    alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 219);
                    echo "\"
                    title=\"";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 220);
                    echo "\"
                    class=\"position-absolute t-0 l-0 img-fluid d-block w-auto ft-lazy-img\"
                  >
                  ";
                } else {
                    // line 224
                    echo "                  <img
                    src=\"";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 225);
                    echo "\"
                    ";
                    // line 226
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 226)) {
                        // line 227
                        echo "                    srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 227);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 227);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 227);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 227);
                        echo " 4x\"
                    ";
                    }
                    // line 229
                    echo "                    alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 229);
                    echo "\"
                    title=\"";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 230);
                    echo "\"
                    class=\"position-absolute t-0 l-0 img-fluid d-block w-auto ft-lazy-img\"
                  >
                  ";
                }
                // line 234
                echo "                </div>
              </a>
              ";
                // line 236
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 236)) {
                    // line 237
                    echo "              <ul class=\"list-unstyled position-absolute t-0 l-0 ml-3 mt-2 text-left\">
                ";
                    // line 238
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 238));
                    foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                        // line 239
                        echo "                <li><span class=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "class", [], "any", false, false, false, 239);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "text", [], "any", false, false, false, 239);
                        echo "</span></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 241
                    echo "              </ul>
              ";
                }
                // line 243
                echo "            </div>

            <div class=\"product-description px-2 px-sm-3 pt-2 pb-1\">
              <div class=\"product-name\">
                <a href=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 247);
                echo "\" class=\"text-dark h6 font-weight-normal line-clamp-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 247);
                echo "</a>
              </div>

              ";
                // line 250
                if (twig_get_attribute($this->env, $this->source, $context["product"], "additional_fields", [], "any", false, false, false, 250)) {
                    // line 251
                    echo "              <ul class=\"product-fields list-unstyled mb-2\">
                ";
                    // line 252
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "additional_fields", [], "any", false, false, false, 252));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 253
                        echo "                <li><small class=\"d-block text-muted\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 253);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "text", [], "any", false, false, false, 253);
                        echo "</small></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 255
                    echo "              </ul>
              ";
                }
                // line 257
                echo "
              <div class=\"product-text d-none font-weight-light text-secondary mb-3\">";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 258);
                echo "</div>
            </div>
            <div class=\"product-controls mt-auto px-2 px-sm-3 pb-2 pb-sm-3\">

              ";
                // line 262
                if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                    // line 263
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 263)) {
                        // line 264
                        echo "              <div class=\"price\">
                ";
                        // line 265
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 265)) {
                            // line 266
                            echo "                <div class=\"h6 mb-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 266);
                            echo "</div>
                ";
                        } else {
                            // line 268
                            echo "                <div class=\"h6 mb-1\">
                  <s class=\"d-inline-block text-danger font-weight-light\">";
                            // line 269
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 269);
                            echo "</s>
                  <span class=\"d-inline-block\">";
                            // line 270
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 270);
                            echo "</span>
                </div>
                ";
                        }
                        // line 273
                        echo "                ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 273)) {
                            // line 274
                            echo "                <small class=\"font-weight-light text-muted d-block\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 274);
                            echo "</small>
                ";
                        }
                        // line 276
                        echo "              </div>
              ";
                    }
                    // line 278
                    echo "              ";
                }
                // line 279
                echo "
              ";
                // line 280
                if (($context["review_status"] ?? null)) {
                    // line 281
                    echo "              <div class=\"d-flex align-items-center ";
                    if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                        echo " mt-2 ";
                    }
                    echo "\">
                <div class=\"d-flex mr-2\">
                  ";
                    // line 283
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 284
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 284) < $context["i"])) {
                            // line 285
                            echo "                  <svg class=\"d-block ft-icon-18 text-gray-400 m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z\"/>
                  </svg>
                  ";
                        } else {
                            // line 289
                            echo "                  <svg class=\"d-block ft-icon-18 text-warning m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                  </svg>
                  ";
                        }
                        // line 293
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 294
                    echo "                </div>
                ";
                    // line 295
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "reviews_href", [], "any", false, false, false, 295)) {
                        // line 296
                        echo "                <a class=\"d-block text-dark text-nowrap text-truncate w-auto\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews_href", [], "any", false, false, false, 296);
                        echo "\">
                  <small>";
                        // line 297
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 297);
                        echo "</small>
                </a>
                ";
                    } else {
                        // line 300
                        echo "                <span class=\"d-block text-secondary text-nowrap text-truncate text-gray-500 w-auto\">
                  <small>";
                        // line 301
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 301);
                        echo "</small>
                </span>
                ";
                    }
                    // line 304
                    echo "              </div>
              ";
                }
                // line 306
                echo "              ";
                if ((($context["catalog_stok_status"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                    // line 307
                    echo "              <small class=\"d-block ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 307) <= 0)) {
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
                    // line 315
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 315);
                    echo "
                  </span>
                </span>
              </small>
              ";
                }
                // line 320
                echo "              <div class=\"btn-group ";
                if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                    echo "d-flex d-md-inline-flex";
                }
                echo " dropup mt-2\">

                ";
                // line 322
                if ( !($context["catalog_mode"] ?? null)) {
                    // line 323
                    echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 323);
                    echo "');\" ";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 323) <= 0) && ($context["disable_btn_status"] ?? null))) {
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
                    // line 331
                    if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                        echo "d-none d-md-block";
                    }
                    echo "\">";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 331) <= 0) && ($context["disable_btn_status"] ?? null))) {
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
                    // line 336
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 336);
                    echo "\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\">
                  <span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
                    <span class=\"col-auto\">
                      <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z\"/>
                      </svg>
                    </span>
                    <span class=\"col-auto\">
                      <span class=\"text-truncate mx-2 ";
                    // line 344
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
                // line 349
                echo "
                ";
                // line 350
                if ((($context["fastorder_status"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                    // line 351
                    echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\"  title=\"";
                    echo ($context["g_text_fastorder"] ?? null);
                    echo "\" onclick=\"ft_fastorder('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 351);
                    echo "')\" ";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 351) <= 0) && ($context["disable_btn_status"] ?? null))) {
                        echo "disabled";
                    }
                    echo ">
                  <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M 13 1 L 6 14 L 12 14 L 12 23 L 19 10 L 13 10 L 13 1 z\"></path>
                  </svg>
                </button>
                ";
                }
                // line 357
                echo "

                ";
                // line 359
                if (($context["qview_status"] ?? null)) {
                    // line 360
                    echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\" title=\"";
                    echo ($context["g_text_qview"] ?? null);
                    echo "\" onclick=\"ft_qview('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 360);
                    echo "')\">
                  <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M12,6.5c3.79,0,7.17,2.13,8.82,5.5c-1.65,3.37-5.02,5.5-8.82,5.5S4.83,15.37,3.18,12C4.83,8.63,8.21,6.5,12,6.5 M12,4.5 C7,4.5,2.73,7.61,1,12c1.73,4.39,6,7.5,11,7.5s9.27-3.11,11-7.5C21.27,7.61,17,4.5,12,4.5L12,4.5z\"/><path d=\"M12,9.5c1.38,0,2.5,1.12,2.5,2.5s-1.12,2.5-2.5,2.5S9.5,13.38,9.5,12S10.62,9.5,12,9.5 M12,7.5c-2.48,0-4.5,2.02-4.5,4.5 s2.02,4.5,4.5,4.5s4.5-2.02,4.5-4.5S14.48,7.5,12,7.5L12,7.5z\"/>
                  </svg>
                </button>
                ";
                }
                // line 366
                echo "
                ";
                // line 367
                if ((($context["wishlist_status"] ?? null) || ($context["compare_status"] ?? null))) {
                    // line 368
                    echo "                <div class=\"btn-group dropdown dropup position-static\">
                  <div class=\"dropdown-menu dropdown-menu-right w-100\" >
                    ";
                    // line 370
                    if (($context["wishlist_status"] ?? null)) {
                        // line 371
                        echo "                    <a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 371);
                        echo "');return false\">
                      <span class=\"row no-gutters align-items-center flex-nowrap\">
                        <span class=\"col-auto\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z\"/>
                          </svg>
                        </span>
                        <span class=\"col text-truncate\">";
                        // line 378
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span>
                      </span>
                    </a>
                    ";
                    }
                    // line 382
                    echo "                    ";
                    if (($context["compare_status"] ?? null)) {
                        // line 383
                        echo "                    <a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 383);
                        echo "');return false\">
                      <span class=\"row no-gutters align-items-center flex-nowrap\">
                        <span class=\"col-auto\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M 12 4 A 2 2 0 0 0 10.269531 5 L 5 5 L 2 5 L 2 7 L 4 7 L 0 15 C 0 17.761 2.239 20 5 20 C 7.761 20 10 17.761 10 15 L 6 7 L 10.271484 7 A 2 2 0 0 0 12 8 A 2 2 0 0 0 13.730469 7 L 18 7 L 14 15 C 14 17.761 16.239 20 19 20 C 21.761 20 24 17.761 24 15 L 20 7 L 22 7 L 22 5 L 13.728516 5 A 2 2 0 0 0 12 4 z M 5 9.0214844 L 7.9882812 15 L 2.0117188 15 L 5 9.0214844 z M 19 9.0214844 L 21.988281 15 L 16.011719 15 L 19 9.0214844 z\"/>
                          </svg>
                        </span>
                        <span class=\"col text-truncate\">";
                        // line 390
                        echo ($context["button_compare"] ?? null);
                        echo "</span>
                      </span>
                    </a>
                    ";
                    }
                    // line 394
                    echo "                  </div>
                  <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1 px-md-0\" data-toggle=\"dropdown\" data-flip=\"false\" aria-label=\"more\">
                    <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                      <path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
                    </svg>
                  </button>
                </div>
                ";
                }
                // line 402
                echo "              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 407
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"btn-showmore btn btn-lg btn-block border btn-light mb-3 d-none text-muted\" onclick=\"showmore()\">
        <span class=\"row no-gutters justify-content-center align-items-center\">
          <span class=\"col-auto loading-icon\">
    \t\t\t\t<span class=\"spinner-border ft-icon-24 my-0 mr-3 text-gray-600\"></span>
          </span>
          <span class=\"col-auto\">
            ";
            // line 415
            echo ($context["g_text_showmore"] ?? null);
            echo "
          </span>
        </span>
\t\t\t</button>
\t\t\t<div class=\"row pr-container align-items-center mt-2\">
\t\t\t\t<div class=\"col-12 col-md-auto ml-md-auto order-md-2 text-center text-md-left results text-gray-600 font-weight-light mb-2\">
          ";
            // line 421
            echo ($context["results"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-auto order-md-1 text-center text-md-left mb-2\">
\t\t\t\t\t<nav>
\t\t\t\t\t\t";
            // line 425
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 430
        echo "\t\t\t";
        if (((($context["description"] ?? null) && ($context["description_position"] ?? null)) || ($context["splited_description_bottom"] ?? null))) {
            // line 431
            echo "\t\t\t<hr>
\t\t\t<div class=\"row\">
        ";
            // line 433
            if (($context["splited_description_bottom"] ?? null)) {
                // line 434
                echo "        <div class=\"col\">";
                echo ($context["splited_description_bottom"] ?? null);
                echo "</div>
\t\t\t\t";
            } elseif (            // line 435
($context["description"] ?? null)) {
                // line 436
                echo "\t\t\t\t<div class=\"col\">";
                echo ($context["description"] ?? null);
                echo "</div>
\t\t\t\t";
            }
            // line 438
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 440
        echo "\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 441
            echo "\t\t\t<div>
\t\t\t\t<p>";
            // line 442
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 444
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 448
        echo "\t\t</div>
\t</div>
\t";
        // line 450
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
<script>

  ";
        // line 454
        if (($context["products"] ?? null)) {
            // line 455
            echo "  document.addEventListener(\"DOMContentLoaded\", function(e) {
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
        // line 628
        echo "</script>
";
        // line 629
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1322 => 629,  1319 => 628,  1144 => 455,  1142 => 454,  1135 => 450,  1131 => 448,  1122 => 444,  1117 => 442,  1114 => 441,  1111 => 440,  1107 => 438,  1101 => 436,  1099 => 435,  1094 => 434,  1092 => 433,  1088 => 431,  1085 => 430,  1077 => 425,  1070 => 421,  1061 => 415,  1051 => 407,  1041 => 402,  1031 => 394,  1024 => 390,  1013 => 383,  1010 => 382,  1003 => 378,  992 => 371,  990 => 370,  986 => 368,  984 => 367,  981 => 366,  969 => 360,  967 => 359,  963 => 357,  947 => 351,  945 => 350,  942 => 349,  930 => 344,  918 => 336,  902 => 331,  886 => 323,  884 => 322,  876 => 320,  868 => 315,  852 => 307,  849 => 306,  845 => 304,  839 => 301,  836 => 300,  830 => 297,  825 => 296,  823 => 295,  820 => 294,  814 => 293,  808 => 289,  802 => 285,  799 => 284,  795 => 283,  787 => 281,  785 => 280,  782 => 279,  779 => 278,  775 => 276,  767 => 274,  764 => 273,  758 => 270,  754 => 269,  751 => 268,  745 => 266,  743 => 265,  740 => 264,  737 => 263,  735 => 262,  728 => 258,  725 => 257,  721 => 255,  710 => 253,  706 => 252,  703 => 251,  701 => 250,  693 => 247,  687 => 243,  683 => 241,  672 => 239,  668 => 238,  665 => 237,  663 => 236,  659 => 234,  652 => 230,  647 => 229,  635 => 227,  633 => 226,  629 => 225,  626 => 224,  619 => 220,  614 => 219,  603 => 217,  600 => 216,  598 => 215,  594 => 214,  587 => 209,  585 => 208,  579 => 207,  574 => 205,  569 => 202,  565 => 201,  562 => 200,  550 => 198,  548 => 197,  545 => 196,  533 => 194,  531 => 193,  528 => 192,  524 => 190,  522 => 189,  512 => 181,  506 => 180,  503 => 179,  495 => 177,  492 => 176,  484 => 174,  481 => 173,  477 => 172,  473 => 171,  464 => 165,  454 => 157,  448 => 156,  440 => 154,  432 => 152,  429 => 151,  425 => 150,  421 => 149,  412 => 143,  394 => 132,  382 => 127,  370 => 122,  364 => 118,  362 => 117,  359 => 116,  354 => 113,  342 => 107,  333 => 106,  329 => 104,  319 => 100,  314 => 97,  306 => 93,  294 => 91,  292 => 90,  288 => 89,  285 => 88,  277 => 84,  266 => 82,  263 => 81,  261 => 80,  257 => 79,  250 => 74,  248 => 73,  242 => 72,  238 => 70,  236 => 69,  233 => 68,  231 => 67,  227 => 66,  223 => 64,  219 => 63,  209 => 62,  204 => 61,  202 => 60,  199 => 59,  195 => 57,  189 => 55,  187 => 54,  182 => 53,  180 => 52,  177 => 51,  175 => 50,  170 => 48,  166 => 46,  152 => 45,  146 => 42,  143 => 41,  137 => 38,  132 => 36,  128 => 35,  125 => 34,  123 => 33,  118 => 31,  110 => 26,  106 => 25,  103 => 24,  100 => 23,  83 => 22,  77 => 19,  74 => 18,  68 => 15,  65 => 14,  62 => 13,  55 => 10,  50 => 7,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/product/category.twig", "");
    }
}
