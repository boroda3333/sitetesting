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

/* ft_frame/template/common/currency.twig */
class __TwigTemplate_ade11b022f91cd2ce42a46acce2b3f928b2fc1b3ed73d5d0f4f4fe2958baaf97 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<div class=\"btn-group\">
\t<button class=\"btn btn-light dropdown-toggle p-1 px-sm-2\" data-toggle=\"dropdown\" aria-label=\"Currency\">
\t\t<span class=\"row no-gutters align-items-start\">
\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    // line 7
                    echo "\t\t\t<span class=\"col-auto mx-2 mx-lg-0\">
\t\t\t\t<strong class=\"d-block text-center ft-icon text-gray-500 darker-on-hover mx-1\">";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8);
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 8);
                    echo "</strong>
\t\t\t</span>
\t\t\t<span class=\"col-auto d-none d-lg-block mx-1\">
\t\t\t\t";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 11);
                    echo "
\t\t\t</span>
\t\t\t";
                }
                // line 14
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t<span class=\"col-auto d-none d-lg-block\">
\t\t\t\t<svg class=\"d-block ft-icon-24 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t<path transform=\"translate(0 2)\" d=\"M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t</span>
\t</button>
\t<div class=\"dropdown-menu\">
\t\t<form action=\"";
            // line 23
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"ft-form-currency\">
\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 25
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 26) != ($context["code"] ?? null))) {
                        // line 27
                        echo "\t\t\t<a href=\"#\" class=\"dropdown-item pl-3 currency-select\">
\t\t\t\t<strong class=\"d-inline-block text-center ft-icon text-gray-500 darker-on-hover ml-1 mr-2\">";
                        // line 28
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 28);
                        echo "</strong> ";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 28);
                        echo " <small>(";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 28);
                        echo ")</small>
\t\t\t\t<input type=\"hidden\" name=\"";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 29);
                        echo "\" />
\t\t\t</a>
\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t<span class=\"dropdown-item pl-3 d-lg-none font-weight-bold\">
\t\t\t\t<strong class=\"d-inline-block text-center ft-icon text-gray-500 darker-on-hover ml-1 mr-2\">";
                        // line 33
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 33);
                        echo "</strong> ";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 33);
                        echo " <small>(";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 33);
                        echo ")</small>
\t\t\t</span>
\t\t\t";
                    }
                    // line 36
                    echo "\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 37) != ($context["code"] ?? null))) {
                        // line 38
                        echo "\t\t\t<a href=\"#\" class=\"dropdown-item pl-3 currency-select\">
\t\t\t\t<strong class=\"d-inline-block text-center ft-icon text-gray-500 darker-on-hover ml-1 mr-2\">";
                        // line 39
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 39);
                        echo "</strong> ";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 39);
                        echo " <small>(";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 39);
                        echo ")</small>
\t\t\t\t<input type=\"hidden\" name=\"";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 40);
                        echo "\" />
\t\t\t</a>
\t\t\t";
                    } else {
                        // line 43
                        echo "\t\t\t<span class=\"dropdown-item pl-3 d-lg-none font-weight-bold\">
\t\t\t\t<strong class=\"d-inline-block text-center ft-icon text-gray-500 darker-on-hover ml-1 mr-2\">";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 44);
                        echo "</strong> ";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 44);
                        echo " <small>(";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 44);
                        echo ")</small>
\t\t\t</span>
\t\t\t";
                    }
                    // line 47
                    echo "\t\t\t";
                }
                // line 48
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 50
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t</form>
\t</div>
\t<script>
\t\t\$('#ft-form-currency .currency-select').on('click', function(e) {
\t\t\te.preventDefault();

\t\t\t\$('#ft-form-currency input[name=\\'code\\']').val(\$(this).find('input').attr('name'));

\t\t\t\$('#ft-form-currency').submit();
\t\t});
\t</script>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 50,  172 => 49,  166 => 48,  163 => 47,  153 => 44,  150 => 43,  144 => 40,  136 => 39,  133 => 38,  130 => 37,  127 => 36,  117 => 33,  114 => 32,  108 => 29,  100 => 28,  97 => 27,  94 => 26,  91 => 25,  87 => 24,  83 => 23,  73 => 15,  67 => 14,  61 => 11,  54 => 8,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/common/currency.twig", "");
    }
}
