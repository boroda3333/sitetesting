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

/* ft_frame/template/extension/module/frametheme/ft_contacts.twig */
class __TwigTemplate_88d26f21809df956f0d9a8ddc9bf5fa4a99b4d306625deb60d0b63b1399e2a9c extends \Twig\Template
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
        if (($context["contacts_status"] ?? null)) {
            // line 2
            echo "
";
            // line 3
            if ((($context["contact_mobile_variant"] ?? null) != "button")) {
                // line 4
                echo "<div class=\"mx-n1 mx-sm-0\">
  <hr class=\"d-lg-none mx-n2 mx-sm-0 mt-0\">
</div>

";
            }
            // line 9
            echo "
<div id=\"h-contacts\" class=\"text-center text-lg-left\">
  <div class=\"";
            // line 11
            if ((($context["contact_mobile_variant"] ?? null) == "button")) {
                echo " d-none d-lg-block ";
            } else {
                echo " mb-4 mb-lg-0 ";
            }
            echo "\">
  \t<div class=\"row no-gutters justify-content-center align-items-center mb-1\">
  \t\t<div class=\"col-auto\">
  \t\t\t";
            // line 14
            if (($context["main_phone_href"] ?? null)) {
                // line 15
                echo "  \t\t\t<a href=\"";
                echo ($context["main_phone_href"] ?? null);
                echo "\">
  \t\t\t";
            }
            // line 17
            echo "  \t\t\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t\t\t<path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/>
  \t\t\t\t</svg>
  \t\t\t";
            // line 20
            if (($context["main_phone_href"] ?? null)) {
                // line 21
                echo "  \t\t\t</a>
  \t\t\t";
            }
            // line 23
            echo "  \t\t</div>
  \t\t<div class=\"col-auto\">
  \t\t\t<div class=\"h5 m-0 phone-number mx-2\">
  \t\t\t\t<a href=\"";
            // line 26
            echo ($context["main_phone_href"] ?? null);
            echo "\" class=\"text-decoration-none text-dark dark-on-hover\">";
            echo ($context["main_phone"] ?? null);
            echo "</a>
  \t\t\t</div>
  \t\t</div>
  \t\t";
            // line 29
            if ((($context["additional_contacts_status"] ?? null) || ($context["callback_status"] ?? null))) {
                // line 30
                echo "  \t\t<div class=\"col-auto\">
  \t\t\t<a href=\"#ft_header_contacts\" data-toggle=\"modal\" ";
                // line 31
                if ( !($context["additional_contacts_status"] ?? null)) {
                    echo "data-whatever=\"callback\"";
                } else {
                    echo "data-whatever=\"contacts\"";
                }
                echo ">
  \t\t\t\t<svg class=\"d-block  ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t\t\t<path d=\"M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z\"/>
  \t\t\t\t</svg>
  \t\t\t</a>
  \t\t</div>
  \t\t";
            }
            // line 38
            echo "  \t</div>
  \t";
            // line 39
            if ((($context["main_hint"] ?? null) &&  !(($context["callback_status"] ?? null) && ($context["cb_link"] ?? null)))) {
                // line 40
                echo "  \t<small class=\"d-block text-muted ml-lg-1\">";
                echo ($context["main_hint"] ?? null);
                echo "</small>
  \t";
            }
            // line 42
            echo "  \t";
            if ((($context["cb_link"] ?? null) && ($context["callback_status"] ?? null))) {
                // line 43
                echo "  \t<small class=\"d-block ml-lg-1\">
  \t\t<a class=\"text-secondary border-bottom border-bottom-dashed-style text-decoration-none\" href=\"#ft_header_contacts\" data-toggle=\"modal\" data-whatever=\"callback\">";
                // line 44
                echo ($context["cb_link_text"] ?? null);
                echo "</a>
  \t</small>
  \t";
            }
            // line 47
            echo "  </div>
\t";
            // line 48
            if ((($context["additional_contacts_status"] ?? null) || ($context["callback_status"] ?? null))) {
                // line 49
                echo "\t<div class=\"modal fade\" id=\"ft_header_contacts\" tabindex=\"-1\" role=\"dialog\">
\t\t<div class=\"modal-dialog modal-dialog-centered modal-sm\" role=\"document\">
\t\t\t<div class=\"modal-content text-left\">
\t\t\t\t<div class=\"modal-header no-gutters\">
\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 my-0 mr-3 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M21,12.22C21,6.73,16.74,3,12,3c-4.69,0-9,3.65-9,9.28C2.4,12.62,2,13.26,2,14v2c0,1.1,0.9,2,2,2h1v-6.1 c0-3.87,3.13-7,7-7s7,3.13,7,7V19h-8v2h8c1.1,0,2-0.9,2-2v-1.22c0.59-0.31,1-0.92,1-1.64v-2.3C22,13.14,21.59,12.53,21,12.22z\"/><circle cx=\"9\" cy=\"13\" r=\"1\"/><circle cx=\"15\" cy=\"13\" r=\"1\"/><path d=\"M18,11.03C17.52,8.18,15.04,6,12.05,6c-3.03,0-6.29,2.51-6.03,6.45c2.47-1.01,4.33-3.21,4.86-5.89 C12.19,9.19,14.88,11,18,11.03z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"h5 modal-title\">
\t\t\t\t\t\t\t<a class=\"text-dark\" href=\"";
                // line 60
                echo ($context["all_contacts_link"] ?? null);
                echo "\">";
                echo ($context["ft_heading_title"] ?? null);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t<a href=\"#\" class=\"d-block ml-2\" data-dismiss=\"modal\">
\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<ul class=\"nav nav-pills nav-pills-light mb-3\">
\t\t\t\t\t\t";
                // line 73
                if (($context["additional_contacts_status"] ?? null)) {
                    // line 74
                    echo "\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link text-dark px-2 py-1 mr-2 active\" href=\"#tab-contacts\" data-toggle=\"tab\">";
                    echo ($context["ft_contacts_tab"] ?? null);
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t";
                if (($context["callback_status"] ?? null)) {
                    // line 77
                    echo "\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link text-dark px-2 py-1 mr-2\" href=\"#tab-callback\" data-toggle=\"tab\">";
                    echo ($context["callback_button_text"] ?? null);
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t";
                // line 81
                if (($context["additional_contacts_status"] ?? null)) {
                    // line 82
                    echo "\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-contacts\">
\t\t\t\t\t\t\t";
                    // line 83
                    if (($context["additional_phones"] ?? null)) {
                        // line 84
                        echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<hr class=\"my-2\">
\t\t\t\t\t\t\t\t";
                        // line 86
                        $context["i"] = 0;
                        // line 87
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["additional_phones"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                            // line 88
                            echo "\t\t\t\t\t\t\t\t";
                            $context["i"] = (($context["i"] ?? null) + 1);
                            // line 89
                            echo "\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t";
                            // line 90
                            if (twig_get_attribute($this->env, $this->source, $context["phone"], "image", [], "any", false, false, false, 90)) {
                                // line 91
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t<div class=\"h5 m-0 mr-3\" >
\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-block\" src=\"";
                                // line 93
                                echo twig_get_attribute($this->env, $this->source, $context["phone"], "image", [], "any", false, false, false, 93);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["phone"], "image2x", [], "any", false, false, false, 93)) {
                                    echo " srcset=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["phone"], "image", [], "any", false, false, false, 93);
                                    echo " 1x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["phone"], "image2x", [], "any", false, false, false, 93);
                                    echo " 2x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["phone"], "image3x", [], "any", false, false, false, 93);
                                    echo " 3x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["phone"], "image4x", [], "any", false, false, false, 93);
                                    echo " 4x\"";
                                }
                                echo " alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"h6 m-0 \">";
                            // line 98
                            echo twig_get_attribute($this->env, $this->source, $context["phone"], "title", [], "any", false, false, false, 98);
                            echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            // line 100
                            if ((twig_get_attribute($this->env, $this->source, $context["phone"], "href", [], "any", false, false, false, 100) || twig_get_attribute($this->env, $this->source, $context["phone"], "hint_text", [], "any", false, false, false, 100))) {
                                // line 101
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t";
                                // line 102
                                if (twig_get_attribute($this->env, $this->source, $context["phone"], "hint_text", [], "any", false, false, false, 102)) {
                                    // line 103
                                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"#clarification-";
                                    echo ($context["i"] ?? null);
                                    echo "\" data-toggle=\"collapse\" class=\"btn btn-sm btn-link ";
                                    if ( !twig_get_attribute($this->env, $this->source, $context["phone"], "hint_show", [], "any", false, false, false, 103)) {
                                        echo " collapsed ";
                                    }
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 m-0 text-info\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 109
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["phone"], "href", [], "any", false, false, false, 109)) {
                                    // line 110
                                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["phone"], "href", [], "any", false, false, false, 110);
                                    echo "\" class=\"btn btn-sm btn-success\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 116
                                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 118
                            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                            // line 119
                            if (twig_get_attribute($this->env, $this->source, $context["phone"], "hint_text", [], "any", false, false, false, 119)) {
                                // line 120
                                echo "\t\t\t\t\t\t\t\t<div class=\"collapse ";
                                if (twig_get_attribute($this->env, $this->source, $context["phone"], "hint_show", [], "any", false, false, false, 120)) {
                                    echo " show ";
                                }
                                echo "\" id=\"clarification-";
                                echo ($context["i"] ?? null);
                                echo "\">
\t\t\t\t\t\t\t\t\t<small class=\"d-block text-muted mt-1\">";
                                // line 121
                                echo twig_get_attribute($this->env, $this->source, $context["phone"], "hint_text", [], "any", false, false, false, 121);
                                echo "</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 124
                            echo "\t\t\t\t\t\t\t\t<hr class=\"my-2\">
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 126
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t\t\t\t\t";
                    if (($context["other_contacts"] ?? null)) {
                        // line 129
                        echo "\t\t\t\t\t\t\t";
                        if ((($context["additional_phones"] ?? null) &&  !($context["other_contacts_show"] ?? null))) {
                            // line 130
                            echo "\t\t\t\t\t\t\t<div class=\"mt-3 \">
\t\t\t\t\t\t\t\t<a href=\"#more-contacts\" data-toggle=\"collapse\" class=\"text-decoration-none text-dark ";
                            // line 131
                            if ( !($context["other_contacts_show"] ?? null)) {
                                echo " collapsed ";
                            }
                            echo "\">";
                            echo ($context["ft_text_more"] ?? null);
                            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        }
                        // line 134
                        echo "\t\t\t\t\t\t\t<div class=\"collapse ";
                        if ((($context["other_contacts_show"] ?? null) ||  !($context["additional_phones"] ?? null))) {
                            echo " show ";
                        }
                        echo "\" id=\"more-contacts\">
\t\t\t\t\t\t\t\t<div class=\"h6 mb-0 pt-1 font-weight-normal\">
\t\t\t\t\t\t\t\t\t";
                        // line 136
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["other_contacts"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                            // line 137
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 139
                            if (twig_get_attribute($this->env, $this->source, $context["contact"], "image", [], "any", false, false, false, 139)) {
                                // line 140
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                // line 141
                                echo twig_get_attribute($this->env, $this->source, $context["contact"], "image", [], "any", false, false, false, 141);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source, $context["contact"], "image2x", [], "any", false, false, false, 141)) {
                                    echo "srcset=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "image", [], "any", false, false, false, 141);
                                    echo " 1x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "image2x", [], "any", false, false, false, 141);
                                    echo " 2x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "image3x", [], "any", false, false, false, 141);
                                    echo " 3x, ";
                                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "image4x", [], "any", false, false, false, 141);
                                    echo " 4x\"";
                                }
                                echo " alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["contact"], "title", [], "any", false, false, false, 141);
                                echo "\" class=\"d-block mr-2\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 144
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 145
                            echo twig_get_attribute($this->env, $this->source, $context["contact"], "href", [], "any", false, false, false, 145);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["contact"], "target", [], "any", false, false, false, 145)) {
                                echo " target=\"_blank\" ";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["contact"], "title", [], "any", false, false, false, 145);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 146
                            if (twig_get_attribute($this->env, $this->source, $context["contact"], "hint", [], "any", false, false, false, 146)) {
                                // line 147
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
                                echo twig_get_attribute($this->env, $this->source, $context["contact"], "hint", [], "any", false, false, false, 147);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 149
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 153
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 156
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t\t\t";
                if (($context["callback_status"] ?? null)) {
                    // line 159
                    echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-callback\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<form id=\"ft-callback-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex h-100 align-items-center position-absolute t-0 l-0 mx-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 text-gray-500 mx-n1\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"c_name\" class=\"form-control pl-5\" placeholder=\"";
                    // line 170
                    echo ($context["ft_entry_name"] ?? null);
                    echo "\" value=\"";
                    echo ($context["customer_name"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex h-100 align-items-center position-absolute t-0 l-0 mx-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 text-gray-500 mx-n1\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"c_phone\" ";
                    // line 180
                    if (($context["phone_mask"] ?? null)) {
                        echo "data-mask=\"";
                        echo ($context["phone_mask"] ?? null);
                        echo "\"";
                    }
                    echo " class=\"form-control pl-5\" placeholder=\"";
                    echo ($context["ft_entry_phone"] ?? null);
                    echo "\" value=\"";
                    echo ($context["customer_telephone"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 184
                    if (($context["captcha"] ?? null)) {
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"callback_capcha\" class=\"overflow-hidden rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 187
                        echo ($context["captcha"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 191
                    echo "\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"comment-show\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#ft_header_contacts-comment\" class=\"text-decoration-none text-secondary\" data-toggle=\"collapse\" onclick=\"\$('#ft_header_contacts .comment-show').slideToggle(350)\">";
                    // line 194
                    echo ($context["ft_text_comment"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse position-relative\" id=\"ft_header_contacts-comment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block position-absolute t-0 r-0 p-2\" data-toggle=\"collapse\" href=\"#ft_header_contacts-comment\" onclick=\"\$('#ft_header_contacts .comment-show').slideToggle(350)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 7c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92c1.51-1.26 2.7-2.89 3.43-4.75-1.73-4.39-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C10.74 7.13 11.35 7 12 7zM2 4.27l2.28 2.28.46.46C3.08 8.3 1.78 10.02 1 12c1.73 4.39 6 7.5 11 7.5 1.55 0 3.03-.3 4.38-.84l.42.42L19.73 22 21 20.73 3.27 3 2 4.27zM7.53 9.8l1.55 1.55c-.05.21-.08.43-.08.65 0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53-2.76 0-5-2.24-5-5 0-.79.2-1.53.53-2.2zm4.31-.78l3.15 3.15.02-.16c0-1.66-1.34-3-3-3l-.17.01z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"c_comment\" class=\"form-control pr-5\" rows=\"3\" placeholder=\"";
                    // line 202
                    echo ($context["ft_entry_comment"] ?? null);
                    echo "\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t\t\t\t";
                    // line 209
                    echo ($context["callback_hint"] ?? null);
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"ft-callback-send\" onclick=\"ft_callback()\">
\t\t\t\t\t\t\t\t\t<span class=\"row no-gutters alig-items-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"loading-icon mr-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spinner-border ft-icon-18 d-block text-white\"></span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 220
                    echo ($context["ft_text_send_button"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script>

\t\t\t\t\t\t\t\tfunction ft_callback() {

\t\t\t\t\t\t\t\t\t\$('#ft-callback-form input').removeClass('border-danger');
\t\t\t\t\t\t\t\t\t\$('#ft-callback-form .text-danger').remove();

\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/frametheme/ft_contacts/callback',
\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\tdata: \$('#ft-callback-form').serialize(),
\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\tbeforeSend: function() {

\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-send').addClass('loading').attr('disabled','diasbled');

\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tcomplete: function() {

\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-send').removeClass('loading').removeAttr('disabled');

\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\tsuccess: function(json) {

\t\t\t\t\t\t\t\t\t\t\tif (!json['error']) {

\t\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-form').parent().html('<div class=\"h6 mt-4\">' + json['success'] + '</div>');
\t\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-send').remove();

\t\t\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t\t\tif (json['error']['name']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-form input[name=\\'c_name\\']').addClass('border-danger');
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-form input[name=\\'c_name\\']').parent().after('<small class=\"d-block text-danger\">' + json['error']['name'] + '</small>');
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tif (json['error']['phone']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-form input[name=\\'c_phone\\']').addClass('border-danger');
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-form input[name=\\'c_phone\\']').parent().after('<small class=\"d-block text-danger\">' + json['error']['phone'] + '</small>');
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tif (json['error']['captcha']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-form #callback_capcha').addClass('border border-danger');
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#ft-callback-form #callback_capcha').after('<small class=\"d-block text-danger\">' + json['error']['captcha'] + '</small>');
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}


\t\t\t\t\t\t\tfunction ft_contacts_run_scripts() {
\t\t\t\t\t\t\t\t\$('#ft_header_contacts-comment').on('shown.bs.collapse', function () {
\t\t\t\t\t\t\t\t\t\$(this).find('textarea').focus();
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\$('#ft_header_contacts').on('hidden.bs.modal', function (e) {
\t\t\t\t\t\t\t\t\t\$('#ft-callback-form input').removeClass('border-danger');
\t\t\t\t\t\t\t\t\t\$('#ft-callback-form .text-danger').remove();
\t\t\t\t\t\t\t\t});


\t\t\t\t\t\t\t\t\$('#ft_header_contacts').on('show.bs.modal', function (e) {

\t\t\t\t\t\t\t\t\tvar button = \$(e.relatedTarget);
\t\t\t\t\t\t\t\t\tvar whatever = button.data('whatever');

\t\t\t\t\t\t\t\t\tif (whatever == 'callback') {
\t\t\t\t\t\t\t\t\t\t\$('#ft_header_contacts a[href=\\'#tab-callback\\']').trigger('click');
\t\t\t\t\t\t\t\t\t} else if (whatever == 'contacts') {
\t\t\t\t\t\t\t\t\t\t\$('#ft_header_contacts a[href=\\'#tab-contacts\\']').trigger('click');
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t});


\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tft_contacts_run_scripts();

\t\t\t\t\t\t\tif (\$('input[data-mask]').length > 0) {
\t\t\t\t\t\t\t\tif (typeof jQuery().mask != 'function') {
\t\t\t\t\t\t\t\t\t\$.getScript(\"catalog/view/theme/";
                    // line 313
                    echo ($context["theme_dir"] ?? null);
                    echo "/javascript/plugins/masked-input/jquery.maskedinput.min.js\", function( data, textStatus, jqxhr ) {
\t\t\t\t\t\t\t\t\t\t\$('input[data-mask]').each(function() {
\t\t\t\t\t\t\t\t\t\t\t\$(this).mask(\$(this).attr('data-mask'));
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\$('input[data-mask]').each(function() {
\t\t\t\t\t\t\t\t\t\t\$(this).mask(\$(this).attr('data-mask'));
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 328
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

  ";
                // line 334
                if ((($context["contact_mobile_variant"] ?? null) == "button")) {
                    // line 335
                    echo "  <button type=\"button\" id=\"m-header-contacts-button\" class=\"btn btn-light shadow rounded-circle p-2 p-md-2 d-none d-lg-none mt-3\" data-target=\"#ft_header_contacts\" data-toggle=\"modal\" ";
                    if ( !($context["additional_contacts_status"] ?? null)) {
                        echo "data-whatever=\"callback\"";
                    } else {
                        echo "data-whatever=\"contacts\"";
                    }
                    echo ">
    <svg class=\"d-block ft-icon m-0 text-gray-600 darker-on-hover m-0\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
      <path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/>
    </svg>
  </button>
  <script>
    window.onload = () => {
      var m_header_contacts_button = document.querySelector('#m-header-contacts-button'),
          footer_fixed_buttons = document.querySelector('#footer-fixed-buttons');

      if (m_header_contacts_button != null && footer_fixed_buttons != null) {

        footer_fixed_buttons.append(m_header_contacts_button);
        m_header_contacts_button.classList.remove('d-none');

      }
    }
  </script>
  ";
                }
                // line 354
                echo "
  ";
            }
            // line 356
            echo "</div>

";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/frametheme/ft_contacts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 356,  671 => 354,  644 => 335,  642 => 334,  634 => 328,  616 => 313,  520 => 220,  506 => 209,  496 => 202,  485 => 194,  480 => 191,  473 => 187,  469 => 185,  467 => 184,  452 => 180,  437 => 170,  424 => 159,  421 => 158,  417 => 156,  412 => 153,  403 => 149,  397 => 147,  395 => 146,  385 => 145,  382 => 144,  362 => 141,  359 => 140,  357 => 139,  353 => 137,  349 => 136,  341 => 134,  331 => 131,  328 => 130,  325 => 129,  322 => 128,  318 => 126,  311 => 124,  305 => 121,  296 => 120,  294 => 119,  291 => 118,  287 => 116,  277 => 110,  274 => 109,  260 => 103,  258 => 102,  255 => 101,  253 => 100,  248 => 98,  245 => 97,  226 => 93,  222 => 91,  220 => 90,  217 => 89,  214 => 88,  209 => 87,  207 => 86,  203 => 84,  201 => 83,  198 => 82,  196 => 81,  192 => 79,  186 => 77,  183 => 76,  177 => 74,  175 => 73,  157 => 60,  144 => 49,  142 => 48,  139 => 47,  133 => 44,  130 => 43,  127 => 42,  121 => 40,  119 => 39,  116 => 38,  102 => 31,  99 => 30,  97 => 29,  89 => 26,  84 => 23,  80 => 21,  78 => 20,  73 => 17,  67 => 15,  65 => 14,  55 => 11,  51 => 9,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/frametheme/ft_contacts.twig", "");
    }
}
