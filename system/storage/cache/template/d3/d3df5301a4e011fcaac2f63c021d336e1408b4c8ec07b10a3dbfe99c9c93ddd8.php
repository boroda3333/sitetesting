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

/* ft_frame/template/extension/module/xds_custom_blocks.twig */
class __TwigTemplate_2b2f1ded71bc98d5cb77e898f4c1caf585c567b57fddb33494cc7fb5af0fc335 extends \Twig\Template
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
        echo "<div class=\"custom-blocks row row-cols-";
        echo ($context["columns"] ?? null);
        echo " row-cols-sm-";
        echo ($context["columns_sm"] ?? null);
        echo " row-cols-md-";
        echo ($context["columns_md"] ?? null);
        echo " row-cols-lg-";
        echo ($context["columns_lg"] ?? null);
        echo " row-cols-xl-";
        echo ($context["columns_xl"] ?? null);
        echo " row-cols-xxl-";
        echo ($context["columns_xxl"] ?? null);
        echo " mb-2\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 3
            echo "\t<div class=\"col mb-3\">
\t\t<div class=\"custom-block border bg-white rounded p-3 h-100\">
\t\t\t";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["block"], "link", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["block"], "link", [], "any", false, false, false, 8);
                echo "\">
\t\t\t\t\t\t";
                // line 9
                if ( !twig_get_attribute($this->env, $this->source, $context["block"], "html", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["block"], "image", [], "any", false, false, false, 10);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["block"], "image2x", [], "any", false, false, false, 10)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["block"], "image", [], "any", false, false, false, 10);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["block"], "image2x", [], "any", false, false, false, 10);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["block"], "image3x", [], "any", false, false, false, 10);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["block"], "image4x", [], "any", false, false, false, 10);
                        echo " 4x\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["block"], "title", [], "any", false, false, false, 10);
                    echo "\" class=\"imf-fluid\" />
\t\t\t\t\t\t";
                } else {
                    // line 12
                    echo "\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["block"], "html", [], "any", false, false, false, 12);
                    echo "
\t\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"h6 mb-1 d-block title pb-1\"><a href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["block"], "link", [], "any", false, false, false, 17);
                echo "\" class=\"text-dark\">";
                echo twig_get_attribute($this->env, $this->source, $context["block"], "title", [], "any", false, false, false, 17);
                echo "</a></div>
\t\t\t\t\t<hr class=\"mt-0 mb-1 border-top border-current text-gray-200\">
\t\t\t\t\t<div class=\"d-block description line-clamp-2\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["block"], "description", [], "any", false, false, false, 19);
                echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t";
                // line 25
                if ( !twig_get_attribute($this->env, $this->source, $context["block"], "html", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["block"], "image", [], "any", false, false, false, 26);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["block"], "image2x", [], "any", false, false, false, 26)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["block"], "image", [], "any", false, false, false, 26);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["block"], "image2x", [], "any", false, false, false, 26);
                        echo " 2x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["block"], "image3x", [], "any", false, false, false, 26);
                        echo " 3x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["block"], "image4x", [], "any", false, false, false, 26);
                        echo " 4x\"";
                    }
                    echo " alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["block"], "title", [], "any", false, false, false, 26);
                    echo "\" class=\"imf-fluid\" />
\t\t\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["block"], "html", [], "any", false, false, false, 28);
                    echo "
\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"h6 mb-1 d-block title pb-1\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["block"], "title", [], "any", false, false, false, 32);
                echo "</div>
\t\t\t\t\t<hr class=\"mt-0 mb-1 border-top border-current text-gray-200\">
\t\t\t\t\t<div class=\"m-0 d-block description line-clamp-2\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["block"], "description", [], "any", false, false, false, 34);
                echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 38
            echo "\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/xds_custom_blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 41,  165 => 38,  158 => 34,  153 => 32,  149 => 30,  143 => 28,  123 => 26,  121 => 25,  117 => 23,  110 => 19,  103 => 17,  98 => 14,  92 => 12,  72 => 10,  70 => 9,  66 => 8,  62 => 6,  60 => 5,  56 => 3,  52 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/xds_custom_blocks.twig", "");
    }
}
