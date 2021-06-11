<?php
  require_once "../model/Conexao.php";
  $minhaConexao = Conexao::getConexao(); 
  
  // Consulta ao banco de dados
  $Produto = $minhaConexao->prepare("select * from produto where categoria_idCat = '5' and promocao = '0'");
  $Produto -> execute();
  $promoProduto = $minhaConexao->prepare("select * from produto where categoria_idCat = '5' and promocao = '1'");
  $promoProduto -> execute();
  
  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒COMPRA CERTA | BELEZA</title>
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
              <img src="../imagens/bedidas/ginTanqueray.jpg" class="card-img-top" alt="Gin Tanqueray" width="100" height="300">
              <div class="card-body">                
                <p class="card-text"> Gin Tanqueray</p>
                <h4><s>DE: R$ 149,90</s></h4>
                <h5>POR: R$ 90,90</h5>
                <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
              </div>
            </div>
           </div>   

          
           <div class="col-lg-4 col-md-12">
            <div class="card m-2">
              <img src="../imagens/bedidas/relBull.jpg" class="card-img-top" alt="Red Bull" width="100" height="300">
              <div class="card-body">
                <p class="card-text">Red Bull 250ML</p>
                <h4><s>DE: R$ 10,00</s></h4>
                <h5>POR R$ 5,90</h5>
                <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
              </div>
            </div>
           </div>   

 -->        </div>       
    </div> 
    <!--PROMOÇÕES-->
  <hr>
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
       <img src="../imagens/Beleza/kitExo.png" class="card-img-top" alt="Kit Exo" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Kit tratamento capilar Exo</p>
         <p>R$ 35,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>
   
    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/colgate12.jpg" class="card-img-top" alt="Colgate Total 12 Advanced Fresh com 90g" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Colgate Total 12 Advanced Fresh 90g </p>
         <P>R$ 3,70</P>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/212sexycarolina.png" class="card-img-top" alt="212 Sexy Carolina Herrera Feminino 100ml" width="250" height="250">
       <div class="card-body">
         <p class="card-text">212 Sexy Carolina Herrera 100ml</p>
         <p>R$ 115,90</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/repelente.jpg" class="card-img-top" alt="Repelente" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Repelente</p>
         <p>R$ 4,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/perfumeTomford.jpg" class="card-img-top" alt="Perfume Tom ford" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Perfume Tom ford</p>
         <p>R$ 980,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/rexonaInvible.jpg" class="card-img-top" alt="Desodorante Rexona Invible" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Rexona Invible</p>
         <p>R$ 4,60</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/rexonaV8.png" class="card-img-top" alt="Desodorante Rexona V8" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Desodorante Rexona V8</p>
         <p>R$ 3,20</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/rexonaXtracool.png" class="card-img-top" alt="Desodorante Rexona Xtracool" width="250" height="250">
       <div class="card-body">
        <p class="card-text">Desodorante Rexona Xtracool</p>
        <P>R$ 3,50</P>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/Beleza/saboneteLux.jpg" class="card-img-top" alt="Sabonete Lux" width="250" height="250">
       <div class="card-body">
        <p class="card-text">Sabonete Lux</p>
        <p>R$ 1,50</p>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/saboneteNivia.png" class="container-fluid" alt="Sabonete Nivia" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Sabonete Nivia</p>
         <p>R$ 1,90</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/saboneteRenoxa.jpg" class="container-fluid" alt="Sabonete Renoxa" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Sabonete Renoxa</p>
         <p>R$ 1,80</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/shampoDove.png" class="container-fluid" alt="Shampoo Dove" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Shampoo Dove</p>
         <p>R$ 10,50</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/shampoHeadeSholders.jpg" class="container-fluid" alt="Shampoo Head Shoulders" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Shampoo Head Shoulders</p>
         <P>R$ 15,00</P>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/Beleza/shampoPalmolive.jpg" class="card-img-top" alt="Shampo Palmolive" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Shampoo Palmolive</p>
         <p>R$ 16,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
     </div>
  
     <div class="col-lg-2 col-md-4">
       <div class="card m-2">
         <img src="../imagens/Beleza/cremeFacial.png" class="card-img-top" alt="Creme Facial Nivia" width="250" height="250">
         <div class="card-body">
           <p class="card-text">Creme Facial Nivia</p>
           <p>R$ 40,00</p>
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