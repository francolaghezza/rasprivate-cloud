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

/* perfil/index.html.twig */
class __TwigTemplate_f7078217c4d9ee8caafbcafcb860aab777b49d636f5e384dc95eb0300e77be28 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "perfil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Perfil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<body class=\"bg-dark\">
<main class=\"container-fluid\">
    ";
        // line 9
        echo "    <header class=\"row\">
        <div class=\"container mt-5\">
            <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <nav class=\"navbar-nav\">
                        <a href=\"/panel\" class=\"nav-link\">Panel
                            <svg class=\"bi bi-files\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M3 2h8a2 2 0 012 2v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V4a1 1 0 00-1-1H3z\" clip-rule=\"evenodd\"/>
                                <path d=\"M5 0h8a2 2 0 012 2v10a2 2 0 01-2 2v-1a1 1 0 001-1V2a1 1 0 00-1-1H5a1 1 0 00-1 1H3a2 2 0 012-2z\"/>
                            </svg>
                        </a>
                    </nav>
                    ";
        // line 26
        echo "                    <form class=\"form-inline ml-auto\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-secondary bg-transparent dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <svg class=\"bi bi-people-circle\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                                </svg>
                                ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
        echo "
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a href=\"/perfil\" class=\"dropdown-item\">Perfil</a>
                                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
        echo "\" class=\"dropdown-item\">Cerrar sesión</a>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <div class=\"container text-white mt-5\">
            <p class=\"text-center\">
                <svg class=\"bi bi-people-circle\" width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                    <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                </svg>
            </p>
        <h4 class=\"text-center\">Mi cuenta</h4>
        <p class=\"text-center\">Desde aquí podrás editar la configuración de tu cuenta.</p>
        <form class=\"container\">
            ";
        // line 58
        echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group \">
                        <label for=\"email\">Email:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"email\" name=\"mail\" class=\"form-control\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 68), "email", [], "any", false, false, false, 68), "html", null, true);
        echo "\" readonly>
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#email\">
                                <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 81
        echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group \">
                        <label for=\"usuario\">Nombre de usuario:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"text\" name=\"usuario\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 91), "username", [], "any", false, false, false, 91), "html", null, true);
        echo "\" readonly>
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#usuario\">
                                <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 104
        echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group \">
                        <label for=\"usuario\">Contraseña actual:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" name=\"pass1\" id=\"pass1\" class=\"form-control boton\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-light boton\" type=\"button\" id=\"btn_pass1\">
                                <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"show_icon_pass1\">
                                    <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <svg class=\"bi bi-eye-slash oculto\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"hide_icon_pass1\">
                                    <path d=\"M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 018 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0114.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z\"/>
                                    <path d=\"M11.297 9.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"/>
                                    <path d=\"M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 001.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 018 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M13.646 14.354l-12-12 .708-.708 12 12-.708.708z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <label for=\"usuario\">Nueva contraseña:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" name=\"pass2\" id=\"pass2\" class=\"form-control boton\" pattern=\".{8,}\" placeholder=\"Al menos 8 caracteres\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-light boton\" type=\"button\" id=\"btn_pass2\">
                                <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"show_icon_pass2\">
                                    <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <svg class=\"bi bi-eye-slash oculto\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"hide_icon_pass2\">
                                    <path d=\"M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 018 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0114.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z\"/>
                                    <path d=\"M11.297 9.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"/>
                                    <path d=\"M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 001.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 018 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M13.646 14.354l-12-12 .708-.708 12 12-.708.708z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 mb-3\">
                    <button type=\"button\" class=\"btn btn-secondary\" id=\"c_pass\">Cambiar contraseña</button>
                </div>
            </div>
            ";
        // line 166
        echo "                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        <div class=\"card border-danger mb-3 bg-light text-dark\">
                            <div class=\"card-header\">Eliminar mi cuenta:</div>
                            <div class=\"card-body\">
                                <p class=\"card-text\"><strong class=\"text-danger\">Aviso:</strong> Si cierras tu cuenta, se eliminarán todos tus archivos.</p>
                                <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#eliminar_cuenta\">Eliminar cuenta</button>
                            </div>
                        </div>
                    </div>
                </div>

            ";
        // line 179
        echo "            <div class=\"row justify-content-center\" style=\"display:none;\" id=\"error_pass1\">
                <div class=\"col-md-6\">
                    <div class=\"alert alert-danger alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                        La contraseña es incorrecta
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            ";
        // line 190
        echo "            <div class=\"row justify-content-center\" style=\"display:none;\" id=\"error_cuenta\">
                <div class=\"col-md-6\">
                    <div class=\"alert alert-danger alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                        No se puedo eliminar su cuenta
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            ";
        // line 201
        echo "            <div class=\"row justify-content-center\" style=\"display:none;\" id=\"pass_changed\">
                <div class=\"col-md-6\">
                    <div class=\"alert alert-info alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                        Contraseña cambiada correctamente
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    ";
        // line 214
        echo "    <section class=\"modal fade\" id=\"eliminar_cuenta\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Eliminar cuenta</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Introduce tu contraseña:</label>
                            <div class=\"input-group mb-3 rounded border border-secondary\">
                                <input type=\"password\" name=\"pass3\" id=\"pass3\" class=\"form-control boton\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-light boton\" type=\"button\" id=\"btn_pass3\">
                                        <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"show_icon_pass3\">
                                            <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                            <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                        </svg>
                                        <svg class=\"bi bi-eye-slash oculto\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"hide_icon_pass3\">
                                            <path d=\"M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 018 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0114.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z\"/>
                                            <path d=\"M11.297 9.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"/>
                                            <path d=\"M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 001.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 018 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M13.646 14.354l-12-12 .708-.708 12 12-.708.708z\" clip-rule=\"evenodd\"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-outline-danger\" id=\"eliminar\">Eliminar</button>
                        <input type=\"hidden\" id=\"usuario_eliminar\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 246), "username", [], "any", false, false, false, 246), "html", null, true);
        echo "\">
                        <input type=\"hidden\" id=\"usuario_id\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247), "html", null, true);
        echo "\">
                    </div>
                </form>
            </div>
        </div>
    </section>
    ";
        // line 254
        echo "    <section class=\"modal fade\" id=\"email\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Cambia tu correo electrónico</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-9\">
                                    <input type=\"email\" id=\"input_email\" class=\"form-control\" value=\"";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 266), "email", [], "any", false, false, false, 266), "html", null, true);
        echo "\" required>
                                </div>
                                <div class=\"col-1\">
                                    <span class=\"spinner-border\" role=\"status\" style=\"width: 1.5em; height: 1.5em; display: none;\" id=\"animacion\"></span>
                                    <svg id=\"no_valido\" class=\"bi bi-exclamation-circle\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"red\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                                        <path d=\"M7.002 11a1 1 0 112 0 1 1 0 01-2 0zM7.1 4.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 4.995z\"/>
                                    </svg>
                                    <svg id=\"valido\" class=\"bi bi-check\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"green\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M13.854 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L6.5 10.293l6.646-6.647a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"cambiar_email\">Cambiar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    ";
        // line 289
        echo "    <section class=\"modal fade\" id=\"usuario\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Cambia tu nombre de usuario</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-9\">
                                    <input type=\"text\" id=\"input_usuario\" class=\"form-control\" value=\"";
        // line 301
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 301), "username", [], "any", false, false, false, 301), "html", null, true);
        echo "\" required>

                                </div>
                                <div class=\"col-1\">
                                    <span class=\"spinner-border\" role=\"status\" style=\"width: 1.5em; height: 1.5em; display: none;\" id=\"animacion_u\"></span>
                                    <svg id=\"no_valido_u\" class=\"bi bi-exclamation-circle\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"red\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                                        <path d=\"M7.002 11a1 1 0 112 0 1 1 0 01-2 0zM7.1 4.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 4.995z\"/>
                                    </svg>
                                    <svg id=\"valido_u\" class=\"bi bi-check\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"green\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M13.854 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L6.5 10.293l6.646-6.647a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </div>
                            </div>
                            <small>Mínimo 6 caracteres sin caracteres especiales</small>
                        </div>
                    </div>
                    <div class=\"modal-footer\">

                        <button type=\"button\" class=\"btn btn-secondary\" id=\"cambiar_usuario\">Cambiar</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</main>
</body>
";
    }

    // line 330
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 333
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "perfil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 334,  435 => 333,  431 => 332,  426 => 331,  422 => 330,  389 => 301,  375 => 289,  350 => 266,  336 => 254,  327 => 247,  323 => 246,  289 => 214,  275 => 201,  263 => 190,  251 => 179,  237 => 166,  174 => 104,  159 => 91,  147 => 81,  132 => 68,  120 => 58,  98 => 38,  91 => 34,  81 => 26,  63 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "perfil/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\perfil\\index.html.twig");
    }
}
