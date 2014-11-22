$(document).ready(function(){

	/**
	 * Verificar se a página é de Pesquisa então mostrar a listae softwares
	 * Última modificação: 28 ago. 2014
	 */
	
 	if(($('.conteudo-titulo p').text() == 'Pesquisa e Projetos') || ($('.conteudo-titulo p').text() == 'Research and Projects')){
 		$(".box-software").slideDown(1500);
 	}

});