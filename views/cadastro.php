    <!--CABEÇALHO-->   
    <?php require "barraNavegacao.php"; ?>
    <!--CABEÇALHO-->
<body>
<form class="row g-3 m-2" action="cadUser" method="POST">
  <div class="col-md-6">
    <label for="CPF" class="form-label">CPF</label>
    <input type="text" class="form-control cpf-mask" id="inputEmail4" placeholder="Ex.: 000.000.000-00" name="CPF">
  </div>
  <div class="col-md-6">
    <label for="NASCIMENTO" class="form-label">DATA DE NASCIMENTO</label>
    <input type=date class="form-control" data-mask="00/00/0000" maxlength="10" id="NASCIMENTO" name="NASCIMENTO">
  </div>
  <div class="col-md-6">
    <label for="NOME" class="form-label">NOME</label>
    <input type="name" class="form-control" id="NOME"  name="NOME">
  </div>
  <div class="col-6">
    <label for="SENHA" class="form-label">SENHA</label>
    <input type="password" class="form-control" id="SENHA" placeholder="INSIRA UMA SENHA" name="SENHA">
  </div>
  <div class="col-6">
    <label for="EMAIL" class="form-label">EMAIL</label>
    <input type="email" class="form-control" id="EMAIL" placeholder="INFORME SEUS EMAIL" name="EMAIL">
  </div>
  <div class="col-md-6">
    <label for="CEP" class="form-label">CEP </label>
    <input type="text" class="form-control cep-mask" cep-mask="00000-000" id="CEP"  name="CEP">
  </div>
  <div class="col-md-6">
    <label for="ENDERECO" class="form-label">ENDEREÇO</label>
    <input type="text" class="form-control" id="ENDERECO"  name="ENDERECO">
  </div>
  <div class="col-md-6">
    <label for="CIDADE" class="form-label">CIDADE</label>
    <input type="text" class="form-control" id="CIDADE"  name="CIDADE">
  </div>
  <div class="col-md-6">
    <label for="BAIRRO" class="form-label">BAIRRO</label>
    <input type="text" class="form-control" id="BAIRRO" name="BAIRRO">
  </div>
  <div class="col-md-6">
    <label for="ESTADO" class="form-label">ESTADO</label>
    <input type="text" class="form-control" id="ESTADO" name="ESTADO">
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" onclick="UserCad()">Cadastrar</button>
  </div>
  <div id="mensagem">
                        <p></p>
                    </div>
</form>
<script src="../scripts.js" ></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
            $('#CEP').blur(function(e){
                var cep=$('#CEP').val();
                var url="http://viacep.com.br/ws/" + cep + "/json/";
                var validacep=/^[0-9]{5}-?[0-9]{3}$/;
                
                if(validacep.test(cep)){
                    $('#mensagem').hide();
                    pesquisarCEP(url);
                }else {
                    $('#mensagem').show();
                    $('#mensagem').html("CEP Inválido");
                }
                var retorno = pesquisarCEP(url);
            });
            
            function pesquisarCEP(endereco) {
                $.ajax({
                    type:"GET",
                    url:endereco,
                    async:false
                }).done(function(data){
                    $('#BAIRRO').val(data.bairro);
                    $('#ENDERECO').val(data.logradouro);
                    $('#CIDADE').val(data.localidade);
                    $('#ESTADO').val(data.uf);
                }).fail(function() {
                    console.log("erro");
                });
            }
        </script>        
<?php require "rodape.php"; ?>
</body>
</html>