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

/* panel/index.html.twig */
class __TwigTemplate_cb1b5f6f37a015e321364810e79118c582f3d458f224b2ff45fc2b2ee4c1d7c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "panel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Panel";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<body class=\"bg-dark\">
    ";
        // line 10
        echo "    <header class=\"row justify-content-center\">
        <div class=\"container mt-5\">
            <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <nav class=\"navbar-nav active-gray active-gray-1 searchbar\">
                    <input class=\"form-control bg-dark text-white\" type=\"text\" placeholder=\"Busca un archivo\" id=\"buscar\" aria-label=\"Search\">
                </nav>
                <button class=\"navbar-toggler ml-auto\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </nav>
        </div>
    </header>
<main class=\"container-fluid\">
    ";
        // line 25
        echo "    <div class=\"container text-white menu-lateral\">
            <h6>
                <svg class=\"bi bi-list-task mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M2 2.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5V3a.5.5 0 00-.5-.5H2zM3 3H2v1h1V3z\" clip-rule=\"evenodd\"/>
                    <path d=\"M5 3.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zM5.5 7a.5.5 0 000 1h9a.5.5 0 000-1h-9zm0 4a.5.5 0 000 1h9a.5.5 0 000-1h-9z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1.5 7a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5H2zm1 .5H2v1h1v-1z\" clip-rule=\"evenodd\"/>
                </svg>
                Almacenamiento
           </h6>
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["almacenamiento"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 35
            echo "                ";
            $context["total"] = 5242880;
            // line 36
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 36);
            // line 37
            echo "                ";
            $context["porcentaje"] = ((($context["utilizado"] ?? null) / ($context["total"] ?? null)) * 100);
            // line 38
            echo "                ";
            if (-1 === twig_compare((($context["utilizado"] ?? null) / 1024), 1)) {
                // line 39
                echo "                ";
                $context["unidad"] = "KB";
                // line 40
                echo "                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 41
                echo twig_escape_filter($this->env, ($context["porcentaje"] ?? null), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, ($context["porcentaje"] ?? null), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 43
                echo twig_escape_filter($this->env, twig_round(($context["utilizado"] ?? null), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                echo " de 5 GB utilizado</p>
                ";
            } elseif ((0 <= twig_compare((            // line 44
($context["utilizado"] ?? null) / 1024), 1) && -1 === twig_compare((($context["utilizado"] ?? null) / 1024), 1023))) {
                // line 45
                echo "                ";
                $context["unidad"] = "MB";
                // line 46
                echo "                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 46) / 1024);
                // line 47
                echo "                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 48
                echo twig_escape_filter($this->env, ($context["porcentaje"] ?? null), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, ($context["porcentaje"] ?? null), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 50
                echo twig_escape_filter($this->env, twig_round(($context["utilizado"] ?? null), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                echo " de 5 GB utilizado</p>
                ";
            } else {
                // line 52
                echo "                    ";
                $context["unidad"] = "GB";
                // line 53
                echo "                    ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 53) / 1048576);
                // line 54
                echo "                    ";
                if (0 <= twig_compare(($context["utilizado"] ?? null), 4.5)) {
                    // line 55
                    echo "                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 56
                    echo twig_escape_filter($this->env, ($context["porcentaje"] ?? null), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, ($context["porcentaje"] ?? null), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 58
                    echo twig_escape_filter($this->env, twig_round(($context["utilizado"] ?? null), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                } else {
                    // line 60
                    echo "                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 61
                    echo twig_escape_filter($this->env, ($context["porcentaje"] ?? null), "html", null, true);
                    echo "% ;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, ($context["porcentaje"] ?? null), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 63
                    echo twig_escape_filter($this->env, twig_round(($context["utilizado"] ?? null), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                }
                // line 65
                echo "                ";
            }
            // line 66
            echo "
                <h6 data-toggle=\"modal\" data-target=\"#papelera\" title=\"Papelera\" id=\"papelera_archivos\" style=\"margin-bottom: 30px;\">
                    <svg class=\"bi bi-trash mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                    </svg>
                    Papelera
                </h6>
                <a ";
            // line 74
            if (0 === twig_compare(($context["utilizado"] ?? null), ($context["total"] ?? null))) {
                echo "class=\"text-white text-decoration-none disabled\"";
            }
            echo " href=\"nuevo\"class=\"text-white text-decoration-none\">
                    <svg class=\"bi bi-file-earmark-plus mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z\"/>
                        <path fill-rule=\"evenodd\" d=\"M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z\" clip-rule=\"evenodd\"/>
                    </svg> Nuevo archivo
                </a>
                <a href=\"perfil\"class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                    <svg class=\"bi bi-person-circle mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z\"/>
                        <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                        <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z\"/>
                    </svg> ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 86), "username", [], "any", false, false, false, 86), "html", null, true);
            echo "
                </a>
                <a href=\"logout\"class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                    <svg class=\"bi bi-box-arrow-in-right mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z\"/>
                        <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z\"/>
                        <path fill-rule=\"evenodd\" d=\"M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z\"/>
                    </svg> Cerrar sesión
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </div>
    ";
        // line 98
        echo "    <div class=\"container-fluid bg-light fixed-bottom text-center menu-responsive\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12 p-2\">
                <a href=\"#\" class=\"icono\">
                    <svg class=\"bi bi-house-door mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M7.646 1.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5H9.5a.5.5 0 01-.5-.5v-4H7v4a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V7.707L8 2.207l-5.5 5.5z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M13 2.5V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z\" clip-rule=\"evenodd\"/>
                    </svg>
                </a>
                <a href=\"/nuevo\" class=\"icono\">
                    <svg class=\"bi bi-plus-circle mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                    </svg>
                </a>
                <a href=\"/perfil\" class=\"icono\">
                    <svg class=\"bi bi-people-circle mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                        <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                    </svg>
                </a>
                <a href=\"/logout\" class=\"icono\">
                    <svg class=\"bi bi-box-arrow-in-right mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z\" clip-rule=\"evenodd\"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    ";
        // line 132
        echo "    <div class=\"container mt-4\" style=\"margin-left: 15%;\">
            <div class=\"row\">
                ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 135
            echo "                    ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 135);
            // line 136
            echo "                    ";
            if (0 === twig_compare(($context["borrado"] ?? null), "N")) {
                // line 137
                echo "                <div class=\"col-md-4 mt-4 mb-2\">
                    ";
                // line 138
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 138);
                // line 139
                echo "                    <div class=\"card\">
                        ";
                // line 140
                $context["nombre"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 140);
                // line 141
                echo "                        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["nombre"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["nombre"] ?? null), "html", null, true);
                echo "\">
                        <div class=\"card-body\">
                            <div class=\"dropdown no-gutters\">
                            ";
                // line 144
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 144)), 30)) {
                    // line 145
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 145), 0, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 146
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "                                <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 147), "html", null, true);
                    echo "\">
                                    ";
                    // line 148
                    echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 148), 0, 30) . "..."), "html", null, true);
                    echo "
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                    <button class=\"dropdown-item btn btn-md\" type=\"button\" data-toggle=\"modal\" data-target=\"#editar\">
                                        <svg class=\"bi bi-pen\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" d=\"M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z\"/>
                                            <path d=\"M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z\"/>
                                        </svg>
                                        Editar
                                    </button>
                                    <a class=\"btn btn-md dropdown-item\" href=\"";
                    // line 159
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("uploads/archivos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 159), "username", [], "any", false, false, false, 159)) . "/") . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 159))), "html", null, true);
                    echo "\" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 159), "html", null, true);
                    echo "\">
                                        <svg class=\"bi bi-download\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" d=\"M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z\"/>
                                        </svg>
                                        Descargar
                                    </a>
                                    <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#borrar\">
                                        <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                        </svg>
                                        Eliminar
                                    </a>
                                    ";
                    // line 174
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 174);
                    // line 175
                    echo "                                    ";
                    if (-1 === twig_compare(($context["size"] ?? null), 25600)) {
                        // line 176
                        echo "                                        <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#compartir\">
                                            <svg class=\"bi bi-reply\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z\"/>
                                            </svg>
                                            Compartir
                                        </a>
                                    ";
                    }
                    // line 183
                    echo "                                    ";
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 183);
                    // line 184
                    echo "                                    ";
                    if (-1 === twig_compare(($context["size"] ?? null), 32768)) {
                        // line 185
                        echo "                                        <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#analizar\">
                                            <svg class=\"bi bi-file-earmark-break\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 0 0-2 2v6h1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1H2v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1zM0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z\"/>
                                            </svg>
                                            Analizar
                                        </button>
                                    ";
                    }
                    // line 192
                    echo "                                    ";
                    $context["comprimido"] = [0 => "cbr", 1 => "jar", 2 => "pit", 3 => "rar", 4 => "jar", 5 => "tgz", 6 => "dl_", 7 => "bz2", 8 => "cbz", 9 => "war", 10 => "zip", 11 => "z01"];
                    // line 193
                    echo "                                    ";
                    $context["ext_archivo"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 193),  -3, 3);
                    // line 194
                    echo "                                    ";
                    if (twig_in_filter(($context["ext_archivo"] ?? null), ($context["comprimido"] ?? null))) {
                        // line 195
                        echo "                                        ";
                        // line 196
                        echo "                                    ";
                    } else {
                        // line 197
                        echo "                                        <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#comprimir\">
                                            <svg class=\"bi bi-file-earmark-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z\"/>
                                                <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M5 8.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.11 0l-.929-.62a1 1 0 0 1-.415-1.074L5 9.438V8.5zm2 0H6v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 0 1 7 9.438V8.5z\"/>
                                                <path d=\"M6 2h1.5v1H6zM5 3h1.5v1H5zm1 1h1.5v1H6zM5 5h1.5v1H5zm1 1h1.5v1H6V6z\"/>
                                            </svg>
                                            Comprimir
                                        </button>
                                    ";
                    }
                    // line 207
                    echo "                                    <input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\">
                                </div>
                            ";
                } else {
                    // line 210
                    echo "                                <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 210), "html", null, true);
                    echo "\">
                                        ";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 211), "html", null, true);
                    echo "
                                    </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                        <button class=\"dropdown-item btn btn-md\" type=\"button\" data-toggle=\"modal\" data-target=\"#editar\">
                                            <svg class=\"bi bi-pen\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z\"/>
                                                <path d=\"M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z\"/>
                                            </svg>
                                            Editar
                                        </button>
                                        <a class=\"btn btn-md dropdown-item\" href=\"";
                    // line 222
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("uploads/archivos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 222), "username", [], "any", false, false, false, 222)) . "/") . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 222))), "html", null, true);
                    echo "\" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 222), "html", null, true);
                    echo "\">
                                            <svg class=\"bi bi-download\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z\"/>
                                            </svg>
                                            Descargar
                                        </a>
                                        <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#borrar\">
                                            <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                            </svg>
                                            Eliminar
                                        </a>
                                        ";
                    // line 237
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 237);
                    // line 238
                    echo "                                        ";
                    if (-1 === twig_compare(($context["size"] ?? null), 25600)) {
                        // line 239
                        echo "                                            <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#compartir\">
                                                <svg class=\"bi bi-reply\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path fill-rule=\"evenodd\" d=\"M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z\"/>
                                                </svg>
                                                Compartir
                                            </a>
                                        ";
                    }
                    // line 246
                    echo "                                        ";
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 246);
                    // line 247
                    echo "                                        ";
                    if (-1 === twig_compare(($context["size"] ?? null), 32768)) {
                        // line 248
                        echo "                                            <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#analizar\">
                                                <svg class=\"bi bi-file-earmark-break\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 0 0-2 2v6h1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1H2v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1zM0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z\"/>
                                                </svg>
                                                Analizar
                                            </button>
                                        ";
                    }
                    // line 255
                    echo "                                        ";
                    $context["comprimido"] = [0 => "cbr", 1 => "jar", 2 => "pit", 3 => "rar", 4 => "jar", 5 => "tgz", 6 => "dl_", 7 => "bz2", 8 => "cbz", 9 => "war", 10 => "zip", 11 => "z01"];
                    // line 256
                    echo "                                        ";
                    $context["ext_archivo"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 256),  -3, 3);
                    // line 257
                    echo "                                        ";
                    if (twig_in_filter(($context["ext_archivo"] ?? null), ($context["comprimido"] ?? null))) {
                        // line 258
                        echo "                                            ";
                        // line 259
                        echo "                                        ";
                    } else {
                        // line 260
                        echo "                                            <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#comprimir\">
                                                <svg class=\"bi bi-file-earmark-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path d=\"M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z\"/>
                                                    <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z\"/>
                                                    <path fill-rule=\"evenodd\" d=\"M5 8.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.11 0l-.929-.62a1 1 0 0 1-.415-1.074L5 9.438V8.5zm2 0H6v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 0 1 7 9.438V8.5z\"/>
                                                    <path d=\"M6 2h1.5v1H6zM5 3h1.5v1H5zm1 1h1.5v1H6zM5 5h1.5v1H5zm1 1h1.5v1H6V6z\"/>
                                                </svg>
                                                Comprimir</button>
                                        ";
                    }
                    // line 269
                    echo "                                        <input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\">
                                    </div>
                            ";
                }
                // line 272
                echo "                            </div>
                            <div class=\"row no-gutters\">
                                ";
                // line 274
                $context["nombre"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 274),  -3, 3);
                // line 275
                echo "                                <div class=\"col-2\">
                                    ";
                // line 276
                if (0 === twig_compare(($context["nombre"] ?? null), "pdf")) {
                    // line 277
                    echo "                                        <img src=\"../img/pdf.png\" class=\"card-img\" alt=\"pdf\">
                                    ";
                } elseif (0 === twig_compare(                // line 278
($context["nombre"] ?? null), "css")) {
                    // line 279
                    echo "                                        <img src=\"../img/css.png\" class=\"card-img\" alt=\"css\">
                                    ";
                } elseif (0 === twig_compare(                // line 280
($context["nombre"] ?? null), "csv")) {
                    // line 281
                    echo "                                        <img src=\"../img/csv.png\" class=\"card-img\" alt=\"csv\">
                                    ";
                } elseif (0 === twig_compare(                // line 282
($context["nombre"] ?? null), "ocx")) {
                    // line 283
                    echo "                                        <img src=\"../img/doc.png\" class=\"card-img\" alt=\"docx\">
                                    ";
                } elseif (0 === twig_compare(                // line 284
($context["nombre"] ?? null), "dvd")) {
                    // line 285
                    echo "                                        <img src=\"../img/dvd.png\" class=\"card-img\" alt=\"dvd\">
                                    ";
                } elseif (0 === twig_compare(                // line 286
($context["nombre"] ?? null), "exe")) {
                    // line 287
                    echo "                                        <img src=\"../img/exe.png\" class=\"card-img\" alt=\"exe\">
                                    ";
                } elseif (0 === twig_compare(                // line 288
($context["nombre"] ?? null), "tml")) {
                    // line 289
                    echo "                                        <img src=\"../img/html.png\" class=\"card-img\" alt=\"html\">
                                    ";
                } elseif (0 === twig_compare(                // line 290
($context["nombre"] ?? null), "iso")) {
                    // line 291
                    echo "                                        <img src=\"../img/iso.png\" class=\"card-img\" alt=\"iso\">
                                    ";
                } elseif (0 === twig_compare(                // line 292
($context["nombre"] ?? null), "jpg")) {
                    // line 293
                    echo "                                        <img src=\"../img/jpg.png\" class=\"card-img\" alt=\"jpg\">
                                    ";
                } elseif (0 === twig_compare(                // line 294
($context["nombre"] ?? null), ".js")) {
                    // line 295
                    echo "                                        <img src=\"../img/js.png\" class=\"card-img\" alt=\"js\">
                                    ";
                } elseif (0 === twig_compare(                // line 296
($context["nombre"] ?? null), "mp3")) {
                    // line 297
                    echo "                                        <img src=\"../img/mp3.png\" class=\"card-img\" alt=\"mp3\">
                                    ";
                } elseif (0 === twig_compare(                // line 298
($context["nombre"] ?? null), "mp4")) {
                    // line 299
                    echo "                                        <img src=\"../img/mp4.png\" class=\"card-img\" alt=\"mp4\">
                                    ";
                } elseif (0 === twig_compare(                // line 300
($context["nombre"] ?? null), "png")) {
                    // line 301
                    echo "                                        <img src=\"../img/png.png\" class=\"card-img\" alt=\"png\">
                                    ";
                } elseif (0 === twig_compare(                // line 302
($context["nombre"] ?? null), "ptx")) {
                    // line 303
                    echo "                                        <img src=\"../img/ppt.png\" class=\"card-img\" alt=\"pptx\">
                                    ";
                } elseif (0 === twig_compare(                // line 304
($context["nombre"] ?? null), "sql")) {
                    // line 305
                    echo "                                        <img src=\"../img/sql.png\" class=\"card-img\" alt=\"sql\">
                                    ";
                } elseif (0 === twig_compare(                // line 306
($context["nombre"] ?? null), "txt")) {
                    // line 307
                    echo "                                        <img src=\"../img/txt.png\" class=\"card-img\" alt=\"txt\">
                                    ";
                } elseif (0 === twig_compare(                // line 308
($context["nombre"] ?? null), "lsx")) {
                    // line 309
                    echo "                                        <img src=\"../img/xls.png\" class=\"card-img\" alt=\"xlsx\">
                                    ";
                } elseif (0 === twig_compare(                // line 310
($context["nombre"] ?? null), "xml")) {
                    // line 311
                    echo "                                        <img src=\"../img/xml.png\" class=\"card-img\" alt=\"xml\">
                                    ";
                } elseif (0 === twig_compare(                // line 312
($context["nombre"] ?? null), "zip")) {
                    // line 313
                    echo "                                        <img src=\"../img/zip.png\" class=\"card-img\" alt=\"zip\">
                                    ";
                } elseif (0 === twig_compare(                // line 314
($context["nombre"] ?? null), "rar")) {
                    // line 315
                    echo "                                        <img src=\"../img/rar.png\" class=\"card-img\" alt=\"rar\">
                                    ";
                } else {
                    // line 317
                    echo "                                        <img src=\"../img/none.png\" class=\"card-img\" alt=\"desconocido\">
                                    ";
                }
                // line 319
                echo "                                </div>
                                <div class=\"col-10\">
                                    ";
                // line 321
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 321);
                // line 322
                echo "                                    ";
                if (-1 === twig_compare((($context["size"] ?? null) / 1024), 1)) {
                    // line 323
                    echo "                                        ";
                    $context["unidad"] = "KB";
                    // line 324
                    echo "                                        <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round(($context["size"] ?? null), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                    echo "</p>
                                    ";
                } elseif ((0 <= twig_compare((                // line 325
($context["size"] ?? null) / 1024), 1) && -1 === twig_compare((($context["size"] ?? null) / 1024), 1023))) {
                    // line 326
                    echo "                                        ";
                    $context["unidad"] = "MB";
                    // line 327
                    echo "                                        ";
                    $context["size"] = (($context["size"] ?? null) / 1024);
                    // line 328
                    echo "                                        <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round(($context["size"] ?? null), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                    echo "</p>
                                    ";
                } else {
                    // line 330
                    echo "                                        ";
                    $context["unidad"] = "GB";
                    // line 331
                    echo "                                        ";
                    $context["size"] = (($context["size"] ?? null) / 1048576);
                    // line 332
                    echo "                                        <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round(($context["size"] ?? null), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 334
                echo "                                    <p class=\"card-text text-muted\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 334), "d-m-Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 334), "H:i"), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    ";
            }
            // line 341
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "            </div>
        ";
        // line 344
        echo "        <div class=\"navigation\">
            ";
        // line 345
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
        </div>
            ";
        // line 348
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["almacenamiento"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 349
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 349);
            // line 350
            echo "                ";
            if (0 === twig_compare(($context["utilizado"] ?? null), 0)) {
                // line 351
                echo "                    <div class=\"centrado\">
                        <h4 class=\"text-center\">Aquí se mostrarán tus archivos</h4>
                    </div>
                ";
            }
            // line 355
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "            ";
        // line 357
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 357), "flashbag", [], "any", false, false, false, 357), "get", [0 => "compartido"], "method", false, false, false, 357));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 358
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 359
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "
            ";
        // line 367
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 367), "flashbag", [], "any", false, false, false, 367), "get", [0 => "delete"], "method", false, false, false, 367));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 368
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 369
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "
            ";
        // line 377
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 377), "flashbag", [], "any", false, false, false, 377), "get", [0 => "error_zip"], "method", false, false, false, 377));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 378
            echo "                <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
                    <svg class=\"bi bi-file-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M6.5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.109 0l-.93-.62a1 1 0 01-.415-1.074l.4-1.599V8.5zm2 0h-1v.938a1 1 0 01-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 01-.03-.243V8.5z\" clip-rule=\"evenodd\"/>
                        <path d=\"M7.5 2H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5V6z\"/>
                    </svg>
                    ";
            // line 384
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 390
        echo "
            ";
        // line 392
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["almacenamiento"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 393
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 393);
            // line 394
            echo "                ";
            if (0 <= twig_compare(($context["utilizado"] ?? null), 4718592)) {
                // line 395
                echo "                <div class=\"alert alert-secondary alert-dismissible mx-auto w-50 show fade\">
                    <svg class=\"bi bi-archive-fill\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z\" clip-rule=\"evenodd\"/>
                    </svg> &nbsp;
                    Queda poco espacio de almacenamiento
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                ";
            }
            // line 405
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        echo "
        ";
        // line 408
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 408), "flashbag", [], "any", false, false, false, 408), "get", [0 => "exito"], "method", false, false, false, 408));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 409
            echo "            <div class=\"alert alert-success alert-dismissible w-50 mx-auto mt-2 show fade\">
                ";
            // line 410
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        echo "        </div>
</main>

    ";
        // line 420
        echo "    <section class=\"modal fade\" id=\"editar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Editar archivo</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Nombre</label>
                            <input type=\"text\" id=\"input_nombre\" class=\"form-control\" required data-toggle=\"tooltip\" title=\"Nombre del archivo\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"editar_nombre\">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 443
        echo "    <section class=\"modal fade\" id=\"compartir\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Compartir archivo</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Compartir con</label>
                            <input type=\"email\" id=\"compartir_nombre\" class=\"form-control\" value=\"";
        // line 454
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 454), "email", [], "any", false, false, false, 454), "html", null, true);
        echo "\" required data-toggle=\"tooltip\" title=\"Correo de destino\">
                            <label style=\"margin-top: 10px;\">Mensaje</label>
                            <textarea class=\"form-control\" style=\"margin-top: 4px;\" placeholder=\"Opcional\" id=\"compartir_mensaje\" title=\"Mensaje\"></textarea>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"compartir_archivo\">Compartir</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 468
        echo "    <section class=\"modal bg-transparent border-0\" id=\"escaneando\">
        <div class=\"modal-dialog modal-dialog-centered bg-transparent border-0\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-header bg-transparent border-0\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-1 mr-3\">
                            <div class=\"spinner-border text-light\" role=\"status\">
                                <span class=\"sr-only text-light\"></span>
                            </div>
                        </div>
                        <div class=\"col-9\">
                            <h5 class=\"text-light text-center\">Buscando malware</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 488
        echo "    <section class=\"modal bg-transparent border-0\" id=\"redirigiendo\">
        <div class=\"modal-dialog modal-dialog-centered bg-transparent border-0\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-header bg-transparent border-0\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-1 mr-3\">
                            <div class=\"spinner-border text-light\" role=\"status\">
                                <span class=\"sr-only text-light\"></span>
                            </div>
                        </div>
                        <div class=\"col-10\">
                            <h5 class=\"text-light text-center\">Redirigiendo a VirusTotal</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 508
        echo "    <section class=\"modal fade\" id=\"analizar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Analizar archivo</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_analizar\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"analizar_nombre\">Analizar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 530
        echo "    <section class=\"modal fade\" id=\"borrar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Mover a la papelera</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_borrar\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"eliminar_nombre\">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 552
        echo "    <section class=\"modal fade\" id=\"comprimir\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Comprimir archivo</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_comprimir\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"comprimir_nombre\">Comprimir</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"cancelar\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 575
        echo "        <section class=\"modal fade\" id=\"papelera\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h6 class=\"modal-title\">Archivos eliminados</h6>
                        <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row no-gutters\">
                        ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 585
            echo "                            ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 585);
            // line 586
            echo "                            ";
            if (0 === twig_compare(($context["borrado"] ?? null), "S")) {
                // line 587
                echo "                                    <div class=\"col-6 mb-2\">
                                        ";
                // line 588
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 588);
                // line 589
                echo "                                        <div class=\"card\">
                                            ";
                // line 590
                $context["nombre"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 590);
                // line 591
                echo "                                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["nombre"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["nombre"] ?? null), "html", null, true);
                echo "\">
                                            <div class=\"card-body\">
                                                <div class=\"dropdown no-gutters\">
                                                    ";
                // line 594
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 594)), 30)) {
                    // line 595
                    echo "                                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 595), 0, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 596
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 597
                    echo "                                                        <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 597), "html", null, true);
                    echo "\">
                                                            ";
                    // line 598
                    echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 598), 0, 30) . "..."), "html", null, true);
                    echo "
                                                        </button>
                                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                                            <button class=\"dropdown-item btn btn-md\" type=\"button\" data-toggle=\"modal\" data-target=\"#restaurar\">
                                                                <svg class=\"bi bi-arrow-counterclockwise\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                    <path fill-rule=\"evenodd\" d=\"M12.83 6.706a5 5 0 0 0-7.103-3.16.5.5 0 1 1-.454-.892A6 6 0 1 1 2.545 5.5a.5.5 0 1 1 .91.417 5 5 0 1 0 9.375.789z\"/>
                                                                    <path fill-rule=\"evenodd\" d=\"M7.854.146a.5.5 0 0 0-.708 0l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 1 0 .708-.708L5.707 3 7.854.854a.5.5 0 0 0 0-.708z\"/>
                                                                </svg>
                                                                Restaurar
                                                            </button>
                                                            <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#borrar_definitivo\">
                                                                <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                                                </svg>
                                                                Eliminar
                                                            </a>
                                                            <input type=\"hidden\" name=\"";
                    // line 615
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\">
                                                        </div>
                                                    ";
                } else {
                    // line 618
                    echo "                                                        <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 618), "html", null, true);
                    echo "\">
                                                            ";
                    // line 619
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 619), "html", null, true);
                    echo "
                                                        </button>
                                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                                            <button class=\"dropdown-item btn btn-md\" type=\"button\" data-toggle=\"modal\" data-target=\"#restaurar\">
                                                                <svg class=\"bi bi-arrow-counterclockwise\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                    <path fill-rule=\"evenodd\" d=\"M12.83 6.706a5 5 0 0 0-7.103-3.16.5.5 0 1 1-.454-.892A6 6 0 1 1 2.545 5.5a.5.5 0 1 1 .91.417 5 5 0 1 0 9.375.789z\"/>
                                                                    <path fill-rule=\"evenodd\" d=\"M7.854.146a.5.5 0 0 0-.708 0l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 1 0 .708-.708L5.707 3 7.854.854a.5.5 0 0 0 0-.708z\"/>
                                                                </svg>
                                                                Restaurar
                                                            </button>
                                                            <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#borrar_definitivo\">
                                                                <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                                                </svg>
                                                                Eliminar
                                                            </a>
                                                            <input type=\"hidden\" name=\"";
                    // line 636
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\">
                                                        </div>
                                                    ";
                }
                // line 639
                echo "                                                </div>
                                                <div class=\"row no-gutters\">
                                                    ";
                // line 641
                $context["nombre"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 641),  -3, 3);
                // line 642
                echo "                                                    <div class=\"col-2\">
                                                        ";
                // line 643
                if (0 === twig_compare(($context["nombre"] ?? null), "pdf")) {
                    // line 644
                    echo "                                                            <img src=\"../img/pdf.png\" class=\"card-img\" alt=\"pdf\">
                                                        ";
                } elseif (0 === twig_compare(                // line 645
($context["nombre"] ?? null), "css")) {
                    // line 646
                    echo "                                                            <img src=\"../img/css.png\" class=\"card-img\" alt=\"css\">
                                                        ";
                } elseif (0 === twig_compare(                // line 647
($context["nombre"] ?? null), "csv")) {
                    // line 648
                    echo "                                                            <img src=\"../img/csv.png\" class=\"card-img\" alt=\"csv\">
                                                        ";
                } elseif (0 === twig_compare(                // line 649
($context["nombre"] ?? null), "ocx")) {
                    // line 650
                    echo "                                                            <img src=\"../img/doc.png\" class=\"card-img\" alt=\"docx\">
                                                        ";
                } elseif (0 === twig_compare(                // line 651
($context["nombre"] ?? null), "dvd")) {
                    // line 652
                    echo "                                                            <img src=\"../img/dvd.png\" class=\"card-img\" alt=\"dvd\">
                                                        ";
                } elseif (0 === twig_compare(                // line 653
($context["nombre"] ?? null), "exe")) {
                    // line 654
                    echo "                                                            <img src=\"../img/exe.png\" class=\"card-img\" alt=\"exe\">
                                                        ";
                } elseif (0 === twig_compare(                // line 655
($context["nombre"] ?? null), "tml")) {
                    // line 656
                    echo "                                                            <img src=\"../img/html.png\" class=\"card-img\" alt=\"html\">
                                                        ";
                } elseif (0 === twig_compare(                // line 657
($context["nombre"] ?? null), "iso")) {
                    // line 658
                    echo "                                                            <img src=\"../img/iso.png\" class=\"card-img\" alt=\"iso\">
                                                        ";
                } elseif (0 === twig_compare(                // line 659
($context["nombre"] ?? null), "jpg")) {
                    // line 660
                    echo "                                                            <img src=\"../img/jpg.png\" class=\"card-img\" alt=\"jpg\">
                                                        ";
                } elseif (0 === twig_compare(                // line 661
($context["nombre"] ?? null), ".js")) {
                    // line 662
                    echo "                                                            <img src=\"../img/js.png\" class=\"card-img\" alt=\"js\">
                                                        ";
                } elseif (0 === twig_compare(                // line 663
($context["nombre"] ?? null), "mp3")) {
                    // line 664
                    echo "                                                            <img src=\"../img/mp3.png\" class=\"card-img\" alt=\"mp3\">
                                                        ";
                } elseif (0 === twig_compare(                // line 665
($context["nombre"] ?? null), "mp4")) {
                    // line 666
                    echo "                                                            <img src=\"../img/mp4.png\" class=\"card-img\" alt=\"mp4\">
                                                        ";
                } elseif (0 === twig_compare(                // line 667
($context["nombre"] ?? null), "png")) {
                    // line 668
                    echo "                                                            <img src=\"../img/png.png\" class=\"card-img\" alt=\"png\">
                                                        ";
                } elseif (0 === twig_compare(                // line 669
($context["nombre"] ?? null), "ptx")) {
                    // line 670
                    echo "                                                            <img src=\"../img/ppt.png\" class=\"card-img\" alt=\"pptx\">
                                                        ";
                } elseif (0 === twig_compare(                // line 671
($context["nombre"] ?? null), "sql")) {
                    // line 672
                    echo "                                                            <img src=\"../img/sql.png\" class=\"card-img\" alt=\"sql\">
                                                        ";
                } elseif (0 === twig_compare(                // line 673
($context["nombre"] ?? null), "txt")) {
                    // line 674
                    echo "                                                            <img src=\"../img/txt.png\" class=\"card-img\" alt=\"txt\">
                                                        ";
                } elseif (0 === twig_compare(                // line 675
($context["nombre"] ?? null), "lsx")) {
                    // line 676
                    echo "                                                            <img src=\"../img/xls.png\" class=\"card-img\" alt=\"xlsx\">
                                                        ";
                } elseif (0 === twig_compare(                // line 677
($context["nombre"] ?? null), "xml")) {
                    // line 678
                    echo "                                                            <img src=\"../img/xml.png\" class=\"card-img\" alt=\"xml\">
                                                        ";
                } elseif (0 === twig_compare(                // line 679
($context["nombre"] ?? null), "zip")) {
                    // line 680
                    echo "                                                            <img src=\"../img/zip.png\" class=\"card-img\" alt=\"zip\">
                                                        ";
                } elseif (0 === twig_compare(                // line 681
($context["nombre"] ?? null), "rar")) {
                    // line 682
                    echo "                                                            <img src=\"../img/rar.png\" class=\"card-img\" alt=\"rar\">
                                                        ";
                } else {
                    // line 684
                    echo "                                                            <img src=\"../img/none.png\" class=\"card-img\" alt=\"desconocido\">
                                                        ";
                }
                // line 686
                echo "                                                    </div>
                                                    <div class=\"col-10\">
                                                        ";
                // line 688
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 688);
                // line 689
                echo "                                                        ";
                if (-1 === twig_compare((($context["size"] ?? null) / 1024), 1)) {
                    // line 690
                    echo "                                                            ";
                    $context["unidad"] = "KB";
                    // line 691
                    echo "                                                            <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round(($context["size"] ?? null), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                    echo "</p>
                                                        ";
                } elseif ((0 <= twig_compare((                // line 692
($context["size"] ?? null) / 1024), 1) && -1 === twig_compare((($context["size"] ?? null) / 1024), 1023))) {
                    // line 693
                    echo "                                                            ";
                    $context["unidad"] = "MB";
                    // line 694
                    echo "                                                            ";
                    $context["size"] = (($context["size"] ?? null) / 1024);
                    // line 695
                    echo "                                                            <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round(($context["size"] ?? null), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                    echo "</p>
                                                        ";
                } else {
                    // line 697
                    echo "                                                            ";
                    $context["unidad"] = "GB";
                    // line 698
                    echo "                                                            ";
                    $context["size"] = (($context["size"] ?? null) / 1048576);
                    // line 699
                    echo "                                                            <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round(($context["size"] ?? null), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["unidad"] ?? null), "html", null, true);
                    echo "</p>
                                                        ";
                }
                // line 701
                echo "                                                        <p class=\"card-text text-muted\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 701), "d-m-Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 701), "H:i"), "html", null, true);
                echo "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            ";
            }
            // line 708
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 709
        echo "                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        ";
        // line 712
        $context["contador"] = 0;
        // line 713
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 714
            echo "                            ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 714);
            // line 715
            echo "                            ";
            if (0 === twig_compare(($context["borrado"] ?? null), "S")) {
                // line 716
                echo "                                ";
                $context["contador"] = (($context["contador"] ?? null) + 1);
                // line 717
                echo "                            ";
            }
            // line 718
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 719
        echo "                        ";
        if ((1 === twig_compare(($context["contador"] ?? null), 0) && 0 === twig_compare(($context["contador"] ?? null), 1))) {
            // line 720
            echo "                            <span>";
            echo twig_escape_filter($this->env, ($context["contador"] ?? null), "html", null, true);
            echo " archivo</span>
                        ";
        } elseif (1 === twig_compare(        // line 721
($context["contador"] ?? null), 1)) {
            // line 722
            echo "                            <span>";
            echo twig_escape_filter($this->env, ($context["contador"] ?? null), "html", null, true);
            echo " archivos</span>
                        ";
        }
        // line 724
        echo "                    </div>
                </div>
            </div>
        </section>

    ";
        // line 730
        echo "    <section class=\"modal fade\" id=\"restaurar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Restaurar archivo</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_restaurar\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"restaurar_nombre\">Restaurar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 752
        echo "    <section class=\"modal fade\" id=\"borrar_definitivo\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Eliminar definitivamente</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_borrar_definitivo\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"borrar_archivo_definitivo\">Eliminar definitivamente</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
