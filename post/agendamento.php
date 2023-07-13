<?php
    require "../Conexao.php";
    require_once "../Dao/ClienteDao.php";
    require_once "../Dao/AgendamentoDao.php";

    $cliente = new Cliente();  
    $agendamento = new Agendamento();
    $clienteDao = new ClienteDao();
    $agendamentoDao = new AgendamentoDao();
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // cors
        if (isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] === BASE_ORIGIN) {
            header('Access-Control-Allow-Origin: ' . BASE_ORIGIN);
            header('Access-Control-Allow-Methods: POST');
            header('Access-Control-Allow-Headers: Content-Type');
            
            $cliente->setNome(strip_tags($_POST['nome']));
            $cliente->setTelefone(strip_tags($_POST['telefone']));
            $cliente->setEmail(strip_tags($_POST['email']));
            $nome_abreviado = strpos($cliente->getNome(), " ")!==false?explode(" ", $cliente->getNome())[0]:$cliente->getNome();
        
            // inserir no banco de dados
            if (!$clienteDao->ehCliente($cliente)){
                if (!$clienteDao->inserir($cliente)){
                    $_SESSION['alerta'] = ["erro"=>$nome_abreviado. ", não foi possível criar um usuário para você, tente novamente!"];            
                    header("Location: ../index.php");
                    exit();
                }
            }
            // já temos o cadastro do cliente
            $cliente = $clienteDao->getCliente($cliente->getEmail());
            $agendamento->setIdCliente($cliente->getId());
            $agendamento->setData(strip_tags($_POST['data']));
            $agendamentoDao->inserir($agendamento);
            $_SESSION['alerta'] = ["success"=>$nome_abreviado.", seu agendamento ocorreu com sucesso!"];
   
        }else{
            header('HTTP/1.1 401 Unauthorized');
            $_SESSION['alerta'] = ["erro"=>"O envio do formulário foi negado pois ele não possui autorização, tente novamente!"];
        }
    }else{
        header('HTTP/1.1 405 Method Not Allowed');
        $_SESSION['alerta'] = ["erro"=>"O envio do formulário foi negado pelo método que não foi aceito, tente novamente!"];
    }

    header("Location: ../index.php");
    exit();
