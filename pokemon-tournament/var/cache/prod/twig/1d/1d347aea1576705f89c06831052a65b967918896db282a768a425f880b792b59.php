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

/* cards/pt_team_header_card.html.twig */
class __TwigTemplate_abea75e5ab54d25cfae758e99fe8511d0b182ae204aee0cd8e1f1285282c1aa6 extends Template
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
        echo "<div class=\"card team_head_card\">
    <div class=\"team_head_card_field\">
        <label for=\"team_name\"><b>";
        // line 3
        echo twig_escape_filter($this->env, (((isset($context["team_label"]) || array_key_exists("team_label", $context))) ? (_twig_default_filter(($context["team_label"] ?? null), "Team Name")) : ("Team Name")), "html", null, true);
        echo "</b></label>
        <input type=\"text\" name=\"team_name\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (((isset($context["team_name"]) || array_key_exists("team_name", $context))) ? (_twig_default_filter(($context["team_name"] ?? null))) : ("")), "html", null, true);
        echo "\">
        <span class=\"field_error\"></span>
    </div>
    <div class=\"team_head_card_buttons team_head_card_field\">
        <input type=\"submit\" name=\"team_submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (((isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context))) ? (_twig_default_filter(($context["submit_button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        echo "\" class=\"pt_button\">
        <span class=\"loader\"></span>
        ";
        // line 10
        if (((isset($context["new_team"]) || array_key_exists("new_team", $context)) && ($context["new_team"] ?? null))) {
            // line 11
            echo "            <div class=\"field_error\"></div>
        ";
        } else {
            // line 13
            echo "            <div class=\"message\"></div>
        ";
        }
        // line 15
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "cards/pt_team_header_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  63 => 13,  59 => 11,  57 => 10,  52 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cards/pt_team_header_card.html.twig", "/application/pokemon-tournament/templates/cards/pt_team_header_card.html.twig");
    }
}
