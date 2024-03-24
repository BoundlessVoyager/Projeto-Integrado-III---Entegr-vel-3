<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>

<header class="menu-principal">
        <div class="header-1">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Logo Vitalis" /></a>
                <h1 class="titulo-website"> Vitalis </h1>
            </div>
                
            <div class="menu">
                <ul>
                    <li><a href="index.php" > Início </a></li>
                    <li><a href="index.php#apresentacao-quem-somos" > Quem somos </a></li>
                    <li><a href="index.php#apresentacao-contato" > Contato </a> </li>
                    <li><a href="medicos.php" > Médicos </a></li>
                    <li><a href="minhasConsultas.php" > Minhas consultas </a></li>
                    
                </ul>
                
            </div>
    <?php
        if(!isset($_SESSION['login'])){
            echo "
            <div class='botao'>
                <a href='login.php'><button class='btn'> Fazer Login </button></a>
            </div>
            ";
        }else{
            echo "
            <input type='checkbox' default='false' name='perfil' id='perfil'>
            <label for='perfil'>
                <img id='user' src='img/perfil.png' alt='imagem de perfil'>
            </label>
            <div class='perfil' id='sair'>
                Sair
            </div>";
        }
    ?>    
        </div>
</header>


<script src='js/jquery-3.4.1.min.js'></script>
<script src='js/sweetAlert.js'></script>
<script src='js/del.js'></script>
