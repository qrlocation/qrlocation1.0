
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/sobre.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #E25800;
            color: #FFFFFF;
        }

        /* Aplicar cor de fundo e texto aos contêineres principais */
        .w3-content, .w3-container, .content-container {
            background-color: #E25800;
            color: #FFFFFF;
        }

        /* Ajustar links para que também apareçam em branco */
        a {
            color: #FFFFFF;
        }

        a:hover {
            color: #cccccc; /* Cor diferente ao passar o mouse */
        }

        .content-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }
        .slides-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }
        .slide-column {
            max-width: 300px; /* Limit column width to maintain alignment */
            text-align: center;
            padding: 10px;
        }
        .mySlides {
            display: none;
        }
        .w3-center img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .icon-container {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                align-items: center;
            }
            .slide-column {
                margin-bottom: 40px; /* Add more space between slides on mobile */
            }
        }
        @media (min-width: 769px) {
            .w3-padding-64 {
                padding-top: 32px;
                padding-bottom: 32px;
            }
        }
    </style>
</head>
<body>
<?php
include ("barra.php")
?>
<br><br>
<div class="w3-content w3-container w3-padding-64 w3-center" id="sobre">
    <img src="qrmascote.png" width="150px" size="150px" class="w3-right">
    <img src="locationmascote.png" width="160px" size="160px" class="w3-left">
    <h3>Sobre a App</h3>
    <p>Bem-vindo à inovadora aplicação de gestão de espaços e recursos!<br><br><br> Esta plataforma foi criada para facilitar e otimizar o processo dos serviços de reservas, oferecendo uma solução prática e eficiente para empresas, instituições ou qualquer organização que precise gerenciar múltiplos espaços.</p><br>
    <h3>Como Utilizar a App?</h3><br>
    <p>A utilização da nossa app é bastante simples e pode ser feita de duas maneiras principais:<br>

    <strong>1. Através do QR Code:</strong><br> Quando o utilizador está fisicamente em frente a uma sala, ele pode ler o QR code presente na porta. Isso o direciona para a página específica daquela sala, onde ele pode ver as informações e, dependendo do seu nível de acesso, realizar a reserva.<br><br>

    <strong>2. Remotamente:</strong><br> O utilizador pode acessar a app e clicar no ícone "Salas" na barra de navegação. A partir daí, ele pode visualizar as salas disponíveis e, de acordo com seu nível de acesso, escolher e reservar a sala desejada.</p><br>
    <h3>Níveis de Utilizador</h3><p>
    <strong>Nível 3:</strong><br> Apenas visualiza as informações das salas.<br>
    <strong>Nível 2:</strong><br> Visualiza as informações das salas e pode realizar reservas.<br>
    <strong>Nível 1:</strong><br> Possui poder administrativo total sobre utilizadores, salas e reservas.</p>
</div>
<br>
<div class="w3-content w3-container content-container w3-center">
    <div class="logo-container">
        <h3>QR</h3>
        <img src="mascote.png" width="200" size="200">
        <h3>Location</h3>
    </div>
