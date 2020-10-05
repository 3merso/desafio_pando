<h1> Visualização de Curso </h1>
    <hr>
    <form>
        <div class="form-group">
            <label> Nome do Curso </label>
            <input type="text" value="{{ $curso->nom_curso }}" readonly>
        </div>

        <div class="form-group">
            <label> Carga Horária </label>
            <input type="number" value="{{ $curso->num_carga_horaria }}" readonly>
        </div>

        <button type="button"> <a href="{{ url()->previous() }}"> Voltar </a> </button>
    </form>
