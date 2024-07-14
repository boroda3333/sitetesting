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

/* ft_frame/template/product/review.twig */
class __TwigTemplate_7831d56e1e0f254df0badd988c6a7864d0ee5d2649237e961298ea6c78efea44 extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "<div class=\"card mb-3\" itemprop=\"review\" itemscope itemtype=\"http://schema.org/Review\">
\t<div class=\"card-header py-2 px-3\">
\t\t<div class=\"row form-row align-items-center\">
\t\t\t<div class=\"col-auto\">
\t\t\t\t";
                // line 7
                if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 7) == 1)) {
                    // line 8
                    echo "\t\t\t\t<svg class=\"d-block ft-icon-24 m-0  text-danger\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M11.99 2C6.47 2 2 6.47 2 12s4.47 10 9.99 10S22 17.53 22 12 17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm4.18-12.24l-1.06 1.06-1.06-1.06L13 8.82l1.06 1.06L13 10.94 14.06 12l1.06-1.06L16.18 12l1.06-1.06-1.06-1.06 1.06-1.06zM7.82 12l1.06-1.06L9.94 12 11 10.94 9.94 9.88 11 8.82 9.94 7.76 8.88 8.82 7.82 7.76 6.76 8.82l1.06 1.06-1.06 1.06zM12 14c-2.33 0-4.31 1.46-5.11 3.5h10.22c-.8-2.04-2.78-3.5-5.11-3.5z\"/>
\t\t\t\t</svg>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 11
$context["review"], "rating", [], "any", false, false, false, 11) == 2)) {
                    // line 12
                    echo "\t\t\t\t<svg class=\"d-block ft-icon-24 m-0 text-warning\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<circle cx=\"15.5\" cy=\"9.5\" r=\"1.5\"/><circle cx=\"8.5\" cy=\"9.5\" r=\"1.5\"/><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm0-6c-2.33 0-4.32 1.45-5.12 3.5h1.67c.69-1.19 1.97-2 3.45-2s2.75.81 3.45 2h1.67c-.8-2.05-2.79-3.5-5.12-3.5z\"/>
\t\t\t\t</svg>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 15
$context["review"], "rating", [], "any", false, false, false, 15) == 3)) {
                    // line 16
                    echo "\t\t\t\t<svg class=\"d-block ft-icon-24 m-0 1 text-secondary\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M9 14h6v1.5H9z\"/><circle cx=\"15.5\" cy=\"9.5\" r=\"1.5\"/><circle cx=\"8.5\" cy=\"9.5\" r=\"1.5\"/><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z\"/>
\t\t\t\t</svg>
\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 19
$context["review"], "rating", [], "any", false, false, false, 19) == 4)) {
                    // line 20
                    echo "\t\t\t\t<svg class=\"d-block ft-icon-24 m-0 1 text-primary\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<circle cx=\"15.5\" cy=\"9.5\" r=\"1.5\"/><circle cx=\"8.5\" cy=\"9.5\" r=\"1.5\"/><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm0-4c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.7 1.19-1.97 2-3.45 2z\"/>
\t\t\t\t</svg>
\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t<svg class=\"d-block ft-icon-24 m-0 1 text-success\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M11.99 2C6.47 2 2 6.47 2 12s4.47 10 9.99 10S22 17.53 22 12 17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm1-10.06L14.06 11l1.06-1.06L16.18 11l1.06-1.06-2.12-2.12zm-4.12 0L9.94 11 11 9.94 8.88 7.82 6.76 9.94 7.82 11zM12 17.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z\"/>
\t\t\t\t</svg>
\t\t\t\t";
                }
                // line 28
                echo "\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["review"], "product_name", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "\t\t\t\t<meta itemprop=\"itemReviewed\" content=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "product_name", [], "any", false, false, false, 31);
                    echo "\">
\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t<b class=\"mr-2\" itemprop=\"author\" itemscope itemtype=\"http://schema.org/Person\"><span itemprop=\"name\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 33);
                echo "</span></b>
\t\t\t\t<small class=\"d-inline-block text-secondary\">
\t\t\t\t\t";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["review"], "meta_date", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "\t\t\t\t\t<meta  itemprop=\"datePublished\" content=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "meta_date", [], "any", false, false, false, 36);
                    echo "\">
\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 38);
                echo "
\t\t\t\t</small>
\t\t\t</div>
\t\t\t<div class=\"col-auto\">
\t\t\t\t<div class=\"\">
\t\t\t\t\t<span itemprop=\"reviewRating\" itemscope itemtype=\"http://schema.org/Rating\">
\t\t\t\t\t\t<meta itemprop=\"worstRating\" content = \"1\">
\t\t\t\t\t\t<meta itemprop=\"bestRating\"  content = \"5\">
\t\t\t\t\t\t<meta itemprop=\"ratingValue\"  content = \"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 46);
                echo "\">
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"d-flex justify-content-centers\">
\t\t\t\t\t\t";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 50
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 50) < $context["i"])) {
                        // line 51
                        echo "\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-400 m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t";
                    } else {
                        // line 55
                        echo "\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-warning m-0\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t";
                    }
                    // line 59
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"card-body\" itemprop=\"reviewBody\">
\t\t";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 66);
                echo "
\t</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "<div class=\"row pr-container\">
\t<div class=\"col-12 col-md-auto order-md-1 text-center text-md-left\">
\t\t<nav>
\t\t\t";
            // line 73
            echo ($context["pagination"] ?? null);
            echo "
\t\t</nav>
\t</div>
</div>
";
        } else {
            // line 78
            echo "<p class=\"text-muted\">";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 78,  176 => 73,  171 => 70,  161 => 66,  153 => 60,  147 => 59,  141 => 55,  135 => 51,  132 => 50,  128 => 49,  122 => 46,  110 => 38,  104 => 36,  102 => 35,  96 => 33,  90 => 31,  88 => 30,  84 => 28,  78 => 24,  72 => 20,  70 => 19,  65 => 16,  63 => 15,  58 => 12,  56 => 11,  51 => 8,  49 => 7,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/product/review.twig", "");
    }
}
