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
class __TwigTemplate_acd75ad3663460335131d59c88e19365fa5a6e546d26736d87f11ca50cfe3d6f extends Template
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
        echo "<div class=\"pokemon_card card clearfix\">
    <div class=\"pokemon_card_head\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "pokemonId", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <input type=\"hidden\" name=\"pokemon_id[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "pokemonId", [], "any", false, false, false, 4), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "baseExperience", [], "any", false, false, false, 11)) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "types", [], "any", false, false, false, 16)) {
            // line 17
            echo "    <div class=\"card_list\">
        <b>Types:</b>
        <ul>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "types", [], "any", false, false, false, 20));
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
        if (twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "abilities", [], "any", false, false, false, 26)) {
            // line 27
            echo "    <div class=\"card_list\">
        <b>Abilities:</b>
        <ul>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pokemon"] ?? null), "abilities", [], "any", false, false, false, 30));
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
        return array (  124 => 36,  119 => 33,  110 => 31,  106 => 30,  101 => 27,  98 => 26,  93 => 23,  84 => 21,  80 => 20,  75 => 17,  72 => 16,  66 => 13,  63 => 12,  61 => 11,  55 => 8,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cards/pt_pokemon_card.html.twig", "/application/pokemon-tournament/templates/cards/pt_pokemon_card.html.twig");
    }
}
