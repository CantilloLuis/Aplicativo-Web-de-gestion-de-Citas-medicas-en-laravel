@extends('layouts.app')

@section('content')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            @include('layouts.navbars.guest.navbar')
        </div>
    </div>
</div>
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <br>
                                <h4 class="font-weight-bolder">Iniciar sesion</h4>
                                <p class="mb-0">Ingrese su correo y contraseña para iniciar sesion</p>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('login.perform') }}">
                                    @csrf
                                    @method('post')
                                    <div class="flex flex-col mb-3">
                                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email"  value="{{ old('email')}}">
                                        @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                    </div>

                                    <div class="flex flex-col mb-3">
                                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                                        @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                    </div>

                                    {{-- <div class="form-check form-switch">
                                        <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Recordar</label>
                                    </div> --}}
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-success btn-lg w-100 mt-4 mb-0" style="background-color: #0000ff">Iniciar sesion</button>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-1 text-sm mx-auto">
                                    ¿Olvidaste tu contraseña? Restablecer su contraseña
                                    <a href="{{ route('reset-password') }}" class="text-primary text-gradient font-weight-bold">aquí</a>
                                </p>
                            </div> --}}
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    ¿No tienes una cuenta?
                                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Registrarse</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://assets-global.website-files.com/611ed5a217b32b056e5477ec/644988ded773ee3739f6691a_Online%20Medical%20Checkup%20(1).gif'); background-size: cover; width: 600px; height: 200px;">
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
@endsection
