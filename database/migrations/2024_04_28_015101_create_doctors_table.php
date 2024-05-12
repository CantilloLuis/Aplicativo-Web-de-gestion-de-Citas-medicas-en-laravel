<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_doctor')->nullable();
            $table->string('nombre_paciente')->nullable();
            $table->string('apellido_paciente')->nullable();
            $table->string('correo_paciente')->nullable();
            $table->string('direccion_paciente')->nullable();
            $table->string('telefono_paciente')->nullable();
            $table->string('especialidad_paciente')->nullable();
            $table->string('cedula_paciente')->nullable();
            $table->date('fecha_nacimiento_paciente')->nullable();
            $table->date('fecha_reserva_paciente')->nullable();
            $table->time('hora_cita_paciente')->nullable();
            $table->text('descripcion_paciente')->nullable();
            $table->text('evaluacion_doctor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
