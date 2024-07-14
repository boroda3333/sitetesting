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

/* ft_frame/template/common/home.twig */
class __TwigTemplate_08330357d729ee575cce1611cbea60a95f29968f1803d737378631537513803e extends \Twig\Template
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
        echo "
<div id=\"common-home\" class=\"container\">
\t<div id=\"content\">
\t\t";
        // line 4
        if (((((($context["menu_open"] ?? null) || ($context["ft_additional_position1"] ?? null)) || ($context["ft_additional_position2"] ?? null)) || ($context["ft_additional_position3"] ?? null)) || ($context["ft_additional_position4"] ?? null))) {
            // line 5
            echo "\t\t<div class=\"row flex-nowrap align-items-start\">
\t\t\t";
            // line 6
            if (($context["menu_open"] ?? null)) {
                // line 7
                echo "\t\t\t<div class=\"d-none d-lg-block col-lg-3 col-aside\">
\t\t\t\t<div class=\"menu-holder d-none d-lg-block mb-3 mt-n3\"></div>
\t\t\t\t<script> var menu_holder_height = function() { document.querySelector('.menu-holder').style.height = document.querySelector('.category-menu-list').offsetHeight + 'px' }; menu_holder_height();</script>
\t\t\t</div>
\t\t\t";
            }
            // line 12
            echo "\t\t\t";
            if ((((($context["ft_additional_position1"] ?? null) || ($context["ft_additional_position2"] ?? null)) || ($context["ft_additional_position3"] ?? null)) || ($context["ft_additional_position4"] ?? null))) {
                // line 13
                echo "\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
                // line 15
                if (($context["ft_additional_position1"] ?? null)) {
                    // line 16
                    echo "\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t";
                    // line 17
                    echo ($context["ft_additional_position1"] ?? null);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t";
                if (($context["ft_additional_position2"] ?? null)) {
                    // line 21
                    echo "\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
                    // line 22
                    echo ($context["ft_additional_position2"] ?? null);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t";
                if (($context["ft_additional_position3"] ?? null)) {
                    // line 26
                    echo "\t\t\t\t\t<div class=\"col d-none d-xxl-block col-xxl-only\">
\t\t\t\t\t\t";
                    // line 27
                    echo ($context["ft_additional_position3"] ?? null);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t";
                if (($context["ft_additional_position4"] ?? null)) {
                    // line 31
                    echo "\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t";
                    // line 32
                    echo ($context["ft_additional_position4"] ?? null);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 38
            echo "\t\t</div>
\t\t";
        }
        // line 40
        echo "
\t\t";
        // line 41
        if ((($context["content_top"] ?? null) || ($context["column_right"] ?? null))) {
            // line 42
            echo "\t\t<div class=\"row\">
\t\t\t";
            // line 43
            if (($context["content_top"] ?? null)) {
                // line 44
                echo "\t\t\t<div class=\"col-12 col-lg \">
\t\t\t\t";
                // line 45
                echo ($context["content_top"] ?? null);
                echo "
\t\t\t</div>
\t\t\t";
            }
            // line 48
            echo "\t\t\t";
            if (($context["column_right"] ?? null)) {
                // line 49
                echo "\t\t\t<div class=\"col-12 col-lg-3 col-aside\">
\t\t\t\t";
                // line 50
                echo ($context["column_right"] ?? null);
                echo "
\t\t\t</div>
\t\t\t";
            }
            // line 53
            echo "\t\t</div>
\t\t";
        }
        // line 55
        echo "
\t\t";
        // line 56
        echo ($context["ft_additional_position5"] ?? null);
        echo "

\t\t";
        // line 58
        if ((($context["content_bottom"] ?? null) || ($context["column_left"] ?? null))) {
            // line 59
            echo "\t\t<div class=\"row\">
\t\t\t";
            // line 60
            if (($context["column_left"] ?? null)) {
                // line 61
                echo "\t\t\t<div class=\"col-12 col-lg-3 col-aside\">
\t\t\t\t";
                // line 62
                echo ($context["column_left"] ?? null);
                echo "
\t\t\t</div>
\t\t\t";
            }
            // line 65
            echo "\t\t\t";
            if (($context["content_bottom"] ?? null)) {
                // line 66
                echo "\t\t\t<div class=\"col-12 col-lg\">
\t\t\t\t";
                // line 67
                echo ($context["content_bottom"] ?? null);
                echo "
\t\t\t</div>
\t\t\t";
            }
            // line 70
            echo "\t\t</div>
\t\t";
        }
        // line 72
        echo "
\t\t";
        // line 73
        echo ($context["ft_additional_position6"] ?? null);
        echo "

\t</div>
</div>
";
        // line 77
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 77,  198 => 73,  195 => 72,  191 => 70,  185 => 67,  182 => 66,  179 => 65,  173 => 62,  170 => 61,  168 => 60,  165 => 59,  163 => 58,  158 => 56,  155 => 55,  151 => 53,  145 => 50,  142 => 49,  139 => 48,  133 => 45,  130 => 44,  128 => 43,  125 => 42,  123 => 41,  120 => 40,  116 => 38,  111 => 35,  105 => 32,  102 => 31,  99 => 30,  93 => 27,  90 => 26,  87 => 25,  81 => 22,  78 => 21,  75 => 20,  69 => 17,  66 => 16,  64 => 15,  60 => 13,  57 => 12,  50 => 7,  48 => 6,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/common/home.twig", "");
    }
}
