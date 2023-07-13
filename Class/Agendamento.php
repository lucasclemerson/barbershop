<?php
    class Agendamento {
        public $data;
        public $descricao;
        public $compareceu;
        public $idCliente;
        public $id;
        
        public function __construct($idCliente=0, $data="", $descricao=null, $compareceu=0, $id=0) {
            $this->idCliente = $idCliente;
            $this->data = $data;
            $this->descricao = $descricao;
            $this->compareceu = $compareceu;
            $this->id = $id;
        }

        public function setIdCliente ($idCliente = 0){
            $this->idCliente = $idCliente;
        }
        public function setData($data = ""){
            $this->data = $data;
        }
        public function setDescricao ($descricao = null){
            $this->descricao = $descricao;
        }
        public function setCompareceu ($compareceu = false){
            $this->compareceu = $compareceu;
        }
        public function setId($id = 0){
            $this->id = $id;
        }


        public function getIdCliente (){
            return $this->idCliente;
        }
        public function getData(){
            return $this->data;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function getCompareceu (){
            return $this->compareceu;
        }
        public function getId(){
            return $this->id;
        }

        /*
        ALTER TABLE agendamentos
        ADD CONSTRAINT fk_agendamento_cliente
        FOREIGN KEY (idCliente) REFERENCES clientes(id);
        */ 

    } 
