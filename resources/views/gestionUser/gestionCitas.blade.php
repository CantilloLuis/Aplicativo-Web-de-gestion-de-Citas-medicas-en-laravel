@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Gestion citas'])
<br>
<br>


<div class="container">
    <button type="submit" class="btn btn-primary btn-lg" style="display: block; margin: 0 auto;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agendar tu cita
    </button>

    <br><br>
    <!-- Modal -->
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
                                <option value="medicina_general">Medicina General</option>
                                <option value="pediatria">Pediatría</option>
                                <option value="dermatologia">Dermatología</option>
                                <option value="fisioterapeuta">Fisioterapeuta</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Correo Electrónico <span style="color: red;">*</span></label>
                            <input type="email" name="correo" placeholder="Ingrese sus correo" class="form-control" id="email" required>
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
                        <textarea id="message" rows="4" name="descripcion" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba sus sintomas"></textarea>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" form="citaForm" class="btn btn-primary">Agendar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <h2 class="text-center">Citas agendadas</h2>
    <div class="card">
        <div class="card-body p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" align="center">Nombre</th>
                        <th scope="col" align="center">Apellido</th>
                        <th scope="col" align="center">Telefono</th>
                        <th scope="col" align="center">Especialidad</th>
                        <th scope="col" align="center">Fecha cita</th>
                        <th scope="col" align="center">Hora</th>
                        <th scope="col" align="center">Descripcion</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($citas as $cita)
                        <td align="center">{{$cita->nombre}}</td>
                        <td align="center">{{$cita->apellido}}</td>
                        <td align="center">{{$cita->telefono}}</td>
                        <td align="center">{{$cita->especialidad}}</td>
                        <td align="center">{{$cita->fechaCita}}</td>
                        <td align="center">{{$cita->hora}}</td>
                        <td align="center">{{$cita->descripcion}}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection