var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

function excluir (id, entity_url) {
	// exemplo: entity_url = 'professores'
	if (confirm("Tem certeza de que deseja efetuar esta exclusão?")) {
			$.ajax({
	    	url: '/' + entity_url + '/' + id + '/excluir',
	    	type: 'POST',
	    	data: {
	    		_token: CSRF_TOKEN
	    	},
	    	dataType: 'JSON',
	    	success: function (data) {
	        	window.location='/' + entity_url;
	    	}
		});
	}
}

function removeAluno (estagio_id) {
	// exemplo: entity_url = 'professores'
	if (confirm("Tem certeza de que deseja remover o aluno deste estágio? A vaga passará a ficar aberta.")) {
			$.ajax({
	    	url: '/estagios/' + estagio_id + '/reset',
	    	type: 'POST',
	    	data: {
	    		_token: CSRF_TOKEN
	    	},
	    	dataType: 'JSON',
	    	success: function (data) {
	        	window.location='/estagios/' + estagio_id;
	    	}
		});
	}
}

function limitarInput(obj, lim) {
    obj.value = obj.value.substring(0,lim);
}

function mascaraCpf( campo, e )
{
    var kC = (document.all) ? event.keyCode : e.keyCode;
    var data = campo.value;

    if( kC != 46 && kC != 8 )
    {
        if( data.length==3){
            campo.value = data += '.';
        }
        else if( data.length==7 ){
            campo.value = data += '.';
        }
        else if(data.length == 11){
        	campo.value = data+='-';
        }
        else if(data.length == 14){
        	var texto = mascaraCnpj(campo.value, e);
        	campo.value = data = texto;
        }else if(data.length == 15){
        	campo.value = data+='-';
        }
    }
}

function mascaraCnpj( campo, e )
{
    var texto = new Array();

    for (var i = 0; i < campo.length; i++) {
    	if(campo[i]>0 && campo[i]<10)
    	texto.push(campo[i]);
    }

    var stringTexto = '';
    for (var i = 0; i < texto.length; i++) {
    	stringTexto += texto[i];
    	if(i==1 || i==4)
    		stringTexto += '.';
    	if(i==7)
    		stringTexto += '/';
    }
    return stringTexto;
}

// Busca CEP Automático
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
}
