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

/* ft_frame/template/extension/module/frametheme/ft_menu.twig */
class __TwigTemplate_b7053c79c01e07c7f17872ad2f4d0c1bd1e3f66831b7ff9119b607b20f020944 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<nav id=\"ftMenu\" class=\"dropdown ";
            if (($context["menu_show"] ?? null)) {
                echo "d-show";
            }
            echo "\">
\t<button type=\"button\" class=\"btn btn-block btn-danger shadow-none py-2 pl-3 pr-2 d-none d-lg-block\" data-toggle=\"dropdown\">
\t\t<span class=\"row no-gutters align-items-center my-1\">
\t\t\t<span class=\"col-auto\">
\t\t\t\t<svg class=\"d-block ft-icon-24\" viewBox=\"0 0 24 24\"  xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t\t<span class=\"col\">
\t\t\t\t<strong>";
            // line 11
            echo ($context["text_category"] ?? null);
            echo "</strong>
\t\t\t</span>
\t\t\t<span class=\"col-auto\">
\t\t\t\t<svg class=\"d-block ft-icon-24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t</span>
\t</button>
\t<div id=\"d_category_menu_list\" class=\"dropdown-menu category-menu-list shadow border border-top-0 rounded-bottom p-0 m-0 w-100 ";
            // line 20
            if (($context["menu_show"] ?? null)) {
                echo "d-lg-block";
            }
            echo "\">
\t\t";
            // line 21
            if (($context["add_cat_links_status"] ?? null)) {
                // line 22
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["add_category_menu"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 23
                    echo "\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "\t\t<span class=\"category-menu-item item-level-1 p-0 border-top d-block\">
\t\t\t<a href=\"";
                        // line 25
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 25);
                        echo "\" class=\"link-level-1 d-block text-dark text-decoration-none py-2 pl-3\">
\t\t\t\t<span class=\"row no-gutters py-1\">
\t\t\t\t\t";
                        // line 27
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "html", [], "any", false, false, false, 27)) {
                            // line 28
                            echo "\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t";
                            // line 29
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "html", [], "any", false, false, false, 29);
                            echo "
\t\t\t\t\t</span>
\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 31
$context["item"], "image_peace", [], "any", false, false, false, 31)) {
                            // line 32
                            echo "\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t<span class=\"menu-icon-holder d-block mr-3\">
\t\t\t\t\t\t\t";
                            // line 34
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "image_peace", [], "any", false, false, false, 34)) {
                                // line 35
                                echo "\t\t\t\t\t\t\t<img class=\"icon peace-icon ";
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "image_hover", [], "any", false, false, false, 35)) {
                                    echo "has-hover";
                                }
                                echo "\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "image_peace", [], "any", false, false, false, 35);
                                echo "\" alt=\"";
                                echo strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 35));
                                echo " 0\" />
\t\t\t\t\t\t\t";
                            }
                            // line 37
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "image_peace", [], "any", false, false, false, 37) && twig_get_attribute($this->env, $this->source, $context["item"], "image_hover", [], "any", false, false, false, 37))) {
                                // line 38
                                echo "\t\t\t\t\t\t\t<img class=\"icon hover-icon\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "image_hover", [], "any", false, false, false, 38);
                                echo "\" alt=\"";
                                echo strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 38));
                                echo " 1\" />
\t\t\t\t\t\t\t";
                            }
                            // line 40
                            echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t\t";
                        }
                        // line 43
                        echo "\t\t\t\t\t<span class=\"col\">
\t\t\t\t\t";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 44);
                        echo "
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t</a>
\t\t</span>
\t\t";
                    }
                    // line 50
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t";
            }
            // line 52
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 53
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "\t\t<span class=\"category-menu-item item-level-1 p-0 border-top d-block ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "active", [], "any", false, false, false, 54)) {
                        echo "active";
                    }
                    echo " ";
                    if (($context["alt_view_submenu"] ?? null)) {
                        echo "position-relative";
                    }
                    echo "\">
