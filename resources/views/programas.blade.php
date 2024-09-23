@extends('dashboardAdmin')

    <link rel="stylesheet" href="{{ asset('css/programasStyle.css') }}">
<!-----------------------------MODAL FORMULARIO-------------------------->
    <div class="registro-modal" id="modal-formulario">
        <form method="POST" action="{{ route('programas.store', ['tipo'=>$tipoPrograma]) }}" class="registro-modal__formulario" id="formulario-programa" enctype="multipart/form-data">
            @csrf
            <div class="registro-modal__formulario-cuerpo">

                <div class="registro-modal__formulario-cuerpo-datos-grales">

                    <p class="registro-modal__sub-titulo">DATOS GENERALES</p>

                    <div class="registro-modal__block-nombre" id="block-nombre">
                        <label for="campo-nombre">Nombre del Programa:</label>
                        <input type="text" class="registro-modal__input" id="campo-nombre" name="nombrePrograma" value="{{ old('nombre') }}" placeholder="Nombre del programa">
                        <div class="msj-error" id="nombre-error"></div>
                        {!! $errors->first('name', '<small>:message</small>') !!}
                    </div>

                    <div class="registro-modal__block-descripcion" id="block-descripcion">
                        <label for="campo-descripcion">Descripción:</label>
                        <textarea class="registro-modal__input input-descripcion" name="descripcion" id="campo-descripcion" placeholder="Descripción"></textarea>
                        <div class="msj-error" id="descripcion-error"></div>
                    </div>

                    <div class="registro-modal__block-imagen" id="block-img">
                        <label for="campo-imagen">Agregar Imagen:</label>
                        <input type="file" class="registro-modal__input" id="campo-imagen" name="imagen">
                        <div class="msj-error" id="imagen-error"></div>
                    </div>

                </div>

                <div class="registro-modal__formulario-cuerpo-detalles">

                    <p class="registro-modal__sub-titulo">DETALLES DEL PROGRAMA</p>

                    <div class="registro-modal__block-codigo" id="block-codigo">
                        <label for="campo-cod">Código:</label>
                        <input type="text" class="registro-modal__input" id="campo-cod" name="codigo" placeholder="Código">
                        <div class="msj-error" id="cod-error"></div>
                    </div>

                    <div class="registro-modal__block-fechas">
                        <div class="registro-modal__sub-block" id="block-gestion-ini">
                            <label for="gestion-ini">Gestión Inicio:</label>
                            <input type="date" class="registro-modal__input" id="gestion-ini" name="gestionIni">
                            <div class="msj-error" id="gestion-ini-error"></div>
                        </div>

                        <div class="registro-modal__sub-block" id="block-gestion-fin">
                            <label for="gestion-fin">Gestión Fin:</label>
                            <input type="date" class="registro-modal__input" id="gestion-fin" name="gestionFin">
                            <div class="msj-error" id="gestion-fin-error"></div>
                        </div>
                    </div>

                    <div class="registro-modal__block-version-estado">
                        <div class="registro-modal__sub-block" id="block-version">
                            <label for="v-programa">Versión del Programa:</label>
                            <input type="text" class="registro-modal__input" id="v-programa" name="version" placeholder="Escriba la versión">
                            <div class="msj-error" id="version-error"></div>
                        </div>
                        
                        <div class="registro-modal__sub-block">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="registro-modal__select">
                                <option value="enproceso">En Proceso:</option>
                                <option value="concluido">Concluido:</option>
                            </select>
                        </div>
                    </div>

                    <div class="registro-modal__block-horas-creditos">
                        <div class="registro-modal__sub-block" id="block-horas">
                            <label for="campo-horas">Horas del Programa:</label>
                            <input type="text" class="registro-modal__input input-horas" id="campo-horas" name="horas" placeholder="Ingrese el dato">
                            <div class="msj-error" id="horas-error"></div>
                        </div>
                        
                        <div class="registro-modal__sub-block" id="block-creditos">
                            <label for="campo-creditos">Créditos:</label>
                            <input type="text" class="registro-modal__input input-creditos" id="campo-creditos" name="creditos" placeholder="800/40">
                            <div class="msj-error" id="creditos-error"></div>
                        </div>
                    </div>
                    
                    <div class="registro-modal__block-resolucion" id="block-resolucion">
                        <label for="campo-resolucion">Resolución Ministerial:</label>
                        <input type="text" class="registro-modal__input" id="campo-resolucion" name="resolucion" placeholder="Ingrese RM">
                        <div class="msj-error" id="resolucion-error"></div>
                    </div>

                </div>
            </div>

            <div class="registro-modal__formulario-pie">
                <button class="registro-modal__btn-cancelar" id="btn-cancelar">Cancelar</button>
                <button class="registro-modal__btn-registrar" type="submit" id="btn-submit">Registrar</button>
            </div>
            
        </form>
    </div>

@section('contenido')
<!---------------------------BLOQUE PROGRAMAS---------------------------->
    <div class="body-programas" id="body-programas">

        <div class="body-programas__block-superior">
            <div class="body-programas__block-superior-buscador">
                <input class="body-programas__buscador" type="search">
                <button class="body-programas__btn-buscar">
                    <img src="{{ asset('images/search.svg') }}" alt="">
                </button>
            </div>

            <div class="body-programas__block-superior-agregar">
                <p class="body-programas__block-superior-tipo">PROGRAMAS DE {{ strtoupper($tipoPrograma) }}</p>
                <button class="body-programas__block-superior-btn-agregar" id="btn-agregar">Añadir</button>
            </div>
        </div>

        <div class="body-programas__block-inferior">
            @if($programas->isEmpty())
                <p>No hay programas disponibles</p>
            @else
                @foreach($programas as $programa)
                    <div class=body-programas__programa>
                        <div class="body-programas__img-programa">
                            <img src="{{ asset('storage/' . $programa->ruta_imagen) }}" alt="imagen">
                        </div>
                        <div class="body-programas__info-programa">
                            <p class="body-programas__info-programa-nombre">{{ $programa->nombre_programa }}</p>
                            <p class="body-programas__info-programa-descripcion">{{ $programa->descripcion }}</p>
                            <div class="body-programas__block-btns">
                                <a href="{{ route('programa.detalle', ['idPrograma'=>$programa->id_programa]) }}">Ver detalles</a>
                                <button class="body-programas__btn-editar">Editar</button>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            @endif
        </div>
        
    </div>

@endsection

<script src="{{ asset('js/validaFormulario.js') }}"></script>