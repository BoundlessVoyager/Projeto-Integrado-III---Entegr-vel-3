<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta</title>
</head>
<body>
    <div>
        <div>
            <h1>Já possui conta?</h1>
            <a href="#"><button>Faça login</button></a>
        </div>
        <form action="Controle/CadastroUsuario.php" method="POST">
            <h1>Criar Conta</h1>
            <h3>crie sua conta agora</h3>
            <input type="text" name="nome" placeholder="Nome" required><br >
            <input type="email" name="email" placeholder="E-mail" required><br >
            <input type="password" name="senha" placeholder="Senha" required><br >
            <input type="submit">
        </form>
    </div>
    <?php
        if(isset($_SESSION['cadastro'])){
            echo "<h2>".$_SESSION['cadastro']."</h3>";
            session_destroy();
        }
    ?>
</body>
</html>