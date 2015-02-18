<html class="no-js">
<head>
    <meta charset="utf-8">

<?php

    require_once"../config/ConexaoDB.php";

    $nome_usuario = $_POST['nome_usuario'];
    $funcao = $_POST['funcao'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $password = md5( $_POST['password']);
    $atuacao = $_POST['atuacao'];
    $nome_empresa = $_POST['nome_empresa'];
    $cnpj = $_POST['cnpj'];
    $interesses = $_POST['interesses'];
    $pais = $_POST['pais'];
    $produtos = $_POST['produtos'];
    $servicos = $_POST['servicos'];


    echo"<strong>Nome: </strong>" .$nome_usuario."<br>";
    echo"<strong>Funçao:</strong> " .$funcao."<br>";
    echo"<strong> Email: </strong>" .$email."<br>";
    echo"<strong> Fone: </strong>" .$fone."<br>";
    echo"<strong> Password:</strong> " .$password_Md5."<br>";
    echo"<strong> Area de atuação: </strong>" .$atuacao."<br>";
    echo"<strong> Nome da Empresa: </strong>" .$nome_empresa."<br>";
    echo"<strong> CNPJ: </strong> " .$cnpj."<br>";
    echo"<strong> Areas de Interesses: </strong> " .$interesses."<br>";
    echo"<strong> País: </strong>" .$pais."<br>";
    echo"<strong> Produtos: </strong>" .$produtos."<br>";
    echo"<strong> Serviços: </strong>" .$servicos."<br>";

    $sql = "INSERT INTO cadastros.contatos (telefone) VALUES ('" . $fone . "')";
   
    $sql = "INSERT INTO cadastros.dados_empresa (nome_empresa, cnpj, data_cadastro) VALUES('" . $nome_empresa . "', '" . $cnpj . "', now())";

    $sql = "INSERT INTO cadastros.localizacao (pais) VALUES('" . $pais . "')";

    $sql = "INSERT INTO cadastros.mercado (area_atuacao, interesses, produtos, servicos) VALUES('" . $atuacao . "', '" . $interesses . "', '" . $produtos . "', '" . $servicos . "')";

    $sql = "INSERT INTO cadastros.usuarios (email, password, nome_usuario, funcao, nome_empresa) VALUES('" . $email . "', '" . $password . "', '" . $nome_usuario . "', '" . $funcao . "', '" . $nome_empresa . "')";

    $result = pg_query($sql);
        if($result){

    echo"cadastrado";
        }else{

    echo"nao cadastrado";
}