<?php
    class Usuario{
        private $id;
        private $nome;
        private $email;
        private $senha;
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            $this->email = $e;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($s){
            $this->senha = $s;
        }
    }
?>  