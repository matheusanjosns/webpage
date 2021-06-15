<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🛒COMPRA CERTA | HOME</title>
  <link rel="stylesheet" href="../css/index.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<header>

  <nav class="navbar navbar-expand-lg navbar-dark ">

    <div class="container-fluid">
      <a class="navbar-brand" >COMPRA CERTA 🛒</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>

    </div>

  </nav>
</header>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
  integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
  integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</html>
<div class="d-flex justify-content-center m-5 ">

  <form action="loginUser" method="post" class="col-6 p-3">
    <div class="form-group">
      <label class="mb-3" for="usuario">Login:</label>
      <input type="text" name="CPF" class="form-control" id="usuario" placeholder="Seu CPF">
    </div>

    <div class="form-group">
      <label class="mb-3 mt-3" for="senha">Senha:</label>
      <input type="password" name="SENHA" class="form-control" id="senha" placeholder="Senha">
    </div>
    <div class="d-flex justify-content-between mt-2">
      <a href="cadastro.php">Fazer Cadastro</a>
      <a href="#">Esqueci a senha</a>
    </div>
    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-primary align-items-end mt-3">Entrar</button>
    </div>

  </form>


</div>
<?php 
    require "rodape.php"
?>