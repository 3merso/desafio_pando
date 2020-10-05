<h1>
    Listagem de cursos
</h1>

@if( count($cursos) )

<table>
  <thead>
    <tr>
      <th scope="col"> Código </th>
      <th scope="col"> Curso  </th>
      <th scope="col"> Carga horária (horas) </th>
      <th scope="col"> Ações  </th>
    </tr>
  </thead>

  @foreach($cursos as $curso)
    <tbody>
      <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
        @csrf
        @method('DELETE')
          <tr>
              <td> {{$curso->id}}               </td>
              <td> {{$curso->nom_curso}}        </td>
              <td> {{$curso->num_carga_horaria}}</td>
              <td>
                  <a href="{{ route('cursos.edit', $curso->id) }}" > Editar  </a>
                  <button type="submit"> Excluir </button>
                  <a href="{{ route('cursos.show', $curso->id) }}" > Visualizar  </a>
              </td>
          </tr>
      </form>
    </tbody>
  @endforeach

</table>

@else
    <h2> Não há nenhum curso cadastrado </h2>
@endif

<input type="button" value="Incluir" onclick="novo()">

<script>
    function novo() {
        window.location.href = 'cursos/create';
    }
</script>