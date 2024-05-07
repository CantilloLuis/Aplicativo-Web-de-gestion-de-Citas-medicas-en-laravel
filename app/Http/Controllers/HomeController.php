<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $citas = Citas::count();
        $usuariosDoctores = User::where('rol', 'Doctor')->count();
        $usuariosPacientes = User::where('rol', 'Paciente')->count();

        return view('pages.dashboard', ['citas' => $citas, 'usuariosDoctores' => $usuariosDoctores, 'usuariosPacientes' => $usuariosPacientes]);
    }
}