";
    }

    // line 774
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 775
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 776
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 777
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 778
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "panel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1472 => 778,  1468 => 777,  1464 => 776,  1459 => 775,  1455 => 774,  1430 => 752,  1407 => 730,  1400 => 724,  1394 => 722,  1392 => 721,  1387 => 720,  1384 => 719,  1378 => 718,  1375 => 717,  1372 => 716,  1369 => 715,  1366 => 714,  1361 => 713,  1359 => 712,  1354 => 709,  1348 => 708,  1335 => 701,  1327 => 699,  1324 => 698,  1321 => 697,  1313 => 695,  1310 => 694,  1307 => 693,  1305 => 692,  1298 => 691,  1295 => 690,  1292 => 689,  1290 => 688,  1286 => 686,  1282 => 684,  1278 => 682,  1276 => 681,  1273 => 680,  1271 => 679,  1268 => 678,  1266 => 677,  1263 => 676,  1261 => 675,  1258 => 674,  1256 => 673,  1253 => 672,  1251 => 671,  1248 => 670,  1246 => 669,  1243 => 668,  1241 => 667,  1238 => 666,  1236 => 665,  1233 => 664,  1231 => 663,  1228 => 662,  1226 => 661,  1223 => 660,  1221 => 659,  1218 => 658,  1216 => 657,  1213 => 656,  1211 => 655,  1208 => 654,  1206 => 653,  1203 => 652,  1201 => 651,  1198 => 650,  1196 => 649,  1193 => 648,  1191 => 647,  1188 => 646,  1186 => 645,  1183 => 644,  1181 => 643,  1178 => 642,  1176 => 641,  1172 => 639,  1164 => 636,  1144 => 619,  1139 => 618,  1131 => 615,  1111 => 598,  1106 => 597,  1100 => 596,  1095 => 595,  1093 => 594,  1084 => 591,  1082 => 590,  1079 => 589,  1077 => 588,  1074 => 587,  1071 => 586,  1068 => 585,  1064 => 584,  1053 => 575,  1029 => 552,  1006 => 530,  983 => 508,  962 => 488,  941 => 468,  925 => 454,  912 => 443,  888 => 420,  883 => 416,  871 => 410,  868 => 409,  863 => 408,  860 => 406,  854 => 405,  842 => 395,  839 => 394,  836 => 393,  831 => 392,  828 => 390,  816 => 384,  808 => 378,  803 => 377,  800 => 375,  788 => 369,  785 => 368,  780 => 367,  777 => 365,  765 => 359,  762 => 358,  757 => 357,  755 => 356,  749 => 355,  743 => 351,  740 => 350,  737 => 349,  732 => 348,  727 => 345,  724 => 344,  721 => 342,  715 => 341,  702 => 334,  694 => 332,  691 => 331,  688 => 330,  680 => 328,  677 => 327,  674 => 326,  672 => 325,  665 => 324,  662 => 323,  659 => 322,  657 => 321,  653 => 319,  649 => 317,  645 => 315,  643 => 314,  640 => 313,  638 => 312,  635 => 311,  633 => 310,  630 => 309,  628 => 308,  625 => 307,  623 => 306,  620 => 305,  618 => 304,  615 => 303,  613 => 302,  610 => 301,  608 => 300,  605 => 299,  603 => 298,  600 => 297,  598 => 296,  595 => 295,  593 => 294,  590 => 293,  588 => 292,  585 => 291,  583 => 290,  580 => 289,  578 => 288,  575 => 287,  573 => 286,  570 => 285,  568 => 284,  565 => 283,  563 => 282,  560 => 281,  558 => 280,  555 => 279,  553 => 278,  550 => 277,  548 => 276,  545 => 275,  543 => 274,  539 => 272,  530 => 269,  519 => 260,  516 => 259,  514 => 258,  511 => 257,  508 => 256,  505 => 255,  496 => 248,  493 => 247,  490 => 246,  481 => 239,  478 => 238,  476 => 237,  456 => 222,  442 => 211,  437 => 210,  428 => 207,  416 => 197,  413 => 196,  411 => 195,  408 => 194,  405 => 193,  402 => 192,  393 => 185,  390 => 184,  387 => 183,  378 => 176,  375 => 175,  373 => 174,  353 => 159,  339 => 148,  334 => 147,  328 => 146,  323 => 145,  321 => 144,  312 => 141,  310 => 140,  307 => 139,  305 => 138,  302 => 137,  299 => 136,  296 => 135,  292 => 134,  288 => 132,  253 => 98,  250 => 96,  234 => 86,  217 => 74,  207 => 66,  204 => 65,  197 => 63,  190 => 61,  187 => 60,  180 => 58,  173 => 56,  170 => 55,  167 => 54,  164 => 53,  161 => 52,  154 => 50,  147 => 48,  144 => 47,  141 => 46,  138 => 45,  136 => 44,  130 => 43,  123 => 41,  120 => 40,  117 => 39,  114 => 38,  111 => 37,  108 => 36,  105 => 35,  101 => 34,  90 => 25,  74 => 10,  71 => 8,  67 => 7,  60 => 5,  56 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "panel/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\panel\\index.html.twig");
    }
}
