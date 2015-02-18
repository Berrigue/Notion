<?php
    session_start();
    session_destroy();
?>

<?php
    //rerefsh
        echo"<meta HTTP-EQUIV='refresh' CONTENT='30;URL=login.php'>";
?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Login</title>    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/cvalidate.js"></script>
    <script type="text/javascript" src="js/stilo.js"></script>

</head>
<body>
    <!--
    <div class="publicidade">
    <h2>Kogen Tecnologia, também no agronegócio!</h2>
    <a href="www.kogen.com.br/agronegocio">www.kogen.com.br/agronegocio</a>

    </div>
    
    <!--NaveBar-->

    <script type="text/javascript" src="js/estilo.js"></script>

    <div class="navbar navbar-fixed-top">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <span class="brand">Notion</span>

                <div class="nav-collapse collapse">

                    <ul class="nav">
                        <li class="active"><a <i class="#"></i>Login</a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!--Tela de login-->
<div class="container">
    <form id="form" class="form-signin" method="post" action="../model/auth.php">

        <div class="well3">

        </div>

        <h2 class="form-signin-heading">Seja bem vindo!</h2>

        <div class="input-prepend">
            <span class="add-on"><i class="icon-large icon-user"></i></span>
            <input class="span3" type="text" name="email" autocomplete="on" placeholder="E-mail" title="Preencha o campo seu email"  required x-moz-errormessage="Ops. Faltou preencher este campo"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
        </div>

        <div class="input-prepend">
            <span class="add-on"><i class="icon-large icon-building"></i></span>
            <input class="span3" type="text" name="empresa" placeholder="Empresa" autocomplete="off" title="Preencha o campo sua empresa"  required x-moz-errormessage="Ops. Faltou preencher este campo"   />
        </div>

        <div class="input-prepend">
            <span class="add-on"><i class="icon-large icon-key"></i></span>
            <input class="span3" type="password" name="password" placeholder="Password" autocomplete="off" title="Preencha o campo com sua senha" required x-moz-errormessage="Ops. Faltou preencher este campo"/>
            <label class="">
            <input type="checkbox"> Mantenha-me conectado</label>
        </div>

        <button type="submit" class="btn btn-large btn-block btn-primary">Entrar</button>
        <a href="../model/page.php" class="btn btn-link">Cadastre sua empresa aqui!</a> 

        <footer  class="footer">
        <p>Copyright &copy; 2014 - <?php echo date('Y') ?> <strong>Kogen</strong></p>
        </footer>
        
    </form>
  
 </div>

</div>
<!-- /container -->
<div class="rodape">
          <a href="">Sobre</a><span style="padding-left:25px"></span><a href="">Ajuda</a><span style="padding-left:25px"></span><a href="">Blog</a><span style="padding-left:25px"></span><a href="">Empregos</a><span style="padding-left:25px"></span><a href="">Termos</a><span style="padding-left:25px"></span><a href="">Privacidade</a><span style="padding-left:25px"></span><a href="">Cookies</a><span style="padding-left:25px"></span><a href="">Empresas</a><span style="padding-left:25px"></span><a href="">&copy; - <?php echo date('Y')?>Kogen</a>
</div>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script>
    // enable tooltips
    $(".tip").tooltip();
</script>

</body>
</html>