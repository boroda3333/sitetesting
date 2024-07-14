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

/* ft_frame/template/extension/module/xds_category_wall.twig */
class __TwigTemplate_e060a7962882f0a74a528f12459fbd25e23faf64c312dc3b01bf0eda76c5195b extends \Twig\Template
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
        if ((($context["type"] ?? null) == 0)) {
            // line 2
            echo "<div id=\"ftCategoryWall_";
            echo ($context["module"] ?? null);
            echo "\" class=\"";
            if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
                echo "mb-3";
            } else {
                echo "mb-4";
            }
            echo "\">
  ";
            // line 3
            if ((($context["heading_title"] ?? null) || twig_in_filter("arrows", ($context["controls"] ?? null)))) {
                // line 4
                echo "  <div class=\"pt-2 mb-3\">
    <div class=\"row\">
      <div class=\"col\">
        ";
                // line 7
                if (($context["heading_title"] ?? null)) {
                    // line 8
                    echo "        <div class=\"h5 mb-0 ml-1\">";
                    echo ($context["heading_title"] ?? null);
                    echo "</div>
        ";
                }
                // line 10
                echo "      </div>
      ";
                // line 11
                if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
                    // line 12
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
                // line 25
                echo "    </div>
  </div>
  ";
            }
            // line 28
            echo "
  <div class=\"m-n1 m-sm-n2\">
    <!--noindex-->
    <!--googleoff: all-->
    <div class=\"carousel-placeholder d-flex\">
      <script>

        items = ";
            // line 35
            echo ($context["items"] ?? null);
            echo ";
        breakpoints = [];
        base_width = window.innerWidth;

        ";
            // line 39
            if (($context["responsive_items"] ?? null)) {
                // line 40
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
                    // line 41
                    echo "        breakpoints[";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 41);
                    echo "] = { ww: ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "breakpoint", [], "any", false, false, false, 41);
                    echo ", count: ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 41);
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
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        breakpoints.sort((a, b) => a.ww > b.ww ? 1 : -1);
        breakpoints.forEach(function(breakpoint, i, breakpoints) {

          next_bp_vw = breakpoints[i + 1] != null ? breakpoints[i + 1].ww : 9999;

          if (breakpoint.ww <= base_width && next_bp_vw > base_width) {
            items = breakpoint.count;
          }
        });

      </script>
      <div class=\"item d-flex\">
        <script>

          item = document.querySelector('#ftCategoryWall_";
            // line 59
            echo ($context["module"] ?? null);
            echo " .carousel-placeholder .item');
          item.style.width = items > 0 ? 100 / items + '%' : 100 + '%';

        </script>
        <div class=\"w-100 border rounded bg-white p-3 m-1 m-sm-2 text-center\">
          <div class=\"d-inline-block position-relative\">
            <svg class=\"d-block img-fluid w-100\" width=\"";
            // line 65
            echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["categories"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "img_width", [], "any", false, false, false, 65);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["categories"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "img_height", [], "any", false, false, false, 65);
            echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
            <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
              <div class=\"spinner-border text-gray-400\"></div>
            </div>
          </div>
          <div class=\"h6 d-block mb-0 mt-2 line-clamp-1\">
            <span class=\"bg-light\">
              <span class=\"invisible\">
                Category name...
              </span>
            </span>
          </div>
        </div>
      </div>
      <script>

        for(let i = 1; i < items && i < ";
            // line 81
            echo twig_length_filter($this->env, ($context["categories"] ?? null));
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
    <div  class=\"owl-carousel\">
      ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 99
                echo "      <div class=\"category-item w-100\">

        <div class=\"position-relative border rounded bg-white p-3 m-1 m-sm-2 overflow-hidden ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, $context["category"], "active", [], "any", false, false, false, 101)) {
                    echo "border-primary";
                }
                echo "\">
          <a class=\"text-dark text-decoration-none d-block text-center \" ";
                // line 102
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 102) && (($context["click_action"] ?? null) == 1))) {
                    echo "data-toggle=\"collapse\" href=\"#subcategory-wall-";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 102);
                    echo "-";
                    echo ($context["module"] ?? null);
                    echo "\"";
                } else {
                    echo "href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 102);
                    echo "\"";
                }
                echo ">
            <div class=\"d-inline-block position-relative\">
              <svg class=\"d-block img-fluid w-100\" width=\"";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["category"], "img_width", [], "any", false, false, false, 104);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "img_height", [], "any", false, false, false, 104);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>

              ";
                // line 106
                if (($context["lazyload_imgs"] ?? null)) {
                    // line 107
                    echo "              <picture>
                ";
                    // line 108
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 108)) {
                        // line 109
                        echo "                <source class=\"owl-lazy\" data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 109);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 109);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb3x", [], "any", false, false, false, 109);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb4x", [], "any", false, false, false, 109);
                        echo " 4x\" srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb_holder", [], "any", false, false, false, 109);
                        echo "\">
                ";
                    }
                    // line 111
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb_holder", [], "any", false, false, false, 111);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 111);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 111);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 111);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid w-100 d-block owl-lazy\">
              </picture>
              <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
                <div class=\"spinner-border text-gray-400\"></div>
              </div>
              ";
                } else {
                    // line 117
                    echo "              <picture>
                ";
                    // line 118
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 118)) {
                        // line 119
                        echo "                <source srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 119);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 119);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb3x", [], "any", false, false, false, 119);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb4x", [], "any", false, false, false, 119);
                        echo " 4x\">
                ";
                    }
                    // line 121
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 121);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 121);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 121);
                    echo "\" class=\"position-absolute t-0 l-0 img-fluid w-100 d-block\">
              </picture>
              ";
                }
                // line 124
                echo "

            </div>
            <div class=\"h6 d-block mb-0 mt-2 line-clamp-1\">";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 127);
                echo "</div>
          </a>
          ";
                // line 129
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 129) && (($context["click_action"] ?? null) == 1))) {
                    // line 130
                    echo "          <div class=\"collapse w-100 position-absolute b-0 l-0 z-index-2\" id=\"subcategory-wall-";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 130);
                    echo "-";
                    echo ($context["module"] ?? null);
                    echo "\" data-parent=\"#ftCategoryWall_";
                    echo ($context["module"] ?? null);
                    echo "\">
            <div class=\"bg-white border-top shadow px-3 pb-2 pt-2 rounded-0 ";
                    // line 131
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "active", [], "any", false, false, false, 131)) {
                        echo "border-primary";
                    }
                    echo "\">
              <ul class=\"list-unstyled m-0\">
                ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 133));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 134
                        echo "                <li class=\"mt-1 d-block\"><a class=\"text-dark line-clamp-1\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 134);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 134);
                        echo "</a></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "                <li><hr class=\"my-2 mx-n3\"></li>
                <li class=\"d-block bg-light mx-n3 my-n2 px-3 py-2\"><a class=\"text-dark text-decoration-none line-clamp-1\" href=\"";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 137);
                    echo "\">";
                    echo ($context["g_text_all"] ?? null);
                    echo "</a></li>
              </ul>
      \t\t\t\t<a class=\"d-block position-absolute t-0 r-0 p-1 rounded-circle m-1\" data-toggle=\"collapse\" href=\"#subcategory-wall-";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 139);
                    echo "-";
                    echo ($context["module"] ?? null);
                    echo "\">
      \t\t\t\t\t<svg class=\"d-block ft-icon-18 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
      \t\t\t\t\t\t<path d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\"></path>
      \t\t\t\t\t</svg>
      \t\t\t\t</a>
            </div>
          </div>
          ";
                }
                // line 147
                echo "        </div>

      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "    </div>
  </div>
  ";
            // line 153
            if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
                // line 154
                echo "  <div class=\"owl-pagination text-center text-sm-left px-2 py-2\">
    <button class=\"btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0 mr-0\"><span></span></button>
  </div>
  ";
            }
            // line 158
            echo "<script>
