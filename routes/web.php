<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('cursos', 'CursoController');

Route::resource('alunos', 'AlunoController');

Route::get('alunos/pdf/{id}', 'AlunoController@geraPdf');

