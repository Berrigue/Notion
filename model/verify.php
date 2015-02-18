<?php
    include_once"../config/Conexao_Mysql.php";

    $con = new mysql();

    $con->servidor = 'localhost';
    $con->usuario = 'root';
    $con->senha = 'root';
    $con->db = 'Kogen Tecnologia';
    $con->conectar();
    $con->selectDB();
    
session_cache_expire(10);    
session_start();

if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['password']) == true))
        {
        unset($_SESSION['email']);
        unset($_SESSION['password']);

        header('location:erro404.php');
        }

        $logado = $_SESSION['email'];


    //consulta o a coluna nome da tabela usuarios no banco Postgres verificando se o email e o mesmo do que esta logado.     

        $sql = "SELECT nome_empresa FROM cadastros.usuarios where email = '".$logado."' ";
        

      $query = pg_query($sql);

        while ($sql = pg_fetch_array($query)){

        $nome_empresa = $sql ['nome_empresa'];  
    }
    //conexao
        $con->db = $nome_empresa;
        $con->selectDB(); 
