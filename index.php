<?php require "configuracoes.php";?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberShop &int; Página inicial</title>

    <!-- font style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=Overpass:wght@200&display=swap" rel="stylesheet">
   
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- style do sistema -->
    <link href="<?=BASE_URL?>estilo/global.css" rel="stylesheet" type="text/css">
    <link href="<?=BASE_URL?>estilo/classes.css" rel="stylesheet" type="text/css">
    <link href="<?=BASE_URL?>estilo/responsividade.css" rel="stylesheet" type="text/css">
</head> 
<body>
    <header>
        <div class="logomarca">
            <a href="<?=BASE_URL?>">
                <img height="150" width="auto" src="<?=BASE_URL?>uploads/imagens/logo.png"> 
            </a>
        </div>  
        <button id="button-hamburger" class="button-danger"><i class="bi bi-list"></i></button>
        <nav class="navegacao">
            <ul class="opcoes">
                <li><a href="#agendamento" class="ancor">Agendamento</a></li>
                <li><a href="#profissionais" class="ancor">Profissionais</a></li>
                <li><a href="#ondeestamos" class="ancor">Onde estamos?</a></li>
                <li><a href="#contato" class="ancor">Contato</a></li>
                <li><button class="button-danger">Agendar agora!</button></li>
                <li class="separador">|</li>
                <li><a target="_blank" href="#" class="ancor"><img height="40" src="https://img.icons8.com/?size=512&id=13912&format=png"></a></li>
                <li><a target="_blank" href="#" class="ancor"><img height="40" src="https://img.icons8.com/?size=512&id=32323&format=png"></a></li>
            </ul>
        </nav>
    </header>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="<?=BASE_URL?>js/header.navegation.js"></script>
</body>
</html>