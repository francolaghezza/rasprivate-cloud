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
class __TwigTemplate_add7581b58b1e0f07b247e60d91c9c57ff188bb8529382f2848926bd4331622c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Rasprivate";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
<main class=\"container-fluid\">
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
    <!-- Portada -->
    <div class=\"container-fluid mt-4\">
        <div class=\"row bg-transparent\">
            <div class=\"col bg-transparent fondo\">
                <div class=\"jumbotron bg-transparent\">
                    <h1 class=\"mt-4\">El almacenamiento libre</h1>
                    <p class=\"lead\">Guarda tus archivos de forma segura y totalmente anónima accediendo desde cualquier dispositivo</p>
                    <button class=\"btn btn-secondary redondo\">Cómo funciona</button>
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
    ";
        // line 93
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
</main>

";
        // line 152
        echo "<footer class=\"footer text-center bg-dark text-white\">
    <span>Rasprivate Cloud 2020</span>
</footer>

";
    }

    // line 157
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  234 => 159,  229 => 158,  225 => 157,  217 => 152,  157 => 93,  71 => 8,  67 => 7,  60 => 5,  56 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\index\\index.html.twig");
    }
}
