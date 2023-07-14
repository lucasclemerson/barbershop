<?php
    require "../Conexao.php";
    require_once "../Dao/ContatoDao.php"; 

    $contatoDao = new ContatoDao();
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // cors
        if (isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] === BASE_ORIGIN) {
            header('Access-Control-Allow-Origin: ' . BASE_ORIGIN);
            header('Access-Control-Allow-Methods: POST');
            header('Access-Control-Allow-Headers: Content-Type');

            $nome = strip_tags($_POST['nome']);
            $email = strip_tags($_POST['email']);
            $telefone = strip_tags($_POST['telefone']);
            $mensagem = strip_tags($_POST['mensagem']);
            $nome_abreviado = strpos($nome, " ")!==false?explode(" ", $nome)[0]:$nome;
        
          
            $contato = new Contato($nome, $email, $telefone, $mensagem);
            $contatoDao->inserir($contato);

            $_SESSION['alerta'] = ["success"=>$nome_abreviado.", seu contato foi enviado com sucesso!"];
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