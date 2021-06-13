<?php
 session_start();
 require_once "../model/Conexao.php";
 $minhaConexao = Conexao::getConexao(); 
 $user = $_SESSION["USER_PORTAL"];
 echo $user;
       if( !isset($_SESSION["USER_PORTAL"]) ) {
           //header("location:home.php");
       } 
       //diminue quantidade de item no carrinho
    if(isset($_POST["idCarDiminue"])){
        
        $Id = $_POST["idCarDiminue"];
        $user = $_SESSION["USER_PORTAL"];
        $qtd = $_POST["qtdDiminuir"];
        if($qtd > 0){
            $checaCar = $minhaConexao->prepare("UPDATE carrinho set qtdCar = '{$qtd}' where idCar = '{$Id}' and usuarios_cpfUser = '{$user}'");
            $con_checaCar = $checaCar-> execute();
            if(!$con_checaCar){
                
            } else {
                header('location: pedidos.php');
            }
        }
        
    }
        //aumenta quantidade de item no carrinho

    if(isset($_POST["idCarAumenta"])){
        $Id = $_POST["idCarAumenta"];
        $user = $_SESSION["USER_PORTAL"];
        $qtd = $_POST["qtdAumentar"];
        $checaCar = $minhaConexao->prepare("UPDATE carrinho set qtdCar = '{$qtd}' where idCar = '{$Id}' and usuarios_cpfUser = '{$user}'");
        $con_checaCar = $checaCar-> execute();
        if(!$con_checaCar){
            
        } else {
            header('location: pedidos.php');
        }
    }

    //deleta item do carrinho
    if(isset($_POST["idCar"])){
        $Id = $_POST["idCar"];
        $user = $_SESSION["USER_PORTAL"]; 
        $checaCar = $minhaConexao->prepare("DELETE from carrinho where idCar = '{$Id}' and usuarios_cpfUser = '{$user}'");
        $con_checaCar = $checaCar-> execute();
        if(!$con_checaCar){
            
        } else {
            header('location: pedidos.php');
        }
    }
?>