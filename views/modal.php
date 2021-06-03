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
              <a href="Cadastro.php" >Fazer Cadastro</a>
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