\t\$(function () {

\t\tvar ftCategoryWall_";
            // line 161
            echo ($context["module"] ?? null);
            echo " = \$('#ftCategoryWall_";
            echo ($context["module"] ?? null);
            echo " .owl-carousel');

\t\tftCategoryWall_";
            // line 163
            echo ($context["module"] ?? null);
            echo ".owlCarousel({
      mouseDrag: false,
      touchDrag: true,
      loop: false,
      rewind: true,

      items: ";
            // line 169
            echo ($context["items"] ?? null);
            echo ",

      ";
            // line 171
            if (($context["responsive_items"] ?? null)) {
                // line 172
                echo "        responsive: {
        ";
                // line 173
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 174
                    echo "        ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "breakpoint", [], "any", false, false, false, 174);
                    echo " : { items: ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 174);
                    echo " },
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "        },
      ";
            }
            // line 178
            echo "
      stageClass: 'owl-stage d-flex justify-content-between',
      itemClass: 'owl-item d-flex float-none',

      nav: false,
      ";
            // line 183
            if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
                // line 184
                echo "      dots: true,
      dotsContainer: '#ftCategoryWall_";
                // line 185
                echo ($context["module"] ?? null);
                echo " .owl-pagination',
      dotClass: 'btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0',
      ";
            } else {
                // line 188
                echo "      dots: false,
      ";
            }
            // line 190
            echo "      ";
            if (($context["autoplay"] ?? null)) {
                // line 191
                echo "      autoplay: true,
      autoplayTimeout: ";
                // line 192
                echo ($context["autoplay_speed"] ?? null);
                echo ",
      autoplayHoverPause: true,
      ";
            }
            // line 195
            echo "
      ";
            // line 196
            if (($context["lazyload_imgs"] ?? null)) {
                // line 197
                echo "      lazyLoad: true,
      ";
            } else {
                // line 199
                echo "      lazyLoad: false,
      ";
            }
            // line 201
            echo "
      lazyLoadEager: 0,

      onLoadedLazy: function(e) { e.element.parent().parent().find('.lazy-spinner').remove() },
      onInitialized: function(e) { \$(e.target).parent().find('.carousel-placeholder').remove()},
      onRefreshed: function(e) {

        \$(e.target).find('.owl-item').each(function() { this.style.minWidth = this.style.width });
        let arrows = \$('#ftCategoryWall_";
            // line 209
            echo ($context["module"] ?? null);
            echo " .btn-prev, #ftCategoryWall_";
            echo ($context["module"] ?? null);
            echo " .btn-next ');
        if (e.item.count <= e.page.size) { arrows.attr('disabled','disabled') } else { arrows.removeAttr('disabled') }

      },
\t\t});

