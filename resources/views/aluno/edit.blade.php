<h1> Edição de Aluno </h1>
    <hr>
    <form action="{{ route('alunos.update', $aluno->id) }}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="form-group">
            <input type="hidden" name="id" value="{{ $aluno->id }}">
            <label> Nome do Aluno </label>
            <input type="text" name="nom_aluno" value="{{ $aluno->nom_aluno }}">
        </div>

        <button type="submit"> Salvar </button>
        <button type="button"> <a href="{{ url()->previous() }}"> Voltar </a> </button>
    </form>
