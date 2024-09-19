<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contratos';

    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'estado_contrato',
        'periodo_pago',
        'id_tipo_contrato',
    ];

    protected $dates = [
        'fecha_inicio',
        'fecha_fin',
    ];

    public function tipoContrato()
    {
        return $this->belongsTo(TipoContrato::class, 'id_tipo_contrato', 'id_tipo_contrato');
    }
}
