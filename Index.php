<?php
    session_start();
    //página que contem as rotas da aplicação
	 	
	//testa a variável url que veio lá do htaccess
	if (isset($_GET['url'])) //se estiver preenchida, pega o valor
	  {
            $url =  strtoupper($_GET['url']);
			echo ($url);
    		switch ($url){
	    		//case "NOVOLIVRO":
					//require "controller/ControladorFormLivro.php";    
				    //$controlador = new ControladorFormLivro();
					//$controlador->processaRequisicao();
					//break;
				case "VIEWS/CADUSER":
					require "controller/ControladorNovoUsuario.php";    
					$controlador = new ControladorNovoUsuario();
					$controlador->processaRequisicao();
					break;
			    case "VIEWS/LOGINUSER":
					require "controller/ControladorLogin.php";
                  $controlador = new ControladorLogin();
                   $controlador->processaRequisicao();
					break;
				//case "ADDITEMCARRINHO":
			//		require "controller/ControladorAddItemCarrinho.php";
			//		require_once 'Model/CarrinhoSession.php';
				//	$carrinhoSession = new CarrinhoSession();
				//	$controlador = new ControladorAddItemCarrinho($carrinhoSession);
				//	$controlador->processaRequisicao();
				//	break;
				//case "CARRINHO":
				//	require "controller/ControladorListaCarrinho.php";
				//	$controlador = new ControladorListaCarrinho();
				//	$controlador->processaRequisicao();
				//	break;
				//case "CARRINHOALTQUANT":
				//	require "controller/ControladorAlteraQuantCarrinho.php";
				//	require_once 'Model/CarrinhoSession.php';
				//	$carrinhoSession = new CarrinhoSession();
				//	$controlador = new ControladorAlteraQuantCarrinho($carrinhoSession);
				//	$controlador->processaRequisicao();
				//	break;
				//case "APAGAITEMCARRINHO":
				//	require "controller/ControladorApagaItemCarrinho.php";
				//	require_once 'Model/CarrinhoSession.php';
				//	$carrinhoSession = new CarrinhoSession();
				//	$controlador = new ControladorApagaItemCarrinho($carrinhoSession);
				//	$controlador->processaRequisicao();
				//	break;
			//	default:
			//	require "controller/ControladorLivroListar.php";
			//	    $controlador = new ControladorLivroListar();
				//    $controlador->processaRequisicao();
				//    break;
			  }
			  }
			  else                     //senão, vai para uma página padrão, neste caso a home do site
                $url = '404.php';
?>
	