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
class __TwigTemplate_42e58bdada7ba48de05db5f9fc3127f6fa4f2b0caa3cece7a31b712066a6be47 extends Template
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "common/pt_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
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
