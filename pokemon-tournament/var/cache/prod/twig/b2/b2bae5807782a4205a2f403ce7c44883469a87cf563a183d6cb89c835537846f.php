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
class __TwigTemplate_8e74276762ddb8ac2c399a02fbb7f8cc77cc75b06d19d3ac7b0cca64e53c4188 extends Template
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
    }

    public function getTemplateName()
    {
        return "common/pt_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/pt_header.html.twig", "/application/pokemon-tournament/templates/common/pt_header.html.twig");
    }
}
