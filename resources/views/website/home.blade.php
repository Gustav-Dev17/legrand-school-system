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

                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Listagem</title>
                            <image height="100%" width="100%"
                                xlink:href="https://www.marketplace.org/wp-content/uploads/2019/01/books_2.jpg?fit=1800%2C1000">
                        </svg>

                        <div class="card-body">
                            <h4>Listagem<!--<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                    fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                </svg>--></h4>
                            <p class="card-text">Liste os alunos registrados no sistema e suas informações relevantes ao
                                meio escolar e/ou acadêmico. Consulte também informações pessoas dos alunos.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{route('site.cadastro')}}">
                    <div class="card shadow-sm">

                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <image height="100%" width="100%"
                                xlink:href="https://theparentswebsite.com.au/wp-content/uploads/2018/02/VCE-student-studying-in-library-1800x1000.jpg">
                        </svg>

                        <div class="card-body">
                            <h4>Cadastro<!--<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                    fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                </svg>--></h4>
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

                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <image height="135%" width="100%"
                                xlink:href="https://live.staticflickr.com/4127/5096818261_585a787bec_b.jpg">
                                <!--</image><text x="50%" y="50%" fill="#eceeef" dy=".3em">ISLÂNDIA</text>-->
                        </svg>

                        <div class="card-body">
                            <h4>Exclusão<!--<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>-->
                                </h4> 
                            <p class="card-text">Exclua cadastros demasiadamente antigos ou de estudantes que não estão mais
                                na instituição. Esta é também uma opção recomendada se você deseja realizar um recadastro.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    @endsection
