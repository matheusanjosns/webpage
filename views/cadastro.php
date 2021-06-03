<!--CABEÇALHO-->   
<?php require "barraNavegacao.php"; 
             require "modal.php";             
        ?>
      <!--CABEÇALHO-->
<body>
<form class="row g-3" action="cadUser" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">CPF</label>
    <input type="text" class="form-control cpf-mask" id="inputEmail4" placeholder="Ex.: 000.000.000-00" name="CPF">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">NOME</label>
    <input type="name" class="form-control" id="inputPassword4" placeholder="INFORME SEU NOME COMPLETO" name="NOME">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">SENHA</label>
    <input type="password" class="form-control" id="inputAddress" placeholder="INSIRA UMA SENHA" name="SENHA">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">EMAIL</label>
    <input type="email" class="form-control" id="inputAddress2" placeholder="INFORME SEUS EMAIL" name="EMAIL">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">ENDEREÇO</label>
    <input type="text" class="form-control" id="inputCity" placeholder="ENDEREÇO COMPLETO" name="ENDERECO">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">CIDADE</label>
    <input type="text" class="form-control" id="inputCity" placeholder="CIDADE EM QUE RESIDE" name="CIDADE">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">DATA DE NASCIMENTO</label>
    <input type=date class="form-control" id="inputCity" name="NASCIMENTO">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">CEP ESTADO</label>
    <input type="text" class="form-control" id="inputCity" placeholder="CEP CIDADE EM QUE RESIDE" name="CEP">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" onclick="UserCad()">Cadastrar</button>
  </div>
  
</form>
<script src="../scripts.js" ></script>
<?php require "rodape.php"; ?>
</body>
</html>