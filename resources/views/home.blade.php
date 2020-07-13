@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('sistema.usuario.index') }}"><button class="btn btn-primary">Usuarios</button></a>
    <a href="{{ route('sistema.catalogo.index') }}"><button class="btn btn-success">Catálogo</button></a>
</div>
@endsection
