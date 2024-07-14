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

/* extension/module/xds_recent_reviews.twig */
class __TwigTemplate_8d129ce2dce3fb59ae0a54bb45a93b5aca82379fc3308c59bd60cb896af3ed95 extends \Twig\Template
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h4 class=\"panel-title\">";
        // line 64
        echo ($context["text_edit"] ?? null);
        echo "</h4>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 67
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

          <h4 class=\"block-header\">
            <svg class=\"icon-24\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t<path d=\"M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z\"/>
            </svg>
            ";
        // line 73
        echo ($context["text_settings"] ?? null);
        echo "
          </h4>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 77
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 79
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 80
        if (($context["error_name"] ?? null)) {
            // line 81
            echo "              <small class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</small>
              ";
        }
        // line 83
        echo "            </div>
          </div>
\t\t\t\t\t<hr>
          <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 87
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 90
        if ( !($context["status"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"status\" value=\"0\" ";
        // line 91
        if ( !($context["status"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 92
        echo ($context["text_disabled"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 94
        if (($context["status"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"status\" value=\"1\" ";
        // line 95
        if (($context["status"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 96
        echo ($context["text_enabled"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
          <hr>
          <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 103
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 106
            echo "\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 108);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 108);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 108);
            echo "\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input name=\"title[";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 117
        echo ($context["entry_img_size"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 form-inline\">
              <input type=\"number\" name=\"image_width\" value=\"";
        // line 119
        echo ($context["image_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" class=\"form-control\"> x
              <input type=\"number\" name=\"image_height\" value=\"";
        // line 120
        echo ($context["image_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\"> px
            </div>
          </div>
\t\t\t\t\t<hr>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 126
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 form-inline\">
              <input type=\"number\" name=\"limit\" value=\"";
        // line 128
        echo ($context["limit"] ?? null);
        echo "\" class=\"form-control\">
            </div>
          </div>
          <hr>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 133
        echo ($context["entry_rating"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 form-inline\">
              <!-- <input type=\"number\" name=\"rating\" value=\"";
        // line 135
        echo ($context["rating"] ?? null);
        echo "\" class=\"form-control\"> -->

              <select class=\"form-control\" name=\"rating\">
                ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 139
            echo "                <option value=\"";
            echo $context["i"];
            echo "\" ";
            if ((($context["rating"] ?? null) == $context["i"])) {
                echo " selected";
            }
            echo ">";
            echo $context["i"];
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "              </select>
            </div>
          </div>
          <hr>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 146
        echo ($context["entry_sort"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 form-inline\">
              <select name=\"sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 149
        if ( !($context["sort"] ?? null)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_sort_date"] ?? null);
        echo "</option>
                <option value=\"1\" ";
        // line 150
        if (($context["sort"] ?? null)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_sort_random"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
\t\t\t\t\t<hr>

          <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 157
        echo ($context["entry_items"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"items\" value=\"";
        // line 159
        echo ($context["items"] ?? null);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t";
        // line 165
        echo ($context["entry_items_responsive"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<table id=\"breakpoints\">
\t\t\t\t\t\t\t\t";
        // line 169
        $context["breakpoint_row"] = 1;
        // line 170
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["responsive_item"]) {
            // line 171
            echo "\t\t\t\t\t\t\t\t<tr id=\"breakpoint-";
            echo ($context["breakpoint_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<td><input type=\"number\" name=\"responsive_items[";
            // line 172
            echo ($context["breakpoint_row"] ?? null);
            echo "][breakpoint]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "breakpoint", [], "any", false, false, false, 172);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint"] ?? null);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t<td>&nbsp;⇢&nbsp;</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"number\" name=\"responsive_items[";
            // line 174
            echo ($context["breakpoint_row"] ?? null);
            echo "][amount]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "amount", [], "any", false, false, false, 174);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint_items"] ?? null);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mb-2\" onclick=\"removeBreakpoint('#breakpoint-";
            // line 177
            echo ($context["breakpoint_row"] ?? null);
            echo "')\">
                      <svg class=\"btn-just-icon text-danger\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13H5v-2h14v2z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            // line 184
            $context["breakpoint_row"] = (($context["breakpoint_row"] ?? null) + 1);
            // line 185
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsive_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" onclick=\"addBreakpoint()\">
                <svg class=\"btn-left-icon\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t";
        // line 191
        echo ($context["entry_breakpoint_add"] ?? null);
        echo "
\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tvar breakpoint_row = ";
        // line 196
        echo ($context["breakpoint_row"] ?? null);
        echo ";

\t\t\t\t\t\t\tfunction addBreakpoint() {

\t\t\t\t\t\t\t\tbreakpoint_content  = '<tr id=\"breakpoint-' + breakpoint_row + '\" class=\"new-breakpoint\">';
\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
\t\t\t\t\t\t\t\tbreakpoint_content += '    <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][breakpoint]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 202
        echo ($context["entry_breakpoint"] ?? null);
        echo "\">';
\t\t\t\t\t\t\t\tbreakpoint_content += '  </td>';
\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>&nbsp;⇢&nbsp;</td>';
\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
\t\t\t\t\t\t\t\tbreakpoint_content += '  <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][amount]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 206
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

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
          <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 230
        echo ($context["entry_controls"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default  ";
        // line 233
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"controls[]\" value=\"pagination\" ";
        // line 234
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 235
        echo ($context["text_pagination"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 237
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"controls[]\" value=\"arrows\" ";
        // line 238
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 239
        echo ($context["text_arrows"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
          <div class=\"form-group\">
            <label class=\"col-md-3 control-label\">";
        // line 246
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
            <div class=\"col-md-9\">
              <div class=\"btn-group\" data-toggle=\"buttons\">
                <label class=\"btn btn-default ";
        // line 249
        if ( !($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\" >
                  <input type=\"radio\" name=\"autoplay\" value=\"0\" ";
        // line 250
        if ( !($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
                  <span class=\"on-off\">";
        // line 251
        echo ($context["text_no"] ?? null);
        echo "</span>
                </label>
                <label class=\"btn btn-default ";
        // line 253
        if (($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\">
                  <input type=\"radio\" name=\"autoplay\" value=\"1\" ";
        // line 254
        if (($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
                  <span class=\"on-off\">";
        // line 255
        echo ($context["text_yes"] ?? null);
        echo "</span>
                </label>
              </div>

              <div class=\"h-row-wrapper form-inline\">
                <div id=\"autoplay-speed\" class=\"collapse fade ";
        // line 260
        if (($context["autoplay"] ?? null)) {
            echo "in";
        }
        echo "\">
                  <div class=\"pt-2\">
                    <input type=\"number\" name=\"autoplay_speed\" value=\"";
        // line 262
        echo ($context["autoplay_speed"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_autoplay_speed"] ?? null);
        echo "\" /> ";
        echo ($context["text_ms"] ?? null);
        echo "
                  </div>
                </div>
                <script>
                  \$('[name=autoplay]').parent().click(function(e) {
                    setTimeout( () => {
                      if (\$(this).find('[value=1]').prop('checked')) {
                        \$('#autoplay-speed').collapse('show');
                      } else {
                        \$('#autoplay-speed').collapse('hide');
                      }
                    }, 100)
                  })
                </script>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class=\"panel-footer\">Created by © <a href=\"http://xds.by/\" target=\"_blank\">xds.by</a></div>
    </div>
  </div>
</div>
";
        // line 285
        if (($context["apply_button"] ?? null)) {
            // line 286
            echo "<script type=\"text/javascript\">
\tfunction apply(){
\t\t\$(\".alert\").remove();
\t\t\$.ajax({
\t\t\ttype: \"post\",
\t\t\turl: \$(\"#form-module\").attr('action'),
\t\t\tdata: \$(\"#form-module\").serialize(),
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
\t\t\t\t\t\t\t\t\$('.panel-default').before(\$success);
\t\t\t\t\t\t\t\t\$('body').removeClass('loading');
\t\t\t\t\t\t\t\t\$('.control-btns .btn').removeClass('disabled');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\tvar \$success = \$(html).find('.alert-success, .alert-danger'),
\t\t\t\t\t\t\t\$content = \$(html).find('.panel-default').html();

\t\t\t\t\tif (\$success.length > 0) {
\t\t\t\t\t\t\$('.panel-default').before(\$success);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('.panel-default').html(\$content);
\t\t\t\t\t}

\t\t\t\t\t\$('body').removeClass('loading');
\t\t\t\t\t\$('.control-btns .btn').removeClass('disabled');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
</script>
";
        }
        // line 333
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/xds_recent_reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  716 => 333,  667 => 286,  665 => 285,  635 => 262,  628 => 260,  620 => 255,  614 => 254,  608 => 253,  603 => 251,  597 => 250,  591 => 249,  585 => 246,  575 => 239,  569 => 238,  563 => 237,  558 => 235,  552 => 234,  546 => 233,  540 => 230,  513 => 206,  506 => 202,  497 => 196,  489 => 191,  482 => 186,  476 => 185,  474 => 184,  464 => 177,  454 => 174,  445 => 172,  440 => 171,  435 => 170,  433 => 169,  426 => 165,  417 => 159,  412 => 157,  398 => 150,  390 => 149,  384 => 146,  377 => 141,  362 => 139,  358 => 138,  352 => 135,  347 => 133,  339 => 128,  334 => 126,  323 => 120,  317 => 119,  312 => 117,  306 => 113,  295 => 110,  286 => 108,  282 => 106,  278 => 105,  273 => 103,  263 => 96,  257 => 95,  251 => 94,  246 => 92,  240 => 91,  234 => 90,  228 => 87,  222 => 83,  216 => 81,  214 => 80,  210 => 79,  205 => 77,  198 => 73,  189 => 67,  183 => 64,  179 => 62,  171 => 58,  169 => 57,  153 => 46,  144 => 41,  124 => 25,  122 => 24,  115 => 20,  112 => 19,  98 => 18,  90 => 16,  82 => 14,  80 => 13,  77 => 12,  75 => 11,  68 => 10,  65 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xds_recent_reviews.twig", "");
    }
}
