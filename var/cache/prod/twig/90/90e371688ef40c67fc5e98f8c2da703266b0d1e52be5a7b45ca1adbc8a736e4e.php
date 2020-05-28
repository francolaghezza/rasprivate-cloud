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

/* nueva_pass/index.html.twig */
class __TwigTemplate_6bb40212828d99130f792dda245831ed7b96e8f5f46234f3b8e17d2b506e4c93 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "nueva_pass/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nueva contraseña";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <body class=\"bg-dark\" style=\"overflow: hidden;\">
    <header class=\"row\">
        <!--Menú de navegación-->
        <div class=\"container mt-5\">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\">
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                <button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <nav class=\"navbar-nav\">
                        <a href=\"#\" class=\"nav-link\" id=\"home\">Home</a>
                        <a href=\"#\" class=\"nav-link\">Privacidad</a>
                        <a href=\"#\" class=\"nav-link\">Manual del usuario</a>
                    </nav>
                    <!--Botones de inicio de sesión o registro-->
                    <form class=\"form-inline ml-auto\">
                        <a class=\"btn bg-light btn-md mr-2 redondo\" href=\"/login\">Login</a>
                        <a class=\"btn bg-light btn-md redondo\" href=\"/registro\">Registro</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    ";
        // line 35
        echo "    <main class=\"container mt-5 bg-dark text-white\">
        <h2 class=\"text-center mb-3\">Establezca una nueva contraseña</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"input-group \">
                    <label for=\"usuario\">Nueva contraseña:</label>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"input-group mb-3\">
                    <input type=\"password\" name=\"new_pass1\" id=\"new_pass1\" class=\"form-control boton\" pattern=\".{8,}\" placeholder=\"Mínimo 8 caracteres\">
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
                    <label for=\"usuario\">Repita la contraseña:</label>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"input-group mb-3\">
                    <input type=\"password\" name=\"new_pass2\" id=\"new_pass2\" class=\"form-control boton\" pattern=\".{8,}\" placeholder=\"Mínimo 8 caracteres\">
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
                <button type=\"button\" class=\"btn btn-secondary\" id=\"establecer\">Establecer</button>
            </div>
        </div>
        <input type=\"hidden\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\" id=\"token\">
        ";
        // line 100
        echo "        <div class=\"row justify-content-center oculto\" id=\"new_pass_error\">
            <div class=\"col-md-6\">
                <div class=\"alert alert-danger alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                    La contraseñas no coinciden
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        ";
        // line 111
        echo "        <div class=\"row justify-content-center oculto\" id=\"new_pass_ok\">
            <div class=\"col-md-6\">
                <div class=\"alert alert-info alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                    Se ha establecido su nueva contraseña
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
    </body>
";
    }

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "nueva_pass/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 129,  207 => 128,  203 => 127,  198 => 126,  194 => 125,  178 => 111,  166 => 100,  162 => 98,  97 => 35,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nueva_pass/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\nueva_pass\\index.html.twig");
    }
}
