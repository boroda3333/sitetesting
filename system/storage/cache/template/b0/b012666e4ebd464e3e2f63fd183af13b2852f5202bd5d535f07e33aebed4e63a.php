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

/* ft_frame/template/product/product.twig */
class __TwigTemplate_f8316f885ae8897f4b104b009cc64ecdf6a42fe506274967341fb2895be62f20 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\" ";
        // line 2
        if ( !($context["catalog_mode"] ?? null)) {
            echo " itemscope itemtype=\"http://schema.org/Product\" ";
        }
        echo ">
  <div class=\"row\">
    <div id=\"content\" class=\"col-12 col-lg order-lg-2\">
\t\t\t";
        // line 5
        echo ($context["content_top"] ?? null);
        echo "
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb p-0 mb-3 bg-transparent\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
          ";
        // line 8
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
            // line 9
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9) == 1)) {
                // line 10
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
                echo "\"  itemprop=\"item\">
              <meta itemprop=\"name\" content=\"";
                // line 12
                echo ($context["g_text_home"] ?? null);
                echo "\" />
            \t<svg class=\"ft-icon-18 d-block\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t\t<path d=\"M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z\"/>
            \t</svg>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17);
                echo "\" />
          </li>
          ";
            } elseif ((twig_length_filter($this->env,             // line 19
($context["breadcrumbs"] ?? null)) != twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19))) {
                // line 20
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 21);
                echo "\" itemprop=\"item\">
              <span itemprop=\"name\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 22);
                echo "</span>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24);
                echo "\" />
          </li>
          ";
            } else {
                // line 27
                echo "          <li class=\"breadcrumb-item p-0 active\">
            <span>";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 28);
                echo "</span>
          </li>
          ";
            }
            // line 31
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
        // line 32
        echo "        </ol>
      </nav>
\t\t\t<h1 class=\"h2 my-4\" itemprop=\"name\">";
        // line 34
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <div class=\"mb-4\">
        <div class=\"bg-light border rounded mb-2 d-lg-none\">
          <a class=\"d-flex align-items-center pl-2 pr-2 py-2 text-muted text-decoration-none collapsed\" data-toggle=\"collapse\" href=\"#product-info\">
            <svg class=\"d-block ft-icon-18 my-0 text-gray-400 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
              <path d=\"M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7zm12-4h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04-.39.08-.74.28-1.01.55-.18.18-.33.4-.43.64-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z\"/>
            </svg>
            ";
        // line 42
        echo ($context["g_text_product_info"] ?? null);
        echo "
            <svg class=\"toggle-hidden ft-icon-18 my-0 ml-auto text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
              <path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
            </svg>
            <svg class=\"toggle-shown ft-icon-18 my-0 ml-auto text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
              <path d=\"M19 13H5v-2h14v2z\"/>
            </svg>
          </a>
        </div>
        <div id=\"product-info\" class=\"collapse justify-content-start fex-column flex-lg-row border rounded px-3 py-2 bg-light text-lg-center d-lg-flex\">
          ";
        // line 52
        if (($context["manufacturer"] ?? null)) {
            // line 53
            echo "          <div class=\"mr-4 p-1 text-secondary\">
            ";
            // line 54
            echo ($context["text_manufacturer"] ?? null);
            echo "
            <a href=\"";
            // line 55
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"text-danger\"><span itemprop=\"brand\">";
            echo ($context["manufacturer"] ?? null);
            echo "</span></a>
          </div>
          ";
        }
        // line 58
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["additional_field"]) {
            // line 59
            echo "          <div class=\"mr-4 p-1 text-secondary\">
            ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["additional_field"], "title", [], "any", false, false, false, 60);
            echo "
            <span class=\"text-danger\" ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["additional_field"], "title", [], "any", false, false, false, 61) == "SKU:")) {
                echo "itemprop=\"sku\"";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["additional_field"], "title", [], "any", false, false, false, 61) == "MPN:")) {
                echo " itemprop=\"mpn\" ";
            }
            echo " >";
            echo twig_get_attribute($this->env, $this->source, $context["additional_field"], "text", [], "any", false, false, false, 61);
            echo "</span>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['additional_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "          ";
        if ((($context["reward"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
            // line 65
            echo "          <div class=\"mr-4 p-1 text-secondary\">
            ";
            // line 66
            echo ($context["text_reward"] ?? null);
            echo " <span class=\"text-danger\">";
            echo ($context["reward"] ?? null);
            echo "</span>
          </div>
          ";
        }
        // line 69
        echo "          ";
        if (($context["review_status"] ?? null)) {
            // line 70
            echo "          <div class=\"d-flex justify-content-lg-center ml-lg-auto p-1 text-secondary\">
            <div class=\"row no-gutters\">
              <div class=\"col-auto\">
                <div class=\"d-flex flex-nowrap mr-2\">
                  ";
            // line 74
            if ((($context["rating"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                // line 75
                echo "                  <span itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\">
                    <meta itemprop='reviewCount' content='";
                // line 76
                echo ($context["microdata_reviews_count"] ?? null);
                echo "' />
                    <meta itemprop='worstRating' content='1' />
                    <meta itemprop='bestRating' content='5' />
                    <meta itemprop='ratingValue' content='";
                // line 79
                echo ($context["rating"] ?? null);
                echo "' />
                  </span>
                  ";
            }
            // line 82
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 84
                    echo "                  <svg class=\"d-block ft-icon-18 text-gray-400\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z\"/>
                  </svg>
                  ";
                } else {
                    // line 88
                    echo "                  <svg class=\"d-block ft-icon-18 text-warning\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                  </svg>
                  ";
                }
                // line 92
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                </div>
              </div>
              <div class=\"col-auto text-secondary text-nowrap d-flex align-items-center\">
                <a href=\"#review\" class=\"text-secondary\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click');  \$('html, body').animate({ scrollTop: \$('a[href=\\'#tab-review\\']').offset().top - 5}, 250); return false;\">";
            // line 96
            echo ($context["reviews"] ?? null);
            echo "</a>
              </div>
            </div>
          </div>
          ";
        }
        // line 101
        echo "        </div>
      </div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-5 col-md-7 order-lg-1\">
\t\t\t\t\t<div class=\"position-relative mb-4\">
            ";
        // line 107
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 108
            echo "\t\t\t\t\t\t<div id=\"product-gallery\">
              <div class=\"row justify-content-center\">
                <div class=\"col-12 col-lg order-lg-2\">
                  <!--noindex-->
                  <!--googleoff: all-->
                  <div class=\"gallery-placeholder d-flex justify-content-center\">
                    <div class=\"position-relative\">
                      <svg class=\"d-block img-fluid w-100\" width=\"";
            // line 115
            echo ($context["thumb_width"] ?? null);
            echo "\" height=\"";
            echo ($context["thumb_height"] ?? null);
            echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                      <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100\">
                        <div class=\"spinner-border text-gray-400\"></div>
                      </div>
                    </div>
                  </div>
                  <!--googleon: all-->
                  <!--/noindex-->
                  <div class=\"owl-carousel\">
    \t\t\t\t\t\t\t\t";
            // line 124
            if (($context["thumb"] ?? null)) {
                // line 125
                echo "    \t\t\t\t\t\t\t\t<div class=\"item d-flex justify-content-center\">
                      <meta itemprop=\"image\" content=\"";
                // line 126
                echo ($context["thumb"] ?? null);
                echo "\">
    \t\t\t\t\t\t\t\t\t<a href=\"";
                // line 127
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" target=\"_blank\" onclick=\"psw_show(0);return false\" class=\"d-block position-relative\">
                        <svg class=\"d-block img-fluid w-100\" width=\"";
                // line 128
                echo ($context["thumb_width"] ?? null);
                echo "\" height=\"";
                echo ($context["thumb_height"] ?? null);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                        ";
                // line 129
                if (($context["catalog_page_lazy"] ?? null)) {
                    // line 130
                    echo "                        <picture>
                          ";
                    // line 131
                    if (($context["thumb2x"] ?? null)) {
                        // line 132
                        echo "                          <source class=\"owl-lazy\" data-srcset=\"";
                        echo ($context["thumb"] ?? null);
                        echo " 1x, ";
                        echo ($context["thumb2x"] ?? null);
                        echo " 2x, ";
                        echo ($context["thumb3x"] ?? null);
                        echo " 3x, ";
                        echo ($context["thumb4x"] ?? null);
                        echo " 4x\" srcset=\"";
                        echo ($context["thumb_holder"] ?? null);
                        echo "\">
                          ";
                    }
                    // line 134
                    echo "                          <img src=\"";
                    echo ($context["thumb_holder"] ?? null);
                    echo "\" data-src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-100 owl-lazy\">
                        </picture>
                        <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner g-";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 136);
                    echo "\">
                          <div class=\"spinner-border text-gray-400\"></div>
                        </div>
                        ";
                } else {
                    // line 140
                    echo "                        <picture>
                          ";
                    // line 141
                    if (($context["thumb2x"] ?? null)) {
                        // line 142
                        echo "                          <source srcset=\"";
                        echo ($context["thumb"] ?? null);
                        echo " 1x, ";
                        echo ($context["thumb2x"] ?? null);
                        echo " 2x, ";
                        echo ($context["thumb3x"] ?? null);
                        echo " 3x, ";
                        echo ($context["thumb4x"] ?? null);
                        echo " 4x\">
                          ";
                    }
                    // line 144
                    echo "                          <img src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-100\">
                        </picture>
                        ";
                }
                // line 147
                echo "    \t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t";
            }
            // line 150
            echo "    \t\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 151
                echo "    \t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 152
                    echo "    \t\t\t\t\t\t\t\t<div class=\"item d-flex justify-content-center\">
    \t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 153);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" target=\"_blank\" onclick=\"psw_show(";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 153);
                    echo ");return false\" class=\"d-block position-relative\">
                        <svg class=\"d-block img-fluid w-100\" width=\"";
                    // line 154
                    echo ($context["thumb_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["thumb_height"] ?? null);
                    echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                        ";
                    // line 155
                    if (($context["catalog_page_lazy"] ?? null)) {
                        // line 156
                        echo "                        <picture>
                          ";
                        // line 157
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 157)) {
                            // line 158
                            echo "                          <source class=\"owl-lazy\" data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 158);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 158);
                            echo " 2x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb3x", [], "any", false, false, false, 158);
                            echo " 3x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb4x", [], "any", false, false, false, 158);
                            echo " 4x\" srcset=\"";
                            echo ($context["thumb_holder"] ?? null);
                            echo "\">
                          ";
                        }
                        // line 160
                        echo "                          <img src=\"";
                        echo ($context["thumb_holder"] ?? null);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 160);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 160);
                        echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-100 owl-lazy\" />
                        </picture>
                        <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner g-";
                        // line 162
                        echo (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 162) + 1);
                        echo "\">
                          <div class=\"spinner-border text-gray-400\"></div>
                        </div>
                        ";
                    } else {
                        // line 166
                        echo "                        <picture>
                          ";
                        // line 167
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 167)) {
                            // line 168
                            echo "                          <source srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 168);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 168);
                            echo " 2x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb3x", [], "any", false, false, false, 168);
                            echo " 3x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb4x", [], "any", false, false, false, 168);
                            echo " 4x\">
                          ";
                        }
                        // line 170
                        echo "                          <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 170);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 170);
                        echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-100\">
                        </picture>
                        ";
                    }
                    // line 173
                    echo "                  \t  </a>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "    \t\t\t\t\t\t\t\t";
            }
            // line 177
            echo "    \t\t\t\t\t\t\t</div>
                </div>
                ";
            // line 179
            if (((($context["add_images_limit"] ?? null) > 0) && (twig_length_filter($this->env, ($context["bullets"] ?? null)) > 1))) {
                // line 180
                echo "                <div class=\"col-auto order-lg-1\">
                  <div class=\"additional-images d-flex flex-lg-column mx-n1\">
                    ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["bullets"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["bullet"]) {
                    // line 183
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 183) <= ($context["add_images_limit"] ?? null))) {
                        // line 184
                        echo "                    <a class=\"d-block position-relative overflow-hidden border rounded mb-2 mx-1 ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 184) == 1)) {
                            echo "border-secondary";
                        }
                        echo "\" href=\"#\" onclick=\"\$('#product-gallery .owl-carousel').trigger('to.owl.carousel', [";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 184);
                        echo "]); return false;\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 184);
                        echo "\">
                      <svg class=\"d-block img-fluid\" width=\"";
                        // line 185
                        echo twig_get_attribute($this->env, $this->source, $context["bullet"], "img_width", [], "any", false, false, false, 185);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["bullet"], "img_height", [], "any", false, false, false, 185);
                        echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                      <img src=\"";
                        // line 186
                        echo twig_get_attribute($this->env, $this->source, $context["bullet"], "img1x", [], "any", false, false, false, 186);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["bullet"], "img2x", [], "any", false, false, false, 186)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["bullet"], "img1x", [], "any", false, false, false, 186);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["bullet"], "img2x", [], "any", false, false, false, 186);
                            echo " 2x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["bullet"], "img3x", [], "any", false, false, false, 186);
                            echo " 3x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["bullet"], "img4x", [], "any", false, false, false, 186);
                            echo " 4x\"";
                        }
                        echo " alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto owl-lazy\">
                    </a>
                    ";
                    }
                    // line 189
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bullet'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "                  </div>
                  ";
                // line 191
                if ((($context["add_images_limit"] ?? null) < twig_length_filter($this->env, ($context["bullets"] ?? null)))) {
                    // line 192
                    echo "                  <a class=\"d-block text-dark text-center text-decoration-none\" href=\"#\" onclick=\"psw_show(";
                    echo ($context["add_images_limit"] ?? null);
                    echo ");return false\">
                    ";
                    // line 193
                    echo ($context["g_text_more_add_imgs"] ?? null);
                    echo "
                    ";
                    // line 194
                    echo (twig_length_filter($this->env, ($context["bullets"] ?? null)) - ($context["add_images_limit"] ?? null));
                    echo "
                  </a>
                  ";
                }
                // line 197
                echo "                </div>
                ";
            }
            // line 199
            echo "              </div>
