<h1> Edição de Curso </h1>
    <hr>
    <form action="{{ route('cursos.update', $curso->id) }}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label> ID </label>
            <input type="hidden" name="id" value="{{ $curso->id }}">
        </div>

        <div class="form-group">
            <label> Nome do Curso </label>
            <input type="text" name="nom_curso" value="{{ $curso->nom_curso }}">
        </div>

        <div class="form-group">
            <label> Carga Horária </label>
            <input type="number" name="num_carga_horaria" value="{{ $curso->num_carga_horaria }}">
        </div>

        <button type="submit" class="btn btn-primary"> Salvar </button>
        <button type="button"> <a href="{{ url()->previous() }}"> Voltar </a> </button>
    </form>
