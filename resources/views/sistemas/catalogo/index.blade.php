@extends('layouts.app')
<script src="{{ asset('plugins/jquery/jquery.js') }}" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="{{ asset('js/sistema/catalogo/index.js') }}"></script>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3" style="border: 1px solid black">
            <div class="form-group">
                <label for="gardiner"><h4>Selecciona un Gardiner</h4></label>
                <select  id="seleccion" class="custom-select">
                    <option>Seleccione...</option>
                    @foreach ($catalogo as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->nombres  }}</option>
                    @endforeach
                </select>
                <br>
            </div>
            <p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Cargar un catálogo
            </button>

            @if (session('message'))
                <script>alert('Se ha guardado la información satisfactoriamente')</script>
            @endif
                


            
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
                                <label for="">Ingrese el Gardiner: </label>
                                <input type="text" name="gardiner" class="form-control" maxlength="12" required>
                            </div>
                            <div class="form-group">
                                <label for="">Ingrese la transliteración: </label>
                                <input type="text" name="transliteracion" class="form-control" maxlength="30" required>
                            </div>
                            <div class="form-group">
                                <label for="">Ingrese el significado: </label>
                                <input type="text" name="sentido" class="form-control" maxlength="180" required>
                            </div>
                            <div class="form-group">
                                <label for="">Ingrese su descripción: </label>
                                <textarea name="descripcion" id="" class="form-control" maxlength="220"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gardiner">Selecciona un Gardiner</label>
                                <select  name="seleccion" class="custom-select" required>
                                    <option>Seleccione...</option>
                                    @foreach ($catalogo as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->nombres  }}</option>
                                    @endforeach
                                </select>
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="">Agregue la imagen principal (Jeroglífico)</label>
                                <input type="file" name="imagen1" id="imagen1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Agregue la 2da imagen  (Cursivo)</label>
                                <input type="file" name="imagen2" id="imagen2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Agregue la 3ra principal (Hierático)</label>
                                <input type="file" name="imagen3" id="imagen3" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-primary" value="Guardar datos">
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </p>
        </div>
        <div class="col-9" style="border: 1px solid black">
            <div id="guia" class="row">
                <div id="msj"></div>
            </div>
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
                <div class="col-md-4"><center>Jeroglífico</center><img id="img0" src="../system/no-foto.jpg" alt="Jeroglífico" class="img-fluid" title="Jeroglífico"></div>
                <div class="col-md-4"><center>Cursivo</center><img id="img1" src="../system/no-foto.jpg" alt="Jeroglífico" class="img-fluid" title="Jeroglífico"></div>
                <div class="col-md-4"><center>Hierático</center><img id="img2" src="../system/no-foto.jpg" alt="Jeroglífico" class="img-fluid" title="Jeroglífico"></div>
            </div><br>
            <div class="row">
                <div class="col-md-4"><b>Gandiner: </b><div id="gandiner">Cargando...</div></div>
                <div class="col-md-8"><b>Transliteración: </b><div id="trasliteracion">Cargando...</div></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"><b>Significado: </b><div id="significado">Cargando...</div></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"><b>Descripción: </b><div id="descripcion">Cargando...</div></div>
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
                    <label for="">Ingrese el Gardiner: </label>
                    <input type="text" name="gandiner" id="gandiner1" value="" class="form-control" maxlength="12" required>
                </div>
                <div class="form-group">
                    <label for="">Ingrese la transliteración: </label>
                    <input type="text" name="transliteracion" id="transliteracion1" maxlength="30" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Ingrese el significado: </label>
                    <input type="text" name="significado" id="significado1" class="form-control" maxlength="180" required>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su descripción: </label>
                    <textarea name="descripcion" id="mensajeDescripcion" class="form-control" maxlength="220"></textarea>
                </div>
                <div class="form-group">
                    <label for="gardiner">Selecciona un Gardiner</label>
                    <select name="seleccion" class="custom-select" required>
                        <option>Seleccione...</option>
                        @foreach ($catalogo as $cat)
                        <option value="{{ $cat->id }}" id="seleccion1-{{ $cat->id }}" >{{ $cat->nombres }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>
                <div class="form-group">
                    <label for="">Agregue la imagen principal (Jeroglífico)</label>
                    <input type="file" name="imagen1" id="imagenA" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Agregue la 2da imagen  (Cursivo)</label>
                    <input type="file" name="imagen2" id="imagenB" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Agregue la 3ra principal (Hierático)</label>
                    <input type="file" name="imagen3" id="imagenC" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <input type="submit" class="btn btn-primary" value="Guardar datos">
            </div>
        </form>
    </div>
    </div>
</div>


@endsection
