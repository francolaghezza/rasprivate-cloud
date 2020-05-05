$("table tbody tr").click(function() {

    //Obteniendo el nombre del archivo para editarlo
    var nombre = $(this).find("td:first-child").text();
    $("#input_nombre").val(nombre);

    //Obteniendo el ID del archivo
    var id_archivo = $(this).find("input:first-child").val();

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
        $("#archivos tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(archivo) > -1)
        });
    });

    //Volver arriba
    $("#home").click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600);
    });


});

