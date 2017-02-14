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