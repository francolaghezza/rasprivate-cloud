$("table tbody tr").click(function() {

    var nombre = $(this).find("td:first-child").text();
    $("#input_nombre").val(nombre);

    var id_archivo = $(this).find("input:first-child").val();
    var parrafo = "<p>¿Desea eliminar "+nombre+"?</p>";
    $("#nombre_archivo").append(parrafo);
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
                console.log(data['nombre']);
                window.location.reload();
            }
        });
    });
    $("#eliminar_nombre").click(function () {
        //Nombre del archivo a eliminar

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
});


