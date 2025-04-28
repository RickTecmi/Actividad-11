<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Menús - @yield('title', 'Bienvenido')</title> {{-- Título dinámico --}}

    {{-- Estilos CSS (opcional, para resaltar el menú) --}}
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Asegura que el footer quede abajo */
        }
        header {
            background-color: #f1f1f1;
            padding: 15px;
            border-bottom: 1px solid #ccc;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex; /* Menú horizontal */
            gap: 15px; /* Espacio entre elementos */
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border-radius: 4px;
        }
        /* Estilo para el enlace activo */
        nav ul li a.active {
            font-weight: bold;
            background-color: #007bff;
            color: white;
        }
        main {
            flex-grow: 1; /* Hace que el contenido principal ocupe el espacio disponible */
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto; /* Empuja el footer hacia abajo */
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <ul>
                {{-- Enlace Inicio --}}
                <li>
                    <a href="{{ route('inicio') }}"
                       class="{{ request()->routeIs('inicio') ? 'active' : '' }}">
                       Inicio
                    </a>
                </li>
                {{-- Enlace Fotos --}}
                <li>
                    <a href="{{ route('fotos') }}"
                       class="{{ request()->routeIs('fotos') ? 'active' : '' }}">
                       Fotos
                    </a>
                </li>
                {{-- Enlace Contacto --}}
                <li>
                    <a href="{{ route('contacto') }}"
                       class="{{ request()->routeIs('contacto') ? 'active' : '' }}">
                       Contacto
                    </a>
                </li>
                {{-- Añade más enlaces si tienes más secciones --}}
                {{--
                <li>
                    <a href="{{ route('blog') }}"
                       class="{{ request()->routeIs('blog') ? 'active' : '' }}">
                       Blog
                    </a>
                </li>
                --}}
            </ul>
        </nav>
    </header>

    <main>
        {{-- Aquí se insertará el contenido específico de cada vista --}}
        @yield('content')
    </main>

    <footer>
        <p>Actividad realizada por: [Ricardo Gutiérrez]</p>
        {{-- Puedes añadir más información si lo deseas --}}
        <p>&copy; {{ date('Y') }} - Todos los derechos reservados.</p>
    </footer>

</body>
</html>
