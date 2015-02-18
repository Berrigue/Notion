<?php
class mysql {

		public $servidor;
 		public $usuario;
 		public $senha;
 		public $db;

		public function conectar(){
 			
		mysql_connect($this->servidor, $this->usuario, $this->senha) or die (mysql_error());
 		}

 		public function selectDB(){
 			mysql_select_db($this->db) or die (mysql_error());

 			}

 			public function fechar(){

 				mysql_close();
 			}

 			
		}

	

