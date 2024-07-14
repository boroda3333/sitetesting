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

/* extension/module/xds_custom_blocks.twig */
class __TwigTemplate_358384842d073cfa92e1fcc5e606035dd2d77fa65552f6d1ffc9034189ed9254 extends \Twig\Template
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
\t<div class=\"page-header\">
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
        <h3 class=\"panel-title\">";
        // line 64
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 67
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

\t\t\t\t\t<h4 class=\"block-header\">
            <svg class=\"icon-24\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t<path d=\"M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z\"/>
            </svg>
            ";
        // line 73
        echo ($context["text_settings"] ?? null);
        echo "
          </h4>

          <div class=\"form-group\">
            <label class=\"col-lg-3 control-label\" for=\"input-name\">";
        // line 77
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-lg-9\">
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
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-lg-3 control-label\">";
        // line 87
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-lg-9\">
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
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
            <label class=\"col-lg-3 control-label\">";
        // line 103
        echo ($context["blocks_in_row_text"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 form-inline\">


\t\t\t\t\t\t\t<div class=\"input-group mb-2\">
\t\t\t\t\t\t\t  <span class=\"input-group-addon text-monospace\">xs</span>
\t\t\t\t\t\t\t\t<select name=\"columns\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 111
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if ((($context["columns"] ?? null) == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo $context["i"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t              </select>
\t\t\t\t\t\t\t</div> <span class=\"hidden-xs\">&nbsp;</span>

\t\t\t\t\t\t\t<div class=\"input-group mb-2\">
\t\t\t\t\t\t\t  <span class=\"input-group-addon\">sm</span>
\t\t\t\t\t\t\t\t<select name=\"columns_sm\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if ((($context["columns_sm"] ?? null) == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo $context["i"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t              </select>
\t\t\t\t\t\t\t</div> <span class=\"hidden-xs\">&nbsp;</span>

\t\t\t\t\t\t\t<div class=\"input-group mb-2\">
\t\t\t\t\t\t\t  <span class=\"input-group-addon\">md</span>
\t\t\t\t\t\t\t\t<select name=\"columns_md\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 129
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if ((($context["columns_md"] ?? null) == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo $context["i"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t              </select>
\t\t\t\t\t\t\t</div> <span class=\"hidden-xs\">&nbsp;</span>

\t\t\t\t\t\t\t<div class=\"input-group mb-2\">
\t\t\t\t\t\t\t  <span class=\"input-group-addon\">lg</span>
\t\t\t\t\t\t\t\t<select name=\"columns_lg\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if ((($context["columns_lg"] ?? null) == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo $context["i"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "\t              </select>
\t\t\t\t\t\t\t</div> <span class=\"hidden-xs\">&nbsp;</span>

\t\t\t\t\t\t\t<div class=\"input-group mb-2\">
\t\t\t\t\t\t\t  <span class=\"input-group-addon\">xl</span>
\t\t\t\t\t\t\t\t<select name=\"columns_xl\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 147
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if ((($context["columns_xl"] ?? null) == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo $context["i"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t              </select>
\t\t\t\t\t\t\t</div> <span class=\"hidden-xs\">&nbsp;</span>

\t\t\t\t\t\t\t<div class=\"input-group mb-2\">
\t\t\t\t\t\t\t  <span class=\"input-group-addon\">xxl</span>
\t\t\t\t\t\t\t\t<select name=\"columns_xxl\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 156
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $context["i"];
            echo "\" ";
            if ((($context["columns_xxl"] ?? null) == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo $context["i"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t              </select>
\t\t\t\t\t\t\t</div> <span class=\"hidden-xs\">&nbsp;</span>

            </div>
          </div>
\t\t\t\t\t<hr>


\t\t\t\t\t<h4 class=\"block-header\">
            <svg class=\"icon-24\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t<path d=\"M1 5h2v14H1zm4 0h2v14H5zm17 0H10c-.55 0-1 .45-1 1v12c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V6c0-.55-.45-1-1-1zm-1 12H11V7h10v10zm-3.57-4.38l-2 2.57L14 13.47l-2 2.52h8z\"/>
            </svg>
            ";
        // line 170
        echo ($context["text_items"] ?? null);
        echo "
          </h4>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-3 control-label\">
\t\t\t\t\t\t\t<ul id=\"slides-labels\" class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t";
        // line 177
        $context["item_row"] = 1;
        // line 178
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cust_blocks_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cust_blocks_item"]) {
            // line 179
            echo "\t\t\t\t\t\t\t\t<li ";
            if ((($context["item_row"] ?? null) == 1)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#cb-";
            echo ($context["item_row"] ?? null);
            echo "\" data-toggle=\"tab\" class=\"cb-label\">
\t\t\t\t\t\t\t\t\t";
            // line 180
            echo ($context["text_item"] ?? null);
            echo " ";
            echo ($context["item_row"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<svg onclick=\"removeCB('#cb-";
            // line 181
            echo ($context["item_row"] ?? null);
            echo "')\" class=\"btn-just-icon pull-right\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg>
\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t";
            // line 183
            $context["item_row"] = (($context["item_row"] ?? null) + 1);
            // line 184
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cust_blocks_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "\t\t\t\t\t\t\t\t<li class=\"add-new-cb\">
\t\t\t\t\t\t\t\t\t<a href=\"\" onclick=\"addCB();return false\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"btn-left-icon\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t";
        // line 190
        echo ($context["text_add_item"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-9 border-left\">
\t\t\t\t\t\t\t<div class=\"tab-content cb-content-wrapper\">
\t\t\t\t\t\t\t\t";
        // line 197
        $context["item_row"] = 1;
        // line 198
        echo "\t\t\t\t\t\t\t\t";
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
            // line 199
            echo "\t\t\t\t\t\t\t\t<div id=\"cb-";
            echo ($context["item_row"] ?? null);
            echo "\" class=\"cb-content tab-pane";
            if ((($context["item_row"] ?? null) == 1)) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs cb-content-language\" id=\"cb_content_language-";
            // line 200
            echo ($context["item_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 201
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
                // line 202
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 202) == 1)) {
                    echo "active";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#cb_content_language-";
                // line 203
                echo ($context["item_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 203);
                echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 204);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 204);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 204);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 205);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
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
            // line 209
            echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
            // line 212
            echo ($context["entry_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 logo-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image";
            // line 214
            echo ($context["item_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "thumb", [], "any", false, false, false, 214);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"  /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div><textarea placeholder=\"";
            // line 215
            echo ($context["entry_html"] ?? null);
            echo "\" class=\"form-control text-monospace\" name=\"cust_blocks_item[";
            echo ($context["item_row"] ?? null);
            echo "][html]\">";
            echo twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "html", [], "any", false, false, false, 215);
            echo "</textarea></div>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cust_blocks_item[";
            // line 216
            echo ($context["item_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "image", [], "any", false, false, false, 216);
            echo "\" id=\"input-image";
            echo ($context["item_row"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t";
            // line 220
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
                // line 221
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 221) == 1)) {
                    echo "active";
                }
                echo "\" id=\"cb_content_language-";
                echo ($context["item_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 221);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
                // line 223
                echo ($context["entry_title"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
                // line 225
                echo ($context["entry_title"] ?? null);
                echo "\" name=\"cust_blocks_item[";
                echo ($context["item_row"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 225);
                echo "]\" value=\"";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "title", [], "any", false, false, false, 225)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 225)] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
                // line 230
                echo ($context["entry_link"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"cust_blocks_item[";
                // line 232
                echo ($context["item_row"] ?? null);
                echo "][link][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 232);
                echo "]\" value=\"";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "link", [], "any", false, false, false, 232)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 232)] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
                // line 237
                echo ($context["entry_description"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"4\" name=\"cust_blocks_item[";
                // line 239
                echo ($context["item_row"] ?? null);
                echo "][description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 239);
                echo "]\" class=\"form-control\" placeholder=\"";
                echo ($context["placeholder_description"] ?? null);
                echo "\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "description", [], "any", false, false, false, 239)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 239)] ?? null) : null);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
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
            // line 245
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
            // line 247
            echo ($context["entry_sort_order"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 form-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input  class=\"form-control\" type=\"number\" name=\"cust_blocks_item[";
            // line 249
            echo ($context["item_row"] ?? null);
            echo "][sort]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["cust_blocks_item"], "sort", [], "any", false, false, false, 249);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 253
            $context["item_row"] = (($context["item_row"] ?? null) + 1);
            // line 254
            echo "\t\t\t\t\t\t\t\t";
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
        // line 255
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>

\t\t\t\t\t<script>

\t\t\t\t\t\tvar item_row = ";
        // line 263
        echo ($context["item_row"] ?? null);
        echo ";

\t\t\t\t\t\tfunction addCB() {
\t\t\t\t\t\t\tslide_label = '<li>';
\t\t\t\t\t\t\tslide_label += '  <a href=\"#cb-' + item_row + '\" data-toggle=\"tab\" class=\"cb-label new-slide\">';
\t\t\t\t\t\t\tslide_label += '    ";
        // line 268
        echo ($context["text_item"] ?? null);
        echo " ' + item_row;
\t\t\t\t\t\t\tslide_label += '    <svg onclick=\"removeCB(\\'#cb-' + item_row + '\\')\" class=\"btn-just-icon pull-right\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg>';
\t\t\t\t\t\t\tslide_label += '  </a>';
\t\t\t\t\t\t\tslide_label += '</li>';

\t\t\t\t\t\t\tslide_content  = '<div class=\"tab-pane cb-content\" id=\"cb-' + item_row + '\">';
\t\t\t\t\t\t\tslide_content += '  <ul class=\"nav nav-tabs cb-content-language\" id=\"cb_content_language-' + item_row + '\">';
\t\t\t\t\t\t\t";
        // line 275
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
            // line 276
            echo "\t\t\t\t\t\t\tslide_content += '    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 276) == 1)) {
                echo "active";
            }
            echo "\">';
\t\t\t\t\t\t\tslide_content += '      <a href=\"#cb_content_language-' + item_row + '-";
            // line 277
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 277);
            echo "\" data-toggle=\"tab\">';
\t\t\t\t\t\t\tslide_content += '        <img src=\"language/";
            // line 278
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 278);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 278);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 278);
            echo "\">';
\t\t\t\t\t\t\tslide_content += '        ";
            // line 279
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 279);
            echo "';
\t\t\t\t\t\t\tslide_content += '      </a>';
\t\t\t\t\t\t\tslide_content += '    </li>';
\t\t\t\t\t\t\t";
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
        // line 283
        echo "\t\t\t\t\t\t\tslide_content += '  </ul>';
\t\t\t\t\t\t\tslide_content += '  <div class=\"tab-content\">';


\t\t\t\t\t\t\tslide_content +=   `<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
        // line 288
        echo ($context["entry_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 logo-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" id=\"thumb-image` + item_row + `\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 290
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><textarea placeholder=\"";
        // line 291
        echo ($context["entry_html"] ?? null);
        echo "\" class=\"form-control text-monospace\" name=\"cust_blocks_item[` + item_row + `][html]\"></textarea></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cust_blocks_item[` + item_row + `][image]\" value=\"\" id=\"input-image` + item_row + `\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr>`;




\t\t\t\t\t\t\t";
        // line 300
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
            // line 301
            echo "\t\t\t\t\t\t\tslide_content +=   `<div class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 301) == 1)) {
                echo "active";
            }
            echo "\" id=\"cb_content_language-` + item_row + `-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 301);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
            // line 303
            echo ($context["entry_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"cust_blocks_item[` + item_row + `][title][";
            // line 305
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 305);
            echo "]\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
            // line 310
            echo ($context["entry_link"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"cust_blocks_item[` + item_row + `][link][";
            // line 312
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 312);
            echo "]\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
            // line 317
            echo ($context["entry_description"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"4\" name=\"cust_blocks_item[` + item_row + `][description][";
            // line 319
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 319);
            echo "]\" class=\"form-control\" placeholder=\"";
            echo ($context["placeholder_description"] ?? null);
            echo "\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>`;
\t\t\t\t\t\t\t";
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
        // line 325
        echo "
\t\t\t\t\t\t\tslide_content +=   `<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
        // line 327
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 form-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input  class=\"form-control\" type=\"number\" name=\"cust_blocks_item[` + item_row + `][sort]\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>`;



\t\t\t\t\t\t\t\$('.add-new-cb').before(slide_label);
\t\t\t\t\t\t\t\$('.cb-content-wrapper').append(slide_content)

\t\t\t\t\t\t\t\$('a[href = #cb-' + item_row + ']').tab('show');

\t\t\t\t\t\t\titem_row++;
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction removeCB(id) {
\t\t\t\t\t\t\tvar item = \$('a[href=' + id + ']').parent(),
\t\t\t\t\t\t\t\t\tnext = item.next(),
\t\t\t\t\t\t\t\t\tprev = item.prev();

\t\t\t\t\t\t\tif ( item.hasClass('active') ) {

\t\t\t\t\t\t\t\tif ( prev.length > 0 ) {

\t\t\t\t\t\t\t\t\tprev.find('a').tab('show');

\t\t\t\t\t\t\t\t} else if ( next.length > 0 && !next.hasClass('add-new-cb') ) {

\t\t\t\t\t\t\t\t\tnext.find('a').tab('show');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\titem.remove();

\t\t\t\t\t\t\t\$(id).remove();
\t\t\t\t\t\t}
\t\t\t\t\t</script>

        </form>
      </div>
\t\t\t<div class=\"panel-footer\">Created by © <a href=\"http://xds.by/\" target=\"_blank\">xds.by</a></div>
    </div>
  </div>
</div>

<script>
var item_row = ";
        // line 375
        echo ($context["item_row"] ?? null);
        echo ";

function addItem() {
  html  = '<tr id=\"item-row' + item_row + '\">';
\thtml  += '<td class=\"text-left\">#' + (item_row + 1) + '</td>';
\thtml += '<td class=\"text-left\"><a href=\"\" id=\"thumb-image' + item_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 380
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"  /></a><input type=\"hidden\" name=\"cust_blocks_item[' + item_row + '][image]\" value=\"\" id=\"input-image' + item_row + '\" /></td>';
\thtml += '<td class=\"text-left\"><textarea placeholder=\"";
        // line 381
        echo ($context["entry_html"] ?? null);
        echo "\" class=\"form-control\" name=\"cust_blocks_item[' + item_row + '][html]\" rows=\"2\" style=\"font-family:monospace\" ></textarea></td>';
  html += '<td class=\"text-left\">';
\t";
        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 384
            echo "\thtml += '<div class=\"input-group pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 384);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 384);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 384);
            echo "\" /></span>';
\thtml += '<input class=\"form-control\" placeholder=\"";
            // line 385
            echo ($context["entry_title"] ?? null);
            echo "\" type=\"text\" name=\"cust_blocks_item[' + item_row + '][title][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 385);
            echo "]\" value=\"\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "\thtml += '</td>';
\thtml += '<td class=\"text-left\" style=\"width:40%\">';
\t";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 391
            echo "\thtml += '<div class=\"input-group pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 391);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 391);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 391);
            echo "\" /></span>';
\thtml += '<input class=\"form-control\" placeholder=\"";
            // line 392
            echo ($context["entry_description"] ?? null);
            echo "\" type=\"text\" name=\"cust_blocks_item[' + item_row + '][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 392);
            echo "]\" value=\"\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        echo "\thtml += '</td>';
\thtml += '<td class=\"text-left\" style=\"width:30%\">';
\t";
        // line 397
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 398
            echo "\thtml += '<div class=\"input-group pull-left\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 398);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 398);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 398);
            echo "\" /></span>';
\thtml += '<input class=\"form-control\" placeholder=\"";
            // line 399
            echo ($context["entry_link"] ?? null);
            echo "\" type=\"text\" name=\"cust_blocks_item[' + item_row + '][link][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 399);
            echo "]\" value=\"\" />';
\thtml += '</div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "\thtml += '</td>';
\thtml += '<td class=\"text-left\"><input class=\"form-control\" placeholder=\"";
        // line 403
        echo ($context["entry_sort_order"] ?? null);
        echo "\" type=\"number\" name=\"cust_blocks_item[' + item_row + '][sort]\" size=\"1\" value=\"\" /></td>';
\thtml += '<td class=\"text-right\"><a class=\"btn btn-danger\" onclick=\"\$(\\'#item-row' + item_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 404
        echo ($context["button_delete"] ?? null);
        echo "\"><i class=\"fa fa-fw fa-lg fa-trash-o\"></i></a></td>';
\thtml += '</tr>';

\t\$('#items tbody').append(html);;

\titem_row++;
}
</script>

";
        // line 413
        if (($context["apply_button"] ?? null)) {
            // line 414
            echo "<script>
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

\t\t\t\t\t\$('.has-error .text-danger').remove();
\t\t\t\t\t\$('.has-error').removeClass('has-error');
\t\t\t\t\t
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
        // line 465
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/xds_custom_blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1189 => 465,  1136 => 414,  1134 => 413,  1122 => 404,  1118 => 403,  1115 => 402,  1104 => 399,  1095 => 398,  1091 => 397,  1087 => 395,  1076 => 392,  1067 => 391,  1063 => 390,  1059 => 388,  1048 => 385,  1039 => 384,  1035 => 383,  1030 => 381,  1024 => 380,  1016 => 375,  965 => 327,  961 => 325,  939 => 319,  934 => 317,  926 => 312,  921 => 310,  913 => 305,  908 => 303,  898 => 301,  881 => 300,  869 => 291,  863 => 290,  858 => 288,  851 => 283,  833 => 279,  825 => 278,  821 => 277,  814 => 276,  797 => 275,  787 => 268,  779 => 263,  769 => 255,  755 => 254,  753 => 253,  744 => 249,  739 => 247,  735 => 245,  709 => 239,  704 => 237,  692 => 232,  687 => 230,  673 => 225,  668 => 223,  656 => 221,  639 => 220,  628 => 216,  620 => 215,  612 => 214,  607 => 212,  602 => 209,  584 => 205,  576 => 204,  570 => 203,  563 => 202,  546 => 201,  542 => 200,  533 => 199,  515 => 198,  513 => 197,  503 => 190,  496 => 185,  490 => 184,  488 => 183,  483 => 181,  477 => 180,  468 => 179,  463 => 178,  461 => 177,  451 => 170,  437 => 158,  422 => 156,  418 => 155,  410 => 149,  395 => 147,  391 => 146,  383 => 140,  368 => 138,  364 => 137,  356 => 131,  341 => 129,  337 => 128,  329 => 122,  314 => 120,  310 => 119,  302 => 113,  287 => 111,  283 => 110,  273 => 103,  263 => 96,  257 => 95,  251 => 94,  246 => 92,  240 => 91,  234 => 90,  228 => 87,  222 => 83,  216 => 81,  214 => 80,  210 => 79,  205 => 77,  198 => 73,  189 => 67,  183 => 64,  179 => 62,  171 => 58,  169 => 57,  153 => 46,  144 => 41,  124 => 25,  122 => 24,  115 => 20,  112 => 19,  98 => 18,  90 => 16,  82 => 14,  80 => 13,  77 => 12,  75 => 11,  68 => 10,  65 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xds_custom_blocks.twig", "");
    }
}
