<?php
    session_start();
    
    if(!isset($_SESSION['login'])){
        header("Location: login.php");    
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/minhasconsultas.css">

    <title>Minhas Consultas</title>
</head>
<body>
    <header class="menu-principal">
        <div class="header-1">
            <div class="logo">
                <img src="./img/logo.png" alt="Logo Vitalis">
                <h1 class="titulo-website"> Vitalis </h1>
            </div>
                
            <div class="menu">
                <ul>
                    <li><a href="index.php" > Início </a></li>
                    <li><a href="index.php#apresentacao-quem-somos" > Quem somos </a></li>
                    <li><a href="index.php#apresentacao-contato" > Contato </a> </li>
                    <li><a href="" > Médicos </a></li>
                    <li><a href="" > Minhas consultas </a></li>
                    
                </ul>
                
            </div>
        <?php
            if(!isset($_SESSION['login'])){
                echo "
                <div class='botao'>
                    <button onclick='fazerLogin()' class='btn'> Fazer Login </button>
                </div>
                ";
            }
        ?>
            <img id="user" src="img/perfil.png" alt="imagem de perfil">
        </div>
    </header>
    
    <main class="consultas-main">
        <div class="consultas-externo">
            <div class="consultas-interno">
                <div class="dados">
                    <div class="dados-pessoais">
                        <h2>Dados Pessoais</h2>
                        <p>Nome: José da Silva Sousas</p>
                        <p>Telefone: (88) 9 1234-5678</p>
                        <p>E-mail: josesilva@gmail.com</p>
                        <p>Data de nascimento: 12/09/1978</p>
                    </div>
                    <div class="dados-consulta">
                        <h2>Informações sobre a consulta</h2>
                        <p>Médico(a): Dra. Camila Silva</p>
                        <p>Especilidade: Psicologia</p>
                        <p>Data da consulta: 01/10/2024</p>
                    </div>
                    
                </div>
            </div>
            <div class="botoes-direita">
                <button>Cancelar Consulta</button>
                <button>Editar Consulta</button>
            </div>
            
        </div>
    </main>

</body>
<script src='js/jquery-3.4.1.min.js'></script>
<script src='js/sweetAlert.js'></script>
<script src='js/del.js'></script>
<!--<script>swal('Atenção','Apagou!','warning');</script>-->
</html>