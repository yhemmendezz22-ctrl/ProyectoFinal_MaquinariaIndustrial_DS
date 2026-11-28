<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio extends Model
{
     use HasFactory;
    protected $fillable = [
        'nombre',
        'categoria',
        'descripcion',
        'precio_base',
        'duracion_estimada',
        'estado',
    ];

    protected function casts(): array
    {
        return [
            'precio_base' => 'decimal:2',
        ];
    }

    // Un servicio puede estar en varios paquetes (muchos a muchos)
    public function paquetes()
    {
        return $this->belongsToMany(Paquete::class, 'paquete_servicio', 'servicio_id', 'paquete_id');
    }

    // Un servicio puede estar en varias órdenes (muchos a muchos)
    public function ordenesTrabajo()
    {
        return $this->belongsToMany(OrdenTrabajo::class, 'orden_servicio', 'servicio_id', 'orden_trabajo_id');
    }
}