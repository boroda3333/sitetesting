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

/* extension/theme/frame.twig */
class __TwigTemplate_5796f097f3f010253d7c277cf351c081624f9714a7fbdba710fdd9d83ecc6dab extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"row no-gutters\">
        <div class=\"col-xs-8 col-lg-10\">
          <ul class=\"breadcrumb\">
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
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9)) {
                // line 10
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
                echo "\"><i class=\"fa fa-fw fa-home\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
                echo "\"></i></a> &nbsp;/&nbsp; </li>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 11
$context["loop"], "last", [], "any", false, false, false, 11)) {
                // line 12
                echo "
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 13
$context["loop"], "revindex", [], "any", false, false, false, 13) == 2)) {
                // line 14
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
                echo "</a> &nbsp;/&nbsp; </li>
            ";
            } else {
                // line 16
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
                echo "</a> &nbsp;/&nbsp; </li>
            ";
            }
            // line 18
            echo "            ";
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
        // line 19
        echo "          </ul>
          <h1>";
        // line 20
        echo ($context["text_heading_title"] ?? null);
        echo " v";
        echo ($context["t1_version"] ?? null);
        echo "</h1>
        </div>
        <div class=\"col-xs-4 col-lg-2\">
          <div class=\"control-btns text-right mb-3\">
    \t\t\t\t<button type=\"button\" onclick=\"apply()\" data-toggle=\"tooltip\" title=\"";
        // line 24
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success mb-1\">
    \t\t\t\t\t<span class=\"l-icon\">
                <svg class=\"show\" fill=\"currentColor\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path>
                    <animate attributeName=\"d\" calcMode=\"discrete\" dur=\"1.25s\" repeatCount=\"indefinite\" values=\"M6,2l0.01,6L10,12l-3.99,4.01L6,22h12v-6l-4-4l4-3.99V2H6z M16,16.5V20H8v-3.5l4-4L16,16.5z;M6 2v6h.01L6 8.01 10 12l-4 4 .01.01H6V22h12v-5.99h-.01L18 16l-4-4 4-3.99-.01-.01H18V2H6zm10 11v4H8l4-4 4 4zm-4-2L8 7V4h8v3H8z;M18,22l-0.01-6L14,12l3.99-4.01L18,2H6v6l4,4l-4,3.99V22H18z M8,7.5V4h8v3.5l-4,4L8,7.5z;M18,22l-0.01-6L14,12l3.99-4.01L18,2H6v6l4,4l-4,3.99V22H18z M8,7.5V4h8v3.5l-4,4L8,7.5z\"/>
                    <animateTransform attributeName=\"transform\" type=\"rotate\" dur=\"1.25s\" repeatCount=\"indefinite\" values=\"0 12 12;0 12 12;0 12 12;0 12 12;180 12 12\"/>
                  </path>
                </svg>
              </span>
    \t\t\t\t\t<span class=\"s-icon\">
                <svg class=\"show\" fill=\"currentColor\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z\"/>
                </svg>
              </span>
    \t\t\t\t</button>
            <button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
        // line 39
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary mb-1\">
              <svg class=\"show\" fill=\"currentColor\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
              \t<path d=\"M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z\"/>
              </svg>
            </button>
            <a href=\"";
        // line 44
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-danger mb-1\">
              <svg class=\"show\" fill=\"currentColor\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
              \t<path d=\"M18.4 10.6C16.55 8.99 14.15 8 11.5 8c-4.65 0-8.58 3.03-9.96 7.22L3.9 16c1.05-3.19 4.05-5.5 7.6-5.5 1.95 0 3.73.72 5.12 1.88L13 16h9V7l-3.6 3.6z\"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 55
        if (($context["error_warning"] ?? null)) {
            // line 56
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 60
        echo "    <div class=\"panel panel-default\" id=\"frame-controls\">
      <div class=\"panel-body\">
        <form action=\"";
        // line 62
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
          <ul class=\"header-nav-tabs nav nav-tabs\">
            <li class=\"active\">
              <a href=\"#settings\" data-toggle=\"tab\">
                <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path d=\"M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z\"/>
                </svg>
                <span class=\"tab-icon-label\">";
        // line 69
        echo ($context["text_tab_settings"] ?? null);
        echo "</span>
              </a>
            </li>
            <li>
              <a href=\"#info\" data-toggle=\"tab\">
                <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path xmlns=\"http://www.w3.org/2000/svg\" d=\"M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10C22,6.48,17.52,2,12,2z M19.46,9.12l-2.78,1.15 c-0.51-1.36-1.58-2.44-2.95-2.94l1.15-2.78C16.98,5.35,18.65,7.02,19.46,9.12z M12,15c-1.66,0-3-1.34-3-3s1.34-3,3-3s3,1.34,3,3 S13.66,15,12,15z M9.13,4.54l1.17,2.78c-1.38,0.5-2.47,1.59-2.98,2.97L4.54,9.13C5.35,7.02,7.02,5.35,9.13,4.54z M4.54,14.87 l2.78-1.15c0.51,1.38,1.59,2.46,2.97,2.96l-1.17,2.78C7.02,18.65,5.35,16.98,4.54,14.87z M14.88,19.46l-1.15-2.78 c1.37-0.51,2.45-1.59,2.95-2.97l2.78,1.17C18.65,16.98,16.98,18.65,14.88,19.46z\"/>
                </svg>
                <span class=\"tab-icon-label\">";
        // line 77
        echo ($context["text_tab_help"] ?? null);
        echo "</span>
                
              </a>
            </li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"settings\">
              <div class=\"row\">
    \t\t\t\t\t\t<div class=\"col-lg-3 pills-column-menu\">
    \t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
    \t\t\t\t\t\t\t\t<li class=\"active\">
                      <a href=\"#general-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 95
        echo ($context["text_control_general_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#header-contacts\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M6.54 5c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51m9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19M7.5 3H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 106
        echo ($context["text_control_header_contacts"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#main-menu-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M4 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5zm0-6c-.83 0-1.5.67-1.5 1.5S3.17 7.5 4 7.5 5.5 6.83 5.5 6 4.83 4.5 4 4.5zm0 12c-.83 0-1.5.68-1.5 1.5s.68 1.5 1.5 1.5 1.5-.68 1.5-1.5-.67-1.5-1.5-1.5zM7 19h14v-2H7v2zm0-6h14v-2H7v2zm0-8v2h14V5H7z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 117
        echo ($context["text_control_main_menu_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"#help-menu-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M14 10H2v2h12v-2zm0-4H2v2h12V6zm4 8v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zM2 16h8v-2H2v2z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 128
        echo ($context["text_control_help_menu_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#category-menu-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M12 2l-5.5 9h11L12 2zm0 3.84L13.93 9h-3.87L12 5.84zM17.5 13c-2.49 0-4.5 2.01-4.5 4.5s2.01 4.5 4.5 4.5 4.5-2.01 4.5-4.5-2.01-4.5-4.5-4.5zm0 7c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM3 21.5h8v-8H3v8zm2-6h4v4H5v-4z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 139
        echo ($context["text_control_category_menu_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#search-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 150
        echo ($context["text_control_search_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#category-page-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M9.17 6l2 2H20v10H4V6h5.17M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 161
        echo ($context["text_control_category_page_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#product-page-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M 17.482422 1 C 16.614672 1.000625 15.529297 1.0924844 14.654297 1.4589844 C 12.904297 2.1919844 12 4.9511719 12 4.9511719 C 12 4.9511719 14.595703 5.2222344 16.345703 4.4902344 C 18.095703 3.7572344 19 1.0898437 19 1.0898438 C 19 1.0898438 18.350172 0.999375 17.482422 1 z M 12 5 C 10.784321 5 9.6712812 5.4445083 8.9707031 6.3105469 C 8.2701251 7.1765854 8 8.3303941 8 9.6542969 C 8 10.259161 7.5007064 10.886894 6.734375 11.798828 C 5.9680436 12.710763 5 13.924021 5 15.642578 C 5 19.205942 8.2034009 22 12 22 C 15.796599 22 19 19.205942 19 15.642578 C 19 13.937714 18.032669 12.729885 17.267578 11.814453 C 16.502487 10.899022 16 10.258443 16 9.6542969 C 16 8.3303941 15.729875 7.1765854 15.029297 6.3105469 C 14.328719 5.4445083 13.215679 5 12 5 z M 12 7 C 12.787321 7 13.175937 7.1991479 13.474609 7.5683594 C 13.773281 7.9375708 14 8.6111996 14 9.6542969 C 14 11.19215 14.997513 12.216385 15.732422 13.095703 C 16.467331 13.975022 17 14.690442 17 15.642578 C 17 17.995214 14.831401 20 12 20 C 9.1685991 20 7 17.995214 7 15.642578 C 7 14.666136 7.5319564 13.95705 8.265625 13.083984 C 8.9992936 12.210919 10 11.192432 10 9.6542969 C 10 8.6111996 10.226719 7.9375708 10.525391 7.5683594 C 10.824063 7.1991479 11.212679 7 12 7 z\"></path>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 172
        echo ($context["text_control_product_page_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#footer-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M16 13h-3V3h-2v10H8l4 4 4-4zM4 19v2h16v-2H4z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 183
        echo ($context["text_control_footer_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#qview-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 194
        echo ($context["text_control_qview_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#fastorder-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M 13 1 L 6 14 L 12 14 L 12 23 L 19 10 L 13 10 L 13 1 z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 205
        echo ($context["text_control_fastorder_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#modal-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M19 4H5c-1.11 0-2 .9-2 2v12c0 1.1.89 2 2 2h4v-2H5V8h14v10h-4v2h4c1.1 0 2-.9 2-2V6c0-1.1-.89-2-2-2zm-7 6l-4 4h3v6h2v-6h3l-4-4z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 216
        echo ($context["text_control_modal_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"#cust-code-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 227
        echo ($context["text_control_cust_code_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#color-scheme\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z\"/><circle cx=\"6.5\" cy=\"11.5\" r=\"1.5\"/><circle cx=\"9.5\" cy=\"7.5\" r=\"1.5\"/><circle cx=\"14.5\" cy=\"7.5\" r=\"1.5\"/><circle cx=\"17.5\" cy=\"11.5\" r=\"1.5\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 238
        echo ($context["text_control_color_scheme"] ?? null);
        echo "</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"#stikers-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58s1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41s-.23-1.06-.59-1.42zM13 20.01L4 11V4h7v-.01l9 9-7 7.02z\"/><circle cx=\"6.5\" cy=\"6.5\" r=\"1.5\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 249
        echo ($context["text_control_stikers_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#cust-css-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M 6 2 C 4.895 2 4 2.895 4 4 L 4 9 L 3 9 C 1.895 9 1 9.895 1 11 L 1 16 C 1 17.105 1.895 18 3 18 L 4 18 L 4 20 C 4 21.105 4.895 22 6 22 L 18 22 C 19.105 22 20 21.105 20 20 L 20 7 L 15 2 L 6 2 z M 6 4 L 14 4 L 14 8 L 18 8 L 18 20 L 6 20 L 6 18 L 15 18 C 16.105 18 17 17.105 17 16 L 17 11 C 17 9.895 16.105 9 15 9 L 6 9 L 6 4 z M 5 11 C 6.105 11 7 11.895 7 13 L 6 13 C 6 12.449 5.551 12 5 12 C 4.449 12 4 12.449 4 13 L 4 14 C 4 14.551 4.449 15 5 15 C 5.551 15 6 14.551 6 14 L 7 14 C 7 15.105 6.105 16 5 16 C 3.895 16 3 15.105 3 14 L 3 13 C 3 11.895 3.895 11 5 11 z M 9.6445312 11.001953 C 11.067531 11.042953 11.154297 12.284859 11.154297 12.505859 L 10.1875 12.505859 C 10.1875 12.402859 10.204906 11.806641 9.6289062 11.806641 C 9.4539062 11.806641 9.0598438 11.884187 9.0898438 12.367188 C 9.1188437 12.808188 9.7035469 13.018406 9.8105469 13.066406 C 10.034547 13.148406 11.141391 13.642391 11.150391 14.650391 C 11.152391 14.864391 11.097062 15.985 9.6640625 16 C 8.1050625 16.017 8 14.675438 8 14.398438 L 8.9746094 14.398438 C 8.9746094 14.545438 8.9870625 15.256172 9.6640625 15.201172 C 10.071063 15.167172 10.159828 14.87425 10.173828 14.65625 C 10.195828 14.29025 9.8465625 14.070578 9.4765625 13.892578 C 8.9565625 13.642578 8.1341406 13.335328 8.1191406 12.361328 C 8.1061406 11.484328 8.7505312 10.976953 9.6445312 11.001953 z M 13.490234 11.001953 C 14.913234 11.042953 15 12.284859 15 12.505859 L 14.03125 12.505859 C 14.03125 12.402859 14.048656 11.806641 13.472656 11.806641 C 13.297656 11.806641 12.905547 11.884187 12.935547 12.367188 C 12.964547 12.808188 13.547297 13.018406 13.654297 13.066406 C 13.878297 13.148406 14.987094 13.642391 14.996094 14.650391 C 14.998094 14.864391 14.942766 15.985 13.509766 16 C 11.950766 16.017 11.845703 14.675437 11.845703 14.398438 L 12.820312 14.398438 C 12.820312 14.545438 12.832766 15.256172 13.509766 15.201172 C 13.916766 15.167172 14.005531 14.87425 14.019531 14.65625 C 14.041531 14.29025 13.692266 14.070578 13.322266 13.892578 C 12.802266 13.642578 11.979844 13.335328 11.964844 12.361328 C 11.951844 11.484328 12.596234 10.976953 13.490234 11.001953 z\"></path>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 260
        echo ($context["text_control_cust_css_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t\t<li>
                      <a href=\"#image-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M21 15h2v2h-2v-2zm0-4h2v2h-2v-2zm2 8h-2v2c1 0 2-1 2-2zM13 3h2v2h-2V3zm8 4h2v2h-2V7zm0-4v2h2c0-1-1-2-2-2zM1 7h2v2H1V7zm16-4h2v2h-2V3zm0 16h2v2h-2v-2zM3 3C2 3 1 4 1 5h2V3zm6 0h2v2H9V3zM5 3h2v2H5V3zm-4 8v8c0 1.1.9 2 2 2h12V11H1zm2 8l2.5-3.21 1.79 2.15 2.5-3.22L13 19H3z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 271
        echo ($context["text_control_image_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"#performance-settings\" data-toggle=\"tab\">
                        <svg class=\"tab-icon-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
                        </svg>
                        <svg class=\"tab-arrow-18\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z\"/>
                        </svg>
                        <span class=\"tab-icon-label pill-label\">";
        // line 282
        echo ($context["text_control_performance_settings"] ?? null);
        echo "</span>
                      </a>
                    </li>
    \t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"col-lg-9 pills-column-content\">
    \t\t\t\t\t\t\t<div class=\"tab-content\">

    \t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"general-settings\">
                      <hr class=\"mt-0\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                          ";
        // line 294
        echo ($context["entry_status"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 295
        echo ($context["help_status"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 303
        if ( !($context["theme_frame_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_frame_status\" value=\"0\" ";
        // line 304
        if ( !($context["theme_frame_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 305
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 307
        if (($context["theme_frame_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_frame_status\" value=\"1\" ";
        // line 308
        if (($context["theme_frame_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 309
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"t1_version\" value=\"";
        // line 312
        echo ($context["t1_version"] ?? null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-directory\">
                          ";
        // line 318
        echo ($context["entry_directory"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 319
        echo ($context["help_directory"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_frame_directory\" id=\"input-directory\" class=\"form-control\">
    \t\t\t\t\t\t\t\t\t\t\t\t";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["directories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 328
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["directory"], "name", [], "any", false, false, false, 328) == ($context["theme_frame_directory"] ?? null))) {
                // line 329
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["directory"], "name", [], "any", false, false, false, 329);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["directory"], "title", [], "any", false, false, false, 329);
                echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 331
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["directory"], "name", [], "any", false, false, false, 331);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["directory"], "title", [], "any", false, false, false, 331);
                echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 333
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "    \t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t<div id=\"info-directory\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\">
    \t
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t<script>
    \t\t\t\t\t\t\t\t\t\t\t\tfunction getThemeInfo (dir) {
    \t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: '../catalog/view/theme/' + dir + '/info.json',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'get',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#info-directory > div').html('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thtml = 'Название: ' + json.name + '<br>Автор: <a href=\"' + json.url + '\">' + json.autor + '</a>';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#info-directory > div').html(html);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
    \t\t\t\t\t\t\t\t\t\t\t\t}
    \t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tgetThemeInfo('";
        // line 364
        echo ($context["theme_frame_directory"] ?? null);
        echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

    \t\t\t\t\t\t\t\t\t\t\t\t\$('#input-directory').on('change', function () {
    \t\t\t\t\t\t\t\t\t\t\t\t\tgetThemeInfo(\$('#input-directory').val());
    \t\t\t\t\t\t\t\t\t\t\t\t});
    \t\t\t\t\t\t\t\t\t\t\t</script>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
                      <hr>

                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                          ";
        // line 377
        echo ($context["entry_catalog_mode"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 378
        echo ($context["help_catalog_mode"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\" id=\"catalog_mode\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 386
        if ( !($context["t1_catalog_mode"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_mode\" value=\"0\" ";
        // line 387
        if ( !($context["t1_catalog_mode"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 388
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default catalog_mode_on ";
        // line 390
        if (($context["t1_catalog_mode"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_mode\" value=\"1\" ";
        // line 391
        if (($context["t1_catalog_mode"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 392
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>

                        <script>
                          \$('#catalog_mode .btn').click( function(e) {
                            var el = \$(this);
                            setTimeout(function () {
                              if (el.hasClass('catalog_mode_on') && el.hasClass('active')) {
                                \$('#catalog_mode_settings').collapse('show');
                              } else {
                                \$('#catalog_mode_settings').collapse('hide');
                              }
                            }, 10);
                          });
                        </script>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>

                      <div id=\"catalog_mode_settings\" class=\"collapse fade ";
        // line 412
        if (($context["t1_catalog_mode"] ?? null)) {
            echo "in";
        }
        echo "\">
                        <div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                            ";
        // line 415
        echo ($context["entry_catalog_mode_hide_price"] ?? null);
        echo "
                            <span data-toggle=\"tooltip\" title=\"";
        // line 416
        echo ($context["help_catalog_mode_hide_price"] ?? null);
        echo "\">
                              <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                              </svg>
                            </span>
                          </label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
      \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 424
        if ( !($context["t1_catalog_mode_hide_price"] ?? null)) {
            echo " active ";
        }
        echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_mode_hide_price\" value=\"0\" ";
        // line 425
        if ( !($context["t1_catalog_mode_hide_price"] ?? null)) {
            echo " checked ";
        }
        echo ">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 426
        echo ($context["button_no"] ?? null);
        echo "</span>
      \t\t\t\t\t\t\t\t\t\t\t\t</label>
      \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 428
        if (($context["t1_catalog_mode_hide_price"] ?? null)) {
            echo " active ";
        }
        echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_mode_hide_price\" value=\"1\" ";
        // line 429
        if (($context["t1_catalog_mode_hide_price"] ?? null)) {
            echo " checked ";
        }
        echo ">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 430
        echo ($context["button_yes"] ?? null);
        echo "</span>
      \t\t\t\t\t\t\t\t\t\t\t\t</label>
      \t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr class=\"hidden\">
                        <div class=\"form-group hidden\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                            ";
        // line 438
        echo ($context["entry_catalog_mode_more_button"] ?? null);
        echo "
                            <span data-toggle=\"tooltip\" title=\"";
        // line 439
        echo ($context["help_catalog_mode_more_button"] ?? null);
        echo "\">
                              <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                              </svg>
                            </span>
                          </label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
      \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 447
        if ( !($context["t1_catalog_mode_more_button"] ?? null)) {
            echo " active ";
        }
        echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_mode_more_button\" value=\"0\" ";
        // line 448
        if ( !($context["t1_catalog_mode_more_button"] ?? null)) {
            echo " checked ";
        }
        echo ">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 449
        echo ($context["button_no"] ?? null);
        echo "</span>
      \t\t\t\t\t\t\t\t\t\t\t\t</label>
      \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 451
        if (($context["t1_catalog_mode_more_button"] ?? null)) {
            echo " active ";
        }
        echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_mode_more_button\" value=\"1\" ";
        // line 452
        if (($context["t1_catalog_mode_more_button"] ?? null)) {
            echo " checked ";
        }
        echo ">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 453
        echo ($context["button_yes"] ?? null);
        echo "</span>
      \t\t\t\t\t\t\t\t\t\t\t\t</label>
      \t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
                      </div>

                      <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">
                          ";
        // line 463
        echo ($context["entry_wishlist_status"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 464
        echo ($context["help_catalog_wishlist_status"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
                        <div class=\"col-sm-9\">
                          <div class=\"btn-group\" data-toggle=\"buttons\">
                            <label class=\"btn btn-default ";
        // line 472
        if ( !($context["t1_wishlist_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
                              <input type=\"radio\" name=\"t1_wishlist_status\" value=\"0\" ";
        // line 473
        if ( !($context["t1_wishlist_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
                              <span class=\"on-off\">";
        // line 474
        echo ($context["button_no"] ?? null);
        echo "</span>
                            </label>
                            <label class=\"btn btn-default ";
        // line 476
        if (($context["t1_wishlist_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
                              <input type=\"radio\" name=\"t1_wishlist_status\" value=\"1\" ";
        // line 477
        if (($context["t1_wishlist_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
                              <span class=\"on-off\">";
        // line 478
        echo ($context["button_yes"] ?? null);
        echo "</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <hr>

                      <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">
                          ";
        // line 487
        echo ($context["entry_compare_status"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 488
        echo ($context["help_catalog_compare_status"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
                        <div class=\"col-sm-9\">
                          <div class=\"btn-group\" data-toggle=\"buttons\">
                            <label class=\"btn btn-default ";
        // line 496
        if ( !($context["t1_compare_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
                              <input type=\"radio\" name=\"t1_compare_status\" value=\"0\" ";
        // line 497
        if ( !($context["t1_compare_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
                              <span class=\"on-off\">";
        // line 498
        echo ($context["button_no"] ?? null);
        echo "</span>
                            </label>
                            <label class=\"btn btn-default ";
        // line 500
        if (($context["t1_compare_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
                              <input type=\"radio\" name=\"t1_compare_status\" value=\"1\" ";
        // line 501
        if (($context["t1_compare_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
                              <span class=\"on-off\">";
        // line 502
        echo ($context["button_yes"] ?? null);
        echo "</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <hr>

    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-catalog-limit\">
                          ";
        // line 511
        echo ($context["entry_product_limit"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 512
        echo ($context["help_product_limit"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
    \t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_product_limit\"
                            value=\"";
        // line 522
        echo ($context["theme_frame_product_limit"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 523
        echo ($context["entry_product_limit"] ?? null);
        echo "\"
                            id=\"input-catalog-limit\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 526
        echo ($context["theme_frame_product_limit"] ?? null);
        echo "\"
                          >
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-description-limit\">
                          ";
        // line 533
        echo ($context["entry_product_description_length"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 534
        echo ($context["help_product_description_length"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
    \t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_product_description_length\"
                            value=\"";
        // line 544
        echo ($context["theme_frame_product_description_length"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 545
        echo ($context["entry_product_description_length"] ?? null);
        echo "\"
                            id=\"input-description-limit\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 548
        echo ($context["theme_frame_product_description_length"] ?? null);
        echo "\"
                          >
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                          ";
        // line 555
        echo ($context["entry_svg_logo_status"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 556
        echo ($context["help_svg_logo_status"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\" id=\"logo_type\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"img_type btn btn-default ";
        // line 564
        if ( !($context["t1_svg_logo_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_svg_logo_status\" value=\"0\" ";
        // line 565
        if ( !($context["t1_svg_logo_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 566
        echo ($context["entry_logo_type_img"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"svg_type btn btn-default ";
        // line 568
        if (($context["t1_svg_logo_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_svg_logo_status\" value=\"1\" ";
        // line 569
        if (($context["t1_svg_logo_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 570
        echo ($context["entry_logo_type_svg"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
                        <script>
                          \$('#logo_type .btn').click( function(e) {
                            setTimeout(function () {
                              if (\$(e.target).hasClass('svg_type') && \$(e.target).hasClass('active')) {
                                \$('#img_logo').collapse('hide');
                                \$('#svg_logo').collapse('show');
                              } else {
                                \$('#img_logo').collapse('show');
                                \$('#svg_logo').collapse('hide');
                              }
                            }, 10);
                          });
                        </script>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr class=\"\">

                      <div id=\"img_logo\" class=\"collapse fade ";
        // line 590
        if ( !($context["t1_svg_logo_status"] ?? null)) {
            echo "in";
        }
        echo "\">
      \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-logo\">
                            ";
        // line 593
        echo ($context["entry_logo_img"] ?? null);
        echo "
                            <span data-toggle=\"tooltip\" title=\"";
        // line 594
        echo ($context["help_logo_img"] ?? null);
        echo "\">
                              <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                              </svg>
                            </span>
                          </label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 logo-thumb\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 600
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
      \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"t1_logo\" value=\"";
        // line 601
        echo ($context["t1_logo"] ?? null);
        echo "\" id=\"input-logo\" />
      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
      \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                            ";
        // line 607
        echo ($context["entry_logo_img_size"] ?? null);
        echo "
                            <span data-toggle=\"tooltip\" title=\"";
        // line 608
        echo ($context["help_logo_img_size"] ?? null);
        echo "\">
                              <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                              </svg>
                            </span>
                          </label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
                            <input type=\"number\" name=\"t1_logo_width\" value=\"";
        // line 615
        echo ($context["t1_logo_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" class=\"form-control\" /> x
                            <input type=\"number\" name=\"t1_logo_height\" value=\"";
        // line 616
        echo ($context["t1_logo_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" /> px
      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr class=\"\">
                      </div>

                      <div id=\"svg_logo\" class=\"collapse fade ";
        // line 622
        if (($context["t1_svg_logo_status"] ?? null)) {
            echo "in";
        }
        echo "\">
      \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                            ";
        // line 625
        echo ($context["entry_logo_img"] ?? null);
        echo "
                            <span data-toggle=\"tooltip\" title=\"";
        // line 626
        echo ($context["help_logo_svg"] ?? null);
        echo "\">
                              <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                              </svg>
                            </span>
                          </label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
                            <ul class=\"nav nav-tabs mb-2\">
                              ";
        // line 634
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 635
            echo "                              <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 635) == 1)) {
                echo "active";
            }
            echo "\">
                                <a href=\"#svg_logo_language-";
            // line 636
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 636);
            echo "\" data-toggle=\"tab\">
                                  <img src=\"language/";
            // line 637
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 637);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 637);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 637);
            echo "\" />
                                  ";
            // line 638
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 638);
            echo "
                                </a>
                              </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        echo "                            </ul>
                            <div class=\"tab-content\">
                              ";
        // line 644
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 645
            echo "                              <div class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 645) == 1)) {
                echo "active";
            }
            echo "\" id=\"svg_logo_language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 645);
            echo "\">
                                <textarea rows=\"6\" name=\"t1_svg_logo[";
            // line 646
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 646);
            echo "]\" class=\"form-control code-field text-monospace\">";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["t1_svg_logo"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 646)] ?? null) : null);
            echo "</textarea>
                              </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 649
        echo "                            </div>
      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
                      </div>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                          ";
        // line 656
        echo ($context["entry_webfont_status"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 657
        echo ($context["help_webfont_status"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\" id=\"web_font_status\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 665
        if ( !($context["t1_webfont_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_webfont_status\" value=\"0\" ";
        // line 666
        if ( !($context["t1_webfont_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 667
        echo ($context["button_no"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"web_font_on btn btn-default ";
        // line 669
        if (($context["t1_webfont_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_webfont_status\" value=\"1\" ";
        // line 670
        if (($context["t1_webfont_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 671
        echo ($context["button_yes"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
                          <script>
                            \$('#web_font_status .btn').click( function(e) {

                              var element = \$(this),
                                  enabled = element.find('[type=radio]').val() == 1;

                              setTimeout(function () {
                                if (element.hasClass('active') && enabled) {
                                  \$('#web_fonts').collapse('show');
                                } else {
                                  \$('#web_fonts').collapse('hide');
                                }
                              }, 10);

                            });
                          </script>
                          <div id=\"web_fonts\" class=\"collapse fade ";
        // line 690
        if (($context["t1_webfont_status"] ?? null)) {
            echo "in";
        }
        echo "\">
                            <br>
                            <div class=\"mb-3\">
                              <div class=\"mb-2\">";
        // line 693
        echo ($context["entry_webfont_link"] ?? null);
        echo "</div>
                              <textarea rows=\"2\" name=\"t1_webfont_link\" class=\"form-control code-field text-monospace\" placeholder='<link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">'>";
        // line 694
        echo ($context["t1_webfont_link"] ?? null);
        echo "</textarea>
                            </div>
                            <div class=\"\">
                              <div class=\"mb-2\">";
        // line 697
        echo ($context["entry_webfont_style"] ?? null);
        echo "</div>
                              <textarea rows=\"2\" name=\"t1_webfont_style\" class=\"form-control code-field text-monospace\" placeholder='font-family: \"Open Sans\", sans-serif;'>";
        // line 698
        echo ($context["t1_webfont_style"] ?? null);
        echo "</textarea>
                            </div>
      \t\t\t\t\t\t\t\t\t\t</div>
                        </div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr class=\"\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                          ";
        // line 706
        echo ($context["entry_fontawesome_status"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 707
        echo ($context["help_fontawesome_status"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 715
        if ( !($context["t1_fontawesome_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_fontawesome_status\" value=\"0\" ";
        // line 716
        if ( !($context["t1_fontawesome_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 717
        echo ($context["button_no"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 719
        if (($context["t1_fontawesome_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_fontawesome_status\" value=\"1\" ";
        // line 720
        if (($context["t1_fontawesome_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 721
        echo ($context["button_yes"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr class=\"\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                          ";
        // line 729
        echo ($context["entry_buy_button_status"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 730
        echo ($context["help_buy_button_status"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\" id=\"buy_button_status\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 738
        if ( !($context["t1_buy_button_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_buy_button_status\" value=\"0\" ";
        // line 739
        if ( !($context["t1_buy_button_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 740
        echo ($context["button_no"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 742
        if (($context["t1_buy_button_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_buy_button_status\" value=\"1\" ";
        // line 743
        if (($context["t1_buy_button_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 744
        echo ($context["button_yes"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
                        <script>
                          \$('#buy_button_status .btn').click( function(e) {

                            var element = \$(this),
                                enabled = element.find('[type=radio]').val() == 1;

                            setTimeout(function () {
                              if (element.hasClass('active') && enabled) {
                                \$('#buy_button_disabled_text').collapse('show');
                              } else {
                                \$('#buy_button_disabled_text').collapse('hide');
                              }
                            }, 10);

                          });
                        </script>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div id=\"buy_button_disabled_text\" class=\"collapse fade ";
        // line 766
        if (($context["t1_buy_button_status"] ?? null)) {
            echo "in";
        }
        echo "\">
                        <div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                            ";
        // line 769
        echo ($context["entry_buy_button_disabled_text"] ?? null);
        echo "
                            <span data-toggle=\"tooltip\" title=\"";
        // line 770
        echo ($context["help_buy_button_disabled_text"] ?? null);
        echo "\">
                              <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                              </svg>
                            </span>
                          </label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t";
        // line 777
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 778
            echo "      \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group\">
      \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 780
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 780);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 780);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 780);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_buy_button_disabled_text[";
            // line 782
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 782);
            echo "]\" value=\"";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["t1_buy_button_disabled_text"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 782)] ?? null) : null);
            echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 785
        echo "      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
                      </div>

    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                          ";
        // line 792
        echo ($context["entry_preloader_status"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 793
        echo ($context["help_preloader_status"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 801
        if ( !($context["t1_preloader_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_preloader_status\" value=\"0\" ";
        // line 802
        if ( !($context["t1_preloader_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 803
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 805
        if (($context["t1_preloader_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_preloader_status\" value=\"1\" ";
        // line 806
        if (($context["t1_preloader_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 807
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>

                          <div class=\"h-row-wrapper form-inline\">
            \t\t\t\t\t\t\t\t<div id=\"preloader-timeout\" class=\"fade collapse ";
        // line 812
        if (($context["t1_preloader_status"] ?? null)) {
            echo " in ";
        }
        echo "\">
            \t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
            \t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"t1_preloader_timeout\" value=\"";
        // line 814
        echo ($context["t1_preloader_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_preloader_timeout"] ?? null);
        echo "\" class=\"form-control\" /> ";
        echo ($context["entry_ms"] ?? null);
        echo "
            \t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t<script>
                              \$('[name=t1_preloader_status]').parent().click( function(e) {

                                var element = \$(this),
                                    enabled = element.find('[type=radio]').val() == 1;

                                setTimeout(function () {
                                  if (element.hasClass('active') && enabled) {
                                    \$('#preloader-timeout').collapse('show');
                                  } else {
                                    \$('#preloader-timeout').collapse('hide');
                                  }
                                }, 10);

                              });
            \t\t\t\t\t\t\t\t</script>
            \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr class=\"mb-0\">
    \t\t\t\t\t\t\t\t</div>

    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"header-contacts\">
                      <hr class=\"mt-0\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 842
        echo ($context["entry_contact_main_toggle"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 845
        if ( !($context["t1_contact_main_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_contact_main_toggle\" value=\"0\" ";
        // line 846
        if ( !($context["t1_contact_main_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 847
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 849
        if (($context["t1_contact_main_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_contact_main_toggle\" value=\"1\" ";
        // line 850
        if (($context["t1_contact_main_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 851
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 858
        echo ($context["entry_contact_mobile_variant"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group_\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 861
        if ((($context["t1_contact_mobile_variant"] ?? null) == "header")) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_contact_mobile_variant\" value=\"header\" ";
        // line 862
        if ((($context["t1_contact_mobile_variant"] ?? null) == "header")) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 863
        echo ($context["entry_contact_mobile_variant_1"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 865
        if ((($context["t1_contact_mobile_variant"] ?? null) == "button")) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_contact_mobile_variant\" value=\"button\" ";
        // line 866
        if ((($context["t1_contact_mobile_variant"] ?? null) == "button")) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 867
        echo ($context["entry_contact_mobile_variant_2"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 874
        echo ($context["entry_contact_main_phone"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t";
        // line 876
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 877
            echo "    \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 879
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 879);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 879);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 879);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_contact_main_phone[";
            // line 881
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 881);
            echo "]\" value=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["t1_contact_main_phone"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 881)] ?? null) : null);
            echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 884
        echo "    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                          ";
        // line 889
        echo ($context["entry_contact_main_phone_link"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 890
        echo ($context["help_contact_main_phone_link"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t";
        // line 897
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 898
            echo "    \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 900
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 900);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 900);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 900);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_contact_main_phone_link[";
            // line 902
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 902);
            echo "]\" value=\"";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["t1_contact_main_phone_link"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 902)] ?? null) : null);
            echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 905
        echo "    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 909
        echo ($context["entry_cb_link"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\" id=\"cb_link_status\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"cb_link btn btn-default ";
        // line 912
        if ( !($context["t1_cb_link"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_cb_link\" value=\"0\" ";
        // line 913
        if ( !($context["t1_cb_link"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 914
        echo ($context["entry_contact_hint_text"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"cb_text btn btn-default ";
        // line 916
        if (($context["t1_cb_link"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_cb_link\" value=\"1\" ";
        // line 917
        if (($context["t1_cb_link"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 918
        echo ($context["entry_contact_hint_link"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
                        <script>
                          \$('#cb_link_status .btn').click( function(e) {
                            setTimeout(function () {
                              if (\$(e.target).hasClass('cb_link') && \$(e.target).hasClass('active')) {
                                \$('#cb_link').collapse('hide');
                                \$('#cb_text').collapse('show');
                              } else {
                                \$('#cb_link').collapse('show');
                                \$('#cb_text').collapse('hide');
                              }
                            }, 10);
                          });
                        </script>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"collapse fade ";
        // line 937
        if (($context["t1_cb_link"] ?? null)) {
            echo " in ";
        }
        echo "\" id=\"cb_link\">
                        <div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 939
        echo ($context["entry_cb_link_text"] ?? null);
        echo "</label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t";
        // line 941
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 942
            echo "      \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
      \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 944
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 944);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 944);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 944);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_cb_link_text[";
            // line 946
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 946);
            echo "]\" value=\"";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["t1_cb_link_text"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 946)] ?? null) : null);
            echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 949
        echo "      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
                      </div>
                      <div class=\"collapse fade ";
        // line 953
        if ( !($context["t1_cb_link"] ?? null)) {
            echo " in ";
        }
        echo "\" id=\"cb_text\">
                        <div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 955
        echo ($context["entry_contact_hint"] ?? null);
        echo "</label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t";
        // line 957
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 958
            echo "      \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
      \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 960
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 960);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 960);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 960);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_contact_hint[";
            // line 962
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 962);
            echo "]\" value=\"";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["t1_contact_hint"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 962)] ?? null) : null);
            echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 965
        echo "      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
                      </div>

    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 971
        echo ($context["entry_callback_form_toggle"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\" id=\"cb_toggle\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 974
        if ( !($context["t1_callback_form_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_callback_form_toggle\" value=\"0\" ";
        // line 975
        if ( !($context["t1_callback_form_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 976
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 978
        if (($context["t1_callback_form_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_callback_form_toggle\" value=\"1\" ";
        // line 979
        if (($context["t1_callback_form_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 980
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
                        <script>
                          \$('#cb_toggle .btn').click( function(e) {

                            var element = \$(this),
                                enabled = element.find('[type=radio]').val() == 1;

                            setTimeout(function () {
                              if (element.hasClass('active') && enabled) {
                                \$('#cb_settings').collapse('show');
                              } else {
                                \$('#cb_settings').collapse('hide');
                              }
                            }, 10);

                          });
                        </script>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"collapse fade ";
        // line 1002
        if (($context["t1_callback_form_toggle"] ?? null)) {
            echo "in";
        }
        echo "\" id=\"cb_settings\">
                        <div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                            ";
        // line 1005
        echo ($context["entry_callback_mail"] ?? null);
        echo "
                            <span data-toggle=\"tooltip\" title=\"";
        // line 1006
        echo ($context["help_callback_mail"] ?? null);
        echo "\">
                              <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                              </svg>
                            </span>
                          </label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_callback_mail\" value=\"";
        // line 1013
        echo ($context["t1_callback_mail"] ?? null);
        echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
                        <div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                            ";
        // line 1019
        echo ($context["entry_callback_phone_mask"] ?? null);
        echo "
                            <span data-toggle=\"tooltip\" title=\"";
        // line 1020
        echo ($context["help_callback_phone_mask"] ?? null);
        echo "\">
                              <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                              </svg>
                            </span>
                            <br><small><a href=\"https://github.com/digitalBush/jquery.maskedinput#overview\" target=\"_blank\">";
        // line 1025
        echo ($context["entry_callback_phone_rules"] ?? null);
        echo "</a></small>
                          </label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_callback_phone_mask\" value=\"";
        // line 1028
        echo ($context["t1_callback_phone_mask"] ?? null);
        echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
      \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1033
        echo ($context["entry_callback_form_button_text"] ?? null);
        echo "</label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t";
        // line 1035
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1036
            echo "      \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
      \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 1038
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1038);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1038);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1038);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_callback_form_button_text[";
            // line 1040
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040);
            echo "]\" value=\"";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["t1_callback_form_button_text"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040)] ?? null) : null);
            echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1043
        echo "      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
      \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1047
        echo ($context["entry_callback_hint"] ?? null);
        echo "</label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t";
        // line 1049
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1050
            echo "      \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
      \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 1052
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1052);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1052);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1052);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_callback_hint[";
            // line 1054
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1054);
            echo "]\" value=\"";
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["t1_callback_hint"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1054)] ?? null) : null);
            echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1057
        echo "      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
      \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1061
        echo ($context["entry_callback_form_success_text"] ?? null);
        echo "</label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t";
        // line 1063
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1064
            echo "      \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
      \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 1066
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1066);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1066);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1066);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_callback_form_success_text[";
            // line 1068
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1068);
            echo "]\" value=\"";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["t1_callback_form_success_text"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1068)] ?? null) : null);
            echo "\" class=\"form-control\" />
      \t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1071
        echo "      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
                      </div>

    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1077
        echo ($context["entry_contact_add_toggle"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\" id=\"add_contacts_toggle\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1080
        if ( !($context["t1_contact_add_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_contact_add_toggle\" value=\"0\" ";
        // line 1081
        if ( !($context["t1_contact_add_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1082
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1084
        if (($context["t1_contact_add_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_contact_add_toggle\" value=\"1\" ";
        // line 1085
        if (($context["t1_contact_add_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1086
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
                        <script>
                          \$('#add_contacts_toggle .btn').click( function(e) {

                            var element = \$(this),
                                enabled = element.find('[type=radio]').val() == 1;

                            setTimeout(function () {
                              if (element.hasClass('active') && enabled) {
                                \$('#add_contacts_settings').collapse('show');
                              } else {
                                \$('#add_contacts_settings').collapse('hide');
                              }
                            }, 10);

                          });
                        </script>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"collapse fade ";
        // line 1108
        if (($context["t1_contact_add_toggle"] ?? null)) {
            echo "in";
        }
        echo "\" id=\"add_contacts_settings\">
                        <div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1110
        echo ($context["entry_additional_numbers"] ?? null);
        echo "</label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t<table id=\"header-add-numbers-items\" class=\"table table-bordered mb-0\">
      \t\t\t\t\t\t\t\t\t\t\t\t<thead>
      \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1115
        echo ($context["table_image"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1116
        echo ($context["table_hint"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1117
        echo ($context["table_text"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1118
        echo ($context["table_link"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1119
        echo ($context["table_sort"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"w-1\"></td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
      \t\t\t\t\t\t\t\t\t\t\t\t</thead>
      \t\t\t\t\t\t\t\t\t\t\t\t<tbody>
      \t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1124
        $context["add_num_item_row"] = 0;
        // line 1125
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["t1_additional_numbers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t1_additional_number"]) {
            // line 1126
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"item-row-add-num";
            echo ($context["add_num_item_row"] ?? null);
            echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-add-num";
            // line 1128
            echo ($context["add_num_item_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_additional_number"], "thumb", [], "any", false, false, false, 1128);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"  /></a><input type=\"hidden\" name=\"t1_additional_number[";
            echo ($context["add_num_item_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_additional_number"], "image", [], "any", false, false, false, 1128);
            echo "\" id=\"input-image-add-num";
            echo ($context["add_num_item_row"] ?? null);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1132
                echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1133
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1133);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1133);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1133);
                echo "\" /></span>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_additional_number[";
                // line 1134
                echo ($context["add_num_item_row"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1134);
                echo "]\" value=\"";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["t1_additional_number"], "title", [], "any", false, false, false, 1134)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1134)] ?? null) : null);
                echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1137
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1140
                echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1141
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1141);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1141);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1141);
                echo "\" /></span>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_additional_number[";
                // line 1142
                echo ($context["add_num_item_row"] ?? null);
                echo "][hint][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1142);
                echo "]\" value=\"";
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["t1_additional_number"], "hint", [], "any", false, false, false, 1142)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1142)] ?? null) : null);
                echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1145
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1148
                echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1149
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1149);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1149);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1149);
                echo "\" /></span>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_additional_number[";
                // line 1150
                echo ($context["add_num_item_row"] ?? null);
                echo "][link][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1150);
                echo "]\" value=\"";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["t1_additional_number"], "link", [], "any", false, false, false, 1150)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1150)] ?? null) : null);
                echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1153
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input  class=\"form-control\" type=\"text\" name=\"t1_additional_number[";
            // line 1155
            echo ($context["add_num_item_row"] ?? null);
            echo "][sort]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_additional_number"], "sort", [], "any", false, false, false, 1155);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" onclick=\"\$('#item-row-add-num";
            // line 1158
            echo ($context["add_num_item_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_del"] ?? null);
            echo "\"><i class=\"fa fa-trash-o\"></i></a>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
      \t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1161
            $context["add_num_item_row"] = (($context["add_num_item_row"] ?? null) + 1);
            // line 1162
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t1_additional_number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1163
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t</tbody>
      \t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
      \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\"></td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-default\" onclick=\"addItemNumAdd();\" data-toggle=\"tooltip\" title=\"";
        // line 1167
        echo ($context["button_add"] ?? null);
        echo "\"><i class=\"fa fa-plus\"></i></a></td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
      \t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
      \t\t\t\t\t\t\t\t\t\t\t</table>
      \t\t\t\t\t\t\t\t\t\t\t<script>
      \t\t\t\t\t\t\t\t\t\t\t\tvar add_num_item_row = ";
        // line 1172
        echo ($context["add_num_item_row"] ?? null);
        echo ";

      \t\t\t\t\t\t\t\t\t\t\t\tfunction addItemNumAdd() {
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml  = '<tr id=\"item-row-add-num' + add_num_item_row + '\">';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><a href=\"\" id=\"thumb-image-add-num' + add_num_item_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1176
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"  /></a><input type=\"hidden\" name=\"t1_additional_number[' + add_num_item_row + '][image]\" value=\"\" id=\"input-image-add-num' + add_num_item_row + '\" /></td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1179
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1179);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1179);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1179);
            echo "\" /></span>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\" type=\"text\" name=\"t1_additional_number[' + add_num_item_row + '][title][";
            // line 1180
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1180);
            echo "]\" value=\"\" />';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1183
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1186
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1186);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1186);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1186);
            echo "\" /></span>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\" type=\"text\" name=\"t1_additional_number[' + add_num_item_row + '][hint][";
            // line 1187
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1187);
            echo "]\" value=\"\" />';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1190
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1193
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1193);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1193);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1193);
            echo "\" /></span>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\" type=\"text\" name=\"t1_additional_number[' + add_num_item_row + '][link][";
            // line 1194
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1194);
            echo "]\" value=\"\" />';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1197
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"t1_additional_number[' + add_num_item_row + '][sort]\" size=\"1\" value=\"0\" /></td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-right\"><a class=\"btn btn-danger\" onclick=\"\$(\\'#item-row-add-num' + add_num_item_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1199
        echo ($context["button_del"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</tr>';

      \t\t\t\t\t\t\t\t\t\t\t\t\t\$('#header-add-numbers-items tbody').append(html);;

      \t\t\t\t\t\t\t\t\t\t\t\t\tadd_num_item_row++;
      \t\t\t\t\t\t\t\t\t\t\t\t}
      \t\t\t\t\t\t\t\t\t\t\t</script>
      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t<hr>
      \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
      \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1211
        echo ($context["entry_additional_others"] ?? null);
        echo "</label>
      \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
      \t\t\t\t\t\t\t\t\t\t\t<table id=\"header-add-contacts-items\" class=\"table table-bordered mb-0\">
      \t\t\t\t\t\t\t\t\t\t\t\t<thead>
      \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
                                  <td class=\"nowrap\">";
        // line 1216
        echo ($context["table_image"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1217
        echo ($context["table_hint"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1218
        echo ($context["table_text"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1219
        echo ($context["table_link"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1220
        echo ($context["table_sort"] ?? null);
        echo "</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"w-1\"></td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
      \t\t\t\t\t\t\t\t\t\t\t\t</thead>
      \t\t\t\t\t\t\t\t\t\t\t\t<tbody>
      \t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1225
        $context["add_cont_item_row"] = 0;
        // line 1226
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["t1_additional_contacts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t1_additional_contact"]) {
            // line 1227
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"item-row-add-cont";
            echo ($context["add_cont_item_row"] ?? null);
            echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-add-cont";
            // line 1229
            echo ($context["add_cont_item_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_additional_contact"], "thumb", [], "any", false, false, false, 1229);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"  /></a><input type=\"hidden\" name=\"t1_additional_contact[";
            echo ($context["add_cont_item_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_additional_contact"], "image", [], "any", false, false, false, 1229);
            echo "\" id=\"input-image-add-cont";
            echo ($context["add_cont_item_row"] ?? null);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1233
                echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1234
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1234);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1234);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1234);
                echo "\" /></span>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_additional_contact[";
                // line 1235
                echo ($context["add_cont_item_row"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1235);
                echo "]\" value=\"";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["t1_additional_contact"], "title", [], "any", false, false, false, 1235)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1235)] ?? null) : null);
                echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1238
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1241
                echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1242
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1242);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1242);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1242);
                echo "\" /></span>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_additional_contact[";
                // line 1243
                echo ($context["add_cont_item_row"] ?? null);
                echo "][hint][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1243);
                echo "]\" value=\"";
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, $context["t1_additional_contact"], "hint", [], "any", false, false, false, 1243)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1243)] ?? null) : null);
                echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1246
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1249
                echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1250
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1250);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1250);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1250);
                echo "\" /></span>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_additional_contact[";
                // line 1251
                echo ($context["add_cont_item_row"] ?? null);
                echo "][link][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1251);
                echo "]\" value=\"";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["t1_additional_contact"], "link", [], "any", false, false, false, 1251)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1251)] ?? null) : null);
                echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1254
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input  class=\"form-control\" type=\"text\" name=\"t1_additional_contact[";
            // line 1256
            echo ($context["add_cont_item_row"] ?? null);
            echo "][sort]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_additional_contact"], "sort", [], "any", false, false, false, 1256);
            echo "\" />
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" onclick=\"\$('#item-row-add-cont";
            // line 1259
            echo ($context["add_cont_item_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_del"] ?? null);
            echo "\"><i class=\"fa fa-trash-o\"></i></a>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
      \t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1262
            $context["add_cont_item_row"] = (($context["add_cont_item_row"] ?? null) + 1);
            // line 1263
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t1_additional_contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1264
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t</tbody>
      \t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
      \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\"></td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-default\" onclick=\"addItemContAdd();\" data-toggle=\"tooltip\" title=\"";
        // line 1268
        echo ($context["button_add"] ?? null);
        echo "\"><i class=\"fa fa-plus\"></i></a></td>
      \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
      \t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
      \t\t\t\t\t\t\t\t\t\t\t</table>
      \t\t\t\t\t\t\t\t\t\t\t<script>
      \t\t\t\t\t\t\t\t\t\t\t\tvar add_cont_item_row = ";
        // line 1273
        echo ($context["add_cont_item_row"] ?? null);
        echo ";

      \t\t\t\t\t\t\t\t\t\t\t\tfunction addItemContAdd() {
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml  = '<tr id=\"item-row-add-cont' + add_cont_item_row + '\">';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><a href=\"\" id=\"thumb-image-add-cont' + add_cont_item_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1277
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"  /></a><input type=\"hidden\" name=\"t1_additional_contact[' + add_cont_item_row + '][image]\" value=\"\" id=\"input-image-add-cont' + add_cont_item_row + '\" /></td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1280
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1280);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1280);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1280);
            echo "\" /></span>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\" type=\"text\" name=\"t1_additional_contact[' + add_cont_item_row + '][title][";
            // line 1281
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1281);
            echo "]\" value=\"\" />';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1284
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1287
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1287);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1287);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1287);
            echo "\" /></span>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\" type=\"text\" name=\"t1_additional_contact[' + add_cont_item_row + '][hint][";
            // line 1288
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1288);
            echo "]\" value=\"\" />';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1291
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1294
            echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1294);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1294);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1294);
            echo "\" /></span>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\" type=\"text\" name=\"t1_additional_contact[' + add_cont_item_row + '][link][";
            // line 1295
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1295);
            echo "]\" value=\"\" />';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
      \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1298
        echo "      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"t1_additional_contact[' + add_cont_item_row + '][sort]\" size=\"1\" value=\"0\" /></td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-right\"><a class=\"btn btn-danger\" onclick=\"\$(\\'#item-row-add-cont' + add_cont_item_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1300
        echo ($context["button_del"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></td>';
      \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</tr>';

      \t\t\t\t\t\t\t\t\t\t\t\t\t\$('#header-add-contacts-items tbody').append(html);;

      \t\t\t\t\t\t\t\t\t\t\t\t\tadd_cont_item_row++;
      \t\t\t\t\t\t\t\t\t\t\t\t}
      \t\t\t\t\t\t\t\t\t\t\t</script>
      \t\t\t\t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t\t\t\t</div>
                        <hr>
                      </div>
    \t\t\t\t\t\t\t\t</div>

                    <div class=\"tab-pane\" id=\"help-menu-settings\">
                      <hr class=\"mt-0\">
                      <div class=\"form-group\">
                      \t<label class=\"col-sm-3 control-label\">";
        // line 1317
        echo ($context["entry_help_menu_toggle"] ?? null);
        echo "</label>
                      \t<div class=\"col-sm-9\">
                      \t\t<div class=\"btn-group\" data-toggle=\"buttons\">
                      \t\t\t<label class=\"btn btn-default ";
        // line 1320
        if ( !($context["t1_help_menu_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
                      \t\t\t\t<input type=\"radio\" name=\"t1_help_menu_toggle\" value=\"0\" ";
        // line 1321
        if ( !($context["t1_help_menu_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
                      \t\t\t\t<span class=\"on-off\">";
        // line 1322
        echo ($context["button_off"] ?? null);
        echo "</span>
                      \t\t\t</label>
                      \t\t\t<label class=\"btn btn-default ";
        // line 1324
        if (($context["t1_help_menu_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
                      \t\t\t\t<input type=\"radio\" name=\"t1_help_menu_toggle\" value=\"1\" ";
        // line 1325
        if (($context["t1_help_menu_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
                      \t\t\t\t<span class=\"on-off\">";
        // line 1326
        echo ($context["button_on"] ?? null);
        echo "</span>
                      \t\t\t</label>
                      \t\t</div>
                      \t</div>
                      </div>
                      <hr>
                      <div class=\"form-group\">
                      \t<label class=\"col-sm-3 control-label\">";
        // line 1333
        echo ($context["entry_help_menu_text"] ?? null);
        echo "</label>
                      \t<div class=\"col-sm-9\">
                      \t\t";
        // line 1335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1336
            echo "                      \t\t<div class=\"input-group \">
                      \t\t\t<span class=\"input-group-addon\">
                      \t\t\t\t<img src=\"language/";
            // line 1338
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1338);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1338);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1338);
            echo "\" />
                      \t\t\t</span>
                      \t\t\t<input name=\"t1_help_menu_text[";
            // line 1340
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1340);
            echo "]\" value=\"";
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["t1_help_menu_text"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1340)] ?? null) : null);
            echo "\" class=\"form-control\" />
                      \t\t</div>
                      \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1343
        echo "                      \t</div>
                      </div>
                      <hr>
                      <div class=\"form-group\">
                      \t<label class=\"col-sm-3 control-label\">";
        // line 1347
        echo ($context["entry_help_menu_item"] ?? null);
        echo "</label>
                      \t<div class=\"col-sm-9\">
                      \t\t<table id=\"help-menu-items\" class=\"table table-bordered mb-0\">
                      \t\t\t<thead>
                      \t\t\t\t<tr>
                      \t\t\t\t\t<td class=\"nowrap\">";
        // line 1352
        echo ($context["lg_text_text"] ?? null);
        echo "</td>
                      \t\t\t\t\t<td class=\"nowrap\">";
        // line 1353
        echo ($context["lg_text_link"] ?? null);
        echo "</td>
                      \t\t\t\t\t<td class=\"nowrap\">";
        // line 1354
        echo ($context["lg_text_sort"] ?? null);
        echo "</td>
                      \t\t\t\t\t<td class=\"w-1\"></td>
                      \t\t\t\t</tr>
                      \t\t\t</thead>
                      \t\t\t<tbody>
                      \t\t\t";
        // line 1359
        $context["item_row_help"] = 0;
        // line 1360
        echo "                      \t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["t1_help_menu_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t1_help_menu_item"]) {
            // line 1361
            echo "                      \t\t\t\t<tr id=\"item-row-help";
            echo ($context["item_row_help"] ?? null);
            echo "\">
                      \t\t\t\t\t<td class=\"text-left\">
                      \t\t\t\t\t\t";
            // line 1363
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1364
                echo "                      \t\t\t\t\t\t<div class=\"input-group  pull-left\">
                      \t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1365
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1365);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1365);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1365);
                echo "\" /></span>
                      \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_help_menu_item[";
                // line 1366
                echo ($context["item_row_help"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1366);
                echo "]\" value=\"";
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["t1_help_menu_item"], "title", [], "any", false, false, false, 1366)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1366)] ?? null) : null);
                echo "\" />
                      \t\t\t\t\t\t</div>
                      \t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1369
            echo "                      \t\t\t\t\t</td>
                      \t\t\t\t\t<td class=\"text-left\">
                      \t\t\t\t\t\t";
            // line 1371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1372
                echo "                      \t\t\t\t\t\t<div class=\"input-group  pull-left\">
                      \t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1373
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1373);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1373);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1373);
                echo "\" /></span>
                      \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_help_menu_item[";
                // line 1374
                echo ($context["item_row_help"] ?? null);
                echo "][link][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1374);
                echo "]\" value=\"";
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["t1_help_menu_item"], "link", [], "any", false, false, false, 1374)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1374)] ?? null) : null);
                echo "\" />
                      \t\t\t\t\t\t</div>
                      \t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1377
            echo "                      \t\t\t\t\t</td>
                      \t\t\t\t\t<td class=\"text-left\">
                      \t\t\t\t\t\t<input  class=\"form-control\" type=\"text\" name=\"t1_help_menu_item[";
            // line 1379
            echo ($context["item_row_help"] ?? null);
            echo "][sort]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_help_menu_item"], "sort", [], "any", false, false, false, 1379);
            echo "\" />
                      \t\t\t\t\t</td>
                      \t\t\t\t\t<td class=\"text-right\">
                      \t\t\t\t\t\t<a class=\"btn btn-danger\" onclick=\"\$('#item-row-help";
            // line 1382
            echo ($context["item_row_help"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_del"] ?? null);
            echo "\"><i class=\"fa fa-trash-o\"></i></a>
                      \t\t\t\t\t</td>
                      \t\t\t\t</tr>
                      \t\t\t";
            // line 1385
            $context["item_row_help"] = (($context["item_row_help"] ?? null) + 1);
            // line 1386
            echo "                      \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t1_help_menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1387
        echo "                      \t\t\t</tbody>
                      \t\t\t<tfoot>
                      \t\t\t\t<tr>
                      \t\t\t\t\t<td colspan=\"3\"></td>
                      \t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-default\" onclick=\"addItemHelp();\" data-toggle=\"tooltip\" title=\"";
        // line 1391
        echo ($context["button_add"] ?? null);
        echo "\"><i class=\"fa fa-plus\"></i></a></td>
                      \t\t\t\t</tr>
                      \t\t\t</tfoot>
                      \t\t</table>
                      \t\t<script>
                      \t\t\tvar item_row_help = ";
        // line 1396
        echo ($context["item_row_help"] ?? null);
        echo ";

                      \t\t\tfunction addItemHelp() {
                      \t\t\t\thtml  = '<tr id=\"item-row-help' + item_row_help + '\">';
                      \t\t\t\thtml += '<td class=\"text-left\">';
                      \t\t\t\t";
        // line 1401
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1402
            echo "                      \t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1402);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1402);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1402);
            echo "\" /></span>';
                      \t\t\t\thtml += '<input class=\"form-control\" type=\"text\" name=\"t1_help_menu_item[' + item_row_help + '][title][";
            // line 1403
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1403);
            echo "]\" value=\"\" />';
                      \t\t\t\thtml += '</div>';
                      \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1406
        echo "                      \t\t\t\thtml += '</td>';
                      \t\t\t\thtml += '<td class=\"text-left\">';
                      \t\t\t\t";
        // line 1408
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1409
            echo "                      \t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1409);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1409);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1409);
            echo "\" /></span>';
                      \t\t\t\thtml += '<input class=\"form-control\"  type=\"text\" name=\"t1_help_menu_item[' + item_row_help + '][link][";
            // line 1410
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1410);
            echo "]\" value=\"\" />';
                      \t\t\t\thtml += '</div>';
                      \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1413
        echo "                      \t\t\t\thtml += '</td>';
                      \t\t\t\thtml += '<td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"t1_help_menu_item[' + item_row_help + '][sort]\" size=\"1\" value=\"0\" /></td>';
                      \t\t\t\thtml += '<td class=\"text-right\"><a class=\"btn btn-danger\" onclick=\"\$(\\'#item-row-help' + item_row_help  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1415
        echo ($context["button_del"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></td>';
                      \t\t\t\thtml += '</tr>';

                      \t\t\t\t\$('#help-menu-items tbody').append(html);;

                      \t\t\t\titem_row_help++;
                      \t\t\t}
                      \t\t</script>
                      \t</div>
                      </div>
                      <hr>
                    </div>

    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"main-menu-settings\">
                      <hr class=\"mt-0\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1431
        echo ($context["entry_main_menu_toggle"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1434
        if ( !($context["t1_main_menu_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_main_menu_toggle\" value=\"0\" ";
        // line 1435
        if ( !($context["t1_main_menu_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1436
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1438
        if (($context["t1_main_menu_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_main_menu_toggle\" value=\"1\" ";
        // line 1439
        if (($context["t1_main_menu_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1440
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1447
        echo ($context["entry_main_menu_item"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<table id=\"main-menu-items\" class=\"table table-bordered mb-0\">
    \t\t\t\t\t\t\t\t\t\t\t\t<thead>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1452
        echo ($context["lg_text_text"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1453
        echo ($context["lg_text_link"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1454
        echo ($context["lg_text_sort"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"w-1\"></td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t</thead>
    \t\t\t\t\t\t\t\t\t\t\t\t<tbody>
    \t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1459
        $context["item_row_main"] = 0;
        // line 1460
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["t1_main_menu_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t1_main_menu_item"]) {
            // line 1461
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"item-row-main";
            echo ($context["item_row_main"] ?? null);
            echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1463
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1464
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1465
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1465);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1465);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1465);
                echo "\" /></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_main_menu_item[";
                // line 1466
                echo ($context["item_row_main"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1466);
                echo "]\" value=\"";
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, $context["t1_main_menu_item"], "title", [], "any", false, false, false, 1466)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1466)] ?? null) : null);
                echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1469
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1471
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1472
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1473
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1473);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1473);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1473);
                echo "\" /></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_main_menu_item[";
                // line 1474
                echo ($context["item_row_main"] ?? null);
                echo "][link][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1474);
                echo "]\" value=\"";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, $context["t1_main_menu_item"], "link", [], "any", false, false, false, 1474)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1474)] ?? null) : null);
                echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1477
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input  class=\"form-control\" type=\"text\" name=\"t1_main_menu_item[";
            // line 1479
            echo ($context["item_row_main"] ?? null);
            echo "][sort]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_main_menu_item"], "sort", [], "any", false, false, false, 1479);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" onclick=\"\$('#item-row-main";
            // line 1482
            echo ($context["item_row_main"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_del"] ?? null);
            echo "\"><i class=\"fa fa-trash-o\"></i></a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1485
            $context["item_row_main"] = (($context["item_row_main"] ?? null) + 1);
            // line 1486
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t1_main_menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1487
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</tbody>
    \t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\"></td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-default\" onclick=\"addItemMain();\" data-toggle=\"tooltip\" title=\"";
        // line 1491
        echo ($context["button_add"] ?? null);
        echo "\"><i class=\"fa fa-plus\"></i></a></td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
    \t\t\t\t\t\t\t\t\t\t\t</table>
    \t\t\t\t\t\t\t\t\t\t\t<script>
    \t\t\t\t\t\t\t\t\t\t\t\tvar item_row_main = ";
        // line 1496
        echo ($context["item_row_main"] ?? null);
        echo ";
    \t\t\t\t\t\t\t\t\t\t\t\tfunction addItemMain() {
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml  = '<tr id=\"item-row-main' + item_row_main + '\">';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1500
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1501
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1501);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1501);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1501);
            echo "\" /></span>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\" type=\"text\" name=\"t1_main_menu_item[' + item_row_main + '][title][";
            // line 1502
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1502);
            echo "]\" value=\"\" />';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1505
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1508
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1508);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1508);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1508);
            echo "\" /></span>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\"  type=\"text\" name=\"t1_main_menu_item[' + item_row_main + '][link][";
            // line 1509
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1509);
            echo "]\" value=\"\" />';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1512
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"t1_main_menu_item[' + item_row_main + '][sort]\" size=\"1\" value=\"0\" /></td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-right\"><a class=\"btn btn-danger\" onclick=\"\$(\\'#item-row-main' + item_row_main  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1514
        echo ($context["button_del"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</tr>';
    \t\t\t\t\t\t\t\t\t\t\t\t\t\$('#main-menu-items tbody').append(html);;
    \t\t\t\t\t\t\t\t\t\t\t\t\titem_row_main++;
    \t\t\t\t\t\t\t\t\t\t\t\t}
    \t\t\t\t\t\t\t\t\t\t\t</script>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
                      <hr>
                    </div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"category-menu-settings\">
                      <hr class=\"mt-0\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1528
        echo ($context["entry_category_shown_pages"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_category_shown_pages[]\" value=\"common/home\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1534
        if (twig_in_filter("common/home", ($context["t1_category_shown_pages"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 1535
        echo ($context["entry_category_shown_pages_main"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_category_shown_pages[]\" value=\"product/category\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1541
        if (twig_in_filter("product/category", ($context["t1_category_shown_pages"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 1542
        echo ($context["entry_category_shown_pages_catgory"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_category_shown_pages[]\" value=\"product/special\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1548
        if (twig_in_filter("product/special", ($context["t1_category_shown_pages"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 1549
        echo ($context["entry_category_shown_pages_special"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_category_shown_pages[]\" value=\"product/manufacturer/info\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1555
        if (twig_in_filter("product/manufacturer/info", ($context["t1_category_shown_pages"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 1556
        echo ($context["entry_category_shown_pages_manufacturer"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_category_shown_pages[]\" value=\"product/search\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1562
        if (twig_in_filter("product/search", ($context["t1_category_shown_pages"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 1563
        echo ($context["entry_category_shown_pages_search"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"t1_category_shown_pages[]\" value=\"arr_holder\" />
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1572
        echo ($context["entry_category_mask_toggle"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1575
        if ( !($context["t1_category_mask_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_category_mask_toggle\" value=\"0\" ";
        // line 1576
        if ( !($context["t1_category_mask_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1577
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1579
        if (($context["t1_category_mask_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_category_mask_toggle\" value=\"1\" ";
        // line 1580
        if (($context["t1_category_mask_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1581
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1588
        echo ($context["entry_category_no_full_height_submenu"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1591
        if ( !($context["t1_category_no_full_height_submenu"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_category_no_full_height_submenu\" value=\"0\" ";
        // line 1592
        if ( !($context["t1_category_no_full_height_submenu"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1593
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1595
        if (($context["t1_category_no_full_height_submenu"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_category_no_full_height_submenu\" value=\"1\" ";
        // line 1596
        if (($context["t1_category_no_full_height_submenu"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1597
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1604
        echo ($context["entry_category_third_level_toggle"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1607
        if ( !($context["t1_category_third_level_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_category_third_level_toggle\" value=\"0\" ";
        // line 1608
        if ( !($context["t1_category_third_level_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1609
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1611
        if (($context["t1_category_third_level_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_category_third_level_toggle\" value=\"1\" ";
        // line 1612
        if (($context["t1_category_third_level_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1613
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"\">";
        // line 1620
        echo ($context["entry_category_third_level_limit"] ?? null);
        echo "</span></label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_category_third_level_limit\" value=\"";
        // line 1622
        echo ($context["t1_category_third_level_limit"] ?? null);
        echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1627
        echo ($context["entry_add_cat_links_toggle"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1630
        if ( !($context["t1_add_cat_links_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_add_cat_links_toggle\" value=\"0\" ";
        // line 1631
        if ( !($context["t1_add_cat_links_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1632
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1634
        if (($context["t1_add_cat_links_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_add_cat_links_toggle\" value=\"1\" ";
        // line 1635
        if (($context["t1_add_cat_links_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1636
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1643
        echo ($context["entry_add_cat_links"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<table id=\"category-links-items\" class=\"table table-bordered\">
    \t\t\t\t\t\t\t\t\t\t\t\t<thead>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\" colspan=\"2\">";
        // line 1648
        echo ($context["table_image_h"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1649
        echo ($context["table_image_html"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1650
        echo ($context["table_text"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1651
        echo ($context["table_link"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1652
        echo ($context["table_position"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1653
        echo ($context["table_sort"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"w-1\"></td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t</thead>
    \t\t\t\t\t\t\t\t\t\t\t\t<tbody>
    \t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1658
        $context["item_row_cat_links"] = 0;
        // line 1659
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["t1_add_cat_links_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t1_add_cat_links_item"]) {
            // line 1660
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"item-row-cat-links";
            echo ($context["item_row_cat_links"] ?? null);
            echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-add-category-peace-";
            // line 1662
            echo ($context["item_row_cat_links"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "thumb_peace", [], "any", false, false, false, 1662);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"  /></a><input type=\"hidden\" name=\"t1_add_cat_links_item[";
            echo ($context["item_row_cat_links"] ?? null);
            echo "][image_peace]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "image_peace", [], "any", false, false, false, 1662);
            echo "\" id=\"input-image-add-category-peace-";
            echo ($context["item_row_cat_links"] ?? null);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-add-category-hover-";
            // line 1665
            echo ($context["item_row_cat_links"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "thumb_hover", [], "any", false, false, false, 1665);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"  /></a><input type=\"hidden\" name=\"t1_add_cat_links_item[";
            echo ($context["item_row_cat_links"] ?? null);
            echo "][image_hover]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "image_hover", [], "any", false, false, false, 1665);
            echo "\" id=\"input-image-add-category-hover-";
            echo ($context["item_row_cat_links"] ?? null);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea style=\"min-width:100px;font-family:monospace\" class=\"form-control\" name=\"t1_add_cat_links_item[";
            // line 1668
            echo ($context["item_row_cat_links"] ?? null);
            echo "][html]\">";
            echo twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "html", [], "any", false, false, false, 1668);
            echo "</textarea>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1671
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1672
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1673
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1673);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1673);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1673);
                echo "\" /></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_add_cat_links_item[";
                // line 1674
                echo ($context["item_row_cat_links"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1674);
                echo "]\" value=\"";
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "title", [], "any", false, false, false, 1674)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1674)] ?? null) : null);
                echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1677
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1679
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1680
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  pull-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
                // line 1681
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1681);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1681);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1681);
                echo "\" /></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"t1_add_cat_links_item[";
                // line 1682
                echo ($context["item_row_cat_links"] ?? null);
                echo "][link][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1682);
                echo "]\" value=\"";
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "link", [], "any", false, false, false, 1682)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1682)] ?? null) : null);
                echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1685
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group-vertical btn-group-sm\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
            // line 1688
            if ( !twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "position", [], "any", false, false, false, 1688)) {
                echo " active ";
            }
            echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_add_cat_links_item[";
            // line 1689
            echo ($context["item_row_cat_links"] ?? null);
            echo "][position]\" value=\"0\" ";
            if ( !twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "position", [], "any", false, false, false, 1689)) {
                echo " checked ";
            }
            echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
            // line 1690
            echo ($context["entry_add_cat_links_position_top"] ?? null);
            echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
            // line 1692
            if (twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "position", [], "any", false, false, false, 1692)) {
                echo " active ";
            }
            echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_add_cat_links_item[";
            // line 1693
            echo ($context["item_row_cat_links"] ?? null);
            echo "][position]\" value=\"1\" ";
            if (twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "position", [], "any", false, false, false, 1693)) {
                echo " checked ";
            }
            echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
            // line 1694
            echo ($context["entry_add_cat_links_position_bottom"] ?? null);
            echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input  class=\"form-control\" type=\"text\" name=\"t1_add_cat_links_item[";
            // line 1699
            echo ($context["item_row_cat_links"] ?? null);
            echo "][sort]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t1_add_cat_links_item"], "sort", [], "any", false, false, false, 1699);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" onclick=\"\$('#item-row-cat-links";
            // line 1702
            echo ($context["item_row_cat_links"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_del"] ?? null);
            echo "\"><i class=\"fa fa-trash-o\"></i></a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1705
            $context["item_row_cat_links"] = (($context["item_row_cat_links"] ?? null) + 1);
            // line 1706
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t1_add_cat_links_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1707
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</tbody>
    \t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\"></td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><a class=\"btn btn-default\" onclick=\"addItemCatLinks();\" data-toggle=\"tooltip\" title=\"";
        // line 1711
        echo ($context["button_add"] ?? null);
        echo "\"><i class=\"fa fa-plus\"></i></a></td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
    \t\t\t\t\t\t\t\t\t\t\t</table>
    \t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
    \t\t\t\t\t\t\t\t\t\t\t\tvar item_row_cat_links = ";
        // line 1716
        echo ($context["item_row_cat_links"] ?? null);
        echo ";
    \t\t\t\t\t\t\t\t\t\t\t\tfunction addItemCatLinks() {
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml  = '<tr id=\"item-row-cat-links' + item_row_cat_links + '\">';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><a href=\"\" id=\"thumb-image-add-category-peace-' + item_row_cat_links + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1719
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"t1_add_cat_links_item[' + item_row_cat_links + '][image_peace]\" value=\"\" id=\"input-image-add-category-peace-' + item_row_cat_links + '\" /></td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><a href=\"\" id=\"thumb-image-add-category-hover-' + item_row_cat_links + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1720
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"t1_add_cat_links_item[' + item_row_cat_links + '][image_hover]\" value=\"\" id=\"input-image-add-category-hover-' + item_row_cat_links + '\" /></td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><textarea style=\"min-width:100px;font-family:monospace\" class=\"form-control\" name=\"t1_add_cat_links_item[' + item_row_cat_links + '][html]\"></textarea></td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1723
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1724
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1724);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1724);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1724);
            echo "\" /></span>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\" type=\"text\" name=\"t1_add_cat_links_item[' + item_row_cat_links + '][title][";
            // line 1725
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1725);
            echo "]\" value=\"\" />';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1728
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\">';
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1730
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1731
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<div class=\"input-group  pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1731);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1731);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1731);
            echo "\" /></span>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<input class=\"form-control\"  type=\"text\" name=\"t1_add_cat_links_item[' + item_row_cat_links + '][link][";
            // line 1732
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1732);
            echo "]\" value=\"\" />';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</div>';
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1735
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><div class=\"btn-group-vertical btn-group-sm\" data-toggle=\"buttons\"><label class=\"btn btn-default active\"><input type=\"radio\" name=\"t1_add_cat_links_item[' + item_row_cat_links + '][position]\" value=\"0\" checked><span class=\"on-off\">";
        // line 1736
        echo ($context["entry_add_cat_links_position_top"] ?? null);
        echo "</span></label><label class=\"btn btn-default\"><input type=\"radio\" name=\"t1_add_cat_links_item[' + item_row_cat_links + '][position]\" value=\"1\" ><span class=\"on-off\">";
        echo ($context["entry_add_cat_links_position_bottom"] ?? null);
        echo "</span></label></div></td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"t1_add_cat_links_item[' + item_row_cat_links + '][sort]\" size=\"1\" value=\"0\" /></td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<td class=\"text-right\"><a class=\"btn btn-danger\" onclick=\"\$(\\'#item-row-cat-links' + item_row_cat_links  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1738
        echo ($context["button_del"] ?? null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a></td>';
    \t\t\t\t\t\t\t\t\t\t\t\t\thtml += '</tr>';
    \t\t\t\t\t\t\t\t\t\t\t\t\t\$('#category-links-items tbody').append(html);;
    \t\t\t\t\t\t\t\t\t\t\t\t\titem_row_cat_links++;
    \t\t\t\t\t\t\t\t\t\t\t\t}
    \t\t\t\t\t\t\t\t\t\t\t</script>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1747
        echo ($context["entry_category_icon"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" data-toggle=\"collapse\" href=\"#table-categoryes\">";
        // line 1749
        echo ($context["entry_category_icon_show_button"] ?? null);
        echo "</button>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive collapse \" id=\"table-categoryes\">
    \t\t\t\t\t\t\t\t\t\t\t\t<br>
    \t\t\t\t\t\t\t\t\t\t\t\t<table  class=\"table table-bordered table-hover\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\" colspan=\"2\">";
        // line 1755
        echo ($context["table_image_h"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1756
        echo ($context["table_image_html"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap\">";
        // line 1757
        echo ($context["table_category"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1761
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1762
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-category-icon-peace-";
            // line 1764
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1764);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["category_icon_thumb"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1764)] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["peace"] ?? null) : null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"t1_category_icon[";
            // line 1765
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1765);
            echo "][peace]\" value=\"";
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["t1_category_icon"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1765)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["peace"] ?? null) : null);
            echo "\" id=\"input-category-icon-peace-";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1765);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-category-icon-hover-";
            // line 1768
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1768);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["category_icon_thumb"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1768)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["hover"] ?? null) : null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"t1_category_icon[";
            // line 1769
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1769);
            echo "][hover]\" value=\"";
            echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["t1_category_icon"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1769)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["hover"] ?? null) : null);
            echo "\" id=\"input-category-icon-hover-";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1769);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"t1_category_icon[";
            // line 1772
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1772);
            echo "][html]\" rows=\"2\" style=\"min-width:100px;font-family:monospace\">";
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["t1_category_icon"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1772)] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["html"] ?? null) : null);
            echo "</textarea>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width: 100%;\">";
            // line 1774
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1774);
            echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1777
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
    \t\t\t\t\t\t\t\t\t\t\t\t</table>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"search-settings\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1786
        echo ($context["entry_livesearch_toggle"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1789
        if ( !($context["t1_livesearch_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_toggle\" value=\"0\" ";
        // line 1790
        if ( !($context["t1_livesearch_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1791
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1793
        if (($context["t1_livesearch_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_toggle\" value=\"1\" ";
        // line 1794
        if (($context["t1_livesearch_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1795
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"\">";
        // line 1802
        echo ($context["entry_livesearch_characters"] ?? null);
        echo "</span></label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
    \t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"t1_livesearch_characters\" value=\"";
        // line 1804
        echo ($context["t1_livesearch_characters"] ?? null);
        echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>

    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1810
        echo ($context["entry_livesearch_show_description"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1813
        if ( !($context["t1_livesearch_show_description"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_show_description\" value=\"0\" ";
        // line 1814
        if ( !($context["t1_livesearch_show_description"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1815
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1817
        if (($context["t1_livesearch_show_description"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_show_description\" value=\"1\" ";
        // line 1818
        if (($context["t1_livesearch_show_description"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1819
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1826
        echo ($context["entry_livesearch_mask"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1829
        if ( !($context["t1_livesearch_mask"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_mask\" value=\"0\" ";
        // line 1830
        if ( !($context["t1_livesearch_mask"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1831
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1833
        if (($context["t1_livesearch_mask"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_mask\" value=\"1\" ";
        // line 1834
        if (($context["t1_livesearch_mask"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1835
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"\">";
        // line 1842
        echo ($context["entry_livesearch_results"] ?? null);
        echo "</span></label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
    \t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"t1_livesearch_results\" value=\"";
        // line 1844
        echo ($context["t1_livesearch_results"] ?? null);
        echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1849
        echo ($context["entry_livesearch_subcat_search"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1852
        if ( !($context["t1_livesearch_subcat_search"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_subcat_search\" value=\"0\" ";
        // line 1853
        if ( !($context["t1_livesearch_subcat_search"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1854
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1856
        if (($context["t1_livesearch_subcat_search"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_subcat_search\" value=\"1\" ";
        // line 1857
        if (($context["t1_livesearch_subcat_search"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1858
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1865
        echo ($context["entry_livesearch_description_search"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1868
        if ( !($context["t1_livesearch_description_search"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_description_search\" value=\"0\" ";
        // line 1869
        if ( !($context["t1_livesearch_description_search"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1870
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1872
        if (($context["t1_livesearch_description_search"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_livesearch_description_search\" value=\"1\" ";
        // line 1873
        if (($context["t1_livesearch_description_search"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1874
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>

    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"category-page-settings\">
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1885
        echo ($context["entry_category_p_show_image"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1888
        if ( !($context["t1_sub_cat_img_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_sub_cat_img_status\" value=\"0\" ";
        // line 1889
        if ( !($context["t1_sub_cat_img_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1890
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1892
        if (($context["t1_sub_cat_img_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_sub_cat_img_status\" value=\"1\" ";
        // line 1893
        if (($context["t1_sub_cat_img_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1894
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1901
        echo ($context["entry_category_p_description_position"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group-\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1904
        if ( !($context["t1_category_description_position"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_category_description_position\" value=\"0\" ";
        // line 1905
        if ( !($context["t1_category_description_position"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1906
        echo ($context["entry_category_p_description_position_up"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1908
        if (($context["t1_category_description_position"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_category_description_position\" value=\"1\" ";
        // line 1909
        if (($context["t1_category_description_position"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1910
        echo ($context["entry_category_p_description_position_down"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1917
        echo ($context["entry_category_p_display_mode"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group-\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1920
        if ((($context["t1_view_default"] ?? null) == "list")) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_view_default\" value=\"list\" ";
        // line 1921
        if ((($context["t1_view_default"] ?? null) == "list")) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1922
        echo ($context["entry_category_p_display_mode_list"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1924
        if ((($context["t1_view_default"] ?? null) == "grid")) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_view_default\" value=\"grid\" ";
        // line 1925
        if ((($context["t1_view_default"] ?? null) == "grid")) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1926
        echo ($context["entry_category_p_display_mode_grid"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
                            <label class=\"btn btn-default ";
        // line 1928
        if ((($context["t1_view_default"] ?? null) == "big_grid")) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_view_default\" value=\"big_grid\" ";
        // line 1929
        if ((($context["t1_view_default"] ?? null) == "big_grid")) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1930
        echo ($context["entry_category_p_display_mode_big_grid"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1937
        echo ($context["entry_category_p_stock_status"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1940
        if ( !($context["t1_catalog_stok_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_stok_status\" value=\"0\" ";
        // line 1941
        if ( !($context["t1_catalog_stok_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1942
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1944
        if (($context["t1_catalog_stok_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_stok_status\" value=\"1\" ";
        // line 1945
        if (($context["t1_catalog_stok_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 1946
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 1953
        echo ($context["entry_category_p_add_cart_action"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1956
        if ( !($context["t1_add_cart_action"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_add_cart_action\" value=\"0\" ";
        // line 1957
        if ( !($context["t1_add_cart_action"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1958
        echo ($context["entry_category_p_add_cart_action_cart"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 1960
        if (($context["t1_add_cart_action"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_add_cart_action\" value=\"1\" ";
        // line 1961
        if (($context["t1_add_cart_action"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1962
        echo ($context["entry_category_p_add_cart_action_note"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"Будет выводиться если поле не используется в качестве стикера (см. раздел <настройки стикеров>)\">";
        // line 1969
        echo ($context["entry_category_p_additional_fields"] ?? null);
        echo "</span></label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\">
                            <div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields_catalog[]\" value=\"model\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1975
        if (twig_in_filter("model", ($context["t1_product_additional_fields_catalog"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 1976
        echo ($context["entry_category_p_additional_fields_model"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields_catalog[]\" value=\"sku\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1982
        if (twig_in_filter("sku", ($context["t1_product_additional_fields_catalog"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 1983
        echo ($context["entry_category_p_additional_fields_sku"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields_catalog[]\" value=\"upc\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1989
        if (twig_in_filter("upc", ($context["t1_product_additional_fields_catalog"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 1990
        echo ($context["entry_category_p_additional_fields_upc"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields_catalog[]\" value=\"ean\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1996
        if (twig_in_filter("ean", ($context["t1_product_additional_fields_catalog"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 1997
        echo ($context["entry_category_p_additional_fields_ean"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields_catalog[]\" value=\"jan\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2003
        if (twig_in_filter("jan", ($context["t1_product_additional_fields_catalog"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2004
        echo ($context["entry_category_p_additional_fields_jan"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields_catalog[]\" value=\"isbn\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2010
        if (twig_in_filter("isbn", ($context["t1_product_additional_fields_catalog"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2011
        echo ($context["entry_category_p_additional_fields_isbn"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
                            <div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields_catalog[]\" value=\"mpn\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2017
        if (twig_in_filter("mpn", ($context["t1_product_additional_fields_catalog"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2018
        echo ($context["entry_category_p_additional_fields_mpn"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"t1_product_additional_fields_catalog[]\" value=\"arr_holder\" />
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"product-page-settings\">
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
    \t\t\t\t\t\t\t\t\t\t\t";
        // line 2031
        echo ($context["entry_product_p_additional_fields"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Будет выводиться если поле не используется в качестве стикера (см. раздел <настройки стикеров>)\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
    \t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\">
                            <div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields[]\" value=\"model\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2043
        if (twig_in_filter("model", ($context["t1_product_additional_fields"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2044
        echo ($context["entry_category_p_additional_fields_model"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields[]\" value=\"sku\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2050
        if (twig_in_filter("sku", ($context["t1_product_additional_fields"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2051
        echo ($context["entry_category_p_additional_fields_sku"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields[]\" value=\"upc\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2057
        if (twig_in_filter("upc", ($context["t1_product_additional_fields"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2058
        echo ($context["entry_category_p_additional_fields_upc"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields[]\" value=\"ean\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2064
        if (twig_in_filter("ean", ($context["t1_product_additional_fields"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2065
        echo ($context["entry_category_p_additional_fields_ean"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields[]\" value=\"jan\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2071
        if (twig_in_filter("jan", ($context["t1_product_additional_fields"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2072
        echo ($context["entry_category_p_additional_fields_jan"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields[]\" value=\"isbn\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2078
        if (twig_in_filter("isbn", ($context["t1_product_additional_fields"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2079
        echo ($context["entry_category_p_additional_fields_isbn"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
                            <div class=\"checkbox\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"t1_product_additional_fields[]\" value=\"mpn\"
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2085
        if (twig_in_filter("mpn", ($context["t1_product_additional_fields"] ?? null))) {
            echo "checked";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
        // line 2086
        echo ($context["entry_category_p_additional_fields_mpn"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"t1_product_additional_fields[]\" value=\"arr_holder\" />
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2095
        echo ($context["entry_product_p_additional_images"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_product_add_images_limit\" value=\"";
        // line 2097
        echo ($context["t1_product_add_images_limit"] ?? null);
        echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2102
        echo ($context["entry_product_p_s_description"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2105
        if ( !($context["t1_product_short_description"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_product_short_description\" value=\"0\" ";
        // line 2106
        if ( !($context["t1_product_short_description"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2107
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2109
        if (($context["t1_product_short_description"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_product_short_description\" value=\"1\" ";
        // line 2110
        if (($context["t1_product_short_description"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2111
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2118
        echo ($context["entry_product_p_s_attr_list"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2121
        if ( !($context["t1_product_short_attributes"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_product_short_attributes\" value=\"0\" ";
        // line 2122
        if ( !($context["t1_product_short_attributes"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2123
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2125
        if (($context["t1_product_short_attributes"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_product_short_attributes\" value=\"1\" ";
        // line 2126
        if (($context["t1_product_short_attributes"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2127
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2134
        echo ($context["entry_product_p_s_attr_count"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_product_short_attributes_limit\" value=\"";
        // line 2136
        echo ($context["t1_product_short_attributes_limit"] ?? null);
        echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2141
        echo ($context["entry_product_p_social"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2144
        if ( !($context["t1_product_social_likes"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_product_social_likes\" value=\"0\" ";
        // line 2145
        if ( !($context["t1_product_social_likes"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2146
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2148
        if (($context["t1_product_social_likes"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_product_social_likes\" value=\"1\" ";
        // line 2149
        if (($context["t1_product_social_likes"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2150
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
                      <hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"\">";
        // line 2157
        echo ($context["entry_product_p_social_code"] ?? null);
        echo "</span></label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"3\" name=\"t1_product_social_likes_code\" class=\"form-control\">";
        // line 2159
        echo ($context["t1_product_social_likes_code"] ?? null);
        echo "</textarea>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2164
        echo ($context["entry_product_p_related_position"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2167
        if ( !($context["t1_related_product_position"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_related_product_position\" value=\"0\" ";
        // line 2168
        if ( !($context["t1_related_product_position"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2169
        echo ($context["entry_product_p_related_position_up"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2171
        if (($context["t1_related_product_position"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_related_product_position\" value=\"1\" ";
        // line 2172
        if (($context["t1_related_product_position"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2173
        echo ($context["entry_product_p_related_position_down"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
                      <hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2180
        echo ($context["entry_product_p_related_button_cart"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2183
        if ( !($context["t1_related_product_buttons"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_related_product_buttons\" value=\"0\" ";
        // line 2184
        if ( !($context["t1_related_product_buttons"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2185
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2187
        if (($context["t1_related_product_buttons"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_related_product_buttons\" value=\"1\" ";
        // line 2188
        if (($context["t1_related_product_buttons"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2189
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
                      <hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2196
        echo ($context["entry_product_p_info"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2199
        if ( !($context["t1_extra_tab_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_extra_tab_status\" value=\"0\" ";
        // line 2200
        if ( !($context["t1_extra_tab_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2201
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2203
        if (($context["t1_extra_tab_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_extra_tab_status\" value=\"1\" ";
        // line 2204
        if (($context["t1_extra_tab_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2205
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
                      <hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2212
        echo ($context["entry_product_p_info_header"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t";
        // line 2214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2215
            echo "    \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group \">
    \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 2217
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2217);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2217);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2217);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_extra_tab_heading[";
            // line 2219
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2219);
            echo "]\" value=\"";
            echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["t1_extra_tab_heading"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2219)] ?? null) : null);
            echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2222
        echo "    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
                      <hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2226
        echo ($context["entry_product_p_info_content"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"extra_tab_content_language\" style=\"margin-bottom: 10px\">
    \t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2230
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#extra_tab_content_language-";
            // line 2231
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2231);
            echo "\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 2232
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2232);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2232);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2232);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2233
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2233);
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2237
        echo "    \t\t\t\t\t\t\t\t\t\t\t</ul>

    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
    \t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2241
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"extra_tab_content_language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2241);
            echo "\">

    \t\t\t\t\t\t\t\t\t\t\t\t\t<textarea data-toggle=\"summernote\" id=\"extra_tab_content-";
            // line 2243
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2243);
            echo "\" name=\"t1_extra_tab_content[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2243);
            echo "]\" class=\"form-control\">";
            echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["t1_extra_tab_content"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2243)] ?? null) : null);
            echo "</textarea>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2246
        echo "    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t<script>
    \t\t\t\t\t\t\t\t\t\t\t\t\$('#extra_tab_content_language a:first').trigger('click');
    \t\t\t\t\t\t\t\t\t\t\t</script>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"footer-settings\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2256
        echo ($context["entry_footer_map"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2259
        if ( !($context["t1_footer_map_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_footer_map_toggle\" value=\"0\" ";
        // line 2260
        if ( !($context["t1_footer_map_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2261
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2263
        if (($context["t1_footer_map_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_footer_map_toggle\" value=\"1\" ";
        // line 2264
        if (($context["t1_footer_map_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2265
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
                      <hr>
                      <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"\">";
        // line 2272
        echo ($context["entry_footer_map_code"] ?? null);
        echo "</span></label>
                        <div class=\"col-sm-9\">
                          <textarea rows=\"5\" name=\"t1_footer_map_code\" class=\"form-control text-monospace\" placeholder=\"Код карты\">";
        // line 2274
        echo ($context["t1_footer_map_code"] ?? null);
        echo "</textarea>
                        </div>
                      </div>
                      <hr>
                      <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">
                        \t";
        // line 2280
        echo ($context["entry_footer_navigation_link"] ?? null);
        echo "
                        \t<span data-toggle=\"tooltip\" title='";
        // line 2281
        echo ($context["help_footer_navigation_link"] ?? null);
        echo "'>
                        \t\t<svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                        \t</span>
                        </label>
                        <div class=\"col-sm-9\">
                          <input name=\"t1_footer_map_geocode\" value=\"";
        // line 2288
        echo ($context["t1_footer_map_geocode"] ?? null);
        echo "\" class=\"form-control\" />
                        </div>
                      </div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2293
        echo ($context["entry_footer_icons"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2296
        if ( !($context["t1_pay_icons_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_pay_icons_toggle\" value=\"0\" ";
        // line 2297
        if ( !($context["t1_pay_icons_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2298
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2300
        if (($context["t1_pay_icons_toggle"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_pay_icons_toggle\" value=\"1\" ";
        // line 2301
        if (($context["t1_pay_icons_toggle"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2302
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2309
        echo ($context["entry_footer_banner"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"inline-block\">
    \t\t\t\t\t\t\t\t\t\t\t\t<select name=\"t1_pay_icons_banner_id\" class=\"form-control\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"-1\">-- Выбрать --</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 2315
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 2315) == ($context["t1_pay_icons_banner_id"] ?? null))) {
                // line 2316
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 2316);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "name", [], "any", false, false, false, 2316);
                echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 2318
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 2318);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "name", [], "any", false, false, false, 2318);
                echo "</option>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 2320
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2321
        echo "    \t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"qview-settings\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2329
        echo ($context["entry_q_view_status"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2332
        if ( !($context["t1_qview_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_qview_status\" value=\"0\" ";
        // line 2333
        if ( !($context["t1_qview_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2334
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2336
        if (($context["t1_qview_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_qview_status\" value=\"1\" ";
        // line 2337
        if (($context["t1_qview_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2338
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"fastorder-settings\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2348
        echo ($context["entry_f_order_status"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2351
        if ( !($context["t1_fastorder_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_fastorder_status\" value=\"0\" ";
        // line 2352
        if ( !($context["t1_fastorder_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2353
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2355
        if (($context["t1_fastorder_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_fastorder_status\" value=\"1\" ";
        // line 2356
        if (($context["t1_fastorder_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2357
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2364
        echo ($context["entry_f_order_quantity"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2367
        if ( !($context["t1_fastorder_quantity_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_fastorder_quantity_status\" value=\"0\" ";
        // line 2368
        if ( !($context["t1_fastorder_quantity_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2369
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2371
        if (($context["t1_fastorder_quantity_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_fastorder_quantity_status\" value=\"1\" ";
        // line 2372
        if (($context["t1_fastorder_quantity_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2373
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
    \t\t\t\t\t\t\t\t\t\t\t";
        // line 2381
        echo ($context["entry_f_order_mail"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 2382
        echo ($context["help_f_order_mail"] ?? null);
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
    \t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_fastorder_mail\" value=\"";
        // line 2389
        echo ($context["t1_fastorder_mail"] ?? null);
        echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
    \t\t\t\t\t\t\t\t\t\t\t";
        // line 2395
        echo ($context["entry_f_order_mask"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_fastorder_phone_mask\" value=\"";
        // line 2398
        echo ($context["t1_fastorder_phone_mask"] ?? null);
        echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"modal-settings\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2406
        echo ($context["entry_modal_status"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2409
        if ( !($context["t1_modal_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_modal_status\" value=\"0\" ";
        // line 2410
        if ( !($context["t1_modal_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2411
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2413
        if (($context["t1_modal_status"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_modal_status\" value=\"1\" ";
        // line 2414
        if (($context["t1_modal_status"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2415
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"\">";
        // line 2422
        echo ($context["entry_modal_cookie"] ?? null);
        echo "</span></label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_modal_cookie_days\" value=\"";
        // line 2424
        echo ($context["t1_modal_cookie_days"] ?? null);
        echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2429
        echo ($context["entry_modal_size"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2432
        if ( !($context["t1_modal_size"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_modal_size\" value=\"0\" ";
        // line 2433
        if ( !($context["t1_modal_size"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 2434
        echo ($context["entry_modal_size_normal"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2436
        if ((($context["t1_modal_size"] ?? null) == "modal-sm")) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_modal_size\" value=\"modal-sm\" ";
        // line 2437
        if ((($context["t1_modal_size"] ?? null) == "modal-sm")) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 2438
        echo ($context["entry_modal_size_small"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2440
        if ((($context["t1_modal_size"] ?? null) == "modal-lg")) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_modal_size\" value=\"modal-lg\" ";
        // line 2441
        if ((($context["t1_modal_size"] ?? null) == "modal-lg")) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 2442
        echo ($context["entry_modal_size_big"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2449
        echo ($context["entry_modal_header"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t";
        // line 2451
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2452
            echo "    \t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group \">
    \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 2454
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2454);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2454);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2454);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t\t<input name=\"t1_modal_heading[";
            // line 2456
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2456);
            echo "]\" value=\"";
            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["t1_modal_heading"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2456)] ?? null) : null);
            echo "\" class=\"form-control\" />
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2459
        echo "    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2463
        echo ($context["entry_modal_body"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"modal_content_language\" style=\"margin-bottom: 10px\">
    \t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2466
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2467
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#modal_content_language-";
            // line 2468
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2468);
            echo "\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 2469
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2469);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2469);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2469);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2470
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2470);
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2474
        echo "    \t\t\t\t\t\t\t\t\t\t\t</ul>

    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
    \t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2477
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2478
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"modal_content_language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2478);
            echo "\">

    \t\t\t\t\t\t\t\t\t\t\t\t\t<textarea data-toggle=\"summernote\" id=\"modal_content-";
            // line 2480
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2480);
            echo "\" name=\"t1_modal_content[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2480);
            echo "]\" class=\"form-control\">";
            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["t1_modal_content"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2480)] ?? null) : null);
            echo "</textarea>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2483
        echo "    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t<script>
    \t\t\t\t\t\t\t\t\t\t\t\t\$('#modal_content_language a:first').trigger('click');
    \t\t\t\t\t\t\t\t\t\t\t</script>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"stikers-settings\">
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 2493
        echo ($context["entry_stikers"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
    \t\t\t\t\t\t\t\t\t\t\t\t<thead>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 2498
        echo ($context["table_stiker"] ?? null);
        echo "</th>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width:1%\">";
        // line 2499
        echo ($context["table_status"] ?? null);
        echo "</th>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2500
        echo ($context["table_stiker_color"] ?? null);
        echo "</th>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2501
        echo ($context["table_text_color"] ?? null);
        echo "</th>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t</thead>
    \t\t\t\t\t\t\t\t\t\t\t\t<tbody>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 2506
        echo ($context["entry_stikers_specal"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\" data-toggle=\"buttons\" style=\"display: flex;\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2509
        if ( !(($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["t1_stikers"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["special"] ?? null) : null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[special][status]\" value=\"0\" ";
        // line 2510
        if ( !(($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["t1_stikers"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["special"] ?? null) : null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2511
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2513
        if ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["t1_stikers"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["special"] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[special][status]\" value=\"1\" ";
        // line 2514
        if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["t1_stikers"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["special"] ?? null) : null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2515
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[special][bg_color]\" value=\"";
        // line 2522
        echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["t1_stikers"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["special"] ?? null) : null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["bg_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[special][txt_color]\" value=\"";
        // line 2528
        echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["t1_stikers"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["special"] ?? null) : null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["txt_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t</tbody>
    \t\t\t\t\t\t\t\t\t\t\t</table>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 2538
        echo ($context["entry_stikers_fields"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
    \t\t\t\t\t\t\t\t\t\t\t\t<thead>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 2543
        echo ($context["table_stiker"] ?? null);
        echo "</th>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width:1%\">";
        // line 2544
        echo ($context["table_status"] ?? null);
        echo "</th>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2545
        echo ($context["table_stiker_color"] ?? null);
        echo "</th>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2546
        echo ($context["table_text_color"] ?? null);
        echo "</th>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t</thead>
    \t\t\t\t\t\t\t\t\t\t\t\t<tbody>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 2551
        echo ($context["entry_category_p_additional_fields_upc"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\" data-toggle=\"buttons\" style=\"display: flex;\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2554
        if ( !(($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["t1_stikers"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["upc"] ?? null) : null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[upc][status]\" value=\"0\" ";
        // line 2555
        if ( !(($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["t1_stikers"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["upc"] ?? null) : null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2556
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2558
        if ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["t1_stikers"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["upc"] ?? null) : null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[upc][status]\" value=\"1\" ";
        // line 2559
        if ((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["t1_stikers"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["upc"] ?? null) : null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2560
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[upc][bg_color]\" value=\"";
        // line 2567
        echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["t1_stikers"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["upc"] ?? null) : null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["bg_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[upc][txt_color]\" value=\"";
        // line 2573
        echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["t1_stikers"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["upc"] ?? null) : null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["txt_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 2578
        echo ($context["entry_category_p_additional_fields_ean"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\" data-toggle=\"buttons\" style=\"display: flex;\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2581
        if ( !(($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["t1_stikers"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["ean"] ?? null) : null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[ean][status]\" value=\"0\" ";
        // line 2582
        if ( !(($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["t1_stikers"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["ean"] ?? null) : null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2583
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2585
        if ((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["t1_stikers"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["ean"] ?? null) : null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[ean][status]\" value=\"1\" ";
        // line 2586
        if ((($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["t1_stikers"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["ean"] ?? null) : null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2587
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[ean][bg_color]\" value=\"";
        // line 2594
        echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["t1_stikers"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["ean"] ?? null) : null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["bg_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[ean][txt_color]\" value=\"";
        // line 2600
        echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["t1_stikers"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["ean"] ?? null) : null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["txt_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 2605
        echo ($context["entry_category_p_additional_fields_jan"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\" data-toggle=\"buttons\" style=\"display: flex;\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2608
        if ( !(($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["t1_stikers"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["jan"] ?? null) : null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[jan][status]\" value=\"0\" ";
        // line 2609
        if ( !(($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["t1_stikers"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["jan"] ?? null) : null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2610
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2612
        if ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["t1_stikers"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["jan"] ?? null) : null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[jan][status]\" value=\"1\" ";
        // line 2613
        if ((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = ($context["t1_stikers"] ?? null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["jan"] ?? null) : null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2614
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[jan][bg_color]\" value=\"";
        // line 2621
        echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = ($context["t1_stikers"] ?? null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["jan"] ?? null) : null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["bg_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[jan][txt_color]\" value=\"";
        // line 2627
        echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = ($context["t1_stikers"] ?? null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["jan"] ?? null) : null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["txt_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 2632
        echo ($context["entry_category_p_additional_fields_isbn"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\" data-toggle=\"buttons\" style=\"display: flex;\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2635
        if ( !(($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["t1_stikers"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["isbn"] ?? null) : null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[isbn][status]\" value=\"0\" ";
        // line 2636
        if ( !(($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["t1_stikers"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["isbn"] ?? null) : null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2637
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2639
        if ((($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = ($context["t1_stikers"] ?? null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["isbn"] ?? null) : null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[isbn][status]\" value=\"1\" ";
        // line 2640
        if ((($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["t1_stikers"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["isbn"] ?? null) : null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2641
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[isbn][bg_color]\" value=\"";
        // line 2648
        echo (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = ($context["t1_stikers"] ?? null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["isbn"] ?? null) : null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["bg_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[isbn][txt_color]\" value=\"";
        // line 2654
        echo (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["t1_stikers"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["isbn"] ?? null) : null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["txt_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 2659
        echo ($context["entry_category_p_additional_fields_mpn"] ?? null);
        echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\" data-toggle=\"buttons\" style=\"display: flex;\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2662
        if ( !(($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["t1_stikers"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["mpn"] ?? null) : null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[mpn][status]\" value=\"0\" ";
        // line 2663
        if ( !(($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = ($context["t1_stikers"] ?? null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["mpn"] ?? null) : null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2664
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2666
        if ((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = ($context["t1_stikers"] ?? null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["mpn"] ?? null) : null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["status"] ?? null) : null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_stikers[mpn][status]\" value=\"1\" ";
        // line 2667
        if ((($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = ($context["t1_stikers"] ?? null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["mpn"] ?? null) : null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["status"] ?? null) : null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2668
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[mpn][bg_color]\" value=\"";
        // line 2675
        echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = ($context["t1_stikers"] ?? null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["mpn"] ?? null) : null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["bg_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group  colorpicker-component colorpicker-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"t1_stikers[mpn][txt_color]\" value=\"";
        // line 2681
        echo (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = ($context["t1_stikers"] ?? null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["mpn"] ?? null) : null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["txt_color"] ?? null) : null);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t\t\t\t\t\t</tbody>
    \t\t\t\t\t\t\t\t\t\t\t</table>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<script>
    \t\t\t\t\t\t\t\t\t\t\$(function () {\$('.colorpicker-start').colorpicker();});
    \t\t\t\t\t\t\t\t\t</script>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"cust-code-settings\">
                      <h4 class=\"block-header\"><span data-toggle=\"tooltip\" title=\"Этот код будет помещен в шапке сайта внутри тега head\">";
        // line 2695
        echo ($context["entry_custom_code_header"] ?? null);
        echo "</span></h4>
    \t\t\t\t\t\t\t\t\t<textarea class=\"form-control text-monospace\" rows=\"15\" name=\"t1_cust_code_top\" style=\"font-family:monospace\">";
        // line 2696
        echo ($context["t1_cust_code_top"] ?? null);
        echo "</textarea>
    \t\t\t\t\t\t\t\t\t<br>
                      <h4 class=\"block-header\"><span data-toggle=\"tooltip\" title=\"Этот код будет помещен в футере сайта перед закрывающим тегом body\">";
        // line 2698
        echo ($context["entry_custom_code_footer"] ?? null);
        echo "</span></h4>
    \t\t\t\t\t\t\t\t\t<textarea class=\"form-control text-monospace\" rows=\"15\" name=\"t1_cust_code_bottom\" style=\"font-family:monospace\">";
        // line 2699
        echo ($context["t1_cust_code_bottom"] ?? null);
        echo "</textarea>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"cust-css-settings\">
                      <h4 class=\"block-header\">";
        // line 2703
        echo ($context["entry_custom_css"] ?? null);
        echo "</h4>
                      <textarea id=\"custom-css\" name=\"t1_cust_css\" class=\"form-control text-monospace\" rows=\"35\">";
        // line 2704
        echo ($context["t1_cust_css"] ?? null);
        echo "</textarea>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
                    <div class=\"tab-pane\" id=\"color-scheme\">

                      <h4 class=\"block-header\">";
        // line 2709
        echo ($context["entry_boot_set_general"] ?? null);
        echo "</h4>

                      <div class=\"row\">
                        <div class=\"col-12 col-sm-6\">
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 2714
        echo ($context["entry_boot_set_border_radius"] ?? null);
        echo "</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
                              <span class=\"value\">";
        // line 2716
        echo twig_number_format_filter($this->env, ($context["t1_bs_radius"] ?? null), 2);
        echo "</span> rem
                              <input
                                style=\"margin-top:2px\"
                                type=\"range\"
                                name=\"t1_bs_radius\"
                                min=\"0\"
                                max=\"3\"
                                value=\"";
        // line 2723
        echo ($context["t1_bs_radius"] ?? null);
        echo "\"
                                step=\"0.01\"
                                oninput=\"this.parentNode.querySelector('.value').innerHTML = parseFloat(this.value).toFixed(2)\"
                              >
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                        </div>
                        <div class=\"col-12 col-sm-6\">
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 2733
        echo ($context["entry_boot_set_browser_tab_color"] ?? null);
        echo "</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_meta_theme_color\" value=\"";
        // line 2739
        echo ($context["t1_meta_theme_color"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["t1_meta_theme_color"] ?? null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                        </div>
                        <div class=\"col-12 col-sm-6\">
                          <div class=\"form-group\">
                            <label class=\"col-sm-4 control-label\">";
        // line 2749
        echo ($context["entry_boot_set_xxl_breackpoint"] ?? null);
        echo "</label>
                            <div class=\"col-sm-8\">

                              <div class=\"btn-group\" data-toggle=\"buttons\">
        \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2753
        if ( !($context["t1_bs_bp_xxl"] ?? null)) {
            echo " active ";
        }
        echo "\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_bs_bp_xxl\" value=\"0\" ";
        // line 2754
        if ( !($context["t1_bs_bp_xxl"] ?? null)) {
            echo " checked ";
        }
        echo ">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2755
        echo ($context["button_off"] ?? null);
        echo "</span>
        \t\t\t\t\t\t\t\t\t\t\t\t</label>
        \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 2757
        if (($context["t1_bs_bp_xxl"] ?? null)) {
            echo " active ";
        }
        echo "\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_bs_bp_xxl\" value=\"1\" ";
        // line 2758
        if (($context["t1_bs_bp_xxl"] ?? null)) {
            echo " checked ";
        }
        echo ">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 2759
        echo ($context["button_on"] ?? null);
        echo "</span>
        \t\t\t\t\t\t\t\t\t\t\t\t</label>
        \t\t\t\t\t\t\t\t\t\t\t</div>

                            </div>
                          </div>
                          <hr>
                        </div>
                        <div class=\"col-12 col-sm-6\">
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 2769
        echo ($context["entry_boot_set_preloader_color"] ?? null);
        echo "</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_preloader_color\" value=\"";
        // line 2775
        echo ($context["t1_preloader_color"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["t1_preloader_color"] ?? null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                        </div>
                      </div>

                      <h4 class=\"block-header\">";
        // line 2785
        echo ($context["entry_boot_set_palitra"] ?? null);
        echo "</h4>

                      <div class=\"row\">
                        <div class=\"col-12 col-sm-6\">
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--white</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[white]\" value=\"";
        // line 2796
        echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = ($context["t1_color_schema"] ?? null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["white"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--blue</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[blue]\" value=\"";
        // line 2810
        echo (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["blue"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--red</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[red]\" value=\"";
        // line 2824
        echo (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["red"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--yellow</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[yellow]\" value=\"";
        // line 2838
        echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = ($context["t1_color_schema"] ?? null)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["yellow"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--green</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[green]\" value=\"";
        // line 2852
        echo (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = ($context["t1_color_schema"] ?? null)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["green"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--cyan</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[cyan]\" value=\"";
        // line 2866
        echo (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["cyan"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--indigo</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[indigo]\" value=\"";
        // line 2880
        echo (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = ($context["t1_color_schema"] ?? null)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["indigo"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--purple</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[purple]\" value=\"";
        // line 2894
        echo (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = ($context["t1_color_schema"] ?? null)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["purple"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--pink</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[pink]\" value=\"";
        // line 2908
        echo (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = ($context["t1_color_schema"] ?? null)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["pink"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--orange</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[orange]\" value=\"";
        // line 2922
        echo (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["orange"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--teal</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[teal]\" value=\"";
        // line 2936
        echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["teal"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                        </div>
                        <div class=\"col-12 col-sm-6\">
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-100</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_100]\" value=\"";
        // line 2952
        echo (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["gray_100"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-150</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_150]\" value=\"";
        // line 2966
        echo (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["gray_150"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-200</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_200]\" value=\"";
        // line 2980
        echo (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["gray_200"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-300</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_300]\" value=\"";
        // line 2994
        echo (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["gray_300"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-400</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_400]\" value=\"";
        // line 3008
        echo (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = ($context["t1_color_schema"] ?? null)) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa["gray_400"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-500</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_500]\" value=\"";
        // line 3022
        echo (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = ($context["t1_color_schema"] ?? null)) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["gray_500"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-600</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_600]\" value=\"";
        // line 3036
        echo (($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = ($context["t1_color_schema"] ?? null)) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c["gray_600"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-700</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_700]\" value=\"";
        // line 3050
        echo (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = ($context["t1_color_schema"] ?? null)) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a["gray_700"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-800</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_800]\" value=\"";
        // line 3064
        echo (($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6["gray_800"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--gray-900</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[gray_900]\" value=\"";
        // line 3078
        echo (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = ($context["t1_color_schema"] ?? null)) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["gray_900"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--black</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group colorpicker-component colorpicker-start\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"t1_color_schema[black]\" value=\"";
        // line 3092
        echo (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = ($context["t1_color_schema"] ?? null)) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526["black"] ?? null) : null);
        echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                        </div>
                      </div>

                      <h4 class=\"block-header\">";
        // line 3102
        echo ($context["entry_boot_base_colors"] ?? null);
        echo "</h4>

                      <div class=\"row\">
                        <div class=\"col-12 col-sm-6\">
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--primary</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_colors][primary]\">
                                    ";
        // line 3112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3113
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = (($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c["main_colors"] ?? null) : null)) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f["primary"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3115
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--secondary</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_colors][secondary]\">
                                    ";
        // line 3127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3128
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = (($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff["main_colors"] ?? null) : null)) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74["secondary"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3130
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--success</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_colors][success]\">
                                    ";
        // line 3142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3143
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5["main_colors"] ?? null) : null)) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918["success"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3145
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--info</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_colors][info]\">
                                    ";
        // line 3157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3158
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = (($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20["main_colors"] ?? null) : null)) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["info"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3160
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--warning</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_colors][warning]\">
                                    ";
        // line 3172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3173
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = (($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0["main_colors"] ?? null) : null)) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16["warning"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3175
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--danger</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_colors][danger]\">
                                    ";
        // line 3187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3188
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = (($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008["main_colors"] ?? null) : null)) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["danger"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3190
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--light</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_colors][light]\">
                                    ";
        // line 3202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3203
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = (($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315["main_colors"] ?? null) : null)) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["light"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3205
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                        </div>
                        <div class=\"col-12 col-sm-6\">
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">--dark</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_colors][dark]\">
                                    ";
        // line 3219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3220
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = (($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde["main_colors"] ?? null) : null)) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb["dark"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3222
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 3229
        echo ($context["entry_boot_bg_color"] ?? null);
        echo "</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_settings][body_bg]\">
                                    ";
        // line 3234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3235
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = (($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f["main_settings"] ?? null) : null)) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5["body_bg"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3237
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 3244
        echo ($context["entry_boot_text_color"] ?? null);
        echo "</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_settings][body_color]\">
                                    ";
        // line 3249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3250
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = (($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d["main_settings"] ?? null) : null)) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["body_color"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3252
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 3259
        echo ($context["entry_boot_link_color"] ?? null);
        echo "</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_settings][link_color]\">
                                    ";
        // line 3264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d["main_colors"] ?? null) : null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3265
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = (($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["main_settings"] ?? null) : null)) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2["link_color"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo $context["color"];
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3267
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label m-0\">";
        // line 3274
        echo ($context["entry_boot_active_color"] ?? null);
        echo "</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_settings][component_active_color]\">
                                    ";
        // line 3279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3280
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = (($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee["main_settings"] ?? null) : null)) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a["component_active_color"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3282
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 3289
        echo ($context["entry_boot_active_bg"] ?? null);
        echo "</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_settings][component_active_bg]\">
                                    ";
        // line 3294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["main_colors"] ?? null) : null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3295
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = (($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["main_settings"] ?? null) : null)) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc["component_active_bg"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3297
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                          <div class=\"form-group\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 3304
        echo ($context["entry_boot_border_color"] ?? null);
        echo "</label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
        \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"t1_bs_settings[main_settings][border_color]\">
                                    ";
        // line 3309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["t1_color_schema"] ?? null))));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 3310
            echo "                                    <option value=\"";
            echo $context["color"];
            echo "\" ";
            if (((($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = (($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = ($context["t1_bs_settings"] ?? null)) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d["main_settings"] ?? null) : null)) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["border_color"] ?? null) : null) == $context["color"])) {
                echo "selected";
            }
            echo ">--";
            echo twig_replace_filter($context["color"], ["_" => "-"]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3312
        echo "                                  </select>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t</div>
                          <hr>
                        </div>
                      </div>
                      
                      <h4 class=\"block-header\">";
        // line 3321
        echo ($context["entry_boot_scss"] ?? null);
        echo "</h4>

                      <textarea name=\"t1_bs_settings_scss\" rows=\"5\" class=\"form-control text-monospace\" placeholder=\"";
        // line 3323
        echo ($context["entry_boot_scss_placeholder"] ?? null);
        echo "\">";
        echo ($context["t1_bs_settings_scss"] ?? null);
        echo "</textarea>
                      <hr>
                      <h4 class=\"block-header\">";
        // line 3325
        echo ($context["entry_boot_components"] ?? null);
        echo "</h4>

                      <div class=\"well well-sm\">
                        <div class=\"row\">
                          ";
        // line 3329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["t1_bs_all_components"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 3330
            echo "                          <div class=\"col-xs-6 col-sm-4 col-md-3\">
                            <div class=\"checkbox\">
                              <label>
                                <input type=\"checkbox\" name=\"t1_bs_components[]\" value=\"";
            // line 3333
            echo $context["component"];
            echo "\" ";
            if (twig_in_filter($context["component"], ($context["t1_bs_components"] ?? null))) {
                echo "checked";
            }
            echo ">
                                &nbsp;";
            // line 3334
            echo $context["component"];
            echo "
                              </label>
                            </div>
                          </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3339
        echo "                        </div>
                      </div>
                    </div>
                    
                    <div class=\"tab-pane\" id=\"image-settings\">
                      <hr class=\"mt-0\">
                      <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">
                          ";
        // line 3347
        echo ($context["entry_high_definition_imgs"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 3348
        echo ($context["help_high_definition_imgs"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
                        <div class=\"col-sm-9\">
                          <div class=\"btn-group\" data-toggle=\"buttons\">
                            <label class=\"btn btn-default ";
        // line 3356
        if ( !($context["t1_high_definition_imgs"] ?? null)) {
            echo " active ";
        }
        echo "\">
                              <input type=\"radio\" name=\"t1_high_definition_imgs\" value=\"0\" ";
        // line 3357
        if ( !($context["t1_high_definition_imgs"] ?? null)) {
            echo " checked ";
        }
        echo ">
                              <span class=\"on-off\">";
        // line 3358
        echo ($context["button_off"] ?? null);
        echo "</span>
                            </label>
                            <label class=\"btn btn-default ";
        // line 3360
        if (($context["t1_high_definition_imgs"] ?? null)) {
            echo " active ";
        }
        echo "\">
                              <input type=\"radio\" name=\"t1_high_definition_imgs\" value=\"1\" ";
        // line 3361
        if (($context["t1_high_definition_imgs"] ?? null)) {
            echo " checked ";
        }
        echo ">
                              <span class=\"on-off\">";
        // line 3362
        echo ($context["button_on"] ?? null);
        echo "</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
                          ";
        // line 3370
        echo ($context["entry_lazy_load_imgs"] ?? null);
        echo "
                          <span data-toggle=\"tooltip\" title=\"";
        // line 3371
        echo ($context["help_lazy_load_imgs"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
                        </label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 3379
        if ( !($context["t1_catalog_page_lazy"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_page_lazy\" value=\"0\" ";
        // line 3380
        if ( !($context["t1_catalog_page_lazy"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 3381
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 3383
        if (($context["t1_catalog_page_lazy"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_catalog_page_lazy\" value=\"1\" ";
        // line 3384
        if (($context["t1_catalog_page_lazy"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 3385
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-category-width\">";
        // line 3392
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
  \t\t\t\t\t\t\t\t\t\t\t  <input
                            type=\"number\"
                            name=\"theme_frame_image_category_width\"
                            value=\"";
        // line 3397
        echo ($context["theme_frame_image_category_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3398
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-category-width\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3401
        echo ($context["theme_frame_image_category_width"] ?? null);
        echo "\"
                          > x
  \t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_category_height\"
                            value=\"";
        // line 3406
        echo ($context["theme_frame_image_category_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3407
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3409
        echo ($context["theme_frame_image_category_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group \">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-manufacturer-width\">";
        // line 3415
        echo ($context["entry_image_manufacturer"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_manufacturer_width\"
                            value=\"";
        // line 3420
        echo ($context["theme_frame_image_manufacturer_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3421
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-manufacturer-width\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3424
        echo ($context["theme_frame_image_manufacturer_width"] ?? null);
        echo "\"
                          > x
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_manufacturer_height\"
                            value=\"";
        // line 3429
        echo ($context["theme_frame_image_manufacturer_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3430
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3432
        echo ($context["theme_frame_image_manufacturer_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-thumb-width\">";
        // line 3438
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_thumb_width\"
                            value=\"";
        // line 3443
        echo ($context["theme_frame_image_thumb_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3444
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-thumb-width\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3447
        echo ($context["theme_frame_image_thumb_width"] ?? null);
        echo "\"
                          > x
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_thumb_height\"
                            value=\"";
        // line 3452
        echo ($context["theme_frame_image_thumb_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3453
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3455
        echo ($context["theme_frame_image_thumb_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-popup-width\">";
        // line 3461
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
  \t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_popup_width\"
                            value=\"";
        // line 3466
        echo ($context["theme_frame_image_popup_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3467
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-popup-width\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3470
        echo ($context["theme_frame_image_popup_width"] ?? null);
        echo "\"
                          > x
  \t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_popup_height\"
                            value=\"";
        // line 3475
        echo ($context["theme_frame_image_popup_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3476
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3478
        echo ($context["theme_frame_image_popup_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-product-width\">";
        // line 3484
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_product_width\"
                            value=\"";
        // line 3489
        echo ($context["theme_frame_image_product_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3490
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-product-width\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3493
        echo ($context["theme_frame_image_product_width"] ?? null);
        echo "\"
                          > x
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_product_height\"
                            value=\"";
        // line 3498
        echo ($context["theme_frame_image_product_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3499
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3501
        echo ($context["theme_frame_image_product_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-additional-width\">";
        // line 3507
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_additional_width\"
                            value=\"";
        // line 3512
        echo ($context["theme_frame_image_additional_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3513
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-additional-width\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3516
        echo ($context["theme_frame_image_additional_width"] ?? null);
        echo "\"
                          > x
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_additional_height\"
                            value=\"";
        // line 3521
        echo ($context["theme_frame_image_additional_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3522
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3524
        echo ($context["theme_frame_image_additional_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-related\">";
        // line 3530
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
    \t\t\t\t\t\t\t\t\t\t  <input
                            type=\"number\"
                            name=\"theme_frame_image_related_width\"
                            value=\"";
        // line 3535
        echo ($context["theme_frame_image_related_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3536
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-related\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3539
        echo ($context["theme_frame_image_related_width"] ?? null);
        echo "\"
                          > x
    \t\t\t\t\t\t          <input
                            type=\"number\"
                            name=\"theme_frame_image_related_height\"
                            value=\"";
        // line 3544
        echo ($context["theme_frame_image_related_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3545
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3547
        echo ($context["theme_frame_image_related_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-compare\">";
        // line 3553
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
    \t\t\t\t\t            <input
                            type=\"number\"
                            name=\"theme_frame_image_compare_width\"
                            value=\"";
        // line 3558
        echo ($context["theme_frame_image_compare_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3559
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-compare\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3562
        echo ($context["theme_frame_image_compare_width"] ?? null);
        echo "\"
                          > x
    \t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_compare_height\"
                            value=\"";
        // line 3567
        echo ($context["theme_frame_image_compare_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3568
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3570
        echo ($context["theme_frame_image_compare_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-wishlist\">";
        // line 3576
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
    \t\t\t\t\t\t\t\t      <input
                            type=\"number\"
                            name=\"theme_frame_image_wishlist_width\"
                            value=\"";
        // line 3581
        echo ($context["theme_frame_image_wishlist_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3582
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-wishlist\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3585
        echo ($context["theme_frame_image_wishlist_width"] ?? null);
        echo "\"
                          > x
    \t\t\t\t\t\t\t\t      <input
                            type=\"number\"
                            name=\"theme_frame_image_wishlist_height\"
                            value=\"";
        // line 3590
        echo ($context["theme_frame_image_wishlist_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3591
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3593
        echo ($context["theme_frame_image_wishlist_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-cart\">";
        // line 3599
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
                          <input
                            type=\"number\"
                            name=\"theme_frame_image_cart_width\"
                            value=\"";
        // line 3604
        echo ($context["theme_frame_image_cart_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3605
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-cart\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3608
        echo ($context["theme_frame_image_cart_width"] ?? null);
        echo "\"
                          > x
                          <input
                            type=\"number\"
                            name=\"theme_frame_image_cart_height\"
                            value=\"";
        // line 3613
        echo ($context["theme_frame_image_cart_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3614
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3616
        echo ($context["theme_frame_image_cart_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image-location\">";
        // line 3622
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_location_width\"
                            value=\"";
        // line 3627
        echo ($context["theme_frame_image_location_width"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3628
        echo ($context["entry_width"] ?? null);
        echo "\"
                            id=\"input-image-location\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3631
        echo ($context["theme_frame_image_location_width"] ?? null);
        echo "\"
                          > x
\t\t\t\t\t\t\t\t\t\t\t\t\t<input
                            type=\"number\"
                            name=\"theme_frame_image_location_height\"
                            value=\"";
        // line 3636
        echo ($context["theme_frame_image_location_height"] ?? null);
        echo "\"
                            placeholder=\"";
        // line 3637
        echo ($context["entry_height"] ?? null);
        echo "\"
                            class=\"form-control\"
                            onchange=\"this.value = this.value ?  this.value : ";
        // line 3639
        echo ($context["theme_frame_image_location_height"] ?? null);
        echo "\"
                          > px
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
                      <hr class=\"mb-0\">
    \t\t\t\t\t\t\t\t</div>
                    
                    <div class=\"tab-pane\" id=\"performance-settings\">
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
    \t\t\t\t\t\t\t\t\t\t\t";
        // line 3649
        echo ($context["entry_more_minify"] ?? null);
        echo "
    \t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 3651
        echo ($context["help_more_minify"] ?? null);
        echo "\">
                            <svg class=\"info-icon\" height=\"14\" width=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path d=\"M19 2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h4l3 3 3-3h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 16h-4.83l-.59.59L12 20.17l-1.59-1.59-.58-.58H5V4h14v14zm-8-3h2v2h-2zm1-8c1.1 0 2 .9 2 2 0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4S8 6.79 8 9h2c0-1.1.9-2 2-2z\"/>
                            </svg>
                          </span>
    \t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 3659
        if ( !($context["t1_minify_request"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_minify_request\" value=\"0\" ";
        // line 3660
        if ( !($context["t1_minify_request"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 3661
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 3663
        if (($context["t1_minify_request"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_minify_request\" value=\"1\" ";
        // line 3664
        if (($context["t1_minify_request"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 3665
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 3672
        echo ($context["entry_more_theme_version"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 3675
        if ( !($context["t1_show_version"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_show_version\" value=\"0\" ";
        // line 3676
        if ( !($context["t1_show_version"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 3677
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 3679
        if (($context["t1_show_version"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_show_version\" value=\"1\" ";
        // line 3680
        if (($context["t1_show_version"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 3681
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
                      <div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 3688
        echo ($context["entry_more_script_style_preload"] ?? null);
        echo "</label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 3691
        if ( !($context["t1_preload_ss"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_preload_ss\" value=\"0\" ";
        // line 3692
        if ( !($context["t1_preload_ss"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 3693
        echo ($context["button_off"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 3695
        if (($context["t1_preload_ss"] ?? null)) {
            echo " active ";
        }
        echo "\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"t1_preload_ss\" value=\"1\" ";
        // line 3696
        if (($context["t1_preload_ss"] ?? null)) {
            echo " checked ";
        }
        echo ">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 3697
        echo ($context["button_on"] ?? null);
        echo "</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<hr>
    \t\t\t\t\t\t\t\t</div>
                  
                  </div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
            </div>
            <div  class=\"tab-pane\" id=\"info\">
              <iframe id=\"faq\" src=\"https://frame.xds.by/info/\" width=\"100%\"></iframe>
              <script  src=\"view/javascript/frametheme/iframeResizer.min.js\"></script>
              <script>
                \$('a[href=\"#info\"]').on('shown.bs.tab', function (e) {
                  iFrameResize({
                    log: false,
                    inPageLinks: true,
                    onScroll: () => { return false },
                  }, '#faq');
                })
              </script>
            </div>
          </div>
        </form>
\t\t\t</div>
    </div>
  </div>
</div>

<link href=\"view/javascript/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js\"></script>

<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

<script>
\tfunction apply(){
\t\t\$(\".container-fluid > .alert\").remove();
\t\t\$.ajax({
\t\t\ttype: \"post\",
\t\t\turl: \$(\"#form-theme\").attr('action'),
\t\t\tdata: \$(\"#form-theme\").serialize(),
\t\t\tdataType: 'html',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('body').addClass('loading');
\t\t\t\t\$('.control-btns .btn').addClass('disabled');
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tvar \$href = \$(html).find(\".well [selected=\\\"selected\\\"]\").val();
\t\t\t\tif (\$href) {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\ttype: \"post\",
\t\t\t\t\t\turl: \$href,
\t\t\t\t\t\tdata: '',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\tvar \$success = \$(html).find(\".alert-success, .alert-danger\");
\t\t\t\t\t\t\tif (\$success.length > 0) {
\t\t\t\t\t\t\t\t\$(\"#frame-controls\").before(\$success);
\t\t\t\t\t\t\t\t\$('body').removeClass('loading');
\t\t\t\t\t\t\t\t\$('.control-btns .btn').removeClass('disabled');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\tvar \$success = \$(html).find(\".alert-success, .alert-danger\");
\t\t\t\t\tif (\$success.length > 0) {
\t\t\t\t\t\t\$(\"#frame-controls\").before(\$success);
\t\t\t\t\t\t\$('body').removeClass('loading');
\t\t\t\t\t\t\$('.control-btns .btn').removeClass('disabled');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\$('body').removeClass('loading');
\t\t\t\t\$('.control-btns .btn').removeClass('disabled');
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
</script>
";
        // line 3790
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/theme/frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  8271 => 3790,  8175 => 3697,  8169 => 3696,  8163 => 3695,  8158 => 3693,  8152 => 3692,  8146 => 3691,  8140 => 3688,  8130 => 3681,  8124 => 3680,  8118 => 3679,  8113 => 3677,  8107 => 3676,  8101 => 3675,  8095 => 3672,  8085 => 3665,  8079 => 3664,  8073 => 3663,  8068 => 3661,  8062 => 3660,  8056 => 3659,  8045 => 3651,  8040 => 3649,  8027 => 3639,  8022 => 3637,  8018 => 3636,  8010 => 3631,  8004 => 3628,  8000 => 3627,  7992 => 3622,  7983 => 3616,  7978 => 3614,  7974 => 3613,  7966 => 3608,  7960 => 3605,  7956 => 3604,  7948 => 3599,  7939 => 3593,  7934 => 3591,  7930 => 3590,  7922 => 3585,  7916 => 3582,  7912 => 3581,  7904 => 3576,  7895 => 3570,  7890 => 3568,  7886 => 3567,  7878 => 3562,  7872 => 3559,  7868 => 3558,  7860 => 3553,  7851 => 3547,  7846 => 3545,  7842 => 3544,  7834 => 3539,  7828 => 3536,  7824 => 3535,  7816 => 3530,  7807 => 3524,  7802 => 3522,  7798 => 3521,  7790 => 3516,  7784 => 3513,  7780 => 3512,  7772 => 3507,  7763 => 3501,  7758 => 3499,  7754 => 3498,  7746 => 3493,  7740 => 3490,  7736 => 3489,  7728 => 3484,  7719 => 3478,  7714 => 3476,  7710 => 3475,  7702 => 3470,  7696 => 3467,  7692 => 3466,  7684 => 3461,  7675 => 3455,  7670 => 3453,  7666 => 3452,  7658 => 3447,  7652 => 3444,  7648 => 3443,  7640 => 3438,  7631 => 3432,  7626 => 3430,  7622 => 3429,  7614 => 3424,  7608 => 3421,  7604 => 3420,  7596 => 3415,  7587 => 3409,  7582 => 3407,  7578 => 3406,  7570 => 3401,  7564 => 3398,  7560 => 3397,  7552 => 3392,  7542 => 3385,  7536 => 3384,  7530 => 3383,  7525 => 3381,  7519 => 3380,  7513 => 3379,  7502 => 3371,  7498 => 3370,  7487 => 3362,  7481 => 3361,  7475 => 3360,  7470 => 3358,  7464 => 3357,  7458 => 3356,  7447 => 3348,  7443 => 3347,  7433 => 3339,  7422 => 3334,  7414 => 3333,  7409 => 3330,  7405 => 3329,  7398 => 3325,  7391 => 3323,  7386 => 3321,  7375 => 3312,  7360 => 3310,  7356 => 3309,  7348 => 3304,  7339 => 3297,  7324 => 3295,  7320 => 3294,  7312 => 3289,  7303 => 3282,  7288 => 3280,  7284 => 3279,  7276 => 3274,  7267 => 3267,  7252 => 3265,  7248 => 3264,  7240 => 3259,  7231 => 3252,  7216 => 3250,  7212 => 3249,  7204 => 3244,  7195 => 3237,  7180 => 3235,  7176 => 3234,  7168 => 3229,  7159 => 3222,  7144 => 3220,  7140 => 3219,  7124 => 3205,  7109 => 3203,  7105 => 3202,  7091 => 3190,  7076 => 3188,  7072 => 3187,  7058 => 3175,  7043 => 3173,  7039 => 3172,  7025 => 3160,  7010 => 3158,  7006 => 3157,  6992 => 3145,  6977 => 3143,  6973 => 3142,  6959 => 3130,  6944 => 3128,  6940 => 3127,  6926 => 3115,  6911 => 3113,  6907 => 3112,  6894 => 3102,  6881 => 3092,  6864 => 3078,  6847 => 3064,  6830 => 3050,  6813 => 3036,  6796 => 3022,  6779 => 3008,  6762 => 2994,  6745 => 2980,  6728 => 2966,  6711 => 2952,  6692 => 2936,  6675 => 2922,  6658 => 2908,  6641 => 2894,  6624 => 2880,  6607 => 2866,  6590 => 2852,  6573 => 2838,  6556 => 2824,  6539 => 2810,  6522 => 2796,  6508 => 2785,  6493 => 2775,  6484 => 2769,  6471 => 2759,  6465 => 2758,  6459 => 2757,  6454 => 2755,  6448 => 2754,  6442 => 2753,  6435 => 2749,  6420 => 2739,  6411 => 2733,  6398 => 2723,  6388 => 2716,  6383 => 2714,  6375 => 2709,  6367 => 2704,  6363 => 2703,  6356 => 2699,  6352 => 2698,  6347 => 2696,  6343 => 2695,  6326 => 2681,  6317 => 2675,  6307 => 2668,  6301 => 2667,  6295 => 2666,  6290 => 2664,  6284 => 2663,  6278 => 2662,  6272 => 2659,  6264 => 2654,  6255 => 2648,  6245 => 2641,  6239 => 2640,  6233 => 2639,  6228 => 2637,  6222 => 2636,  6216 => 2635,  6210 => 2632,  6202 => 2627,  6193 => 2621,  6183 => 2614,  6177 => 2613,  6171 => 2612,  6166 => 2610,  6160 => 2609,  6154 => 2608,  6148 => 2605,  6140 => 2600,  6131 => 2594,  6121 => 2587,  6115 => 2586,  6109 => 2585,  6104 => 2583,  6098 => 2582,  6092 => 2581,  6086 => 2578,  6078 => 2573,  6069 => 2567,  6059 => 2560,  6053 => 2559,  6047 => 2558,  6042 => 2556,  6036 => 2555,  6030 => 2554,  6024 => 2551,  6016 => 2546,  6012 => 2545,  6008 => 2544,  6004 => 2543,  5996 => 2538,  5983 => 2528,  5974 => 2522,  5964 => 2515,  5958 => 2514,  5952 => 2513,  5947 => 2511,  5941 => 2510,  5935 => 2509,  5929 => 2506,  5921 => 2501,  5917 => 2500,  5913 => 2499,  5909 => 2498,  5901 => 2493,  5889 => 2483,  5876 => 2480,  5870 => 2478,  5866 => 2477,  5861 => 2474,  5851 => 2470,  5843 => 2469,  5839 => 2468,  5836 => 2467,  5832 => 2466,  5826 => 2463,  5820 => 2459,  5809 => 2456,  5800 => 2454,  5796 => 2452,  5792 => 2451,  5787 => 2449,  5777 => 2442,  5771 => 2441,  5765 => 2440,  5760 => 2438,  5754 => 2437,  5748 => 2436,  5743 => 2434,  5737 => 2433,  5731 => 2432,  5725 => 2429,  5717 => 2424,  5712 => 2422,  5702 => 2415,  5696 => 2414,  5690 => 2413,  5685 => 2411,  5679 => 2410,  5673 => 2409,  5667 => 2406,  5656 => 2398,  5650 => 2395,  5641 => 2389,  5631 => 2382,  5627 => 2381,  5616 => 2373,  5610 => 2372,  5604 => 2371,  5599 => 2369,  5593 => 2368,  5587 => 2367,  5581 => 2364,  5571 => 2357,  5565 => 2356,  5559 => 2355,  5554 => 2353,  5548 => 2352,  5542 => 2351,  5536 => 2348,  5523 => 2338,  5517 => 2337,  5511 => 2336,  5506 => 2334,  5500 => 2333,  5494 => 2332,  5488 => 2329,  5478 => 2321,  5472 => 2320,  5464 => 2318,  5456 => 2316,  5453 => 2315,  5449 => 2314,  5441 => 2309,  5431 => 2302,  5425 => 2301,  5419 => 2300,  5414 => 2298,  5408 => 2297,  5402 => 2296,  5396 => 2293,  5388 => 2288,  5378 => 2281,  5374 => 2280,  5365 => 2274,  5360 => 2272,  5350 => 2265,  5344 => 2264,  5338 => 2263,  5333 => 2261,  5327 => 2260,  5321 => 2259,  5315 => 2256,  5303 => 2246,  5290 => 2243,  5284 => 2241,  5280 => 2240,  5275 => 2237,  5265 => 2233,  5257 => 2232,  5253 => 2231,  5250 => 2230,  5246 => 2229,  5240 => 2226,  5234 => 2222,  5223 => 2219,  5214 => 2217,  5210 => 2215,  5206 => 2214,  5201 => 2212,  5191 => 2205,  5185 => 2204,  5179 => 2203,  5174 => 2201,  5168 => 2200,  5162 => 2199,  5156 => 2196,  5146 => 2189,  5140 => 2188,  5134 => 2187,  5129 => 2185,  5123 => 2184,  5117 => 2183,  5111 => 2180,  5101 => 2173,  5095 => 2172,  5089 => 2171,  5084 => 2169,  5078 => 2168,  5072 => 2167,  5066 => 2164,  5058 => 2159,  5053 => 2157,  5043 => 2150,  5037 => 2149,  5031 => 2148,  5026 => 2146,  5020 => 2145,  5014 => 2144,  5008 => 2141,  5000 => 2136,  4995 => 2134,  4985 => 2127,  4979 => 2126,  4973 => 2125,  4968 => 2123,  4962 => 2122,  4956 => 2121,  4950 => 2118,  4940 => 2111,  4934 => 2110,  4928 => 2109,  4923 => 2107,  4917 => 2106,  4911 => 2105,  4905 => 2102,  4897 => 2097,  4892 => 2095,  4880 => 2086,  4874 => 2085,  4865 => 2079,  4859 => 2078,  4850 => 2072,  4844 => 2071,  4835 => 2065,  4829 => 2064,  4820 => 2058,  4814 => 2057,  4805 => 2051,  4799 => 2050,  4790 => 2044,  4784 => 2043,  4769 => 2031,  4753 => 2018,  4747 => 2017,  4738 => 2011,  4732 => 2010,  4723 => 2004,  4717 => 2003,  4708 => 1997,  4702 => 1996,  4693 => 1990,  4687 => 1989,  4678 => 1983,  4672 => 1982,  4663 => 1976,  4657 => 1975,  4648 => 1969,  4638 => 1962,  4632 => 1961,  4626 => 1960,  4621 => 1958,  4615 => 1957,  4609 => 1956,  4603 => 1953,  4593 => 1946,  4587 => 1945,  4581 => 1944,  4576 => 1942,  4570 => 1941,  4564 => 1940,  4558 => 1937,  4548 => 1930,  4542 => 1929,  4536 => 1928,  4531 => 1926,  4525 => 1925,  4519 => 1924,  4514 => 1922,  4508 => 1921,  4502 => 1920,  4496 => 1917,  4486 => 1910,  4480 => 1909,  4474 => 1908,  4469 => 1906,  4463 => 1905,  4457 => 1904,  4451 => 1901,  4441 => 1894,  4435 => 1893,  4429 => 1892,  4424 => 1890,  4418 => 1889,  4412 => 1888,  4406 => 1885,  4392 => 1874,  4386 => 1873,  4380 => 1872,  4375 => 1870,  4369 => 1869,  4363 => 1868,  4357 => 1865,  4347 => 1858,  4341 => 1857,  4335 => 1856,  4330 => 1854,  4324 => 1853,  4318 => 1852,  4312 => 1849,  4304 => 1844,  4299 => 1842,  4289 => 1835,  4283 => 1834,  4277 => 1833,  4272 => 1831,  4266 => 1830,  4260 => 1829,  4254 => 1826,  4244 => 1819,  4238 => 1818,  4232 => 1817,  4227 => 1815,  4221 => 1814,  4215 => 1813,  4209 => 1810,  4200 => 1804,  4195 => 1802,  4185 => 1795,  4179 => 1794,  4173 => 1793,  4168 => 1791,  4162 => 1790,  4156 => 1789,  4150 => 1786,  4139 => 1777,  4130 => 1774,  4123 => 1772,  4113 => 1769,  4105 => 1768,  4095 => 1765,  4087 => 1764,  4083 => 1762,  4079 => 1761,  4072 => 1757,  4068 => 1756,  4064 => 1755,  4055 => 1749,  4050 => 1747,  4038 => 1738,  4031 => 1736,  4028 => 1735,  4019 => 1732,  4010 => 1731,  4006 => 1730,  4002 => 1728,  3993 => 1725,  3984 => 1724,  3980 => 1723,  3972 => 1720,  3966 => 1719,  3960 => 1716,  3952 => 1711,  3946 => 1707,  3940 => 1706,  3938 => 1705,  3930 => 1702,  3922 => 1699,  3914 => 1694,  3906 => 1693,  3900 => 1692,  3895 => 1690,  3887 => 1689,  3881 => 1688,  3876 => 1685,  3863 => 1682,  3855 => 1681,  3852 => 1680,  3848 => 1679,  3844 => 1677,  3831 => 1674,  3823 => 1673,  3820 => 1672,  3816 => 1671,  3808 => 1668,  3792 => 1665,  3776 => 1662,  3770 => 1660,  3765 => 1659,  3763 => 1658,  3755 => 1653,  3751 => 1652,  3747 => 1651,  3743 => 1650,  3739 => 1649,  3735 => 1648,  3727 => 1643,  3717 => 1636,  3711 => 1635,  3705 => 1634,  3700 => 1632,  3694 => 1631,  3688 => 1630,  3682 => 1627,  3674 => 1622,  3669 => 1620,  3659 => 1613,  3653 => 1612,  3647 => 1611,  3642 => 1609,  3636 => 1608,  3630 => 1607,  3624 => 1604,  3614 => 1597,  3608 => 1596,  3602 => 1595,  3597 => 1593,  3591 => 1592,  3585 => 1591,  3579 => 1588,  3569 => 1581,  3563 => 1580,  3557 => 1579,  3552 => 1577,  3546 => 1576,  3540 => 1575,  3534 => 1572,  3522 => 1563,  3516 => 1562,  3507 => 1556,  3501 => 1555,  3492 => 1549,  3486 => 1548,  3477 => 1542,  3471 => 1541,  3462 => 1535,  3456 => 1534,  3447 => 1528,  3430 => 1514,  3426 => 1512,  3417 => 1509,  3408 => 1508,  3404 => 1507,  3400 => 1505,  3391 => 1502,  3382 => 1501,  3378 => 1500,  3371 => 1496,  3363 => 1491,  3357 => 1487,  3351 => 1486,  3349 => 1485,  3341 => 1482,  3333 => 1479,  3329 => 1477,  3316 => 1474,  3308 => 1473,  3305 => 1472,  3301 => 1471,  3297 => 1469,  3284 => 1466,  3276 => 1465,  3273 => 1464,  3269 => 1463,  3263 => 1461,  3258 => 1460,  3256 => 1459,  3248 => 1454,  3244 => 1453,  3240 => 1452,  3232 => 1447,  3222 => 1440,  3216 => 1439,  3210 => 1438,  3205 => 1436,  3199 => 1435,  3193 => 1434,  3187 => 1431,  3168 => 1415,  3164 => 1413,  3155 => 1410,  3146 => 1409,  3142 => 1408,  3138 => 1406,  3129 => 1403,  3120 => 1402,  3116 => 1401,  3108 => 1396,  3100 => 1391,  3094 => 1387,  3088 => 1386,  3086 => 1385,  3078 => 1382,  3070 => 1379,  3066 => 1377,  3053 => 1374,  3045 => 1373,  3042 => 1372,  3038 => 1371,  3034 => 1369,  3021 => 1366,  3013 => 1365,  3010 => 1364,  3006 => 1363,  3000 => 1361,  2995 => 1360,  2993 => 1359,  2985 => 1354,  2981 => 1353,  2977 => 1352,  2969 => 1347,  2963 => 1343,  2952 => 1340,  2943 => 1338,  2939 => 1336,  2935 => 1335,  2930 => 1333,  2920 => 1326,  2914 => 1325,  2908 => 1324,  2903 => 1322,  2897 => 1321,  2891 => 1320,  2885 => 1317,  2865 => 1300,  2861 => 1298,  2852 => 1295,  2843 => 1294,  2839 => 1293,  2835 => 1291,  2826 => 1288,  2817 => 1287,  2813 => 1286,  2809 => 1284,  2800 => 1281,  2791 => 1280,  2787 => 1279,  2780 => 1277,  2773 => 1273,  2765 => 1268,  2759 => 1264,  2753 => 1263,  2751 => 1262,  2743 => 1259,  2735 => 1256,  2731 => 1254,  2718 => 1251,  2710 => 1250,  2707 => 1249,  2703 => 1248,  2699 => 1246,  2686 => 1243,  2678 => 1242,  2675 => 1241,  2671 => 1240,  2667 => 1238,  2654 => 1235,  2646 => 1234,  2643 => 1233,  2639 => 1232,  2623 => 1229,  2617 => 1227,  2612 => 1226,  2610 => 1225,  2602 => 1220,  2598 => 1219,  2594 => 1218,  2590 => 1217,  2586 => 1216,  2578 => 1211,  2563 => 1199,  2559 => 1197,  2550 => 1194,  2541 => 1193,  2537 => 1192,  2533 => 1190,  2524 => 1187,  2515 => 1186,  2511 => 1185,  2507 => 1183,  2498 => 1180,  2489 => 1179,  2485 => 1178,  2478 => 1176,  2471 => 1172,  2463 => 1167,  2457 => 1163,  2451 => 1162,  2449 => 1161,  2441 => 1158,  2433 => 1155,  2429 => 1153,  2416 => 1150,  2408 => 1149,  2405 => 1148,  2401 => 1147,  2397 => 1145,  2384 => 1142,  2376 => 1141,  2373 => 1140,  2369 => 1139,  2365 => 1137,  2352 => 1134,  2344 => 1133,  2341 => 1132,  2337 => 1131,  2321 => 1128,  2315 => 1126,  2310 => 1125,  2308 => 1124,  2300 => 1119,  2296 => 1118,  2292 => 1117,  2288 => 1116,  2284 => 1115,  2276 => 1110,  2269 => 1108,  2244 => 1086,  2238 => 1085,  2232 => 1084,  2227 => 1082,  2221 => 1081,  2215 => 1080,  2209 => 1077,  2201 => 1071,  2190 => 1068,  2181 => 1066,  2177 => 1064,  2173 => 1063,  2168 => 1061,  2162 => 1057,  2151 => 1054,  2142 => 1052,  2138 => 1050,  2134 => 1049,  2129 => 1047,  2123 => 1043,  2112 => 1040,  2103 => 1038,  2099 => 1036,  2095 => 1035,  2090 => 1033,  2082 => 1028,  2076 => 1025,  2068 => 1020,  2064 => 1019,  2055 => 1013,  2045 => 1006,  2041 => 1005,  2033 => 1002,  2008 => 980,  2002 => 979,  1996 => 978,  1991 => 976,  1985 => 975,  1979 => 974,  1973 => 971,  1965 => 965,  1954 => 962,  1945 => 960,  1941 => 958,  1937 => 957,  1932 => 955,  1925 => 953,  1919 => 949,  1908 => 946,  1899 => 944,  1895 => 942,  1891 => 941,  1886 => 939,  1879 => 937,  1857 => 918,  1851 => 917,  1845 => 916,  1840 => 914,  1834 => 913,  1828 => 912,  1822 => 909,  1816 => 905,  1805 => 902,  1796 => 900,  1792 => 898,  1788 => 897,  1778 => 890,  1774 => 889,  1767 => 884,  1756 => 881,  1747 => 879,  1743 => 877,  1739 => 876,  1734 => 874,  1724 => 867,  1718 => 866,  1712 => 865,  1707 => 863,  1701 => 862,  1695 => 861,  1689 => 858,  1679 => 851,  1673 => 850,  1667 => 849,  1662 => 847,  1656 => 846,  1650 => 845,  1644 => 842,  1609 => 814,  1602 => 812,  1594 => 807,  1588 => 806,  1582 => 805,  1577 => 803,  1571 => 802,  1565 => 801,  1554 => 793,  1550 => 792,  1541 => 785,  1530 => 782,  1521 => 780,  1517 => 778,  1513 => 777,  1503 => 770,  1499 => 769,  1491 => 766,  1466 => 744,  1460 => 743,  1454 => 742,  1449 => 740,  1443 => 739,  1437 => 738,  1426 => 730,  1422 => 729,  1411 => 721,  1405 => 720,  1399 => 719,  1394 => 717,  1388 => 716,  1382 => 715,  1371 => 707,  1367 => 706,  1356 => 698,  1352 => 697,  1346 => 694,  1342 => 693,  1334 => 690,  1312 => 671,  1306 => 670,  1300 => 669,  1295 => 667,  1289 => 666,  1283 => 665,  1272 => 657,  1268 => 656,  1259 => 649,  1240 => 646,  1231 => 645,  1214 => 644,  1210 => 642,  1192 => 638,  1184 => 637,  1180 => 636,  1173 => 635,  1156 => 634,  1145 => 626,  1141 => 625,  1133 => 622,  1122 => 616,  1116 => 615,  1106 => 608,  1102 => 607,  1093 => 601,  1087 => 600,  1078 => 594,  1074 => 593,  1066 => 590,  1043 => 570,  1037 => 569,  1031 => 568,  1026 => 566,  1020 => 565,  1014 => 564,  1003 => 556,  999 => 555,  989 => 548,  983 => 545,  979 => 544,  966 => 534,  962 => 533,  952 => 526,  946 => 523,  942 => 522,  929 => 512,  925 => 511,  913 => 502,  907 => 501,  901 => 500,  896 => 498,  890 => 497,  884 => 496,  873 => 488,  869 => 487,  857 => 478,  851 => 477,  845 => 476,  840 => 474,  834 => 473,  828 => 472,  817 => 464,  813 => 463,  800 => 453,  794 => 452,  788 => 451,  783 => 449,  777 => 448,  771 => 447,  760 => 439,  756 => 438,  745 => 430,  739 => 429,  733 => 428,  728 => 426,  722 => 425,  716 => 424,  705 => 416,  701 => 415,  693 => 412,  670 => 392,  664 => 391,  658 => 390,  653 => 388,  647 => 387,  641 => 386,  630 => 378,  626 => 377,  610 => 364,  578 => 334,  572 => 333,  564 => 331,  556 => 329,  553 => 328,  549 => 327,  538 => 319,  534 => 318,  525 => 312,  519 => 309,  513 => 308,  507 => 307,  502 => 305,  496 => 304,  490 => 303,  479 => 295,  475 => 294,  460 => 282,  446 => 271,  432 => 260,  418 => 249,  404 => 238,  390 => 227,  376 => 216,  362 => 205,  348 => 194,  334 => 183,  320 => 172,  306 => 161,  292 => 150,  278 => 139,  264 => 128,  250 => 117,  236 => 106,  222 => 95,  201 => 77,  190 => 69,  180 => 62,  176 => 60,  168 => 56,  166 => 55,  150 => 44,  142 => 39,  124 => 24,  115 => 20,  112 => 19,  98 => 18,  90 => 16,  82 => 14,  80 => 13,  77 => 12,  75 => 11,  68 => 10,  65 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/theme/frame.twig", "");
    }
}
