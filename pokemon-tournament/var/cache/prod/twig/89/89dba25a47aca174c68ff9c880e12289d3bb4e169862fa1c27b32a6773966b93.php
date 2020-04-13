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
class __TwigTemplate_1851cf4c5bac21c2ce63448f154c9d9bc0bbe5b30c94fd0b37b67c928133d193 extends Template
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
        echo "<div class=\"team_card card clearfix\" team-id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "team_id", [], "any", false, false, false, 1), "html", null, true);
        echo ">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "team_id", [], "any", false, false, false, 2), "html", null, true);
        echo "/edit\">
    <h3 >";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "team_name", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "team_name", [], "any", false, false, false, 3), "Unnamed team")) : ("Unnamed team")), "html", null, true);
        echo "</h3>
    <div class=\"team_card_pokemon\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "sprites", [], "any", false, false, false, 5));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "types", [], "any", false, false, false, 15));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "abilities", [], "any", false, false, false, 23));
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
        return array (  109 => 26,  100 => 24,  96 => 23,  89 => 18,  80 => 16,  76 => 15,  68 => 10,  64 => 8,  55 => 6,  51 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cards/pt_team_card.html.twig", "/application/pokemon-tournament/templates/cards/pt_team_card.html.twig");
    }
}
