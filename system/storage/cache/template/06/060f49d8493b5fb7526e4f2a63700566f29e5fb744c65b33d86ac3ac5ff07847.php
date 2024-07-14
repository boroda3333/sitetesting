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

/* extension/module/xds_banners.twig */
class __TwigTemplate_e1ce98bdb03a7d52fec322d19487e342847a20b2577068b485d74f677239adca extends \Twig\Template
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
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
        <div class=\"col-xs-4 col-lg-2\">
          <div class=\"control-btns text-right mb-3\">
            ";
        // line 24
        if (($context["apply_button"] ?? null)) {
            // line 25
            echo "    \t\t\t\t<button type=\"button\" onclick=\"apply()\" data-toggle=\"tooltip\" title=\"";
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
    \t\t\t\t";
        }
        // line 41
        echo "            <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary mb-1\">
              <svg class=\"show\" fill=\"currentColor\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
              \t<path d=\"M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z\"/>
              </svg>
            </button>
            <a href=\"";
        // line 46
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
\t\t";
        // line 57
        if (($context["error_warning"] ?? null)) {
            // line 58
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 62
        echo "    <div class=\"panel panel-default panel-main\" id=\"module-controls\">
      <div class=\"panel-heading\">
        <h4 class=\"panel-title\">
          ";
        // line 65
        echo ($context["text_edit"] ?? null);
        echo "
        </h4>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 69
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">


          <h4 class=\"block-header\">
            <svg class=\"icon-24\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t<path d=\"M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z\"/>
            </svg>
            ";
        // line 76
        echo ($context["text_settings"] ?? null);
        echo "
          </h4>

          <div class=\"form-group\">
            <label class=\"col-md-3 control-label\" for=\"input-name\">";
        // line 80
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-md-9\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 82
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 83
        if (($context["error_name"] ?? null)) {
            // line 84
            echo "              <small class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</small>
              ";
        }
        // line 86
        echo "            </div>
          </div>
          <hr>

          <div class=\"form-group\">
            <label class=\"col-md-3 control-label\">";
        // line 91
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-md-9\">
              <div class=\"btn-group\" data-toggle=\"buttons\">
                <label class=\"btn btn-default ";
        // line 94
        if ( !($context["status"] ?? null)) {
            echo " active ";
        }
        echo "\">
                  <input type=\"radio\" name=\"status\" value=\"0\" ";
        // line 95
        if ( !($context["status"] ?? null)) {
            echo " checked ";
        }
        echo ">
                  <span class=\"on-off\">";
        // line 96
        echo ($context["text_disabled"] ?? null);
        echo "</span>
                </label>
                <label class=\"btn btn-default ";
        // line 98
        if (($context["status"] ?? null)) {
            echo " active ";
        }
        echo "\">
                  <input type=\"radio\" name=\"status\" value=\"1\" ";
        // line 99
        if (($context["status"] ?? null)) {
            echo " checked ";
        }
        echo ">
                  <span class=\"on-off\">";
        // line 100
        echo ($context["text_enabled"] ?? null);
        echo "</span>
                </label>
              </div>
            </div>
          </div>
          <hr>

          <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">
              ";
        // line 109
        echo ($context["entry_title"] ?? null);
        echo "
              <svg class=\"text-info cursor-pointer\" height=\"12\" width=\"12\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" onclick=\"info_show(this, 'code')\" data-text=\"";
        // line 110
        echo twig_escape_filter($this->env, ($context["help_title"] ?? null), "html", null, true);
        echo "\"><path d=\"M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z\"/></svg>
            </label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 114
            echo "\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 116);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 116);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 116);
            echo "\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
          <div class=\"form-group\">
            <label class=\"col-md-3 control-label\">
              ";
        // line 126
        echo ($context["entry_type"] ?? null);
        echo "
              <svg class=\"text-info cursor-pointer\" height=\"12\" width=\"12\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" onclick=\"info_show(this, 'code')\" data-text=\"";
        // line 127
        echo twig_escape_filter($this->env, ($context["help_module_type"] ?? null), "html", null, true);
        echo "\"><path d=\"M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z\"/></svg>
            </label>
            <div class=\"col-md-9\">
              <div id=\"module_type\" data-toggle=\"buttons\">
                <label class=\"btn btn-default btn-slideshow ";
        // line 131
        if ((($context["type"] ?? null) == "slideshow")) {
            echo "active";
        }
        echo "\">
                  <input type=\"radio\" name=\"type\" value=\"slideshow\" ";
        // line 132
        if ((($context["type"] ?? null) == "slideshow")) {
            echo "checked";
        }
        echo ">
                  ";
        // line 133
        echo ($context["text_slideshow"] ?? null);
        echo "
                </label>
                <label class=\"btn btn-default btn-carousel ";
        // line 135
        if ((($context["type"] ?? null) == "carousel")) {
            echo "active";
        }
        echo "\">
                  <input type=\"radio\" name=\"type\" value=\"carousel\" ";
        // line 136
        if ((($context["type"] ?? null) == "carousel")) {
            echo "checked";
        }
        echo ">
                  ";
        // line 137
        echo ($context["text_carousel"] ?? null);
        echo "
                </label>
                <label class=\"btn btn-default btn-banner ";
        // line 139
        if ((($context["type"] ?? null) == "single_banner")) {
            echo "active";
        }
        echo "\">
                  <input type=\"radio\" name=\"type\" value=\"single_banner\" ";
        // line 140
        if ((($context["type"] ?? null) == "single_banner")) {
            echo "checked";
        }
        echo ">
                  ";
        // line 141
        echo ($context["text_single_banner"] ?? null);
        echo "
                </label>
              </div>
            </div>
          </div>
          <hr>

          <div id=\"carousel_prop\" class=\"collapse fade ";
        // line 148
        if ((($context["type"] ?? null) == "carousel")) {
            echo "in";
        }
        echo "\">
            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\">";
        // line 150
        echo ($context["entry_items"] ?? null);
        echo "</label>
              <div class=\"col-md-9 form-inline\">
                <input type=\"number\" name=\"items\" value=\"";
        // line 152
        echo ($context["items"] ?? null);
        echo "\" class=\"form-control\">
              </div>
            </div>
            <hr>

            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\">
                ";
        // line 159
        echo ($context["entry_items_responsive"] ?? null);
        echo "
                <svg class=\"text-info cursor-pointer\" height=\"12\" width=\"12\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" onclick=\"info_show(this, 'code')\" data-text=\"";
        // line 160
        echo twig_escape_filter($this->env, ($context["help_items_responsive"] ?? null), "html", null, true);
        echo "\"><path d=\"M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z\"/></svg>
              </label>
              <div class=\"col-md-9\">
                <table id=\"breakpoints\">
                  ";
        // line 164
        $context["breakpoint_row"] = 1;
        // line 165
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["responsive_item"]) {
            // line 166
            echo "                  <tr id=\"breakpoint-";
            echo ($context["breakpoint_row"] ?? null);
            echo "\">
                    <td><input type=\"number\" name=\"responsive_items[";
            // line 167
            echo ($context["breakpoint_row"] ?? null);
            echo "][breakpoint]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "breakpoint", [], "any", false, false, false, 167);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint"] ?? null);
            echo "\"></td>
                    <td>&nbsp;⇢&nbsp;</td>
                    <td><input type=\"number\" name=\"responsive_items[";
            // line 169
            echo ($context["breakpoint_row"] ?? null);
            echo "][amount]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "amount", [], "any", false, false, false, 169);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint_items"] ?? null);
            echo "\"></td>
                    <td>&nbsp;</td>
                    <td>
                      <button type=\"button\" class=\"btn btn-default mb-2\" onclick=\"removeBreakpoint('#breakpoint-";
            // line 172
            echo ($context["breakpoint_row"] ?? null);
            echo "')\">
                        <svg class=\"btn-just-icon text-danger\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13H5v-2h14v2z\"/>
  \t\t\t\t\t\t\t\t\t\t\t</svg>
                      </button>
                    </td>
                  </tr>
                  ";
            // line 179
            $context["breakpoint_row"] = (($context["breakpoint_row"] ?? null) + 1);
            // line 180
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsive_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                </table>
                <button type=\"button\" class=\"btn btn-default\" onclick=\"addBreakpoint()\">
                  <svg class=\"btn-left-icon\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
  \t\t\t\t\t\t\t\t</svg>
                  ";
        // line 186
        echo ($context["entry_breakpoint_add"] ?? null);
        echo "
                </button>

                <script>
    \t\t\t\t\t\t\tvar breakpoint_row = ";
        // line 190
        echo ($context["breakpoint_row"] ?? null);
        echo ";

    \t\t\t\t\t\t\tfunction addBreakpoint() {

    \t\t\t\t\t\t\t\tbreakpoint_content  = '<tr id=\"breakpoint-' + breakpoint_row + '\"  class=\"new-breakpoint\">';
    \t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '    <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][breakpoint]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 196
        echo ($context["entry_breakpoint"] ?? null);
        echo "\">';
    \t\t\t\t\t\t\t\tbreakpoint_content += '  </td>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '  <td>&nbsp;⇢&nbsp;</td>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '  <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][amount]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 200
        echo ($context["entry_breakpoint_items"] ?? null);
        echo "\">';
    \t\t\t\t\t\t\t\tbreakpoint_content += '  </td>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '  <td>&nbsp;</td>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '    <button type=\"button\" class=\"btn btn-default mb-2\" onclick=\"removeBreakpoint(\\'#breakpoint-' + breakpoint_row + '\\')\">';
    \t\t\t\t\t\t\t\tbreakpoint_content += '      <svg class=\"btn-just-icon text-danger\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M19 13H5v-2h14v2z\"/></svg>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '    </button>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '  </td>';
    \t\t\t\t\t\t\t\tbreakpoint_content += '</tr>';

    \t\t\t\t\t\t\t\t\$('#breakpoints').append(breakpoint_content)

    \t\t\t\t\t\t\t\tbreakpoint_row++;
    \t\t\t\t\t\t\t}

    \t\t\t\t\t\t\tfunction removeBreakpoint(id) {
    \t\t\t\t\t\t\t\t\$(id).remove();
    \t\t\t\t\t\t\t}
  \t\t\t\t\t\t\t</script>
              </div>
            </div>
            <hr>
            <!-- <div class=\"form-group\">
              <label class=\"col-md-3 control-label\">
                ";
        // line 224
        echo ($context["entry_responsive_base"] ?? null);
        echo "
                <i class=\"fa fa-fw fa-question-circle-o text-info cursor-pointer\" onclick=\"info_show(this, 'code')\" data-text=\"";
        // line 225
        echo twig_escape_filter($this->env, ($context["help_responsive_base"] ?? null), "html", null, true);
        echo "\"></i>
              </label>
              <div class=\"col-md-9\">

                <div id=\"responsive_base\" class=\"btn-group\" data-toggle=\"buttons\">
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 230
        if ((($context["responsive_base"] ?? null) == "viewport")) {
            echo " active ";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"responsive_base\" value=\"viewport\" ";
        // line 231
        if ((($context["responsive_base"] ?? null) == "viewport")) {
            echo " checked ";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t";
        // line 232
        echo ($context["entry_vievport"] ?? null);
        echo "
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 234
        if ((($context["responsive_base"] ?? null) == "parent")) {
            echo " active ";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"responsive_base\" value=\"parent\" ";
        // line 235
        if ((($context["responsive_base"] ?? null) == "parent")) {
            echo " checked ";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t";
        // line 236
        echo ($context["entry_parent"] ?? null);
        echo "
  \t\t\t\t\t\t\t\t</label>
                  <label class=\"btn btn-default btn-selector ";
        // line 238
        if ((($context["responsive_base"] ?? null) == "custom")) {
            echo " active ";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"responsive_base\" value=\"custom\" ";
        // line 239
        if ((($context["responsive_base"] ?? null) == "custom")) {
            echo " checked ";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t";
        // line 240
        echo ($context["entry_selector"] ?? null);
        echo "
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t</div>
                <div class=\"base-selector-wrapper\">
                  <div id=\"base_selector\" class=\"collapse fade ";
        // line 244
        if ((($context["responsive_base"] ?? null) == "custom")) {
            echo "in";
        }
        echo "\">
                    <div class=\"pt-2\">
                      <input type=\"text\" name=\"responsive_base_selector\" value=\"";
        // line 246
        echo ($context["responsive_base_selector"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["placeholder_selector"] ?? null);
        echo "\">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr> -->
          </div>
          <div id=\"slideshow_prop\" class=\"collapse fade ";
        // line 254
        if ((($context["type"] ?? null) == "slideshow")) {
            echo "in";
        }
        echo "\">
            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\">
                ";
        // line 257
        echo ($context["entry_animation"] ?? null);
        echo "
                <svg class=\"text-info cursor-pointer\" height=\"12\" width=\"12\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" onclick=\"info_show(this, 'code')\" data-text=\"";
        // line 258
        echo twig_escape_filter($this->env, ($context["help_animation"] ?? null), "html", null, true);
        echo "\"><path d=\"M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z\"/></svg>
                </label>
              <div class=\"col-md-9\">
                <div class=\"row\">
                  <div class=\"col-md-12 form-inline\">
                    <div class=\"input-group\">
                      <span class=\"input-group-addon\" style=\"width:50px\">in</span>
                      <select type=\"text\" name=\"animation_in\" class=\"form-control\">

  \t                    <optgroup label=\"";
        // line 267
        echo ($context["text_no_animation"] ?? null);
        echo "\">
  \t                      <option value=\"\">";
        // line 268
        echo ($context["text_no_animation"] ?? null);
        echo "</option>
  \t                    </optgroup>

  \t                    <optgroup label=\"Attention Seekers\">
  \t                      <option value=\"bounce\">bounce</option>
  \t                      <option value=\"flash\">flash</option>
  \t                      <option value=\"pulse\">pulse</option>
  \t                      <option value=\"rubberBand\">rubberBand</option>
  \t                      <option value=\"shake\">shake</option>
  \t                      <option value=\"swing\">swing</option>
  \t                      <option value=\"tada\">tada</option>
  \t                      <option value=\"wobble\">wobble</option>
  \t                      <option value=\"jello\">jello</option>
  \t                      <option value=\"heartBeat\">heartBeat</option>
  \t                    </optgroup>

  \t                    <optgroup label=\"Bouncing Entrances\">
  \t                     <option value=\"bounceIn\">bounceIn</option>
  \t                     <option value=\"bounceInDown\">bounceInDown</option>
  \t                     <option value=\"bounceInLeft\">bounceInLeft</option>
  \t                     <option value=\"bounceInRight\">bounceInRight</option>
  \t                     <option value=\"bounceInUp\">bounceInUp</option>
  \t                    </optgroup>

                       <optgroup label=\"Bouncing Exits\">
                         <option value=\"bounceOut\">bounceOut</option>
                         <option value=\"bounceOutDown\">bounceOutDown</option>
                         <option value=\"bounceOutLeft\">bounceOutLeft</option>
                         <option value=\"bounceOutRight\">bounceOutRight</option>
                         <option value=\"bounceOutUp\">bounceOutUp</option>
                       </optgroup>

                       <optgroup label=\"Fading Entrances\">
                         <option value=\"fadeIn\">fadeIn</option>
                         <option value=\"fadeInDown\">fadeInDown</option>
                         <option value=\"fadeInDownBig\">fadeInDownBig</option>
                         <option value=\"fadeInLeft\">fadeInLeft</option>
                         <option value=\"fadeInLeftBig\">fadeInLeftBig</option>
                         <option value=\"fadeInRight\">fadeInRight</option>
                         <option value=\"fadeInRightBig\">fadeInRightBig</option>
                         <option value=\"fadeInUp\">fadeInUp</option>
                         <option value=\"fadeInUpBig\">fadeInUpBig</option>
                       </optgroup>

                       <optgroup label=\"Fading Exits\">
                         <option value=\"fadeOut\">fadeOut</option>
                         <option value=\"fadeOutDown\">fadeOutDown</option>
                         <option value=\"fadeOutDownBig\">fadeOutDownBig</option>
                         <option value=\"fadeOutLeft\">fadeOutLeft</option>
                         <option value=\"fadeOutLeftBig\">fadeOutLeftBig</option>
                         <option value=\"fadeOutRight\">fadeOutRight</option>
                         <option value=\"fadeOutRightBig\">fadeOutRightBig</option>
                         <option value=\"fadeOutUp\">fadeOutUp</option>
                         <option value=\"fadeOutUpBig\">fadeOutUpBig</option>
                       </optgroup>

                       <optgroup label=\"Flippers\">
                         <option value=\"flip\">flip</option>
                         <option value=\"flipInX\">flipInX</option>
                         <option value=\"flipInY\">flipInY</option>
                         <option value=\"flipOutX\">flipOutX</option>
                         <option value=\"flipOutY\">flipOutY</option>
                       </optgroup>

                       <optgroup label=\"Lightspeed\">
                         <option value=\"lightSpeedIn\">lightSpeedIn</option>
                         <option value=\"lightSpeedOut\">lightSpeedOut</option>
                       </optgroup>

                       <optgroup label=\"Rotating Entrances\">
                         <option value=\"rotateIn\">rotateIn</option>
                         <option value=\"rotateInDownLeft\">rotateInDownLeft</option>
                         <option value=\"rotateInDownRight\">rotateInDownRight</option>
                         <option value=\"rotateInUpLeft\">rotateInUpLeft</option>
                         <option value=\"rotateInUpRight\">rotateInUpRight</option>
                       </optgroup>

                       <optgroup label=\"Rotating Exits\">
                         <option value=\"rotateOut\">rotateOut</option>
                         <option value=\"rotateOutDownLeft\">rotateOutDownLeft</option>
                         <option value=\"rotateOutDownRight\">rotateOutDownRight</option>
                         <option value=\"rotateOutUpLeft\">rotateOutUpLeft</option>
                         <option value=\"rotateOutUpRight\">rotateOutUpRight</option>
                       </optgroup>

                       <optgroup label=\"Sliding Entrances\">
                         <option value=\"slideInUp\">slideInUp</option>
                         <option value=\"slideInDown\">slideInDown</option>
                         <option value=\"slideInLeft\">slideInLeft</option>
                         <option value=\"slideInRight\">slideInRight</option>

                       </optgroup>
                       <optgroup label=\"Sliding Exits\">
                         <option value=\"slideOutUp\">slideOutUp</option>
                         <option value=\"slideOutDown\">slideOutDown</option>
                         <option value=\"slideOutLeft\">slideOutLeft</option>
                         <option value=\"slideOutRight\">slideOutRight</option>

                       </optgroup>

                       <optgroup label=\"Zoom Entrances\">
                         <option value=\"zoomIn\">zoomIn</option>
                         <option value=\"zoomInDown\">zoomInDown</option>
                         <option value=\"zoomInLeft\">zoomInLeft</option>
                         <option value=\"zoomInRight\">zoomInRight</option>
                         <option value=\"zoomInUp\">zoomInUp</option>
                       </optgroup>

                       <optgroup label=\"Zoom Exits\">
                         <option value=\"zoomOut\">zoomOut</option>
                         <option value=\"zoomOutDown\">zoomOutDown</option>
                         <option value=\"zoomOutLeft\">zoomOutLeft</option>
                         <option value=\"zoomOutRight\">zoomOutRight</option>
                         <option value=\"zoomOutUp\">zoomOutUp</option>
                       </optgroup>

                       <optgroup label=\"Specials\">
                         <option value=\"hinge\">hinge</option>
                         <option value=\"jackInTheBox\">jackInTheBox</option>
                         <option value=\"rollIn\">rollIn</option>
                         <option value=\"rollOut\">rollOut</option>
                       </optgroup>

                      </select>
                    </div>
                    <div class=\"input-group\">
                      <span class=\"input-group-addon\" style=\"width:50px\">out</span>
                      <select type=\"text\" name=\"animation_out\" class=\"form-control\">

                        <optgroup label=\"";
        // line 397
        echo ($context["text_no_animation"] ?? null);
        echo "\">
                          <option value=\"\">";
        // line 398
        echo ($context["text_no_animation"] ?? null);
        echo "</option>
                        </optgroup>

                        <optgroup label=\"Attention Seekers\">
                          <option value=\"bounce\">bounce</option>
                          <option value=\"flash\">flash</option>
                          <option value=\"pulse\">pulse</option>
                          <option value=\"rubberBand\">rubberBand</option>
                          <option value=\"shake\">shake</option>
                          <option value=\"swing\">swing</option>
                          <option value=\"tada\">tada</option>
                          <option value=\"wobble\">wobble</option>
                          <option value=\"jello\">jello</option>
                          <option value=\"heartBeat\">heartBeat</option>
                        </optgroup>

                        <optgroup label=\"Bouncing Entrances\">
                          <option value=\"bounceIn\">bounceIn</option>
                          <option value=\"bounceInDown\">bounceInDown</option>
                          <option value=\"bounceInLeft\">bounceInLeft</option>
                          <option value=\"bounceInRight\">bounceInRight</option>
                          <option value=\"bounceInUp\">bounceInUp</option>
                        </optgroup>

                        <optgroup label=\"Bouncing Exits\">
                          <option value=\"bounceOut\">bounceOut</option>
                          <option value=\"bounceOutDown\">bounceOutDown</option>
                          <option value=\"bounceOutLeft\">bounceOutLeft</option>
                          <option value=\"bounceOutRight\">bounceOutRight</option>
                          <option value=\"bounceOutUp\">bounceOutUp</option>
                        </optgroup>

                        <optgroup label=\"Fading Entrances\">
                          <option value=\"fadeIn\">fadeIn</option>
                          <option value=\"fadeInDown\">fadeInDown</option>
                          <option value=\"fadeInDownBig\">fadeInDownBig</option>
                          <option value=\"fadeInLeft\">fadeInLeft</option>
                          <option value=\"fadeInLeftBig\">fadeInLeftBig</option>
                          <option value=\"fadeInRight\">fadeInRight</option>
                          <option value=\"fadeInRightBig\">fadeInRightBig</option>
                          <option value=\"fadeInUp\">fadeInUp</option>
                          <option value=\"fadeInUpBig\">fadeInUpBig</option>
                        </optgroup>

                        <optgroup label=\"Fading Exits\">
                          <option value=\"fadeOut\">fadeOut</option>
                          <option value=\"fadeOutDown\">fadeOutDown</option>
                          <option value=\"fadeOutDownBig\">fadeOutDownBig</option>
                          <option value=\"fadeOutLeft\">fadeOutLeft</option>
                          <option value=\"fadeOutLeftBig\">fadeOutLeftBig</option>
                          <option value=\"fadeOutRight\">fadeOutRight</option>
                          <option value=\"fadeOutRightBig\">fadeOutRightBig</option>
                          <option value=\"fadeOutUp\">fadeOutUp</option>
                          <option value=\"fadeOutUpBig\">fadeOutUpBig</option>
                        </optgroup>

                        <optgroup label=\"Flippers\">
                          <option value=\"flip\">flip</option>
                          <option value=\"flipInX\">flipInX</option>
                          <option value=\"flipInY\">flipInY</option>
                          <option value=\"flipOutX\">flipOutX</option>
                          <option value=\"flipOutY\">flipOutY</option>
                        </optgroup>

                        <optgroup label=\"Lightspeed\">
                          <option value=\"lightSpeedIn\">lightSpeedIn</option>
                          <option value=\"lightSpeedOut\">lightSpeedOut</option>
                        </optgroup>

                        <optgroup label=\"Rotating Entrances\">
                          <option value=\"rotateIn\">rotateIn</option>
                          <option value=\"rotateInDownLeft\">rotateInDownLeft</option>
                          <option value=\"rotateInDownRight\">rotateInDownRight</option>
                          <option value=\"rotateInUpLeft\">rotateInUpLeft</option>
                          <option value=\"rotateInUpRight\">rotateInUpRight</option>
                        </optgroup>

                        <optgroup label=\"Rotating Exits\">
                          <option value=\"rotateOut\">rotateOut</option>
                          <option value=\"rotateOutDownLeft\">rotateOutDownLeft</option>
                          <option value=\"rotateOutDownRight\">rotateOutDownRight</option>
                          <option value=\"rotateOutUpLeft\">rotateOutUpLeft</option>
                          <option value=\"rotateOutUpRight\">rotateOutUpRight</option>
                        </optgroup>

                        <optgroup label=\"Sliding Entrances\">
                          <option value=\"slideInUp\">slideInUp</option>
                          <option value=\"slideInDown\">slideInDown</option>
                          <option value=\"slideInLeft\">slideInLeft</option>
                          <option value=\"slideInRight\">slideInRight</option>

                        </optgroup>
                        <optgroup label=\"Sliding Exits\">
                          <option value=\"slideOutUp\">slideOutUp</option>
                          <option value=\"slideOutDown\">slideOutDown</option>
                          <option value=\"slideOutLeft\">slideOutLeft</option>
                          <option value=\"slideOutRight\">slideOutRight</option>

                        </optgroup>

                        <optgroup label=\"Zoom Entrances\">
                          <option value=\"zoomIn\">zoomIn</option>
                          <option value=\"zoomInDown\">zoomInDown</option>
                          <option value=\"zoomInLeft\">zoomInLeft</option>
                          <option value=\"zoomInRight\">zoomInRight</option>
                          <option value=\"zoomInUp\">zoomInUp</option>
                        </optgroup>

                        <optgroup label=\"Zoom Exits\">
                          <option value=\"zoomOut\">zoomOut</option>
                          <option value=\"zoomOutDown\">zoomOutDown</option>
                          <option value=\"zoomOutLeft\">zoomOutLeft</option>
                          <option value=\"zoomOutRight\">zoomOutRight</option>
                          <option value=\"zoomOutUp\">zoomOutUp</option>
                        </optgroup>

                        <optgroup label=\"Specials\">
                          <option value=\"hinge\">hinge</option>
                          <option value=\"jackInTheBox\">jackInTheBox</option>
                          <option value=\"rollIn\">rollIn</option>
                          <option value=\"rollOut\">rollOut</option>
                        </optgroup>

                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </div>
          <div id=\"owl_prop\" class=\"collapse fade ";
        // line 529
        if ((($context["type"] ?? null) != "single_banner")) {
            echo "in";
        }
        echo "\">
            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\">";
        // line 531
        echo ($context["entry_controls"] ?? null);
        echo "</label>
              <div class=\"col-md-9\">
                <div class=\"\" data-toggle=\"buttons\">
                  <label class=\"btn btn-default  ";
        // line 534
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo " active";
        }
        echo "\">
                    <input type=\"checkbox\" name=\"controls[]\" value=\"pagination\" ";
        // line 535
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
                    ";
        // line 536
        echo ($context["text_pagination"] ?? null);
        echo "
                  </label>
                  <label class=\"btn btn-default ";
        // line 538
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "active";
        }
        echo "\">
                    <input type=\"checkbox\" name=\"controls[]\" value=\"arrows\" ";
        // line 539
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
                    ";
        // line 540
        echo ($context["text_arrows"] ?? null);
        echo "
                  </label>
                </div>
              </div>
            </div>
            <hr>
            <div class=\"form-group\">
  \t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 547
        echo ($context["entry_loop"] ?? null);
        echo "</label>
  \t\t\t\t\t\t<div class=\"col-md-9\">
  \t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 550
        if ( !($context["loop"] ?? null)) {
            echo " active ";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"0\" ";
        // line 551
        if ( !($context["loop"] ?? null)) {
            echo " checked ";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 552
        echo ($context["text_no"] ?? null);
        echo "</span>
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 554
        if (($context["loop"] ?? null)) {
            echo " active ";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"1\" ";
        // line 555
        if (($context["loop"] ?? null)) {
            echo " checked ";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 556
        echo ($context["text_yes"] ?? null);
        echo "</span>
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t</div>
  \t\t\t\t\t<hr>
            <div class=\"form-group\">
  \t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 563
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
  \t\t\t\t\t\t<div class=\"col-md-9\">
  \t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 566
        if ( !($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\" >
  \t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"0\" ";
        // line 567
        if ( !($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 568
        echo ($context["text_no"] ?? null);
        echo "</span>
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 570
        if (($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"1\" ";
        // line 571
        if (($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 572
        echo ($context["text_yes"] ?? null);
        echo "</span>
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t</div>

  \t\t\t\t\t\t\t<div class=\"h-row-wrapper form-inline\">
  \t\t\t\t\t\t\t\t<div id=\"autoplay-speed\" class=\"collapse fade ";
        // line 577
        if (($context["autoplay"] ?? null)) {
            echo "in";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
  \t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"autoplay_speed\" value=\"";
        // line 579
        echo ($context["autoplay_speed"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_autoplay_speed"] ?? null);
        echo "\" /> ";
        echo ($context["text_ms"] ?? null);
        echo "
  \t\t\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t\t\t<script>
  \t\t\t\t\t\t\t\t\t\$('[name=autoplay]').parent().click(function(e) {
  \t\t\t\t\t\t\t\t\t\tsetTimeout( () => {
  \t\t\t\t\t\t\t\t\t\t\tif (\$(this).find('[value=1]').prop('checked')) {
  \t\t\t\t\t\t\t\t\t\t\t\t\$('#autoplay-speed').collapse('show');
  \t\t\t\t\t\t\t\t\t\t\t} else {
  \t\t\t\t\t\t\t\t\t\t\t\t\$('#autoplay-speed').collapse('hide');
  \t\t\t\t\t\t\t\t\t\t\t}
  \t\t\t\t\t\t\t\t\t\t}, 100)
  \t\t\t\t\t\t\t\t\t})
  \t\t\t\t\t\t\t\t</script>
  \t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t</div>
            <hr>
          </div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">
              ";
        // line 600
        echo ($context["entry_hd_images"] ?? null);
        echo "
              <svg class=\"text-info cursor-pointer\" height=\"12\" width=\"12\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" onclick=\"info_show(this, 'code')\" data-text=\"";
        // line 601
        echo twig_escape_filter($this->env, ($context["help_hd_images"] ?? null), "html", null, true);
        echo "\"><path d=\"M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z\"/></svg>
            </label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 605
        if ( !($context["hd_images"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hd_images\" value=\"0\" ";
        // line 606
        if ( !($context["hd_images"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 607
        echo ($context["text_disabled"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 609
        if (($context["hd_images"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hd_images\" value=\"1\" ";
        // line 610
        if (($context["hd_images"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 611
        echo ($context["text_enabled"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
          <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 618
        echo ($context["entry_lazyload"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 621
        if ( !($context["lazyload"] ?? null)) {
            echo " active ";
        }
        echo "\" >
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"lazyload\" value=\"0\" ";
        // line 622
        if ( !($context["lazyload"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 623
        echo ($context["text_no"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 625
        if (($context["lazyload"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"lazyload\" value=\"1\" ";
        // line 626
        if (($context["lazyload"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 627
        echo ($context["text_yes"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
          <!-- Slides -->
          <h4 class=\"block-header\">
            <svg class=\"icon-24\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t<path d=\"M1 5h2v14H1zm4 0h2v14H5zm17 0H10c-.55 0-1 .45-1 1v12c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V6c0-.55-.45-1-1-1zm-1 12H11V7h10v10zm-3.57-4.38l-2 2.57L14 13.47l-2 2.52h8z\"/>
            </svg>
            ";
        // line 638
        echo ($context["text_slides"] ?? null);
        echo "
          </h4>
          <div>
            <div class=\"form-group\">
              <div class=\"col-lg-3 control-label\">
                <ul id=\"slides-labels\" class=\"nav nav-pills nav-stacked\">
                  ";
        // line 644
        $context["item_row"] = 1;
        // line 645
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cust_blocks_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cust_blocks_item"]) {
            // line 646
            echo "                  <li ";
            if ((($context["item_row"] ?? null) == 1)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#slide-";
            echo ($context["item_row"] ?? null);
            echo "\" data-toggle=\"tab\" class=\"slide-label\">
                    ";
            // line 647
            echo ($context["text_slide"] ?? null);
            echo " ";
            echo ($context["item_row"] ?? null);
            echo "
                    <svg onclick=\"removeSlide('#slide-";
            // line 648
            echo ($context["item_row"] ?? null);
            echo "')\" class=\"btn-just-icon pull-right\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg>
                  </a></li>
                  ";
            // line 650
            $context["item_row"] = (($context["item_row"] ?? null) + 1);
            // line 651
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cust_blocks_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 652
        echo "                  <li class=\"add-new-slide\">
                    <a href=\"\" onclick=\"addSlide();return false\">
                      <svg class=\"btn-left-icon\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
      \t\t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
      \t\t\t\t\t\t\t\t</svg>
                      ";
        // line 657
        echo ($context["text_add_slide"] ?? null);
        echo "
                    </a>
                  </li>
                </ul>
              </div>
              <div class=\"col-lg-9 border-left\">
                <div class=\"tab-content slide-content-wrapper\">
                  ";
        // line 664
        $context["item_row"] = 1;
        // line 665
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cust_blocks_items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cust_blocks_item"]) {
            // line 666
            echo "                  <div id=\"slide-";
            echo ($context["item_row"] ?? null);
            echo "\" class=\"slide-content tab-pane";
            if ((($context["item_row"] ?? null) == 1)) {
                echo " active";
            }
            echo "\">
                    <ul class=\"nav nav-tabs slide-content-language\" id=\"slide_content_language-";
            // line 667
            echo ($context["item_row"] ?? null);
            echo "\">
                      ";
            // line 668
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
                // line 669
                echo "                      <li class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 669) == 1)) {
                    echo "active";
                }
                echo "\">
                        <a href=\"#slide_content_language-";
                // line 670
                echo ($context["item_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 670);
                echo "\" data-toggle=\"tab\">
                          <img src=\"language/";
                // line 671
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 671);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 671);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 671);
                echo "\" />
                          ";
                // line 672
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 672);
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
            // line 676
            echo "                    </ul>
                    <div class=\"tab-content\">
                      ";
            // line 678
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
                // line 679
                echo "                      <div class=\"tab-pane ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 679) == 1)) {
                    echo "active";
                }
                echo "\" id=\"slide_content_language-";
                echo ($context["item_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 679);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group slide-type\">
                          <label class=\"col-lg-2 control-label\">";
                // line 681
                echo ($context["entry_type_slide"] ?? null);
                echo "</label>
                          <div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\" data-slide-id=\"";
                // line 683
                echo ($context["item_row"] ?? null);
                echo "_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 683);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default btn-img-type ";
                // line 684
                if ( !(($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "type", [], "any", false, false, false, 684)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 684)] ?? null) : null)) {
                    echo " active ";
                }
                echo "\" onclick=\"html_collapse(this)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cust_blocks_item[";
                // line 685
                echo ($context["item_row"] ?? null);
                echo "][type][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 685);
                echo "]\" value=\"0\" ";
                if ( !(($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "type", [], "any", false, false, false, 685)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 685)] ?? null) : null)) {
                    echo " checked ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 686
                echo ($context["entry_type_img"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-default btn-html-type ";
                // line 688
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "type", [], "any", false, false, false, 688)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 688)] ?? null) : null)) {
                    echo " active ";
                }
                echo "\" onclick=\"html_collapse(this)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cust_blocks_item[";
                // line 689
                echo ($context["item_row"] ?? null);
                echo "][type][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 689);
                echo "]\" value=\"1\" ";
                if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "type", [], "any", false, false, false, 689)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 689)] ?? null) : null)) {
                    echo " checked ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 690
                echo ($context["entry_type_html"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                          </div>
                        </div>
                        <hr>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
                          <label class=\"col-lg-2 control-label\">";
                // line 697
                echo ($context["entry_image"] ?? null);
                echo "</label>
                          <div class=\"col-lg-10 logo-thumb\">
                            <a href=\"\" id=\"thumb-image-";
                // line 699
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 699);
                echo "-";
                echo ($context["item_row"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "thumb", [], "any", false, false, false, 699)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 699)] ?? null) : null);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\"  /></a>
                            <input type=\"hidden\" name=\"cust_blocks_item[";
                // line 700
                echo ($context["item_row"] ?? null);
                echo "][image][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 700);
                echo "]\" value=\"";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "image", [], "any", false, false, false, 700)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 700)] ?? null) : null);
                echo "\" id=\"input-image-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 700);
                echo "-";
                echo ($context["item_row"] ?? null);
                echo "\" />
                          </div>
                        </div>
                        <hr>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
                          <label class=\"col-lg-2 control-label\">";
                // line 705
                echo ($context["entry_img_size"] ?? null);
                echo "</label>
                          <div class=\"col-lg-10 form-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"cust_blocks_item[";
                // line 707
                echo ($context["item_row"] ?? null);
                echo "][img_width][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 707);
                echo "]\" value=\"";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "img_width", [], "any", false, false, false, 707)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 707)] ?? null) : null);
                echo "\" /> x
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"cust_blocks_item[";
                // line 708
                echo ($context["item_row"] ?? null);
                echo "][img_height][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 708);
                echo "]\" value=\"";
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "img_height", [], "any", false, false, false, 708)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 708)] ?? null) : null);
                echo "\" /> px
                          </div>
                        </div>
                        <hr>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
                          <label class=\"col-lg-2 control-label\">
                            ";
                // line 714
                echo ($context["entry_alt"] ?? null);
                echo "
                            <svg class=\"text-info cursor-pointer\" height=\"12\" width=\"12\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" onclick=\"info_show(this, 'code')\" data-text=\"";
                // line 715
                echo twig_escape_filter($this->env, ($context["help_alt"] ?? null), "html", null, true);
                echo "\"><path d=\"M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z\"/></svg>
                          </label>
                          <div class=\"col-lg-10\">
                            <input class=\"form-control\" type=\"text\" name=\"cust_blocks_item[";
                // line 718
                echo ($context["item_row"] ?? null);
                echo "][alt][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 718);
                echo "]\" value=\"";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "alt", [], "any", false, false, false, 718)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 718)] ?? null) : null);
                echo "\" />
                          </div>
                        </div>
                        <hr>
                        <div class=\"form-group\">
                          <label class=\"col-lg-2 control-label\">";
                // line 723
                echo ($context["entry_link"] ?? null);
                echo "</label>
                          <div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t      <div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <label class=\"btn btn-default ";
                // line 728
                if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "target", [], "any", false, false, false, 728)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 728)] ?? null) : null)) {
                    echo " active ";
                }
                echo "\" title=\"";
                echo ($context["entry_target"] ?? null);
                echo "\" data-toggle=\"tooltip\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"checkbox\" name=\"cust_blocks_item[";
                // line 729
                echo ($context["item_row"] ?? null);
                echo "][target][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 729);
                echo "]\" ";
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "target", [], "any", false, false, false, 729)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 729)] ?? null) : null)) {
                    echo " checked ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"show\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" height=\"18px\" viewBox=\"0 0 24 24\" width=\"18px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t\t\t\t\t      <input class=\"form-control\" type=\"text\" name=\"cust_blocks_item[";
                // line 736
                echo ($context["item_row"] ?? null);
                echo "][link][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 736);
                echo "]\" value=\"";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "link", [], "any", false, false, false, 736)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 736)] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t    </div>
                          </div>
                        </div>
                        <hr>
                        <div id=\"slide_html_";
                // line 741
                echo ($context["item_row"] ?? null);
                echo "_";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 741);
                echo "\" class=\"collapse fade ";
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "type", [], "any", false, false, false, 741)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 741)] ?? null) : null)) {
                    echo " in ";
                }
                echo "\">
                          <div class=\"form-group\">
                            <label class=\"col-lg-2 control-label\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 744
                echo ($context["entry_description"] ?? null);
                echo "
                              <svg class=\"text-info cursor-pointer\" height=\"12\" width=\"12\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" onclick=\"info_show(this, 'code')\" data-text=\"";
                // line 745
                echo twig_escape_filter($this->env, ($context["help_slide_html"] ?? null), "html", null, true);
                echo "\"><path d=\"M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z\"/></svg>
  \t\t\t\t\t\t\t\t\t\t\t\t\t</label>
                            <div class=\"col-lg-10\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"code-editor-controls hidden-xs\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"button\" onclick=\"toggleCM(this)\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"show pull-left\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" height=\"18\" width=\"18\" viewBox=\"0 0 24 24\"><path d=\"M3.55 19.09l1.41 1.41 1.79-1.8-1.41-1.41zM11 20h2v3h-2zM1 11h3v2H1zm12-6.95v3.96l1 .58c1.24.72 2 2.04 2 3.46 0 2.21-1.79 4-4 4s-4-1.79-4-4c0-1.42.77-2.74 2-3.46l1-.58V4.05h2m2-2H9v4.81C7.21 7.9 6 9.83 6 12.05c0 3.31 2.69 6 6 6s6-2.69 6-6c0-2.22-1.21-4.15-3-5.19V2.05zM20 11h3v2h-3zm-2.76 7.71l1.79 1.8 1.41-1.41-1.8-1.79z\"/></svg>&nbsp;&nbsp;";
                // line 750
                echo ($context["editor_hilight"] ?? null);
                echo "
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default btn-autoheight\" data-toggle=\"button\" aria-pressed=\"false\" onclick=\"autoheightCM(this)\" disabled=\"disabled\">
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"show pull-left\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" height=\"18\" width=\"18\" viewBox=\"0 0 24 24\"><path d=\"M6 7h2.5L5 3.5 1.5 7H4v10H1.5L5 20.5 8.5 17H6V7zm4-2v2h12V5H10zm0 14h12v-2H10v2zm0-6h12v-2H10v2z\"/></svg>&nbsp;&nbsp;";
                // line 753
                echo ($context["editor_autoheight"] ?? null);
                echo "
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" name=\"cust_blocks_item[";
                // line 756
                echo ($context["item_row"] ?? null);
                echo "][description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 756);
                echo "]\" class=\"form-control text-monospace\" placeholder=\"";
                echo ($context["placeholder_description"] ?? null);
                echo "\">";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "description", [], "any", false, false, false, 756)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 756)] ?? null) : null);
                echo "</textarea>
                            </div>
                          </div>
                          <hr>
                        </div>
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
            // line 763
            echo "                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-lg-2 control-label\">";
            // line 765
            echo ($context["entry_sort_order"] ?? null);
            echo "</label>
                      <div class=\"col-lg-10 form-inline\">
                        <input  class=\"form-control\" type=\"number\" name=\"cust_blocks_item[";
            // line 767
            echo ($context["item_row"] ?? null);
            echo "][sort]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "sort", [], "any", false, false, false, 767);
            echo "\" />
                      </div>
                    </div>
                    <hr>
                  </div>
                  ";
            // line 772
            $context["item_row"] = (($context["item_row"] ?? null) + 1);
            // line 773
            echo "                  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cust_blocks_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 774
        echo "                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class=\"panel-footer\">Created by © <a href=\"http://xds.by/\" target=\"_blank\">xds.by</a></div>
    </div>
  </div>
  <div class=\"modal info fade\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\" style=\"margin-left: 10px\">&times;</span></button>
          <div class=\"text\"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>

  \$(function () {
  \t\$('select[name=\"animation_in\"] option[value=\"";
        // line 798
        echo ($context["animation_in"] ?? null);
        echo "\"]').attr('selected','selected');
  \t\$('select[name=\"animation_out\"] option[value=\"";
        // line 799
        echo ($context["animation_out"] ?? null);
        echo "\"]').attr('selected','selected');
  });

  \$('#module_type .btn').click( function(e) {
    setTimeout(function () {
      var banner_active = \$(e.target).hasClass('btn-banner') && \$(e.target).hasClass('active'),
          carousel_active = \$(e.target).hasClass('btn-carousel') && \$(e.target).hasClass('active'),
          slideshow_active = \$(e.target).hasClass('btn-slideshow') && \$(e.target).hasClass('active')  ;

      if (banner_active) { \$('#owl_prop').collapse('hide') } else { \$('#owl_prop').collapse('show') }
      if (carousel_active) { \$('#carousel_prop').collapse('show') } else { \$('#carousel_prop').collapse('hide') }
      if (slideshow_active) { \$('#slideshow_prop').collapse('show') } else { \$('#slideshow_prop').collapse('hide') }
    }, 10);
  });

  \$('#responsive_base .btn').click( function(e) {
    setTimeout(function () {
      var selector_active = \$(e.target).hasClass('btn-selector') && \$(e.target).hasClass('active') ;
      if (selector_active) { \$('#base_selector').collapse('show') } else { \$('#base_selector').collapse('hide') }
    }, 10);
  });

  function info_show(element, tag_name) {

    String.prototype.replaceArray = function(find, replace) {
      var replaceString = this;
      var regex;
      for (var i = 0; i < find.length; i++) {
        regex = new RegExp(find[i], \"g\");
        replaceString = replaceString.replace(regex, replace[i]);
      }
      return replaceString;
    }

    String.prototype.htmlDecode = function() {
      var e = document.createElement('textarea');
      e.innerHTML = this;
      return e.childNodes.length === 0 ? \"\" : e.childNodes[0].nodeValue;
    }

    var text = element.getAttribute('data-text'),
        html = '',
        regex = new RegExp('&lt;' + tag_name + '.*?&gt;(.*?)&lt;\\/' + tag_name + '&gt;', 'g'),
        matches = text.match(regex) || [],
        matches_text = [],
        matches_html = [];

    for (var i = 0; i < matches.length; i++) {
      matches_text[i] = matches[i].slice( tag_name.length + 8, -(tag_name.length + 9) );
      matches_html[i] = matches_text[i].htmlDecode();
    }

    html = text.htmlDecode().replaceArray(matches_html, matches_text);

    \$('.modal.info .text').html(html);
    \$('.modal.info').modal('show')
  }

  function html_collapse(element) {
    setTimeout(function () {
      var slide_id = \$(element).parent().attr('data-slide-id'),
          html_active = \$(element).hasClass('btn-html-type') && \$(element).hasClass('active');

      if (html_active) {
        \$( '#slide_html_' + slide_id ).collapse('show');
      } else {
        \$( '#slide_html_' + slide_id ).collapse('hide');
      }
    }, 10);
  }

  function toggleCM(element) {
  \tvar autoheight_btn = element.parentNode.querySelector('.btn-autoheight');

  \tif (!element.classList.contains('active')) {
  \t\tvar startCodeMirror = CodeMirror.fromTextArea(element.parentNode.parentNode.querySelector('textarea') ,{
  \t\t\tmode: 'text/html',
  \t\t\ttabSize: 2,
  \t\t\tviewportMargin: Infinity,
  \t\t\tlineNumbers: true,
  \t\t\t//autofocus: true,
  \t\t\tlineWrapping: false,
  \t\t\ttheme: 'github',
  \t\t});

    \tautoheight_btn.removeAttribute(\"disabled\");

  \t} else {
  \t\telement.parentNode.parentNode.querySelector('.CodeMirror').CodeMirror.toTextArea();
  \t\tautoheight_btn.setAttribute(\"disabled\", \"disabled\");
  \t\tautoheight_btn.classList.remove(\"active\");
  \t}
  }

  function autoheightCM(element) {
  \tvar editor = element.parentNode.parentNode.querySelector('.CodeMirror');

  \tif (!element.classList.contains('active')) {
  \t\teditor.style.height = 'auto';
  \t} else {
  \t\teditor.style.height = '';
  \t}

  \teditor.CodeMirror.refresh();
  }


  var item_row = ";
        // line 906
        echo ($context["item_row"] ?? null);
        echo ";

  function addSlide() {
    slide_label = '<li>';
    slide_label += '  <a href=\"#slide-' + item_row + '\" data-toggle=\"tab\" class=\"slide-label new-slide\">';
    slide_label += '    ";
        // line 911
        echo ($context["text_slide"] ?? null);
        echo " ' + item_row;
    slide_label += '    <svg onclick=\"removeSlide(\\'#slide-' + item_row + '\\')\" class=\"btn-just-icon pull-right\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg>';
    slide_label += '  </a>';
    slide_label += '</li>';

    slide_content  = '<div class=\"tab-pane slide-content\" id=\"slide-' + item_row + '\">';
    slide_content += '  <ul class=\"nav nav-tabs slide-content-language\" id=\"slide_content_language-' + item_row + '\">';
    ";
        // line 918
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
            // line 919
            echo "    slide_content += '    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 919) == 1)) {
                echo "active";
            }
            echo "\">';
    slide_content += '      <a href=\"#slide_content_language-' + item_row + '-";
            // line 920
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 920);
            echo "\" data-toggle=\"tab\">';
    slide_content += '        <img src=\"language/";
            // line 921
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 921);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 921);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 921);
            echo "\">';
    slide_content += '        ";
            // line 922
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 922);
            echo "';
    slide_content += '      </a>';
    slide_content += '    </li>';
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
        // line 926
        echo "    slide_content += '  </ul>';
    slide_content += '  <div class=\"tab-content\">';
    ";
        // line 928
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
            // line 929
            echo "    slide_content += '    <div class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 929) == 1)) {
                echo "active";
            }
            echo "\" id=\"slide_content_language-' + item_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 929);
            echo "\">';
    slide_content += '      <div class=\"form-group slide-type\">';
  \tslide_content += '        <label class=\"col-lg-2 control-label\">";
            // line 931
            echo ($context["entry_type_slide"] ?? null);
            echo "</label>';
  \tslide_content += '        <div class=\"col-lg-10\">';
  \tslide_content += '          <div class=\"btn-group\" data-toggle=\"buttons\" data-slide-id=\"' + item_row + '_";
            // line 933
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 933);
            echo "\">';
  \tslide_content += '            <label class=\"btn btn-default btn-img-type active\" onclick=\"html_collapse(this)\">';
  \tslide_content += '              <input type=\"radio\" name=\"cust_blocks_item[' + item_row + '][type][";
            // line 935
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 935);
            echo "]\" value=\"0\" checked >';
  \tslide_content += '              ";
            // line 936
            echo ($context["entry_type_img"] ?? null);
            echo "';
  \tslide_content += '            </label>';
  \tslide_content += '            <label class=\"btn btn-default btn-html-type\" onclick=\"html_collapse(this)\">';
  \tslide_content += '              <input type=\"radio\" name=\"cust_blocks_item[' + item_row + '][type][";
            // line 939
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 939);
            echo "]\" value=\"1\">';
  \tslide_content += '              ";
            // line 940
            echo ($context["entry_type_html"] ?? null);
            echo "';
  \tslide_content += '            </label>';
  \tslide_content += '          </div>';
  \tslide_content += '        </div>';
  \tslide_content += '      </div>';
  \tslide_content += '      <hr>';
    slide_content += '      <div class=\"form-group\">';
    slide_content += '        <label class=\"col-lg-2 control-label\">";
            // line 947
            echo ($context["entry_image"] ?? null);
            echo "</label>';
    slide_content += '        <div class=\"col-lg-10 logo-thumb\">';
    slide_content += '          <a href=\"\" id=\"thumb-image-";
            // line 949
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 949);
            echo "-' + item_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"></a>';
    slide_content += '          <input type=\"hidden\" name=\"cust_blocks_item[' + item_row + '][image][";
            // line 950
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 950);
            echo "]\" value=\"\" id=\"input-image-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 950);
            echo "-' + item_row + '\">';
    slide_content += '        </div>';
    slide_content += '      </div>';
    slide_content += '      <hr>';
  \tslide_content += '      <div class=\"form-group\">';
  \tslide_content += '        <label class=\"col-lg-2 control-label\">";
            // line 955
            echo ($context["entry_img_size"] ?? null);
            echo "</label>';
  \tslide_content += '        <div class=\"col-lg-10 form-inline\">';
  \tslide_content += '          <input class=\"form-control\" type=\"number\" name=\"cust_blocks_item[' + item_row + '][img_width][";
            // line 957
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 957);
            echo "]\" value=\"100\"> x';
  \tslide_content += '          <input class=\"form-control\" type=\"number\" name=\"cust_blocks_item[' + item_row + '][img_height][";
            // line 958
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 958);
            echo "]\" value=\"100\"> px';
  \tslide_content += '        </div>';
  \tslide_content += '      </div>';
  \tslide_content += '      <hr>';
  \tslide_content += '\t\t\t<div class=\"form-group\">';
  \tslide_content += '\t\t\t\t<label class=\"col-lg-2 control-label\">';
    slide_content += '\t\t\t\t  ";
            // line 964
            echo ($context["entry_alt"] ?? null);
            echo "';
    slide_content += '\t\t\t\t  <svg class=\"text-info cursor-pointer\" height=\"12\" width=\"12\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" onclick=\"info_show(this, \\'code\\')\" data-text=\"";
            // line 965
            echo twig_escape_filter($this->env, ($context["help_alt"] ?? null), "html", null, true);
            echo "\"><path d=\"M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z\"/></svg>';
    slide_content += '\t\t\t\t</label>';
  \tslide_content += '\t\t\t\t<div class=\"col-lg-10\">';
  \tslide_content += '\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"cust_blocks_item[";
            // line 968
            echo ($context["item_row"] ?? null);
            echo "][alt][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 968);
            echo "]\" value=\"";
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, ($context["cust_blocks_item"] ?? null), "alt", [], "any", false, false, false, 968)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 968)] ?? null) : null);
            echo "\" />';
  \tslide_content += '\t\t\t\t</div>';
  \tslide_content += '\t\t\t</div>';
  \tslide_content += '\t\t\t<hr>';
    slide_content += '      <div class=\"form-group\">';
    slide_content += '        <label class=\"col-lg-2 control-label\">";
            // line 973
            echo ($context["entry_link"] ?? null);
            echo "</label>';
    slide_content += '        <div class=\"col-lg-10\">';
  \tslide_content += '          <div class=\"input-group\">';
  \tslide_content += '            <div class=\"input-group-btn\">';
  \tslide_content += '              <div class=\"btn-group\" data-toggle=\"buttons\">';
  \tslide_content += '                <label class=\"btn btn-default\" title=\"";
            // line 978
            echo ($context["entry_target"] ?? null);
            echo "\">';
  \tslide_content += '                  <input type=\"checkbox\" name=\"cust_blocks_item[' + item_row + '][target][";
            // line 979
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 979);
            echo "]\">';
  \tslide_content += '                  <svg class=\"show\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\">';
    slide_content += '                    <path d=\"M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z\"/>';
    slide_content += '                  </svg>';
  \tslide_content += '                </label>';
  \tslide_content += '              </div>';
  \tslide_content += '            </div>';
    slide_content += '            <input class=\"form-control\" type=\"text\" name=\"cust_blocks_item[' + item_row + '][link][";
            // line 986
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 986);
            echo "]\" value=\"\">';
  \tslide_content += '          </div>';
    slide_content += '        </div>';
    slide_content += '      </div>';
    slide_content += '      <hr>';
    slide_content += '      <div id=\"slide_html_' + item_row + '_";
            // line 991
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 991);
            echo "\" class=\"collapse fade\">';
    slide_content += '      <div class=\"form-group\">';
    slide_content += '        <label class=\"col-lg-2 control-label\">';
    slide_content += '          ";
            // line 994
            echo ($context["entry_description"] ?? null);
            echo "';
    slide_content += '          <svg class=\"text-info cursor-pointer\" height=\"12\" width=\"12\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" onclick=\"info_show(this, \\'code\\')\" data-text=\"";
            // line 995
            echo twig_escape_filter($this->env, ($context["help_slide_html"] ?? null), "html", null, true);
            echo "\"><path d=\"M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z\"/></svg>';
    slide_content += '        </label>';
    slide_content += '        <div class=\"col-lg-10\">';
    slide_content += '          <div class=\"code-editor-controls hidden-xs\">';
    slide_content += '            <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"button\" aria-pressed=\"false\" onclick=\"toggleCM(this)\">';
    slide_content += '              <svg class=\"show pull-left\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" height=\"18\" width=\"18\" viewBox=\"0 0 24 24\">';
    slide_content += '                <path d=\"M3.55 19.09l1.41 1.41 1.79-1.8-1.41-1.41zM11 20h2v3h-2zM1 11h3v2H1zm12-6.95v3.96l1 .58c1.24.72 2 2.04 2 3.46 0 2.21-1.79 4-4 4s-4-1.79-4-4c0-1.42.77-2.74 2-3.46l1-.58V4.05h2m2-2H9v4.81C7.21 7.9 6 9.83 6 12.05c0 3.31 2.69 6 6 6s6-2.69 6-6c0-2.22-1.21-4.15-3-5.19V2.05zM20 11h3v2h-3zm-2.76 7.71l1.79 1.8 1.41-1.41-1.8-1.79z\"/>';
    slide_content += '              </svg>&nbsp;&nbsp;";
            // line 1002
            echo ($context["editor_hilight"] ?? null);
            echo "';
    slide_content += '            </button>';
    slide_content += '            <button type=\"button\" class=\"btn btn-sm btn-default btn-autoheight\" data-toggle=\"button\" aria-pressed=\"false\" onclick=\"autoheightCM(this)\" disabled=\"disabled\">';
    slide_content += '              <svg class=\"show pull-left\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" height=\"18\" width=\"18\" viewBox=\"0 0 24 24\">';
    slide_content += '                <path d=\"M6 7h2.5L5 3.5 1.5 7H4v10H1.5L5 20.5 8.5 17H6V7zm4-2v2h12V5H10zm0 14h12v-2H10v2zm0-6h12v-2H10v2z\"/>';
    slide_content += '              </svg>&nbsp;&nbsp;";
            // line 1007
            echo ($context["editor_autoheight"] ?? null);
            echo "';
    slide_content += '            </button>';
    slide_content += '          </div>';
    slide_content += '          <textarea rows=\"5\" name=\"cust_blocks_item[' + item_row + '][description][";
            // line 1010
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1010);
            echo "]\" class=\"form-control text-monospace\" placeholder=\"";
            echo ($context["placeholder_description"] ?? null);
            echo "\"></textarea>';
    slide_content += '        </div>';
    slide_content += '      </div>';
    slide_content += '      <hr>';
    slide_content += '      </div>';
    slide_content += '    </div>';
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
        // line 1017
        echo "    slide_content += '  </div>';
    slide_content += '  <div class=\"form-group\">';
    slide_content += '    <label class=\"col-lg-2 control-label\">";
        // line 1019
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>';
    slide_content += '    <div class=\"col-lg-10 form-inline\">';
    slide_content += '      <input  class=\"form-control\" type=\"number\" name=\"cust_blocks_item[' + item_row + '][sort]\" value=\"0\" />';
    slide_content += '    </div>';
    slide_content += '  </div>';
    slide_content += '  <hr>';
    slide_content += '</div>';


    \$('.add-new-slide').before(slide_label);
    \$('.slide-content-wrapper').append(slide_content)

    \$('a[href = #slide-' + item_row + ']').tab('show');

    item_row++;
  }

  function removeSlide(id) {
    var item = \$('a[href=' + id + ']').parent(),
        next = item.next(),
        prev = item.prev();

    if ( item.hasClass('active') ) {

      if ( prev.length > 0 ) {

        prev.find('a').tab('show');

      } else if ( next.length > 0 && !next.hasClass('add-new-slide') ) {

        next.find('a').tab('show');
      }
    }

    item.remove();

    \$(id).remove();
  }

