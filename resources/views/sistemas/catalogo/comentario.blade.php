@extends('layouts.app')
@section('content')

<script src="{{ asset('js/sistema/catalogo/comentario.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/comentario.css') }}">
<div class="container">
    <div class="row">
        <div class="col-5">
            <div style="text-align:center;"><h4>Datos del jeroglífico</h4></div><br>
            <div class="row">
                @foreach ($imagen as $img)
                    <div class="col-4">
                        <img class="img-fluid" src="{{ url($img->ruta_imagen) }}" >
                    </div>
                @endforeach

            </div>
            <br>
            <table class="table">
                <tr>
                    <td>Gandiner: </td><td>{{ $jero->gandiner }}</td>
                </tr>
                <tr>
                    <td>Transliteración: </td><td>{{ $jero->transliteracion }}</td>
                </tr>
                <tr>
                    <td>Significado: </td><td>{{ $jero->significado }}</td>
                </tr>
                <tr>
                    <td>Descripción: </td><td>{{ $jero->descripcion }}</td>
                </tr>
                <tr>
                    <td>Comentario: </td><td>{{ $jero->comentario }}</td>
                </tr>
            </table>
        </div>

        <div class="col-7">
            <div style="text-align:center;"><h4>Comentarios del jeroglífico {{ $jero->gandiner }}</h4></div><br>
            @foreach ($coment as $c)
                <div class="row">
                    <div class="col-md-3" id="img1">
                        <img src="../../../system/coment.png" id="imgComent" class="img-fluid">
                        <div id="botonesComentario">
                            <button type="button" id="comentAceptar" class="btn btn-success btn-sm">A</button>
                            <button type="button" id="comentCancelar" class="btn btn-danger btn-sm">B</button>
                        </div>
                    </div>
                    <div class="col-md-9">{{ $c->comentario }}<div id="footer">Rosman Gonzalez<br>rosman.gonzalez@jhcp.com</div></div>
                    
                </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>

@endsection

