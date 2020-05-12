$(".card").click(function() {

    //Obteniendo el nombre del archivo para editarlo
    var nombre = $(this).find("input:first-child").val();
    $("#input_nombre").val(nombre);

    //Obteniendo el ID del archivo
    var id_archivo = $(this).find("input:last-child").val();

    //Modificar archivo
    $("#editar_nombre").click(function () {
        var new_nombre =  $("#input_nombre").val();
        var ruta = Routing.generate('editar');
        $.ajax({
            type:'POST',
            url:ruta,
            data:({id:id_archivo,nombre:new_nombre}),
            async:true,
            dataType:"json",
            success: function (data) {
                window.location.reload();
            }
        });
    });

    //Párrafo de información al usuario
    $("#p_borrar").text("¿Desea eliminar "+nombre+"?");
    $("#p_comprimir").text("¿Desea comprimir "+nombre+"?");

    //Eliminar archivo
    $("#eliminar_nombre").click(function () {
        var ruta = Routing.generate('borrar');
        $.ajax({
            type:'POST',
            url:ruta,
            data:({id:id_archivo}),
            async:true,
            dataType:"json",
            success: function (data) {
                window.location.reload();
            }
        });
    });

    //Comprimiendo archivos
    $("#comprimir_nombre").click(function () {
        var ruta = Routing.generate('comprimir');
        $.ajax({
            type:'POST',
            url:ruta,
            data:({id:id_archivo}),
            async:true,
            dataType:"json",
            success: function (data) {
                window.location.reload();
            }
        });
    });
});

$(document).ready(function(){
    //Buscar archivo
    $("#buscar").on("keyup", function() {
        var archivo = $(this).val().toLowerCase();
        $(".card").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(archivo) > -1)
        });
    });

    //Volver arriba
    $("#home").click(function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600);
    });

    //Cambiar email
    $("#input_email").on("keyup",function () {
        $("#valido").css({display:"none"});
        $("#no_valido").css({display:"block"});
        var email = $(this).val();
        var exp = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
        if (exp.test(email) === true){
            email = $(this).val();
            var ruta = Routing.generate('email');
            $("#no_valido").css({display:"none"});
            $("#valido").css({display:"none"});
            $("#animacion").css({display:"block"});
            $.ajax({
                type:'POST',
                url:ruta,
                data:({email:email}),
                async:true,
                dataType:"json",
                success: function (data) {
                    if(data.email === 0){
                        $("#cambiar_email").hide();
                        $("#animacion").css({display:"none"});
                        $("#no_valido").css({display:"block"});
                        $("#valido").css({display:"none"});
                    }
                    else {
                        $("#animacion").css({display:"none"});
                        $("#no_valido").css({display:"none"});
                        $("#valido").css({display:"block"});
                        $("#cambiar_email").show();
                        $("#cambiar_email").click(function () {
                            var ruta = Routing.generate('c_email');
                            email = data.email;
                            $.ajax({
                                type:'POST',
                                url:ruta,
                                data:({email:email}),
                                async:true,
                                dataType:"json",
                                success: function (data) {
                                    window.location.reload();
                                }
                            });
                        });
                    }
                }
            });
        }
        else{
            $("#cambiar_email").hide();
            return false;
        }
    });

    //Cambiar nombre de usuario
    $("#input_usuario").on("keyup",function () {
        $("#valido_u").css({display:"none"});
        $("#no_valido_u").css({display:"block"});
        var usuario = $(this).val();
        var exp = new RegExp(/^([a-zA-Z0-9]{6,15})+$/);
        if (exp.test(usuario) === true){
            usuario = $(this).val();
            var ruta = Routing.generate('usuario');
            $("#no_valido_u").css({display:"none"});
            $("#valido_u").css({display:"none"});
            $("#animacion_u").css({display:"block"});
            $.ajax({
                type:'POST',
                url:ruta,
                data:({usuario:usuario}),
                async:true,
                dataType:"json",
                success: function (data) {
                    if(data.usuario === 0){
                        $("#cambiar_usuario").hide();
                        $("#animacion_u").css({display:"none"});
                        $("#no_valido_u").css({display:"block"});
                        $("#valido_u").css({display:"none"});
                    }
                    else {
                        $("#animacion_u").css({display:"none"});
                        $("#no_valido_u").css({display:"none"});
                        $("#valido_u").css({display:"block"});
                        $("#cambiar_usuario").show();
                        $("#cambiar_usuario").click(function () {
                            var ruta = Routing.generate('c_usuario');
                            usuario = data.usuario;
                            $.ajax({
                                type:'POST',
                                url:ruta,
                                data:({usuario:usuario}),
                                async:true,
                                dataType:"json",
                                success: function (data) {
                                    window.location.reload();
                                }
                            });
                        });
                    }
                }
            });
        }
        else{
            $("#cambiar_usuario").hide();
            return false;
        }
    });

    //Mostrar u ocultar contraseña

    $("#btn_pass1").click(function () {
       $("#show_icon_pass1").toggleClass("oculto");
       $("#hide_icon_pass1").toggleClass("oculto");
       if( $("#show_icon_pass1").hasClass("oculto")){
           $("#pass1").attr('type', 'text');
       }
       else{
           $("#pass1").attr('type', 'password');
       }
    });

    $("#btn_pass2").click(function () {
        $("#show_icon_pass2").toggleClass("oculto");
        $("#hide_icon_pass2").toggleClass("oculto");
        if( $("#show_icon_pass2").hasClass("oculto")){
            $("#pass2").attr('type', 'text');
        }
        else{
            $("#pass2").attr('type', 'password');
        }
    });

    //Cambiar contraseña
    $("#c_pass").click(function () {

        var pass1 = $("#pass1").val(); //Contraseña actual
        var pass2 = $("#pass2").val(); //Nueva contraseña
        var ruta = Routing.generate('pass');
        $.ajax({
            type:'POST',
            url:ruta,
            data:({pass:pass1}),
            async:true,
            dataType:"json",
            success: function (data) {

                if (data.pass === 0) {
                    $("#error_pass1").css({display:"flex"});
                    pass1 = "";
                    pass2 = "";
                }
                else {
                    if( pass1 !== pass2 && pass2.length >= 8){
                        var ruta2 = Routing.generate('c_pass');
                        $.ajax({
                            type:'POST',
                            url:ruta2,
                            data:({pass:pass2}),
                            async:true,
                            dataType:"json",
                            success: function (data) {
                                $("#pass_changed").css({display:"flex"});
                                pass1 = "";
                                pass2 = "";
                            }
                        });
                    }
                    else {
                        $("#error_pass1").css({display:"flex"});
                        pass1 = "";
                        pass2 = "";
                    }
                }
            }
        });
    });
});

