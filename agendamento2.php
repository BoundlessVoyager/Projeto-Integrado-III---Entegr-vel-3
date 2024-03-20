<?php
    require_once("Controle/DadosUsuario.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
</head>
<body>
    <div>
        <form action="Controle/DadosAgendamento2.php" method="POST">
            <h1>Formulário de Agendamento</h1>
            <h3>Informações da consulta</h3>

            <label for="Medico">Médico: </label>
            <input type="text" name="medico" placeholder="Dra. Camila da Silva" required>

            <label for="Especialidade">Especialidade: </label>
            <input type="text" name="especialidade" placeholder="Psicóloga" required><br>

            <label for="data_da_consulta">Data da consulta: </label>
            <input type="data" name="data_da_consulta" required>

            <label for="Forma_de_consulta">Forma de consulta: </label>
            <select name="forma_de_consulta">
                <option value="Presencial">Presencial</option>
                <option value="Online">Online</option>
            </select><br >

            <label for="Motivo">Motivo da consulta: </label><br >
            <textarea name="motivo" cols="30" rows="10"></textarea><br >
            <input type="hidden" name="id" value="<?php echo $dados["idUser"]; ?>">

            <input type="submit" value="Próximo">
        </form>
    </div>
</body>
</html>