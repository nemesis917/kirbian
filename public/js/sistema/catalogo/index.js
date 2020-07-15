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


    $(document).on('click', '#ver', function(){
        console.log($(this).val());

        $.ajax({
            url: "../sistema/catalogo/verJeroglifico",
            type: "post",
            dataType: "json",
            data: {'id': $(this).val()},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (resultado) {
                console.log(resultado)
                // $("#guia").html("")
                // console.log(resultado)
                // $.each(resultado, function(index, val) {
                //      /* iterate through array or object */
                //     let catalogo= templateCatalogo(val)
                //     $("#guia").append(catalogo);
                // });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR)
                let msg = jqXHR.responseJSON.message;
                let responseText = jqXHR.responseText;
                console.log(msg)
                console.log(responseText)
                // console.log(textStatus)
                // console.log(errorThrown)
                alert("No de ver");
            }
        });
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
                <p class="card-text">Gandiner: <h3><b>${gandiner}</b></h3></p>
                <p class="card-text">Transliteracion: ${transliteracion}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary" value="${id}"  data-toggle="modal" id="ver" data-target="#consultar">Consultar</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" value="${id}">Editar</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" value="${id}">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
};