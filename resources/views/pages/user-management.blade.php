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