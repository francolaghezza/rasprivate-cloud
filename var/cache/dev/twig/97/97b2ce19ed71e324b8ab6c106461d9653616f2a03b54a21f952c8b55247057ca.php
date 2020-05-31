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

/* archivos/index.html.twig */
class __TwigTemplate_43afda857c31dcc0c6b85cd3697af6ceb7784f310dd82a1a03455c1265c0af8a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "archivos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "archivos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "archivos/index.html.twig", 1);
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

        echo "Sube un archivo";
        
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
        echo "<body class=\"bg-dark\" style=\"overflow: hidden;\">
    ";
        // line 10
        echo "    <header class=\"row justify-content-center\">
        <div class=\"container mt-5 \">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\" >
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <div class=\"dropdown ml-auto usuario\">
                    <button class=\"btn bg-transparent dropdown-toggle text-white\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <svg class=\"bi bi-people-circle\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                        </svg>
                        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
        echo "
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item\" href=\"/perfil\">Perfil</a>
                        <a class=\"dropdown-item\" href=\"/panel\">Mis archivos</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Cerrar sesión</a>
                        <a class=\"dropdown-item\" href=\"#\">
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 29
            echo "                                ";
            $context["total"] = 5242880;
            // line 30
            echo "                                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 30);
            // line 31
            echo "                                ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 31, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 31, $this->source); })())) * 100);
            // line 32
            echo "                                ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 32, $this->source); })()) / 1024), 1)) {
                // line 33
                echo "                                    ";
                $context["unidad"] = "KB";
                // line 34
                echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 35
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 35, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 35, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p>";
                // line 37
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 37, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 37, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                                ";
            } elseif ((0 <= twig_compare((            // line 38
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 38, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 38, $this->source); })()) / 1024), 1023))) {
                // line 39
                echo "                                    ";
                $context["unidad"] = "MB";
                // line 40
                echo "                                    ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 40) / 1024);
                // line 41
                echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p style=\"margin-top: 10px;\">";
                // line 44
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 44, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 44, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                                ";
            } else {
                // line 46
                echo "                                    ";
                $context["unidad"] = "GB";
                // line 47
                echo "                                    ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 47) / 1048576);
                // line 48
                echo "                                    ";
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 48, $this->source); })()), 4.5)) {
                    // line 49
                    echo "                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 50
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 50, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 50, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <p style=\"margin-top: 10px;\">";
                    // line 52
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 52, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 52, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                                    ";
                } else {
                    // line 54
                    echo "                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 55
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 55, $this->source); })()), "html", null, true);
                    echo "% ;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 55, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <p style=\"margin-top: 10px;\">";
                    // line 57
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 57, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 57, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                                    ";
                }
                // line 59
                echo "                                ";
            }
            // line 60
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    ";
        // line 68
        echo "    <div class=\"text-white menu-nuevo\">
        <h6>
            <svg class=\"bi bi-list-task mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M2 2.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5V3a.5.5 0 00-.5-.5H2zM3 3H2v1h1V3z\" clip-rule=\"evenodd\"/>
                <path d=\"M5 3.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zM5.5 7a.5.5 0 000 1h9a.5.5 0 000-1h-9zm0 4a.5.5 0 000 1h9a.5.5 0 000-1h-9z\"/>
                <path fill-rule=\"evenodd\" d=\"M1.5 7a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5H2zm1 .5H2v1h1v-1z\" clip-rule=\"evenodd\"/>
            </svg>
            Almacenamiento
        </h6>
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 78
            echo "            ";
            $context["total"] = 5242880;
            // line 79
            echo "            ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 79);
            // line 80
            echo "            ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 80, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 80, $this->source); })())) * 100);
            // line 81
            echo "            ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 81, $this->source); })()) / 1024), 1)) {
                // line 82
                echo "                ";
                $context["unidad"] = "KB";
                // line 83
                echo "                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 84, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 84, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 86
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 86, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 86, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
            ";
            } elseif ((0 <= twig_compare((            // line 87
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 87, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 87, $this->source); })()) / 1024), 1023))) {
                // line 88
                echo "                ";
                $context["unidad"] = "MB";
                // line 89
                echo "                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 89) / 1024);
                // line 90
                echo "                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 91
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 91, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 91, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 93
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 93, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 93, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
            ";
            } else {
                // line 95
                echo "                ";
                $context["unidad"] = "GB";
                // line 96
                echo "                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 96) / 1048576);
                // line 97
                echo "                ";
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 97, $this->source); })()), 4.5)) {
                    // line 98
                    echo "                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 99
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 99, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 99, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 101
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 101, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 101, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                ";
                } else {
                    // line 103
                    echo "                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 104
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 104, $this->source); })()), "html", null, true);
                    echo "% ;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 104, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 106
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 106, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 106, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                ";
                }
                // line 108
                echo "            ";
            }
            // line 109
            echo "            <a href=\"panel\" class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                <svg class=\"bi bi-file-earmark-text mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z\"/>
                    <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z\"/>
                    <path fill-rule=\"evenodd\" d=\"M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z\"/>
                </svg> Mis archivos
            </a>
            <a href=\"perfil\"class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                <svg class=\"bi bi-person-circle mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z\"/>
                    <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
                    <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z\"/>
                </svg> ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "username", [], "any", false, false, false, 121), "html", null, true);
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
        // line 131
        echo "    </div>
    ";
        // line 133
        echo "    <section class=\"modal bg-transparent border-0\" id=\"subiendo\">
        <div class=\"modal-dialog modal-dialog-centered bg-transparent border-0\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-header bg-transparent border-0\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-1 mr-2\">
                            <div class=\"spinner-border text-light\" role=\"status\">
                                <span class=\"sr-only text-light\"></span>
                            </div>
                        </div>
                        <div class=\"col-9\">
                            <h5 class=\"text-light text-center\">Subiendo archivo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class=\"container mt-5 text-white\">
      <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h3>Sube un archivo</h3>

                ";
        // line 156
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 156, $this->source); })()), 'form_start', ["attr" => ["id" => "formulario"]]);
        echo "
                ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 157, $this->source); })()), "nombre", [], "any", false, false, false, 157), 'row');
        echo "
                ";
        // line 158
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 158, $this->source); })()), 'form_end');
        echo "

                ";
        // line 161
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "session", [], "any", false, false, false, 161), "flashbag", [], "any", false, false, false, 161), "get", [0 => "error_almacenamiento"], "method", false, false, false, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 162
            echo "                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5>
                            <svg class=\"bi bi-exclamation-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path d=\"M7.002 11a1 1 0 112 0 1 1 0 01-2 0zM7.1 4.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 4.995z\"/>
                            </svg>
                        </h5>
                        <p>";
            // line 169
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
                ";
        // line 177
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "session", [], "any", false, false, false, 177), "flashbag", [], "any", false, false, false, 177), "get", [0 => "error_size"], "method", false, false, false, 177));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 178
            echo "                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <svg class=\"bi bi-dash-circle\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                            <path fill-rule=\"evenodd\" d=\"M3.5 8a.5.5 0 01.5-.5h8a.5.5 0 010 1H4a.5.5 0 01-.5-.5z\" clip-rule=\"evenodd\"/>
                        </svg>
                        ";
            // line 183
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
        // line 189
        echo "
                ";
        // line 191
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "session", [], "any", false, false, false, 191), "flashbag", [], "any", false, false, false, 191), "get", [0 => "error_0"], "method", false, false, false, 191));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 192
            echo "                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                            </svg></h5>
                        <p> ";
            // line 198
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
                ";
        // line 206
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 206, $this->source); })()), "session", [], "any", false, false, false, 206), "flashbag", [], "any", false, false, false, 206), "get", [0 => "error_1"], "method", false, false, false, 206));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 207
            echo "                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                            </svg></h5>
                        <p> ";
            // line 213
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "                ";
        // line 220
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "session", [], "any", false, false, false, 220), "flashbag", [], "any", false, false, false, 220), "get", [0 => "error_2"], "method", false, false, false, 220));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 221
            echo "                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                            </svg></h5>
                        <p> ";
            // line 227
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                ";
        // line 234
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "session", [], "any", false, false, false, 234), "flashbag", [], "any", false, false, false, 234), "get", [0 => "error_3"], "method", false, false, false, 234));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 235
            echo "                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                            </svg></h5>
                        <p> ";
            // line 241
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "            </div>
      </div>
