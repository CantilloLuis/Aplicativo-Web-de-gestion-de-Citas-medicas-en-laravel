<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function show()
    {
        return view('pages.user-profile');
    }

    public function update(Request $request, $id)
    {
        // $attributes = $request->validate([
        //     'username' => ['required', 'max:255', 'min:2'],
        //     'firstname' => ['max:100'],
        //     'lastname' => ['max:100'],
        //     'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
        //     'address' => ['max:100'],
        //     'city' => ['max:100'],
        //     'country' => ['max:100'],
        //     'postal' => ['max:100'],
        //     'about' => ['max:255'],
        //     'tipoCedula' => 'required|max:255',
        //     'numeroCedula' => 'required',
        //     'fechaNacimiento' => 'required|max:255',
        //     'tipoSangre' => 'required|max:255',
        //     'estadoCivil' => 'required|max:255',
        //     'genero' => 'required|max:255',

        // ]);

        $editarProfile = User::findOrFail($id);
        $input = $request->all();
        $editarProfile->fill($input)->save();

        return back()->with('succes', 'Perfil actualizado correctamente');
    }
}
