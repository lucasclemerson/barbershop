<?php require "configuracoes.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="<?=BASE_URL?>favicon.ico">
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
    <!-- header-->
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
    <!-- carousel -->
    <div id="carousel">
        <button class="carousel-prev" onclick="previousSlide()">&#10094;</button>
        <div class="carousel-container">
            <div class="carousel">
                <div class="slide"><img src="<?=BASE_URL?>uploads/imagens/carousel-img1.jpg" alt="Imagem 1"></div>
                <div class="slide"><img src="<?=BASE_URL?>uploads/imagens/carousel-img2.jpg" alt="Imagem 2"></div>
                <div class="slide"><img src="<?=BASE_URL?>uploads/imagens/carousel-img3.jpg" alt="Imagem 3"></div>
                <div class="slide"><img src="<?=BASE_URL?>uploads/imagens/carousel-img4.jpg" alt="Imagem 4"></div>
            </div>
        </div>
        <button class="carousel-next" onclick="nextSlide()">&#10095;</button>
    </div>

    <!-- formulario agendamento -->
    <form id="agendamento" class="form-agendamento" action="<?=BASE_URL?>post/agendamento.php" method="POST">
        <h1>Agendamento de Horário</h1>
        <div class="input">
            <label for="nome">Nome completo: <span>*</span></label>
            <input type="text" id="nome" name="nome" maxlength="50" placeholder="Seu nome completo" required>    
        </div>
        <div class="input">
            <label for="email">E-mail: <span>*</span></label>
            <input type="email" id="email" name="email" maxlength="50" placeholder="exemplo@gmail.com" required>    
        </div>
        <div class="input">
            <label for="telefone">Telefone: <span>*</span></label>
            <input type="text" id="telefone" name="telefone" maxlength="20" placeholder="(084) 00000-0000" required>    
        </div>
        <div class="input">
            <label for="data">Agendar para: <span>*</span></label>
            <input min="<?=date('Y-m-d\TH:i')?>" value="<?=date('Y-m-d\TH:i')?>" type="datetime-local" id="data" name="data" required/> 
        </div>
        <br>
        <button type="reset" class="button-danger">Limpar</button>  
        <button type="submit" class="button-info">Enviar</button>  
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="<?=BASE_URL?>js/header.navegation.js"></script>
    <script src="<?=BASE_URL?>js/carousel.js"></script>
    <?php if (isset($_SESSION["alerta"])){ ?>      
        <?php if ($_SESSION["alerta"]["erro"]){ ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: "<?php echo $_SESSION["alerta"]["erro"];?>",
            confirmButtonText: 'OK'
        })
    </script>
            <?php }else{?>
    <script>
        Swal.fire({
            icon: 'success',
            title: "<?php echo $_SESSION["alerta"]["success"];?>",
            confirmButtonText: 'OK'
        })
    </script>
        <?php } ?>
    <?php 
        } 
        session_destroy();
    ?>
</body>
</html>