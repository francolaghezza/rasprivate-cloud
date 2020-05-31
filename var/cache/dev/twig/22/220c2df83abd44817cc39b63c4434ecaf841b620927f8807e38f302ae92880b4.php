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
        echo "<body class=\"bg-dark\" style=\"overflow-x: hidden;\">
    ";
        // line 10
        echo "    <header class=\"row justify-content-center\">
        <div class=\"container mt-5 \">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\" >
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <nav class=\"navbar-nav active-gray active-gray-1 searchbar\">
                    <input class=\"form-control bg-dark text-white\" type=\"text\" placeholder=\"Busca un archivo\" id=\"buscar\" aria-label=\"Search\">
                </nav>
                <div class=\"dropdown ml-auto usuario\">
                    <button class=\"btn bg-transparent dropdown-toggle text-white\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <svg class=\"bi bi-people-circle\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                        </svg>
                        ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
        echo "
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item\" href=\"/perfil\">Perfil</a>
                        <a class=\"dropdown-item\" href=\"/nuevo\">Nuevo archivo</a>
                        <a class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#papelera\" title=\"Papelera\" href=\"#\">Papelera</a>
                        <a class=\"dropdown-item\" href=\"#\">
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 32
            echo "                            ";
            $context["total"] = 5242880;
            // line 33
            echo "                            ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 33);
            // line 34
            echo "                            ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 34, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 34, $this->source); })())) * 100);
            // line 35
            echo "                            ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 35, $this->source); })()) / 1024), 1)) {
                // line 36
                echo "                                ";
                $context["unidad"] = "KB";
                // line 37
                echo "                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <p>";
                // line 40
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 40, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 40, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                            ";
            } elseif ((0 <= twig_compare((            // line 41
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 41, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 41, $this->source); })()) / 1024), 1023))) {
                // line 42
                echo "                                ";
                $context["unidad"] = "MB";
                // line 43
                echo "                                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 43) / 1024);
                // line 44
                echo "                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                <p style=\"margin-top: 10px;\">";
                // line 47
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 47, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 47, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                            ";
            } else {
                // line 49
                echo "                                ";
                $context["unidad"] = "GB";
                // line 50
                echo "                                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 50) / 1048576);
                // line 51
                echo "                                ";
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 51, $this->source); })()), 4.5)) {
                    // line 52
                    echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 53
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 53, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 53, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p style=\"margin-top: 10px;\">";
                    // line 55
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 55, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 55, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                                ";
                } else {
                    // line 57
                    echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 58
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 58, $this->source); })()), "html", null, true);
                    echo "% ;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 58, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p style=\"margin-top: 10px;\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 60, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 60, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                                ";
                }
                // line 62
                echo "                            ";
            }
            // line 63
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
<main class=\"main-panel\">
    ";
        // line 72
        echo "    <div class=\"text-white menu-lateral\">
            <h6>
                <svg class=\"bi bi-list-task mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M2 2.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5V3a.5.5 0 00-.5-.5H2zM3 3H2v1h1V3z\" clip-rule=\"evenodd\"/>
                    <path d=\"M5 3.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zM5.5 7a.5.5 0 000 1h9a.5.5 0 000-1h-9zm0 4a.5.5 0 000 1h9a.5.5 0 000-1h-9z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1.5 7a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5H2zm1 .5H2v1h1v-1z\" clip-rule=\"evenodd\"/>
                </svg>
                Almacenamiento
           </h6>
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 82
            echo "                ";
            $context["total"] = 5242880;
            // line 83
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 83);
            // line 84
            echo "                ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 84, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 84, $this->source); })())) * 100);
            // line 85
            echo "                ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 85, $this->source); })()) / 1024), 1)) {
                // line 86
                echo "                ";
                $context["unidad"] = "KB";
                // line 87
                echo "                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 88, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 88, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 90
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 90, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 90, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                ";
            } elseif ((0 <= twig_compare((            // line 91
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 91, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 91, $this->source); })()) / 1024), 1023))) {
                // line 92
                echo "                ";
                $context["unidad"] = "MB";
                // line 93
                echo "                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 93) / 1024);
                // line 94
                echo "                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 95, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 95, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 97
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 97, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 97, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                ";
            } else {
                // line 99
                echo "                    ";
                $context["unidad"] = "GB";
                // line 100
                echo "                    ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 100) / 1048576);
                // line 101
                echo "                    ";
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 101, $this->source); })()), 4.5)) {
                    // line 102
                    echo "                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 103
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 103, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 103, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 105
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 105, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 105, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                } else {
                    // line 107
                    echo "                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 108
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 108, $this->source); })()), "html", null, true);
                    echo "% ;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 108, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 110
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 110, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 110, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                }
                // line 112
                echo "                ";
            }
            // line 113
            echo "
                <h6 data-toggle=\"modal\" data-target=\"#papelera\" title=\"Papelera\" id=\"papelera_archivos\" style=\"margin-bottom: 30px;\">
                    <svg class=\"bi bi-trash mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                    </svg>
                    Papelera
                </h6>
                <a ";
            // line 121
            if (0 === twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 121, $this->source); })()), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 121, $this->source); })()))) {
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
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "username", [], "any", false, false, false, 133), "html", null, true);
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
        // line 143
        echo "        </div>

    ";
        // line 146
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
        // line 182
        echo "    <div class=\"container mt-4 panel\">
            <div class=\"row no-gutters\">
                ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 185
            echo "                    ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 185);
            // line 186
            echo "                    ";
            if (0 === twig_compare((isset($context["borrado"]) || array_key_exists("borrado", $context) ? $context["borrado"] : (function () { throw new RuntimeError('Variable "borrado" does not exist.', 186, $this->source); })()), "N")) {
                // line 187
                echo "                <div class=\"col-md-4 mt-4 mb-2\">
                    ";
                // line 188
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 188);
                // line 189
                echo "                    <div class=\"card\">
                        ";
                // line 190
                $context["nombre"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 190);
                // line 191
                echo "                        <div class=\"card-body\">
                            <div class=\"dropdown no-gutters\">
                            ";
                // line 193
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 193)), 30)) {
                    // line 194
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 194), 0, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 195
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 196
                    echo "                                <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownPanel\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 196), "html", null, true);
                    echo "\">
                                    ";
                    // line 197
                    echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 197), 0, 30) . "..."), "html", null, true);
                    echo "
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownPanel\">
                                    <input type=\"hidden\" name=\"";
                    // line 200
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 200, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 200, $this->source); })()), "html", null, true);
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
                    // line 209
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("uploads/archivos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "user", [], "any", false, false, false, 209), "username", [], "any", false, false, false, 209)) . "/") . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 209))), "html", null, true);
                    echo "\" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 209), "html", null, true);
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
                    // line 224
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 224);
                    // line 225
                    echo "                                    ";
                    if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 225, $this->source); })()), 25600)) {
                        // line 226
                        echo "                                        <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#compartir\">
                                            <svg class=\"bi bi-reply\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z\"/>
                                            </svg>
                                            Compartir
                                        </a>
                                    ";
                    }
                    // line 233
                    echo "                                    ";
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 233);
                    // line 234
                    echo "                                    ";
                    if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 234, $this->source); })()), 32768)) {
                        // line 235
                        echo "                                        <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#analizar\">
                                            <svg class=\"bi bi-file-earmark-break\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 0 0-2 2v6h1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1H2v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1zM0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z\"/>
                                            </svg>
                                            Analizar
                                        </button>
                                    ";
                    }
                    // line 242
                    echo "                                    ";
                    $context["comprimido"] = [0 => "cbr", 1 => "jar", 2 => "pit", 3 => "rar", 4 => "jar", 5 => "tgz", 6 => "dl_", 7 => "bz2", 8 => "cbz", 9 => "war", 10 => "zip", 11 => "z01"];
                    // line 243
                    echo "                                    ";
                    $context["ext_archivo"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 243),  -3, 3);
                    // line 244
                    echo "                                    ";
                    if (twig_in_filter((isset($context["ext_archivo"]) || array_key_exists("ext_archivo", $context) ? $context["ext_archivo"] : (function () { throw new RuntimeError('Variable "ext_archivo" does not exist.', 244, $this->source); })()), (isset($context["comprimido"]) || array_key_exists("comprimido", $context) ? $context["comprimido"] : (function () { throw new RuntimeError('Variable "comprimido" does not exist.', 244, $this->source); })()))) {
                        // line 245
                        echo "                                        ";
                        // line 246
                        echo "                                    ";
                    } else {
                        // line 247
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
                    // line 257
                    echo "                                    <input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 257, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 257, $this->source); })()), "html", null, true);
                    echo "\">
                                </div>
                            ";
                } else {
                    // line 260
                    echo "                                <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownPanel2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 260), "html", null, true);
                    echo "\">
                                        ";
                    // line 261
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 261), "html", null, true);
                    echo "
                                    </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownPanel2\">
                                    <input type=\"hidden\" name=\"";
                    // line 264
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 264, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 264, $this->source); })()), "html", null, true);
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
                    // line 273
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("uploads/archivos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 273, $this->source); })()), "user", [], "any", false, false, false, 273), "username", [], "any", false, false, false, 273)) . "/") . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 273))), "html", null, true);
                    echo "\" download=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 273), "html", null, true);
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
                    // line 288
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 288);
                    // line 289
                    echo "                                        ";
                    if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 289, $this->source); })()), 25600)) {
                        // line 290
                        echo "                                            <a class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#compartir\">
                                                <svg class=\"bi bi-reply\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path fill-rule=\"evenodd\" d=\"M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z\"/>
                                                </svg>
                                                Compartir
                                            </a>
                                        ";
                    }
                    // line 297
                    echo "                                        ";
                    $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 297);
                    // line 298
                    echo "                                        ";
                    if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 298, $this->source); })()), 32768)) {
                        // line 299
                        echo "                                            <button class=\"btn btn-md dropdown-item\" data-toggle=\"modal\" data-target=\"#analizar\">
                                                <svg class=\"bi bi-file-earmark-break\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 0 0-2 2v6h1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1H2v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1zM0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z\"/>
                                                </svg>
                                                Analizar
                                            </button>
                                        ";
                    }
                    // line 306
                    echo "                                        ";
                    $context["comprimido"] = [0 => "cbr", 1 => "jar", 2 => "pit", 3 => "rar", 4 => "jar", 5 => "tgz", 6 => "dl_", 7 => "bz2", 8 => "cbz", 9 => "war", 10 => "zip", 11 => "z01"];
                    // line 307
                    echo "                                        ";
                    $context["ext_archivo"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 307),  -3, 3);
                    // line 308
                    echo "                                        ";
                    if (twig_in_filter((isset($context["ext_archivo"]) || array_key_exists("ext_archivo", $context) ? $context["ext_archivo"] : (function () { throw new RuntimeError('Variable "ext_archivo" does not exist.', 308, $this->source); })()), (isset($context["comprimido"]) || array_key_exists("comprimido", $context) ? $context["comprimido"] : (function () { throw new RuntimeError('Variable "comprimido" does not exist.', 308, $this->source); })()))) {
                        // line 309
                        echo "                                            ";
                        // line 310
                        echo "                                        ";
                    } else {
                        // line 311
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
                    // line 320
                    echo "                                        <input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 320, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 320, $this->source); })()), "html", null, true);
                    echo "\">
                                    </div>
                            ";
                }
                // line 323
                echo "                            </div>
                            <div class=\"row no-gutters\">
                                ";
                // line 325
                $context["nombre"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 325),  -3, 3);
                // line 326
                echo "                                <div class=\"col-2\">
                                    ";
                // line 327
                if (0 === twig_compare((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 327, $this->source); })()), "pdf")) {
                    // line 328
                    echo "                                        <img src=\"../img/pdf.png\" class=\"card-img\" alt=\"pdf\">
                                    ";
                } elseif (0 === twig_compare(                // line 329
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 329, $this->source); })()), "css")) {
                    // line 330
                    echo "                                        <img src=\"../img/css.png\" class=\"card-img\" alt=\"css\">
                                    ";
                } elseif (0 === twig_compare(                // line 331
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 331, $this->source); })()), "csv")) {
                    // line 332
                    echo "                                        <img src=\"../img/csv.png\" class=\"card-img\" alt=\"csv\">
                                    ";
                } elseif (0 === twig_compare(                // line 333
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 333, $this->source); })()), "ocx")) {
                    // line 334
                    echo "                                        <img src=\"../img/doc.png\" class=\"card-img\" alt=\"docx\">
                                    ";
                } elseif (0 === twig_compare(                // line 335
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 335, $this->source); })()), "dvd")) {
                    // line 336
                    echo "                                        <img src=\"../img/dvd.png\" class=\"card-img\" alt=\"dvd\">
                                    ";
                } elseif (0 === twig_compare(                // line 337
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 337, $this->source); })()), "exe")) {
                    // line 338
                    echo "                                        <img src=\"../img/exe.png\" class=\"card-img\" alt=\"exe\">
                                    ";
                } elseif (0 === twig_compare(                // line 339
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 339, $this->source); })()), "tml")) {
                    // line 340
                    echo "                                        <img src=\"../img/html.png\" class=\"card-img\" alt=\"html\">
                                    ";
                } elseif (0 === twig_compare(                // line 341
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 341, $this->source); })()), "iso")) {
                    // line 342
                    echo "                                        <img src=\"../img/iso.png\" class=\"card-img\" alt=\"iso\">
                                    ";
                } elseif (0 === twig_compare(                // line 343
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 343, $this->source); })()), "jpg")) {
                    // line 344
                    echo "                                        <img src=\"../img/jpg.png\" class=\"card-img\" alt=\"jpg\">
                                    ";
                } elseif (0 === twig_compare(                // line 345
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 345, $this->source); })()), ".js")) {
                    // line 346
                    echo "                                        <img src=\"../img/js.png\" class=\"card-img\" alt=\"js\">
                                    ";
                } elseif (0 === twig_compare(                // line 347
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 347, $this->source); })()), "mp3")) {
                    // line 348
                    echo "                                        <img src=\"../img/mp3.png\" class=\"card-img\" alt=\"mp3\">
                                    ";
                } elseif (0 === twig_compare(                // line 349
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 349, $this->source); })()), "mp4")) {
                    // line 350
                    echo "                                        <img src=\"../img/mp4.png\" class=\"card-img\" alt=\"mp4\">
                                    ";
                } elseif ((0 === twig_compare(                // line 351
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 351, $this->source); })()), "PNG") || 0 === twig_compare((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 351, $this->source); })()), "png"))) {
                    // line 352
                    echo "                                        <img src=\"../img/png.png\" class=\"card-img\" alt=\"png\">
                                    ";
                } elseif (0 === twig_compare(                // line 353
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 353, $this->source); })()), "ptx")) {
                    // line 354
                    echo "                                        <img src=\"../img/ppt.png\" class=\"card-img\" alt=\"pptx\">
                                    ";
                } elseif (0 === twig_compare(                // line 355
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 355, $this->source); })()), "sql")) {
                    // line 356
                    echo "                                        <img src=\"../img/sql.png\" class=\"card-img\" alt=\"sql\">
                                    ";
                } elseif (0 === twig_compare(                // line 357
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 357, $this->source); })()), "txt")) {
                    // line 358
                    echo "                                        <img src=\"../img/txt.png\" class=\"card-img\" alt=\"txt\">
                                    ";
                } elseif (0 === twig_compare(                // line 359
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 359, $this->source); })()), "lsx")) {
                    // line 360
                    echo "                                        <img src=\"../img/xls.png\" class=\"card-img\" alt=\"xlsx\">
                                    ";
                } elseif (0 === twig_compare(                // line 361
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 361, $this->source); })()), "xml")) {
                    // line 362
                    echo "                                        <img src=\"../img/xml.png\" class=\"card-img\" alt=\"xml\">
                                    ";
                } elseif (0 === twig_compare(                // line 363
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 363, $this->source); })()), "zip")) {
                    // line 364
                    echo "                                        <img src=\"../img/zip.png\" class=\"card-img\" alt=\"zip\">
                                    ";
                } elseif (0 === twig_compare(                // line 365
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 365, $this->source); })()), "rar")) {
                    // line 366
                    echo "                                        <img src=\"../img/rar.png\" class=\"card-img\" alt=\"rar\">
                                    ";
                } else {
                    // line 368
                    echo "                                        <img src=\"../img/none.png\" class=\"card-img\" alt=\"desconocido\">
                                    ";
                }
                // line 370
                echo "                                </div>
                                <div class=\"col-10\">
                                    ";
                // line 372
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 372);
                // line 373
                echo "                                    ";
                if (-1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 373, $this->source); })()) / 1024), 1)) {
                    // line 374
                    echo "                                        ";
                    $context["unidad"] = "KB";
                    // line 375
                    echo "                                        <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 375, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 375, $this->source); })()), "html", null, true);
                    echo "</p>
                                    ";
                } elseif ((0 <= twig_compare((                // line 376
(isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 376, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 376, $this->source); })()) / 1024), 1023))) {
                    // line 377
                    echo "                                        ";
                    $context["unidad"] = "MB";
                    // line 378
                    echo "                                        ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 378, $this->source); })()) / 1024);
                    // line 379
                    echo "                                        <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 379, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 379, $this->source); })()), "html", null, true);
                    echo "</p>
                                    ";
                } else {
                    // line 381
                    echo "                                        ";
                    $context["unidad"] = "GB";
                    // line 382
                    echo "                                        ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 382, $this->source); })()) / 1048576);
                    // line 383
                    echo "                                        <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 383, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 383, $this->source); })()), "html", null, true);
                    echo "</p>
                                    ";
                }
                // line 385
                echo "                                    <p class=\"card-text text-muted\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 385), "d-m-Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 385), "H:i"), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    ";
            }
            // line 392
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 393
        echo "            </div>
        ";
        // line 395
        echo "        <div class=\"navigation\">
            ";
        // line 396
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 396, $this->source); })()));
        echo "
        </div>
            ";
        // line 399
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 399, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 400
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 400);
            // line 401
            echo "                ";
            if (0 === twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 401, $this->source); })()), 0)) {
                // line 402
                echo "                    <div class=\"centrado\">
                        <h4 class=\"text-center\">Aquí se mostrarán tus archivos</h4>
                    </div>
                ";
            }
            // line 406
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "            ";
        // line 408
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 408, $this->source); })()), "session", [], "any", false, false, false, 408), "flashbag", [], "any", false, false, false, 408), "get", [0 => "compartido"], "method", false, false, false, 408));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 409
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
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
        echo "
            ";
        // line 418
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 418, $this->source); })()), "session", [], "any", false, false, false, 418), "flashbag", [], "any", false, false, false, 418), "get", [0 => "delete"], "method", false, false, false, 418));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 419
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 420
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
        // line 426
        echo "
            ";
        // line 428
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 428, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 429
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 429);
            // line 430
            echo "                ";
            if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 430, $this->source); })()), 4718592)) {
                // line 431
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
            // line 441
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 442
        echo "
        ";
        // line 444
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 444, $this->source); })()), "session", [], "any", false, false, false, 444), "flashbag", [], "any", false, false, false, 444), "get", [0 => "exito"], "method", false, false, false, 444));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 445
            echo "            <div class=\"alert alert-success alert-dismissible w-50 mx-auto mt-2 show fade\">
                ";
            // line 446
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
        // line 452
        echo "        </div>
