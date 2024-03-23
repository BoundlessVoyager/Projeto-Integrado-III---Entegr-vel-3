<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style_cadastro.css">
</head>
<body>
    <section class="container">
        
        <div class="container-login">
            <h1>Já possui conta?</h1>
            <a href="login.php"><button class="button-login">Faça login</button></a>
        </div>

        <div class="container-cadastro">
            <h1>Criar Conta</h1>
            <p>Crie sua conta agora!</p>

            <form action="Controle/CadastroUsuario.php" method="post">
                <div class="container-form">
                    <input type="text" placeholder="Nome">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="password" name="senha" id="password" placeholder="Senha" required>
                    <?php
                        if(isset($_SESSION['cadastro'])){
                            echo "<small>".$_SESSION['cadastro']."</small>";
                            unset($_SESSION['cadastro']);
                        }
                    ?>
                    <button class="button-form">Registre-se</button>
                </div>
            </form>
        </div>

    </section> 
</body>
</html> 