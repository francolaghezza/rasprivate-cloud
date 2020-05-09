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
    <main class=\"container-fluid\">
        ";
        // line 11
        echo "        <header class=\"row\">
            <div class=\"container mt-5\">
                <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                    <a class=\"navbarbrand\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                    <nav class=\"navbar-nav col-sm-6\">
                        <input class=\"form-control redondo\" type=\"search\" id=\"buscar\" placeholder=\"Busca un archivo\">
                    </nav>
                    <button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"menu\">
                        ";
        // line 23
        echo "                        <form class=\"form-inline ml-auto\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-secondary bg-transparent dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <svg class=\"bi bi-people-circle\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                    ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
        echo "
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"/perfil\" class=\"dropdown-item\">Perfil</a>
                                    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
        echo "\" class=\"dropdown-item\">Cerrar sesión</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </header>
        ";
        // line 44
        echo "        <div class=\"container bg-dark text-white menu-lateral\">
            <p>Almacenamiento &nbsp;
            <svg class=\"bi bi-folder\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.828 4a3 3 0 01-2.12-.879l-.83-.828A1 1 0 006.173 2H2.5a1 1 0 00-1 .981L1.546 4h-1L.5 3a2 2 0 012-2h3.672a2 2 0 011.414.586l.828.828A2 2 0 009.828 3v1z\"/>
                <path fill-rule=\"evenodd\" d=\"M13.81 4H2.19a1 1 0 00-.996 1.09l.637 7a1 1 0 00.995.91h10.348a1 1 0 00.995-.91l.637-7A1 1 0 0013.81 4zM2.19 3A2 2 0 00.198 5.181l.637 7A2 2 0 002.826 14h10.348a2 2 0 001.991-1.819l.637-7A2 2 0 0013.81 3H2.19z\" clip-rule=\"evenodd\"/>
            </svg></p>
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 51
            echo "                ";
            $context["total"] = 5242880;
            // line 52
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 52);
            // line 53
            echo "                ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 53, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 53, $this->source); })())) * 100);
            // line 54
            echo "                ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 54, $this->source); })()) / 1024), 1)) {
                // line 55
                echo "                ";
                $context["unidad"] = "KB";
                // line 56
                echo "                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "%; background-color: #00d1a0;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>";
                // line 59
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 59, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 59, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>

                ";
            } elseif ((0 <= twig_compare((            // line 61
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 61, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 61, $this->source); })()) / 1024), 1023))) {
                // line 62
                echo "                ";
                $context["unidad"] = "MB";
                // line 63
                echo "                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 63) / 1024);
                // line 64
                echo "                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 65, $this->source); })()), "html", null, true);
                echo "%; background-color: #00d1a0;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 65, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>";
                // line 67
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 67, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 67, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                ";
            } else {
                // line 69
                echo "                    ";
                $context["unidad"] = "GB";
                // line 70
                echo "                    ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 70) / 1048576);
                // line 71
                echo "                    ";
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 71, $this->source); })()), 4.5)) {
                    // line 72
                    echo "                        <div class=\"progress\" style=\"height: 2px;width: 50%\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 73
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 73, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 73, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <p>";
                    // line 75
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 75, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 75, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                } else {
                    // line 77
                    echo "                <div class=\"progress\" style=\"height: 2px;width: 50%\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 78
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 78, $this->source); })()), "html", null, true);
                    echo "%; background-color: #00d1a0;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 78, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p>";
                    // line 80
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 80, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 80, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                }
                // line 82
                echo "                ";
            }
            // line 83
            echo "            <a ";
            if (0 === twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 83, $this->source); })()), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 83, $this->source); })()))) {
                echo "class=\"btn bg-light btn-md my-4 my-sm-0 redondo disabled boton\"";
            }
            echo " href=\"nuevo\"class=\"btn bg-light btn-md my-4 my-sm-0 redondo boton\">
                <svg class=\"bi bi-file-plus\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V8h-1v5a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1h5V1z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 1a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V1.5a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M13 3.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z\" clip-rule=\"evenodd\"/>
                </svg> Archivo
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </div>
        ";
        // line 93
        echo "        <div class=\"container bg-dark mt-5 panel table-responsive\">
            <table class=\"table table-striped table-dark\" id=\"archivos\" style=\"width: 100%\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nombre del archivo</th>
                        <th scope=\"col\">Tamaño</th>
                        <th scope=\"col\">Fecha</th>
                        <th scope=\"col\"></th>
                        <th scope=\"col\"></th>
                        <th scope=\"col\"></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 107
            echo "                    <tr>
                        ";
            // line 108
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 108);
            // line 109
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                        ";
            // line 110
            $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 110);
            // line 111
            echo "                        ";
            if (-1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 111, $this->source); })()) / 1024), 1)) {
                // line 112
                echo "                        ";
                $context["unidad"] = "KB";
                // line 113
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 113, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 113, $this->source); })()), "html", null, true);
                echo "</td>
                        ";
            } elseif ((0 <= twig_compare((            // line 114
(isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 114, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 114, $this->source); })()) / 1024), 1023))) {
                // line 115
                echo "                        ";
                $context["unidad"] = "MB";
                // line 116
                echo "                        ";
                $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 116, $this->source); })()) / 1024);
                // line 117
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 117, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 117, $this->source); })()), "html", null, true);
                echo "</td>
                        ";
            } else {
                // line 119
                echo "                            ";
                $context["unidad"] = "GB";
                // line 120
                echo "                            ";
                $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 120, $this->source); })()) / 1048576);
                // line 121
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 121, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 121, $this->source); })()), "html", null, true);
                echo "</td>
                        ";
            }
            // line 123
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 123), "d-m-Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 123), "H:i"), "html", null, true);
            echo "</td>
                        <td width=\"1em\"><button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#editar\" title=\"Editar\">
                                <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button></td>
                        <td width=\"1em\"><a class=\"btn bg-transparent btn-md\" href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("uploads/archivos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "username", [], "any", false, false, false, 130)) . "/") . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 130))), "html", null, true);
            echo "\" download=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 130), "html", null, true);
            echo "\" title=\"Descargar\">
                                <svg class=\"bi bi-download\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </a></td>
                        <td width=\"1em\"><a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#borrar\" title=\"Eliminar\">
                                <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </a></td>
                        <td width=\"1em\"><button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#comprimir\" title=\"Comprimir\">
                                <svg class=\"bi bi-file-earmark-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z\"/>
                                    <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.11 0l-.929-.62a1 1 0 01-.415-1.074L5 9.438V8.5zm2 0H6v.938a1 1 0 01-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 017 9.438V8.5z\" clip-rule=\"evenodd\"/>
                                    <path d=\"M6 2h1.5v1H6zM5 3h1.5v1H5zm1 1h1.5v1H6zM5 5h1.5v1H5zm1 1h1.5v1H6V6z\"/>
                                </svg>
                            </button></td>
                        <td><input type=\"hidden\" name=\"";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 151, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 151, $this->source); })()), "html", null, true);
            echo "\"></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                </tbody>
            </table>
            ";
        // line 157
        echo "            <div class=\"navigation\">
                ";
        // line 158
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 158, $this->source); })()));
        echo "
            </div>
            ";
        // line 161
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "session", [], "any", false, false, false, 161), "flashbag", [], "any", false, false, false, 161), "get", [0 => "exito"], "method", false, false, false, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 162
            echo "                <div class=\"alert alert-success alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 163
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
        // line 169
        echo "            ";
        // line 170
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "session", [], "any", false, false, false, 170), "flashbag", [], "any", false, false, false, 170), "get", [0 => "delete"], "method", false, false, false, 170));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 171
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 172
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
        // line 178
        echo "            ";
        // line 179
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "session", [], "any", false, false, false, 179), "flashbag", [], "any", false, false, false, 179), "get", [0 => "error_zip"], "method", false, false, false, 179));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 180
            echo "                <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
                    <svg class=\"bi bi-file-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M6.5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.109 0l-.93-.62a1 1 0 01-.415-1.074l.4-1.599V8.5zm2 0h-1v.938a1 1 0 01-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 01-.03-.243V8.5z\" clip-rule=\"evenodd\"/>
                        <path d=\"M7.5 2H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5V6z\"/>
                    </svg>
                    ";
            // line 186
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
        // line 192
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 192, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 193
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 193);
            // line 194
            echo "                ";
            if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 194, $this->source); })()), 4718592)) {
                // line 195
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
            // line 205
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "        </div>
    </main>
    ";
        // line 209
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
        // line 231
        echo "    <section class=\"modal fade\" id=\"borrar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Eliminar archivo</span>
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
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    ";
        // line 253
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
        // line 275
        echo "    <div class=\"footer-panel text-center bg-dark text-white justify-content-center\">
        <p>Rasprivate <script>document.write(new Date().getFullYear());</script></p>
    </div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 280
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 281
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 284
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
        return array (  637 => 284,  633 => 283,  629 => 282,  624 => 281,  614 => 280,  600 => 275,  577 => 253,  554 => 231,  531 => 209,  527 => 206,  521 => 205,  509 => 195,  506 => 194,  503 => 193,  498 => 192,  486 => 186,  478 => 180,  473 => 179,  471 => 178,  459 => 172,  456 => 171,  451 => 170,  449 => 169,  437 => 163,  434 => 162,  429 => 161,  424 => 158,  421 => 157,  417 => 154,  406 => 151,  380 => 130,  367 => 123,  359 => 121,  356 => 120,  353 => 119,  345 => 117,  342 => 116,  339 => 115,  337 => 114,  330 => 113,  327 => 112,  324 => 111,  322 => 110,  317 => 109,  315 => 108,  312 => 107,  308 => 106,  293 => 93,  290 => 91,  273 => 83,  270 => 82,  263 => 80,  256 => 78,  253 => 77,  246 => 75,  239 => 73,  236 => 72,  233 => 71,  230 => 70,  227 => 69,  220 => 67,  213 => 65,  210 => 64,  207 => 63,  204 => 62,  202 => 61,  195 => 59,  188 => 57,  185 => 56,  182 => 55,  179 => 54,  176 => 53,  173 => 52,  170 => 51,  166 => 50,  158 => 44,  147 => 35,  140 => 31,  130 => 23,  117 => 11,  113 => 8,  103 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
    <main class=\"container-fluid\">
        {# Menú de navegación #}
        <header class=\"row\">
            <div class=\"container mt-5\">
                <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                    <a class=\"navbarbrand\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                    <nav class=\"navbar-nav col-sm-6\">
                        <input class=\"form-control redondo\" type=\"search\" id=\"buscar\" placeholder=\"Busca un archivo\">
                    </nav>
                    <button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"menu\">
                        {# Usuario #}
                        <form class=\"form-inline ml-auto\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-secondary bg-transparent dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <svg class=\"bi bi-people-circle\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                    {{app.user.username}}
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"/perfil\" class=\"dropdown-item\">Perfil</a>
                                    <a href=\"{{ logout_path() }}\" class=\"dropdown-item\">Cerrar sesión</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </header>
        {# Almacenamiento #}
        <div class=\"container bg-dark text-white menu-lateral\">
            <p>Almacenamiento &nbsp;
            <svg class=\"bi bi-folder\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.828 4a3 3 0 01-2.12-.879l-.83-.828A1 1 0 006.173 2H2.5a1 1 0 00-1 .981L1.546 4h-1L.5 3a2 2 0 012-2h3.672a2 2 0 011.414.586l.828.828A2 2 0 009.828 3v1z\"/>
                <path fill-rule=\"evenodd\" d=\"M13.81 4H2.19a1 1 0 00-.996 1.09l.637 7a1 1 0 00.995.91h10.348a1 1 0 00.995-.91l.637-7A1 1 0 0013.81 4zM2.19 3A2 2 0 00.198 5.181l.637 7A2 2 0 002.826 14h10.348a2 2 0 001.991-1.819l.637-7A2 2 0 0013.81 3H2.19z\" clip-rule=\"evenodd\"/>
            </svg></p>
            {% for usuario in almacenamiento %}
                {% set total =  5242880 %}
                {% set utilizado = usuario.almacenamiento %}
                {% set porcentaje = (utilizado/total)*100 %}
                {% if utilizado/1024 < 1 %}
                {% set unidad = 'KB' %}
                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}%; background-color: #00d1a0;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>

                {% elseif utilizado/1024 >= 1 and utilizado/1024 < 1023 %}
                {% set unidad = 'MB' %}
                {% set utilizado = usuario.almacenamiento/1024 %}
                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}%; background-color: #00d1a0;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                {% else %}
                    {% set unidad = 'GB' %}
                    {% set utilizado = usuario.almacenamiento/1048576 %}
                    {% if utilizado >= 4.5 %}
                        <div class=\"progress\" style=\"height: 2px;width: 50%\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ; background-color: red;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                    {% else %}
                <div class=\"progress\" style=\"height: 2px;width: 50%\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}%; background-color: #00d1a0;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                    {% endif %}
                {% endif %}
            <a {% if utilizado == total  %}class=\"btn bg-light btn-md my-4 my-sm-0 redondo disabled boton\"{% endif %} href=\"nuevo\"class=\"btn bg-light btn-md my-4 my-sm-0 redondo boton\">
                <svg class=\"bi bi-file-plus\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V8h-1v5a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1h5V1z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 1a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V1.5a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M13 3.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z\" clip-rule=\"evenodd\"/>
                </svg> Archivo
            </a>
            {% endfor %}
        </div>
        {# Panel de archivos #}
        <div class=\"container bg-dark mt-5 panel table-responsive\">
            <table class=\"table table-striped table-dark\" id=\"archivos\" style=\"width: 100%\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nombre del archivo</th>
                        <th scope=\"col\">Tamaño</th>
                        <th scope=\"col\">Fecha</th>
                        <th scope=\"col\"></th>
                        <th scope=\"col\"></th>
                        <th scope=\"col\"></th>
                    </tr>
                </thead>
                <tbody>
                {% for archivo in pagination %}
                    <tr>
                        {% set id = archivo.id %}
                        <td>{{ archivo.nombre }}</td>
                        {% set size = archivo.size %}
                        {% if size/1024 < 1 %}
                        {% set unidad = 'KB' %}
                        <td>{{ size |round(2, 'floor') }} {{ unidad }}</td>
                        {% elseif size/1024 >= 1 and size/1024 < 1023 %}
                        {% set unidad = 'MB' %}
                        {% set size = size/1024 %}
                        <td>{{ size |round(2, 'floor') }} {{ unidad }}</td>
                        {% else %}
                            {% set unidad = 'GB' %}
                            {% set size = size/1048576 %}
                            <td>{{ size |round(2, 'floor') }} {{ unidad }}</td>
                        {% endif %}
                        <td>{{ archivo.fecha | date('d-m-Y')}} {{ archivo.fecha | date('H:i') }}</td>
                        <td width=\"1em\"><button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#editar\" title=\"Editar\">
                                <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button></td>
                        <td width=\"1em\"><a class=\"btn bg-transparent btn-md\" href=\"{{ asset('uploads/archivos/' ~ app.user.username ~ '/' ~ archivo.nombre) }}\" download=\"{{ archivo.nombre }}\" title=\"Descargar\">
                                <svg class=\"bi bi-download\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </a></td>
                        <td width=\"1em\"><a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#borrar\" title=\"Eliminar\">
                                <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </a></td>
                        <td width=\"1em\"><button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#comprimir\" title=\"Comprimir\">
                                <svg class=\"bi bi-file-earmark-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z\"/>
                                    <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.11 0l-.929-.62a1 1 0 01-.415-1.074L5 9.438V8.5zm2 0H6v.938a1 1 0 01-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 017 9.438V8.5z\" clip-rule=\"evenodd\"/>
                                    <path d=\"M6 2h1.5v1H6zM5 3h1.5v1H5zm1 1h1.5v1H6zM5 5h1.5v1H5zm1 1h1.5v1H6V6z\"/>
                                </svg>
                            </button></td>
                        <td><input type=\"hidden\" name=\"{{ id }}\" value=\"{{ id }}\"></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            {# Paginación #}
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
            {# El archivo se ha subido correctamente #}
            {% for flash_message in app.session.flashbag.get('exito') %}
                <div class=\"alert alert-success alert-dismissible w-50 mx-auto mt-2 show fade\">
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
            {# Este archivo ya está comprimido #}
            {% for flash_message in app.session.flashbag.get('error_zip') %}
                <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
                    <svg class=\"bi bi-file-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M6.5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.109 0l-.93-.62a1 1 0 01-.415-1.074l.4-1.599V8.5zm2 0h-1v.938a1 1 0 01-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 01-.03-.243V8.5z\" clip-rule=\"evenodd\"/>
                        <path d=\"M7.5 2H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5V6z\"/>
                    </svg>
                    {{ flash_message }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}
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
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"editar_nombre\">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {# Eliminar un archivo #}
    <section class=\"modal fade\" id=\"borrar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Eliminar archivo</span>
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
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancelar</button>
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
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"cancelar\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {# Pie de la página #}
    <div class=\"footer-panel text-center bg-dark text-white justify-content-center\">
        <p>Rasprivate <script>document.write(new Date().getFullYear());</script></p>
    </div>
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
