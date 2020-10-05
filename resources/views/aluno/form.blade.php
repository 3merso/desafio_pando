<h1> Inclusão de Aluno </h1>
    <hr>
    <form action="{{ route('alunos.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label> Nome do Aluno </label>
            <input type="text" name="nom_aluno">
        </div>

        <div class="form-group">
            <label> Curso </label><br>
            <select name="curso_id"> Selecione </select>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}"> {{ $curso->nom_curso }} </option>
            @endforeach
        </div>

        <br>
        <button type="submit" class="btn btn-primary"> Salvar </button>
        <button type="button"> <a href="{{ url()->previous() }}"> Voltar </a> </button>
    </form>
