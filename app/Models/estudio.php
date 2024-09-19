<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Estudio extends Model
{
    use HasFactory;

    protected $table = 'estudios';

    protected $fillable = [
        'institucion',
        'año_inicio',
        'año_fin',
        'titulo',
        'nivel_estudio'
    ];

    protected $dates = ['año_inicio', 'año_fin'];

}
