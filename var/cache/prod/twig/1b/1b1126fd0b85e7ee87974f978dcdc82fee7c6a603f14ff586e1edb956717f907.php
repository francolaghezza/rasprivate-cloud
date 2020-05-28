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
class __TwigTemplate_8eb7373aa533be69712156e88b9ed9f208ed0c698666b1dc1a6ecaebb43cb6d8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registro/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Registrarse";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<body class=\"registro\">
";
        // line 8
        echo "<header class=\"row\">
\t<div class=\"container mt-5\">
\t\t<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
\t\t\t<a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
\t\t\t<button class=\"navbar-toggler ml-auto btn-responsive\" data-toggle=\"collapse\" data-target=\"#menu\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"menu\">
\t\t\t\t<nav class=\"navbar-nav\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Home</a>
\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#privacidad\" title=\"Política de privacidad\" href=\"#\" class=\"nav-link\">Privacidad</a>
\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Manual del usuario</a>
\t\t\t\t</nav>
\t\t\t\t";
        // line 22
        echo "\t\t\t\t<form class=\"form-inline ml-auto\">
\t\t\t\t\t<a class=\"btn bg-light btn-md mr-2 redondo\" href=\"/login\">Login</a>
\t\t\t\t\t<a class=\"btn bg-light btn-md redondo\" href=\"/registro\">Registro</a>
\t\t\t\t</form>
\t\t\t</div>
\t\t</nav>
\t</div>
</header>
";
        // line 31
        echo "<section class=\"modal fade\" id=\"privacidad\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<p class=\"modal-title\"><strong>Política de Privacidad</strong></p>
\t\t\t\t<button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p>El presente Política de Privacidad establece los términos en que Rasprivate Cloud
\t\t\t\t\tusa y protege la información que es proporcionada por sus usuarios al momento de
\t\t\t\t\tutilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios.
\t\t\t\t\tCuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado,
\t\t\t\t\tlo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento.
\t\t\t\t\tSin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le
\t\t\t\t\trecomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Información que es recogida</strong>
\t\t\t\t</p>
\t\t\t\t<p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su
\t\t\t\t\tdirección de correo electrónico.</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Uso de la información recogida</strong>
\t\t\t\t</p>
\t\t\t\t<p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener
\t\t\t\t\tun registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros servicios. &nbsp;
\t\t\t\t</p>
\t\t\t\t<p>Rasprivate Cloud está altamente comprometido para cumplir con el compromiso de mantener su información segura.
\t\t\t\t\tUsamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Enlaces a Terceros</strong>
\t\t\t\t</p>
\t\t\t\t<p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces
\t\t\t\t\ty abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los
\t\t\t\t\ttérminos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias
\t\t\t\t\tpolíticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Control de su información personal</strong>
\t\t\t\t</p>
\t\t\t\t<p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido
\t\t\t\t\tpor un juez con un orden judicial.
\t\t\t\t</p>
\t\t\t\t<p>Rasprivate Cloud Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.
\t\t\t\t</p>
\t\t\t\t<p>Esta politica de privacidad se han generado en
\t\t\t\t\t<a href=\"https://politicadeprivacidadplantilla.com/\" target=\"_blank\">politicadeprivacidadplantilla.com</a>.<br>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<p>Rasprivate Cloud, 2020</p>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
        // line 89
        echo "<div class=\"container mt-5\">
\t<div class=\"row justify-content-center align-items-center\">
\t\t<div class=\"col-md-6\">
\t\t\t<h1 class=\"h3 mb-3 font-weight-normal text-center\">Crea una cuenta</h1>

\t\t\t";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulario"] ?? null), 'form_start');
        echo "

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<small class=\"text-danger oculto\" id=\"email_no_valido\">La dirección de correo ya existe</small>
\t\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "email", [], "any", false, false, false, 99), 'row');
        echo "


\t\t\t\t\t<small class=\"text-danger oculto\" id=\"usuario_no_valido\">El nombre de usuario ya existe</small>
\t\t\t\t\t";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "usuario", [], "any", false, false, false, 103), 'row');
        echo "

