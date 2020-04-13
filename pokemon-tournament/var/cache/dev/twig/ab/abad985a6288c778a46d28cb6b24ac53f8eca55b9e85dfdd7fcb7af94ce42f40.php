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
class __TwigTemplate_f11ce24888462d8e53004b8215a37dbc86eb8c52dba1c81020c366496888c6a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cards/pt_team_header_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cards/pt_team_header_card.html.twig"));

        // line 1
        echo "<div class=\"card team_head_card\">
    <div class=\"team_head_card_field\">
        <label for=\"team_name\"><b>";
        // line 3
        echo twig_escape_filter($this->env, (((isset($context["team_label"]) || array_key_exists("team_label", $context))) ? (_twig_default_filter((isset($context["team_label"]) || array_key_exists("team_label", $context) ? $context["team_label"] : (function () { throw new RuntimeError('Variable "team_label" does not exist.', 3, $this->source); })()), "Team Name")) : ("Team Name")), "html", null, true);
        echo "</b></label>
        <input type=\"text\" name=\"team_name\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (((isset($context["team_name"]) || array_key_exists("team_name", $context))) ? (_twig_default_filter((isset($context["team_name"]) || array_key_exists("team_name", $context) ? $context["team_name"] : (function () { throw new RuntimeError('Variable "team_name" does not exist.', 4, $this->source); })()))) : ("")), "html", null, true);
        echo "\">
        <span class=\"field_error\"></span>
    </div>
    <div class=\"team_head_card_buttons team_head_card_field\">
        <input type=\"submit\" name=\"team_submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (((isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context))) ? (_twig_default_filter((isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context) ? $context["submit_button_label"] : (function () { throw new RuntimeError('Variable "submit_button_label" does not exist.', 8, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "\" class=\"pt_button\">
        <span class=\"loader\"></span>
        ";
        // line 10
        if (((isset($context["new_team"]) || array_key_exists("new_team", $context)) && (isset($context["new_team"]) || array_key_exists("new_team", $context) ? $context["new_team"] : (function () { throw new RuntimeError('Variable "new_team" does not exist.', 10, $this->source); })()))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  73 => 15,  69 => 13,  65 => 11,  63 => 10,  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card team_head_card\">
    <div class=\"team_head_card_field\">
        <label for=\"team_name\"><b>{{ team_label | default('Team Name') }}</b></label>
        <input type=\"text\" name=\"team_name\" value=\"{{ team_name | default() }}\">
        <span class=\"field_error\"></span>
    </div>
    <div class=\"team_head_card_buttons team_head_card_field\">
        <input type=\"submit\" name=\"team_submit\" value=\"{{ submit_button_label | default('Save') }}\" class=\"pt_button\">
        <span class=\"loader\"></span>
        {% if new_team is defined and new_team %}
            <div class=\"field_error\"></div>
        {% else %}
            <div class=\"message\"></div>
        {% endif %}
    </div>
</div>", "cards/pt_team_header_card.html.twig", "/application/pokemon-tournament/templates/cards/pt_team_header_card.html.twig");
    }
}
