@extends('layouts.app')

@section('content')
@include('layouts.navbars.guest.navbar')



<main class="main-content m-0">
    <div class="page-header align-items-start min-vh-100 pt-5 pb-11" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top; background-size: cover; background-repeat: no-repeat; margin: 0; padding: 0;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container position-relative">
            <br>
            <div class="row justify-content-center ">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Bienvenido!</h1>
                    <p class="text-lead text-white">Disfrute del aplicativo, somos tu mejor opción.</p>
                </div>

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Registrese</h5>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('register.perform') }}">
                                @csrf


                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="flex flex-col mb-3">
                                            <label for="">Tipo de cedula</label>

                                            <select name="tipo_Cedula" class="form-control" required>
                                                <option value="" disabled selected>Seleccione su tipo de Cédula</option>
                                                <option value="CC">Cédula de Ciudadanía</option>
                                                <option value="TI">Tarjeta de Identidad</option>
                                                <option value="RC">Registro civil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="flex flex-col mb-3">
                                            <label for=""># Cedula</label>

                                            <input type="number" value="{{ old('numeroCedula') }}" name="numero_Cedula" class="form-control" placeholder="Cedula" aria-label="Cédula" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="flex flex-col mb-3">
                                            <label for="">Fecha de nacimiento</label>
                                            <input type="date" value="{{ old('fechaNacimiento') }}" name="fecha_Nacimiento" class="form-control" id="fecha_nacimiento" placeholder="Fecha de nacimiento" aria-label="Fecha de nacimiento" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="flex flex-col mb-3">
                                            <label for="tipo_sangre">Tipo de sangre</label>
                                            <select name="tipo_Sangre" class="form-control" id="tipo_sangre" required>
                                                <option value="" disabled selected>Seleccione su tipo de sangre</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="flex flex-col mb-3">
                                            <label for="estado_civil">Estado civil</label>
                                            <select name="estado_Civil" class="form-control" id="estado_civil" required>
                                                <option value="" disabled selected>Seleccione su estado civil</option>
                                                <option value="Soltero">Soltero</option>
                                                <option value="Casado">Casado</option>
                                                <option value="Divorciado">Divorciado</option>
                                                <option value="Viudo">Viudo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="flex flex-col mb-3">
                                            <label for="genero">Género</label>
                                            <select name="genero" class="form-control" id="genero" required>
                                                <option value="" disabled selected>Seleccione su género</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">

                                        <div class="col">
                                            <div class="flex flex-col mb-3">
                                                <label for="">Nombres</label>

                                                <input type="text" value="{{ old('firstname') }}" name="firstname" class="form-control" placeholder="Nombres" aria-label="Cédula" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="flex flex-col mb-3">
                                            <label for="">Apellidos</label>

                                            <input type="text" value="{{ old('lastname') }}" name="lastname" class="form-control" placeholder="Apellidos" aria-label="Cédula" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col mb-3">
                                    <label for="">Nombre de usuario</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Name" value="{{ old('username') }}">
                                    @error('username') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <div class="flex flex-col mb-3">
                                    <label for="fecha_nacimiento">Correo</label>

                                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" value="{{ old('email') }}">
                                    @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <div class="flex flex-col mb-3">
                                    <label for="fecha_nacimiento">Contraseña</label>

                                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                                    @error('password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <div class="form-check form-check-info text-start">
                                    <input class="form-check-input" type="checkbox" name="terms" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Estoy de acuerdo con <a href="javascript:;" class="text-dark font-weight-bolder">los terminos
                                            y condiciones</a>
                                    </label>
                                    @error('terms') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Registrarse</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Iniciar sesión</a></p>

                            </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>



@include('layouts.footers.guest.footer')
@endsection