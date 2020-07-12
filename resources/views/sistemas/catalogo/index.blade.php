@extends('layouts.app')
<script src="{{ asset('plugins/jquery/jquery.js') }}" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="{{ asset('js/sistema/catalogo/index.js') }}"></script>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3" style="border: 1px solid black">
            <div class="form-group">
                <label for="gardiner">Selecciona un Gardiner</label>
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
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('sistema.jeroglifico.store') }}" method="post" enctype= "multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Ingrese el Gardiner: </label>
                                <input type="text" name="gardiner" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ingrese la transliteración: </label>
                                <input type="text" name="transliteracion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ingrese el significado: </label>
                                <input type="text" name="sentido" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ingrese su descripción: </label>
                                <textarea name="descripcion" id="" class="form-control" maxlength="220"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gardiner">Selecciona un Gardiner</label>
                                <select  name="seleccion" class="custom-select">
                                    <option>Seleccione...</option>
                                    @foreach ($catalogo as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->nombres  }}</option>
                                    @endforeach
                                </select>
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="">Agregue la imagen principal (Jeroglífico)</label>
                                <input type="file" name="imagen1" id="imagen1" class="form-control">
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
        prueba
            
        </div>
    </div>

</div>
@endsection