\t\t\$('#ftCategoryWall_";
            // line 215
            echo ($context["module"] ?? null);
            echo " .btn-prev').click(function() { ftCategoryWall_";
            echo ($context["module"] ?? null);
            echo ".trigger('prev.owl.carousel'); });
\t\t\$('#ftCategoryWall_";
            // line 216
            echo ($context["module"] ?? null);
            echo " .btn-next').click(function() { ftCategoryWall_";
            echo ($context["module"] ?? null);
            echo ".trigger('next.owl.carousel'); });

\t});
</script>

</div>
";
        }
        // line 223
        echo "
";
        // line 224
        if ((($context["type"] ?? null) == 1)) {
            // line 225
            echo "
";
            // line 226
            if (($context["heading_title"] ?? null)) {
                // line 227
                echo "<div class=\"pt-2 mb-3\">
  <div class=\"row\">
    <div class=\"col\">
      <div class=\"h5 mb-0 ml-1\">";
                // line 230
                echo ($context["heading_title"] ?? null);
                echo "</div>
    </div>
  </div>
</div>
";
            }
            // line 235
            echo "

<div id=\"category-wall-";
            // line 237
            echo ($context["module"] ?? null);
            echo "\" class=\"category-wall row no-gutters row-cols-2 row-cols-sm-3 row-cols-lg-5 row-cols-xxl-6  mb-3 mx-n2\">
";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 239
                echo "<div class=\"col mb-3\">
  <div class=\"h-100 position-relative card card-body p-3 mx-2 overflow-hidden ";
                // line 240
                if (twig_get_attribute($this->env, $this->source, $context["category"], "active", [], "any", false, false, false, 240)) {
                    echo "border-primary";
                }
                echo "\">
    <a class=\"text-dark text-decoration-none  text-center \" ";
                // line 241
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 241) && (($context["click_action"] ?? null) == 1))) {
                    echo "data-toggle=\"collapse\" href=\"#subcategory-wall-";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 241);
                    echo "-";
                    echo ($context["module"] ?? null);
                    echo "\"";
                } else {
                    echo "href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 241);
                    echo "\"";
                }
                echo ">
      <div class=\"d-inline-block position-relative\">
        <svg class=\"d-block img-fluid\" width=\"";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["category"], "img_width", [], "any", false, false, false, 243);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "img_height", [], "any", false, false, false, 243);
                echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
        <img src=\"";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 244);
                echo "\" alt=\"\" ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 244)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 244);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 244);
                    echo " 2x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb3x", [], "any", false, false, false, 244);
                    echo " 3x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb4x", [], "any", false, false, false, 244);
                    echo " 4x\"";
                }
                echo " class=\"position-absolute t-0 l-0 img-fluid d-block w-auto\">
      </div>
      <div class=\"h6 d-block mb-0 mt-2\">";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 246);
                echo "</div>
    </a>
    ";
                // line 248
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 248) && (($context["click_action"] ?? null) == 1))) {
                    // line 249
                    echo "    <div class=\"collapse w-100 position-absolute b-0 l-0 z-index-2\" id=\"subcategory-wall-";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 249);
                    echo "-";
                    echo ($context["module"] ?? null);
                    echo "\" data-parent=\"#category-wall-";
                    echo ($context["module"] ?? null);
                    echo "\">
      <div class=\"bg-white border-top shadow px-3 pb-2 pt-2 rounded-0 ";
                    // line 250
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "active", [], "any", false, false, false, 250)) {
                        echo "border-primary";
                    }
                    echo "\">
        <ul class=\"list-unstyled m-0\">
          ";
                    // line 252
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 252));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 253
                        echo "          <li class=\"mt-1 d-block\"><a class=\"text-dark line-clamp-1\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 253);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 253);
                        echo "</a></li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 255
                    echo "          <li><hr class=\"my-2 mx-n3\"></li>
          <li class=\"d-block bg-light mx-n3 my-n2 px-3 py-2\"><a class=\"text-dark text-decoration-none line-clamp-1\" href=\"";
                    // line 256
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 256);
                    echo "\">";
                    echo ($context["g_text_all"] ?? null);
                    echo "</a></li>
        </ul>
        <a class=\"d-block position-absolute t-0 r-0 p-1 rounded-circle m-1\" data-toggle=\"collapse\" href=\"#subcategory-wall-";
                    // line 258
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 258);
                    echo "-";
                    echo ($context["module"] ?? null);
                    echo "\">
          <svg class=\"d-block ft-icon-18 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\"></path>
          </svg>
        </a>
      </div>
    </div>
    ";
                }
                // line 266
                echo "  </div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "</div>

