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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 25
        echo "<div class=\"container mt-5\">
    <h3>Sube un archivo</h3>

    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 29, $this->source); })()), "nombre", [], "any", false, false, false, 29), 'row');
        echo "
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 30, $this->source); })()), 'form_end');
        echo "

    ";
        // line 33
        echo "    <div class=\"alert alert-warning alert-dismissible w-50 mx-auto show fade\">
            <h5><svg class=\"bi bi-exclamation-triangle\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M7.938 2.016a.146.146 0 00-.054.057L1.027 13.74a.176.176 0 00-.002.183c.016.03.037.05.054.06.015.01.034.017.066.017h13.713a.12.12 0 00.066-.017.163.163 0 00.055-.06.176.176 0 00-.003-.183L8.12 2.073a.146.146 0 00-.054-.057A.13.13 0 008.002 2a.13.13 0 00-.064.016zm1.044-.45a1.13 1.13 0 00-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z\" clip-rule=\"evenodd\"/>
                <path d=\"M7.002 12a1 1 0 112 0 1 1 0 01-2 0zM7.1 5.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 5.995z\"/>
                </svg></h5>
        <p>Los archivos con un tamaño superior a 32 MB no se podrán escanear en busca de malware</p>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    ";
        // line 44
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "flashbag", [], "any", false, false, false, 44), "get", [0 => "error_almacenamiento"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 45
            echo "        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
            <h5>
                <svg class=\"bi bi-exclamation-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                    <path d=\"M7.002 11a1 1 0 112 0 1 1 0 01-2 0zM7.1 4.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 4.995z\"/>
                </svg>
            </h5>
            <p>";
            // line 52
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
        // line 58
        echo "
    ";
        // line 60
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "flashbag", [], "any", false, false, false, 60), "get", [0 => "error_size"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 61
            echo "        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
            <svg class=\"bi bi-dash-circle\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                <path fill-rule=\"evenodd\" d=\"M3.5 8a.5.5 0 01.5-.5h8a.5.5 0 010 1H4a.5.5 0 01-.5-.5z\" clip-rule=\"evenodd\"/>
            </svg>
            ";
            // line 66
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
        // line 72
        echo "
    ";
        // line 74
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "session", [], "any", false, false, false, 74), "flashbag", [], "any", false, false, false, 74), "get", [0 => "error_malware"], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 75
            echo "        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
           <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
               </svg></h5>
            <p> ";
            // line 81
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
        // line 87
        echo "    ";
        // line 88
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "session", [], "any", false, false, false, 88), "flashbag", [], "any", false, false, false, 88), "get", [0 => "error_0"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 89
            echo "        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
            <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                </svg></h5>
            <p> ";
            // line 95
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
        // line 101
        echo "    ";
        // line 102
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "session", [], "any", false, false, false, 102), "flashbag", [], "any", false, false, false, 102), "get", [0 => "error_0"], "method", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 103
            echo "        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
            <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                </svg></h5>
            <p> ";
            // line 109
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
        // line 115
        echo "    ";
        // line 116
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "session", [], "any", false, false, false, 116), "flashbag", [], "any", false, false, false, 116), "get", [0 => "error_1"], "method", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 117
            echo "        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
            <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                </svg></h5>
            <p> ";
            // line 123
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
        // line 129
        echo "    ";
        // line 130
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "session", [], "any", false, false, false, 130), "flashbag", [], "any", false, false, false, 130), "get", [0 => "error_2"], "method", false, false, false, 130));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 131
            echo "        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
            <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                </svg></h5>
            <p> ";
            // line 137
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
        // line 143
        echo "    ";
        // line 144
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "session", [], "any", false, false, false, 144), "flashbag", [], "any", false, false, false, 144), "get", [0 => "error_3"], "method", false, false, false, 144));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 145
            echo "        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
            <h5><svg class=\"bi bi-x-octagon\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M4.54.146A.5.5 0 014.893 0h6.214a.5.5 0 01.353.146l4.394 4.394a.5.5 0 01.146.353v6.214a.5.5 0 01-.146.353l-4.394 4.394a.5.5 0 01-.353.146H4.893a.5.5 0 01-.353-.146L.146 11.46A.5.5 0 010 11.107V4.893a.5.5 0 01.146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z\" clip-rule=\"evenodd\"/>
                </svg></h5>
            <p> ";
            // line 151
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
        // line 157
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 161
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
    <script>
        // Add the following code if you want the name of the file appear on select
        \$(\".custom-file-input\").on(\"change\", function() {
            var fileName = \$(this).val().split(\"\\\\\").pop();
            \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
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
        return array (  372 => 164,  368 => 163,  364 => 162,  359 => 161,  349 => 160,  337 => 157,  325 => 151,  317 => 145,  312 => 144,  310 => 143,  298 => 137,  290 => 131,  285 => 130,  283 => 129,  271 => 123,  263 => 117,  258 => 116,  256 => 115,  244 => 109,  236 => 103,  231 => 102,  229 => 101,  217 => 95,  209 => 89,  204 => 88,  202 => 87,  190 => 81,  182 => 75,  177 => 74,  174 => 72,  162 => 66,  155 => 61,  150 => 60,  147 => 58,  135 => 52,  126 => 45,  121 => 44,  109 => 33,  104 => 30,  100 => 29,  96 => 28,  91 => 25,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sube un archivo{% endblock %}

{% block body %}
    {# Menú de navegación
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
                    </nav>
                    <form class=\"form-inline ml-auto\">
                        <a href=\"{{ logout_path() }}\" class=\"btn bg-light btn-md mr-2\">Cerrar sesión</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>#}
<div class=\"container mt-5\">
    <h3>Sube un archivo</h3>

    {{ form_start(formulario) }}
    {{ form_row(formulario.nombre) }}
    {{ form_end(formulario) }}

    {# Aviso #}
    <div class=\"alert alert-warning alert-dismissible w-50 mx-auto show fade\">
            <h5><svg class=\"bi bi-exclamation-triangle\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M7.938 2.016a.146.146 0 00-.054.057L1.027 13.74a.176.176 0 00-.002.183c.016.03.037.05.054.06.015.01.034.017.066.017h13.713a.12.12 0 00.066-.017.163.163 0 00.055-.06.176.176 0 00-.003-.183L8.12 2.073a.146.146 0 00-.054-.057A.13.13 0 008.002 2a.13.13 0 00-.064.016zm1.044-.45a1.13 1.13 0 00-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z\" clip-rule=\"evenodd\"/>
                <path d=\"M7.002 12a1 1 0 112 0 1 1 0 01-2 0zM7.1 5.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 5.995z\"/>
                </svg></h5>
        <p>Los archivos con un tamaño superior a 32 MB no se podrán escanear en busca de malware</p>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
    {# No queda espacio de almacenamiento #}
    {% for flash_message in app.session.flashbag.get('error_almacenamiento') %}
        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
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
        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
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

    {# Se ha detectado un archivo malicioso #}
    {% for flash_message in app.session.flashbag.get('error_malware') %}
        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
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
    {# Error 0 #}
    {% for flash_message in app.session.flashbag.get('error_0') %}
        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
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
    {# Error 0 #}
    {% for flash_message in app.session.flashbag.get('error_0') %}
        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
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
        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
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
        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
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
        <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
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

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('js/accion.js') }}\"></script>
    <script>
        // Add the following code if you want the name of the file appear on select
        \$(\".custom-file-input\").on(\"change\", function() {
            var fileName = \$(this).val().split(\"\\\\\").pop();
            \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
        });
    </script>
{% endblock %}", "archivos/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\archivos\\index.html.twig");
    }
}
