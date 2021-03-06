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
class __TwigTemplate_670ce1db7d67b9828f6417f697056ac30236bf4e750d3055b2743a3f6f64903f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pt_team_create.html.twig"));

        // line 1
        $this->loadTemplate("common/pt_header.html.twig", "pt_team_create.html.twig", 1)->display($context);
        // line 2
        echo "    <form id=\"create_team\" method=\"post\" redirect=\"/team/list\">
        ";
        // line 3
        $this->loadTemplate("cards/pt_team_header_card.html.twig", "pt_team_create.html.twig", 3)->display(twig_array_merge($context, ["new_team" => (isset($context["new_team"]) || array_key_exists("new_team", $context) ? $context["new_team"] : (function () { throw new RuntimeError('Variable "new_team" does not exist.', 3, $this->source); })()), "team_label" =>         // line 4
(isset($context["team_label"]) || array_key_exists("team_label", $context) ? $context["team_label"] : (function () { throw new RuntimeError('Variable "team_label" does not exist.', 4, $this->source); })()), "submit_button_label" =>         // line 5
(isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context) ? $context["submit_button_label"] : (function () { throw new RuntimeError('Variable "submit_button_label" does not exist.', 5, $this->source); })())]));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  61 => 16,  49 => 6,  47 => 5,  46 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"common/pt_header.html.twig\" %}
    <form id=\"create_team\" method=\"post\" redirect=\"/team/list\">
        {% include \"cards/pt_team_header_card.html.twig\" with  {'new_team': new_team,
                                                                'team_label': team_label,
                                                                'submit_button_label': submit_button_label} %}
        <div class=\"pokemon_list\">
            <div class=\"placeholder\">
                Your team is empty!<br/>
                Click <b>\"Gotta catch'em all!\"</b> to add a new Pokemon to your team!
            </div>
        </div>
        <button class=\"pt_button red\" id=\"add_pokemon\">Gotta Catch'em all</button>
        <span class=\"loader\"></span>
    </form>
    <script src=\"/js/team_create.js\"></script>
{% include \"common/pt_footer.html.twig\" %}
", "pt_team_create.html.twig", "/application/pokemon-tournament/templates/pt_team_create.html.twig");
    }
}
