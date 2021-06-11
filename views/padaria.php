<?php
  require_once "../model/Conexao.php";
  $minhaConexao = Conexao::getConexao(); 
  
  // Consulta ao banco de dados
  $Produto = $minhaConexao->prepare("select * from produto where categoria_idCat = '4' and promocao = '0'");
  $Produto -> execute();
  $promoProduto = $minhaConexao->prepare("select * from produto where categoria_idCat = '4' and promocao = '1'");
  $promoProduto -> execute();
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒COMPRA CERTA | PADARIA</title>
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
          <img src="../imagens/padaria/CaixaLacta.jpg" class="card-img-top" alt="Caixa de Bombom" width="100" height="300">
          <div class="card-body">                
            <p class="card-text"> </p>
            <h4><s>DE: R$ 13,64</s></h4>
            <h5>POR: R$ 7,00</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>   

      
       <div class="col-lg-4 col-md-12">
        <div class="card m-2">
          <img src="../imagens/padaria/biscoitoPolvilho.jpg" class="card-img-top" alt="Biscoito Polvilho" width="100" height="300">
          <div class="card-body">
            <p class="card-text"> </p>
            <h4><s>DE: R$ 4,00</s></h4>
            <h5>POR R$ 2,50</h5>
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
      
      <!--  <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/paoHambuger.jpg" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-text">Pão de Hamburger</p>
            <p>R$ 0,50</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>
      
       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/paoSal.jpg" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-text">Pão de Sal</p>
            <P>R$ 0,80</P>
            <button type="button " onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/paoLeite.jpg" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-text">Pão de Leite</p>
            <p>R$ 0,90</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/paoFatia.jpg" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-text">Pão Fatia</p>
            <p>R$ 4,00</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/bombaChocolate.jpg" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-text">Bomba de Chocolate</p>
            <p>R$ 2,50</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/beijinho.jpg" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-text">Beijinho</p>
            <p>R$ 0,60</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/casadinho.jpg" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-text">Casadinho</p>
            <p>R$ 0,60</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/Croissant.jpg" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
           <p class="card-text">Croissant</p>
           <P>R$ 1,20</P>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
         <div class="card m-2">
          <img src="../imagens/padaria/brigadeiro.png" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
           <p class="card-text">Brigadeiro</p>
           <p>R$ 0,50</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/boloBrigadeiro.jpg" class="container-fluid" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-title">Bolo de Brigadeiro</p>
            <p>R$ 50,00</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/donuts.jpg" class="container-fluid" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-title">Donuts de Chocolate</p>
            <p>R$ 3,50</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/boloCobertura1.png" class="container-fluid" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-title">Bolo Decorado</p>
            <p>R$ 50,00</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/coxinha.jpg" class="container-fluid" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-title">Coxinha de Frango</p>
            <P>R$ 3,00</P>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>

       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/pastel.jpg" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-text">Pastel de Carne</p>
            <p>R$ 2,50</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
        </div>
     
        <div class="col-lg-2 col-md-4">
          <div class="card m-2">
            <img src="../imagens/padaria/paodeQueijo.png" class="card-img-top" alt="Pão de Queijo" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Pão de Queijo</p>
              <p>R$ 5,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
          </div> -->
      
      </div>
     
     <hr>
   </div>  
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