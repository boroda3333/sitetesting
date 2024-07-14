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

/* ft_frame/template/extension/module/frametheme/ft_fmap.twig */
class __TwigTemplate_2f67cabc2c08487107eb02f4e1f0928e4c9315df02c5dc2ba604cfaa9b5b068a extends \Twig\Template
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
        if (($context["fmap_status"] ?? null)) {
            // line 2
            if (($context["get_map_code"] ?? null)) {
                // line 3
                echo "<div class=\"modal-header no-gutters\">
\t<div class=\"col-auto\">
\t\t<svg class=\"d-block ft-icon-24 my-0 mr-3 text-gray-500\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t<path d=\"M20.5 3l-.16.03L15 5.1 9 3 3.36 4.9c-.21.07-.36.25-.36.48V20.5c0 .28.22.5.5.5l.16-.03L9 18.9l6 2.1 5.64-1.9c.21-.07.36-.25.36-.48V3.5c0-.28-.22-.5-.5-.5zM15 19l-6-2.11V5l6 2.11V19z\"/>
\t\t</svg>
\t</div>
\t<div class=\"col\">
\t\t<div class=\"h5 modal-title\">";
                // line 10
                echo ($context["text_title"] ?? null);
                echo "</div>
\t</div>
\t<div class=\"col-auto\">
\t\t<a href=\"#\" class=\"d-block ml-2\" data-dismiss=\"modal\">
\t\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\"></path>
\t\t\t</svg>
\t\t</a>
\t</div>
</div>
<div class=\"modal-body position-relative\">
  <div class=\"modal-load-mask text-muted d-flex justify-content-center align-items-center h-100 w-100\">
  \t<div class=\"spinner-border text-gray-300\"></div>
  </div>
  <div class=\"code-container position-absolute t-0 b-0 r-0 l-0\">
    ";
                // line 25
                echo ($context["fmap_code"] ?? null);
                echo "
  </div>
</div>
";
                // line 28
                if (($context["geocode"] ?? null)) {
                    // line 29
                    echo "<div class=\"modal-footer\">
\t<a href=\"";
                    // line 30
                    echo ($context["geocode"] ?? null);
                    echo "\" class=\"btn btn-primary pr-4 pl-3\">
\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t<div class=\"col-auto\">
\t\t\t\t<svg class=\"d-block ft-icon-24 mr-2 \" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71z\"/>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div class=\"col-auto\">
\t\t\t\t";
                    // line 38
                    echo ($context["text_app"] ?? null);
                    echo "
\t\t\t</div>
\t\t</div>
\t</a>
</div>
";
                }
            } else {
                // line 45
                echo "<div class=\"mb-n5 pb-1\">
\t<div class=\"container position-relative\">
\t\t<div class=\"pb-4\">
      <div class=\"mb-3 position-relative\">
        <div class=\"position-relative\">
          <svg class=\"d-block img-fluid\" width=\"1120\" height=\"84\" xmlns=\"http://www.w3.org/2000/svg\"></svg>
          <img class=\"d-block position-absolute t-0 l-0 img-fluid w-100 ft-lazy-img\" src=\"";
                // line 51
                echo ($context["map_bg_src_holder"] ?? null);
                echo "\" data-src=\"";
                echo ($context["map_bg"] ?? null);
                echo "\" alt=\"Map\">
        </div>
      </div>
\t\t</div>
    <div class=\"position-absolute l-50p b-0 ml-n4\">
      <div class=\"rounded-circle border shadow-lg ml-n1\">
    \t\t<div class=\"position-relative rounded-circle p-2 bg-white z-index-2\">
    \t\t\t<button type=\"button\" class=\"btn btn-danger p-2 rounded-circle\" title=\"";
                // line 58
                echo ($context["text_show_map"] ?? null);
                echo "\" onclick=\"show_fmap();\">
    \t\t\t\t<svg class=\"d-block ft-icon-18 m-0 text-white\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
    \t\t\t\t\t<path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/>
    \t\t\t\t</svg>
    \t\t\t</button>
    \t\t</div>
    \t</div>
    </div>
\t</div>
</div>
<script>
  var show_fmap = function() {
    \$.ajax({
  \t\turl: 'index.php?route=extension/module/frametheme/ft_fmap&get_map_code=1',
  \t\ttype: 'get',
  \t\tdataType: 'html',
  \t\tbeforeSend: function() {

        \$('#ft_fmap, .modal-backdrop').remove();

        html  = '<div id=\"ft_fmap\" class=\"modal fade p-0 m-0\" tabindex=\"-1\" role=\"dialog\">';
        html += '  <div class=\"modal-dialog modal-dialog-centered w-100 mw-100 mh-100 h-100 p-2 p-lg-5 m-0\" role=\"document\">';
        html += '    <div class=\"modal-content mw-100 mh-100 h-100 p-0 m-0 overflow-hidden\">';
        html += '      <div class=\"modal-load-mask text-muted d-flex justify-content-center align-items-center h-100 w-100\">';
  \t\t\thtml += '\t\t\t\t\t<div class=\"spinner-border text-gray-300\"></div>';
  \t\t\thtml += '    \t </div>';
        html += '    </div>';
        html += '  </div>';
        html += '</div>';

        \$('body').append(html);
\t\t\t\tif (typeof add_modal_listner == 'function') add_modal_listner('#ft_fmap', 'map');
        \$('#ft_fmap').modal('show');

  \t\t},
  \t\tsuccess: function(data) {
  \t\t\t\$('#ft_fmap .modal-content').html(data);
  \t\t},
  \t\terror: function(xhr, ajaxOptions, thrownError) {
  \t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
  \t\t}
  \t});
  }
</script>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/frametheme/ft_fmap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 58,  108 => 51,  100 => 45,  90 => 38,  79 => 30,  76 => 29,  74 => 28,  68 => 25,  50 => 10,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/frametheme/ft_fmap.twig", "");
    }
}
