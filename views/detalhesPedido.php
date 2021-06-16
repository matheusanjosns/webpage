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
  <?php 
  $sql = $minhaConexao->prepare("SELECT * FROM USUARIOS WHERE cpfUser = '$user'");
  $consulta = $sql->execute();
      
   if(!$consulta){
     die(" FALHA NA CONSULTA");
   }    
   $informacao = $sql->fetch(PDO::FETCH_ASSOC);
   $permissao = $informacao["permissaoUser"];
   if(empty($informacao)){
     echo "USUARIO OU SENHA INCORRETO";
   }else{
       $_SESSION["USER_PORTAL"] = $informacao["cpfUser"];
       
       switch ($permissao){
         case "CLIENTE":
            require "barraNavegacao.php";
             break;
         case "ADM":
            require "barraNavegacaoADM.php";
             break;
         case "SEPARADOR":
            require "barraFunc.php";
             break;
         case "ENTREGADOR":
            require "barraFunc.php";
             break;
       }
   }
   
   
     $id = $_GET["codigo"];
     $valorPedido = 0;
      //Consultando itens do pedido
      $busca = $minhaConexao->prepare("SELECT * from itenspedido where id_pedido = '{$id}'");
      $busca ->execute();
      ?>
      
  <!--CABEÇALHO-->

  <div class="text-center">
        <h4 class="pt-3 text-dark">Pedido - <?php echo $id ?></h4>
    </div>
    <table class="table kt-table table-striped m-3 responsiva">
        <thead class="thead-dark">

            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Valor</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Total</th>
                
            </tr>
        </thead>
        <tbody>
            
            <?php 
                while($listaItem = $busca->fetch(PDO::FETCH_ASSOC)){ ?>
                
            <tr>
            <?php 
                $Produto = $minhaConexao->prepare("SELECT * from produto where idProduto = {$listaItem['produto_idProduto']}");
                $Produto -> execute();
                $dadosProduto = $Produto->fetch(PDO::FETCH_ASSOC);
                $qtd = $listaItem['qtdProduto'];
                $valor = $listaItem['valorUnd'];  
                $valorTotal = $listaItem['valorTotal'];  
                $nome = $dadosProduto['nomeProduto']; 
                $valorPedido = $valorPedido + $valorTotal;
            ?>
                <td data-titulo="Produto"><?php echo $nome ?></td>
                <td data-titulo="Valor">R$ <?php echo number_format($valor,2, ',', '.') ?></td>
                <td data-titulo="Quantidade"><?php echo $qtd ?></td>
                <td data-titulo="Total">R$ <?php echo number_format($valorTotal,2, ',', '.') ?></td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
    <?php 
        $Pedido = $minhaConexao->prepare("SELECT * from pedidos where idpedido = '{$id}'");
        $Pedido -> execute();
        $dadosPedido = $Pedido->fetch(PDO::FETCH_ASSOC);
        $idcomprador = $dadosPedido['usuarios_cpfUser'];
        $Comprador = $minhaConexao->prepare("SELECT * from usuarios where cpfUser = '{$idcomprador}'");
        $Comprador -> execute();
        $dadosComprador = $Comprador->fetch(PDO::FETCH_ASSOC);
        $endereco = $dadosComprador['endereco'];
        $bairro = $dadosComprador['bairro'];
        $cidade = $dadosComprador['cidade'];
        $estado = $dadosComprador['estado'];
    ?>
    <div class="d-inline-flex"><h5 class="m-2">Local da entrega:</h5> 
    <p class="m-2"><?php echo $endereco ?>, <?php echo $bairro ?>, <?php echo $cidade ?>, <?php echo $estado ?></p></div>
    <h5 class="col mt-3 d-flex justify-content-center">Valor total da Compra: R$
            <?php echo number_format($valorPedido,2, ',', '.')  ?></h5>
    <hr>

  <!--RODAPE-->
  <?php require "rodape.php"; ?>
  <!--RODAPE-->
</body>

</html>