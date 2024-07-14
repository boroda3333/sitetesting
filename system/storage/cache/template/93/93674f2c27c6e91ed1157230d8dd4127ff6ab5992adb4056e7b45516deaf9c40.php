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

/* ft_frame/template/extension/module/banner.twig */
class __TwigTemplate_2d705b8b14eb5db8504574b6ca265f7a616c1455b57d43c6b2024e1d53afb85b extends \Twig\Template
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
        echo "<div id=\"banner-";
        echo ($context["module"] ?? null);
        echo "\" class=\"overflow-hidden border rounded mb-3\">
  ";
        // line 2
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 1)) {
            // line 3
            echo "  <div class=\"owl-carousel\">
  ";
        }
        // line 5
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            echo "    <div class=\"position-relative\">
\t\t\t";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
                echo "\">
      ";
            }
            // line 10
            echo "\t\t\t  <img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
            echo "\" class=\"img-fluid w-100 d-block mx-auto\" />
      ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 11)) {
                // line 12
                echo "\t\t\t</a>
\t\t\t";
            }
            // line 14
            echo "\t\t</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  ";
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 1)) {
            // line 17
            echo "\t</div>
  ";
        }
        // line 19
        echo "</div>
";
        // line 20
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 1)) {
            // line 21
            echo "<script>
\t\$(function () {
\t\tvar owl_banner_";
            // line 23
            echo ($context["module"] ?? null);
            echo " = \$('#banner-";
            echo ($context["module"] ?? null);
            echo " .owl-carousel');
\t\towl_banner_";
            // line 24
            echo ($context["module"] ?? null);
            echo ".owlCarousel({
      mouseDrag: false,
      touchDrag: false,
      animateOut: 'fadeOut',
      items: 1,
      autoHeight: true,
      nav: false,
      dots: false,
      loop: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: false,
\t\t});
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  100 => 23,  96 => 21,  94 => 20,  91 => 19,  87 => 17,  84 => 16,  77 => 14,  73 => 12,  71 => 11,  64 => 10,  58 => 8,  56 => 7,  53 => 6,  48 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/banner.twig", "");
    }
}
