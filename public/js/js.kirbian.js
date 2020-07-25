$(document).ready(function(){

    $("#seleccion").change(function(){
        if ($(this).val() == "Seleccione...") {
            return false;
        } else {
            $.ajax({
                url: "catalogo-general",
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
            <img src="${ruta_imagen}" class="img-fluid size-img-catalogo" alt="Imagenes de Catalogo - ${gandiner}">
            <div class="card-body">
                <div class="box-flex">   
                    <div class="gandiner-title">Gandiner:</div>
                    <div class="gandiner-value">${gandiner}</div>
                </div>
                <div class="box-flex">   
                    <div class="gandiner-title">Transliteracion:</div>
                    <div class="gandiner-value">${transliteracion}</div>
                </div>
                <div class="d-flex btn-group-catalogo">
                    <div class="btn-group">
                        <a href="">
                            <button type="button" class="btn btn-sm btn-outline-secondary" value="${id}" title="Consultar los comentarios">
                                Comentarios
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
};