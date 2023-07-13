<?php
    class Cliente{
        
        public $nome;
        public $telefone;
        public $email;
        public $id;

        public function __construct($nome="", $telefone="", $email="", $id=0) {
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->telefone = $telefone;
        }

        public function setNome($nome = ""){
            $this->nome = $nome;
        }
        public function setTelefone($telefone = ""){
            $this->telefone = $telefone;
        }
        public function setEmail($email = ""){
            $this->email = $email;
        }
        public function setId($id = 0){
            $this->id = $id;
        }


        public function getNome(){
            return $this->nome;          
        }
        public function getTelefone(){
            return $this->telefone;          
        }
        public function getEmail(){
            return $this->email;          
        }
        public function getId(){
            return $this->id;
        }

    }