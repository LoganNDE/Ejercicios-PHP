@extends('templates/header')

@section('content')

    @php
        $title = [];
        $descriptions = [];
        $folders = [];
        $images = [];
    @endphp

    @switch($unit)
        @case(1):
            @php
                $titles = ['Información Básica', 'Curriculum', 'Área Círculo', 'Prueba IF', 'Prueba ELSE IF', 'Contador', 'Contador Mejorado', 'Array', 'Array Asociativo', 'Personas'];
                $descriptions = [
                "Crea un archivo PHP en el que definas dos variables (nombre y año de nacimiento) y muestres la información: \"Me llamo XXXX y nací en el año YYYY.\"",
                "Crea un archivo PHP en el que uses variables variables para mostrar tu currículum en tres idiomas (español, valenciano y otro idioma), incluyendo tus estudios e idiomas hablados.",
                "Crea un archivo PHP que calcule el área de un círculo con un radio de 3.5 usando la constante PI. Muestra el resultado en pantalla.",
                "Crea un archivo PHP en el que definas dos notas de examen y utilices if..else para determinar y mostrar cuál es la mayor.",
                "Crea un archivo PHP en el que definas tres notas y utilices if..elseif..else para determinar cuál es la mayor.",
                "Crea un archivo PHP en el que utilices un bucle for para contar del 1 al 100 y un while para hacer una cuenta atrás del 10 al 0.",
                "Crea un archivo PHP que modifique el ejercicio anterior añadiendo títulos y párrafos en HTML explicando lo que hace cada contador.",
                "Crea un archivo PHP que rellene un array con 50 números aleatorios entre 0 y 99. Muestra el mayor, el menor y la media.",
                "Crea un archivo PHP que rellene un array con 100 elementos aleatorios de \"M\" o \"F\", y luego muestre cuántos hay de cada uno usando un array asociativo.",
                "Crea un archivo PHP en el que almacenes el nombre, altura y email de 5 personas en un array bidimensional, y muestra los datos en una tabla HTML."
                ];
                $folders = ['informacionBasica', 'curriculum', 'areaCirculo', 'pruebaIF', 'pruebaELSE-IF', 'contador', 'contadorMejorado', 'array', 'arrayAsociativo', 'personas'];
                $images = ['info.png', 'curriculum.png', 'circulo.png', 'notas.png', 'notasV2.png', 'contadorPHP.png', 'contadorPHPV2.png', 'numAleatorios.png', 'ArrayAso.png', 'Personas.png'];
            @endphp
            @break
        @case(2):
            @php
                $titles = ["Contador", "Intercambiar", "Parámetros Variables", "Comprobar Hora", "Matemáticas", "Frase Impares", "Analizador", "Analizador con Word Count", "Escritura Rara", "Frase Palíndromo", "Plantilla", "Casas Rurales", "Lotería"];
                $descriptions = [
                "Cuenta de un número a otro, separando los números por comas (del 10 al 20).",
                "Intercambia dos números por referencia.",
                "Devuelve el mayor de varios números usando parámetros variables.",
                "Procesa una hora en formato texto y extrae hora, minuto y segundo, comprobando su validez.",
                "Añade funciones para contar dígitos, obtener un dígito específico, y quitar dígitos por delante y por detrás.",
                "Devuelve una nueva frase con solo los caracteres en las posiciones impares.",
                "Devuelve el número total de letras, palabras y el tamaño de cada palabra en una frase.",
                "Repite el ejercicio anterior usando la función str_word_count.",
                "Transforma una cadena a estilo 'cAnI', alternando mayúsculas y minúsculas.",
                "Indica si una palabra es palíndroma (se lee igual de izquierda a derecha que de derecha a izquierda).",
                "Muestra una tabla HTML con los datos de un archivo CSV (Dorsal, Nombre, Apellidos, Posición, Equipo).",
                "Carga datos de un archivo CSV de casas rurales en Castellón y muestra solo aquellos con teléfono.",
                "Genera una apuesta aleatoria para la Primitiva o Euromillones usando programación modular."
                ];
                $folders = ['Contador', 'Intercambiar', 'parametrosVariables', 'ComprobarHora', 'Matematicas', 'FraseImpares', 'Analizador', 'AnalizadorWordCount', 'EscrituraRara', 'FrasePalindromo', 'Plantilla', 'CasasRurales', 'Loteria'];
                $images = ['contador.png', 'intercambiar.png', 'parametrosVariables.png', 'comprobarHora.png', 'matematicas.png', 'frasesImpares.png', 'analizador.png', 'analizadorWC.png', 'cani.png', 'palindromo.png', 'plantilla.png', 'casasRurales.png', 'loteria.png'];
                @endphp
            @break
        @case(3):
        @php
            $titles = ["Calculadora", "Formulario", "Login", "Subida de Imágenes", "Ley d'Hont"];
            $descriptions = [
                "Calculadora que realiza operaciones matemáticas con lógica separada de la interfaz de usuario.",
                "Formulario HTML que envía datos a un script PHP para ser procesados.",
                "Sistema de autenticación simple con una página de inicio de sesión, validación y redirección según autorización.",
                "Permite a los usuarios subir imágenes a un servidor con una interfaz para seleccionar el archivo.",
                "Implementa el sistema de asignación de escaños Ley d'Hont para calcular la distribución de escaños."
            ];
            $folders = ["calculadora", "formulario", "login", "subirImagenes", "ley-d-hont"];
            $images = ["calculadora.png", "formulario.png", "login.png", "subirimagen.png", "leydHont.png"];
            @endphp
            @break
    @endswitch




    <div class="container-fluid d-flex justify-content-center align-items-center flex-column p-5">
        <h1 class="mb-4">Listado de ejercicios - Tema  {{$unit}} </h1>

        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
            @for ($i = 0; $i < count($titles); $i++)
                <div class="col">
                    <a href="unidad{{ $unit }}/{{ $folders[$i] }}">
                    <div class="card h-100" style="width: 100%;">
                        <img src=" {{ asset("images/T" . $unit . "/" . $images[$i]) }} " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="fs-5"> {{ $titles[$i] }} </h2>
                    </a>
                            <hr>
                            <p class="card-text fs-7"> {{$descriptions[$i]}} </p>
                        </div>
                    </div>
                </div>
            @endfor
            </div>
        </div>
    </div>
@endsection