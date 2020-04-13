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

/* pt_team_edit.html.twig */
class __TwigTemplate_5ae9a013ac45efcf638362077fb61250801a3b08c32253ee7fccc881b1c7eeda extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pt_team_edit.html.twig"));

        // line 1
        $this->loadTemplate("common/pt_header.html.twig", "pt_team_edit.html.twig", 1)->display($context);
        // line 2
        echo "    <form id=\"edit_team\" method=\"post\">
        ";
        // line 3
        $this->loadTemplate("cards/pt_team_header_card.html.twig", "pt_team_edit.html.twig", 3)->display(twig_array_merge($context, ["team_label" => (isset($context["team_label"]) || array_key_exists("team_label", $context) ? $context["team_label"] : (function () { throw new RuntimeError('Variable "team_label" does not exist.', 3, $this->source); })()), "submit_button_label" =>         // line 4
(isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context) ? $context["submit_button_label"] : (function () { throw new RuntimeError('Variable "submit_button_label" does not exist.', 4, $this->source); })())]));
        // line 5
        echo "    </form>
    <div class=\"pokemon_list\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 7, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 8
            echo "            ";
            $this->loadTemplate("cards/pt_pokemon_card.html.twig", "pt_team_edit.html.twig", 8)->display(twig_array_merge($context, ["pokemon" => $context["pokemon"]]));
            // line 9
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokemon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
    <script src=\"/js/team_edit.js\"></script>
";
        // line 12
        $this->loadTemplate("common/pt_footer.html.twig", "pt_team_edit.html.twig", 12)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pt_team_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 12,  86 => 10,  72 => 9,  69 => 8,  52 => 7,  48 => 5,  46 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"common/pt_header.html.twig\" %}
    <form id=\"edit_team\" method=\"post\">
        {% include \"cards/pt_team_header_card.html.twig\" with  { 'team_label': team_label,
                                                                 'submit_button_label': submit_button_label} %}
    </form>
    <div class=\"pokemon_list\">
        {% for pokemon in pokemons %}
            {% include \"cards/pt_pokemon_card.html.twig\" with  { 'pokemon': pokemon } %}
        {% endfor %}
    </div>
    <script src=\"/js/team_edit.js\"></script>
{% include \"common/pt_footer.html.twig\" %}
", "pt_team_edit.html.twig", "/application/pokemon-tournament/templates/pt_team_edit.html.twig");
    }
}
