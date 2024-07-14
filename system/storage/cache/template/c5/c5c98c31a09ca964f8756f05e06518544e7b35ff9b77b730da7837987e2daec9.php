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

/* ft_frame/template/extension/module/xds_recent_reviews.twig */
class __TwigTemplate_273b4e5b198c83f113c27921779d4208f8e4985814620b381ed3b2e02411b0b0 extends \Twig\Template
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
        echo "<div id=\"ftRecentReviews_";
        echo ($context["module"] ?? null);
        echo "\" class=\"";
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo "mb-3";
        } else {
            echo "mb-4";
        }
        echo "\">
  ";
        // line 2
        if ((($context["heading_title"] ?? null) || twig_in_filter("arrows", ($context["controls"] ?? null)))) {
            // line 3
            echo "  <div class=\"pt-2 mb-3\">
    <div class=\"row\">
      <div class=\"col\">
        ";
            // line 6
            if (($context["heading_title"] ?? null)) {
                // line 7
                echo "        <div class=\"h5 mb-0 ml-1\">";
                echo ($context["heading_title"] ?? null);
                echo "</div>
        ";
            }
            // line 9
            echo "      </div>
      ";
            // line 10
            if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
                // line 11
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
            // line 24
            echo "    </div>
  </div>
  ";
        }
        // line 27
        echo "  <div class=\"m-n1 m-sm-n2\">

    <!--noindex-->
    <!--googleoff: all-->
    <div class=\"carousel-placeholder d-flex\">
      <script>

        items = ";
        // line 34
        echo ($context["items"] ?? null);
        echo ";
        breakpoints = [];
        base_width = window.innerWidth;

        ";
        // line 38
        if (($context["responsive_items"] ?? null)) {
            // line 39
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
                // line 40
                echo "        breakpoints[";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 40);
                echo "] = { ww: ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "breakpoint", [], "any", false, false, false, 40);
                echo ", count: ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 40);
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
            // line 42
            echo "        ";
        }
        // line 43
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

          item = document.querySelector('#ftRecentReviews_";
        // line 58
        echo ($context["module"] ?? null);
        echo " .carousel-placeholder .item');
          item.style.width = items > 0 ? 100 / items + '%' : 100 + '%';

        </script>
        <div class=\"border rounded bg-white m-1 m-sm-2\">
          <div class=\"row no-gutters\">
            <div class=\"product-item col-5 col-md-4 py-3 px-2 px-sm-3 text-center\">
              <div class=\"d-inline-block position-relative mb-2 \">
                <svg class=\"d-block img-fluid\" width=\"";
        // line 66
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["reviews"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "img_width", [], "any", false, false, false, 66);
        echo "\" height=\"";
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["reviews"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "img_height", [], "any", false, false, false, 66);
        echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
                <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
                  <div class=\"spinner-border text-gray-400\"></div>
                </div>
              </div>
              <div class=\"d-flex justify-content-center mb-2\">
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 73
            echo "                <svg class=\"d-block ft-icon-18 text-light m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
                </svg>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "              </div>
              <div class=\"product-name d-block h6 font-weight-normal text-center text-dark overflow-hidden\">
                <span class=\"bg-light\">
                  <span class=\"invisible\">
                    Product name...
                  </span>
                </span>
              </div>
            </div>
            <div class=\"col py-3 pr-3 pl-0\">
              <div class=\"font-weight-bold\">
                <span class=\"bg-light\">
                  <span class=\"invisible\">
                    Author name...
                  </span>
                </span>
              </div>
              <small class=\"d-block text-secondary\">
                <span class=\"bg-light\">
                  <span class=\"invisible\">
                    Date...
                  </span>
                </span>
              </small>
              <hr class=\"my-2 border-light\">
              <div class=\"review-text position-relative font-weight-light\">
                <span class=\"bg-light\">
                  <span class=\"invisible\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita...
                  </span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>

        for(let i = 1; i < items && i < ";
        // line 115
        echo twig_length_filter($this->env, ($context["reviews"] ?? null));
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
    </div>
    <!--googleon: all-->
    <!--/noindex-->

    <div class=\"owl-carousel\">
      ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 134
            echo "      <div class=\"border rounded bg-white m-1 m-sm-2\">
        <div class=\"row no-gutters\">
          <div class=\"col-5 col-md-4 py-3 px-2 px-sm-3 text-center\">
            <a href=\"";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["review"], "product_href", [], "any", false, false, false, 137);
            echo "\" class=\"d-inline-block position-relative mb-2 \">
              <svg class=\"d-block img-fluid\" width=\"";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["review"], "img_width", [], "any", false, false, false, 138);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, $context["review"], "img_height", [], "any", false, false, false, 138);
            echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>

              ";
            // line 140
            if (($context["lazyload_imgs"] ?? null)) {
                // line 141
                echo "              <picture>
  \t\t\t\t\t\t\t";
                // line 142
                if (twig_get_attribute($this->env, $this->source, $context["review"], "product_image2x", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "  \t\t\t\t\t\t\t<source class=\"owl-lazy\" data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image", [], "any", false, false, false, 143);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image2x", [], "any", false, false, false, 143);
                    echo " 2x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image3x", [], "any", false, false, false, 143);
                    echo " 3x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image4x", [], "any", false, false, false, 143);
                    echo " 4x\" srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "thumb_holder", [], "any", false, false, false, 143);
                    echo "\">
  \t\t\t\t\t\t\t";
                }
                // line 145
                echo "  \t\t\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "thumb_holder", [], "any", false, false, false, 145);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image", [], "any", false, false, false, 145);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "product_name", [], "any", false, false, false, 145);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "product_name", [], "any", false, false, false, 145);
                echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto owl-lazy\">
  \t\t\t\t\t\t</picture>
              <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
                <div class=\"spinner-border text-gray-400\"></div>
              </div>
              ";
            } else {
                // line 151
                echo "              <picture>
  \t\t\t\t\t\t\t";
                // line 152
                if (twig_get_attribute($this->env, $this->source, $context["review"], "product_image2x", [], "any", false, false, false, 152)) {
                    // line 153
                    echo "  \t\t\t\t\t\t\t<source srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image", [], "any", false, false, false, 153);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image2x", [], "any", false, false, false, 153);
                    echo " 2x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image3x", [], "any", false, false, false, 153);
                    echo " 3x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image4x", [], "any", false, false, false, 153);
                    echo " 4x\">
  \t\t\t\t\t\t\t";
                }
                // line 155
                echo "  \t\t\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "product_image", [], "any", false, false, false, 155);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "product_name", [], "any", false, false, false, 155);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "product_name", [], "any", false, false, false, 155);
                echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto\">
  \t\t\t\t\t\t</picture>
              ";
            }
            // line 158
            echo "
            </a>
            <div class=\"d-flex justify-content-center mb-2\">
              ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 162
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 162) < $context["i"])) {
                    // line 163
                    echo "              <svg class=\"d-block ft-icon-18 text-gray-400 m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z\"/>
              </svg>
              ";
                } else {
                    // line 167
                    echo "              <svg class=\"d-block ft-icon-18 text-warning m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
              </svg>
              ";
                }
                // line 171
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "            </div>
            <a href=\"";
            // line 173
            echo twig_get_attribute($this->env, $this->source, $context["review"], "product_href", [], "any", false, false, false, 173);
            echo "\" class=\"d-block h6 font-weight-normal text-center text-dark line-clamp-2\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["review"], "product_name", [], "any", false, false, false, 173);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["review"], "product_name", [], "any", false, false, false, 173);
            echo "</a>
          </div>
          <div class=\"col py-3 pr-3 pl-0\">
            <div class=\"row no-gutters\">
              <div class=\"col\">
                <div class=\"font-weight-bold\">";
            // line 178
            echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 178);
            echo "</div>
                <small class=\"d-block text-secondary\">";
            // line 179
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 179);
            echo "</small>
              </div>
              <div class=\"col-auto\">
                ";
            // line 182
            if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 182) == 1)) {
                // line 183
                echo "                <svg class=\"d-block ft-icon-24 m-0 mt-1 text-danger\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M11.99 2C6.47 2 2 6.47 2 12s4.47 10 9.99 10S22 17.53 22 12 17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm4.18-12.24l-1.06 1.06-1.06-1.06L13 8.82l1.06 1.06L13 10.94 14.06 12l1.06-1.06L16.18 12l1.06-1.06-1.06-1.06 1.06-1.06zM7.82 12l1.06-1.06L9.94 12 11 10.94 9.94 9.88 11 8.82 9.94 7.76 8.88 8.82 7.82 7.76 6.76 8.82l1.06 1.06-1.06 1.06zM12 14c-2.33 0-4.31 1.46-5.11 3.5h10.22c-.8-2.04-2.78-3.5-5.11-3.5z\"/>
                </svg>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 186
$context["review"], "rating", [], "any", false, false, false, 186) == 2)) {
                // line 187
                echo "                <svg class=\"d-block ft-icon-24 m-0 mt-1 text-warning\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <circle cx=\"15.5\" cy=\"9.5\" r=\"1.5\"/><circle cx=\"8.5\" cy=\"9.5\" r=\"1.5\"/><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm0-6c-2.33 0-4.32 1.45-5.12 3.5h1.67c.69-1.19 1.97-2 3.45-2s2.75.81 3.45 2h1.67c-.8-2.05-2.79-3.5-5.12-3.5z\"/>
                </svg>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 190
$context["review"], "rating", [], "any", false, false, false, 190) == 3)) {
                // line 191
                echo "                <svg class=\"d-block ft-icon-24 m-0 mt-1 text-secondary\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M9 14h6v1.5H9z\"/><circle cx=\"15.5\" cy=\"9.5\" r=\"1.5\"/><circle cx=\"8.5\" cy=\"9.5\" r=\"1.5\"/><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z\"/>
                </svg>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 194
$context["review"], "rating", [], "any", false, false, false, 194) == 4)) {
                // line 195
                echo "                <svg class=\"d-block ft-icon-24 m-0 mt-1 text-primary\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <circle cx=\"15.5\" cy=\"9.5\" r=\"1.5\"/><circle cx=\"8.5\" cy=\"9.5\" r=\"1.5\"/><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm0-4c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.7 1.19-1.97 2-3.45 2z\"/>
                </svg>
                ";
            } else {
                // line 199
                echo "                <svg class=\"d-block ft-icon-24 m-0 mt-1 text-success\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M11.99 2C6.47 2 2 6.47 2 12s4.47 10 9.99 10S22 17.53 22 12 17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm1-10.06L14.06 11l1.06-1.06L16.18 11l1.06-1.06-2.12-2.12zm-4.12 0L9.94 11 11 9.94 8.88 7.82 6.76 9.94 7.82 11zM12 17.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z\"/>
                </svg>
                ";
            }
            // line 203
            echo "              </div>
            </div>
            <hr class=\"my-2\">
            <div class=\"review-text position-relative font-weight-light\">
              ";
            // line 207
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 207);
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["review"], "product_href", [], "any", false, false, false, 207);
            echo "\">&rarr;</a>
            </div>
          </div>
        </div>

      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "    </div>
  </div>
  ";
        // line 216
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            // line 217
            echo "  <div class=\"owl-pagination text-center text-sm-left px-2 py-2\">
    <button class=\"btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0 mr-0\"><span></span></button>
  </div>
\t";
        }
        // line 221
        echo "</div>
<script>
\t\$(function () {

\t\tvar ftRecentReviews_";
        // line 225
        echo ($context["module"] ?? null);
        echo " = \$('#ftRecentReviews_";
        echo ($context["module"] ?? null);
        echo " .owl-carousel');

\t\tftRecentReviews_";
        // line 227
        echo ($context["module"] ?? null);
        echo ".owlCarousel({

      mouseDrag: false,
      touchDrag: true,
      loop: false,
      rewind: true,

      items: ";
        // line 234
        echo ($context["items"] ?? null);
        echo ",

      ";
        // line 236
        if (($context["responsive_items"] ?? null)) {
            // line 237
            echo "        responsive: {
        ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 239
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "breakpoint", [], "any", false, false, false, 239);
                echo " : { items: ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 239);
                echo " },
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "        },
      ";
        }
        // line 243
        echo "
      stageClass: 'owl-stage d-flex justify-content-between',
      itemClass: 'owl-item d-flex float-none',

\t\t\tnav: false,
      ";
        // line 248
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            // line 249
            echo "\t\t\tdots: true,
\t\t\tdotsContainer: '#ftRecentReviews_";
            // line 250
            echo ($context["module"] ?? null);
            echo " .owl-pagination',
      dotClass: 'btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0',
      ";
        } else {
            // line 253
            echo "      dots: false,
      ";
        }
        // line 255
        echo "\t\t\t";
        if (($context["autoplay"] ?? null)) {
            // line 256
            echo "\t\t\tautoplay: true,
\t\t\tautoplayTimeout: ";
            // line 257
            echo ($context["autoplay_speed"] ?? null);
            echo ",
\t\t\tautoplayHoverPause: true,
\t\t\t";
        }
        // line 260
        echo "
      ";
        // line 261
        if (($context["lazyload_imgs"] ?? null)) {
            // line 262
            echo "      lazyLoad: true,
      ";
        } else {
            // line 264
            echo "      lazyLoad: false,
      ";
        }
        // line 266
        echo "
      lazyLoadEager: 0,

      onLoadedLazy: function(e) { e.element.parent().parent().find('.lazy-spinner').remove() },
      onInitialized: function(e) { \$(e.target).parent().find('.carousel-placeholder').remove()},
      onRefreshed: function(e) {

        \$(e.target).find('.owl-item').each(function() { this.style.minWidth = this.style.width });
        let arrows = \$('#ftRecentReviews_";
        // line 274
        echo ($context["module"] ?? null);
        echo " .btn-prev, #ftRecentReviews_";
        echo ($context["module"] ?? null);
        echo " .btn-next ');
        if (e.item.count <= e.page.size) { arrows.attr('disabled','disabled') } else { arrows.removeAttr('disabled') }

      },
\t\t});

