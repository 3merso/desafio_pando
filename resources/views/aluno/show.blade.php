<h1> Visualização de Aluno </h1>
    <hr>
    <form>
        <div class="form-group">
            <label> Nome do Aluno </label>
            <input type="text" value="{{ $aluno->nom_aluno }}" readonly>
        </div>

        <button type="button"> <a href="{{ url()->previous() }}"> Voltar </a> </button>
    </form>
