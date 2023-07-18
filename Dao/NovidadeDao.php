<?php
    require "../Class/Novidade.php";
    class NovidadeDao {
        private $conexao;
        private $tabela = "novidades";
        
        public function __construct() {
            $this->conexao = new Conexao();
        }

        public function ehCadastrado ($novidade = null){
            $novidades = $this->conexao->select($this->tabela, ["id, email"], ["email"=>$novidade->getEmail()]);
            return count($novidades) > 0;
        }
        
        public function inserir ($novidade = null){
            return $this->conexao->insert($this->tabela, $novidade);
        }

        public function listarClientes (){
            return $this->conexao->select($this->tabela, ["*"], ["1"=>"1"]);
        }
    }