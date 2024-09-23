<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'modulos';

    protected $fillable = [
        'id_modulo',
        'cod_modulo',
        'denominativo',
        'nombre_modulo',
        'horas_academicas',
        'semestre',
        'id_programa',
        'id_usuario'
    ];
}
