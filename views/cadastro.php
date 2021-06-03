<?php 
 require_once("../model/Conexao.php");
 //$stmt = $conn->prepare("select * from usuarios");

 //$stmt->execute();


/*if(isset($_POST["CPF"])){
    $CPF = utf8_decode($_POST["CPF"]);
    $NOME = utf8_decode($_POST["NOME"]);
    $SENHA = utf8_decode($_POST["SENHA"]);
    $EMAIL = utf8_decode($_POST["EMAIL"]);
    $ENDERECO = $_POST["ENDERECO"];
    $NASCIMENTO = $_POST["NASCIMENTO"];
    $CEP = $_POST["CEP"];
    $CIDADE = $_POST["CIDADE"];
try{ 
    $stmt = $conn->prepare("INSERT INTO USUARIOS (cpfUser, nomeUser, senhaUser, emailUser, endereco, cidade, dataNasc, permissaoUser, estado_cepEstado) VALUES('$CPF','$NOME','$SENHA','$EMAIL','$ENDERECO', '$CIDADE','$NASCIMENTO', 'CLIENTE', '$CEP')");
    $stmt->execute();
    echo "executado..";

    echo"INSERT INTO USUARIOS (cpfUser, nomeUser, senhaUser, emailUser, endereco, cidade, dataNasc, permissaoUser, estado_cepEstado) VALUES('$CPF','$NOME','$SENHA','$EMAIL','$ENDERECO','$NASCIMENTO','CLIENTE','$CIDADE',  $CEP)";
}catch(PDOException $e){

    echo"Erro conexão com o banco de dados: ".$e->getMessage();
      
}


}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<form class="row g-3" action="cadUser" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">CPF</label>
    <input type="text" class="form-control" id="inputEmail4" name="CPF">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">NOME</label>
    <input type="name" class="form-control" id="inputPassword4" name="NOME">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">SENHA</label>
    <input type="password" class="form-control" id="inputAddress" placeholder="1234 Main St" name="SENHA">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">EMAIL</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="EMAIL">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">ENDEREÇO</label>
    <input type="text" class="form-control" id="inputCity" name="ENDERECO">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">CIDADE</label>
    <input type="text" class="form-control" id="inputCity" name="CIDADE">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">DATA DE NASCIMENTO</label>
    <input type=date class="form-control" id="inputCity" name="NASCIMENTO">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">CEP ESTADO</label>
    <input type="text" class="form-control" id="inputCity" name="CEP">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
  
</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</html>