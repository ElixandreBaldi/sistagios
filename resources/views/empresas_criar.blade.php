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
  <form action="/empresas/criar" method="POST">
    {{ csrf_field() }}    
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
    <div class="col-md-12">
      <div class="col-md-6">
        @if ($errors->has('nome'))
          <span class="help-block">
              <strong>{{ $errors->first('nome') }}</strong>
          </span>        
        @endif
      </div>
      <div class="col-md-3">  
        @if ($errors->has('cep'))
          <span class="help-block">
              <strong>{{ $errors->first('cep') }}</strong>
          </span>        
        @endif
      </div>
      <div class="col-md-3">  
        @if ($errors->has('bairro'))
          <span class="help-block">
              <strong>{{ $errors->first('bairro') }}</strong>
          </span>        
        @endif
      </div>      
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
    </div>
    <div class="col-md-12">
      <div class="col-md-6">
        @if ($errors->has('rua'))
          <span class="help-block">
              <strong>{{ $errors->first('rua') }}</strong>
          </span>        
        @endif
      </div>
      <div class="col-md-2">  
        @if ($errors->has('numero'))
          <span class="help-block">
              <strong>{{ $errors->first('numero') }}</strong>
          </span>        
        @endif
      </div>
      <div class="col-md-3">  
        @if ($errors->has('cidade'))
          <span class="help-block">
              <strong>{{ $errors->first('cidade') }}</strong>
          </span>        
        @endif
      </div>      
      <div class="col-md-1">  
        @if ($errors->has('estado'))
          <span class="help-block">
              <strong>{{ $errors->first('estado') }}</strong>
          </span>        
        @endif
      </div>  
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
    <div class="col-md-12">
      <div class="col-md-4">
        @if ($errors->has('telefone'))
          <span class="help-block">
              <strong>{{ $errors->first('telefone') }}</strong>
          </span>        
        @endif
      </div>
      <div class="col-md-4">  
        @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>        
        @endif
      </div>
      <div class="col-md-4">  
        @if ($errors->has('nome_rep'))
          <span class="help-block">
              <strong>{{ $errors->first('nome_rep') }}</strong>
          </span>        
        @endif
      </div>      
    </div>
    <div class="form-group col-md-12">
      <label for="nome">CPF ou CNPJ</label>
      <input type="text" class="form-control" onkeypress="mascaraCpf( this, event )" onkeyup="limitarInput(this, 18)" aria-label="..." name="cpfcnpj">      
    </div>
    <div class="col-md-6">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>
  </form>
</div>
@endsection