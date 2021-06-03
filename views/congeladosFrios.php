<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/index.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>🛒COMPRA CERTA | FRIOS</title>
</head>

<body class="corpo">


<!--CABEÇALHO-->   
<?php include_once("./../includes/barraNavegacao.php"); ?>
      <!--CABEÇALHO-->


  <!--PROMOÇÕES-->
  <div class="promo ">
    <h1>
      PROMOÇÕES
    </h1>

    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="card m-2">
          <img src="./../../imagens/friosCongelados/batataFrita.jpg" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="300">
          <div class="card-body">
            <p class="card-text"> </p>
            <h4><s>DE: R$ 19,90</s></h4>
            <h5>POR: R$ 12,90</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>   

       <div class="col-lg-4 col-md-6">
        <div class="card m-2">
          <img src="./../../imagens/friosCongelados/pizzaCalabresa.jpg" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="300">
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
          <img src="./../../imagens/friosCongelados/queijoCuia.png" class="card-img-top" alt="Refrigerante Coca Cola 2L" width="100" height="300">
          <div class="card-body">
            <p class="card-text"> </p>
            <h4><s>DE: R$ 40,00</s></h4>
            <h5>POR R$ 25,00</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>   

    </div>       
</div> 
<!--PROMOÇÕES-->

  <div class="row">
        
    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/friosCongelados/fileDepeito.jpg" class="card-img-top" alt="FILE DE PEITO" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">FILE DE PEITO</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>
   
    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/lasanha.jpg" class="card-img-top" alt="LASANHA BOLONHESA" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">LASANHA BOLONHESA</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>
   
    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/margarinaQualy.jpg" class="card-img-top" alt="Margarina Qualy" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Margarina Qualy</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/nuggets.jpg" class="card-img-top" alt="Nuggets" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Nuggets</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/paoDequeijo.jpg" class="card-img-top" alt="Pão De Queijo" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Pão De Queijo</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/peitoPeru.jpg" class="card-img-top" alt="Peito Peru" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Peito Peru</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/queijoMussa.jpg" class="card-img-top" alt="Queijo Mussarela" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Queijo Mussarela</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/presunto.jpg" class="card-img-top" alt="Presunto" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Presunto</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/sobrecoxa.jpg" class="card-img-top" alt="Sobre Coxa" width="250" height="250px">
       <div class="card-body">
        <p class="card-text">Sobre Coxa</p>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/tortaEspinafre.jpg" class="card-img-top" alt="Torta de espinafre" width="250" height="250px">
       <div class="card-body">
        <p class="card-text">Torta de espinafre</p>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/toscana.jpg" class="container-fluid" alt="Toscana" width="250" height="250px">
       <div class="card-body">
         <p class="card-title">Toscana</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/burguerVegetais.jpg" class="container-fluid" alt="Hamburguer de Vegetais" width="250" height="250px">
       <div class="card-body">
         <p class="card-title">Hamburguer de Vegetais</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/linguicaCalabresa.jpg" class="container-fluid" alt="Linguica Calabresa" width="250" height="250px">
       <div class="card-body">
         <p class="card-title">Linguica Calabresa</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/bisteca.jpg" class="container-fluid" alt="Bisteca" width="250" height="250px">
       <div class="card-body">
         <p class="card-title">Bisteca</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/filezinho.jpg" class="card-img-top" alt="Filezinho de Frango" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Filezinho de Frango</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/friosCongelados/presuntoFatia.jpg" class="card-img-top" alt="Presento Fatiado" width="250" height="250px">
       <div class="card-body">
         <p class="card-text">Presento Fatiado</p>
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