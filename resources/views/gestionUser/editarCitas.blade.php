<!-- Modal para editar citas medicas-->
<div class="modal fade" id="editarCitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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