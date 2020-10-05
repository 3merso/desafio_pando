<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    

    protected $fillable = ['id', 'nom_curso', 'num_carga_horaria'];
    public $timestamps  = false;


    public function alunos() {
        return $this->belongsToMany(Aluno::class);
    }
}
