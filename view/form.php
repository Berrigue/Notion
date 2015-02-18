<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="js/vendor/jquery-1.8.3.min.js" type="text/javascript" ></script>
    <link href="css/customize-kogen.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
    </style>
</head>

    <body class="login-header">

       <body class="login-header">
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
                        <li class="active"><a <i class="#"></i>Cadastro</a></li>
                    </ul>

            </div>

        </div>
    </div>
</div>
</div><br><br>
        
        <section class="page container">
            <form class="form-horizontal" action="../model/cadastro.class.php" method="post">
                <div class="container">
                    <div class="row">
                        <div  class="span7">
                            <fieldset>
                                <legend>Dados Pessoais</legend><br>
                                <div class="control-group ">
                                    <label class="control-label">Nome</label>
                                    <div class="controls">
                                        <input  name="nome_usuario" class="span4" type="text" autocomplete="off" placeholder="Nome" title="Preencha o campo com seu nome" required x-moz-errormessage="Ops. Faltou preencher este campo">

                                    </div>
                                </div>

                                    <div class="control-group">
                                    <label for="challengeQuestion" class="control-label">Cargo/Função</label>
                                    <div class="controls" >
                                        <select  class="span4" name="funcao" >
                                            <option>-- Qual sua função na empresa? --</option>
                                            <option   >
                                                Diretor Executivo/CEO
                                            </option>
                                            <option >
                                                Diretor de Marketing/CMO
                                            </option>
                                            <option >
                                                Gerente Administrativo/Negocio 
                                            </option>
                                            <option >
                                                Gerente de Produto/Marca
                                            </option>
                                            <option >
                                                Arquiteto de dados
                                            </option>
                                            <option >
                                                Engenheiro de software
                                            </option>
                                            <option >
                                               Analista de Business Inteligence
                                            </option>
                                            <option >
                                                Arquiteto Big Data 
                                            </option>
                                            <option >
                                                Ass. Administrativo
                                            </option>
                                            <option>
                                                Other/Outro
                                            </option>
                                        </select>

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input name="email" class="span4" type="text" autocomplete="off" placeholder="E-mail" title="Preencha o campo seu email"  required x-moz-errormessage="Ops. Faltou preencher este campo"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">

                                    </div>

                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Telefone</label>
                                    <div class="controls">
                                        <input maxlength="14" name="fone" class="span4" type="text" autocomplete="off" placeholder="Telefone" title="Preencha o campo com seu telefone" required x-moz-errormessage="Ops. Faltou preencher este campo" pattern="[0-9]+$">

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Password</label>
                                    <div class="controls">
                                        <input name="password" class="span4" type="password" autocomplete="off" placeholder="Password" title="Preencha o campo com sua senha" required x-moz-errormessage="Ops. Faltou preencher este campo">

                                    </div>
                                </div>
                                 <div class="control-group ">
                                    <label class="control-label">Re-Password</label>
                                    <div class="controls">
                                        <input name="password" class="span4" type="password" autocomplete="off" placeholder="Re-Password" required>

                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div  class="span9">
                            <fieldset method="post">
                                <legend>Dados da empresa</legend>
                                <div class="control-group">
                                    <label for="challengeQuestion" class="control-label">Aréa de atuação</label>

                                    <div class="controls">

                                        <select  class="span5" name="atuacao" required>
                                            <option> ----------------------- Area de atuação -----------------</option>
                                            <option>
                                                Tecnologia
                                            </option>
                                            <option >
                                                Varejo
                                            </option>
                                            <option >
                                               Logistica
                                            </option>
                                            <option >
                                               Financeira
                                            </option>
                                            <option>
                                                Imoveis
                                            </option>
                                            <option>
                                                Publicidade/Marketing
                                            </option>
                                            <option>
                                                Exportação e Importação
                                            </option>
                                            <option>
                                                Limpeza e Conservação
                                            </option>
                                            <option>
                                                Entretenimento e Diverção
                                            </option>
                                            <option>
                                                Festas e Eventos
                                            </option>
                                            <option>
                                                Musica/Multimidia
                                            </option>
                                        </select>

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Nome da empresa</label>
                                    <div class="controls">
                                        <input  name="nome_empresa" class="span5" type="text" autocomplete="off" placeholder="Nome da empresa" required>

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">CNPJ</label>
                                    <div class="controls">
                                        <input name="cnpj" class="span5" type="text" autocomplete="off" placeholder="CNPJ" maxlength="14" required>
                                    </div>
                                </div>

                                   
                                    <div class="control-group">
                                    <label for="challengeQuestion" class="control-label">Interesses</label>
                                    <div class="controls" >
                                        <select  class="span5" name="interesses" >
                                            <option>--------------------- Qual seu interesse? ---------------</option>
                                            <option>
                                                Mercado de Tecnologia
                                            </option>
                                            <option >
                                                Mercado de Oléo/Petroleo
                                            </option>
                                            <option >
                                                Mercado de Gás 
                                            </option>
                                            <option >
                                                Mercado Financeiro
                                            </option>
                                            <option >
                                                Marketing/Publicidade
                                            </option>
                                            <option >
                                                Entretenimento e Diversão
                                            </option>
                                            <option >
                                               Musica/Multimidia
                                            </option>
                                            <option >
                                                Logistica
                                            </option>
                                            <option >
                                                Vendas
                                            </option>
                                            <option >
                                                Limpeza e Conservação
                                            </option>
                                            <option >
                                                Estrategias de Negocio
                                            </option>
                                            <option >
                                                Bolsa de Valores/Ações
                                            </option>
                                            <option>
                                                Other/Outro
                                            </option>
                                        </select>

                                    </div>
                                </div>

                                    <label for="challengeQuestion" class="control-label">País</label>

                                    <div class="controls">

                                        <select  class="span5" name="pais" required>
                                            <option>------------------------------ País --------------------------</option>
                                            <option>
                                                Brasil
                                            </option>
                                            <option>
                                                Estados Unidos
                                            </option>
                                            <option>
                                                Portugal
                                            </option>
                                            <option >
                                                Espanha
                                            </option>
                                            <option>
                                                Mexico
                                            </option>
                                        </select>

                                    </div><br>

                                    <div class="control-group ">
                                    <label class="control-label">Produtos</label>
                                    <div class="controls">
                                        <input  name="produtos" class="span5" type="text" autocomplete="off" placeholder="Quais seus principais produtos?" title="Preencha o campo com seu produto" required x-moz-errormessage="Ops. Faltou preencher este campo">

                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Serviços</label>
                                    <div class="controls">
                                        <input  name="servicos" class="span5" type="text" autocomplete="off" placeholder="Quais seus principais serviços?" title="Preencha o campo com seu serviço" required x-moz-errormessage="Ops. Faltou preencher este campo">

                                    </div>
                                </div>


                            <div class="cadastro">
                            <p >
                                <button type="submit" class="btn btn-primary">Enviar</button> <button type="reset" class="btn">Apagar</button>
                            </p>
                            </div>
                            </fieldset>

                        </div>

                    </div>
                    </div>
                        
            </form>
        </section>

        <footer class="application-footer">
            <div class="container">
                <p>Cadastro Empresas - Kogen Tecnologia</p>
                <div class="disclaimer">
                    <p>Kogen Tecnologia. All right reserved.</p>
                    <p>Copyright © kogen 2013 - 2014</p>
                </div>
            </div>
        </footer>
        

	</body>
</html>