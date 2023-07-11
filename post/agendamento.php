<?php
    require_once "../Dao/ClienteDao.php";

    $cliente = new Cliente();  
    $clienteDao = new clienteDao();
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $cliente->setNome(strip_tags($_POST['nome']));
        $cliente->setTelefone(strip_tags($_POST['telefone']));
        $cliente->setEmail(strip_tags($_POST['email']));
     
        if ($clienteDao->ehCliente($cliente)){
            echo "<br>é cliente!";
        }else{
            // inserir no banco de dados
            if ($clienteDao->inserir($cliente)){
                echo "<br>Cliente inserido!";            
            }else{
                echo "<br>Cliente não inserido!";            
            }
            
        }


        //$data = strip_tags($_POST['data']);
        //$agendamento = ["nome"=>$nome, "email"=>$email, "data"=>$data, "telefone"=>$telefone];
        $_SESSION['alerta'] = ["success"=>"O envio do agendamento ocorreu com sucesso!"];
    }else{
        $_SESSION['alerta'] = ["erro"=>"O envio do formulário foi negado, tente novamente!"];
    }

    //header("Location: ../index.php");
    //exit();