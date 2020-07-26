@extends('layouts.app')
@push('styles-remking')
    <link rel="stylesheet" href="{{ asset('css/comentario.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
@endpush

@push('script-catalogo-remking')
    <script src="{{ asset('js/sistema/catalogo/comentario.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js" ></script>
    <script>
         (function($){
            $(window).on("load",function(){
                $(".rk-scroll").mCustomScrollbar();
            });
        })(jQuery);
    </script>
@endpush
@section('content')

<div class="container">
    <div class="box-comments">
        <div class="row">
            <div class="col-md-5">
                <h4 class="text-center">Datos del jeroglífico</h4>
                <div class="box-hieroglyphics">
                    @foreach ($imagen as $img)
                        <img class="img-fluid" src="{{ url($img->ruta_imagen) }}" >
                    @endforeach
                </div>      
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Gandiner: </td><td>{{ $jero->gandiner }}</td>
                        </tr>
                        <tr>
                            <td>Transliteración: </td><td><div class="transliteration"> {{ $jero->transliteracion }}</div></td>
                        </tr>
                        <tr>
                            <td>Significado: </td><td><div class="prueba">{{ $jero->significado }}</div></td>
                        </tr>
                        <tr>
                            <td>Descripción: </td><td>{{ $jero->descripcion }}</td>
                        </tr>
                        <tr>
                            <td>Comentario: </td><td>{{ $jero->comentario }}</td>
                        </tr>
                    </table>

                    @if(\Auth::user())
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6"><button data-toggle="modal" data-target="#cargarComentario" class=" btn btn-warning btn-lg btn-block" style="font-size: 12px; margin:5px;">Cargar un comentario</button></div>
                            <div class="col-md-6"><button data-toggle="modal" data-target="#cargarFp" class=" btn btn-warning btn-lg btn-block" style="font-size: 12px; margin:5px;">Cargar fuente paleográfica</button></div>
                        </div>
                    </div>   
                    @endif

                </div>
            
                















            </div>
            <div class="col-md-7">
                <h4 class="text-center"> Fuentes paleográficas</h4>
                <div id="fp" class="rk-scroll">
                    @foreach ($fuentes as $f)
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ url($f->ruta_img_jero) }}" id="escala" class="img-fluid rounded">   
                        </div>
                        <div id="texto">
                            <h6>rosman.gonzalez@jhcpconstruccion.com</h6>
                            <h6>Rosman Gonzalez</h6>

                            <div class="d-flex btn-group-fuentes-paleografica ">
                                <div class="btn-group">
                                @if ($f->visibilidad == 0)
                                    <button type="button" class="btn btn-sm btn-outline-secondary" value="{{ $f->id }}" title="Mostrar al público" data-toggle="modal" id="montrarFP" data-target="#consultar">
                                        s
                                    </button>  
                                @else
                                    <button type="button" class="btn btn-sm btn-outline-secondary" value="{{ $f->id }}" title="Mostrar al público" data-toggle="modal" id="montrarFP" data-target="#consultar">
                                        c
                                    </button>                                  
                                @endif
                                    <button type="button" class="btn btn-sm btn-outline-secondary" value="{{ $f->id }}" title="Eliminar esta fuente paleográfica" data-toggle="modal" id="borrarFP" data-target="#modificar">
                                        n
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                    <h4 class="text-center">Comentarios del jeroglífico {{ $jero->gandiner }}</h4>
                    <div id="listado" class="rk-scroll">
                        @foreach ($coment as $c)
                            <div class="row">
                                <div class="col-md-3" id="img1">
                                    <img src="../../../system/coment.png" id="imgComent" class="img-fluid">
                                    <div id="botonesComentario">
                                        @if ($c->visibilidad == 1)
                                        <button type="button" id="comentAceptar"  value="{{ $c->id }}" class="btn btn-warning btn-sm">C</button>
                                        @else
                                        <button type="button" id="comentAceptar" value="{{ $c->id }}" class="btn btn-success btn-sm">A</button>
                                        @endif
                                        <button type="button" id="comentCancelar" value="{{ $c->id }}" class="btn btn-danger btn-sm">B</button>
                                    </div>
                                </div>
                                <div class="col-md-9">{{ $c->comentario }}<div id="footer">{{ $c->nombre }}<br>{{ $c->correo }}</div></div>
                                
                            </div>
                            <hr>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>


<!-- comentario -->
<div class="modal fade" id="cargarComentario" tabindex="-1" role="dialog" aria-labelledby="cargarComentarioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cargarComentarioLabel">Indique su comentario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('sistema.comentario.crearComentario', $id) }}" method="post">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label>Ingrese su comentario</label>
                <textarea name="subirComentario" class="form-control" id="subirComentario" placeholder="máximo, 1200 caracteres"></textarea>
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <input type="submit" class="btn btn-primary" value="Guardar comentario">
            </div>

        </div>
        </form>
        </div>
    </div>
</div>

<!-- Fuente paleografica -->
<div class="modal fade" id="cargarFp" tabindex="-1" role="dialog" aria-labelledby="cargarFpLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cargarFpLabel">Cargar fuente paleográfica</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('sistema.comentario.subirFp', $id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label>Máximo, 5 imágenes</label>
                <input type="file" name="subirImagenes[]" class="form-control" id="subirImagenes" required multiple  accept="image/*">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <input type="submit" value="cargar imagenes" class="btn btn-primary">
        </div>
        </form>
      </div>
    </div>
  </div>
@if (session('message'))
  <script>alert("Se ha realizado la solicitud de manera correcta")</script>
@endif

@if ($errors->any())
  <script>
      alert("Hubo un error en el sistema.");
  </script>
@endif
@endsection



