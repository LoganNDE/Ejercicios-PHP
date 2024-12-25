<?php

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


Route::get('/logout', function () {
    return "Has cerrado sesion";
});

Route::get('/catalog', function () {
    return "Estas viendo el catalogo";
});

Route::get('/catalog/show/{id}', function ($id = 0) {
    return "Tu código de catálogo es el $id";
})->where('id', "[0-9]+");

Route::get('/catalog/create', function () {
    return view('create');
});

Route::get('/catalog/edit/{id}', function ($id = 0) {
    return "Modificar película $id";
})->where('id', "[0-9]+");


Route::get('/tabla/{numero?}', function ($numero = 3) {
    for ($i = 0; $i <= 10; $i++) {
        echo "<p>".$numero." x ".$i." = ".$numero * $i."</p>";
    }
});