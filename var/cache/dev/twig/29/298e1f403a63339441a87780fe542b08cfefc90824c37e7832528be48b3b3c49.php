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

/* index/index.html.twig */
class __TwigTemplate_619fb9d05872ab449a2e0ecd6c8d99ed37214535b841d01f7056c690f5998629 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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

        echo "Rasprivate";
        
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
        echo "
<main class=\"container-fluid \">
    <header class=\"row\">
        <!--Menú de navegación-->
        <div class=\"container mt-5\">
            <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <nav class=\"navbar-nav\">
                        <a href=\"#\" class=\"nav-link\">Home</a>
                        <a href=\"#\" class=\"nav-link\">Seguridad</a>
                        <a href=\"#\" class=\"nav-link\">Privacidad</a>
                        <a href=\"#\" class=\"nav-link\">Manual del usuario</a>
                    </nav>
                     <!--Botones de inicio de sesión o registro-->
                    <form class=\"form-inline ml-auto\">
                        <a class=\"btn bg-light btn-md mr-2\" href=\"/login\">Login</a>
                        <a class=\"btn bg-light btn-md\" href=\"/registro\">Registro</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <!-- Portada -->
    <div class=\"container-fluid mt-4\">
        <div class=\"row bg-transparent\">
            <div class=\"col bg-transparent fondo\">
                <div class=\"jumbotron bg-transparent\">
                    <h1>El almacenamiento libre</h1>
                    <p class=\"lead\">Guarda tus archivos de forma segura y totalmente anónima accediendo desde cualquier dispositivo</p>
                    <button class=\"btn btn-secondary\">Cómo funciona</button>
                    <a class=\"ref\"
                       href=\"https://unsplash.com/@shahrizadegan?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge\"
                       target=\"_blank\" rel=\"noopener noreferrer\" title=\"Autor: Naeem shahrizadegan\">
                        <span style=\"display:inline-block;padding:2px 3px\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white\" viewBox=\"0 0 32 32\">
                                <title>unsplash-logo</title>
                                <path d=\"M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z\"></path>
                            </svg>
                        </span>
                        <span style=\"display:inline-block;padding:2px 3px\">Naeem shahrizadegan</span>
                    </a>
                </div>
                <!-- Secciones-->
                <section class=\"container-fluid m-auto seccion bg-dark text-white\">
                    <article>
                    <div class=\"row justify-content-center align-items-center\">
                        <div class=\"col-md-6\">
                            <h3>Totalmente offline</h3>
                            <p>Accede a tu archivos sin la necesidad de tener conexión a Internet. Podrás seguir almacenando tu información de manera offline.</p>
                        </div>
                        <div class=\"col-md-4\">
                            <img src=\"img/offline.png\" alt=\"offline\" class=\"img-responsive mx-auto d-block imagen\">
                        </div>
                    </div>
                </article>
                    <article>
                        <div class=\"row justify-content-center align-items-center\">
                            <div class=\"col-md-6\">
                                <h3>Almacenamiento gratuito</h3>
                                <p>Disfruta de 5 GB  de almacenamiento para alojar tus archivos sin coste alguno. Además podrás guardar cualquier archivo.</p>
                            </div>
                            <div class=\"col-md-4\">
                                <img src=\"img/free.png\" alt=\"free\" class=\"img-responsive mx-auto d-block imagen\">
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class=\"row justify-content-center align-items-center\">
                            <div class=\"col-md-6\">
                                <h3>Tus archivos siempre seguros</h3>
                                <p>Rasprivate fue diseñado para proteger tu información de posibles ataques como <em>Man in the Middle, SQL Injection, Cross Site Scripting</em> entre otros.</p>
                            </div>
                            <div class=\"col-md-4\">
                                <img src=\"img/secure.png\" alt=\"secure\" class=\"img-responsive mx-auto d-block imagen\">
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</main>
<!-- Pie de la página -->
<footer class=\"footer text-center bg-dark text-white\">
    <p>Rasprivate 2020</p>
</footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rasprivate{% endblock %}

{% block body %}

<main class=\"container-fluid \">
    <header class=\"row\">
        <!--Menú de navegación-->
        <div class=\"container mt-5\">
            <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <nav class=\"navbar-nav\">
                        <a href=\"#\" class=\"nav-link\">Home</a>
                        <a href=\"#\" class=\"nav-link\">Seguridad</a>
                        <a href=\"#\" class=\"nav-link\">Privacidad</a>
                        <a href=\"#\" class=\"nav-link\">Manual del usuario</a>
                    </nav>
                     <!--Botones de inicio de sesión o registro-->
                    <form class=\"form-inline ml-auto\">
                        <a class=\"btn bg-light btn-md mr-2\" href=\"/login\">Login</a>
                        <a class=\"btn bg-light btn-md\" href=\"/registro\">Registro</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <!-- Portada -->
    <div class=\"container-fluid mt-4\">
        <div class=\"row bg-transparent\">
            <div class=\"col bg-transparent fondo\">
                <div class=\"jumbotron bg-transparent\">
                    <h1>El almacenamiento libre</h1>
                    <p class=\"lead\">Guarda tus archivos de forma segura y totalmente anónima accediendo desde cualquier dispositivo</p>
                    <button class=\"btn btn-secondary\">Cómo funciona</button>
                    <a class=\"ref\"
                       href=\"https://unsplash.com/@shahrizadegan?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge\"
                       target=\"_blank\" rel=\"noopener noreferrer\" title=\"Autor: Naeem shahrizadegan\">
                        <span style=\"display:inline-block;padding:2px 3px\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white\" viewBox=\"0 0 32 32\">
                                <title>unsplash-logo</title>
                                <path d=\"M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z\"></path>
                            </svg>
                        </span>
                        <span style=\"display:inline-block;padding:2px 3px\">Naeem shahrizadegan</span>
                    </a>
                </div>
                <!-- Secciones-->
                <section class=\"container-fluid m-auto seccion bg-dark text-white\">
                    <article>
                    <div class=\"row justify-content-center align-items-center\">
                        <div class=\"col-md-6\">
                            <h3>Totalmente offline</h3>
                            <p>Accede a tu archivos sin la necesidad de tener conexión a Internet. Podrás seguir almacenando tu información de manera offline.</p>
                        </div>
                        <div class=\"col-md-4\">
                            <img src=\"img/offline.png\" alt=\"offline\" class=\"img-responsive mx-auto d-block imagen\">
                        </div>
                    </div>
                </article>
                    <article>
                        <div class=\"row justify-content-center align-items-center\">
                            <div class=\"col-md-6\">
                                <h3>Almacenamiento gratuito</h3>
                                <p>Disfruta de 5 GB  de almacenamiento para alojar tus archivos sin coste alguno. Además podrás guardar cualquier archivo.</p>
                            </div>
                            <div class=\"col-md-4\">
                                <img src=\"img/free.png\" alt=\"free\" class=\"img-responsive mx-auto d-block imagen\">
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class=\"row justify-content-center align-items-center\">
                            <div class=\"col-md-6\">
                                <h3>Tus archivos siempre seguros</h3>
                                <p>Rasprivate fue diseñado para proteger tu información de posibles ataques como <em>Man in the Middle, SQL Injection, Cross Site Scripting</em> entre otros.</p>
                            </div>
                            <div class=\"col-md-4\">
                                <img src=\"img/secure.png\" alt=\"secure\" class=\"img-responsive mx-auto d-block imagen\">
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</main>
<!-- Pie de la página -->
<footer class=\"footer text-center bg-dark text-white\">
    <p>Rasprivate 2020</p>
</footer>

{% endblock %}
", "index/index.html.twig", "C:\\xampp\\htdocs\\rasprivate\\templates\\index\\index.html.twig");
    }
}
