<?php
require_once "Model/produto.php";
require_once "IControlador.php";
class ControladoBebidasListar implements IControlador{
    private $produto;

    public function __construct(){
        $this->produto = new Livro();
    }

    public function processaRequisicao(){
        $listarBebidas = $this->produto->listarBebidas();
        require "views/bebidas.php";
    }
}
    
    
?>