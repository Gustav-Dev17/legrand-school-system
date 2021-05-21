@extends('website.principal')

@section('conteudo')

    @if ($alunos->isEmpty())
        </br>
        <div class="alert alert-danger">
            Não há cadastros para exibir!
        </div>
        <div class="col-12">
            <a href="{{route('site.cadastro')}}" class="btn btn-primary" role="button" data-bs-toggle="button">Cadastrar um aluno</a>
            <a href="{{route('site.home')}}" class="btn btn-secondary" role="button" data-bs-toggle="button">Voltar</a>
        </div>
    @else
        </br>
        <h3>Listagem de alunos</h3>

        <table class="table table-hover">
            <thead class="table-dark">
                <tr style="text-align:center">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Série</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cidade</th>
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
                    <td> {{ $a->cidade }}</td>
                </tr>
            @endforeach
        </table>
        <div class="col-12">
            <a href="{{route('site.cadastro')}}" class="btn btn-primary" role="button" data-bs-toggle="button">Cadastrar um aluno</a>
            <a href="{{route('site.exclui')}}" class="btn btn-danger" role="button" data-bs-toggle="button">Excluir</a>
            <a href="{{route('site.home')}}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
        </div>
    @endif
@endsection
