<?php
    class Usuario{
        private $id;
        private $nome;
        private $data_de_nascimento;
        private $genero;
        private $telefone;
        private $email;
        private $senha;
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i;
        }
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
        public function getData_de_nascimento(){
            return $this->data_de_nascimento;
        }
        public function setData_de_nascimento($d){
            $this->data_de_nascimento = $d;
        }
        public function getGenero(){
            return $this->genero;
        }
        public function setGenero($g){
            $this->genero = $g;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($t){
            $this->telefone = $t;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($s){
            $this->senha = $s;
        }
    }
?>  