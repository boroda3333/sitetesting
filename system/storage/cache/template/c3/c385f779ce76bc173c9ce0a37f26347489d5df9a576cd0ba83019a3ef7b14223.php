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

/* ft_frame/template/extension/module/carousel.twig */
class __TwigTemplate_c7c3ea0373dad0374f7dde90422769e92a0dea736be25b97b9eda9337083ff44 extends \Twig\Template
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
        echo "<div id=\"carousel-";
        echo ($context["module"] ?? null);
        echo "\" class=\"mb-3\">
  <div class=\"position-relative overflow-hidden border rounded\">
    <div class=\"owl-carousel\">
  \t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"d-flex justify-content-center\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6)) {
                // line 7
                echo "        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
                echo "\">
        ";
            }
            // line 9
            echo "        <div class=\"position-relative\">
          <svg class=\"d-block img-fluid\" width=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "img_width", [], "any", false, false, false, 10);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "img_height", [], "any", false, false, false, 10);
            echo "\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
          <img src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "thumb_holder", [], "any", false, false, false, 11);
            echo "\" data-src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 11);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11);
            echo "\" class=\"position-absolute t-0 l-0 img-fluid d-block w-100 owl-lazy\" />
          <div class=\"d-flex justify-content-center align-items-center position-absolute t-0 b-0 r-0 l-0 w-100 h-100 lazy-spinner\">
            <div class=\"spinner-border text-gray-400\"></div>
          </div>
        </div>
        ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 16)) {
                // line 17
                echo "        </a>
        ";
            }
            // line 19
            echo "      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  \t</div>
    <button class=\"btn btn-next position-absolute t-50p r-0 p-0 rounded-pill z-index-2 mt-n3 mr-3\">
      <svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
        <path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"></path>
      </svg>
    </button>
    <button class=\"btn btn-prev position-absolute t-50p l-0 p-0 rounded-pill z-index-2 mt-n3 ml-3\">
      <svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
        <path d=\"M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z\"></path>
      </svg>
    </button>
  </div>
</div>
<script>
\t\$(function () {
\t\tvar owl_carousel_";
        // line 36
        echo ($context["module"] ?? null);
        echo " = \$('#carousel-";
        echo ($context["module"] ?? null);
        echo " .owl-carousel');

\t\towl_carousel_";
        // line 38
        echo ($context["module"] ?? null);
        echo ".owlCarousel({
      mouseDrag: false,
      touchDrag: true,
\t\t\tresponsive:{
\t      0:\t\t{items: 2},
\t\t\t\t380:\t{items: 3},
\t\t\t\t576:\t{items: 4},
\t\t\t\t768:\t{items: 5},
\t      992:\t{items: 6},
\t      1200:\t{items: 6}
\t    },
      stageClass: 'owl-stage d-flex justify-content-start align-items-center',
      itemClass: 'owl-item float-none',
      loop: false,
      rewind: true,
\t\t\tnav: false,
\t\t\tdots: false,
\t\t\tautoplay: false,
      lazyLoad: true,
      lazyLoadEager: 0,
      onLoadedLazy: function(e) { e.element.parent().parent().find('.lazy-spinner').remove() }
\t\t});

\t\t\$('#carousel-";
        // line 61
        echo ($context["module"] ?? null);
        echo " .btn-prev').click(function() { owl_carousel_";
        echo ($context["module"] ?? null);
        echo ".trigger('prev.owl.carousel'); });
\t\t\$('#carousel-";
        // line 62
        echo ($context["module"] ?? null);
        echo " .btn-next').click(function() { owl_carousel_";
        echo ($context["module"] ?? null);
        echo ".trigger('next.owl.carousel'); });
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 62,  143 => 61,  117 => 38,  110 => 36,  93 => 21,  86 => 19,  82 => 17,  80 => 16,  68 => 11,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/carousel.twig", "");
    }
}
