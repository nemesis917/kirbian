@extends('layouts.app')
@push('script-catalogo-remking')
    <script src="{{ asset('js/sistema/catalogo/index.js') }}"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <style>
    /* Probable linea de idioma especial */

    </style>
@endpush
@section('content')
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Jeroglífico</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('sistema.jeroglifico.store') }}" method="post" enctype= "multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Ingrese el Gandiner (*): </label>
                        <input type="text" name="gardiner" id="gardiner" class="form-control" maxlength="12" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ingrese la transliteración (*): </label>
                        <input type="text" name="transliteracion"  id="transliteracion" class="form-control transliteration" maxlength="190" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ingrese el significado (*): </label>
                        <input type="text" name="sentido" id="sentido" class="form-control" maxlength="1200" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ingrese su descripción: </label>
                        <textarea name="descripcion" id="descripcion" class="form-control" maxlength="1200"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Ingrese su comentario: </label>
                        <input type="text" name="comentario" id="comentario" class="form-control" maxlength="1200">
                    </div>
                    <div class="form-group">
                        <label for="gandiner">Selecciona una opción del catálogo (*)</label>
                        <select  name="seleccion" id="cat" class="custom-select" required>
                            <option value="">Seleccione...</option>
                            @foreach ($catalogo as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nombres  }}</option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="">Agregue la imagen principal (*) (Jeroglífico)</label>
                        <input type="file" name="imagen1" id="imagen1" class="form-control" required accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="">Agregue la 2da imagen  (Cursivo)</label>
                        <input type="file" name="imagen2" id="imagen2" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="">Agregue la 3ra principal (Hierático)</label>
                        <input type="file" name="imagen3" id="imagen3" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary" id="guardarDatos" value="Guardar datos">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Consultar Jeroglifico</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <center>Jeroglífico</center>
                        <img id="img0" src="../system/no-foto.jpg" alt="Jeroglífico" class="img-fluid" title="Jeroglífico">
                </div>
                <div class="col-md-4">
                    <center>Cursivo</center>
                    <img id="img1" src="../system/no-foto.jpg" alt="Jeroglífico" class="img-fluid" title="Jeroglífico">
                </div>
                <div class="col-md-4">
                    <center>Hierático</center>
                    <img id="img2" src="../system/no-foto.jpg" alt="Jeroglífico" class="img-fluid" title="Jeroglífico">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4"><b>Gandiner: </b><div id="gandiner">Cargando...</div></div>
                <div class="col-md-8"><b>Transliteración: </b><div id="trasliteracion">Cargando...</div></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"><b>Significado: </b><div id="significadoVer" class="transliteration">Cargando...</div></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"><b>Descripción: </b><div id="descripcionVer">Cargando...</div></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"><b>Comentario: </b><div id="comentarioVer">Cargando...</div></div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Jeroglífico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('sistema.jeroglifico.update') }}" method="post" enctype= "multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Ingrese el Gandiner: </label>
                    <input type="text" name="gandiner" id="gandiner1" value="" class="form-control" maxlength="12" required>
                </div>
                <div class="form-group">
                    <label for="">Ingrese la transliteración: </label>
                    <input type="text" name="transliteracion" id="transliteracion1" maxlength="190" class="form-control transliteration" required>
                </div>
                <div class="form-group">
                    <label for="">Ingrese el significado: </label>
                    <input type="text" name="significado" id="significado1" class="form-control" maxlength="1200" required>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su descripción: </label>
                    <textarea name="descripcion" id="mensajeDescripcion" class="form-control" maxlength="1200"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su comentario: </label>
                    <textarea name="comentario" id="coment1" class="form-control" maxlength="1200"></textarea>
                </div>
                <div class="form-group">
                    <label for="gandiner">Selecciona un Gandiner</label>
                    <select name="seleccion" id="seleccion1" class="custom-select" required>
                        <option value="">Seleccione...</option>
                        @foreach ($catalogo as $cat)
                        <option value="{{ $cat->id }}" id="seleccion1-{{ $cat->id }}" >{{ $cat->nombres }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="id" id="id" value="">
                    <br>
                </div>
                <div id="mostrarFoto" class="btn btn-primary">Cambiar las imágenes</div>
                <div id="invisible"><br>
                    <div class="row">
                        <div class="col-4">
                            <label for=""><center>Jeroglífico</center></label>
                            <img src="" id="mod0" alt="" class="img-fluid">
                            <p>
                                <center>
                                    <div  title="No se puede borrar esta imagen, solo sustituir" disabled="true" class="btn btn-secondary"><i class="fa fa-trash-o" aria-hidden="false" disabled></i></div>
                                </center>
                            </p>
                        </div>
                        <div class="col-4">
                            <label for=""><center>Cursivo</center></label>
                            <img src="" id="mod1" alt="" class="img-fluid">
                            <p>
                                <center>
                                    <button type="button" id="borrar1" title="Borrar esta imagen" class="btn btn-secondary"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </center>
                            </p>
                        </div>
                        <div class="col-4"><label for=""><center>Hierático</center></label>
                            <img src="" id="mod2" alt="" class="img-fluid">
                            <p>
                                <center>
                                    <button type="button" id="borrar2" title="Borrar esta imagen" class="btn btn-secondary"><i class="fa fa-trash-o" aria-hidden="true"></i></button type="button">
                                </center>
                            </p>
                        </div>
                    </div>
                    <p>
                        <h5><i>Puede sustituir la imagen que desee cargando en el sistema</i></h5>
                    </p>
                    <div class="form-group">
                        <label for="">Agregue la imagen principal (Jeroglífico)</label>
                        <input type="file" name="imagen0" id="imagenA" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="">Agregue la 2da imagen  (Cursivo)</label>
                        <input type="file" name="imagen1" id="imagenB" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="">Agregue la 3ra imagen (Hierático)</label>
                        <input type="file" name="imagen2" id="imagenC" class="form-control" accept="image/*">
                    </div>                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <input type="submit" class="btn btn-primary" id="modificarDatos" value="Modificar datos">
            </div>
        </form>
    </div>
    </div>
</div>
<div class="container box-catalogo">
    <div class="form-group">
        <label for="gardiner"><h4>Selecciona un Gandiner</h4></label>
        <select  id="seleccion" class="custom-select">
            <option>Seleccione...</option>
            @foreach ($catalogo as $cat)
            <option value="{{ $cat->id }}">{{ $cat->nombres  }}</option>
            @endforeach
        </select>
    </div>  
    <hr>
    <div id="guia" class="row">
        <div id="msj"></div>
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
