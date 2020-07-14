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
                    $("#guia").html("")
                    console.log(resultado)
                    $.each(resultado, function(index, val) {
                         /* iterate through array or object */
                        let catalogo= templateCatalogo(val)
                        $("#guia").append(catalogo);
                    });
                    // for (let index = 0; index < resultado.length; index++) {
                    //     var carta ="";
                    //     for (let index = 0; index < resultado.length; index++) {
                    //         if (resultado[index].id == "") {
                    //             $("#guia").html("");
                    //         } else {
                    //             carta += '<div class="card float-left" style="width: 18rem;"><img src="../' + resultado[index].ruta_imagen + '" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' + resultado[index].gandiner + '</h5><p class="card-text">'+ resultado[index].transliteracion +'</p><a href="#" class="btn btn-primary">Saber más...</a>';
                    //             $("#guia").html(carta);    
                    //         }
                    //     }
                    // }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR)
                    let msg = jqXHR.responseJSON.message;
                    let responseText = jqXHR.responseText;
                    console.log(msg)
                    console.log(responseText)
                    // console.log(textStatus)
                    // console.log(errorThrown)
                    alert("No");
                }
            });
        }
    });

    


});


function templateCatalogo(catalogoItem){
    /*
        catalogo_id: 78
        gandiner: "prueba-nacho"
        id: 2
        ruta_imagen: "imagenes/catalogo/78/440-jero-78-371.png"
        transliteracion: "prueba-nacho"
    */
   let catalogo_id = catalogoItem.catalogo_id;
   let gandiner = catalogoItem.gandiner;
   let id = catalogoItem.id;
   let ruta_imagen = catalogoItem.ruta_imagen;
   let transliteracion = catalogoItem.transliteracion;
    return `
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="../${ruta_imagen}" class="img-fluid size-img-catalogo" alt="Imagenes de Catalogo - ${gandiner}">
            <div class="card-body">
                <p class="card-text">${transliteracion}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
        </div>
    </div>
    `;
};