<!-- Modal para editar los usuarios-->
<div class="modal fade" id="editarUsuario{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Formulario de actualizar usuarios -->
                <form id="" action="{{route('actualizarUsuario.update',$usuario->id)}}" method="POST" class="row g-3">

                    {!! csrf_field()!!}
                    {{ method_field('PUT') }}

                    <div class="col">
                        <div class="flex flex-col mb-3">
                            <label for="rol">Seleccione el rol del usuario</label>
                            <select name="rol" class="form-control" id="rol" required>
                                <option value="" disabled selected>Seleccione el rol del usuario</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Paciente">Paciente</option>
                                <option value="Paciente">Paciente</option>

                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="flex flex-col mb-3">
                            <label for="especialidad">Seleccione especialidad</label>
                            <select class="form-select" name="especialidad" id="especialidad" required>
                                <option value="" disabled selected>Seleccione la especialidad del usuario</option>
                                <option value="Medicina_general">Medicina General</option>
                                <option value="Pediatria">Pediatría</option>
                                <option value="Dermatologia">Dermatología</option>
                                <option value="Fisioterapeuta">Fisioterapeuta</option>
                            </select>
                        </div>
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