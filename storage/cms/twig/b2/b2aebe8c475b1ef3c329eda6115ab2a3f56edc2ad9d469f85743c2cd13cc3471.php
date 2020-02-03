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

/* /home/vagrant/code/sensomp/themes/senso/partials/site/header.htm */
class __TwigTemplate_1fe05186105b831eb58e41da5ce4af1c4ddfc309c909c30dcd823f4d82b7cb14 extends \Twig\Template
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
        echo "<header class=\"fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"header\">
                    <a href=\"/\"><img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brand/logo.png");
        echo "\" class=\"logo-img\" alt=\"\"></a>
                    <a href=\"#\" class=\"burger\"><span></span><span></span><span></span></a>
                    ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/sensomp/themes/senso/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"header\">
                    <a href=\"/\"><img src=\"{{ 'assets/images/brand/logo.png'|theme }}\" class=\"logo-img\" alt=\"\"></a>
                    <a href=\"#\" class=\"burger\"><span></span><span></span><span></span></a>
                    {% partial 'site/menu' %}
                </div>
            </div>
        </div>
    </div>
</header>", "/home/vagrant/code/sensomp/themes/senso/partials/site/header.htm", "");
    }
}
