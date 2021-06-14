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


    <!--CABEÇALHO-->
    <div class="text-center">
        <h4 class="pt-3 text-dark">Pedidos para entregar</h4>
    </div>
    <table class="table kt-table table-striped m-3 responsiva">
        <thead class="thead-dark">

            <tr>
                <th scope="col">Pedido</th>
                <th scope="col">Valor</th>
                <th scope="col">Situação</th>
                <th scope="col">Detalhes</th>
                <th scope="col">Entregar</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $pedidoEntregador = $minhaConexao->prepare("select * from entrega where usuarios_cpfUser = {$user}");
                $pedidoEntregador -> execute();
                while($lista = $pedidoEntregador->fetch(PDO::FETCH_ASSOC)){ 
                    $pedidoEntrega = $lista['pedidos_idpedido'];
                    $Pedidos = $minhaConexao->prepare("select * from pedidos where idpedido = {$pedidoEntrega} and situacao = 'Em transito'");
                    $Pedidos -> execute();
                    while($listaPedidos = $Pedidos->fetch(PDO::FETCH_ASSOC)) {;
                    ?>
            <tr>
                <?php 
                    
                    $pedido = $listaPedidos['idpedido'];  
                    $valor = number_format($listaPedidos['valorTotal'],2, ',', '.');  
                    $situacao = $listaPedidos['situacao'];  
                    $avaliacao = $listaPedidos['avaliacao'];  
                    $dataEntrega = $listaPedidos['dataEntrega']; 
                    $entregadores = $minhaConexao->prepare("select * from usuarios where permissaoUser = 'ENTREGADOR'");
                    $entregadores -> execute();
                ?>
                <td data-titulo="Pedido"><?php echo $pedido ?></td>
                <td data-titulo="Valor"><?php echo $valor ?></td>
                <td data-titulo="Situação"><?php echo $situacao ?></td>
                <td data-titulo="Detalhes"><a href="detalhesPedido.php?codigo=<?php echo $pedido ?>"
                        class="btn btn-primary">Detalhes</a></td>
                <td data-titulo="Entregar">
                    <form action="acoesCarrinho.php" method="post">
                        <input type="hidden" name="numPedido" value="<?php echo $pedido ?>">
                        <button class="btn btn-success">Confirmar Entrega</button>
                    </form>
                </td>
            </tr>
            <?php } }?>

        </tbody>
    </table>

    <hr>

    <!--RODAPE-->
    <?php require "rodape.php"; ?>
    <!--RODAPE-->
</body>

</html>