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

/* ft_frame/template/extension/module/frametheme/ft_cart.twig */
class __TwigTemplate_fd5e7e736dbb975dcd1abfd7499a6f3c582e8796d8a0f320e73f35ee93b732b4 extends \Twig\Template
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
        echo "<div id=\"ft_cart\">
  <button type=\"button\" class=\"btn btn-primary btn-block py-2 pl-3 pr-2 d-none d-lg-block\" ";
        // line 2
        if ( !($context["in_cart"] ?? null)) {
            echo " data-toggle=\"modal\" ";
        }
        echo " data-target=\"#ft_popup_cart\" data-loading=\"";
        echo ($context["text_loading"] ?? null);
        echo "\">
\t\t<span class=\"row no-gutters align-items-center my-1\">
\t\t\t<span class=\"col-auto\">
\t\t\t\t<span class=\"cart-icon-wrapper d-block mr-3\">
\t\t\t\t\t<span class=\"loading-icon\">
            <span class=\"spinner-border d-block ft-icon-24 text-white\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"static-icon\">
\t\t\t\t\t\t<svg class=\"d-block ft-icon-24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t</span>
\t\t\t<span class=\"col\">
\t\t\t\t<span id=\"ft_cart_total\" class=\"d-block text-center text-lg-left\">";
        // line 17
        echo ($context["text_items"] ?? null);
        echo "</span>
\t\t\t</span>
\t\t\t<span class=\"col-auto\">
        <svg class=\"d-block ft-icon-24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t</span>
\t</button>
\t<div class=\"modal fade\" id=\"ft_popup_cart\" tabindex=\"-1\" role=\"dialog\">
\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header no-gutters\">
\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t<div class=\"loading-icon mr-3\">
\t\t\t\t\t\t\t<div class=\"spinner-border ft-icon-24 m-0 text-gray-500\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"static-icon mr-3\">
\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"h5 modal-title\">
\t\t\t\t\t\t\t";
        // line 42
        echo ($context["ft_heading_title"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-auto\">
            <a href=\"#\" class=\"d-block ml-2\" data-dismiss=\"modal\">
        \t\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
        \t\t\t\t<path d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\"></path>
        \t\t\t</svg>
        \t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"cart-list\">
\t\t\t\t\t\t";
        // line 55
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 56
            echo "\t\t\t\t\t\t<div class=\"cart-list-product\">
\t\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 58
                echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
                    echo "\" class=\"ml-1 d-block position-relative border rounded overflow-hidden\">
                    <svg width=\"";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "img_width", [], "any", false, false, false, 62);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "img_height", [], "any", false, false, false, 62);
                    echo "\" class=\"d-block img-placeholder\" viewBox=\"0 0 1 1\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 63);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 63)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 63);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 63);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 63);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 63);
                        echo " 4x\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63);
                    echo "\" class=\"d-block position-absolute t-0 l-0\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 73);
                echo "\" class=\"text-dark\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                echo "</strong></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 76));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 77
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-inline-block bg-light text-secondary border-like-form pl-2 pr-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 77);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 77);
                        echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-inline-block bg-light text-secondary border-like-form pl-2 pr-2\">";
                    echo ($context["text_recurring"] ?? null);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 81);
                    echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close ml-2 mr-1 d-sm-none\" onclick=\"cart.remove('";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 86);
                echo "');\">×</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-auto \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3 mb-2 text-left text-sm-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 93);
                echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-row mr-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto ml-sm-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light border px-1\" type=\"button\" onclick=\"cart.updatePopup('";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 99);
                echo "','";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity_minus", [], "any", false, false, false, 99);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13H5v-2h14v2z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-quantity border text-center\" placeholder=\"\" value=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 105);
                echo "\" onchange=\"cart.updatePopup('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 105);
                echo "', \$(this).val());\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light border px-1\" type=\"button\" onclick=\"cart.updatePopup('";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 107);
                echo "','";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity_plus", [], "any", false, false, false, 107);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light border px-1\" type=\"button\" onclick=\"cart.remove('";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 112);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr class=\"mx-n3\">
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 128
                echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"ml-2\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20 6h-2.18c.11-.31.18-.65.18-1 0-1.66-1.34-3-3-3-1.05 0-1.96.54-2.5 1.35l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 11 8.76l1-1.36 1 1.36L15.38 12 17 10.83 14.92 8H20v6z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 137);
                echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-none d-sm-block mr-2\" onclick=\"voucher.remove('";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 140);
                echo "');return false\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close mr-1 d-block d-sm-none\" onclick=\"voucher.remove('";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 145);
                echo "');\">×</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr class=\"mx-n3\">
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart-totals\">
\t\t\t\t\t\t\t<button class=\"btn btn-light btn-block\" data-toggle=\"collapse\" data-target=\"#totals-details\">
                <span class=\"row no-gutters justify-content-center align-items-center\">
                  <span class=\"col-auto\">
                    <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t\t\t\t\t\t\t\t<path  d=\"M19 2h-4.18C14.4.84 13.3 0 12 0c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7 18H5V4h2v3h10V4h2v16z\"/>
  \t\t\t\t\t\t\t\t\t</svg>
                  </span>
                  <span class=\"col-auto\">
                    <span class=\"mx-2\">";
            // line 160
            echo ($context["text_items"] ?? null);
            echo "</span>
                  </span>
                  <span class=\"col-auto\">
                    <svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 20\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t\t\t\t\t\t\t\t<path d=\"M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z\"/>
  \t\t\t\t\t\t\t\t\t</svg>
                  </span>
                </span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div id=\"totals-details\" class=\"collapse\">
