@extends('dashboardAdmin')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/modulosStyle.css') }}">

    <div class="container-modulos">
        <div class="container-modulos__block-atras">
            <a href="javascript:window.history.back();" class="container-modulos__btn-atras">Atrás</a>
        </div>
        <div class="container-modulos__block-titulo">
            <p class="container-modulos__titulo">DETALLES DEL MODULO</p>
        </div>
        <div class="container-modulos__block-nombre-programa">
            <p class="container-modulos__nombre-programa">{{ $programa->nombre_programa }}</p>
        </div>
        <div class="container-modulos__block-btns">
            <a href="#" class="container-modulos__btn">Ver Estudiantes</a>
            <a href="#" class="container-modulos__btn">Añadir</a>
        </div>
        <div class="container-modulos__block-titulo">
            <p>MÓDULOS</p>
        </div>
        <div class="container-modulos__block-tabla">
            <table class="container-modulos__tabla-modulos">
                <tr class="container-modulos__tabla-modulos-fila container-modulos__tabla-modulos-fila-cabecera">
                    <td class="container-modulos__tabla-modulos-columna">id</td>
                    <td class="container-modulos__tabla-modulos-columna">Cod Módulo</td>
                    <td class="container-modulos__tabla-modulos-columna">Denominativo</td>
                    <td class="container-modulos__tabla-modulos-columna">Nombre Módulo</td>
                    <td class="container-modulos__tabla-modulos-columna">Docente</td>
                    <td class="container-modulos__tabla-modulos-columna">Horas Académicas</td>
                    <td class="container-modulos__tabla-modulos-columna">Semestre</td>
                    <td class="container-modulos__tabla-modulos-columna">...</td>
                </tr>

                @foreach($modulos as $modulo)
                <tr class="container-modulos__tabla-modulos-fila">
                    <td class="container-modulos__tabla-modulos-columna">{{ $modulo->id_modulo }}</td>
                    <td class="container-modulos__tabla-modulos-columna">{{ $modulo->cod_modulo }}</td>
                    <td class="container-modulos__tabla-modulos-columna">{{ $modulo->denominativo }}</td>
                    <td class="container-modulos__tabla-modulos-columna">{{ $modulo->nombre_modulo }}</td>
                    <td class="container-modulos__tabla-modulos-columna">{{ $modulo->nombre_completo }}</td>
                    <td class="container-modulos__tabla-modulos-columna">{{ $modulo->horas_academicas }}</td>
                    <td class="container-modulos__tabla-modulos-columna">{{ $modulo->semestre }}</td>
                    <td class="container-modulos__tabla-modulos-columna">
                        <button class="container-modulos__tabla-btn-editar">
                            <img src="{{ asset('images/pencil-square.svg') }}" alt="icon-editar">
                        </button>
                        <button class="container-modulos__tabla-btn-eliminar">
                            <img src="{{ asset('images/trash3.svg') }}" alt="icon-eliminar">
                        </button>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection