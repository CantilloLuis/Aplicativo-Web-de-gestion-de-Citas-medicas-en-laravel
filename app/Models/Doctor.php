<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_doctor',
        'nombre_paciente',
        'apellido_paciente',
        'correo_paciente',
        'telefono_paciente',
        'especialidad_paciente',
        'cedula_paciente',
        'fecha_nacimiento_paciente',
        'fecha_reserva_paciente',
        'hora_cita_paciente',
        'descripcion_paciente',
        'evaluacion_doctor'
    ];
}
