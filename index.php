<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./css/main.css">
    <script type="text/javascript" src="./js/index.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <title> Vitalis </title>
</head>
<body>
    <?php
        require_once('header.php');
    ?>

    <main class="conteudo-principal">
        <div class="apresentacao-inicio">

            <div class="msg-boas-vindas">   
                <p id="bem-vindo"> Bem-vindo à Vitalis </p>
                <p id="frase-bem-vindo"> "Onde Cuidamos <br>da <span id="saude-destacado">Sua Saúde</span> com <br>Dedicação,<br> Profissionalismo e<br> Carinho.."</p>
                <p id="frase-fim"> Sua Jornada para o Bem-Estar começa Aqui </p>
            </div>
            <div class="container-doutores">
                <img id="img-doutores" src="./img/doutores_inicio.png" alt="Doutores meramente ilustrativos">
            </div>
        </div>

        <div id="apresentacao-quem-somos" class="quem-somos">
            <p id="titulo-quem-somos"> QUEM<br>SOMOS </p>
            <div class="linha-vertical"></div>
            <p id="texto-quem-somos"> Somos uma clínica médica onde unimos competência técnica, humanização e inovação. Nosso compromisso é promover saúde integral, personalizando cuidados e proporcionando experiências positivas.
                Com uma equipe especializada em diversas áreas médicas, oferecemos desde consultas de rotina até tratamentos avançados. 
                Nossa visão é destacar-nos como referência em saúde, mantendo a excelência, ética, humanização, trabalho em equipe e
                responsabilidade social. Agende sua consulta e embarque conosco na jornada rumo ao bem-estar.</p>
        </div>

        <div id="apresentacao-contato" class="contato">
            <div class="contatos">
                <p id="endereco-vitalis"><i class="fa fa-map" aria-hidden="true"></i> Rua Souza de Melo, nº 123</p>
                <p id="email-vitalis"><i class="fa fa-envelope" aria-hidden="true"></i> clinicavitalis@gmail.com</p>
                <p id="duvidas">Tem dúvidas sobre algo?</p>
                <img src="./img/zap_fale_conosco.png" alt="Fale Conosco WhatsApp">    
            </div>
            <div class="linha-vertical"></div>
            <div>
            <p id="titulo-contato">CONTATO</p>
            </div>
        </div>

    </main>

    <footer class="rodape">

        <div class="rodape-home-page">
            <p id="texto-rodape">Acesse também nossas redes sociais:</p>
            <img id="vitalis-face" src="./img/facebook_logo.png" alt="Facebook Vitalis">
            <img id="vitalis-insta" src="./img/instagram_logo.png" alt="Instagram Vitalis">
        </div>

    </footer>
    
</body>
</html>