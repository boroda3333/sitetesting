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

/* extension/module/xds_news_carousel.twig */
class __TwigTemplate_71a53798bef02160bf06cd9f836a8e7718144337758c8fd02f69a9cb12da0d6b extends \Twig\Template
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
        echo "    <div class=\"panel panel-default \">
      <div class=\"panel-heading\">
        <h4 class=\"panel-title\">";
        // line 65
        echo ($context["text_edit"] ?? null);
        echo "</h4>
      </div>
      <div class=\"panel-body\">
\t\t\t\t";
        // line 68
        if ( !($context["is_blog"] ?? null)) {
            // line 69
            echo "\t\t\t\t<div class=\"alert alert-info text-center\" style=\"margin:0\">
\t\t\t\t\t<br><br><br>";
            // line 70
            echo ($context["ocstore_alert"] ?? null);
            echo "<br><br><br>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 73
        echo "        <form ";
        if ( !($context["is_blog"] ?? null)) {
            echo "class=\"hidden\"";
        }
        echo " action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

\t\t\t\t\t<h4 class=\"block-header\">
            <svg class=\"icon-24\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t<path d=\"M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z\"/>
            </svg>
            ";
        // line 79
        echo ($context["text_settings"] ?? null);
        echo "
          </h4>

\t\t\t\t\t<div class=\"form-group ";
        // line 82
        if (($context["error_name"] ?? null)) {
            echo " has-error ";
        }
        echo "\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 83
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 85
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 86
        if (($context["error_name"] ?? null)) {
            // line 87
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 89
        echo "            </div>
          </div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 93
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 96
        if ( !($context["status"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"status\" value=\"0\" ";
        // line 97
        if ( !($context["status"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 98
        echo ($context["text_disabled"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 100
        if (($context["status"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"status\" value=\"1\" ";
        // line 101
        if (($context["status"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 102
        echo ($context["text_enabled"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 109
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 112
            echo "\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<img src=\"language/";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 114);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 114);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 114);
            echo "\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input name=\"title[";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 123
        echo ($context["entry_module_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 126
        if ((($context["module_type"] ?? null) == "latest")) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_type\" value=\"latest\" ";
        // line 127
        if ((($context["module_type"] ?? null) == "latest")) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 128
        echo ($context["entry_latest"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default mb-2 ";
        // line 130
        if ((($context["module_type"] ?? null) == "featured")) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_type\" value=\"featured\" ";
        // line 131
        if ((($context["module_type"] ?? null) == "featured")) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span>";
        // line 132
        echo ($context["entry_featured"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div id=\"featured-articles\" class=\"collapse fade ";
        // line 139
        if ((($context["module_type"] ?? null) == "featured")) {
            echo "in";
        }
        echo "\">
\t          <div class=\"form-group\">
\t            <label class=\"col-sm-3 control-label\" for=\"input-article\"></label>
\t            <div class=\"col-sm-9\">
\t              <input type=\"text\" name=\"article_name\" value=\"\" placeholder=\"";
        // line 143
        echo ($context["entry_article"] ?? null);
        echo "\" id=\"input-article\" class=\"form-control\" />
\t              <div id=\"blog_featured-article\" class=\"well well-sm well-autocomplite\">
\t                ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 146
            echo "\t                <div id=\"blog_featured-article";
            echo twig_get_attribute($this->env, $this->source, $context["article"], "article_id", [], "any", false, false, false, 146);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"text-danger\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg>
\t\t\t\t\t\t\t\t\t\t";
            // line 148
            echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 148);
            echo "
\t\t\t\t\t\t\t\t\t\t<hr>
\t                  <input type=\"hidden\" name=\"article[]\" value=\"";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["article"], "article_id", [], "any", false, false, false, 150);
            echo "\" />
\t                </div>
\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "\t              </div>
\t            </div>
\t          </div>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$('[name=module_type]').parent().click(function () {
\t\t\t\t\t\t\t\tsetTimeout( () => {
\t\t\t\t\t\t\t\t\tif (\$('[value=featured]').prop('checked')) {
\t\t\t\t\t\t\t\t\t\t\$('#featured-articles').collapse('show');
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\$('#featured-articles').collapse('hide');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}, 100)
\t\t\t\t\t\t\t})
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-limit\">";
        // line 170
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 form-inline\">
              <input type=\"number\" name=\"limit\" value=\"";
        // line 172
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group ";
        // line 176
        if ((($context["error_width"] ?? null) || ($context["error_height"] ?? null))) {
            echo " has-error ";
        }
        echo "\">
            <label class=\"col-sm-3 control-label\" for=\"input-width\">";
        // line 177
        echo ($context["entry_img_size"] ?? null);
        echo "</label>
            <div class=\"col-sm-9  form-inline\">
              <input type=\"number\" name=\"width\" value=\"";
        // line 179
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" /> x
\t\t\t\t\t\t\t<input type=\"number\" name=\"height\" value=\"";
        // line 180
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" /> px
              ";
        // line 181
        if (($context["error_width"] ?? null)) {
            // line 182
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 184
        echo "\t\t\t\t\t\t\t";
        if (($context["error_height"] ?? null)) {
            // line 185
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 187
        echo "            </div>
          </div>
\t\t\t\t\t<hr>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 193
        echo ($context["entry_items"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9 form-inline\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"items\" value=\"";
        // line 195
        echo ($context["items"] ?? null);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t";
        // line 201
        echo ($context["entry_items_responsive"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<table id=\"breakpoints\">
\t\t\t\t\t\t\t\t";
        // line 205
        $context["breakpoint_row"] = 1;
        // line 206
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["responsive_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["responsive_item"]) {
            // line 207
            echo "\t\t\t\t\t\t\t\t<tr id=\"breakpoint-";
            echo ($context["breakpoint_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<td><input type=\"number\" name=\"responsive_items[";
            // line 208
            echo ($context["breakpoint_row"] ?? null);
            echo "][breakpoint]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "breakpoint", [], "any", false, false, false, 208);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint"] ?? null);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t<td>&nbsp;⇢&nbsp;</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"number\" name=\"responsive_items[";
            // line 210
            echo ($context["breakpoint_row"] ?? null);
            echo "][amount]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["responsive_item"], "amount", [], "any", false, false, false, 210);
            echo "\" class=\"form-control mb-2\" placeholder=\"";
            echo ($context["entry_breakpoint_items"] ?? null);
            echo "\"></td>
\t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default mb-2\" onclick=\"removeBreakpoint('#breakpoint-";
            // line 213
            echo ($context["breakpoint_row"] ?? null);
            echo "')\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"btn-just-icon text-danger\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19 13H5v-2h14v2z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            // line 220
            $context["breakpoint_row"] = (($context["breakpoint_row"] ?? null) + 1);
            // line 221
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['responsive_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" onclick=\"addBreakpoint()\">
\t\t\t\t\t\t\t\t<svg class=\"btn-left-icon\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t";
        // line 227
        echo ($context["entry_breakpoint_add"] ?? null);
        echo "
\t\t\t\t\t\t\t</button>


\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\tvar breakpoint_row = ";
        // line 232
        echo ($context["breakpoint_row"] ?? null);
        echo ";

\t\t\t\t\t\t\t\tfunction addBreakpoint() {

\t\t\t\t\t\t\t\t\tbreakpoint_content  = '<tr id=\"breakpoint-' + breakpoint_row + '\"  class=\"new-breakpoint\">';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '    <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][breakpoint]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 238
        echo ($context["entry_breakpoint"] ?? null);
        echo "\">';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '  </td>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>&nbsp;⇢&nbsp;</td>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '  <input type=\"number\" name=\"responsive_items[' + breakpoint_row + '][amount]\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 242
        echo ($context["entry_breakpoint_items"] ?? null);
        echo "\">';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '  </td>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>&nbsp;</td>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '  <td>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '    <button type=\"button\" class=\"btn btn-default mb-2\" onclick=\"removeBreakpoint(\\'#breakpoint-' + breakpoint_row + '\\')\">';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '      <svg class=\"btn-just-icon text-danger\" width=\"18\" height=\"18\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M19 13H5v-2h14v2z\"/></svg>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '    </button>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '  </td>';
\t\t\t\t\t\t\t\t\tbreakpoint_content += '</tr>';

\t\t\t\t\t\t\t\t\t\$('#breakpoints').append(breakpoint_content)

\t\t\t\t\t\t\t\t\tbreakpoint_row++;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tfunction removeBreakpoint(id) {
\t\t\t\t\t\t\t\t\t\$(id).remove();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 267
        echo ($context["entry_controls"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default  ";
        // line 270
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"controls[]\" value=\"pagination\" ";
        // line 271
        if (twig_in_filter("pagination", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 272
        echo ($context["text_pagination"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 274
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"controls[]\" value=\"arrows\" ";
        // line 275
        if (twig_in_filter("arrows", ($context["controls"] ?? null))) {
            echo "checked";
        }
        echo ">
\t\t\t\t\t\t\t\t\t";
        // line 276
        echo ($context["text_arrows"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-3 control-label\">";
        // line 283
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 286
        if ( !($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\" >
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"0\" ";
        // line 287
        if ( !($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 288
        echo ($context["text_no"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"btn btn-default ";
        // line 290
        if (($context["autoplay"] ?? null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"1\" ";
        // line 291
        if (($context["autoplay"] ?? null)) {
            echo " checked ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<span class=\"on-off\">";
        // line 292
        echo ($context["text_yes"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"h-row-wrapper form-inline\">
\t\t\t\t\t\t\t\t<div id=\"autoplay-speed\" class=\"collapse fade ";
        // line 297
        if (($context["autoplay"] ?? null)) {
            echo "in";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"pt-2\">
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"autoplay_speed\" value=\"";
        // line 299
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
        </form>
      </div>
\t\t\t<div class=\"panel-footer\">Created by © <a href=\"http://xds.by/\" target=\"_blank\">xds.by</a></div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
  \$('input[name=\\'article_name\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=blog/article/autocomplete&user_token=";
        // line 326
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['article_id']
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'article_name\\']').val('');

    \$('#blog_featured-article' + item['value']).remove();

    \$('#blog_featured-article').append('<div class=\"new-item\" id=\"blog_featured-article' + item['value'] + '\"><svg class=\"text-danger\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z\"/></svg> ' + item['label'] + '<hr><input type=\"hidden\" name=\"article[]\" value=\"' + item['value'] + '\" /></div>');

\t\t\$('#blog_featured-article:last-child').animate({ scrollTop: \$(this).parent().innerHeight() }, 200);
  }
  });

  \$('#blog_featured-article').delegate('svg', 'click', function() {
  \$(this).parent().remove();
  });
</script>
";
        // line 353
        if (($context["apply_button"] ?? null)) {
            // line 354
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
        // line 404
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/xds_news_carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  842 => 404,  790 => 354,  788 => 353,  758 => 326,  724 => 299,  717 => 297,  709 => 292,  703 => 291,  697 => 290,  692 => 288,  686 => 287,  680 => 286,  674 => 283,  664 => 276,  658 => 275,  652 => 274,  647 => 272,  641 => 271,  635 => 270,  629 => 267,  601 => 242,  594 => 238,  585 => 232,  577 => 227,  570 => 222,  564 => 221,  562 => 220,  552 => 213,  542 => 210,  533 => 208,  528 => 207,  523 => 206,  521 => 205,  514 => 201,  505 => 195,  500 => 193,  492 => 187,  486 => 185,  483 => 184,  477 => 182,  475 => 181,  469 => 180,  463 => 179,  458 => 177,  452 => 176,  443 => 172,  438 => 170,  419 => 153,  410 => 150,  405 => 148,  399 => 146,  395 => 145,  390 => 143,  381 => 139,  371 => 132,  365 => 131,  359 => 130,  354 => 128,  348 => 127,  342 => 126,  336 => 123,  330 => 119,  319 => 116,  310 => 114,  306 => 112,  302 => 111,  297 => 109,  287 => 102,  281 => 101,  275 => 100,  270 => 98,  264 => 97,  258 => 96,  252 => 93,  246 => 89,  240 => 87,  238 => 86,  232 => 85,  227 => 83,  221 => 82,  215 => 79,  201 => 73,  195 => 70,  192 => 69,  190 => 68,  184 => 65,  180 => 63,  172 => 59,  170 => 58,  154 => 47,  145 => 42,  125 => 26,  123 => 25,  116 => 21,  113 => 20,  99 => 19,  91 => 17,  83 => 15,  81 => 14,  78 => 13,  76 => 12,  69 => 11,  66 => 10,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xds_news_carousel.twig", "");
    }
}
