<?php
    class Contato {

        public $nome;
        public $email;
        public $telefone;
        public $mensagem;
        public $id;

        public function __construct($nome="", $email="", $telefone="", $mensagem="", $id=0){
            $this->nome = $nome;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->mensagem = $mensagem;
            $this->id = $id;
        }

        public function setId($id=""){
            $this->id = $id;
        }
        public function setNome($nome=""){
            $this->nome = $nome;
        }
        public function setEmail($email=""){
            $this->email = $email;
        }
        public function setTelefone($telefone=""){
            $this->telefone = $telefone;
        }
        public function setMensagem($mensagem=""){
            $this->mensagem = $mensagem;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getEmail (){
            return $this->email;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function getMensagem(){
            return $this->mensagem;
        }        
        public function getId(){
            return $this->id;
        }

    }