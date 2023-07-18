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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- style do sistema -->
    <link href="<?=BASE_URL?>estilo/global.css" rel="stylesheet" type="text/css">
    <link href="<?=BASE_URL?>estilo/classes.css" rel="stylesheet" type="text/css">
    <link href="<?=BASE_URL?>estilo/responsividade.css" rel="stylesheet" type="text/css">
</head> 
<body id="inicio">
    <!-- header-->
    <header class="destaque">
        <div class="logomarca">
            <a href="<?=BASE_URL?>">
                <img height="80" width="auto" src="<?=BASE_URL?>uploads/imagens/logo.png"> 
            </a>
        </div>  
        <button id="button-hamburger" class="button-danger"><i class="bi bi-list"></i></button>
        <nav class="navegacao">
            <ul class="opcoes">
                <li><a href="#servicos" class="ancor">Serviços</a></li>
                <li><a href="#profissionais" class="ancor">Profissionais</a></li>
                <li><a href="#ondeestamos" class="ancor">Onde estamos?</a></li>
                <li><a href="#sobrenos" class="ancor">Sobre Nós</a></li>
                <li><a href="#contato" class="ancor">Contato</a></li>
                <li><a href="#agendamento" class="ancor button-yellow">AGENDAMENTO</a></li>
                <li class="separador">|</li>
                <li><a target="_blank" href="#" class="ancor"><img height="40" src="https://img.icons8.com/?size=512&id=13912&format=png"></a></li>
                <li><a target="_blank" href="#" class="ancor"><img height="40" src="https://img.icons8.com/?size=512&id=32323&format=png"></a></li>
                <li><a target="_blank" href="#" class="ancor"><img height="40" src="https://img.icons8.com/?size=512&id=16713&format=png"></a></li>
            </ul>
        </nav>
    </header>

    <main class="main" id="main">
        <div class="novidades">
            <h1>Receba agora mesmo tudo o que há de novo aqui!</h1>
            <p>Novidades, promoções, etc.
            <form action="<?=BASE_URL?>post/novidades.php" method="POST">
                <div class="input-flex">
                    <input type="email" name="email" placeholder="Digite seu melhor e-mail" required>
                    <button class="button-yellow" type="submit">Confirmar</button>
                </div>
            </form>
        </div>
        <div class="celular">

        </div>
    </main>

    <!-- sobre nos -->
    <div class="container">
        <!-- formulario agendamento -->
        <form id="agendamento" class="form-agendamento absolute" action="<?=BASE_URL?>post/agendamento.php" method="POST">
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
            <button type="submit" class="button-yellow">Enviar</button>  
        </form>

        <div class="sobrenos" id="sobrenos">
            <div class="caixa-esquerda">
                <h1>SOBRE NÓS</h1>
                <p>Bem-vindo à Barbershop, o destino definitivo para os homens modernos que buscam um corte de cabelo e barba impecáveis. Nossa barbearia é o lugar onde a tradição se encontra com a moda, proporcionando a você uma experiência única de cuidado masculino.</p>
                <p>Além de cortes de cabelo e barba, oferecemos uma variedade de serviços para atender às suas necessidades de cuidados pessoais. Desde um relaxante tratamento facial até uma massagem revigorante, estamos prontos para ajudá-lo a se sentir revigorado e renovado.</p>
                <p>Venha nos visitar na Barbershop e descubra uma experiência de cuidado masculino incomparável. Nossa equipe está ansiosa para recebê-lo e proporcionar um serviço excepcional, criando uma relação de confiança que o fará voltar sempre. Agende seu horário hoje mesmo e descubra o poder de um bom corte de cabelo e barba na construção de sua confiança e estilo. Na Barbershop, nós cuidamos de você.</p>
                <button type="button" class="button-yellow">QUERO FAZER PARTE!</button>
            </div>
        </div>
    </div>

    <!-- ambiente -->
    <div id="carousel" class="carousel">
        <h1 class="title">Veja de perto nosso ambiente!</h1> 
        <div class="slider-container">
            <div class="slider-content">
                <div class="slider-single">
                    <img class="slider-single-image" src="<?=BASE_URL?>uploads/imagens/carousel/imagem-1.jpeg" alt="---" />
                    <h1 class="slider-single-title">A arte do estilo masculino: uma experiência única na nossa barbearia.
                        <span class="slider-single-likes">
                            <i class="fa fa-heart"></i>
                            <?=rand(100, 300);?>
                        </span>
                    </h1>
                </div>  <div class="slider-single">
                <img class="slider-single-image" src="<?=BASE_URL?>uploads/imagens/carousel/imagem-2.jpg" alt="---" />
                    <h1 class="slider-single-title">Aqui, cada corte é uma obra-prima!
                        <span class="slider-single-likes">
                            <i class="fa fa-heart"></i>
                            <?=rand(100, 300);?>
                        </span>
                    </h1>
                </div>

                <div class="slider-single">
                    <img class="slider-single-image" src="<?=BASE_URL?>uploads/imagens/carousel/imagem-3.jpg" alt="---" />
                    <h1 class="slider-single-title">Um espaço para relaxar, se cuidar e sair com estilo.
                        <span class="slider-single-likes">
                            <i class="fa fa-heart"></i>
                            <?=rand(100, 300);?>
                        </span>
                    </h1>
                </div>  
                
                <div class="slider-single">
                    <img class="slider-single-image" src="<?=BASE_URL?>uploads/imagens/carousel/imagem-4.jpg" alt="1" />
                    <h1 class="slider-single-title">Cortes precisos, barbas bem cuidadas e muito mais. Aqui é o seu lugar.
                        <span class="slider-single-likes">
                            <i class="fa fa-heart"></i>
                            <?=rand(100, 300);?>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
  
    <!-- contato-->
    <div id="contato" class="contato">
        <div class="caixa-direita">
            <h1>CONTATE-NOS</h1>
            <form action="<?=BASE_URL?>post/contato.php" method="POST">
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
                    <label for="mensagem">Mensagem: <span>*</span></label>
                    <textarea id="mensagem" name="mensagem" maxlength="100" placeholder="Envie sua mensagem aqui..." required></textarea>    
                </div>
                <br>
                <button type="reset" class="button-danger">Limpar</button>  
                <button type="submit" class="button-yellow">Enviar</button>  
            </form>
        </div>
    </div>

    <!-- footer -->
    <footer id="footer" class="footer">
        <div class="logo">
            <img width="auto" height="80" src="<?=BASE_URL?>uploads/imagens/logo.png">
        </div>
        <div class="container-opcoes">
            <!-- acesso rápido-->
            <div class="acesso">
                <h2>Acesso Rápido</h2>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#">Profissionais</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#agendamento">Agendamento</a></li>
                </ul>
            </div>
          
            <!-- funcionarios-->
            <div class="acesso">
                <h2>Funcionários</h2>
                <ul>
                    <li><a href="#">Marcos Luís</a></li>
                    <li><a href="#">Antônio Nilo</a></li>
                    <li><a href="#">Pedro vittecete</a></li>
                </ul>
            </div>

            <!-- Horário de funcionamento-->
            <div class="acesso">
                <h2>Horário de funcionamento</h2>
                <ul>
                    <li><a href="#">9h às 18h - Segunda a Sexta, exceto feriados<br>Sáb, das 8:00 às 12:00</a></li>
                </ul>
            </div>

            <!-- Redes sociais-->
            <div class="acesso">
                <h2>Redes sociais</h2>
                <ul>
                    <li><a target="_blank" href="#"><img height="40" src="https://img.icons8.com/?size=512&id=13912&format=png"></a></li>
                    <li><a target="_blank" href="#"><img height="40" src="https://img.icons8.com/?size=512&id=32323&format=png"></a></li>
                    <li><a target="_blank" href="#"><img height="40" src="https://img.icons8.com/?size=512&id=16713&format=png"></a></li>
                </ul>
            </div>
        </div>    
        <div class="copyright">
            <p>&copy;<?=date("Y")?> <strong>BarberShop</strong> &int; Todos os direitos reservados.</p>
            <p>Feito por: Clemerson Lucas de Oliveira</p>
        </div>
        <div class="politicas">
            <a class="ancor" href="#">Política de Privacidade</a>
            <a class="ancor" href="#">Termos de uso</a>
        </div>
    
        <button id="topo" class="button-yellow fixed" onclick="rolarAteOTopo()">
            Subir Página
            <i class="bi bi-arrow-up-circle"></i>
        </button> 
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="<?=BASE_URL?>js/header.navegation.js"></script>
    <script src="<?=BASE_URL?>js/carousel.js"></script>
    <script src="<?=BASE_URL?>js/loader.scrool.js"></script>
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