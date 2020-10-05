<h1> Inclusão de Curso </h1>
    <hr>
    <form action="{{ route('cursos.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label> Nome do Curso </label>
            <input type="text" name="nom_curso">
        </div>

        <div class="form-group">
            <label> Carga Horária </label>
            <input type="number" name="num_carga_horaria">
        </div>

        <button type="submit" class="btn btn-primary"> Salvar </button>
        <button type="button"> <a href="{{ url()->previous() }}"> Voltar </a> </button>
    </form>
