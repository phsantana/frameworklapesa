$(document).ready(function(){

	/**
	 * Verifica se o campo está vazia e remove uma classe
	 * Última modificação: 27 ago. 2014
	 */
	$('[type="text"], [type="email"]').keyup(function(){
		
		if(this.validity.valid){
			this.className = "valido";
		}
		else{
			this.className = "invalido";
		}
	});

	/**
 	* Mostrar o campo Outro, caso seja necessário
 	* Última modificação: 21 ago. 2014
 	*/
 	$(document).on('change','select',function(){

 		if(($("select").val() == "Outro") || ($("select").val() == "Other")){
 			$("#campo-outro").css({"display":"block"});
 			$("[name='outro']").attr({"required":"required"});
 		}
 		else{
 			$("#campo-outro").css({"display":"none"});
			$("[name='outro']").removeAttr("required");
 		}
 	});

 	/**
 	 * Verifica se os valores dos campos de email são iguais
 	 * Última modificação: 27 ago. 2014
 	 */
 	$("[name='conf']").keyup(function(){

 		if($("[name='mail']").val() == $("[name='conf']").val()){
 			$(this).css({"background":"transparent","border-color":"#aaa"});
 		}
 		else{
 			$(this).css({"background":"rgb(255, 186, 186)","border-color":"rgb(216, 0, 12)"});
 		}
 	});




});