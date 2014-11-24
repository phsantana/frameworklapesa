<?php 

	class Model{

		public $tabela;
		protected $connection;

		/**
		 * Construtor da Classe Model
		 * @param String $tabela [especifica qual a tabela a ser usada]
		 */
		public function __construct(){

			$this->tabela;
			$this->connection = new mysqli(HOST, USER, PASSWORD);

			if(mysqli_connect_error()){
				exit();
			}

			$this->connection->query("CREATE DATABASE IF NOT EXISTS `lapesa`");
			$this->connection->select_db(DATABASE);
			
		}

		/**
		 * Insere informações em um banco de dados
		 * @param  Array  $dados [uma array composta pelas informações que serão repassadas]
		 * @return Mysqli        [retorna um insert no banco de dados]
		 */
		public function insert(Array $dados){

			$indices = implode("`,`", array_keys($dados));
			$valores = implode("','", array_values($dados));

			return $this->connection->query("INSERT INTO `$this->tabela` (`$indices`) VALUES ('$valores')");
		}

		/**
		 * Realiza a leitura de tabela do banco de dados
		 * @param  Array  $colunas   [nome das colunas]
		 * @param  Array $condicoes  [define as condições]
		 * @param  String $limit     [define a quantidade]
		 * @param  String $offset    [define quantas pesquisas serão puladas]
		 * @param  String $orderby   [define qual coluna que deverá ser pesquisa se ascendente ou descendente]
		 * @return                   [retorna uma requisição SQL de seleção]
		 */
		public function read(Array $colunas, Array $condicoes = null, String $limit = null, String $offset = null, String $orderby = null){

			$colunas = implode(", ", $colunas);
			$condicoes = ( $condicoes == null ? "" :  "WHERE ".implode(", ", $condicoes));
			$limit = ( $limit == null ? "" :  "LIMIT ".implode(", ", $limit));
			$offset = ( $offset == null ? "" :  "OFFSET ".implode(", ", $offset));
			$orderby = ( $orderby == null ? "" :  "ORDER BY ".implode(", ", $orderby));

			$resultado = $this->connection->query("SELECT $colunas FROM $this->tabela $condicoes $orderby $limit $offset");

			if($resultado-> num_rows > 0) return $resultado->fetch_array(MYSQLI_ASSOC);
			else return false;
		}

		/**
		 * Realiza a atualização de dados de uma tabela
		 * @param  Array  $dados [define as informacoes novas do banco de dados]
		 * @param  String $where [define a condição de atualização]
		 * @return               [retorna uma requisição SQL de atualização]
		 */
		public function update(Array $dados, String $where){

			foreach($dados as $ind => $val){
				
				$campos[] = "$ind = $val";
			}
			$campos = implode(", ", $campos);

			return $this->connection->query("UPDATE $this->tabela SET $campos WHERE $where");
		}

		/**
		 * Realiza a remoção de informações do banco de dados
		 * @param  String  $where [define a condição]
		 * @return                [retorna uma requisição SQL de remoção]
		 */
		public function delete(String $where){

			$condicoes = implode(", ", $where);
			return $this->connection->query("DELETE FROM $this->tabela WHERE $where");
		}
	}



?>