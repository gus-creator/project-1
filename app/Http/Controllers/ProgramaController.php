<?php

namespace App\Http\Controllers;

use App\Models\Programa;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Muetras todos los programas académicos del tipo indicado
     */
    public function index($tipo)
    {

        $programas = Programa::where('tipo_programa', $tipo)->get();

        return view('programas',[
            'programas' => $programas,
            'tipoPrograma' => $tipo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $tipo)
    {
        // Definir reglas de validación
        $validator = Validator::make($request->all(), [
            'nombrePrograma' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'codigo' => 'required',
            'gestionIni' => 'required',
            'gestionFin' => 'required',
            'version' => 'required',
            'horas' => 'required',
            'creditos' => 'required',
            'resolucion' => 'required'
        ]);

        // Verificar si la validación falla
        /*if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }*/

        //si pasa las validaciones entonces se registra el programa
        $programa = new Programa();

        $programa->cod_programa = $request->input('codigo');
        $programa->nombre_programa = $request->input('nombrePrograma');
        $programa->gestion_ini = $request->input('gestionIni');
        $programa->gestion_fin = $request->input('gestionFin');
        $programa->version_programa = $request->input('version');
        $programa->estado_programa = $request->input('estado');
        $programa->horas = $request->input('horas');
        $programa->creditos = $request->input('creditos');
        $programa->resolucion_ministerial = $request->input('resolucion');
        $programa->tipo_programa = $tipo; //ojo acá
        //guardar imagen y obtener su path
        $imagenPath = $request->file('imagen')->store('images', 'public');
        //guardar su ruta en la base de datos
        $programa->ruta_imagen = $imagenPath;

        $programa->id_usuario = 1; //de momento, luego capturar el id del usuario en la página
        $programa->descripcion = $request->input('descripcion');

        $programa->save();

    }

    /**
     * Muestra los detalles del programa seleccionado
     */
    public function show($idPrograma)
    {
        $programa = Programa::where('id_programa', $idPrograma)->first();

        return view('programaDetalle',['programa'=>$programa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
