<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';
    protected $primaryKey = 'id';
    
    public function profesores(){
        return $this->belongsToMany(Profesor::class, 'imparte','asignatura_id','profesor_id');
    }
}
