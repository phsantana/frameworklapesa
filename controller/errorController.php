<?php

	/**
	 * Classe Error
	 * Útlima modificação: 04 nov. 2014
	 */
	class Error extends Controller{

		public function PageNotFound(){
			$this-> view("pageNotFound");
		}
	}

?>