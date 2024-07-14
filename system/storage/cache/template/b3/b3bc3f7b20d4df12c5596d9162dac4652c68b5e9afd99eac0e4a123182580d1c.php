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

/* extension/module/xds_products_carousel.twig */
class __TwigTemplate_a0a1c1a1080b8528a0ce0693370a3bcde521a033bb000f32bcbce0b952db89fe extends \Twig\Template
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
        // line 9
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
            // line 10
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 10)) {
                // line 11
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
                echo "\"><i class=\"fa fa-fw fa-home\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "\"></i></a> &nbsp;/&nbsp; </li>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 12
$context["loop"], "last", [], "any", false, false, false, 12)) {
                // line 13
                echo "
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 14
$context["loop"], "revindex", [], "any", false, false, false, 14) == 2)) {
                // line 15
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
                echo "</a> &nbsp;/&nbsp; </li>
            ";
            } else {
                // line 17
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
                echo "</a> &nbsp;/&nbsp; </li>
            ";
            }
            // line 19
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
        // line 20
        echo "          </ul>
          <h1>";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
        <div class=\"col-xs-4 col-lg-2\">
          <div class=\"control-btns text-right mb-3\">
            ";
        // line 25
        if (($context["apply_button"] ?? null)) {
            // line 26
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
        // line 42
        echo "            <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary mb-1\">
              <svg class=\"show\" fill=\"currentColor\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
              \t<path d=\"M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z\"/>
              </svg>
            </button>
            <a href=\"";
        // line 47
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
        // line 58
        if (($context["error_warning"] ?? null)) {
            // line 59
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 63
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h4 class=\"panel-title\">";
        // line 65
        echo ($context["text_edit"] ?? null);
        echo "</h4>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 68
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

\t\t\t\t\t<h4 class=\"block-header\">
            <svg class=\"icon-24\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t<path d=\"M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z\"/>
            </svg>
            ";
        // line 74
        echo ($context["text_settings"] ?? null);
        echo "
          </h4>

\t\t\t\t\t<div class=\"form-group ";
        // line 77
        if (($context["error_name"] ?? null)) {
            echo " has-error ";
        }
        echo "\">
            <label class=\"col-md-3 control-label\" for=\"input-name\">";
        // line 78
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-md-9\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 80
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 81
        if (($context["error_name"] ?? null)) {
            // line 82
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 84
        echo "            </div>
          </div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 88
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 91
        if ( !($context["status"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"status\" value=\"0\" ";
        // line 92
        if ( !($context["status"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 93
        echo ($context["text_disabled"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 95
        if (($context["status"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"status\" value=\"1\" ";
        // line 96
        if (($context["status"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 97
        echo ($context["text_enabled"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 104
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 107
            echo "\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 109);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 109);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 109);
            echo "\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input name=\"title[";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 118
        echo ($context["entry_module_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 121
        if ((($context["module_type"] ?? null) == "featured")) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_type\" value=\"featured\" ";
        // line 122
        if ((($context["module_type"] ?? null) == "featured")) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 123
        echo ($context["entry_featured"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 125
        if ((($context["module_type"] ?? null) == "latest")) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_type\" value=\"latest\" ";
        // line 126
        if ((($context["module_type"] ?? null) == "latest")) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 127
        echo ($context["entry_latest"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 129
        if ((($context["module_type"] ?? null) == "special")) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_type\" value=\"special\" ";
        // line 130
        if ((($context["module_type"] ?? null) == "special")) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 131
        echo ($context["entry_special"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 133
        if ((($context["module_type"] ?? null) == "bestseller")) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_type\" value=\"bestseller\" ";
        // line 134
        if ((($context["module_type"] ?? null) == "bestseller")) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 135
        echo ($context["entry_bestseller"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 137
        if ((($context["module_type"] ?? null) == "viewed")) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_type\" value=\"viewed\" ";
        // line 138
        if ((($context["module_type"] ?? null) == "viewed")) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 139
        echo ($context["entry_viewed"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"featured-products\" class=\"collapse fade ";
        // line 145
        if ((($context["module_type"] ?? null) == "featured")) {
            echo "in";
        }
        echo "\">
\t          <div class=\"form-group\">
\t            <label class=\"col-md-3 control-label\" for=\"input-product\"></label>
\t            <div class=\"col-md-9\">
\t              <input type=\"text\" name=\"product_name\" value=\"\" placeholder=\"";
        // line 149
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
\t              <div id=\"featured-product\" class=\"well well-sm well-autocomplite\">
\t                ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 152
            echo "\t                <div id=\"featured-product";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 152);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"text-danger\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg>
\t\t\t\t\t\t\t\t\t\t";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
            echo "
\t\t\t\t\t\t\t\t\t\t<hr>
\t                  <input type=\"hidden\" name=\"product[]\" value=\"";
            // line 156
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
            echo "\" />
\t                </div>
\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "\t              </div>
\t            </div>
\t          </div>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$('[name=module_type]').parent().click(function () {
\t\t\t\t\t\t\t\tsetTimeout( () => {
\t\t\t\t\t\t\t\t\tif (\$('[value=featured]').prop('checked')) {
\t\t\t\t\t\t\t\t\t\t\$('#featured-products').collapse('show');
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\$('#featured-products').collapse('hide');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}, 100)
\t\t\t\t\t\t\t})
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
            <label class=\"col-md-3 control-label\" for=\"input-limit\">";
        // line 176
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-md-9 form-inline\">
              <input type=\"number\" name=\"limit\" value=\"";
        // line 178
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group ";
        // line 182
        if ((($context["error_width"] ?? null) || ($context["error_height"] ?? null))) {
            echo " has-error ";
        }
        echo "\">
            <label class=\"col-md-3 control-label\" for=\"input-width\">";
        // line 183
        echo ($context["entry_img_size"] ?? null);
        echo "</label>
            <div class=\"col-md-9  form-inline\">
              <input type=\"number\" name=\"width\" value=\"";
        // line 185
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" /> x
\t\t\t\t\t\t\t<input type=\"number\" name=\"height\" value=\"";
        // line 186
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" /> px
              ";
        // line 187
        if (($context["error_width"] ?? null)) {
            // line 188
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 190
        echo "\t\t\t\t\t\t\t";
        if (($context["error_height"] ?? null)) {
            // line 191
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 193
        echo "            </div>
          </div>
\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 198
        echo ($context["entry_hide_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 201
        if ( !($context["hide_out_of_stock_products"] ?? null)) {
            echo " active ";
        }
        echo "\" >
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hide_out_of_stock_products\" value=\"0\" ";
        // line 202
        if ( !($context["hide_out_of_stock_products"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 203
        echo ($context["text_no"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 205
        if (($context["hide_out_of_stock_products"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hide_out_of_stock_products\" value=\"1\" ";
        // line 206
        if (($context["hide_out_of_stock_products"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 207
        echo ($context["text_yes"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 214
        echo ($context["entry_hide_products_noimage"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 217
        if ( !($context["hide_noimage_products"] ?? null)) {
            echo " active ";
        }
        echo "\" >
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hide_noimage_products\" value=\"0\" ";
        // line 218
        if ( !($context["hide_noimage_products"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 219
        echo ($context["text_no"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 221
        if (($context["hide_noimage_products"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hide_noimage_products\" value=\"1\" ";
        // line 222
        if (($context["hide_noimage_products"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 223
        echo ($context["text_yes"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 230
        echo ($context["entry_shufle"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 233
        if ( !($context["shufle_products"] ?? null)) {
            echo " active ";
        }
        echo "\" >
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shufle_products\" value=\"0\" ";
        // line 234
        if ( !($context["shufle_products"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 235
        echo ($context["text_no"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 237
        if (($context["shufle_products"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shufle_products\" value=\"1\" ";
        // line 238
        if (($context["shufle_products"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 239
        echo ($context["text_yes"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 246
        echo ($context["entry_items"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9 form-inline\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"items\" value=\"";
        // line 248
        echo ($context["items"] ?? null);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">
\t\t\t\t\t\t\t";
        // line 255
        echo ($context["entry_items_responsive"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<table id=\"breakpoints\">
\t\t\t\t\t\t\t\t";
        // line 259
        $context["breakpoint_row"] = 1;
        // line 260
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["responsive_item"]) {
            // line 261
            echo "\t\t\t\t\t\t\t\t<tr id=\"breakpoint-";
            echo ($context["breakpoint_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<td><input type=\"number\" name=\"responsive_items[";
            // line 262
            echo ($context["breakpoint_row"] ?? null);
            echo "][breakpoint]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "breakpoint", [], "any", false, false, false, 262);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint"] ?? null);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t<td>&nbsp;⇢&nbsp;</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"number\" name=\"responsive_items[";
            // line 264
            echo ($context["breakpoint_row"] ?? null);
            echo "][amount]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "amount", [], "any", false, false, false, 264);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint_items"] ?? null);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mb-2\" onclick=\"removeBreakpoint('#breakpoint-";
            // line 267
            echo ($context["breakpoint_row"] ?? null);
            echo "')\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"btn-just-icon text-danger\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13H5v-2h14v2z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            // line 274
            $context["breakpoint_row"] = (($context["breakpoint_row"] ?? null) + 1);
            // line 275
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsive_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" onclick=\"addBreakpoint()\">
\t\t\t\t\t\t\t\t<svg class=\"btn-left-icon\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t";
        // line 281
        echo ($context["entry_breakpoint_add"] ?? null);
        echo "
\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tvar breakpoint_row = ";
        // line 286
        echo ($context["breakpoint_row"] ?? null);
        echo ";

\t\t\t\t\t\t\tfunction addBreakpoint() {

\t\t\t\t\t\t\t\tbreakpoint_content  = '<tr id=\"breakpoint-' + breakpoint_row + '\" class=\"new-breakpoint\">';
\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
\t\t\t\t\t\t\t\tbreakpoint_content += '    <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][breakpoint]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 292
        echo ($context["entry_breakpoint"] ?? null);
        echo "\">';
\t\t\t\t\t\t\t\tbreakpoint_content += '  </td>';
\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>&nbsp;⇢&nbsp;</td>';
\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
\t\t\t\t\t\t\t\tbreakpoint_content += '  <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][amount]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 296
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
        // line 320
        echo ($context["entry_controls"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default  ";
        // line 323
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"controls[]\" value=\"pagination\" ";
        // line 324
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 325
        echo ($context["text_pagination"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 327
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"controls[]\" value=\"arrows\" ";
        // line 328
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 329
        echo ($context["text_arrows"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 336
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 339
        if ( !($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\" >
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"0\" ";
        // line 340
        if ( !($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 341
        echo ($context["text_no"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 343
        if (($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"1\" ";
        // line 344
        if (($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 345
        echo ($context["text_yes"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"h-row-wrapper form-inline\">
\t\t\t\t\t\t\t\t<div id=\"autoplay-speed\" class=\"collapse fade ";
        // line 350
        if (($context["autoplay"] ?? null)) {
            echo "in";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"autoplay_speed\" value=\"";
        // line 352
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
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 371
        echo ($context["entry_add_buttons"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 374
        if (twig_in_filter("wishlist", ($context["show_buttons"] ?? null))) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"show_buttons[]\" value=\"wishlist\" ";
        // line 375
        if (twig_in_filter("wishlist", ($context["show_buttons"] ?? null))) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 376
        echo ($context["entry_wishlist"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 378
        if (twig_in_filter("compare", ($context["show_buttons"] ?? null))) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"show_buttons[]\" value=\"compare\" ";
        // line 379
        if (twig_in_filter("compare", ($context["show_buttons"] ?? null))) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 380
        echo ($context["entry_compare"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 382
        if (twig_in_filter("fastorder", ($context["show_buttons"] ?? null))) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"show_buttons[]\" value=\"fastorder\" ";
        // line 383
        if (twig_in_filter("fastorder", ($context["show_buttons"] ?? null))) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 384
        echo ($context["entry_fastorder"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 386
        if (twig_in_filter("qview", ($context["show_buttons"] ?? null))) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"show_buttons[]\" value=\"qview\" ";
        // line 387
        if (twig_in_filter("qview", ($context["show_buttons"] ?? null))) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 388
        echo ($context["entry_qwiev"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"show_buttons[]\" value=\"arr_holder\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        </form>
      </div>
\t\t\t<div class=\"panel-footer\">Created by © <a href=\"http://xds.by/\" target=\"_blank\">xds.by</a></div>
    </div>
  </div>
</div>
<script>
\t\$('input[name=\\'product_name\\']').autocomplete({
\t\tsource: function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 404
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\tselect: function(item) {
\t\t\t\$('input[name=\\'product_name\\']').val('');

\t\t\t\$('#featured-product' + item['value']).remove();

\t\t\t\$('#featured-product').append('<div class=\"new-item\" id=\"featured-product' + item['value'] + '\"><svg class=\"text-danger\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg> ' + item['label'] + '<hr><input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');

\t\t\t\$('#featured-product:last-child').animate({ scrollTop: \$(this).parent().innerHeight() }, 200);
\t\t}
\t});

\t\$('#featured-product').delegate('svg', 'click', function() {
\t\t\$(this).parent().remove();
\t});
</script>
";
        // line 431
        if (($context["apply_button"] ?? null)) {
            // line 432
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
        // line 483
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/xds_products_carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1091 => 483,  1038 => 432,  1036 => 431,  1006 => 404,  987 => 388,  981 => 387,  975 => 386,  970 => 384,  964 => 383,  958 => 382,  953 => 380,  947 => 379,  941 => 378,  936 => 376,  930 => 375,  924 => 374,  918 => 371,  892 => 352,  885 => 350,  877 => 345,  871 => 344,  865 => 343,  860 => 341,  854 => 340,  848 => 339,  842 => 336,  832 => 329,  826 => 328,  820 => 327,  815 => 325,  809 => 324,  803 => 323,  797 => 320,  770 => 296,  763 => 292,  754 => 286,  746 => 281,  739 => 276,  733 => 275,  731 => 274,  721 => 267,  711 => 264,  702 => 262,  697 => 261,  692 => 260,  690 => 259,  683 => 255,  673 => 248,  668 => 246,  658 => 239,  652 => 238,  646 => 237,  641 => 235,  635 => 234,  629 => 233,  623 => 230,  613 => 223,  607 => 222,  601 => 221,  596 => 219,  590 => 218,  584 => 217,  578 => 214,  568 => 207,  562 => 206,  556 => 205,  551 => 203,  545 => 202,  539 => 201,  533 => 198,  526 => 193,  520 => 191,  517 => 190,  511 => 188,  509 => 187,  503 => 186,  497 => 185,  492 => 183,  486 => 182,  477 => 178,  472 => 176,  453 => 159,  444 => 156,  439 => 154,  433 => 152,  429 => 151,  424 => 149,  415 => 145,  406 => 139,  400 => 138,  394 => 137,  389 => 135,  383 => 134,  377 => 133,  372 => 131,  366 => 130,  360 => 129,  355 => 127,  349 => 126,  343 => 125,  338 => 123,  332 => 122,  326 => 121,  320 => 118,  314 => 114,  303 => 111,  294 => 109,  290 => 107,  286 => 106,  281 => 104,  271 => 97,  265 => 96,  259 => 95,  254 => 93,  248 => 92,  242 => 91,  236 => 88,  230 => 84,  224 => 82,  222 => 81,  216 => 80,  211 => 78,  205 => 77,  199 => 74,  190 => 68,  184 => 65,  180 => 63,  172 => 59,  170 => 58,  154 => 47,  145 => 42,  125 => 26,  123 => 25,  116 => 21,  113 => 20,  99 => 19,  91 => 17,  83 => 15,  81 => 14,  78 => 13,  76 => 12,  69 => 11,  66 => 10,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xds_products_carousel.twig", "");
    }
}
