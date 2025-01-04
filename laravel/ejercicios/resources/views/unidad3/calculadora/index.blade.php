<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>


    <!--
    <a href="http://localhost/php/Ejercicios-PHP/3-Ejercicios/calculadora/calculadora.php?x=1&y=2">
        Envair datos
    </a>
    -->
    

    <form action="{{ route('calculadora') }}" method="post">
        @csrf
        Introduzca A<input type="number" name="x">
        Introduzca B<input type="number" name="y">
        <button type="submit">Enviar</button>
    </form>
    
    @if(session('resultado'))
        {{ session('resultado') }}
    @endif

</body>
</html>