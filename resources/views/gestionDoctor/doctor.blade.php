@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Gestion Medico'])
<br>
<br>


<div class="container">




    @include('layouts.footers.auth.footer')
</div>
@endsection