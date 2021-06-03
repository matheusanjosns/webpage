<?php
require "./model/usuarios.php";

require_once "IControlador.php";

class ControladorNovoUsuario implements IControlador{
   private $usuario;

   public function __construct(){
      $this->usuario = new Usuario();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->usuario->setcpfUser($_POST["CPF"]);
      $this->usuario->setnomeUser(utf8_decode($_POST["NOME"]));
      $this->usuario->setsenhaUser(utf8_decode($_POST["SENHA"]));
      $this->usuario->setemailUser(utf8_decode($_POST["EMAIL"]));
      $this->usuario->setendereco($_POST["ENDERECO"]);
      $this->usuario->setcidade($_POST["CIDADE"]);
      $this->usuario->setdataNasc($_POST["NASCIMENTO"]);
      
      $this->usuario->setestado_cepEstado($_POST["CEP"]);
      
      $this->usuario->cadUser();
 
      header('Location:home.php', true,302);
   }
}
   
   
?>