<?php 
    require_once 'usuariosDAO.php';

    class Usuario{
        private $cpfUser;
        private $nomeUser;
        private $senhaUser;
        private $emailUSer;
        private $endereco;
        private $cidade;
        private $dataNasc;
        private $permissaoUser;
        private $estado_cepEstado;

        public function getcpfUser(){
            return $this->cpfUser;
        }
        public function getnomeUser(){
            return $this->nomeUser;
        }
        public function getsenhaUser(){
            return $this->senhaUser;
        }
        public function getemailUser(){
            return $this->emailUSer;
        }
        public function getendereco(){
            return $this->endereco;
        }
        public function getcidade(){
            return $this->cidade;
        }
        public function getdataNasc(){
            return $this->dataNasc;
        }
        public function getpermissaoUser(){
            return $this->permissaoUser;
        }
        public function getestado_cepEstado(){
            return $this->estado_cepEstado;
        }
        public function setcpfUser(){
            return $this->cpfUser;
        }
        public function setnomeUser(){
            return $this->nomeUser;
        }
        public function setsenhaUser(){
            return $this->senhaUser;
        }
        public function setemailUser(){
            return $this->emailUSer;
        }
        public function setendereco(){
            return $this->endereco;
        }
        public function setcidade(){
            return $this->cidade;
        }
        public function setdataNasc(){
            return $this->dataNasc;
        }
        public function setpermissaoUser(){
            return $this->permissaoUser;
        }
        public function setestado_cepEstado(){
            return $this->estado_cepEstado;
        }
            
        
         
        public function cadUser(){
            $usuariosDAO = new UsuariosDAO();
            $usuariosDAO->cadUser($this);
       }
        public function loginUser(){
            $usuariosDAO = new UsuariosDAO();
            $usuariosDAO->loginUser($this);
        }
        public function editUser(){
            $usuariosDAO = new UsuariosDAO();
            $usuariosDAO->editUser($this);
        }
    }
?>