<?php
  require_once "../model/Conexao.php";
  $minhaConexao = Conexao::getConexao(); 
  
  // Consulta ao banco de dados
  $Produto = $minhaConexao->prepare("select * from produto where categoria_idCat = '3' and promocao = '0'");
  $Produto -> execute();
  $promoProduto = $minhaConexao->prepare("select * from produto where categoria_idCat = '3' and promocao = '1'");
  $promoProduto -> execute();
  
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
  <div class="promo ">
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
          <img src="../imagens/friosCongelados/pizzaCalabresa.jpg" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="300">
          <div class="card-body">                
            <p class="card-text"> </p>
            <h4><s>DE: R$ 20,00</s></h4>
            <h5>POR: R$ 15,00</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>   

      
       <div class="col-lg-4 col-md-12">
        <div class="card m-2">
          <img src="../imagens/friosCongelados/queijoCuia.png" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="300">
          <div class="card-body">
            <p class="card-text"> </p>
            <h4><s>DE: R$ 40,00</s></h4>
            <h5>POR R$ 25,00</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>    -->

    </div>       
</div> 
<!--PROMOÇÕES-->

  <div class="row">
        
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
       <img src="../imagens/friosCongelados/lasanha.jpg" class="card-img-top" alt="LASANHA BOLONHESA" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">LASANHA BOLONHESA</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>
   
    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/margarinaQualy.jpg" class="card-img-top" alt="Margarina Qualy" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Margarina Qualy</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/nuggets.jpg" class="card-img-top" alt="Nuggets" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Nuggets</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/paoDequeijo.jpg" class="card-img-top" alt="Pão De Queijo" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Pão De Queijo</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/peitoPeru.jpg" class="card-img-top" alt="Peito Peru" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Peito Peru</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/queijoMussa.jpg" class="card-img-top" alt="Queijo Mussarela" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Queijo Mussarela</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/presunto.jpg" class="card-img-top" alt="Presunto" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Presunto</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/sobrecoxa.jpg" class="card-img-top" alt="Sobre Coxa" width="250" height="250px">
       <div class="card-body">
        <p class="card-text">Sobre Coxa</p>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/tortaEspinafre.jpg" class="card-img-top" alt="Torta de espinafre" width="250" height="250px">
       <div class="card-body">
        <p class="card-text">Torta de espinafre</p>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/toscana.jpg" class="container-fluid" alt="Toscana" width="250" height="250px">
       <div class="card-body">
         <p class="card-title">Toscana</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/burguerVegetais.jpg" class="container-fluid" alt="Hamburguer de Vegetais" width="250" height="250px">
       <div class="card-body">
         <p class="card-title">Hamburguer de Vegetais</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/linguicaCalabresa.jpg" class="container-fluid" alt="Linguica Calabresa" width="250" height="250px">
       <div class="card-body">
         <p class="card-title">Linguica Calabresa</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/bisteca.jpg" class="container-fluid" alt="Bisteca" width="250" height="250px">
       <div class="card-body">
         <p class="card-title">Bisteca</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/filezinho.jpg" class="card-img-top" alt="Filezinho de Frango" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Filezinho de Frango</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/friosCongelados/presuntoFatia.jpg" class="card-img-top" alt="Presento Fatiado" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Presento Fatiado</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div> -->

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