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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<body class=\"bg-dark\">
    <main class=\"container-fluid\">
        ";
        // line 9
        echo "        <header class=\"row\">
            <div class=\"container mt-5\">
                <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                    <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                    <button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"menu\">
                        <nav class=\"navbar-nav\">
                            <a href=\"#\" class=\"nav-link\">Perfil</a>
                            <a href=\"#\" class=\"nav-link\">----</a>
                            <a href=\"#\" class=\"nav-link\">Manual del usuario</a>
                            <form class=\"form-inline\">
                                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Buscar un archivo\" aria-label=\"Search\">
                                <button class=\"btn bg-light btn-md my-4 my-sm-0\" type=\"submit\">Buscar</button>
                            </form>
                        </nav>
                        ";
        // line 27
        echo "                        <form class=\"form-inline ml-auto\">
                            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
        echo "\" class=\"btn bg-light btn-md mr-2\">Cerrar sesión</a>
                        </form>
                    </div>
                </nav>
            </div>
        </header>
        ";
        // line 35
        echo "        <div class=\"container bg-dark text-white menu-lateral\">
            <p>Almacenamiento</p>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 38
            echo "                ";
            $context["total"] = 5000;
            // line 39
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 39);
            // line 40
            echo "                ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 40, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 40, $this->source); })())) * 100);
            // line 41
            echo "                <div class=\"progress\" style=\"height: 2px;width: 50%\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "%;\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p>";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 44, $this->source); })()), "html", null, true);
            echo " MB de 5GB utilizado</p>
            <a ";
            // line 45
            if (0 === twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 45, $this->source); })()), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 45, $this->source); })()))) {
                echo "class=\"btn bg-light btn-md my-4 my-sm-0 disabled\"";
            }
            echo " href=\"nuevo\"class=\"btn bg-light btn-md my-4 my-sm-0\">Subir archivo</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
        ";
        // line 49
        echo "        <div class=\"container bg-dark mt-5 panel\">
            <table class=\"table table-striped table-dark\" id=\"archivos\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nombre del archivo</th>
                        <th scope=\"col\">Tamaño</th>
                        <th scope=\"col\">Fecha</th>
                        <th scope=\"col\"></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 60, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 61
            echo "                    <tr ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                        ";
            // line 62
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 62);
            // line 63
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 64), "html", null, true);
            echo " MB</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 65), "d-m-Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 65), "H:i"), "html", null, true);
            echo "</td>
                        <td><button class=\"btn bg-light btn-md my-4 my-sm-0\" data-toggle=\"modal\" data-target=\"#editar\">Editar</button></td>
                        <td><a class=\"btn bg-light btn-md my-4 my-sm-0\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/archivos/" . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 67))), "html", null, true);
            echo "\" download=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 67), "html", null, true);
            echo "\">Descargar</a></td>
                        <td><input type=\"hidden\" name=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "\"></td>
                    </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </tbody>
            </table>
            ";
        // line 74
        echo "            <div class=\"navigation\">
                ";
        // line 75
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 75, $this->source); })()));
        echo "
            </div>
        </div>
    </main>
    ";
        // line 80
        echo "    <section class=\"modal\" id=\"editar\">
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
        // line 102
        echo "    <div class=\"footer-panel text-center bg-dark text-white justify-content-center\">
        <p>Rasprivate <script>document.write(new Date().getFullYear());</script></p>
    </div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/editar.js"), "html", null, true);
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
        return array (  322 => 111,  318 => 110,  314 => 109,  309 => 108,  299 => 107,  285 => 102,  262 => 80,  255 => 75,  252 => 74,  248 => 71,  229 => 68,  223 => 67,  216 => 65,  212 => 64,  207 => 63,  205 => 62,  198 => 61,  181 => 60,  168 => 49,  165 => 47,  155 => 45,  151 => 44,  144 => 42,  141 => 41,  138 => 40,  135 => 39,  132 => 38,  128 => 37,  124 => 35,  115 => 28,  112 => 27,  93 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panel{% endblock %}

{% block body %}
<body class=\"bg-dark\">
    <main class=\"container-fluid\">
        {# Menú de navegación #}
        <header class=\"row\">
            <div class=\"container mt-5\">
                <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                    <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                    <button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"menu\">
                        <nav class=\"navbar-nav\">
                            <a href=\"#\" class=\"nav-link\">Perfil</a>
                            <a href=\"#\" class=\"nav-link\">----</a>
                            <a href=\"#\" class=\"nav-link\">Manual del usuario</a>
                            <form class=\"form-inline\">
                                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Buscar un archivo\" aria-label=\"Search\">
                                <button class=\"btn bg-light btn-md my-4 my-sm-0\" type=\"submit\">Buscar</button>
                            </form>
                        </nav>
                        {# Cerrar sesión #}
                        <form class=\"form-inline ml-auto\">
                            <a href=\"{{ logout_path() }}\" class=\"btn bg-light btn-md mr-2\">Cerrar sesión</a>
                        </form>
                    </div>
                </nav>
            </div>
        </header>
        {# Almacenamiento #}
        <div class=\"container bg-dark text-white menu-lateral\">
            <p>Almacenamiento</p>
            {% for usuario in almacenamiento %}
                {% set total = 5000 %}
                {% set utilizado = usuario.almacenamiento %}
                {% set porcentaje = (utilizado/total)*100 %}
                <div class=\"progress\" style=\"height: 2px;width: 50%\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}%;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p>{{ utilizado }} MB de 5GB utilizado</p>
            <a {% if utilizado == total  %}class=\"btn bg-light btn-md my-4 my-sm-0 disabled\"{% endif %} href=\"nuevo\"class=\"btn bg-light btn-md my-4 my-sm-0\">Subir archivo</a>
            {% endfor %}
        </div>
        {# Panel de archivos #}
        <div class=\"container bg-dark mt-5 panel\">
            <table class=\"table table-striped table-dark\" id=\"archivos\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nombre del archivo</th>
                        <th scope=\"col\">Tamaño</th>
                        <th scope=\"col\">Fecha</th>
                        <th scope=\"col\"></th>
                    </tr>
                </thead>
                <tbody>
                {% for archivo in pagination %}
                    <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
                        {% set id = archivo.id %}
                        <td>{{ archivo.nombre }}</td>
                        <td>{{ archivo.size }} MB</td>
                        <td>{{ archivo.fecha | date('d-m-Y')}} {{ archivo.fecha | date('H:i') }}</td>
                        <td><button class=\"btn bg-light btn-md my-4 my-sm-0\" data-toggle=\"modal\" data-target=\"#editar\">Editar</button></td>
                        <td><a class=\"btn bg-light btn-md my-4 my-sm-0\" href=\"{{ asset('uploads/archivos/' ~ archivo.nombre) }}\" download=\"{{ archivo.nombre }}\">Descargar</a></td>
                        <td><input type=\"hidden\" name=\"{{ id }}\" value=\"{{ id }}\"></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            {# Paginación #}
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </main>
    {# Ventana de inicio de sesión #}
    <section class=\"modal\" id=\"editar\">
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
    <script src=\"{{ asset('js/editar.js') }}\"></script>
{% endblock %}", "panel/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\panel\\index.html.twig");
    }
}
