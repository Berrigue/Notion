 <?php
  //configuração do banco de dados   

 	 class Conexao{

 		public $host;
 		public $dbname;
 		public $user;
 		public $password;
 		public $conexao;

 		public $servidor;
 		public $usuario;
 		public $senha;
 		public $db;

 		//funcoes postgresql
 		 function conectarPostgreSql(){

			$conexao = pg_connect("host=localhost dbname=Kogen_empresas user=postgres password=root" ); 	

			if ($conexao){

				//echo"Conectado ao PostgreSql com sucesso!";
			}else{
				echo"Falha na conexãao com banco de dados PostgreSql";
			}

		}	

			function desconectar(){

				pg_close();
			}

		}
	
   
 