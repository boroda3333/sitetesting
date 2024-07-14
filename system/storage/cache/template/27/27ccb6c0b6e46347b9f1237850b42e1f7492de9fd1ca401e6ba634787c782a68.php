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

/* ft_frame/template/common/header.twig */
class __TwigTemplate_9c8eb25ddccf694090e080c14ae6cf9183a2e7002dda4d21f647d43892f8d65b extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" ";
        if (($context["isMobile"] ?? null)) {
            echo "class=\"mobile\"";
        }
        echo ">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
";
        // line 7
        if (($context["meta_theme_color"] ?? null)) {
            // line 8
            echo "<meta name=\"theme-color\" content=\"";
            echo ($context["meta_theme_color"] ?? null);
            echo "\">
";
        }
        // line 10
        echo "<title>";
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 11
        if (($context["robots"] ?? null)) {
            // line 12
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 14
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\">
";
        // line 15
        if (($context["description"] ?? null)) {
            // line 16
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\">
";
        }
        // line 18
        if (($context["keywords"] ?? null)) {
            // line 19
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\">
";
        }
        // line 21
        if (($context["og_url"] ?? null)) {
            // line 22
            echo "<meta property=\"og:title\" content=\"";
            echo ($context["title"] ?? null);
            echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
            // line 24
            echo ($context["og_url"] ?? null);
            echo "\" />
";
            // line 25
            if (($context["og_image"] ?? null)) {
                // line 26
                echo "<meta property=\"og:image\" content=\"";
                echo ($context["og_image"] ?? null);
                echo "\" />
";
            } else {
                // line 28
                echo "<meta property=\"og:image\" content=\"";
                echo ($context["logo"] ?? null);
                echo "\" />
";
            }
        }
        // line 31
        echo "<script>
  var debounce = (callback, interval) => {
    var timeout;
    return function(...arguments) {
      clearTimeout(timeout);
      timeout = setTimeout(callback, interval, ...arguments);
    };
  }
  ";
        // line 39
        if (($context["toasts"] ?? null)) {
            // line 40
            echo "  var toasts_timeout = 2000;
  ";
        } else {
            // line 42
            echo "  var toasts_timeout = 0;
  ";
        }
        // line 44
        echo "  
  var x_http_accept = '";
        // line 45
        echo ($context["x_http_accept"] ?? null);
        echo "';
</script>
";
        // line 47
        if ( !($context["minify"] ?? null)) {
            // line 48
            if (($context["preload_ss"] ?? null)) {
                // line 49
                echo "<link href=\"catalog/view/theme/";
                echo ($context["theme_dir"] ?? null);
                echo "/bootstrap/css/bootstrap.min.css\" rel=\"preload\" as=\"style\">
<link href=\"catalog/view/theme/";
                // line 50
                echo ($context["theme_dir"] ?? null);
                echo "/stylesheet/stylesheet.css";
                echo ($context["theme_version"] ?? null);
                echo "\" rel=\"preload\" as=\"style\">
";
            }
            // line 52
            echo "<link href=\"catalog/view/theme/";
            echo ($context["theme_dir"] ?? null);
            echo "/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/";
            // line 53
            echo ($context["theme_dir"] ?? null);
            echo "/stylesheet/stylesheet.css";
            echo ($context["theme_version"] ?? null);
            echo "\" rel=\"stylesheet\">
";
            // line 54
            if (($context["fontawesome"] ?? null)) {
                // line 55
                if (($context["preload_ss"] ?? null)) {
                    // line 56
                    echo "<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"preload\" as=\"style\">
";
                }
                // line 58
                echo "<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
";
            }
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 61
                if (($context["preload_ss"] ?? null)) {
                    // line 62
                    echo "<link href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 62);
                    echo "\" rel=\"preload\" as=\"style\">
";
                }
                // line 64
                echo "<link href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 64);
                echo "\" type=\"text/css\" rel=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 64);
                echo "\" media=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 64);
                echo "\">
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            if (($context["cust_css"] ?? null)) {
                // line 67
                if (($context["preload_ss"] ?? null)) {
                    // line 68
                    echo "<link href=\"catalog/view/theme/";
                    echo ($context["theme_dir"] ?? null);
                    echo "/stylesheet/custom.css\" rel=\"preload\" as=\"style\">
";
                }
                // line 70
                echo "<link href=\"catalog/view/theme/";
                echo ($context["theme_dir"] ?? null);
                echo "/stylesheet/custom.css\" rel=\"stylesheet\">
";
            }
            // line 72
            if (($context["preload_ss"] ?? null)) {
                // line 73
                echo "<link href=\"catalog/view/theme/";
                echo ($context["theme_dir"] ?? null);
                echo "/javascript/jquery-3.5.1.min.js\" rel=\"preload\" as=\"script\">
<link href=\"catalog/view/theme/";
                // line 74
                echo ($context["theme_dir"] ?? null);
                echo "/bootstrap/js/popper.min.js\" rel=\"preload\" as=\"script\">
<link href=\"catalog/view/theme/";
                // line 75
                echo ($context["theme_dir"] ?? null);
                echo "/bootstrap/js/bootstrap.min.js\" rel=\"preload\" as=\"script\">
";
            }
            // line 77
            echo "<script src=\"catalog/view/theme/";
            echo ($context["theme_dir"] ?? null);
            echo "/javascript/jquery-3.5.1.min.js\"></script>
<script src=\"catalog/view/theme/";
            // line 78
            echo ($context["theme_dir"] ?? null);
            echo "/bootstrap/js/popper.min.js\"></script>
<script src=\"catalog/view/theme/";
            // line 79
            echo ($context["theme_dir"] ?? null);
            echo "/bootstrap/js/bootstrap.min.js\"></script>
";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 81
                if (($context["preload_ss"] ?? null)) {
                    // line 82
                    echo "<link href=\"";
                    echo $context["script"];
                    echo "\" rel=\"preload\" as=\"script\">
";
                }
                // line 84
                echo "<script src=\"";
                echo $context["script"];
                echo "\"></script>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 87
            if (($context["preload_ss"] ?? null)) {
                // line 88
                echo "<link href=\"min/?";
                if (($context["site_dir"] ?? null)) {
                    echo "b=";
                    echo ($context["site_dir"] ?? null);
                    echo "&";
                }
                echo "f=catalog/view/theme/";
                echo ($context["theme_dir"] ?? null);
                echo "/bootstrap/css/bootstrap.min.css,catalog/view/theme/";
                echo ($context["theme_dir"] ?? null);
                echo "/stylesheet/stylesheet.css";
                if (($context["fontawesome"] ?? null)) {
                    echo ",catalog/view/javascript/font-awesome/css/font-awesome.min.css";
                }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 88);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                if (($context["cust_css"] ?? null)) {
                    echo ",catalog/view/theme/";
                    echo ($context["theme_dir"] ?? null);
                    echo "/stylesheet/custom.css";
                }
                echo "\" rel=\"preload\" as=\"style\">
<link href=\"min/?";
                // line 89
                if (($context["site_dir"] ?? null)) {
                    echo "b=";
                    echo ($context["site_dir"] ?? null);
                    echo "&";
                }
                echo "f=catalog/view/theme/";
                echo ($context["theme_dir"] ?? null);
                echo "/javascript/jquery-3.5.1.min.js,catalog/view/theme/";
                echo ($context["theme_dir"] ?? null);
                echo "/bootstrap/js/popper.min.js,catalog/view/theme/";
                echo ($context["theme_dir"] ?? null);
                echo "/bootstrap/js/bootstrap.min.js";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                    echo ",";
                    echo $context["script"];
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\" rel=\"preload\" as=\"script\">
";
            }
            // line 91
            echo "<link href=\"min/?";
            if (($context["site_dir"] ?? null)) {
                echo "b=";
                echo ($context["site_dir"] ?? null);
                echo "&";
            }
            echo "f=catalog/view/theme/";
            echo ($context["theme_dir"] ?? null);
            echo "/bootstrap/css/bootstrap.min.css,catalog/view/theme/";
            echo ($context["theme_dir"] ?? null);
            echo "/stylesheet/stylesheet.css";
            if (($context["fontawesome"] ?? null)) {
                echo ",catalog/view/javascript/font-awesome/css/font-awesome.min.css";
            }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                echo ",";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 91);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            if (($context["cust_css"] ?? null)) {
                echo ",catalog/view/theme/";
                echo ($context["theme_dir"] ?? null);
                echo "/stylesheet/custom.css";
            }
            echo "\" rel=\"stylesheet\">
