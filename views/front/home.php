<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/index.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>🛒COMPRA CERTA | HOME</title>
</head>

<body class="corpo">

       <!--CABEÇALHO-->   
       <?php include_once("./../includes/barraNavegacao.php"); ?>
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
            <img src="./../../imagens/sadiaLog.jpg" class="d-block w-100" alt="1 Slide "  height="250">
           </a>
           </div>
        
           <div class="carousel-item">
            <a href="beleza.php">
            <img src="./../../imagens/Beleza/limpeza0.png" class="d-block w-100" alt="2 Slide" height="250">
           </a>
           </div>

           <div class="carousel-item">
            <a href="hortfruit.php">
            <img src="./../../imagens/exemplo0.png" class="d-block w-100" alt="3 Slide" height="250">
           </a>
           </div>

           <div class="carousel-item">
            <a href="bebidas.php">
            <img src="./../../imagens/bedidas/bebidas.png" class="d-block w-100" alt="4 Slide" height="250">
           </a>
           </div>

           
          </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
          <img src="./../../imagens/icons/chevron-double-left.svg" alt="Anterior" height="30"  class="d-inline-block align-top">
          <span class="visually-hidden">Anterior</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
          <img src="./../../imagens/icons/chevron-double-right.svg" alt="Proximo" height="30" class="d-inline-block align-top">
         </button>
      </div>
      <!--CAROUSEL-->
    
      <!--Cards Departamentos-->
      <div class="row row-cols-1 row-cols-md-5 g-1">

       <div class="col">
        
        <div class="card h-100">
          <img src="./../../imagens/padaria/padaria.jpg" class="card-img-top h-50" alt="Padaria">
          <div class="card-body">
            <h5 class="card-title">Padaria</h5>
            <p class="card-text">Conheça nossa padaria.</p>               
            <a href="padaria.php" >Veja mais</a>
          </div>
         </div>
       </div>

       <div class="col">
        <div class="card h-100">
          <img src="./../../imagens/Beleza/beleza.jpg" class="card-img-top h-50" alt="Beleza">
          <div class="card-body">
            <h5 class="card-title">Higiene e Beleza</h5>              
            <p class="card-text">Conheça a sessão</p>
            <a href="beleza.php" >Veja mais</a>
          </div>
        </div>
       </div>

       <div class="col">
        <div class="card h-100">
          <img src="./../../imagens/hortifruit/hotifruit.jpg" class="card-img-top h-50" alt="Hortifruit">
          <div class="card-body">
            <h5 class="card-title">Hortifruit</h5>                
            <p class="card-text">Hortifruit sem agrotoxico</p>
            <a href="hortfruit.php" >Veja mais</a>
          </div>
        </div>
       </div>

       <div class="col">
        <div class="card h-100">
          <img src="./../../imagens/friosCongelados/carnesDiver.jpg" class="card-img-top h-50" alt="Carnes & Aves">
          <div class="card-body">
            <h5 class="card-title">Frios e Congelados</h5>
            <p class="card-text">Conheça nosso Frios</p>
            <a href="congeladosFrios.php" >Veja mais</a>
          </div>
        </div>
       </div>

       <div class="col">
        <div class="card h-100">             
          <img src="./../../imagens/bedidas/bebidasQuentes.jpg" class="card-img-top h-50" alt="Bebidas">
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
      <?php include_once("./../includes/rodape.php"); ?>
      <!--RODAPE-->
    </div>  

    <!-- Modal -->
    
    
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header d-flex justify-content-center">
            <h5 class="modal-title" id="TituloModalCentralizado">Login</h5>
            
          </div>
          <div class="modal-body">
          <form action="index.php" method="post">
            <div class="form-group">
                <label class="mb-3" for="usuario">Login:</label>
                <input type="text" name="usuario" class="form-control" id="usuario"  placeholder="Seu CPF">
            </div>

            <div class="form-group">
                <label class="mb-3 mt-3" for="senha">Senha:</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
            </div>
            <div class="d-flex justify-content-between mt-2">
              <a href="cadastro.php" >Fazer Cadastro</a>
              <a href="#">Esqueci a senha</a>
            </div>
            <div class="d-grid gap-2">
            <button  type="submit" class="btn btn-primary align-items-end mt-3">Entrar</button>
          </div>
            
        </form>
          </div>
    
         
        </div>
      </div> 
    </div>

    <!-- Modal Cadastro 

    <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="TituloModalCentralizado">Faça seu cadastro!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="index.php" method="post">
            <div class="form-group">
                <label class="mb-3 " for="usuario">CPF</label>
                <input type="text" name="usuario" class="form-control" id="usuario"  placeholder="Seu CPF">
            </div>
            <div class="form-group">
              <label class="mb-3 mt-3" for="usuario">Nome</label>
              <input type="text" name="Nome" class="form-control" id="Nome"  placeholder="Seu Nome">
          </div>

            <div class="form-group">
                <label class="mb-3 mt-3" for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
            </div>

            <div class="form-group">
              <label class="mb-3 mt-3" for="E-mail">E-mail</label>
              <input type="email" name="E-mail" class="form-control" id="E-mail" placeholder="E-mail">
          </div>
          <div class="form-group">
            <label class="mb-3 mt-3" for="E-mail">Cep</label>
            <input type="Cep" name="Cep" class="form-control" id="Cep" placeholder="Cep">
        </div>
        <div class="form-group">
          <label class="mb-3 mt-3" for="E-mail">Endereço</label>
          <input type="Endereco" name="Endereço" class="form-control" id="Endereco" placeholder="Endereço">
       </div>
       <div class="form-group">
        <label class="mb-3 mt-3" for="Complemento">Complemento</label>
        <input type="Complemento" name="Complemento" class="form-control" id="Complemento" placeholder="Complemento">
       </div>
       <div class="d-grid gap-2 mt-2">
       <button type="submit" class="btn btn-primary align-items-end" style="margin-top: 10px;">Finalizar cadastro</button>
       </div>   
      </form>
    </div>
     Modal Cadastro -->
          
    <!--Modal-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>
</html>