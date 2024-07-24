<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboardStyle.css') }}">

</head>
<body>
    
    <!--sidebar-->
    <div class="sidebar">

      <h2 class="sidebar__titulo">Postgrado Unibol</h2>

      <div class="sidebar__bloque-home">
        <p class="bloque-home__titulo">home</p>
        <a class="bloque-home__enlace" href="/inicio">- Inicio</a>
        <button class="bloque-home__boton-programas" id="botonProgramas">- Programas</button>
        <div class="bloque-home__bloque-desplegable" id="opcionesOcultas">
          <a class="bloque-desplegable__enlace" href="{{ route('programas.index', ['tipo' => 'diplomado']) }}">Diplomados</a>
          <a class="bloque-desplegable__enlace" href="{{ route('programas.index', ['tipo' => 'especialidad']) }}">Especialidades</a>
          <a class="bloque-desplegable__enlace" href="{{ route('programas.index', ['tipo' => 'maestria']) }}">Maestrias</a>
          <a class="bloque-desplegable__enlace" href="{{ route('programas.index', ['tipo' => 'doctorado']) }}">Doctorados</a>
        </div>
        <a class="bloque-home__enlace" href="#">- Docentes</a>
      </div>

      <div class="sidebar__bloque-redes-sociales">
        <p class="bloque-redes-sociales__titulo">Redes Sociales</p>
        <a class="bloque-redes-sociales__enlace" href="#">Facebook</a>
        <a class="bloque-redes-sociales__enlace" href="#">Instagram</a>
        <a class="bloque-redes-sociales__enlace" href="#">Página Oficial</a>
      </div>

      <div class="sidebar__bloque-usuarios-roles">
        <p class="bloque-usuarios-roles__titulo">Usuarios Roles</p>
        <a class="bloque-usuarios-roles__enlace" href="#">Usuarios</a>
        <a class="bloque-usuarios-roles__enlace" href="#">Roles</a>
      </div>

    </div>

    <!--boton salir-->
    <div class="bloque-salir">
      <p class="bloque-salir__ruta">Programas/</p>
      <button class="bloque-salir__boton-salir">Salir</button>
    </div>

    <!--Contenido-->

    <script src="{{ asset('js/dashboardScript.js') }}"></script>

    @yield('contenido')
    
</body>
    
</html>