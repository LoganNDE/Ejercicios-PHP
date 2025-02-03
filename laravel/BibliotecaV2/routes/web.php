<?php

use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', function(){
    return view('libros.index');
})->name('index');



Route::get('test', function() {
    $autor = Author::findOrFail(1);
    $libro = new Book();
    $libro->title = "Libro de prueba " . rand();
    $libro->price = 5;
    $libro->description = "Editorial de prueba";
    $libro->image = 'example';
    $libro->author()->associate($autor);
    $libro->save();
    return view('libros.index', compact('libro'));
});