\t\t\t\t\t\t\t\t<hr class=\"mx-n3\">
\t\t\t\t\t\t\t\t";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 172
                echo "\t\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t\t<div class=\"col text-right\"><span class=\"mr-2\">";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 173);
                echo ":</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"col text-left\"><strong>";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 174);
                echo "</strong></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 180
            echo "\t\t\t\t\t\t<div class=\"cart-empty text-center p-3\">
\t\t\t\t\t\t\t";
            // line 181
            echo ($context["ft_text_empty"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 184
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"cart-mask bg-white position-absolute t-0 b-0 l-0 r-0 d-none\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer d-block px-0\">
          <div class=\"m-0 px-3\">
  \t\t\t\t\t<div class=\"row\">
  \t\t\t\t\t\t<div class=\"col-12 col-sm-4 order-sm-3\">
  \t\t\t\t\t\t\t<a class=\"btn btn-primary btn-block text-truncate mb-3 mb-sm-0\" href=\"";
        // line 191
        echo ($context["checkout"] ?? null);
        echo "\">";
        echo ($context["ft_text_checkout"] ?? null);
        echo "</a>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t\t<div class=\"col-5 col-sm-4 order-sm-1\">
  \t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light btn-block text-truncate\" data-dismiss=\"modal\">";
        // line 194
        echo ($context["ft_text_continue"] ?? null);
        echo "</a>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t\t<div class=\"col-7 col-sm-4 order-sm-2\">
  \t\t\t\t\t\t\t<a class=\"btn btn-light btn-block text-truncate\" href=\"";
        // line 197
        echo ($context["cart"] ?? null);
        echo "\">";
        echo ($context["ft_text_cart"] ?? null);
        echo "</a>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t</div>
          </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/frametheme/ft_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 197,  395 => 194,  387 => 191,  378 => 184,  372 => 181,  369 => 180,  364 => 177,  355 => 174,  351 => 173,  348 => 172,  344 => 171,  330 => 160,  318 => 150,  307 => 145,  299 => 140,  293 => 137,  282 => 128,  277 => 127,  254 => 112,  244 => 107,  237 => 105,  226 => 99,  217 => 93,  207 => 86,  202 => 83,  194 => 81,  191 => 80,  188 => 79,  177 => 77,  172 => 76,  170 => 75,  163 => 73,  154 => 66,  132 => 63,  126 => 62,  121 => 61,  119 => 60,  115 => 58,  111 => 57,  108 => 56,  106 => 55,  90 => 42,  62 => 17,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/frametheme/ft_cart.twig", "");
    }
}
