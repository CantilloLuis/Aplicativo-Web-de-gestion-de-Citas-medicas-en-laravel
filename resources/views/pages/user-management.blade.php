@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Usuarios'])
<br>
<div class="row mt-4 mx-4">
    <div class="col-12">

        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Usuarios</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellido</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    # Cedula</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Rol</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Especialidad</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Editar</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td class="align-middle text-center text-sm">{{$usuario->firstname}}</td>
                                <td class="align-middle text-center text-sm">{{$usuario->lastname}}</td>
                                <td class="align-middle text-center text-sm">{{$usuario->numero_cedula}}</td>
                                <td class="align-middle text-center text-sm">{{$usuario->rol}}</td>
                                <td class="align-middle text-center text-sm">{{$usuario->especialidad}}</td>
                                <td class="align-middle text-center text-sm">
                                    <button type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editarUsuario{{$usuario->id}}">
                                        Editar Usuario
                                    </button>
                                    @include('gestionUser.editarUsuario')
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <form method="POST" action="{{url('/eliminarUsuario' . '/' . $usuario->id)}}">
                                        {{method_field('DELETE')}}
                                        {{csrf_field('DELETE')}}

                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection