<!-- Modal para editar citas medicas-->
<div class="modal fade" id="editarCitas{{$cita->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar cita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Formulario de actualizar cita -->
                <form id="" action="{{route('actualizarCitas.update',$cita->id)}}" method="POST" class="row g-3">

                    {!! csrf_field()!!}
                    {{ method_field('PUT') }}

                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre <span style="color: red;">*</span></label>
                        <input type="text" name="nombre" value="{{$cita->nombre}}" placeholder="Ingrese su nombre" class="form-control" id="nombre" required>
                    </div>

                    <div class="col-md-6">
                        <label for="apellido" class="form-label">Apellidos <span style="color: red;">*</span></label>
                        <input type="text" name="apellido" value="{{$cita->apellido}}" placeholder="Ingrese sus apellidos" class="form-control" id="apellido" required>
                    </div>

                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Teléfono: <span style="color: red;">*</span></label>
                        <input type="number" name="telefono" value="{{$cita->telefono}}" id="telefono" class="form-control" placeholder="Ingrese su número de teléfono" required>
                    </div>

                    <div class="col-md-6">
                        <label for="especialidad" class="form-label">Especialidad: <span style="color: red;">*</span></label>
                        <select class="form-select" name="especialidad" id="especialidad" required>
                            <option value="{{$cita->especialidad}}" selected>{{$cita->especialidad}}</option>
                            <option value="medicina_general">Medicina General</option>
                            <option value="pediatria">Pediatría</option>
                            <option value="dermatologia">Dermatología</option>
                            <option value="fisioterapeuta">Fisioterapeuta</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Correo Electrónico <span style="color: red;">*</span></label>
                        <input type="email" name="correo" placeholder="Ingrese sus correo" class="form-control" id="email" required value="{{$cita->correo}}">
                    </div>

                    <div class="col-12">
                        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento <span style="color: red;">*</span></label>
                        <input type="date" name="fechaNacimiento" value="{{$cita->fechaNacimiento}}" class="form-control" id="fecha_nacimiento" required>
                    </div>

                    <div class="col-12">
                        <label for="fecha_reserva" class="form-label">Reserva fecha <span style="color: red;">*</span></label>
                        <input type="date" class="form-control" value="{{$cita->fechaCita}}" name="fechaCita" id="fecha_reserva" name="fecha_reserva" required>
                    </div>


                    <div class="col-12">
                        <label for="hora" class="form-label">Hora <span style="color: red;">*</span></label>
                        <input type="time" class="form-control" value="{{$cita->hora}}" name="hora" id="hora" name="hora" required>
                    </div>



                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                    <textarea id="descripcion" value="" rows="4" name="descripcion" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba sus sintomas">{{$cita->descripcion}}</textarea>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>