</div>
<div class="w3-content w3-container content-container">
    <div class="w3-padding-64 w3-right" id="sobre">
        <h3>A Origem da Solução</h3>
        <p>&nbsp;&nbsp;&nbsp;Durante as interações com diversas organizações, <br>as equipes por trás da App observaram um problema comum: <br>A dificuldade em gerenciar reservas de salas de maneira eficaz.<br> Era frequente encontrar conflitos de horários, falta de informações<br> atualizadas sobre a disponibilidade das salas e um processo de<br> reserva complexo e burocrático. Essa lacuna inspirou a criação desta<br> engenhosa aplicação.</p><br><br>
        <h3>Como a App Resolve Esses Problemas?</h3>
        <p>&nbsp;&nbsp;&nbsp;A app QRLocation aborda esses desafios oferecendo uma plataforma<br> centralizada onde todas as informações sobre as salas são facilmente<br> acessíveis. Com funcionalidades de visualização em tempo real, reservas<br> simplificadas e níveis de acesso diferenciados, conseguimos garantir que<br> as reservas sejam feitas de forma rápida e sem conflitos. Além disso, a <br>integração de QR codes permite uma experiência de reserva ainda mais<br> intuitiva e conveniente.</p>
    </div>
    <div class="slides-container">
        <div class="slide-column">
            <div class="mySlides leftSlides w3-animate-opacity">
                <img src="Design.jpg" alt="Image 1" width="200" height="200">
            </div>
            <div class="mySlides leftSlides w3-animate-opacity">
                <img src="Design2.jpg" alt="Image 1" width="200" height="200">
            </div>
            <div class="mySlides leftSlides w3-animate-opacity">
                <img src="Design3.jpg" alt="Image 2" width="200" height="200">
            </div><br>
            <div class="icon-container">
                <a class="w3-button w3-white w3-round w3-hover-light-grey" onclick="plusDivs(-1, 'leftSlides')"><i class="fa fa-angle-left"></i></a><strong>&nbsp;&nbsp;Equipe de Design&nbsp;&nbsp;</strong>
                <a class="w3-button w3-white w3-round w3-hover-light-grey" onclick="plusDivs(1, 'leftSlides')"><i class="fa fa-angle-right"></i></a>
            </div>
            <br>
            <p>A equipe de Design estrutura os aspectos visuais da app e produz desenhos 2D e 3D, assegurando uma interface amigável e intuitiva.</p>
        </div>
        <div class="slide-column">
            <div class="mySlides centerSlides w3-animate-opacity">
                <img src="Informatica.jpg" alt="Image 1" width="200" height="200">
            </div>
            <div class="mySlides centerSlides w3-animate-opacity">
                <img src="Informatica2.jpg" alt="Image 1" width="200" height="200">
            </div>
            <div class="mySlides centerSlides w3-animate-opacity">
                <img src="Informatica3.jpg" alt="Image 2" width="200" height="200">
            </div><br>
            <div class="icon-container">
                <a class="w3-button w3-white w3-round w3-hover-light-grey" onclick="plusDivs(-1, 'centerSlides')"><i class="fa fa-angle-left"></i></a><strong>&nbsp;&nbsp;Equipe de Informática&nbsp;&nbsp;</strong>
                <a class="w3-button w3-white w3-round w3-hover-light-grey" onclick="plusDivs(1, 'centerSlides')"><i class="fa fa-angle-right"></i></a>
            </div>
            <br>
            <p>A equipe de Informática Programa e desenvolve a App, garantindo sua funcionalidade e segurança.</p>
        </div>
        <div class="slide-column">
            <div class="mySlides rightSlides w3-animate-opacity">
                <img src="mayan_sobre2.jpeg" alt="Image 1" width="200" height="200">
            </div>
            <div class="mySlides rightSlides w3-animate-opacity">
                <img src="joao_sobre1.jpeg" alt="Image 1" width="200" height="200">
            </div>
            <div class="mySlides rightSlides w3-animate-opacity">
                <img src="mayan_sobre1.jpeg" alt="Image 2" width="200" height="200">
            </div>
            <div class="mySlides rightSlides w3-animate-opacity">
                <img src="joao_sobre2.jpeg" alt="Image 2" width="200" height="200">
            </div><br>
            <div class="icon-container">
                <a class="w3-button w3-white w3-round w3-hover-light-grey" onclick="plusDivs(-1, 'rightSlides')"><i class="fa fa-angle-left"></i></a><strong>&nbsp;&nbsp;Equipe de Multimédia&nbsp;&nbsp;</strong>
                <a class="w3-button w3-white w3-round w3-hover-light-grey" onclick="plusDivs(1, 'rightSlides')"><i class="fa fa-angle-right"></i></a>
            </div>
            <br>
            <p>A equipe de Multimédia trabalha com a fotografia, filmagem e gestão das redes sociais da app, promovendo nosso produto e mantendo nossos utilizadores informados.</p><br><br>
        </div>
    </div>
</div>
<br><br>

<?php
include ("rodape.php")
?>
<script>
    // Slideshow
    var slideIndices = {
        leftSlides: 1,
        centerSlides: 1,
        rightSlides: 1
    };
    showDivs(slideIndices.leftSlides, 'leftSlides');
    showDivs(slideIndices.centerSlides, 'centerSlides');
    showDivs(slideIndices.rightSlides, 'rightSlides');

    function plusDivs(n, slideClass) {
        showDivs(slideIndices[slideClass] += n, slideClass);
    }

    function showDivs(n, slideClass) {
        var i;
        var x = document.getElementsByClassName(slideClass);
        if (n > x.length) { slideIndices[slideClass] = 1 }
        if (n < 1) { slideIndices[slideClass] = x.length }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndices[slideClass] - 1].style.display = "block";  
    }
</script>