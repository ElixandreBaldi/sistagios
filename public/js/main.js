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