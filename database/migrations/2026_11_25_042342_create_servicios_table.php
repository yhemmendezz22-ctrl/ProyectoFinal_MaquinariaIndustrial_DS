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
        Schema::create('servicios', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->string('categoria');
    $table->text('descripcion');
    $table->decimal('precio_base', 10, 2);
    $table->unsignedInteger('duracion_estimada'); //
    $table->string('estado')->default('Activo'); // Activo / Inactivo
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
