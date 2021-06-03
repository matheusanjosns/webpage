<?php
require "./model/usuarios.php";

require_once "IControlador.php";

class ControladorLogin implements IControlador{
   private $usuario;

   public function __construct(){
      $this->usuario = new Usuario();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->usuario->setcpfUser($_POST["CPF"]);
     
      $this->usuario->setsenhaUser(utf8_decode($_POST["SENHA"]));
      
      
      $this->usuario->loginUser();
 
      header('location: home.php');  
   }
}
   
   
?>