<?php
require "./model/produto.php";

require_once "IControlador.php";

class ControladorNovoProduto implements IControlador{
   private $produto;

   public function __construct(){
      $this->produto = new Produto();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->produto->setnomeProduto(utf8_decode($_POST["NOME"]));
      $this->produto->setvalorProduto(utf8_decode($_POST["VALOR"]));
      $this->produto->setqtdProduto(utf8_decode($_POST["QTD"]));
      $this->produto->setimgUrl(utf8_decode($_POST["IMG"]));
      $this->produto->setpromocao(utf8_decode($_POST["PROMOCAO"]));
      $this->produto->setcategoria_idCat($_POST["IDCATEGORIA"]);
      
      $this->produto->cadProduto();
 
      //header('Location:homeADM.php', true,302);
   }
}
   
   
?>