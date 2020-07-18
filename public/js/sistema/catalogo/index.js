$(document).ready(function(){

    $("#invisible").hide();

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
        $.ajax({
            url: "../sistema/jeroglifico/verJeroglifico",
            type: "post",
            dataType: "json",
            data: {'id': $(this).val()},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (resultado) {

                $("#img0").attr("src","../system/no-foto.jpg");
                $("#img1").attr("src","../system/no-foto.jpg");
                $("#img2").attr("src","../system/no-foto.jpg");
                $("#gandiner").html("");
                $("#trasliteracion").html("");
                $("#significado").html("");
                $("#descripcion").html("");


                for (let index = 0; index < resultado[1].length; index++) {
                    $("#img" + index).attr("src","../" + resultado[1][index].ruta_imagen);
                }

                $("#gandiner").html(resultado[0][0].gandiner);
                $("#trasliteracion").html(resultado[0][0].transliteracion);
                $("#significado").html(resultado[0][0].significado);
                $("#descripcion").html(resultado[0][0].descripcion);



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

    $(document).on('click', '#editar', function(){
        
        $.ajax({
            url: "../sistema/jeroglifico/modificar",
            type: "post",
            dataType: "json",
            data: {'id': $(this).val()},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (resultado) {
                console.log(resultado[2]);
                $("#gandiner").attr("value", "");
                $("#trasliteracion").attr("value", "");
                $("#significado").attr("value", "");
                $("#descripcion").attr("value", "");
                //$("#seleccion1").attr("selected", "");
                $("#mod1").attr("src", "../system/no-foto.jpg");
                $("#mod2").attr("src", "../system/no-foto.jpg");
                $("#mod3").attr("src", "../system/no-foto.jpg");
                $("#invisible").hide();

                $("#gandiner1").attr("value", resultado[0][0].gandiner);
                $("#transliteracion1").attr("value", resultado[0][0].transliteracion);
                $("#significado1").attr("value", resultado[0][0].significado);
                $("#mensajeDescripcion").html(resultado[0][0].descripcion);
                $("#id").attr("value", resultado[0][0].id);

                for (let index = 0; index < resultado[2].length; index++) {
                    if (resultado[0][0].catalogo_id == resultado[2][index].id) {
                        $("#seleccion1-" + resultado[0][0].catalogo_id).attr("selected","selected");
                    }
                }

                for (let i = 0; i < resultado[1].length; i++) {
                    $("#mod" + i).attr("src","../" +resultado[1][i].ruta_imagen);
                    $("#borrar" + i).attr("value", resultado[1][i].id);

                }





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

        $(document).on('click', '#mostrarFoto', function(){
            $("#invisible").show();
        });

        $(document).on('change', '#imagenA', function(){
            var archivo = $("#imagenA").val();
            var extensiones = archivo.substring(archivo.lastIndexOf("."));  

            if(extensiones != ".jpg" && extensiones != ".png")
            {
                alert('El archivo de tipo ' + extensiones + ' no es válido');
                $("#imagenA").val("");
                return false;
            }
        });

        $(document).on('change', '#imagenB', function(){
            var archivo = $("#imagenB").val();
            var extensiones = archivo.substring(archivo.lastIndexOf("."));  

            if(extensiones != ".jpg" && extensiones != ".png")
            {
                alert('El archivo de tipo ' + extensiones + ' no es válido');
                $("#imagenB").val("");
                return false;
            }
        });

        $(document).on('change', '#imagenC', function(){
            var archivo = $("#imagenC").val();
            var extensiones = archivo.substring(archivo.lastIndexOf("."));  

            if(extensiones != ".jpg" && extensiones != ".png")
            {
                alert('El archivo de tipo ' + extensiones + ' no es válido');
                $("#imagenC").val("");
                return false;
            }
        });

    });


    $(document).on('change', '#imagen1', function(){
        var archivo = $("#imagen1").val();
        var extensiones = archivo.substring(archivo.lastIndexOf("."));  
        if(extensiones != ".jpg" && extensiones != ".png")
        {
            alert('El archivo de tipo ' + extensiones + ' no es válido');
            $("#imagen1").val("");
            return false;
        }
    });

    $(document).on('change', '#imagen2', function(){
        var archivo = $("#imagen2").val();
        var extensiones = archivo.substring(archivo.lastIndexOf("."));  
        if(extensiones != ".jpg" && extensiones != ".png")
        {
            alert('El archivo de tipo ' + extensiones + ' no es válido');
            $("#imagen2").val("");
            return false;
        }
    });

    $(document).on('change', '#imagen3', function(){
        var archivo = $("#imagen3").val();
        var extensiones = archivo.substring(archivo.lastIndexOf("."));  
        if(extensiones != ".jpg" && extensiones != ".png")
        {
            alert('El archivo de tipo ' + extensiones + ' no es válido');
            $("#imagen3").val("");
            return false;
        }
    });

    $(document).on('click', '#borrar1' , function(){
        var valida = confirm("¿Seguro desea eliminare sta imagen?");
        if (valida == false) {
            return false;
        }
        $.ajax({
            url: "../sistema/jeroglifico/foto-estandar",
            type: "post",
            dataType: "json",
            data: {'id': $(this).val()},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (resultado) {
                $('#mod1').attr('src', '../system/no-foto.jpg');
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

    $(document).on('click', '#borrar2' , function(){
        var valida = confirm("¿Seguro desea eliminare sta imagen2?");
        if (valida == false) {
            return false;
        }

        $.ajax({
            url: "../sistema/jeroglifico/foto-estandar",
            type: "post",
            dataType: "json",
            data: {'id': $(this).val()},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (resultado) {
                $('#mod2').attr('src', '../system/no-foto.jpg');
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

    $(document).on('click', '#eliminarJero', function(){
        var validar = confirm("¿Esta seguro de querer eliminar este Jeroglífico?");
        if (validar == false) {
            return false;
        }
        $.ajax({
            url: "../sistema/jeroglifico/desactivarJeroglifico",
            type: "post",
            dataType: "json",
            data: {'id': $(this).val()},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (resultado) {
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
                        <button type="button" class="btn btn-sm btn-outline-secondary" value="${id}" title="Consultar un jeroglífico" data-toggle="modal" id="ver" data-target="#consultar">
                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" value="${id}" title="Modificar un jeroglífico" data-toggle="modal" id="editar" data-target="#modificar">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" value="${id}" title="Eliminar un jeroglífico" id="eliminarJero">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" value="${id}" title="Consultar los comentarios">
                            Comentarios
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
};