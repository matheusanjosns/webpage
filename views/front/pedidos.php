<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./../../css/index.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <title>🛒COMPRA CERTA | CARRINHO</title>
   </head>
   <body class="corfundo">
      <!--CABEÇALHO-->   
      <?php include_once("./../includes/barraNavegacao.php"); ?>
      <!--CABEÇALHO-->
      <div class="text-center">
         <h4 class="pt-3 text-dark">Finalize sua compra</h4>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="container">
            <div class="table-responsive">
              <table class="table kt-table table-striped mb-0 responsiva mt-3">
                  <thead class="thead-dark">
                    <tr>
                        <th scope="col">Item</th>
                        <th width="1000" scope="col">Produto</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td data-titulo="Item" scope="row">1</td>
                        <td data-titulo="Produto">
                          <div class="row">
                              <img src="./../../imagens/bedidas/whiskyRoyal-salute.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
                              <p class="col-9">Whisky Royal Salute 21 anos - 700ml</p>
                          </div>
                        </td>
                        <td data-titulo="Quantidade"><button onclick="decrementaValor(0); return false;" class="btn-warning">-</button><input style="width:20px; font-size:14px" id="resultado" class="m-2 border-0 bg-white text-dark text-center float-right" value="1" readonly><button onclick="incrementaValor(99);return false;" class="btn-success">+</button></td>
                        <td ><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <td data-titulo="Item" scope="row">2</td>
                        <td data-titulo="Produto">
                          <div class="row">
                              <img src="./../../imagens/hortifruit/banana.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
                              <p class="col-10">Banana</p>
                          </div>
                        </td>
                        <td data-titulo="Quantidade"><button class="btn-warning">-</button><input style="width:20px; font-size:14px" id="qtdCar" class="m-2 border-0 bg-white text-dark text-center float-right" value="2" readonly><button class="btn-success">+</button></td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <td data-titulo="Item" scope="row">3</td>
                        <td data-titulo="Produto">
                          <div class="row">
                              <img src="./../../imagens/Beleza/colgate12.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
                              <p class="col-9">Colgate Total 12 Advanced Fresh 90g</p>
                          </div>
                        </td>
                        <td data-titulo="Quantidade"><button class="btn-warning">-</button><input style="width:20px; font-size:14px" id="qtdCar" class="m-2 border-0 bg-white text-dark text-center float-right" value="7" readonly><button class="btn-success">+</button></td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <td data-titulo="Item" scope="row">3</td>
                        <td data-titulo="Produto">
                          <div class="row">
                              <img src="./../../imagens/friosCongelados/peitoPeru.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
                              <p class="col-9">Peito de Peru</p>
                          </div>
                        </td>
                        <td data-titulo="Quantidade"><button class="btn-warning">-</button><input style="width:20px; font-size:14px" id="qtdCar" class="m-2 border-0 bg-white text-dark text-center float-right" value="2" readonly><button class="btn-success">+</button></td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <td data-titulo="Item" scope="row">3</td>
                        <td data-titulo="Produto">
                          <div class="row">
                              <img src="./../../imagens/limpeza/AmacianteDowny.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
                              <p class="col-9">Amaciante Downy</p>
                          </div>
                        </td>
                        <td data-titulo="Quantidade"><button class="btn-warning">-</button><input style="width:20px; font-size:14px" id="qtdCar" class="m-2 border-0 bg-white text-dark text-center float-right" value="3" readonly><button class="btn-success">+</button></td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <td data-titulo="Item" scope="row">3</td>
                        <td data-titulo="Produto">
                          <div class="row">
                              <img src="./../../imagens/padaria/boloCobertura1.png" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
                              <p class="col-9">Bolo Decorado</p>
                          </div>
                        </td>
                        <td data-titulo="Quantidade"><button class="btn-warning">-</button><input style="width:20px; font-size:14px" id="qtdCar" class="m-2 border-0 bg-white text-dark text-center float-right" value="2" readonly><button class="btn-success">+</button></td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                  </tbody>
              </table>
            </div>
            
          </div>
        </div>
        <div class="col-sm-4  mt-4">
        <p class="ml-2">Informe seu CEP</p>
          <div class="row p-2">
            <div class="col-4">
            <input style="width:100px; font-size:14px" type="text" value="40.000-000">
            </div> 
           <div class="col-8"> 
           <button type="button" class="col-sm-6 btn-primary ml-3">Calcular Frete</button>
           </div>
          </div>
           <input style="width:100%; font-size:14px" id="frete" class="m-2 border-0 bg-white text-dark text-center float-right" value=" Prazo de Entrega: 2 - 5 horas - R$25,00" readonly>
        </div>
      </div>
      
      <div class="d-grid gap-2 m-4">
         <button type="submit" class="btn btn-success align-items-end" href="home.php" style="margin-top: 10px;">Finalizar compra</button>
      </div>
      <hr>
      <!--RODAPE-->
      <?php include_once("./../includes/rodape.php"); ?>
      <!--RODAPE-->
      </div>  
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
<!-- Script contador carrinho -->
<script>
  function incrementaValor(valorMaximo){
	var value = parseInt(document.getElementById('resultado').value,10);
  value = isNaN(value) ? 0 : value;
  if(value >= valorMaximo) {
    value = valorMaximo;
  }else{
    value++;
  }
  document.getElementById('resultado').value = value;
}

function decrementaValor(valorMinimo){
  var value = parseInt(document.getElementById('resultado').value,10);
  value = isNaN(value) ? 0 : value;
  if(value <= valorMinimo) {
    value = 0;
  }else{
    value--;
  }
  document.getElementById('resultado').value = value;
}
</script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>
</html>