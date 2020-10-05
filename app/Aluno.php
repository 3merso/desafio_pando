<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    
    
    protected $fillable = ['nom_aluno'];
    public $timestamps  = false;


    public function cursos() {
        return $this->belongsToMany(Curso::class);
    }
}
