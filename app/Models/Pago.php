<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pago extends Model
{
     use HasFactory;
    protected $fillable = [
        'orden_trabajo_id',
        'fecha_pago',
        'monto',
        'metodo_pago',
        'referencia',
        'observacion',
    ];

    protected function casts(): array
    {
        return [
            'fecha_pago' => 'date',
            'monto'      => 'decimal:2',
        ];
    }

    // Cada pago pertenece a una orden de trabajo
    public function ordenTrabajo()
    {
        return $this->belongsTo(OrdenTrabajo::class, 'orden_trabajo_id');
    }
}