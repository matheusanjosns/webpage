<?php
    require_once "Conexao.php";
    
   

    class ProdutoDAO{
        public function cadProduto(){
            $minhaConexao = Conexao::getConexao(); 
            if(isset($_POST["NOME"])){
    
                $nomeProduto = utf8_decode($_POST["NOME"]);
                $valorProduto = utf8_decode($_POST["VALOR"]);
                $qtdProduto = utf8_decode($_POST["QTD"]);
                $imgUrl = utf8_decode($_POST["IMG"]);
                $promocao = utf8_decode($_POST["PROMOCAO"]);
                $categoria_idCat = utf8_decode($_POST["IDCATEGORIA"]);
                
                $sql = $minhaConexao->prepare("INSERT INTO produto (`nomeProduto`, `valorProduto`, `qtdProduto`, `imgUrl`, `promocao`, `categoria_idCat`) VALUES ('$nomeProduto', '$valorProduto', '$qtdProduto', '$imgUrl', '$promocao', '$categoria_idCat');");
                $sql->execute();   
                
            }  
        }     
        
                
            
           
    }
    


?>