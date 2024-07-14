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

/* ft_frame/template/extension/module/frametheme/ft_search.twig */
class __TwigTemplate_4293533a97aea235fc3f6715bbc57fd349f5668af2e8a491af365f9d8dabc435 extends \Twig\Template
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
        echo "<div id=\"ftSearch\" class=\"position-relative\">
\t<div class=\"input-group border border-current text-gray-400 rounded bg-white\">
\t\t";
        // line 3
        if (($context["categories"] ?? null)) {
            // line 4
            echo "\t\t<div class=\"input-group-prepend\">
\t\t\t<button class=\"btn btn-light border-top-0 border-bottom-0 border-left-0 border-right dropdown-toggle select-button py-2 px-3 pr-md-2\" type=\"button\" data-toggle=\"dropdown\">
\t\t\t\t<span class=\"row no-gutters align-items-center m-1\">
\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t<span class=\"select-text d-none d-md-block float-left text-truncate mr-1\">";
            // line 8
            echo ($context["category_name"] ?? null);
            echo "</span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"col-auto\">
\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 text-secondary darker-on-hover\" viewBox=\"0 0 24 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t</button>
\t\t\t<div class=\"select-list dropdown-menu \">
\t\t\t\t<span class=\"dropdown-item cursor-pointer";
            // line 18
            if ((($context["category_name"] ?? null) == ($context["text_anywhere"] ?? null))) {
                echo " active";
            }
            echo "\" data-category=\"0\">";
            echo ($context["text_anywhere"] ?? null);
            echo "</span>
\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 20
                echo "\t\t\t\t<span class=\"dropdown-item cursor-pointer";
                if ((($context["category_name"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20))) {
                    echo " active";
                }
                echo "\" data-category=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 20);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
                echo "</span>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t<input type=\"search\" name=\"search\" value=\"";
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control border-left border-0 bg-transparent h-auto text-center text-md-left\" autocomplete=\"off\">
\t\t<input type=\"hidden\" name=\"category_id\" value=\"";
        // line 26
        echo ($context["category_id"] ?? null);
        echo "\" />
    ";
        // line 27
        if (($context["subcat_search"] ?? null)) {
            // line 28
            echo "    <input type=\"hidden\" name=\"sub_category\" value=\"true\">
    ";
        }
        // line 30
        echo "    ";
        if (($context["description_search"] ?? null)) {
            // line 31
            echo "    <input type=\"hidden\" name=\"description\" value=\"true\">
    ";
        }
        // line 33
        echo "\t\t<div class=\"input-group-append\">
\t\t\t<button type=\"button\" class=\"search-button btn btn-light border-top-0 border-bottom-0 border-right-0 border-left py-2 px-3\">
\t\t\t\t<span class=\"d-blok my-1\">
\t\t\t\t\t<svg class=\"d-block ft-icon-24 text-secondary darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path d=\"M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z\"/>
\t\t\t\t\t</svg>
\t\t\t\t</span>
\t\t\t</button>
\t\t</div>
\t</div>
\t";
        // line 43
        if (($context["livesearch_toggle"] ?? null)) {
            // line 44
            echo "\t<div class=\"dropdown w-100\"><div class=\"livesearch dropdown-menu p-0 border w-100\"></div></div>
\t";
        }
        // line 46
        echo "</div>
";
        // line 47
        if (($context["livesearch_toggle"] ?? null)) {
            // line 48
            if (($context["mask"] ?? null)) {
                // line 49
                echo "<div class=\"search-backdrop ft-backdrop bg-black position-fixed t-0 l-0\"></div>
";
            }
            // line 51
            echo "<!--noindex-->
<!--googleoff: all-->
<template id=\"ftLivesearchResults\">
\t<a class=\"product dropdown-item text-wrap border-bottom border-gray-150 py-2\" href=\"\">
\t\t<span class=\"row no-gutters\">
\t\t\t<span class=\"col-auto\">
\t\t\t\t<span class=\"d-block position-relative overflow-hidden border rounded my-1 mr-4\">
\t\t\t\t\t<svg width=\"50px\" height=\"50px\" class=\"d-block\" viewBox=\"0 0 1 1\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
\t\t\t\t\t<img src=\"\" srcset=\"\" alt=\"\" class=\"image d-block position-absolute t-0 l-0\">
\t\t\t\t</span>
\t\t\t</span>
\t\t\t<span class=\"col\">
\t\t\t\t<span class=\"name d-block\"></span>
\t\t\t\t";
            // line 64
            if (($context["show_description"] ?? null)) {
                // line 65
                echo "\t\t\t\t<small class=\"description d-block\"></small>
\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t<span class=\"d-block\">
\t\t\t\t\t<s class=\"special text-danger mr-2\"></s>
\t\t\t\t\t<span class=\"price text-dark mr-2\"></span>
\t\t\t\t</span>
\t\t\t</span>
\t\t</span>
\t</a>
\t<a class=\"link-all dropdown-item text-wrap text-center result-text\" href=\"\">
\t\t<small class=\"d-block py-1\">
\t\t";
            // line 76
            echo ($context["text_all_results"] ?? null);
            echo " (<span class=\"count\"></span>)
\t\t</small>
\t</a>
\t<span class=\"spinner dropdown-item disabled text-center p-3\">
\t\t<span class=\"d-block spinner-border text-gray-300 mx-auto\"></span>
\t</span>
\t<span class=\"message dropdown-item text-wrap text-center disabled py-3 my-1\">
\t\t<span class=\"error\">";
            // line 83
            echo ($context["text_connection_error"] ?? null);
            echo "</span>
\t\t<span class=\"not-found\">";
            // line 84
            echo ($context["text_no_results"] ?? null);
            echo "</span>
\t</span>
</template>
<!--/googleoff: all-->
<!--/noindex-->
";
        }
        // line 90
        echo "
<script>

\twindow.addEventListener('DOMContentLoaded', function(e) {

\t\tvar btn_search = document.querySelector('#ftSearch .search-button');

\t\tif (btn_search != null) {

\t\t\tbtn_search.addEventListener('click', function(e) {
\t\t\t\tif (typeof ftSearch !== 'undefined' && typeof ftSearch.search == 'function') {
\t\t\t\t\tftSearch.search(btn_search)
\t\t\t\t}
\t\t\t});

\t\t}

\t\tvar caregories_selects = document.querySelectorAll('#ftSearch .select-list .dropdown-item');

\t\tif (caregories_selects != null) {

\t\t\tcaregories_selects.forEach(function(item, i) {

\t\t\t\tvar category_id = item.getAttribute('data-category');

\t\t\t\titem.addEventListener('click', function(e) {
\t\t\t\t\tif (typeof ftSearch !== 'undefined' && typeof ftSearch.category_select == 'function') {
\t\t\t\t\t\tftSearch.category_select(e, category_id)
\t\t\t\t\t}
\t\t\t\t});

\t\t\t});
\t\t}

\t\tvar\tsearch_field = document.querySelector('#ftSearch [name=\\'search\\']');

\t\tif (search_field != null) {

\t\t\tsearch_field.addEventListener('keypress', function(e) {

\t\t\t\tif (typeof ftSearch !== 'undefined' && typeof ftSearch.key_enter == 'function') {
\t\t\t\t\tftSearch.key_enter(e);

\t\t\t\t}
\t\t\t});

\t\t\t";
        // line 136
        if (($context["livesearch_toggle"] ?? null)) {
            // line 137
            echo "\t\t\tvar ls_script = document.querySelector('#ftLiveSearchScript');

\t\t\tsearch_field.addEventListener('input', function(e) {

\t\t\t\tif (typeof ftLiveSearchDebounce == 'function') {
\t\t\t\t\tftLiveSearchDebounce(e, '";
            // line 142
            echo ($context["subcat_search"] ?? null);
            echo "', '";
            echo ($context["description_search"] ?? null);
            echo "', '";
            echo ($context["characters"] ?? null);
            echo "');
\t\t\t\t}

\t\t\t});

\t\t\tsearch_field.addEventListener('focus', function(e) {

\t\t\t\tif (typeof ftLiveSearchDebounce == 'function') {
\t\t\t\t\tftLiveSearchDebounce(e, '";
            // line 150
            echo ($context["subcat_search"] ?? null);
            echo "', '";
            echo ($context["description_search"] ?? null);
            echo "', '";
            echo ($context["characters"] ?? null);
            echo "');
\t\t\t\t}

\t\t\t});

\t\t\tsearch_field.addEventListener('blur', function(e) {

\t\t\t\tif (typeof ftLiveSearchDebounce == 'function') {
\t\t\t\t\tftLiveSearchDebounce(e, '";
            // line 158
            echo ($context["subcat_search"] ?? null);
            echo "', '";
            echo ($context["description_search"] ?? null);
            echo "', '";
            echo ($context["characters"] ?? null);
            echo "');
\t\t\t\t}

\t\t\t});

\t\t\t";
        }
        // line 164
        echo "
\t\t}

\t});

</script>
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/frametheme/ft_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 164,  289 => 158,  274 => 150,  259 => 142,  252 => 137,  250 => 136,  202 => 90,  193 => 84,  189 => 83,  179 => 76,  168 => 67,  164 => 65,  162 => 64,  147 => 51,  143 => 49,  141 => 48,  139 => 47,  136 => 46,  132 => 44,  130 => 43,  118 => 33,  114 => 31,  111 => 30,  107 => 28,  105 => 27,  101 => 26,  94 => 25,  89 => 22,  74 => 20,  70 => 19,  62 => 18,  49 => 8,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/frametheme/ft_search.twig", "");
    }
}
