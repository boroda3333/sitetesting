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

/* ft_frame/template/product/compare.twig */
class __TwigTemplate_d9e3f87bc74f213f07a4f764c0dac56f43083cc0bc01d3c95d688e4eee49f99a extends \Twig\Template
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
<div id=\"product-compare\" class=\"container\">
";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 8
        echo "  <div class=\"row\">

\t\t";
        // line 10
        if (($context["column_left"] ?? null)) {
            // line 11
            echo "\t\t<div class=\"col-12 col-sm col-lg-3 order-lg-1 col-aside\">
\t\t\t";
            // line 12
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
\t\t";
        // line 22
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-lg-6";
            // line 24
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-lg-9";
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "    ";
            $context["class"] = "col-lg";
            // line 28
            echo "    ";
        }
        // line 29
        echo "
    <div id=\"content\" class=\"col-12 col-lg order-lg-2 mb-3\">
\t\t\t";
        // line 31
        echo ($context["content_top"] ?? null);
        echo "
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb p-0 mb-3 bg-transparent\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
          ";
        // line 34
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
            // line 35
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35) == 1)) {
                // line 36
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 37);
                echo "\"  itemprop=\"item\">
              <meta itemprop=\"name\" content=\"";
                // line 38
                echo ($context["g_text_home"] ?? null);
                echo "\" />
            \t<svg class=\"ft-icon-18 d-block\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t\t<path d=\"M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z\"/>
            \t</svg>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43);
                echo "\" />
          </li>
          ";
            } elseif ((twig_length_filter($this->env,             // line 45
($context["breadcrumbs"] ?? null)) != twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45))) {
                // line 46
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 47);
                echo "\" itemprop=\"item\">
              <span itemprop=\"name\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 48);
                echo "</span>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50);
                echo "\" />
          </li>
          ";
            } else {
                // line 53
                echo "          <li class=\"breadcrumb-item p-0 active\">
            <span>";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 54);
                echo "</span>
          </li>
          ";
            }
            // line 57
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
        // line 58
        echo "        </ol>
      </nav>
      <h1 class=\"h2 mb-4\">";
        // line 60
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 61
        if (($context["products"] ?? null)) {
            // line 62
            echo "\t\t\t<div class=\"table-responsive\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 66
            echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
            echo "\"><strong>";
            echo ($context["text_product"] ?? null);
            echo "</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
            // line 71
            echo ($context["text_name"] ?? null);
            echo "</td>
            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 73
                echo "            <td><a class=\"text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 73);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                echo "</strong></a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo " </tr>
          <tr>
            <td>";
            // line 76
            echo ($context["text_image"] ?? null);
            echo "</td>
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "            <td>
              ";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "              <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 80)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 80);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb3x", [], "any", false, false, false, 80);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb4x", [], "any", false, false, false, 80);
                        echo " 4x\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                    echo "\" class=\"img-fluid\" />
              ";
                }
                // line 82
                echo "            </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo " </tr>
          <tr>
            <td>";
            // line 85
            echo ($context["text_price"] ?? null);
            echo "</td>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 87
                echo "            <td>";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "              ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 88)) {
                        // line 89
                        echo "              ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                        echo "
              ";
                    } else {
                        // line 90
                        echo " <strike>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                        echo "</strike> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 90);
                        echo "
              ";
                    }
                    // line 92
                    echo "              ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo " </tr>
          <tr>
            <td>";
            // line 95
            echo ($context["text_model"] ?? null);
            echo "</td>
            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 97
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 97);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo " </tr>
          <tr>
            <td>";
            // line 100
            echo ($context["text_manufacturer"] ?? null);
            echo "</td>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 102);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo " </tr>
          <tr>
            <td>";
            // line 105
            echo ($context["text_availability"] ?? null);
            echo "</td>
            ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 107
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 107);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo " </tr>
        ";
            // line 109
            if (($context["review_status"] ?? null)) {
                // line 110
                echo "        <tr>
          <td>";
                // line 111
                echo ($context["text_rating"] ?? null);
                echo "</td>
          ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 113
                    echo "          <td class=\"rating\">


            <div class=\"d-flex\">
              ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 118
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 118) < $context["i"])) {
                            // line 119
                            echo "              <svg class=\"d-block ft-icon-24 m-0 text-gray-400\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z\"/>
              </svg>
              ";
                        } else {
                            // line 123
                            echo "              <svg class=\"d-block ft-icon-24 text-warning m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
              </svg>
              ";
                        }
                        // line 127
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "            </div>

            ";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 130);
                    echo "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo " </tr>
        ";
            }
            // line 133
            echo "        <tr>
          <td>";
            // line 134
            echo ($context["text_summary"] ?? null);
            echo "</td>
          ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 136
                echo "          <td class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 136);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo " </tr>
        <tr>
          <td>";
            // line 139
            echo ($context["text_weight"] ?? null);
            echo "</td>
          ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 141
                echo "          <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 141);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo " </tr>
        <tr>
          <td>";
            // line 144
            echo ($context["text_dimension"] ?? null);
            echo "</td>
          ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 146
                echo "          <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 146);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 146);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 146);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo " </tr>
          </tbody>

        ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 151
                echo "        <thead>
          <tr>
            <td colspan=\"";
                // line 153
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 153);
                echo "</strong></td>
          </tr>
        </thead>
        ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 156));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 157
                    echo "        <tbody>
          <tr>
            <td>";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 159);
                    echo "</td>
            ";
                    // line 160
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 161
                        echo "            ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 161)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 162
                            echo "            <td> ";
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 162)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
            ";
                        } else {
                            // line 164
                            echo "            <td></td>
            ";
                        }
                        // line 166
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 167
                    echo "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "        <tr>
          <td></td>
          ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 174
                echo "          <td><input type=\"button\" value=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary d-none\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 174);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 174);
                echo "');\" />
            <a href=\"";
                // line 175
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 175);
                echo "\" class=\"btn btn-danger\">";
                echo ($context["button_remove"] ?? null);
                echo "</a></td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo " </tr>
      </table>
