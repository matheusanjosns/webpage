<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/index.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>🛒COMPRA CERTA | HIGIENE</title>
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
          <img src="./../../imagens/limpeza/comfort.png" class="card-img-top" alt="Amaciante Comfort" width="100" height="200">
          <div class="card-body">
            <p class="card-text">Amaciante Comfort</p>
            <h4><s>DE: R$ 15,00</s></h4>
            <h5>POR: R$ 10,00</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>   

       <div class="col-lg-4 col-md-6">
        <div class="card m-2">
          <img src="./../../imagens/limpeza/AmacianteDowny.jpg" class="card-img-top" alt="Amaciante Downy" width="100" height="200">
          <div class="card-body">                
            <p class="card-text">Amaciante Downy </p>
            <h4><s>DE: R$ 26,35</s></h4>
            <h5>POR: R$ 15,00</h5>
            <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
          </div>
        </div>
       </div>   

      
       <div class="col-lg-4 col-md-12">
        <div class="card m-2">
          <img src="./../../imagens/limpeza/rodoPia.jpg" class="card-img-top" alt="Rodo Pia" width="100" height="200">
          <div class="card-body">
            <p class="card-text">Rodo Pia </p>
            <h4><s>DE: R$ 5,49</s></h4>
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
       <img src="./../../imagens/limpeza/lisoform.jpg" class="card-img-top" alt="Lisoform" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Lisoform 1L</p>
         <p>R$ 10,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>         
     </div>       
    </div>
   
    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/qboa.jpg" class="card-img-top" alt="Água Sanitaria Qboa" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Água Sanitaria Qboa 1UND</p>
         <p>R$ 3,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>
   
    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/sabaoLiquido.jpg" class="card-img-top" alt="Sabão Liquido Ype" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Sabão Liquido Ype 1UND</p>
         <P>R$ 2,20</P>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/shampoPet.jpg" class="card-img-top" alt="Shampo Pet" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Shampo Pet 1L</p>
         <p>R$ 20,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/veja.jpg" class="card-img-top" alt="Desenfetante Veja" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Desenfetante Veja 1UND</p>
         <p>R$ 4,50</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/sabaoEmPo.jpg" class="card-img-top" alt="Sabão em Po OMO" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Sabão em Po OMO 1PC</p>
         <p>R$ 20,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/mop.jpg" class="card-img-top" alt="Limpador MOP" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Limpador MOP 1UND</p>
         <p>R$ 69,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/pano-de-limpeza.jpg" class="card-img-top" alt="Pano para Limpeza" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Pano para Limpeza 3UND</p>
         <p>R$ 12,60</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/alcol 70.jpg" class="card-img-top" alt="Álcool 70%" width="250" height="250">
       <div class="card-body">
        <p class="card-text">Álcool 70% 1L</p>
        <P>R$ 5,90</P>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="./../../imagens/limpeza/germicida.jpg" class="card-img-top" alt="Germicida Hidrosteril Plus" width="250" height="250">
       <div class="card-body">
        <p class="card-text">Germicida Hidrosteril Plus 1L</p>
        <p>R$ 15,00</p>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/amacianteConfort.jpg" class="container-fluid" alt="Amaciante Confort" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Amaciante Confort 1UND</p>
         <p>R$ 15,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/vanish.jpg" class="container-fluid" alt="alvejante Vanish" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Alvejante Vanish 1UND</p>
         <p>R$ 18,18</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/sacoParaLixoPreto.jpg" class="container-fluid" alt="Saco para lixo preto" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Saco para lixo preto 10UND</p>
         <p>R$ 10,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/luvaLonga.jpg" class="container-fluid" alt="Luva Longa " width="250" height="250">
       <div class="card-body">
         <p class="card-title">Luva Longa 4UND</p>
         <P>R$ 5,00</P>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="./../../imagens/limpeza/balde.jpg" class="card-img-top" alt="Balde" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Balde 1UND</p>
         <p>R$ 5,50</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
     </div>
  
     <div class="col-lg-2 col-md-4">
       <div class="card m-2">
         <img src="./../../imagens/limpeza/aromatizadorEletrico.jpg" class="card-img-top" alt="Aromatizador Eletrico" width="250" height="250">
         <div class="card-body">
           <p class="card-text">Aromatizador Eletrico 1UND</p>
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