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

/* cards/pt_team_card.html.twig */
class __TwigTemplate_bf20500bb993f1b23d3a10df34b5df63326dc0e844b1d0b3aab93dc5c8b758d1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cards/pt_team_card.html.twig"));

        // line 1
        echo "<div class=\"team_card card clearfix\" team-id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 1, $this->source); })()), "team_id", [], "any", false, false, false, 1), "html", null, true);
        echo ">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 2, $this->source); })()), "team_id", [], "any", false, false, false, 2), "html", null, true);
        echo "/edit\">
    <h3 >";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "team_name", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "team_name", [], "any", false, false, false, 3), "Unnamed team")) : ("Unnamed team")), "html", null, true);
        echo "</h3>
    <div class=\"team_card_pokemon\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 5, $this->source); })()), "sprites", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["sprite"]) {
            // line 6
            echo "            <img class=\"pokemon_img\" src=\"";
            echo twig_escape_filter($this->env, (((isset($context["sprite"]) || array_key_exists("sprite", $context))) ? (_twig_default_filter($context["sprite"], "/images/pokeball.png")) : ("/images/pokeball.png")), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sprite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
    <div>
        <b>Total XP: </b>";
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "total_experience", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "total_experience", [], "any", false, false, false, 10), 0)) : (0)), "html", null, true);
        echo "
    </div>
    <div class=\"card_list\">
        <b>Types:</b>
        <ul>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 15, $this->source); })()), "types", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 16
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>
    </div>
    <div class=\"card_list\">
        <b>Abilities:</b>
        <ul>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 23, $this->source); })()), "abilities", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
            // line 24
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["ability"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </ul>
    </div>
    </a>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cards/pt_team_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  103 => 24,  99 => 23,  92 => 18,  83 => 16,  79 => 15,  71 => 10,  67 => 8,  58 => 6,  54 => 5,  49 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"team_card card clearfix\" team-id={{ team.team_id }}>
    <a href=\"{{ team.team_id  }}/edit\">
    <h3 >{{ team.team_name|default('Unnamed team') }}</h3>
    <div class=\"team_card_pokemon\">
        {% for sprite in team.sprites %}
            <img class=\"pokemon_img\" src=\"{{ sprite | default('/images/pokeball.png') }}\">
        {% endfor %}
    </div>
    <div>
        <b>Total XP: </b>{{ team.total_experience|default(0) }}
    </div>
    <div class=\"card_list\">
        <b>Types:</b>
        <ul>
            {% for type in team.types %}
                <li>{{ type }}</li>
            {% endfor %}
        </ul>
    </div>
    <div class=\"card_list\">
        <b>Abilities:</b>
        <ul>
            {% for ability in team.abilities %}
                <li>{{ ability }}</li>
            {% endfor %}
        </ul>
    </div>
    </a>
</div>", "cards/pt_team_card.html.twig", "/application/pokemon-tournament/templates/cards/pt_team_card.html.twig");
    }
}
