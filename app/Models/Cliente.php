<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
     use HasFactory;
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