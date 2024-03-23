<?php
    require_once("Controle/DadosUsuario.php");
    require_once("Controle/Agenda.php");
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
            <input type="checkbox" default="false" name="perfil" id="perfil">
            <label for="perfil">
                <img id="user" src="img/perfil.png" alt="imagem de perfil">
            </label>
            <div class="perfil" id="sair">
                Sair
            </div>
            
        </div>
    </header>
    
    <main class="consultas-main">
        <div class="consultas-externo">
    <?php
        if($cnt == 0){
            echo "
            <div class='vazio'>
                <div>
                    <h1>Você ainda não possui nenhuma consulta.</h1>
                    <h3>Acesse a área de médicos para marcar uma consulta!</h3>
                </div>
            </div>";
        }else{
            for ($i = 0; $i < $cnt; $i++) {
                echo"
                <div class='consultas-interno'>
                    <div class='dados'>
                        <div class='dados-pessoais'>
                            <h2>Dados Pessoais</h2>
                            <p>Nome: {$dados['nome']}</p>
                            <p>Telefone: {$dados['telefone']}</p>
                            <p>E-mail: {$dados['email']}</p>
                            <p>Data de nascimento: {$dados['data_de_nascimento']}</p>
                        </div>
                        <div class='dados-consulta'>
                            <h2>Informações sobre a consulta</h2>
                            <p>Médico(a): {$agenda[$i]['medico']}</p>
                            <p>Especilidade: {$agenda[$i]['especialidade']}</p>
                            <p>Data da consulta: {$agenda[$i]['data_da_consulta']}</p>
                        </div>
                        
                    </div>
                </div>
                <div class='botoes-direita'>
                    <button class='del' value='{$agenda[$i]['idAgenda']}'>Cancelar Consulta</button>
                    <button class='edit' value='{$agenda[$i]['idAgenda']}'>Editar Consulta</button>
                </div>";
            }
        }
    ?>        
        </div>
    </main>

</body>
<script src='js/jquery-3.4.1.min.js'></script>
<script src='js/sweetAlert.js'></script>
<script src='js/del.js'></script>
<!--<script>swal('Atenção','Apagou!','warning');</script>-->
</html>