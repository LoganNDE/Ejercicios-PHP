<?php

use App\Http\Controllers\calculadoraController;
use App\Http\Controllers\formularioController;
use App\Http\Controllers\leydHont;
use App\Http\Controllers\loginController;
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

Route::get('/ejercicios/{unit?}', function($unit=null){
    $unitDone = [1,2,3,4];

    if (is_null($unit)) {
        return redirect('/ejercicios/1');
    }

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


Route::post('ejercicios/unidad3/ley-d-hont', [leydHont::class, 'calculo'])->name('calculo-view');

Route::post('ejercicios/unidad3/calculadora', [calculadoraController::class, 'calcularResultado'])->name('calculadora');

Route::post('ejercicios/unidad3/formulario', [formularioController::class, 'procesarInfo'])->name('procesarInfo');

Route::get('ejercicios/unidad3/login', [loginController::class, 'loginGET'])->name('loginGET');

Route::post('ejercicios/unidad3/login', [loginController::class, 'loginCheck'])->name('loginCheck');