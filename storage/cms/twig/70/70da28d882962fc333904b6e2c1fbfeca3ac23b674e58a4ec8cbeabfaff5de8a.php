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

/* /home/vagrant/code/sensomp/themes/senso/partials/site/head_default.htm */
class __TwigTemplate_a7e1e6d2b60cc2b63700eaba7069897a8cf52897e3369bb1757de35877d7ff96 extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
<title>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "title", [], "any", false, false, false, 2), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "meta_description", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "meta_title", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"Blaž Cigale <blaz.cigale@gmail.com>\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\"/>
<meta name=\"format-detection\" content=\"telephone=no\"/>

<link rel=\"icon\" type=\"image/x-ico\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("favicon.ico");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css?v=0.0.15");
        echo "\">

";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/sensomp/themes/senso/partials/site/head_default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 11,  57 => 10,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<title>{{ this.page.title }}</title>
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title }}\">
<meta name=\"author\" content=\"Blaž Cigale <blaz.cigale@gmail.com>\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\"/>
<meta name=\"format-detection\" content=\"telephone=no\"/>

<link rel=\"icon\" type=\"image/x-ico\" href=\"{{ 'favicon.ico'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css?v=0.0.15'|theme }}\">

{% styles %}", "/home/vagrant/code/sensomp/themes/senso/partials/site/head_default.htm", "");
    }
}
