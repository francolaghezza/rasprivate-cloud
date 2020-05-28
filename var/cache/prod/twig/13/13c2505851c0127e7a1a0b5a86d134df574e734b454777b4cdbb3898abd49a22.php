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

/* reset_password/index.html.twig */
class __TwigTemplate_e9bdd61e4b14dc1e96b954cd8c9bccf5d7902f1e139ea8b75344655403815798 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Reset";
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

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
<body class=\"bg-dark\" style=\"overflow: hidden;\">

    ";
        // line 13
        echo "    <header class=\"row\">
        <div class=\"container mt-5\">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\">
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                <button class=\"navbar-toggler ml-auto\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <nav class=\"navbar-nav\">
                        <a href=\"/\" class=\"nav-link\">Home</a>
                        <a data-toggle=\"modal\" data-target=\"#privacidad\" title=\"Política de privacidad\" href=\"#\" class=\"nav-link\">Privacidad</a>
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

    <div class=\"container mt-5 text-white\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h3>Recupera tu contraseña</h3>

                    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulario"] ?? null), 'form_start');
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "email", [], "any", false, false, false, 42), 'row');
        echo "
                    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulario"] ?? null), 'form_end');
        echo "

                ";
        // line 46
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 46), "flashbag", [], "any", false, false, false, 46), "get", [0 => "enviado"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 47
            echo "                    <div class=\"alert alert-info alert-dismissible mx-auto mt-2 show fade\">
                        ";
            // line 48
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
        // line 54
        echo "
                ";
        // line 56
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 56), "flashbag", [], "any", false, false, false, 56), "get", [0 => "no_enviado"], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 57
            echo "                    <div class=\"alert alert-danger alert-dismissible mx-auto mt-2 show fade\">
                        ";
            // line 58
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
        // line 64
        echo "            </div>
        </div>
    </div>
    ";
        // line 68
        echo "    <section class=\"modal fade\" id=\"privacidad\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\"><strong>Política de Privacidad</strong></p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <p>El presente Política de Privacidad establece los términos en que Rasprivate Cloud
                        usa y protege la información que es proporcionada por sus usuarios al momento de
                        utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios.
                        Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado,
                        lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento.
                        Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le
                        recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.
                    </p>
                    <p>
                        <strong>Información que es recogida</strong>
                    </p>
                    <p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su
                        dirección de correo electrónico.</p>
                    <p>
                        <strong>Uso de la información recogida</strong>
                    </p>
                    <p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener
                        un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros servicios. &nbsp;
                    </p>
                    <p>Rasprivate Cloud está altamente comprometido para cumplir con el compromiso de mantener su información segura.
                        Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.
                    </p>
                    <p>
                        <strong>Enlaces a Terceros</strong>
                    </p>
                    <p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces
                        y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los
                        términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias
                        políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.
                    </p>
                    <p>
                        <strong>Control de su información personal</strong>
                    </p>
                    <p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido
                        por un juez con un orden judicial.
                    </p>
                    <p>Rasprivate Cloud Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.
                    </p>
                    <p>Esta politica de privacidad se han generado en
                        <a href=\"https://politicadeprivacidadplantilla.com/\" target=\"_blank\">politicadeprivacidadplantilla.com</a>.<br>
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <p>Rasprivate Cloud, 2020</p>
                </div>
            </div>
        </div>
    </section>
</body>
";
    }

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "reset_password/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 130,  241 => 129,  237 => 128,  232 => 127,  228 => 126,  167 => 68,  162 => 64,  150 => 58,  147 => 57,  142 => 56,  139 => 54,  127 => 48,  124 => 47,  119 => 46,  114 => 43,  110 => 42,  106 => 41,  76 => 13,  71 => 9,  67 => 8,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\reset_password\\index.html.twig");
    }
}
