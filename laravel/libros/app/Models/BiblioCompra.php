<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiblioCompra extends Model
{
    protected $table = 'libros';
    protected $fillable = ['title', 'autor', 'portada', 'description', 'price'];
}
