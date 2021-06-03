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
             require "modal.php";             
        ?>
      <!--CABEÇALHO-->

    <!--PROMOÇÕES-->
  <div class="promo m-4">
    <h1>
      PROMOÇÕES
    </h1>

    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="card m-2">
          <img src="../imagens/padaria/PassaTempo.jpg" class="card-img-top" alt="Passa Tempo" width="100" height="300">
          <div class="card-body">
            <p class="card-text"> </p>
            <h4><s>DE: R$ 3,00</s></h4>
            <h5>POR: R$ 1,50</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>   

       <div class="col-lg-4 col-md-6">
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
       </div>   

    </div>       
</div> 
<!--PROMOÇÕES-->
     
      <div class="row m-2">
        
       <div class="col-lg-2 col-md-4">
        <div class="card m-2">
          <img src="../imagens/padaria/SonhoDoce.png" class="card-img-top" alt="15" width="250" height="250">
          <div class="card-body">
            <p class="card-text">Sonho Doce de Leite</p>
            <p>R$ 1,90</p>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>         
        </div>       
       </div>
      
       <div class="col-lg-2 col-md-4">
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
          </div>
      
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