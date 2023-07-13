<?php
    require "../Class/Agendamento.php";

    class AgendamentoDao{
        private $conexao;
        private $tabela = "agendamentos";

        public function __construct() {
            $this->conexao = new Conexao();
        }

        public function inserir ($agendamento=null){
            return $this->conexao->insert($this->tabela, $agendamento);
        }
       
        public function listarAgendamentos (){
            return $this->conexao->select($this->tabela, ["*"], ["1"=>"1"]);
        } 
    }