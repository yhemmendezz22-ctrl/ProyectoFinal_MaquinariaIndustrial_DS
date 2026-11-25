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
        Schema::create('maquinaria', function (Blueprint $table) {
    $table->id();
    $table->foreignId('cliente_id')->constrained('clientes')->OnDelete('cascade');
    $table->string('codigo');
    $table->string('nombre');
    $table->string('tipo');
    $table->string('marca');
    $table->string('modelo');
    $table->string('numero_serie');
    $table->string('ubicacion');
    $table->date('fecha_adquisicion')->nullable();
    $table->string('estado')->default('Operativa'); // Operativa / En mantenimiento / Fuera de servicio
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinaria');
    }
};
