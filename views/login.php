<?php
    require "barraNavegacao.php"
?>
<form action="loginUser" method="post">
            <div class="form-group">
                <label class="mb-3" for="usuario">Login:</label>
                <input type="text" name="CPF" class="form-control" id="usuario"  placeholder="Seu CPF">
            </div>

            <div class="form-group">
                <label class="mb-3 mt-3" for="senha">Senha:</label>
                <input type="password" name="SENHA" class="form-control" id="senha" placeholder="Senha">
            </div>
            <div class="d-flex justify-content-between mt-2">
              <a href="cadastro.php" >Fazer Cadastro</a>
              <a href="#">Esqueci a senha</a>
            </div>
            <div class="d-grid gap-2">
            <button  type="submit" class="btn btn-primary align-items-end mt-3">Entrar</button>
          </div>
            
        </form>
<?php 
    require "rodape.php"
?>