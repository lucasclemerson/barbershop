<?php
    require "../Conexao.php";
    require_once "../Dao/NovidadeDao.php"; 

    $novidadeDao = new NovidadeDao();
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // corsif 
        if(isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] === BASE_ORIGIN) {
            header('Access-Control-Allow-Origin: ' . BASE_ORIGIN);
            header('Access-Control-Allow-Methods: POST');
            header('Access-Control-Allow-Headers: Content-Type');

            $email = strip_tags($_POST['email']);
            $novidade = new Novidade($email);

            if ($novidadeDao->ehCadastrado($novidade)){
                $_SESSION['alerta'] = ["erro"=>"O envio do formulário foi negado pois ele não possui autorização, tente novamente!"];
            }else{
                if ($novidadeDao->inserir ($novidade)){
                    $_SESSION['alerta'] = ["success"=>"O seu e-mail foi enviado com sucesso!"];
                }else{
                    $_SESSION['alerta'] = ["erro"=>"Houve um problema ao inserir seu e-mail em nossa lista de envio, tente novamente!"];
                }
            }
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