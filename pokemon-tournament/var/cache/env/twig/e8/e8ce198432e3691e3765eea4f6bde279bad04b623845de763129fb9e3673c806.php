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

/* pt_team_list.html.twig */
class __TwigTemplate_54e6761a958b32918c84e17e8b839a7e224b88a14b481ba66cf905ab69d324ee extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pt_team_list.html.twig"));

        // line 1
        $this->loadTemplate("common/pt_header.html.twig", "pt_team_list.html.twig", 1)->display($context);
        // line 2
        echo "    ";
        if ( !twig_test_empty((isset($context["team_list"]) || array_key_exists("team_list", $context) ? $context["team_list"] : (function () { throw new RuntimeError('Variable "team_list" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        ";
            $this->loadTemplate("cards/pt_pokemon_types_card.html.twig", "pt_team_list.html.twig", 3)->display(twig_array_merge($context, ["types" => (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 3, $this->source); })())]));
            // line 4
            echo "    ";
        }
        // line 5
        echo "    <div class=\"team_list\">
        ";
        // line 6
        if (twig_test_empty((isset($context["team_list"]) || array_key_exists("team_list", $context) ? $context["team_list"] : (function () { throw new RuntimeError('Variable "team_list" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "            <div>
                You have not created a team yet!<br/>
                Click <b>\"Add New Team\"</b> to create your first team!
            </div>
        ";
        } else {
            // line 12
            echo "            <h2>Your teams</h2>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["team_list"]) || array_key_exists("team_list", $context) ? $context["team_list"] : (function () { throw new RuntimeError('Variable "team_list" does not exist.', 13, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 14
                echo "                ";
                $this->loadTemplate("cards/pt_team_card.html.twig", "pt_team_list.html.twig", 14)->display(twig_array_merge($context, ["team" => $context["team"]]));
                // line 15
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        ";
        }
        // line 17
        echo "        </div>
        <a class=\"pt_button\" href=\"/team/create\">Add New Team</a>
    <script src=\"/js/team_list.js\"></script>
";
        // line 20
        $this->loadTemplate("common/pt_footer.html.twig", "pt_team_list.html.twig", 20)->display($context);
        // line 21
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pt_team_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 21,  108 => 20,  103 => 17,  100 => 16,  86 => 15,  83 => 14,  66 => 13,  63 => 12,  56 => 7,  54 => 6,  51 => 5,  48 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"common/pt_header.html.twig\" %}
    {% if team_list is not empty %}
        {% include \"cards/pt_pokemon_types_card.html.twig\" with {'types': types} %}
    {% endif %}
    <div class=\"team_list\">
        {% if team_list is empty %}
            <div>
                You have not created a team yet!<br/>
                Click <b>\"Add New Team\"</b> to create your first team!
            </div>
        {% else %}
            <h2>Your teams</h2>
            {% for team in team_list %}
                {% include 'cards/pt_team_card.html.twig' with {'team': team} %}
            {% endfor %}
        {% endif %}
        </div>
        <a class=\"pt_button\" href=\"/team/create\">Add New Team</a>
    <script src=\"/js/team_list.js\"></script>
{% include \"common/pt_footer.html.twig\" %}

", "pt_team_list.html.twig", "/application/pokemon-tournament/templates/pt_team_list.html.twig");
    }
}
