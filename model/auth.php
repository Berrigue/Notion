<?php

require_once"../config/ConexaoDB.php";
//session_start inicia a sessão
	session_start();
	session_cache_limiter(15);

// as variáveis email e senha recebem os dados digitados na página anterior
	$email = $_POST['email'];
	$password = md5 ($_POST['password']);
	
// A vriavel $sql pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
	$result = pg_query("SELECT * FROM cadastros.usuarios WHERE email = '$email' AND password = '$password' ");

/* Logo abaixo temos um bloco com if e else, verificando se a variável $sql foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */

if(pg_num_rows ($result) > 0 )
{
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	header('location:../view/home.php');
}
else{
	unset ($_SESSION['email']);
	unset ($_SESSION['password']);
	header('location:../view/login.php');
	
	}
        
        

