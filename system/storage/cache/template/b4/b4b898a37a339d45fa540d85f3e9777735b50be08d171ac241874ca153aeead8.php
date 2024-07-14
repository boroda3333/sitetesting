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

/* extension/module/xds_category_wall.twig */
class __TwigTemplate_f2a8e173fb4f5ba3447f033e277f41076060d27556a25b3bfa049b1df1a885dc extends \Twig\Template
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
    ";
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

\t\t\t\t\t<h4 class=\"block-header\">
            <svg class=\"icon-24\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t<path d=\"M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z\"/>
            </svg>
            ";
        // line 73
        echo ($context["text_settings"] ?? null);
        echo "
          </h4>

          <div class=\"form-group ";
        // line 76
        if (($context["error_name"] ?? null)) {
            echo " has-error ";
        }
        echo "\">
            <label class=\"col-md-3 control-label\" for=\"input-name\">";
        // line 77
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-md-9\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 79
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 80
        if (($context["error_name"] ?? null)) {
            // line 81
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 83
        echo "            </div>
          </div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 87
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
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
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 105
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 108
            echo "\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 110);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 110);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 110);
            echo "\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input name=\"title[";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>


          <div class=\"form-group\">
            <label class=\"col-md-3 control-label\" for=\"input-category\">";
        // line 121
        echo ($context["entry_category"] ?? null);
        echo "</label>
            <div class=\"col-md-9\">
              <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 123
        echo ($context["help_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
              <div id=\"category\" class=\"well well-sm well-autocomplite\">
                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 126
            echo "                <div id=\"category";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 126);
            echo "\">
\t\t\t\t\t\t\t\t\t<svg class=\"text-danger\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg>
\t\t\t\t\t\t\t\t\t";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 128);
            echo "
\t\t\t\t\t\t\t\t\t<hr>
                  <input type=\"hidden\" name=\"category[]\" value=\"";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 130);
            echo "\" />
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "</div>
            </div>
          </div>
          <hr>


          <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 139
        echo ($context["entry_click_action"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group_\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 142
        if ( !($context["click_action"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"click_action\" value=\"0\" ";
        // line 143
        if ( !($context["click_action"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 144
        echo ($context["text_click_action_link"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 146
        if (($context["click_action"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"click_action\" value=\"1\" ";
        // line 147
        if (($context["click_action"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 148
        echo ($context["text_click_action_sub"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>

          <div id=\"sub-cat-limit\" class=\"collapse fade ";
        // line 155
        if ((($context["click_action"] ?? null) == "1")) {
            echo "in";
        }
        echo "\">
            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\" for=\"input-limit\">";
        // line 157
        echo ($context["entry_limit"] ?? null);
        echo "</label>
              <div class=\"col-md-9 form-inline\">
                <input type=\"number\" name=\"limit\" value=\"";
        // line 159
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
              </div>
            </div>
            <hr>
            <script>
              \$('[name=click_action]').parent().click(function () {
                setTimeout( () => {
                  if (\$('[name=click_action][value=1]').prop('checked')) {
                    \$('#sub-cat-limit').collapse('show');
                  } else {
                    \$('#sub-cat-limit').collapse('hide');
                  }
                }, 100)
              })
            </script>
          </div>



\t\t\t\t\t<div class=\"form-group ";
        // line 178
        if ((($context["error_width"] ?? null) || ($context["error_height"] ?? null))) {
            echo " has-error ";
        }
        echo "\">
            <label class=\"col-md-3 control-label\" for=\"input-width\">";
        // line 179
        echo ($context["entry_img_size"] ?? null);
        echo "</label>
            <div class=\"col-md-9  form-inline\">
              <input type=\"number\" name=\"width\" value=\"";
        // line 181
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" /> x
\t\t\t\t\t\t\t<input type=\"number\" name=\"height\" value=\"";
        // line 182
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" /> px
              ";
        // line 183
        if (($context["error_width"] ?? null)) {
            // line 184
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 186
        echo "\t\t\t\t\t\t\t";
        if (($context["error_height"] ?? null)) {
            // line 187
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 189
        echo "            </div>
          </div>
\t\t\t\t\t<hr>


          <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 195
        echo ($context["entry_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group_\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 198
        if ( !($context["type"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type\" value=\"0\" ";
        // line 199
        if ( !($context["type"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 200
        echo ($context["text_type_carousel"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 202
        if (($context["type"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type\" value=\"1\" ";
        // line 203
        if (($context["type"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 204
        echo ($context["text_type_wall"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>

          <div id=\"carousel-settings\" class=\"collapse fade ";
        // line 211
        if ((($context["type"] ?? null) == "0")) {
            echo "in";
        }
        echo "\">

            <div class=\"form-group\">
  \t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 214
        echo ($context["entry_items"] ?? null);
        echo "</label>
  \t\t\t\t\t\t<div class=\"col-md-9 form-inline\">
  \t\t\t\t\t\t\t<input type=\"number\" name=\"items\" value=\"";
        // line 216
        echo ($context["items"] ?? null);
        echo "\" class=\"form-control\">
  \t\t\t\t\t\t</div>
  \t\t\t\t\t</div>
  \t\t\t\t\t<hr>

  \t\t\t\t\t<div class=\"form-group\">
  \t\t\t\t\t\t<label class=\"col-md-3 control-label\">
  \t\t\t\t\t\t\t";
        // line 223
        echo ($context["entry_items_responsive"] ?? null);
        echo "
  \t\t\t\t\t\t</label>
  \t\t\t\t\t\t<div class=\"col-md-9\">
  \t\t\t\t\t\t\t<table id=\"breakpoints\">
  \t\t\t\t\t\t\t\t";
        // line 227
        $context["breakpoint_row"] = 1;
        // line 228
        echo "  \t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["responsive_item"]) {
            // line 229
            echo "  \t\t\t\t\t\t\t\t<tr id=\"breakpoint-";
            echo ($context["breakpoint_row"] ?? null);
            echo "\">
  \t\t\t\t\t\t\t\t\t<td><input type=\"number\" name=\"responsive_items[";
            // line 230
            echo ($context["breakpoint_row"] ?? null);
            echo "][breakpoint]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "breakpoint", [], "any", false, false, false, 230);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint"] ?? null);
            echo "\"></td>
  \t\t\t\t\t\t\t\t\t<td>&nbsp;⇢&nbsp;</td>
  \t\t\t\t\t\t\t\t\t<td><input type=\"number\" name=\"responsive_items[";
            // line 232
            echo ($context["breakpoint_row"] ?? null);
            echo "][amount]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "amount", [], "any", false, false, false, 232);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint_items"] ?? null);
            echo "\"></td>
  \t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
  \t\t\t\t\t\t\t\t\t<td>
  \t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mb-2\" onclick=\"removeBreakpoint('#breakpoint-";
            // line 235
            echo ($context["breakpoint_row"] ?? null);
            echo "')\">
  \t\t\t\t\t\t\t\t\t\t\t<svg class=\"btn-just-icon text-danger\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13H5v-2h14v2z\"/>
  \t\t\t\t\t\t\t\t\t\t\t</svg>
  \t\t\t\t\t\t\t\t\t\t</button>
  \t\t\t\t\t\t\t\t\t</td>
  \t\t\t\t\t\t\t\t</tr>
  \t\t\t\t\t\t\t\t";
            // line 242
            $context["breakpoint_row"] = (($context["breakpoint_row"] ?? null) + 1);
            // line 243
            echo "  \t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsive_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "  \t\t\t\t\t\t\t</table>
  \t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" onclick=\"addBreakpoint()\">
  \t\t\t\t\t\t\t\t<svg class=\"btn-left-icon\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
  \t\t\t\t\t\t\t\t</svg>
  \t\t\t\t\t\t\t\t";
        // line 249
        echo ($context["entry_breakpoint_add"] ?? null);
        echo "
  \t\t\t\t\t\t\t</button>


  \t\t\t\t\t\t\t<script>
  \t\t\t\t\t\t\tvar breakpoint_row = ";
        // line 254
        echo ($context["breakpoint_row"] ?? null);
        echo ";

  \t\t\t\t\t\t\tfunction addBreakpoint() {

  \t\t\t\t\t\t\t\tbreakpoint_content  = '<tr id=\"breakpoint-' + breakpoint_row + '\" class=\"new-breakpoint\">';
  \t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
  \t\t\t\t\t\t\t\tbreakpoint_content += '    <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][breakpoint]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 260
        echo ($context["entry_breakpoint"] ?? null);
        echo "\">';
  \t\t\t\t\t\t\t\tbreakpoint_content += '  </td>';
  \t\t\t\t\t\t\t\tbreakpoint_content += '  <td>&nbsp;⇢&nbsp;</td>';
  \t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
  \t\t\t\t\t\t\t\tbreakpoint_content += '  <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][amount]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 264
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
  \t\t\t\t\t<div class=\"form-group\">
  \t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 288
        echo ($context["entry_controls"] ?? null);
        echo "</label>
  \t\t\t\t\t\t<div class=\"col-md-9\">
  \t\t\t\t\t\t\t<div class=\"\" data-toggle=\"buttons\">
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default  ";
        // line 291
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo " active";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"controls[]\" value=\"pagination\" ";
        // line 292
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t";
        // line 293
        echo ($context["text_pagination"] ?? null);
        echo "
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 295
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "active";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"controls[]\" value=\"arrows\" ";
        // line 296
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t";
        // line 297
        echo ($context["text_arrows"] ?? null);
        echo "
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t</div>
  \t\t\t\t\t<hr>
  \t\t\t\t\t<div class=\"form-group\">
  \t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 304
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
  \t\t\t\t\t\t<div class=\"col-md-9\">
  \t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 307
        if ( !($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\" >
  \t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"0\" ";
        // line 308
        if ( !($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 309
        echo ($context["text_no"] ?? null);
        echo "</span>
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 311
        if (($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"1\" ";
        // line 312
        if (($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
  \t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 313
        echo ($context["text_yes"] ?? null);
        echo "</span>
  \t\t\t\t\t\t\t\t</label>
  \t\t\t\t\t\t\t</div>

  \t\t\t\t\t\t\t<div class=\"h-row-wrapper form-inline\">
  \t\t\t\t\t\t\t\t<div id=\"autoplay-speed\" class=\"collapse fade ";
        // line 318
        if (($context["autoplay"] ?? null)) {
            echo "in";
        }
        echo "\">
  \t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
  \t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"autoplay_speed\" value=\"";
        // line 320
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

            <script>
              \$('[name=type]').parent().click(function () {
                setTimeout( () => {
                  if (\$('[name=type][value=0]').prop('checked')) {
                    \$('#carousel-settings').collapse('show');
                  } else {
                    \$('#carousel-settings').collapse('hide');
                  }
                }, 100)
              })
            </script>
          </div>


        </form>
      </div>
\t\t\t<div class=\"panel-footer\">Created by © <a href=\"http://xds.by/\" target=\"_blank\">xds.by</a></div>
\t\t</div>
  </div>
</div>

<script>
  // Category
  \$('input[name=\\'category\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 364
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['category_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'category\\']').val('');

      \$('#category' + item['value']).remove();

      \$('#category').append('<div class=\"new-item\" id=\"category' + item['value'] + '\"><svg class=\"text-danger\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg> ' + item['label'] + '<hr><input type=\"hidden\" name=\"category[]\" value=\"' + item['value'] + '\" /></div>');

\t\t\t\$('#category:last-child').animate({ scrollTop: \$(this).parent().innerHeight() }, 200);
    }
  });

  \$('#category').delegate('svg', 'click', function() {
    \$(this).parent().remove();
  });
</script>

";
        // line 392
        if (($context["apply_button"] ?? null)) {
            // line 393
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

\t\t\t\t\t\$('.has-error .text-danger').remove();
\t\t\t\t\t\$('.has-error').removeClass('has-error');

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
        // line 445
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/xds_category_wall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  910 => 445,  856 => 393,  854 => 392,  823 => 364,  772 => 320,  765 => 318,  757 => 313,  751 => 312,  745 => 311,  740 => 309,  734 => 308,  728 => 307,  722 => 304,  712 => 297,  706 => 296,  700 => 295,  695 => 293,  689 => 292,  683 => 291,  677 => 288,  650 => 264,  643 => 260,  634 => 254,  626 => 249,  619 => 244,  613 => 243,  611 => 242,  601 => 235,  591 => 232,  582 => 230,  577 => 229,  572 => 228,  570 => 227,  563 => 223,  553 => 216,  548 => 214,  540 => 211,  530 => 204,  524 => 203,  518 => 202,  513 => 200,  507 => 199,  501 => 198,  495 => 195,  487 => 189,  481 => 187,  478 => 186,  472 => 184,  470 => 183,  464 => 182,  458 => 181,  453 => 179,  447 => 178,  423 => 159,  418 => 157,  411 => 155,  401 => 148,  395 => 147,  389 => 146,  384 => 144,  378 => 143,  372 => 142,  366 => 139,  357 => 132,  348 => 130,  343 => 128,  337 => 126,  333 => 125,  328 => 123,  323 => 121,  315 => 115,  304 => 112,  295 => 110,  291 => 108,  287 => 107,  282 => 105,  270 => 96,  264 => 95,  258 => 94,  253 => 92,  247 => 91,  241 => 90,  235 => 87,  229 => 83,  223 => 81,  221 => 80,  215 => 79,  210 => 77,  204 => 76,  198 => 73,  189 => 67,  183 => 64,  179 => 62,  171 => 58,  169 => 57,  153 => 46,  144 => 41,  124 => 25,  122 => 24,  115 => 20,  112 => 19,  98 => 18,  90 => 16,  82 => 14,  80 => 13,  77 => 12,  75 => 11,  68 => 10,  65 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xds_category_wall.twig", "");
    }
}
