<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('vista');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\vistaController;
use App\Http\Controllers\gestionCitasController;
use App\Http\Controllers\userManagementController;




// Rutas para el registro, reset password y login del aplicativo.
Route::get('../resources/views/vista.blade.php', function () {
	return redirect('/dashboard');
})->middleware('auth');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->name('change.perform');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/vista', [vistaController::class, 'index'])->name('vista');

//Rutas para la gestion de Citas del aplicativo (ctualizar, eliminar, obtener)
Route::get('/gestionCitas', [gestionCitasController::class, 'index'])->name('gestionCitas');
Route::post('/registrarCita', [gestionCitasController::class, 'store'])->name('registrarCitas');
Route::delete('/eliminarCitas/{id}', [gestionCitasController::class, 'destroy'])->name('eliminarCitas');
Route::resource('/actualizarCitas', gestionCitasController::class);

//rutas para la gestion del usuario (Actualizar, eliminar, obtener)
Route::get('/gestionUsuarios', [userManagementController::class, 'index'])->name('usuarios');
Route::delete('/eliminarUsuario/{id}', [userManagementController::class, 'destroy'])->name('eliminarUsuario');
Route::resource('/actualizarUsuario', userManagementController::class);
Route::resource('/actualizarProfile', userProfileController::class);

//rutas para la gestion del doctor
Route::get('/doctor', [doctorController::class, 'index'])->name('doctor');
Route::delete('/eliminarCita_con_Doctor/{id}', [doctorController::class, 'destroy'])->name('eliminarCitaDoctor');
Route::resource('/actualizarCita_con_Doctor', doctorController::class);
Route::post('/registrarCitaMedico', [doctorController::class, 'store'])->name('registrarCitaMedico');
Route::get('/datosCitas', [gestionCitasController::class, 'getCitas'])->name('datosCitas');


//rutas complementarias del aplicativo
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
