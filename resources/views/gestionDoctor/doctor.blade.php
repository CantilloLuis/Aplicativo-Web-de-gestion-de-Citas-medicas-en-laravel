@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Gestion Medico'])
<br>
<br>

<div class="container">
    <h3>Citas agendadas con el medico {{Auth::user()->firstname}}</h3>
    <br>
    <button type="submit" class="btn btn-primary btn-lg" style="display: block; margin: 0 auto;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Evaluar cita
    </button>

    <!-- Modal registrar citas medicas -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Evaluar cita del paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Formulario de cita -->
                    <form id="citaForm" method="POST" action="{{ route('registrarCitaMedico')}}" class="row g-3">
                        @csrf
                        @method('POST')
                        <div class="col-md-6">
                            <label for="rol">Seleccione el paciente a evaluar</label>
                            <select name="paciente" class="form-control" id="paciente" required>
                                <option value="" disabled selected>Seleccione el paciente</option>
                                @foreach($citas as $cita)
                                @php
                                $coincide = false; // Bandera para verificar si hay una coincidencia de descripción
                                @endphp

                                @foreach($doctors as $doctor)
                                @if($doctor->descripcion_paciente == $cita->descripcion)
                                @php
                                $coincide = true; // Hay una coincidencia, establece la bandera a true
                                break; // No es necesario seguir buscando, sal del bucle
                                @endphp
                                @endif
                                @endforeach

                                @if(!$coincide) {{-- Si no hay coincidencia, muestra la opción --}}
                                @if($cita->especialidad == Auth::user()->especialidad)
                                <option value="{{$cita->cedula}}">{{$cita->nombre}} {{$cita->apellido}}</option>
                                @endif
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="nombre_paciente" class="form-label">Nombre del paciente <span style="color: red;">*</span></label>
                            <input type="text" name="nombre_paciente" placeholder="Ingrese su nombre" class="form-control" id="nombre_paciente" required>
                        </div>

                        <div class="col-md-6">
                            <label for="apellido_paciente" class="form-label">Apellidos del paciente <span style="color: red;">*</span></label>
                            <input type="text" name="apellido_paciente" placeholder="Ingrese sus apellidos" class="form-control" id="apellido_paciente" required>
                        </div>

                        <div class="col-md-6">
                            <label for="telefono_paciente" class="form-label">Teléfono del paciente <span style="color: red;">*</span></label>
                            <input type="number" name="telefono_paciente" id="telefono_paciente" class="form-control" placeholder="Ingrese su número de teléfono" required>
                        </div>

                        <div class="col-md-6">
                            <label for="especialidad_paciente" class="form-label">Especialidad que require atencion del paciente <span style="color: red;">*</span></label>
                            <input type="text" name="especialidad_paciente" id="especialidad_paciente" class="form-control" placeholder="Ingrese su número de teléfono" required>
                        </div>

                        <div class="col-md-6">
                            <label for="cedula_paciente" class="form-label">Cedula del paciente <span style="color: red;">*</span></label>
                            <input type="number" name="cedula_paciente" id="cedula_paciente" class="form-control" placeholder="Ingrese su número de cedula" required>
                        </div>

                        <div class="col-12">
                            <label for="correo_paciente" class="form-label">Correo del paciente <span style="color: red;">*</span></label>
                            <input type="email" name="correo_paciente" placeholder="Ingrese sus correo" class="form-control" id="correo_paciente" required>
                        </div>

                        <div class="col-12">
                            <label for="direccion" class="form-label">Direccion <span style="color: red;">*</span></label>
                            <input type="text" name="direccion" placeholder="Ingrese su direccion" class="form-control" id="direccion_paciente" required>
                        </div>

                        <div class="col-12">
                            <label for="fecha_nacimiento_paciente" class="form-label">Fecha de nacimiento del paciente<span style="color: red;">*</span></label>
                            <input type="date" name="fecha_nacimiento_paciente" class="form-control" id="fecha_nacimiento_paciente" required>
                        </div>

                        <div class="col-12">
                            <label for="fecha_reserva_paciente" class="form-label">Reserva fecha del paciente <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="fecha_reserva_paciente" id="fecha_reserva_paciente" name="fecha_reserva_paciente" required>
                        </div>

                        <div class="col-12">
                            <label for="hora_cita_paciente" class="form-label">Hora de atencion del paciente <span style="color: red;">*</span></label>
                            <input type="time" class="form-control" name="hora_cita_paciente" id="hora_cita_paciente" name="hora_cita_paciente" required>
                        </div>

                        <label for="descripcion_paciente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                        <textarea id="descripcion_paciente" rows="4" name="descripcion_paciente" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba sus sintomas"></textarea>

                        <label for="evaluacion_doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Recomendaciones del doctor</label>
                        <textarea id="evaluacion_doctor" rows="4" name="evaluacion_doctor" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba la receta o recomendaciones para el paciente"></textarea>

                        <div class="col-md-6">
                            <label for="nombre_doctor" class="form-label">Medico que lo esta atendiendo <span style="color: red;">*</span></label>
                            <input type="text" name="nombre_doctor" id="nombre_doctor" value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}" class="form-control" placeholder="Ingrese su número de teléfono" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" form="citaForm" class="btn btn-primary">Evaluar al paciente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="card mb-4">
        <h2 class="text-center">Citas</h2>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellido
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Telefono</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Especialidad</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Fecha cita</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Hora</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Editar</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($doctors as $doctor)
                        <tr>
                            <td class="align-middle text-center text-sm">{{$doctor->nombre_paciente}}</td>
                            <td class="align-middle text-center text-sm">{{$doctor->apellido_paciente}}</td>
                            <td class="align-middle text-center text-sm">{{$doctor->telefono_paciente}}</td>
                            <td class="align-middle text-center text-sm">{{$doctor->especialidad_paciente}}</td>
                            <td class="align-middle text-center text-sm">{{$doctor->fecha_reserva_paciente}}</td>
                            <td class="align-middle text-center text-sm">{{$doctor->hora_cita_paciente}}</td>
                            <td class="align-middle text-center text-sm">
                                <button type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editarCitasDoctor{{$doctor->id}}">
                                    Editar Citas
                                </button>
                                @include('gestionDoctor.editarCitasDoctor')
                            </td>
                            <!-- <td class="align-middle text-center text-sm">
                                <form method="POST" action="{{url('/eliminarCita_con_Doctor' . '/' . $doctor->id)}}">
                                    {{method_field('DELETE')}}
                                    {{csrf_field('DELETE')}}

                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth.footer')
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#paciente').change(function() {
            var CedulaSeleccionado = $(this).val(); // Captura el valor seleccionado en el select (en este caso, la cedula)

            // Realiza una solicitud AJAX para obtener los datos del paciente seleccionado
            $.ajax({
                url: "{{ route('datosCitas') }}", // Ruta a la que enviarás la solicitud AJAX
                type: 'GET',
                data: {
                    cedula_paciente: CedulaSeleccionado
                }, // Envía el nombre seleccionado como parámetro
                success: function(response) {
                    // Manipula los datos recibidos
                    var datosPaciente = response.datosPaciente;
                    console.log(datosPaciente);
                    // Actualiza los valores de los campos de entrada en tu vista con los datos del paciente seleccionado
                    $('#nombre_paciente').val(datosPaciente.nombre);
                    $('#apellido_paciente').val(datosPaciente.apellido);
                    $('#correo_paciente').val(datosPaciente.correo);
                    $('#direccion_paciente').val(datosPaciente.direccion);
                    $('#telefono_paciente').val(datosPaciente.telefono);
                    $('#especialidad_paciente').val(datosPaciente.especialidad);
                    $('#cedula_paciente').val(datosPaciente.cedula);
                    $('#fecha_nacimiento_paciente').val(datosPaciente.fechaNacimiento);
                    $('#fecha_reserva_paciente').val(datosPaciente.fechaCita);
                    $('#hora_cita_paciente').val(datosPaciente.hora);
                    $('#descripcion_paciente').val(datosPaciente.descripcion);
                    // Y así sucesivamente con los demás campos
                },
                error: function(xhr, status, error) {
                    // Manejo de errores si la solicitud AJAX falla
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