\t\t\$('#ftRecentReviews_";
        // line 280
        echo ($context["module"] ?? null);
        echo " .btn-prev').click(function() { ftRecentReviews_";
        echo ($context["module"] ?? null);
        echo ".trigger('prev.owl.carousel'); });
\t\t\$('#ftRecentReviews_";
        // line 281
        echo ($context["module"] ?? null);
        echo " .btn-next').click(function() { ftRecentReviews_";
        echo ($context["module"] ?? null);
        echo ".trigger('next.owl.carousel'); });

\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/xds_recent_reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 281,  589 => 280,  578 => 274,  568 => 266,  564 => 264,  560 => 262,  558 => 261,  555 => 260,  549 => 257,  546 => 256,  543 => 255,  539 => 253,  533 => 250,  530 => 249,  528 => 248,  521 => 243,  517 => 241,  506 => 239,  502 => 238,  499 => 237,  497 => 236,  492 => 234,  482 => 227,  475 => 225,  469 => 221,  463 => 217,  461 => 216,  457 => 214,  442 => 207,  436 => 203,  430 => 199,  424 => 195,  422 => 194,  417 => 191,  415 => 190,  410 => 187,  408 => 186,  403 => 183,  401 => 182,  395 => 179,  391 => 178,  379 => 173,  376 => 172,  370 => 171,  364 => 167,  358 => 163,  355 => 162,  351 => 161,  346 => 158,  335 => 155,  323 => 153,  321 => 152,  318 => 151,  302 => 145,  288 => 143,  286 => 142,  283 => 141,  281 => 140,  274 => 138,  270 => 137,  265 => 134,  261 => 133,  240 => 115,  200 => 77,  191 => 73,  187 => 72,  176 => 66,  165 => 58,  148 => 43,  145 => 42,  124 => 40,  106 => 39,  104 => 38,  97 => 34,  88 => 27,  83 => 24,  68 => 11,  66 => 10,  63 => 9,  57 => 7,  55 => 6,  50 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/xds_recent_reviews.twig", "");
    }
}
