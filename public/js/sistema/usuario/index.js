$(document).on('click', '#eliminar', function(){
    var val = confirm("¿Seguro que desea eliminar a este usuario del sistema?");
    if (val == false) {
        return false;
    }
});

$(document).on('click', '#clave', function(){
   var valor = prompt("Ingrese su nueva contraseña");
   if(valor == null){
        return false;
   } else {
        $.ajax({
        //url: "http://192.168.1.150/kirbian/public/sistema/usuario/cambiar-clave",
        url: "../sistema/usuario/cambiar-clave",
        type: "post",
        dataType: "json",
        data: ({'id': $(this).val(), 'clave': valor}),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (resultado) {
            alert("Se ha realizado el cambio de clave satisfactoriamente");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("No se pido cambiar la clave");

        }
        });
   }
});

