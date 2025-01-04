<?php

use App\Http\Controllers\calculadoraController;
use App\Http\Controllers\formularioController;
use App\Http\Controllers\leydHont;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejercicios/{unit?}', function($unit=1){
    $unitDone = [1,2,3,4];
    if (in_array($unit,$unitDone)){
        return view('index', compact('unit'));
    }else{
        abort(404);
    }
});

Route::get('/ejercicios/{unit}/{exercises}', function($unit ,$exercises){
    if (view()->exists("$unit/$exercises/index")){
        return view("$unit/$exercises/index");
    }else{
        abort(404);
    }
});


Route::post('ejercicios/unidad3/ley-d-hont/calculo-view', [leydHont::class, 'calculo'])->name('calculo-view');

Route::post('ejercicios/unidad3/calculadora/index', [calculadoraController::class, 'calcularResultado'])->name('calculadora');

Route::post('ejercicios/unidad3/formulario/formulario-view', [formularioController::class, 'procesarInfo'])->name('procesarInfo');
