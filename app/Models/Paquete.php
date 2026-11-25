<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'duracion',
        'estado',
    ];

    protected function casts(): array
    {
        return [
            'precio' => 'decimal:2',
        ];
    }

    // Un paquete incluye varios servicios (muchos a muchos)
    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'paquete_servicio', 'paquete_id', 'servicio_id');
    }

    // Un paquete puede estar en varias órdenes
    public function ordenesTrabajo()
    {
        return $this->hasMany(OrdenTrabajo::class);
    }
}