<script src=\"min/?";
            // line 92
            if (($context["site_dir"] ?? null)) {
                echo "b=";
                echo ($context["site_dir"] ?? null);
                echo "&";
            }
            echo "f=catalog/view/theme/";
            echo ($context["theme_dir"] ?? null);
            echo "/javascript/jquery-3.5.1.min.js,catalog/view/theme/";
            echo ($context["theme_dir"] ?? null);
            echo "/bootstrap/js/popper.min.js,catalog/view/theme/";
            echo ($context["theme_dir"] ?? null);
            echo "/bootstrap/js/bootstrap.min.js";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                echo ",";
                echo $context["script"];
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"></script>
";
        }
        // line 94
        if (($context["preload_ss"] ?? null)) {
            // line 95
            echo "<link href=\"catalog/view/theme/";
            echo ($context["theme_dir"] ?? null);
            echo "/javascript/common.js";
            echo ($context["theme_version"] ?? null);
            echo "\" rel=\"preload\" as=\"script\">
";
        }
        // line 97
        if ((($context["webfont"] ?? null) && ($context["webfont_link"] ?? null))) {
            // line 98
            echo ($context["webfont_link"] ?? null);
            echo "
";
        }
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 101
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 101);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 101);
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 104
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo ($context["cust_code"] ?? null);
        echo "
