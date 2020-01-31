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

/* /home/vagrant/code/sensomp/themes/senso/partials/site/slider.htm */
class __TwigTemplate_6a9e0fcdf9879fa32048edd8b21f7603638e3fe1d1c322d8f96bff7fe1b286de extends \Twig\Template
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
        echo "<div class=\"slider\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slides"]) {
            // line 3
            echo "        <div class=\"slide\" data-img=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["slides"], "slide", [], "any", false, false, false, 3));
            echo "\">
            <div class=\"slide-text\">
                ";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["slides"], "slidercaption", [], "any", false, false, false, 5);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slides'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
<style>

</style>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/sensomp/themes/senso/partials/site/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  50 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"slider\">
    {% for slides in slider %}
        <div class=\"slide\" data-img=\"{{ slides.slide|media }}\">
            <div class=\"slide-text\">
                {{ slides.slidercaption|raw }}
            </div>
        </div>
    {% endfor %}
</div>
<style>

</style>", "/home/vagrant/code/sensomp/themes/senso/partials/site/slider.htm", "");
    }
}
