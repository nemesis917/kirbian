$(document).ready(function(){

    $(document).on('click', '#comentAceptar', function(){

        $.ajax({
            url: "../aprobar-comentario",
            type: "post",
            dataType: "json",
            data: {'id': $(this).val()},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (resultado) {
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // console.log(jqXHR)
                // let msg = jqXHR.responseJSON.message;
                // let responseText = jqXHR.responseText;
                // console.log(msg)
                // console.log(responseText)
                // console.log(textStatus)
                // console.log(errorThrown)
                alert("Su solicitud no se procesó desde javascript");
            }
        });
        
    });

    $(document).on('click', '#comentCancelar', function(){

        var pregunta = confirm("¿Esta seguro de querer comentario? esta opción no puede ser reversada");
        if (pregunta != true) {
            return false;
        }
        $.ajax({
            type: "post",
            url: "../eliminar-comentario",
            data: {'id': $(this).val()},
            dataType: "json",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (resp) {
                alert("Se ha eliminado el comentario.");
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR)
                let msg = jqXHR.responseJSON.message;
                let responseText = jqXHR.responseText;
                console.log(msg)
                console.log(responseText)
                // console.log(textStatus)
                // console.log(errorThrown)
                alert("Su solicitud no se procesó desde javascript");
            }
        });
    });

    $(document).on("click", "#montrarFP", function(){
        $.ajax({
            type: "post",
            url: "../cambiar-paleografica",
            data: {'id': $(this).val()},
            dataType: "json",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (response) {
                location.reload();
            }, error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR)
                let msg = jqXHR.responseJSON.message;
                let responseText = jqXHR.responseText;
                console.log(msg)
                console.log(responseText)
                // console.log(textStatus)
                // console.log(errorThrown)
                alert("Su solicitud no se procesó desde javascript");
            }
        });
    });

    $(document).on("click", "#borrarFP", function(){
        $.ajax({
            type: "post",
            url: "../borrar-paleografica",
            data: {'id': $(this).val()},
            dataType: "json",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (response) {
                location.reload();
            }, error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR)
                let msg = jqXHR.responseJSON.message;
                let responseText = jqXHR.responseText;
                console.log(msg)
                console.log(responseText)
                // console.log(textStatus)
                // console.log(errorThrown)
                alert("Su solicitud no se procesó desde javascript");
            }
        });
    });



});