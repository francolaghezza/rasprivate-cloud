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
class __TwigTemplate_4c0c04308c1f6efb675458543edd7d55f2c667ceba5c5ba0e0156c2aa964de51 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 35
            echo "                ";
            $context["total"] = 5242880;
            // line 36
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 36);
            // line 37
            echo "                ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 37, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 37, $this->source); })())) * 100);
            // line 38
            echo "                ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 38, $this->source); })()) / 1024), 1)) {
                // line 39
                echo "                ";
                $context["unidad"] = "KB";
                // line 40
                echo "                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 43
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 43, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 43, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                ";
            } elseif ((0 <= twig_compare((            // line 44
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 44, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 44, $this->source); })()) / 1024), 1023))) {
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
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 50
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 50, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 50, $this->source); })()), "html", null, true);
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
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 54, $this->source); })()), 4.5)) {
                    // line 55
                    echo "                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 56
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 56, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 56, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 58
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 58, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 58, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                } else {
                    // line 60
                    echo "                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 61
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 61, $this->source); })()), "html", null, true);
                    echo "% ;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 61, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 63
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 63, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 63, $this->source); })()), "html", null, true);
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
            if (0 === twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 74, $this->source); })()), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 74, $this->source); })()))) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "username", [], "any", false, false, false, 86), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 135
            echo "                    ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 135);
            // line 136
            echo "                    ";
            if (0 === twig_compare((isset($context["borrado"]) || array_key_exists("borrado", $context) ? $context["borrado"] : (function () { throw new RuntimeError('Variable "borrado" does not exist.', 136, $this->source); })()), "N")) {
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
                echo "                        <div class=\"card-body\">
                            <div class=\"dropdown no-gutters\">
                            ";
                // line 143
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 143)), 30)) {
                    // line 144
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 144), 0, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 145
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                                <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownPanel\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 146), "html", null, true);
                    echo "\">
                                    ";
                    // line 147
                    echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 147), 0, 30) . "..."), "html", null, true);
                    echo "
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownPanel\">
                                    <input type=\"hidden\" name=\"";
                    // line 150
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 150, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 150, $this->source); })()), "html", null, true);
                    echo "\">
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("uploads/archivos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "username", [], "any", false, false, false, 159)) . "/") . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 159))), "html", null, true);
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
                    if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 175, $this->source); })()), 25600)) {
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
                    if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 184, $this->source); })()), 32768)) {
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
                    if (twig_in_filter((isset($context["ext_archivo"]) || array_key_exists("ext_archivo", $context) ? $context["ext_archivo"] : (function () { throw new RuntimeError('Variable "ext_archivo" does not exist.', 194, $this->source); })()), (isset($context["comprimido"]) || array_key_exists("comprimido", $context) ? $context["comprimido"] : (function () { throw new RuntimeError('Variable "comprimido" does not exist.', 194, $this->source); })()))) {
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
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 207, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 207, $this->source); })()), "html", null, true);
                    echo "\">
                                </div>
                            ";
                } else {
                    // line 210
                    echo "                                <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownPanel2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 210), "html", null, true);
                    echo "\">
                                        ";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 211), "html", null, true);
                    echo "
                                    </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownPanel2\">
                                    <input type=\"hidden\" name=\"";
                    // line 214
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 214, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 214, $this->source); })()), "html", null, true);
                    echo "\">
                                        <button class=\"dropdown-item btn btn-md\" type=\"button\" data-toggle=\"modal\" data-target=\"#editar\">
                                            <svg class=\"bi bi-pen\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z\"/>
                                                <path d=\"M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z\"/>
                                            </svg>
                                            Editar
                                        </button>
                                        <a class=\"btn btn-md dropdown-item\" href=\"";
                    // line 223
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("uploads/archivos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "user", [], "any", false, false, false, 223), "username", [], "any", false, false, false, 223)) . "/") . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 223))), "html", null, true);
                    echo "\" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 223), "html", null, true);
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
                    // line 238
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 238);
                    // line 239
                    echo "                                        ";
                    if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 239, $this->source); })()), 25600)) {
                        // line 240
                        echo "                                            <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#compartir\">
                                                <svg class=\"bi bi-reply\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path fill-rule=\"evenodd\" d=\"M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z\"/>
                                                </svg>
                                                Compartir
                                            </a>
                                        ";
                    }
                    // line 247
                    echo "                                        ";
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 247);
                    // line 248
                    echo "                                        ";
                    if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 248, $this->source); })()), 32768)) {
                        // line 249
                        echo "                                            <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#analizar\">
                                                <svg class=\"bi bi-file-earmark-break\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 0 0-2 2v6h1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1H2v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1zM0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z\"/>
                                                </svg>
                                                Analizar
                                            </button>
                                        ";
                    }
                    // line 256
                    echo "                                        ";
                    $context["comprimido"] = [0 => "cbr", 1 => "jar", 2 => "pit", 3 => "rar", 4 => "jar", 5 => "tgz", 6 => "dl_", 7 => "bz2", 8 => "cbz", 9 => "war", 10 => "zip", 11 => "z01"];
                    // line 257
                    echo "                                        ";
                    $context["ext_archivo"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 257),  -3, 3);
                    // line 258
                    echo "                                        ";
                    if (twig_in_filter((isset($context["ext_archivo"]) || array_key_exists("ext_archivo", $context) ? $context["ext_archivo"] : (function () { throw new RuntimeError('Variable "ext_archivo" does not exist.', 258, $this->source); })()), (isset($context["comprimido"]) || array_key_exists("comprimido", $context) ? $context["comprimido"] : (function () { throw new RuntimeError('Variable "comprimido" does not exist.', 258, $this->source); })()))) {
                        // line 259
                        echo "                                            ";
                        // line 260
                        echo "                                        ";
                    } else {
                        // line 261
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
                    // line 270
                    echo "                                        <input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 270, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 270, $this->source); })()), "html", null, true);
                    echo "\">
                                    </div>
                            ";
                }
                // line 273
                echo "                            </div>
                            <div class=\"row no-gutters\">
                                ";
                // line 275
                $context["nombre"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 275),  -3, 3);
                // line 276
                echo "                                <div class=\"col-2\">
                                    ";
                // line 277
                if (0 === twig_compare((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 277, $this->source); })()), "pdf")) {
                    // line 278
                    echo "                                        <img src=\"../img/pdf.png\" class=\"card-img\" alt=\"pdf\">
                                    ";
                } elseif (0 === twig_compare(                // line 279
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 279, $this->source); })()), "css")) {
                    // line 280
                    echo "                                        <img src=\"../img/css.png\" class=\"card-img\" alt=\"css\">
                                    ";
                } elseif (0 === twig_compare(                // line 281
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 281, $this->source); })()), "csv")) {
                    // line 282
                    echo "                                        <img src=\"../img/csv.png\" class=\"card-img\" alt=\"csv\">
                                    ";
                } elseif (0 === twig_compare(                // line 283
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 283, $this->source); })()), "ocx")) {
                    // line 284
                    echo "                                        <img src=\"../img/doc.png\" class=\"card-img\" alt=\"docx\">
                                    ";
                } elseif (0 === twig_compare(                // line 285
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 285, $this->source); })()), "dvd")) {
                    // line 286
                    echo "                                        <img src=\"../img/dvd.png\" class=\"card-img\" alt=\"dvd\">
                                    ";
                } elseif (0 === twig_compare(                // line 287
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 287, $this->source); })()), "exe")) {
                    // line 288
                    echo "                                        <img src=\"../img/exe.png\" class=\"card-img\" alt=\"exe\">
                                    ";
                } elseif (0 === twig_compare(                // line 289
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 289, $this->source); })()), "tml")) {
                    // line 290
                    echo "                                        <img src=\"../img/html.png\" class=\"card-img\" alt=\"html\">
                                    ";
                } elseif (0 === twig_compare(                // line 291
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 291, $this->source); })()), "iso")) {
                    // line 292
                    echo "                                        <img src=\"../img/iso.png\" class=\"card-img\" alt=\"iso\">
                                    ";
                } elseif (0 === twig_compare(                // line 293
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 293, $this->source); })()), "jpg")) {
                    // line 294
                    echo "                                        <img src=\"../img/jpg.png\" class=\"card-img\" alt=\"jpg\">
                                    ";
                } elseif (0 === twig_compare(                // line 295
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 295, $this->source); })()), ".js")) {
                    // line 296
                    echo "                                        <img src=\"../img/js.png\" class=\"card-img\" alt=\"js\">
                                    ";
                } elseif (0 === twig_compare(                // line 297
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 297, $this->source); })()), "mp3")) {
                    // line 298
                    echo "                                        <img src=\"../img/mp3.png\" class=\"card-img\" alt=\"mp3\">
                                    ";
                } elseif (0 === twig_compare(                // line 299
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 299, $this->source); })()), "mp4")) {
                    // line 300
                    echo "                                        <img src=\"../img/mp4.png\" class=\"card-img\" alt=\"mp4\">
                                    ";
                } elseif (0 === twig_compare(                // line 301
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 301, $this->source); })()), "png")) {
                    // line 302
                    echo "                                        <img src=\"../img/png.png\" class=\"card-img\" alt=\"png\">
                                    ";
                } elseif (0 === twig_compare(                // line 303
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 303, $this->source); })()), "ptx")) {
                    // line 304
                    echo "                                        <img src=\"../img/ppt.png\" class=\"card-img\" alt=\"pptx\">
                                    ";
                } elseif (0 === twig_compare(                // line 305
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 305, $this->source); })()), "sql")) {
                    // line 306
                    echo "                                        <img src=\"../img/sql.png\" class=\"card-img\" alt=\"sql\">
                                    ";
                } elseif (0 === twig_compare(                // line 307
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 307, $this->source); })()), "txt")) {
                    // line 308
                    echo "                                        <img src=\"../img/txt.png\" class=\"card-img\" alt=\"txt\">
                                    ";
                } elseif (0 === twig_compare(                // line 309
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 309, $this->source); })()), "lsx")) {
                    // line 310
                    echo "                                        <img src=\"../img/xls.png\" class=\"card-img\" alt=\"xlsx\">
                                    ";
                } elseif (0 === twig_compare(                // line 311
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 311, $this->source); })()), "xml")) {
                    // line 312
                    echo "                                        <img src=\"../img/xml.png\" class=\"card-img\" alt=\"xml\">
                                    ";
                } elseif (0 === twig_compare(                // line 313
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 313, $this->source); })()), "zip")) {
                    // line 314
                    echo "                                        <img src=\"../img/zip.png\" class=\"card-img\" alt=\"zip\">
                                    ";
                } elseif (0 === twig_compare(                // line 315
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 315, $this->source); })()), "rar")) {
                    // line 316
                    echo "                                        <img src=\"../img/rar.png\" class=\"card-img\" alt=\"rar\">
                                    ";
                } else {
                    // line 318
                    echo "                                        <img src=\"../img/none.png\" class=\"card-img\" alt=\"desconocido\">
                                    ";
                }
                // line 320
                echo "                                </div>
                                <div class=\"col-10\">
                                    ";
                // line 322
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 322);
                // line 323
                echo "                                    ";
                if (-1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 323, $this->source); })()) / 1024), 1)) {
                    // line 324
                    echo "                                        ";
                    $context["unidad"] = "KB";
                    // line 325
                    echo "                                        <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 325, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 325, $this->source); })()), "html", null, true);
                    echo "</p>
                                    ";
                } elseif ((0 <= twig_compare((                // line 326
(isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 326, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 326, $this->source); })()) / 1024), 1023))) {
                    // line 327
                    echo "                                        ";
                    $context["unidad"] = "MB";
                    // line 328
                    echo "                                        ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 328, $this->source); })()) / 1024);
                    // line 329
                    echo "                                        <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 329, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 329, $this->source); })()), "html", null, true);
                    echo "</p>
                                    ";
                } else {
                    // line 331
                    echo "                                        ";
                    $context["unidad"] = "GB";
                    // line 332
                    echo "                                        ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 332, $this->source); })()) / 1048576);
                    // line 333
                    echo "                                        <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 333, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 333, $this->source); })()), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 335
                echo "                                    <p class=\"card-text text-muted\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 335), "d-m-Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 335), "H:i"), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    ";
            }
            // line 342
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "            </div>
        ";
        // line 345
        echo "        <div class=\"navigation\">
            ";
        // line 346
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 346, $this->source); })()));
        echo "
        </div>
            ";
        // line 349
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 349, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 350
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 350);
            // line 351
            echo "                ";
            if (0 === twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 351, $this->source); })()), 0)) {
                // line 352
                echo "                    <div class=\"centrado\">
                        <h4 class=\"text-center\">Aquí se mostrarán tus archivos</h4>
                    </div>
                ";
            }
            // line 356
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "            ";
        // line 358
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 358, $this->source); })()), "session", [], "any", false, false, false, 358), "flashbag", [], "any", false, false, false, 358), "get", [0 => "compartido"], "method", false, false, false, 358));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 359
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 360
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
        // line 366
        echo "
            ";
        // line 368
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 368, $this->source); })()), "session", [], "any", false, false, false, 368), "flashbag", [], "any", false, false, false, 368), "get", [0 => "delete"], "method", false, false, false, 368));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 369
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 370
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
        // line 376
        echo "
            ";
        // line 378
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 378, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 379
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 379);
            // line 380
            echo "                ";
            if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 380, $this->source); })()), 4718592)) {
                // line 381
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
            // line 391
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
        echo "
        ";
        // line 394
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 394, $this->source); })()), "session", [], "any", false, false, false, 394), "flashbag", [], "any", false, false, false, 394), "get", [0 => "exito"], "method", false, false, false, 394));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 395
            echo "            <div class=\"alert alert-success alert-dismissible w-50 mx-auto mt-2 show fade\">
                ";
            // line 396
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
        // line 402
        echo "        </div>
