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

/* common/pt_header.html.twig */
class __TwigTemplate_6c91fda709316459e56ef082cb2a41c87b3f86b230a04696ddbfa9813e729978 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/pt_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/pt_header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Pokemon Tournament</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"/images/favicon.ico\" />
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap\" rel=\"stylesheet\">
    <script src=\"/js/jquery.js\"></script>
</head>
<body>
<header>
    <a href=\"/team/list\"><img src=\"/images/poke_logo.svg\"></a>
    <h1>S'NCE LEAGUE TOURNAMENT</h1>
</header>
<section class=\"main_content\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "common/pt_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Pokemon Tournament</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"/images/favicon.ico\" />
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap\" rel=\"stylesheet\">
    <script src=\"/js/jquery.js\"></script>
</head>
<body>
<header>
    <a href=\"/team/list\"><img src=\"/images/poke_logo.svg\"></a>
    <h1>S'NCE LEAGUE TOURNAMENT</h1>
</header>
<section class=\"main_content\">", "common/pt_header.html.twig", "/application/pokemon-tournament/templates/common/pt_header.html.twig");
    }
}
