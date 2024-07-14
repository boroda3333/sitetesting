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

/* ft_frame/template/extension/module/frametheme/ft_hlinks.twig */
class __TwigTemplate_f5c1c5bde2bf531dd4860a9ac8102a6b009fea981f3903263872c1aac6a1c55e extends \Twig\Template
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
        if ((($context["links_status"] ?? null) && ($context["links"] ?? null))) {
            // line 2
            echo "<div class=\"btn-group\">
\t<a class=\"btn btn-light dropdown-toggle p-1 px-sm-2\" href=\"#\" title=\"Помощь\" data-toggle=\"dropdown\">
\t\t<span class=\"row no-gutters align-items-start\">
\t\t\t<span class=\"col-auto mx-2 mx-lg-0\">
\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t<path d=\"M 5 3 C 3.9069372 3 3 3.9069372 3 5 L 3 19 C 3 20.093063 3.9069372 21 5 21 L 10.029297 21 L 12 23.007812 L 13.970703 21 L 19 21 C 20.093063 21 21 20.093063 21 19 L 21 5 C 21 3.9069372 20.093063 3 19 3 L 5 3 z M 5 5 L 19 5 L 19 19 L 13.130859 19 L 12 20.152344 L 10.869141 19 L 5 19 L 5 5 z M 11 7 L 11 9 L 13 9 L 13 7 L 11 7 z M 11 11 L 11 17 L 13 17 L 13 11 L 11 11 z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t\t<span class=\"col-auto d-none d-lg-block ml-2 mr-1\">
\t\t\t\t";
            // line 11
            echo ($context["links_title"] ?? null);
            echo "
\t\t\t</span>
\t\t\t<span class=\"col-auto d-none d-lg-block\">
\t\t\t\t<svg class=\"d-block ft-icon-24 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t<path transform=\"translate(0 2)\" d=\"M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t</span>
\t</a>
\t<div class=\"dropdown-menu dropdown-menu-right text-right\">
\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 22
                echo "\t\t<a class=\"dropdown-item\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 22);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 22);
                echo "</a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/frametheme/ft_hlinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  67 => 22,  63 => 21,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/frametheme/ft_hlinks.twig", "");
    }
}
