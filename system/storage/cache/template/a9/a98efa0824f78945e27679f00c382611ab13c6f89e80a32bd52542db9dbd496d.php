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

/* ft_frame/template/extension/module/xds_products_carousel.twig */
class __TwigTemplate_0f85745fde2c40b82f0d224b65d22d8d9416b51cfbdd0fb8344c2815cecffe1b extends \Twig\Template
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
        echo "<div id=\"ftProductsCarousel_";
        echo ($context["module"] ?? null);
        echo "\" class=\"products-carousel product-items card mb-4\">
\t";
        // line 2
        if ((($context["heading_title"] ?? null) || twig_in_filter("arrows", ($context["controls"] ?? null)))) {
            // line 3
            echo "\t<div class=\"card-header py-2 px-2\">
\t\t<div class=\"h6 card-title ml-2 m-0\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col my-1\">
\t\t\t\t\t";
            // line 7
            echo ($context["heading_title"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 9
            if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
                // line 10
                echo "\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button class=\"btn btn-prev p-0 rounded-pill\">
\t\t\t  \t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t  \t\t\t<path d=\"M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z\"></path>
\t\t\t  \t\t</svg>
\t\t\t  \t</button>
\t\t\t\t\t<button class=\"btn btn-next p-0 rounded-pill\">
\t\t\t  \t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t  \t\t\t<path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"></path>
\t\t\t  \t\t</svg>
\t\t\t  \t</button>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 23
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 27
        echo "\t<div class=\"card-body p-0\">
\t\t<!--noindex-->
    <!--googleoff: all-->
\t\t<div class=\"carousel-placeholder d-flex\">
\t\t\t<script>

\t\t\t\titems = ";
        // line 33
        echo ($context["items"] ?? null);
        echo ";
\t\t\t\tbreakpoints = [];
\t\t\t\tbase_width = window.innerWidth;

\t\t\t\t";
        // line 37
        if (($context["responsive_items"] ?? null)) {
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "        breakpoints[";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39);
                echo "] = { ww: ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "breakpoint", [], "any", false, false, false, 39);
                echo ", count: ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 39);
                echo " };
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        }
        // line 42
        echo "
\t\t\t\tbreakpoints.sort((a, b) => a.ww > b.ww ? 1 : -1);
        breakpoints.forEach(function(breakpoint, i, breakpoints) {

          next_bp_vw = breakpoints[i + 1] != null ? breakpoints[i + 1].ww : 9999;

          if (breakpoint.ww <= base_width && next_bp_vw > base_width) {
            items = breakpoint.count;
          }
\t\t\t\t});

\t\t\t</script>
\t\t\t<div class=\"item product-item d-flex align-items-start flex-column h-100\">
\t\t\t\t<script>

\t\t\t\t\titem = document.querySelector('#ftProductsCarousel_";
        // line 57
        echo ($context["module"] ?? null);
        echo " .carousel-placeholder .item');
\t\t\t\t\titem.style.width = items > 0 ? 100 / items + '%' : 100 + '%';

\t\t\t\t</script>
\t\t\t\t<div class=\"w-100 text-center px-2 px-sm-3 pt-2 pb-2\">
\t\t\t\t\t<div class=\"d-inline-block position-relative\">
\t\t\t\t\t\t<svg class=\"d-block img-fluid\" width=\"";
        // line 63
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["products"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "img_width", [], "any", false, false, false, 63);
        echo "\" height=\"";
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["products"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "img_height", [], "any", false, false, false, 63);
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
        // line 81
        if (twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["products"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "tax", [], "any", false, false, false, 81)) {
            // line 82
            echo "\t\t\t\t\t\t<small class=\"font-weight-light text-muted d-block\">
\t\t\t\t\t\t\t<span class=\"bg-light\"><span class=\"invisible\" role=\"status\">";
            // line 83
            echo ($context["text_tax"] ?? null);
            echo " Loading...</span></span>
\t\t\t\t\t\t</small>
\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 pl-2 pr-1 mt-2\" disabled>
\t\t\t\t\t\t<span class=\"invisible\"><span class=\"invisible\" role=\"status\">Loading...</span></span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script>

\t\t\t\tfor(let i = 1; i < items && i < ";
        // line 94
        echo twig_length_filter($this->env, ($context["products"] ?? null));
        echo "; i++)  {
\t\t\t\t\tclone = item.cloneNode(true);
\t\t\t\t\titem.parentNode.appendChild(clone);
\t\t\t\t}

\t\t\t\titems = null;
\t\t\t\titem = null;
\t\t\t\tclone = null;
\t\t\t\tbreakpoints = null;
\t\t\t\tbase_width = null;
\t\t\t\tprev_bp_vw = null;

\t\t\t</script>
\t\t</div>
\t\t<!--googleon: all-->
    <!--/noindex-->

\t\t<div class=\"owl-carousel\">
\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 113
            echo "\t\t\t";
            if ( !((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 113) <= 0) && ($context["hide_out_of_stock_products"] ?? null))) {
                // line 114
                echo "\t\t\t<div class=\"product-item d-flex align-items-start flex-column h-100\">
\t\t\t\t<div class=\"image w-100 position-relative text-center px-2 px-sm-3 pt-2 pb-2\">
\t\t\t\t\t<a href=\"";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 116);
                echo "\">
\t\t\t\t\t\t<div class=\"d-inline-block position-relative\">
\t\t\t\t\t\t\t<svg class=\"d-block img-fluid\" width=\"";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_width", [], "any", false, false, false, 118);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "img_height", [], "any", false, false, false, 118);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>

              ";
                // line 120
                if (($context["lazyload_imgs"] ?? null)) {
                    // line 121
                    echo "              <picture>
\t\t\t\t\t\t\t\t";
                    // line 122
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 122)) {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t<source class=\"owl-lazy\" data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 123);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 123);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 123);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 123);
                        echo " 4x\" srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_holder", [], "any", false, false, false, 123);
                        echo "\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_holder", [], "any", false, false, false, 125);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 125);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 125);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 125);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto owl-lazy\">
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
\t\t\t          <div class=\"spinner-border text-gray-300\"></div>
\t\t\t        </div>
              ";
                } else {
                    // line 131
                    echo "              <picture>
\t\t\t\t\t\t\t\t";
                    // line 132
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 132)) {
                        // line 133
                        echo "\t\t\t\t\t\t\t\t<source srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 133);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 133);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 133);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 133);
                        echo " 4x\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 135
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 135);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 135);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 135);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto\">
\t\t\t\t\t\t\t</picture>
              ";
                }
                // line 138
                echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t";
                // line 142
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "\t\t\t\t\t<ul class=\"list-unstyled position-absolute t-0 l-0 ml-3 mt-2 text-left\">
\t\t\t\t\t\t";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "stickers", [], "any", false, false, false, 144));
                    foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                        // line 145
                        echo "\t\t\t\t\t\t<li><span class=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "class", [], "any", false, false, false, 145);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sticker"], "text", [], "any", false, false, false, 145);
                        echo "</span></li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"w-100 px-2 px-sm-3 pt-2 pb-1\">
\t\t\t\t\t<div class=\"product-name\">
\t\t\t\t\t\t<a href=\"";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 152);
                echo "\" class=\"text-dark h6 font-weight-normal line-clamp-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 152);
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"w-100 mt-auto px-2 px-sm-3 pb-2 pb-sm-3 pt-0\">
          ";
                // line 156
                if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                    // line 157
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 157)) {
                        // line 158
                        echo "\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t";
                        // line 159
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 159)) {
                            // line 160
                            echo "\t\t\t\t\t\t<div class=\"h6 mb-1\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
                            echo "</div>
\t\t\t\t\t\t";
                        } else {
                            // line 162
                            echo "\t\t\t\t\t\t<div class=\"h6 mb-1\">
\t\t\t\t\t\t\t<s class=\"d-inline-block text-danger font-weight-light\">";
                            // line 163
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163);
                            echo "</s>
\t\t\t\t\t\t\t<span class=\"d-inline-block\">";
                            // line 164
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 164);
                            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                        }
                        // line 167
                        echo "\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 167)) {
                            // line 168
                            echo "\t\t\t\t\t\t<small class=\"font-weight-light text-muted d-block\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 168);
                            echo "</small>
\t\t\t\t\t\t";
                        }
                        // line 170
                        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 172
                    echo "          ";
                }
                // line 173
                echo "
\t\t\t\t\t<div class=\"btn-group ";
                // line 174
                if ((twig_in_filter("qview", ($context["show_buttons"] ?? null)) || twig_in_filter("fastorder", ($context["show_buttons"] ?? null)))) {
                    echo "d-flex d-md-inline-flex";
                }
                echo " dropup mt-2\">
            ";
                // line 175
                if ( !($context["catalog_mode"] ?? null)) {
                    // line 176
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 176);
                    echo "', ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 176);
                    echo ");\" ";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 176) <= 0) && ($context["disable_btn_status"] ?? null))) {
                        echo "disabled";
                    }
                    echo ">
\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
\t\t\t\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M17.21 9l-4.38-6.56c-.19-.28-.51-.42-.83-.42-.32 0-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1h-4.79zM9 9l3-4.4L15 9H9zm3 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t\t\t\t<span class=\"text-truncate mx-2 ";
                    // line 184
                    if ((twig_in_filter("qview", ($context["show_buttons"] ?? null)) || twig_in_filter("fastorder", ($context["show_buttons"] ?? null)))) {
                        echo "d-none d-md-block";
                    }
                    echo "\">";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 184) <= 0) && ($context["disable_btn_status"] ?? null))) {
                        echo ($context["disable_btn_text"] ?? null);
                    } else {
                        echo ($context["button_cart"] ?? null);
                    }
                    echo "</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
            ";
                } else {
                    // line 189
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 189);
                    echo "\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\">
              <span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
                <span class=\"col-auto\">
                  <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z\"/>
                  </svg>
                </span>
                <span class=\"col-auto\">
                  <span class=\"text-truncate mx-2 ";
                    // line 197
                    if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                        echo "d-none d-md-block";
                    }
                    echo "\">";
                    echo ($context["text_more"] ?? null);
                    echo "</span>
                </span>
              </span>
            </a>
            ";
                }
                // line 202
                echo "

\t\t\t\t\t\t";
                // line 204
                if (twig_in_filter("fastorder", ($context["show_buttons"] ?? null))) {
                    // line 205
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\" title=\"";
                    echo ($context["g_text_fastorder"] ?? null);
                    echo "\" onclick=\"ft_fastorder('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 205);
                    echo "')\" ";
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 205) <= 0) && ($context["disable_btn_status"] ?? null))) {
                        echo "disabled";
                    }
                    echo ">
