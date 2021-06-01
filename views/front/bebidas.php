  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./../../css/index.css"/>
      <title>🛒COMPRA CERTA | BEBIDAS</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
   <body class="corpo">
     
     
<!--CABEÇALHO-->   
<?php include_once("./../includes/barraNavegacao.php"); ?>
      <!--CABEÇALHO-->

      <!--PROMOÇÕES-->
      <div class="promo m-4">
        <h1>
          PROMOÇÕES
        </h1>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="card m-2">
              <img src="./../../imagens/bedidas/whiskyRoyal-salute.jpg" class="card-img-top" alt="whisky Royal Salute" width="100" height="300">
              <div class="card-body">
                <p class="card-text">Whisky Royal Salute 21 anos - 700ml</p>
                <h4><s>DE: R$ 1.147,00</s></h4>
                <h5>POR: R$ 950,90</h5>
                <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
              </div>
            </div>
           </div>   

           <div class="col-lg-4 col-md-6">
            <div class="card m-2">
              <img src="./../../imagens/bedidas/ginTanqueray.jpg" class="card-img-top" alt="Gin Tanqueray" width="100" height="300">
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
              <img src="./../../imagens/bedidas/relBull.jpg" class="card-img-top" alt="Red Bull" width="100" height="300">
              <div class="card-body">
                <p class="card-text">Red Bull 250ML</p>
                <h4><s>DE: R$ 10,00</s></h4>
                <h5>POR R$ 5,90</h5>
                <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
              </div>
            </div>
           </div>   

        </div>       
    </div> 
    <!--PROMOÇÕES-->

      <div class="row m-2">

        <div class="col-lg-2 col-md-4">
          <div class="card ">
            <img src="./../../imagens/bedidas/colaCola.jpg" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="250" height="250px">
            <div class="card-body">
              <p class="card-text">Refrigerante Coca Cola 2L</p>
              <p>R$ 5,90</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>         

         <div class="col-lg-2 col-md-4">
          <div class="card ">
            <img src="./../../imagens/bedidas/guaraJesus.jpg" class="card-img-top" alt="Refrigerante Guarana Jesus - 350ML" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Refrigerante Guarana Jesus 350ML</p>
              <p>R$ 3,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card ">
            <img src="./../../imagens/bedidas/CocaLata1.png" class="card-img-top" alt="Refrigerante Cola Cola - 350ML" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Refrigerante Cola Cola - 350ML</p>
              <P>R$ 2,80</P>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="./../../imagens/bedidas/coca-fanta.jpg" class="card-img-top" alt="Refrigerante Guarana Jesus - 350ML" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Refrigerante Coca e Fanta  2L</p>
              <p>R$ 9,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>
        

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
          <img src="./../../imagens/bedidas/guranaAntartica.jpeg" class="card-img-top" alt="Refrigerante Antartica 2L" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Refrigerante Antartica 2L</p>
              <p>R$ 6,90</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>
         

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="./../../imagens/bedidas/cervejaHeineken.jpg" class="card-img-top" alt="Cerveja Heineken" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Cerveja Heineken</p>
              <p>R$ 7,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="./../../imagens/bedidas/Budweiser.png" class="card-img-top" alt="Cerveja Budweiser" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Cerveja Budweiser</p>
              <p>R$ 7,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="./../../imagens/bedidas/cerveja-stella-artois.jpg" class="card-img-top" alt="Cerveja Stella Artois" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Cerveja Stella Artois</p>
              <p>R$ 7,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="./../../imagens/bedidas/skolBeats.jpg" class="card-img-top" alt="Cerveja Skol Beats" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Cerveja Skol Beats</p>
              <p>R$ 6,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="./../../imagens/bedidas/redLabel.jpg" class="card-img-top" alt="Whisky Red Label" width="250" height="250">
            <div class="card-body">
             <p class="card-text">Whisky Red Label</p>
             <P>R$ 100,00</P>
             <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card ">
            <img src="./../../imagens/bedidas/blackLabel.jpg" class="card-img-top" alt="Whisky Black Label" width="250" height="250">
            <div class="card-body">
             <p class="card-text">Whisky Black Label</p>
             <p>R$ 170,00</p>
             <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-1">
            <img src="./../../imagens/bedidas/buchanan's.png" class="container-fluid" alt="whisky Buchanan's" width="250" height="250">
            <div class="card-body">
              <p class="card-title">Whisky Buchanan's</p>
              <p>R$ 200,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-2">
            <img src="./../../imagens/bedidas/whiskyPassport.jpg" class="container-fluid" alt="whisky Passport" width="250" height="250">
            <div class="card-body">
              <p class="card-title">Whisky Passport</p>
              <p>R$ 75,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-2">
            <img src="./../../imagens/bedidas/wiskCavalo.jpg" class="container-fluid" alt="wisk Cavalo Branco" width="250" height="250">
            <div class="card-body">
              <p class="card-title">Whisky Cavalo Branco</p>
              <p>R$ 120,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-2">
            <img src="./../../imagens/bedidas/smirnoff.jpg" class="container-fluid" alt="Vodka Smirnoff" width="250" height="250">
            <div class="card-body">
              <p class="card-title">Vodka Smirnoff</p>
              <P>R$ 30,00</P>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

         <div class="col-lg-2 col-md-4">
          <div class="card m-2">
            <img src="./../../imagens/bedidas/absolute.jpg" class="card-img-top" alt="Vodka Absolte" width="250" height="250">
            <div class="card-body">
              <p class="card-text">Vodka Absolute</p>
              <p>R$ 25,00</p>
              <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
            </div>
          </div>
         </div>

        </div> 

        <hr>

      <!--RODAPE-->
      <?php include_once("./../includes/rodape.php"); ?>
      <!--RODAPE-->

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
          <a href="#" data-toggle="modal" data-target="#cadastro" data-dismiss="modal">Fazer Cadastro</a>
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

<!-- Modal Cadastro -->

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
<!-- Modal Cadastro -->
      
<!--Modal-->

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
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
    </body>
</html>