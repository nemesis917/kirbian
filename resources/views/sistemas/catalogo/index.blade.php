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
                    <option value="" class="form-control">Ejemplo</option>
                </select>
            </div>
        </div>
        <div class="col-9" style="border: 1px solid black">
        prueba
            
        </div>
    </div>

</div>
@endsection
