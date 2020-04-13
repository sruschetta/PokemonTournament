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
class __TwigTemplate_e5b6b15358ec696531b1993616d84427bec65670bf3336400ce18ffdbd150ee1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pt_team_create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pt_team_create.html.twig"));

        // line 1
        $this->loadTemplate("common/pt_header.html.twig", "pt_team_create.html.twig", 1)->display($context);
        // line 2
        echo "    <form id=\"create_team\" method=\"post\" redirect=\"/team/list\">
        <div class=\"card team_head_card\">
            <div class=\"team_head_card_field\">
                <label for=\"team_name\"><b>Team name</b></label>
                <input type=\"text\" name=\"team_name\">
                <span class=\"field_error\"></span>
            </div>
            <div class=\"team_head_card_buttons team_head_card_field\">
                <input type=\"submit\" name=\"team_submit\" value=\"Create team\" class=\"pt_button\">
                <span class=\"loader\"></span>
                <div class=\"field_error\"></div>
            </div>
        </div>
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
";
        // line 25
        $this->loadTemplate("common/pt_footer.html.twig", "pt_team_create.html.twig", 25)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
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
        return array (  70 => 25,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"common/pt_header.html.twig\" %}
    <form id=\"create_team\" method=\"post\" redirect=\"/team/list\">
        <div class=\"card team_head_card\">
            <div class=\"team_head_card_field\">
                <label for=\"team_name\"><b>Team name</b></label>
                <input type=\"text\" name=\"team_name\">
                <span class=\"field_error\"></span>
            </div>
            <div class=\"team_head_card_buttons team_head_card_field\">
                <input type=\"submit\" name=\"team_submit\" value=\"Create team\" class=\"pt_button\">
                <span class=\"loader\"></span>
                <div class=\"field_error\"></div>
            </div>
        </div>
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
