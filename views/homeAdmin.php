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
    <?php require "barraNavegacao.php"; 
      //Todos os pedidos
      $Pedidos = $minhaConexao->prepare("select * from pedidos");
      $Pedidos -> execute();
      $contaPedidos = $Pedidos->rowCount();
      //Pedidos em preparacao
      $Preparando = $minhaConexao->prepare("select * from pedidos where situacao = 'Preparando'");
      $Preparando -> execute();
      $contaPreparando = $Preparando->rowCount();
      //Pedidos em transito
      $Transito = $minhaConexao->prepare("select * from pedidos where situacao = 'Em transito'");
      $Transito -> execute();
      $contaTransito = $Transito->rowCount();
      //Pedidos entregue
      $Entregue= $minhaConexao->prepare("select * from pedidos where situacao = 'Entregue'");
      $Entregue -> execute();
      $contaEntregue = $Entregue->rowCount();

      $Ppreparando = (($contaPreparando * 100)/$contaPedidos);
      $PTransito = (($contaTransito * 100)/$contaPedidos);
      $PEntregue = (($contaEntregue * 100)/$contaPedidos);
      
    ?>
    <!-- Total -->
    <div class="text-center">
        <h4 class="pt-3 text-dark">Dashboard</h4>
    </div>
    <div class="row m-3 d-flex justify-content-center">
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center">
                <h5 class="card-title">Pedidos</h5>
                <h3 class="card-text text-primary"><?php echo $contaPedidos ?></h3>
                <a href="listaPedidos.php?codigo=todos" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Preparação -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center ">
                <h5 class="card-title">Pedidos em Preparação</h5>
                <h3 class="card-text text-warning"><?php echo $contaPreparando ?></h3>
                <a href="listaPedidos.php?codigo='Preparando'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- TRANSITO -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center">
                <h5 class="card-title">Pedidos em trânsito</h5>
                <h3 class="card-text text-info"><?php echo $contaTransito ?></h3>
                <a href="listaPedidos.php?codigo='Em transito'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- eNTREGUE -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center">
                <h5 class="card-title">Pedidos Entregues</h5>
                <h3 class="card-text text-success"><?php echo $contaEntregue ?></h3>
                <a href="listaPedidos.php?codigo='Entregue'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
    </div>
    <div class="m-3"><h4 class="">Pedidos em Preparação</h4></div>
    
    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: <?php echo $Ppreparando?>%" aria-valuenow="10"
            aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h4 class="m-3">Pedidos em trânsito</h4>
    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: <?php echo $PTransito?>%"
            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h4 class="m-3">Pedidos Entregues</h4>
    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: <?php echo $PEntregue?>%" aria-valuenow="50"
            aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <!--RODAPE-->
    <?php require "rodape.php"; ?>
    <!--RODAPE-->
</body>

</html>