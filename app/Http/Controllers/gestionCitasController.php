<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\Doctor;

use Illuminate\Http\Request;

class gestionCitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $citas = Citas::all();
        $doctors = Doctor::all();

        return view('gestionUser.gestionCitas', ['citas' => $citas, 'doctors' => $doctors]);
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
        $citas->cedula = $request->cedula;
        $citas->correo = $request->correo;
        $citas->fechaNacimiento = $request->fechaNacimiento;
        $citas->fechaCita = $request->fechaCita;
        $citas->hora = $request->hora;
        $citas->descripcion = $request->descripcion;

        $citas->save();

        return redirect()->route('gestionCitas');
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
        $editarCitas = Citas::findOrFail($id);
        $input = $request->all();
        $editarCitas->fill($input)->save();
        return redirect()->route('gestionCitas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encuentra el objeto a eliminar
        $eliminarCitas = Citas::findOrFail($id);

        // Elimina el objeto de la base de datos
        $eliminarCitas->delete();

        // Redireccionar a una ruta específica (opcional)
        return redirect()->route('gestionCitas');
    }

    public function getCitas(Request $request)
    {
        $cedula = $request->input('cedula_paciente'); // Obtén la cédula del paciente seleccionado desde la solicitud

        // Busca el paciente en base a la cédula
        $paciente = Citas::where('cedula', $cedula)->first();

        // Devuelve los datos del paciente en formato JSON
        return response()->json(['datosPaciente' => $paciente]);
    }
}
