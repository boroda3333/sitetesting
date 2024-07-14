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

/* ft_frame/template/extension/module/slideshow.twig */
class __TwigTemplate_1fad7fba27372495e0536f938d7e693c1d99cc0b71bbb25b17e03f7bbbaec98c extends \Twig\Template
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
        echo "<div id=\"slideshow-";
        echo ($context["module"] ?? null);
        echo "\" class=\"position-relative overflow-hidden border rounded mb-3\">
  <div class=\"owl-carousel\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "    <div class=\"position-relative\">
\t\t\t";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6);
                echo "\">
      ";
            }
            // line 8
            echo "      <img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "thumb_holder", [], "any", false, false, false, 8);
            echo "\" data-src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
            echo "\" class=\"d-block img-fluid w-100 owl-lazy\" />
      <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
        <div class=\"spinner-border text-gray-400\"></div>
      </div>
      ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 12)) {
                // line 13
                echo "      </a>
      ";
            }
            // line 15
            echo "\t\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</div>
  <div class=\"owl-pagination position-absolute b-0 l-0 r-0 w-100 z-index-2 text-center px-3 pb-2\">
    <button role=\"button\" class=\"btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0 mr-0\"><span></span></button>
  </div>
  <button class=\"btn btn-next position-absolute t-50p r-0 p-0 rounded-pill z-index-2 mt-n3 mr-3\">
\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"></path>
\t\t</svg>
\t</button>
  <button class=\"btn btn-prev position-absolute t-50p l-0 p-0 rounded-pill z-index-2 mt-n3 ml-3\">
\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<path d=\"M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z\"></path>
\t\t</svg>
\t</button>
</div>
<script>
\t\$(function () {
\t\tvar slideshow_";
        // line 34
        echo ($context["module"] ?? null);
        echo " = \$('#slideshow-";
        echo ($context["module"] ?? null);
        echo " .owl-carousel');

\t\tslideshow_";
        // line 36
        echo ($context["module"] ?? null);
        echo ".owlCarousel({
      mouseDrag: false,
      touchDrag: true,
      items: 1,
      autoHeight: true,
      nav: false,
      dots: true,
      dotsContainer: '#slideshow-";
        // line 43
        echo ($context["module"] ?? null);
        echo " .owl-pagination',
      dotClass: 'btn btn-dot bg-dark shadow-none rounded-pill border-0 bg-secondary p-0',
      loop: false,
      rewind: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      lazyLoad: true,
      lazyLoadEager: 0,
      onLoadedLazy: function(e) { e.element.parent().parent().find('.lazy-spinner').remove() }
\t\t});

\t\t\$('#slideshow-";
        // line 55
        echo ($context["module"] ?? null);
        echo " .btn-prev').click(function() { slideshow_";
        echo ($context["module"] ?? null);
        echo ".trigger('prev.owl.carousel'); });
\t\t\$('#slideshow-";
        // line 56
        echo ($context["module"] ?? null);
        echo " .btn-next').click(function() { slideshow_";
        echo ($context["module"] ?? null);
        echo ".trigger('next.owl.carousel'); });
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  134 => 55,  119 => 43,  109 => 36,  102 => 34,  83 => 17,  76 => 15,  72 => 13,  70 => 12,  58 => 8,  52 => 6,  50 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/slideshow.twig", "");
    }
}
