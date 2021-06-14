<?php
  require_once "../model/Conexao.php";
  require_once "../model/funcoes.php";
  $minhaConexao = Conexao::getConexao(); ?> 
  
    <!--CABEÇALHO-->   
    <?php require "barraNavegacao.php"; ?>
    <!--CABEÇALHO-->
    <?php 

    if(isset($_POST["enviar"] ) ){
      $url = "../uploads/";
      $url .= utf8_decode($_FILES['IMG']['name']); 
      
      $mensagem = publicarArquivo($_FILES['IMG']);
  }
    ?>
    <!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🛒COMPRA CERTA | HOME</title>
</head>
<body>
<div class="row m-3">
    <div  height=150px width= 150px>
    <?php if(isset($_POST["enviar"] ) ){ ?>
    <img src="<?php echo $url ?>" width="150" height="150">
    <?php } ?>
    </div>
    <div class="col-7">
        <label for="inputAddress2" class="form-label">IMAGEM</label>
        
        <form action="cadastroProd.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" Value="1000000" >
            <div class="row">
              <div class="col-9"><input type="file" class="form-control" id="inputAddress2"  name="IMG"></div>
              <div class="col-3"><input type="submit" name="enviar" value="Confirmar"></div>
            </div>
            
              
            </div>
        </form>
        <?php
            if(isset($mensagem)){
           
            }
        ?>
      </div>
</div>
<form class="row g-3 m-3" action="cadProd" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">NOME</label>
    <input type="text" class="form-control cpf-mask" id="inputEmail4" placeholder="INFORME O NOME DO PRODUTO" name="NOME">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">VALOR</label>
    <input type="number" class="form-control" id="inputPassword4" placeholder="INFORME O VALOR DO PRODUTO" name="VALOR">
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">QUANTIDADE</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="INFORME A QUANTIDADE" name="QTD">
  </div>
  <input type="hidden" name="IMG" Value="<?php if(!empty($url)){echo $url;} else{0;}?>" >
  <div class="col-md-4">
    <label for="inputCity" class="form-label">PROMOCAO</label>
    <select name="PROMOCAO" class="form-select">
      <option value="1">Ativar</option>
      <option value="0">Desativar</option>
    </select>
  </div>
  <?php
  $sql = $minhaConexao->prepare("Select * from categoria;");
  $sql->execute();
  
  
  ?>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">CATEGORIA</label>
    <select name="IDCATEGORIA" class="form-select">
    <?php
    while($informacao = $sql ->fetch(PDO::FETCH_ASSOC)) {
      $nomeCat = $informacao["nomeCat"];
  $idCat = $informacao["idCat"];
                        ?>
                            <option value="<?php echo $idCat;  ?>">
                                <?php echo utf8_encode($nomeCat);  ?>
                            </option>
                        <?php
                            }
                        ?>               
    </select>
  </div>
  <?php 
  //require_once "funcoes.php";
  
  ?>
  
  <div class="col-12">
    <input type="submit" class="btn btn-primary" name="enviar"></input>
  </div>
  
</form>
<script src="../scripts.js" ></script>
<?php require "rodape.php"; ?>
</body>
</html>