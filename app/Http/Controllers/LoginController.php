<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            if (Auth::user()->username == 'Admin' || Auth::user()->username == 'Administrador' || Auth::user()->username == 'administrador' || Auth::user()->username == 'admin') {

                return redirect('dashboard');
            }

            if (Auth::user()->rol == 'Paciente') {

                return redirect('gestionCitas');
            }

            if (Auth::user()->rol == 'Doctor') {

                return redirect('doctor');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        //$request->session()->regenerateToken();

        return redirect('/login');
    }
}
