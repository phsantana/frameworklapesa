<?php

	class Manager extends Controller{

		public function index(){
			
			$this->view("manager");
		}

		public function addParticipante(){

			$db = new Participante_Model();
			$db->addParticipante();
		}

	}


?>