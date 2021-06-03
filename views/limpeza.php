<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒COMPRA CERTA | HIGIENE</title>
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
          <img src="../imagens/limpeza/comfort.png" class="card-img-top" alt="Amaciante Comfort" width="100" height="200">
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
          <img src="../imagens/limpeza/AmacianteDowny.jpg" class="card-img-top" alt="Amaciante Downy" width="100" height="200">
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
          <img src="../imagens/limpeza/rodoPia.jpg" class="card-img-top" alt="Rodo Pia" width="100" height="200">
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
       <img src="../imagens/limpeza/lisoform.jpg" class="card-img-top" alt="Lisoform" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Lisoform 1L</p>
         <p>R$ 10,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>         
     </div>       
    </div>
   
    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/qboa.jpg" class="card-img-top" alt="Água Sanitaria Qboa" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Água Sanitaria Qboa 1UND</p>
         <p>R$ 3,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>
   
    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/sabaoLiquido.jpg" class="card-img-top" alt="Sabão Liquido Ype" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Sabão Liquido Ype 1UND</p>
         <P>R$ 2,20</P>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/shampoPet.jpg" class="card-img-top" alt="Shampo Pet" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Shampo Pet 1L</p>
         <p>R$ 20,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/veja.jpg" class="card-img-top" alt="Desenfetante Veja" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Desenfetante Veja 1UND</p>
         <p>R$ 4,50</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/sabaoEmPo.jpg" class="card-img-top" alt="Sabão em Po OMO" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Sabão em Po OMO 1PC</p>
         <p>R$ 20,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/mop.jpg" class="card-img-top" alt="Limpador MOP" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Limpador MOP 1UND</p>
         <p>R$ 69,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/pano-de-limpeza.jpg" class="card-img-top" alt="Pano para Limpeza" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Pano para Limpeza 3UND</p>
         <p>R$ 12,60</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/alcol 70.jpg" class="card-img-top" alt="Álcool 70%" width="250" height="250">
       <div class="card-body">
        <p class="card-text">Álcool 70% 1L</p>
        <P>R$ 5,90</P>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
      <div class="card m-2">
       <img src="../imagens/limpeza/germicida.jpg" class="card-img-top" alt="Germicida Hidrosteril Plus" width="250" height="250">
       <div class="card-body">
        <p class="card-text">Germicida Hidrosteril Plus 1L</p>
        <p>R$ 15,00</p>
        <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/amacianteConfort.jpg" class="container-fluid" alt="Amaciante Confort" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Amaciante Confort 1UND</p>
         <p>R$ 15,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/vanish.jpg" class="container-fluid" alt="alvejante Vanish" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Alvejante Vanish 1UND</p>
         <p>R$ 18,18</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/sacoParaLixoPreto.jpg" class="container-fluid" alt="Saco para lixo preto" width="250" height="250">
       <div class="card-body">
         <p class="card-title">Saco para lixo preto 10UND</p>
         <p>R$ 10,00</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/luvaLonga.jpg" class="container-fluid" alt="Luva Longa " width="250" height="250">
       <div class="card-body">
         <p class="card-title">Luva Longa 4UND</p>
         <P>R$ 5,00</P>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
    </div>

    <div class="col-lg-2 col-md-4">
     <div class="card m-2">
       <img src="../imagens/limpeza/balde.jpg" class="card-img-top" alt="Balde" width="250" height="250">
       <div class="card-body">
         <p class="card-text">Balde 1UND</p>
         <p>R$ 5,50</p>
         <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
       </div>
     </div>
     </div>
  
     <div class="col-lg-2 col-md-4">
       <div class="card m-2">
         <img src="../imagens/limpeza/aromatizadorEletrico.jpg" class="card-img-top" alt="Aromatizador Eletrico" width="250" height="250">
         <div class="card-body">
           <p class="card-text">Aromatizador Eletrico 1UND</p>
           <p>R$ 25,00</p>
           <button type="button" onclick="incrementaValor(99);return false;" class="btn btn-primary">ADICIONAR</button>
         </div>
       </div>
       </div>
   
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