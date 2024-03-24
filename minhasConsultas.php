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

    <title>Minhas Consultas</title>
</head>
<body>
    <?php
        require_once('header.php');
    ?>
    
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

<script src='js/jquery-3.4.1.min.js'></script>
<script src='js/sweetAlert.js'></script>
<script src='js/del.js'></script>
</body>
</html>