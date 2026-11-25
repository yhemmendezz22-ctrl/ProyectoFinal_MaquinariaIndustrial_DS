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
    { //TABLA INTERMEDIA
        Schema::create('paquete_servicio', function (Blueprint $table) {
    $table->id();
    $table->foreignId('paquete_id')->constrained('paquetes')->cascadeOnDelete();
    $table->foreignId('servicio_id')->constrained('servicios')->cascadeOnDelete();
    $table->unique(['paquete_id', 'servicio_id']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquete_servicio');
    }
};
