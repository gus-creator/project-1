<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public $timestamps = false;
    
    use HasFactory;

    protected $table = 'programas';

    protected $fillable = [
        'cod_programa',
        'nombre_programa',
        'gestion_ini',
        'gestion_fin',
        'version_programa',
        'estado_programa',
        'horas',
        'creditos',
        'resolucion_ministerial',
        'tipo_programa',
        'ruta_imagen',
        'id_usuario',
        'descripcion'
    ];
}
