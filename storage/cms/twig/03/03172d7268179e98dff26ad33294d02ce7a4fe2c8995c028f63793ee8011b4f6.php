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

/* /home/vagrant/code/sensomp/themes/senso/partials/site/submenu.htm */
class __TwigTemplate_8779b81176f8d933f55107b99d86aa9042156b72f496fef16fd391ed1cddd091 extends \Twig\Template
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
        echo "<div class=\"section-blk sub\">
    <div class=\"container-fluid subnav\">
        <div class=\"row\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenuSub"] ?? null), "menuItems", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            <div class=\"col";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 5)) {
                echo " active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 5), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo "</a></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/sensomp/themes/senso/partials/site/submenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-blk sub\">
    <div class=\"container-fluid subnav\">
        <div class=\"row\">
        {% for item in staticMenuSub.menuItems %}
            <div class=\"col{% if item.isActive %} active{% endif %}\"><a href=\"{{ item.url }}\">{{ item.title }}</a></div>
        {% endfor %}
        </div>
    </div>
</div>", "/home/vagrant/code/sensomp/themes/senso/partials/site/submenu.htm", "");
    }
}
