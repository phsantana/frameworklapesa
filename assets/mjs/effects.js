$(document).ready(function(){

	/**
	 * Autenticação para entrada no sistema
	 * Última modificação: 28 ago. 2014
	 */

	/*$(".formulario-login").css({
		"margin-top":""+($(window).height() - $(".formulario-login").height())*4/10+"px"
	});
	$(".secao-login").fadeIn(700);
*/
	/**
	 * Mostrar Menu
	 * Mostra o ao menu depois do clique no botão
	 * Última modificação: 02 set. 2014
	 */
	var display_anterior_conteudo;
	$('#menu-botao').click(function(){
		if(!($('.page').css("display") == "block")){	
			if(($(".conteudo").css("display") == "block")){
				$(".conteudo").slideToggle(200);
				display_anterior_conteudo = "block";
			}
			else if(display_anterior_conteudo == "block"){
				$(".conteudo").slideToggle(400);
			}

			$('.menu').slideToggle(400);
			$('.opcoes-menu').delay(400).fadeToggle(200);
		}
	});

	/**
	 * Botões do Menu
	 * Mostra a seção de conteúdo depois do clique dos botão pertencente ao menu
	 * Última modificação: 03 set. 2014
	 */
	var tag = "none";
	$('.opcoes-botao').click(function(){
		if(!(tag == "none")){
			$(tag).css("display","none");
		}
		$('.menu').slideToggle(400);
		$('.opcoes-menu').delay(400).fadeToggle(200);
		
		tag = $(this).attr("name");
		tag = "." + tag;
		$(".conteudo").slideToggle(400);
		$(tag).fadeIn(500);

	});

	/**
	 * Fechar Painel
	 * Fecha a seção de conteúdo
	 * Última modificação: 04 set. 2014
	 */
	$('.close-painel').click(function(){
		$('.conteudo').fadeOut(200);
		display_anterior_conteudo = "none";
		$('.menu').slideToggle(400);
		$('.opcoes-menu').fadeIn(500);
		
	});

	/**
	 * Mostrar Page
	 * 1 - Mostra a seção onde as informações serão alteradas
	 * E bloqueia ao clique do botão Menu
	 * 2 - Pega o titulo da janela e repassa para a respectiva seção
	 * que este vai abrir
	 * 
	 * Última modificação: 11 set. 2014
	 */
	 var conteudo;
	$(".painel-botao").click(function(e){

		$('.conteudo').slideToggle(200);
		$('.page').slideToggle(300);
		$('#menu-botao').css("cursor","not-allowed");
		$('#menu-botao').attr("title","Feche a seção de alteração de conteúdo para ter acesso ao menu novamente");
		
		//Pai do Painel
		var father = $(this).parents("section:eq(1)").attr("class");
		var array_father = father.split(" ");
		var array_father_2 = array_father[1];
		conteudo = ".page-"+array_father_2;
		array_father_2 = "."+array_father_2;
		var titulo = $("h1",array_father_2).html();
		$('.page-cabecalho h1').text(titulo);
		$(conteudo).children().fadeIn(200);


		var el = $(this).children("h1").html();
		var elemento = "section[name='"+el+"']";

		$('html, body').animate({
    		scrollTop: $(elemento).position().top
  		}, 1800);

	});

	/**
	 * Fechar Page 
	 * 1 - Aqui a page será fechada e o menu mostrado
	 * 2 - Muda o cursor do botão menu e remove a mensagem
	 * Última modificação: 11 set. 2014
	 */
	$('.close-page').click(function(){

		$(conteudo).children().fadeOut(200);
		$('.page').slideToggle(300);
		$('.menu').slideToggle(400);
		$('.opcoes-menu').delay(400).fadeToggle(200);

		$('#menu-botao').css("cursor","pointer");
		$('#menu-botao').removeAttr("title");
	});

	/**
	 * Modificar texto
	 * 1 - Realiza a edição de texto através de um textarea
	 */
	$('.text-edit').click(function(){

		var texto = $(this).html();
		$(".text-edit:hover").css({
			"cursor":"auto",
			"border":"0"
		});
		$(this).append("<textarea name='textedit'>"+texto+"</textarea><button type='button' class='btn btn-ok' title='Salvar as alterações'></button><button type='button' class='btn btn-no' title='Cancelar alterações'></button><button type='button' class='btn btn-undo' title='Desfazer as alterações não-salvas'></button>");
		$(this).unbind("click");
		$(".btn-undo").next().css("margin-top","25px");
	});

	/**
	 * Fecha a modificação do texto
	 */

});

	
