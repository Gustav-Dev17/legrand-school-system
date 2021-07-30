@extends('website.principal')

@section('conteudo')
    <div class="container">
    <br>
        <div class="alert alert-success">
            <strong>Sucesso!</strong> O aluno foi cadastrado.
        </div>
        <div class="col-12">
            <a href="{{route('site.cadastro')}}" class="btn btn-primary" role="button" data-bs-toggle="button">Cadastrar outro aluno</a>
            <a href="{{route('site.listagem')}}" class="btn btn-success" role="button" data-bs-toggle="button">Listagem</button></a>
            <a href="{{route('site.home')}}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
        </div>
    </div>


    <!-- <script>
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Cadastrado concluído!',
        showConfirmButton: false,
        timer: 1500
        })
    </script> -->
    
@endsection