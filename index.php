<?php

		
	(isset($_GET['url']) ? $url = $_GET['url']."/" : $url="index/index");
	$separator = explode("/", $url);

	$controller = ($separator[0] == null ? "index": $separator[0]);
	$action = ($separator[1] == null ? "index" : $separator[1]);

	
	//Carregando as bibliotecas
	require_once 'library/Controller.php';
	require_once 'library/Model.php';

	//Carregando as configurações
	require_once 'config/constants.php';
	
	if(file_exists('controller/'.$controller.'Controller.php')){
		
		require_once '/controller/'.$controller.'Controller.php';
		$page = new $controller();
			
		if(method_exists($page, $action))
			$page-> $action();
		else
			header("Location: index");
	}
	else{
		
		require_once 'controller/errorController.php';
		$page = new Error();
		$page-> PageNotFound();
	}



?>