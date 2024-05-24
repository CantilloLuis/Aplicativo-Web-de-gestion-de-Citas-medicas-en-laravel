@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Gestion citas'])
<br>
<br>

<div class="container">
    <h3 class="">Su nombre es: {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h3>
    <br>
    <button type="submit" class="btn btn-primary btn-lg" style="display: block; margin: 0 auto;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agendar tu cita
    </button>

    <br><br>
    <!-- Modal registrar citas medicas -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agenda tu cita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Formulario de cita -->
                    <form id="citaForm" method="POST" action="{{ route('registrarCitas')}}" class="row g-3">
                        @csrf
                        @method('POST')
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre <span style="color: red;">*</span></label>
                            <input type="text" name="nombre" placeholder="Ingrese su nombre" class="form-control" id="nombre" required>
                        </div>

                        <div class="col-md-6">
                            <label for="apellido" class="form-label">Apellidos <span style="color: red;">*</span></label>
                            <input type="text" name="apellido" placeholder="Ingrese sus apellidos" class="form-control" id="apellido" required>
                        </div>

                        <div class="col-md-6">
                            <label for="telefono" class="form-label">Teléfono: <span style="color: red;">*</span></label>
                            <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Ingrese su número de teléfono" required>
                        </div>

                        <div class="col-md-6">
                            <label for="especialidad" class="form-label">Especialidad: <span style="color: red;">*</span></label>
                            <select class="form-select" name="especialidad" id="especialidad" required>
                                <option value="">Selecciona una especialidad</option>
                                <option value="Medicina general">Medicina General</option>
                                <option value="Pediatria">Pediatría</option>
                                <option value="Dermatologia">Dermatología</option>
                                <option value="Fisioterapeuta">Fisioterapeuta</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="cedula" class="form-label">Cedula: <span style="color: red;">*</span></label>
                            <input type="number" name="cedula" id="telefono" class="form-control" placeholder="Ingrese su número de cedula" required>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Correo Electrónico <span style="color: red;">*</span></label>
                            <input type="email" name="correo" placeholder="Ingrese sus correo" class="form-control" id="email" required>
                        </div>

                        <div class="col-12">
                            <label for="direccion" class="form-label">Direccion <span style="color: red;">*</span></label>
                            <input type="text" name="direccion" placeholder="Ingrese su direccion" class="form-control" id="direccion" required>
                        </div>

                        <div class="col-12">
                            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento <span style="color: red;">*</span></label>
                            <input type="date" name="fechaNacimiento" class="form-control" id="fecha_nacimiento" required>
                        </div>

                        <div class="col-12">
                            <label for="fecha_reserva" class="form-label">Reserva fecha <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="fechaCita" id="fecha_reserva" name="fecha_reserva" required>
                        </div>

                        <div class="col-12">
                            <label for="hora" class="form-label">Hora <span style="color: red;">*</span></label>
                            <input type="time" class="form-control" name="hora" id="hora" name="hora" required>
                        </div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                        <textarea id="message" rows="4" name="descripcion" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba sus sintomas"></textarea>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" form="citaForm" class="btn btn-primary">Agendar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h2 class="text-center">Citas agendadas</h2>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellido
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Especialidad</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Fecha cita</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Hora</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Descripcion</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Editar</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Eliminar</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $cita)
                        @if($cita->cedula == Auth::user()->numero_cedula)
                        <tr>
                            <td class="align-middle text-center text-sm">{{$cita->nombre}}</td>
                            <td class="align-middle text-center text-sm">{{$cita->apellido}}</td>
                            <td class="align-middle text-center text-sm">{{$cita->especialidad}}</td>
                            <td class="align-middle text-center text-sm">{{$cita->fechaCita}}</td>
                            <td class="align-middle text-center text-sm">{{$cita->hora}}</td>
                            <td class="align-middle text-center text-sm">{{$cita->descripcion}}</td>
                            <td>
                                <button type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editarCitas{{$cita->id}}">
                                    Editar Citas
                                </button>
                                @include('gestionUser.editarCitas')
                            </td>
                            <td class="align-middle text-center text-sm">
                                <form method="POST" action="{{url('/eliminarCitas' . '/' . $cita->id)}}">
                                    {{method_field('DELETE')}}
                                    {{csrf_field('DELETE')}}

                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <h2 class="text-center">Citas evaluadas</h2>
        <div class="card-body px-0 pt-0 pb-2">
            @foreach($doctors as $doctor)
            @if($doctor->cedula_paciente == Auth::user()->numero_cedula)
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion de la cita con el medico: {{$doctor->descripcion_paciente}}</label><br>
                <label for="exampleFormControlTextarea1" class="form-label">Medico que lo atendio: {{$doctor->nombre_doctor}}</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2">{{$doctor->evaluacion_doctor}}</textarea>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection
