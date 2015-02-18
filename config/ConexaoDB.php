<?php
	
	require_once"Conexao.classPg.php";
	require_once"Conexao_Mysql.php";

	$conexao = New Conexao;
	//conexao PostgreSql
	$conexao->conectarPostgreSql();	

	//conexao Mysql
	$con = New mysql();
	$con->servidor = 'localhost';
	$con->usuario = 'root';
	$con->senha = 'root';
	//$conexao->db = 'biblioteca';
	$con->conectar();
	//$conexao->selectDB();




