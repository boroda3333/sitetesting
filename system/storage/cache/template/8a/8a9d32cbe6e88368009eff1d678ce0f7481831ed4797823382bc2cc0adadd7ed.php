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

/* ft_frame/template/extension/module/featured.twig */
class __TwigTemplate_a4fd633720d8ab577ca4258ce7c5dbe039ee7b8a4cb6f08c81cf23ec503f9449 extends \Twig\Template
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
        echo "<div class=\"products-wall mb-3\">
\t<div class=\"h5 pt-2 mb-3 ml-1\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t<div class=\"m-n1 m-sm-n2\">
\t\t<div class=\"row no-gutters row-cols-2 row-cols-lg-4 row-cols-xxl-5\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t<div class=\"border rounded bg-white m-1 m-sm-2 d-flex flex-column\">
\t\t\t\t\t\t<div class=\"w-100 position-relative text-center px-2 px-sm-3 pt-2 pb-2\">
\t\t\t\t\t\t\t<a href=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"d-inline-block position-relative mx-auto\">
\t\t\t\t\t\t\t\t\t<svg class=\"d-block img-fluid\" width=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["product"], "img_width", [], "any", false, false, false, 12);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "img_height", [], "any", false, false, false, 12);
            echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 13)) {
                echo "srcset=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 13);
                echo " 2x, ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 13);
                echo " 3x, ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 13);
                echo " 4x\"";
            }
            echo " alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
            echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-auto\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"px-2 px-sm-3 pt-2 pb-0\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"product-name\"><a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
            echo "\" class=\"text-dark h6 font-weight-normal line-clamp-2\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
            echo "</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            <div class=\" px-2 px-sm-3 pb-2 pb-sm-3 pt-0 bg-white border-0\">
              ";
            // line 23
            if (((($context["catalog_mode"] ?? null) &&  !($context["hide_price"] ?? null)) ||  !($context["catalog_mode"] ?? null))) {
                // line 24
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t";
                    // line 26
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26)) {
                        // line 27
                        echo "\t\t\t\t\t\t\t\t<div class=\"h6 mb-1\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27);
                        echo "</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t<div class=\"h6 mb-1\">
\t\t\t\t\t\t\t\t\t<s class=\"d-inline-block text-danger font-weight-light\">";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                        echo "</s>
\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block\">";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 31);
                        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 34)) {
                        // line 35
                        echo "\t\t\t\t\t\t\t\t<small class=\"font-weight-light text-muted d-block\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 35);
                        echo "</small>
\t\t\t\t\t\t\t\t";
                    }
                    // line 37
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 39
                echo "              ";
            }
            // line 40
            echo "
              <div class=\"btn-group ";
            // line 41
            if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                echo "d-flex d-md-inline-flex";
            }
            echo " dropup mt-2\">

                ";
            // line 43
            if ( !($context["catalog_mode"] ?? null)) {
                // line 44
                echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 44);
                echo "');\" ";
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 44) <= 0) && ($context["disable_btn_status"] ?? null))) {
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
                // line 52
                if ((($context["qview_status"] ?? null) || ($context["fastorder_status"] ?? null))) {
                    echo "d-none d-md-block";
                }
                echo "\">";
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 52) <= 0) && ($context["disable_btn_status"] ?? null))) {
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
                // line 57
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 57);
                echo "\" class=\"btn btn-light btn-cart-add py-1 px-2 pl-md-2 pr-md-1\">
                  <span class=\"row no-gutters align-items-center justify-content-center flex-nowrap\">
                    <span class=\"col-auto\">
                      <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M14 17H4v2h10v-2zm6-8H4v2h16V9zM4 15h16v-2H4v2zM4 5v2h16V5H4z\"/>
                      </svg>
                    </span>
                    <span class=\"col-auto\">
                      <span class=\"text-truncate mx-2 ";
                // line 65
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
            // line 70
            echo "
                ";
            // line 71
            if ((($context["fastorder_status"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
                // line 72
                echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\"  title=\"";
                echo ($context["g_text_fastorder"] ?? null);
                echo "\" onclick=\"ft_fastorder('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 72);
                echo "')\" ";
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 72) <= 0) && ($context["disable_btn_status"] ?? null))) {
                    echo "disabled";
                }
                echo ">
                  <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M 13 1 L 6 14 L 12 14 L 12 23 L 19 10 L 13 10 L 13 1 z\"></path>
                  </svg>
                </button>
                ";
            }
            // line 78
            echo "

                ";
            // line 80
            if (($context["qview_status"] ?? null)) {
                // line 81
                echo "                <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1\" title=\"";
                echo ($context["g_text_qview"] ?? null);
                echo "\" onclick=\"ft_qview('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
                echo "')\">
                  <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mx-auto\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M12,6.5c3.79,0,7.17,2.13,8.82,5.5c-1.65,3.37-5.02,5.5-8.82,5.5S4.83,15.37,3.18,12C4.83,8.63,8.21,6.5,12,6.5 M12,4.5 C7,4.5,2.73,7.61,1,12c1.73,4.39,6,7.5,11,7.5s9.27-3.11,11-7.5C21.27,7.61,17,4.5,12,4.5L12,4.5z\"/><path d=\"M12,9.5c1.38,0,2.5,1.12,2.5,2.5s-1.12,2.5-2.5,2.5S9.5,13.38,9.5,12S10.62,9.5,12,9.5 M12,7.5c-2.48,0-4.5,2.02-4.5,4.5 s2.02,4.5,4.5,4.5s4.5-2.02,4.5-4.5S14.48,7.5,12,7.5L12,7.5z\"/>
                  </svg>
                </button>
                ";
            }
            // line 87
            echo "
                ";
            // line 88
            if ((($context["wishlist_status"] ?? null) || ($context["compare_status"] ?? null))) {
                // line 89
                echo "                <div class=\"btn-group dropdown dropup position-static\">
                  <div class=\"dropdown-menu dropdown-menu-right w-100\" >
                    ";
                // line 91
                if (($context["wishlist_status"] ?? null)) {
                    // line 92
                    echo "                    <a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 92);
                    echo "');return false\">
                      <span class=\"row no-gutters align-items-center flex-nowrap\">
                        <span class=\"col-auto\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z\"/>
                          </svg>
                        </span>
                        <span class=\"col text-truncate\">";
                    // line 99
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span>
                      </span>
                    </a>
                    ";
                }
                // line 103
                echo "                    ";
                if (($context["compare_status"] ?? null)) {
                    // line 104
                    echo "                    <a href=\"#\" class=\"dropdown-item dropdown-item pl-2 pr-2\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 104);
                    echo "');return false\">
                      <span class=\"row no-gutters align-items-center flex-nowrap\">
                        <span class=\"col-auto\">
                          <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover mr-2\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M 12 4 A 2 2 0 0 0 10.269531 5 L 5 5 L 2 5 L 2 7 L 4 7 L 0 15 C 0 17.761 2.239 20 5 20 C 7.761 20 10 17.761 10 15 L 6 7 L 10.271484 7 A 2 2 0 0 0 12 8 A 2 2 0 0 0 13.730469 7 L 18 7 L 14 15 C 14 17.761 16.239 20 19 20 C 21.761 20 24 17.761 24 15 L 20 7 L 22 7 L 22 5 L 13.728516 5 A 2 2 0 0 0 12 4 z M 5 9.0214844 L 7.9882812 15 L 2.0117188 15 L 5 9.0214844 z M 19 9.0214844 L 21.988281 15 L 16.011719 15 L 19 9.0214844 z\"/>
                          </svg>
                        </span>
                        <span class=\"col text-truncate\">";
                    // line 111
                    echo ($context["button_compare"] ?? null);
                    echo "</span>
                      </span>
                    </a>
                    ";
                }
                // line 115
                echo "                  </div>
                  <button type=\"button\" class=\"btn btn-light btn-cart-add py-1 px-1 px-md-0\" data-toggle=\"dropdown\" data-flip=\"false\" aria-label=\"more\">
                    <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                      <path d=\"M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
                    </svg>
                  </button>
                </div>
                ";
            }
            // line 123
            echo "              </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 129,  315 => 123,  305 => 115,  298 => 111,  287 => 104,  284 => 103,  277 => 99,  266 => 92,  264 => 91,  260 => 89,  258 => 88,  255 => 87,  243 => 81,  241 => 80,  237 => 78,  221 => 72,  219 => 71,  216 => 70,  204 => 65,  192 => 57,  176 => 52,  160 => 44,  158 => 43,  151 => 41,  148 => 40,  145 => 39,  141 => 37,  133 => 35,  130 => 34,  124 => 31,  120 => 30,  117 => 29,  111 => 27,  109 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 19,  67 => 13,  61 => 12,  56 => 10,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/featured.twig", "");
    }
}
