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

/* ft_frame/template/extension/module/xds_banners.twig */
class __TwigTemplate_aa74f919cbb429b29d5fa8fd0bbc0c817190575b0c3358c70b0d32f50e6ee9a5 extends \Twig\Template
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
        if ((($context["banners"] ?? null) && (($context["type"] ?? null) == "carousel"))) {
            // line 2
            echo "<div id=\"ftCarousel_";
            echo ($context["module"] ?? null);
            echo "\">
  ";
            // line 3
            if (($context["heading_title"] ?? null)) {
                // line 4
                echo "  <div class=\"pt-2 mb-3\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"h5 mb-0 ml-1\">";
                // line 7
                echo ($context["heading_title"] ?? null);
                echo "</div>
      </div>
      ";
                // line 9
                if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
                    // line 10
                    echo "      <div class=\"col-auto\">
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
      ";
                }
                // line 23
                echo "    </div>
  </div>
  ";
            }
            // line 26
            echo "  <div class=\"";
            if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
                echo "mb-3";
            } else {
                echo "mb-4";
            }
            echo "\">
    <div class=\"position-relative overflow-hidden border rounded bg-white\">
      <!--noindex-->
      <!--googleoff: all-->
      <div class=\"carousel-placeholder d-flex\">
        ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banners"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "type", [], "any", false, false, false, 31)) {
                // line 32
                echo "        <div class=\"item invisible\">
          ";
                // line 33
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banners"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "description", [], "any", false, false, false, 33);
                echo "
        </div>
        ";
            } else {
                // line 36
                echo "
        <script>
          items = ";
                // line 38
                echo ($context["items"] ?? null);
                echo ";
          breakpoints = [];
          base_width = window.innerWidth;

          ";
                // line 42
                if (($context["responsive_items"] ?? null)) {
                    // line 43
                    echo "          ";
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
                        // line 44
                        echo "          breakpoints[";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 44);
                        echo "] = { ww: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "breakpoint", [], "any", false, false, false, 44);
                        echo ", count: ";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 44);
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
                    // line 46
                    echo "          ";
                }
                // line 47
                echo "
          breakpoints.sort((a, b) => a.ww > b.ww ? 1 : -1);
          breakpoints.forEach(function(breakpoint, i, breakpoints) {

            next_bp_vw = breakpoints[i + 1] != null ? breakpoints[i + 1].ww : 9999;

            if (breakpoint.ww <= base_width && next_bp_vw > base_width) {
              items = breakpoint.count;
            }
          });
        </script>
        <div class=\"item\">
          <script>

            item = document.querySelector('#ftCarousel_";
                // line 61
                echo ($context["module"] ?? null);
                echo " .carousel-placeholder .item');
            item.style.width = items > 0 ? 100 / items + '%' : 100 + '%';

          </script>
          <div class=\"d-flex justify-content-center\">
            <div class=\"position-relative\">
              <svg class=\"d-block img-fluid w-100\" width=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["banners"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "img_width", [], "any", false, false, false, 67);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["banners"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "img_height", [], "any", false, false, false, 67);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
              <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100\">
                <div class=\"spinner-border text-gray-400\"></div>
              </div>
            </div>
          </div>
        </div>
        <script>

          for(let i = 1; i < items && i < ";
                // line 76
                echo twig_length_filter($this->env, ($context["banners"] ?? null));
                echo "; i++)  {
            clone = item.cloneNode(true);
            item.parentNode.appendChild(clone);
          }

          items = null;
  \t\t\t\titem = null;
  \t\t\t\tclone = null;
  \t\t\t\tbreakpoints = null;
  \t\t\t\tbase_width = null;
  \t\t\t\tprev_bp_vw = null;

        </script>
        ";
            }
            // line 90
            echo "      </div>
      <!--googleon: all-->
      <!--/noindex-->
      <div class=\"owl-carousel\">
    \t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 95
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "type", [], "any", false, false, false, 95)) {
                    // line 96
                    echo "        <div class=\"d-flex justify-content-center\">
          ";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 97);
                    echo "
        </div>
        ";
                } else {
                    // line 100
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 100)) {
                        // line 101
                        echo "        <div class=\"d-flex justify-content-center\">
    \t\t\t";
                        // line 102
                        if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 102)) {
                            // line 103
                            echo "    \t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 103);
                            echo "\">
          ";
                        }
                        // line 105
                        echo "          <div class=\"position-relative\">
            <svg class=\"d-block img-fluid\" width=\"";
                        // line 106
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "img_width", [], "any", false, false, false, 106);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "img_height", [], "any", false, false, false, 106);
                        echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
            ";
                        // line 107
                        if (($context["lazyload_imgs"] ?? null)) {
                            // line 108
                            echo "            <picture>
              ";
                            // line 109
                            if (twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 109)) {
                                // line 110
                                echo "              <source class=\"owl-lazy\" data-srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 110);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 110);
                                echo " 2x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image3x", [], "any", false, false, false, 110);
                                echo " 3x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image4x", [], "any", false, false, false, 110);
                                echo " 4x\" srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "src_holder", [], "any", false, false, false, 110);
                                echo "\">
              ";
                            }
                            // line 112
                            echo "              <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "src_holder", [], "any", false, false, false, 112);
                            echo "\" data-src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 112);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "alt", [], "any", false, false, false, 112);
                            echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-100 owl-lazy\">
            </picture>
            <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
              <div class=\"spinner-border text-gray-400\"></div>
            </div>
            ";
                        } else {
                            // line 118
                            echo "            <picture>
              ";
                            // line 119
                            if (twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 119)) {
                                // line 120
                                echo "              <source srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 120);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 120);
                                echo " 2x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image3x", [], "any", false, false, false, 120);
                                echo " 3x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image4x", [], "any", false, false, false, 120);
                                echo " 4x\">
              ";
                            }
                            // line 122
                            echo "              <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 122);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "alt", [], "any", false, false, false, 122);
                            echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-100\">
            </picture>
            ";
                        }
                        // line 125
                        echo "          </div>
          ";
                        // line 126
                        if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 126)) {
                            // line 127
                            echo "          </a>
          ";
                        }
                        // line 129
                        echo "    \t\t</div>
        ";
                    }
                    // line 131
                    echo "        ";
                }
                // line 132
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "    \t</div>
      ";
            // line 134
            if ((twig_in_filter("arrows", ($context["controls"] ?? null)) &&  !($context["heading_title"] ?? null))) {
                // line 135
                echo "      <button class=\"btn btn-next position-absolute t-50p r-0 p-0 rounded-pill z-index-2 mt-n3 mr-3\">
    \t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t<path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"></path>
    \t\t</svg>
    \t</button>
      <button class=\"btn btn-prev position-absolute t-50p l-0 p-0 rounded-pill z-index-2 mt-n3 ml-3\">
    \t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t<path d=\"M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z\"></path>
    \t\t</svg>
    \t</button>
      ";
            }
            // line 146
            echo "    </div>
    ";
            // line 147
            if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
                // line 148
                echo "    <div class=\"owl-pagination text-center text-sm-left px-2 py-2\">
      <button class=\"btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0 mr-0\"><span></span></button>
    </div>
    ";
            }
            // line 152
            echo "  </div>
  <script>
  \t\$(function () {

  \t\tvar ftCarousel_";
            // line 156
            echo ($context["module"] ?? null);
            echo " = \$('#ftCarousel_";
            echo ($context["module"] ?? null);
            echo " .owl-carousel');

  \t\tftCarousel_";
            // line 158
            echo ($context["module"] ?? null);
            echo ".owlCarousel({

        mouseDrag: false,
        touchDrag: true,
        items: ";
            // line 162
            echo ($context["items"] ?? null);
            echo ",

        ";
            // line 164
            if (($context["responsive_items"] ?? null)) {
                // line 165
                echo "          responsive: {
          ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 167
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "breakpoint", [], "any", false, false, false, 167);
                    echo " : { items: ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 167);
                    echo " },
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "          },
        ";
            }
            // line 171
            echo "
        ";
            // line 172
            if ((($context["responsive_base"] ?? null) == "parent")) {
                // line 173
                echo "        responsiveBaseElement: '#ftCarousel_";
                echo ($context["module"] ?? null);
                echo "',
        ";
            } elseif ((            // line 174
($context["responsive_base"] ?? null) && (($context["responsive_base"] ?? null) != "viewport"))) {
                // line 175
                echo "        responsiveBaseElement: '";
                echo ($context["responsive_base"] ?? null);
                echo "',
        ";
            }
            // line 177
            echo "
        stageClass: 'owl-stage d-flex justify-content-start align-items-center',
        itemClass: 'owl-item float-none',

  \t\t\tnav: false,
        ";
            // line 182
            if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
                // line 183
                echo "        dots: true,
  \t\t\tdotsContainer: '#ftCarousel_";
                // line 184
                echo ($context["module"] ?? null);
                echo " .owl-pagination',
        dotClass: 'btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0',
        ";
            } else {
                // line 187
                echo "        dots: false,
        ";
            }
            // line 189
            echo "
        ";
            // line 190
            if (($context["loop"] ?? null)) {
                // line 191
                echo "        loop: true,
        rewind: false,
        ";
            } else {
                // line 194
                echo "        loop: false,
        rewind: true,
        ";
            }
            // line 197
            echo "
        ";
            // line 198
            if (($context["autoplay"] ?? null)) {
                // line 199
                echo "        autoplay: true,
  \t\t\tautoplayTimeout: ";
                // line 200
                echo ($context["autoplay_speed"] ?? null);
                echo ",
  \t\t\tautoplayHoverPause: true,
        ";
            }
            // line 203
            echo "
        ";
            // line 204
            if (($context["lazyload_imgs"] ?? null)) {
                // line 205
                echo "        lazyLoad: true,
        ";
            } else {
                // line 207
                echo "        lazyLoad: false,
        ";
            }
            // line 209
            echo "
        lazyLoadEager: 0,

        onLoadedLazy: function(e) { e.element.parent().parent().find('.lazy-spinner').remove() },
        onInitialized: function(e) { \$(e.target).parent().find('.carousel-placeholder').remove() },
        onRefreshed: function(e) {

          \$(e.target).find('.owl-item').each(function() { this.style.minWidth = this.style.width });
          let arrows = \$('#ftCarousel_";
            // line 217
            echo ($context["module"] ?? null);
            echo " .btn-prev, #ftCarousel_";
            echo ($context["module"] ?? null);
            echo " .btn-next ');
          if (e.item.count <= e.page.size) { arrows.attr('disabled','disabled') } else { arrows.removeAttr('disabled') }

        },
  \t\t});

      ";
            // line 223
            if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
                // line 224
                echo "  \t\t\$('#ftCarousel_";
                echo ($context["module"] ?? null);
                echo " .btn-prev').click(function() { ftCarousel_";
                echo ($context["module"] ?? null);
                echo ".trigger('prev.owl.carousel'); });
  \t\t\$('#ftCarousel_";
                // line 225
                echo ($context["module"] ?? null);
                echo " .btn-next').click(function() { ftCarousel_";
                echo ($context["module"] ?? null);
                echo ".trigger('next.owl.carousel'); });
      ";
            }
            // line 227
            echo "
  \t});
  </script>
