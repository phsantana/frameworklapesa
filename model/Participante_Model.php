<?php

	class Participante_Model extends Model{

		public $tabela = "participantes";

		public function addParticipante(){

			//echo json_encode($_POST);

			//$this->connection->query("INSERT INTO `$this->tabela`(`id`, `nome`, `email`, `url`, `descpt`, `descen`) VALUES (null,$_POST['nome'],$_POST['email'],$_POST['url'],$_POST['descpt'],$_POST['descen'])");

		}
	}