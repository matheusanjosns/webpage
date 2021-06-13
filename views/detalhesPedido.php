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
      //buscar itens do carrinho
      $Produtos = $minhaConexao->prepare("select * from carrinho where usuarios_cpfUser = {$user}");
      $Produtos -> execute();
      //Consultando a tabela pedodo para saber quantos pedidos tem e definir o proxímo id
      $buscaPedidos = $minhaConexao->prepare("select * from pedidos");
      $contaPedidos = $buscaPedidos ->rowCount();
      $proximoPedido = $contaPedidos + 1;
       //Inserindo novo pedido 
        $a = false;
      ?>
      
  <!--CABEÇALHO-->

  <hr>

  <!--RODAPE-->
  <?php require "rodape.php"; ?>
  <!--RODAPE-->
</body>

</html>