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

    <form action="{{route('site.adiciona')}}" class="row g-3 needs-validation" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <div class="col-md-6">
        <label for="complete_name" class="form-label">Nome completo</label>
        <input name="name" type="text" class="form-control" id="complete_name" value="{{old('name')}}" placeholder="Exemplo: João da Silva" required>
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>

    <div class="col-md-3">
        <label for="age" class="form-label">Idade</label>
        <input name="age" type="number" class="form-control" id="age" min="6" max="99"
        placeholder="Entre 6 e 99" value="{{old('age')}}" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-3">
        <label for="enrollment" class="form-label">Matrícula</label>       
        <input name="enrollment" type="number" class="form-control" id="enrollment" min="1000000" max="9999999" 
        placeholder="Exemplo: 1000001" value="{{old('enrollment')}}" required>
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <div class="col-md-3">
        <label for="school_level" class="form-label">Nível de ensino</label>
        <select name="school_level" class="form-select" id="school_level" required>
        <option selected disabled value="">Selecione...</option>
        <option value="Ensino Fundamental I">Ensino Fundamental I</option>
        <option value="Ensino Fundamental II">Ensino Fundamental II</option>
        <option value="Ensino Médio">Ensino Médio</option>
        </select>
        <div class="invalid-feedback">
        Please select a valid state.
        </div>
    </div>

    <div class="col-md-3">
        <label for="grade" class="form-label">Série (ano)</label>
        <select name="grade" class="form-select" id="grade" required>
        <option selected disabled value="">Selecione...</option>
        <option data-parent="Ensino Fundamental I" value="1º ano">1º ano</option>
        <option data-parent="Ensino Fundamental I" value="2º ano">2º ano</option>
        <option data-parent="Ensino Fundamental I" value="3º ano">3º ano</option>
        <option data-parent="Ensino Fundamental I" value="4º ano">4º ano</option>
        <option data-parent="Ensino Fundamental I" value="5º ano">5º ano</option>
        <option data-parent="Ensino Fundamental II" value="6º ano">6º ano</option>
        <option data-parent="Ensino Fundamental II" value="7º ano">7º ano</option>
        <option data-parent="Ensino Fundamental II" value="8º ano">8º ano</option>
        <option data-parent="Ensino Fundamental II" value="9º ano">9º ano</option>
        <option data-parent="Ensino Médio" value="1º ano">1º ano</option>
        <option data-parent="Ensino Médio" value="2º ano">2º ano</option>
        <option data-parent="Ensino Médio" value="3º ano">3º ano</option>
        </select>
        <div class="invalid-feedback">
        Please select a valid state.
        </div>
    </div>

    <div class="col-md-3">
        <label for="school_class" class="form-label">Turma</label>
        <select name="school_class" class="form-select" id="school_class" required>
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
        <label for="state" class="form-label">Estado</label>
        <select name="state" class="form-select" id="state" required>
            <option selected disabled value="">Selecione...</option>
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Espírito Santo">Espírito Santo</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Paraná">Paraná</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Tocantins">Tocantins</option>
        </select>
        <div class="invalid-feedback">
        Please select a valid state.
        </div>
    </div>
    <div class="col-md-3">
        <label for="city" class="form-label">Cidade</label>
        <select name="city" class="form-select" id="city" required>
            <option selected disabled value="">Selecione...</option>
            <option data-parent="Acre" value="Rio Branco">Rio Branco</option>

            <option data-parent="Alagoas" value="Maceió">Maceió</option>

            <option data-parent="Amapá" value="Macapá">Macapá</option>

            <option data-parent="Amazonas" value="Manaus">Manaus</option>
            <option data-parent="Amazonas" value="Parintins">Parintins</option>
            
            <option data-parent="Bahia" value="Feira de Santana">Feira de Santana</option>
            <option data-parent="Bahia" value="Salvador">Salvador</option>

            <option data-parent="Ceará" value="Fortaleza">Fortaleza</option>
            <option data-parent="Ceará" value="Juazeiro do Norte">Juazeiro do Norte</option>

            <option data-parent="Distrito Federal" value="Brasília">Brasília</option>

            <option data-parent="Espírito Santo" value="Vila Velha">Vila Velha</option>
            <option data-parent="Espírito Santo" value="Vitória">Vitória</option>
            <option data-parent="Espírito Santo" value="Serra">Serra</option>

            <option data-parent="Goiás" value="Goiânia">Goiânia</option>

            <option data-parent="Maranhão" value="Imperatriz">Imperatriz</option>
            <option data-parent="Maranhão" value="São Luís">São Luís</option>

            <option data-parent="Mato Grosso" value="CuiabÁ">Cuiabá</option>
            <option data-parent="Mato Grosso" value="Várzea Grande">Várzea Grande</option>

            <option data-parent="Mato Grosso do Sul" value="Dourados">Dourados</option>
            <option data-parent="Mato Grosso do Sul" value="Campo Grande">Campo Grande</option>

            <option data-parent="Minas Gerais" value="Belo Horizonte">Belo Horizonte</option>
            <option data-parent="Minas Gerais" value="Juiz de Fora">Juiz de Fora</option>
            <option data-parent="Minas Gerais" value="Uberlândia">Uberlândia</option>

            <option data-parent="Pará" value="Belém">Belém</option>
            <option data-parent="Pará" value="Santarém">Santarém</option>

            <option data-parent="Paraíba" value="Campina Grande">Campina Grande</option>
            <option data-parent="Paraíba" value="João Pessoa">João Pessoa</option>

            <option data-parent="Paraná" value="Curitiba">Curitiba</option>
            <option data-parent="Paraná" value="Londrina">Londrina</option>
            <option data-parent="Paraná" value="Maringá">Maringá</option>

            <option data-parent="Pernambuco" value="Olinda">Olinda</option>
            <option data-parent="Pernambuco" value="Petrolina">Petrolina</option>
            <option data-parent="Pernambuco" value="Recife">Recife</option>
            

            <option data-parent="Piauí" value="Teresina">Teresina</option>

            <option data-parent="Rio de Janeiro" value="Duque de Caxias">Duque de Caxias</option>
            <option data-parent="Rio de Janeiro" value="Niterói">Niterói</option>
            <option data-parent="Rio de Janeiro" value="Nova Iguaçu">Nova Iguaçu</option>
            <option data-parent="Rio de Janeiro" value="Rio de Janeiro">Rio de Janeiro</option>
            <option data-parent="Rio de Janeiro" value="São Gonçalo">São Gonçalo</option>
    
            <option data-parent="Rio Grande do Norte" value="Mossoró">Mossoró</option>
            <option data-parent="Rio Grande do Norte" value="Natal">Natal</option>
            
            <option data-parent="Rio Grande do Sul" value="Canoas">Canoas</option>
            <option data-parent="Rio Grande do Sul" value="Caxias do Sul">Caxias do Sul</option>
            <option data-parent="Rio Grande do Sul" value="Pelotas">Pelotas</option>
            <option data-parent="Rio Grande do Sul" value="Porto Alegre">Porto Alegre</option>
            <option data-parent="Rio Grande do Sul" value="Santa Maria">Santa Maria</option>
            

            <option data-parent="Rondônia" value="Porto Velho">Porto Velho</option>

            <option data-parent="Roraima" value="Boa Vista">Boa Vista</option>

            <option data-parent="Santa Catarina" value="Balneário Camboriú">Balneário Camboriú</option>
            <option data-parent="Santa Catarina" value="Blumenau">Blumenau</option>
            <option data-parent="Santa Catarina" value="Chapecó">Chapecó</option>
            <option data-parent="Santa Catarina" value="Florianópolis">Florianópolis</option>
            <option data-parent="Santa Catarina" value="Joinville">Joinville</option>

            <option data-parent="São Paulo" value="Campinas">Campinas</option>
            <option data-parent="São Paulo" value="Guarulhos">Guarulhos</option>
            <option data-parent="São Paulo" value="Santo André">Santo André</option>
            <option data-parent="São Paulo" value="São Bernado do Campo">São Bernardo do Campo</option>
            <option data-parent="São Paulo" value="São Paulo">São Paulo</option>

            <option data-parent="Sergipe" value="Aracaju">Aracaju</option>

            <option data-parent="Tocantins" value="Palmas">Palmas</option>
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

<!-- Script-máscara para idade e matrícula-->
    <script>
        $(document).ready(function () {
            $('#age').mask('99');
            $('#enrollment').mask('9999999');
                
        });
    </script>

    <script>
        $('#school_level').change(function(e){
        $('#grade').prop('disabled', !$(this).val());
        });
        $(function(){
            $('#grade').prop('disabled', true);
        });
    </script>

    <script>
        $('#school_level').change(function () {
            var parent = $(this).val();
            $('#grade').children().each(function () {
                if ($(this).data('parent') != parent) {
                    $(this).hide();
                } else $(this).show();
            });
        });
    </script>

    <script>
        $('#grade').change(function(e){
        $('#school_class').prop('disabled', !$(this).val());
        });
        $(function(){
            $('#school_class').prop('disabled', true);
        });
    </script>

    <script>
        $('#state').change(function(e){
        $('#city').prop('disabled', !$(this).val());
        });
        $(function(){
            $('#city').prop('disabled', true);
        });
    </script>

    <script>
        $('#state').change(function () {
            var parent = $(this).val();
            $('#city').children().each(function () {
                if ($(this).data('parent') != parent) {
                    $(this).hide();
                } else $(this).show();
            });
        });
    </script>
@endsection