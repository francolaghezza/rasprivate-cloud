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

/* registro/index.html.twig */
class __TwigTemplate_243180377d8beaf8516021cf417f737e43c2d6fcd11bca379bd8701261b52b37 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registro/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registro/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registro/index.html.twig", 1);
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

        echo "Registrarse";
        
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
\t";
        // line 8
        echo "\t<header class=\"row\">
\t\t<div class=\"container mt-5\">
\t\t\t<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
\t\t\t\t<a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
\t\t\t\t<button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"menu\">
\t\t\t\t\t<nav class=\"navbar-nav\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Home</a>
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Privacidad</a>
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Manual del usuario</a>
\t\t\t\t\t</nav>
\t\t\t\t\t";
        // line 22
        echo "\t\t\t\t\t<form class=\"form-inline ml-auto\">
\t\t\t\t\t\t<a class=\"btn bg-light btn-md mr-2 redondo\" href=\"/login\">Login</a>
\t\t\t\t\t\t<a class=\"btn bg-light btn-md redondo\" href=\"/registro\">Registro</a>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t";
        // line 31
        echo "<div class=\"container mt-5\">
    <div class=\"row justify-content-center align-items-center minh-100\">
        <div class=\"col-md-6\">
\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Crea una cuenta</h1>
\t\t\t
\t\t\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), 'form_start');
        echo "

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'row');
        echo "

\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 42, $this->source); })()), "usuario", [], "any", false, false, false, 42), 'row');
        echo "
\t\t\t
\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), 'row');
        echo "
\t\t\t\t<div class=\"form-check mb-2\">
\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" required>
\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleCheck1\">Acepto la <a href=\"#\">Política de privacidad</a> </label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "flashes", [0 => "exito"], "method", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 54
            echo "\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t";
            // line 55
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registro/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 58,  162 => 55,  159 => 54,  155 => 53,  151 => 52,  140 => 44,  135 => 42,  130 => 40,  123 => 36,  116 => 31,  106 => 22,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Registrarse{% endblock %}

{% block body %}

\t{# Menú de navegación #}
\t<header class=\"row\">
\t\t<div class=\"container mt-5\">
\t\t\t<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
\t\t\t\t<a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
\t\t\t\t<button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"menu\">
\t\t\t\t\t<nav class=\"navbar-nav\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Home</a>
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Privacidad</a>
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Manual del usuario</a>
\t\t\t\t\t</nav>
\t\t\t\t\t{# Botones de inicio de sesión o registro #}
\t\t\t\t\t<form class=\"form-inline ml-auto\">
\t\t\t\t\t\t<a class=\"btn bg-light btn-md mr-2 redondo\" href=\"/login\">Login</a>
\t\t\t\t\t\t<a class=\"btn bg-light btn-md redondo\" href=\"/registro\">Registro</a>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</header>
\t{# Crear una cuenta #}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center align-items-center minh-100\">
        <div class=\"col-md-6\">
\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Crea una cuenta</h1>
\t\t\t
\t\t\t{{ form_start(formulario) }}

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t{{ form_row(formulario.email) }}

\t\t\t\t{{ form_row(formulario.usuario) }}
\t\t\t
\t\t\t\t{{ form_row(formulario.password) }}
\t\t\t\t<div class=\"form-check mb-2\">
\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" required>
\t\t\t\t\t<label class=\"form-check-label\" for=\"exampleCheck1\">Acepto la <a href=\"#\">Política de privacidad</a> </label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t{{ form_end(formulario) }}
\t\t\t\t{% for message in app.flashes('exito') %}
\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t</div>
\t</div>
</div>
{% endblock %}", "registro/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\registro\\index.html.twig");
    }
}
