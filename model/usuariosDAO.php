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
            //session_start();

            $minhaConexao = Conexao::getConexao(); 

            
                
            
                //if(isset($_POST['CPF']) && empty($_POST['CPF']) && isset($_POST['SENHA']) && empty($_POST['SENHA'])){
                    echo "QUERY FOI EXECUTADA";
                    $CPF = addslashes($_POST['CPF']);
                    $SENHA = addslashes($_POST['SENHA']);

                    $sql = $minhaConexao->prepare("SELECT * FROM USUARIOS WHERE cpfUser = '$CPF' AND senhaUSer = '$SENHA'");
                     $consulta = $sql->execute();

                      if(!$consulta){
                        die(" FALHA NA CONSULTA");
                      }    
                      $informacao = $sql->fetch(PDO::FETCH_ASSOC);
                      if(empty($informacao)){
                        echo "USUARIO OU SENHA INCORRETO";
                      }else{
                          $_SESSION["USER_PORTAL"] = $informacao["cpfUser"];
                        header('location: home.php');
                      }                     
               //}         
        }      
    }
?>