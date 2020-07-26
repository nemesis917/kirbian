@extends('layouts.app')
@push('style-catalogo-remking')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
@endpush
@push('script-catalogo-remking')
    <script src="{{ asset('plugins/jquery/jquery.js') }}" ></script>
    <script src="{{ asset('js/sistema/usuario/index.js') }}"></script>
@endpush
@section('content')
<div class="container">
    <div class="box-user">
        <h2><center>Listado de usuarios y suscripciones</center></h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Nivel de acceso</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $users)
                        <tr>
                            <td>{{ $users->id }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->lastname }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->level }}</td>
                            <td>
                                

                                <button type="button" class="btn btn-success" title="Cambiar contraseña" id="clave" value="{{ $users->id }}">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                </button> 

                                <a href="{{ route('sistema.usuario.edit',$users->id) }}">
                                    <button type="button" class="btn btn-warning" title="Modificar un usuario">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                            </svg>
                                    </button> 
                                </a>
                                <a href="{{ route('sistema.usuario.destroy',$users->id) }}">
                                    <button type="button" class="btn btn-danger" id="eliminar" title="Eliminar a un usuario">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.037 3.225l1.684 10.104A2 2 0 0 0 5.694 15h4.612a2 2 0 0 0 1.973-1.671l1.684-10.104C13.627 4.224 11.085 5 8 5c-3.086 0-5.627-.776-5.963-1.775z"/>
                                            <path fill-rule="evenodd" d="M12.9 3c-.18-.14-.497-.307-.974-.466C10.967 2.214 9.58 2 8 2s-2.968.215-3.926.534c-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466zM8 5c3.314 0 6-.895 6-2s-2.686-2-6-2-6 .895-6 2 2.686 2 6 2z"/>
                                        </svg>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary" id="agregar"  data-toggle="modal" data-target="#exampleModal">Agregar a un usuario</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar a un usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('sistema.usuario.store') }}" method="post">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Indique el nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Indique el apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido">
                    </div>
                    <div class="form-group">
                        <label for="correo">Indique el correo</label>
                        <input type="text" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo">
                    </div>
                    <div class="form-group">
                        <label for="clave">Indique la contraseña</label>
                        <input type="password" class="form-control" name="clave1" id="clave1" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="form-group">
                        <label for="clave">Repita la contraseña</label>
                        <input type="password" class="form-control" name="clave2" id="clave2" placeholder="Repita su contraseña">
                    </div>   
                    <div class="form-group">
                        <select class="custom-select" name="nivel">
                            <option selected>Seleccione...</option>
                            <option value="administrador">Administrador</option>
                            <option value="moderador">Moderador</option>
                            <option value="usuario">Usuario</option>
                        </select>
                    </div> 

                </div>
                <div class="modal-footer">
                    <input type="submit" id="envio" class="btn btn-primary" value="Crear usuario">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
            
        </div>
        </div>
    </div>
</div>
@endsection
