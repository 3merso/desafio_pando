<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Curso;
use Fpdf\Fpdf;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index()
    {
        $alunos = Aluno::with(['cursos'])->get();
        return view('aluno.grid', compact('alunos'));
    }


    public function create()
    {
        $cursos = Curso::all(['id', 'nom_curso']);
        return view('aluno.form', compact('cursos'));
    }


    public function store(Request $request)
    {
        $aluno = Aluno::create( $request->all() );
        return redirect(route('alunos.index'));
    }


    public function show(Aluno $aluno)
    {
        return view('aluno.show', compact('aluno'));
    }

    
    public function edit(Aluno $aluno)
    {
        return view('aluno.edit', compact('aluno'));
    }


    public function update(Request $request, Aluno $aluno)
    {
        $aluno->fill($request->all());
        $aluno->update();

        return redirect(route('alunos.index'));
    }


    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return redirect(route('alunos.index'));
    }

    public function geraPdf($id)
    {
        $aluno = Aluno::findOrFail($id);

        $fpdf = new Fpdf();

        $fpdf->AddPage();
        $fpdf->Image('logo.png',10,6,30);
        $fpdf->SetFont('Courier', 'B', 18);
        $fpdf->Cell(50, 25, 'Parabens ' . $aluno->nom_aluno . ' pela conclusao do curso!');
        $fpdf->Output();
    }
}
