@extends('layouts.app')

@section('titulo')
Criar Empresa
@endsection

@section('conteudo')
<!-- Busca CEP Automático -->
<script type="text/javascript" >    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

</script>
<div class="row content">
  <button onclick="window.location.href='/empresas'" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</button>
  <h3 class="titulo_area">Cadastrar Empresa</h3>
  <form>
    <div class="form-group col-md-6">
      <label for="nome">NOME</label>
      <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="form-group col-md-3">
      <label for="cep">CEP</label>
      <input type="text" onblur="pesquisacep(this.value);" name="cep" class="form-control" id="cep">
    </div>
    <div class="form-group col-md-3">
      <label for="bairro">BAIRRO</label>
      <input type="text" class="form-control" name="bairro" id="bairro">
    </div>      
    <div class="form-group col-md-6">
      <label for="rua">RUA</label>
      <input type="text" class="form-control" name="rua" id="rua">
    </div>
    <div class="form-group col-md-2">
      <label for="numero">NÚMERO</label>
      <input type="number" class="form-control" name="numero" id="numero">
    </div>
    <div class="form-group col-md-3">
      <label for="cidade">CIDADE</label>
      <input type="text" class="form-control" name="cidade" id="cidade">
    </div>  
    <div class="form-group col-md-1">
      <label for="estado">ESTADO</label>
      <input type="text" class="form-control" id="estado" name="estado" maxlength=2>
      <!--<select class="form-control" name="estado">
        <option value="PR">Paraná</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option> 
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
      </select>-->
    </div>
    <div class="form-group col-md-4">
      <label for="nome">TELEFONE</label>
      <input type="text" class="form-control" name="fone" id="fone">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">E-MAIL</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group col-md-4">
      <label for="nome">NOME REPRESENTANTE</label>
      <input type="text" class="form-control" name="nome_rep" id="nome_rep">
    </div>
    <div class="form-group col-md-6">
      <label for="nome">CNPJ</label>
      <div class="input-group">
        <span class="input-group-addon">
          <input type="radio" name="codigo" aria-label="..." checked="checked">
        </span>
        <input type="text" class="form-control" aria-label="..." name="cnpj">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="nome">CPF</label>
      <div class="input-group">
        <span class="input-group-addon">
          <input type="radio" name="codigo" aria-label="...">
        </span>
        <input type="text" class="form-control" aria-label="..." name="cpf">
      </div>
    </div>
    <div class="col-md-6">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>
  </form>
</div>
@endsection