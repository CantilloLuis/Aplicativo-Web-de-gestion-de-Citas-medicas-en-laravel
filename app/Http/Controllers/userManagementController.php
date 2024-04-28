<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\User;
use Illuminate\Http\Request;

class userManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $usuarios = User::all();
        return view('pages.user-management', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $editarUsuarios = User::findOrFail($id);
        $input = $request->all();
        $editarUsuarios->fill($input)->save();
        return redirect()->route('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encuentra el objeto a eliminar
        $eliminarUsuarios = User::findOrFail($id);

        // Elimina el objeto de la base de datos
        $eliminarUsuarios->delete();

        // Redireccionar a una ruta específica (opcional)
        return redirect()->route('usuarios');
    }
}
