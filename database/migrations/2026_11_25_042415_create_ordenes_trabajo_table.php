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
        Schema::create('ordenes_trabajo', function (Blueprint $table) {
    $table->id();
    $table->foreignId('cliente_id')->constrained('clientes')->restrictOnDelete();
    $table->foreignId('maquinaria_id')->constrained('maquinaria')->restrictOnDelete();
    $table->foreignId('paquete_id')->nullable()->constrained('paquetes')->nullOnDelete();
    $table->string('numero_orden')->unique();
    $table->date('fecha_solicitud');
    $table->date('fecha_programada');
    $table->date('fecha_finalizacion')->nullable();
    $table->string('tipo_mantenimiento');
    $table->text('descripcion_problema');
    $table->text('diagnostico')->nullable();
    $table->decimal('presupuesto_total', 10, 2);
    $table->string('estado')->default('Pendiente'); // Pendiente / Programada / En proceso / Finalizada / Cancelada
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenes_trabajo');
    }
};
