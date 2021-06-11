<?php 
    require_once 'produtoDAO.php';

    class Produto{
        //declaração de produtos
        
        private $nomeProduto;
        private $valorProduto;
        private $qtdProduto;
        private $imgUrl;
        private $promocao;
        private $categoria_idCat;
        private $idProduto;

        //pega valores
        public function getnomeProduto(){
            return $this->nomeProduto;
        }
        public function getvalorProduto(){
            return $this->valorProduto;
        }
        public function getqtdProduto(){
            return $this->qtdProduto;
        }
        public function getimgUrl(){
            return $this->imgUrl;
        }
        public function getpromocao(){
            return $this->promocao;
        }
        public function getcategoria_idCat(){
            return $this->categoria_idCat;
        }
        public function getidProduto(){
            return $this->idProduto;
        }
        
        
        // altera valores
        public function setnomeProduto(){
            return $this->nomeProduto;
        }
        public function setvalorProduto(){
            return $this->valorProduto;
        }
        public function setqtdProduto(){
            return $this->qtdProduto;
        }
        public function setimgUrl(){
            return $this->imgUrl;
        }
        public function setpromocao(){
            return $this->promocao;
        }
        public function setcategoria_idCat(){
            return $this->categoria_idCat;
        }
        public function setidProduto(){
            return $this->idProduto;
        }
       
        //funções
        public function cadProduto(){
            $produtoDAO = new ProdutoDAO();
            $produtoDAO->cadProduto($this);
       }

        public function ListarBebidas(){
            $produtoDAO = new ProdutoDAO();
            return $produtoDAO->ListarBebidas($this);
       }
        
    }
?>