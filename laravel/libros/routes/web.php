<?php

use App\Http\Controllers\BiblioCompraController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BiblioCompraController::class, 'index'])->name('index');

Route::resource('libros', BiblioCompraController::class);



