@extends('dashboardAdmin')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/programaDetalleStyle.css') }}">

<div class="container-detalle-programa">
    <div class="container-detalle-programa__block-btn-atras">
        <a href="javascript:window.history.back();">Atrás</a>
    </div>
    <div class="container-detalle-programa__block-nombre-programa">
        <p>{{ $programa->nombre_programa }}</p>
    </div>
    <div class="container-detalle-programa__block-btns">
        <div class="container-detalle-programa__block-btns-1">
            <a href="{{ route('modulos.index', ['idPrograma'=>$programa->id_programa]) }}">Ver Módulos</a>
            <a href="#">Ver Estudiantes</a>
        </div>
        <div class="container-detalle-programa__block-btns-2">
            <button>Editar</button>
            <button>Añadir</button>
        </div>
    </div>
    <div class="container-detalle-programa__bloque-datos">
        <div class="container-detalle-programa__bloque-datos-titulo">
            <p>DETALLES DEL PROGRAMA</p>
        </div>
        <div class="container-detalle-programa__bloque-datos-los-datos">
            <div>
                <label for="cod-programa">Código:</label>
                <input type="text" value="{{ $programa->cod_programa }}" class="container-detalle-programa__input">
            </div>
            <div>
                <label for="">Nombre del Programa:</label>
                <input type="text" value="{{ $programa->nombre_programa }}" class="container-detalle-programa__input">
            </div>
            <div>
                <label for="">Gestión Inicio:</label>
                <input type="text" value="{{ $programa->gestion_ini }}" class="container-detalle-programa__input">
            </div>
            <div>
                <label for="">Gestión Fin:</label>
                <input type="text" value="{{ $programa->gestion_fin }}" class="container-detalle-programa__input">
            </div>
            <div>
                <label for="">Versión del Programa:</label>
                <input type="text" value="{{ $programa->version_programa }}" class="container-detalle-programa__input">
            </div>
            <div>
                <label for="">Estado del Programa:</label>
                <input type="text" value="{{ $programa->estado_programa }}" class="container-detalle-programa__input">
            </div>
            <div>
                <label for="">Horas:</label>
                <input type="text" value="{{ $programa->horas }}" class="container-detalle-programa__input">
            </div>
            <div>
                <label for="">Créditos:</label>
                <input type="text" value="{{ $programa->creditos }}" class="container-detalle-programa__input">
            </div>
            <div>
                <label for="">Resolución Ministerial:</label>
                <input type="text" value="{{ $programa->resolucion_ministerial }}" class="container-detalle-programa__input">
            </div>
        </div>
        
    </div>
</div>

<script src="{{ asset('js/programaDetalle.js') }}"></script>

@endsection