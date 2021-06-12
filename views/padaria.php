<?php
  session_start();
  require_once "../model/Conexao.php";
  $minhaConexao = Conexao::getConexao(); 
  $user = $_SESSION["user_portal"];
  echo $user;
        if( !isset($_SESSION["user_portal"]) ) {
            header("location:home.php");
        }
  
  // Consulta ao banco de dados
  $Produto = $minhaConexao->prepare("select * from produto where categoria_idCat = '1' and promocao = '0'");
  $Produto -> execute();
  $promoProduto = $minhaConexao->prepare("select * from produto where categoria_idCat = '1' and promocao = '1'");
  $promoProduto -> execute();
  

  //adicionar ao carrinho

  $prod = "SELECT * FROM produto ";

  if(isset($_GET["codigo"])) {

      $id = $_GET["codigo"];

      $prod .= "WHERE idProduto = {$id} ";

  }

  $con_prod = $minhaConexao->prepare ("$prod");
  $con_prod-> execute();

  if(!$con_prod){

      die("Erro na consulta");

  }


  $info_prod = $con_prod->fetch(PDO::FETCH_ASSOC);

  if(isset($_POST["Prod_id"])){

      $prodId = $_POST["Prod_id"];
      $user = $_SESSION["user_portal"];
     
      $checaCar = $minhaConexao->prepare("SELECT * FROM carrinho WHERE produto_idProduto = {$prodId} && usuarios_cpfUser = {$user}");

      $con_checaCar = $checaCar-> execute();

      if(!$con_checaCar){

          die("Consulta não realizada");

      }else {
          $contaItem = $con_checaCar->rowCount();
          echo $contaItem;
      }
      if($contaItem == 0){
          $inserirCar = $minhaConexao->prepare("INSERT INTO carrinho (usuarios_cpfUser, produto_idProduto, qtdCar) values ({$user}, {$prodId}, 1) ");
          echo $inserirCar;
          $operacao_inserirCar = $inserirCar->execute();
          
          if(!$operacao_inserirCar){
           die("Erro na consulta");   
          }else {
              //header("Refresh: 0");
          }
      }else if($contaItem == 1){
          $buscaCar = $minhaConexao->prepare("SELECT qtdCar from carrinho where usuarios_cpfUser = {$user} && produto_idProduto = {$prodId} ");
          echo $buscaCar;
          $conQtdItemCar = $buscaCar->execute();
          $qtdItemCar = $conQtdItemCar->fetch(PDO::FETCH_ASSOC);
          $aux = $qtdItemCar['Carrinho_prod_qtd'] + 1;

          $aumentaQtdItem = $minhaConexao->prepare("UPDATE carrinho SET qtdCar = {$aux} WHERE usuarios_cpfUser = {$user} && produto_idProduto = {$prodId} "); 
          echo $aumentaQtdItem;
          $addItemCar = $aumentaQtdItem->execute();
          
          if(!$con_checaCar){

              die("NÃO FOI ADICIONADO");
          }else {
             // header("Refresh: 0");
          }
      }
  }

  //fim adicionar ao carrinho
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒COMPRA CERTA | PADARIA</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                <button type="button" title="<?php echo $listaProdutoPromo['idProduto']?>" id="addcar<?php echo $listaProdutoPromo['idProduto'] ?>" class="btn btn-primary">ADICIONAR</button>
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
              <button type="button" title="<?php echo $listaProduto['idProduto']?>" id="addcar<?php echo $listaProduto['idProduto'] ?>" class="btn btn-primary">ADICIONAR</button>
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
<script>
            //função ajax para add ao carinho
            $('button').click(function(e){
                e.preventDefault();
                var id= $(this).attr("title");
                console.log(id);
                
                
                $.ajax({
                    type:"POST",
                    data:"Prod_id=" + id,
                    url:"padaria.php",
                    async:false
                }).done(function(data) {
                    $sucesso = $.parseJSON(data)["sucesso"];
                    
                    if($sucesso){
                          
                    } else {
                        console.log("erro na exclusão");
                    }
                }).fail(function() {
                    console.log("Erro no sistema");
                })
            });
    </script>
<?php require "rodape.php"; ?>
  </body>
</html>