<?php
    session_start();
	require_once('Controle.php');
	require_once('../Modelo/Usuario.php');
	try{
        $usuario = new Usuario();
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha($_POST['senha']);
        $control = new ControleUsuario();
        if($control->verificar($usuario)){
            $_SESSION['login'] = $_POST['email'];
            header("Location: ../index.php");
        }else{
        	$_SESSION['login'] = "E-mail ou senha incorreto.";
            header("Location: ../login.php");
        }
    }catch(Exception $e){
        echo "Erro: $e->getMessage()";
    }
?>