\t\t\t<span class=\"row no-gutters align-items-center\">
\t\t\t\t<span class=\"col\">
\t\t\t\t\t<a href=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 57);
                    echo "\" class=\"link-level-1 d-block position-relative text-dark text-decoration-none has-child py-2 pl-3 pr-2\">
\t\t\t\t\t\t<span class=\"row no-gutters py-1\">
\t\t\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t\t\t";
                    // line 60
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "html_icon", [], "any", false, false, false, 60)) {
                        // line 61
                        echo "\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "html_icon", [], "any", false, false, false, 61);
                        echo "
\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 62
$context["category"], "icon_peace", [], "any", false, false, false, 62)) {
                        // line 63
                        echo "\t\t\t\t\t\t\t\t<span class=\"menu-icon-holder d-block mr-3\">
\t\t\t\t\t\t\t\t\t";
                        // line 64
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "icon_peace", [], "any", false, false, false, 64)) {
                            // line 65
                            echo "\t\t\t\t\t\t\t\t\t<img class=\"icon peace-icon ";
                            if (twig_get_attribute($this->env, $this->source, $context["category"], "icon_hover", [], "any", false, false, false, 65)) {
                                echo "has-hover";
                            }
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "icon_peace", [], "any", false, false, false, 65);
                            echo "\" alt=\"";
                            echo strip_tags(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 65));
                            echo " 0\" />
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 67
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["category"], "icon_peace", [], "any", false, false, false, 67) && twig_get_attribute($this->env, $this->source, $context["category"], "icon_hover", [], "any", false, false, false, 67))) {
                            // line 68
                            echo "\t\t\t\t\t\t\t\t\t<img class=\"icon hover-icon\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "icon_hover", [], "any", false, false, false, 68);
                            echo "\" alt=\"";
                            echo strip_tags(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 68));
                            echo " 1\" />
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"col\">
\t\t\t\t\t\t\t";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 74);
                    echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"col-auto d-none d-lg-block\">
\t\t\t\t\t\t\t\t<svg class=\"ft-icon-24 d-block text-gray-400\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t\t<span class=\"col-auto border-left d-lg-none\">
\t\t\t\t\t<a href=\"#parent-";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 85);
                    echo "\" class=\"child-list-toggle collapsed d-block d-lg-none p-2\" data-toggle=\"collapse\">
\t\t\t\t\t\t<svg class=\"toggle-hidden ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"toggle-shown ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M19 13H5v-2h14v2z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t</span>
\t\t\t<span class=\"mobile-link-holder d-none d-lg-block position-relative w-lg-100\"></span>
\t\t\t<span id=\"parent-";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 96);
                    echo "\" class=\"list-level-2 bg-white border rounded shadow overflow-hidden collapse py-lg-1 px-lg-4 mt-lg-n1 ml-lg-n1 cols-";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 96);
                    echo " \">
\t\t\t\t<span class=\"row row-cols-1 row-cols-lg-";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 97);
                    echo "\">
\t\t\t\t\t";
                    // line 98
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 98));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 99
                        echo "\t\t\t\t\t<span class=\"col\">
\t\t\t\t\t\t<span class=\"category-menu-item item-level-2 d-block border-top p-0 ";
                        // line 100
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "active", [], "any", false, false, false, 100)) {
                            echo "active";
                        }
                        echo "\">
\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"col\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 103);
                        echo "\" class=\"link-level-2 d-block text-dark text-decoration-none py-2 pl-4 pr-lg-0 pl-lg-0 ";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children2", [], "any", false, false, false, 103) && ($context["third_level_status"] ?? null))) {
                            echo " has-child ";
                        }
                        echo "\" >
