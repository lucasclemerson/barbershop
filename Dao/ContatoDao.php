<?php
    require "../Class/Contato.php";
    
    class ContatoDao {
        private $conexao;
        private $tabela = "contato";
        
        public function __construct() {
            $this->conexao = new Conexao();
        }    

        public function inserir ($contato = null){
            return $this->conexao->insert($this->tabela, $contato);
        }

        public function listarContatos (){
            return $this->conexao->select($this->tabela, ["*"], ["1"=>"1"]);
        }
    }