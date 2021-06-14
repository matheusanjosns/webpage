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
      //produtos
      $Produtos = $minhaConexao->prepare("select * from produto");
      $Produtos -> execute();
      $contaProdutos = $Produtos->rowCount();
      //bebidas
      $Bebidas = $minhaConexao->prepare("select * from produto where categoria_idCat = '1'");
      $Bebidas -> execute();
      $contaBebidas = $Bebidas->rowCount();
      //horti
      $Horti = $minhaConexao->prepare("select * from produto where categoria_idCat = '2'");
      $Horti -> execute();
      $contaHorti = $Horti->rowCount();
      //frios
      $Frios = $minhaConexao->prepare("select * from produto where categoria_idCat = '3'");
      $Frios -> execute();
      $contaFrios = $Frios->rowCount();
      //padaria
      $Padaria = $minhaConexao->prepare("select * from produto where categoria_idCat = '4'");
      $Padaria -> execute();
      $contaPadaria = $Padaria->rowCount();
      //higiene
      $Higiene = $minhaConexao->prepare("select * from produto where categoria_idCat = '5'");
      $Higiene -> execute();
      $contaHigiene = $Higiene->rowCount();
      //limpeza
      $Limpeza = $minhaConexao->prepare("select * from produto where categoria_idCat = '6'");
      $Limpeza -> execute();
      $contaLimpeza = $Limpeza->rowCount();

      $PBebidas = (($contaBebidas * 100)/$contaProdutos);
      $PFrios = (($contaFrios * 100)/$contaProdutos);
      $PPadaria = (($contaPadaria * 100)/$contaProdutos);
      $PHorti = (($contaHorti * 100)/$contaProdutos);
      $PHigiene = (($contaHigiene * 100)/$contaProdutos);
      $PLimpeza = (($contaLimpeza * 100)/$contaProdutos);
      
    ?>
    <!-- Total -->
    <div class="d-flex justify-content-between m-4">
        <div><h4 class="pt-3 text-dark">Produtos</h4></div>
        <div><a href="cadastroProd.php" class="btn btn-primary">Novo produto</a></div>
    </div>
    <div class="row m-3 d-flex justify-content-center">
    <!-- TODOS -->
        <div class="card col-md-3 m-2" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Produtos</h5>
                <h3 class="card-text text-primary"><?php echo $contaProdutos ?></h3>
                <a href="listaProdutos.php?codigo=todos" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Horti -->
        <div class="card col-md-3 m-2" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Horti</h5>
                <h3 class="card-text text-primary"><?php echo $contaHorti ?></h3>
                <a href="listaProdutos.php?codigo='2'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Bebidas -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center ">
                <h5 class="card-title">Bebidas</h5>
                <h3 class="card-text text-warning"><?php echo $contaBebidas ?></h3>
                <a href="listaProdutos.php?codigo='1'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Frios -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center">
                <h5 class="card-title">Frios</h5>
                <h3 class="card-text text-info"><?php echo $contaFrios ?></h3>
                <a href="listaProdutos.php?codigo='3'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Padaria -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center">
                <h5 class="card-title">Padaria</h5>
                <h3 class="card-text text-success"><?php echo $contaPadaria ?></h3>
                <a href="listaProdutos.php?codigo='4'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Higiene -->
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center">
                <h5 class="card-title">Higiene</h5>
                <h3 class="card-text text-secondary"><?php echo $contaHigiene ?></h3>
                <a href="listaProdutos.php?codigo='5'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        <!-- Limpeza --> 
        <div class="card col-md-3 m-2" style="width: 18rem;">

            <div class="card-body text-center">
                <h5 class="card-title">Limpeza</h5>
                <h3 class="card-text text-danger"><?php echo $contaLimpeza ?></h3>
                <a href="listaProdutos.php?codigo='6'" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
        
    </div>
    <div class="m-3">
        <h4 class="">Horti</h4>
    </div>

    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar"
            style="width: <?php echo $PHorti?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="m-3">
        <h4 class="">Bebidas</h4>
    </div>

    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar"
            style="width: <?php echo $PBebidas?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h4 class="m-3">Frios</h4>
    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar"
            style="width: <?php echo $PFrios?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h4 class="m-3">Padaria</h4>
    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar"
            style="width: <?php echo $PPadaria?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h4 class="m-3">Higiene</h4>
    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-secondary progress-bar-animated" role="progressbar"
            style="width: <?php echo $PHigiene?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h4 class="m-3">Limpeza</h4>
    <div class="progress m-3">
        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar"
            style="width: <?php echo $PLimpeza?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <!--RODAPE-->
    <?php require "rodape.php"; ?>
    <!--RODAPE-->
</body>

</html>