<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre',
        'tipo_cliente',
        'identidad',
        'telefono',
        'correo_electronico',
        'direccion',
        'nombre_empresa',
        'estado',
    ];

    // Un cliente tiene muchas máquinas
    public function maquinarias()
    {
        return $this->hasMany(Maquinaria::class);
    }

    // Un cliente tiene muchas órdenes de trabajo
    public function ordenesTrabajo()
    {
        return $this->hasMany(OrdenTrabajo::class);
    }
}