function delete(id, entity){
	if (confirm("Tem certeza que deseja efetuar esta exclusão?")) {
		$.ajaxSetup({
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		}
		});
        $.ajax({
			type: "POST",
			url: entity + id + "/excluir",
			success: function (data) {
				alert(data);
			},
		});
  }
}