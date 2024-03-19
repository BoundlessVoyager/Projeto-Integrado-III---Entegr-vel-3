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
        <form action="#" method="POST">
            <h1>Formulário de Agendamento</h1>
            <h3>Dados Pessoais</h3>

            <label for="Nome">Nome: </label>
            <input type="text" name="nome" value="<?php echo $dados["nome"]; ?>" placeholder="Ex: Luiz" required><br >

            <label for="Data de nascimento">Data de nascimento: </label>
            <input type="data" name="data de nascimento" value="<?php echo $dados["data_de_nascimento"]; ?>" placeholder="(dd/mm/aaaa)" required>

            <label for="Gênero">Gênero: </label>
            
            <select name="gênero">
                <option value=""></option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select><br >

            <label for="Telefone">Telefone: </label>
            <input type="tel" value="<?php echo $dados["telefone"]; ?>" name="telefone" required>

            <label for="Email">E-mail: </label>
            <input type="email" value="<?php echo $dados["email"]; ?>" name="email" required><br >
            <input type="checkbox" name="notificação">Receber notificação no e-mail</input><br >

            <input type="submit" value="Próximo">
        </form>
    </div>
</body>
</html>