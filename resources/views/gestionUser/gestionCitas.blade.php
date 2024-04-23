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
                        <form id="citaForm" class="row g-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>

                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellidos <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="apellido" required>
                            </div>

                            <div class="col-md-6">
                                <label for="telefono" class="form-label">Teléfono: <span style="color: red;">*</span></label>
                                <input type="tel" id="telefono" class="form-control" placeholder="Ingrese su número de teléfono" required>
                            </div>

                            <div class="col-md-6">
                                <label for="especialidad" class="form-label">Especialidad: <span style="color: red;">*</span></label>
                                <select class="form-select" id="especialidad" required>
                                    <option value="">Selecciona una especialidad</option>
                                    <option value="medicina_general">Medicina General</option>
                                    <option value="pediatria">Pediatría</option>
                                    <option value="dermatologia">Dermatología</option>
                                    <option value="fisioterapeuta">Fisioterapeuta</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Correo Electrónico <span style="color: red;">*</span></label>
                                <input type="email" class="form-control" id="email" required>
                            </div>

                            <div class="col-12">
                                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento <span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="fecha_nacimiento" required>
                            </div>

                            <div class="col-12">
                                <label for="fecha_reserva" class="form-label">Reserva fecha <span style="color: red;">*</span></label>
                                <input type="date" class="form-control" id="fecha_reserva" name="fecha_reserva" required>
                            </div>


                            <div class="col-12">
                                <label for="hora" class="form-label">Hora <span style="color: red;">*</span></label>
                                <input type="time" class="form-control" id="hora" name="hora" required>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" form="citaForm" class="btn btn-primary">Agendar</button>
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
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Especialidad</th>
                            <th scope="col">Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
