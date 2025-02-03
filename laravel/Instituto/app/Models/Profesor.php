<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';
    protected $primaryKey = 'id';

    public function asignaturas(){
        return $this->belongsToMany(Asignatura::class, 'imparte','profesor_id','asignatura_id');
    }
}