\t\t\t\t\t";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "password", [], "any", false, false, false, 105), 'row');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-check mb-2\">
\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" required>
\t\t\t\t<label class=\"form-check-label\" for=\"exampleCheck1\">Acepto la <strong><a data-toggle=\"modal\" data-target=\"#privacidad\" title=\"Política de privacidad\" href=\"#\" class=\"text-dark text-decoration-none\">Política de privacidad</a></strong></label>
\t\t\t</div>

\t\t\t";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulario"] ?? null), 'form_end');
        echo "
\t\t</div>
\t</div>
\t<a class=\"ref\"
\t   href=\"https://unsplash.com/@vinhan?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge\"
\t   target=\"_blank\" rel=\"noopener noreferrer\" title=\"Autor: An Tran\">
                        <span style=\"display:inline-block;padding:2px 3px\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white\" viewBox=\"0 0 32 32\">
                                <title>unsplash-logo</title>
                                <path d=\"M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z\"></path>
                            </svg>
                        </span>
\t\t<span style=\"display:inline-block;padding:2px 3px\">An Tran</span>
\t</a>
</div>
</body>
";
    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "\t ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
\t <script src=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
\t <script>
\t\t \$( document ).ready(function() {

\t\t \t//Compruebo email
\t\t \t\$(\"#usuario_email\").on(\"keyup\",function () {
\t\t\t\tvar email = \$(this).val();
\t\t\t\tvar exp = new RegExp(/^([a-zA-Z0-9_.+-])+\\@(([a-zA-Z0-9-])+\\.)+([a-zA-Z0-9]{2,4})+\$/);
\t\t\t\tif (exp.test(email) === true) {
\t\t\t\t\temail = \$(this).val();
\t\t\t\t\tvar ruta = Routing.generate('email');
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\ttype:'POST',
\t\t\t\t\t\turl:ruta,
\t\t\t\t\t\tdata:({email:email}),
\t\t\t\t\t\tasync:true,
\t\t\t\t\t\tdataType:\"json\",
\t\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\t\tif(data.email === 0){
\t\t\t\t\t\t\t\t\$(\"#email_no_valido\").toggleClass(\"oculto\");
\t\t\t\t\t\t\t\t\$(\"#usuario_Registrar\").prop('disabled', true);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\t\$(\"#email_no_valido\").addClass(\"oculto\");
\t\t\t\t\t\t\t\tif(\$(\"#usuario_no_valido\").hasClass(\"oculto\")){
\t\t\t\t\t\t\t\t\t\$(\"#usuario_Registrar\").prop('disabled', false);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t// NO hacer nada
\t\t\t\t}
\t\t\t});

\t\t \t//Compruebo nombre de usuario
\t\t \t\$(\"#usuario_usuario\").on(\"keyup\",function () {
\t\t\t\tvar nombre_usuario = \$(this).val();
\t\t\t\tvar exp = new RegExp(/^([a-zA-Z0-9]{5,15})+\$/);
\t\t\t\tif (exp.test(nombre_usuario) === true){
\t\t\t\t\tnombre_usuario = \$(this).val();
\t\t\t\t\tvar ruta = Routing.generate('usuario');
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\ttype:'POST',
\t\t\t\t\t\turl:ruta,
\t\t\t\t\t\tdata:({usuario:nombre_usuario}),
\t\t\t\t\t\tasync:true,
\t\t\t\t\t\tdataType:\"json\",
\t\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\t\tif(data.usuario === 0){
\t\t\t\t\t\t\t\t\$(\"#usuario_no_valido\").removeClass(\"oculto\");
\t\t\t\t\t\t\t\t\$(\"#usuario_Registrar\").prop('disabled', true);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\t\$(\"#usuario_no_valido\").addClass(\"oculto\");
\t\t\t\t\t\t\t\tif(\$(\"#email_no_valido\").hasClass(\"oculto\")){
\t\t\t\t\t\t\t\t\t\$(\"#usuario_Registrar\").prop('disabled', false);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\telse{
\t\t\t\t\t// NO hacer nada
\t\t\t\t}
\t\t\t});
\t\t });
\t </script>
 ";
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
        return array (  218 => 133,  214 => 132,  209 => 131,  205 => 130,  184 => 113,  173 => 105,  168 => 103,  161 => 99,  153 => 94,  146 => 89,  87 => 31,  77 => 22,  62 => 8,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registro/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\registro\\index.html.twig");
    }
}
