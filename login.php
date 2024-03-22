<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style_login.css">
</head>
<body>
    <section class="container">
        <div class="container-login">
            <h1>Entrar</h1>
            <p>Use seu email e senha para entrar!</p>
            
            <form action="Controle/Login.php" method="post">
                <div class="container-form">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="password" name="senha" id="password" placeholder="Senha" required>
                    <?php
                        if(isset($_SESSION['cadastro'])){
                            echo "<small>".$_SESSION['cadastro']."</small>";
                            session_destroy();
                        }
                        if(isset($_SESSION['login'])){
                            echo "<small>E-mail ou senha incorreto.</small>";
                            session_destroy();
                        }
                    ?>
                    <button class="button-form">Registre-se</button>
                </div>
                <a href="#">Esqueci minha senha</a>
            </form>
        </div>
        
        <div class="container-cadastro">
            <h1>Ainda não possui conta?</h1>
            <a href="cadastro.php"><button class="button-register">Registre-se</button></a>
        </div>
    </section> 
</body>
</html> 