</div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 252
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 253
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
    <script>

        \$(\".custom-file-input\").on(\"change\", function() {
            var fileName = \$(this).val().split(\"\\\\\").pop();
            \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
        });

        //Animación subiendo archivo
        \$(\"#formulario\").submit(function (e) {
            var input_archivo = \$(\".custom-file-input\").val();
            if(input_archivo == \"\"){
                \$('#subiendo').modal('hide');
            }
            else{
                \$('#subiendo').modal('show');
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "archivos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 256,  643 => 255,  639 => 254,  634 => 253,  624 => 252,  610 => 247,  598 => 241,  590 => 235,  585 => 234,  583 => 233,  571 => 227,  563 => 221,  558 => 220,  556 => 219,  544 => 213,  536 => 207,  531 => 206,  528 => 204,  516 => 198,  508 => 192,  503 => 191,  500 => 189,  488 => 183,  481 => 178,  476 => 177,  473 => 175,  461 => 169,  452 => 162,  447 => 161,  442 => 158,  438 => 157,  434 => 156,  409 => 133,  406 => 131,  390 => 121,  376 => 109,  373 => 108,  366 => 106,  359 => 104,  356 => 103,  349 => 101,  342 => 99,  339 => 98,  336 => 97,  333 => 96,  330 => 95,  323 => 93,  316 => 91,  313 => 90,  310 => 89,  307 => 88,  305 => 87,  299 => 86,  292 => 84,  289 => 83,  286 => 82,  283 => 81,  280 => 80,  277 => 79,  274 => 78,  270 => 77,  259 => 68,  251 => 61,  245 => 60,  242 => 59,  235 => 57,  228 => 55,  225 => 54,  218 => 52,  211 => 50,  208 => 49,  205 => 48,  202 => 47,  199 => 46,  192 => 44,  185 => 42,  182 => 41,  179 => 40,  176 => 39,  174 => 38,  168 => 37,  161 => 35,  158 => 34,  155 => 33,  152 => 32,  149 => 31,  146 => 30,  143 => 29,  139 => 28,  129 => 21,  116 => 10,  113 => 8,  103 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sube un archivo{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block body %}
<body class=\"bg-dark\" style=\"overflow: hidden;\">
    {# Menú de navegación #}
    <header class=\"row justify-content-center\">
        <div class=\"container mt-5 \">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\" >
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <div class=\"dropdown ml-auto usuario\">
                    <button class=\"btn bg-transparent dropdown-toggle text-white\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <svg class=\"bi bi-people-circle\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                        </svg>
                        {{ app.user.username }}
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item\" href=\"/perfil\">Perfil</a>
                        <a class=\"dropdown-item\" href=\"/panel\">Mis archivos</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Cerrar sesión</a>
                        <a class=\"dropdown-item\" href=\"#\">
                            {% for usuario in almacenamiento %}
                                {% set total =  5242880 %}
                                {% set utilizado = usuario.almacenamiento %}
                                {% set porcentaje = (utilizado/total)*100 %}
                                {% if utilizado/1024 < 1 %}
                                    {% set unidad = 'KB' %}
                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                                {% elseif utilizado/1024 >= 1 and utilizado/1024 < 1023 %}
                                    {% set unidad = 'MB' %}
                                    {% set utilizado = usuario.almacenamiento/1024 %}
                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p style=\"margin-top: 10px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                                {% else %}
                                    {% set unidad = 'GB' %}
                                    {% set utilizado = usuario.almacenamiento/1048576 %}
                                    {% if utilizado >= 4.5 %}
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ; background-color: red;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <p style=\"margin-top: 10px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                                    {% else %}
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <p style=\"margin-top: 10px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    {# Menú lateral #}
    <div class=\"text-white menu-nuevo\">
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
            <a href=\"panel\" class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                <svg class=\"bi bi-file-earmark-text mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z\"/>
                    <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z\"/>
                    <path fill-rule=\"evenodd\" d=\"M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z\"/>
                </svg> Mis archivos
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
    {# Subiendo archivo #}
    <section class=\"modal bg-transparent border-0\" id=\"subiendo\">
        <div class=\"modal-dialog modal-dialog-centered bg-transparent border-0\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-header bg-transparent border-0\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-1 mr-2\">
                            <div class=\"spinner-border text-light\" role=\"status\">
                                <span class=\"sr-only text-light\"></span>
                            </div>
                        </div>
                        <div class=\"col-9\">
                            <h5 class=\"text-light text-center\">Subiendo archivo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class=\"container mt-5 text-white\">
      <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h3>Sube un archivo</h3>

                {{ form_start(formulario, {'attr': {'id': 'formulario'}}) }}
                {{ form_row(formulario.nombre) }}
                {{ form_end(formulario) }}

                {# No queda espacio de almacenamiento #}
                {% for flash_message in app.session.flashbag.get('error_almacenamiento') %}
                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5>
                            <svg class=\"bi bi-exclamation-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path d=\"M7.002 11a1 1 0 112 0 1 1 0 01-2 0zM7.1 4.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 4.995z\"/>
                            </svg>
                        </h5>
                        <p>{{ flash_message }}</p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}

                {# El archivo es demasiado grande #}
                {% for flash_message in app.session.flashbag.get('error_size') %}
                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <svg class=\"bi bi-dash-circle\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                            <path fill-rule=\"evenodd\" d=\"M3.5 8a.5.5 0 01.5-.5h8a.5.5 0 010 1H4a.5.5 0 01-.5-.5z\" clip-rule=\"evenodd\"/>
                        </svg>
                        {{ flash_message }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}

                {# Error 0 #}
                {% for flash_message in app.session.flashbag.get('error_0') %}
                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                            </svg></h5>
                        <p> {{ flash_message }} </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}

                {# Error 1 #}
                {% for flash_message in app.session.flashbag.get('error_1') %}
                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                            </svg></h5>
                        <p> {{ flash_message }} </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}
                {# Error 2 #}
                {% for flash_message in app.session.flashbag.get('error_2') %}
                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                            </svg></h5>
                        <p> {{ flash_message }} </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}
                {# Error 3 #}
                {% for flash_message in app.session.flashbag.get('error_3') %}
                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                            </svg></h5>
                        <p> {{ flash_message }} </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endfor %}
            </div>
      </div>
</div>
</body>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('js/accion.js') }}\"></script>
    <script>

        \$(\".custom-file-input\").on(\"change\", function() {
            var fileName = \$(this).val().split(\"\\\\\").pop();
            \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
        });

        //Animación subiendo archivo
        \$(\"#formulario\").submit(function (e) {
            var input_archivo = \$(\".custom-file-input\").val();
            if(input_archivo == \"\"){
                \$('#subiendo').modal('hide');
            }
            else{
                \$('#subiendo').modal('show');
            }
        });
    </script>
{% endblock %}", "archivos/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\archivos\\index.html.twig");
    }
}