\t\t\t\t\t\t</div>
            ";
        } else {
            // line 202
            echo "            <svg class=\"d-block mx-auto img-fluid ft-icon text-gray-200\" width=\"";
            echo ($context["thumb_width"] ?? null);
            echo "\" height=\"";
            echo ($context["thumb_height"] ?? null);
            echo "\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
              <path d=\"M 2.9902344 1.9902344 A 1.0001 1.0001 0 0 0 2.2929688 3.7070312 L 46.292969 47.707031 A 1.0001 1.0001 0 1 0 47.707031 46.292969 L 44.414062 43 L 48 43 L 48 7 L 8.4140625 7 L 3.7070312 2.2929688 A 1.0001 1.0001 0 0 0 2.9902344 1.9902344 z M 2 7 L 2 43 L 38.707031 43 L 36.853516 41.146484 L 27.060547 31.353516 L 24.707031 33.707031 C 24.316031 34.098031 23.683969 34.098031 23.292969 33.707031 C 22.901969 33.316031 22.901969 32.683969 23.292969 32.292969 L 25.646484 29.939453 L 15.589844 19.882812 L 4 30.699219 L 4 9 L 4.7070312 9 L 2.7070312 7 L 2 7 z M 10.414062 9 L 46 9 L 46 36.585938 L 34.707031 25.292969 C 34.316031 24.901969 33.683969 24.901969 33.292969 25.292969 L 30 28.585938 L 10.414062 9 z M 35 15 A 3 3 0 0 0 35 21 A 3 3 0 0 0 35 15 z\" transform=\"translate(25,25)\"/>
            </svg>
            ";
        }
        // line 206
        echo "  \t\t\t\t\t";
        if (($context["stickers"] ?? null)) {
            // line 207
            echo "  \t\t\t\t\t<div class=\"position-absolute t-0 r-0 z-index-2\">
  \t\t\t\t\t\t";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stickers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                // line 209
                echo "  \t\t\t\t\t\t<div class=\"text-right\"><span class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sticker"], "class", [], "any", false, false, false, 209);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sticker"], "text", [], "any", false, false, false, 209);
                echo "</span></div>
  \t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "  \t\t\t\t\t</div>
  \t\t\t\t\t";
        }
        // line 213
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
        ";
        // line 215
        if ((((($context["wishlist_status"] ?? null) || ($context["compare_status"] ?? null)) || (($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null))) ||  !($context["catalog_mode"] ?? null))) {
            // line 216
            echo "\t\t\t\t<div class=\"col-12 col-xl-3 col-lg-4 col-md-5 order-lg-3\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t<div class=\"card-body p-3\">
\t\t\t\t\t\t\t<div class=\"row no-gutters flex-nowrap\">
\t\t\t\t\t\t\t\t<div class=\"col\" ";
            // line 220
            if ( !($context["catalog_mode"] ?? null)) {
                echo " itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\" ";
            }
            echo ">
                  ";
            // line 221
            if ( !($context["catalog_mode"] ?? null)) {
                // line 222
                echo "                  <!-- <meta itemprop=\"url\" content=\"";
                echo ($context["microdata_canonical_url"] ?? null);
                echo "\"> -->
                  <link itemprop=\"url\" href=\"";
                // line 223
                echo ($context["microdata_canonical_url"] ?? null);
                echo "\">

                  <meta itemprop=\"priceCurrency\" content=\"";
                // line 225
                echo ($context["microdata_currency"] ?? null);
                echo "\">
                  ";
                // line 226
                if (($context["microdata_price_valid_until"] ?? null)) {
                    // line 227
                    echo "                  <meta itemprop=\"priceValidUntil\" content=\"";
                    echo ($context["microdata_price_valid_until"] ?? null);
                    echo "\">
                  ";
                }
                // line 229
                echo "                  ";
                if ((($context["quantity"] ?? null) > 0)) {
                    // line 230
                    echo "                  <link itemprop=\"availability\" href=\"http://schema.org/InStock\">
                  ";
                } else {
                    // line 232
                    echo "                  <link itemprop=\"availability\" href=\"https://schema.org/OutOfStock\">
                  ";
                }
                // line 234
                echo "                  ";
            }
            // line 235
            echo "
                  ";
            // line 236
            if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                // line 237
                echo "\t\t\t\t\t\t\t\t\t";
                if ( !($context["special"] ?? null)) {
                    // line 238
                    echo "                  ";
                    if ( !($context["catalog_mode"] ?? null)) {
                        // line 239
                        echo "                  <meta itemprop=\"price\" content=\"";
                        echo ($context["microdata_price"] ?? null);
                        echo "\">
                  ";
                    }
                    // line 241
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"h2 m-0 text-nowrap\">";
                    echo ($context["price"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 243
                    echo "                  ";
                    if ( !($context["catalog_mode"] ?? null)) {
                        // line 244
                        echo "                  <meta itemprop=\"price\" content=\"";
                        echo ($context["microdata_special"] ?? null);
                        echo "\">
                  ";
                    }
                    // line 246
                    echo "\t\t\t\t\t\t\t\t\t<s class=\"text-danger\">";
                    echo ($context["price"] ?? null);
                    echo "</s>
\t\t\t\t\t\t\t\t\t<div class=\"h2 m-0 text-nowrap\">";
                    // line 247
                    echo ($context["special"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 249
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 250
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"text-muted font-weight-light mt-1\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 252
                echo "                  ";
            }
            // line 253
            echo "
\t\t\t\t\t\t\t\t</div>
                ";
            // line 255
            if ((($context["wishlist_status"] ?? null) || ($context["compare_status"] ?? null))) {
                // line 256
                echo "\t\t\t\t\t\t\t\t<div class=\"col-auto ml-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm ml-1 ml-sm-2\">
                    ";
                // line 258
                if (($context["compare_status"] ?? null)) {
                    // line 259
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\" title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M 12 4 A 2 2 0 0 0 10.269531 5 L 5 5 L 2 5 L 2 7 L 4 7 L 0 15 C 0 17.761 2.239 20 5 20 C 7.761 20 10 17.761 10 15 L 6 7 L 10.271484 7 A 2 2 0 0 0 12 8 A 2 2 0 0 0 13.730469 7 L 18 7 L 14 15 C 14 17.761 16.239 20 19 20 C 21.761 20 24 17.761 24 15 L 20 7 L 22 7 L 22 5 L 13.728516 5 A 2 2 0 0 0 12 4 z M 5 9.0214844 L 7.9882812 15 L 2.0117188 15 L 5 9.0214844 z M 19 9.0214844 L 21.988281 15 L 16.011719 15 L 19 9.0214844 z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
                    ";
                }
                // line 265
                echo "                    ";
                if (($context["wishlist_status"] ?? null)) {
                    // line 266
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
                    ";
                }
                // line 272
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                ";
            }
            // line 275
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 276
            if ((($context["discounts"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                // line 277
                echo "
\t\t\t\t\t\t\t";
                // line 278
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 279
                    echo "\t\t\t\t\t\t\t<div class=\"mt-1\">
\t\t\t\t\t\t\t\t";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 280);
                    echo "
\t\t\t\t\t\t\t\t<span class=\"text-muted font-weight-light\">";
                    // line 281
                    echo ($context["text_discount"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t<strong>";
                    // line 282
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 282);
                    echo "</strong>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "\t\t\t\t\t\t\t";
            }
            // line 286
            echo "\t\t\t\t\t\t\t";
            if ((($context["points"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                // line 287
                echo "
\t\t\t\t\t\t\t<div class=\"mt-1\"><span class=\"text-muted font-weight-light\">";
                // line 288
                echo ($context["text_points"] ?? null);
                echo "</span> <b>";
                echo ($context["points"] ?? null);
                echo "</b></div>
\t\t\t\t\t\t\t";
            }
            // line 290
            echo "
              ";
            // line 291
            if ( !($context["catalog_mode"] ?? null)) {
                // line 292
                echo "\t\t\t\t\t\t\t<div class=\"alert ";
                if ((($context["quantity"] ?? null) > 0)) {
                    echo " alert-success ";
                } else {
                    echo " alert-danger ";
                }
                echo " py-2 px-3 mt-3\">
\t\t\t\t\t\t\t\t";
                // line 293
                echo ($context["stock"] ?? null);
                echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"product\">
\t\t\t\t\t\t\t\t";
                // line 297
                if (($context["options"] ?? null)) {
                    // line 298
                    echo "\t\t\t\t\t\t\t\t<div class=\"h6 d-none\">";
                    echo ($context["text_option"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                    // line 299
                    $context["i"] = 0;
                    // line 300
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 301
                        echo "\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 302
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 302) == "select")) {
                            // line 303
                            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3 ";
                            if (( !twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 303) &&  !twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 303))) {
                                echo " d-none ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            // line 304
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 304)) {
                                echo " required ";
                            }
                            echo " m-0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 305
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 305);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 305);
                            echo "</strong></label>
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                            // line 306
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 306);
                            echo "]\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 306);
                            echo "\" class=\"custom-select form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                            // line 307
                            echo ($context["text_select"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 308
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 308));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 309
                                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 309);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 309);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 310
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 310)) {
                                    // line 311
                                    echo "\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 311);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 311);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 312
                                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 314
                            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 318
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 318) == "radio")) {
                            // line 319
                            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3 ";
                            if (( !twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 319) &&  !twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 319))) {
                                echo " d-none ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            // line 320
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 320)) {
                                echo " required ";
                            }
                            echo " m-0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"><strong>";
                            // line 321
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 321);
                            echo "</strong></label>
                    <div id=\"input-option";
                            // line 322
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 322);
                            echo "\" class=\"mx-n1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-wrap\">
  \t\t\t\t\t\t\t\t\t\t\t";
                            // line 324
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 324));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 325
                                echo "  \t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 325)) {
                                    // line 326
                                    echo "                        <div class=\"mb-2 mx-1\">
                          <input
                            type=\"radio\"
                            class=\"option-image d-none\"
                            id=\"option-";
                                    // line 330
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 330);
                                    echo "-";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 330);
                                    echo "\"
                            name=\"option[";
                                    // line 331
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 331);
                                    echo "]\"
                            value=\"";
                                    // line 332
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 332);
                                    echo "\"
                            >
                          <label class=\"border overflow-hidden rounded cursor-pointer d-block m-0 p-0\" for=\"option-";
                                    // line 334
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 334);
                                    echo "-";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 334);
                                    echo "\">
                            <span class=\"d-block position-relative\">
        \t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block img-fluid\" width=\"50px\" height=\"50px\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
        \t\t\t\t\t\t\t\t\t\t\t<img class=\"d-block img-fluid position-absolute t-0 l-0 img-fluid d-block w-100\" src=\"";
                                    // line 337
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 337);
                                    echo "\" ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image2x", [], "any", false, false, false, 337)) {
                                        echo "srcset=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 337);
                                        echo " 1x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image2x", [], "any", false, false, false, 337);
                                        echo " 2x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image3x", [], "any", false, false, false, 337);
                                        echo " 3x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image4x", [], "any", false, false, false, 337);
                                        echo " 4x\"";
                                    }
                                    echo " alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 337);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 337)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 337);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 337);
                                        echo " ";
                                    }
                                    echo "\" data-toggle=\"tooltip\" data-offset=\"0, 8\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 337);
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 337)) {
                                        echo " (";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 337);
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 337);
                                        echo ")";
                                    }
                                    echo "\" />
        \t\t\t\t\t\t\t\t\t\t</span>
                          </label>
                        </div>
  \t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 342
                                    echo "                        <div class=\"custom-control custom-radio w-100 mb-1\">
                          <input
                            type=\"radio\"
                            class=\"custom-control-input\"
                            id=\"option-";
                                    // line 346
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 346);
                                    echo "-";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 346);
                                    echo "\"
                            name=\"option[";
                                    // line 347
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 347);
                                    echo "]\"
                            value=\"";
                                    // line 348
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 348);
                                    echo "\"
                            >
                          <label class=\"custom-control-label cursor-pointer ml-1\" for=\"option-";
                                    // line 350
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 350);
                                    echo "-";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 350);
                                    echo "\">
                            ";
                                    // line 351
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 351);
                                    echo " <span class=\"text-secondary\">";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 351)) {
                                        echo " (";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 351);
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 351);
                                        echo ")";
                                    }
                                    echo "</span>
                          </label>
                        </div>
  \t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 355
                                echo "  \t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 356
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 361
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 361) == "checkbox")) {
                            // line 362
                            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3 ";
                            if (( !twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 362) &&  !twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 362))) {
                                echo " d-none ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            // line 363
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 363)) {
                                echo " required ";
                            }
                            echo " m-0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"><strong>";
                            // line 364
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 364);
                            echo "</strong></label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                            // line 365
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 365);
                            echo "\" class=\"mx-n1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-wrap\">
  \t\t\t\t\t\t\t\t\t\t\t";
                            // line 367
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 367));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 368
                                echo "  \t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 368)) {
                                    // line 369
                                    echo "                        <div class=\"mb-2 mx-1\">
                          <input
                            type=\"checkbox\"
                            class=\"option-image d-none\"
                            id=\"option-";
                                    // line 373
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 373);
                                    echo "-";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 373);
                                    echo "\"
                            name=\"option[";
                                    // line 374
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 374);
                                    echo "][]\"
                            value=\"";
                                    // line 375
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 375);
                                    echo "\"
                            >
                          <label class=\"border overflow-hidden rounded cursor-pointer d-block m-0 p-0\" for=\"option-";
                                    // line 377
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 377);
                                    echo "-";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 377);
                                    echo "\">
                            <span class=\"d-block position-relative\">
        \t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block img-fluid\" width=\"50px\" height=\"50px\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
        \t\t\t\t\t\t\t\t\t\t\t<img class=\"d-block img-fluid position-absolute t-0 l-0 img-fluid d-block w-100\" src=\"";
                                    // line 380
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 380);
                                    echo "\" ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image2x", [], "any", false, false, false, 380)) {
                                        echo "srcset=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 380);
                                        echo " 1x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image2x", [], "any", false, false, false, 380);
                                        echo " 2x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image3x", [], "any", false, false, false, 380);
                                        echo " 3x, ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image4x", [], "any", false, false, false, 380);
                                        echo " 4x\"";
                                    }
                                    echo " alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 380);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 380)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 380);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 380);
                                        echo " ";
                                    }
                                    echo "\" data-toggle=\"tooltip\" data-offset=\"0, 8\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 380);
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 380)) {
                                        echo " (";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 380);
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 380);
                                        echo ")";
                                    }
                                    echo "\" />
        \t\t\t\t\t\t\t\t\t\t</span>
                          </label>
                        </div>
  \t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 385
                                    echo "                        <div class=\"custom-control custom-checkbox w-100 mb-1\">
                          <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"option-";
                                    // line 389
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 389);
                                    echo "-";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 389);
                                    echo "\"
                            name=\"option[";
                                    // line 390
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 390);
                                    echo "][]\"
                            value=\"";
                                    // line 391
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 391);
                                    echo "\"
                            >
                          <label class=\"custom-control-label cursor-pointer ml-1\" for=\"option-";
                                    // line 393
                                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 393);
                                    echo "-";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 393);
                                    echo "\">
                            ";
                                    // line 394
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 394);
                                    echo " <span class=\"text-secondary\">";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 394)) {
                                        echo " (";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 394);
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 394);
                                        echo ")";
                                    }
                                    echo "</span>
                          </label>
                        </div>
  \t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 398
                                echo "  \t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 399
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 404
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 404) == "text")) {
                            // line 405
                            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            // line 406
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 406)) {
                                echo " required ";
                            }
                            echo " m-0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 407
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 407);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 407);
                            echo "</strong></label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                            // line 408
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 408);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 408);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 408);
                            echo "\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 408);
                            echo "\" class=\"form-control\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 408)) {
                                echo " required ";
                            }
                            echo " />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 412
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 412) == "textarea")) {
                            // line 413
                            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            // line 414
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 414)) {
                                echo " required ";
                            }
                            echo " m-0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 415
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 415);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 415);
                            echo "</strong></label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                            // line 416
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 416);
                            echo "]\" rows=\"2\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 416);
                            echo "\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 416);
                            echo "\" class=\"form-control\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 416);
                            echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 420
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 420) == "file")) {
                            // line 421
                            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            // line 422
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 422)) {
                                echo " required ";
                            }
                            echo " m-0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"><strong>";
                            // line 423
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 423);
                            echo "</strong></label>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                            // line 425
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 425);
                            echo "\" data-loading-text=\"";
                            echo ($context["text_loading"] ?? null);
                            echo "\" class=\"btn btn-light mw-100 text-truncate\">
                      <span class=\"row no-gutters\">
      \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
      \t\t\t\t\t\t\t\t\t\t<span class=\"loading-icon\">
      \t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-border ft-icon-18 text-gray-500 d-block\"></span>
      \t\t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t\t\t<span class=\"static-icon\">
      \t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
      \t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z\"/>
      \t\t\t\t\t\t\t\t\t\t\t</svg>
      \t\t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
      \t\t\t\t\t\t\t\t\t\t<span class=\"button-text ml-2\">";
                            // line 438
                            echo ($context["button_upload"] ?? null);
                            echo "</span>
      \t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                            // line 442
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 442);
                            echo "]\" value=\"\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 442);
                            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 446
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 446) == "date")) {
                            // line 447
                            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
                  <div class=\"form-group";
                            // line 448
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 448)) {
                                echo " required ";
                            }
                            echo " m-0\">
      \t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 449
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 449);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 449);
                            echo "</strong></label>
      \t\t\t\t\t\t\t<div class=\"input-group date need-dtp\">
      \t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                            // line 451
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 451);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 451);
                            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 451);
                            echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
      \t\t\t\t\t\t\t\t\t<button class=\"btn btn-light border px-2\" type=\"button\">
      \t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\"  xmlns=\"http://www.w3.org/2000/svg\">
      \t\t\t\t\t\t\t\t\t\t\t<path d=\"M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z\"/>
      \t\t\t\t\t\t\t\t\t\t</svg>
      \t\t\t\t\t\t\t\t\t</button>
      \t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 463
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 463) == "datetime")) {
                            // line 464
                            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
                  <div class=\"form-group";
                            // line 465
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 465)) {
                                echo " required ";
                            }
                            echo " m-0\">
      \t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 466
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 466);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 466);
                            echo "</strong></label>
      \t\t\t\t\t\t\t<div class=\"input-group datetime need-dtp\">
      \t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                            // line 468
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 468);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 468);
                            echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 468);
                            echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
      \t\t\t\t\t\t\t\t\t<button class=\"btn btn-light border px-2\" type=\"button\">
      \t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
      \t\t\t\t\t\t\t\t\t\t\t<path d=\"M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z\"/>
      \t\t\t\t\t\t\t\t\t\t</svg>
      \t\t\t\t\t\t\t\t\t</button>
      \t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 480
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 480) == "time")) {
                            // line 481
                            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
                  <div class=\"form-group";
                            // line 482
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 482)) {
                                echo " required ";
                            }
                            echo " m-0\">
      \t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 483
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 483);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 483);
                            echo "</strong></label>
      \t\t\t\t\t\t\t<div class=\"input-group time need-dtp\">
      \t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                            // line 485
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 485);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 485);
                            echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 485);
                            echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
      \t\t\t\t\t\t\t\t\t<button class=\"btn btn-light border px-2\" type=\"button\">
      \t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
      \t\t\t\t\t\t\t\t\t\t\t<path d=\"M22 5.72l-4.6-3.86-1.29 1.53 4.6 3.86L22 5.72zM7.88 3.39L6.6 1.86 2 5.71l1.29 1.53 4.59-3.85zM12.5 8H11v6l4.75 2.85.75-1.23-4-2.37V8zM12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z\"/>
      \t\t\t\t\t\t\t\t\t\t</svg>
      \t\t\t\t\t\t\t\t\t</button>
      \t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 497
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 498
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 499
                echo "\t\t\t\t\t\t\t\t";
                if (($context["recurrings"] ?? null)) {
                    // line 500
                    echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group required m-0\">
\t\t\t\t\t\t\t\t\t\t<label><strong>";
                    // line 502
                    echo ($context["text_payment_recurring"] ?? null);
                    echo "</strong></label>
\t\t\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control custom-select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 504
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 505
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                        // line 506
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 506);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 506);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 508
                    echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 513
                echo "\t\t\t\t\t\t\t\t<div class=\"row form-row mt-4\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light border px-0\" type=\"button\" onclick=\"ft_countupd('-1', '";
                // line 517
                echo ($context["minimum"] ?? null);
                echo "', '#input-quantity')\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t\t\t\t\t\t\t\t<path d=\"M19 13H5v-2h14v2z\"/>
            \t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
                // line 523
                echo ($context["minimum"] ?? null);
                echo "\" id=\"input-quantity\" class=\"form-control border text-center\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light border px-0\" type=\"button\" onclick=\"ft_countupd('1', '";
                // line 525
                echo ($context["minimum"] ?? null);
                echo "', '#input-quantity')\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
            \t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
                    <div class=\"row no-gutters\">
                      <div class=\"col\">
                        <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 536
                echo ($context["product_id"] ?? null);
                echo "\" />
  \t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
                // line 537
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-danger btn-block px-1\" ";
                if (((($context["quantity"] ?? null) <= 0) && ($context["disable_btn_status"] ?? null))) {
                    echo "disabled";
                }
                echo "><b class=\"btn-cart-text d-block text-truncate\">";
                if (((($context["quantity"] ?? null) <= 0) && ($context["disable_btn_status"] ?? null))) {
                    echo ($context["disable_btn_text"] ?? null);
                } else {
                    echo ($context["button_cart"] ?? null);
                }
                echo "</b></button>
                      </div>
                      ";
                // line 539
                if (($context["fastorder_status"] ?? null)) {
                    // line 540
                    echo "                      <div class=\"col-auto\">
                        <button type=\"button\" class=\"btn btn-danger px-2 ml-2\" title=\"";
                    // line 541
                    echo ($context["g_text_fastorder"] ?? null);
                    echo "\" onclick=\"ft_fastorder('";
                    echo ($context["product_id"] ?? null);
                    echo "')\" ";
                    if (((($context["quantity"] ?? null) <= 0) && ($context["disable_btn_status"] ?? null))) {
                        echo "disabled";
                    }
                    echo ">
                          <svg class=\"d-block ft-icon-18 text-wight\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          \t<path d=\"M 13 1 L 6 14 L 12 14 L 12 23 L 19 10 L 13 10 L 13 1 z\"></path>
            \t\t\t\t\t\t\t</svg>
  \t\t\t\t\t\t\t\t\t\t\t</button>
                      </div>
                      ";
                }
                // line 548
                echo "                    </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 551
                if ((($context["minimum"] ?? null) > 1)) {
                    // line 552
                    echo "\t\t\t\t\t\t\t\t<small class=\"d-block text-muted mt-2 font-weight-light\">";
                    echo ($context["text_minimum"] ?? null);
                    echo "</small>
\t\t\t\t\t\t\t\t";
                }
                // line 554
                echo "
                ";
                // line 555
                echo ($context["ft_additional_position6"] ?? null);
                echo "
