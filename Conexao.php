<?php   
    require "configuracoes.php";    
    class Conexao {
        private $conexao;
     
        public function __construct (){    
            try {        
                $this->conexao = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Erro na conexão com o banco de dados: " . $e->getMessage();
            }
        }

        public function select ($tabela="", $colunas=array("*"), $condicao){
            try {        
                $placeholders = implode(" = ? AND ", array_keys($condicao)) . " = ?";
                $sql = "SELECT " . implode(", ", $colunas) . " FROM $tabela WHERE $placeholders";
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute(array_values($condicao));
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch(PDOException $e) {
                echo "Erro ao listar dados na tabela ($tabela): " . $e->getMessage();
                return [];
            }
        }

        public function insert ($tabela="", $dados){
            try {
                $colunas = implode(", ", array_keys(get_object_vars($dados)));
                $placeholders = implode(", ", array_fill(0, count(get_object_vars($dados)), "?"));
                $sql = "INSERT INTO $tabela ($colunas) VALUES ($placeholders)";
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute(array_values(get_object_vars($dados)));
                return true;
            } catch(PDOException $e) {
                echo "Erro ao inserir dados na tabela ($tabela): " . $e->getMessage();
                return false;
            }
        }

        public function delete($tabela = "", $condicao){
            try {
                $placeholders = implode(" = ? AND ", array_keys($condicao)) . " = ?";
                $sql = "DELETE FROM $tabela WHERE $placeholders";
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute(array_values($condicao));
                return true;
            } catch (PDOException $e) {
                echo "Erro ao excluir dados na tabela ($tabela): " . $e->getMessage();
                return false;
            }
        }

        public function update($tabela = "", $dados, $condicao){
            try {
                $colunasValores = "";
                foreach ($dados as $coluna => $valor) {
                    $colunasValores .= "$coluna = ?, ";
                }
                $colunasValores = rtrim($colunasValores, ", ");
                $placeholders = implode(" = ? AND ", array_keys($condicao)) . " = ?";
                $sql = "UPDATE $tabela SET $colunasValores WHERE $placeholders";
                $stmt = $this->conexao->prepare($sql);
                $valores = array_merge(array_values($dados), array_values($condicao));
                $stmt->execute($valores);
                return true;
            } catch (PDOException $e) {
                echo "Erro ao atualizar dados na tabela ($tabela): " . $e->getMessage();
                return false;
            }
        }           
    }
?>