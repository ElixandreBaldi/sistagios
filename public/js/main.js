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

function cnpjcpf( campo, e )
{
    var kC = (document.all) ? event.keyCode : e.keyCode;
    var data = campo.value;
    campo.value = ".......";
    if( kC!=8 && kC!=46 )
    {    	
        if( data.length==3 )
        {
            campo.value = data += '.';
        }
        else if( data.length==7 )
        {
            campo.value = data += '.';
        }
        else if(data.length == 11){
            campo.value = data += '-';
        }
        else if(data.length > 14){
        	campo.value = "vai mudar";
        }
    }
}