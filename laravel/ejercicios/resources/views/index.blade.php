@extends('templates/header')

@section('content')


    @php
        $title = ['Información Básica', 'Curriculum', 'Área Círculo', 'Prueba IF', 'Prueba ELSE IF', 'Contador', 'Contador Mejorado', 'Array', 'Array Asociativo', 'Personas'];
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

    @endphp

    <div class="container-fluid d-flex justify-content-center align-items-center flex-column p-5">
        <h1 class="mb-4">Listado de ejercicios</h1>

        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
            @for ($i = 0; $i < count($title); $i++)
                <div class="col">
                    <div class="card h-100" style="width: 100%;">
                    <img src="https://private-user-images.githubusercontent.com/159481843/398827953-68f003f9-ca5f-43f5-b0e6-c89976b08dc0.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MzU0Mzc2ODUsIm5iZiI6MTczNTQzNzM4NSwicGF0aCI6Ii8xNTk0ODE4NDMvMzk4ODI3OTUzLTY4ZjAwM2Y5LWNhNWYtNDNmNS1iMGU2LWM4OTk3NmIwOGRjMC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQxMjI5JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MTIyOVQwMTU2MjVaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0wZjJhM2RiMzVhNmE2ZmQwZWMxOTUzZDQ4NmRkYTA3OTdjZTk4OWEwZGYxM2MwNWYyODI4OGYzZGVjYWFkMmM4JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.OW7jwPlE0Oiw3XWsggZv2A97j1EBgev6lkW056FDQ2w" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="fs-5"> {{ $title[$i] }} </h2>
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