</main>

    ";
        // line 406
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
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"editar_nombre\">Editar</button type=\"button\">
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 429
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
        // line 440
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 440, $this->source); })()), "user", [], "any", false, false, false, 440), "email", [], "any", false, false, false, 440), "html", null, true);
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
        // line 454
        echo "    <section class=\"modal bg-transparent border-0\" id=\"editando\">
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
                            <h5 class=\"text-light text-center\">Editando archivo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 474
        echo "    <section class=\"modal bg-transparent border-0\" id=\"eliminando\">
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
                            <h5 class=\"text-light text-center\">Eliminando</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 494
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
        // line 514
        echo "    <section class=\"modal bg-transparent border-0\" id=\"compartiendo\">
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
                            <h5 class=\"text-light text-center\">Compartiendo archivo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 534
        echo "    <section class=\"modal bg-transparent border-0\" id=\"comprimiendo\">
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
                            <h5 class=\"text-light text-center\">Comprimiendo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 554
        echo "    <section class=\"modal bg-transparent border-0\" id=\"restaurando\">
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
                            <h5 class=\"text-light text-center\">Restaurando</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 574
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
        // line 594
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
        // line 616
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
        // line 638
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
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 660
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
        // line 669
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 669, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 670
            echo "                            ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 670);
            // line 671
            echo "                            ";
            if (0 === twig_compare((isset($context["borrado"]) || array_key_exists("borrado", $context) ? $context["borrado"] : (function () { throw new RuntimeError('Variable "borrado" does not exist.', 671, $this->source); })()), "S")) {
                // line 672
                echo "                                    <div class=\"col-6 mb-2\">
                                        ";
                // line 673
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 673);
                // line 674
                echo "                                        <div class=\"card\">
                                            ";
                // line 675
                $context["nombre"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 675);
                // line 676
                echo "                                            <div class=\"card-body\">
                                                <div class=\"dropdown no-gutters\">
                                                    ";
                // line 678
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 678)), 30)) {
                    // line 679
                    echo "                                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 679), 0, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 680
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 681
                    echo "                                                        <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 681), "html", null, true);
                    echo "\">
                                                            ";
                    // line 682
                    echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 682), 0, 30) . "..."), "html", null, true);
                    echo "
                                                        </button>
                                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                                            <input type=\"hidden\" name=\"";
                    // line 685
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 685, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 685, $this->source); })()), "html", null, true);
                    echo "\">
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
                    // line 700
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 700, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 700, $this->source); })()), "html", null, true);
                    echo "\">
                                                        </div>
                                                    ";
                } else {
                    // line 703
                    echo "                                                        <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 703), "html", null, true);
                    echo "\">
                                                            ";
                    // line 704
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 704), "html", null, true);
                    echo "
                                                        </button>
                                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                                            <input type=\"hidden\" name=\"";
                    // line 707
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 707, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 707, $this->source); })()), "html", null, true);
                    echo "\">
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
                    // line 722
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 722, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 722, $this->source); })()), "html", null, true);
                    echo "\">
                                                        </div>
                                                    ";
                }
                // line 725
                echo "                                                </div>
                                                <div class=\"row no-gutters\">
                                                    ";
                // line 727
                $context["nombre"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 727),  -3, 3);
                // line 728
                echo "                                                    <div class=\"col-2\">
                                                        ";
                // line 729
                if (0 === twig_compare((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 729, $this->source); })()), "pdf")) {
                    // line 730
                    echo "                                                            <img src=\"../img/pdf.png\" class=\"card-img\" alt=\"pdf\">
                                                        ";
                } elseif (0 === twig_compare(                // line 731
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 731, $this->source); })()), "css")) {
                    // line 732
                    echo "                                                            <img src=\"../img/css.png\" class=\"card-img\" alt=\"css\">
                                                        ";
                } elseif (0 === twig_compare(                // line 733
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 733, $this->source); })()), "csv")) {
                    // line 734
                    echo "                                                            <img src=\"../img/csv.png\" class=\"card-img\" alt=\"csv\">
                                                        ";
                } elseif (0 === twig_compare(                // line 735
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 735, $this->source); })()), "ocx")) {
                    // line 736
                    echo "                                                            <img src=\"../img/doc.png\" class=\"card-img\" alt=\"docx\">
                                                        ";
                } elseif (0 === twig_compare(                // line 737
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 737, $this->source); })()), "dvd")) {
                    // line 738
                    echo "                                                            <img src=\"../img/dvd.png\" class=\"card-img\" alt=\"dvd\">
                                                        ";
                } elseif (0 === twig_compare(                // line 739
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 739, $this->source); })()), "exe")) {
                    // line 740
                    echo "                                                            <img src=\"../img/exe.png\" class=\"card-img\" alt=\"exe\">
                                                        ";
                } elseif (0 === twig_compare(                // line 741
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 741, $this->source); })()), "tml")) {
                    // line 742
                    echo "                                                            <img src=\"../img/html.png\" class=\"card-img\" alt=\"html\">
                                                        ";
                } elseif (0 === twig_compare(                // line 743
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 743, $this->source); })()), "iso")) {
                    // line 744
                    echo "                                                            <img src=\"../img/iso.png\" class=\"card-img\" alt=\"iso\">
                                                        ";
                } elseif (0 === twig_compare(                // line 745
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 745, $this->source); })()), "jpg")) {
                    // line 746
                    echo "                                                            <img src=\"../img/jpg.png\" class=\"card-img\" alt=\"jpg\">
                                                        ";
                } elseif (0 === twig_compare(                // line 747
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 747, $this->source); })()), ".js")) {
                    // line 748
                    echo "                                                            <img src=\"../img/js.png\" class=\"card-img\" alt=\"js\">
                                                        ";
                } elseif (0 === twig_compare(                // line 749
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 749, $this->source); })()), "mp3")) {
                    // line 750
                    echo "                                                            <img src=\"../img/mp3.png\" class=\"card-img\" alt=\"mp3\">
                                                        ";
                } elseif (0 === twig_compare(                // line 751
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 751, $this->source); })()), "mp4")) {
                    // line 752
                    echo "                                                            <img src=\"../img/mp4.png\" class=\"card-img\" alt=\"mp4\">
                                                        ";
                } elseif (0 === twig_compare(                // line 753
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 753, $this->source); })()), "png")) {
                    // line 754
                    echo "                                                            <img src=\"../img/png.png\" class=\"card-img\" alt=\"png\">
                                                        ";
                } elseif (0 === twig_compare(                // line 755
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 755, $this->source); })()), "ptx")) {
                    // line 756
                    echo "                                                            <img src=\"../img/ppt.png\" class=\"card-img\" alt=\"pptx\">
                                                        ";
                } elseif (0 === twig_compare(                // line 757
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 757, $this->source); })()), "sql")) {
                    // line 758
                    echo "                                                            <img src=\"../img/sql.png\" class=\"card-img\" alt=\"sql\">
                                                        ";
                } elseif (0 === twig_compare(                // line 759
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 759, $this->source); })()), "txt")) {
                    // line 760
                    echo "                                                            <img src=\"../img/txt.png\" class=\"card-img\" alt=\"txt\">
                                                        ";
                } elseif (0 === twig_compare(                // line 761
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 761, $this->source); })()), "lsx")) {
                    // line 762
                    echo "                                                            <img src=\"../img/xls.png\" class=\"card-img\" alt=\"xlsx\">
                                                        ";
                } elseif (0 === twig_compare(                // line 763
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 763, $this->source); })()), "xml")) {
                    // line 764
                    echo "                                                            <img src=\"../img/xml.png\" class=\"card-img\" alt=\"xml\">
                                                        ";
                } elseif (0 === twig_compare(                // line 765
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 765, $this->source); })()), "zip")) {
                    // line 766
                    echo "                                                            <img src=\"../img/zip.png\" class=\"card-img\" alt=\"zip\">
                                                        ";
                } elseif (0 === twig_compare(                // line 767
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 767, $this->source); })()), "rar")) {
                    // line 768
                    echo "                                                            <img src=\"../img/rar.png\" class=\"card-img\" alt=\"rar\">
                                                        ";
                } else {
                    // line 770
                    echo "                                                            <img src=\"../img/none.png\" class=\"card-img\" alt=\"desconocido\">
                                                        ";
                }
                // line 772
                echo "                                                    </div>
                                                    <div class=\"col-10\">
                                                        ";
                // line 774
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 774);
                // line 775
                echo "                                                        ";
                if (-1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 775, $this->source); })()) / 1024), 1)) {
                    // line 776
                    echo "                                                            ";
                    $context["unidad"] = "KB";
                    // line 777
                    echo "                                                            <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 777, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 777, $this->source); })()), "html", null, true);
                    echo "</p>
                                                        ";
                } elseif ((0 <= twig_compare((                // line 778
(isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 778, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 778, $this->source); })()) / 1024), 1023))) {
                    // line 779
                    echo "                                                            ";
                    $context["unidad"] = "MB";
                    // line 780
                    echo "                                                            ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 780, $this->source); })()) / 1024);
                    // line 781
                    echo "                                                            <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 781, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 781, $this->source); })()), "html", null, true);
                    echo "</p>
                                                        ";
                } else {
                    // line 783
                    echo "                                                            ";
                    $context["unidad"] = "GB";
                    // line 784
                    echo "                                                            ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 784, $this->source); })()) / 1048576);
                    // line 785
                    echo "                                                            <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 785, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 785, $this->source); })()), "html", null, true);
                    echo "</p>
                                                        ";
                }
                // line 787
                echo "                                                        <p class=\"card-text text-muted\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 787), "d-m-Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 787), "H:i"), "html", null, true);
                echo "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            ";
            }
            // line 794
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 795
        echo "                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        ";
        // line 798
        $context["contador"] = 0;
        // line 799
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 799, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 800
            echo "                            ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 800);
            // line 801
            echo "                            ";
            if (0 === twig_compare((isset($context["borrado"]) || array_key_exists("borrado", $context) ? $context["borrado"] : (function () { throw new RuntimeError('Variable "borrado" does not exist.', 801, $this->source); })()), "S")) {
                // line 802
                echo "                                ";
                $context["contador"] = ((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 802, $this->source); })()) + 1);
                // line 803
                echo "                            ";
            }
            // line 804
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 805
        echo "                        ";
        if ((1 === twig_compare((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 805, $this->source); })()), 0) && 0 === twig_compare((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 805, $this->source); })()), 1))) {
            // line 806
            echo "                            <span>";
            echo twig_escape_filter($this->env, (isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 806, $this->source); })()), "html", null, true);
            echo " archivo</span>
                        ";
        } elseif (1 === twig_compare(        // line 807
(isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 807, $this->source); })()), 1)) {
            // line 808
            echo "                            <span>";
            echo twig_escape_filter($this->env, (isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 808, $this->source); })()), "html", null, true);
            echo " archivos</span>
                        ";
        }
        // line 810
        echo "                    </div>
                </div>
            </div>
        </section>

    ";
        // line 816
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
        // line 838
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 860
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 861
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 862
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 863
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 864
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1616 => 864,  1612 => 863,  1608 => 862,  1603 => 861,  1593 => 860,  1562 => 838,  1539 => 816,  1532 => 810,  1526 => 808,  1524 => 807,  1519 => 806,  1516 => 805,  1510 => 804,  1507 => 803,  1504 => 802,  1501 => 801,  1498 => 800,  1493 => 799,  1491 => 798,  1486 => 795,  1480 => 794,  1467 => 787,  1459 => 785,  1456 => 784,  1453 => 783,  1445 => 781,  1442 => 780,  1439 => 779,  1437 => 778,  1430 => 777,  1427 => 776,  1424 => 775,  1422 => 774,  1418 => 772,  1414 => 770,  1410 => 768,  1408 => 767,  1405 => 766,  1403 => 765,  1400 => 764,  1398 => 763,  1395 => 762,  1393 => 761,  1390 => 760,  1388 => 759,  1385 => 758,  1383 => 757,  1380 => 756,  1378 => 755,  1375 => 754,  1373 => 753,  1370 => 752,  1368 => 751,  1365 => 750,  1363 => 749,  1360 => 748,  1358 => 747,  1355 => 746,  1353 => 745,  1350 => 744,  1348 => 743,  1345 => 742,  1343 => 741,  1340 => 740,  1338 => 739,  1335 => 738,  1333 => 737,  1330 => 736,  1328 => 735,  1325 => 734,  1323 => 733,  1320 => 732,  1318 => 731,  1315 => 730,  1313 => 729,  1310 => 728,  1308 => 727,  1304 => 725,  1296 => 722,  1276 => 707,  1270 => 704,  1265 => 703,  1257 => 700,  1237 => 685,  1231 => 682,  1226 => 681,  1220 => 680,  1215 => 679,  1213 => 678,  1209 => 676,  1207 => 675,  1204 => 674,  1202 => 673,  1199 => 672,  1196 => 671,  1193 => 670,  1189 => 669,  1178 => 660,  1155 => 638,  1132 => 616,  1109 => 594,  1088 => 574,  1067 => 554,  1046 => 534,  1025 => 514,  1004 => 494,  983 => 474,  962 => 454,  946 => 440,  933 => 429,  909 => 406,  904 => 402,  892 => 396,  889 => 395,  884 => 394,  881 => 392,  875 => 391,  863 => 381,  860 => 380,  857 => 379,  852 => 378,  849 => 376,  837 => 370,  834 => 369,  829 => 368,  826 => 366,  814 => 360,  811 => 359,  806 => 358,  804 => 357,  798 => 356,  792 => 352,  789 => 351,  786 => 350,  781 => 349,  776 => 346,  773 => 345,  770 => 343,  764 => 342,  751 => 335,  743 => 333,  740 => 332,  737 => 331,  729 => 329,  726 => 328,  723 => 327,  721 => 326,  714 => 325,  711 => 324,  708 => 323,  706 => 322,  702 => 320,  698 => 318,  694 => 316,  692 => 315,  689 => 314,  687 => 313,  684 => 312,  682 => 311,  679 => 310,  677 => 309,  674 => 308,  672 => 307,  669 => 306,  667 => 305,  664 => 304,  662 => 303,  659 => 302,  657 => 301,  654 => 300,  652 => 299,  649 => 298,  647 => 297,  644 => 296,  642 => 295,  639 => 294,  637 => 293,  634 => 292,  632 => 291,  629 => 290,  627 => 289,  624 => 288,  622 => 287,  619 => 286,  617 => 285,  614 => 284,  612 => 283,  609 => 282,  607 => 281,  604 => 280,  602 => 279,  599 => 278,  597 => 277,  594 => 276,  592 => 275,  588 => 273,  579 => 270,  568 => 261,  565 => 260,  563 => 259,  560 => 258,  557 => 257,  554 => 256,  545 => 249,  542 => 248,  539 => 247,  530 => 240,  527 => 239,  525 => 238,  505 => 223,  491 => 214,  485 => 211,  480 => 210,  471 => 207,  459 => 197,  456 => 196,  454 => 195,  451 => 194,  448 => 193,  445 => 192,  436 => 185,  433 => 184,  430 => 183,  421 => 176,  418 => 175,  416 => 174,  396 => 159,  382 => 150,  376 => 147,  371 => 146,  365 => 145,  360 => 144,  358 => 143,  354 => 141,  352 => 140,  349 => 139,  347 => 138,  344 => 137,  341 => 136,  338 => 135,  334 => 134,  330 => 132,  295 => 98,  292 => 96,  276 => 86,  259 => 74,  249 => 66,  246 => 65,  239 => 63,  232 => 61,  229 => 60,  222 => 58,  215 => 56,  212 => 55,  209 => 54,  206 => 53,  203 => 52,  196 => 50,  189 => 48,  186 => 47,  183 => 46,  180 => 45,  178 => 44,  172 => 43,  165 => 41,  162 => 40,  159 => 39,  156 => 38,  153 => 37,  150 => 36,  147 => 35,  143 => 34,  132 => 25,  116 => 10,  113 => 8,  103 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panel{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block body %}
<body class=\"bg-dark\">
    {# Menú de navegación #}
    <header class=\"row justify-content-center\">
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
    {# Menú lateral #}
    <div class=\"container text-white menu-lateral\">
            <h6>
                <svg class=\"bi bi-list-task mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M2 2.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5V3a.5.5 0 00-.5-.5H2zM3 3H2v1h1V3z\" clip-rule=\"evenodd\"/>
                    <path d=\"M5 3.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zM5.5 7a.5.5 0 000 1h9a.5.5 0 000-1h-9zm0 4a.5.5 0 000 1h9a.5.5 0 000-1h-9z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1.5 7a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5H2zm1 .5H2v1h1v-1z\" clip-rule=\"evenodd\"/>
                </svg>
                Almacenamiento
           </h6>
            {% for usuario in almacenamiento %}
                {% set total =  5242880 %}
                {% set utilizado = usuario.almacenamiento %}
                {% set porcentaje = (utilizado/total)*100 %}
                {% if utilizado/1024 < 1 %}
                {% set unidad = 'KB' %}
                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                {% elseif utilizado/1024 >= 1 and utilizado/1024 < 1023 %}
                {% set unidad = 'MB' %}
                {% set utilizado = usuario.almacenamiento/1024 %}
                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                {% else %}
                    {% set unidad = 'GB' %}
                    {% set utilizado = usuario.almacenamiento/1048576 %}
                    {% if utilizado >= 4.5 %}
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ; background-color: red;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <p style=\"margin-top: 20px;margin-bottom: 30px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                    {% else %}
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                    {% endif %}
                {% endif %}

                <h6 data-toggle=\"modal\" data-target=\"#papelera\" title=\"Papelera\" id=\"papelera_archivos\" style=\"margin-bottom: 30px;\">
                    <svg class=\"bi bi-trash mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                    </svg>
                    Papelera
                </h6>
                <a {% if utilizado == total %}class=\"text-white text-decoration-none disabled\"{% endif %} href=\"nuevo\"class=\"text-white text-decoration-none\">
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
                    </svg> {{ app.user.username }}
                </a>
                <a href=\"logout\"class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                    <svg class=\"bi bi-box-arrow-in-right mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z\"/>
                        <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z\"/>
                        <path fill-rule=\"evenodd\" d=\"M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z\"/>
                    </svg> Cerrar sesión
                </a>
            {% endfor %}
        </div>
    {# Menú #}
    <div class=\"container-fluid bg-light fixed-bottom text-center menu-responsive\">
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
    {# Panel de archivos #}
    <div class=\"container mt-4\" style=\"margin-left: 15%;\">
            <div class=\"row\">
                {% for archivo in pagination %}
                    {% set borrado = archivo.borrado %}
                    {% if borrado == 'N' %}
                <div class=\"col-md-4 mt-4 mb-2\">
                    {% set id = archivo.id %}
                    <div class=\"card\">
                        {% set nombre = archivo.nombre %}
                        <div class=\"card-body\">
                            <div class=\"dropdown no-gutters\">
                            {% if archivo.nombre | length > 30 %}
                                {% for i in archivo.nombre | slice(0, 30) %}
                                {% endfor %}
                                <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownPanel\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"{{ archivo.nombre }}\">
                                    {{ archivo.nombre | slice(0, 30) ~ '...' }}
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownPanel\">
                                    <input type=\"hidden\" name=\"{{ nombre }}\" value=\"{{ nombre }}\">
                                    <button class=\"dropdown-item btn btn-md\" type=\"button\" data-toggle=\"modal\" data-target=\"#editar\">
                                        <svg class=\"bi bi-pen\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" d=\"M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z\"/>
                                            <path d=\"M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z\"/>
                                        </svg>
                                        Editar
                                    </button>
                                    <a class=\"btn btn-md dropdown-item\" href=\"{{ asset('uploads/archivos/' ~ app.user.username ~ '/' ~ archivo.nombre) }}\" download=\"{{ archivo.nombre }}\">
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
                                    {% set size = archivo.size %}
                                    {% if size < 25600 %}
                                        <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#compartir\">
                                            <svg class=\"bi bi-reply\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z\"/>
                                            </svg>
                                            Compartir
                                        </a>
                                    {% endif %}
                                    {% set size = archivo.size %}
                                    {% if size < 32768 %}
                                        <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#analizar\">
                                            <svg class=\"bi bi-file-earmark-break\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 0 0-2 2v6h1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1H2v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1zM0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z\"/>
                                            </svg>
                                            Analizar
                                        </button>
                                    {% endif %}
                                    {% set comprimido = [\"cbr\",\"jar\",\"pit\",\"rar\",\"jar\",\"tgz\",\"dl_\",\"bz2\",\"cbz\",\"war\",\"zip\",\"z01\"] %}
                                    {% set ext_archivo = archivo.nombre | slice(-3, 3) %}
                                    {% if ext_archivo in comprimido %}
                                        {# El archivo ya está comprimido #}
                                    {% else %}
                                        <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#comprimir\">
                                            <svg class=\"bi bi-file-earmark-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path d=\"M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z\"/>
                                                <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M5 8.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.11 0l-.929-.62a1 1 0 0 1-.415-1.074L5 9.438V8.5zm2 0H6v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 0 1 7 9.438V8.5z\"/>
                                                <path d=\"M6 2h1.5v1H6zM5 3h1.5v1H5zm1 1h1.5v1H6zM5 5h1.5v1H5zm1 1h1.5v1H6V6z\"/>
                                            </svg>
                                            Comprimir
                                        </button>
                                    {% endif %}
                                    <input type=\"hidden\" name=\"{{ id }}\" value=\"{{ id }}\">
                                </div>
                            {% else %}
                                <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownPanel2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"{{ archivo.nombre }}\">
                                        {{ archivo.nombre }}
                                    </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownPanel2\">
                                    <input type=\"hidden\" name=\"{{ nombre }}\" value=\"{{ nombre }}\">
                                        <button class=\"dropdown-item btn btn-md\" type=\"button\" data-toggle=\"modal\" data-target=\"#editar\">
                                            <svg class=\"bi bi-pen\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z\"/>
                                                <path d=\"M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z\"/>
                                            </svg>
                                            Editar
                                        </button>
                                        <a class=\"btn btn-md dropdown-item\" href=\"{{ asset('uploads/archivos/' ~ app.user.username ~ '/' ~ archivo.nombre) }}\" download=\"{{ archivo.nombre }}\">
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
                                        {% set size = archivo.size %}
                                        {% if size < 25600 %}
                                            <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#compartir\">
                                                <svg class=\"bi bi-reply\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path fill-rule=\"evenodd\" d=\"M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z\"/>
                                                </svg>
                                                Compartir
                                            </a>
                                        {% endif %}
                                        {% set size = archivo.size %}
                                        {% if size < 32768 %}
                                            <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#analizar\">
                                                <svg class=\"bi bi-file-earmark-break\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 0 0-2 2v6h1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1H2v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1zM0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z\"/>
                                                </svg>
                                                Analizar
                                            </button>
                                        {% endif %}
                                        {% set comprimido = [\"cbr\",\"jar\",\"pit\",\"rar\",\"jar\",\"tgz\",\"dl_\",\"bz2\",\"cbz\",\"war\",\"zip\",\"z01\"] %}
                                        {% set ext_archivo = archivo.nombre | slice(-3, 3) %}
                                        {% if ext_archivo in comprimido %}
                                            {# El archivo ya está comprimido #}
                                        {% else %}
                                            <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#comprimir\">
                                                <svg class=\"bi bi-file-earmark-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path d=\"M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z\"/>
                                                    <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z\"/>
                                                    <path fill-rule=\"evenodd\" d=\"M5 8.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.11 0l-.929-.62a1 1 0 0 1-.415-1.074L5 9.438V8.5zm2 0H6v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 0 1 7 9.438V8.5z\"/>
                                                    <path d=\"M6 2h1.5v1H6zM5 3h1.5v1H5zm1 1h1.5v1H6zM5 5h1.5v1H5zm1 1h1.5v1H6V6z\"/>
                                                </svg>
                                                Comprimir</button>
                                        {% endif %}
                                        <input type=\"hidden\" name=\"{{ id }}\" value=\"{{ id }}\">
                                    </div>
                            {% endif %}
                            </div>
                            <div class=\"row no-gutters\">
                                {% set nombre = archivo.nombre | slice(-3, 3) %}
                                <div class=\"col-2\">
                                    {% if nombre == 'pdf'%}
                                        <img src=\"../img/pdf.png\" class=\"card-img\" alt=\"pdf\">
                                    {% elseif nombre == 'css' %}
                                        <img src=\"../img/css.png\" class=\"card-img\" alt=\"css\">
                                    {% elseif nombre == 'csv' %}
                                        <img src=\"../img/csv.png\" class=\"card-img\" alt=\"csv\">
                                    {% elseif nombre == 'ocx' %}
                                        <img src=\"../img/doc.png\" class=\"card-img\" alt=\"docx\">
                                    {% elseif nombre == 'dvd' %}
                                        <img src=\"../img/dvd.png\" class=\"card-img\" alt=\"dvd\">
                                    {% elseif nombre == 'exe' %}
                                        <img src=\"../img/exe.png\" class=\"card-img\" alt=\"exe\">
                                    {% elseif nombre == 'tml' %}
                                        <img src=\"../img/html.png\" class=\"card-img\" alt=\"html\">
                                    {% elseif nombre == 'iso' %}
                                        <img src=\"../img/iso.png\" class=\"card-img\" alt=\"iso\">
                                    {% elseif nombre == 'jpg' %}
                                        <img src=\"../img/jpg.png\" class=\"card-img\" alt=\"jpg\">
                                    {% elseif nombre == '.js' %}
                                        <img src=\"../img/js.png\" class=\"card-img\" alt=\"js\">
                                    {% elseif nombre == 'mp3' %}
                                        <img src=\"../img/mp3.png\" class=\"card-img\" alt=\"mp3\">
                                    {% elseif nombre == 'mp4' %}
                                        <img src=\"../img/mp4.png\" class=\"card-img\" alt=\"mp4\">
                                    {% elseif nombre == 'png' %}
                                        <img src=\"../img/png.png\" class=\"card-img\" alt=\"png\">
                                    {% elseif nombre == 'ptx' %}
                                        <img src=\"../img/ppt.png\" class=\"card-img\" alt=\"pptx\">
                                    {% elseif nombre == 'sql' %}
                                        <img src=\"../img/sql.png\" class=\"card-img\" alt=\"sql\">
                                    {% elseif nombre == 'txt' %}
                                        <img src=\"../img/txt.png\" class=\"card-img\" alt=\"txt\">
                                    {% elseif nombre == 'lsx' %}
                                        <img src=\"../img/xls.png\" class=\"card-img\" alt=\"xlsx\">
                                    {% elseif nombre == 'xml' %}
                                        <img src=\"../img/xml.png\" class=\"card-img\" alt=\"xml\">
                                    {% elseif nombre == 'zip' %}
                                        <img src=\"../img/zip.png\" class=\"card-img\" alt=\"zip\">
                                    {% elseif nombre == 'rar' %}
                                        <img src=\"../img/rar.png\" class=\"card-img\" alt=\"rar\">
                                    {% else %}
                                        <img src=\"../img/none.png\" class=\"card-img\" alt=\"desconocido\">
                                    {% endif %}
                                </div>
                                <div class=\"col-10\">
                                    {% set size = archivo.size %}
                                    {% if size/1024 < 1 %}
                                        {% set unidad = 'KB' %}
                                        <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                                    {% elseif size/1024 >= 1 and size/1024 < 1023 %}
                                        {% set unidad = 'MB' %}
                                        {% set size = size/1024 %}
                                        <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                                    {% else %}
                                        {% set unidad = 'GB' %}
                                        {% set size = size/1048576 %}
                                        <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                                    {% endif %}
                                    <p class=\"card-text text-muted\">{{ archivo.fecha | date('d-m-Y')}} {{ archivo.fecha | date('H:i') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    {% endif %}
                {% endfor %}
            </div>
        {# Paginación #}
        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
            {# Panel vacío #}
            {% for usuario in almacenamiento %}
                {% set utilizado = usuario.almacenamiento %}
                {% if utilizado == 0 %}
                    <div class=\"centrado\">
                        <h4 class=\"text-center\">Aquí se mostrarán tus archivos</h4>
                    </div>
                {% endif %}
            {% endfor %}
            {# El archivo se ha compartido correctamente #}
            {% for flash_message in app.session.flashbag.get('compartido') %}
                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    {{ flash_message }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}

            {# El archivo se ha eliminado #}
            {% for flash_message in app.session.flashbag.get('delete') %}
                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    {{ flash_message }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}

            {# Queda poco espacio de almacenamiento #}
            {% for usuario in almacenamiento %}
                {% set utilizado = usuario.almacenamiento %}
                {% if utilizado >= 4718592 %}
                <div class=\"alert alert-secondary alert-dismissible mx-auto w-50 show fade\">
                    <svg class=\"bi bi-archive-fill\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z\" clip-rule=\"evenodd\"/>
                    </svg> &nbsp;
                    Queda poco espacio de almacenamiento
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                {% endif %}
            {% endfor %}

        {# El archivo se ha subido correctamente #}
        {% for flash_message in app.session.flashbag.get('exito') %}
            <div class=\"alert alert-success alert-dismissible w-50 mx-auto mt-2 show fade\">
                {{ flash_message }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        {% endfor %}
        </div>
</main>

    {# Editar un archivo #}
    <section class=\"modal fade\" id=\"editar\">
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
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"editar_nombre\">Editar</button type=\"button\">
                    </div>
                </form>
            </div>
        </div>
    </section>

    {# Compartir archivo #}
    <section class=\"modal fade\" id=\"compartir\">
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
                            <input type=\"email\" id=\"compartir_nombre\" class=\"form-control\" value=\"{{ app.user.email }}\" required data-toggle=\"tooltip\" title=\"Correo de destino\">
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

    {# Editando archivo #}
    <section class=\"modal bg-transparent border-0\" id=\"editando\">
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
                            <h5 class=\"text-light text-center\">Editando archivo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {# Eliminando archivo #}
    <section class=\"modal bg-transparent border-0\" id=\"eliminando\">
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
                            <h5 class=\"text-light text-center\">Eliminando</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {# Escaneando #}
    <section class=\"modal bg-transparent border-0\" id=\"escaneando\">
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

    {# Compartiendo #}
    <section class=\"modal bg-transparent border-0\" id=\"compartiendo\">
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
                            <h5 class=\"text-light text-center\">Compartiendo archivo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {# Comprimiendo #}
    <section class=\"modal bg-transparent border-0\" id=\"comprimiendo\">
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
                            <h5 class=\"text-light text-center\">Comprimiendo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {# Restaurando #}
    <section class=\"modal bg-transparent border-0\" id=\"restaurando\">
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
                            <h5 class=\"text-light text-center\">Restaurando</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {# Redirigiendo #}
    <section class=\"modal bg-transparent border-0\" id=\"redirigiendo\">
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

    {# Analizar un archivo #}
    <section class=\"modal fade\" id=\"analizar\">
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

    {# Mover a la papelera #}
    <section class=\"modal fade\" id=\"borrar\">
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

    {# Comprimir un archivo #}
    <section class=\"modal fade\" id=\"comprimir\">
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
                    </div>
                </form>
            </div>
        </div>
    </section>

    {# Papelera de reciclaje #}
        <section class=\"modal fade\" id=\"papelera\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h6 class=\"modal-title\">Archivos eliminados</h6>
                        <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row no-gutters\">
                        {% for archivo in pagination %}
                            {% set borrado = archivo.borrado %}
                            {% if borrado == 'S' %}
                                    <div class=\"col-6 mb-2\">
                                        {% set id = archivo.id %}
                                        <div class=\"card\">
                                            {% set nombre = archivo.nombre %}
                                            <div class=\"card-body\">
                                                <div class=\"dropdown no-gutters\">
                                                    {% if archivo.nombre | length > 30 %}
                                                        {% for i in archivo.nombre | slice(0, 30) %}
                                                        {% endfor %}
                                                        <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"{{ archivo.nombre }}\">
                                                            {{ archivo.nombre | slice(0, 30) ~ '...' }}
                                                        </button>
                                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                                            <input type=\"hidden\" name=\"{{ nombre }}\" value=\"{{ nombre }}\">
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
                                                            <input type=\"hidden\" name=\"{{ id }}\" value=\"{{ id }}\">
                                                        </div>
                                                    {% else %}
                                                        <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"{{ archivo.nombre }}\">
                                                            {{ archivo.nombre }}
                                                        </button>
                                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                                            <input type=\"hidden\" name=\"{{ nombre }}\" value=\"{{ nombre }}\">
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
                                                            <input type=\"hidden\" name=\"{{ id }}\" value=\"{{ id }}\">
                                                        </div>
                                                    {% endif %}
                                                </div>
                                                <div class=\"row no-gutters\">
                                                    {% set nombre = archivo.nombre | slice(-3, 3) %}
                                                    <div class=\"col-2\">
                                                        {% if nombre == 'pdf'%}
                                                            <img src=\"../img/pdf.png\" class=\"card-img\" alt=\"pdf\">
                                                        {% elseif nombre == 'css' %}
                                                            <img src=\"../img/css.png\" class=\"card-img\" alt=\"css\">
                                                        {% elseif nombre == 'csv' %}
                                                            <img src=\"../img/csv.png\" class=\"card-img\" alt=\"csv\">
                                                        {% elseif nombre == 'ocx' %}
                                                            <img src=\"../img/doc.png\" class=\"card-img\" alt=\"docx\">
                                                        {% elseif nombre == 'dvd' %}
                                                            <img src=\"../img/dvd.png\" class=\"card-img\" alt=\"dvd\">
                                                        {% elseif nombre == 'exe' %}
                                                            <img src=\"../img/exe.png\" class=\"card-img\" alt=\"exe\">
                                                        {% elseif nombre == 'tml' %}
                                                            <img src=\"../img/html.png\" class=\"card-img\" alt=\"html\">
                                                        {% elseif nombre == 'iso' %}
                                                            <img src=\"../img/iso.png\" class=\"card-img\" alt=\"iso\">
                                                        {% elseif nombre == 'jpg' %}
                                                            <img src=\"../img/jpg.png\" class=\"card-img\" alt=\"jpg\">
                                                        {% elseif nombre == '.js' %}
                                                            <img src=\"../img/js.png\" class=\"card-img\" alt=\"js\">
                                                        {% elseif nombre == 'mp3' %}
                                                            <img src=\"../img/mp3.png\" class=\"card-img\" alt=\"mp3\">
                                                        {% elseif nombre == 'mp4' %}
                                                            <img src=\"../img/mp4.png\" class=\"card-img\" alt=\"mp4\">
                                                        {% elseif nombre == 'png' %}
                                                            <img src=\"../img/png.png\" class=\"card-img\" alt=\"png\">
                                                        {% elseif nombre == 'ptx' %}
                                                            <img src=\"../img/ppt.png\" class=\"card-img\" alt=\"pptx\">
                                                        {% elseif nombre == 'sql' %}
                                                            <img src=\"../img/sql.png\" class=\"card-img\" alt=\"sql\">
                                                        {% elseif nombre == 'txt' %}
                                                            <img src=\"../img/txt.png\" class=\"card-img\" alt=\"txt\">
                                                        {% elseif nombre == 'lsx' %}
                                                            <img src=\"../img/xls.png\" class=\"card-img\" alt=\"xlsx\">
                                                        {% elseif nombre == 'xml' %}
                                                            <img src=\"../img/xml.png\" class=\"card-img\" alt=\"xml\">
                                                        {% elseif nombre == 'zip' %}
                                                            <img src=\"../img/zip.png\" class=\"card-img\" alt=\"zip\">
                                                        {% elseif nombre == 'rar' %}
                                                            <img src=\"../img/rar.png\" class=\"card-img\" alt=\"rar\">
                                                        {% else %}
                                                            <img src=\"../img/none.png\" class=\"card-img\" alt=\"desconocido\">
                                                        {% endif %}
                                                    </div>
                                                    <div class=\"col-10\">
                                                        {% set size = archivo.size %}
                                                        {% if size/1024 < 1 %}
                                                            {% set unidad = 'KB' %}
                                                            <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                                                        {% elseif size/1024 >= 1 and size/1024 < 1023 %}
                                                            {% set unidad = 'MB' %}
                                                            {% set size = size/1024 %}
                                                            <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                                                        {% else %}
                                                            {% set unidad = 'GB' %}
                                                            {% set size = size/1048576 %}
                                                            <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                                                        {% endif %}
                                                        <p class=\"card-text text-muted\">{{ archivo.fecha | date('d-m-Y')}} {{ archivo.fecha | date('H:i') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            {% endif %}
                        {% endfor %}
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        {% set contador = 0 %}
                        {% for archivo in pagination %}
                            {% set borrado = archivo.borrado %}
                            {% if borrado == 'S' %}
                                {% set contador = contador + 1 %}
                            {% endif %}
                        {% endfor %}
                        {% if contador > 0 and contador == 1%}
                            <span>{{ contador }} archivo</span>
                        {% elseif contador > 1 %}
                            <span>{{ contador }} archivos</span>
                        {% endif %}
                    </div>
                </div>
            </div>
        </section>

    {# Restaurar archivo #}
    <section class=\"modal fade\" id=\"restaurar\">
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

    {# Eliminar un archivo definitivamente #}
    <section class=\"modal fade\" id=\"borrar_definitivo\">
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
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('js/accion.js') }}\"></script>
{% endblock %}", "panel/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\panel\\index.html.twig");
    }
}