";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/xds_category_wall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 269,  684 => 266,  671 => 258,  664 => 256,  661 => 255,  650 => 253,  646 => 252,  639 => 250,  630 => 249,  628 => 248,  623 => 246,  606 => 244,  600 => 243,  585 => 241,  579 => 240,  576 => 239,  572 => 238,  568 => 237,  564 => 235,  556 => 230,  551 => 227,  549 => 226,  546 => 225,  544 => 224,  541 => 223,  529 => 216,  523 => 215,  512 => 209,  502 => 201,  498 => 199,  494 => 197,  492 => 196,  489 => 195,  483 => 192,  480 => 191,  477 => 190,  473 => 188,  467 => 185,  464 => 184,  462 => 183,  455 => 178,  451 => 176,  440 => 174,  436 => 173,  433 => 172,  431 => 171,  426 => 169,  417 => 163,  410 => 161,  405 => 158,  399 => 154,  397 => 153,  393 => 151,  384 => 147,  371 => 139,  364 => 137,  361 => 136,  350 => 134,  346 => 133,  339 => 131,  330 => 130,  328 => 129,  323 => 127,  318 => 124,  307 => 121,  295 => 119,  293 => 118,  290 => 117,  274 => 111,  260 => 109,  258 => 108,  255 => 107,  253 => 106,  246 => 104,  231 => 102,  225 => 101,  221 => 99,  217 => 98,  197 => 81,  176 => 65,  167 => 59,  150 => 44,  147 => 43,  126 => 41,  108 => 40,  106 => 39,  99 => 35,  90 => 28,  85 => 25,  70 => 12,  68 => 11,  65 => 10,  59 => 8,  57 => 7,  52 => 4,  50 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/xds_category_wall.twig", "");
    }
}
