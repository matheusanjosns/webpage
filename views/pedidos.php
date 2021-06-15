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
      $Produtos = $minhaConexao->prepare("select * from carrinho where usuarios_cpfUser = '{$user}'");
      $Produtos -> execute();
      //Consultando a tabela pedodo para saber quantos pedidos tem e definir o proxímo id
      $buscaPedidos = $minhaConexao->prepare("select * from pedidos");
      $buscaPedidos -> execute();
      $contaPedidos = $buscaPedidos ->rowCount();
      $proximoPedido = $contaPedidos + 1;
      
       //Inserindo novo pedido 
        $a = false;
      ?>
      
  <!--CABEÇALHO-->

  <div class="text-center">
    <h4 class="pt-3 text-dark">Finalize sua compra</h4>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="container">
        <div class="table-responsive">
          <table class="table kt-table table-striped mb-0 responsiva mt-3">
            <thead class="thead-dark">

              <tr>
                <th scope="col">Item</th>
                <th width="600" scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Valor</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0; $valorTotal = 0; ?>
              <?php while($listaProduto = $Produtos->fetch(PDO::FETCH_ASSOC)){ ?>

              <tr>
                <?php $Produto = $minhaConexao->prepare("select * from produto where idProduto = {$listaProduto['produto_idProduto']}");
                        $Produto -> execute();
                        $dadosProduto = $Produto->fetch(PDO::FETCH_ASSOC);
                        //Guardar os dados em variaveis 
                        $img = $dadosProduto['imgUrl'];
                        $nome = $dadosProduto['nomeProduto'];
                        $id = $listaProduto['idCar'];
                        $idProduto = $listaProduto['produto_idProduto'];
                        $qtd = $listaProduto['qtdCar'];
                        if($dadosProduto['promocao'] == 0){
                          $valor = $dadosProduto['valorProduto'];
                        }else{
                          $valor = $dadosProduto['valorProduto'] * 0.8;
                        }
                        $totalItem = $valor * $qtd;
                        $valorTotal = $valorTotal + $totalItem;
                        
                            
                      ?>
                <td data-titulo="Item" scope="row"><?php echo $i +1 ?></td>
                <td data-titulo="Produto">
                  <div class="row">
                    <img src="<?php echo $img ?>" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px"
                      height="40px">
                    <p class="col-9"><?php echo $nome ?></p>
                  </div>
                </td>
                <td data-titulo="Quantidade">
                  <div class="d-inline-flex">
                    <?php if($qtd > 1){ ?>
                      <form class="col" action="acoesCarrinho.php" method="POST">
                        <input type="hidden" name="idCarDiminue" value="<?php echo $id ?>">  
                        <input type="hidden" name="qtdDiminuir" value="<?php echo $qtd - 1 ?>">  
                        <button class="btn-warning">-</button>
                      </form>
                    <?php } else { ?>
                      <form action="">
                        <button class="btn-warning" disabled>-</button>
                      </form>
                    <?php } ?>
                    
                    <input  style="width:20px; font-size:14px" id="resultado"
                      class="m-2 col border-0 bg-white text-dark text-center float-right" value="<?php echo $qtd ?>"
                      readonly>
                    <form class ="col" action="acoesCarrinho.php" method="POST">
                    <input type="hidden" name="idCarAumenta" value="<?php echo $id ?>">  
                    <input type="hidden" name="qtdAumentar" value="<?php echo $qtd + 1 ?>">
                    <button class="btn-success">+</button>
                    </form>
                  </div>
                </td>
                <td data-titulo="Valor" scope="row">R$ <?php echo number_format($totalItem,2, ',', '.')  ?></td>
                <td>
                  <form class ="col" action="acoesCarrinho.php" method="POST">
                    <input type="hidden" name="idCar" value="<?php echo $id ?>">
                    <button  class="btn btn-danger">Remover</button>
                  </form>
                </td>

              </tr>
              <?php 
                if(isset($_POST["valorTotal"])){
                  $dataTime = date('d/m/Y H:i:s');
                  $insereItens = $minhaConexao->prepare("INSERT INTO itenspedido (qtdProduto, valorUnd, valorTotal, produto_idProduto, id_pedido) VALUES (:qtdProduto, :valorUnd, :valorTotal, :produto_idProduto, :id_pedido)");
                  $inserirItem = $insereItens-> execute(array(
                    ':qtdProduto' => $qtd,
                    ':valorUnd' => $valor,
                    ':valorTotal' => $totalItem,
                    ':produto_idProduto' => $idProduto,
                    ':id_pedido' => $proximoPedido,
                ));
                }
              ?>
              <?php $i = $i +1; ?>
              <?php } ?>

            </tbody>
          </table>

          <h5 class="col mt-3 d-flex justify-content-end">Valor total da Compra: R$
            <?php echo number_format($valorTotal,2, ',', '.')  ?></h5>
        </div>
        <?php
          if(isset($_POST["valorTotal"])){
            $dataTime = date('Y/m/d H:i:s');
            $a = true;
            $inserePedido = $minhaConexao->prepare("INSERT INTO pedidos (usuarios_cpfUser, dataHora, valorTotal, situacao) VALUES (:usuarios_cpfUser, :dataHora, :valorTotal, :situacao)");
            $inserirPed = $inserePedido-> execute(array(
              ':usuarios_cpfUser' => $user,
              ':dataHora' => $dataTime,
              ':valorTotal' => $valorTotal,
              ':situacao' => 'Preparando' 
            ));
            $limpaCarrinho = $minhaConexao->prepare("DELETE from carrinho where usuarios_cpfUser = '{$user}'");
            $limpaCarrinho -> execute();
        }
            if(!$a){ ?>
              <div class="text-center">
              <h4 class="pt-3 text-dark">Informe os dados do cartão de crédito</h4>
              <form class="row g-3 m-2" action="cadUser" method="POST">
                <div class="col-md-4">
                  <label for="CPF" class="form-label">Cartão</label>
                  <input type="text" class="form-control cpf-mask" id="inputEmail4" name="CPF">
                </div>
                <div class="col-md-2">
                  <label for="NASCIMENTO" class="form-label">Validade</label>
                  <input type=date class="form-control" data-mask="00/00/0000" maxlength="10" id="NASCIMENTO"
                    name="NASCIMENTO">
                </div>
                <div class="col-md-2">
                  <label for="NOME" class="form-label">CVC</label>
                  <input type="number" class="form-control" id="NOME" name="NOME">
                </div>
                <div class="col-md-4">
                  <label for="NOME" class="form-label">Nome do Titular</label>
                  <input type="text" class="form-control" id="NOME" name="NOME">
                </div>
              </form>
            </div>
            <div class="m-4">
              <form action="pedidos.php" method="POST" class="d-grid gap-2">
                <input type="hidden" name="valorTotal" value="<?php echo number_format($valorTotal,2, ',', '.') ?>">                
                <button type="submit" class="btn btn-success align-items-end" style="margin-top: 10px;">Finalizar compra</button>
              </form>
            </div>
            <?php } else { ?>
              <div class="text-center">
                <h4 class="pt-3 text-dark">Seu pedido foi realizado com sucesso!</h4>
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
                <a href="home.php" class="btn btn-primary" type="button">Voltar para o inicio</a>
                <a href="pedidosFeitos.php" class="btn btn-success" type="button">Ver Pedidos</a>
              </div>
            <?php  }?>
        
      </div>
    </div>

  </div>

  
  <hr>

  <!--RODAPE-->
  <?php require "rodape.php"; ?>
  <!--RODAPE-->
</body>

</html>