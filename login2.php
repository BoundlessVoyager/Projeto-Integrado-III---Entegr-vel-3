<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre na sua conta</title>
</head>
<body>
    <div>
        <form action="Controle/Login.php" method="POST">
            <h1>Entrar</h1>
            <h3>Use seu e-mail e senha para entrar!</h3>
            <input type="email" name="email" placeholder="E-mail" required><br >
            <input type="password" name="senha" placeholder="Senha" required><br >
            <input type="submit" value="Entrar"><br >
            <a href="#">Esqueci a senha</a>
        </form>

        <?php
            if(isset($_SESSION['login'])){
                if($_SESSION['login'] == "Login negado."){
                    echo "<h2>".$_SESSION['login']."</h3>";
                    session_destroy();
                }else{
                    header("Location: index.html");
                }
            }
        ?>

        <div>
            <h1>Ainda não possui conta?</h1>
            <a href="cadastro.php"><button>Registre-se</button></a>
        </div>
    </div>
    
</body>
</html>