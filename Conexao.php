<?php   
    require "configuracoes.php";
    
    class Conexao {
        private $conexao;
     
        public function __construct (){
            $this->conexao = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if ($this->conexao->connect_error) {
                die("Falha na conexão: " . $this->conexao->connect_error);
            }
        }

        public function select ($tabela="", $colunas=array("*"), $condicao=array("1"=>"1")){
            $sql = "SELECT " . implode(", ", $colunas) . " FROM $tabela WHERE " . implode("=? AND ", array_keys($condicao)) . "=?";
            
            echo $sql;
            
            $stmt = $this->conexao->prepare($sql);
            if ($stmt) {
                $tipos = str_repeat("s", count(array_keys($condicao)));
                $valores = array_values($condicao); 
                $stmt->bind_param($tipos, ...$valores);
                $stmt->execute();
                $result = $stmt->affected_rows;
                $stmt->close();
                return $result;
            } 
            return [];
        }

        public function insert ($table="", $dados){
            $sql = "INSERT INTO $table (" . implode(", ", array_keys(get_object_vars($dados))) . ") VALUES (";
            $sql .= implode(", ", array_fill(0, count(get_object_vars($dados)), "?")) . ")";
            
            $stmt = $this->conexao->prepare($sql);
            if ($stmt) {
                $tipos = str_repeat("s", count(get_object_vars($dados))); 
                $valores = array_values(get_object_vars($dados));
                $stmt->bind_param($tipos, ...$valores);
                $stmt->execute();
                $result = $stmt->affected_rows;
                $stmt->close();
                return $result;
            } 
            return false;
        }


        //$this->conexao->close();
            

    }