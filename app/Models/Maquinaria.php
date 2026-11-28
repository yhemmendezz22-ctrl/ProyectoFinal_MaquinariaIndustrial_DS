<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maquinaria extends Model
{
     use HasFactory;
    // Laravel pluralizaría a "maquinarias"; nuestra tabla se llama "maquinaria"
    protected $table = 'maquinaria';

    protected $fillable = [
        'cliente_id',
        'codigo',
        'nombre',
        'tipo',
        'marca',
        'modelo',
        'numero_serie',
        'ubicacion',
        'fecha_adquisicion',
        'estado',
    ];

    protected function casts(): array
    {
        return [
            'fecha_adquisicion' => 'date',
        ];
    }

    // Cada máquina pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Una máquina tiene muchas órdenes de trabajo (su historial de mantenimiento)
    public function ordenesTrabajo()
    {
        return $this->hasMany(OrdenTrabajo::class);
    }
}