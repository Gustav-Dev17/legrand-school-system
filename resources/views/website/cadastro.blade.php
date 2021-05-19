@extends('website.principal')

@section('conteudo')
</br>
<h3>Cadastro de alunos</h3><br/>


@if ($errors->any())
    </br>
    <div class="alert alert-danger">
        Um ou mais campos não foram preenchidos, ou foram preenchidos incorretamente!
    </div>
@endif

    <form action="{{route('site.adiciona')}}" class="row g-3 needs-validation" method="post" novalidate>

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Nome completo</label>
        <input name="name" type="text" class="form-control" id="validationCustom01" value="{{old('name')}}" placeholder="Exemplo: João da Silva" required>
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <!-- <div class="col-md-5">
        <label for="validationCustom02" class="form-label">Sobrenome</label>
        <input name="surname" type="text" class="form-control" id="validationCustom02" placeholder="Exemplo: Silva" required>
        <div class="valid-feedback">
        Looks good!
        </div>
    </div> -->
    <div class="col-md-3">
        <label for=validationCustom03" class="form-label">Idade</label>
        <input name="age" type="number" class="form-control" id="validationCustom03" min="6" max="99"
        placeholder="Entre 6 e 99" value="{{old('age')}}" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-3">
        <label for=validationCustom03" class="form-label">Matrícula</label>       
        <input name="enrollment" type="number" class="form-control" id="validationCustom04" min="1000000" max="9999999" 
        placeholder="Exemplo: 1000001" value="{{old('enrollment')}}" required>
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Nível de ensino</label>
        <select name="school_level" class="form-select" id="validationCustom05" required>
        <option selected disabled value="">Selecione...</option>
        <option>Ensino Fundamental I</option>
        <option>Ensino Fundamental II</option>
        <option>Ensino Médio</option>
        </select>
        <div class="invalid-feedback">
        Please select a valid state.
        </div>
    </div>

    <div class="col-md-3">
        <label for="validationCustom06" class="form-label">Série (ano)</label>
        <select name="grade" class="form-select" id="validationCustom06" required>
        <option selected disabled value="">Selecione...</option>
        <option>1º ano</option>
        <option>2º ano</option>
        <option>3º ano</option>
        <option>4º ano</option>
        <option>5º ano</option>
        <option>6º ano</option>
        <option>7º ano</option>
        <option>8º ano</option>
        <option>9º ano</option>
        </select>
        <div class="invalid-feedback">
        Please select a valid state.
        </div>
    </div>

    <div class="col-md-3">
        <label for="validationCustom07" class="form-label">Turma</label>
        <select name="school_class" class="form-select" id="validationCustom07" required>
        <option selected disabled value="">Selecione...</option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
        <option>E</option>
        <option>F</option>
        <option>G</option>
        </select>
        <div class="invalid-feedback">
        Please select a valid state.
        </div>
    </div>

    <div class="col-md-3">
        <label for="validationCustom08" class="form-label">Estado</label>
        <select name="state" class="form-select" id="validationCustom08" required>
        <option selected disabled value="">Selecione...</option>
        <option>Acre</option>
        <option>Alagoas</option>
        <option>Amapá</option>
        <option>Amazonas</option>
        <option>Bahia</option>
        <option>Ceará</option>
        <option>Distrito Federal</option>
        <option>Espírito Santo</option>
        <option>Goiás</option>
        <option>Maranhão</option>
        <option>Mato Grosso</option>
        <option>Mato Grosso do Sul</option>
        <option>Minas Gerais</option>
        <option>Pará</option>
        <option>Paraíba</option>
        <option>Paraná</option>
        <option>Pernambuco</option>
        <option>Piauí</option>
        <option>Rio de Janeiro</option>
        <option>Rio Grande do Norte</option>
        <option>Rio Grande do Sul</option>
        <option>Rondônia</option>
        <option>Roraima</option>
        <option>Santa Catarina</option>
        <option>São Paulo</option>
        <option>Sergipe</option>
        <option>Tocantins</option>
        </select>
        <div class="invalid-feedback">
        Please select a valid state.
        </div>
    </div>
    <div class="col-12">
        <div class="form-check">
        <input name="form_check" class="form-check-input" type="checkbox" id="" required>Confirmo que conferi as informações
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit" btn-block>Cadastrar</button>
        <a href="{{route('site.home')}}" class="btn btn-secondary" role="button" data-bs-toggle="button" aria-pressed="true">Voltar</a>
    </div>
    </form>

    <script>
        $(document).ready(function () {
                $('#validationCustom04').mask('9999999');
                $('#validationCustom03').mask('99');
        });
    </script>
@endsection