\t\t\t\t\t\t\t</div>
              ";
            }
            // line 558
            echo "            </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 560
            echo ($context["column_right"] ?? null);
            echo "
\t\t\t\t</div>
        ";
        }
        // line 563
        echo "\t\t\t\t<div class=\"col order-lg-2 px-xl-4\">
          ";
        // line 564
        echo ($context["ft_additional_position1"] ?? null);
        echo "
\t\t\t\t\t";
        // line 565
        if (($context["show_short_description"] ?? null)) {
            // line 566
            echo "\t\t\t\t\t<div class=\"mb-4 d-none d-lg-block\">
\t\t\t\t\t<div class=\"mb-2\">";
            // line 567
            echo ($context["short_description"] ?? null);
            echo " <a class=\"text-danger\" href=\"#\" onclick=\"\$('a[href=\\'#tab-description\\']').trigger('click'); \$('html, body').animate({ scrollTop: \$('a[href=\\'#tab-description\\']').offset().top - 2}, 250); return false;\">→</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 570
        echo "          ";
        echo ($context["ft_additional_position2"] ?? null);
        echo "
\t\t\t\t\t";
        // line 571
        if ((($context["attribute_groups"] ?? null) && ($context["show_short_attributes"] ?? null))) {
            // line 572
            echo "          ";
            $context["i"] = 0;
            // line 573
            echo "\t\t\t\t\t<div class=\"mb-4 d-none d-lg-block\">
\t\t\t\t\t";
            // line 574
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                if ((($context["i"] ?? null) < ($context["short_attributes_limit"] ?? null))) {
                    // line 575
                    echo "\t\t\t\t\t<div class=\"h6 \">";
                    echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 575);
                    echo "</div>
\t\t\t\t\t";
                    // line 576
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 576));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        if ((($context["i"] ?? null) < ($context["short_attributes_limit"] ?? null))) {
                            // line 577
                            echo "\t\t\t\t\t<div class=\"row form-row mb-3\">
\t\t\t\t\t\t<div class=\"col-auto mw-100\">";
                            // line 578
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 578);
                            echo "</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"h-75 mt-1 border-bottom border-bottom-dotted-style\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">";
                            // line 582
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 582);
                            echo "</div>
\t\t\t\t\t</div>
          ";
                            // line 584
                            $context["i"] = (($context["i"] ?? null) + 1);
                            // line 585
                            echo "\t\t\t\t\t";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 586
                    echo "\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 587
            echo "          <div class=\"mt-n3\">
            <a href=\"#\" class=\"text-danger \" onclick=\"\$('a[href=\\'#tab-specification\\']').trigger('click'); \$('html, body').animate({ scrollTop: \$('a[href=\\'#tab-specification\\']').offset().top - 2}, 250); return false;\">";
            // line 588
            echo ($context["g_text_more_attr"] ?? null);
            echo "</a>
          </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 592
        echo "          ";
        echo ($context["ft_additional_position3"] ?? null);
        echo "
