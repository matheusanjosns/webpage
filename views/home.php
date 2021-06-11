
<?php
  require_once "../model/Conexao.php";
  $minhaConexao = Conexao::getConexao(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒COMPRA CERTA | HOME</title>
</head>

<body class="corpo">

       <!--CABEÇALHO-->   
       <?php require "barraNavegacao.php";?>
      <!--CABEÇALHO-->
    <div class="container-fluid">
        
      <!--CAROUSEL-->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
         </div>

          <div class="carousel-inner">
          
           <div class="carousel-item active">
           <a href="congeladosFrios.php">
            <img src="../imagens/sadiaLog.jpg" class="d-block w-100" alt="1 Slide "  height="250">
           </a>
           </div>
        
           <div class="carousel-item">
            <a href="beleza.php">
            <img src="../imagens/Beleza/limpeza0.png" class="d-block w-100" alt="2 Slide" height="250">
           </a>
           </div>

           <div class="carousel-item">
            <a href="hortfruit.php">
            <img src="../imagens/exemplo0.png" class="d-block w-100" alt="3 Slide" height="250">
           </a>
           </div>

           <div class="carousel-item">
            <a href="bebidas.php">
            <img src="../imagens/bedidas/bebidas.png" class="d-block w-100" alt="4 Slide" height="250">
           </a>
           </div>

           
          </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
          <img src="../imagens/icons/chevron-double-left.svg" alt="Anterior" height="30"  class="d-inline-block align-top">
          <span class="visually-hidden">Anterior</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
          <img src="../imagens/icons/chevron-double-right.svg" alt="Proximo" height="30" class="d-inline-block align-top">
         </button>
      </div>
      <!--CAROUSEL-->
    
      <!--Cards Departamentos-->
      <div class="row row-cols-1 row-cols-md-5 g-1">

       <div class="col">
        
        <div class="card h-100">
          <img src="../imagens/padaria/padaria.jpg" class="card-img-top h-50" alt="Padaria">
          <div class="card-body">
            <h5 class="card-title">Padaria</h5>
            <p class="card-text">Conheça nossa padaria.</p>               
            <a href="padaria.php" >Veja mais</a>
          </div>
         </div>
       </div>

       <div class="col">
        <div class="card h-100">
          <img src="../imagens/Beleza/beleza.jpg" class="card-img-top h-50" alt="Beleza">
          <div class="card-body">
            <h5 class="card-title">Higiene e Beleza</h5>              
            <p class="card-text">Conheça a sessão</p>
            <a href="beleza.php" >Veja mais</a>
          </div>
        </div>
       </div>

       <div class="col">
        <div class="card h-100">
          <img src="../imagens/hortifruit/hotifruit.jpg" class="card-img-top h-50" alt="Hortifruit">
          <div class="card-body">
            <h5 class="card-title">Hortifruit</h5>                
            <p class="card-text">Hortifruit sem agrotoxico</p>
            <a href="hortfruit.php" >Veja mais</a>
          </div>
        </div>
       </div>

       <div class="col">
        <div class="card h-100">
          <img src="../imagens/friosCongelados/carnesDiver.jpg" class="card-img-top h-50" alt="Carnes & Aves">
          <div class="card-body">
            <h5 class="card-title">Frios e Congelados</h5>
            <p class="card-text">Conheça nosso Frios</p>
            <a href="congeladosFrios.php" >Veja mais</a>
          </div>
        </div>
       </div>

       <div class="col">
        <div class="card h-100">             
          <img src="../imagens/bedidas/bebidasQuentes.jpg" class="card-img-top h-50" alt="Bebidas">
          <div class="card-body">            
            <h5 class="card-title">Bebidas</h5>
            <p class="card-text">Bebidas com o melhor preço.</p>
            <a href="bebidas.php" >Veja mais</a>
          </div>
        </div>
       </div>       
      </div>
      <hr>
      <!--RODAPE-->
     
      <!--RODAPE-->
    </div>  

    
     <!--RODAPE-->
     <?php require "rodape.php"; ?>
      <!--RODAPE-->   
  </body>
</html>