@extends('layouts.app')
@push('script-catalogo-remking')
<script src="{{ asset('js/sistema/catalogo/comentario.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/comentario.css') }}">
@endpush
@section('content')

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
            <div class="row">
            <h4>Fuentes paleográficas</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @foreach ($fuentes as $f)
                    <img src="{{ url($f->ruta_img_jero) }}" id="escala" class="img-fluid rounded float-left">
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-7">
            <div style="text-align:center;"><h4>Comentarios del jeroglífico {{ $jero->gandiner }}</h4></div><br>
            <div id="listado">
                @foreach ($coment as $c)
                <div class="row">
                    <div class="col-md-3" id="img1">
                        <img src="../../../system/coment.png" id="imgComent" class="img-fluid">
                        <div id="botonesComentario">
                            @if ($c->visibilidad == 1)
                            <button type="button" id="comentAceptar"  class="btn btn-warning btn-sm">C</button>
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

@endsection

