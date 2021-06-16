    <!--CABEÇALHO-->
    <?php 
    session_start();
    require_once "../model/Conexao.php";
    $minhaConexao = Conexao::getConexao(); 
    $user = $_SESSION["USER_PORTAL"];
    
          if( !isset($_SESSION["USER_PORTAL"]) ) {
              //header("location:home.php");
          } 
    require "barraNavegacaoADM.php"; 
     
    
    ?>
    <!--CABEÇALHO-->
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒COMPRA CERTA | BELEZA</title>
</head>
    <body>
        <form class="row g-3 m-2" action="acoesCarrinho.php" method="POST">
            <div class="col-md-6">
                <label for="CPFAdm" class="form-label">CPF</label>
                <input type="text" class="form-control cpf-mask" id="inputEmail4" placeholder="Ex.: 000.000.000-00"
                    name="CPFAdm">
            </div>
            <div class="col-md-6">
                <label for="NOMEAdm" class="form-label">NOME</label>
                <input type="text" class="form-control" id="inputEmail4"
                    name="NOMEAdm">
            </div>
            <div class="col-md-6">
                <label for="NASCIMENTOAdm" class="form-label">DATA DE NASCIMENTO</label>
                <input type=date class="form-control" data-mask="00/00/0000" maxlength="10" id="NASCIMENTOAdm"
                    name="NASCIMENTOAdm">
            </div>
            <div class="col-md-6">
                <label for="PERMISSAO" class="form-label">PERMISSÃO</label>
                <select class="form-select" name="PERMISSAO">
                    <option value= ADM>Administrador</option>
                    <option value= CLIENTE>Cliente</option>
                    <option value= ENTREGADOR>Entregador</option>
                    <option value= SEPARADOR>Separador</option>
                </select>
            </div>
            <div class="col-6">
                <label for="SENHAAdm" class="form-label">SENHA</label>
                <input type="password" class="form-control" id="SENHAAdm" placeholder="INSIRA UMA SENHA" name="SENHAAdm">
            </div>
            <div class="col-6">
                <label for="EMAILAdm" class="form-label">EMAIL</label>
                <input type="email" class="form-control" id="EMAILAdm" placeholder="INFORME SEUS EMAIL" name="EMAILAdm">
            </div>
            <div class="col-md-6">
                <label for="CEP" class="form-label">CEP </label>
                <input type="text" class="form-control cep-mask" cep-mask="00000-000" id="CEP" name="CEPAdm">
            </div>
            <div class="col-md-6">
                <label for="ENDERECO" class="form-label">ENDEREÇO</label>
                <input type="text" class="form-control" id="ENDERECO" name="ENDERECOAdm">
            </div>
            <div class="col-md-6">
                <label for="CIDADE" class="form-label">CIDADE</label>
                <input type="text" class="form-control" id="CIDADE" name="CIDADEAdm">
            </div>
            <div class="col-md-6">
                <label for="BAIRRO" class="form-label">BAIRRO</label>
                <input type="text" class="form-control" id="BAIRRO" name="BAIRROAdm">
            </div>
            <div class="col-md-6">
                <label for="ESTADO" class="form-label">ESTADO</label>
                <input type="text" class="form-control" id="ESTADO" name="ESTADOAdm">
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            <div id="mensagem">
                <p></p>
            </div>
        </form>
        <script src="../scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script>
        $('#CEP').blur(function(e) {
            var cep = $('#CEP').val();
            var url = "http://viacep.com.br/ws/" + cep + "/json/";
            var validacep = /^[0-9]{5}-?[0-9]{3}$/;

            if (validacep.test(cep)) {
                $('#mensagem').hide();
                pesquisarCEP(url);
            } else {
                $('#mensagem').show();
                $('#mensagem').html("CEP Inválido");
            }
            var retorno = pesquisarCEP(url);
        });

        function pesquisarCEP(endereco) {
            $.ajax({
                type: "GET",
                url: endereco,
                async: false
            }).done(function(data) {
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