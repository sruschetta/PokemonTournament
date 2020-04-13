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
class __TwigTemplate_8aa26151fccda1d81c0d8b1993775d53f053d0a1d116327b651e5118d05f5473 extends Template
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
        $this->loadTemplate("common/pt_header.html.twig", "pt_team_list.html.twig", 1)->display($context);
        // line 2
        echo "    ";
        if ( !twig_test_empty(($context["team_list"] ?? null))) {
            // line 3
            echo "        ";
            $this->loadTemplate("cards/pt_pokemon_types_card.html.twig", "pt_team_list.html.twig", 3)->display(twig_array_merge($context, ["types" => ($context["types"] ?? null)]));
            // line 4
            echo "    ";
        }
        // line 5
        echo "    <div class=\"team_list\">
        ";
        // line 6
        if (twig_test_empty(($context["team_list"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["team_list"] ?? null));
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
        return array (  107 => 21,  105 => 20,  100 => 17,  97 => 16,  83 => 15,  80 => 14,  63 => 13,  60 => 12,  53 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pt_team_list.html.twig", "/application/pokemon-tournament/templates/pt_team_list.html.twig");
    }
}
