<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        $cursos = Curso::with(['alunos'])->get();
        return view('curso.grid', compact('cursos'));
    }


    public function create()
    {
        
        return view('curso.form');
    }


    public function store(Request $request)
    {
        $curso = Curso::create( $request->all() );
        return redirect(route('cursos.index'));
    }


    public function show(Curso $curso)
    {
        return view('curso.show', compact('curso'));
    }


    public function edit(Curso $curso)
    {
        return view('curso.edit', compact('curso'));
    }


    public function update(Request $request, Curso $curso)
    {
        $curso->fill($request->all());
        $curso->update();

        return redirect(route('cursos.index'));
    }


    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect(route('cursos.index'));
    }
}
