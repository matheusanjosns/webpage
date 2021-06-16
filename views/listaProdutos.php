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
    <!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<header>

  <nav class="navbar navbar-expand-lg navbar-dark ">

    <div class="container-fluid">
      <a class="navbar-brand" href="homeAdmin.php" >COMPRA CERTA 🛒</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>

    </div>
    <a class="nav-link active dropdown-toggle" href="#" id="user" role="button" data-bs-toggle="dropdown" aria-expanded="false"  data-target="#login">
                   <img src="../imagens/icons/account_circle_white_24dp.svg" alt="login" width="30" height="25" class="d-inline-block align-top">
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="user">
                               
                 <li><a class="dropdown-item" href="sair.php">Sair</a></li>  

  </nav>
</header>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
  integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
  integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</html>
    <?php 
        $status = $_GET["codigo"];
      if($status == 'todos'){
          $Produtos = $minhaConexao->prepare("select * from produto");
            $Produtos -> execute();
      }else {
      $Produtos = $minhaConexao->prepare("select * from produto where categoria_idCat = {$status}");
      $Produtos -> execute();
    }
      ?>

    <!--CABEÇALHO-->
    <div class="text-center">
        <h4 class="pt-3 text-dark">Produtos</h4>
    </div>
    <table class="table kt-table table-striped m-3 responsiva">
        <thead class="thead-dark">

            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Valor</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Promoção</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; $valorTotal = 0; ?>
            <?php 
                while($listaProdutos = $Produtos->fetch(PDO::FETCH_ASSOC)){ 
                $nome = $listaProdutos['nomeProduto'];  
                $valor = $listaProdutos['valorProduto'];  
                $qtd = $listaProdutos['qtdProduto'];  
                $promocao = $listaProdutos['promocao'];  
                 
                
                
               ?>

            <tr>
                <td data-titulo="Nome"><?php echo $nome ?></td>
                <td data-titulo="Valor">R$ <?php echo number_format($valor,2, ',', '.') ?></td>
                <td data-titulo="Quantidade"><?php echo $qtd ?></td>
                <td data-titulo="Promoção"><?php 
                    if($promocao == 0) {
                        echo 'Não';
                    }else {
                        echo 'Sim';
                    } ?>
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>

    <hr>

    <!--RODAPE-->
    <?php require "rodape.php"; ?>
    <!--RODAPE-->
</body>

</html>