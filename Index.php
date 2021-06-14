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
				case "VIEWS/CADUSERADM":
					require "controller/ControladorNovoUsuarioAdm.php";    
					$controlador = new ControladorNovoUsuarioAdm();
					$controlador->processaRequisicao();
					break;
			    case "VIEWS/LOGINUSER":
					require "controller/ControladorLogin.php";
                    $controlador = new ControladorLogin();
                    $controlador->processaRequisicao();
				   
				   echo"CAI AQUI ";
					break;
			    case "VIEWS/CADPROD":
					require "controller/ControladorNovoProduto.php";
                    $controlador = new ControladorNovoProduto();
                    $controlador->processaRequisicao();
					break;
			  }
			  }
			  else                     //senão, vai para uma página padrão, neste caso a home do site
                $url = '404.php';
?>
	