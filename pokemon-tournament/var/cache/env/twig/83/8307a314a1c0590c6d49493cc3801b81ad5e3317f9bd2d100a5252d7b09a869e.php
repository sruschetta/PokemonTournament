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

/* cards/pt_pokemon_card.html.twig */
class __TwigTemplate_c69150f165b611d62e2fd15a48a533b17db06216698e14277353d26c55c922d7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cards/pt_pokemon_card.html.twig"));

        // line 1
        echo "<div class=\"pokemon_card card clearfix\">
    <div class=\"pokemon_card_head\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 3, $this->source); })()), "pokemonId", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <input type=\"hidden\" name=\"pokemon_id[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 4, $this->source); })()), "pokemonId", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
        ";
        }
        // line 6
        echo "        <h3 class=\"name\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "name", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "name", [], "any", false, false, false, 6), "Unnamed pokemon")) : ("Unnamed pokemon")), "html", null, true);
        echo "</h3>
        <div>
            <img class=\"pokemon_img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "sprite", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "sprite", [], "any", false, false, false, 8), "/images/pokeball.png")) : ("/images/pokeball.png")), "html", null, true);
        echo "\">
        </div>
    </div>
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 11, $this->source); })()), "baseExperience", [], "any", false, false, false, 11)) {
            // line 12
            echo "    <div>
        <b>Base experience:</b> ";
            // line 13
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "baseExperience", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "baseExperience", [], "any", false, false, false, 13), 0)) : (0)), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 16
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 16, $this->source); })()), "types", [], "any", false, false, false, 16)) {
            // line 17
            echo "    <div class=\"card_list\">
        <b>Types:</b>
        <ul>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 20, $this->source); })()), "types", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 21
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 21));
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </ul>
    </div>
    ";
        }
        // line 26
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 26, $this->source); })()), "abilities", [], "any", false, false, false, 26)) {
            // line 27
            echo "    <div class=\"card_list\">
        <b>Abilities:</b>
        <ul>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 30, $this->source); })()), "abilities", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "ability", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31));
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </ul>
    </div>
    ";
        }
        // line 36
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cards/pt_pokemon_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  122 => 33,  113 => 31,  109 => 30,  104 => 27,  101 => 26,  96 => 23,  87 => 21,  83 => 20,  78 => 17,  75 => 16,  69 => 13,  66 => 12,  64 => 11,  58 => 8,  52 => 6,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pokemon_card card clearfix\">
    <div class=\"pokemon_card_head\">
        {% if pokemon.pokemonId %}
            <input type=\"hidden\" name=\"pokemon_id[]\" value=\"{{ pokemon.pokemonId }}\">
        {% endif %}
        <h3 class=\"name\">{{ pokemon.name | default('Unnamed pokemon') }}</h3>
        <div>
            <img class=\"pokemon_img\" src=\"{{ pokemon.sprite | default('/images/pokeball.png') }}\">
        </div>
    </div>
    {% if pokemon.baseExperience %}
    <div>
        <b>Base experience:</b> {{ pokemon.baseExperience | default(0) }}
    </div>
    {% endif %}
    {% if pokemon.types %}
    <div class=\"card_list\">
        <b>Types:</b>
        <ul>
            {% for type in pokemon.types %}
                <li>{{ type.name|e }}</li>
            {% endfor %}
        </ul>
    </div>
    {%  endif %}
    {% if pokemon.abilities %}
    <div class=\"card_list\">
        <b>Abilities:</b>
        <ul>
            {% for item in pokemon.abilities %}
                <li>{{ item.ability.name|e }}</li>
            {% endfor %}
        </ul>
    </div>
    {%  endif %}
</div>
", "cards/pt_pokemon_card.html.twig", "/application/pokemon-tournament/templates/cards/pt_pokemon_card.html.twig");
    }
}