\t\t\t\t\t";
        // line 593
        if (($context["show_social_likes"] ?? null)) {
            // line 594
            echo "\t\t\t\t\t<div class=\"mb-4 text-center text-lg-left\">
\t\t\t\t\t\t<hr class=\"d-lg-none\">
\t\t\t\t\t\t";
            // line 596
            echo ($context["social_likes_code"] ?? null);
            echo "
\t\t\t\t\t\t<hr class=\"d-lg-none\">
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 600
        echo "          ";
        echo ($context["ft_additional_position4"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 605
        if ((($context["products"] ?? null) &&  !($context["related_product_position"] ?? null))) {
            // line 606
            echo "      <div id=\"related-products\" class=\"mb-3\">

        <div class=\"pt-2 mb-3\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"h5 mb-0 ml-1\">";
            // line 611
            echo ($context["text_related"] ?? null);
            echo "</div>
            </div>
            <div class=\"col-auto\">
              <button class=\"btn btn-prev p-0 rounded-pill\">
                <svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z\"></path>
                </svg>
              </button>
              <button class=\"btn btn-next p-0 rounded-pill\">
                <svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div  class=\"m-n1 m-sm-n2\">
          <!--noindex-->
          <!--googleoff: all-->
          <div class=\"carousel-placeholder d-flex\">
            <script>

              items = 1;
              breakpoints = [];
              base_width = document.querySelector('#related-products').offsetWidth;

              breakpoints[0] = { ww: 600, count: 2 };
              breakpoints[1] = { ww: 860, count: 3 };
              breakpoints[2] = { ww: 1110, count: 4 };
              breakpoints[3] = { ww: 9999, count: 5 };

              breakpoints.sort((a, b) => a.ww > b.ww ? 1 : -1);
              breakpoints.forEach(function(breakpoint, i, breakpoints) {

                prev_bp_vw = breakpoints[i - 1] != null ? breakpoints[i - 1].ww : 0;

                if (prev_bp_vw <= base_width && breakpoint.ww > base_width) {
                  items = breakpoint.count;
                }
              });

            </script>
            <div class=\"item d-flex\">
              <script>

                item = document.querySelector('#related-products .carousel-placeholder .item');
                item.style.width = items > 0 ? 100 / items + '%' : 100 + '%';

              </script>
              <div class=\"product-item border rounded w-100 bg-white overflow-hidden m-1 m-sm-2 d-flex flex-column\">
                <div class=\"w-100 text-center px-2 px-sm-3 pt-2 pb-2\">
        \t\t\t\t\t<div class=\"d-inline-block position-relative\">
        \t\t\t\t\t\t<svg class=\"d-block img-fluid\" width=\"";
            // line 664
            echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["products"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "img_width", [], "any", false, false, false, 664);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["products"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "img_height", [], "any", false, false, false, 664);
            echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
        \t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
        \t\t\t\t\t\t\t<div class=\"spinner-border text-gray-300\"></div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"w-100 px-2 px-sm-3 pt-2 pb-1\">
        \t\t\t\t\t<div class=\"product-name\">
        \t\t\t\t\t\t<span class=\"bg-light\"><span class=\"invisible\" role=\"status\">Loading product name...</span></span>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"w-100 mt-auto px-2 px-sm-3 pb-2 pb-sm-3 pt-0\">
        \t\t\t\t\t<div class=\"price\">
        \t\t\t\t\t\t<div class=\"h6 mb-1\">
        \t\t\t\t\t\t\t<span class=\"d-inline-block\">
        \t\t\t\t\t\t\t\t<span class=\"bg-light \"><span class=\"invisible\" role=\"status\">Load...</span></span>
        \t\t\t\t\t\t\t</span>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t";
            // line 682
            if (twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["products"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "tax", [], "any", false, false, false, 682)) {
                // line 683
                echo "        \t\t\t\t\t\t<small class=\"font-weight-light text-muted d-block\">
        \t\t\t\t\t\t\t<span class=\"bg-light\"><span class=\"invisible\" role=\"status\">";
                // line 684
                echo ($context["text_tax"] ?? null);
                echo " Loading...</span></span>
        \t\t\t\t\t\t</small>
        \t\t\t\t\t\t";
            }
            // line 687
            echo "        \t\t\t\t\t</div>
                  ";
            // line 688
            if (($context["related_product_buttons"] ?? null)) {
                // line 689
                echo "        \t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 pl-2 pr-1 mt-2\" disabled>
        \t\t\t\t\t\t<span class=\"invisible\"><span class=\"invisible\" role=\"status\">Loading...</span></span>
        \t\t\t\t\t</button>
                  ";
            }
            // line 693
            echo "        \t\t\t\t</div>
              </div>
            </div>
            <script>
              for(let i = 1; i < items && i < ";
            // line 697
            echo twig_length_filter($this->env, ($context["products"] ?? null));
            echo "; i++)  {
                clone = item.cloneNode(true);
                item.parentNode.appendChild(clone);
              }

              items = null;
              item = null;
              clone = null;
              breakpoints = null;
              base_width = null;
              prev_bp_vw = null;

            </script>
          </div>
          <!--googleon: all-->
          <!--/noindex-->

          <div class=\"owl-carousel\">
            ";
            // line 715
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 716
                echo "            <div class=\"product-item border rounded w-100 bg-white overflow-hidden m-1 m-sm-2 d-flex flex-column\">
              <div class=\"image w-100 position-relative text-center px-2 px-sm-3 pt-2 pb-2\">
                <a href=\"";
                // line 718
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 718);
                echo "\">
                  <div class=\"d-inline-block position-relative\">
                    <svg class=\"d-block img-fluid\" width=\"";
                // line 720
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_width", [], "any", false, false, false, 720);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_height", [], "any", false, false, false, 720);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                    ";
                // line 721
                if (($context["catalog_page_lazy"] ?? null)) {
                    // line 722
                    echo "                    <picture>
                      ";
                    // line 723
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 723)) {
                        // line 724
                        echo "                      <source class=\"owl-lazy\" data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 724);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 724);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 724);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 724);
                        echo " 4x\" srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_holder", [], "any", false, false, false, 724);
                        echo "\">
                      ";
                    }
                    // line 726
                    echo "                      <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_holder", [], "any", false, false, false, 726);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 726);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 726);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 726);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto owl-lazy\">
                    </picture>
                    <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
                      <div class=\"spinner-border text-gray-300\"></div>
                    </div>
                    ";
                } else {
                    // line 732
                    echo "                    <picture>
                      ";
                    // line 733
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 733)) {
                        // line 734
                        echo "                      <source srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 734);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 734);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 734);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 734);
                        echo " 4x\">
                      ";
                    }
                    // line 736
                    echo "                      <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 736);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 736);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 736);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto\">
                    </picture>
                    ";
                }
                // line 739
                echo "                  </div>
                </a>
                ";
                // line 741
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 741)) {
                    // line 742
                    echo "                <ul class=\"list-unstyled position-absolute t-0 l-0 ml-3 mt-2 text-left\">
                  ";
                    // line 743
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 743));
                    foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                        // line 744
                        echo "                  <li><span class=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "class", [], "any", false, false, false, 744);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "text", [], "any", false, false, false, 744);
                        echo "</span></li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 746
                    echo "                </ul>
                ";
                }
                // line 748
                echo "              </div>
              <div class=\"w-100 px-2 px-sm-3 pt-2 pb-1\">
      \t\t\t\t\t<div class=\"product-name\">
      \t\t\t\t\t\t<a href=\"";
                // line 751
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 751);
                echo "\" class=\"text-dark h6 font-weight-normal line-clamp-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 751);
                echo "</a>
      \t\t\t\t\t</div>
      \t\t\t\t</div>

              <div class=\"w-100 mt-auto px-2 px-sm-3 pb-2 pb-sm-3 pt-0\">
                ";
                // line 756
                if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                    // line 757
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 757)) {
                        // line 758
                        echo "      \t\t\t\t\t<div class=\"price\">
      \t\t\t\t\t\t";
                        // line 759
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 759)) {
                            // line 760
                            echo "      \t\t\t\t\t\t<div class=\"h6 mb-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 760);
                            echo "</div>
      \t\t\t\t\t\t";
                        } else {
                            // line 762
                            echo "      \t\t\t\t\t\t<div class=\"h6 mb-1\">
      \t\t\t\t\t\t\t<s class=\"d-inline-block text-danger font-weight-light\">";
                            // line 763
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 763);
                            echo "</s>
      \t\t\t\t\t\t\t<span class=\"d-inline-block\">";
                            // line 764
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 764);
                            echo "</span>
      \t\t\t\t\t\t</div>
      \t\t\t\t\t\t";
                        }
                        // line 767
                        echo "      \t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 767)) {
                            // line 768
                            echo "      \t\t\t\t\t\t<small class=\"font-weight-light text-muted d-block\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 768);
                            echo "</small>
      \t\t\t\t\t\t";
                        }
                        // line 770
                        echo "      \t\t\t\t\t</div>
      \t\t\t\t\t";
                    }
                    // line 772
                    echo "                ";
                }
                // line 773
                echo "

                ";
                // line 775
                if (($context["related_product_buttons"] ?? null)) {
                    // line 776
                    echo "                <div class=\"btn-group ";
                    if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                        echo "d-flex d-md-inline-flex";
                    }
                    echo " dropup mt-2\">

                  ";
                    // line 778
                    if ( !($context["catalog_mode"] ?? null)) {
                        // line 779
                        echo "    \t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 779);
                        echo "');\" ";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 779) <= 0) && ($context["disable_btn_status"] ?? null))) {
                            echo "disabled";
                        }
                        echo ">
    \t\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
    \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.21 9l-4.38-6.56c-.19-.28-.51-.42-.83-.42-.32 0-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1h-4.79zM9 9l3-4.4L15 9H9zm3 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z\"/>
    \t\t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t<span class=\"text-truncate mx-2 ";
                        // line 787
                        if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                            echo "d-none d-md-block";
                        }
                        echo "\">";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 787) <= 0) && ($context["disable_btn_status"] ?? null))) {
                            echo ($context["disable_btn_text"] ?? null);
                        } else {
                            echo ($context["button_cart"] ?? null);
                        }
                        echo "</span>
    \t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t</button>
                  ";
                    } else {
                        // line 792
                        echo "                  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 792);
                        echo "\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\">
                    <span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
    \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t\t<path d=\"M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z\"/>
    \t\t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t<span class=\"text-truncate mx-2 ";
                        // line 800
                        if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                            echo "d-none d-md-block";
                        }
                        echo "\">Подробнее</span>
    \t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t</span>
                  </a>
                  ";
                    }
                    // line 805
                    echo "
    \t\t\t\t\t\t\t";
                    // line 806
                    if ((($context["fastorder_status"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                        // line 807
                        echo "    \t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\"  title=\"";
                        echo ($context["g_text_fastorder"] ?? null);
                        echo "\" onclick=\"ft_fastorder('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 807);
                        echo "')\" ";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 807) <= 0) && ($context["disable_btn_status"] ?? null))) {
                            echo "disabled";
                        }
                        echo ">
    \t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t<path d=\"M 13 1 L 6 14 L 12 14 L 12 23 L 19 10 L 13 10 L 13 1 z\"></path>
    \t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t";
                    }
                    // line 813
                    echo "    \t\t\t\t\t\t\t";
                    if (($context["qview_status"] ?? null)) {
                        // line 814
                        echo "    \t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\" title=\"";
                        echo ($context["g_text_qview"] ?? null);
                        echo "\" onclick=\"ft_qview('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 814);
                        echo "')\">
    \t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t<path d=\"M12,6.5c3.79,0,7.17,2.13,8.82,5.5c-1.65,3.37-5.02,5.5-8.82,5.5S4.83,15.37,3.18,12C4.83,8.63,8.21,6.5,12,6.5 M12,4.5 C7,4.5,2.73,7.61,1,12c1.73,4.39,6,7.5,11,7.5s9.27-3.11,11-7.5C21.27,7.61,17,4.5,12,4.5L12,4.5z\"/><path d=\"M12,9.5c1.38,0,2.5,1.12,2.5,2.5s-1.12,2.5-2.5,2.5S9.5,13.38,9.5,12S10.62,9.5,12,9.5 M12,7.5c-2.48,0-4.5,2.02-4.5,4.5 s2.02,4.5,4.5,4.5s4.5-2.02,4.5-4.5S14.48,7.5,12,7.5L12,7.5z\"/>
    \t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t";
                    }
                    // line 820
                    echo "
                  ";
                    // line 821
                    if ((($context["wishlist_status"] ?? null) || ($context["compare_status"] ?? null))) {
                        // line 822
                        echo "    \t\t\t\t\t\t\t<div class=\"btn-group dropdown dropup position-static\">
    \t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right w-100\" >
                      ";
                        // line 824
                        if (($context["wishlist_status"] ?? null)) {
                            // line 825
                            echo "    \t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 825);
                            echo "');return false\">
    \t\t\t\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center flex-nowrap\">
    \t\t\t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z\"/>
    \t\t\t\t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t<span class=\"col text-truncate\">";
                            // line 832
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span>
    \t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t</a>
                      ";
                        }
                        // line 836
                        echo "                      ";
                        if (($context["compare_status"] ?? null)) {
                            // line 837
                            echo "    \t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 837);
                            echo "');return false\">
    \t\t\t\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center flex-nowrap\">
    \t\t\t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M 12 4 A 2 2 0 0 0 10.269531 5 L 5 5 L 2 5 L 2 7 L 4 7 L 0 15 C 0 17.761 2.239 20 5 20 C 7.761 20 10 17.761 10 15 L 6 7 L 10.271484 7 A 2 2 0 0 0 12 8 A 2 2 0 0 0 13.730469 7 L 18 7 L 14 15 C 14 17.761 16.239 20 19 20 C 21.761 20 24 17.761 24 15 L 20 7 L 22 7 L 22 5 L 13.728516 5 A 2 2 0 0 0 12 4 z M 5 9.0214844 L 7.9882812 15 L 2.0117188 15 L 5 9.0214844 z M 19 9.0214844 L 21.988281 15 L 16.011719 15 L 19 9.0214844 z\"/>
    \t\t\t\t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t<span class=\"col text-truncate\">";
                            // line 844
                            echo ($context["button_compare"] ?? null);
                            echo "</span>
    \t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t</a>
                      ";
                        }
                        // line 848
                        echo "    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1 px-md-0\" data-toggle=\"dropdown\" data-flip=\"false\" aria-label=\"more\">
    \t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t<path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
    \t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t</div>
                  ";
                    }
                    // line 856
                    echo "    \t\t\t\t\t\t</div>
                ";
                }
                // line 858
                echo "              </div>

            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 862
            echo "          </div>
        </div>
        <div class=\"owl-pagination text-center text-sm-left px-2 py-2\">
          <button class=\"btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0 mr-0\"><span></span></button>
        </div>

      </div>
\t\t\t<hr class=\"d-md-none\">
\t\t\t";
        }
        // line 871
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 873
        if (($context["column_left"] ?? null)) {
            // line 874
            echo "\t\t\t\t<div class=\"col-lg-3 col-aside\">
\t\t\t\t\t";
            // line 875
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 878
        echo "\t\t\t\t<div class=\"col\">
\t\t\t\t\t<ul class=\"nav nav-tabs justify-content-between justify-content-lg-start align-items-end mb-4\">
\t\t\t\t\t\t<li class=\"nav-item flex-fill mr-lg-2\">
\t\t\t\t\t\t\t<a class=\"nav-link active d-flex justify-content-center\" href=\"#tab-description\" data-toggle=\"tab\">
                <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span class=\"text-dark ml-2 d-none d-lg-block\">";
        // line 885
        echo ($context["tab_description"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 888
        if (($context["attribute_groups"] ?? null)) {
            // line 889
            echo "\t\t\t\t\t\t<li class=\"nav-item flex-fill mr-lg-2\">
\t\t\t\t\t\t\t<a class=\"nav-link d-flex justify-content-center\" href=\"#tab-specification\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M11 7h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6zM7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zM20.1 3H3.9c-.5 0-.9.4-.9.9v16.2c0 .4.4.9.9.9h16.2c.4 0 .9-.5.9-.9V3.9c0-.5-.5-.9-.9-.9zM19 19H5V5h14v14z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span class=\"text-dark ml-2 d-none d-lg-block\">";
            // line 894
            echo ($context["tab_attribute"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 898
        echo "            ";
        if (($context["extra_tab_status"] ?? null)) {
            // line 899
            echo "\t\t\t\t\t\t<li class=\"nav-item flex-fill mr-lg-2\">
\t\t\t\t\t\t\t<a class=\"nav-link d-flex justify-content-center\" href=\"#tab-extra\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span class=\"text-dark ml-2 d-none d-lg-block\">";
            // line 904
            echo ($context["extra_tab_heading"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 908
        echo "\t\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 909
            echo "\t\t\t\t\t\t<li class=\"nav-item flex-fill mr-lg-2\">
\t\t\t\t\t\t\t<a class=\"nav-link d-flex justify-content-center\" href=\"#tab-review\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM20 4v13.17L18.83 16H4V4h16zM6 12h12v2H6zm0-3h12v2H6zm0-3h12v2H6z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<span class=\"text-dark ml-2 d-none d-lg-block\">";
            // line 914
            echo ($context["tab_review"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 918
        echo "\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane mb-3 px-1 active\" id=\"tab-description\" itemprop=\"description\">
              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 924
        echo ($context["description"] ?? null);
        echo "
                </div>
                ";
        // line 926
        if (($context["ft_additional_position5"] ?? null)) {
            // line 927
            echo "                <div class=\"col-12 col-xl-3 col-lg-4 col-md-5\">
                  ";
            // line 928
            echo ($context["ft_additional_position5"] ?? null);
            echo "
                </div>
                ";
        }
        // line 931
        echo "              </div>
            </div>

\t\t\t\t\t\t";
        // line 934
        if (($context["attribute_groups"] ?? null)) {
            // line 935
            echo "\t\t\t\t\t\t<div class=\"tab-pane mb-3\" id=\"tab-specification\">
\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t";
            // line 937
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 938
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\" class=\"border-bottom bg-light\"><strong>";
                // line 939
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 939);
                echo "</strong></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                // line 941
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 941));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 942
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 943
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 943);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 944
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 944);
                    echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 947
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 948
            echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 951
        echo "
            ";
        // line 952
        if (($context["extra_tab_status"] ?? null)) {
            // line 953
            echo "            <div class=\"tab-pane px-1 mb-3\" id=\"tab-extra\">";
            echo ($context["extra_tab_content"] ?? null);
            echo "</div>
            ";
        }
        // line 955
        echo "
\t\t\t\t\t\t";
        // line 956
        if (($context["review_status"] ?? null)) {
            // line 957
            echo "\t\t\t\t\t\t<div class=\"tab-pane mb-3\" id=\"tab-review\">
              <button type=\"button\" class=\"btn btn-lg btn-block border btn-light mb-3 text-muted\" data-toggle=\"collapse\" data-target=\"#collapse-review\">
                ";
            // line 959
            echo ($context["text_write"] ?? null);
            echo "
              </button>
              <div class=\"collapse\" id=\"collapse-review\">
                <div class=\"card overflow-hidden mb-3\">
                  <div class=\"card-header px-3\">
                    <div class=\"h6 card-title m-0\">
                      <div class=\"row no-gutters align-items-center\">
                        <div class=\"col-auto\">
                          <svg class=\"d-block ft-icon-24 text-gray-500 m-0 mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17l-.59.59-.58.58V4h16v12zm-9.5-2H18v-2h-5.5zm3.86-5.87c.2-.2.2-.51 0-.71l-1.77-1.77c-.2-.2-.51-.2-.71 0L6 11.53V14h2.47l5.89-5.87z\"/>
                          </svg>
                        </div>
                        <div class=\"col-auto\">
                          ";
            // line 972
            echo ($context["text_write"] ?? null);
            echo "
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"card-body bg-light p-3\">
                    <form class=\"form-horizontal\" id=\"form-review\">
                      ";
            // line 979
            if (($context["review_guest"] ?? null)) {
                // line 980
                echo "                      <div class=\"form-group required\">
                        <input type=\"text\" name=\"name\" value=\"";
                // line 981
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo " *\" />
                      </div>
                      <div class=\"form-group required\">
                        <textarea name=\"text\" rows=\"4\" id=\"input-review\" class=\"form-control\" placeholder=\"";
                // line 984
                echo ($context["entry_review"] ?? null);
                echo " *\"></textarea>
                        <div class=\"help-block d-none\">";
                // line 985
                echo ($context["text_note"] ?? null);
                echo "</div>
                      </div>
                      <div class=\"form-group required mb-0\">
                        <div class=\"row no-gutters align-items-center\">
                          <div class=\"";
                // line 989
                if (($context["captcha"] ?? null)) {
                    echo "col-12 col-md";
                } else {
                    echo "col";
                }
                echo "\">
                            <div class=\"rating-selection d-inline-flex align-middle\">
                              <label class=\"d-block text-gray-400 m-0 cursor-pointer\" for=\"star-1\" title=\"1\">
                                <svg class=\"d-block ft-icon-24 m-0 \" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                  <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                </svg>
                              </label>
                              <label class=\"d-block text-gray-400 m-0 cursor-pointer\" for=\"star-2\" title=\"2\">
                                <svg class=\"d-block ft-icon-24 m-0 \" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                  <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                </svg>
                              </label>
                              <label class=\"d-block text-gray-400 m-0 cursor-pointer\" for=\"star-3\" title=\"3\">
                                <svg class=\"d-block ft-icon-24 m-0 \" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                  <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                </svg>
                              </label>
                              <label class=\"d-block text-gray-400 m-0 cursor-pointer\" for=\"star-4\" title=\"4\">
                                <svg class=\"d-block ft-icon-24 m-0 \" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                  <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                </svg>
                              </label>
                              <label class=\"d-block text-gray-400 m-0 cursor-pointer\" for=\"star-5\" title=\"5\">
                                <svg class=\"d-block ft-icon-24 m-0 \" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                  <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                                </svg>
                              </label>
                              <input class=\"d-none\" id=\"star-1\" type=\"radio\" name=\"rating\" value=\"1\">
                              <input class=\"d-none\" id=\"star-2\" type=\"radio\" name=\"rating\" value=\"2\">
                              <input class=\"d-none\" id=\"star-3\" type=\"radio\" name=\"rating\" value=\"3\">
                              <input class=\"d-none\" id=\"star-4\" type=\"radio\" name=\"rating\" value=\"4\">
                              <input class=\"d-none\" id=\"star-5\" type=\"radio\" name=\"rating\" value=\"5\">
                              <script>
                                var stars = document.querySelectorAll('.rating-selection label'),
                                    inputs = document.querySelectorAll('.rating-selection input');

                                if (stars != null) {
                                  stars.forEach(function(star, i, stars) {
                                    star.addEventListener('mouseover', function() {
                                      for (k = 0; k <= i; k++) { stars[k].classList.add('hover') }
                                    }, false);
                                    star.addEventListener('mouseout', function() {
                                      for (k = 0; k <= i; k++) { stars[k].classList.remove('hover') }
                                    }, false);
                                  });
                                }

                                if (stars != null) {
                                  inputs.forEach(function(input, i, inputs) {
                                    input.addEventListener('change', function() {
                                      stars.forEach(function(star, i) { star.classList.remove('active') });
                                      for (k = 0; k <= i; k++) { stars[k].classList.add('active') };
                                    }, false);
                                  });
                                }
                              </script>
                            </div>
                          </div>
                          ";
                // line 1047
                if (($context["captcha"] ?? null)) {
                    // line 1048
                    echo "                          <div class=\"col-12 col-md-auto mr-md-3 my-3 my-md-0\">";
                    echo ($context["captcha"] ?? null);
                    echo "</div>
                          ";
                }
                // line 1050
                echo "                          <div class=\"col-auto\">
                            <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 1051
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary pr-4\">
                              <span class=\"row no-gutters align-items-center\">
                                <span class=\"col-auto\">
                                  <svg class=\"d-block ft-icon-18 text-white mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M2.01 21L23 12 2.01 3 2 10l15 2-15 2z\"/>
                                  </svg>
                                </span>
                                <span class=\"col-auto\">
                                  ";
                // line 1059
                echo ($context["button_continue"] ?? null);
                echo "
                                </span>
                              </span>
                            </button>
                          </div>
                        </div>
                      </div>
                      ";
            } else {
                // line 1067
                echo "                      ";
                echo ($context["text_login"] ?? null);
                echo "
                      ";
            }
            // line 1069
            echo "                    </form>
                  </div>
                </div>
              </div>

\t\t\t\t\t\t\t<div id=\"review\">";
            // line 1074
            echo ($context["reviews_array"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 1077
        echo "          </div>

\t\t\t\t\t";
        // line 1079
        if (($context["tags"] ?? null)) {
            // line 1080
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 1081
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t\t";
            // line 1082
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 1083
                echo "\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 1084
                    echo "\t\t\t\t\t\t<a class=\"text-danger\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 1084);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["tags"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 1084);
                    echo "</a>,
\t\t\t\t\t\t";
                } else {
                    // line 1086
                    echo "\t\t\t\t\t\t<a class=\"text-danger\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["tags"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 1086);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["tags"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 1086);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 1088
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1089
            echo "\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        // line 1091
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 1094
        if ((($context["products"] ?? null) && ($context["related_product_position"] ?? null))) {
            // line 1095
            echo "\t\t\t<hr class=\"d-md-none\">
      <div id=\"related-products\" class=\"mb-3\">

        <div class=\"pt-2 mb-3\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"h5 mb-0 ml-1\">";
            // line 1101
            echo ($context["text_related"] ?? null);
            echo "</div>
            </div>
            <div class=\"col-auto\">
              <button class=\"btn btn-prev p-0 rounded-pill\">
                <svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z\"></path>
                </svg>
              </button>
              <button class=\"btn btn-next p-0 rounded-pill\">
                <svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div  class=\"m-n1 m-sm-n2\">
          <!--noindex-->
          <!--googleoff: all-->
          <div class=\"carousel-placeholder d-flex\">
            <script>

              items = 1;
              breakpoints = [];
              base_width = document.querySelector('#related-products').offsetWidth;

              breakpoints[0] = { ww: 600, count: 2 };
              breakpoints[1] = { ww: 860, count: 3 };
              breakpoints[2] = { ww: 1110, count: 4 };
              breakpoints[3] = { ww: 9999, count: 5 };

              breakpoints.sort((a, b) => a.ww > b.ww ? 1 : -1);
              breakpoints.forEach(function(breakpoint, i, breakpoints) {

                prev_bp_vw = breakpoints[i - 1] != null ? breakpoints[i - 1].ww : 0;

                if (prev_bp_vw <= base_width && breakpoint.ww > base_width) {
                  items = breakpoint.count;
                }
              });

            </script>
            <div class=\"item d-flex\">
              <script>

                item = document.querySelector('#related-products .carousel-placeholder .item');
                item.style.width = items > 0 ? 100 / items + '%' : 100 + '%';

              </script>
              <div class=\"product-item border rounded w-100 bg-white overflow-hidden m-1 m-sm-2 d-flex flex-column\">
                <div class=\"w-100 text-center px-2 px-sm-3 pt-2 pb-2\">
        \t\t\t\t\t<div class=\"d-inline-block position-relative\">
        \t\t\t\t\t\t<svg class=\"d-block img-fluid\" width=\"";
            // line 1154
            echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["products"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "img_width", [], "any", false, false, false, 1154);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["products"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null), "img_height", [], "any", false, false, false, 1154);
            echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
        \t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
        \t\t\t\t\t\t\t<div class=\"spinner-border text-gray-300\"></div>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"w-100 px-2 px-sm-3 pt-2 pb-1\">
        \t\t\t\t\t<div class=\"product-name\">
        \t\t\t\t\t\t<span class=\"bg-light\"><span class=\"invisible\" role=\"status\">Loading product name...</span></span>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"w-100 mt-auto px-2 px-sm-3 pb-2 pb-sm-3 pt-0\">
        \t\t\t\t\t<div class=\"price\">
        \t\t\t\t\t\t<div class=\"h6 mb-1\">
        \t\t\t\t\t\t\t<span class=\"d-inline-block\">
        \t\t\t\t\t\t\t\t<span class=\"bg-light \"><span class=\"invisible\" role=\"status\">Load...</span></span>
        \t\t\t\t\t\t\t</span>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t";
            // line 1172
            if (twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["products"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null), "tax", [], "any", false, false, false, 1172)) {
                // line 1173
                echo "        \t\t\t\t\t\t<small class=\"font-weight-light text-muted d-block\">
        \t\t\t\t\t\t\t<span class=\"bg-light\"><span class=\"invisible\" role=\"status\">";
                // line 1174
                echo ($context["text_tax"] ?? null);
                echo " Loading...</span></span>
        \t\t\t\t\t\t</small>
        \t\t\t\t\t\t";
            }
            // line 1177
            echo "        \t\t\t\t\t</div>
                  ";
            // line 1178
            if (($context["related_product_buttons"] ?? null)) {
                // line 1179
                echo "        \t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 pl-2 pr-1 mt-2\" disabled>
        \t\t\t\t\t\t<span class=\"invisible\"><span class=\"invisible\" role=\"status\">Loading...</span></span>
        \t\t\t\t\t</button>
                  ";
            }
            // line 1183
            echo "        \t\t\t\t</div>
              </div>
            </div>
            <script>
              for(let i = 1; i < items && i < ";
            // line 1187
            echo twig_length_filter($this->env, ($context["products"] ?? null));
            echo "; i++)  {
                clone = item.cloneNode(true);
                item.parentNode.appendChild(clone);
              }

              items = null;
              item = null;
              clone = null;
              breakpoints = null;
              base_width = null;
              prev_bp_vw = null;

            </script>
          </div>
          <!--googleon: all-->
          <!--/noindex-->

          <div class=\"owl-carousel\">
            ";
            // line 1205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 1206
                echo "            <div class=\"product-item border rounded w-100 bg-white overflow-hidden m-1 m-sm-2 d-flex flex-column\">
              <div class=\"image w-100 position-relative text-center px-2 px-sm-3 pt-2 pb-2\">
                <a href=\"";
                // line 1208
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 1208);
                echo "\">
                  <div class=\"d-inline-block position-relative\">
                    <svg class=\"d-block img-fluid\" width=\"";
                // line 1210
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_width", [], "any", false, false, false, 1210);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_height", [], "any", false, false, false, 1210);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                    ";
                // line 1211
                if (($context["catalog_page_lazy"] ?? null)) {
                    // line 1212
                    echo "                    <picture>
                      ";
                    // line 1213
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 1213)) {
                        // line 1214
                        echo "                      <source class=\"owl-lazy\" data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 1214);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 1214);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 1214);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 1214);
                        echo " 4x\" srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_holder", [], "any", false, false, false, 1214);
                        echo "\">
                      ";
                    }
                    // line 1216
                    echo "                      <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_holder", [], "any", false, false, false, 1216);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 1216);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 1216);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 1216);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto owl-lazy\">
                    </picture>
                    <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
                      <div class=\"spinner-border text-gray-300\"></div>
                    </div>
                    ";
                } else {
                    // line 1222
                    echo "                    <picture>
                      ";
                    // line 1223
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 1223)) {
                        // line 1224
                        echo "                      <source srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 1224);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 1224);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 1224);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 1224);
                        echo " 4x\">
                      ";
                    }
                    // line 1226
                    echo "                      <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 1226);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 1226);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 1226);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto\">
                    </picture>
                    ";
                }
                // line 1229
                echo "                  </div>
                </a>
                ";
                // line 1231
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 1231)) {
                    // line 1232
                    echo "                <ul class=\"list-unstyled position-absolute t-0 l-0 ml-3 mt-2 text-left\">
                  ";
                    // line 1233
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 1233));
                    foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                        // line 1234
                        echo "                  <li><span class=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "class", [], "any", false, false, false, 1234);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "text", [], "any", false, false, false, 1234);
                        echo "</span></li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1236
                    echo "                </ul>
                ";
                }
                // line 1238
                echo "              </div>
              <div class=\"w-100 px-2 px-sm-3 pt-2 pb-1\">
      \t\t\t\t\t<div class=\"product-name\">
      \t\t\t\t\t\t<a href=\"";
                // line 1241
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 1241);
                echo "\" class=\"text-dark h6 font-weight-normal line-clamp-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 1241);
                echo "</a>
      \t\t\t\t\t</div>
      \t\t\t\t</div>

              <div class=\"w-100 mt-auto px-2 px-sm-3 pb-2 pb-sm-3 pt-0\">
                ";
                // line 1246
                if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                    // line 1247
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 1247)) {
                        // line 1248
                        echo "      \t\t\t\t\t<div class=\"price\">
      \t\t\t\t\t\t";
                        // line 1249
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 1249)) {
                            // line 1250
                            echo "      \t\t\t\t\t\t<div class=\"h6 mb-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 1250);
                            echo "</div>
      \t\t\t\t\t\t";
                        } else {
                            // line 1252
                            echo "      \t\t\t\t\t\t<div class=\"h6 mb-1\">
      \t\t\t\t\t\t\t<s class=\"d-inline-block text-danger font-weight-light\">";
                            // line 1253
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 1253);
                            echo "</s>
      \t\t\t\t\t\t\t<span class=\"d-inline-block\">";
                            // line 1254
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 1254);
                            echo "</span>
      \t\t\t\t\t\t</div>
      \t\t\t\t\t\t";
                        }
                        // line 1257
                        echo "      \t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 1257)) {
                            // line 1258
                            echo "      \t\t\t\t\t\t<small class=\"font-weight-light text-muted d-block\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 1258);
                            echo "</small>
      \t\t\t\t\t\t";
                        }
                        // line 1260
                        echo "      \t\t\t\t\t</div>
      \t\t\t\t\t";
                    }
                    // line 1262
                    echo "                ";
                }
                // line 1263
                echo "

                ";
                // line 1265
                if (($context["related_product_buttons"] ?? null)) {
                    // line 1266
                    echo "                <div class=\"btn-group ";
                    if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                        echo "d-flex d-md-inline-flex";
                    }
                    echo " dropup mt-2\">

                  ";
                    // line 1268
                    if ( !($context["catalog_mode"] ?? null)) {
                        // line 1269
                        echo "    \t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 1269);
                        echo "');\" ";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 1269) <= 0) && ($context["disable_btn_status"] ?? null))) {
                            echo "disabled";
                        }
                        echo ">
    \t\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
    \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.21 9l-4.38-6.56c-.19-.28-.51-.42-.83-.42-.32 0-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1h-4.79zM9 9l3-4.4L15 9H9zm3 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z\"/>
    \t\t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t<span class=\"text-truncate mx-2 ";
                        // line 1277
                        if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                            echo "d-none d-md-block";
                        }
                        echo "\">";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 1277) <= 0) && ($context["disable_btn_status"] ?? null))) {
                            echo ($context["disable_btn_text"] ?? null);
                        } else {
                            echo ($context["button_cart"] ?? null);
                        }
                        echo "</span>
    \t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t</button>
                  ";
                    } else {
                        // line 1282
                        echo "                  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 1282);
                        echo "\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\">
                    <span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
    \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t\t<path d=\"M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z\"/>
    \t\t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t<span class=\"text-truncate mx-2 ";
                        // line 1290
                        if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                            echo "d-none d-md-block";
                        }
                        echo "\">Подробнее</span>
    \t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t</span>
                  </a>
                  ";
                    }
                    // line 1295
                    echo "
    \t\t\t\t\t\t\t";
                    // line 1296
                    if ((($context["fastorder_status"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                        // line 1297
                        echo "    \t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\"  title=\"";
                        echo ($context["g_text_fastorder"] ?? null);
                        echo "\" onclick=\"ft_fastorder('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 1297);
                        echo "')\" ";
                        if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 1297) <= 0) && ($context["disable_btn_status"] ?? null))) {
                            echo "disabled";
                        }
                        echo ">
    \t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t<path d=\"M 13 1 L 6 14 L 12 14 L 12 23 L 19 10 L 13 10 L 13 1 z\"></path>
    \t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t";
                    }
                    // line 1303
                    echo "    \t\t\t\t\t\t\t";
                    if (($context["qview_status"] ?? null)) {
                        // line 1304
                        echo "    \t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\" title=\"";
                        echo ($context["g_text_qview"] ?? null);
                        echo "\" onclick=\"ft_qview('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 1304);
                        echo "')\">
    \t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t<path d=\"M12,6.5c3.79,0,7.17,2.13,8.82,5.5c-1.65,3.37-5.02,5.5-8.82,5.5S4.83,15.37,3.18,12C4.83,8.63,8.21,6.5,12,6.5 M12,4.5 C7,4.5,2.73,7.61,1,12c1.73,4.39,6,7.5,11,7.5s9.27-3.11,11-7.5C21.27,7.61,17,4.5,12,4.5L12,4.5z\"/><path d=\"M12,9.5c1.38,0,2.5,1.12,2.5,2.5s-1.12,2.5-2.5,2.5S9.5,13.38,9.5,12S10.62,9.5,12,9.5 M12,7.5c-2.48,0-4.5,2.02-4.5,4.5 s2.02,4.5,4.5,4.5s4.5-2.02,4.5-4.5S14.48,7.5,12,7.5L12,7.5z\"/>
    \t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t";
                    }
                    // line 1310
                    echo "
                  ";
                    // line 1311
                    if ((($context["wishlist_status"] ?? null) || ($context["compare_status"] ?? null))) {
                        // line 1312
                        echo "    \t\t\t\t\t\t\t<div class=\"btn-group dropdown dropup position-static\">
    \t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right w-100\" >
                      ";
                        // line 1314
                        if (($context["wishlist_status"] ?? null)) {
                            // line 1315
                            echo "    \t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 1315);
                            echo "');return false\">
    \t\t\t\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center flex-nowrap\">
    \t\t\t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z\"/>
    \t\t\t\t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t<span class=\"col text-truncate\">";
                            // line 1322
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span>
    \t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t</a>
                      ";
                        }
                        // line 1326
                        echo "                      ";
                        if (($context["compare_status"] ?? null)) {
                            // line 1327
                            echo "    \t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 1327);
                            echo "');return false\">
    \t\t\t\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center flex-nowrap\">
    \t\t\t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
    \t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M 12 4 A 2 2 0 0 0 10.269531 5 L 5 5 L 2 5 L 2 7 L 4 7 L 0 15 C 0 17.761 2.239 20 5 20 C 7.761 20 10 17.761 10 15 L 6 7 L 10.271484 7 A 2 2 0 0 0 12 8 A 2 2 0 0 0 13.730469 7 L 18 7 L 14 15 C 14 17.761 16.239 20 19 20 C 21.761 20 24 17.761 24 15 L 20 7 L 22 7 L 22 5 L 13.728516 5 A 2 2 0 0 0 12 4 z M 5 9.0214844 L 7.9882812 15 L 2.0117188 15 L 5 9.0214844 z M 19 9.0214844 L 21.988281 15 L 16.011719 15 L 19 9.0214844 z\"/>
    \t\t\t\t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t<span class=\"col text-truncate\">";
                            // line 1334
                            echo ($context["button_compare"] ?? null);
                            echo "</span>
    \t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t</a>
                      ";
                        }
                        // line 1338
                        echo "    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1 px-md-0\" data-toggle=\"dropdown\" data-flip=\"false\" aria-label=\"more\">
    \t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t\t\t\t\t\t<path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
    \t\t\t\t\t\t\t\t\t</svg>
    \t\t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t</div>
                  ";
                    }
                    // line 1346
                    echo "    \t\t\t\t\t\t</div>
                ";
                }
                // line 1348
                echo "              </div>

            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1352
            echo "          </div>
        </div>
        <div class=\"owl-pagination text-center text-sm-left px-2 py-2\">
          <button class=\"btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0 mr-0\"><span></span></button>
        </div>

      </div>