</main>

    ";
        // line 456
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
        // line 479
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
        // line 490
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 490, $this->source); })()), "user", [], "any", false, false, false, 490), "email", [], "any", false, false, false, 490), "html", null, true);
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
        // line 504
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
        // line 524
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
        // line 544
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
        // line 564
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
        // line 584
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
        // line 604
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
        // line 624
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
        // line 644
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
        // line 666
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
        // line 688
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
        // line 710
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
        // line 719
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 719, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 720
            echo "                            ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 720);
            // line 721
            echo "                            ";
            if (0 === twig_compare((isset($context["borrado"]) || array_key_exists("borrado", $context) ? $context["borrado"] : (function () { throw new RuntimeError('Variable "borrado" does not exist.', 721, $this->source); })()), "S")) {
                // line 722
                echo "                                    <div class=\"col-6 mb-2\">
                                        ";
                // line 723
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 723);
                // line 724
                echo "                                        <div class=\"card\">
                                            ";
                // line 725
                $context["nombre"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 725);
                // line 726
                echo "                                            <div class=\"card-body\">
                                                <div class=\"dropdown no-gutters\">
                                                    ";
                // line 728
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 728)), 30)) {
                    // line 729
                    echo "                                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 729), 0, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 730
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 731
                    echo "                                                        <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 731), "html", null, true);
                    echo "\">
                                                            ";
                    // line 732
                    echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 732), 0, 30) . "..."), "html", null, true);
                    echo "
                                                        </button>
                                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                                            <input type=\"hidden\" name=\"";
                    // line 735
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 735, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 735, $this->source); })()), "html", null, true);
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
                    // line 750
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 750, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 750, $this->source); })()), "html", null, true);
                    echo "\">
                                                        </div>
                                                    ";
                } else {
                    // line 753
                    echo "                                                        <button class=\"card-title btn dropdown-toggle bg-transparent btn-titulo\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 753), "html", null, true);
                    echo "\">
                                                            ";
                    // line 754
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 754), "html", null, true);
                    echo "
                                                        </button>
                                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
                                                            <input type=\"hidden\" name=\"";
                    // line 757
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 757, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 757, $this->source); })()), "html", null, true);
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
                    // line 772
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 772, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 772, $this->source); })()), "html", null, true);
                    echo "\">
                                                        </div>
                                                    ";
                }
                // line 775
                echo "                                                </div>
                                                <div class=\"row no-gutters\">
                                                    ";
                // line 777
                $context["nombre"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 777),  -3, 3);
                // line 778
                echo "                                                    <div class=\"col-2\">
                                                        ";
                // line 779
                if (0 === twig_compare((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 779, $this->source); })()), "pdf")) {
                    // line 780
                    echo "                                                            <img src=\"../img/pdf.png\" class=\"card-img\" alt=\"pdf\">
                                                        ";
                } elseif (0 === twig_compare(                // line 781
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 781, $this->source); })()), "css")) {
                    // line 782
                    echo "                                                            <img src=\"../img/css.png\" class=\"card-img\" alt=\"css\">
                                                        ";
                } elseif (0 === twig_compare(                // line 783
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 783, $this->source); })()), "csv")) {
                    // line 784
                    echo "                                                            <img src=\"../img/csv.png\" class=\"card-img\" alt=\"csv\">
                                                        ";
                } elseif (0 === twig_compare(                // line 785
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 785, $this->source); })()), "ocx")) {
                    // line 786
                    echo "                                                            <img src=\"../img/doc.png\" class=\"card-img\" alt=\"docx\">
                                                        ";
                } elseif (0 === twig_compare(                // line 787
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 787, $this->source); })()), "dvd")) {
                    // line 788
                    echo "                                                            <img src=\"../img/dvd.png\" class=\"card-img\" alt=\"dvd\">
                                                        ";
                } elseif (0 === twig_compare(                // line 789
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 789, $this->source); })()), "exe")) {
                    // line 790
                    echo "                                                            <img src=\"../img/exe.png\" class=\"card-img\" alt=\"exe\">
                                                        ";
                } elseif (0 === twig_compare(                // line 791
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 791, $this->source); })()), "tml")) {
                    // line 792
                    echo "                                                            <img src=\"../img/html.png\" class=\"card-img\" alt=\"html\">
                                                        ";
                } elseif (0 === twig_compare(                // line 793
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 793, $this->source); })()), "iso")) {
                    // line 794
                    echo "                                                            <img src=\"../img/iso.png\" class=\"card-img\" alt=\"iso\">
                                                        ";
                } elseif (0 === twig_compare(                // line 795
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 795, $this->source); })()), "jpg")) {
                    // line 796
                    echo "                                                            <img src=\"../img/jpg.png\" class=\"card-img\" alt=\"jpg\">
                                                        ";
                } elseif (0 === twig_compare(                // line 797
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 797, $this->source); })()), ".js")) {
                    // line 798
                    echo "                                                            <img src=\"../img/js.png\" class=\"card-img\" alt=\"js\">
                                                        ";
                } elseif (0 === twig_compare(                // line 799
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 799, $this->source); })()), "mp3")) {
                    // line 800
                    echo "                                                            <img src=\"../img/mp3.png\" class=\"card-img\" alt=\"mp3\">
                                                        ";
                } elseif (0 === twig_compare(                // line 801
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 801, $this->source); })()), "mp4")) {
                    // line 802
                    echo "                                                            <img src=\"../img/mp4.png\" class=\"card-img\" alt=\"mp4\">
                                                        ";
                } elseif ((0 === twig_compare(                // line 803
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 803, $this->source); })()), "PNG") || 0 === twig_compare((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 803, $this->source); })()), "png"))) {
                    // line 804
                    echo "                                                            <img src=\"../img/png.png\" class=\"card-img\" alt=\"png\">
                                                        ";
                } elseif (0 === twig_compare(                // line 805
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 805, $this->source); })()), "ptx")) {
                    // line 806
                    echo "                                                            <img src=\"../img/ppt.png\" class=\"card-img\" alt=\"pptx\">
                                                        ";
                } elseif (0 === twig_compare(                // line 807
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 807, $this->source); })()), "sql")) {
                    // line 808
                    echo "                                                            <img src=\"../img/sql.png\" class=\"card-img\" alt=\"sql\">
                                                        ";
                } elseif (0 === twig_compare(                // line 809
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 809, $this->source); })()), "txt")) {
                    // line 810
                    echo "                                                            <img src=\"../img/txt.png\" class=\"card-img\" alt=\"txt\">
                                                        ";
                } elseif (0 === twig_compare(                // line 811
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 811, $this->source); })()), "lsx")) {
                    // line 812
                    echo "                                                            <img src=\"../img/xls.png\" class=\"card-img\" alt=\"xlsx\">
                                                        ";
                } elseif (0 === twig_compare(                // line 813
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 813, $this->source); })()), "xml")) {
                    // line 814
                    echo "                                                            <img src=\"../img/xml.png\" class=\"card-img\" alt=\"xml\">
                                                        ";
                } elseif (0 === twig_compare(                // line 815
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 815, $this->source); })()), "zip")) {
                    // line 816
                    echo "                                                            <img src=\"../img/zip.png\" class=\"card-img\" alt=\"zip\">
                                                        ";
                } elseif (0 === twig_compare(                // line 817
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 817, $this->source); })()), "rar")) {
                    // line 818
                    echo "                                                            <img src=\"../img/rar.png\" class=\"card-img\" alt=\"rar\">
                                                        ";
                } else {
                    // line 820
                    echo "                                                            <img src=\"../img/none.png\" class=\"card-img\" alt=\"desconocido\">
                                                        ";
                }
                // line 822
                echo "                                                    </div>
                                                    <div class=\"col-10\">
                                                        ";
                // line 824
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 824);
                // line 825
                echo "                                                        ";
                if (-1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 825, $this->source); })()) / 1024), 1)) {
                    // line 826
                    echo "                                                            ";
                    $context["unidad"] = "KB";
                    // line 827
                    echo "                                                            <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 827, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 827, $this->source); })()), "html", null, true);
                    echo "</p>
                                                        ";
                } elseif ((0 <= twig_compare((                // line 828
(isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 828, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 828, $this->source); })()) / 1024), 1023))) {
                    // line 829
                    echo "                                                            ";
                    $context["unidad"] = "MB";
                    // line 830
                    echo "                                                            ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 830, $this->source); })()) / 1024);
                    // line 831
                    echo "                                                            <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 831, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 831, $this->source); })()), "html", null, true);
                    echo "</p>
                                                        ";
                } else {
                    // line 833
                    echo "                                                            ";
                    $context["unidad"] = "GB";
                    // line 834
                    echo "                                                            ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 834, $this->source); })()) / 1048576);
                    // line 835
                    echo "                                                            <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 835, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 835, $this->source); })()), "html", null, true);
                    echo "</p>
                                                        ";
                }
                // line 837
                echo "                                                        <p class=\"card-text text-muted\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 837), "d-m-Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 837), "H:i"), "html", null, true);
                echo "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            ";
            }
            // line 844
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 845
        echo "                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        ";
        // line 848
        $context["contador"] = 0;
        // line 849
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 849, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 850
            echo "                            ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 850);
            // line 851
            echo "                            ";
            if (0 === twig_compare((isset($context["borrado"]) || array_key_exists("borrado", $context) ? $context["borrado"] : (function () { throw new RuntimeError('Variable "borrado" does not exist.', 851, $this->source); })()), "S")) {
                // line 852
                echo "                                ";
                $context["contador"] = ((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 852, $this->source); })()) + 1);
                // line 853
                echo "                            ";
            }
            // line 854
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 855
        echo "                        ";
        if ((1 === twig_compare((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 855, $this->source); })()), 0) && 0 === twig_compare((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 855, $this->source); })()), 1))) {
            // line 856
            echo "                            <span>";
            echo twig_escape_filter($this->env, (isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 856, $this->source); })()), "html", null, true);
            echo " archivo</span>
                        ";
        } elseif (1 === twig_compare(        // line 857
(isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 857, $this->source); })()), 1)) {
            // line 858
            echo "                            <span>";
            echo twig_escape_filter($this->env, (isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 858, $this->source); })()), "html", null, true);
            echo " archivos</span>
                        ";
        }
        // line 860
        echo "                    </div>
                </div>
            </div>
        </section>

    ";
        // line 866
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
        // line 888
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

    // line 910
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 911
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 912
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 913
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 914
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
           \$(\"#boton-menu\").click(function () {
              \$(\".menu-lateral\").toggleClass(\"animate\");
           });
        });
    </script>
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
        return array (  1750 => 914,  1746 => 913,  1742 => 912,  1737 => 911,  1727 => 910,  1696 => 888,  1673 => 866,  1666 => 860,  1660 => 858,  1658 => 857,  1653 => 856,  1650 => 855,  1644 => 854,  1641 => 853,  1638 => 852,  1635 => 851,  1632 => 850,  1627 => 849,  1625 => 848,  1620 => 845,  1614 => 844,  1601 => 837,  1593 => 835,  1590 => 834,  1587 => 833,  1579 => 831,  1576 => 830,  1573 => 829,  1571 => 828,  1564 => 827,  1561 => 826,  1558 => 825,  1556 => 824,  1552 => 822,  1548 => 820,  1544 => 818,  1542 => 817,  1539 => 816,  1537 => 815,  1534 => 814,  1532 => 813,  1529 => 812,  1527 => 811,  1524 => 810,  1522 => 809,  1519 => 808,  1517 => 807,  1514 => 806,  1512 => 805,  1509 => 804,  1507 => 803,  1504 => 802,  1502 => 801,  1499 => 800,  1497 => 799,  1494 => 798,  1492 => 797,  1489 => 796,  1487 => 795,  1484 => 794,  1482 => 793,  1479 => 792,  1477 => 791,  1474 => 790,  1472 => 789,  1469 => 788,  1467 => 787,  1464 => 786,  1462 => 785,  1459 => 784,  1457 => 783,  1454 => 782,  1452 => 781,  1449 => 780,  1447 => 779,  1444 => 778,  1442 => 777,  1438 => 775,  1430 => 772,  1410 => 757,  1404 => 754,  1399 => 753,  1391 => 750,  1371 => 735,  1365 => 732,  1360 => 731,  1354 => 730,  1349 => 729,  1347 => 728,  1343 => 726,  1341 => 725,  1338 => 724,  1336 => 723,  1333 => 722,  1330 => 721,  1327 => 720,  1323 => 719,  1312 => 710,  1289 => 688,  1266 => 666,  1243 => 644,  1222 => 624,  1201 => 604,  1180 => 584,  1159 => 564,  1138 => 544,  1117 => 524,  1096 => 504,  1080 => 490,  1067 => 479,  1043 => 456,  1038 => 452,  1026 => 446,  1023 => 445,  1018 => 444,  1015 => 442,  1009 => 441,  997 => 431,  994 => 430,  991 => 429,  986 => 428,  983 => 426,  971 => 420,  968 => 419,  963 => 418,  960 => 416,  948 => 410,  945 => 409,  940 => 408,  938 => 407,  932 => 406,  926 => 402,  923 => 401,  920 => 400,  915 => 399,  910 => 396,  907 => 395,  904 => 393,  898 => 392,  885 => 385,  877 => 383,  874 => 382,  871 => 381,  863 => 379,  860 => 378,  857 => 377,  855 => 376,  848 => 375,  845 => 374,  842 => 373,  840 => 372,  836 => 370,  832 => 368,  828 => 366,  826 => 365,  823 => 364,  821 => 363,  818 => 362,  816 => 361,  813 => 360,  811 => 359,  808 => 358,  806 => 357,  803 => 356,  801 => 355,  798 => 354,  796 => 353,  793 => 352,  791 => 351,  788 => 350,  786 => 349,  783 => 348,  781 => 347,  778 => 346,  776 => 345,  773 => 344,  771 => 343,  768 => 342,  766 => 341,  763 => 340,  761 => 339,  758 => 338,  756 => 337,  753 => 336,  751 => 335,  748 => 334,  746 => 333,  743 => 332,  741 => 331,  738 => 330,  736 => 329,  733 => 328,  731 => 327,  728 => 326,  726 => 325,  722 => 323,  713 => 320,  702 => 311,  699 => 310,  697 => 309,  694 => 308,  691 => 307,  688 => 306,  679 => 299,  676 => 298,  673 => 297,  664 => 290,  661 => 289,  659 => 288,  639 => 273,  625 => 264,  619 => 261,  614 => 260,  605 => 257,  593 => 247,  590 => 246,  588 => 245,  585 => 244,  582 => 243,  579 => 242,  570 => 235,  567 => 234,  564 => 233,  555 => 226,  552 => 225,  550 => 224,  530 => 209,  516 => 200,  510 => 197,  505 => 196,  499 => 195,  494 => 194,  492 => 193,  488 => 191,  486 => 190,  483 => 189,  481 => 188,  478 => 187,  475 => 186,  472 => 185,  468 => 184,  464 => 182,  427 => 146,  423 => 143,  407 => 133,  390 => 121,  380 => 113,  377 => 112,  370 => 110,  363 => 108,  360 => 107,  353 => 105,  346 => 103,  343 => 102,  340 => 101,  337 => 100,  334 => 99,  327 => 97,  320 => 95,  317 => 94,  314 => 93,  311 => 92,  309 => 91,  303 => 90,  296 => 88,  293 => 87,  290 => 86,  287 => 85,  284 => 84,  281 => 83,  278 => 82,  274 => 81,  263 => 72,  254 => 64,  248 => 63,  245 => 62,  238 => 60,  231 => 58,  228 => 57,  221 => 55,  214 => 53,  211 => 52,  208 => 51,  205 => 50,  202 => 49,  195 => 47,  188 => 45,  185 => 44,  182 => 43,  179 => 42,  177 => 41,  171 => 40,  164 => 38,  161 => 37,  158 => 36,  155 => 35,  152 => 34,  149 => 33,  146 => 32,  142 => 31,  132 => 24,  116 => 10,  113 => 8,  103 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panel{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block body %}
<body class=\"bg-dark\" style=\"overflow-x: hidden;\">
    {# Menú de navegación #}
    <header class=\"row justify-content-center\">
        <div class=\"container mt-5 \">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\" >
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <nav class=\"navbar-nav active-gray active-gray-1 searchbar\">
                    <input class=\"form-control bg-dark text-white\" type=\"text\" placeholder=\"Busca un archivo\" id=\"buscar\" aria-label=\"Search\">
                </nav>
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
                        <a class=\"dropdown-item\" href=\"/nuevo\">Nuevo archivo</a>
                        <a class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#papelera\" title=\"Papelera\" href=\"#\">Papelera</a>
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
<main class=\"main-panel\">
    {# Menú lateral #}
    <div class=\"text-white menu-lateral\">
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
    <div class=\"container mt-4 panel\">
            <div class=\"row no-gutters\">
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
                                    {% elseif nombre == 'PNG' or nombre == 'png' %}
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
                                                        {% elseif nombre == 'PNG' or nombre == 'png' %}
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
    <script>
        \$(function () {
           \$(\"#boton-menu\").click(function () {
              \$(\".menu-lateral\").toggleClass(\"animate\");
           });
        });
    </script>
{% endblock %}", "panel/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\panel\\index.html.twig");
    }
}
