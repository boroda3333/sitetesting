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

/* ft_frame/template/information/contact.twig */
class __TwigTemplate_010e4024ad6ffa6b32fb498ba8690fad54fbe6938172cdd07db21dd0c98df6a8 extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">

  <div class=\"row\">
\t\t";
        // line 5
        if (($context["column_left"] ?? null)) {
            // line 6
            echo "\t\t<div class=\"col-12 col-sm col-lg-3 order-lg-1 col-aside\">
\t\t\t";
            // line 7
            echo ($context["column_left"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 10
        echo "\t\t";
        if (($context["column_right"] ?? null)) {
            // line 11
            echo "\t\t<div class=\"col-12 col-sm col-lg-3 order-lg-3 col-asid\">
\t\t\t";
            // line 12
            echo ($context["column_right"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 15
        echo "\t\t<div id=\"content\" class=\"col-12 col-lg order-lg-2 mb-3\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb p-0 mb-3 bg-transparent\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19) == 1)) {
                // line 20
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 21);
                echo "\"  itemprop=\"item\">
              <meta itemprop=\"name\" content=\"";
                // line 22
                echo ($context["g_text_home"] ?? null);
                echo "\" />
            \t<svg class=\"ft-icon-18 d-block\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
            \t\t<path d=\"M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z\"/>
            \t</svg>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27);
                echo "\" />
          </li>
          ";
            } elseif ((twig_length_filter($this->env,             // line 29
($context["breadcrumbs"] ?? null)) != twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29))) {
                // line 30
                echo "          <li class=\"breadcrumb-item p-0\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            <a class=\"text-dark\" href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 31);
                echo "\" itemprop=\"item\">
              <span itemprop=\"name\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 32);
                echo "</span>
            </a>
            <meta itemprop=\"position\" content=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34);
                echo "\" />
          </li>
          ";
            } else {
                // line 37
                echo "          <li class=\"breadcrumb-item p-0 active\">
            <span>";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 38);
                echo "</span>
          </li>
          ";
            }
            // line 41
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </ol>
      </nav>
\t\t\t";
        // line 44
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1 class=\"h2 mb-4\">";
        // line 45
        echo ($context["heading_title"] ?? null);
        echo "</h1>

\t\t\t";
        // line 47
        if (($context["error_warning"] ?? null)) {
            // line 48
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 50
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"card-title m-0\">";
        // line 55
        echo ($context["text_location"] ?? null);
        echo "</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
        // line 59
        if (($context["image"] ?? null)) {
            // line 60
            echo "\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 61
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-fluid mb-3 mb-md-0\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<h6>";
        // line 66
        echo ($context["store"] ?? null);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t<address class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t";
        // line 68
        echo ($context["address"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        if (($context["geocode"] ?? null)) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-sm btn-primary\">";
            echo ($context["button_map"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<h6>";
        // line 76
        echo ($context["text_telephone"] ?? null);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t";
        // line 77
        echo ($context["telephone"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
        // line 80
        if (($context["fax"] ?? null)) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 82
            echo ($context["text_fax"] ?? null);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t";
            // line 83
            echo ($context["fax"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 86
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 88
        if ((($context["open"] ?? null) || ($context["comment"] ?? null))) {
            // line 89
            echo "\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
            // line 90
            if (($context["open"] ?? null)) {
                // line 91
                echo "\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<h6>";
                // line 92
                echo ($context["text_open"] ?? null);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t";
                // line 93
                echo ($context["open"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 96
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 97
            if (($context["comment"] ?? null)) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<h6>";
                // line 99
                echo ($context["text_comment"] ?? null);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t";
                // line 100
                echo ($context["comment"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 103
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
        // line 109
        if (($context["locations"] ?? null)) {
            // line 110
            echo "\t\t\t\t<h4 class=\"mb-3\">";
            echo ($context["text_store"] ?? null);
            echo "</h4>
\t\t\t\t<div id=\"accordion\">
\t\t\t\t\t";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 113
                echo "\t\t\t\t\t<div class=\"card mb-2\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"card-title m-0\"><a href=\"#collapse-location";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 115);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 115);
                echo "</a></h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse\" id=\"collapse-location";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 117);
                echo "\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t";
                // line 120
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 120)) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 122);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 122);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 122);
                    echo "\" class=\"img-fluid mb-3 mb-md-0\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6>";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 127);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t<address class=\"mb-2\">";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 128);
                echo "</address>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 129
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 129)) {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 130));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-sm btn-primary\">";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6>";
                // line 134
                echo ($context["text_telephone"] ?? null);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 135);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 137
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<h6>";
                    // line 139
                    echo ($context["text_fax"] ?? null);
                    echo "</h6>
\t\t\t\t\t\t\t\t\t\t";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 140);
                    echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
                // line 145
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 145)) {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6>";
                    // line 147
                    echo ($context["text_open"] ?? null);
                    echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 148);
                    echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6>";
                    // line 153
                    echo ($context["text_comment"] ?? null);
                    echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 154);
                    echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 157
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 165
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"card-title m-0\">";
        // line 169
        echo ($context["text_contact"] ?? null);
        echo "</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<form action=\"";
        // line 172
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- <label for=\"input-name\">";
        // line 176
        echo ($context["entry_name"] ?? null);
        echo "</label> -->
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 177
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control";
        if (($context["error_name"] ?? null)) {
            echo " border-danger";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo " *\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 178
        if (($context["error_name"] ?? null)) {
            // line 179
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 181
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- <label for=\"input-email\">";
        // line 185
        echo ($context["entry_email"] ?? null);
        echo "</label> -->
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 186
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control";
        if (($context["error_email"] ?? null)) {
            echo " border-danger";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo " *\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 187
        if (($context["error_email"] ?? null)) {
            // line 188
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 190
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- <label for=\"input-enquiry\">";
        // line 194
        echo ($context["entry_enquiry"] ?? null);
        echo "</label> -->
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"enquiry\" rows=\"5\" id=\"input-enquiry\" class=\"form-control";
        // line 195
        if (($context["error_enquiry"] ?? null)) {
            echo " border-danger";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_enquiry"] ?? null);
        echo " *\">";
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 196
        if (($context["error_enquiry"] ?? null)) {
            // line 197
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 199
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                  ";
        // line 202
        if (($context["captcha"] ?? null)) {
            // line 203
            echo "                  <div class=\"form-group\">
          \t\t\t\t";
            // line 204
            echo ($context["captcha"] ?? null);
            echo "
                  </div>
                  ";
        }
        // line 207
        echo "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
        // line 208
        if (($context["text_agree"] ?? null)) {
            // line 209
            echo "\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" ";
            // line 210
            if (($context["agree"] ?? null)) {
                echo " checked=\"checked\" ";
            }
            echo " class=\"float-left mr-2\" />
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">";
            // line 211
            echo ($context["text_agree"] ?? null);
            echo "</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 213
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
            echo ($context["button_submit"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
        }
        // line 217
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
    </div>
  </div>
\t";
        // line 225
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 227
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ft_frame/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 227,  612 => 225,  602 => 217,  596 => 215,  591 => 213,  586 => 211,  580 => 210,  577 => 209,  575 => 208,  572 => 207,  566 => 204,  563 => 203,  561 => 202,  556 => 199,  550 => 197,  548 => 196,  538 => 195,  534 => 194,  528 => 190,  522 => 188,  520 => 187,  510 => 186,  506 => 185,  500 => 181,  494 => 179,  492 => 178,  482 => 177,  478 => 176,  471 => 172,  465 => 169,  459 => 165,  455 => 163,  444 => 157,  438 => 154,  434 => 153,  431 => 152,  428 => 151,  422 => 148,  418 => 147,  415 => 146,  413 => 145,  409 => 143,  403 => 140,  399 => 139,  396 => 138,  394 => 137,  389 => 135,  385 => 134,  381 => 132,  371 => 130,  369 => 129,  365 => 128,  361 => 127,  357 => 125,  347 => 122,  344 => 121,  342 => 120,  336 => 117,  329 => 115,  325 => 113,  321 => 112,  315 => 110,  313 => 109,  307 => 105,  303 => 103,  297 => 100,  293 => 99,  290 => 98,  288 => 97,  285 => 96,  279 => 93,  275 => 92,  272 => 91,  270 => 90,  267 => 89,  265 => 88,  261 => 86,  255 => 83,  251 => 82,  248 => 81,  246 => 80,  240 => 77,  236 => 76,  231 => 73,  221 => 71,  219 => 70,  214 => 68,  209 => 66,  205 => 64,  195 => 61,  192 => 60,  190 => 59,  183 => 55,  176 => 50,  170 => 48,  168 => 47,  163 => 45,  159 => 44,  155 => 42,  141 => 41,  135 => 38,  132 => 37,  126 => 34,  121 => 32,  117 => 31,  114 => 30,  112 => 29,  107 => 27,  99 => 22,  95 => 21,  92 => 20,  89 => 19,  72 => 18,  67 => 15,  61 => 12,  58 => 11,  55 => 10,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/information/contact.twig", "");
    }
}
