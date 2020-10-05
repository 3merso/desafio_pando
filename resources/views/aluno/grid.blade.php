<h1>
    Listagem de Alunos
</h1>

<table>
  <thead>
    <tr>
      <th scope="col"> Código </th>
      <th scope="col"> Nome  </th>
      <th scope="col"> Ações  </th>
    </tr>
  </thead>

  @foreach($alunos as $aluno)
    <tbody>
      <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST">
        @csrf
        @method('DELETE')
          <tr>
              <td> {{$aluno->id}}               </td>
              <td> {{$aluno->nom_aluno}}        </td>
              <td>
                  <a href="{{ route('alunos.edit', $aluno->id) }}"> Editar     </a>
                  <button type="submit"> Excluir </button>
                  <a href="{{ route('alunos.show', $aluno->id) }}"> Visualizar </a>
                  <a href="{{ route('alunos.pdf', $aluno->id) }}"> Gerar PDF   </a>
              </td>
          </tr>
      </form>
    </tbody>
  @endforeach

</table>

<input type="button" value="Incluir" onclick="novo()">

<script>
    function novo() {
        window.location.href = 'alunos/create';
    }
</script>