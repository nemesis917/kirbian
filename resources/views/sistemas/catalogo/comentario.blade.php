@extends('layouts.app')
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
        </div>

        <div class="col-7">
            <div style="text-align:center;"><h4>Comentarios del jeroglífico {{ $jero->gandiner }}</h4></div><br>
            <table class="table">
                @foreach ($coment as $c)
                    <tr>
                        <td style="text-align: justify;">Comentario: {{ $c->comentario }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection