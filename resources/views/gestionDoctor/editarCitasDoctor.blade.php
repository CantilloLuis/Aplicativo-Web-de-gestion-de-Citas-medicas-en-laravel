<!-- Modal para editar citas medicas-->
<div class="modal fade" id="editarCitasDoctor{{$doctor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cita Evaluada</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Formulario de actualizar cita -->
                <form id="" action="{{route('actualizarCita_con_Doctor.update',$doctor->id)}}" method="POST" class="row g-3">

                    {!! csrf_field()!!}
                    {{ method_field('PUT') }}

                    <div class="col-md-6">
                        <label for="nombre_paciente" class="form-label">Nombre del paciente <span style="color: red;">*</span></label>
                        <input type="text" readonly name="nombre_paciente" value="{{$doctor->nombre_paciente}}" placeholder="Ingrese su nombre" class="form-control" id="nombre_paciente" required>
                    </div>

                    <div class="col-md-6">
                        <label for="apellido_paciente" class="form-label">Apellidos del paciente <span style="color: red;">*</span></label>
                        <input type="text" readonly name="apellido_paciente" value="{{$doctor->apellido_paciente}}" placeholder=" Ingrese sus apellidos" class="form-control" id="apellido_paciente" required>
                    </div>

                    <div class="col-md-6">
                        <label for="telefono_paciente" class="form-label">Teléfono del paciente <span style="color: red;">*</span></label>
                        <input type="number" readonly name="telefono_paciente" value="{{$doctor->telefono_paciente}}" id=" telefono_paciente" class="form-control" placeholder="Ingrese su número de teléfono" required>
                    </div>

                    <div class="col-md-6">
                        <label for="cedula_paciente" class="form-label">Cedula del paciente <span style="color: red;">*</span></label>
                        <input type="number" readonly value="{{$doctor->cedula_paciente}}" name=" cedula_paciente" id="cedula_paciente" class="form-control" placeholder="Ingrese su número de cedula" required>
                    </div>

                    <div class="col-md-6">
                        <label for="especialidad_paciente" class="form-label">Especialidad que require atencion del paciente <span style="color: red;">*</span></label>
                        <input type="text" readonly name="especialidad_paciente" value="{{$doctor->especialidad_paciente}}" id=" especialidad_paciente" class="form-control" placeholder="Ingrese su número de teléfono" required>
                    </div>

                    <div class="col-12">
                        <label for="correo_paciente" class="form-label">Correo del paciente <span style="color: red;">*</span></label>
                        <input type="email" readonly value="{{$doctor->correo_paciente}}" name=" correo_paciente" placeholder="Ingrese sus correo" class="form-control" id="correo_paciente" required>
                    </div>

                    <div class="col-12">
                        <label for="direccion" class="form-label">Direccion <span style="color: red;">*</span></label>
                        <input type="text" name="direccion" placeholder="Ingrese su direccion" class="form-control" id="direccion" required value="{{$cita->direccion_paciente}}">
                    </div>

                    <div class="col-12">
                        <label for="fecha_nacimiento_paciente" class="form-label">Fecha de nacimiento del paciente<span style="color: red;">*</span></label>
                        <input type="date" readonly value="{{$doctor->fecha_nacimiento_paciente}}" name=" fecha_nacimiento_paciente" class="form-control" id="fecha_nacimiento_paciente" required>
                    </div>

                    <div class="col-12">
                        <label for="fecha_reserva_paciente" class="form-label">Reserva fecha del paciente <span style="color: red;">*</span></label>
                        <input type="date" readonly value="{{$doctor->fecha_reserva_paciente}}" class=" form-control" name="fecha_reserva_paciente" id="fecha_reserva_paciente" name="fecha_reserva_paciente" required>
                    </div>

                    <div class="col-12">
                        <label for="hora_cita_paciente" class="form-label">Hora de atencion del paciente <span style="color: red;">*</span></label>
                        <input type="time" readonly value="{{$doctor->hora_cita_paciente}}" class=" form-control" name="hora_cita_paciente" id="hora_cita_paciente" name="hora_cita_paciente" required>
                    </div>

                    <label for="descripcion_paciente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                    <textarea id="descripcion_paciente" readonly rows="4" name="descripcion_paciente" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba sus sintomas">{{$doctor->descripcion_paciente}}</textarea>

                    <label for="evaluacion_doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Recomendaciones del doctor</label>
                    <textarea id="evaluacion_doctor" rows="4" name="evaluacion_doctor" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba la receta o recomendaciones para el paciente">{{$doctor->evaluacion_doctor}}</textarea>

                    <div class="col-md-6">
                        <label for="nombre_doctor" class="form-label">Medico que lo esta atendiendo <span style="color: red;">*</span></label>
                        <input type="text" name="nombre_doctor" id="nombre_doctor" value="{{$doctor->nombre_doctor}}" class="form-control" placeholder="Ingrese su número de teléfono" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>