\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M 13 1 L 6 14 L 12 14 L 12 23 L 19 10 L 13 10 L 13 1 z\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t\t";
                if (twig_in_filter("qview", ($context["show_buttons"] ?? null))) {
                    // line 212
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\" title=\"";
                    echo ($context["g_text_qview"] ?? null);
                    echo "\" onclick=\"ft_qview('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 212);
                    echo "')\">
\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M12,6.5c3.79,0,7.17,2.13,8.82,5.5c-1.65,3.37-5.02,5.5-8.82,5.5S4.83,15.37,3.18,12C4.83,8.63,8.21,6.5,12,6.5 M12,4.5 C7,4.5,2.73,7.61,1,12c1.73,4.39,6,7.5,11,7.5s9.27-3.11,11-7.5C21.27,7.61,17,4.5,12,4.5L12,4.5z\"/><path d=\"M12,9.5c1.38,0,2.5,1.12,2.5,2.5s-1.12,2.5-2.5,2.5S9.5,13.38,9.5,12S10.62,9.5,12,9.5 M12,7.5c-2.48,0-4.5,2.02-4.5,4.5 s2.02,4.5,4.5,4.5s4.5-2.02,4.5-4.5S14.48,7.5,12,7.5L12,7.5z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
                }
                // line 218
                echo "\t\t\t\t\t\t";
                if ((twig_in_filter("wishlist", ($context["show_buttons"] ?? null)) || twig_in_filter("compare", ($context["show_buttons"] ?? null)))) {
                    // line 219
                    echo "\t\t\t\t\t\t<div class=\"btn-group dropdown dropup position-static\">
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right w-100\">
\t\t\t\t\t\t\t\t";
                    // line 221
                    if (twig_in_filter("wishlist", ($context["show_buttons"] ?? null))) {
                        // line 222
                        echo "\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item pl-3 pr-2\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 222);
                        echo "');return false\">
\t\t\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center flex-nowrap\">
\t\t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"col text-truncate\">";
                        // line 229
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 233
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_in_filter("compare", ($context["show_buttons"] ?? null))) {
                        // line 234
                        echo "\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item pl-3 pr-2\" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 234);
                        echo "');return false\">
\t\t\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center flex-nowrap\">
\t\t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M 12 4 A 2 2 0 0 0 10.269531 5 L 5 5 L 2 5 L 2 7 L 4 7 L 0 15 C 0 17.761 2.239 20 5 20 C 7.761 20 10 17.761 10 15 L 6 7 L 10.271484 7 A 2 2 0 0 0 12 8 A 2 2 0 0 0 13.730469 7 L 18 7 L 14 15 C 14 17.761 16.239 20 19 20 C 21.761 20 24 17.761 24 15 L 20 7 L 22 7 L 22 5 L 13.728516 5 A 2 2 0 0 0 12 4 z M 5 9.0214844 L 7.9882812 15 L 2.0117188 15 L 5 9.0214844 z M 19 9.0214844 L 21.988281 15 L 16.011719 15 L 19 9.0214844 z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"col text-truncate\">";
                        // line 241
                        echo ($context["button_compare"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 245
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1 px-md-0\" data-toggle=\"dropdown\" data-flip=\"false\" aria-label=\"more\">
\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 253
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 257
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "\t\t</div>
\t</div>
\t";
        // line 260
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            // line 261
            echo "\t<div class=\"card-footer px-3 py-2\">
\t\t<div class=\"owl-pagination text-center text-sm-left\">
\t\t\t<button class=\"btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0 mr-0\"><span></span></button>
\t\t</div>
\t</div>
\t";
        }
        // line 267
        echo "</div>

<script>
\t\$(function () {

\t\tvar ftProductsCarousel_";
        // line 272
        echo ($context["module"] ?? null);
        echo " = \$('#ftProductsCarousel_";
        echo ($context["module"] ?? null);
        echo " .owl-carousel');

\t\tftProductsCarousel_";
        // line 274
        echo ($context["module"] ?? null);
        echo ".owlCarousel({
\t\t\tmouseDrag: false,
      touchDrag: true,
\t    loop: false,
\t\t\trewind: true,

\t\t\titems: ";
        // line 280
        echo ($context["items"] ?? null);
        echo ",

      ";
        // line 282
        if (($context["responsive_items"] ?? null)) {
            // line 283
            echo "        responsive: {
        ";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 285
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "breakpoint", [], "any", false, false, false, 285);
                echo " : { items: ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 285);
                echo " },
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "        },
      ";
        }
        // line 289
        echo "
\t\t\tstageClass: 'owl-stage d-flex',
      itemClass: 'owl-item float-none',

\t\t\tnav: false,
\t\t\t";
        // line 294
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            // line 295
            echo "\t\t\tdots: true,
\t\t\tdotsContainer: '#ftProductsCarousel_";
            // line 296
            echo ($context["module"] ?? null);
            echo " .owl-pagination',
\t\t\tdotClass: 'btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0',
\t\t\t";
        } else {
            // line 299
            echo "\t\t\tdots: false,
\t\t\t";
        }
        // line 301
        echo "\t\t\t";
        if (($context["autoplay"] ?? null)) {
            // line 302
            echo "\t\t\tautoplay: true,
\t\t\tautoplayTimeout: ";
            // line 303
            echo ($context["autoplay_speed"] ?? null);
            echo ",
\t\t\tautoplayHoverPause: true,
\t\t\t";
        }
        // line 306
        echo "
      ";
        // line 307
        if (($context["lazyload_imgs"] ?? null)) {
            // line 308
            echo "      lazyLoad: true,
      ";
        } else {
            // line 310
            echo "      lazyLoad: false,
      ";
        }
        // line 312
        echo "
      lazyLoadEager: 0,

\t\t\tonLoadedLazy: function(e) { e.element.parent().parent().find('.lazy-spinner').remove() },
\t\t\tonInitialized: function(e) { \$(e.target).parent().find('.carousel-placeholder').remove() },
\t\t\tonRefreshed: function(e) {

\t\t\t\t\$(e.target).find('.owl-item').each(function() { this.style.minWidth = this.style.width });
        let arrows = \$('#ftProductsCarousel_";
        // line 320
        echo ($context["module"] ?? null);
        echo " .btn-prev, #ftProductsCarousel_";
        echo ($context["module"] ?? null);
        echo " .btn-next ');
        if (e.item.count <= e.page.size) { arrows.attr('disabled','disabled') } else { arrows.removeAttr('disabled') }

\t\t\t},
\t\t});

\t\t\$('#ftProductsCarousel_";
        // line 326
        echo ($context["module"] ?? null);
        echo " .btn-prev').click(function() { ftProductsCarousel_";
        echo ($context["module"] ?? null);
        echo ".trigger('prev.owl.carousel'); });
\t\t\$('#ftProductsCarousel_";
        // line 327
        echo ($context["module"] ?? null);
        echo " .btn-next').click(function() { ftProductsCarousel_";
        echo ($context["module"] ?? null);
        echo ".trigger('next.owl.carousel'); });

\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/xds_products_carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 327,  717 => 326,  706 => 320,  696 => 312,  692 => 310,  688 => 308,  686 => 307,  683 => 306,  677 => 303,  674 => 302,  671 => 301,  667 => 299,  661 => 296,  658 => 295,  656 => 294,  649 => 289,  645 => 287,  634 => 285,  630 => 284,  627 => 283,  625 => 282,  620 => 280,  611 => 274,  604 => 272,  597 => 267,  589 => 261,  587 => 260,  583 => 258,  577 => 257,  571 => 253,  561 => 245,  554 => 241,  543 => 234,  540 => 233,  533 => 229,  522 => 222,  520 => 221,  516 => 219,  513 => 218,  501 => 212,  498 => 211,  482 => 205,  480 => 204,  476 => 202,  464 => 197,  452 => 189,  436 => 184,  418 => 176,  416 => 175,  410 => 174,  407 => 173,  404 => 172,  400 => 170,  392 => 168,  389 => 167,  383 => 164,  379 => 163,  376 => 162,  370 => 160,  368 => 159,  365 => 158,  362 => 157,  360 => 156,  351 => 152,  346 => 149,  342 => 147,  331 => 145,  327 => 144,  324 => 143,  322 => 142,  316 => 138,  305 => 135,  293 => 133,  291 => 132,  288 => 131,  272 => 125,  258 => 123,  256 => 122,  253 => 121,  251 => 120,  244 => 118,  239 => 116,  235 => 114,  232 => 113,  228 => 112,  207 => 94,  197 => 86,  191 => 83,  188 => 82,  186 => 81,  163 => 63,  154 => 57,  137 => 42,  134 => 41,  113 => 39,  95 => 38,  93 => 37,  86 => 33,  78 => 27,  72 => 23,  57 => 10,  55 => 9,  50 => 7,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/xds_products_carousel.twig", "");
    }
}