\t\t\t";
        }
        // line 1360
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
  </div>
</div>


<script>
\t\$('.rat-star').hover(function () {
\t\t\$(this).prevAll('.rat-star').addClass('active');
\t\t\$(this).addClass('active');
\t},function () {
\t\t\$(this).prevAll('.rat-star').removeClass('active');
\t\t\$(this).removeClass('active');
\t});

\t\$('.rat-star').click(function(){
\t\t\$('.rat-star').each(function(){
\t\t\t\$(this).removeClass('checked');
\t\t\t\$(this).prevAll('.rat-star').removeClass('checked');
\t\t});

\t\t\$(this).addClass('checked');
\t\t\$(this).prevAll('.rat-star').addClass('checked');
\t});


  function startSwp() {

    var owl_product_gallery = \$('#product-gallery .owl-carousel');

    owl_product_gallery.owlCarousel({

      animateOut: 'fadeOut',
      mouseDrag: false,
      touchDrag: true,
      loop: false,
      items: 1,
      nav: false,

      ";
        // line 1399
        if (($context["catalog_page_lazy"] ?? null)) {
            // line 1400
            echo "      lazyLoad: true,
      ";
        } else {
            // line 1402
            echo "      lazyLoad: false,
      ";
        }
        // line 1404
        echo "
      dots: false,
\t\t\tdotsContainer: '#product-gallery .owl-pagination',
      dotClass: 'btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0',

      autoplay: false,
      // URLhashListener:false,
      // startPosition: 'URLHash',
      onLoadedLazy: function(e) { e.element.parent().parent().find('.lazy-spinner').remove()},
      onInitialized: function(e) { e.target.parentNode.querySelector('.gallery-placeholder').remove() },
      onTranslate: function(e) {

        let images = e.target.parentNode.parentNode.querySelectorAll('.additional-images a');
        images.forEach(function(img, i) { img.classList.remove('border-secondary') });

        let active = e.target.parentNode.parentNode.querySelector('[data-index=\\\"' + e.item.index + '\\\"]');
        if (active != null)  active.classList.add('border-secondary');

      }
    });
  };

