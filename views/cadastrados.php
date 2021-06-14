<?php
  session_start();
  require_once "../model/Conexao.php";
  $minhaConexao = Conexao::getConexao(); 
  $user = $_SESSION["USER_PORTAL"];
 
        if( !isset($_SESSION["USER_PORTAL"]) ) {
            //header("location:home.php");
        } 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒COMPRA CERTA | CARRINHO</title>
</head>

<body class="corfundo">

    <!--CABEÇALHO-->
    <?php require "barraNavegacaoADM.php"; 
      //USUARIOS
      $Usuarios = $minhaConexao->prepare("select * from usuarios");
      $Usuarios -> execute();
      $contaUsuarios = $Usuarios->rowCount();
      //SEPARADOR
      $Preparador = $minhaConexao->prepare("select * from usuarios where permissaoUser = 'SEPARADOR'");
      $Preparador -> execute();
      $contaPreparador = $Preparador->rowCount();
      //ADM
      $ADM = $minhaConexao->prepare("select * from usuarios where permissaoUser = 'ADM'");
      $ADM -> execute();
      $contaADM = $ADM->rowCount();
      //ENTREGADOR
      $Entregador = $minhaConexao->prepare("select * from usuarios where permissaoUser = 'ENTREGADOR'");
      $Entregador -> execute();
      $contaEntregador = $Entregador->rowCount();
      //CLIENTES
      $Cliente = $minhaConexao->prepare("select * from usuarios where permissaoUser = 'CLIENTE'");
      $Cliente -> execute();
      $contaCliente = $Cliente->rowCount();

      $PPreparador = (($contaPreparador * 100)/$contaUsuarios);
      $PEntregador = (($contaEntregador * 100)/$contaUsuarios);
      $PCliente = (($contaCliente * 100)/$contaUsuarios);
      $PADM = (($contaADM * 100)/$contaUsuarios);
      
    ?>
    <!-- Total -->
    <div class="d-flex justify-content-between m-4">
        <div><h4 class="pt-3 text-dark">Usuários</h4></div>
        <div><a href="cadastroAdm.php" class="btn btn-primary">Novo usuário</a></div>
    </div>
    <div class="row m-3 d-flex justify-content-center">
    <!-- TODOS -->
        <div class="card col-md-3 m-2" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Usuários</h5>
                <h3 class="card-text text-primary"><?php echo $contaUsuarios ?></h3>
                <a href="listaUsuarios.php?codigo=todos" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- ADM -->
        <div class="card col-md-3 m-2" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Administradores</h5>
                <h3 class="card-text text-primary"><?php echo $contaADM ?></h3>
                <a href="listaUsuarios.php?codigo='ADM'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Preparadores -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center ">
                <h5 class="card-title">Preparadores</h5>
                <h3 class="card-text text-warning"><?php echo $contaPreparador ?></h3>
                <a href="listaUsuarios.php?codigo='SEPARADOR'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Entregadores -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center">
                <h5 class="card-title">Entregadores</h5>
                <h3 class="card-text text-info"><?php echo $contaEntregador ?></h3>
                <a href="listaUsuarios.php?codigo='ENTREGADOR'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Clientes -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center">
                <h5 class="card-title">Clientes</h5>
                <h3 class="card-text text-success"><?php echo $contaCliente ?></h3>
                <a href="listaUsuarios.php?codigo='CLIENTE'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        
    </div>
    <div class="m-3">
        <h4 class="">Administradores</h4>
    </div>

    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar"
            style="width: <?php echo $PADM?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="m-3">
        <h4 class="">Preparadores</h4>
    </div>

    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar"
            style="width: <?php echo $PPreparador?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h4 class="m-3">Entregadores</h4>
    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar"
            style="width: <?php echo $PEntregador?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h4 class="m-3">Clientes</h4>
    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar"
            style="width: <?php echo $PCliente?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <!--RODAPE-->
    <?php require "rodape.php"; ?>
    <!--RODAPE-->
</body>

</html>