<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>🛒COMPRA CERTA | CARRINHO</title>
   </head>
   <body class="corfundo">
      
      <!--CABEÇALHO-->   
      <?php require "barraNavegacao.php"; 
             require "modal.php";             
        ?>
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
                              <img src="../imagens/bedidas/whiskyRoyal-salute.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
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
                              <img src="../imagens/hortifruit/banana.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
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
                              <img src="../imagens/Beleza/colgate12.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
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
                              <img src="../imagens/friosCongelados/peitoPeru.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
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
                              <img src="../imagens/limpeza/AmacianteDowny.jpg" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
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
                              <img src="../imagens/padaria/boloCobertura1.png" class="col-1 img-fluid" alt="whisky Royal Salute" width="20px" height="40px">
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

 <!--RODAPE-->
 <?php require "rodape.php"; ?>
      <!--RODAPE-->  
  </body>
</html>