\t\t\t\t\t\t\t\t\t\t<span class=\"row no-gutters py-1\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 105
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "html_icon", [], "any", false, false, false, 105)) {
                            // line 106
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-auto d-none d-lg-block\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 107
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "html_icon", [], "any", false, false, false, 107);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 109
$context["child"], "icon_peace", [], "any", false, false, false, 109)) {
                            // line 110
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"col-auto d-none d-lg-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon-holder d-block mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 112
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "icon_peace", [], "any", false, false, false, 112)) {
                                // line 113
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"icon peace-icon ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "icon_hover", [], "any", false, false, false, 113)) {
                                    echo "has-hover";
                                }
                                echo "\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "icon_peace", [], "any", false, false, false, 113);
                                echo "\" alt=\"";
                                echo strip_tags(twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 113));
                                echo " 0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 115
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "icon_peace", [], "any", false, false, false, 115) && twig_get_attribute($this->env, $this->source, $context["child"], "icon_hover", [], "any", false, false, false, 115))) {
                                // line 116
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"icon hover-icon\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "icon_hover", [], "any", false, false, false, 116);
                                echo "\" alt=\"";
                                echo strip_tags(twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 116));
                                echo " 1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 118
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"level-arrow px-2 ft-icon text-gray-400 darker-on-hover d-inline-block d-lg-none text-center\">&#8627;</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 123
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 123);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                        // line 128
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children2", [], "any", false, false, false, 128) && ($context["third_level_status"] ?? null))) {
                            // line 129
                            echo "\t\t\t\t\t\t\t\t<span class=\"col-auto border-left d-lg-none\">
\t\t\t\t\t\t\t\t\t<a href=\"#parent-";
                            // line 130
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 130);
                            echo "\" class=\"child-list-toggle collapsed d-block d-lg-none p-2\" data-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"toggle-hidden ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<svg class=\"toggle-shown ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13H5v-2h14v2z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 140
                        echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                        // line 141
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children2", [], "any", false, false, false, 141) && ($context["third_level_status"] ?? null))) {
                            // line 142
                            echo "\t\t\t\t\t\t\t<span id=\"parent-";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 142);
                            echo "\" class=\"list-level-3 collapse\">
\t\t\t\t\t\t\t\t";
                            // line 143
                            $context["count"] = 0;
                            // line 144
                            echo "\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children2", [], "any", false, false, false, 144));
                            foreach ($context['_seq'] as $context["_key"] => $context["child2"]) {
                                if ((($context["count"] ?? null) < ($context["third_level_limit"] ?? null))) {
                                    // line 145
                                    echo "\t\t\t\t\t\t\t\t<span class=\"category-menu-item item-level-3 p-0 border-top d-block third-level ";
                                    if (twig_get_attribute($this->env, $this->source, $context["child2"], "active", [], "any", false, false, false, 145)) {
                                        echo "active";
                                    }
                                    echo "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 146
                                    echo twig_get_attribute($this->env, $this->source, $context["child2"], "href", [], "any", false, false, false, 146);
                                    echo "\" class=\"link-level-3 d-block text-dark text-decoration-none pl-5 py-2 p-lg-0\">
\t\t\t\t\t\t\t\t\t\t<span class=\"d-block py-1 py-lg-0\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"level-arrow px-2 ft-icon text-gray-400 darker-on-hover d-inline-block text-center\">&#8627;</span>
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 149
                                    echo twig_get_attribute($this->env, $this->source, $context["child2"], "name", [], "any", false, false, false, 149);
                                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                                    // line 153
                                    $context["count"] = (($context["count"] ?? null) + 1);
                                    // line 154
                                    echo "\t\t\t\t\t\t\t\t";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child2'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 155
                            echo "\t\t\t\t\t\t\t\t<span class=\"category-menu-item p-0 border-top d-none d-lg-block third-level\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 156
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 156);
                            echo "\" class=\"d-block text-dark text-decoration-none p-lg-0\">...</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                        }
                        // line 160
                        echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo "\t\t\t\t</span>
\t\t\t\t<a href=\"";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 164);
                    echo "\" class=\"link-all d-none text-center bg-light border-top text-dark dark-on-hover text-decoration-none mx-n4 mb-n1 mt-auto py-1\">";
                    echo ($context["text_all"] ?? null);
                    echo "</a>
