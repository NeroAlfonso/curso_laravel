<DOCTYPE html>
<html>
    <head>
        <title>
            @yield('titulo', 'Sin titulo')
        </title>
    </head>
    <body>
        <h1>
            Inicio
        </h1>
        <nav>
            <ul>
                <li><a href="{{route('inicio')}}">Inicio</a></li>
                <li><a href="{{route('quienes')}}">¿Quiénes somos?</a></li>
                <li><a href="{{route('proyectos')}}">Proyectos</a></li>
                <li><a href="{{route('contacto')}}">Contactos</a></li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>