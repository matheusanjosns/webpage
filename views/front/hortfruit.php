<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/index.css"/>
    <title>🛒COMPRA CERTA | HORTIFRUIT</title>
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
          <img src="imagens/hortifruit/amora.png" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="200">
          <div class="card-body">
            <p class="card-text"> </p>
            <h4><s>DE: R$ 5,00</s></h4>
            <h5>POR: R$ 2,00</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>   

       <div class="col-lg-4 col-md-6">
        <div class="card m-2">
          <img src="imagens/hortifruit/kiwi.jpg" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="200">
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
          <img src="imagens/hortifruit/pitaya.jpg" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="200">
          <div class="card-body">
            <p class="card-text"> </p>
            <h4><s>DE: R$ 6,00</s></h4>
            <h5>POR R$ 3,00</h5>
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
         <img src="imagens/hortifruit/maça.png" class="card-img-top" alt="MAÇA" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Maça</p>
           <p>R$ 1,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>
     
      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/maçaVerde.jpg" class="card-img-top" alt="MAÇA VERDE" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Maçã Verde</p>
           <p>R$ 1,10</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>
     
      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/melancia.jpg" class="card-img-top" alt="Melancia" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Melancia</p>
           <p>R$ 3,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/melao.jpg" class="card-img-top" alt="Melão" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Melão</p>
           <p>R$ 2,50</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/morango.jpg" class="card-img-top" alt="Morango" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Morango</p>
           <p>R$ 5,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/pera.jpg" class="card-img-top" alt="Pera" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Pera</p>
           <p>R$ 2,90</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/uva.jpg" class="card-img-top" alt="Uva" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Uva</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/uvaVerde.jpg" class="card-img-top" alt="Uva verde" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Uva Verde</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/banana.jpg" class="card-img-top" alt="Banana" width="250" height="250px">
         <div class="card-body">
          <p class="card-text">Banana</p>
          <p>R$ 3,00</p>
          <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/caja.jpg" class="card-img-top" alt="Caja" width="250" height="250px">
         <div class="card-body">
          <p class="card-text">Caja</p>
          <p>R$ 4,00</p>
          <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
       <div class="card m-2">
         <img src="imagens/hortifruit/mamão.jpg" class="container-fluid" alt="Mamão" width="250" height="250px">
         <div class="card-body">
           <p class="card-title">Mamão</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/laranja.jpg" class="container-fluid" alt="Laranja" width="250" height="250px">
         <div class="card-body">
           <p class="card-title">Laranja</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/abacaxi.png" class="container-fluid" alt="Abacaxi" width="250" height="250px">
         <div class="card-body">
           <p class="card-title">Abacaxi</p>
           <p>R$ 2,50</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/acerola.jpg" class="container-fluid" alt="Acerola" width="250" height="250px">
         <div class="card-body">
           <p class="card-title">Acerola</p>
           <p>R$ 3,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/maracuja.jpg" class="card-img-top" alt="Maracuja" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Maracuja</p>
           <p>R$ 2,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
      </div>

      <div class="col-lg-2 col-md-4">
        <div class="card m-2">
         <img src="imagens/hortifruit/acai.png" class="card-img-top" alt="Açai" width="250" height="250px">
         <div class="card-body">
           <p class="card-text">Açai</p>
           <p>R$ 3,90</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
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