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
      $Pedidos = $minhaConexao->prepare("select * from pedidos where usuarios_cpfUser = {$user}");
      $Pedidos -> execute();
      ?>
      
  <!--CABEÇALHO-->
  <table class="table kt-table table-striped mb-0 responsiva mt-3">
            <thead class="thead-dark">

              <tr>
                <th scope="col">Pedido</th>
                <th scope="col">Valor</th>
                <th scope="col">Situação</th>
                <th scope="col">Data da Entrega</th>
                <th scope="col">Avaliação</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0; $valorTotal = 0; ?>
              <?php 
                while($listaPedidos = $Pedidoss->fetch(PDO::FETCH_ASSOC)){ 
                $pedido = $listaPedidos['idpedido'];  
                $valor = $listaPedidos['valorTotal'];  
                $situacao = $listaPedidos['situacao'];  
                $avaliacao = $listaPedidos['avaliacao'];  
                $dataEntrega = $listaPedidos['dataEntrega']; 
                 
               ?>

              <tr><td data-titulo="Pedido"><?php echo $pedido ?></td>
                <td data-titulo="Valor"><?php echo $valor ?></td>
                <td data-titulo="Situação"><?php echo $situacao ?></td>
                <td data-titulo="Data da Entrega"><?php echo $dataEntrega ?></td>
                <td data-titulo="Avaliação"><?php echo $avaliacao ?></td>
                <td data-titulo="Ações"><?php if($situacao = "Entregue" && $avaliacao = ""){ ?>
                    <form action="">
                    </form>
                    <?php } ?>
                } ?></td>
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