</div>
";
        }
        // line 232
        echo "

";
        // line 234
        if ((($context["banners"] ?? null) && (($context["type"] ?? null) == "slideshow"))) {
            // line 235
            echo "<div id=\"ftSlideshow_";
            echo ($context["module"] ?? null);
            echo "\">
  ";
            // line 236
            if (($context["heading_title"] ?? null)) {
                // line 237
                echo "  <div class=\"h5 mb-4 pt-2\">";
                echo ($context["heading_title"] ?? null);
                echo "</div>
  ";
            }
            // line 239
            echo "
  <div class=\"position-relative overflow-hidden border rounded mb-4\">
    <!--noindex-->
    <!--googleoff: all-->
    <div class=\"slideshow-placeholder\">
      ";
            // line 244
            if (twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["banners"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "type", [], "any", false, false, false, 244)) {
                // line 245
                echo "      ";
                echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["banners"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "description", [], "any", false, false, false, 245);
                echo "
      ";
            } else {
                // line 247
                echo "      <div class=\"position-relative\">
        <svg class=\"d-block img-fluid w-100\" width=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["banners"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "img_width", [], "any", false, false, false, 248);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["banners"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "img_height", [], "any", false, false, false, 248);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
        <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100\">
          <div class=\"spinner-border text-gray-400\"></div>
        </div>
      </div>
      ";
            }
            // line 254
            echo "    </div>
    <!--googleon: all-->
    <!--/noindex-->
    <div class=\"owl-carousel\">
  \t\t";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 259
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "type", [], "any", false, false, false, 259)) {
                    // line 260
                    echo "      ";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 260);
                    echo "
      ";
                } else {
                    // line 262
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 262)) {
                        // line 263
                        echo "      <div class=\"position-relative\">
  \t\t\t";
                        // line 264
                        if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 264)) {
                            // line 265
                            echo "  \t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 265);
                            echo "\">
        ";
                        }
                        // line 267
                        echo "        <svg class=\"d-block img-fluid w-100\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "img_width", [], "any", false, false, false, 267);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "img_height", [], "any", false, false, false, 267);
                        echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
        ";
                        // line 268
                        if (($context["lazyload_imgs"] ?? null)) {
                            // line 269
                            echo "        <picture>
          ";
                            // line 270
                            if (twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 270)) {
                                // line 271
                                echo "          <source class=\"owl-lazy\" data-srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 271);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 271);
                                echo " 2x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image3x", [], "any", false, false, false, 271);
                                echo " 3x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image4x", [], "any", false, false, false, 271);
                                echo " 4x\" srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "src_holder", [], "any", false, false, false, 271);
                                echo "\">
          ";
                            }
                            // line 273
                            echo "          <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "src_holder", [], "any", false, false, false, 273);
                            echo "\" data-src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 273);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "alt", [], "any", false, false, false, 273);
                            echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-100 owl-lazy\">
        </picture>
        <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
          <div class=\"spinner-border text-gray-400\"></div>
        </div>
        ";
                        } else {
                            // line 279
                            echo "        <picture>
          ";
                            // line 280
                            if (twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 280)) {
                                // line 281
                                echo "          <source srcset=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 281);
                                echo " 1x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 281);
                                echo " 2x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image3x", [], "any", false, false, false, 281);
                                echo " 3x, ";
                                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image4x", [], "any", false, false, false, 281);
                                echo " 4x\">
          ";
                            }
                            // line 283
                            echo "          <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 283);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "alt", [], "any", false, false, false, 283);
                            echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-100\">
        </picture>
        ";
                        }
                        // line 286
                        echo "        ";
                        if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 286)) {
                            // line 287
                            echo "        </a>
        ";
                        }
                        // line 289
                        echo "  \t\t</div>
      ";
                    }
                    // line 291
                    echo "      ";
                }
                // line 292
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "  \t</div>

    ";
            // line 295
            if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
                // line 296
                echo "    <div class=\"owl-pagination position-absolute b-0 l-0 r-0 w-100 z-index-2 text-center px-3 pb-2\">
      <button class=\"btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0 mr-0\"><span></span></button>
    </div>
    ";
            }
            // line 300
            echo "
    ";
            // line 301
            if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
                // line 302
                echo "    <button class=\"btn btn-next position-absolute t-50p r-0 p-0 rounded-pill z-index-2 mt-n3 mr-3\">
  \t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t<path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"></path>
  \t\t</svg>
  \t</button>
    <button class=\"btn btn-prev position-absolute t-50p l-0 p-0 rounded-pill z-index-2 mt-n3 ml-3\">
  \t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t<path d=\"M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z\"></path>
  \t\t</svg>
  \t</button>
    ";
            }
            // line 313
            echo "
  </div>
  <script>
  \t\$(function () {

  \t\tvar ftSlideshow_";
            // line 318
            echo ($context["module"] ?? null);
            echo " = \$('#ftSlideshow_";
            echo ($context["module"] ?? null);
            echo " .owl-carousel');

  \t\tftSlideshow_";
            // line 320
            echo ($context["module"] ?? null);
            echo ".owlCarousel({

        ";
            // line 322
            if (($context["animation_out"] ?? null)) {
                // line 323
                echo "        animateOut: '";
                echo ($context["animation_out"] ?? null);
                echo "',
        ";
            }
            // line 325
            echo "
        ";
            // line 326
            if (($context["animation_in"] ?? null)) {
                // line 327
                echo "        animateIn: '";
                echo ($context["animation_in"] ?? null);
                echo "',
        ";
            }
            // line 329
            echo "
        mouseDrag: false,
        touchDrag: true,
        items: 1,
        autoHeight: true,
        nav: false,

        ";
            // line 336
            if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
                // line 337
                echo "        dots: true,
        dotsContainer: '#ftSlideshow_";
                // line 338
                echo ($context["module"] ?? null);
                echo " .owl-pagination',
        dotClass: 'btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0',
        ";
            } else {
                // line 341
                echo "        dots: false,
        ";
            }
            // line 343
            echo "
        ";
            // line 344
            if (($context["loop"] ?? null)) {
                // line 345
                echo "        loop: true,
        rewind: false,
        ";
            } else {
                // line 348
                echo "        loop: false,
        rewind: true,
        ";
            }
            // line 351
            echo "
        ";
            // line 352
            if (($context["autoplay"] ?? null)) {
                // line 353
                echo "        autoplay: true,
        autoplayTimeout: ";
                // line 354
                echo ($context["autoplay_speed"] ?? null);
                echo ",
        autoplayHoverPause: true,
        ";
            }
            // line 357
            echo "
        ";
            // line 358
            if (($context["lazyload_imgs"] ?? null)) {
                // line 359
                echo "        lazyLoad: true,
        ";
            } else {
                // line 361
                echo "        lazyLoad: false,
        ";
            }
            // line 363
            echo "
        lazyLoadEager: 0,

        onLoadedLazy: function(e) { e.element.parent().parent().find('.lazy-spinner').remove() },
        onInitialized: function(e) { \$(e.target).parent().find('.slideshow-placeholder').remove() },

  \t\t});

      ";
            // line 371
            if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
                // line 372
                echo "  \t\t\$('#ftSlideshow_";
                echo ($context["module"] ?? null);
                echo " .btn-prev').click( function() { ftSlideshow_";
                echo ($context["module"] ?? null);
                echo ".trigger('prev.owl.carousel') })
  \t\t\$('#ftSlideshow_";
                // line 373
                echo ($context["module"] ?? null);
                echo " .btn-next').click( function() { ftSlideshow_";
                echo ($context["module"] ?? null);
                echo ".trigger('next.owl.carousel') })
      ";
            }
            // line 375
            echo "
  \t});
  </script>
