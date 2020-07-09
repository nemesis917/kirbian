@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@section('content')
<div class="container">
    <p>
        <center><h3>Modificar el usuario</h3></center>
    </p>

    <form action="{{ route('sistema.usuario.update',$usuarios->id) }}" method="post">
    @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="nombre">Indique el nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $usuarios->name }}" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
                <label for="nombre">Indique el apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" value="{{ $usuarios->lastname }}" placeholder="Ingrese su apellido">
            </div>
            <div class="form-group">
                <label for="correo">Indique el correo</label>
                <input type="text" class="form-control" name="correo" id="correo" value="{{ $usuarios->email }}" placeholder="Ingrese su correo">
            </div>
            <div class="form-group">
                <label for="correo">Seleccione el tipo de nivel de acceso</label>
                <select class="custom-select" name="nivel">
                    <option selected>Seleccione...</option>
                    <option value="administrador" {!! ($usuarios->level == "administrador") ? "selected" : ""; !!}>Administrador</option>
                    <option value="moderador" {!! ($usuarios->level == "moderador") ? "selected" : ""; !!}>Moderador</option>
                </select>
            </div> 

        </div>
        <div class="form-group">
            <input type="submit" id="envio" class="btn btn-warning" value="Modificar usuario">
        </div>
    </form>

</div>
@endsection
