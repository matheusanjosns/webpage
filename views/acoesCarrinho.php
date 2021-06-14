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

    //Seleciona entregador do pedido
    if(isset($_POST["idPedido"])){
        $Id = $_POST["idPedido"];
        $entregador = $_POST["Entregador"]; 
        $entrega = $minhaConexao->prepare("INSERT INTO entrega (usuarios_cpfUser, pedidos_idpedido) VALUES ({$entregador}, {$Id})");
        $con_entrega = $entrega-> execute();
        $transito = $minhaConexao->prepare("UPDATE pedidos SET situacao = 'Em transito' WHERE (`idpedido` = {$Id});");
        $transito-> execute();
        
        if(!$con_entrega){
            
        } else {
            header('location: homeSeparador.php');
        }
    }
    //Confirmar Entrega
    if(isset($_POST["numPedido"])){
        $Id = $_POST["numPedido"];
        $data = date('Y/m/d H:i:s');
        $confirmarEntrega = $minhaConexao->prepare("UPDATE pedidos SET  dataEntrega = :dataEntrega, situacao = :situacao WHERE (idpedido = {$Id});");
        $entregue = $confirmarEntrega-> execute(array(
            ':situacao' => 'Entregue',
            ':dataEntrega' => $data,
            ));
        
        if(!$entregue){
            
        } else {
            header('location: homeEntregador.php');
        }
    }
?>