</div>
";
        }
        // line 380
        echo "
";
        // line 381
        if ((($context["banners"] ?? null) && (($context["type"] ?? null) == "single_banner"))) {
            // line 382
            echo "
";
            // line 383
            if (($context["heading_title"] ?? null)) {
                // line 384
                echo "<div class=\"h5 mb-3\">";
                echo ($context["heading_title"] ?? null);
                echo "</div>
";
            }
            // line 386
            echo "
";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 388
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "type", [], "any", false, false, false, 388)) {
                    // line 389
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 389);
                    echo "
";
                } else {
                    // line 391
                    echo "<div id=\"ft_banner_";
                    echo ($context["module"] ?? null);
                    echo "\" class=\"overflow-hidden border rounded mb-3\">
";
                    // line 392
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 392)) {
                        // line 393
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 393);
                        echo "\" class=\"d-block position-relative\">
";
                    }
                    // line 395
                    echo "  <svg class=\"d-block img-fluid w-100\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "img_width", [], "any", false, false, false, 395);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "img_height", [], "any", false, false, false, 395);
                    echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
  ";
                    // line 396
                    if (($context["lazyload_imgs"] ?? null)) {
                        // line 397
                        echo "  <img
    src=\"image/catalog/frametheme/src_holder.png\"
    data-src=\"";
                        // line 399
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 399);
                        echo "\"
    ";
                        // line 400
                        if (twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 400)) {
                            // line 401
                            echo "    srcset=\"image/catalog/frametheme/src_holder.png\"
    data-srcset=\"";
                            // line 402
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 402);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 402);
                            echo " 2x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image3x", [], "any", false, false, false, 402);
                            echo " 3x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image4x", [], "any", false, false, false, 402);
                            echo " 4x\"
    ";
                        }
                        // line 404
                        echo "    alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "alt", [], "any", false, false, false, 404);
                        echo "\"
    class=\"img-fluid d-block position-absolute t-0 l-0 w-100 h-100 ft-lazy-img\"
  >
  <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 ft-lazy-spinner\">
    <div class=\"spinner-border text-gray-300\"></div>
  </div>
  ";
                    } else {
                        // line 411
                        echo "  <img
    src=\"";
                        // line 412
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 412);
                        echo "\"
    ";
                        // line 413
                        if (twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 413)) {
                            // line 414
                            echo "    srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 414);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image2x", [], "any", false, false, false, 414);
                            echo " 2x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image3x", [], "any", false, false, false, 414);
                            echo " 3x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image4x", [], "any", false, false, false, 414);
                            echo " 4x\"
    ";
                        }
                        // line 416
                        echo "    alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["banner"], "alt", [], "any", false, false, false, 416);
                        echo "\"
    class=\"img-fluid d-block position-absolute t-0 l-0 w-100 h-100\"
  >
  ";
                    }
                    // line 420
                    if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 420)) {
                        // line 421
                        echo "</a>
";
                    }
                    // line 423
                    echo "</div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 426
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/xds_banners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1011 => 426,  1003 => 423,  999 => 421,  997 => 420,  989 => 416,  977 => 414,  975 => 413,  971 => 412,  968 => 411,  957 => 404,  946 => 402,  943 => 401,  941 => 400,  937 => 399,  933 => 397,  931 => 396,  924 => 395,  918 => 393,  916 => 392,  911 => 391,  906 => 389,  904 => 388,  900 => 387,  897 => 386,  891 => 384,  889 => 383,  886 => 382,  884 => 381,  881 => 380,  874 => 375,  867 => 373,  860 => 372,  858 => 371,  848 => 363,  844 => 361,  840 => 359,  838 => 358,  835 => 357,  829 => 354,  826 => 353,  824 => 352,  821 => 351,  816 => 348,  811 => 345,  809 => 344,  806 => 343,  802 => 341,  796 => 338,  793 => 337,  791 => 336,  782 => 329,  776 => 327,  774 => 326,  771 => 325,  765 => 323,  763 => 322,  758 => 320,  751 => 318,  744 => 313,  731 => 302,  729 => 301,  726 => 300,  720 => 296,  718 => 295,  714 => 293,  708 => 292,  705 => 291,  701 => 289,  697 => 287,  694 => 286,  685 => 283,  673 => 281,  671 => 280,  668 => 279,  654 => 273,  640 => 271,  638 => 270,  635 => 269,  633 => 268,  626 => 267,  620 => 265,  618 => 264,  615 => 263,  612 => 262,  606 => 260,  603 => 259,  599 => 258,  593 => 254,  582 => 248,  579 => 247,  573 => 245,  571 => 244,  564 => 239,  558 => 237,  556 => 236,  551 => 235,  549 => 234,  545 => 232,  538 => 227,  531 => 225,  524 => 224,  522 => 223,  511 => 217,  501 => 209,  497 => 207,  493 => 205,  491 => 204,  488 => 203,  482 => 200,  479 => 199,  477 => 198,  474 => 197,  469 => 194,  464 => 191,  462 => 190,  459 => 189,  455 => 187,  449 => 184,  446 => 183,  444 => 182,  437 => 177,  431 => 175,  429 => 174,  424 => 173,  422 => 172,  419 => 171,  415 => 169,  404 => 167,  400 => 166,  397 => 165,  395 => 164,  390 => 162,  383 => 158,  376 => 156,  370 => 152,  364 => 148,  362 => 147,  359 => 146,  346 => 135,  344 => 134,  341 => 133,  335 => 132,  332 => 131,  328 => 129,  324 => 127,  322 => 126,  319 => 125,  310 => 122,  298 => 120,  296 => 119,  293 => 118,  279 => 112,  265 => 110,  263 => 109,  260 => 108,  258 => 107,  252 => 106,  249 => 105,  243 => 103,  241 => 102,  238 => 101,  235 => 100,  229 => 97,  226 => 96,  223 => 95,  219 => 94,  213 => 90,  196 => 76,  182 => 67,  173 => 61,  157 => 47,  154 => 46,  133 => 44,  115 => 43,  113 => 42,  106 => 38,  102 => 36,  96 => 33,  93 => 32,  91 => 31,  78 => 26,  73 => 23,  58 => 10,  56 => 9,  51 => 7,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/xds_banners.twig", "");
    }
}
