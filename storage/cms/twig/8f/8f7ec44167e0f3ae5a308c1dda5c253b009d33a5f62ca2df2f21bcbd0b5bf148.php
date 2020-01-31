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

/* /home/vagrant/code/sensomp/themes/senso/partials/site/footer.htm */
class __TwigTemplate_d739edaa8b29d439e68e32584ea02c569e4946bfe4f0544cf63d9f944a07a5da extends \Twig\Template
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
        echo "<footer>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"cta position-relative\">
                    <p><a href=\"#\" class=\"stretched-link\">Rezervirajte si brezplačen posvet</a></p>
                </div>
            </div>
            <div class=\"col\">                
                <div class=\"cta\">
                    Pokličite nas
                    <p>+386 40 466 626</p>
                </div>
            </div>
            <div class=\"col\">
                <p>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 17), "isHidden", [], "any", false, false, false, 17)) {
                // line 18
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 18), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 18), "html", null, true);
                echo "</a><br>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                </p>
            </div>
        </div>
        <div class=\"row\">
             <div class=\"col\">
                <p class=\"copy\">Copyright &copy; 2019";
        // line 25
        if ((($context["today"] ?? null) > 2019)) {
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        }
        echo " | Vse pravice pridržane.</p>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/sensomp/themes/senso/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  72 => 20,  60 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"cta position-relative\">
                    <p><a href=\"#\" class=\"stretched-link\">Rezervirajte si brezplačen posvet</a></p>
                </div>
            </div>
            <div class=\"col\">                
                <div class=\"cta\">
                    Pokličite nas
                    <p>+386 40 466 626</p>
                </div>
            </div>
            <div class=\"col\">
                <p>
                    {% for item in staticMenu.menuItems if not item.viewBag.isHidden%}
                        <a href=\"{{ item.url }}\">{{ item.title }}</a><br>
                    {% endfor %}
                </p>
            </div>
        </div>
        <div class=\"row\">
             <div class=\"col\">
                <p class=\"copy\">Copyright &copy; 2019{% if today > 2019 %} - {{ \"now\"|date(\"Y\") }}{% endif %} | Vse pravice pridržane.</p>
            </div>
        </div>
    </div>
</footer>", "/home/vagrant/code/sensomp/themes/senso/partials/site/footer.htm", "");
    }
}
