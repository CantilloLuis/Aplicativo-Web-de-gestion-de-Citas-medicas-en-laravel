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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->bigInteger('telefono')->nullable();
            $table->string('especialidad')->nullable();
            $table->bigInteger('cedula')->nullable();
            $table->string('correo')->nullable();
            $table->string('direccion')->nullable();
            $table->string('fechaNacimiento')->nullable();
            $table->string('fechaCita')->nullable();
            $table->string('hora')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
