<?php

	/**
	* Classe Controller
	* Última modificação: 04 nov. 2014
	*/
	class Controller{
		
		protected function view($page){
			return require_once "/view/".$page.".php";
			exit();
		}

	}


?>