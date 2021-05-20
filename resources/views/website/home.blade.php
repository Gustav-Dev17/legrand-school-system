@extends('website.principal')

@section('conteudo')
    </br>
    <section class="text-center container">
        <div class="row py-lg-1">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Bem-vindo!</h1>
                <p class="lead text-muted">Este é o sistema de listagem e cadastros de alunos da WindSchool. Fique à vontade
                    para navegar e usufruir do sistema melhorando sua produtividade.</p>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <a href="{{route('site.listagem')}}">
                    <div class="card shadow-sm">

                        <svg class="bd-placeholder-img card-img-top" width="100%" height="230"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Listagem</title>
                            <image width="405px"
                                href="list_image.jpg">
                        </svg>

                        <div class="card-body">
                            <h4>Listagem</h4>
                            <p class="card-text">Liste os alunos registrados no sistema e suas informações relevantes ao
                                meio escolar e/ou acadêmico. Consulte também informações pessoas dos alunos.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{route('site.cadastro')}}">
                    <div class="card shadow-sm">

                        <svg class="bd-placeholder-img card-img-top" width="100%" height="230"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Cadastro</title>
                            <image width="405px"
                                href="cadaster_image.jpg">
                        </svg>

                        <div class="card-body">
                            <h4>Cadastro</h4>
                            <p class="card-text">Cadastre, recadastre ou registre os futuros estudantes no sistema da
                                WindSchool de acordo com suas séries e turmas. Todos os estudantes cadastrados já estarão
                                inclusos na listagem.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{route('site.exclui')}}">
                    <div class="card shadow-sm">

                        <svg class="bd-placeholder-img card-img-top" width="100%" height="230"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Exclusão</title>
                            <image width="405px"
                                href="eraser_image.jpg">
                                <!--</image><text x="50%" y="50%" fill="#eceeef" dy=".3em">ISLÂNDIA</text>-->
                        </svg>

                        <div class="card-body">
                            <h4>Exclusão</h4> 
                            <p class="card-text">Exclua cadastros demasiadamente antigos ou de estudantes que não estão mais
                                na instituição. Esta é também uma opção recomendada se você deseja realizar um recadastro.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