</head>
<body class=\"loading ";
        // line 108
        if (($context["preloader_status"] ?? null)) {
            echo "overflow-hidden";
        }
        echo "\">
";
        // line 109
        if (($context["preloader_status"] ?? null)) {
            // line 110
            echo "<div class=\"preloader d-flex position-fixed t-0 b-0 l-0 r-0 align-items-center justify-content-center z-index-max\" style=\"background: inherit\">
\t<div class=\"spinner-border\" style=\"color: ";
            // line 111
            echo ($context["preloader_color"] ?? null);
            echo "; width: 3rem; height: 3rem; border-width: .25rem\"></div>
\t<script>
\t\tlet\tpreloader = document.querySelector('.preloader');

\t\tlet preloader_remove = () => {
\t\t\tdocument.body.classList.remove('overflow-hidden');
\t\t\tif (preloader != null) preloader.remove();
\t\t}

\t\twindow.addEventListener('DOMContentLoaded', preloader_remove);
\t\tsetTimeout(preloader_remove, ";
            // line 121
            echo ($context["preloader_timeout"] ?? null);
            echo ");
\t</script>
</div>
";
        }
        // line 125
        echo "

<header>
\t<nav id=\"top\" class=\"border-bottom py-2 bg-white\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters\">
\t\t\t\t";
        // line 131
        if ((($context["language"] ?? null) || ($context["currency"] ?? null))) {
            // line 132
            echo "\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t";
            // line 134
            echo ($context["language"] ?? null);
            echo "
            ";
            // line 135
            if ( !($context["catalog_mode"] ?? null)) {
                // line 136
                echo "\t\t\t\t\t\t";
                echo ($context["currency"] ?? null);
                echo "
            ";
            }
            // line 138
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 141
        echo "
\t\t\t\t<div class=\"col";
        // line 142
        if ((($context["language"] ?? null) || (($context["currency"] ?? null) &&  !($context["catalog_mode"] ?? null)))) {
            echo " text-center";
        }
        echo "\">
          ";
        // line 143
        if ((($context["wishlist_status"] ?? null) || ($context["compare_status"] ?? null))) {
            // line 144
            echo "\t\t\t\t\t<div class=\"btn-group\">
            ";
            // line 145
            if (($context["wishlist_status"] ?? null)) {
                // line 146
                echo "\t\t\t\t\t\t<a class=\"btn btn-light p-1 px-sm-2\" href=\"";
                echo ($context["wishlist"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-start\">
\t\t\t\t\t\t\t\t<span class=\"col-auto mx-2 mx-lg-0\">
\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t\t\t\t\t\t<path d=\"M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"col-auto d-none d-md-block ml-2 mr-1\" id=\"wishlist-total\">
\t\t\t\t\t\t\t\t\t";
                // line 154
                echo ($context["text_wishlist"] ?? null);
                echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
            ";
            }
            // line 159
            echo "            ";
            if (($context["compare_status"] ?? null)) {
                // line 160
                echo "\t\t\t\t\t\t<a class=\"btn btn-light p-1 px-sm-2\" href=\"";
                echo ($context["link_compare"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-start\">
\t\t\t\t\t\t\t\t<span class=\"col-auto mx-2 mx-lg-0\">
\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t\t\t\t\t\t<path d=\"M 12 4 A 2 2 0 0 0 10.269531 5 L 5 5 L 2 5 L 2 7 L 4 7 L 0 15 C 0 17.761 2.239 20 5 20 C 7.761 20 10 17.761 10 15 L 6 7 L 10.271484 7 A 2 2 0 0 0 12 8 A 2 2 0 0 0 13.730469 7 L 18 7 L 14 15 C 14 17.761 16.239 20 19 20 C 21.761 20 24 17.761 24 15 L 20 7 L 22 7 L 22 5 L 13.728516 5 A 2 2 0 0 0 12 4 z M 5 9.0214844 L 7.9882812 15 L 2.0117188 15 L 5 9.0214844 z M 19 9.0214844 L 21.988281 15 L 16.011719 15 L 19 9.0214844 z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"col-auto d-none d-md-block ml-2 mr-1\" id=\"compare-total\">
\t\t\t\t\t\t\t\t\t";
                // line 168
                echo ($context["g_text_compare"] ?? null);
                echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
            ";
            }
            // line 173
            echo "\t\t\t\t\t</div>
          ";
        }
        // line 175
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t";
        // line 179
        echo ($context["blog_menu"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 180
        echo ($context["ft_hlinks"] ?? null);
        echo "

            ";
        // line 182
        if ( !($context["catalog_mode"] ?? null)) {
            // line 183
            echo "\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-light dropdown-toggle p-1 px-sm-2\" href=\"#\" title=\"";
            // line 184
            echo ($context["text_account"] ?? null);
            echo "\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<span class=\"row no-gutters align-items-start\">
\t\t\t\t\t\t\t\t\t<span class=\"col-auto mx-2 mx-lg-0\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-18 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"col-auto d-none d-lg-block ml-2 mr-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 192
            echo ($context["text_account"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"col-auto d-none d-lg-block\">
\t\t\t\t\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" >
\t\t\t\t\t\t\t\t\t\t\t<path transform=\"translate(0 2)\" d=\"M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right text-right\">
\t\t\t\t\t\t\t\t";
            // line 202
            if (($context["logged"] ?? null)) {
                // line 203
                echo "\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                echo ($context["account"] ?? null);
                echo "\">";
                echo ($context["text_account"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 204
                echo ($context["order"] ?? null);
                echo "\">";
                echo ($context["text_order"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 205
                echo ($context["transaction"] ?? null);
                echo "\">";
                echo ($context["text_transaction"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 206
                echo ($context["download"] ?? null);
                echo "\">";
                echo ($context["text_download"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 207
                echo ($context["logout"] ?? null);
                echo "\">";
                echo ($context["text_logout"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 209
                echo "\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                echo ($context["register"] ?? null);
                echo "\">";
                echo ($context["text_register"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 210
                echo ($context["login"] ?? null);
                echo "\">";
                echo ($context["text_login"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            ";
        }
        // line 215
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-12 col-lg-3 col-aside order-lg-1\">
        <div class=\"row align-items-center no-gutters\">
          ";
        // line 224
        if (($context["ft_menu"] ?? null)) {
            // line 225
            echo "          <div class=\"col-auto d-lg-none\">
            <button class=\"btn btn-link p-2 rounded-lg shadow-none\" data-toggle=\"modal\" data-target=\"#ftModalMenu\">
              <svg class=\"d-block text-dark\" width=\"28px\" height=\"28px\" fill=\"currentColor\" viewBox=\"0 0 24 24\"  xmlns=\"http://www.w3.org/2000/svg\">
      \t\t\t\t\t<path d=\"M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z\"/>
      \t\t\t\t</svg>
            </button>
          </div>
          ";
        }
        // line 233
        echo "          <div class=\"col\">
            <div id=\"logo\" class=\"text-center text-lg-left my-3 my-lg-4\">
    \t\t\t\t\t";
        // line 235
        if (($context["ft_logo"] ?? null)) {
            echo ($context["ft_logo"] ?? null);
        } elseif (($context["logo"] ?? null)) {
            // line 236
            echo "    \t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\" aria-label=\"Logo\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"></a>
    \t\t\t\t\t";
        }
        // line 238
        echo "    \t\t\t\t</div>
          </div>
          ";
        // line 240
        if ((($context["ft_cart"] ?? null) &&  !($context["catalog_mode"] ?? null))) {
            // line 241
            echo "          <div class=\"col-auto d-lg-none\">
            <button class=\"btn btn-link p-2 rounded-lg shadow-none position-relative\" data-toggle=\"modal\" data-target=\"#ft_popup_cart\">
              <svg class=\"d-block text-dark\" width=\"28px\" height=\"28px\"  fill=\"currentColor\" viewBox=\"0 0 24 24\"  xmlns=\"http://www.w3.org/2000/svg\">
      \t\t\t\t\t<path d=\"M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z\"/>
      \t\t\t\t</svg>
              <span id=\"ft_m_cart_total\"  class=\"position-absolute t-0 r-0 mr-0 mt-1 badge rounded-pill text-gray-400\"></span>
            </button>
            <script>\$(function() { \$('#ft_m_cart_total').html(\$('#ft_cart > button #ft_cart_total .products > b').text()) })</script>
          </div>
          ";
        }
        // line 251
        echo "        </div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-lg-auto order-lg-2\">";
        // line 253
        echo ($context["ft_contacts"] ?? null);
        echo "</div>
\t\t\t<div class=\"col-12 col-lg order-lg-6 mb-3 mb-lg-4\">";
        // line 254
        echo ($context["ft_search"] ?? null);
        echo "</div>
      <div class=\"col-12 col-lg order-lg-3\">";
        // line 255
        echo ($context["ft_links"] ?? null);
        echo "</div>
      <div class=\"col-12 order-lg-4\"><div class=\"d-lg-none mx-n1 mx-sm-0 mt-n1\"><hr class=\"mx-n2 mx-sm-0 mb-4\"></div></div>
      ";
        // line 257
        if ( !($context["catalog_mode"] ?? null)) {
            // line 258
            echo "      <div class=\"col-12 col-md-6 col-lg-auto order-lg-7 mb-lg-4\">";
            echo ($context["ft_cart"] ?? null);
            echo "</div>
      ";
        }
        // line 260
        echo "\t\t\t<div class=\"col-12 col-md-6 col-lg-3 col-aside order-lg-5 mb-lg-4\">";
        echo ($context["ft_menu"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
</header>
<div class=\"content-wrapper\">
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  753 => 260,  747 => 258,  745 => 257,  740 => 255,  736 => 254,  732 => 253,  728 => 251,  716 => 241,  714 => 240,  710 => 238,  698 => 236,  694 => 235,  690 => 233,  680 => 225,  678 => 224,  667 => 215,  662 => 212,  655 => 210,  648 => 209,  641 => 207,  635 => 206,  629 => 205,  623 => 204,  616 => 203,  614 => 202,  601 => 192,  590 => 184,  587 => 183,  585 => 182,  580 => 180,  576 => 179,  570 => 175,  566 => 173,  558 => 168,  546 => 160,  543 => 159,  535 => 154,  523 => 146,  521 => 145,  518 => 144,  516 => 143,  510 => 142,  507 => 141,  502 => 138,  496 => 136,  494 => 135,  490 => 134,  486 => 132,  484 => 131,  476 => 125,  469 => 121,  456 => 111,  453 => 110,  451 => 109,  445 => 108,  440 => 106,  432 => 104,  428 => 103,  417 => 101,  413 => 100,  408 => 98,  406 => 97,  398 => 95,  396 => 94,  371 => 92,  340 => 91,  315 => 89,  284 => 88,  282 => 87,  272 => 84,  266 => 82,  264 => 81,  260 => 80,  256 => 79,  252 => 78,  247 => 77,  242 => 75,  238 => 74,  233 => 73,  231 => 72,  225 => 70,  219 => 68,  217 => 67,  215 => 66,  202 => 64,  196 => 62,  194 => 61,  190 => 60,  186 => 58,  182 => 56,  180 => 55,  178 => 54,  172 => 53,  167 => 52,  160 => 50,  155 => 49,  153 => 48,  151 => 47,  146 => 45,  143 => 44,  139 => 42,  135 => 40,  133 => 39,  123 => 31,  116 => 28,  110 => 26,  108 => 25,  104 => 24,  98 => 22,  96 => 21,  90 => 19,  88 => 18,  82 => 16,  80 => 15,  75 => 14,  69 => 12,  67 => 11,  62 => 10,  56 => 8,  54 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/common/header.twig", "");
    }
}
