<?php

	class Manager extends Controller{

		private $username;
		private $password;

		public function index(){
			$this->view("manager");

		}
	}


?>