\tfunction startRelSwp() {

    var owl_related_products = \$('#related-products .owl-carousel');

    owl_related_products.owlCarousel({
      mouseDrag: false,
      touchDrag: true,
      loop: false,
      rewind: true,
      items: 1,
      responsiveBaseElement: '#related-products',
      responsive:{
        0:\t\t{items: 2},
        600:\t{items: 3},
        860:\t{items: 4},
        1110:\t{items: 5},
        1300:\t{items: 6},
      },

      stageClass: 'owl-stage d-flex justify-content-between',
      itemClass: 'owl-item d-flex float-none',

      nav: false,
      dots: true,
      dotsContainer: '#related-products  .owl-pagination',
      dotClass: 'btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0',

      ";
        // line 1453
        if (($context["catalog_page_lazy"] ?? null)) {
            // line 1454
            echo "      lazyLoad: true,
      ";
        } else {
            // line 1456
            echo "      lazyLoad: false,
      ";
        }
        // line 1458
        echo "
      lazyLoadEager: 0,

      onLoadedLazy: function(e) { e.element.parent().parent().find('.lazy-spinner').remove() },
      onInitialized: function(e) { \$(e.target).parent().find('.carousel-placeholder').remove()},
      onRefreshed: function(e) {
        \$(e.target).parent().find('.owl-item').each(function() { this.style.minWidth = this.style.width });
        let arrows = \$('#related-products .btn-prev, #related-products .btn-next ');
        if (e.item.count <= e.page.size) { arrows.attr('disabled','disabled') } else { arrows.removeAttr('disabled') }

      },
    });

    \$('#related-products .btn-prev').click(function() { owl_related_products.trigger('prev.owl.carousel'); });
    \$('#related-products .btn-next').click(function() { owl_related_products.trigger('next.owl.carousel'); });

\t}

\t\$(function () {
    startSwp();
    startRelSwp();
\t});



\tfunction psw_show(index_start) {

\t\tif (\$('.pswp').length < 1) {
\t\t\tpswp_c  = '<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">'
\t\t\tpswp_c += '\t<div class=\"pswp__bg\"></div>'
\t\t\tpswp_c += '\t<div class=\"pswp__scroll-wrap\">'
\t\t\tpswp_c += '\t\t<div class=\"pswp__container\">'
\t\t\tpswp_c += '\t\t\t<div class=\"pswp__item\"></div>'
\t\t\tpswp_c += '\t\t\t<div class=\"pswp__item\"></div>'
\t\t\tpswp_c += '\t\t\t<div class=\"pswp__item\"></div>'
\t\t\tpswp_c += '\t\t</div>'
\t\t\tpswp_c += '\t\t<div class=\"pswp__ui pswp__ui--hidden\">'
\t\t\tpswp_c += '\t\t\t<div class=\"pswp__top-bar\">'
\t\t\tpswp_c += '\t\t\t\t<div class=\"pswp__counter\"></div>'
\t\t\tpswp_c += '\t\t\t\t<button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>'
\t\t\tpswp_c += '\t\t\t\t<button class=\"pswp__button pswp__button--fs\" title=\"Fullscreen\"></button>'
\t\t\tpswp_c += '\t\t\t\t<button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>'
\t\t\tpswp_c += '\t\t\t\t<div class=\"pswp__preloader\">'
\t\t\tpswp_c += '\t\t\t\t\t<div class=\"pswp__preloader__icn\">'
\t\t\tpswp_c += '\t\t\t\t\t\t<div class=\"pswp__preloader__cut\">'
\t\t\tpswp_c += '\t\t\t\t\t\t\t<div class=\"pswp__preloader__donut\"></div>'
\t\t\tpswp_c += '\t\t\t\t\t\t</div>'
\t\t\tpswp_c += '\t\t\t\t\t</div>'
\t\t\tpswp_c += '\t\t\t\t</div>'
\t\t\tpswp_c += '\t\t\t</div>'
\t\t\tpswp_c += '\t\t\t<div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">'
\t\t\tpswp_c += '\t\t\t\t<div class=\"pswp__share-tooltip\"></div>'
\t\t\tpswp_c += '\t\t\t</div>'
\t\t\tpswp_c += '\t\t\t<button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button>'
\t\t\tpswp_c += '\t\t\t<button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\"></button>'
\t\t\tpswp_c += '\t\t\t<div class=\"pswp__caption\">'
\t\t\tpswp_c += '\t\t\t\t<div class=\"pswp__caption__center\"></div>'
\t\t\tpswp_c += '\t\t\t</div>'
\t\t\tpswp_c += '\t\t</div>'
\t\t\tpswp_c += '\t</div>'
\t\t\tpswp_c += '</div>';
\t\t\t\$('body').append(pswp_c);
\t\t}

\t\tvar pswpElement = document.querySelectorAll('.pswp')[0];

\t\tvar items = [

\t\t\t\t";
        // line 1526
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 1527
            echo "\t\t\t\t";
            if (($context["thumb"] ?? null)) {
                // line 1528
                echo "\t\t\t\t{
\t\t\t\t\tsrc: '";
                // line 1529
                echo ($context["popup"] ?? null);
                echo "',
\t\t\t\t\tw: ";
                // line 1530
                echo ($context["popup_width"] ?? null);
                echo ",
\t\t\t\t\th: ";
                // line 1531
                echo ($context["popup_height"] ?? null);
                echo "
\t\t\t\t},
\t\t\t\t";
            }
            // line 1534
            echo "\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 1535
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 1536
                    echo "\t\t\t\t{
\t\t\t\t\tsrc: '";
                    // line 1537
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 1537);
                    echo "',
\t\t\t\t\tw: ";
                    // line 1538
                    echo ($context["popup_width"] ?? null);
                    echo ",
\t\t\t\t\th: ";
                    // line 1539
                    echo ($context["popup_height"] ?? null);
                    echo "
\t\t\t\t},
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1542
                echo "\t\t\t\t";
            }
            // line 1543
            echo "\t\t\t\t";
        }
        // line 1544
        echo "
\t\t];

\t\tvar options = {
\t\t\tindex: index_start
\t\t};

\t\tfunction psw_construct() {

\t\t\tvar psw_gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

\t\t\tpsw_gallery.init();

\t\t\t\$('body').addClass('psw-open');

\t\t\tpsw_gallery.listen('destroy', function() {
\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\$('body').removeClass('psw-open');
\t\t\t\t}, 100);
\t\t\t});

\t\t}

\t\tif (typeof PhotoSwipe != 'function'  ) {

\t\t\t\$('.gallery-locker').css({'display':'block'});

\t\t\t\$('head').append('<link rel=\"stylesheet\" href=\"catalog/view/theme/";
        // line 1571
        echo ($context["theme_dir"] ?? null);
        echo "/javascript/plugins/photo-swipe/photoswipe.css\">');
\t\t\t\$('head').append('<link rel=\"stylesheet\" href=\"catalog/view/theme/";
        // line 1572
        echo ($context["theme_dir"] ?? null);
        echo "/javascript/plugins/photo-swipe/default-skin/default-skin.css\">');


\t\t\t\$.getScript(\"catalog/view/theme/";
        // line 1575
        echo ($context["theme_dir"] ?? null);
        echo "/javascript/plugins/photo-swipe/photoswipe.min.js\", function( data, textStatus, jqxhr ) {
\t\t\t\t\$.getScript(\"catalog/view/theme/";
        // line 1576
        echo ($context["theme_dir"] ?? null);
        echo "/javascript/plugins/photo-swipe/photoswipe-ui-default.min.js\", function( data, textStatus, jqxhr ) {
\t\t\t\t\tpsw_construct();
\t\t\t\t\t\$('.gallery-locker').css({'display':'none'});
\t\t\t\t});
\t\t\t});

\t\t} else {
\t\t\tpsw_construct();
\t\t}

\t}

\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\ttype: 'post',
\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#recurring-description').html('');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('select[name=\\'recurring_id\\']').parent().find('.text-danger').remove();

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#recurring-description').html('<small class=\"d-block mt-2 \">'+json['success']+'</small>');
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\t\$('#button-cart').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/frametheme/ft_cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\tloading_text = \$('#button-cart').attr('data-loading');
\t\t\t\t\$('#button-cart').addClass('loading');
\t\t\t\t\$('#button-cart .loading-wrapper').html(loading_text);
\t\t\t\t\$('#button-cart').attr('disabled', 'disabled');
\t\t\t\t\$('.alert-dismissible, #product .text-danger').remove();
\t\t\t\t\$('#product').removeClass('has-error');
\t\t\t\t\$('#product > div').removeClass('option-error');
\t\t\t\t\$('#product .form-control, #product .btn').removeClass('border-danger');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-cart').removeClass('loading');
\t\t\t\t\$('#button-cart .loading-wrapper').html('";
        // line 1625
        echo ($context["button_cart"] ?? null);
        echo "');
\t\t\t\t\$('#button-cart').removeAttr('disabled');
\t\t\t},
\t\t\tsuccess: function(json) {

\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\telement.addClass('border-danger');
\t\t\t\t\t\t\t\telement.parent().find('button').addClass('border-danger');
\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\"><small>' + json['error']['option'][i] + '</small></div>');
\t\t\t\t\t\t\t\telement.parent().parent().parent().addClass('option-error');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\telement.addClass('border-danger');
\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\"><small>' + json['error']['option'][i] + '</small></div>');
\t\t\t\t\t\t\t\telement.parent().parent().addClass('option-error');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').addClass('border-danger');
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\"><small>' + json['error']['recurring'] + '</small></div>');
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').parent().parent().addClass('option-error');
\t\t\t\t\t}

\t\t\t\t}

\t\t\t\tif (json['success']) {

          \$('#ft_popup_cart .alert').remove();
\t\t\t\t\t\$('#ft_popup_cart').modal('show');

\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=extension/module/frametheme/ft_cart/info',
\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\tloading_text = \$('#ft_cart > button').attr('data-loading');
\t\t\t\t\t\t\t\t\$('#ft_cart').addClass('loading');
\t\t\t\t\t\t\t\t\$('#ft_cart > button').attr('disabled', 'disabled');
\t\t\t\t\t\t\t\t\$('#ft_cart > button #ft_cart_total').html('<span class=\"loading-wrapper\">' + loading_text + '</span>');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\$('#ft_cart').removeClass('loading');
\t\t\t\t\t\t\t\t\$('#ft_cart > button').removeAttr('disabled');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\t\tvar data_alert \t= '<div class=\"alert alert-light mt-n3 mx-n3 px-3 border-bottom\">';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t'<div class=\"row no-gutters\">';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t\t'<div class=\"col-auto\">';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t\t\t'<i class=\"fa fa-fw fa-check mr-2\"></i>';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t\t'</div>';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t\t'<div class=\"col\">';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t\t\tjson['success'];
\t\t\t\t\t\t\t\t\t\tdata_alert += \t\t'</div>';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t\t'<div class=\"col-auto\">';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t\t\t'<button type=\"button\" class=\"close mr-1\" data-dismiss=\"alert\">&times;</button>';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t\t'</div>';
\t\t\t\t\t\t\t\t\t\tdata_alert += \t'</div>';
\t\t\t\t\t\t\t\t\t\tdata_alert += '</div>';

\t\t\t\t\t\t\t\t\$('#ft_cart .cart-list').before(data_alert);
\t\t\t\t\t\t\t\t\$('#ft_cart > button #ft_cart_total').html(json['total']);
                \$('#ft_m_cart_total').html(\$('#ft_cart > button #ft_cart_total .products > b').text());
\t\t\t\t\t\t\t\t\$('#ft_cart .cart-list').html(\$(data).find('.cart-list').html());
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}, 100);
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$('button[id^=\\'button-upload\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();
\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" class=\"d-none\"><input type=\"file\" name=\"file\" /></form>');
\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\t\tclearInterval(timer);
\t\t}
\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {

\t\t\t\tvar f_path = \$('#form-upload input[name=\\'file\\']').val().split('\\\\'),
\t\t\t\t\t\tf_name = f_path[f_path.length - 1];

\t\t\t\t\$(node).find('.button-text').html(f_name);

\t\t\t\t\$(node).find('.static-icon').html('<svg class=\"d-block ft-icon-18 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M2 12.5C2 9.46 4.46 7 7.5 7H18c2.21 0 4 1.79 4 4s-1.79 4-4 4H9.5C8.12 15 7 13.88 7 12.5S8.12 10 9.5 10H17v2H9.41c-.55 0-.55 1 0 1H18c1.1 0 2-.9 2-2s-.9-2-2-2H7.5C5.57 9 4 10.57 4 12.5S5.57 16 7.5 16H17v2H7.5C4.46 18 2 15.54 2 12.5z\"/></svg>');

\t\t\t\tclearInterval(timer);

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$(node).addClass('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$(node).removeClass('loading');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\"><small>' + json['error'] + '</small></div>');
\t\t\t\t\t\t\t\$(node).find('.button-text').html('";
        // line 1749
        echo ($context["button_upload"] ?? null);
        echo "');
\t\t\t\t\t\t\t\$(node).find('.static-icon').html('<svg class=\"d-block ft-icon-18 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z\"/></svg>');
\t\t\t\t\t\t}
\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\tconsole.log(json['success']);
\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});

