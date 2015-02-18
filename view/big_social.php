
<?php
include_once "../config/ConexaoDB.php";
include_once "../apis/Twitter_app/twitteroauth.php";
include_once "../apis/Twitter_app/keys.php";
include_once "../config/NoSqlData/mongo.php";
include_once "../model/verify.php";

?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Notion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/slides.css">
        <link rel="stylesheet" href="css/graficos.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script type="text/javascript" src="js/jssor.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
        <script type="text/javascript" src="js/slides.js"></script>
        <script src="js/Chart.js"></script>
        <script src="js/graficos/conf.charts.js"></script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/vendor/jquery-1.8.3.min.js"></script>
        <script src="js/popup.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>

    </head>
    <body style="background:#fff;">

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
                                <li ><a href="home.php"><i class="icon-home icon-black"></i>Home</a></li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon-sitemap icon-black"></i>
                                        Data Store <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <!-- <li><a href="#">Tendencias</a></li> -->
                                        <li ><a  href="#" >Insights</a></li>
                                        <li><a href="#">Relatorios</a></li>
                                    </ul>
                                </li>

                                <li class="active" ><a href="big_social.php"><i class="icon-group icon-black"></i>Big Social</a></li>
                                <li><a href="#"><i class="icon-cogs icon-black"></i>Big Market</a></li>
                                <li><a href="#"><i class="icon-globe icon-black"></i>Big Web</a></li>

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
                                <li><a href="login.php" class="tip icon logout" data-original-title="Sair" data-placement="bottom"><i
                                            class="icon-large icon-off"></i></a></li>
                            </ul>

                            <ul class="nav pull-right settings">
                                <li class="divider-vertical"></li>
                            </ul>

                            <p class="navbar-text pull-right">
                                Bem vindo: <strong><?php echo"" . $logado; ?></strong>
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
                    </div>
                </div>
            </div>
        </div>
        <!--/.nav-collapse -->

        <form class="well" method="post">

            <div class="input-prepend">
                <!--barra de pesquisa-->
                <input id="pesquisa" autocomplete="off" placeholder="Descubra o que está acontecendo agora..." type="text" class="input-xxlarge" name="keyword"/>
                <!--<button class="btn btn-primary dropdown-toggle" type="submit">Twitts <span class="caret"></span></button>-->
                <div class="btn-group">
                    <button class="btn btn-primary" id="id">Search</button>
                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Empresas</a></li>
                        <li><a href="#">Pessoas</a></li>
                        <li><a href="#">Publicidade</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Outras fontes de dados</a></li>
                    </ul>

                </div>
              
                <div class="tweets">

                    <h4>Encontre coisas relevantes para você e sua empresa</h4> 
                    <a class="btn btn-small btn-warning" href="#"><i class="icon-twitter"></i>
                        <?php
                        if (empty($_POST['keyword']) == false) {

                            echo" " . $_POST['keyword'];
                        } else {

                            echo " O que está procurando?";
                        }
                        ?>
                    </a>
                </div>

            </div>



        </form>

        <table class="table table-hover">

            <?php
            if (isset($_POST['keyword'])) {

                $tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=' . $_POST['keyword'] . '&start-date={date.last30Days}&end-date={date.today}&result_type= mixed&count=500');

                foreach ($tweets as $tweet) {

                    foreach ($tweets->statuses as $tweet) {

                        echo '<tr><td><img src="' . $tweet->user->profile_image_url . '"/> ' . $tweet->text . '<br>';
                        echo date('d/m/Y H:i:s', strtotime($tweet->created_at));

                        //inserção de dados mongo-php
                        $mongo->selectDB('kogenData')->selectCollection('pesquisa')->insert(array(
                            'nome' => ($tweet->user->name),
                            'tweet' => ($tweet->text),
                            'data-hora' =>($tweet->created_at)
                        ));
                    }
                }
            } else {

            }

                ?>

        </tr>
    </td>
    <!--Popup atualização-->
    <div  id="popup" class="">
             <a href="javascript:;" onclick="fechaJanela('popup')" class="close">&#x2715;</a>
            <strong>Analise de Sentimento Humano:</strong> O que estão achando da sua empresa?



             <!-- Jssor Slider Begin -->
    <!-- Graficos em tempo real -->
    <div id="sliderb_container" style="position: relative; width: 600px; height: 300px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
            <div>
                <img u=image src="../model/map.php" />
                <div u="thumb">Produtos</div>
            </div>
            <div>
                <img u=image src="../model/map.php" />
                <div u="thumb">Marca</div>
            </div>
            <div>
                <img u=image src="../model/map.php" />
                <div u="thumb">Serviços</div>
            </div>
        </div>

        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="sliderb-T" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="position: absolute; width: 600px; height: 45px; top: 0; left: 0;">
                    <div u="thumbnailtemplate" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; font-family: verdana; font-weight: normal; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->

        <!-- Bullet Navigator Skin Begin -->
        <!-- jssor slider bullet navigator skin 01 -->

        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->

        <!-- Arrow Navigator Skin Begin -->
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">javascript</a>
        <!-- Trigger -->
        <script>
            jssor_sliderb_starter('sliderb_container');
        </script>
    </div>
    <!-- Jssor Slider End & do grafico-->
    </div> 


</table> 

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script>
    // enable tooltips
    $(".tip").tooltip();

</script>




</body>
</html>