<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Ejercicios PHP | Logan Naranjo Rodriguez</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Aprendiendo Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Temas
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/ejercicios/1">Tema 1</a></li>
                    <li><a class="dropdown-item" href="/ejercicios/2">Tema 2</a></li>
                    <li><a class="dropdown-item" href="/ejercicios/3">Tema 3</a></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="CRUD" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            </div>
        </div>
    </nav>

    @yield('content')

</body>
</html>