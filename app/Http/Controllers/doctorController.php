<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Citas;


class doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        $citas = Citas::all();

        return view('gestionDoctor.doctor', ['citas' => $citas, 'doctors' => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->nombre_doctor = $request->nombre_doctor;
        $doctor->nombre_paciente = $request->nombre_paciente;
        $doctor->apellido_paciente = $request->apellido_paciente;
        $doctor->telefono_paciente = $request->telefono_paciente;
        $doctor->especialidad_paciente = $request->especialidad_paciente;
        $doctor->cedula_paciente = $request->cedula_paciente;
        $doctor->correo_paciente = $request->correo_paciente;
        $doctor->fecha_nacimiento_paciente = $request->fecha_nacimiento_paciente;
        $doctor->fecha_reserva_paciente = $request->fecha_reserva_paciente;
        $doctor->hora_cita_paciente = $request->hora_cita_paciente;
        $doctor->evaluacion_doctor = $request->evaluacion_doctor;
        $doctor->descripcion_paciente = $request->descripcion_paciente;

        $doctor->save();

        return redirect()->route('doctor');
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
        $editarCitasDoctor = Doctor::findOrFail($id);
        $input = $request->all();
        $editarCitasDoctor->fill($input)->save();
        return redirect()->route('doctor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encuentra el objeto a eliminar
        $eliminarCitasDoctor = Citas::findOrFail($id);

        // Elimina el objeto de la base de datos
        $eliminarCitasDoctor->delete();

        // Redireccionar a una ruta específica (opcional)
        return redirect()->route('doctor');
    }
}
