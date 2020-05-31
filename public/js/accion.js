$(function() {
    $(".dropdown-menu").click(function() {

        //Obteniendo el nombre del archivo para editarlo
        var nombre = $(this).find("input:first-child").val();
        $("#input_nombre").val(nombre);

        //Obteniendo el ID del archivo
        var id_archivo = $(this).find("input:last-child").val();

        //Editar archivo
        $("#editar_nombre").click(function () {
            $("#editar").modal('hide');
            $("#editando").modal('show');
            var new_nombre =  $("#input_nombre").val();
            var ruta = Routing.generate('editar');

            $.ajax({
                type:'POST',
                url:ruta,
                data:({id:id_archivo,nombre:new_nombre}),
                async:true,
                dataType:"json",
                success: function (data) {
                    $("#editando").modal('hide');
                    window.location.reload();
                }
            });
        });

        //Párrafo de información al usuario
        $("#p_borrar").text("¿Desea eliminar "+nombre+"?");
        $("#p_comprimir").text("¿Desea comprimir "+nombre+"?");
        $("#p_restaurar").text("¿Desea restaurar "+nombre+"?");
        $("#p_analizar").text("Se analizará "+nombre+" en busca de malware");
        $("#p_borrar_definitivo").text("Se eliminará "+nombre+" definitivamente");

        //Mover archivo a la papelera
        $("#eliminar_nombre").click(function () {
            $("#borrar").modal('hide');
            $("#eliminando").modal('show');
            var ruta = Routing.generate('borrar');
            $.ajax({
                type:'POST',
                url:ruta,
                data:({id:id_archivo}),
                async:true,
                dataType:"json",
                success: function (data) {
                    $("#eliminando").modal('hide');
                    window.location.reload();
                }
            });
        });

        //Restaurar archivo
        $("#restaurar_nombre").click(function () {
            $("#restaurar").modal('hide');
            $("#papelera").modal('hide');
            $("#restaurando").modal('show');
            var ruta = Routing.generate('restaurar');
            $.ajax({
                type:'POST',
                url:ruta,
                data:({id:id_archivo}),
                async:true,
                dataType:"json",
                success: function (data) {
                    $("#restaurando").modal('hide');
                    window.location.reload();
                }
            });
        });

        //Eliminar archivo definitivamente
        $("#borrar_archivo_definitivo").click(function () {
            $("#borrar_definitivo").modal('hide');
            $("#papelera").modal('hide');
            $("#eliminando").modal('show');
            var ruta = Routing.generate('definitivo');
            $.ajax({
                type:'POST',
                url:ruta,
                data:({id:id_archivo}),
                async:true,
                dataType:"json",
                success: function (data) {
                    $("#eliminando").modal('hide');
                    window.location.reload();
                }
            });
        });

        //Analizar archivo
        $("#analizar_nombre").click(function () {
            $("#analizar").modal('hide');
            $("#escaneando").modal('show');
            var ruta = Routing.generate('analizar');
            $.ajax({
                type:'POST',
                url:ruta,
                data:({id:id_archivo}),
                async:true,
                dataType:"json",
                success: function (data) {

                    $("#escaneando").modal('hide');
                    $('#redirigiendo').modal('show');
                    var link = data.link;
                    var recurso = data.analisis;
                    var nueva_ruta = Routing.generate('report');
                    if(recurso.length > 0){
                        $.ajax({
                            type:'POST',
                            url:nueva_ruta,
                            data:({report:recurso}),
                            async:true,
                            dataType:"json",
                            success: function (data) {
                                $('#redirigiendo').modal('hide');
                                window.location.reload();
                                window.open(link, '_blank');
                            }
                        });
                    }
                }
            });
        });

        //Comprimiendo archivos
        $("#comprimir_nombre").click(function () {
            $('#comprimir').modal('hide');
            $('#comprimiendo').modal('show');
            var ruta = Routing.generate('comprimir');
            $.ajax({
                type:'POST',
                url:ruta,
                data:({id:id_archivo}),
                async:true,
                dataType:"json",
                success: function (data) {
                    $('#comprimiendo').modal('hide');
                    window.location.reload();
                }
            });
        });

        //Compartir archivo
        $("#compartir_archivo").click(function () {
            var email = $("#compartir_nombre").val();
            var mensaje = $("#compartir_mensaje").val();
            var exp = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
            if (exp.test(email) === true) {
                $('#compartir').modal('hide');
                $('#compartiendo').modal('show');
                var ruta = Routing.generate('compartir');
                $.ajax({
                    type:'POST',
                    url:ruta,
                    data:({id:id_archivo,email:email,mensaje:mensaje}),
                    async:true,
                    dataType:"json",
                    success: function (data) {
                        $('#compartiendo').modal('hide');
                        window.location.reload();
                    }
                });
            }
            else {
                // No enviar nada
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
        let email = $(this).val();
        var exp = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
        if (exp.test(email) === true){
            let email = $(this).val();
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
        let usuario = $(this).val();
        var exp = new RegExp(/^([a-zA-Z0-9]{6,15})+$/);
        if (exp.test(usuario) === true){
            let usuario = $(this).val();
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
           $("#new_pass1").attr('type', 'text');
       }
       else{
           $("#pass1").attr('type', 'password');
           $("#new_pass1").attr('type', 'password');
       }
    });

    $("#btn_pass2").click(function () {
        $("#show_icon_pass2").toggleClass("oculto");
        $("#hide_icon_pass2").toggleClass("oculto");
        if( $("#show_icon_pass2").hasClass("oculto")){
            $("#pass2").attr('type', 'text');
            $("#new_pass2").attr('type', 'text');
        }
        else{
            $("#pass2").attr('type', 'password');
            $("#new_pass2").attr('type', 'password');
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

    //Establecer contraseña
    $("#establecer").click(function () {

        var new_pass1 = $("#new_pass1").val();
        var new_pass2 = $("#new_pass2").val();
        var token = $("#token").val();
        if(new_pass1.length >= 8 && new_pass2.length >= 8 && new_pass1 === new_pass2){
            var ruta = Routing.generate('newpass');
            $.ajax({
                type:'POST',
                url:ruta,
                data:({pass1:new_pass1,pass2:new_pass2,token:token}),
                async:true,
                dataType:"json",
                success: function (data) {
                    $("#new_pass_ok").removeClass("oculto");
                }
            });
        }
        else if(new_pass1.length < 8 || new_pass2.length < 8){
            //No realizar ninguna acción
        }
        else{
            $("#new_pass_error").removeClass("oculto");
        }
    });

    //Eliminar cuenta
    $("#btn_pass3").click(function () {
        $("#show_icon_pass3").toggleClass("oculto");
        $("#hide_icon_pass3").toggleClass("oculto");
        if( $("#show_icon_pass3").hasClass("oculto")){
            $("#pass3").attr('type', 'text');
        }
        else{
            $("#pass3").attr('type', 'password');
        }
    });

    $("#eliminar").click(function () {

        var pass_eliminar = $("#pass3").val();
        var usuario_eliminar = $("#usuario_eliminar").val();
        var usuario_id = $("#usuario_id").val();

        if(pass_eliminar.length > 0){
            var ruta = Routing.generate('pass');
            $.ajax({
                type:'POST',
                url:ruta,
                data:({pass:pass_eliminar}),
                async:true,
                dataType:"json",
                success: function (data) {
                    if (data.pass === 0) {
                        $("#eliminar_cuenta").modal('hide');
                        $("#error_cuenta").css({display:"flex"});
                    }
                    else {
                        var ruta2 = Routing.generate('e_user');
                        $.ajax({
                            type:'POST',
                            url:ruta2,
                            data:({usuario_id:usuario_id,usuario:usuario_eliminar}),
                            async:true,
                            dataType:"json",
                            success: function (data) {
                                //location = "http://127.0.0.1:8000/logout";
                                location = 'http://www.rasprivate.es/logout';
                            }
                        });
                    }
                }
            });
        }
    });
});