\t\t\t</span>
\t\t</span>
\t\t";
                } else {
                    // line 168
                    echo "\t\t<span class=\"category-menu-item item-level-1 p-0 border-top d-block ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "active", [], "any", false, false, false, 168)) {
                        echo "active";
                    }
                    echo "\">
\t\t\t<a href=\"";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 169);
                    echo "\" class=\"link-level-1 d-block text-dark text-decoration-none py-2 px-3\">
\t\t\t\t<span class=\"row no-gutters py-1\">
\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t";
                    // line 172
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "html_icon", [], "any", false, false, false, 172)) {
                        // line 173
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "html_icon", [], "any", false, false, false, 173);
                        echo "
\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 174
$context["category"], "icon_peace", [], "any", false, false, false, 174)) {
                        // line 175
                        echo "\t\t\t\t\t\t<span class=\"menu-icon-holder d-block mr-3\">
\t\t\t\t\t\t\t";
                        // line 176
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "icon_peace", [], "any", false, false, false, 176)) {
                            // line 177
                            echo "\t\t\t\t\t\t\t<img class=\"icon peace-icon ";
                            if (twig_get_attribute($this->env, $this->source, $context["category"], "icon_hover", [], "any", false, false, false, 177)) {
                                echo "has-hover";
                            }
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "icon_peace", [], "any", false, false, false, 177);
                            echo "\" alt=\"";
                            echo strip_tags(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 177));
                            echo " 0\" />
\t\t\t\t\t\t\t";
                        }
                        // line 179
                        echo "\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["category"], "icon_peace", [], "any", false, false, false, 179) && twig_get_attribute($this->env, $this->source, $context["category"], "icon_hover", [], "any", false, false, false, 179))) {
                            // line 180
                            echo "\t\t\t\t\t\t\t<img class=\"icon hover-icon\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "icon_hover", [], "any", false, false, false, 180);
                            echo "\" alt=\"";
                            echo strip_tags(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 180));
                            echo " 1\" />
\t\t\t\t\t\t\t";
                        }
                        // line 182
                        echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                    }
                    // line 184
                    echo "\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"col\">
\t\t\t\t\t";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 186);
                    echo "
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t</a>
\t\t</span>
\t\t";
                }
                // line 192
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "\t\t";
            if (($context["add_cat_links_status"] ?? null)) {
                // line 194
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["add_category_menu"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 195
                    echo "\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 195)) {
                        // line 196
                        echo "\t\t<span class=\"category-menu-item item-level-1 p-0 border-top d-block\">
\t\t\t<a href=\"";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 197);
                        echo "\" class=\"link-level-1 d-block text-dark text-decoration-none py-2 pl-3\">
\t\t\t\t<span class=\"row no-gutters py-1\">
\t\t\t\t\t";
                        // line 199
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "html", [], "any", false, false, false, 199)) {
                            // line 200
                            echo "\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t";
                            // line 201
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "html", [], "any", false, false, false, 201);
                            echo "
\t\t\t\t\t</span>
\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 203
$context["item"], "image_peace", [], "any", false, false, false, 203)) {
                            // line 204
                            echo "\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t<span class=\"menu-icon-holder d-block mr-3\">
\t\t\t\t\t\t\t";
                            // line 206
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "image_peace", [], "any", false, false, false, 206)) {
                                // line 207
                                echo "\t\t\t\t\t\t\t<img class=\"icon peace-icon ";
                                if (twig_get_attribute($this->env, $this->source, $context["item"], "image_hover", [], "any", false, false, false, 207)) {
                                    echo "has-hover";
                                }
                                echo "\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "image_peace", [], "any", false, false, false, 207);
                                echo "\" alt=\"";
                                echo strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 207));
                                echo " 0\" />
\t\t\t\t\t\t\t";
                            }
                            // line 209
                            echo "\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["item"], "image_peace", [], "any", false, false, false, 209) && twig_get_attribute($this->env, $this->source, $context["item"], "image_hover", [], "any", false, false, false, 209))) {
                                // line 210
                                echo "\t\t\t\t\t\t\t<img class=\"icon hover-icon\" src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["item"], "image_hover", [], "any", false, false, false, 210);
                                echo "\" alt=\"";
                                echo strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 210));
                                echo " 1\" />
