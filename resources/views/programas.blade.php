@extends('dashboardAdmin')

@section('contenido')

    <link rel="stylesheet" href="{{ asset('css/programasStyle.css') }}">
    
    <div class="bloque-cabecera-programas">
        <div class="bloque-cabecera-programas__bloque-atras-buscar">
            <button class="bloque-atras-buscar__btn-atras">Atrás</button>
            <div class="bloque-atras-buscar__bloque-buscador">
                <input class="bloque-buscador__buscador" type="search">
                <button class="bloque-buscador__btn-buscar">Buscar</button>
            </div>
        </div>

        <div class="bloque-cabecera-programas__bloque-titulo-agregar">
            <p class="bloque-titulo-agregar__titulo">PROGRAMAS DE</p>
            <button class="bloque-titulo-agregar__btn-agregar">Añadir</button>
        </div>
    </div>

    <div class="bloque-programas">
        @if($programas->isEmpty())
            <p>No hay programas disponibles</p>
        @else
            @foreach($programas as $programa)
                <div class=bloque-programas__bloque-info-programa>
                    <p>{{ $programa->nombre_programa }}</p>
                    <p>{{ $programa->descripcion }}</p>
                    <div class="bloque-info-programa__bloque-btns">
                        <button class="bloque-btns__btn-detalles">Ver detalles</button>
                        <button class="bloque-btns__btn-editar">Editar</button>
                    </div>
                </div>
                <br>
            @endforeach
        @endif
    </div>

@endsection