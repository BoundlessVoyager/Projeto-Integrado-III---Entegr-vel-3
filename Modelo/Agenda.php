<?php
    class Agenda{
        private $id;
        private $idUser;
        private $medico;
        private $especialidade;
        private $data_da_consulta;
        private $forma_de_consulta;
        private $motivo;
        
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i;
        }
        public function getIdUser(){
            return $this->idUser;
        }
        public function setIdUser($iu){
            $this->idUser = $iu;
        }
        public function getMedico(){
            return $this->medico;
        }
        public function setMedico($m){
            $this->medico = $m;
        }
        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function setEspecialidade($e){
            $this->especialidade = $e;
        }
        public function getData_da_consulta(){
            return $this->data_da_consulta;
        }
        public function setData_da_consulta($d){
            $this->data_da_consulta = $d;
        }
        public function getForma_de_consulta(){
            return $this->forma_de_consulta;
        }
        public function setForma_de_consulta($f){
            $this->forma_de_consulta = $f;
        }
        public function getMotivo(){
            return $this->motivo;
        }
        public function setMotivo($m){
            $this->motivo = $m;
        }
        
    }
?>  