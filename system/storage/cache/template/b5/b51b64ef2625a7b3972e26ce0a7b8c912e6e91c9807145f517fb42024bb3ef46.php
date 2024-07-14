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

/* ft_frame/template/extension/module/frametheme/ft_logo.twig */
class __TwigTemplate_329b1b067bdf848ba04f4383a2402f1eadd2e3a24d614a00065f9201c6c9a85e extends \Twig\Template
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
        if (($context["svg_logo_status"] ?? null)) {
            // line 2
            echo "  ";
            if ( !($context["on_home"] ?? null)) {
                // line 3
                echo "    <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["svg_logo"] ?? null);
                echo "</a>
  ";
            } else {
                // line 5
                echo "    <a href=\"#\" onclick=\"location.href=window.location; return false\">";
                echo ($context["svg_logo"] ?? null);
                echo "</a>
  ";
            }
        } else {
            // line 8
            echo "  ";
            if (($context["logo"] ?? null)) {
                // line 9
                echo "    ";
                if ( !($context["on_home"] ?? null)) {
                    // line 10
                    echo "      <a href=\"";
                    echo ($context["home"] ?? null);
                    echo "\">
        <img src=\"";
                    // line 11
                    echo ($context["logo1x"] ?? null);
                    echo "\" ";
                    if (($context["hd_imgs"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["logo1x"] ?? null);
                        echo " 1x, ";
                        echo ($context["logo2x"] ?? null);
                        echo " 2x, ";
                        echo ($context["logo3x"] ?? null);
                        echo " 3x, ";
                        echo ($context["logo4x"] ?? null);
                        echo " 4x\" title=\"";
                        echo ($context["name"] ?? null);
                        echo "\"";
                    }
                    echo " alt=\"";
                    echo ($context["name"] ?? null);
                    echo "\" class=\"img-fluid\" />
      </a>
    ";
                } else {
                    // line 14
                    echo "      <a href=\"#\" onclick=\"location.href=window.location; return false\">
        <img src=\"";
                    // line 15
                    echo ($context["logo1x"] ?? null);
                    echo "\" ";
                    if (($context["hd_imgs"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["logo1x"] ?? null);
                        echo " 1x, ";
                        echo ($context["logo2x"] ?? null);
                        echo " 2x, ";
                        echo ($context["logo3x"] ?? null);
                        echo " 3x, ";
                        echo ($context["logo4x"] ?? null);
                        echo " 4x\" title=\"";
                        echo ($context["name"] ?? null);
                        echo "\"";
                    }
                    echo " alt=\"";
                    echo ($context["name"] ?? null);
                    echo "\" class=\"img-fluid\" />
      </a>
    ";
                }
                // line 18
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/frametheme/ft_logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 18,  93 => 15,  90 => 14,  68 => 11,  63 => 10,  60 => 9,  57 => 8,  50 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/frametheme/ft_logo.twig", "");
    }
}
