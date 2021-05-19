@extends('website.principal')

@section('conteudo')

    @if ($alunos->isEmpty())
        </br>
        <div class="alert alert-danger">
            Não há cadastros para excluir!
        </div>

    @else
        </br>
        <h3>Listagem de alunos</h3>

        <table class="table table-hover">
            <thead class="table-dark">
                <tr style="text-align:center">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Série</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Estado da Unidade</th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($alunos as $a)
                <tr style="text-align:center">
                    <td> {{ $a->id }} </td>
                    <td> {{ $a->nome }} </td>
                    <td> {{ $a->idade }} </td>
                    <td> {{ $a->matricula }} </td>
                    <td> {{ $a->nivel_de_ensino }} </td>
                    <td> {{ $a->serie }} </td>
                    <td> {{ $a->turma }}</td>
                    <td> {{ $a->estado }}</td>
                    <td>
                        <a href="{{ action('App\Http\Controllers\AlunoController@remove', $a->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red"
                                class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
    <div class="col-12">
        <a href="{{route('site.cadastro')}}" class="btn btn-primary" role="button" data-bs-toggle="button">Cadastrar um aluno</a>
        <a href="{{route('site.home')}}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
    </div>
@endsection
