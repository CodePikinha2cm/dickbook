<?php 
    // session_start();
    // if(!isset($_SESSION['loginUser'])){
    //     header("Location: login.php");
    //     die();      
    // }

    // require_once $_SERVER['DOCUMENT_ROOT'] . '/configPath.php';
    // require_once SITE_ROOT .'/model/Usuario.php';
    // require_once SITE_ROOT . '/Db/DAO/UsuarioLoginDao.php';
    // require_once SITE_ROOT . '/Db/DAO/AcessoDao.php';

    // $idUserLogado = $_SESSION['loginUser'];
    // $usuarioLoginDao = new UsuarioLoginDao();
    // $usuarioRegistro = $usuarioLoginDao->SelectById($idUserLogado);
    // $usuarioLogado = new Usuario($usuarioRegistro[0]['Nome'], $usuarioRegistro[0]['Login'], $usuarioRegistro[0]['TipoAcesso']);
    
    // $acessoDao = new AcessoDao();
    // $acessoUsuario = $acessoDao->SelectAcessoUser($idUserLogado);
    // $acessoCategorias = $acessoDao->SelectCategoriasAcesso($idUserLogado);

  
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/masterFrame.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-datetimepicker.min.css">
    <script src="./assets/bootstrap/js/jquery.js"></script>
	<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="./assets/bootstrap/js/bootstrap.js"></script>
	<script src="./assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="./assets/js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <nav id="cabecalho" class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                           
                                 
                    </ul>
                    <div class="collapse navbar-collapse col-2 text-right" id="area_user">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                    id="userdropdown" aria-haspopup="true" aria-expanded="false"
                                    href="#">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userdropdown">
                                    <a class="dropdown-item" href="#">Gerenciar Acesso</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/Service/UsuarioLoginService.php?acao=sair">Sair</a>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div> -->
            </nav>
        </div>
    </div>