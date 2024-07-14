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

/* ft_frame/template/common/footer.twig */
class __TwigTemplate_f649bfeb0751c52e48e0c030bd50f96986db5078af8899a79a53f376b0da6e48 extends \Twig\Template
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
        echo "\t\t</div>
\t\t<footer class=\"mb-5 mt-4\">
\t\t\t";
        // line 3
        echo ($context["ft_fmap"] ?? null);
        echo "
\t\t\t";
        // line 4
        echo ($context["ft_footer"] ?? null);
        echo "
\t\t\t";
        // line 5
        echo ($context["ft_modal"] ?? null);
        echo "
\t\t</footer>

    <div id=\"footer-fixed-buttons\" class=\"position-fixed d-flex flex-column b-0 r-0 z-index-max mb-3 mr-3 mb-md-5 mr-md-5\">
      <button type=\"button\" id=\"scrll-on-top\" class=\"btn btn-light shadow rounded-circle p-2 p-md-2 d-none\" onclick=\"ft_scrlltop(250)\">
  \t\t\t<svg class=\"d-block ft-icon m-0 text-gray-600 darker-on-hover\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
  \t\t\t\t<path d=\"M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z\"/>
  \t\t\t</svg>
  \t\t</button>
    </div>

\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 17
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
\t\t";
        // line 20
        if (($context["livesearch"] ?? null)) {
            // line 21
            echo "\t\t<script id=\"ftLiveSearchScript\" src=\"catalog/view/theme/";
            echo ($context["theme_dir"] ?? null);
            echo "/javascript/ft.livesearch.js";
            echo ($context["theme_version"] ?? null);
            echo "\"></script>
\t\t";
        }
        // line 23
        echo "
\t\t<script src=\"catalog/view/theme/";
        // line 24
        echo ($context["theme_dir"] ?? null);
        echo "/javascript/common.js";
        echo ($context["theme_version"] ?? null);
        echo "\"></script>

\t\t";
        // line 26
        echo ($context["cust_code"] ?? null);
        echo "

\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  92 => 24,  89 => 23,  81 => 21,  79 => 20,  76 => 19,  67 => 17,  63 => 16,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/common/footer.twig", "");
    }
}