\t\t\t\t\t\t\t";
                            }
                            // line 212
                            echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t\t";
                        }
                        // line 215
                        echo "\t\t\t\t\t<span class=\"col\">
\t\t\t\t\t";
                        // line 216
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 216);
                        echo "
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t</a>
\t\t</span>
\t\t";
                    }
                    // line 222
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "\t\t";
            }
            // line 224
            echo "\t</div>

  <div class=\"modal fade left\" id=\"ftModalMenu\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-scrollable mh-100 vh-100 m-0 mr-auto\">
      <div class=\"modal-content border-0 rounded-0 mh-100 h-100\">
        <div class=\"modal-header no-gutters\">
          <div class=\"col-auto\">
            <a href=\"#\" class=\"d-block mr-3\" data-dismiss=\"modal\">
        \t\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
        \t\t\t\t<path d=\"M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z\"/>
        \t\t\t</svg>
        \t\t</a>
        \t</div>
        \t<div class=\"col\">
        \t\t<div class=\"h5 modal-title\">";
            // line 238
            echo ($context["text_category"] ?? null);
            echo "</div>
        \t</div>
        </div>
        <div class=\"modal-body p-0\">
          <div id=\"m_category_menu_list\" class=\"category-menu-list\"></div>
        </div>
      </div>
    </div>
  </div>
</nav>
";
            // line 248
            if (($context["mask_status"] ?? null)) {
                // line 249
                echo "<div class=\"menu-backdrop ft-backdrop bg-black d-none d-lg-block position-fixed t-0 l-0\"></div>
";
            }
            // line 251
            echo "<script>

  var d_category_menu_list = document.querySelector('#d_category_menu_list');
  var m_category_menu_list = document.querySelector('#m_category_menu_list');
  var category_menu_items = document.querySelectorAll('#d_category_menu_list > *');

  var recombinateMenu = () => {

    if (window.innerWidth < 992 ) {
      m_category_menu_list.innerHtml = '';
      category_menu_items.forEach(function(item, i) {
        m_category_menu_list.append(item);
      });
    } else {
      d_category_menu_list.innerHTML = '';
      category_menu_items.forEach(function(item, i) {
        d_category_menu_list.append(item);
      });
      \$('#ftModalMenu').modal('hide');
    }

  }

  var recombinateMenuDebounce = debounce(recombinateMenu, 200);

  if (typeof recombinateMenuDebounce == 'function')  recombinateMenuDebounce();

  // ---------------------------------------------------------------------------------

