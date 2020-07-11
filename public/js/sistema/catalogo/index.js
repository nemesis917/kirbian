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
                    alert("Si");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert("No");
        
                }
            });
        }
    });

    


});