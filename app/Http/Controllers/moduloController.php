<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;
use App\Models\Modulo;

class moduloController extends Controller
{
    public function index($idPrograma) {
        $programa = Programa::where('id_programa', $idPrograma)->first();

        //$modulos = Modulo::where('id_programa', $idPrograma)->get();
        
        $modulos = DB::table('modulos')
            ->join('usuarios', 'modulos.id_usuario', '=', 'usuarios.id_usuario')
            ->select(
                'modulos.*',
                DB::raw('CONCAT(usuarios.nombre, " ", usuarios.apellido_paterno, " ", usuarios.apellido_materno) as nombre_completo')
            )
            ->where('modulos.id_programa', $idPrograma)
            ->get();

        return view('modulos', ['programa'=>$programa, 'modulos'=>$modulos]);
    }
}
