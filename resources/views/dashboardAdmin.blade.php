<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--link a normalize-->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<!--link a los estilos de bootstrap
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
-->
    <!--link a los estilos propios-->
    <link rel="stylesheet" href="{{ asset('css/dashboardStyle.css') }}">

</head>
<body>
    
  <div class="container" id="container">
<!--HEADER DE LA PAGINA-->
    <div class="container__header" id="header">
        <button class="container__header-btn-desplegar" id="btn-desplegar">
            <img src="{{ asset('images/justify.svg') }}" alt="icon-desplegar">
        </button>
        <button class="container__header-btn-salir"> Salir
          <img src="{{ asset('images/icono_salir.svg') }}" alt="iconSalir" class="container__header-btn-salir-img">
        </button>
    </div>  
<!--BLOQUE ASIDE-->
    <div class="container__aside" id="aside">

        <div class="container__aside-logo">
            <p class="container__aside-logo-nombre">Postgrado UNIBOL</p>
            <button class="container__aside-btn-ocultar" id="btn-ocultar">
                <img src="{{ asset('images/justify.svg') }}" alt="icon-ocultar">
            </button>             
            <img src="{{ asset('images/logo.svg') }}" alt="logo_unibol" class="container__aside-logo-imagen">
        </div>

        <div class="container__aside-home">
            <p class="container__aside-nombre-bloque">Home</p>
            <a class="container__aside-home-enlace" href="{{ route('inicio') }}">Inicio</a>
            <button class="container__aside-home-enlace btn-programas" id="btn-programas" href="#">Programas</button>
            <div class="container__aside-block-programas" id="block-programas">
              <a href="{{ route('programas.index', ['tipo'=>'diplomado']) }}">Diplomados</a>
              <a href="{{ route('programas.index', ['tipo'=>'especialidad']) }}">Especialidades</a>
              <a href="{{ route('programas.index', ['tipo'=>'maestria']) }}">Maestrias</a>
              <a href="{{ route('programas.index', ['tipo'=>'doctorado']) }}">Doctorados</a>
            </div>
            <a class="container__aside-home-enlace" href="#">Docentes</a>
        </div>

        <div class="container__aside-redes-sociales">
            <p class="container__aside-nombre-bloque">Redes Sociales</p>
            <a class="container__aside-redes-sociales-enlace" href="#">Página Oficial</a>
            <a class="container__aside-redes-sociales-enlace" href="#">Facebook</a>
            <a class="container__aside-redes-sociales-enlace" href="#">Instagram</a>
        </div>

        <div class="container__aside-usuarios-roles">
            <p class="container__aside-nombre-bloque">Usuarios y Roles</p>
            <a class="container__aside-usuarios-roles-enlace" href="#">Usuarios</a>
            <a class="container__aside-usuarios-roles-enlace" href="#">Roles</a>
        </div>

        <div class="container__aside-usuario">
            <p>Administrador</p>
            <p>Mero</p>
        </div>

    </div>

    <div class="container__body" id="body">

        @yield('contenido')

    </div>

  </div>
<!--link a mis archivos javaScript-->
    <script src="{{ asset('js/dashboardScript.js') }}"></script>

<!--link a los archivos javaScript de Bootstrap
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    -->
</body>
    
</html>