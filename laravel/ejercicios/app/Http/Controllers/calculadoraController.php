<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadoraController extends Controller
{
    public function calcularResultado(Request $request){

        $x = $request->input('x');
        $y = $request->input('y');

        $suma = $x + $y;
        return back()->with('resultado', 'La suma de tus numeros equivale:' . $suma);
    }

}
