@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tu perfil'])
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{ asset('images/logo.jpg') }}" class="rounded-circle img-fluid border border-2 border-white">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ auth()->user()->firstname ?? 'Firstname' }} {{ auth()->user()->lastname ?? 'Lastname' }}
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        Bienvenido
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">

                </div>
            </div>
        </div>
    </div>
</div>
<div id="alert">
    @include('components.alert')
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <form role="form" method="POST" action="{{route('actualizarProfile.update',auth()->user()->id)}}" enctype="multipart/form-data">

                    {!! csrf_field()!!}
                    {{ method_field('PUT') }}

                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Editar perfil</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Guardar</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informacion del usuario</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nombre de usuario</label>
                                    <input class="form-control" type="text" name="username" value="{{ old('username', auth()->user()->username) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Correo</label>
                                    <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nombres</label>
                                    <input class="form-control" type="text" name="firstname" value="{{ old('firstname', auth()->user()->firstname) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Apellidos</label>
                                    <input class="form-control" type="text" name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Informacion de contacto</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Direccion</label>
                                    <input class="form-control" type="text" name="address" value="{{ old('address', auth()->user()->address) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Ciudad</label>
                                    <input class="form-control" type="text" name="city" value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Pais</label>
                                    <input class="form-control" type="text" name="country" value="{{ old('country', auth()->user()->country) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Codigo postal</label>
                                    <input class="form-control" type="text" name="postal" value="{{ old('postal', auth()->user()->postal) }}">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Acerca de mi</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Acerca</label>
                                    <input class="form-control" type="text" name="about" value="{{ old('about', auth()->user()->about) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
                <img src="https://media.staticontent.com/media/pictures/9495889e-54f9-40d2-939d-b04bf30b47c7" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="{{ asset('images/logo.jpg') }}" class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="row">

                    </div>
                    <div class="text-center mt-4">
                        <h5>
                            {{ auth()->user()->firstname ?? 'Firstname' }} {{ auth()->user()->lastname ?? 'Lastname' }}
                            <span class="font-weight-light">, 22 años</span>
                        </h5>
                        <div class="h6 font-weight-300">
                            <i class="ni location_pin mr-2"></i> {{ auth()->user()->city ?? 'Cartagena' }}

                        </div>
                        <div class="h6 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i> {{ auth()->user()->about ?? 'Firstname' }}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection
