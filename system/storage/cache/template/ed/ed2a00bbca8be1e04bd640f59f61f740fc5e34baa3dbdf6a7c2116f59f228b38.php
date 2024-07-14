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

/* ft_frame/template/common/language.twig */
class __TwigTemplate_abef81e68bb9ec5072e0172603c26eb14980468e49a05298ba33a3b3304d3bec extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "<div class=\"btn-group\">
\t<button class=\"btn btn-light dropdown-toggle p-1 px-sm-2\" data-toggle=\"dropdown\" aria-label=\"Language\">
\t\t<span class=\"row no-gutters align-items-start\">
\t\t\t<span class=\"col-auto mx-2 mx-lg-0\">
\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t<path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 11
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 11) == ($context["code"] ?? null))) {
                    // line 12
                    echo "\t\t\t<span class=\"col-auto d-none d-lg-block ml-2 mr-1\">
\t\t\t\t";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 13);
                    echo "
\t\t\t</span>
\t\t\t";
                }
                // line 16
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t<span class=\"col-auto d-none d-lg-block\">
\t\t\t\t<svg class=\"d-block ft-icon-24 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t<path transform=\"translate(0 2)\" d=\"M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t</span>
\t</button>
\t<div class=\"dropdown-menu\">
\t\t<form action=\"";
            // line 25
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"ft-form-language\">
\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 27
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 27) != ($context["code"] ?? null))) {
                    // line 28
                    echo "\t\t\t<a href=\"#\" class=\"dropdown-item language-select\">
\t\t\t\t";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 29);
                    echo "
\t\t\t\t<input type=\"hidden\" name=\"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 30);
                    echo "\" />
\t\t\t</a>
\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t<span class=\"dropdown-item d-lg-none font-weight-bold\">
\t\t\t\t";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 34);
                    echo "
\t\t\t</span>
\t\t\t";
                }
                // line 37
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 39
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t</form>
\t</div>
\t<script>

\t\t\$('#ft-form-language .language-select').on('click', function(e) {
\t\t\te.preventDefault();

\t\t\t\$('#ft-form-language input[name=\\'code\\']').val(\$(this).find('input').attr('name'));

\t\t\t\$('#ft-form-language').submit();
\t\t});

\t</script>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  120 => 38,  114 => 37,  108 => 34,  105 => 33,  99 => 30,  95 => 29,  92 => 28,  89 => 27,  85 => 26,  81 => 25,  71 => 17,  65 => 16,  59 => 13,  56 => 12,  53 => 11,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/common/language.twig", "");
    }
}
