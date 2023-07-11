<?php
    require "../Conexao.php";
    require "../Class/Cliente.php";

    class ClienteDao {
        private $conexao;
        private $table = "clientes";
        
        public function __construct() {
            $this->conexao = new Conexao();
        }
        
        public function ehCliente ($cliente = null){
            $clientes = $this->conexao->select($this->table, ["nome, email, telefone"], ["email"=>"clemerson@gmail.com"]);
            
            echo "<br><br>Clientes:" ;
            print_r($clientes);
            
            
            return false;
        }

        public function inserir ($cliente=null){
            return true;
            //return $this->conexao->insert($this->table, $cliente);
        }
       
        public function listar_clientes (){
            return $this->conexao->select($this->table, ["*"]);
        }


    }