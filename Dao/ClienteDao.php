<?php
    require "../Class/Cliente.php";
    class ClienteDao {
        private $conexao;
        private $tabela = "clientes";
        
        public function __construct() {
            $this->conexao = new Conexao();
        }
        
        public function ehCliente ($cliente = null){
            $clientes = $this->conexao->select($this->tabela, ["nome, email, telefone"], ["email"=>$cliente->getEmail()]);
            return count($clientes) > 0;
        }

        public function inserir ($cliente = null){
            return $this->conexao->insert($this->tabela, $cliente);
        }

        public function getCliente ($email = ""){
            $clientesArray = $this->conexao->select($this->tabela, ["*"], ["email"=>$email]);
            $objCliente = new Cliente();
            $objCliente->setNome($clientesArray[0]['nome']);
            $objCliente->setEmail($clientesArray[0]['email']);
            $objCliente->setTelefone($clientesArray[0]['telefone']);
            $objCliente->setId($clientesArray[0]['id']);
            return $objCliente;
        }

        public function listarClientes (){
            return $this->conexao->select($this->tabela, ["*"], ["1"=>"1"]);
        }
    }