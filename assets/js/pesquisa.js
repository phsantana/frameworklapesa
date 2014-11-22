$(document).ready(function(){
	
	/**
	 * Mostrar a descrição do software
	 * Última modificação: 29 ago. 2014
	 */
	 $(document).on('click','.list-software',function(){
			
			$(".software-descricao").css({
				"margin-top":""+($(window).height()*(9/10) - $(".software-descricao").height())/2+"px"
			});
			$('.mascara-negra').fadeIn(300);
			$('body').css({"overflow-y":"hidden"});
	 });

	 /**
	  * Botão de Fechar Descrição
	  * Última modificação: 29 ago. 2014
	  */
	  $('.fechar-descricao').hover(

	  		function(){
	  			$(this).css({"background":"#28405b","cursor":"pointer"});
	  			$(this).css({"color":"#fff"});
	  		},
	  		function () {
	  			$(this).css({"background":"#DAE7F4","cursor":"auto"});
	  			$(this).css({"color":"#28405b"});
	  		}
	  );

	  $('.fechar-descricao').click(function(){
	  		$('.mascara-negra').fadeOut(300);
	  		$('body').css({"overflow-y":"visible"});
	  });


});