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
class __TwigTemplate_9766bb8414ba12ed494e90fa9a4f7943ef901f8356907e9b28181e8c6a582e31 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cards/pt_pokemon_types_card.html.twig"));

        // line 1
        echo "<form class=\"card pokemon_types_card\" id=\"pokemon_type_filter\">
    <div class=\"clearfix\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 3, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  66 => 11,  56 => 7,  52 => 6,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"card pokemon_types_card\" id=\"pokemon_type_filter\">
    <div class=\"clearfix\">
    {% for type in types %}
        <div class=\"pokemon_types_card_input\">
            <label class=\"name\">
                <input name=\"{{ type.name }}\" type=\"checkbox\">
                {{ type.name }}
            </label>
        </div>
    {% endfor %}
    </div>
    <div class=\"card_buttons\">
        <input class=\"pt_button red\" name=\"filter_type\" value=\"Filter\" type=\"submit\">
        <span class=\"loader red\"></span>
    </div>
</form>", "cards/pt_pokemon_types_card.html.twig", "/application/pokemon-tournament/templates/cards/pt_pokemon_types_card.html.twig");
    }
}
