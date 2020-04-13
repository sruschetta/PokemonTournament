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

/* pt_pokemon_card.html.twig */
class __TwigTemplate_26f2f0e03d56f75c2660f8fb846b2c14b1a75d02797ae6e292b42fc81667c43a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pt_pokemon_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pt_pokemon_card.html.twig"));

        // line 1
        echo "<div class=\"pokemon_card card clearfix\">
    ";
        // line 2
        if ((isset($context["pokemon_id"]) || array_key_exists("pokemon_id", $context) ? $context["pokemon_id"] : (function () { throw new RuntimeError('Variable "pokemon_id" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "        <input type=\"hidden\" name=\"pokemon_id[]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["pokemon_id"]) || array_key_exists("pokemon_id", $context) ? $context["pokemon_id"] : (function () { throw new RuntimeError('Variable "pokemon_id" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\">
    ";
        }
        // line 5
        echo "    <h3 class=\"name\">";
        echo twig_escape_filter($this->env, (((isset($context["name"]) || array_key_exists("name", $context))) ? (_twig_default_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })()), "Unnamed pokemon")) : ("Unnamed pokemon")), "html", null, true);
        echo "</h3>
    ";
        // line 6
        if ((isset($context["sprite"]) || array_key_exists("sprite", $context) ? $context["sprite"] : (function () { throw new RuntimeError('Variable "sprite" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <div>
        <img class=\"pokemon_img\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, (((isset($context["sprite"]) || array_key_exists("sprite", $context))) ? (_twig_default_filter((isset($context["sprite"]) || array_key_exists("sprite", $context) ? $context["sprite"] : (function () { throw new RuntimeError('Variable "sprite" does not exist.', 8, $this->source); })()), "/images/pokeball.png")) : ("/images/pokeball.png")), "html", null, true);
            echo "\">
    </div>
    ";
        }
        // line 11
        echo "    ";
        if ((isset($context["base_experience"]) || array_key_exists("base_experience", $context) ? $context["base_experience"] : (function () { throw new RuntimeError('Variable "base_experience" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "    <div>
        <b>Base experience:</b> ";
            // line 13
            echo twig_escape_filter($this->env, (((isset($context["base_experience"]) || array_key_exists("base_experience", $context))) ? (_twig_default_filter((isset($context["base_experience"]) || array_key_exists("base_experience", $context) ? $context["base_experience"] : (function () { throw new RuntimeError('Variable "base_experience" does not exist.', 13, $this->source); })()), 0)) : (0)), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 16
        echo "    ";
        if ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "    <div class=\"card_list\">
        <b>Types:</b>
        <ul>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 20, $this->source); })()));
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
        if ((isset($context["abilities"]) || array_key_exists("abilities", $context) ? $context["abilities"] : (function () { throw new RuntimeError('Variable "abilities" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "    <div class=\"card_list\">
        <b>Abilities:</b>
        <ul>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["abilities"]) || array_key_exists("abilities", $context) ? $context["abilities"] : (function () { throw new RuntimeError('Variable "abilities" does not exist.', 30, $this->source); })()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pt_pokemon_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  129 => 33,  120 => 31,  116 => 30,  111 => 27,  108 => 26,  103 => 23,  94 => 21,  90 => 20,  85 => 17,  82 => 16,  76 => 13,  73 => 12,  70 => 11,  64 => 8,  61 => 7,  59 => 6,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pokemon_card card clearfix\">
    {% if pokemon_id %}
        <input type=\"hidden\" name=\"pokemon_id[]\" value=\"{{ pokemon_id }}\">
    {% endif %}
    <h3 class=\"name\">{{ name | default('Unnamed pokemon') }}</h3>
    {% if sprite %}
    <div>
        <img class=\"pokemon_img\" src=\"{{ sprite | default('/images/pokeball.png') }}\">
    </div>
    {% endif %}
    {% if base_experience %}
    <div>
        <b>Base experience:</b> {{ base_experience | default(0) }}
    </div>
    {% endif %}
    {% if types %}
    <div class=\"card_list\">
        <b>Types:</b>
        <ul>
            {% for type in types %}
                <li>{{ type.name|e }}</li>
            {% endfor %}
        </ul>
    </div>
    {%  endif %}
    {% if abilities %}
    <div class=\"card_list\">
        <b>Abilities:</b>
        <ul>
            {% for item in abilities %}
                <li>{{ item.ability.name|e }}</li>
            {% endfor %}
        </ul>
    </div>
    {%  endif %}
</div>
", "pt_pokemon_card.html.twig", "/application/pokemon-tournament/templates/pt_pokemon_card.html.twig");
    }
}
