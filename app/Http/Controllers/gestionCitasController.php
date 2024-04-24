<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;

class gestionCitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        return view('gestionUser.gestionCitas');
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

        $citas = new Citas();
        $citas->nombre = $request->nombre;
        $citas->apellido = $request->apellido;
        $citas->telefono = $request->telefono;
        $citas->especialidad = $request->especialidad;
        $citas->correo = $request->correo;
        $citas->fechaNacimiento = $request->fechaNacimiento;
        $citas->fechaCita = $request->fechaCita;
        $citas->hora = $request->hora;
        $citas->descripcion = $request->descripcion;

        $citas->save();

        return view('gestionUser.gestionCitas');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
