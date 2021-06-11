<?php
  require_once "../model/Conexao.php";
  $minhaConexao = Conexao::getConexao(); 
  
  // Consulta ao banco de dados
  $Produto = $minhaConexao->prepare("select * from produto where categoria_idCat = '2' and promocao = '0'");
  $Produto -> execute();
  $promoProduto = $minhaConexao->prepare("select * from produto where categoria_idCat = '2' and promocao = '1'");
  $promoProduto -> execute();
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒COMPRA CERTA | HORTIFRUIT</title>
</head>
    <body class="corpo">
      <!--CABEÇALHO-->   
      <?php require "barraNavegacao.php";?>
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
              <img src="<?php echo $listaProdutoPromo['imgUrl'] ?>" class="card-img-top" alt="whisky Royal Salute" width="100" height="300">
              <div class="card-body">
                <p class="card-text"><?php echo $listaProdutoPromo['nomeProduto'] ?></p>
                <h4><s>DE: R$ <?php echo number_format($listaProdutoPromo['valorProduto'],2, ',', '.') ?></s></h4>
                <?php $desconto = 0.8 * number_format($listaProdutoPromo['valorProduto'],2, ',', '.'); ?>
                <h5>POR: R$ <?php echo number_format($desconto,2, ',', '.') ?></h5>
                <button type="button"  class="btn btn-primary">ADICIONAR</button>
              </div>
            </div>
           </div>   
    <?php } ?>  

       <!-- <div class="col-lg-4 col-md-6">
        <div class="card m-2">
          <img src="../imagens/hortifruit/kiwi.jpg" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="200">
          <div class="card-body">                
            <p class="card-text"> </p>
            <h4><s>DE: R$ 2,00</s></h4>
            <h5>POR: R$ 1,00</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>   

      
       <div class="col-lg-4 col-md-12">
        <div class="card m-2">
          <img src="../imagens/hortifruit/pitaya.jpg" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="200">
          <div class="card-body">
            <p class="card-text"> </p>
            <h4><s>DE: R$ 6,00</s></h4>
            <h5>POR R$ 3,00</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>    -->

    </div>       
</div> 
<!--PROMOÇÕES-->

     
    <div class="row m-2">
        
    <?php while($listaProduto = $Produto->fetch(PDO::FETCH_ASSOC)){ ?>
        <div class="col-lg-2 col-md-4">
          <div class="card ">
            <img src="<?php echo $listaProduto['imgUrl'] ?>" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="250" height="250px">
            <div class="card-body">
              <p class="card-text"><?php echo $listaProduto['nomeProduto'] ?></p>
              <p><?php echo number_format($listaProduto['valorProduto'],2, ',', '.') ?></p>
              <button type="button" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>         
        <?php } ?>
     
      <!-- <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/maçaVerde.jpg" class="card-img-top" alt="MAÇA VERDE" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Maçã Verde</p>
           <p>R$ 1,10</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>
     
      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/melancia.jpg" class="card-img-top" alt="Melancia" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Melancia</p>
           <p>R$ 3,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/melao.jpg" class="card-img-top" alt="Melão" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Melão</p>
           <p>R$ 2,50</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/morango.jpg" class="card-img-top" alt="Morango" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Morango</p>
           <p>R$ 5,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/pera.jpg" class="card-img-top" alt="Pera" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Pera</p>
           <p>R$ 2,90</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/uva.jpg" class="card-img-top" alt="Uva" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Uva</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/uvaVerde.jpg" class="card-img-top" alt="Uva verde" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Uva Verde</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/banana.jpg" class="card-img-top" alt="Banana" width="250" height="250px">
         <div class="card-body">
          <p class="card-text">Banana</p>
          <p>R$ 3,00</p>
          <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/caja.jpg" class="card-img-top" alt="Caja" width="250" height="250px">
         <div class="card-body">
          <p class="card-text">Caja</p>
          <p>R$ 4,00</p>
          <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
       <div class="card m-2">
         <img src="../imagens/hortifruit/mamão.jpg" class="container-fluid" alt="Mamão" width="250" height="250px">
         <div class="card-body">
           <p class="card-title">Mamão</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/laranja.jpg" class="container-fluid" alt="Laranja" width="250" height="250px">
         <div class="card-body">
           <p class="card-title">Laranja</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/abacaxi.png" class="container-fluid" alt="Abacaxi" width="250" height="250px">
         <div class="card-body">
           <p class="card-title">Abacaxi</p>
           <p>R$ 2,50</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/acerola.jpg" class="container-fluid" alt="Acerola" width="250" height="250px">
         <div class="card-body">
           <p class="card-title">Acerola</p>
           <p>R$ 3,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/maracuja.jpg" class="card-img-top" alt="Maracuja" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Maracuja</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="../imagens/hortifruit/acai.png" class="card-img-top" alt="Açai" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Açai</p>
           <p>R$ 3,90</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>
 -->
    </div>
    <hr>
<!-- Script contador carrinho -->
<script>
  function incrementaValor(valorMaximo){
var value = parseInt(document.getElementById('qtdCar').value,10);
  value = isNaN(value) ? 0 : value;
  if(value >= valorMaximo) {
      value = valorMaximo;
  }else{
      value++;
  }
  document.getElementById('qtdCar').value = value;
}
</script>
<?php require "rodape.php"; ?>
  </body>
</html>