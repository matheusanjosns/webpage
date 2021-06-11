  <?php
  require_once "../model/Conexao.php";
  $minhaConexao = Conexao::getConexao(); 
  
  // Consulta ao banco de dados
  $Produto = $minhaConexao->prepare("select * from produto where categoria_idCat = '1' and promocao = '0'");
  $Produto -> execute();
  $promoProduto = $minhaConexao->prepare("select * from produto where categoria_idCat = '1' and promocao = '1'");
  $promoProduto -> execute();
  
  ?>
  
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <div class="card ">
            <img src="../imagens/bedidas/guaraJesus.jpg" class="card-img-top" alt="Refrigerante Guarana Jesus - 350ML" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Refrigerante Guarana Jesus 350ML</p>
              <p>R$ 3,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card ">
            <img src="../imagens/bedidas/CocaLata1.png" class="card-img-top" alt="Refrigerante Cola Cola - 350ML" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Refrigerante Cola Cola - 350ML</p>
              <P>R$ 2,80</P>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="../imagens/bedidas/coca-fanta.jpg" class="card-img-top" alt="Refrigerante Guarana Jesus - 350ML" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Refrigerante Coca e Fanta  2L</p>
              <p>R$ 9,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>
        

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
          <img src="../imagens/bedidas/guranaAntartica.jpeg" class="card-img-top" alt="Refrigerante Antartica 2L" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Refrigerante Antartica 2L</p>
              <p>R$ 6,90</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>
         

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="../imagens/bedidas/cervejaHeineken.jpg" class="card-img-top" alt="Cerveja Heineken" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Cerveja Heineken</p>
              <p>R$ 7,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="../imagens/bedidas/Budweiser.png" class="card-img-top" alt="Cerveja Budweiser" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Cerveja Budweiser</p>
              <p>R$ 7,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="../imagens/bedidas/cerveja-stella-artois.jpg" class="card-img-top" alt="Cerveja Stella Artois" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Cerveja Stella Artois</p>
              <p>R$ 7,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="../imagens/bedidas/skolBeats.jpg" class="card-img-top" alt="Cerveja Skol Beats" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Cerveja Skol Beats</p>
              <p>R$ 6,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="../imagens/bedidas/redLabel.jpg" class="card-img-top" alt="Whisky Red Label" width="250" height="250">
            <div class="card-body">
             <p class="card-text">Whisky Red Label</p>
             <P>R$ 100,00</P>
             <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card ">
            <img src="../imagens/bedidas/blackLabel.jpg" class="card-img-top" alt="Whisky Black Label" width="250" height="250">
            <div class="card-body">
             <p class="card-text">Whisky Black Label</p>
             <p>R$ 170,00</p>
             <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="../imagens/bedidas/buchanan's.png" class="container-fluid" alt="whisky Buchanan's" width="250" height="250">
            <div class="card-body">
              <p class="card-title">Whisky Buchanan's</p>
              <p>R$ 200,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-2">
            <img src="../imagens/bedidas/whiskyPassport.jpg" class="container-fluid" alt="whisky Passport" width="250" height="250">
            <div class="card-body">
              <p class="card-title">Whisky Passport</p>
              <p>R$ 75,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-2">
            <img src=".../imagens/bedidas/wiskCavalo.jpg" class="container-fluid" alt="wisk Cavalo Branco" width="250" height="250">
            <div class="card-body">
              <p class="card-title">Whisky Cavalo Branco</p>
              <p>R$ 120,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-2">
            <img src="../imagens/bedidas/smirnoff.jpg" class="container-fluid" alt="Vodka Smirnoff" width="250" height="250">
            <div class="card-body">
              <p class="card-title">Vodka Smirnoff</p>
              <P>R$ 30,00</P>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-2">
            <img src="../imagens/bedidas/absolute.jpg" class="card-img-top" alt="Vodka Absolte" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Vodka Absolute</p>
              <p>R$ 25,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div> -->

        </div> 
     <hr>
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