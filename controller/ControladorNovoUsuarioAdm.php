<?php
require "./model/usuarios.php";

require_once "IControlador.php";

class ControladorNovoUsuarioAdm implements IControlador{
   private $usuario;

   public function __construct(){
      $this->usuario = new Usuario();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->usuario->setcpfUser($_POST["CPFAdm"]);
      $this->usuario->setnomeUser(utf8_decode($_POST["NOMEAdm"]));
      $this->usuario->setsenhaUser(utf8_decode($_POST["SENHAAdm"]));
      $this->usuario->setemailUser(utf8_decode($_POST["EMAILAdm"]));
      $this->usuario->setendereco($_POST["ENDERECOAdm"]);
      $this->usuario->setcidade($_POST["CIDADEAdm"]);
      $this->usuario->setdataNasc($_POST["NASCIMENTOAdm"]);
      $this->usuario->setestado($_POST["ESTADOAdm"]);
      $this->usuario->setbairro($_POST["BAIRROAdm"]);
      $this->usuario->setpermissaoUser($_POST["PERMISSAO"]);
      
      $this->usuario->setestado_cepEstado($_POST["CEPAdm"]);
      
      $this->usuario->cadUserAdm();
 
      //header('Location:cadastrados.php', true,302);
   }
}
   
   
?>