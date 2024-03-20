<?php
    session_start();
    
    if(!isset($_SESSION['login'])){
        header("Location: login.php");    
    }

    require_once("Controle/Controle.php");
    $controle = new ControleUsuario();
    $dados = $controle->dados($_SESSION['login']);
?>