\t!function(e){function t(t){var n=e(this),i=null,o=[],u=null,r=null,c=e.extend({rowSelector:\"> li\",submenuSelector:\"*\",submenuDirection:\"right\",tolerance:75,enter:e.noop,exit:e.noop,activate:e.noop,deactivate:e.noop,exitMenu:e.noop},t),l=2,f=100,a=function(e){o.push({x:e.pageX,y:e.pageY}),o.length>l&&o.shift()},s=function(){r&&clearTimeout(r),c.exitMenu(this)&&(i&&c.deactivate(i),i=null)},h=function(){r&&clearTimeout(r),c.enter(this),v(this)},m=function(){c.exit(this)},x=function(){y(this)},y=function(e){e!=i&&(i&&c.deactivate(i),c.activate(e),i=e)},v=function(e){var t=p();t?r=setTimeout(function(){v(e)},t):y(e)},p=function(){function t(e,t){return(t.y-e.y)/(t.x-e.x)}if(!i||!e(i).is(c.submenuSelector))return 0;var r=n.offset(),l={x:r.left,y:r.top-c.tolerance},a={x:r.left+n.outerWidth(),y:l.y},s={x:r.left,y:r.top+n.outerHeight()+c.tolerance},h={x:r.left+n.outerWidth(),y:s.y},m=o[o.length-1],x=o[0];if(!m)return 0;if(x||(x=m),x.x<r.left||x.x>h.x||x.y<r.top||x.y>h.y)return 0;if(u&&m.x==u.x&&m.y==u.y)return 0;var y=a,v=h;\"left\"==c.submenuDirection?(y=s,v=l):\"below\"==c.submenuDirection?(y=h,v=s):\"above\"==c.submenuDirection&&(y=l,v=a);var p=t(m,y),b=t(m,v),d=t(x,y),g=t(x,v);return d>p&&b>g?(u=m,f):(u=null,0)};n.mouseleave(s).find(c.rowSelector).mouseenter(h).mouseleave(m).click(x),e(document).mousemove(a)}e.fn.menuAim=function(e){return this.each(function(){t.call(this,e)}),this}}(jQuery);

\t\$(function() {

\t\t\$('#d_category_menu_list').menuAim({
\t\t\trowSelector: \"> .category-menu-item\",
\t\t\tsubmenuSelector: \"*\",
\t\t\tactivate: function(row) { row.classList.add('hover') },
\t\t\tdeactivate: function(row) { row.classList.remove('hover') },
\t\t\texitMenu: function(row) { return true }
\t\t});

\t});



\t\$('#ftMenu [data-toggle=collapse]').click(function(e) {
\t\tvar collapse = document.querySelector(\$(this).attr('href'));
\t\te.stopPropagation();
\t\t\$(collapse).collapse('toggle');
\t\treturn false;
\t});

\t\$('#ftMenu .category-menu-list a').click(function(e) { e.stopPropagation() });

\t";
            // line 305
            if (($context["mask_status"] ?? null)) {
                // line 306
                echo "\t\$('.category-menu-list').hover( function (e) { \$('body').addClass('category-menu-open') }, function (e) { \$('body').removeClass('category-menu-open') } );
\t";
            }
            // line 308
            echo "
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/frametheme/ft_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 308,  696 => 306,  694 => 305,  638 => 251,  634 => 249,  632 => 248,  619 => 238,  603 => 224,  600 => 223,  594 => 222,  585 => 216,  582 => 215,  577 => 212,  569 => 210,  566 => 209,  554 => 207,  552 => 206,  548 => 204,  546 => 203,  541 => 201,  538 => 200,  536 => 199,  531 => 197,  528 => 196,  525 => 195,  520 => 194,  517 => 193,  511 => 192,  502 => 186,  498 => 184,  494 => 182,  486 => 180,  483 => 179,  471 => 177,  469 => 176,  466 => 175,  464 => 174,  459 => 173,  457 => 172,  451 => 169,  444 => 168,  435 => 164,  432 => 163,  424 => 160,  417 => 156,  414 => 155,  407 => 154,  405 => 153,  398 => 149,  392 => 146,  385 => 145,  379 => 144,  377 => 143,  372 => 142,  370 => 141,  367 => 140,  354 => 130,  351 => 129,  349 => 128,  341 => 123,  337 => 121,  332 => 118,  324 => 116,  321 => 115,  309 => 113,  307 => 112,  303 => 110,  301 => 109,  296 => 107,  293 => 106,  291 => 105,  282 => 103,  274 => 100,  271 => 99,  267 => 98,  263 => 97,  257 => 96,  243 => 85,  229 => 74,  225 => 72,  221 => 70,  213 => 68,  210 => 67,  198 => 65,  196 => 64,  193 => 63,  191 => 62,  186 => 61,  184 => 60,  178 => 57,  165 => 54,  162 => 53,  157 => 52,  154 => 51,  148 => 50,  139 => 44,  136 => 43,  131 => 40,  123 => 38,  120 => 37,  108 => 35,  106 => 34,  102 => 32,  100 => 31,  95 => 29,  92 => 28,  90 => 27,  85 => 25,  82 => 24,  79 => 23,  74 => 22,  72 => 21,  66 => 20,  54 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/frametheme/ft_menu.twig", "");
    }
}
