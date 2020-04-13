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

/* cards/pt_pokemon_types_card.html.twig */
class __TwigTemplate_9ffeb7cffbebbaa4cd184b0b39f44d85a3644c9edda1c418d9da8cbbfc9664dd extends Template
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
        echo "<form class=\"card pokemon_types_card\" id=\"pokemon_type_filter\">
    <div class=\"clearfix\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 4
            echo "        <div class=\"pokemon_types_card_input\">
            <label class=\"name\">
                <input name=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo "\" type=\"checkbox\">
                ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "
            </label>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
    <div class=\"card_buttons\">
        <input class=\"pt_button red\" name=\"filter_type\" value=\"Filter\" type=\"submit\">
        <span class=\"loader red\"></span>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "cards/pt_pokemon_types_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  53 => 7,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cards/pt_pokemon_types_card.html.twig", "/application/pokemon-tournament/templates/cards/pt_pokemon_types_card.html.twig");
    }
}
