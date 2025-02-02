<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>@yield('titulo')</title>
</head>
<body>
    <header class="w-full bg-blue-300 flex justify-center">
        <div class="w-4/6 flex justify-between items-center">
            <img src="" alt="LOGO">
            <a class="px-6 h-12 flex items-center justify-center text-lg rounded-md bg-slate-400" href="{{ route('redirectLogin') }}">Iniciar Sesion</a>
        </div>
        
    </header>
    @yield('contenido')
    <footer class="w-full bg-blue-300 flex justify-center items-center">
        <p>Hecho por Logan Naranjo Rodriguez</p>
    </footer>
</body>
</html>