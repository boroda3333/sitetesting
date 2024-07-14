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

/* ft_frame/template/extension/module/frametheme/ft_modal.twig */
class __TwigTemplate_c55950ddbbe4c4fb980b8aa73b2842a3cb7503ce294bac65a29da942b1717ea9 extends \Twig\Template
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
        if (($context["status"] ?? null)) {
            // line 2
            echo "<div class=\"modal fade\" id=\"ft_custom_modal\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-dialog-centered ";
            // line 3
            echo ($context["size"] ?? null);
            echo "\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header no-gutters\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"h5 modal-title\">";
            // line 7
            echo ($context["heading"] ?? null);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<a href=\"#\" class=\"d-block ml-2\" data-dismiss=\"modal\">
\t\t\t\t\t\t<svg class=\"d-block ft-icon-24 m-0 text-gray-500 darker-on-hover\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
            // line 18
            echo ($context["content"] ?? null);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\t!function(e){\"function\"==typeof define&&define.amd?define([\"jquery\"],e):\"object\"==typeof exports?module.exports=e(require(\"jquery\")):e(jQuery)}(function(e){var n=/\\+/g;function o(e){return r.raw?e:encodeURIComponent(e)}function i(o,i){var t=r.raw?o:function(e){0===e.indexOf('\"')&&(e=e.slice(1,-1).replace(/\\\\\"/g,'\"').replace(/\\\\\\\\/g,\"\\\\\"));try{return e=decodeURIComponent(e.replace(n,\" \")),r.json?JSON.parse(e):e}catch(e){}}(o);return e.isFunction(i)?i(t):t}var r=e.cookie=function(n,t,c){if(arguments.length>1&&!e.isFunction(t)){if(\"number\"==typeof(c=e.extend({},r.defaults,c)).expires){var u=c.expires,s=c.expires=new Date;s.setMilliseconds(s.getMilliseconds()+864e5*u)}return document.cookie=[o(n),\"=\",(a=t,o(r.json?JSON.stringify(a):String(a))),c.expires?\"; expires=\"+c.expires.toUTCString():\"\",c.path?\"; path=\"+c.path:\"\",c.domain?\"; domain=\"+c.domain:\"\",c.secure?\"; secure\":\"\"].join(\"\")}for(var a,d,p=n?void 0:{},f=document.cookie?document.cookie.split(\"; \"):[],l=0,m=f.length;l<m;l++){var x=f[l].split(\"=\"),g=(d=x.shift(),r.raw?d:decodeURIComponent(d)),v=x.join(\"=\");if(n===g){p=i(v,t);break}n||void 0===(v=i(v))||(p[g]=v)}return p};r.defaults={},e.removeCookie=function(n,o){return e.cookie(n,\"\",e.extend({},o,{expires:-1})),!e.cookie(n)}});

\tfunction modalshow(){
\t\tif(\$.cookie('ft_custom_modal_sown') == null) {
\t\t\tsetTimeout(function() {
\t\t\t\t\$('#ft_custom_modal').modal('show');
\t\t\t}, 100)
\t\t}
\t}

\t\$(window).on('load', function () {
\t\tmodalshow();
\t\tif (\$.cookie('ft_custom_modal_sown') != 1) {
\t\t\t\$.cookie('ft_custom_modal_sown', '1'";
            // line 38
            if (($context["cookie_days"] ?? null)) {
                echo ", { expires: ";
                echo ($context["cookie_days"] ?? null);
                echo " }";
            }
            echo ");
\t\t}
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "ft_frame/template/extension/module/frametheme/ft_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  63 => 18,  49 => 7,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ft_frame/template/extension/module/frametheme/ft_modal.twig", "");
    }
}
