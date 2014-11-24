$(document).ready(function(){

	/**
	 * Realiza o envio de dados para o servidor via ajax 
	 * @param String  $url    Refere-se ao caminho do submit
	 * @param Object  $dados  Contém os dados que serão enviados
	 */
	function SendAjax( $url, $dados){

		$.ajax({
			url: ("http://localhost/Unesp%20-%20Lapesa/manager/"+$url),
			type: "post",
			data: $dados,
			async: false,
			cache: false
		})
		.done(function(data){
			//data = $.parseJSON(data);
			console.log(data);
			console.log("OK SUCESSFULLY");
			
		})
		.fail(function(){
			console.log("error");
		});
	}

	$("#add_participante").submit(function(e){
		
		e.preventDefault();
		object = {
				nome: $("[name='nome']").val(),
				email: $("[name='email']").val(),
				url: $("[name='url']").val(),
				descpt: $("[name='descpt']").val(),
				descen: $("[name='descen']").val()
		}
		SendAjax("addParticipante", object);
	});


});