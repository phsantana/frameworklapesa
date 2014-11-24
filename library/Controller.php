<?php

	/**
	* Classe Controller
	* Última modificação: 04 nov. 2014
	*/
	class Controller{
		
		/**
		 * [view description]
		 * @param [type] $page
		 * @return [type]
		 */
		
		protected function view($page){
			return require_once "/view/".$page.".php";
			exit();
		}

	}


?>