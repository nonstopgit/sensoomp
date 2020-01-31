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

/* /home/vagrant/code/sensomp/themes/senso/partials/site/heading-title.htm */
class __TwigTemplate_dcbe8add5f9fcf220dc838523861488e24a39f74affb7ab0aea2a4963ce88bd0 extends \Twig\Template
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
        if (($context["header"] ?? null)) {
            // line 2
            echo "    ";
            $context["headerImage"] = $this->extensions['System\Twig\Extension']->mediaFilter(($context["header"] ?? null));
        } else {
            // line 4
            echo "    ";
            $context["headerImage"] = "/storage/app/media/content/header/header-sample.jpg";
        }
        // line 6
        echo "<div class=\"headerimage";
        echo twig_escape_filter($this->env, ($context["headersize"] ?? null), "html", null, true);
        echo "\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, ($context["headerImage"] ?? null), "html", null, true);
        echo "');\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"text\">
                <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
                <h3>";
        // line 11
        echo ($context["caption"] ?? null);
        echo "</h3>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/sensomp/themes/senso/partials/site/heading-title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  57 => 10,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if header %}
    {% set headerImage = header|media %}
{% else %}
    {% set headerImage = \"/storage/app/media/content/header/header-sample.jpg\" %}
{% endif %}
<div class=\"headerimage{{ headersize }}\" style=\"background-image: url('{{ headerImage }}');\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"text\">
                <h1>{{ this.page.title }}</h1>
                <h3>{{ caption|raw }}</h3>
            </div>
        </div>
    </div>
</div>", "/home/vagrant/code/sensomp/themes/senso/partials/site/heading-title.htm", "");
    }
}
