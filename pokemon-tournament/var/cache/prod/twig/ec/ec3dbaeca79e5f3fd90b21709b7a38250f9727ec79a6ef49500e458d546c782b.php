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
class __TwigTemplate_8df7da56b7e6243c56637c00fa0fc999acf888b2d7c2acc25bf17685b7f5d0d3 extends Template
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
        $this->loadTemplate("common/pt_header.html.twig", "pt_team_edit.html.twig", 1)->display($context);
        // line 2
        echo "    <form id=\"edit_team\" method=\"post\">
        ";
        // line 3
        $this->loadTemplate("cards/pt_team_header_card.html.twig", "pt_team_edit.html.twig", 3)->display(twig_array_merge($context, ["team_label" => ($context["team_label"] ?? null), "submit_button_label" =>         // line 4
($context["submit_button_label"] ?? null)]));
        // line 5
        echo "    </form>
    <div class=\"pokemon_list\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pokemons"] ?? null));
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
        return array (  87 => 12,  83 => 10,  69 => 9,  66 => 8,  49 => 7,  45 => 5,  43 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pt_team_edit.html.twig", "/application/pokemon-tournament/templates/pt_team_edit.html.twig");
    }
}
