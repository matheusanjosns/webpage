<?php
   require_once "Conexao.php";
   
    class UsuariosDAO{
        public function cadUser(){
            $minhaConexao = Conexao::getConexao(); 
            
    
            if(isset($_POST["CPF"])){
    
                $CPF = utf8_decode($_POST["CPF"]);
                $NOME = utf8_decode($_POST["NOME"]);
                $SENHA = utf8_decode($_POST["SENHA"]);
                $EMAIL = utf8_decode($_POST["EMAIL"]);
                $ENDERECO = $_POST["ENDERECO"];
                $NASCIMENTO = $_POST["NASCIMENTO"];
                $CEP = $_POST["CEP"];
                $CIDADE = $_POST["CIDADE"];
            
            
                    
                $sql = $minhaConexao->prepare("INSERT INTO USUARIOS (cpfUser, nomeUser, senhaUser, emailUser, endereco, cidade, dataNasc, permissaoUser, estado_cepEstado) VALUES('$CPF','$NOME','$SENHA','$EMAIL','$ENDERECO', '$CIDADE','$NASCIMENTO', 'CLIENTE', '$CEP')");
                $sql->execute();   
            }
        }
                public function loginUser(){
                    $minhaConexao = Conexao::getConexao(); 
                    
    
                    if(isset($_POST["CPF"])){
    
                        $CPF = utf8_decode($_POST["CPF"]);
                        
                        $SENHA = utf8_decode($_POST["SENHA"]);
                        
                    
                    
                            
                        $sql = $minhaConexao->prepare("select * from USUARIOS Where cpfUser = '{$CPF}' and senhaUser = '{$SENHA}' ");
                        $sql->execute(); 
                        
                            header("location:home.php"); 

                    }   
        
                }      
    }
?>
