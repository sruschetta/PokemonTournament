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

/* pt_team_create.html.twig */
class __TwigTemplate_1a736308fa6ef9ff0c5864114ad050866a7a4086d09e4206049b3f1b98fb6683 extends Template
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
        $this->loadTemplate("common/pt_header.html.twig", "pt_team_create.html.twig", 1)->display($context);
        // line 2
        echo "    <form id=\"create_team\" method=\"post\" redirect=\"/team/list\">
        ";
        // line 3
        $this->loadTemplate("cards/pt_team_header_card.html.twig", "pt_team_create.html.twig", 3)->display(twig_array_merge($context, ["new_team" => ($context["new_team"] ?? null), "team_label" =>         // line 4
($context["team_label"] ?? null), "submit_button_label" =>         // line 5
($context["submit_button_label"] ?? null)]));
        // line 6
        echo "        <div class=\"pokemon_list\">
            <div class=\"placeholder\">
                Your team is empty!<br/>
                Click <b>\"Gotta catch'em all!\"</b> to add a new Pokemon to your team!
            </div>
        </div>
        <button class=\"pt_button red\" id=\"add_pokemon\">Gotta Catch'em all</button>
        <span class=\"loader\"></span>
    </form>
    <script src=\"/js/team_create.js\"></script>
";
        // line 16
        $this->loadTemplate("common/pt_footer.html.twig", "pt_team_create.html.twig", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "pt_team_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  46 => 6,  44 => 5,  43 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pt_team_create.html.twig", "/application/pokemon-tournament/templates/pt_team_create.html.twig");
    }
}