\t\t\t</div>
      ";
        } else {
            // line 180
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
            // line 186
            echo "      ";
        }
        // line 187
        echo "    </div>
  </div>
\t";
        // line 189
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 191
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 191,  636 => 189,  632 => 187,  629 => 186,  624 => 180,  618 => 176,  608 => 175,  599 => 174,  595 => 173,  591 => 171,  585 => 170,  577 => 167,  571 => 166,  567 => 164,  561 => 162,  558 => 161,  554 => 160,  550 => 159,  546 => 157,  542 => 156,  534 => 153,  530 => 151,  526 => 150,  521 => 147,  508 => 146,  504 => 145,  500 => 144,  496 => 142,  487 => 141,  483 => 140,  479 => 139,  475 => 137,  466 => 136,  462 => 135,  458 => 134,  455 => 133,  451 => 131,  443 => 130,  439 => 128,  433 => 127,  427 => 123,  421 => 119,  418 => 118,  414 => 117,  408 => 113,  404 => 112,  400 => 111,  397 => 110,  395 => 109,  392 => 108,  383 => 107,  379 => 106,  375 => 105,  371 => 103,  362 => 102,  358 => 101,  354 => 100,  350 => 98,  341 => 97,  337 => 96,  333 => 95,  329 => 93,  320 => 92,  312 => 90,  306 => 89,  303 => 88,  300 => 87,  296 => 86,  292 => 85,  288 => 83,  281 => 82,  259 => 80,  257 => 79,  254 => 78,  250 => 77,  246 => 76,  242 => 74,  231 => 73,  227 => 72,  223 => 71,  213 => 66,  207 => 62,  205 => 61,  201 => 60,  197 => 58,  183 => 57,  177 => 54,  174 => 53,  168 => 50,  163 => 48,  159 => 47,  156 => 46,  154 => 45,  149 => 43,  141 => 38,  137 => 37,  134 => 36,  131 => 35,  114 => 34,  108 => 31,  104 => 29,  101 => 28,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  86 => 23,  84 => 22,  81 => 21,  75 => 18,  72 => 17,  70 => 16,  67 => 15,  61 => 12,  58 => 11,  56 => 10,  52 => 8,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/product/compare.twig", "");
    }
}
