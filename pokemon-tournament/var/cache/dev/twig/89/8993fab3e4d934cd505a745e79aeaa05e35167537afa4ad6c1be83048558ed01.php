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

/* pt_team_card.html.twig */
class __TwigTemplate_b158412e65cb265cbf998e4a0e95e238cbab50f072dc6a34b18094f080d28f45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pt_team_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pt_team_card.html.twig"));

        // line 1
        echo "<div class=\"team_card card clearfix\" team-id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 1, $this->source); })()), "team_id", [], "any", false, false, false, 1), "html", null, true);
        echo ">
    <h3 >";
        // line 2
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "team_name", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "team_name", [], "any", false, false, false, 2), "Unnamed team")) : ("Unnamed team")), "html", null, true);
        echo "</h3>
    <div class=\"team_card_pokemon\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 4, $this->source); })()), "sprites", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["sprite"]) {
            // line 5
            echo "            <img class=\"pokemon_img\" src=\"";
            echo twig_escape_filter($this->env, (((isset($context["sprite"]) || array_key_exists("sprite", $context))) ? (_twig_default_filter($context["sprite"], "/images/pokeball.png")) : ("/images/pokeball.png")), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sprite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>
    <div>
        <b>Total XP: </b>";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "total_experience", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "total_experience", [], "any", false, false, false, 9), 0)) : (0)), "html", null, true);
        echo "
    </div>
    <div class=\"card_list\">
        <b>Types:</b>
        <ul>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 14, $this->source); })()), "types", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 15
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
    </div>
    <div class=\"card_list\">
        <b>Abilities:</b>
        <ul>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 22, $this->source); })()), "abilities", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["ability"]) {
            // line 23
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["ability"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </ul>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pt_team_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 25,  102 => 23,  98 => 22,  91 => 17,  82 => 15,  78 => 14,  70 => 9,  66 => 7,  57 => 5,  53 => 4,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"team_card card clearfix\" team-id={{ team.team_id }}>
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
</div>", "pt_team_card.html.twig", "/application/pokemon-tournament/templates/pt_team_card.html.twig");
    }
}
