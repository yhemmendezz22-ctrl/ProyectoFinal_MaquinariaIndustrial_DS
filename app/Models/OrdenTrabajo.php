<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrdenTrabajo extends Model
{
     use HasFactory;
    // Laravel buscaría "orden_trabajos"; nuestra tabla se llama "ordenes_trabajo"
    protected $table = 'ordenes_trabajo';

    protected $fillable = [
        'cliente_id',
        'maquinaria_id',
        'paquete_id',
        'numero_orden',
        'fecha_solicitud',
        'fecha_programada',
        'fecha_finalizacion',
        'tipo_mantenimiento',
        'descripcion_problema',
        'diagnostico',
        'presupuesto_total',
        'estado',
    ];

    protected function casts(): array
    {
        return [
            'fecha_solicitud'    => 'date',
            'fecha_programada'   => 'date',
            'fecha_finalizacion' => 'date',
            'presupuesto_total'  => 'decimal:2',
        ];
    }

    // Cada orden pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Cada orden es sobre una máquina
    public function maquinaria()
    {
        return $this->belongsTo(Maquinaria::class);
    }

    // Una orden puede (o no) tener un paquete
    public function paquete()
    {
        return $this->belongsTo(Paquete::class);
    }

    // Una orden tiene muchos pagos
    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }

    // Una orden incluye varios servicios (muchos a muchos)
    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'orden_servicio', 'orden_trabajo_id', 'servicio_id');
    }
}