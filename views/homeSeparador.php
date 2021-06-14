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
    <?php require "barraFunc.php"; ?>
    <?php 
      $Pedidos = $minhaConexao->prepare("select * from pedidos where situacao = 'Preparando'");
      $Pedidos -> execute();
      ?>

    <!--CABEÇALHO-->
    <div class="text-center">
        <h4 class="pt-3 text-dark">Pedidos para separar</h4>
    </div>
    <table class="table kt-table table-striped m-3 responsiva">
        <thead class="thead-dark">

            <tr>
                <th scope="col">Pedido</th>
                <th scope="col">Valor</th>
                <th scope="col">Situação</th>
                
                
                <th scope="col">Selecionar entregador</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; $valorTotal = 0; ?>
            <?php 
                while($listaPedidos = $Pedidos->fetch(PDO::FETCH_ASSOC)){ 
                $pedido = $listaPedidos['idpedido'];  
                $valor = number_format($listaPedidos['valorTotal'],2, ',', '.');  
                $situacao = $listaPedidos['situacao'];  
                $avaliacao = $listaPedidos['avaliacao'];  
                $dataEntrega = $listaPedidos['dataEntrega']; 
                $entregadores = $minhaConexao->prepare("select * from usuarios where permissaoUser = 'ENTREGADOR'");
                $entregadores -> execute();
                
               ?>

            <tr>
                <td data-titulo="Pedido"><?php echo $pedido ?></td>
                <td data-titulo="Valor"><?php echo $valor ?></td>
                <td data-titulo="Situação"><?php echo $situacao ?></td>
                
                
                <td><div class="d-inline-flex">
                        <form class="row" action="acoesCarrinho.php" method="POST">
                            <input type="hidden" name="idPedido" value="<?php echo $pedido ?>">
                            <select class="form-select" name="Entregador">
                            <?php while($buscaEntregadores = $entregadores->fetch(PDO::FETCH_ASSOC)){ 
                                $idEntregador = $buscaEntregadores['cpfUser'];
                                $nomeEntregador = $buscaEntregadores['nomeUser'];
                                ?>
                                <option value=<?php echo $idEntregador ?> selected><?php echo $nomeEntregador ?></option>
                            <?php } ?>
                            </select>
                            <button class="btn btn-success">Liberar entrega</button>
                        </form>
                    </div></td>
                <td data-titulo="Ações"><a href="detalhesPedido.php?codigo=<?php echo $pedido ?>" class="btn btn-primary">Detalhes</a></td>
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