</script>
";
        // line 1059
        if (($context["apply_button"] ?? null)) {
            // line 1060
            echo "<script>
\tfunction apply(){

\t\t\$(\".alert\").remove();

    \$.when(

      \$('.CodeMirror').each( function(index) {
        this.CodeMirror.toTextArea();
        \$('.code-editor-controls button').removeClass(\"active\");
        \$('.code-editor-controls .btn-autoheight').attr('disabled', 'disabled');
      })

    ).done( function(x) {

      var form_data = \$(\"#form-module\").serialize();

  \t\t\$.ajax({
  \t\t\ttype: \"post\",
  \t\t\turl: \$(\"#form-module\").attr('action'),
  \t\t\tdata: form_data,
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
  \t\t\t\t\t\t\tvar \$success = \$(html).find('.alert-success, .alert-danger');
  \t\t\t\t\t\t\tif (\$success.length > 0) {
  \t\t\t\t\t\t\t\t\$('#module-controls').before(\$success);
  \t\t\t\t\t\t\t\t\$('body').removeClass('loading');
  \t\t\t\t\t\t\t\t\$('.control-btns .btn').removeClass('disabled');
                  \$('.new-slide').removeClass('new-slide');
  \t\t\t\t\t\t\t}
  \t\t\t\t\t\t}
  \t\t\t\t\t});

            \$('.has-error .text-danger').remove();
  \t\t\t\t\t\$('.has-error').removeClass('has-error');
  \t\t\t\t} else {
  \t\t\t\t\tvar \$success = \$(html).find('.alert-success, .alert-danger'),
  \t\t\t\t\t\t\t\$content = \$(html).find('#module-controls').html();

  \t\t\t\t\tif (\$success.length > 0) {
  \t\t\t\t\t\t\$('#module-controls').before(\$success);
  \t\t\t\t\t} else {
  \t\t\t\t\t\t\$('#module-controls').html(\$content);
  \t\t\t\t\t}

  \t\t\t\t\t\$('body').removeClass('loading');
  \t\t\t\t\t\$('.control-btns .btn').removeClass('disabled');
  \t\t\t\t}
  \t\t\t}
  \t\t});

    });

\t}
</script>
";
        }
        // line 1128
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/xds_banners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2195 => 1128,  2125 => 1060,  2123 => 1059,  2080 => 1019,  2076 => 1017,  2053 => 1010,  2047 => 1007,  2039 => 1002,  2029 => 995,  2025 => 994,  2019 => 991,  2011 => 986,  2001 => 979,  1997 => 978,  1989 => 973,  1977 => 968,  1971 => 965,  1967 => 964,  1958 => 958,  1954 => 957,  1949 => 955,  1939 => 950,  1931 => 949,  1926 => 947,  1916 => 940,  1912 => 939,  1906 => 936,  1902 => 935,  1897 => 933,  1892 => 931,  1882 => 929,  1865 => 928,  1861 => 926,  1843 => 922,  1835 => 921,  1831 => 920,  1824 => 919,  1807 => 918,  1797 => 911,  1789 => 906,  1679 => 799,  1675 => 798,  1649 => 774,  1635 => 773,  1633 => 772,  1623 => 767,  1618 => 765,  1614 => 763,  1587 => 756,  1581 => 753,  1575 => 750,  1567 => 745,  1563 => 744,  1551 => 741,  1539 => 736,  1523 => 729,  1515 => 728,  1507 => 723,  1495 => 718,  1489 => 715,  1485 => 714,  1472 => 708,  1464 => 707,  1459 => 705,  1443 => 700,  1433 => 699,  1428 => 697,  1418 => 690,  1408 => 689,  1402 => 688,  1397 => 686,  1387 => 685,  1381 => 684,  1375 => 683,  1370 => 681,  1358 => 679,  1341 => 678,  1337 => 676,  1319 => 672,  1311 => 671,  1305 => 670,  1298 => 669,  1281 => 668,  1277 => 667,  1268 => 666,  1250 => 665,  1248 => 664,  1238 => 657,  1231 => 652,  1225 => 651,  1223 => 650,  1218 => 648,  1212 => 647,  1203 => 646,  1198 => 645,  1196 => 644,  1187 => 638,  1173 => 627,  1167 => 626,  1161 => 625,  1156 => 623,  1150 => 622,  1144 => 621,  1138 => 618,  1128 => 611,  1122 => 610,  1116 => 609,  1111 => 607,  1105 => 606,  1099 => 605,  1092 => 601,  1088 => 600,  1060 => 579,  1053 => 577,  1045 => 572,  1039 => 571,  1033 => 570,  1028 => 568,  1022 => 567,  1016 => 566,  1010 => 563,  1000 => 556,  994 => 555,  988 => 554,  983 => 552,  977 => 551,  971 => 550,  965 => 547,  955 => 540,  949 => 539,  943 => 538,  938 => 536,  932 => 535,  926 => 534,  920 => 531,  913 => 529,  779 => 398,  775 => 397,  643 => 268,  639 => 267,  627 => 258,  623 => 257,  615 => 254,  602 => 246,  595 => 244,  588 => 240,  582 => 239,  576 => 238,  571 => 236,  565 => 235,  559 => 234,  554 => 232,  548 => 231,  542 => 230,  534 => 225,  530 => 224,  503 => 200,  496 => 196,  487 => 190,  480 => 186,  473 => 181,  467 => 180,  465 => 179,  455 => 172,  445 => 169,  436 => 167,  431 => 166,  426 => 165,  424 => 164,  417 => 160,  413 => 159,  403 => 152,  398 => 150,  391 => 148,  381 => 141,  375 => 140,  369 => 139,  364 => 137,  358 => 136,  352 => 135,  347 => 133,  341 => 132,  335 => 131,  328 => 127,  324 => 126,  317 => 121,  306 => 118,  297 => 116,  293 => 114,  289 => 113,  283 => 110,  279 => 109,  267 => 100,  261 => 99,  255 => 98,  250 => 96,  244 => 95,  238 => 94,  232 => 91,  225 => 86,  219 => 84,  217 => 83,  213 => 82,  208 => 80,  201 => 76,  191 => 69,  184 => 65,  179 => 62,  171 => 58,  169 => 57,  153 => 46,  144 => 41,  124 => 25,  122 => 24,  115 => 20,  112 => 19,  98 => 18,  90 => 16,  82 => 14,  80 => 13,  77 => 12,  75 => 11,  68 => 10,  65 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xds_banners.twig", "");
    }
}
