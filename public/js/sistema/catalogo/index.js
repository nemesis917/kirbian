$(document).ready(function(){

    $("#seleccion").change(function(){
        if ($(this).val() == "Seleccione...") {
            return false;
        } else {
            $.ajax({
                url: "../sistema/catalogo/valorGardiner",
                type: "post",
                dataType: "json",
                data: ({'id': $(this).val()}),
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (resultado) {

                    
                    for (let index = 0; index < resultado.length; index++) {
                        var carta ="";
                        for (let index = 0; index < resultado.length; index++) {
                            if (resultado[index].id == "") {
                                $("#guia").html("");
                            } else {
                            carta += '<div class="card float-left" style="width: 18rem;"><img src="../' + resultado[index].ruta_imagen + '" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' + resultado[index].gandiner + '</h5><p class="card-text">'+ resultado[index].transliteracion +'</p><a href="#" class="btn btn-primary">Saber más...</a>';
                            $("#guia").html(carta);    
                            }
                        }
                    }
                },
                error: function () {
                    alert("No");
        
                }
            });
        }
    });

    


});