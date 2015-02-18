<?php
$logado = "Email";
?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Notion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
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
                        <li class="active"><a href="home.php"><i class="icon-home icon-black"></i> Home</a></li>

                        <li class="dropdown">
                            
                        </li>

                    </ul>
                    <!--
                    <ul class="nav pull-right settings">
                        <li class="dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#">System Settings</a></li>
                            </ul>
                        </li>
                    </ul>
                    -->
                    <ul class="nav pull-right settings">
                       <!-- <li><a href="#" class="tip icon logout" data-original-title="Configurações"
                               data-placement="bottom"><i class="icon-large icon-cog"></i></a></li>
                        <li class="divider-vertical"></li> -->
                        <li><a href="login.php" class="tip icon logout" data-original-title="Sair" data-placement="bottom">Logout<i class=""></i></a></li>
                    </ul>

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>
                    
                    <p class="navbar-text pull-right">
                        Bem vindo: <strong><?php echo"".$logado;?></strong>
                    </p> 

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                    <div class="pull-right">
                        <form class="form-search form-inline" style="margin:5px 0 0 0;" method="post">

                            <!--<div class="input-append">
                                <input type="text" name="keyword" class="span2 search-query" placeholder="Pesquisar...">
                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                            </div>-->
                            
                        </form>
                    </div>

                </div>

                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span2 pull-left">
        <div class="well sidebar-nav">
            <ul class="nav nav-tabs nav-stacked">
                <li class="nav-header">Menu</li>
                <li class="active"><a href="#">Saiba mais!</a></li>
                <li><a href="#">Como começar?</a></li>
                <li><a href="#">O que posso fazer?</a></li>
                <li><a href="#">Quero melhorar!</a></li>
            </ul>
        </div>
    </div>
    <!--/.well -->
    <!--/span3-->

    <div class="span10 pull-left">

        <div class="well">
            <h1>Chegou a hora de expandir seu negócio!</h1>

            <p>
               Uma mar de possibilidades disponiveis para o seu negócio crescer mais e melhor.
                Para mais informaçoes por favor visite <a href="www.kogen.com.br"
                                                           target="_blank">Kogen Tecnologia</a><br><br>
               -Com o sistema notion e possivel adquirir uma nova experiência com seu mercado viabilizando seu negócio.<br>
               -Integrado de ferramentas inovadoras que possibilitam toda uma imersão permitindo melhor compreensão do negócio.<br>
               -Gerencie e tome decisões acertivas com base em dados solidos que deveram melhorar o desempenho de sua empresa. <br>
               -A utilização de dados publicos em larga escala com foco no seu negocio ajuda sua empresa a andar mais rapido.<br>
               -Faça analises de mercado explore possibilidades, conheça, visualize, obtenha insigths e gere mais resultados.<br>
               -Possuimos um sistema integrado em grandes quantidades de dados disponiveis para você! Tudo que você precisa em um clique.<br>
               -Independente do seu mercado de atuação possuimos um modelo de negócio adaptável a sua necessidade. Fazendo a coisa certa do jeito certo.<br>
               <br>
                <a class="btn btn-primary btn-large" href="#">Cadastrar Empresa&raquo;</a>
            </p>
        </div>

    </div>
    <!--/span9-->
</div>
<!--/row-fluid-->

<div class="well2">
 <z>Copyright &copy; 2014 - <?php echo date('Y') ?> <strong>Kogen</strong></z>

</div>


<hr>
<footer align="center">
    <p>Copyright &copy; 2014 - <?php echo date('Y') ?> <strong>Kogen</strong></p>
</footer>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script>
    // enable tooltips
    $(".tip").tooltip();
</script>

</body>
</html>