\tfunction start_datetimepicker() {
\t\t\$('.date').datetimepicker({
\t\t\tlocale: '";
        // line 1767
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\tpickTime: false
\t\t});

\t\t\$('.datetime').datetimepicker({
\t\t\tlocale: '";
        // line 1772
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\tpickDate: true,
\t\t\tpickTime: true
\t\t});

\t\t\$('.time').datetimepicker({
\t\t\tlocale: '";
        // line 1778
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\tpickDate: false
\t\t});
\t}

\t\$(function () {
\t\tif (\$('.need-dtp').length > 0){
\t\t\tif (typeof jQuery().datetimepicker != 'function'  ) {

\t\t\t\t\$('head').append('<link rel=\"stylesheet\" href=\"catalog/view/theme/";
        // line 1787
        echo ($context["theme_dir"] ?? null);
        echo "/javascript/plugins/dtpicker-b4j3fix/bootstrap-datetimepicker.min.css\">');

\t\t\t\t\$.getScript(\"catalog/view/theme/";
        // line 1789
        echo ($context["theme_dir"] ?? null);
        echo "/javascript/plugins/dtpicker-b4j3fix/moment/moment.min.js\", function( data, textStatus, jqxhr ) {
\t\t\t\t\t\$.getScript(\"catalog/view/theme/";
        // line 1790
        echo ($context["theme_dir"] ?? null);
        echo "/javascript/plugins/dtpicker-b4j3fix/moment/moment-with-locales.min.js\", function( data, textStatus, jqxhr ) {
\t\t\t\t\t\t\$.getScript(\"catalog/view/theme/";
        // line 1791
        echo ($context["theme_dir"] ?? null);
        echo "/javascript/plugins/dtpicker-b4j3fix/bootstrap-datetimepicker.min.js\", function( data, textStatus, jqxhr ) {
\t\t\t\t\t\t\tstart_datetimepicker();
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});

\t\t\t} else {
\t\t\t\tstart_datetimepicker();
\t\t\t}
\t\t}
\t});

\t\$('#review').delegate('.pagination a', 'click', function(e) {
\t\t\te.preventDefault();

\t\t\t\$('#review').load(this.href);

\t});

\t//\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 1810
        echo ($context["product_id"] ?? null);
        echo "');

\t\$('#button-review').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 1814
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-review').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-review').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#collapse-review .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#collapse-review .card-body').html('<div class=\"alert alert-success m-0 alert-dismissible\"> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t}
\t\t\t}
\t\t});
\t});


</script>
";
        // line 1844
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3780 => 1844,  3747 => 1814,  3740 => 1810,  3718 => 1791,  3714 => 1790,  3710 => 1789,  3705 => 1787,  3693 => 1778,  3684 => 1772,  3676 => 1767,  3655 => 1749,  3528 => 1625,  3476 => 1576,  3472 => 1575,  3466 => 1572,  3462 => 1571,  3433 => 1544,  3430 => 1543,  3427 => 1542,  3418 => 1539,  3414 => 1538,  3410 => 1537,  3407 => 1536,  3402 => 1535,  3399 => 1534,  3393 => 1531,  3389 => 1530,  3385 => 1529,  3382 => 1528,  3379 => 1527,  3377 => 1526,  3307 => 1458,  3303 => 1456,  3299 => 1454,  3297 => 1453,  3246 => 1404,  3242 => 1402,  3238 => 1400,  3236 => 1399,  3193 => 1360,  3183 => 1352,  3174 => 1348,  3170 => 1346,  3160 => 1338,  3153 => 1334,  3142 => 1327,  3139 => 1326,  3132 => 1322,  3121 => 1315,  3119 => 1314,  3115 => 1312,  3113 => 1311,  3110 => 1310,  3098 => 1304,  3095 => 1303,  3079 => 1297,  3077 => 1296,  3074 => 1295,  3064 => 1290,  3052 => 1282,  3036 => 1277,  3020 => 1269,  3018 => 1268,  3010 => 1266,  3008 => 1265,  3004 => 1263,  3001 => 1262,  2997 => 1260,  2989 => 1258,  2986 => 1257,  2980 => 1254,  2976 => 1253,  2973 => 1252,  2967 => 1250,  2965 => 1249,  2962 => 1248,  2959 => 1247,  2957 => 1246,  2947 => 1241,  2942 => 1238,  2938 => 1236,  2927 => 1234,  2923 => 1233,  2920 => 1232,  2918 => 1231,  2914 => 1229,  2903 => 1226,  2891 => 1224,  2889 => 1223,  2886 => 1222,  2870 => 1216,  2856 => 1214,  2854 => 1213,  2851 => 1212,  2849 => 1211,  2843 => 1210,  2838 => 1208,  2834 => 1206,  2830 => 1205,  2809 => 1187,  2803 => 1183,  2797 => 1179,  2795 => 1178,  2792 => 1177,  2786 => 1174,  2783 => 1173,  2781 => 1172,  2758 => 1154,  2702 => 1101,  2694 => 1095,  2692 => 1094,  2687 => 1091,  2683 => 1089,  2677 => 1088,  2669 => 1086,  2661 => 1084,  2658 => 1083,  2654 => 1082,  2650 => 1081,  2647 => 1080,  2645 => 1079,  2641 => 1077,  2635 => 1074,  2628 => 1069,  2622 => 1067,  2611 => 1059,  2600 => 1051,  2597 => 1050,  2591 => 1048,  2589 => 1047,  2524 => 989,  2517 => 985,  2513 => 984,  2505 => 981,  2502 => 980,  2500 => 979,  2490 => 972,  2474 => 959,  2470 => 957,  2468 => 956,  2465 => 955,  2459 => 953,  2457 => 952,  2454 => 951,  2449 => 948,  2443 => 947,  2434 => 944,  2430 => 943,  2427 => 942,  2423 => 941,  2418 => 939,  2415 => 938,  2411 => 937,  2407 => 935,  2405 => 934,  2400 => 931,  2394 => 928,  2391 => 927,  2389 => 926,  2384 => 924,  2376 => 918,  2369 => 914,  2362 => 909,  2359 => 908,  2352 => 904,  2345 => 899,  2342 => 898,  2335 => 894,  2328 => 889,  2326 => 888,  2320 => 885,  2311 => 878,  2305 => 875,  2302 => 874,  2300 => 873,  2296 => 871,  2285 => 862,  2276 => 858,  2272 => 856,  2262 => 848,  2255 => 844,  2244 => 837,  2241 => 836,  2234 => 832,  2223 => 825,  2221 => 824,  2217 => 822,  2215 => 821,  2212 => 820,  2200 => 814,  2197 => 813,  2181 => 807,  2179 => 806,  2176 => 805,  2166 => 800,  2154 => 792,  2138 => 787,  2122 => 779,  2120 => 778,  2112 => 776,  2110 => 775,  2106 => 773,  2103 => 772,  2099 => 770,  2091 => 768,  2088 => 767,  2082 => 764,  2078 => 763,  2075 => 762,  2069 => 760,  2067 => 759,  2064 => 758,  2061 => 757,  2059 => 756,  2049 => 751,  2044 => 748,  2040 => 746,  2029 => 744,  2025 => 743,  2022 => 742,  2020 => 741,  2016 => 739,  2005 => 736,  1993 => 734,  1991 => 733,  1988 => 732,  1972 => 726,  1958 => 724,  1956 => 723,  1953 => 722,  1951 => 721,  1945 => 720,  1940 => 718,  1936 => 716,  1932 => 715,  1911 => 697,  1905 => 693,  1899 => 689,  1897 => 688,  1894 => 687,  1888 => 684,  1885 => 683,  1883 => 682,  1860 => 664,  1804 => 611,  1797 => 606,  1795 => 605,  1786 => 600,  1779 => 596,  1775 => 594,  1773 => 593,  1768 => 592,  1761 => 588,  1758 => 587,  1751 => 586,  1744 => 585,  1742 => 584,  1737 => 582,  1730 => 578,  1727 => 577,  1722 => 576,  1717 => 575,  1712 => 574,  1709 => 573,  1706 => 572,  1704 => 571,  1699 => 570,  1693 => 567,  1690 => 566,  1688 => 565,  1684 => 564,  1681 => 563,  1675 => 560,  1671 => 558,  1665 => 555,  1662 => 554,  1656 => 552,  1654 => 551,  1649 => 548,  1633 => 541,  1630 => 540,  1628 => 539,  1613 => 537,  1609 => 536,  1595 => 525,  1590 => 523,  1581 => 517,  1575 => 513,  1568 => 508,  1557 => 506,  1553 => 505,  1549 => 504,  1544 => 502,  1540 => 500,  1537 => 499,  1534 => 498,  1528 => 497,  1509 => 485,  1502 => 483,  1496 => 482,  1493 => 481,  1490 => 480,  1471 => 468,  1464 => 466,  1458 => 465,  1455 => 464,  1452 => 463,  1433 => 451,  1426 => 449,  1420 => 448,  1417 => 447,  1414 => 446,  1405 => 442,  1398 => 438,  1380 => 425,  1375 => 423,  1369 => 422,  1366 => 421,  1363 => 420,  1350 => 416,  1344 => 415,  1338 => 414,  1335 => 413,  1332 => 412,  1315 => 408,  1309 => 407,  1303 => 406,  1300 => 405,  1297 => 404,  1290 => 399,  1284 => 398,  1270 => 394,  1264 => 393,  1259 => 391,  1255 => 390,  1249 => 389,  1243 => 385,  1205 => 380,  1197 => 377,  1192 => 375,  1188 => 374,  1182 => 373,  1176 => 369,  1173 => 368,  1169 => 367,  1164 => 365,  1160 => 364,  1154 => 363,  1147 => 362,  1144 => 361,  1137 => 356,  1131 => 355,  1117 => 351,  1111 => 350,  1106 => 348,  1102 => 347,  1096 => 346,  1090 => 342,  1052 => 337,  1044 => 334,  1039 => 332,  1035 => 331,  1029 => 330,  1023 => 326,  1020 => 325,  1016 => 324,  1011 => 322,  1007 => 321,  1001 => 320,  994 => 319,  991 => 318,  985 => 314,  978 => 312,  971 => 311,  969 => 310,  962 => 309,  958 => 308,  954 => 307,  948 => 306,  942 => 305,  936 => 304,  929 => 303,  926 => 302,  923 => 301,  918 => 300,  916 => 299,  911 => 298,  909 => 297,  902 => 293,  893 => 292,  891 => 291,  888 => 290,  881 => 288,  878 => 287,  875 => 286,  872 => 285,  863 => 282,  859 => 281,  855 => 280,  852 => 279,  848 => 278,  845 => 277,  843 => 276,  840 => 275,  835 => 272,  823 => 266,  820 => 265,  808 => 259,  806 => 258,  802 => 256,  800 => 255,  796 => 253,  793 => 252,  785 => 250,  782 => 249,  777 => 247,  772 => 246,  766 => 244,  763 => 243,  757 => 241,  751 => 239,  748 => 238,  745 => 237,  743 => 236,  740 => 235,  737 => 234,  733 => 232,  729 => 230,  726 => 229,  720 => 227,  718 => 226,  714 => 225,  709 => 223,  704 => 222,  702 => 221,  696 => 220,  690 => 216,  688 => 215,  684 => 213,  680 => 211,  669 => 209,  665 => 208,  662 => 207,  659 => 206,  649 => 202,  644 => 199,  640 => 197,  634 => 194,  630 => 193,  625 => 192,  623 => 191,  620 => 190,  606 => 189,  586 => 186,  580 => 185,  569 => 184,  566 => 183,  549 => 182,  545 => 180,  543 => 179,  539 => 177,  536 => 176,  520 => 173,  509 => 170,  497 => 168,  495 => 167,  492 => 166,  485 => 162,  473 => 160,  459 => 158,  457 => 157,  454 => 156,  452 => 155,  446 => 154,  438 => 153,  435 => 152,  417 => 151,  414 => 150,  409 => 147,  400 => 144,  388 => 142,  386 => 141,  383 => 140,  376 => 136,  366 => 134,  352 => 132,  350 => 131,  347 => 130,  345 => 129,  339 => 128,  333 => 127,  329 => 126,  326 => 125,  324 => 124,  310 => 115,  301 => 108,  299 => 107,  291 => 101,  283 => 96,  278 => 93,  272 => 92,  266 => 88,  260 => 84,  257 => 83,  252 => 82,  246 => 79,  240 => 76,  237 => 75,  235 => 74,  229 => 70,  226 => 69,  218 => 66,  215 => 65,  212 => 64,  195 => 61,  191 => 60,  188 => 59,  183 => 58,  175 => 55,  171 => 54,  168 => 53,  166 => 52,  153 => 42,  142 => 34,  138 => 32,  124 => 31,  118 => 28,  115 => 27,  109 => 24,  104 => 22,  100 => 21,  97 => 20,  95 => 19,  90 => 17,  82 => 12,  78 => 11,  75 => 10,  72 => 9,  55 => 8,  49 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/product/product.twig", "");
    }
}
