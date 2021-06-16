<?php
  session_start();
  require_once "../model/Conexao.php";
  $minhaConexao = Conexao::getConexao(); 
  $user = $_SESSION["USER_PORTAL"];
  
        if( !isset($_SESSION["USER_PORTAL"]) ) {
            //header("location:home.php");
        }  
  
  // Consulta ao banco de dados
  $Produto = $minhaConexao->prepare("select * from produto where categoria_idCat = '3' and promocao = '0'");
  $Produto -> execute();
  $promoProduto = $minhaConexao->prepare("select * from produto where categoria_idCat = '3' and promocao = '1'");
  $promoProduto -> execute();
  
  //adicionar ao carrinho

  $prod = "SELECT * FROM produto ";

  if(isset($_GET["codigo"])) {

      $id = $_GET["codigo"];

      $prod .= "WHERE idProduto = {$id} ";

  }

  $con_prod = $minhaConexao->prepare ("$prod");
  $con_prod-> execute();

  if(!$con_prod){

      die("Erro na consulta");

  }


  $info_prod = $con_prod->fetch(PDO::FETCH_ASSOC);

  if(isset($_POST["Prod_id"])){

      $prodId = $_POST["Prod_id"];
      $user = $_SESSION["USER_PORTAL"];
     
      $checaCar = $minhaConexao->prepare("SELECT * FROM carrinho WHERE produto_idProduto = {$prodId} && usuarios_cpfUser = '{$user}'");

      $con_checaCar = $checaCar-> execute();

      if(!$con_checaCar){

          die("Consulta não realizada");

      }else {
          $contaItem = $checaCar->rowCount();
          //echo $contaItem;
      }
      if($contaItem == 0){
          $inserirCar = $minhaConexao->prepare("INSERT INTO carrinho (usuarios_cpfUser, produto_idProduto, qtdCar) values ('{$user}', {$prodId}, 1) ");
          //echo $inserirCar;
          $operacao_inserirCar = $inserirCar->execute();
          
          if(!$operacao_inserirCar){
           die("Erro na consulta");   
          }else {
              //header("Refresh: 0");
          }
      }else if($contaItem == 1){
          $buscaCar = $minhaConexao->prepare("SELECT qtdCar from carrinho where usuarios_cpfUser = '{$user}' && produto_idProduto = {$prodId} ");
          //echo $buscaCar;
          $conQtdItemCar = $buscaCar->execute();
          $qtdItemCar = $buscaCar->fetch(PDO::FETCH_ASSOC);
          $aux = $qtdItemCar['qtdCar'] + 1;

          $aumentaQtdItem = $minhaConexao->prepare("UPDATE carrinho SET qtdCar = {$aux} WHERE usuarios_cpfUser = '{$user}' && produto_idProduto = {$prodId} "); 
          //echo $aumentaQtdItem;
          $addItemCar = $aumentaQtdItem->execute();
          
          if(!$con_checaCar){

              die("NÃO FOI ADICIONADO");
          }else {
             // header("Refresh: 0");
          }
      }
  }

  //fim adicionar ao carrinho         

  ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒COMPRA CERTA | FRIOS</title>
</head>

<body class="corpo">

    <!--CABEÇALHO-->
    <?php require "barraNavegacao.php"; 
                        
        ?>
    <!--CABEÇALHO-->

    <!--PROMOÇÕES-->
    <div class="promo m-4">
        <h1>
            PROMOÇÕES
        </h1>

        <div class="row">

            <?php while($listaProdutoPromo = $promoProduto->fetch(PDO::FETCH_ASSOC)){ ?>
            <div class="col-lg-4 col-md-6">
                <div class="card m-2">
                    <img src="<?php echo $listaProdutoPromo['imgUrl'] ?>" class="card-img-top" alt="whisky Royal Salute"
                        width="100" height="300">
                    <div class="card-body">
                        <p class="card-text"><?php echo $listaProdutoPromo['nomeProduto'] ?></p>
                        <h4><s>DE: R$ <?php echo number_format($listaProdutoPromo['valorProduto'],2, ',', '.') ?></s>
                        </h4>
                        <?php $desconto = 0.8 * $listaProdutoPromo['valorProduto'] ?>
                        <h5>POR: R$ <?php echo number_format($desconto,2, ',', '.') ?></h5>
                        <form action="congeladosFrios.php" method="POST">
                            <input type="hidden" name="Prod_id" value="<?php echo $listaProdutoPromo['idProduto'] ?>">
                            <button type="submit" id="addcar" class="btn btn-primary">ADICIONAR</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!--PROMOÇÕES-->
    <div class="row">

        <?php while($listaProduto = $Produto->fetch(PDO::FETCH_ASSOC)){ ?>
        <div class="col-lg-2 col-md-4">
            <div class="card ">
                <img src="<?php echo $listaProduto['imgUrl'] ?>" class="card-img-top" alt="Refrigerante Coca Cola 2L"
                    width="250" height="250px">
                <div class="card-body">
                    <p class="card-text"><?php echo $listaProduto['nomeProduto'] ?></p>
                    <p><?php echo number_format($listaProduto['valorProduto'],2, ',', '.') ?></p>
                    <form action="congeladosFrios.php" method="POST">
                        <input type="hidden" name="Prod_id" value="<?php echo $listaProduto['idProduto'] ?>">
                        <button type="submit" id="addcar" class="btn btn-primary">ADICIONAR</button>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <hr>

    <!-- Script contador carrinho -->
    <script>
    function incrementaValor(valorMaximo) {
        var value = parseInt(document.getElementById('qtdCar').value, 10);
        value = isNaN(value) ? 0 : value;
        if (value >= valorMaximo) {
            value = valorMaximo;
        } else {
            value++;
        }
        document.getElementById('qtdCar').value = value;
    }
    </script>
    <?php require "rodape.php"; ?>
</body>

</html>